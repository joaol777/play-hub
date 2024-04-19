<?php
session_start();
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $conexao = novaConexao();

    // Use declarações preparadas para evitar injeção de SQL
    $sql = "SELECT * FROM tblusuario WHERE usuNome = :username AND usuSenha = :password";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        // As credenciais estão corretas
        $_SESSION["username"] = $username;
        header("Location: ../
        Principal.html");
    } else {
        // Credenciais incorretas, redirecione de volta para a página de login
        header("Location: ../pgs/erro.php");
    }
} else {
    // Redirecione de volta para a página de login caso alguém tente acessar este arquivo diretamente
    header("Location: ../pgs/erro.php");
}
?>
