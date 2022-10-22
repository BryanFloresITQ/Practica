<?php

function ingresar_datos($conexion, $nombre, $cedula,$password){
    $insertar = $conexion->query("INSERT INTO registro "
            . "(nombre, cedula, password, id_perfil) "
            . "VALUES ('$nombre', '$cedula', '$password', '2')");
    
    return $insertar;
}

function traer_datos($conexion, $cedula, $password){
    
    $traer = "SELECT * FROM registro WHERE cedula='$cedula' AND password='$password'";
    
    $resultado = $conexion->query($traer);
    
    return $resultado;
    
}

function ingresar_carga_ritmo_trabajo($conexion, $pregunta_1,$pregunta_2,$pregunta_3,$pregunta_4,$suma1){
    
    $insertar = $conexion->query("INSERT INTO carga_ritmo_trabajo (pregunta_1, pregunta_2, pregunta_3, pregunta_4, total)"
            . " VALUES ('$pregunta_1', '$pregunta_2', '$pregunta_3', '$pregunta_4', '$suma1')");
    
    return $insertar;
    
}

function ingresar_desarrollo_competencias($conexion, $pregunta_5,$pregunta_6,$pregunta_7,$pregunta_8,$suma2){
    
    $insertar = $conexion->query("INSERT INTO desarrollo_competencias (pregunta_1, pregunta_2, pregunta_3, pregunta_4, total)"
            . " VALUES ('$pregunta_5', '$pregunta_6', '$pregunta_7', '$pregunta_8', '$suma2')");
    
    return $insertar;
    
}

function ingresar_liderazgo($conexion, $pregunta_9,$pregunta_10,$pregunta_11,$pregunta_12,$pregunta_13,$pregunta_14,$suma3){
    
    $insertar = $conexion->query("INSERT INTO liderazgo (pregunta_1, pregunta_2, pregunta_3, pregunta_4, pregunta_5, pregunta_6, total)"
            . " VALUES ('$pregunta_9','$pregunta_10','$pregunta_11','$pregunta_12','$pregunta_13','$pregunta_14','$suma3')");
    
    return $insertar;
    
}

function ingresar_margen_accion_control($conexion, $pregunta_15,$pregunta_16,$pregunta_17,$pregunta_18,$suma4){
    
    $insertar = $conexion->query("INSERT INTO margen_accion_control (pregunta_1, pregunta_2, pregunta_3, pregunta_4, total)"
            . " VALUES ('$pregunta_15','$pregunta_16','$pregunta_17','$pregunta_18','$suma4')");
    
    return $insertar;
    
}

function ingresar_organizacion_trabajo($conexion, $pregunta_19,$pregunta_20,$pregunta_21,$pregunta_22,$pregunta_23,$pregunta_24,$suma5){
    
    $insertar = $conexion->query("INSERT INTO organizacion_trabajo (pregunta_1, pregunta_2, pregunta_3, pregunta_4,pregunta_5,pregunta_6, total)"
            . " VALUES ('$pregunta_19','$pregunta_20','$pregunta_21','$pregunta_22','$pregunta_23','$pregunta_24','$suma5')");
    
    return $insertar;
    
}

function ingresar_recuperacion($conexion, $pregunta_25,$pregunta_26,$pregunta_27,$pregunta_28,$pregunta_29,$suma6){
    
    $insertar = $conexion->query("INSERT INTO recuperacion (pregunta_1, pregunta_2, pregunta_3, pregunta_4,pregunta_5, total)"
            . " VALUES ('$pregunta_25','$pregunta_26','$pregunta_27','$pregunta_28','$pregunta_29','$suma6')");
    
    return $insertar;
    
}

function ingresar_soporte_apoyo($conexion, $pregunta_30,$pregunta_31,$pregunta_32,$pregunta_33,$pregunta_34,$suma7){
    
    $insertar = $conexion->query("INSERT INTO soporte_apoyo (pregunta_1, pregunta_2, pregunta_3, pregunta_4,pregunta_5, total)"
            . " VALUES ('$pregunta_30','$pregunta_31','$pregunta_32','$pregunta_33','$pregunta_34','$suma7')");
    
    return $insertar;
    
}

