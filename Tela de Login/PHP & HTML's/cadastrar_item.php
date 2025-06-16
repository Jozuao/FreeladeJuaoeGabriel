
<?php
session_start();
include 'conexao.php';
$n = $_POST['nome_item'];
$d = $_POST['descricao'];
$don = $_SESSION['usuario'];
$foto = 'pasta_uploads/' . time() . '_' . basename($_FILES['foto']['name']);
move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

$query = "INSERT INTO itens(nome_item, descricao, foto, dono) VALUES ('$n', '$d', '$foto', '$don')";
$result = pg_query($db_connection, $query);

// $conn->query("INSERT INTO itens(nome_item, descricao, foto, dono) VALUES ('$n', '$d', '$foto', '$don')");
echo 'Item cadastrado! <a href="itens.php">Ver itens</a>';
?>
