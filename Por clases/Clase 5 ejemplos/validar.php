<?php

function esRequerido($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    
    if ($data) {
        
        return $data;
    } else {
        echo 'Ponete las pilas y cargame todos los campos';
        
        return false;
    }
}

