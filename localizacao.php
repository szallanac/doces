<?php
$endereco = 'Rua das Flores, 123 - Centro, São Paulo - SP'; // exemplo
$cep = '01000-000'; // exemplo
$horarios = ['Terça a sexta: 10h às 19h', 'Sábado: 9h às 17h', 'Domingo e segunda: fechado'];
$mapa = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($endereco);
function e($t){ return htmlspecialchars($t, ENT_QUOTES, 'UTF-8'); }
?><!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Onde estamos · Forninho da Lili</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;700&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">
<style>body{margin:0;background:#fbf3ea;color:#5a3a3a;font-family:'Nunito Sans',sans-serif}.wrap{max-width:900px;margin:0 auto;padding:40px 20px}h1{font-family:'Cormorant Garamond',serif;font-size:52px;margin:0 0 20px}h1 span{color:#d77a8f}.card{background:#fff;border-radius:24px;padding:32px;margin-bottom:20px}a.btn{display:inline-block;background:#d77a8f;color:#fff;padding:14px 26px;border-radius:999px;text-decoration:none;font-weight:700}a.back{color:#d77a8f}iframe{width:100%;height:320px;border:0;border-radius:18px}</style></head><body>
<div class="wrap"><a class="back" href="doceria-v2.php">← Voltar para a doceria</a>
<h1>Onde <span>estamos</span></h1>
<div class="card"><h2>Endereço</h2><p><?= e($endereco) ?><br>CEP <?= e($cep) ?></p><a class="btn" href="<?= e($mapa) ?>" target="_blank" rel="noopener noreferrer">Ver no Google Maps</a></div>
<div class="card"><h2>Horários</h2><ul><?php foreach($horarios as $h): ?><li><?= e($h) ?></li><?php endforeach; ?></ul></div>
<div class="card"><iframe src="https://www.google.com/maps?q=<?= rawurlencode($endereco) ?>&output=embed" loading="lazy"></iframe></div>
</div></body></html>