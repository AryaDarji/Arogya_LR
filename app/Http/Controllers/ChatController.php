<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
use OpenAI;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function sendMessage(Request $request)
    {
        $userInput = $request->input('message');
    
        // Initialize messages in session
        $messages = Session::get('messages', []);
        if (empty($messages)) {
            $messages[] = ['role' => 'system', 'content' => 'You are a helpful assistant.'];
        }
    
        // Add user's message
        $messages[] = ['role' => 'user', 'content' => $userInput];
    
        // Generate response from ChatGPT
        $responseText = $this->generateChatGPTResponse($messages);
    
        // Add assistant's response
        $messages[] = ['role' => 'assistant', 'content' => $responseText];
    
        // Save messages back to session
        Session::put('messages', $messages);
    
        return response()->json(['response' => $responseText]);
    }

private function generateChatGPTResponse($messages)
{
    try {
        $client = new Client();

        $response = $client->post('https://api.openai.com/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'gpt-4o-mini',
                'messages' => $messages,
                'max_tokens' => 150,
                'temperature' => 0.7,
            ],
        ]);

        $responseBody = json_decode($response->getBody(), true);

        return $responseBody['choices'][0]['message']['content'];
    } catch (\Exception $e) {
        \Log::error('ChatGPT Error: ' . $e->getMessage());
        return "I'm sorry, but I couldn't process your request.";
    }
}
public function resetConversation()
{
    Session::forget('messages');
    return response()->json(['status' => 'Conversation reset.']);
}

}