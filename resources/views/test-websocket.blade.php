<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSocket Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1>WebSocket Test</h1>
        <button id="trigger-btn">Trigger Message</button>
        <div id="message-log" style="margin-top: 20px; padding: 10px; border: 1px solid #ccc; min-height: 200px;"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const messageLog = document.getElementById('message-log');
            const triggerBtn = document.getElementById('trigger-btn');
            
            // Add log entry
            function log(message) {
                const entry = document.createElement('div');
                entry.textContent = `${new Date().toLocaleTimeString()}: ${message}`;
                messageLog.appendChild(entry);
            }
            
            // Log initial connection
            log('Page loaded, waiting for WebSocket connection...');
            
            // Add button event listener
            triggerBtn.addEventListener('click', function() {
                log('Triggering message...');
                fetch('/trigger-message')
                    .then(response => response.text())
                    .then(data => {
                        log(`Server response: ${data}`);
                    })
                    .catch(error => {
                        log(`Error: ${error.message}`);
                    });
            });
        });
    </script>
</body>
</html>
