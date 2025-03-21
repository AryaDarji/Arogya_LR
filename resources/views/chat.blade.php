<!-- resources/views/chat.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat with ChatGPT</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* Basic styles */
        body { font-family: Arial, sans-serif; margin: 20px; }
        #chatbox { width: 100%; max-width: 600px; height: 400px; border: 1px solid #ccc; overflow-y: scroll; padding: 10px; margin-bottom: 10px; }
        #messageInput { width: calc(100% - 100px); padding: 10px; }
        #sendButton { width: 80px; padding: 10px; }
        .message { margin: 5px 0; }
        .user { text-align: right; color: blue; }
        .bot { text-align: left; color: green; }
    </style>
</head>
<body>
    <h1>Chat with ChatGPT</h1>
    <div id="chatbox"></div>
    <input type="text" id="messageInput" placeholder="Type your message here" onkeydown="if(event.key === 'Enter') sendMessage()">
    <button id="sendButton" onclick="sendMessage()">Send</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function sendMessage() {
            const userInputField = $('#messageInput');
            const userInput = userInputField.val().trim();
            if (!userInput) return;

            // Display user's message
            const chatbox = $('#chatbox');
            chatbox.append(`<div class="message user">You: ${userInput}</div>`);

            // Clear input field
            userInputField.val('');

            // Show typing indicator
            chatbox.append(`<div class="message bot" id="typingIndicator">ChatGPT is typing...</div>`);

            // Send the message to the server
            $.ajax({
                url: '{{ route('send.message') }}',
                type: 'POST',
                data: {
                    message: userInput,
                    _token: $('meta[name="csrf-token"]').attr('content'),
                },
                success: function(response) {
                    // Remove typing indicator
                    $('#typingIndicator').remove();

                    // Display bot's response
                    chatbox.append(`<div class="message bot">ChatGPT: ${response.response}</div>`);

                    // Auto-scroll to the bottom
                    chatbox.scrollTop(chatbox[0].scrollHeight);
                },
                error: function() {
                    // Remove typing indicator
                    $('#typingIndicator').remove();

                    // Display error message
                    chatbox.append(`<div class="message bot">ChatGPT: Sorry, there was an error processing your request.</div>`);
                    chatbox.scrollTop(chatbox[0].scrollHeight);
                }
            });
        }
    </script>
    <button id="resetButton" onclick="resetConversation()">Reset Conversation</button>
    <script>
        function resetConversation() {
            $.ajax({
                url: '{{ route('reset.conversation') }}',
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                },
                success: function() {
                    $('#chatbox').empty();
                }
            });
        }
    </script>
</body>
</html>