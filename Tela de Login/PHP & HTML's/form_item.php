
<?php
session_start();
if(!isset($_SESSION['usuario'])){ header('Location: index.html'); exit(); }
?>
<form action='cadastrar_item.php' method='POST' enctype='multipart/form-data'>
<input name='nome_item' placeholder='Nome'><br>
<textarea name='descricao'></textarea><br>
<input type='file' name='foto'><br>
<button type='submit'>Cadastrar</button>
</form>
