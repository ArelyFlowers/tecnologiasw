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
</body>
</html>