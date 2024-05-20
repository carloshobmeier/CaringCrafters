<!DOCTYPE html>
<?php
include('./components/controle_expiracao.php');
?>

<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Termos de serviço</title>
  <link rel="stylesheet" href="./style/terms.css">
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


  <div class="container text-center">
    <h1>TERMOS E CONDIÇÕES DE USO</h1>
  </div>
  <br>
  <div class="container" style="margin-top:40px; margin-bottom:40px;">
    <div class="row">

      <div class="col-md-12 text-center container">
        
      <p class="text-justify">O presente termo deverá ser observado pelo <strong>USUÁRIO</strong> na utilização da plataforma <span>CARINGCRAFTERS</span> e, principalmente, de suas funcionalidades e ferramentas. Ao visitar nossa <span>PLATAFORMA</span>, o <strong>USUÁRIO</strong> declara ter lido e aceitado os Termos e Condições de Uso. Para utilizar a <span>PLATAFORMA</span>, o usuário declara ter pelo menos 18 anos de idade. O aceite desses termos implica no reconhecimento de que o USUÁRIO apresenta capacidade civil plena para responder por seus atos. Caso o <strong>USUÁRIO</strong> tenha qualquer dúvida sobre os Termos e Condições de Uso, recomendamos contatar a <span>CARINGCRAFTERS</span> antes de aceitá-los. O <strong>USUÁRIO</strong> entende que o presente termo possui natureza jurídica de um contrato e concorda que o aceite implicará na vinculação da <span>CARINGCRAFTERS</span> e do <strong>USUÁRIO</strong> aos seus termos e condições. A <span>CARINGCRAFTERS</span> enviará avisos de atualizações dos Termos de Uso por e-mail, mas será dever do <strong>USUÁRIO</strong> manter-se atento às possíveis atualizações, que poderão ocorrer a qualquer momento.</p>

        <img src="./assets/images/termos_servico.png" alt="" width="40%">
        <br>

        <h4 class="text-start text-justify">Regras para utilização da <span>PLATAFORMA</span>:</h4>

         <p class="text-justify">O <strong>USUÁRIO</strong> obriga-se a utilizar esta <span>PLATAFORMA</span> respeitando e observando os termos estabelecidos, a legislação vigente, os costumes e a ordem pública. Desta forma, concorda que não poderá: (i) lesar direitos de terceiros, independentemente de sua natureza, em qualquer momento, inclusive no decorrer do uso da <span>PLATAFORMA</span>; (ii) executar atos que limitem ou impeçam o acesso e a utilização da <span>PLATAFORMA</span> aos demais <strong>USUÁRIOS</strong>; (iii) acessar ilicitamente o <span>PLATAFORMA</span> ou sistemas informáticos de terceiros relacionados à <span>PLATAFORMA</span> ou à <span>CARINGCRAFTERS</span> sob qualquer meio ou forma; (iv) difundir programas ou vírus informáticos suscetíveis de causar danos de qualquer natureza, inclusive em equipamentos e sistemas da <span>CARINGCRAFTERS</span> ou de terceiros; (v) utilizar mecanismos que não os expressamente habilitados ou recomendados na <span>PLATAFORMA</span> para obtenção de informações, conteúdos e serviços; (vi) realizar quaisquer atos que de alguma forma possam implicar qualquer prejuízo ou dano à <span>CARINGCRAFTERS</span> ou aos outros <strong>USUÁRIOS</strong>; (vii) acessar áreas de programação da <span>PLATAFORMA</span>, bases de dados ou qualquer outro conjunto de informações que escape às áreas públicas ou restritas da <span>PLATAFORMA</span>; (viii) realizar ou permitir engenharia reversa, traduzir, modificar, alterar a linguagem, compilar, modificar, reproduzir, alugar, sublocar, divulgar, transmitir, distribuir, usar ou, de outra maneira, dispor da <span>PLATAFORMA</span> ou das ferramentas e funcionalidades nele disponibilizadas sob qualquer meio ou forma, inclusive de modo a violar direitos da <span>CARINGCRAFTERS</span> (inclusive de propriedade intelectual da <span>CARINGCRAFTERS</span>) e/ou de terceiros; (ix) praticar ou participar de qualquer ato que constitua uma violação de qualquer direito da <span>CARINGCRAFTERS</span> ou de terceiros ou, ainda, de qualquer lei aplicável, ou agir sob qualquer meio ou forma que possa contribuir com tal violação; (x) interferir na segurança ou cometer usos indevidos contra a <span>PLATAFORMA</span> ou qualquer recurso do sistema, rede ou serviço conectado ou que possa ser acessado por meio da <span>PLATAFORMA</span>, devendo acessar a <span>PLATAFORMA</span> apenas para fins lícitos e autorizados; (xi) utilizar o domínio da <span>CARINGCRAFTERS</span> para criar links ou atalhos a serem disponibilizados em e-mails não solicitados (mensagens spam) ou em sites de terceiros ou do próprio <strong>USUÁRIO</strong> ou, ainda, para realizar qualquer tipo de ação que possa vir a prejudicar a <span>CARINGCRAFTERS</span> ou terceiros; (xii) utilizar as ferramentas e funcionalidades da <span>PLATAFORMA</span> para difundir mensagens não relacionadas com a <span>PLATAFORMA</span> ou com as finalidades da <span>PLATAFORMA</span>, incluindo mensagens de cunho racista, étnico, político, religioso, depreciativo, difamatório e/ou calunioso contra qualquer pessoa ou grupo social. Você concorda em indenizar e isentar a <span>CARINGCRAFTERS</span> de qualquer reclamação, notificação, intimação ou ação judicial ou extrajudicial, ou ainda de qualquer responsabilidade, dano, custo ou despesa decorrente de qualquer violação e/ou infração cometida pelos <strong>USUÁRIOS</strong> ou qualquer pessoa agindo em seu nome, com seu consentimento ou tolerância, em relação à <span>PLATAFORMA</span>, inclusive qualquer pessoa que tenha obtido os dados dos <strong>USUÁRIOS</strong> relacionados à sua conta de acesso ou a sua navegação na <span>PLATAFORMA</span>.</p>
        
         <p class="text-justify">A <span>CARINGCRAFTERS</span> poderá, a seu exclusivo critério, bloquear, restringir, desabilitar ou impedir o acesso de qualquer <strong>USUÁRIO</strong> à <span>PLATAFORMA</span>, total ou parcialmente, sem qualquer aviso prévio, sempre que for detectada uma conduta inadequada do <strong>USUÁRIO</strong>, sem prejuízo de adoção das medidas administrativas, extrajudiciais e judiciais que julgar convenientes.</p>
         

         <h4 class="text-start text-justify">Cadastramento de <strong>USUÁRIO</strong>: </h4>

        <p class="text-justify">É de conhecimento do <strong>USUÁRIO</strong> que os dados cadastrados na <span>PLATAFORMA</span> serão armazenados e utilizados pela <span>CARINGCRAFTERS</span>, ressaltando-se que o cadastramento pressupõe o consentimento expresso de cada <strong>USUÁRIO</strong> sobre a coleta, o uso, armazenamento e tratamento dos dados pessoais e profissionais pela <span>CARINGCRAFTERS</span> e/ou por terceiros por ela contratados para realizar qualquer procedimento ou processo relacionado.</p>

        <p class="text-justify">Ao completar seu cadastro, o <strong>USUÁRIO</strong> declara que as informações fornecidas são completas, verdadeiras, atuais e precisas, sendo de total responsabilidade do <strong>USUÁRIO</strong> a atualização dos seus dados sempre que houver modificação de nome, endereço ou qualquer outra informação relevante. </p>

        <p class="text-justify">A <span>CARINGCRAFTERS</span> poderá recusar, suspender ou cancelar o cadastro do <strong>USUÁRIO</strong> sempre que suspeitar que as informações fornecidas são falsas, incompletas, desatualizadas ou imprecisas ou, ainda, nos casos indicados nas leis e regulamentos aplicáveis, nestes Termos e Condições ou em qualquer Política do <span>PLATAFORMA</span>, mesmo que previamente aceito. </p>



        <h4 class="text-start text-justify">Garantias:</h4>

        <p class="text-justify">Apesar dos esforços da <span>CARINGCRAFTERS</span> para fornecer informações precisas, atualizadas, corretas e completas, a <span>PLATAFORMA</span> poderá conter erros técnicos, inconsistências ou erros tipográficos. A <span>PLATAFORMA</span>, seu conteúdo, suas funcionalidades e ferramentas são disponibilizados pela <span>CARINGCRAFTERS</span> tal e qual expostos e oferecidos na Internet, sem qualquer garantia, expressa ou implícita, quanto aos seguintes itens: (i) atendimento, pela <span>PLATAFORMA</span> ou por seu conteúdo, das expectativas dos <strong>USUÁRIOS</strong>; (ii) continuidade do acesso à <span>PLATAFORMA</span> ou a seu conteúdo; (iii) adequação da qualidade da <span>PLATAFORMA</span> ou de seu conteúdo para um determinado fim e  (iv) a correção de defeitos, erros ou falhas na <span>PLATAFORMA</span> ou em seu conteúdo. A <span>CARINGCRAFTERS</span> se reserva ao direito de unilateralmente modificar, a qualquer momento e sem aviso prévio, a <span>PLATAFORMA</span> bem como a configuração, a apresentação, o design, o conteúdo, as funcionalidades, as ferramentas ou qualquer outro elemento da <span>PLATAFORMA</span>, podendo inclusive realizar o seu cancelamento.</p>

        <p class="text-justify">Caso a <span>CARINGCRAFTERS</span> não consiga cumprir qualquer cláusula ou condição contida neste termo, tal fato não configurará desistência, tolerância ou novação deste termo. Se alguma cláusula ou condição contida neste termo for declarada inexequível, no todo ou parcialmente, tal inexequibilidade não afetará as demais cláusulas do termo de uso. Neste caso, a <span>CARINGCRAFTERS</span> fará as adaptações necessárias para que reflitam da forma mais próxima possível, os termos da provisão declarada inexequível.</p>

        <p class="text-justify">Nenhuma das partes será responsabilizada perante a outra quando o descumprimento ou o cumprimento extemporâneo de uma obrigação prevista neste termo for causado por casos fortuitos ou eventos de força maior, enquanto perduraram as suas consequências.</p>

        <p class="text-justify">A <span>CARINGCRAFTERS</span> tem como princípio de sua atuação o respeito ao <strong>USUÁRIO</strong>, agindo sempre em conformidade com as disposições da Lei Federal n. 12.965/14, que estabelece princípios, garantias, direitos e deveres para o uso da Internet no Brasil.</p>



        <h4 class="text-start text-justify">Lei de Voluntariado (Lei nº 9.608/1998): </h4>

        <p class="text-justify">Ao utilizar a <span>CARINGCRAFTERS</span>, o <strong>USUÁRIO</strong> reconhece e concorda em cumprir com as disposições da Lei Federal nº 9.608/1998, que dispõe sobre o serviço voluntário e dá outras providências.</p>

        <p class="text-justify">O <strong>USUÁRIO</strong> está ciente e declara anuência que (i) o serviço voluntário não gera vínculo empregatício, nem qualquer obrigação de natureza trabalhista previdenciária ou afim, maximamente em face da <span>PLATAFORMA</span> e (ii) o serviço voluntário deverá ser exercido mediante a celebração de Termo de Adesão entre a instituição ofertante e o voluntário, dele devendo constar o objeto e as condições de seu exercício.</p>



        <h4 class="text-start text-justify">Responsabilidades:</h4>

        <p class="text-justify">A <span>CARINGCRAFTERS</span> atua para informar, atender e proteger o <strong>USUÁRIO</strong>. O <strong>USUÁRIO</strong> é o único responsável pela utilização da <span>PLATAFORMA</span>, de suas ferramentas e funcionalidades. Em nenhuma hipótese, a <span>CARINGCRAFTERS</span> será responsabilizada por qualquer dano emergente, indireto, punitivo, lucros cessantes ou outros prejuízos monetários relacionados a qualquer reclamação, ação judicial ou outro procedimento tomado em relação à utilização do <span>PLATAFORMA</span>, seu conteúdo, funcionalidades e/ou ferramentas.</p>

        <p class="text-justify">Notadamente, fica excluída a responsabilidade da <span>CARINGCRAFTERS</span> sobre as seguintes circunstâncias, entre outras: (i) danos e prejuízos que o <strong>USUÁRIO</strong> possa experimentar pela indisponibilidade ou funcionamento parcial da <span>PLATAFORMA</span> e/ou de todos ou alguns de seus serviços, informações, conteúdos, funcionalidade e/ou ferramentas, bem como pela incorreção ou inexatidão de qualquer destes elementos; (ii) indisponibilidade do <strong>USUÁRIO</strong>; (iii) danos e prejuízos que o <strong>USUÁRIO</strong> possa experimentar em outros sites da Internet acessíveis por links incluídos na <span>PLATAFORMA</span>; (iv) danos e prejuízos que o <strong>USUÁRIO</strong> possa experimentar em decorrência de falhas na <span>PLATAFORMA</span>, inclusive decorrentes de falhas no sistema, no servidor ou na conexão de rede, ou ainda de interações maliciosas como vírus, softwares que possam danificar o equipamento ou acessar informações do equipamento do <strong>USUÁRIO</strong>; (v) danos e prejuízos que o <strong>USUÁRIO</strong> possa experimentar em decorrência do uso da <span>PLATAFORMA</span> em desconformidade com estes Termos e Condições de Uso; (vi) danos e prejuízos que o <strong>USUÁRIO</strong> possa experimentar em decorrência do uso da <span>PLATAFORMA</span> em desconformidade com a lei, com os costumes ou com a ordem pública. </p>



        <h4 class="text-start text-justify">Duração dos Termos e Condições:</h4>

        <p class="text-justify">Estes Termos e Condições de Uso possuem duração indefinida e permanecerá em vigor enquanto a <span>PLATAFORMA</span> estiver ativa. Da mesma forma, o acesso e a utilização da <span>PLATAFORMA</span> e dos recursos por ela oferecidos têm, em princípio, duração indeterminada, a exclusivo critério da <span>CARINGCRAFTERS</span>. </p>

        <p class="text-justify">A <span>CARINGCRAFTERS</span> reserva-se, no entanto, o direito de suspender e/ou cancelar, de forma unilateral e a qualquer momento, o acesso à <span>PLATAFORMA</span> ou a algumas de suas partes ou a alguns de seus recursos, sem necessidade de prévio aviso ao <strong>USUÁRIO</strong>.</p>



        <h4 class="text-start text-justify">Atualizações dos Termos e Condições:</h4>

        <p class="text-justify">A <span>CARINGCRAFTERS</span> poderá unilateralmente revisar, aprimorar, modificar e/ou atualizar, a qualquer momento, qualquer cláusula ou disposição contidas neste termo. A continuidade de acesso ou utilização desta <span>PLATAFORMA</span>, depois da divulgação de quaisquer modificações, confirmará a aceitação dos novos termos pelo <strong>USUÁRIO</strong>. Caso o <strong>USUÁRIO</strong> não esteja de acordo com uma determinada alteração dos termos, poderá rescindir seu vínculo com a <span>CARINGCRAFTERS</span> por meio da exclusão do cadastro ou por intermédio do canal de atendimento da <span>CARINGCRAFTERS</span>. A rescisão não eximirá, no entanto, o <strong>USUÁRIO</strong> de cumprir com todas as obrigações assumidas sob as versões precedentes dos termos de uso. </p>

        <img src="./assets/images/terms2.png" alt="" width="40%">



        <h4 class="text-start text-justify">Links para outros sites: </h4>

        <p class="text-justify">A <span>PLATAFORMA</span> pode conter links para sites de terceiros, os quais são inseridos apenas para conveniência do <strong>USUÁRIO</strong>. A inclusão de tais links não implica qualquer vínculo, monitoramento ou responsabilidade da <span>CARINGCRAFTERS</span> sobre os sites, seus conteúdos ou titulares. O acesso aos sites vinculados a tais links não é regido por este termo de uso e não se encontra protegido pela política de proteção da dados da <span>CARINGCRAFTERS</span>. A <span>CARINGCRAFTERS</span> recomenda que o <strong>USUÁRIO</strong> consulte os Termos e Condições de Uso estabelecidos nos sites vinculados aos links inseridos no <span>PLATAFORMA</span>. A <span>CARINGCRAFTERS</span> não será responsável, direta ou indiretamente, por quaisquer danos ou prejuízos causados ou relacionados à utilização de qualquer informação, conteúdo, bens ou serviços disponibilizados na <span>PLATAFORMA</span> ou em qualquer site de terceiros acessado por meio dos links disponibilizados nesta <span>PLATAFORMA</span>.</p>



        <h4 class="text-start text-justify">Aplicações de Internet ou vírus de computador:</h4>

        <p class="text-justify">A <span>CARINGCRAFTERS</span> não será responsável por qualquer aplicação, vírus de computador ou outros arquivos danosos ou invasivos ou programas que possam prejudicar ou afetar a utilização do computador ou outro bem do <strong>USUÁRIO</strong> devido ao acesso, utilização ou navegação na <span>PLATAFORMA</span>, ou ainda pelo download de qualquer material nela contida, sendo recomendada a instalação de aplicativos antivírus.</p>



        <h4 class="text-start text-justify">Direitos de Propriedade Intelectual:</h4>

        <p class="text-justify">O <strong>USUÁRIO</strong> não está autorizado a utilizar, sob qualquer forma ou pretexto, as marcas, suas reproduções parciais ou integrais ou ainda suas imitações, independentemente da destinação de tal uso. O <strong>USUÁRIO</strong> compromete-se a se abster de fazer qualquer uso das marcas ou de suas variações (incluindo erros de ortografia ou variações fonéticas) como nome de domínio ou parte de nome de domínio ou em qualquer nome de empresa, de qualquer tipo ou natureza, sob qualquer meio ou forma, inclusive por meio da criação de nomes de domínio ou e-mails. Todas as outras marcas, nomes de produtos, ou nomes de companhias que aparecem na <span>PLATAFORMA</span> são de propriedade exclusiva de seus respectivos titulares.</p>

        <p class="text-justify">Todo o conteúdo da <span>PLATAFORMA</span> – incluindo o nome de domínio (<span>CARINGCRAFTERS</span>.com.br), programas, bases de dados, arquivos, textos, fotos, layouts, cabeçalhos e demais elementos – foi criado, desenvolvido ou cedido à <span>CARINGCRAFTERS</span>, é de propriedade da <span>CARINGCRAFTERS</span> ou a ela licenciado e encontra-se protegido pelas leis brasileiras e tratados internacionais que versam sobre direitos de propriedade intelectual.</p>

        <p class="text-justify">O <strong>USUÁRIO</strong>, ao acessar a <span>PLATAFORMA</span>, atesta que respeitará a existência e a extensão dos direitos de propriedade intelectual da <span>CARINGCRAFTERS</span>, bem como de todos os direitos de terceiros que sejam usados, a qualquer título, na <span>PLATAFORMA</span> ou que venham a ser disponibilizados na <span>PLATAFORMA</span>. O acesso à <span>PLATAFORMA</span> e a sua regular utilização pelo <strong>USUÁRIO</strong> não lhe confere qualquer direito ou prerrogativa sobre a propriedade intelectual, marca ou outro conteúdo nela inserido. </p>

        <p class="text-justify">É vedada a utilização, exploração, imitação, reprodução, integral ou parcial, de qualquer conteúdo sem a autorização prévia e por escrito da <span>CARINGCRAFTERS</span>. É igualmente vedada a criação de quaisquer obras derivadas de qualquer propriedade intelectual da <span>CARINGCRAFTERS</span> sem a autorização prévia e por escrito da <span>CARINGCRAFTERS</span>. </p>

        <p class="text-justify">É expressamente proibido ao <strong>USUÁRIO</strong> reproduzir, distribuir, modificar, exibir e criar trabalhos derivados ou qualquer outra forma de utilização de qualquer propriedade intelectual ou outro conteúdo desta <span>PLATAFORMA</span> e dos materiais veiculados pela <span>PLATAFORMA</span>. O <strong>USUÁRIO</strong> que violar as proibições contidas na legislação sobre propriedade intelectual e neste termo de uso será responsabilizado, civil e criminalmente, pelas infrações cometidas. </p>

        <p class="text-justify">Ao enviar qualquer conteúdo à <span>PLATAFORMA</span>, o <strong>USUÁRIO</strong> detém a titularidade de seus direitos sobre o conteúdo (textos, vídeos, imagens, áudio, entre outros), cedendo à <span>CARINGCRAFTERS</span> uma licença de caráter gratuito, irrevogável, mundial e não exclusivo para a reprodução e exibição, sob qualquer meio ou forma, inclusive na <span>PLATAFORMA</span>, declarando, ainda, o <strong>USUÁRIO</strong> ser titular de todos os direitos relacionados ao referido conteúdo.</p>



        <h4 class="text-start text-justify">Idioma:</h4>

        <p class="text-justify">Toda a documentação da <span>PLATAFORMA</span>, incluindo os presentes Termos e Condições de Uso, foram elaboradores em língua portuguesa (Brasil). </p>



        <h4 class="text-start text-justify">Confidencialidade:</h4>

        <p class="text-justify">A <span>CARINGCRAFTERS</span> e o <strong>USUÁRIO</strong>, por si e por seus funcionários e prepostos, comprometem-se a manter como confidenciais todos os dados recebidos, mais especialmente quanto aos dados de <strong>USUÁRIO</strong>, nos termos da legislação civil vigente, não podendo torná-los acessíveis a terceiros sem autorização judicial, sendo vigente a presente cláusula por prazo indeterminado e irretratável, ainda que deixe de existir qualquer relação entre as partes.</p>

        
        
        <h4 class="text-start text-justify">Dados pessoais, privacidade e segurança:</h4>

        <p class="text-justify">A Política de Privacidade e Segurança criada e utilizada pela <span>CARINGCRAFTERS</span> regula a coleta, guarda e utilização de dados pessoais, bem como a sua segurança. A nossa Política de Privacidade e Segurança está disponível nesta <span>PLATAFORMA</span> e segue as diretrizes da Lei nº 13.709/2018 (Lei Geral de Proteção de Dados), ressaltando-se que os dados utilizados pela <span>PLATAFORMA</span> serão arquivados nos termos da legislação em vigor.</p>



        <h4 class="text-start text-justify">Canal de Atendimento:</h4>

        <p class="text-justify">A <span>CARINGCRAFTERS</span> disponibiliza o endereço de e-mail <a href="mailto:atendimento@caringcrafters.com.br" class="email-link">atendimento@caringcrafters.com.br</a> como o Canal de Atendimento para receber todas as comunicações que o <strong>USUÁRIO</strong> desejar. </p>



        <h4 class="text-start text-justify">Legislação aplicável e Foro de Eleição:</h4>

        <p class="text-justify">A <span>PLATAFORMA</span> é controlada, operada e administrada pela <span>CARINGCRAFTERS</span> no município de Curitiba, Estado do Paraná, Brasil, podendo ser acessada por qualquer dispositivo conectado à Internet, independentemente de sua localização geográfica. Em vista das diferenças que podem existir entre as legislações locais e nacionais, ao acessar a <span>PLATAFORMA</span>, o <strong>USUÁRIO</strong> concorda que a legislação aplicável para fins deste termo de uso será aquela vigente na República Federativa do Brasil. </p>

        <p class="text-justify">A <span>CARINGCRAFTERS</span> e o <strong>USUÁRIO</strong> concordam que o Foro da Comarca de Curitiba/PR, Brasil, será o único competente para dirimir qualquer questão ou controvérsia oriunda ou resultante do uso da <span>PLATAFORMA</span>, renunciando expressamente a qualquer outro, por mais privilegiado que seja, ou venha a ser.</p>
        <br>
        <br>

        <p class="text-start text-justify">CARINGCRAFTERS®</p>

        <p class="text-start text-justify">Todos os direitos reservados. </p>


      </div>


    </div>
  </div>


  <?php include('./components/footer.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
