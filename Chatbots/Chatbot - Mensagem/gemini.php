<?php
header("Content-Type: application/json");

$mensagem = $_POST["mensagem"] ?? "";

$api_key = "";

$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=".$api_key;

$prompt_iot = "Você é um assistente virtual que explica conceitos básicos de enfermagem com IoT.
Explique como se estivesse falando com iniciantes.
Dê exemplos práticos simples.

Pergunta: $mensagem";

$data = [
    "contents" => [
        [
            "parts" => [
                ["text" => $prompt_iot]
            ]
        ]
    ]
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo json_encode(["resposta" => "❌ Erro ao conectar à IA: ".curl_error($ch)]);
    exit;
}

curl_close($ch);

$json = json_decode($response, true);

$resposta = $json["candidates"][0]["content"]["parts"][0]["text"] ?? "❌ IA não respondeu. Verifique sua API Key.";

echo json_encode(["resposta" => $resposta]);