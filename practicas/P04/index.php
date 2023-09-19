<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
     <h2>Ejercicio 1</h2>
    <p>Programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
        if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
            if ($num%5==0 && $num%7==0)
            {
                echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
            }
            else
            {
                echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
            }
        }
    ?>

    <h2>Ejemplo de POST</h2>
    <form action="http://localhost/tecnologiasw/practicas/p04/index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["name"]) && isset($_POST["email"]))
        {
            echo $_POST["name"];
            echo '<br>';
            echo $_POST["email"];
        }
    ?>

           <h2>Ejercicio 2</h2> 
           <p>Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una
           secuencia compuesta por: impar, par, impar</p>

        <?php
            function generarNumAleatorio() {
            return rand(1, 100);}
    
            $matriz = [];
            $iteraciones = 0;
            $numerosGen = 0;
    
            while (true) {
            $iteraciones++;
        
             $fila = [];
             for ($i = 0; $i < 3; $i++) {
            $numero = generarNumAleatorio();
            $fila[] = $numero;
            $numerosGen++;}
    
            if ($fila[0] % 2 == 1 && $fila[1] % 2 == 0 && $fila[2] % 2 == 1) {
            $matriz[] = $fila;
            break;}
            $matriz[] = $fila;}
    
            foreach ($matriz as $fila) {
            echo implode(',', $fila)."<br>";}
    
           echo "$numerosGen números obtenidos en $iteraciones iteraciones."; 
        ?> 

<h2>Ejercicio 3</h2> 
           <p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente,
           pero que además sea múltiplo de un número dado.</p>
           <p>-Crear una variante de este script utilizando el ciclo do-while.</p>
           <p>-El número dado se debe obtener vía GET.</p>

           <?php
            $numerodado = isset($_GET['numero']) ? intval($_GET['numero']) : 0;

            if ($numerodado <= 0) {
            echo "Proporciona un numero entero.";
            } 
            else {
            $resultado = 0;
            do {
                $numAleatorio = rand(1, 200); 
              if ($numAleatorio % $numerodado == 0) {
                 $resultado = $numAleatorio;
             break;}
            } 
            while (true);

              echo "El primer número entero aleatorio múltiplo de $numerodado es: $resultado";
            }
?>
        <h2>Ejercicio 4</h2> 
           <p>Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la 'a'
            a la 'z'. Usa la función chr(n) que devuelve el caracter cuyo código ASCII es n para poner
            el valor en cada índice.</p>
           <p>-Crea el arreglo con un ciclo for.</p>
           <p>-Lee el arreglo y crea una tabla en XHTML con echo y un ciclo foreach.</p>

        <?php
            // Arreglo con un ciclo for
            $arreglo = array();
            for ($n = 97; $n <= 122; $n++) {
             $arreglo[$n] = chr($n);
            }

            // Tabla XHTML con un ciclo foreach
            echo '<table border="1">';
            echo '<tr><th>Índice</th><th>Valor</th></tr>';

            foreach ($arreglo as $key => $value) {
             echo '<tr>';
             echo '<td>'.$key.'</td>';
             echo '<td>'.$value.'</td>';
             echo '</tr>';
            }   
            echo '</table>';
        ?>

<h2>Ejercicio 5 </h2> 
           <p>Usar las variables $edad y $sexo en una instrucción if para identificar una persona de
           sexo “femenino”, cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de
            bienvenida apropiado. Por ejemplo: "Bienvenida, usted está en el rango de edad permitido".</p>
            

        <form action="http://localhost/tecnologiasw/practicas/p04/index.php" method="post">
        Edad: <input type="number" name="edad" required><br>
        Sexo: <input type="radio" name="sexo" value="femenino" required> Femenino
        <input type="radio" name="sexo" value="masculino" required> Masculino<br><br>
        <input type="submit" >
        </form>

    <?php
        if (isset($_POST["edad"]) && isset($_POST["sexo"]))  {
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];

        if ($sexo == "femenino" && $edad >= 18 && $edad <= 35)
        {
            echo "Edad: ";
            echo $_POST["edad"];  
            echo '<br>';
            echo "Sexo: ";
            echo $_POST["sexo"];
            echo '<br>';
            echo "Bienvenida, usted está en el rango de edad y sexo permitido.";
        } else {
            echo "Edad: ";
            echo $_POST["edad"];  
            echo '<br>';
            echo "Sexo: ";
            echo $_POST["sexo"];
            echo '<br>';
            echo "Lo sentimos, usted no cumple con la edad y sexo permitido.";
        }
        }
        else {
        echo "Por favor, complete el formulario.";
    }
?>

<h2>Ejercicio 6 </h2> 
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


</body>
</html>