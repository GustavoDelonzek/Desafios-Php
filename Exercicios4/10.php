<?php
    /*Cadastre 10 pessoas utilizando vetores associativos, sendo que você deverá utilizar um vetor para cadastrar cada pessoa. Obtenha seguintes dados do usuário: nome, cidade, idade, sexo. Ao final do cadastro e armazenamento seu programa deverá exibir: 
    Uma listagem de todos os nomes e idades das pessoas cadastradas; 
    Uma listagem de todos os nomes de quem mora em Guarapuava;  
    Uma listagem de todos os nomes de quem tem mais de 18 anos; 
    E quantas pessoas cadastradas são do sexo feminino. */


    for ($i = 0; $i < 10; $i ++){
        echo "\n-----------------------\nCadastro pessoa " . $i + 1 . "\n";
        $nome = readline("Digite o nome: ");
        $cidade = readline("Digite a cidade: ");
        $idade = readline("Digite a idade: ");
        $sexo = readline("Digite o sexo (M/F): ");


        $usuarios[] = array('nome' => $nome, 'cidade' => $cidade, 'idade' => $idade, 'sexo' => $sexo);
    }

    echo "\n-----------------------\nPessoas cadastradas\n";
    for ($i = 0; $i < 10; $i ++){
        echo "Nome:" . $usuarios[$i]['nome'] . "- Idade: " . $usuarios[$i]['idade'] . "\n";
    }

    echo "\n-----------------------\nMoradores de Guarapuava\n";
    for ($i = 0; $i < 10; $i ++){
        if($usuarios[$i]['cidade'] == "Guarapuava" ){

        echo "Nome:" . $usuarios[$i]['nome'] . "\n";
        }
    }

    echo "\n-----------------------\nPessoas maiores de idade\n";
    for ($i = 0; $i < 10; $i ++){
        if($usuarios[$i]['idade'] > 18 && is_int($usuarios[$i]['idade']) ){

            echo "Nome:" . $usuarios[$i]['nome'] . "\n";
        }
    }


    echo "\n-----------------------\nPessoas sexo feminino\n";
    for ($i = 0; $i < 10; $i ++){
        if($usuarios[$i]['sexo'] == "F" ){

            echo "Nome:" . $usuarios[$i]['nome'] . "\n";
        }
    }






?>