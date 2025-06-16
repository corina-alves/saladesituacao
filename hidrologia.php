<?php include "conexao.php";?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hidrologia - Sala de Situação do estado de São paulo - SP Águas</title>
  <meta content="Rede Hidrológica do Estado de São Paulo, monitoramento dos pontos telemétricos." name="description">
  <meta content="" name="keywords">
  <link href="assets/img/logo/logo.png" rel="icon">
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

  <link href="assets/css/style.css" rel="stylesheet">
  <script>
    window.addEventListener("scroll", function() {
        var menu = document.getElementById("header");
        if (window.scrollY > 50) {
            menu.classList.add("scrolled");
        } else {
            menu.classList.remove("scrolled");
        }
    });
    
    </script>
</head>

<body>
  <?php include "menuspgov.php";?>
  <header id="header" class="header  sticky-top"><?php include "nav.php";?></header>

    <!-- <section class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2><strong style="font-weight: 900; font-size: 40px;">HIDROLOGIA</strong></h2>
            <p>A Rede Hidrológica Básica do Estado de São Paulo, iniciada na década de 1880, é operada pelo DAEE desde 1951. É a maior fonte de dados hidrológicos básicos quantitativos do Estado, medindo chuvas, vazões de rios, níveis de água subterrâneas e sedimentos. Sua função é definir a oferta de água, espacial e temporalmente..</p>
            <p>Solicitações de dados e informações:<strong> hidrologia@daee.sp.gov.br</strong> </p>
        </div>
        </div>
      </div>
    </section> -->
    <!-- <div class="hero-hidro">
      <div class="container">
        <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
          <h1><strong>Hidrologia</strong></h1>
          <p>A Rede Hidrológica Básica do Estado de São Paulo, iniciada na década de 1880, é operada pelo DAEE desde 1951. É a maior fonte de dados hidrológicos básicos quantitativos do Estado, medindo chuvas, vazões de rios, níveis de água subterrâneas e sedimentos. Sua função é definir a oferta de água, espacial e temporalmente..</p>
          <p>Solicitações de dados e informações:<strong> hidrologia@spaguas.sp.gov.br</strong></p>
          <a href="https://cth.daee.sp.gov.br/sibh/" target="_blank" class="btn" data-aos="fade-up">Dados Hidrológicos →</a>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <img class="img-fluid" src="assets/img/posts/ClicoHidrográfico_baixares.jpg">
          </div>
      </div>
      </div>
  </div> -->
      <section class="top-hero">
        <img class="img-fluid" src="assets/img/ponteNova.jpg">
          <div class="container">
            <div class="row">
       <div class="col-lg-6 offset-lg-6" data-aos="fade-right">
          <h1><strong>Hidrologia</strong></h1>
          <p>Conheça os produtos da Rede Hidrológica Básica do Estado de São Paulo, operada pelo Governo de SP desde 1951.
          <!-- <a href="boletinsDiario.php" class="btn" data-aos="fade-up">Boletins →</a> -->
        </div>
        <!-- <div class="col-lg-6" data-aos="fade-left">
          <img class="img-fluid" src="assets/img/posts/boletim.png">
        </div> -->
        </div>
        </div>
    </section>
   <!-- <section id="noticias" class="noticias pt-4">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-8">
          <img class="img-fluid" src="assets/img/posts/balancoHidrico.jpg">
        </div>
        <div class="col-lg-4">
          <div class="noticiasRecentes">
            <h2 class="produtos text-center p-3" style="font-size: 30px; border: none;;">
              BALANÇO <strong style="font-weight: 600; font-size:32px; ">HÍDRICO</strong></h2>
            <div class="noticiasRecentes-item recent-posts p-3">
              <p> Estudo de Viabilidade de Implantação – EVI (Anexo II) de todos os usos dos recursos hídricos
                superficiais ou subterrâneos do empreendimento a ser outorgado. Apresentar ainda o fluxograma
                quantitativo com detalhamento de todos os usos e outras fontes (superficiais, subterrâneos ou
                fornecidos por terceiros, incluindo lançamentos em rede, solo, fossa séptica, poços de remediação e
                outros), de forma a ser conhecido o <strong>balanço hídrico </strong>do empreendimento.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    <section id="" class="conteudo pt-4" >
      <div class="container">
        <div class="row content p-5">
            <p>A Rede Hidrológica Básica do Estado de São Paulo, iniciada na década de 1880, é operada pela SP Águas desde 1951. É a maior fonte de dados hidrológicos básicos quantitativos do Estado, medindo chuvas, vazões de rios, níveis de água subterrâneas e sedimentos. Sua função é definir a oferta de água, espacial e temporalmente.</p>

