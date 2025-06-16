<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sala de Situação de São Paulo - SSSPDAEE</title>
  <meta content="" name="description"  content="Sala de Situação do Estado de São Paulo, Monitoramento em tempo real, através de radares, satélites e rede telemérica, construção de boletins, relatórios, análises de dados, montiramento de seca junto a ANA, monitoramento de precipitação">
  <meta content="" name="keywords">
  <link href="assets/img/logo/logo.png" rel="icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
    integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
    integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css"
    integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/animations.min.css"
    integrity="sha512-GKHaATMc7acW6/GDGVyBhKV3rST+5rMjokVip0uTikmZHhdqFWC7fGBaq6+lf+DOS5BIO8eK6NcyBYUBCHUBXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/css/glightbox.min.css"
    integrity="sha512-T+KoG3fbDoSnlgEXFQqwcTC9AdkFIxhBlmoaFqYaIjq2ShhNwNao9AKaLUPMfwiBPL0ScxAtc+UYbHAgvd+sjQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css"
    integrity="sha512-pmAAV1X4Nh5jA9m+jcvwJXFQvCBi3T17aZ1KWkqXr7g/O2YMvO8rfaa5ETWDuBvRq6fbDjlw4jHL44jNTScaKg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" /><!--maps--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.css">

  <link href="assets/css/style.css" rel="stylesheet">
  <!-- <link href="assets/css/estilo.css" rel="stylesheet"> -->
</head>
<script>
  window.addEventListener("scroll", function () {
    var menu = document.getElementById("header");
    if (window.scrollY > 50) {
      menu.classList.add("scrolled");
    } else {
      menu.classList.remove("scrolled");
    }
  });

</script>

<body>
  <?php include "menuspgov.php";?>
  <header id="header" class="header  sticky-top"><?php include "nav.php";?></header>
  <!--div class="hero-hidro-index">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-md-2" data-aos="fade-right">
          <h1 style="font-size: 68px; font-weight: none;"><strong>Sala de Situação de São Paulo </strong></h1>
          <p>A Sala de situação do Estado de São Paulo é responsável pelo monitoramento dos recursos hídricos. Esse
            monitoramento é realizado através de <strong>dados de satélites, radares,
              pluviômetros</strong> que são utilizados para análise de chuva e os <strong>fluviômetros</strong>
            utilizados para análise de rios, córregos e outros corpos d'água. </p>
          <center> <a href="https://hidroapp.spaguas.sp.gov.br/" target="_blank" class="btn "
              data-aos="fade-up">HidroApp →</a></center>


        </div>

      </div>
    </div>
  </div-->
  <section class="hero section">
    <img src="assets/img/banner/DSC_7723.JPG" alt="" data-aos="fade-in">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 data-aos="fade-up" data-aos-delay="100" style="font-size:35px" class="p-4">SALA DE SITUAÇÃO <br/>DO ESTADO DE SÃO PAULO</h2>
          <p data-aos="fade-up" data-aos-delay="200" style="text-align:justify">A Sala de situação do Estado de São Paulo é responsável pelo
            monitoramento dos recursos hídricos. Esse monitoramento é realizado através de <strong>dados de satélites,
              radares,
              pluviômetros</strong> que são utilizados para análise de chuva e os <strong>fluviômetros</strong>
            utilizados para análise de rios, córregos e outros corpos d'água.</p>
        <div class="p-5 text-center">
          <a href="https://cth.daee.sp.gov.br/sibh/chuva_agora" target="_blank" class="btn" data-aos="fade-up">Chuva
            Agora →</a>

             <a href="https://hidroapp.daee.sp.gov.br/mapa" target="_blank" class="btn btn-tranparent" data-aos="fade-up">HidroApp →</a>
        </div>

      </div>
