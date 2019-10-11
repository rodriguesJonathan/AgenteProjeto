<?php
header('Content-type: text/html; charset=utf-8');

if (isset($_POST)):

    $nome    = (isset($_POST['nome']))? $_POST['nome']: '';
    $email   = (isset($_POST['email']))? $_POST['email']: '';
    $senha = (isset($_POST['senha']))? $_POST['senha']: '';
    $sus     = (isset($_POST['sus']))? $_POST['sus']: '';
    $cep     = (isset($_POST['cep']))? $_POST['cep']: '';
    $numero     = (isset($_POST['numero']))? $_POST['numero']: '';
    $endereco     = (isset($_POST['endereco']))? $_POST['endereco']: '';

    // Valida se foram preenchidos todos os campos
    if (empty($nome) || empty($email) || empty($senha) || empty($sus) || empty($cep) || empty($numero) || empty($endereco)):
        $array  = array('tipo' => 'alert alert-danger', 'mensagem' => 'Preencher todos os campos obrigat�rios(*)!');
        echo json_encode($array);
    else:

        // Grava no banco de dados as informa��es do contato
        $opcoes = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');

        $pdo = new PDO('mysql:host=localhost;dbname=id11181286_bancoagente', 'id11181286_ramon', 'senha', $opcoes);

        $sql = "INSERT INTO usuario (nome, email, senha, sus, cep, numero , endereco)VALUES(?, ?, ?, ?,?,?,?)";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(1, $nome);
        $stm->bindValue(2, $email);
        $stm->bindValue(3, $senha);
        $stm->bindValue(4, $sus);
        $stm->bindValue(5, $cep);
        $stm->bindValue(6, $numero);
        $stm->bindValue(7, $endereco);
        $stm->execute();

        

    endif;
endif;

?>