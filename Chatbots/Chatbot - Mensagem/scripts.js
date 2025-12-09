function mostrarMensagem(texto, classe) {
    const chat = document.getElementById("chat");
    const p = document.createElement("p");
    p.className = classe;
    p.textContent = texto;
    chat.appendChild(p);
    chat.scrollTop = chat.scrollHeight;
}

function enviarMensagem() {
    const msg = document.getElementById("campoMensagem").value;

    if (msg.trim() === "") return;

    mostrarMensagem("Você: " + msg, "mensagem-user");

    document.getElementById("campoMensagem").value = "";

    fetch("gemini.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "mensagem=" + encodeURIComponent(msg)
    })
    .then(res => res.json())
    .then(data => {
        mostrarMensagem("Chatbot: " + data.resposta, "mensagem-bot");
    })
    .catch(() => {
        mostrarMensagem("Chatbot: ⚠️ Erro ao se conectar ao servidor.", "mensagem-bot");
    });
}
