<?php
//Variable 'Nombre', Operador de asignacion,Tipo de variabele (string),  Valor de la variable
    $Nombre = (string) "Miguel";
    $Edad = (int) 23;
    $Altura = (double) 1.85;
    $Profesor = (bool) true;

    // echo $Nombre;
    // var_dump($Nombre);
    // print_r($Nombre);

?>
<?php
//Variable 'Nombre', Operador de asignacion,Tipo de variabele (string),  Valor de la variable
    $Nombre = (string) "Miguel";
    $Edad = (int) 23;
    $Altura = (double) 1.85;
    $Profesor = (bool) true;
    $Dirrecion = (array) ["Canada", "Mucho frio", 22, false];
    
    print_r($Dirrecion);


    // echo $Nombre;
    // var_dump($Nombre);
    // print_r($Nombre);

?>
    $parrafo = (string) <<<FIN
    <h1>Miguel Angel</h1>
    <p>23</p>

FIN;

    $parrafo2 = (string) 'hola \'como\' "estas" ';

    print_r($parrafo2);


?>
<?php
    // Suma entre variables (Operador de suma)
    // $num1 = (int) 2;
    // $num2 = (int) 5; 
    // $res = (int) ($num1+$num2);
    // print_r($res); 


    // R entre variables (Operador de suma)
    $num1 = (int) 10;
    $num2 = (int) 3; 
    $res = $num1 - $num2;
    
    print_r($res); 

?>