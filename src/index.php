<?php

require 'db.php';

$productQuery = $pdo->query("SELECT * FROM public.products");

$productQueryResult = $productQuery->fetchAll()

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    /*Global */
    :root {
      --primary-color: #1C3657;
      --primary-color-lighter: #375479;
      --secondary-color: #FF9121;
      --secondary-color-select: rgb(208, 120, 32)1;
    }

    body {
      margin: 0;
      padding: 0;
    }

    /* Header */

    header {
      z-index: 3;
      background-color: var(--primary-color);
      height: 70px;
      width: 100%;
      padding: 0px 35px 0px 35px;
      display: flex;
      position: sticky;
      top: 0;
      flex-direction: row;
      box-sizing: border-box;
      align-items: center;
    }

    #nav-icon-header {
      display: none;
      height: 30px;
      width: auto;
    }

    #logo-header {
      height: 100%;
      width: auto;
    }

    #texto-especialista-header {
      color: white;
      margin: 0px 20px 0px 20px;
      padding: 0px 0px 0px 10px;
      font-size: 14px;
      box-shadow: rgb(179, 179, 179) -1px 0px 0px 0px;
    }

    #whatsapp-link-header {
      color: white;
      text-decoration: none;
    }


    #cart-wrapper-header {
      margin-left: auto;
      display: flex;
      align-items: center;
      height: 100%;
      width: auto;
      position: relative;
    }

    #icon-carrinho-header {
      margin-left: auto;
      height: 40px;
      width: auto;
    }

    #red-counter-header {
      position: absolute;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: red;
      border-radius: 100%;
      top: 4px;
      left: 30px;
      height: 15px;
      width: 15px;

    }

    #search-wrapper-header {
      display: inline-flex;
      height: 100%;
      position: relative;
      align-items: center;
    }

    .hyperlink-header {
      margin-left: auto;
      color: white;
      text-decoration: none;
      margin-left: 25px;
    }

    #search-wrapper-header form {
      display: inline-flex;
      align-items: center;
      height: 100%;
    }

    #search-wrapper-header form input {
      box-sizing: border-box;
      height: 40px;
      width: 350px;
      border-radius: 5px;
      border: none;
      padding: 0px 10px;
    }

    #search-wrapper-header form button {
      position: absolute;
      left: 100%;
      transform: translateX(-100%);
    }

    #search-wrapper-header form button img {
      height: 20px;
    }

    .btn-search-submit {
      background-color: transparent;
      border: none;
      cursor: pointer;
    }

    #user-wrapper-header {
      margin-left: 20px;
      display: flex;
    }

    #user-wrapper-header a img {
      height: 40px;
      display: flex;
    }

    /* Nav bar */

    nav {
      justify-content: center;
      position: sticky;
      z-index: 3;
      height: 30px;
      width: 100%;
      background-color: var(--secondary-color);
      display: flex;
      top: 70px;
      direction: row;
      margin: 0;
      padding: 0;
    }

    nav ul {
      margin: 0px;
      display: inline-flex;
      padding: 0px;
      height: 30px;
    }

    nav li {
      padding: 0 10px 0 10px;
      height: 30px;
      align-items: center;
      display: inline-flex;
    }



    .wrapper-dropdown-menu {
      min-width: 1000px;
      background-color: var(--primary-color-lighter);
      transform: translateX(-50%);
      left: 50%;
      top: 100%;

      display: none;
      position: absolute;
      border-radius: 0px 0px 20px 20px;


    }

    .wrapper-dropdown-menu a {
      color: white;
      text-decoration: none;
      margin: 10px;
      display: block;
    }


    nav li:hover {
      background-color: #e18120;
    }

    nav li:hover .wrapper-dropdown-menu {
      display: grid;
      grid-template-columns: repeat(4, 1fr);

      gap: auto;
    }



    /* Imagem de fundo */

    #background-img-container {

      width: 100%;
      background-color: black;
      position: relative;
    }

    #background-img {
      max-height: 800px;
      min-height: 800px;
      height: fit-content;
      width: 100%;
    }

    #background-img-overlay {
      background-color: rgba(0, 0, 0, 0.5);
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      z-index: 2;

      position: absolute;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #text-overlay {
      font-size: 30px;
      color: white;

    }

    /* Footer */
    footer {

      display: flex;
      align-items: center;
      background-color: #1C3657;
      height: 100px;
      width: 100%;
    }

    #footer-logo {
      margin-left: 20px;
      width: 90px;
      height: 90px;
    }

    #tab-opcoes-compra {
      margin-top: 10px;
      background-color: #1C3657;

    }

    #lista-kits-main {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
      margin: 0;
      background-color: #ffffff;
      width: 500px;
    }

    #container-main {
      display: flex;

    }

    aside {
      margin: 0;
      background-color: rgb(255, 255, 255);
      height: 300px;
      width: 300px;
    }


    .lista-kits-cards {
      display: flex;
      border: 1px rgb(189, 184, 184) solid;
      border-radius: 10px;
      padding: 5px;
      margin-top: 10px;
      margin-left: 10px;
      margin-bottom: 10px;
      z-index: 2;
      height: 200px;
      width: 100%;
      background-color: white;
    }

    .imagem-produto {

      margin-top: 10px;
      margin-bottom: 10px;
      height: 180px;
      width: auto;
    }

    .coluna-desc {
      display: flex;
      flex-direction: column;
    }

    .produto-titulo {
      font-size: 30px;
      margin-top: 10px;
      box-shadow: 0px 1px black;
    }

    .produto-desc {
      margin-top: 10px;
    }

    .produto-info {
      padding: 10px;
      height: 180px;
      width: 200px;
      background-color: rgb(255, 255, 255);

      & p {
        font-size: 20px;
        color: red;
      }
    }

    .produto-info p {
      color: red;
    }

    .carrinho-teste {
      width: 180px;
      height: 50px;
    }

    @media screen and (max-width:600px) {
      aside {
        display: none;
      }

    }

    @media screen and (max-width:1200px) {
      aside {
        display: none;
      }

    }
  </style>
