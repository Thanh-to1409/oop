function revealMessage() {
    document.getElementById('hidden-message').style.display = 'block';
}

document.getElementById('response-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Ngăn chặn hành động gửi mặc định của form

    const response = document.getElementById('response').value;
    const responseOutput = document.getElementById('response-output');

    responseOutput.innerHTML = `<p>Câu trả lời của em: ${response}</p>`;
    document.getElementById('response-form').reset(); // Xóa nội dung textarea sau khi gửi
});
