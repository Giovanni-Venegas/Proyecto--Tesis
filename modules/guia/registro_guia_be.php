<?php

include_once '../conexion.php';
    
            $TeoriaHoras = $_POST['TeoriaHoras'];
$TeoriaCreditos = $_POST['TeoriaCreditos'];
$PracticaHoras = $_POST['PracticaHoras'];
$PracticaCreditos = $_POST['PracticaCreditos'];
$Sintesis = $_POST['Sintesis'];
$Esenciales = $_POST['Esenciales'];
$Recomendados = $_POST['Recomendados'];
$Objetivo1 = $_POST['Objetivo1'];
$Objetivo2 = $_POST['Objetivo2'];
$Objetivo3 = $_POST['Objetivo3'];
$Objetivo4 = $_POST['Objetivo4'];
$bloque1 = $_POST['bloque1'];
$n1t1 = $_POST['n1t1'];
$n2t1 = $_POST['n2t1'];
$n3t1 = $_POST['n3t1'];
$n4t1 = $_POST['n4t1'];
$n1t2 = $_POST['n1t2'];
$n2t2 = $_POST['n2t2'];
$n3t2 = $_POST['n3t2'];
$n4t2 = $_POST['n4t2'];
$n1t3 = $_POST['n1t3'];
$n2t3 = $_POST['n2t3'];
$n3t3 = $_POST['n3t3'];
$n4t3 = $_POST['n4t3'];
$n1t4 = $_POST['n1t4'];
$n2t4 = $_POST['n2t4'];
$n3t4 = $_POST['n3t4'];
$n4t4 = $_POST['n4t4'];
$bloque2 = $_POST['bloque2'];
$b2n1t1 = $_POST['b2n1t1'];
$b2n2t1 = $_POST['b2n2t1'];
$b2n3t1 = $_POST['b2n3t1'];
$b2n4t1 = $_POST['b2n4t1'];
$b2n1t2 = $_POST['b2n1t2'];
$b2n2t2 = $_POST['b2n2t2'];
$b2n3t2 = $_POST['b2n3t2'];
$b2n4t2 = $_POST['b2n4t2'];
$b2n1t3 = $_POST['b2n1t3'];
$b2n2t3 = $_POST['b2n2t3'];
$b2n3t3 = $_POST['b2n3t3'];
$b2n4t3 = $_POST['b2n4t3'];
$b2n1t4 = $_POST['b2n1t4'];
$b2n2t4 = $_POST['b2n2t4'];
$b2n3t4 = $_POST['b2n3t4'];
$b2n4t4 = $_POST['b2n4t4'];
$bloque3 = $_POST['bloque3'];
$b3n1t1 = $_POST['b3n1t1'];
$b3n2t1 = $_POST['b3n2t1'];
$b3n3t1 = $_POST['b3n3t1'];
$b3n4t1 = $_POST['b3n4t1'];
$b3n1t2 = $_POST['b3n1t2'];
$b3n2t2 = $_POST['b3n2t2'];
$b3n3t2 = $_POST['b3n3t2'];
$b3n4t2 = $_POST['b3n4t2'];
$b3n1t3 = $_POST['b3n1t3'];
$b3n2t3 = $_POST['b3n2t3'];
$b3n3t3 = $_POST['b3n3t3'];
$b3n4t3 = $_POST['b3n4t3'];
$b3n1t4 = $_POST['b3n1t4'];
$b3n2t4 = $_POST['b3n2t4'];
$b3n3t4 = $_POST['b3n3t4'];
$b3n4t4 = $_POST['b3n4t4'];
$bloque4 = $_POST['bloque4'];
$b4n1t1 = $_POST['b4n1t1'];
$b4n2t1 = $_POST['b4n2t1'];
$b4n3t1 = $_POST['b4n3t1'];
$b4n4t1 = $_POST['b4n4t1'];
$b4n1t2 = $_POST['b4n1t2'];
$b4n2t2 = $_POST['b4n2t2'];
$b4n3t2 = $_POST['b4n3t2'];
$b4n4t2 = $_POST['b4n4t2'];
$b4n1t3 = $_POST['b4n1t3'];
$b4n2t3 = $_POST['b4n2t3'];
$b4n3t3 = $_POST['b4n3t3'];
$b4n4t3 = $_POST['b4n4t3'];
$b4n1t4 = $_POST['b4n1t4'];
$b4n2t4 = $_POST['b4n2t4'];
$b4n3t4 = $_POST['b4n3t4'];
$b4n4t4 = $_POST['b4n4t4'];
$IE1 = $_POST['IE1'];
$CE1 = $_POST['CE1'];
$P1 = $_POST['P1'];
$IE2 = $_POST['IE2'];
$CE2 = $_POST['CE2'];
$P2 = $_POST['P2'];
$IE3 = $_POST['IE3'];
$CE3 = $_POST['CE3'];
$P3 = $_POST['P3'];
$IE4 = $_POST['IE4'];
$CE4 = $_POST['CE4'];
$P4 = $_POST['P4'];
$IE5 = $_POST['IE5'];
$CE5 = $_POST['CE5'];
$P5 = $_POST['P5'];
$IE6 = $_POST['IE6'];
$CE6 = $_POST['CE6'];
$P6 = $_POST['P6'];
$FB1 = $_POST['FB1'];
$FB2 = $_POST['FB2'];
$FB3 = $_POST['FB3'];
$FB4 = $_POST['FB4'];
$FB5 = $_POST['FB5'];
$FB6 = $_POST['FB6'];
$FB7 = $_POST['FB7'];
$FB8 = $_POST['FB8'];
$FB9 = $_POST['FB9'];
$FB10 = $_POST['FB10'];
$NI1 = $_POST['NI1'];
$NI2 = $_POST['NI2'];
$NI3 = $_POST['NI3'];
$NI4 = $_POST['NI4'];
$NI5 = $_POST['NI5'];
$NI6 = $_POST['NI6'];
$FI1 = $_POST['FI1'];
$FI2 = $_POST['FI2'];
$FI3 = $_POST['FI3'];
$FI4 = $_POST['FI4'];
$FI5 = $_POST['FI5'];
$FI6 = $_POST['FI6'];

        $query = "INSERT INTO guia (TeoriaHoras, TeoriaCreditos, PracticaHoras, PracticaCreditos, Sintesis, Esenciales, Recomendados, Objetivo1, Objetivo2, Objetivo3, Objetivo4, bloque1, n1t1, n2t1, n3t1, n4t1, n1t2, n2t2, n3t2, n4t2, n1t3, n2t3, n3t3, n4t3, n1t4, n2t4, n3t4, n4t4, bloque2, b2n1t1, b2n2t1, b2n3t1, b2n4t1, b2n1t2, b2n2t2, b2n3t2, b2n4t2, b2n1t3, b2n2t3, b2n3t3, b2n4t3, b2n1t4, b2n2t4, b2n3t4, b2n4t4, bloque3, b3n1t1, b3n2t1, b3n3t1, b3n4t1, b3n1t2, b3n2t2, b3n3t2, b3n4t2, b3n1t3, b3n2t3, b3n3t3, b3n4t3, b3n1t4, b3n2t4, b3n3t4, b3n4t4, bloque4, b4n1t1, b4n2t1, b4n3t1, b4n4t1, b4n1t2, b4n2t2, b4n3t2, b4n4t2, b4n1t3, b4n2t3, b4n3t3, b4n4t3, b4n1t4, b4n2t4, b4n3t4, b4n4t4, IE1, CE1, P1, IE2, CE2, P2, IE3, CE3, P3, IE4, CE4, P4, IE5, CE5, P5, IE6, CE6, P6, FB1, FB2, FB3, FB4, FB5, FB6, FB7, FB8, FB9, FB10, NI1, NI2, NI3, NI4, NI5, NI6, FI1, FI2, FI3, FI4, FI5, FI6)

                                        VALUES ('$TeoriaHoras', '$TeoriaCreditos', '$PracticaHoras', '$PracticaCreditos', '$Sintesis', '$Esenciales', '$Recomendados', '$Objetivo1', '$Objetivo2', '$Objetivo3', '$Objetivo4', '$bloque1', '$n1t1', '$n2t1', '$n3t1', '$n4t1', '$n1t2', '$n2t2', '$n3t2', '$n4t2', '$n1t3', '$n2t3', '$n3t3', '$n4t3', '$n1t4', '$n2t4', '$n3t4', '$n4t4', '$bloque2', '$b2n1t1', '$b2n2t1', '$b2n3t1', '$b2n4t1', '$b2n1t2', '$b2n2t2', '$b2n3t2', '$b2n4t2', '$b2n1t3', '$b2n2t3', '$b2n3t3', '$b2n4t3', '$b2n1t4', '$b2n2t4', '$b2n3t4', '$b2n4t4', '$bloque3', '$b3n1t1', '$b3n2t1', '$b3n3t1', '$b3n4t1', '$b3n1t2', '$b3n2t2', '$b3n3t2', '$b3n4t2', '$b3n1t3', '$b3n2t3', '$b3n3t3', '$b3n4t3', '$b3n1t4', '$b3n2t4', '$b3n3t4', '$b3n4t4', '$bloque4', '$b4n1t1', '$b4n2t1', '$b4n3t1', '$b4n4t1', '$b4n1t2', '$b4n2t2', '$b4n3t2', '$b4n4t2', '$b4n1t3', '$b4n2t3', '$b4n3t3', '$b4n4t3', '$b4n1t4', '$b4n2t4', '$b4n3t4', '$b4n4t4', '$IE1', '$CE1', '$P1', '$IE2', '$CE2', '$P2', '$IE3', '$CE3', '$P3', '$IE4', '$CE4', '$P4', '$IE5', '$CE5', '$P5', '$IE6', '$CE6', '$P6', '$FB1', '$FB2', '$FB3', '$FB4', '$FB5', '$FB6', '$FB7', '$FB8', '$FB9', '$FB10', '$NI1', '$NI2', '$NI3', '$NI4', '$NI5', '$NI6', '$FI1', '$FI2', '$FI3', '$FI4', '$FI5', '$FI6')";
        
        //Verificar que el correo no se repita en la DB 
        //$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE email_institucional='email_institucional' ");

        /*if (mysqli_num_rows($verificar_correo) > 0){
            echo '
            <script>
                alert ("Este correo ya esta registrado, intenta con otro diferente");
                windows.location ="../index.php";
                </script>
            ';
            exit();
        }*/

        //Verificar que el nombre de usuario no se repita en la Db
        
        /*$verificar_usuario = mysqli_query ($conexion, "SELECT * FROM usuario WHERE usuario='usuario' ");

        if (mysqli_num_rows($verificar_usuario) > 0){
            echo '
            <script>
                alert ("Este usuario ya esta registrado, intenta con otro diferente");
                windows.location ="../index.php";
                </script>
            ';
            exit();
        }*/


        $ejecutar = mysqli_query($conexion, $query);

        if($ejecutar){
            echo '
            <script>
                alert ("Profesor almacenado exitosamente");
                windows.location ="../prueba2.php";
                </script>
            ';
        }else {
            echo '
            <script>
                alert ("Profesor no almacenado, intentalo de nuevo");
                windows.location ="../prueba2.php";
                </script>
            ';
        }

        mysqli_close($conexion);
?>

