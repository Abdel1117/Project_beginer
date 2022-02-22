<?php 
require_once("header.php");
$db = new PDO('mysql:host=localhost;dbname=test', 'root' , '');
$data = new DataManager($db);
header('Content-Type: text/html; charset=ISO-8859-1');
?>

<section class="bodycontainer">

<h1 class="title-title">News</h1>
<?php
$data->SelectNews($db);

?>

</section>




