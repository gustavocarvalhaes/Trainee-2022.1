<!DOCTYPE html>
<html lang="pt-BR">

<head>
<?php include 'app/views/includes/head.php' ?>

  <link rel="stylesheet" href="../../../public/css/contato.css">

  <title>Monster Shop - Contato</title>
</head>


<body>

  <?php include 'app/views/includes/navbar.php' ?>

  <main>
    <div class="titulo">
      <h1><strong>CONTATO</strong></h1>
    </div>
      <div class="subtitulo">
        <h2>ALGUMA DUVIDA? <span>FALE COM A GENTE!</span></h2>
      </div>

    <div class="social">
        <div class="social-email">
           <i class="fa-solid fa-envelope icon-email iconTam fa-xl"></i>
        <span class="divisao">adm.monstershop@gmail.com</span>
        </div>

        <div class="social-telefone">
          <i class="fa-solid fa-phone icon-tel iconTam fa-xl"></i>
          <span>+55 (32) 20112413</span>
        </div>
    </div>

    <form class="formulario" method="post" action="/contato/enviaremail">
      <div class="mb-3 forms">
        <label for="exampleFormControlInput1" class="form-label">Nome</label>
        <input type="text" class="form-control caixa-texto" name="nome" id="exampleFormControlInput1">
      </div>
      <div class="mb-3 forms">
        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
        <input type="email" class="form-control caixa-texto" name="email" id="exampleFormControlInput1">
      </div>
      <div class="mb-3 forms">
        <label for="exampleFormControlInput1" class="form-label">Assunto</label>
        <input type="text" class="form-control caixa-texto" name="assunto" id="exampleFormControlInput1">
      </div>
      <div class="mb-3 forms">
        <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
        <textarea class="form-control caixa-texto" name="mensagem" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="d-grid gap-2 enviar">
        <button type="submit" class="btn btn-danger botao">Enviar</button>
      </div>
    </form>

    <div class="mapa">
      <label><img src="../../../public/img/contato/mapa.svg" alt="mapa"> Rua Espírito Santo, 781 - Centro, Juiz de Fora - MG</label>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.4294877995985!2d-43.347999184526294!3d-21.76363270355084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989b5fed611a4b%3A0xe6aee88cac09b0b6!2sAcademia%20Pumping%20Iron!5e0!3m2!1spt-BR!2sbr!4v1655258907982!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </main>

  <?php include 'app/views/includes/footer.php' ?>

</body>

</html>