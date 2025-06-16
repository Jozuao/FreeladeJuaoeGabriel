
<?php
session_start();
include 'conexao.php';
$e = $_POST['email'];
$s = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE email='$e' AND senha='$s'";
$result = pg_query($db_connection, $query);

// echo "$result";

// echo pg_fetch_all($result);
// print_r(pg_fetch_all($result));

$dados = pg_fetch_all($result);

if(pg_num_rows($result) >= 1){ 
    $_SESSION['usuario']=$dados[0]['name'];
    $_SESSION['email']=$e; header('Location: dashboard.php'); 
}
else { echo 'Erro'; }
?>

<!-- Correto -->