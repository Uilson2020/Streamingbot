<?php

include "Cep.php";
include "Bot.php";


$bot = new Bot;

$questions = [
    "php" => "É uma linguagem de programação Server Side",
    "linux" => "É um sistema operacional desenvolvido por Linus Torvald",
    "dns" => "O DNS (Domain Name System) é um sistema de gestão de nomes para computadores",
    "chatbot" => "É um programa de computador que tenta simular um ser humano na conversação com as pessoas",
    "qual seu nome" => "Meu nome é " . $bot->getName()
];

if (isset($_GET['msg'])) {
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;

        # trata uma requisição para um cep informado
        # msg = cep XXXXX-XXX
        # REGEX - Expressão Regular
        if (preg_match('/cep/', $msg) == 1) { # 1st parâmetro é a expressão de busca | 2nd é a sequência ser procurada
            preg_match('/[0-9]*$/', $msg, $matches); # o retorno é um array

            $cep = new Cep($matches[0]); # pega a primeira posição do array
            $data = $cep->getData(); # retorna os dados da API

            $tmp  = $data[0] . '<br>'; # logradouro
            $tmp .= $data[1] . '<br>'; # bairro
            $tmp .= $data[2] . '/' . $data[3]; # cidade/estado

            $botty->reply($tmp); # retorna para o chat a resposta
            die(); # para o processo por aqui
        }

        if (preg_match('/arduino/', $msg) == 1) { # 1st parâmetro é a expressão de busca | 2nd é a sequência ser procurada
            $obj = json_decode(file_get_contents('http://edsonmelo.atwebpages.com/iot/get_all.php'), true);
            $tmp = 'Data: ' . $obj[0]['data'] . '<br>';
            $tmp .= 'Temperatura: ' . $obj[0]['temperatura'];

            $botty->reply($tmp); # retorna para o chat a resposta
            die(); # para o processo por aqui
        }


        $generics = ['oi', 'oie', 'ola', 'olá', 'bom dia', 'boa tarde', 'boa noite'];
        if (in_array($msg, $generics)) {
            $botty->reply('Olá. Em que posso ajudar?');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Desculpe, não entendi.");
        } else {
            $botty -> reply($botty -> ask($msg, $questions));
        }
    });
}
