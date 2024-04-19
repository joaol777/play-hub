<?php
function novaConexao()
{
    $dsn = 'mysql:host=br612.hostgator.com.br;dbname=hubsap45_bd_ejogos';
    $usuario = 'hubsap45_ejogos_admin' ;
    $senha= 'ejogos1o39';

try
{
    $conexao = new PDO($dsn, $usuario,$senha);
    return $conexao;
}catch(PDOException $e)
{
    echo'erro ao tentar se conectar com o banco';
}
}
novaConexao();
?>