<div class="d-flex justify-content-end-flex justify-content-end col-lg-4 offset-lg-2">
  <div class="d-flex align-items-end flex-column mb-3">
  <div class="moniHidro">MONITORAMENTO HIDROLÓGICO</div>
  <div class="buttonI" data-aos="fade-right" data-aos-delay="100"> Precipitação</div>
  <div class="buttonI" data-aos="fade-right" data-aos-delay="100">Níveis de Ros</div>
  <div class="buttonI" data-aos="fade-right" data-aos-delay="100">Níveis de Reservatórios</div>
  <div class="buttonI" data-aos="fade-right" data-aos-delay="100">Cotas de Referência</div>
  <div class="buttonI" data-aos="fade-right" data-aos-delay="100">Eventos Críticos</div>
  <div class="buttonI" data-aos="fade-right" data-aos-delay="100">Outras Variáveis</div>
 
</div>
</div>
      </div>
  </section>


  <section id="objetivo" class="objetivo ">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-last" data-aos="fade-up"
          data-aos-delay="200">
          <img src="assets/img/banner/DSC_7723.JPG" class="img-fluid" alt="">
          <a href="assets/midea/sssp.mp4" class="glightbox pulsating-play-btn"></a>
        </div>

        <div class="col-lg-6 content order-last  order-lg-last" data-aos="fade-up" data-aos-delay="100">
          <h3>Objetivo</h3>
          <p>
            Operando como uma central de monitoramento em tempo real, a sala de situação tem <strong>objetivo</strong>
            de acompanhar condições hidrometeorologicas
            e ocorrências de eventos críticos, além, de <strong>subsidiar a gestão de recursos hídricos</strong> em todo
            o Estado.
          </p>
          <ul>
            <h6> Os objetivos principais da Sala de Situação são:</h6>
            <p><strong>coletar, armazenar, integrar e disponibilizar informações sobre</strong></p>
            <li>
              <i class="bi bi-check-circle"></i>
              
                <h5>precipitações</h5>
             
            </li>
            <li>
              <i class="bi bi-check-circle"></i>
              <div>
                <h5>cotas e vazões dos rios
                </h5>
              </div>
            </li>
            <li>
                       <li>
              <i class="bi bi-check-circle"></i>
              <div>
                <h5>níveis dos reservatórios, principalmente os de regularização;
                </h5>
              </div>
            </li>
            <li>
            <li>
              <i class="bi bi-check-circle"></i>
              <div>
                <h5>níveis dos aquíferos;
                </h5>
              </div>
            </li>
            <li>
            <li>
              <i class="bi bi-check-circle"></i>
              <div>
                <h5>parâmetros necessários para a manutenção do uso sustentável dos recursos hídricos;

                </h5>
              </div>
            </li>
            <li>
              <div class="button">
              <a href="objetivo.php" class="btn btn-tranparent" data-aos="fade-up" style="border:solid 1px #000; color:#000">Leia mais →</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="produtos section-bg">
    <div class="container section-title" data-aos="fade-up">
      <h1 style="font-weight: bold;">Produtos</h1>
      <div class="offset-lg-2 col-lg-8 ">
       Boletins pluviométricos e fluviométricos elaborados pela equipe da sala de Situação do Estado de São Paulo (SS-SP), através acompanhamento do <strong>monitoramento em tempo real</strong> de todo Estado.
      </div>
    </div>
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="prod-item">
            <div class="icon">
              <i class="bi bi-folder-check"></i>
            </div>
            <a href="boletinsDiario.php" class="stretched-link">
              <h3>Boletins Diários</h3>
            </a>
            <div>Boletins <strong>diários</strong> completos, relatando o acontecido de 24h.</div>
          </div>
        </div>
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="prod-item">
            <div class="icon">
              <i class="bi bi-folder-check"></i>
            </div>
            <a href="boletinsMensais.php" class="stretched-link">
              <h3>Boletins Mensais</h3>
            </a>
            <div>Boletns <strong>mensais</strong> pluviometria e estiagem</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="prod-item position-relative">
            <div class="icon">
              <i class="bi bi-cloud-drizzle"></i>
            </div>
            <a href="https://cth.daee.sp.gov.br/" target="_blank" class="stretched-link">
              <h3>Chuva Agora</h3>
            </a>
            <div>Sistema de monitoramento em tempo real, o <strong>Chuva Agora</strong>, através da <strong>rede telemétrica.</strong></div>
          </div>
        </div>
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="prod-item">
            <div class="icon">
              <i class="bi bi-folder-check"></i>
            </div>
            <a href="https://hidroapp.daee.sp.gov.br/" target="_blank" class="stretched-link">
              <h3>HidroApp</h3>
            </a>
            <div>Planejamento, <strong>Monitoramento</strong> e Gestão de Riscos são Essenciais para <strong>Garantir Segurança Hídrica</strong>.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="monitoring section-bg ">
    <div class="container position-relative">
      <div class="row gy-5">
        <div class="content col-xl-4 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
          <h3>Monitoramento</h3>
          <p>
            Monitoramento em <strong>tempo real</strong> através de satélites, radares, pluviometria para análise de
            chuva e fluviometria
            para niveis de rios, córregos e outros cursos d'agua.
          </p>
          <a href="https://cth.daee.sp.gov.br/" target="_blank" class="monitoring-btn align-self-center align-self-xl-start"
            style="text-decoration: none;"><span>Chuva Agora</span> <i class="bi bi-cloud-lightning-rain"></i></a>
        </div>

        <div class="col" data-aos="fade-up" data-aos-delay="200">
          <div class="row">
            <div class=" card icon-box position-relative">
              <a href="https://satelite.inmet.gov.br/CO" target="_blank">
                <!-- <i class="bi bi-tropical-storm"></i> -->
                <img src="assets/img/posts/satelite_GOES_SE_IV_2025-02-20.gif" class="img-fluid">
                <div class="">
                  <h6>Satélites</h6>
                  <p>Para acompanhamento das chuvas e previsões para tomadas de decisões.</p>
                  
                </div>
              </a>
            </div>

            <div class="card icon-box position-relative">
              <a href="https://www.saisp.br/app/index.html" target="_blank">
                <img src="assets/img/posts/radarSpaguas.png" class="img-fluid">
                <div class=""> 
                  <h6>Radares</h6>
                  <p>Radares <a href="https://www.saisp.br/app/index.html" target=_blank><strong>SP-Águas</strong></a>, <a href="https://ipmetradar.com.br/2radarCidades.php" target=_Blank><strong>IpMet</strong></a>, <a href="https://redemet.decea.mil.br/old/modal/radares-meteorologicos/" target=_blank><strong>RedeMet</strong></a> e entre outros, ultilizados para monitorar, registrar e documentar
                    o estado de cada evento.</p>
                </div>
              </a>
            </div>

            <div class="card icon-box position-relative">
              <a href="https://cth.daee.sp.gov.br/sibh/graficos?station_type=plu" target="_blank">
                <img src="assets/img/posts/plu.png" class="img-fluid">
                <div class="">
                  <h6>Pluviometria</h6>
                  <p>Registro de acumulados de chuvas em um período de 1h até 72horas</p>
                </div>
              </a>
            </div>

            <div class="card icon-box position-relative">
              <a href="https://cth.daee.sp.gov.br/sibh/graficos?station_type=flu" target="_blank">
                <img src="assets/img/posts/flu.png" class="img-fluid">
                <div class="">
                  <h6>Fluviometria</h6>
                  <p>Registro de níveis de rios, córregos, piscinões e outros cursos d'agua.</p>
                </div>
            </div></a>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- <section id="Previsão" class="produtos pt-3" style="margin-top: 10px;">
    <div class=" container p-4">
      <h2 class="text-center">Previsão do Tempo</h2>
      <div class="row">
        <div id="previsao" class="card-group previsao"></div>
      </div>
      <div class=""><a href="https://www.cptec.inpe.br/" target="_blank"><i class="bi bi-plus"></i> Para mais previsões
          clique aqui</a></div>
    </div>
  </section> -->

  <section id="parceiros" class="parceiros">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h1 style="font-weight: bold;">Parceiros</h1>
        <div class="mb-4">Parceiros que fazerm parte do monitoramento hidrologico do Estado de São Paulo.</div>
      </div>

      <div class="row">
        <div class="col text-center">
          <a href="https://www.gov.br/cemaden/pt-br" target="_blank"><img src="assets/img/logo/logo_cemaden.png"
              class="img-fluid" alt=""></a>
        </div>
        <div class="col text-center">
          <a href="https://www.iac.sp.gov.br/" target="_blank"><img src="https://www.iac.sp.gov.br/IMG/GERAL/logo.png"
              class="img-fluid" alt=""></a>
        </div>
        <div class="col text-center">
          <a href="https://www.gov.br/ana/pt-br" target="_blank"><img
              src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Logotipo_ANA_-_Ag%C3%AAncia_Nacional_de_%C3%81guas_e_Saneamento_B%C3%A1sico.png"
              class="img-fluid" alt=""></a>
        </div>
        <div class="col text-center">
          <a href="https://fundag.br/" target="_blank"><img
              src="	https://fundag.br/wp-content/uploads/2018/12/logo-site-300x138.jpg" class="img-fluid" alt=""></a>
        </div>
      </div>
    </div>
  </section>

  <!---seta pro top--->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="" style="margin-top: 10px;;">
   <?php include "footer.php";?>
  </footer>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"
    integrity="sha512-BwHfrr4c9kmRkLw6iXFdzcdWV/PGkVgiIyIWLLlTSXzWQzxuSg4DiQUCpauz/EWjgk5TYQqX/kvn9pG1NpYfqg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
    integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/dist/boxicons.min.js"
    integrity="sha512-VTptlAlSWKaYE3DbrmwNYTzZg1zO6CtoGxplxlHxObgfLiCcRYDBqzTUWE/0ANUmyfYR7R227ZirV/I4rQsPNA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/js/glightbox.min.js"
    integrity="sha512-RBWI5Qf647bcVhqbEnRoL4KuUT+Liz+oG5jtF+HP05Oa5088M9G0GxG0uoHR9cyq35VbjahcI+Hd1xwY8E1/Kg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
    integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"
    integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      let iconeDroplet = document.getElementById('icon');
      let context = iconeDroplet.getContext('2d');
      let icon = '\uf043'; // Unicode do ícone fa-droplet
      // Definir o tamanho e a fonte do ícone
      context.font = '38px FontAwesome';
      context.fillStyle = '#00d4ff'; // Cor do ícone
      // Desenhar o ícone no canvas
      context.fillText(icon, 0, 42);
    });

    (function () {
      // Get the modal
      setTimeout(function () {
        const modal = document.getElementById("myModal");
        modal.style.display = "block";
      }, 2000); // 2 segundos após a página estiver pronta para abrir o PopUp
    })();

    function fecharModel() {
      const modal = document.getElementById("myModal");
      modal.style.display = "none";
    }
  </script>

  <script>
    window.addEventListener("scroll", function () {
      const header = document.getElementById("header");
      if (window.scrollY > 50) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    });
  </script>

      <script src="https://saopaulo.sp.gov.br/barra-govsp/js/script-topo.js"></script>
      <script src="https://saopaulo.sp.gov.br/barra-govsp/js/script-contrast.js"></script>
      <script src="https://saopaulo.sp.gov.br/barra-govsp/js/script-tamanho-fonte.js"></script>
      <script src="https://saopaulo.sp.gov.br/barra-govsp/js/script-scroll.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="assets/js/index.js"></script>
  <!-- <script src="assets/js/carregaApi.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</body>

</html>