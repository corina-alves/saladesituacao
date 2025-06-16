<?php include "auth.php"; include "../conexao.php"; ?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Dashboard</title></head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/animations.min.css" integrity="sha512-GKHaATMc7acW6/GDGVyBhKV3rST+5rMjokVip0uTikmZHhdqFWC7fGBaq6+lf+DOS5BIO8eK6NcyBYUBCHUBXA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/css/glightbox.min.css" integrity="sha512-T+KoG3fbDoSnlgEXFQqwcTC9AdkFIxhBlmoaFqYaIjq2ShhNwNao9AKaLUPMfwiBPL0ScxAtc+UYbHAgvd+sjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" integrity="sha512-pmAAV1X4Nh5jA9m+jcvwJXFQvCBi3T17aZ1KWkqXr7g/O2YMvO8rfaa5ETWDuBvRq6fbDjlw4jHL44jNTScaKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" /><!--maps--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.css">
  
  <link href="../css/style.css" rel="stylesheet">
<body>

  <!-- Menu fixo -->
  <header class="navbar">
    <div class="logo">SS-SP <span>SALA DE SITUAÇÃO</span></div>
    <nav>
      <ul class="menu">
        <li><a href="../index.php">Home</a></li>
        <li><a href="upload.php">Enviar Novo Boletim</a></li>
        <!-- <li><a href="#">Columns</a></li>
        <li><a href="#">Columns and Descriptions</a></li> -->
        <li><a href="logout.php">SAIR</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero com imagem de fundo -->
  <section class="hero">
    <div class="hero-content">
      <!-- <h1>ÁREA ADMINISTRATIVA</h1>
      <h2>SALA DE SITUAÇÃO DO ESTADO DE SÃO PAULO</h2> -->
<div class="container">
<h4 class="p-5">Área Administrativa</h4><hr/>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
        <a href="enviarboletimDiario.php">
        <div class="card-body">
            <h5 class="card-title">BOLETIM DIÁRIO</h5>
            <p class="card-text">Inserção de boletins no site da sala de situação do Estado de São Paulo</p>
        </div>
        <div class="card-footer">
            <small class="text-body-secondary"><?php echo date('d/m/Y H:i:s'); ?></small>
        </div>
        </div>
        </a>
  </div> 

  <div class="col">
    <div class="card h-100">
        <a href="enviarboletimMensal.php">
      <div class="card-body">
        <h5 class="card-title">BOLETM MENSAL</h5>
        <p class="card-text">Cadastro de boletins mensais da sala de situação do estado de São Paulo.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"><?php echo date('d/m/Y H:i:s'); ?></small>
      </div>
    </div>
    </a>
  </div>
  <div class="col">
    <div class="card h-100">
         <a href="enviarboletimHidrologico.php">
      <div class="card-body">
        <h5 class="card-title">BOLETIM HIDROLOGICO</h5>
        <p class="card-text">Cadastro de boletim hdrológico do Estado de São Paulo.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"><?php echo date('d/m/Y H:i:s'); ?></small>
      </div>
    </div>
</a>
  </div>

  
</div>

  </section>

  <!-- <h2>Bem-vindo à Área Administrativa</h2>
  <a href="upload.php">Enviar novo boletim</a> | 
  <a href="logout.php">Sair</a> -->

      <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js" integrity="sha512-BwHfrr4c9kmRkLw6iXFdzcdWV/PGkVgiIyIWLLlTSXzWQzxuSg4DiQUCpauz/EWjgk5TYQqX/kvn9pG1NpYfqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/dist/boxicons.min.js" integrity="sha512-VTptlAlSWKaYE3DbrmwNYTzZg1zO6CtoGxplxlHxObgfLiCcRYDBqzTUWE/0ANUmyfYR7R227ZirV/I4rQsPNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/js/glightbox.min.js" integrity="sha512-RBWI5Qf647bcVhqbEnRoL4KuUT+Liz+oG5jtF+HP05Oa5088M9G0GxG0uoHR9cyq35VbjahcI+Hd1xwY8E1/Kg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>

