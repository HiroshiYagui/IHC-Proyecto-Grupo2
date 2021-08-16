<?php
/*define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
*/
include('../layout/dbcon.php');


$html = '';
$key = $_POST['key'];

$result = $con->query(
    'SELECT * FROM usuario 
    WHERE  nombre LIKE "%'.strip_tags($key).'%"'."and tipo='paciente'"
);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {                
        $html .= '<div><a class="suggest-element" data="'.utf8_encode($row['nombre']).'" id="cliente'.$row['id'].'">'.utf8_encode($row['nombre']).'</a></div>';
    }
}
echo $html;
?>