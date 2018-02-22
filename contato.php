<!--PHP-->

<!--Formulario-->
  <h3 class="center grey-text text-darken-4">Entre em Contato</h3>

  <div class="row">
    <form class="col s12" name="form1" action="<? $PHP_SELF; ?>" method="post">
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
              <input id="first_name" name="first_name" type="text" class="validate" required>
              <label for="first_name" data-success="success">Digite seu Nome Completo</label>
            </div>
         </div>
       </div>
      </div>
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
                <input id="email" name="email" type="email" class="validate" required>
                <label for="email" data-error="invalid" data-success="success">Email</label>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="textarea1" name="textarea1" class="materialize-textarea" required></textarea>
              <label for="textarea1" data-success="success">Mensagem</label>
            </div>
          </div>
        </div>
      </div>
      <div class="center">
        <button name="BtnEnviar" class="btn waves-effect green darken-1" type="submit">Enviar
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </div>


  <?php
    $nome = $email = $mensagem = "";
    if(isset( $_POST["BtnEnviar"])){

    if (isset ($_POST["first_name"])) {
      $nome = trim ($_POST["first_name"]);
    }

    if (isset ($_POST["email"])) {
      $email = trim ($_POST["email"]);
    }

    if (isset ($_POST["textarea1"])) {
      $mensagem = trim($_POST["textarea1"]);
    }

    if ( empty($nome)) {
        echo "<p><b>Digite um nome Valido</b></p>";
      }
      else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<p>Digite um email valido!</p>";
      }
      else if (empty($mensagem)) {
        echo "<p>Digite uma Mensagem</p>";
      }
      else {

        $para = "mateus-chineis@live.com";
      $assunto = "$nome enviou uma mensagem";

      if (mail($para, $assunto, $mensagem, "From: $email")) {
        echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>
                alert ('Sua Mensagem foi enviada com Sucesso')
                </SCRIPT>";
      } else{
        echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>
                alert ('Erro ao enviar Mensagem, tente mais tarde')
                </SCRIPT>";
      }
    }
}

   ?>
