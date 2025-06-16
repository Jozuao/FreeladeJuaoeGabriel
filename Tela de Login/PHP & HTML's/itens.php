
<?php
session_start();
include 'conexao.php';
// $r = $conn->query("SELECT * FROM itens ORDER BY id DESC");

$query = "SELECT * FROM itens";
$result = pg_query($db_connection, $query);

$dados = pg_fetch_all($result);

foreach ($dados as $i) {
    echo '<div><img src="'.$i['foto'].'" width="100"><h3>'.$i['nome_item'].'</h3><p>'.$i['descricao'].'</p><p>Dono: '.$i['dono'].'</p>';
    if($_SESSION['usuario']==$i['dono']){
        echo '<a href="editar_item.php?id='.$i['id_item'].'">Editar</a> <a href="deletar_item.php?id='.$i['id_item'].'">Excluir</a>';
    }
    echo '</div>';
}

// while($i = $r->fetch_assoc()){
//     echo '<div><img src="'.$i['foto'].'" width="100"><h3>'.$i['nome_item'].'</h3><p>'.$i['descricao'].'</p><p>Dono: '.$i['dono'].'</p>';
//     if($_SESSION['usuario']==$i['dono']){
//         echo '<a href="editar_item.php?id='.$i['id'].'">Editar</a> <a href="deletar_item.php?id='.$i['id'].'">Excluir</a>';
//     }
//     echo '</div>';
// }
?>
<a href='form_item.php'>Novo</a> | <a href='dashboard.php'>Dashboard</a>
