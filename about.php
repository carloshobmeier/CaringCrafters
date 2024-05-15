<!DOCTYPE html>
<?php
session_start();
?>

<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre Nós</title>
  <link rel="stylesheet" href="./style/about.css">
  <link rel="stylesheet" href="./style/setup.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
  <?php 
  if (!isset($_SESSION['id'])) {
    include('./components/navbar_index.php');
  } else {
      if($_SESSION['tipoCadastro'] === 'usuario') {
        include("./components/navbar_logado_usuario.php");
      } elseif ($_SESSION['tipoCadastro'] === 'instituicao') {
        include("./components/navbar_logado_instituicao.php");
      }
  }
  ?>

  <div class="faq container text-center">
    <h1 style="margin-top: 30px;">SOBRE NÓS</h1>
    <p>Conheça aqui um pouco da nossa história.</p>
  </div>

  <div class="container" style="margin-top:40px; margin-bottom:40px">
    <div class="row">

      <div class="col-md-6 esquerda">

        <h1 class="titulo">QUEM SOMOS</h1>

        <p>Bem-vindo ao CaringCrafters, onde a <span>compaixão</span> se torna <span>ação</span>.</p>

        <p>Nossa história começa em 2024, impulsionada por um ideal simples: cada gesto de bondade tem o poder de transformar o mundo. A partir desse princípio, embarcamos em uma jornada para unir corações apaixonados e iniciativas que causam <span>impacto social</span>.</p>

        <p>Nossa equipe é diversa e comprometida, unida por um propósito comum: promover o bem. Com experiência em envolvimento comunitário e iniciativas sociais, trabalhamos juntos para inspirar <span>mudanças</span> significativas.</p>

        <p>O que nos diferencia? Acreditamos na força das conexões humanas e na colaboração como catalisador de transformações. Seja voluntariando localmente, apoiando a preservação ambiental ou estendendo a mão a quem precisa, estamos aqui para incentivar e mobilizar a mudança.</p>

        <p>No CaringCrafters, não somos apenas uma plataforma - somos um <span>movimento</span>. Juntos, estamos tecendo uma rede de cuidado e compaixão que se estende por todo lugar.</p>

        <p>Junte-se a nós nesta jornada rumo a um mundo melhor. Juntos, vamos transformar a empatia em uma forma de viver.</p>
      </div>

      <div class="col-md-5 direita" style="margin-top:10px; margin-bottom:10px">
        <img src="./assets/images/cleaning.jpeg" alt="" width="90%">
      </div>
    </div>



    <div class="row">
      <div class="col-md-6 esquerda">

        <h1 class="titulo">NOSSA MISSÃO</h1>
        
        <p>Na CaringCrafters, nossa missão transcende simples palavras - é um compromisso enraizado na <span>essência</span> do que somos. Buscamos incansavelmente um mundo onde a compaixão e a solidariedade são os pilares de todas as interações humanas. Nossa missão é mais do que uma declaração; é um <span>chamado à ação</span> para todos os corações generosos que desejam deixar um legado duradouro de bondade.</p>
        
        <p>Acreditamos que a verdadeira mudança começa com cada indivíduo. É por isso que nos dedicamos a <span>conectar</span> pessoas apaixonadas, o que acreditamos caracterizar o recurso necessário para causar um impacto significativo em suas comunidades e além. Da cidade mais movimentada ao vilarejo mais remoto, buscamos alcançar e tocar cada vida com um gesto de bondade.</p>
        
        <p>Nossa missão vai além de simplesmente oferecer ajuda; aspiramos cultivar uma cultura de empatia e colaboração. Acreditamos no poder transformador das conexões humanas e na importância de unir forças para enfrentar os desafios globais que enfrentamos. Somos uma comunidade de agentes de mudança, cada um contribuindo para um mosaico de compaixão que torna o mundo um lugar mais luminoso.</p>
        
        <p>Junte-se a nós nesta jornada de corações unidos, onde cada ação, por menor que seja, tem o potencial de fazer uma diferença monumental. Nossa missão é clara: <span>inspirar</span>, <span>capacitar</span> e <span>mobilizar</span>, tornando a compaixão uma força inegável para o bem em nosso mundo.</p>

      </div>

      <div class="col-md-5 direita" style="margin-top:10px; margin-bottom:10px">
        <img src="./assets/images/recycling.jpeg" alt="" width="90%">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 esquerda">

        <h1 class="titulo">NOSSOS VALORES</h1>

        <p>Na CaringCrafters, nossos valores são mais do que simples palavras em um papel - são os alicerces sobre os quais construímos nossas ações e moldamos nosso caráter como organização. São esses valores que nos unem, nos inspiram e nos guiam em cada passo do nosso caminho.</p>
        <ol>
          <li><strong>Compaixão</strong>: Acreditamos no poder transformador da compaixão. Buscamos entender e aliviar o sofrimento dos outros, oferecendo um ombro amigo e um gesto de bondade em tempos de necessidade.</li>

          <li><strong>Empatia</strong>: Valorizamos a capacidade de nos colocarmos no lugar do outro. Ao cultivar a empatia, construímos pontes entre diferentes realidades e fortalecemos os laços que nos unem como humanidade.</li>

          <li><strong>Integridade</strong>: Agimos com integridade em todas as nossas interações. Mantemos um compromisso inabalável com a honestidade, transparência e responsabilidade em tudo o que fazemos.</li>

          <li><strong>Colaboração</strong>: Reconhecemos que juntos somos mais fortes. Promovemos uma cultura de colaboração, incentivando o trabalho em equipe e a cooperação para alcançar objetivos comuns.</li>

          <li><strong>Inclusão</strong>: Celebramos a diversidade e valorizamos a inclusão. Criamos espaços onde todas as vozes são ouvidas, respeitadas e valorizadas, independentemente de origem, raça, gênero ou orientação.</li>

          <li><strong>Inovação</strong>: Abraçamos a criatividade e a inovação como motores de mudança. Estamos sempre abertos a novas ideias e abordagens, buscando constantemente maneiras melhores de servir e impactar positivamente o mundo.</li>
        </ol>

        Estes são os valores que nos definem como CaringCrafters. Eles nos inspiram a excelência e nos lembram do compromisso que temos com a construção de um mundo mais solidário, justo e inclusivo para todos.
      </div>
   
      <div class="col-md-5 direita" style="margin-top:10px; margin-bottom:10px">
        <img src="./assets/images/building2.jpeg" alt="" width="90%">
      </div>
    </div>

  </div>

  <?php include('./components/footer.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
