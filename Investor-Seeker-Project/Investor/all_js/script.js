function sendMessage() {
    const messageInput = document.getElementById('messageInput');
    const chatBox = document.getElementById('chatBox');
    
    const message = messageInput.value;
    if (message.trim() !== '') {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'send_message.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                const newMessage = document.createElement('p');
                newMessage.textContent = 'You: ' + message;
                chatBox.appendChild(newMessage);
                
                messageInput.value = '';
                
                chatBox.scrollTop = chatBox.scrollHeight;
            }
        };
        xhr.send('message=' + encodeURIComponent(message));
    }
}
