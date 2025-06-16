
<?php
session_start();
include 'conexao.php';
$id = $_GET['id'];

$query = "SELECT * FROM itens WHERE id_item='$id' AND dono='".$_SESSION['usuario']."'";
$result = pg_query($db_connection, $query);

$dados = pg_fetch_all($result);

// $r = $conn->query("SELECT * FROM itens WHERE id=$id AND dono='".$_SESSION['usuario']."'");
if(pg_num_rows($result) >= 1){
    // $i=$r->fetch_assoc();
    $i = $dados[0];
    unlink($i['foto']);
    // $conn->query("DELETE FROM itens WHERE id=$id");

    $query = "DELETE FROM itens WHERE id_item='$id'";
    $result = pg_query($db_connection, $query);
    
    echo 'Excluído! <a href="itens.php">Voltar</a>';
} else {
    echo 'Permissão negada.';
}
?>
