<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Cadastrar</title>
</head>
<body>
    <div id="corpo-form">
        <h1>CADASTRAR</h1>
        <form method="POST">

        <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
        <input type="tel" name="telefone" placeholder="Telefone" maxlenght="30">
        <input type="text" name="email" placeholder="Usuário" maxlenght="40">
        <input type="password" name="senha" placeholder="Senha"maxlenght="15">
        <input type="password" name="confSenha" placeholder="Confirmar Senha">

        <input type="submit" value="Confirmar">

        <!-- Criando o banco de dados usando phpmyadmin com o xammp

        create database projeto_login;

        use database projeto_login;

        create table usuarios(
            id_usuario int auto_increment primary key
            nome varchar(30),
            telefone varchar(30),
            email varchar(40),
            senha varchar(32)
        ); -->

    </div>
    <?php

    
    
    ?>
   
</body>
</html>