<p>Para mais informações: hidrologia@spaguas.sp.gov.br</p>
          <div class="col-md-5" data-aos="fade-right">
            <img src="img/WS40FLUV.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
            <h3>Estação Fluviométrica</h3>
         
           <p>Uma <strong>estação PCD fluviométrica </strong>(Plataforma de Coleta de Dados fluviométrica) é um equipamento automático utilizado para<strong> monitorar o nível da água de rios, córregos, represas ou outros corpos d’água, </strong>com o objetivo principal de acompanhar a variação da vazão ao longo do tempo. Essas estações fazem parte de uma rede de monitoramento hidrológico fundamental para a gestão dos recursos hídricos,<strong> prevenção de desastres naturais</strong> (como enchentes e estiagens) e planejamento ambiental.</p>
            <h5><i class="bi bi-arrow-right"></i><strong>Funcionamento</strong></h5>
          <p><i class="bi bi-record-fill"></i> Sensor de nível: Pode usar tecnologias como pressão, ultrassom ou radar para medir o nível da água com alta precisão.</p>

          <p><i class="bi bi-record-fill"></i> Transmissão remota de dados: Envia as informações coletadas em tempo real ou em intervalos regulares por telemetria (satélite, GSM, rádio ou internet).</p>

          <p><i class="bi bi-record-fill"></i> Energia solar: Em geral, funciona com painel solar e bateria, permitindo operação autônoma em locais remotos.</p>

          <p><i class="bi bi-record-fill"></i> Registro em banco de dados: Os dados são armazenados em sistemas centralizados, podendo ser acessados por órgãos gestores ou plataformas públicas.</p>
          </div>
        </div>

        <div class="row content pt-5">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="img/plu.webp" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1 p-4" data-aos="fade-right" >
            <h3>Estação Pluviométrica</h3>
            <p class="">
              Uma <strong>Estação Pluviométrica</strong> é uma equipamento utilizado para o monitoramento remoto das chuvas em tempo real. Instaladas em pontos estratégicos, essas estações fazem parte das redes de monitoramento hidrometeorológico e são fundamentais para a gestão dos recursos hídricos, alerta de desastres naturais e estudos climatológicos.
            </p>
            <h5><i class="bi bi-arrow-right"></i><strong>Funcionamento</strong></h5>
           <p><i class="bi bi-record-fill"></i> Utiliza um pluviógrafo de báscula que mede a quantidade de chuva acumulada em milímetros (mm).</p>

           <p><i class="bi bi-record-fill"></i> Cada basculada do coletor corresponde a um volume específico de água.</p>

           <p><i class="bi bi-record-fill"></i> A estação realiza a <strong>coleta, armazenamento e transmissão dos dados</strong> automaticamente via comunicação satelital, GSM, rádio ou internet.</p>
          </div>
        </div>

      </div>
    </section>

    <section id="geral" class="geral">
      <div class="container">
        <div class="row">
          <section id="" class="">
            <div class="container" data-aos="fade-up">
              <div class="row">
        
                  <table class="table table-striped" >
                    <thead>
                      <tr>
                        <th scope="col">Entidade</th>
                        <th scope="col">Parâmetros</th>
                        <th scope="col">Início</th>
                        <th scope="col">Site</th>
                        <th scope="col">Postos</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">IAC</th>
                        <td>HM de superfície evapotranspiração</td>
                        <td>1889</td>
                        <td>www.iac.sp.gov.br</td>
                        <td>150</td>
                      </tr>
                      <tr>
                        <th scope="row">CETESB</th>
                        <td>Qualidade de água</td>
                        <td>1974</td>
                        <td>www.cetesb.sp.gov.br</td>
                        <td>400</td>
                      </tr>
                      <tr>
                        <th scope="row">SP-ÁGUAS</th>
                        <td>Vazões, Chuvas A. Suberrânea</td>
                        <td>1886</td>
                        <td>www.spaguas.sp.gov.br</td>
                        <td>900</td>
                      </tr>
                      <tr>
                        <th scope="row">ANA</th>
                        <td>Vazões, Chuvas, Sedimentos, QA</td>
                        <td>1920</td>
                        <td>www.ana.gov.br</td>
                        <td>250</td>
                      </tr>
                      <tr>
                        <th scope="row">CEMADEN</th>
                        <td>Chuvas, Níveis</td>
                        <td>2012</td>
                        <td>www.cemaden.org.br</td>
                        <td>700</td>
                      </tr>
                      <tr>
                        <th scope="row">CPRM</th>
                        <td>A. Subterrânea</td>
                        <td>2029</td>
                        <td>www.cprm.gov.br</td>
                        <td>17</td>
                      </tr>
                    </tbody>
                  </table>
                  <small class="">Obs: Há interação regular com CBHs <strong>nível regional</strong>, IAC/Fundag e CETESB <strong>estaduais</strong>, com ANA e CPRM em <strong>nível Federal</strong>.</small>
                </div>
                </section>



                
                <section  class="produtos section p-5" >
                  <div class="container section-title" data-aos="fade-up">
                    <h2>SIBH, Banco de dados, Sistema de Alerta e Rede</h2>
                    <p>Sistemas para estudos hidrologicos, consultas de dados históricos, alertas de chuva e muito mais</p>
                  </div>
            
                  <div class="container">
                    <div class="row gy-4">
                      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="prod-item position-relative">
                          <div class="icon">
                            <i class="bi bi-folder2-open"></i>
                          </div>
                          <a href="https://cth.daee.sp.gov.br/sibh/" target="_blank" title="SIBH-Hidrologia" class="stretched-link">
                            <h3>SIBH-Hidrologia Situação e Alerta</h3>
                          </a>
                          <p>(Situação hidrológica, estatísticas, análises hidrológicas)</p>
                        </div>
                      </div>
            
                      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="prod-item position-relative">
                          <div class="icon">
                            <i class="bi bi-folder2-open"></i>
                          </div>
                          <a href="http://ph.daee.sp.gov.br/Fluviometricos" target="_blank" title="Banco de dados hidrologicos - SP-Águas" class="stretched-link">
                            <h3>Banco de dados hidrológicos BDH - SP-Águas</h3>
                          </a>
                          <p>Verifique o banco de dados hidrológicos do SP-Águas. Estamos atualmente em fase de verificação de consistência. Caso encontre algum problema, entre em contato através do e-mail: <strong>hidrologia@spaguas.sp.gov.br</strong>.</p>
                        </div>
                      </div>
            
                      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="prod-item position-relative">
                          <div class="icon">
                            <i class="bi bi-arrow-down-square"></i>
                          </div>
                          <a href="https://www.saisp.br/online/produtos-publicos/" target="_blank" title="Sistem a de Alerta" class="stretched-link">
                            <h3>Sistema de Alerta</h3>
                          </a>
                          <p>O SAISP gera a cada cinco minutos boletins sobre as chuvas e suas consequências na cidade de São Paulo.</p>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="prod-item position-relative">
                          <div class="icon">
                            <i class="bi bi-pin-map"></i>
                          </div>
                          <a href="https://drive.google.com/file/d/0B_u4kNEXhneaeE5xaHJVUENfZWc/view?resourcekey=0-e5RLhEbAmwHAbrpSW-y6yw" target="_blank" class="stretched-link">
                            <h3>Regionalização Hidrológica</h3>
                          </a>
                          <p>Faça o download do software de Regionalização.</p>
                        </div>
                      </div>
                      
                      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="prod-item position-relative">
                          <div class="icon">
                            <i class="bi bi-droplet"></i>
                          </div>
                          <a href="https://www.spaguas.sp.gov.br/site/hidrometeorologia/" target="_blank" title="Rede Hidrologica" class="stretched-link">
                            <h3>Rede Hidrológica</h3>
                          </a>
                          <p>Os principais índices climatológicos em várias região do Estado. A Rede Hidrometeorológica do SP-Águas operou de 1970 a 1995</p>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="prod-item position-relative">
                          <div class="icon">
                            <i class="bi bi-cloud-lightning-rain"></i>
                          </div>
                          <a href="https://cth.daee.sp.gov.br/sibh/chuva_agora" target="_blank" title="SIBH - Chuva Agora" class="stretched-link">
                            <h3>Chuva Agora</h3>
                          </a>
                          <p>Permite condensar de maneira prática o índice de precipitações ocorridas entre 1 e 72 horas nas 972 estações distribuídas em território paulista.</p>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="prod-item position-relative">
                          <div class="icon">
                            <i class="bi bi-box-arrow-in-down"></i>
                          </div>
                          <a href="https://www.sspcj.org.br/" target="_blank" title="PCJ- Sala de Situação Piracicaba" class="stretched-link">
                            <h3>Sala de Situação PCJ</h3>
                          </a>
                          <p>Acesse os boletins da Região da bacia dos rios Piracicaba, Capivari e Jundiaí.</p>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="prod-item position-relative">
                          <div class="icon">
                            <i class="bi bi-boxes"></i>
                          </div>
                          <a href="https://pt.scribd.com/document/103336296/TRANSPORTE-SOLIDO-POR-SUSPENSAO-EM-RIOS-PAULISTAS-Livro" target="_blank" title="Sedimentometria" class="stretched-link">
                            <h3>Sedimentometria</h3>
                          </a>
                          <p>Quantificar as erosões ocorridas nos vários tipos de solo no Estado. Transporte Sólido por Suspensão em Rios Paulistas</p>
                        </div>
                      </div>

                    </div>
                  </div>
                </section>
                </div>
              </section>
  <!-- ======= Footer ======= -->
  <footer id="footer">
     <?php include "footer.php";?>
    <!-- <script src="assets/js/base.js"></script> -->
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js" integrity="sha512-BwHfrr4c9kmRkLw6iXFdzcdWV/PGkVgiIyIWLLlTSXzWQzxuSg4DiQUCpauz/EWjgk5TYQqX/kvn9pG1NpYfqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/dist/boxicons.min.js" integrity="sha512-VTptlAlSWKaYE3DbrmwNYTzZg1zO6CtoGxplxlHxObgfLiCcRYDBqzTUWE/0ANUmyfYR7R227ZirV/I4rQsPNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/js/glightbox.min.js" integrity="sha512-RBWI5Qf647bcVhqbEnRoL4KuUT+Liz+oG5jtF+HP05Oa5088M9G0GxG0uoHR9cyq35VbjahcI+Hd1xwY8E1/Kg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>