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
    echo 'Satisfação têlo(a) aqui, eu sou o Streamingbot, seu assistente de filmes, posso te ajudar a escolher um filme para você assistir sozinho ou acompanhado.<br><br>';
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
    echo "<br>Me fala como você está se sentindo hoje:<br><br>"; 
    echo "Animado 🤩
        <br> Triste 😢
        <br> Desanimado 😩
        <br> Alegre 😁
        <br> Inspirado 💡
        <br> Deprimido 😓<br>";
}

if($getMesg == 1 || $getMesg == 2 || $getMesg == 3 || $getMesg == 4){
    echo "<br><br>Me fala como você está se sentindo hoje:<br><br>"; 
    echo "Animado 🤩
        <br> Triste 😢
        <br> Desanimado 😩
        <br> Alegre 😁
        <br> Inspirado 💡
        <br> Deprimido 😓<br>";
}

if($getMesg == 'alegre' || $getMesg == 'Alegre' || $getMesg == 'triste' || $getMesg == 'Triste' || $getMesg == 'desanimado' || $getMesg == 'Desanimado' || $getMesg == 'animado' || $getMesg == 'Animado' || $getMesg == 'deprimido' || $getMesg == 'Deprimido' || $getMesg == 'inspirado' || $getMesg == 'Inspirado'){
    echo '<br><br>Me diz com quem você vai assistir?<br>';
    echo '<br>sozinho 🙋‍♂️';
    echo '<br>familia 👨‍👩‍👦‍👦';
    echo '<br>crush 💏';
    echo '<br>galera 👪';   
}

