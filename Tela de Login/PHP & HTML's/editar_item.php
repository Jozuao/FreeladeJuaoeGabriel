
<?php
session_start();
include 'conexao.php';
$id = $_GET['id'];
if($_SERVER['REQUEST_METHOD']=='POST'){
    $n=$_POST['nome_item'];
    $d=$_POST['descricao'];

    $query = "UPDATE itens SET nome_item='$n', descricao='$d' WHERE id_item='$id' AND dono='".$_SESSION['usuario']."'";
    $result = pg_query($db_connection, $query);

    // $conn->query("UPDATE itens SET nome_item='$n', descricao='$d' WHERE id=$id AND dono='".$_SESSION['usuario']."'");
    echo 'Atualizado! <a href="itens.php">Voltar</a>';
    exit();
}
$query = "SELECT * FROM itens WHERE id_item='$id' AND dono='".$_SESSION['usuario']."'";
$result = pg_query($db_connection, $query);

$dados = pg_fetch_all($result);
$i = $dados[0];


?>
<form method='POST'>
<input name='nome_item' value='<?php echo $i['nome_item'];?>'>
<br>
<textarea name='descricao'><?php echo $i['descricao']; ?></textarea>
<br>
<button type='submit'>Salvar</button>
</form>
