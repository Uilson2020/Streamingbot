<?php

// conectando com a database
$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

// recebendo a mensagem do usuário por meio de ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);
//$getOpt = 0;
// verificar a consulta do usuário para a consulta do banco de dados
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");



/* se a consulta do usuário corresponder à consulta do banco de dados, mostrará a resposta,
caso contrário, ele irá para o else */
if(mysqli_num_rows($run_query) > 0){

    //buscar reprodução do banco de dados de acordo com a consulta do usuário
    $fetch_data = mysqli_fetch_assoc($run_query);

    //armazenar a resposta a uma variável que enviaremos para ajax
    $replay = $fetch_data['replies'];
    echo $replay;

}

// inicio do fluxo
if($getMesg == 'sim'){
    echo 'Satisfação têlo(a) aqui, eu sou o Streamingbot, seu assistente de filmes, posso te ajdar a escolher um filme ideal para voce assistir sozinho ou com outras pessoas.<br><br>';
}

if($getMesg == 'sim'){
    echo "Então vamos lá...<br>";
    echo "Qual plataforma de streaming voce conhece?<br>
    <br>1 - Netflix 
    <br>2 - HBO GO 
    <br>3 - Prime video 
    <br>4 - Globoplay";
    echo "<br><br>Escolha um numero:";
    
}elseif($getMesg == 'não' || $getMesg == 'nao' || $getMesg == 'n'){
    echo "ok, vamos direto ao ponto...";
    echo "<br>Como voce se sente hoje, alegre, desanimado ou triste?";
}

// humor
switch($getMesg){
    case 'alegre':
        echo '<br><br>Você vai assistir sozinho, com a galera, familia ou com a(o) crush?';
        echo '<br><br>Basta responder por exemplo: galera ou crush';
    break;
    case 'triste':
        echo '<br><br>Me diz se vai assistir sozinho ou com a galera?';
        echo '<br>Pode me responder dizendo apenas: sozinho ou familia';
    break;
    case 'desanimado':
        echo '<br><br>Você vai assistir sozinho, com a galera, familia ou com a(o) crush?';
        echo '<br><br>Basta responder por exemplo: galera ou crush';
    break;
    case 'animado':
        echo '<br><br>Me diz se vai assistir sozinho ou com a galera?';
        echo '<br>Pode me responder dizendo apenas: crush ou familia';
    break;
    case 'deprimido':
        echo '<br><br>Você vai assistir sozinho, com a galera, familia ou com a(o) crush?';
        echo '<br><br>Basta responder por exemplo: sozinho';
    break;
    case 'inspirado':
        echo '<br><br>Me diz se vai assistir sozinho ou com a galera?';
        echo '<br>Pode me responder dizendo apenas: galera ou familia';
    break;
}