// companhia
switch($getMesg){
    case 'sozinho':
    
        echo '<br><br>Encontrei os seguintes resultados:<br><br>';
        echo '<i> Clique no título ou na imagem para assistir o trailer</i><br>';

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/0TsKraGOuag">Corrida mortal</a></strong><br>';     
        echo '<br><a href="https://youtu.be/0TsKraGOuag" target="_blank"><img src="https://i.pinimg.com/originals/3f/1a/3e/3f1a3e8d54e8581dd8a4d8c9e52df13c.jpg"></a>';
        echo '<br>Disponível em: (Prime video)';
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/GMKKq_bYd0E">Resgate</a></strong><br>';     
        echo '<br><a href="https://youtu.be/GMKKq_bYd0E" target="_blank"><img src="https://i.ytimg.com/an/GMKKq_bYd0E/0c668a5e-4a3e-4923-9ee6-abf2c406ee81_mq.jpg?v=5e881e9d"></a>';
        echo '<br>Disponível em: (Netflix)'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/Rqw6kAhvNsw">Doutor sono</a></strong><br>';     
        echo '<br><a href="https://youtu.be/Rqw6kAhvNsw" target="_blank"><img src="https://www.umtantoquantonerd.com.br/wp-content/uploads/2019/11/ds_800x800-exib-300x300.jpg"></a>';
        echo '<br>Disponível em: (HBO GO)'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/4NZhwESwQfk">Project power</a></strong><br>';     
        echo '<br><a href="https://youtu.be/4NZhwESwQfk" target="_blank"><img src="https://i0.wp.com/cinemaeafins.com.br/wp-content/uploads/2020/08/Power-2020-Netflix-Trilha-Sonora.jpg?resize=300%2C300&ssl=1"></a>';
        echo '<br>Disponível em: (Netflix)'; 
        echo "<br>______________________________________";
    
        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/AhS7bRwq4K8">Sharkwater extinction</a></strong><br>';     
        echo '<br><a href="https://youtu.be/AhS7bRwq4K8" target="_blank"><img src="https://finsattached.org.uk/wp-content/uploads/2018/01/dvd-300x300.jpeg"></a>';
        echo '<br>Disponível em: (Prime video)';
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/4vC4ezh3sUc">Kiriku</a></strong><br>';     
        echo '<br><a href="https://youtu.be/4vC4ezh3sUc" target="_blank"><img src="https://viajantedotempo.com/wp-content/uploads/2020/06/Kiriku-e-as-sombras_Capa-300x300.jpg"></a>';
        echo '<br>Disponível em: (Globo play)';
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/s7MHXDEdjS0">Homem de ferro - 3</a></strong><br>';     
        echo '<br><a href="https://youtu.be/s7MHXDEdjS0" target="_blank"><img src="https://i1.wp.com/www.selectgame.com.br/wp-content/uploads/2019/10/Marvels-Avengers-Iron-Man-Homem-de-Ferro-Imagem.jpg?fit=1920%2C1080&ssl=1&resize=300%2C300"></a>';
        echo '<br>Disponível em outras plataformas';
        echo "<br>______________________________________";

        echo '<br><br>O que você achou das minhas indicações?<br>';

        echo '<br> - otimo 😁' ;
        echo '<br> - legal 😃';
        echo '<br> - bom 🙂' ;
        echo '<br> - ruim 😕';
        echo '<br> - pessimo ☹️<br>';
    break;

    case 'familia':
        echo '<br>Agora basta disputar pra ver quem escolhe o filme<br>';
        echo '<br>Encontrei os seguintes resultados:<br><br>';
        echo '<i> Clique no título ou na imagem para assistir o trailer</i><br>';

        echo '<br><br><strong><a target = "_blank" href="https://www.youtube.com/embed/jFWnVdsSgxs">Madagascar 3</a></strong><br><br>';
        echo '<a href="https://www.youtube.com/embed/jFWnVdsSgxs" target = "_blank"><img src="https://images-na.ssl-images-amazon.com/images/I/514UCIcNQHL.__AC_SY300_QL70_ML2_.jpg" /></a>'; 
        echo '<br>Disponível em: (Netflix)';
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/--LN7i3vuTU">Transformers 4</a></strong><br><br>';
        echo '<a href="https://youtu.be/--LN7i3vuTU" target = "_blank"><img src="https://conteudo.imguol.com.br/c/entretenimento/2014/07/16/poster-em-portugues-de-transformers-4-de-michael-bay-1405538093917_300x300.jpg" /></a>'; 
        echo '<br>Disponível em: (Netflix e Prime video)';
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/kynaw8oQTPk">Norbit</a></strong><br>';
        echo '<br><a href="https://youtu.be/kynaw8oQTPk" target="_blank"><img src="https://images-na.ssl-images-amazon.com/images/I/514kribzjHL._SY300_QL70_ML2_.jpg"></a>';
        echo '<br>Disponível em: (Netflix)'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/016gjN4alcg">Como treinar o seu dragão - 2</a></strong><br>';
        echo '<br><a href="https://youtu.be/016gjN4alcg" target="_blank"><img src="https://conteudo.imguol.com.br/c/entretenimento/2014/06/16/poster-de-como-treinar-o-seu-dragao-2-do-diretor-dean-deblois-1402957931402_300x300.jpg"></a>';
        echo '<br>Disponível em: (Globo play)'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/kmXjPbN-rYU">Harry Potter e as relíquias da morte</a></strong><br>';     
        echo '<br><a href="https://youtu.be/kmXjPbN-rYU" target="_blank"><img src="https://pm1.narvii.com/6342/b821d61a6557b2d95048644d99b8b360d7974de0_00.jpg"></a>';
        echo '<br>Disponível em: (HBO GO)'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/8AUQqspFRK8">As Crônicas de Nárnia - Príncipe Caspian</a></strong><br>';
        echo '<br><a href="https://youtu.be/8AUQqspFRK8" target="_blank"><img src="https://www.vagalume.com.br/as-cronicas-de-narnia/discografia/the-chronicles-of-narnia-prince-caspian.jpg"></a>';
        echo '<br>Disponível em outras plataformas';
        echo "<br>______________________________________";
       
        echo '<br><br>O que você achou das minhas indicações?<br>';

        echo '<br> - otimo 😁' ;
        echo '<br> - legal 😃';
        echo '<br> - bom 🙂' ;
        echo '<br> - ruim 😕';
        echo '<br> - pessimo ☹️<br>';

    break;
    case 'galera':
        echo '<br>Vamos nessa!';
        echo '<br><br>Encontrei os seguintes resultados:<br><br>';
        echo '<i> Clique no título ou na imagem para assistir o trailer</i><br>';
        
        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/8hDdnYlNUZ4">Esquadrão 6</a></strong><br>';     
        echo '<br><a href="https://youtu.be/8hDdnYlNUZ4" target="_blank"><img src="https://www.estrelando.com.br/uploads/2019/12/08/ryan-reynolds-esquadr-o-6-1575830266.300x300.jpg"></a>';
        echo '<br>Disponível em: (Netflix)'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/fwt6h6lt1Nc">Jumanji - Next level</a></strong><br>';     
        echo '<br><a href="https://youtu.be/fwt6h6lt1Nc" target="_blank"><img src="https://jornaldorecreio.com.br/wp-content/uploads/2020/01/jumanji-the-next-level-box-office-day-1-early-trends-the-dwayne-johnson-starrer-dominates-the-new-releases-001-300x300.jpg"></a>';
        echo '<br>Disponível em: (HBO GO)'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/oHVqKjKILoE">As tartarugas ninjas</a></strong><br>';     
        echo '<br><a href="https://youtu.be/oHVqKjKILoE" target="_blank"><img src="https://2.bp.blogspot.com/-fbI8YCXBU9I/U-CV9DvR1FI/AAAAAAAAAE0/UJvmdqnIZIE/s320/Teenage+Mutant+Ninja+Turtles+Movie+Soundtrack.jpg"></a>';
        echo '<br>Disponível em: (Netflix)'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/faQYgdXPRnU">Uma noite de crime</a></strong><br>';     
        echo '<br><a href="https://youtu.be/faQYgdXPRnU" target="_blank"><img src="https://conteudo.imguol.com.br/c/entretenimento/2013/10/31/cena-de-uma-noite-de-crime-de-james-demonaco-1383243563189_300x300.jpg"></a>';
        echo '<br>Disponível em: (Globo play e Prime video)'; 
        echo "<br>______________________________________";
        
        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/8pYp4T8TdP4">Esquadrão suicida</a></strong><br>';     
        echo '<br><a href="https://youtu.be/8pYp4T8TdP4" target="_blank"><img src=" https://1.bp.blogspot.com/-TTyPGUyTq_A/V6R6jfQzZZI/AAAAAAAAB1I/OaP6QYQfH9INb6wcjM6oDqFAjacNFO_IwCLcB/s1600/Esquadr%25C3%25A3o-Suicida-Poster-Main-e1467044533757-300x300.jpg"></a>';
        echo '<br>Disponível em: (Netflix)'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/xy9Wntkb7KU">Vingadores</a></strong><br>';     
        echo '<br><a href="https://youtu.be/xy9Wntkb7KU" target="_blank"><img src="https://conteudo.imguol.com.br/c/noticias/2013/05/29/popular-entre-os-usuarios-da-internet-a-franquia-de-filmes-os-vingadores-ganhou-diversas-versoes-na-mao-dos-internautas-os-herois-foram-transformados-em-animais-meninas-desenhos-e-ate-1369843313669_300x300.jpg"></a>';
        echo '<br>Disponível em outras plataformas'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/hEJnMQG9ev8">Mad max - Estrada da fúria</a></strong><br>';     
        echo '<br><a href="https://youtu.be/hEJnMQG9ev8" target="_blank"><img src="https://img.discogs.com/irLWQfkkob4QZY9kVow8NSy9v1E=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-7452605-1539286978-1105.jpeg.jpg"></a>';
        echo '<br>Disponível em outras plataformas'; 
        echo "<br>______________________________________";

        echo '<br><br>O que você achou das minhas indicações?<br>';

        echo '<br> - otimo 😁' ;
        echo '<br> - legal 😃';
        echo '<br> - bom 🙂' ;
        echo '<br> - ruim 😕';
        echo '<br> - pessimo ☹️<br>';
    break;
    case 'crush':
        echo 'Huuum interessante, aposto que irá gostar desses filmes...';
        echo '<br><br>Encontrei os seguintes resultados:<br><br>';
        echo '<i> Clique no título ou na imagem para assistir o trailer</i><br>';
   
        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/x6A_3Y9ML70">Como se fosse a primeira vez</a></strong><br>';     
        echo '<br><a href="https://youtu.be/x6A_3Y9ML70" target="_blank"><img src="https://img.discogs.com/LVuK8TpSdmAbnT2tkiNEntND058=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-12456307-1535642829-1846.jpeg.jpg"></a>';
        echo '<br>Disponível em: (Globo play)'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/DEwIt4amgq4">50 Tons de cinza</a></strong><br>'; 
        echo '<br><a href="https://youtu.be/DEwIt4amgq4" target="_blank"><img src="https://conteudo.imguol.com.br/c/entretenimento/2014/11/14/cartaz-nacional-oficial-de-cinquenta-tons-de-cinza-mostra-anastasia-dakota-johnson-amarrada-enquanto-christian-grey-jamie-dornan-a-beija-1415969720639_300x300.jpg"></a>';
        echo '<br>Disponível em: (Globo play)'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/aqpETeNbcdY">Encontro explosivo</a></strong><br>';     
        echo '<br><a href="https://youtu.be/aqpETeNbcdY" target="_blank"><img src="https://ci.i.uol.com.br/cinema/2010/03/30/cameron-diaz-e-tom-cruise-protagonizam-a-comedia-de-acao-encontro-explosivo-1269980061161_300x300.jpg"></a>';
        echo '<br>Disponível em: (Prime video)'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/kiHb5EgTTsk">Podres de ricos</a></strong><br>';     
        echo '<br><a href="https://youtu.be/kiHb5EgTTsk" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/HkmV24Ip_pUVGcLELqV8qQ59RG6603Q2V5cSC-SMoEDHi3kZZ14cbmiQ4KVgWOGsrqmQCNrRb0XbWeVqNqocq1WKuP4BnCWxX4qCCKQgmqZFjk4"></a>';
        echo '<br>Disponível em: (HBO GO)'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/dAnzuTb-A8k">Até que a sorte nos separe</a></strong><br>';     
        echo '<br><a href="https://youtu.be/dAnzuTb-A8k" target="_blank"><img src="https://3.bp.blogspot.com/-T72fHKki0RQ/UJrT-IC_JyI/AAAAAAAAC_4/j2LKPx50Nis/s1600/atequeasorte.jpg"></a>';
        echo '<br>Disponível em: (Netflix)'; 
        echo "<br>______________________________________";
        
        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/CHekzSiZjrY">Titanic</a></strong><br>';     
        echo '<br><a href="https://youtu.be/CHekzSiZjrY" target="_blank"><img src="https://theartmad.com/wp-content/uploads/2015/08/Titanic-Romantic-Wallpapers-41-300x300.jpg"></a>';
        echo '<br>Disponível em outras plataformas'; 
        echo "<br>______________________________________";

        echo '<br><br><strong><a target = "_blank" href="https://youtu.be/XDTBLSkUmYk">O maravilhoso agora</a></strong><br>';     
        echo '<br><a href="https://youtu.be/XDTBLSkUmYk" target="_blank"><img src="https://365filmesem365dias.files.wordpress.com/2016/01/image12.jpeg?w=300&h=300"></a>';
        echo '<br>Disponível em outras plataformas'; 
        echo "<br>______________________________________";
        
        echo '<br><br>O que você achou das minhas indicações?<br>';

        echo '<br> - otimo 😁' ;
        echo '<br> - legal 😃';
        echo '<br> - bom 🙂' ;
        echo '<br> - ruim 😕';
        echo '<br> - pessimo ☹️<br>';
    break;            
}

if($getMesg == 'legal' || $getMesg =='otimo' ){
    echo 'Opa fico feliz em ter ajudado, volte sempre! 😁 ';
}elseif($getMesg == 'ruim' || $getMesg == 'pessimo'){
    echo 'Que pena, vou tentar melhorar para que possa lhe ajudar melhor futuramente 😢 ';
}elseif($getMesg == 'bom'){
    echo 'Ok, vou melhorar ainda mais 🙂';
}

?>
