<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Alfa Cinemas</title>
<!-- O CSS já está linkado aqui, aguardando os nossos comandos -->
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<!-- É aqui que o menu vai aparecer -->
<div id="header-placeholder"></div>
<main class="main-content">
<div class="carousel-container">
<!-- Usamos uma variável CSS no HTML (--bg-url) para facilitar a troca da imagem de
fundo depois -->
<div class="slide" style="--bg-url: url('../imagens/carrossel/filme1_a.webp');">
<!-- Camada 1: O Fundo borrado -->
<div class="slide-background"></div>
<!-- Camada 2: Textos e Botões (Esquerda) -->
<div class="slide-info-left">
<h2 class="movie-title">Crepúsculo</h2>
<div class="movie-tags">
<span class="tag age-16">14</span>
<span class="tag">Sala 1 - VIP (Dublado)</span>
</div>
<p class="movie-sessions-title">Horários de Hoje:</p>
<div class="movie-times">
<span class="time">14:00</span>
<span class="time">16:30</span>
<span class="time">19:00</span>
</div>
<!-- Botões que por enquanto não vão a lugar nenhum -->
<div class="movie-actions">
<a href="#" class="btn-trailer">▶ Ver Trailer</a>
<button class="btn-sinopse">Sinopse</button>
 
</div>
</div>
<div class="slide-poster-wrapper">
<img src="imagens/carrossel/67e15947-d990-481c-93fc-9dfe648d4ad2.jpg" alt="Pôster Oficial" class="slide-poster-img">
</div>
</div>
</div>
<section class="coming-soon-section">
<div class="coming-soon-container">
<div class="coming-soon-text-col">
<span class="coming-soon-badge">Estreia em Abril</span>
<h2 class="coming-soon-title">O Diabo Veste Prada 2</h2>
<p class="coming-soon-desc">
Miranda Priestly está de volta. A moda não espera por ninguém, e a 
concorrência agora é outra.
</p>
<button class="btn-trailer-outline">▶ Assistir ao Teaser</button>
</div>
<div class="coming-soon-poster-col">
<img src="imagens/carrossel/prada2-poster.jpg" alt="Pôster Prada 2"
class="coming-soon-poster-img">
</div>
</div>
</section>
<!-- Botões que por enquanto não vão a lugar nenhum -->


<section class="coming-soon-section1">
<div class="coming-soon-container1">
<div class="coming-soon-text-col">
<span class="coming-soon-badge">Estreia em Maio</span>
<h2 class="coming-soon-title">Pânico 7</h2>
<p class="coming-soon-desc">
Agora sim vc vai saber o que é sentir medo!!
</p>
<button class="btn-trailer-outline">▶ Assistir ao Teaser</button>
</div>
<div class="coming-soon-poster-col">
<img src="imagens/carrossel/filme4.jpg" alt="Pôster Pânico 7"
class="coming-soon-poster-img1">
</div>
</div>
</section>
  
<div class="movie-actions">
 
 
<section class="coming-soon-section3">
<div class="coming-soon-container3">
<div class="coming-soon-text-col3">
<span class="coming-soon-badge3">Estreia em 5 de Março</span>
<h2 class="coming-soon-title3">Cara de um fucinho de outro</h2>
<p class="coming-soon-desc3">
Trocar de corpo foi fácil. Voltar para o seu... é que vai ser o pesadelo.
</p>
<button class="btn-trailer-outline">▶ Assistir ao Teaser</button>
</div>
<div class="coming-soon-poster-col">
<img src="imagens/carrossel/filme2.webp" alt="Pôster Cara de um fucinho de outro"
class="coming-soon-poster-img3">
</div>
</div>
</div>
</div>
</div>

 
<!-- DICA: div gigante provisória só para forçar a rolagem da página -->
 
</main>
</div>
</div>
</div>
</div>
<!-- DICA: div gigante provisória só para forçar a rolagem da página -->
</main>

<script>
// O JavaScript puxa o header.html e joga na div acima
fetch('includes/header.html')
.then(response => response.text())
.then(data => {
document.getElementById('header-placeholder').innerHTML = data;
});
</script>
<div class="social-buttons">
<img src="https://img.icons8.com/?size=100&id=59813&format=png&color=000000" class="btn-social" title="Instagram"><i class="fa-brands fa
instagram"></i></a>

<img src="https://img.icons8.com/?size=100&id=A4DsujzAX4rw&format=png&color=000000" class="btn-social" title="X (Twitter)"><i class="fa-brands fa-x
twitter"></i></a>

<img src="https://img.icons8.com/?size=100&id=37326&format=png&color=000000" class="btn-social" title="YouTube"><i class="fa-brands fa
youtube"></i></a>
<img src="https://img.icons8.com/?size=100&id=87264&format=png&color=000000" class="btn-social" title="Facebook"><i class="fa-brands fa-facebook
f"></i></a>
</div>
</div>
<div class="legal-section">
<div class="copyright">
Copyright &copy; 2026 Alfa Cinemas
</div>
<div class="legal-links">
<a href="#">Política de Privacidade</a>
<a href="#">Termos de uso</a>
</div>
</div> 
</body>
</html>