// companhia
switch($getMesg){
    case 'sozinho':
        echo '<br><br><strong>Corrida mortal</strong>';
            echo "<br><a target='_blank'><img src='https://i.pinimg.com/originals/3f/1a/3e/3f1a3e8d54e8581dd8a4d8c9e52df13c.jpg'></a>";
        echo '<br><br><strong>Resgate</strong>';
            echo "<br><a target='_blank'><img src='https://i.ytimg.com/an/GMKKq_bYd0E/0c668a5e-4a3e-4923-9ee6-abf2c406ee81_mq.jpg?v=5e881e9d'></a>";
        echo '<br><br><strong>Project power</strong>';
            echo "<br><a target='_blank'><img src='https://i0.wp.com/cinemaeafins.com.br/wp-content/uploads/2020/08/Power-2020-Netflix-Trilha-Sonora.jpg?resize=300%2C300&ssl=1'></a>";

        echo '<br><br>O que achou das indicações?<br>';

        echo '<br> - otimo';
        echo '<br> - legal';
        echo '<br> - bom';
        echo '<br> - ruim';
        echo '<br> - pessimo<br>';
    break;

    case 'familia':
        echo '<br><br>Agora basta disputar pra ver quem escolhe o filme<br>';

        echo '<br><br><style="text-align: center;" ><strong><a target = "_blank" href="https://www.youtube.com/embed/jFWnVdsSgxs">Madagascar</a></strong><br><br>';
            echo '<a href="https://www.youtube.com/embed/jFWnVdsSgxs" target = "_blank"><img src="https://images-na.ssl-images-amazon.com/images/I/514UCIcNQHL.__AC_SY300_QL70_ML2_.jpg" /></a>'; 
        echo '<br><br><strong>Norbit</strong>';
            echo "<br><a target='_blank'><img src='https://images-na.ssl-images-amazon.com/images/I/514kribzjHL._SY300_QL70_ML2_.jpg'></a>";
        echo '<br><br><strong>Como treinar o seu dragão - 2</strong>';
            echo "<br><a target='_blank'><img src='https://conteudo.imguol.com.br/c/entretenimento/2014/06/16/poster-de-como-treinar-o-seu-dragao-2-do-diretor-dean-deblois-1402957931402_300x300.jpg'></a>";
        echo '<br><br><strong>As Crônicas de Nárnia - Príncipe Caspian</strong>';
            echo "<br><a target='_blank'><img src='https://www.vagalume.com.br/as-cronicas-de-narnia/discografia/the-chronicles-of-narnia-prince-caspian.jpg'></a>";
        echo '<br><br><strong>Harry Potter e as reliquias da morte</strong>';
            echo "<br><a target='_blank'><img src='https://pm1.narvii.com/6342/b821d61a6557b2d95048644d99b8b360d7974de0_00.jpg'></a>";  
        
            //echo '<iframe frameborder="0" src="https://youtu.be/-_GftUTRWHM?autoplay=1" width="100%" height="100%" allow="autoplay" allowfullscreen>';
            //echo '<iframe width="300" height="300" src="https://www.youtube.com/embed/NnDGWyfP7q4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
       
        echo '<br><br>O que achou das indicações?<br>';

        echo '<br> - otimo';
        echo '<br> - legal';
        echo '<br> - bom';
        echo '<br> - ruim';
        echo '<br> - pessimo<br>';

    break;
    case 'galera':
        echo '<br>Vamos nessa!';

        echo '<br><br><strong>Vingadores</strong>';
            echo "<br><a target='_blank'><img src='https://conteudo.imguol.com.br/c/noticias/2013/05/29/popular-entre-os-usuarios-da-internet-a-franquia-de-filmes-os-vingadores-ganhou-diversas-versoes-na-mao-dos-internautas-os-herois-foram-transformados-em-animais-meninas-desenhos-e-ate-1369843313669_300x300.jpg'></a>";
        echo '<br><br><strong>Rambo 2</strong>';
            echo "<br><a target='_blank'><img src='https://i.pinimg.com/originals/eb/5b/fa/eb5bfa21490547429ddba79437d536c9.png'></a>";

        echo '<br><br>O que achou das indicações?<br>';

        echo '<br> - otimo';
        echo '<br> - legal';
        echo '<br> - bom';
        echo '<br> - ruim';
        echo '<br> - pessimo<br>';
    break;
    case 'crush':
        echo '<br>Hum interessante, aposto que irá gostar desses';

        echo '<br><br><strong>Como se fosse a primeira vez</strong>';
            echo "<br><a target='_blank'><img src='https://i146.photobucket.com/albums/r254/alvaromuto/Covers/ComoSeFosseAPrimeiraVez-TrilhaSonor.jpg'></a>";
        echo '<br><br><strong>50 Tons de cinza</strong>';
            echo "<br><a target='_blank'><img src='https://conteudo.imguol.com.br/c/entretenimento/2014/11/14/cartaz-nacional-oficial-de-cinquenta-tons-de-cinza-mostra-anastasia-dakota-johnson-amarrada-enquanto-christian-grey-jamie-dornan-a-beija-1415969720639_300x300.jpg'></a>";
        echo '<br><br><strong>Um lugar chamado Notthing Hill</strong>';
            echo "<br><a target='_blank'><img src=' https://img.discogs.com/76iIM7MaVDZ-yvf7Wb9rsUr3doM=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-3529109-1490396713-4380.jpeg.jpg'></a>";
        echo '<br><br><strong>Encontro explosivo</strong>';
            echo "<br><a target='_blank'><img src='https://ci.i.uol.com.br/cinema/2010/03/30/cameron-diaz-e-tom-cruise-protagonizam-a-comedia-de-acao-encontro-explosivo-1269980061161_300x300.jpg'></a>";
        
        echo '<br><br>O que achou das indicações?<br>';

        echo '<br> - otimo';
        echo '<br> - legal';
        echo '<br> - bom';
        echo '<br> - ruim';
        echo '<br> - pessimo<br>';
                       
}

if($getMesg == 'legal' || $getMesg =='otimo' ){
    echo 'Opa fico feliz em ter ajudado :) ';
}elseif($getMesg == 'ruim' || $getMesg == 'pessimo'){
    echo 'Que pena, vou tentar melhorar para que eu possa te ajudar melhor futuramente :( ';
}elseif($getMesg == 'bom'){
    echo 'Ok, acho que ainda não estou bom o quanto gostaria, mas vou melhorar';
}

?>
