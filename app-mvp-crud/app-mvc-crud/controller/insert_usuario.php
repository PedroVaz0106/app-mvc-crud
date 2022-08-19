<?php

include "../model/conexao.class.php";
include "../model/manager.class.php";

$manager = new Manager();

if(!empty($_POST)){
    $manager->insert_usuario($_POST);
    header("Location: ../index.php?cod=1");
}

?>