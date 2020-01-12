<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset-uft8"/>
        <title>Mi primera pagina con php</title>
    </head>
    <body>
        <h1>Hola mundo</h1>
        
        <form name="form1" method="POST" actions="index.php">

            Numero 1: <input type="text" name="txtnumero1">
            
            Numero 2: <input type="text" name="txtnumero2">
            
            <input type="submit" name="calcular" value="calcular">

        </form>
        
    <?php 

        if(isset($_POST["calcular"])){

            $valor1 = $_POST["txtnumero1"];
            $valor2 = $_POST["txtnumero2"];

            if ($valor1 == "" || $valor2 == ""){
               echo "Debes ingresar los valores necesarios";
               exit;
            }

            echo $valor1 . "<br>";
            echo $valor2 . "<br>";

            print "Hola esto es php";
            $n1 = 5;
            $n2 = 3;
            $n3 = 7;

            $suma = $n1 + $n2; 

            $resta = $n1 - $n2; 

            $multiplicacion = $n1 * $n2; 

            $division = $n1 / $n2;
            
            $residuo = $n1 % $n2; 

            print "<br><br>El resultado de la suma de: " . $n1 . " + " . $n2 . " = " . $suma;

            print "<br><br>El resultado de la resta de: " . $n1 . " - " . $n2 . " = " . $resta;

            print "<br><br>El resultado de la multiplicacion de: " . $n1 . " * " . $n2 . " = " . $multiplicacion;

            print "<br><br>El resultado de la division de: " . $n1 . " / " . $n2 . " = " . $division;

            print "<br><br>El residuo de: " . $n1 . " % " . $n2 . " = " . $residuo;


            $logico = $n1 > $n2; 

            if($n1 > $n2 && $n1 > 0){
                print "<br><br> La condicion es verdadera.";
            }else{
                print "<br><br> La condicion es falsa.";
            }


            if($suma > $resta && $suma > $multiplicacion){
                print "<br><br>Aun sigo siendo verdadera ";
            }else{
                print "<br><br>Ya soy mas falsa que tu ex 🙂. ";
            }


            if($n1 > $n2 && $n1 > $n3){
                print "<br><br>El mayor es: ". $n1;
            }elseif($n2 > $n1 && $n2 > n3){
                print "<br><br>El mayor es: ". $n2; 
            }else{
                print "<br><br>El mayor es: ". $n3;
            }

            print "<br>";

            if($n3 % 2 == 0){
                print "El numero ". $n3 ." es par";
            }else{
                print "El numero ". $n3 ." es impar";
            }


            $colorSemaforo = "";

            switch(strtolower($colorSemaforo)){

                case"verde":
                    print "Semaforo es ". $colorSemaforo. ": Avanzar";
                    break;

                case "amarillo":
                    print "Semaforo es ". $colorSemaforo.": Por favor detenerse ";
                    break;
                    
                case "rojo":
                    print "Semaforo es ". $colorSemaforo.": No avance";
                    break;

                default:
                    print "valor incorrecto";
                    break; 
            }

            $i = 0;
            while($i <= 5){
                print $i . "<br><br>";
                $i++;
            }

            $i = 1;
            do{
                print $i . "<br><br>";
                $i++;
            }while($i <= 5);

            print "<br>";

            echo "while<br><br/";
            $i=0;
            
            while($i <= 10){
                
                print "<br>";
                $i++;
                $resultado= $i * 5;
                print $i . "* 5 = ". $resultado ;
            }

            echo "<br><br/>";

            echo "<br><br/>";

            $array = array(1,2,3,4,5,6,7);
            $longitud = count($array);

            for($i=0; $i<$longitud; $i++){ 
                echo $array[$i] . "<br>";
            }
            echo "<br>";
            foreach ($array as $valor) {
               echo $valor . "<br>";
            }

            echo "<br><br/>";
            echo "foreach<br><br/";
            print "<br>";

            $tabla = 5;
            $limite = array(1,2,3,4,5,6,7,8,9,10);
            foreach($limite as $valor){
                print "$tabla"."x".$valor."=".($tabla*$valor)."<br>";
            }
            print "<br>";

        }


    ?>

       

    </body>
</html>