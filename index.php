<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agro-UP</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="shortcut icon" href="imagens/icon.png">

  </head>
  <body>
    <header>
      <div class="navbar-fixed red darken-1">
        <nav class="cormenu">
          <div class="nav-wrapper">
            <a href="index.php" class="brand-logo">
              <img src="imagens/logo.png" class="logo" alt="">
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li class=""><a class="white-text" href="home"><b>Home</b></a></li>
              <li class=""><a class="white-text" href="quemsomos"><b>Quem Somos</b></a></li>
              <li class=""><a class="white-text" href="servicos"><b>Servicos</b></a></li>
              <li class=""><a class="white-text" href="contato"><b>Contato</b></a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <main>


      <?php
        //verificar se a variavel exite (isset) e pegar a Variavel

        if (isset($_GET["pagina"])) {
          $pagina = $_GET["pagina"];//se exite pagina $pagina get pagina
        } else{
          $pagina = "home";//se não existir $pagina recebe home("String")
        }

        //echo $pagina; Tem que escrever o nome da variavel para ver se esta funcionando
        //concatenar o nome que escreve na variavel ira receber .php
        $pagina = $pagina . ".php";

        if (file_exists($pagina)) {//se exist pagina ira aparecer a pagina se nao aparece a msg
          include "$pagina";
        } else{
          echo "<h1 class='center'>Pagina Web Não Encontrada!</h1>
          <p class='center'><b>esta pagina da web não pode ser exibida</b></p>";
        }

       ?>

    </main>
    <footer class="page-footer corfooter">
       <div class="">
         <div class="row">
           <div class="col s3 center">
             <img src="imagens/icon.png" class="imgfooter" alt="agroup">
           </div>
           <div class="col s3">
             <ul>
               <h5>Alessandro Limeira</h5>
               <li><i class=" small material-icons">call</i> (44) 9.9848-9747</li>
               <li><i class=" small material-icons">email</i> alessandrohenriquelimeira@gmail.com</li>
             </ul>
           </div>
           <div class="col s3">
             <ul>
               <h5>Felipe Viana Saugo</h5>
                <li><i class=" small material-icons">call</i> (44) 9.9871-7486</li>
                <li><i class=" small material-icons">email</i> felipevianasaugo@gmail.com</li>
             </ul>
           </div>
           <div class="col s3 ul right">
             <ul>
               <li><a class="grey-text text-lighten-3" href="www.fb.com"><i class="fa fa-facebook small" title="facebook"></i></a></li>
               <li><a class="grey-text text-lighten-3" href="www.twitter.com"><i class="fa fa-twitter small" title="twitter"></i></a></li>
               <li><a class="grey-text text-lighten-3" href="www.instagram.com"><i class="fa fa-instagram small" title="instagram"></i></a></li>
               <li><a class="grey-text text-lighten-3" href="www.linkedin.com"><i class="fa fa-linkedin small" title="linkedin"></i></a></li>
             </ul>
           </div>
         </div>
       </div>
       <div class="footer-copyright white">
         <div class="container">
           <h6 class="black-text center" >© 2017 Agro UP, todos os direitos reservados. Website Desenvolvido por Mateus Rocha</h6>
        </div>
       </div>
     </footer>

    <script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

    <!--Carrosel-->
    <script type="text/javascript">
      $(document).ready(function(){
        //modal

        //carrosel gira sozinho
        $('.slider').slider({
          transition:200
        });
        //carrosel slide
        $('.carousel').carousel({
          shift:100
        });

        //campo mensagem
        $('#textarea1').val();
        $('#textarea1').trigger('autoresize');

      })//fecha funcao

      </script>
  </body>
</html>
