<!DOCTYPE html>
<?php
session_start();
?>

<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Política de privacidade</title>
  <link rel="stylesheet" href="./style/privacy.css">
  <link rel="stylesheet" href="./style/setup.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
  <?php 
  if (!isset($_SESSION['id'])) {
    include('./components/navbar_index.php');
  } else {
    include('./components/navbar_logado.php');
  }
  ?>


  <div class="container text-center">
    <h1>POLÍTICA DE PRIVACIDADE E SEGURANÇA DE DADOS</h1>
    <p> </p>
  </div>

  <div class="container" style="margin-top:40px; margin-bottom:40px; text-align: justify">
    <div class="row">

      <div class="col-md-6">
        
        <p>A <span>Política de Privacidade e Segurança de Dados</span> da CARINGCRAFTERS foi formulada com o intuito de manter a privacidade e segurança das informações coletadas de nossos usuários. O documento está em consonância com as diretrizes da Lei Federal nº 13.709/2018 (Lei Geral de Proteção de Dados - <strong>LGPD</strong>).</p>

        <p>Os dados de contato dos usuários poderão ser utilizados em campanhas estratégicas da CARINGCRAFTERS, onde serão enviados e-mails marketing contendo informações sobre ações e/ou serviços desenvolvidos, que possam agregar algum valor ou interesse ao nosso público. Todos os comunicados com essa finalidade terão a opção de cancelamento do envio deste tipo de mensagem. A solicitação será atendida no tempo mínimo necessário para sua execução.</p>

        <p>Sob nenhuma circunstância a CARINGCRAFTERS divulga ou comercializa informações pessoais ou dados cadastrais de seus clientes e usuários a terceiros. Todas as informações são armazenadas em nosso banco de dados e utilizadas em nossas ferramentas de trabalho. Além disso, qualquer incidente que ocorra na segurança das informações será notificado ao usuário titular do dado e aos órgãos competentes. </p> 

        <p>Poderemos utilizar alguns dos dados ou depoimentos que nos forem fornecidos em campanhas de comunicação. Caso não haja o interesse do usuário na utilização de suas informações para essa finalidade, uma solicitação deverá ser redigida por e-mail para <a href="mailto:atendimento@caringcrafters.com.br" class="email-link">atendimento@caringcrafters.com.br</a>.</p>

        <p>Em nosso site poderão ser encontrados endereços eletrônicos que redirecionam para outros sites terceiros. Neste caso, o acesso e navegação foge de nossas Políticas de Privacidade e toda informação fornecida é de responsabilidade unicamente do usuário.</p> 

        <p>Nos colocamos à disposição para quaisquer esclarecimentos dos assuntos tratados aqui.</p>

        <p>Qualquer alteração que seja estipulada e anunciada em relação à Lei Geral de Proteção de Dados será atualizada nesta página sem aviso prévio.</p>

        <p>Para maiores informações sobre nossas políticas de privacidade entre em contato pelo e-mail <a href="mailto:atendimento@caringcrafters.com.br" class="email-link">atendimento@caringcrafters.com.br</a>.</p>

        <p>CARINGCRAFTERS®</p>

        <p>Todos os direitos reservados. </p>

      </div>
   


      <div class="col-md-6" style="margin-top:10px; margin-bottom:10px">
        <img src="./assets/images/privacy.png" alt="" width="90%">
      </div>
    </div>
  </div>

  </div>

  <?php include('./components/footer.php') ?>

</body>
</html>
