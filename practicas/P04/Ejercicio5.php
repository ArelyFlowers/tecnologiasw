<?php
// Arreglo para el registro de vehículos
$infoVehicular = array(
    'UBN6338' => array(
        'Auto' => array(
            'marca' => 'HONDA',
            'modelo' => '2020',
            'tipo' => 'camioneta'
        ),
        'Propietario' => array(
            'nombre' => 'Alfonzo Esparza',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => 'C.U., Jardines de San Manuel'
        )
    ),
    'UBN6339' => array(
        'Auto' => array(
            'marca' => 'MAZDA',
            'modelo' => '2019',
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Ma. del Consuelo Molina',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => '97 oriente'
        )
    ),
    // Agregar más registros para un total de 15 autos
    'UBN6381' => array(
        'Auto' => array(
            'marca' => 'toyota',
            'modelo' => '2015',
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Gabriel Díaz Hernández',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => '18 sur'
        )
    ),
    'UBN6382' => array(
        'Auto' => array(
            'marca' => 'ford motor',
            'modelo' => '2018',
            'tipo' => 'Familiar'
        ),
        'Propietario' => array(
            'nombre' => 'Ángel Guerrero Peralta',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => '4 oriente'
        )
    ),
    'UBN6383' => array(
        'Auto' => array(
            'marca' => 'Hyundai',
            'modelo' => '2020',
            'tipo' => 'Berlina'
        ),
        'Propietario' => array(
            'nombre' => 'Luciana Carrasco',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => '14 oriente'
        )
    ),
    'UBN6384' => array(
        'Auto' => array(
            'marca' => 'BMW',
            'modelo' => '2022',
            'tipo' => 'Deportivo'
        ),
        'Propietario' => array(
            'nombre' => 'Arely Flores Solis',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => 'Boulevard 14 sur'
        )
    ),
    'UBN6385' => array(
        'Auto' => array(
            'marca' => 'nissan',
            'modelo' => '2019',
            'tipo' => 'pickup'
        ),
        'Propietario' => array(
            'nombre' => 'Jania Díaz',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => '5 de mayo'
        )
    ),
    'UBN6386' => array(
        'Auto' => array(
            'marca' => 'nissan',
            'modelo' => '2019',
            'tipo' => 'Hatchback'
        ),
        'Propietario' => array(
            'nombre' => 'Raquel Flores',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => 'Cholula'
        )
    ),
    'UBN6387' => array(
        'Auto' => array(
            'marca' => 'BMW',
            'modelo' => '2022',
            'tipo' => 'SEDAN'
        ),
        'Propietario' => array(
            'nombre' => 'Diana Flores',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => '14 oriente'
        )
    ),
    'UBN6388' => array(
        'Auto' => array(
            'marca' => 'Mercedes',
            'modelo' => '2020',
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Zev Villanueva',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => 'Boulevard 14 sur'
        )
    ),
    'UBN6389' => array(
        'Auto' => array(
            'marca' => 'MAZDA',
            'modelo' => '2019',
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Hasley Villa',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => '17 oriente'
        )
    ),
    'UBN6390' => array(
        'Auto' => array(
            'marca' => 'Mercedes',
            'modelo' => '2019',
            'tipo' => 'Deportivo'
        ),
        'Propietario' => array(
            'nombre' => 'Jamilet Gálvez',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => '14 sur'
        )
    ),
    'UBN6391' => array(
        'Auto' => array(
            'marca' => 'Volkswagen',
            'modelo' => '2019',
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Julie Ariza',
            'ciudad' => 'Hermosillo.',
            'direccion' => 'Bella Vista'
        )
    ),
    'UBN6392' => array(
        'Auto' => array(
            'marca' => 'MAZDA',
            'modelo' => '2019',
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Luke Howland',
            'ciudad' => 'Yucatán.',
            'direccion' => 'Jardines de las flores'
        )
    ),
    'UBN6393' => array(
        'Auto' => array(
            'marca' => 'BMW',
            'modelo' => '2019',
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Ares Hidalgo',
            'ciudad' => 'Ciudad de México.',
            'direccion' => 'Narvarte'
        )
    ),
    
);

// Estructura del arreglo
function mostrarinfoVehicular($infoVehicular) {
    echo '<pre>';
    print_r($infoVehicular);
    echo '</pre>';
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Vehículos</title>
</head>
<body>
    <h1>Consulta de Vehículos</h1>
    
    <form action="http://localhost/tecnologiasw/practicas/p04/ejercicio5.php" method="post">
        <label for="matricula">1. Consultar por matrícula:</label>
        <input type="text" name="matricula" id="matricula" required>
        <input type="submit" value="Consultar">
    </form>

    <form action="http://localhost/tecnologiasw/practicas/p04/ejercicio5.php" method="post">
        <label for="todos">2. Mostrar todos los autos registrados:</label>
        <input type="hidden" name="todos" value="true">
        <input type="submit" value="Mostrar Todos">
    </form>
</body>
</html>

<?php
if (isset($_POST['matricula'])) {
    $matriculaConsulta = $_POST['matricula'];
    
    if (array_key_exists($matriculaConsulta, $infoVehicular)) {
         // Información del vehículo con la matrícula especifica
         $vehiculo = $infoVehicular[$matriculaConsulta];
         echo '<h2>Información del Vehículo:</h2>';
         echo '<ul>';
         echo '<li>';
         echo '<h3>Matrícula: '.$matriculaConsulta . '</h3>';
         echo '<p>Marca: ' .$vehiculo['Auto']['marca'] . '</p>';
         echo '<p>Modelo: ' .$vehiculo['Auto']['modelo'] . '</p>';
         echo '<p>Tipo: ' . $vehiculo['Auto']['tipo'] . '</p>';
         echo '<p>Propietario: ' .$vehiculo['Propietario']['nombre'] . '</p>';
         echo '<p>Ciudad: ' . $vehiculo['Propietario']['ciudad'] . '</p>';
         echo '<p>Dirección: ' .$vehiculo['Propietario']['direccion'] . '</p>';
         echo '</li>';
         echo '</ul>';
    } else {
        echo '<p>La matrícula no existe en el registro.</p>';
    }
} elseif (isset($_POST['todos'])) {
    // Mostrar solo la información de los autos cuando se pide la información de todos
    echo '<h2>Información de Todos los Vehículos:</h2>';
    echo '<ul>';
    foreach ($infoVehicular as $matricula => $vehiculo) {
        echo '<li>';
        echo '<h3>Matrícula: ' .$matricula . '</h3>';
        echo '<p>Marca: ' .$vehiculo['Auto']['marca'] . '</p>';
        echo '<p>Modelo: ' .$vehiculo['Auto']['modelo'] . '</p>';
        echo '<p>Tipo: ' . $vehiculo['Auto']['tipo'] . '</p>';
        echo '<p>Propietario: ' .$vehiculo['Propietario']['nombre'] . '</p>';
        echo '<p>Ciudad: ' .$vehiculo['Propietario']['ciudad'] . '</p>';
        echo '<p>Dirección: ' .$vehiculo['Propietario']['direccion'] . '</p>';
        echo '</li>';
    }
    
} else {
    echo '<p>No se ha realizado ninguna consulta.</p>';
}
?>