
<?php
session_start();

// $query = "SELECT * FROM usuarios WHERE email='$e' AND senha='$s'";
// $result = pg_query($db_connection, $query);

if(!isset($_SESSION['usuario'])){ 
    header('Location: index.html'); 
    exit(); 
}
?>
<h2>Bem-vindo <?php echo $_SESSION['usuario']; ?></h2>
<a href='form_item.php'>Cadastrar item</a> | <a href='itens.php'>Ver itens</a> | <a href='logout.php'>Sair</a>
