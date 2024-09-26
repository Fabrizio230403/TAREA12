<?php

$lista_alumnos =[
    ["nombre" => "Fabrizio Jurado Cardenas", "nota" => 20],
    ["nombre" => "Axel Cardenas", "nota" => 19],
    ["nombre" => "Cony caca", "nota" => 16],
    ["nombre" => "Juan Gonzales", "nota" => 17],
    ["nombre" => "Josefina Perez", "nota" => 18]
];


    if (isset($_POST['nombre'])){
        $nombre = strtolower(trim($_POST['nombre']));
        $resultado = [];

        foreach($lista_alumnos as $alumnos){
            if(strpos(strtolower($alumnos['nombre']),$nombre)!== false){
                $resultado[] = htmlspecialchars($alumnos['nombre'])
                . "- Nota: " . htmlspecialchars($alumnos['nota']);
            }
        }

        if(count($resultado) > 0){
            foreach($resultado as $resultados){
                echo '<div>' . $resultados . '</div>';
            }
        } else{
            echo'<div>No se encontraron resultados.</div>';
        }

    }
 
    

?>
