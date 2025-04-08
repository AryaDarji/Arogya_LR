<?php

namespace App\Http\Controllers;

use App\Models\UserQuestion;
use Illuminate\Http\Request;

class UserQuestionController extends Controller
{
    /**
     * Fetch user questions by type
     *
     * @param string $type
     * @return \Illuminate\Http\JsonResponse
     */
    public function getQuestionsByType($type)
    {
        $questions = UserQuestion::where('type', $type)->get();

        return response()->json([
            'success' => true,
            'data' => $questions
        ]);
    }

    /**
     * Fetch intro questions
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIntroQuestions()
    {
        return $this->getQuestionsByType('intro');
    }

    /**
     * Fetch prakruti questions
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPrakrutiQuestions()
    {
        return $this->getQuestionsByType('prakruti');
    }

    /**
     * Get specific question with any followup questions
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getQuestionWithFollowups($id)
    {
        $question = UserQuestion::findOrFail($id);
        
        return response()->json([
            'success' => true,
            'data' => $question
        ]);
    }

    /**
     * Store a new question
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'ui_type' => 'required|string',
            'question' => 'required|string',
            'options' => 'nullable|array',
            'have_followup' => 'boolean',
            'followup_questions' => 'nullable|array'
        ]);

        $question = UserQuestion::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Question created successfully',
            'data' => $question
        ], 201);
    }

    /**
     * Update an existing question
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $question = UserQuestion::findOrFail($id);
        
        $validated = $request->validate([
            'type' => 'string',
            'ui_type' => 'string',
            'question' => 'string',
            'options' => 'nullable|array',
            'have_followup' => 'boolean',
            'followup_questions' => 'nullable|array'
        ]);

        $question->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Question updated successfully',
            'data' => $question
        ]);
    }

    /**
     * Delete a question
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $question = UserQuestion::findOrFail($id);
        $question->delete();

        return response()->json([
            'success' => true,
            'message' => 'Question deleted successfully'
        ]);
    }
}