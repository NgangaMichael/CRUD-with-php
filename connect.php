<?php

    $con = new mysqli('localhost', 'root', '', 'crudoperation');
    if(!$con) {
        echo 'Database not connected';
    }

?>