</head>



<body>

  <header>

    <img id="nav-icon-header" src="assets/icons/nav-icon.svg" alt="">

    <img src="assets/images/logo-servitec.jpg" alt="Logo da Emprea Servitec" id="logo-header">

    <span id="texto-especialista-header"><a id="whatsapp-link-header" href="https://wa.me/c/5522981021821">Fale com um
        dos nossos especialistas:<br>(22) 98102-1821</a></span>


    <div id="search-wrapper-header">
      <form action="">
        <input type="text" placeholder="Pesquise aqui:" id="">
        <button class="btn-search-submit" type="submit"><img id="search-icon-header" src="assets/icons/search-icon.svg"
            alt=""></button>
      </form>
    </div>

    <a class="hyperlink-header" href="">FAQ</a>
    <a class="hyperlink-header" href="">Contato</a>
    <a class="hyperlink-header" href="">Financiamento</a>
    <a class="hyperlink-header" href="">Blog</a>

    <div id="cart-wrapper-header">


      <img src="assets/icons/cart-shopping-svgrepo-com.svg" alt="" id="icon-carrinho-header">

      <span id="red-counter-header">0</span>

    </div>

    <div id="user-wrapper-header">
      <a href="login.html">
        <img src="assets/icons/user-icon.svg" alt="" id="">
      </a>
    </div>




  </header>

  <nav>
    <ul>
      <li>
        <a>PAINEIS</a>
        <div class="wrapper-dropdown-menu">
          <a href="">400WP</a>
          <a href="">500WP</a>
          <a href="">650WP</a>
          <a href="">750WP</a>
          <a href="">800WP</a>
          <a href="">900WP</a>

        </div>
      </li>
      <li>
        <a>KITS FOTOVOLTAICOS</a>
        <div class="wrapper-dropdown-menu">
          <a href="">KIT RESIDENCIAL</a>
          <a href="">KIT COMERCIAL</a>
          <a href="">KIT INDUSTRIAL</a>

        </div>
      </li>
      <li>
        <a>INVERSORES</a>
        <div class="wrapper-dropdown-menu">
          <a href="">INVERSOR</a>
          <a href="">MICROINVERSOR</a>
          <a href="">HIBRIDO</a>

        </div>
      </li>
      <li>
        <a>OUTROS</a>
        <div class="wrapper-dropdown-menu">
          <a href="">OUTROS</a>

        </div>
      </li>

    </ul>

  </nav>

  <div id="background-img-container">
    <img id="background-img" src="assets/images/background.webp" alt="">
    <div id="background-img-overlay">
      <p id="text-overlay">A Maior Empresa de Instalação Fotovoltaica Da Região dos Lagos</p>
    </div>
  </div>

  <div id="container-main">
    <aside>


    </aside>

    <div id="lista-kits-main">
      <!--
      <div class="lista-kits-cards">
        <span><img class="imagem-produto" src="assets/images/images.jpg" alt=""></span>
        <div class="coluna-desc ">
          <div class="produto-titulo">Placa Solar Teste</div>
          <div class="produto-desc">O Painel Solar de 710W da marca Teste
            possui 132 células de silício monocristalino, pode gerar até
            2800Wh/dia. Garantia de 15 anos (já incluindo os 90 dias da garantia legal)
            contra defeito de fabricação e garantia linear de produção de 30 anos.
          </div>
          <div class="produto-promo"></div>
        </div>
        <span>
          <div class="produto-info">
            <p>809,90</p>

            <button class="carrinho-teste" onclick="carrinhoTeste()">Comprar</button>


          </div>
        </span>

      </div>
-->
      <?php


      foreach ($productQueryResult as $productInfo) {
        echo "<div class=\"lista-kits-cards\">
        <span><img class=\"\imagem-produto\" src=\"" . $productInfo['imagem_principal'] . " \" alt=\"\"></span>
        <div class=\"coluna-desc \">
          <div class=\"produto-titulo\"> " . $productInfo['nome'] . "</div>
          <div class=\"produto-desc\">" . $productInfo['descricao'] .
          "</div>
          <div class=\"produto-promo\"></div>
        </div>
        <span>
          <div class=\"produto-info\">
            <p>" . number_format($productInfo['price'] / 100) . "</p>

            <button class=\"carrinho-teste\" onclick=\"carrinhoTeste(" . $productInfo['descricao'] . "," . $productInfo['price'] . ")\">Comprar</button>


          </div>
        </span>

      </div>";
      }

      ?>

    </div>

    <aside>

    </aside>

  </div>




  <footer>
    <img id="footer-logo" src="src/assets/images/logo-servitec.jpg" alt="">

    <div>

    </div>
  </footer>
</body>

</html>