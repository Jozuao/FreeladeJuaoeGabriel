
<?php

$host = 'localhost';
$port = '5432';
$dbname = 'phpDatabase';
$user = 'postgres';
$password = '1234';

$connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password";


$db_connection = pg_connect($connection_string);

if (!$db_connection) {
    die("Erro na conexão com o banco de dados: " . pg_last_error());
} else {
    echo "Conexão bem-sucedida ao banco de dados PostgreSQL!";
};

?>


<!-- Correto -->