function ingresar_puntos_importantes($conexion, $pregunta_35,$pregunta_36,$pregunta_37,$pregunta_38,$pregunta_39,$pregunta_40,
        $pregunta_41,$pregunta_42,$pregunta_43,$pregunta_44,$pregunta_45,$pregunta_46,$pregunta_47,$pregunta_48,$pregunta_49,
        $pregunta_50,$pregunta_51,$pregunta_52,$pregunta_53,$pregunta_54,$pregunta_55,$pregunta_56,$pregunta_57,$pregunta_58,$suma8){
    
    $insertar = $conexion->query("INSERT INTO puntos_importantes (pregunta_1, pregunta_2, pregunta_3, pregunta_4,"
            . "pregunta_5,pregunta_6,pregunta_7,pregunta_8,pregunta_9,pregunta_10,pregunta_11,pregunta_12,pregunta_13,pregunta_14,pregunta_15,"
            . "pregunta_16,pregunta_17,pregunta_18,pregunta_19,pregunta_20,pregunta_21,pregunta_22,pregunta_23,pregunta_24, total)"
            . " VALUES ('$pregunta_35','$pregunta_36','$pregunta_37','$pregunta_38','$pregunta_39','$pregunta_40',"
            . "'$pregunta_41','$pregunta_42','$pregunta_43','$pregunta_44','$pregunta_45','$pregunta_46','$pregunta_47','$pregunta_48','$pregunta_49',"
            . "'$pregunta_50','$pregunta_51','$pregunta_52','$pregunta_53','$pregunta_54','$pregunta_55','$pregunta_56','$pregunta_57','$pregunta_58','$suma8')");
    
    return $insertar;
    
}

function traer_datos_generales($conexion, $id){
    
    $traer = "SELECT * FROM datos_generales";
    
    if($id != NULL){
        
        $traer.=" WHERE id_datos='$id'";
        
    }
    else{
        
        $traer.=" WHERE id_datos='1'";
        
    }
    
    $resultado = $conexion->query($traer);
    
    return $resultado;
    
}

function traer_carga_ritmo_trabajo($conexion, $id){
    
    $traer = "SELECT * FROM carga_ritmo_trabajo";
    
    if($id != NULL){
        
        $traer.=" WHERE id_datos='$id'";
        
    }
    else{
        
        $traer.=" WHERE id_datos='1'";
        
    }
    
    $resultado = $conexion->query($traer);
    
    return $resultado;
    
}

function traer_desarrollo_competencias($conexion, $id){
    
    $traer = "SELECT * FROM desarrollo_competencias";
    
    if($id != NULL){
        
        $traer.=" WHERE id_datos='$id'";
        
    }
    else{
        
        $traer.=" WHERE id_datos='1'";
        
    }
    
    $resultado = $conexion->query($traer);
    
    return $resultado;
    
}

function traer_liderazgo($conexion, $id){
    
    $traer = "SELECT * FROM liderazgo";
    
    if($id != NULL){
        
        $traer.=" WHERE id_datos='$id'";
        
    }
    else{
        
        $traer.=" WHERE id_datos='1'";
        
    }
    
    $resultado = $conexion->query($traer);
    
    return $resultado;
    
}

function traer_margen_accion_control($conexion, $id){
    
    $traer = "SELECT * FROM margen_accion_control";
    
    if($id != NULL){
        
        $traer.=" WHERE id_datos='$id'";
        
    }
    else{
        
        $traer.=" WHERE id_datos='1'";
        
    }
    
    $resultado = $conexion->query($traer);
    
    return $resultado;
    
}

function traer_organizacion_trabajo($conexion, $id){
    
    $traer = "SELECT * FROM organizacion_trabajo";
    
    if($id != NULL){
        
        $traer.=" WHERE id_datos='$id'";
        
    }
    else{
        
        $traer.=" WHERE id_datos='1'";
        
    }
    
    $resultado = $conexion->query($traer);
    
    return $resultado;
    
}

function traer_recuperacion($conexion, $id){
    
    $traer = "SELECT * FROM recuperacion";
    
    if($id != NULL){
        
        $traer.=" WHERE id_datos='$id'";
        
    }
    else{
        
        $traer.=" WHERE id_datos='1'";
        
    }
    
    $resultado = $conexion->query($traer);
    
    return $resultado;
    
}

function traer_soporte_apoyo($conexion, $id){
    
    $traer = "SELECT * FROM soporte_apoyo";
    
    if($id != NULL){
        
        $traer.=" WHERE id_datos='$id'";
        
    }
    else{
        
        $traer.=" WHERE id_datos='1'";
        
    }
    
    $resultado = $conexion->query($traer);
    
    return $resultado;
    
}

function traer_puntos_importantes($conexion, $id){
    
    $traer = "SELECT * FROM puntos_importantes";
    
    if($id != NULL){
        
        $traer.=" WHERE id_datos='$id'";
        
    }
    else{
        
        $traer.=" WHERE id_datos='1'";
        
    }
    
    $resultado = $conexion->query($traer);
    
    return $resultado;
    
}