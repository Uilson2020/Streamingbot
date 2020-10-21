<?php

// conectando com a database
$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

// recebendo a mensagem do usuário por meio de ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

// verificar a consulta do usuário para a consulta do banco de dados
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

/* se a consulta do usuário corresponder à consulta do banco de dados, mostraremos a resposta,
caso contrário, ele irá para o else statement */
if(mysqli_num_rows($run_query) > 0){
    //fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing replay to a varible which we'll send to ajax
    $replay = $fetch_data['replies'];
    echo $replay;
  
}else{
    echo "Desculpa, não entendi.";
}

?>
