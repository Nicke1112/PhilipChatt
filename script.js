const chatWindow = document.getElementById('chatWindow');
const logWindow = document.getElementById('logWindow');
const usernameInput = document.getElementById('usernameInput');
const messageInput = document.getElementById('messageInput');
const sendButton = document.getElementById('sendButton');

sendButton.addEventListener('click', sendMessage);

function sendMessage() {
    const username = usernameInput.value.trim();
    const message = messageInput.value.trim();
    if (username !== '' && message !== '') {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message');
        messageElement.innerHTML = `<strong>${username}:</strong> ${message}`;
        chatWindow.appendChild(messageElement);

        const logEntry = document.createElement('div');
        logEntry.classList.add('log-entry');
        logEntry.innerHTML = `<strong>${username}:</strong> ${message}`;
        logWindow.appendChild(logEntry);

        messageInput.value = '';
        chatWindow.scrollTop = chatWindow.scrollHeight;
        logWindow.scrollTop = logWindow.scrollHeight;
    }
}
