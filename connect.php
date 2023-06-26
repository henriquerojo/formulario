<?php
$host = "localhost"; // endereço do servidor MySQL
$usuario = "root"; // usuário do MySQL
$senha = ""; // senha do MySQL
$banco = "formulario"; // nome do banco de dados
$charset = "utf8";
$porta = "3306";

// Criar uma conexão com o banco de dados
try 
{
    $connect = new mysqli($host, $usuario, $senha, $banco, $porta);
    mysqli_set_charset($connect, $charset);
} catch (\Throwable $th) 
{
    echo "Atenção ERRO: ".$th;
}
?>
