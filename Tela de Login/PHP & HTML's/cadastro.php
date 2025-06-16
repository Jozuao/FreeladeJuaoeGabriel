
<?php
include 'conexao.php';
$n = $_POST['name'];
$e = $_POST['email'];
$s = $_POST['password']; 


$query = "INSERT INTO usuarios(name, email, senha) VALUES ('$n', '$e', '$s')";
$result = pg_query($db_connection, $query);

echo 'Cadastrado! <a href="tela_de_login.html">Login</a>';
?>

<!-- Correto -->
