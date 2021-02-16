


<?php
    // Suma entre variables (Operador de Suma)
    // $num1 = (int) 2;
    // $num2 = (int) 5; 

    //Significado
    // $res = (int) ($num1+$num2);
    // print_r($res); 

    //Abreviado
    // $num1 += $num2;
    // print_r($num1); 
   

    // Resta entre variables (Operador de Resta)
    // $num1 = (int) 20;
    // $num2 = (int) 3; 

    //Significado
    // $res = (int) $num1 - $num2;
    // print_r($res); 

    //Abreviado
    // $num1 -= $num2;
    // print_r($num1); 



    // Multiplicacion entre variables (Operador de Multiplicacion)
    // $num1 = (int) 5; 
    // $num2 = (int) 5;
 
    //Significado
    // $res = (int) $num1 * $num2;
    // print_r($res); 

    //Abreviado
    // $num1 *= $num2;
    // print_r ($num1);


    // Divicion entre variables (Operador de Divicion)
    // $num1 = (int) 5;
    // $num2 = (int) 5;

    //Significado
    // $res = (int) $num1 / $num2;
    // print_r($res);

    //Abreviado
    // $num1 /= $num2;
    // print_r($num1);    




    
    // Resto(Modulo) entre variables (Operador de Resto(Modulo))
    // $num1 = (int) 49;
    // $num2 = (int) 5;

    //Significado
    // $res = (int) $num1 % $num2;
    // print_r($res); 

    //Abreviado
    // $num1 %= $num2;
    // print_r($num1);


 
    // Negacion(Diferente) entre variables (Operador de Negacion(Diferente)
    // $num1 = (int) 10;
    // $num2 = (int) 5; 
    // $res = (int) $num1!=$num2;
    // var_dump($res); 

    // Pos_Incremento entre variables (Operador de Pos_Incremento)
    // $num1 =(int) 0;
    // $num2 = (int) $num1++;
    // print_r( $num2);

    // Pre_Incremento entre variables (Operador de Pre_Incremento)
    // $num1 =(int) 0;
    // $num2 = (int) ++$num1;
    // print_r( $num2);

    // Pos_Decremento entre variables (Operador de Pos_Decremento)
    $num1 = (int) 8;
    $num1--;  
    print_r( $num1); 

?>




























<?php

    //Asi se realiza una suma 
    $num1 = (int) 2;
    $num2 = (int) 5;
    $ResSuma = (int) ($num1+($num2));
    print_r($ResSuma);
    echo "<br>";
    //Suma Abreviada (Ahora $num1 tiene un valor de 7 en este caso)
    $num1 += $num2;
    print_r($num1);
    echo "<br>";


    //Asi se realiza una resta
    $num3 = (int) 9;
    $num4 = (int) 3;
    $ResResta = (int) $num3 * $num4;
    print_r($ResResta);
    echo "<br>";
    //Resta Abreviada (Ahora $num1 tiene un valor de 6 en este caso)
    $num3 -= $num4;
    print_r($num3);
    echo "<br>";


    //Asi se realiza una multiplicación
    $num5 = (int) 10;
    $num6 = (int) 3;
    $ResMulti = (int) $num5 * $num6;
    print_r($ResMulti);
    echo "<br>";
    //Multiplicación Abreviada (Ahora $num1 tiene un valor de 30 en este caso)
    $num5 *= $num6;
    print_r($num5);
    echo "<br>";


    //Asi se realiza una división
    $num7 = (int) 12;
    $num8 = (int) 3;
    $ResDivi = (int) $num7 / $num8;
    print_r($ResDivi);
    echo "<br>";
    //División Abreviada (Ahora $num1 tiene un valor de 4 en este caso)
    $num7 /= $num8;
    print_r($num7);
    echo "<br>";


    //Asi se realiza un modulo
    $num9 = (int) 6;
    $num10 = (int) 5;
    $ResModulo = (int) $num9 % $num10;
    print_r($ResModulo);
    echo "<br>";
    //Modulo Abreviado (Ahora $num1 tiene un valor de 1 en este caso)
    $num9 %= $num10;
    print_r($num9);
    echo "<br>";


    //Asi se realiza una negacion (¿Diferente?)
    $num11 = (int) 10;
    $num12 = (int) 9;
    $ResNega = (int) $num9 != $num10;
    var_dump($ResNega);
    echo "<br>";


    //

?>
























<?php

    //Asi se realiza una suma 
    $num1 = (int) 2;
    $num2 = (int) 5;
    $ResSuma = (int) ($num1+($num2));
    print_r($ResSuma);
    echo "<br>";
    //Suma Abreviada (Ahora $num1 tiene un valor de 7 en este caso)
    $num1 += $num2;
    print_r($num1);
    echo "<br>";


    //Asi se realiza una resta
    $num3 = (int) 9;
    $num4 = (int) 3;
    $ResResta = (int) $num3 * $num4;
    print_r($ResResta);
    echo "<br>";
    //Resta Abreviada (Ahora $num1 tiene un valor de 6 en este caso)
    $num3 -= $num4;
    print_r($num3);
    echo "<br>";


    //Asi se realiza una multiplicación
    $num5 = (int) 10;
    $num6 = (int) 3;
    $ResMulti = (int) $num5 * $num6;
    print_r($ResMulti);
    echo "<br>";
    //Multiplicación Abreviada (Ahora $num1 tiene un valor de 30 en este caso)
    $num5 *= $num6;
    print_r($num5);
    echo "<br>";


    //Asi se realiza una división
    $num7 = (int) 12;
    $num8 = (int) 3;
    $ResDivi = (int) $num7 / $num8;
    print_r($ResDivi);
    echo "<br>";
    //División Abreviada (Ahora $num1 tiene un valor de 4 en este caso)
    $num7 /= $num8;
    print_r($num7);
    echo "<br>";


    //Asi se realiza un modulo
    $num9 = (int) 6;
    $num10 = (int) 5;
    $ResModulo = (int) $num9 % $num10;
    print_r($ResModulo);
    echo "<br>";
    //Modulo Abreviado (Ahora $num1 tiene un valor de 1 en este caso)
    $num9 %= $num10;
    print_r($num9);
    echo "<br>";


    //Asi se realiza una negacion (¿Diferente?)
    $num11 = (int) 10;
    $num12 = (int) 9;
    $ResNega = (int) $num9 != $num10;
    var_dump($ResNega);
    echo "<br>";


    //

?>