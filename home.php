<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Doce Eclát - Viva com mais brilho✨</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
  <link rel="icon" href="img/DoceEclátLogo-removebg-preview.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <div id="alertMessage">
    <div class="alert alert-danger" role="alert" id="alertMessagejs">
      Serviço temporariamente indisponível!
    </div>
  </div>
  <header class="main_header">
    <nav class="main_header_nav">
      <div class="main_header_nav_logo">
        <img src="img/DoceEclátLogo.png" alt="Doce Eclát Logo" title="Doce Eclát Logo" width="200px" />
      </div>
      <div class="main_header_menuMobile">
        <i class="ph ph-list menuIcon"></i>
        <div class="menuOptions">
          <a href="index.php">HOME</a>
          <a href="produtos.php">PRODUTOS</a>
          <a href="sobre.php">SOBRE</a>
        </div>
      </div>
      <div class="main_header_nav_links">
        <a href="index.php">HOME</a>
        <a href="produtos.php">PRODUTOS</a>
        <a href="sobre.php">SOBRE</a>
      </div>
    </nav>
    <div class="main_header_optin">
      <p>Adquira todos os melhores doces da região e viva com mais brilho!</p>
    </div>
  </header>

  <section class="publi">
    <div class="publi_text">
      <p>Acumule pontos e adquira experiências</p>
      <div class="publi_text_buttons">
        <button type="button" id="mostrarAlertaBtn">
          Faça parte do Eclát Club
        </button>
        <button type="button" id="mostrarAlertaBtn">
          Consulte seus pontos
        </button>
      </div>
    </div>
  </section>

  <main>
    <section class="main_article">
      <div class="main_article_content">
        <div class="main_article_content_text">
          <h1>É fácil e prático!</h1>
          <p>
            Os seus produtos do Eclát Club agora também podem ser resgatados
            no delivery! Quer novidade melhor do que essa? Agora você
            realmente pode aproveitar cada ponto do Eclát Club da forma que
            preferir. Compre nas lojas, no site, no APP, pontue no clube
            favorito dos EclátLovers e resgate os seus produtos nas lojas
            físicas ou no APP pedindo pelo delivery ou no clique e retire.
          </p>
          <button type="button" id="mostrarAlertaBtn">
            Faça parte do Doce Club
          </button>
        </div>
        <div class="main_article_content_img">
          <img src="https://kopenhagen21.vtexassets.com/assets/vtex.file-manager-graphql/images/b4c4d54c-c264-45c4-bd20-5d77c8f56b95___9556c9263945fa4e9972cef9a3123bcd.png" alt="Eclát Club" title="Eclát Club" />
        </div>
      </div>
    </section>

    <section class="main_images">
      <div class="main_images_prim">
        <img src="https://kopenhagen21.vtexassets.com/assets/vtex.file-manager-graphql/images/1ab3e625-51bf-455d-b1f8-6eec1bf57c64___ddbc80b2cf54300484d753e7907d0f61.png" alt="Eclát Club 2" title="Eclát Club 2" />
      </div>
      <div class="main_images_sec">
        <div>
          <img src="https://kopenhagen21.vtexassets.com/assets/vtex.file-manager-graphql/images/6fbcc263-908d-403e-bcce-4e7a120c49af___9264fa9b428b419d2bf66a393244df95.png" />
        </div>
        <div>
          <img src="https://kopenhagen21.vtexassets.com/assets/vtex.file-manager-graphql/images/6edd5d99-1fbf-490a-99c6-0689835a3ebb___0b53cf8d86de060fba36665568f29ac9.png" />
        </div>
        <div>
          <img src="https://kopenhagen21.vtexassets.com/assets/vtex.file-manager-graphql/images/627dd065-72fe-4f21-8174-0ef0834bee00___9ad4a7286fb49b7d1315a3d24ac49c45.png" />
        </div>
      </div>
    </section>

    <section class="main_optin">
      <div class="main_optin_options">
        <div>
          <h3>Gift Card</h3>
          <p>
            De um #MomentoEclát para quem você gosta com o gift card
            queridinho do momento.
          </p>
          <a href="#">Saiba Mais ></a>
        </div>
        <div>
          <h3>Café Felicidade</h3>
          <p>
            Você sabia que Eclát Club também tem vantagens nas cafeterias Doce
            Eclát?
          </p>
          <a href="#">Saiba Mais ></a>
        </div>
        <div>
          <h3>Seja um franqueado</h3>
          <p>Saiba como abrir uma loja Doce Eclát.</p>
          <a href="#">Saiba Mais ></a>
        </div>
        <div>
          <h3>Baixe o APP</h3>
          <p>Aproveite os benefícios únicos de ser um cliente Eclát Club!</p>
          <a href="#">Saiba Mais ></a>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <main class="footer_main">
      <div class="footer_main_text">
        <div class="footer_main_text_input">
          <h2>Fique por dentro das novidades</h2>
          <input type="text" placeholder="Digite seu nome" />
          <input type="text" placeholder="Digite seu e-mail" />
          <button type="button" id="mostrarAlertaBtn">Cadastrar</button>
        </div>
        <div class="footer_main_text_institucional">
          <h2>Institucional</h2>
          <div class="footer_main_text_institucional_column">
            <div class="footer_main_text_institucional_column_1">
              <a href="#">Sobre a Doce Eclát</a> <br />
              <a href="#">Fale Conosco</a> <br />
              <a href="#">Trabalhe Conosco</a> <br />
              <a href="#">Eclát to Company</a>
            </div>
            <div class="footer_main_text_institucional_column_2">
              <a href="#">Nossas Lojas</a> <br />
              <a href="#">Catálogo Completo</a> <br />
              <a href="#">Seja um Franqueado</a> <br />
              <a href="#">Eclát Club</a>
            </div>
            <div class="footer_main_text_institucional_column_3">
              <a href="#">Regulamento Eclát Club</a> <br />
              <a href="#">Regulamento Café Fidelidade</a> <br />
              <a href="#">Regulamento Convide e Ganhe</a> <br />
              <a href="#">Governaça Corporativa</a>
            </div>
          </div>
        </div>
        <div class="footer_main_text_ajuda">
          <h2>Ajuda e Suporte</h2>
          <div class="footer_main_text_institucional_column">
            <div class="footer_main_text_ajuda_column_1">
              <a href="#">Trocas e Devoluções</a> <br />
              <a href="#">Política de Cookies</a> <br />
              <a href="#">Política de Pagamento</a>
            </div>
            <div class="footer_main_text_ajuda_column_2">
              <a href="#">Política de Entrega</a> <br />
              <a href="#">Politica Promocional</a> <br />
              <a href="#">Política de qualidade <br />
                e segurança dos alimentos</a>
            </div>
            <div class="footer_main_text_ajuda_column_3">
              <a href="#">Política de Privacidade</a><br />
              <a href="#">Dúvidas Frequentes</a><br />
              <a href="#">Termos de Uso</a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</body>

</html>