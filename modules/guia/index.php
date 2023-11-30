<?php
require_once($_SESSION['raiz'] . '/modules/sections/role-access-admin-editor.php');

$sql = "SELECT * FROM administratives WHERE user = '" . $_POST['txtuserid'] . "'";

if ($result = $conexion->query($sql)) {
	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['user_id'] = $row['user'];
		$_SESSION['student_name'] = $row['name'];
		$_SESSION['student_surnames'] = $row['surnames'];
		$_SESSION['student_gender'] = $row['gender'];
		$_SESSION['student_curp'] = $row['curp'];
		$_SESSION['student_rfc'] = $row['rfc'];
		$_SESSION['student_phone'] = $row['phone'];
		$_SESSION['student_address'] = $row['address'];
        $_SESSION['level_studies'] = $row['level_studies'];
	}
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/main.css">
    <title>Guia</title>
    <style>
        table {
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            text-align: center;
        }
        .texto-rotado {
            transform: rotate(90deg); /* Cambiar el ángulo según tus necesidades */
            transform-origin: left bottom; /* Punto de origen para la rotación */
        }
    </style>
</head>
<body>
    <!-- Datos de identificacion -->
    <form action="registro_guia_be.php" method ="POST" class="formulario__register">
    <table>
        <tr>
            <td>Datos de identificaciom</td>
        </tr>
        <tr>
            <td>Por asignatura</td>
        </tr>
    </table>
    <table>
            <tr>
                <td style="width: 50%;">Nombre de la materia</td>
                <td style="width: 12%;">Obligatoria</td>
                <td style="width: 2%;">No</td>
                <td style="width: 12%;"> </td>
                <td style="width: 12%;">H/S/S</td>
                <td style="width: 12%;">Creditos</td>
            </tr>
            <tr>
                <td>Recuperar Nombre de la materia</td>
                <td>Optativa</td>
                <td>Si</td>
                <td>Teoria</td>
                <td><input type="text" id="TeoriaHoras" name="TeoriaHoras" oninput="sumarHoras()" placeholder="Ingresa Horas"></td>
                <td><input type="text" id="TeoriaCreditos" name="TeoriaCreditos" oninput="sumarCreditos()" placeholder="Ingresa Horas"></td>
            </tr>
    </table>
    <table>
            <tr>
                <td style="width: 21.3%;">Clave</td>
                <td style="width: 21.3%;">Sigla</td>
                <td style="width: 21.4%;">Grupo</td>
                <td style="width: 12%;">Practicas</td>
                <td style="width: 12%;"><input type="text" id="PracticaHoras" name="PracticaHoras" oninput="sumarHoras()" placeholder="Ingresa Horas"></td>
                <td style="width: 12%;"><input type="text" id="PracticaCreditos" name="PracticaCreditos" oninput="sumarCreditos()" placeholder="Ingresa Horas"></td>
            </tr>
            <tr>
                <td>20987</td>
                <td>IE037</td>
                <td>A</td>
                <td>Total</td>
                <td id="resultadoHoras"> </td>
                <td id="resultadoCreditos"> </td>
            </tr>
    </table>
    <table>
            <tr>
                <td style="width: 23%;">Programa</td>
                <td style="width: 53%;">Se recupera de la BD</td>
                <td style="width: 12%;">Clave</td>
                <td style="width: 12%;">2306</td>
            </tr>
            <tr>
                <td>Coordinacionn</td>
                <td>Se recupera de la BD</td>
                <td>Clave</td>
                <td>2300</td>
            </tr>
            <tr>
                <td>Direcciom</td>
                <td>Se recupera de la BD</td>
                <td>Clave</td>
                <td>401</td>
            </tr>
    </table>
    <table>
        <tr>
            <td>Por docente</td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width: 23%;">Nombre</td>
            <td style="width: 35%;"> 
           
            <input class="text" type="text" name="txtname" value="<?php echo $_SESSION['student_name']; ?>" disabled />
            </td>
            <td style="width: 15%;">Correo</td>
            <td style="width: 32%;">Se recupera de la BD</td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width: 23%;">Formacion</td>
            <td style="width: 77%;">Se recupera de la BD</td>
        </tr>
    </table>
    <!-- Sintesis Curricular -->
    <p></p>
    <table>
        <tr>
            <td>Sintesis Curricular</td>
        </tr>
        <tr>
            <td><input name="Sintesis" placeholder="Sintesis Curricular"></td>
        </tr>
        <tr>
            <td>Perrequisitos</td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width: 40%;">ASIGNATURA OBLIGATORIAMENTE ACREDITADA POR LA COORDINACIÓN*</td>
            <td style="width: 40%;">Se recupera de la BD</td>
            <td style="width: 20%;">
                <table>
                <tr>
                <td>Clave</td>
                <td>20849</td>
                </tr>
                <tr>
                <td>Sigla</td>
                <td>EO36</td>
                </tr>
                </table></td>
        </tr>
    </table>
    <table>
        <tr>
            <td>Conocimientos Esenciales</td>
            <td>Conocimientos Recomendados</td>
        </tr>
        <tr>
            <td><input name="Esenciales" placeholder="Conocimientos Esenciales"></td>
            <td><input name="Recomendados" placeholder="Conocimientos Recomendados"></td>
        </tr>
    </table>
    <table>
        <td>Eje tematico</td>
        <td>Programacion</td>
        <td>Semestre Ideal</td>
        <td>6to</td>
    </table>
    c
    <table>
        <tr><td>Desarrollo de Competencias</td></tr>
        <tr><td>Genericas</td></tr>
    </table>
    <table>
        <tr><td style="width: 10%;">COE</td><td>Comunicación Oral y Escrita: expresa los sentimientos de forma oral y escrita, para interactuar de manera clara y veraz, de acuerdo con el contexto profesional.</td></tr>
        <tr><td>TE</td><td>Trabajo en Equipo: colabora con un conjunto de personas para lograr un propósito común, considerando los diferentes puntos de vista del grupo y asumiendo la responsabilidad compartida.</td></tr>
        <tr><td>LI</td><td>Liderazgo Intelectual: formula propuestas socialmente reconocidas de aplicación del saber profesional, para resolver problemáticas diversas, con base en juicios fundados en la evidencia de la realidad comprendida intelectualmente.</td></tr>
        <tr><td>CI</td><td>Creatividad e Innovación: genera estrategias novedosas y originales, para resolver problemas de la realidad profesional y social, en función de la transformación y mejora del entorno.</td></tr>
        <tr><td>CIH</td><td>Compromiso Integral Humanista: propone alternativas de acción para promover condiciones de vida más justas, especialmente en los sectores más desfavorecidos, a partir de una experiencia reflexionada.</td></tr>
        <tr><td>DR</td><td>Discernimiento y Responsabilidad: pondera posibles soluciones a los restos profesionales, sociales y personales, para elegir la mejor alternativa, con a libertad y aceptación de las consecuencias.</td></tr>
    </table>
    <table>
        <tr><td>Especificas</td></tr>
        <tr><td><ul>
        <li><input type="text" name="Objetivo1" id="Objetivo1" placeholder="Objetivo 1"></li>
        <li><input type="text" name="Objetivo2" id="Objetivo2" placeholder="Objetivo 2"></li>
        <li><input type="text" name="Objetivo3" id="Objetivo3" placeholder="Objetivo 3"></li>
        <li><input type="text" name="Objetivo4" id="Objetivo4" placeholder="Objetivo 4"></li>
        </ul></td></tr>
    </table>
    <p></p>
    <!-- Desarrollo de competencias 
    <table>
        <tr><td>Desarrollo de competencias</td></tr>
        <tr><td>Generales</td></tr>
    </table>
    <table>
        <tr><td style="width: 60%;"><br>Articulación de atributos de egreso de los estudiantes (student outcomes) y objetivos generales del curso:</td>
            <td style="width: 5%;"></td>
            <td style="width: 5%;">Atributo 1</td>
            <td style="width: 5%;">Atributo 2</td>
            <td style="width: 5%;">Atributo 3</td>
            <td style="width: 5%;">Atributo 4</td>
            <td style="width: 5%;">Atributo 5</td>
            <td style="width: 5%;">Atributo 6</td>
            <td style="width: 5%;">Atributo 7</td></tr>
            <tr><td><br>Objetivos generales</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td></tr>
            <tr><td><br>Utilizar técnicas para integrar sistemas de información heterogéneos de manera flexible y tomando en cuenta la infraestructura.</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td></tr>
            <tr><td><br>Manejar metodologías para planear la arquitectura de información.</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td></tr>
            <tr><td><br>Crear sistemas de información que apoyen a la organización en la producción, toma de decisiones y negocios electrónicos.</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td></tr>
            <tr><td><br>Identificar las tendencias tecnologicas en el desarollo de sistemas de informacion.</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td></tr>
    </table>
    <table>
        <tr><td style="width: 10%;">Atributo</td><td style="width:90%;">Descripcion de la competencia</td></tr>
        <tr><td>1</td><td>Identificar, formular y resolver problemas de ingeniería aplicando los principios de las ciencias básicas e ingeniería.</td></tr>
        <tr><td>2</td><td>Aplicar, analizar y sintetizar procesos de diseño de ingeniería que resulten en proyectos que cumplen las necesidades especificadas</td></tr>
        <tr><td>3</td><td>Desarrollar y conducir experimentación adecuada; analizar e interpretar datos y utilizar el juicio ingenieril para establecer conclusiones.</td></tr>
        <tr><td>4</td><td>Comunicarse efectivamente con diferentes audiencias.</td></tr>
        <tr><td>5</td><td>Reconocer sus responsabilidades éticas y profesionales en situaciones relevantes para la ingeniería y realizar juicios informados que deben considerar el impacto de las soluciones de ingeniería en los contextos global, económico, ambiental y social.</td></tr>
        <tr><td>6</td><td>Reconocer la necesidad permanente de conocimiento adicional y tener la habilidad para localizar, evaluar, integrar y aplicar este conocimiento adecuadamente.</td></tr>
        <tr><td>7</td><td>Trabajar efectivamente en equipos que establecen metas, planean tareas, cumplen fechas límite y analizan riesgos e incertidumbre.</td></tr>
    </table>
    <table>
        <tr><td>Niveles de aprendizaje de acuerdo con la taxonomía de Bloom.</td></tr>
        <tr><td>ESPECÍFICOS</td></tr>
        <tr><td>El estdiante será capas de: <br><ul><li>Identificar las tendencias tecnológicas sobre el desarrollo basado en Internet.</li>
            <li>Describir arquitecturas de los sistemas de información basados en Internet.</li>
            <li>Describir los fundamentos de la programación funcional.</li>
            <li>Manejar lenguajes de programación aplicados a un entorno de Internet.</li>
            <li>Identificar patrones de diseño para el desarrollo de aplicaciones en un entorno de Internet.</li>
            <li>Desarrollar aplicaciones para resolver problemas de sistemas de información utilizando herramientas orientadas al entorno de Internet.</li>
            <li>Desarrollar aplicaciones en entornos de Internet que apoyen a las organizaciones en la producción, toma de decisiones y negocios electrónicos.</li></ul></td></tr>
    </table>
    <p></p>-->
    <!-- Desarrollo de competencias -->
    <p></p>
    <!--Contenido Teorico -->
    <table>
        <tr><td>Contenido Teorico</td></tr>
    </table>
    <table>
        <tr>
            <td style="width: 40%;">Desglose por unidades tematicas</td>
            <td style="width: 15%;">Metodología</td>
            <td style="width: 15%;">Actividades de aprendizaje presencial</td>
            <td style="width: 15%;">Actividades de aprendizaje remota</td>
            <td style="width: 15%;">Herramientas necesarias</td>
        </tr>
    </table>
    <table id="miTabla">
        <tr>
            <td style="width: 10%">Bloque 1</td>
            <td style="width: 90%"><input type="text" name="bloque1" placeholder="Ingresa Nombre del bloque"></td></tr>
        <tr><td></td>
            <td><table>
            <tr><td style="width: 16.7%">Tema 1</td>
                <td style="width: 16.6%"><input type="text" name="n1t1" placeholder="Ingresa el nombre del tema"></td>
                <td style="width: 16.6%"><input type="text" name="n2t1" placeholder="Ingresa la Metodología"></td>
                <td style="width: 33.3%"><input type="text" name="n3t1" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td style="width: 16.7%"><input type="text" name="n4t1" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
            <tr><td>Tema 2</td>
                <td><input type="text" name="n1t2" placeholder="Ingresa el nombre del tema"></td>
                <td><input type="text" name="n2t2" placeholder="Ingresa la Metodología"></td>
                <td><input type="text" name="n3t2" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td><input type="text" name="n4t2" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
            <tr><td>Tema 3</td>
                <td><input type="text" name="n1t3" placeholder="Ingresa el nombre del tema"></td>
                <td><input type="text" name="n2t3" placeholder="Ingresa la Metodología"></td>
                <td><input type="text" name="n3t3" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td><input type="text" name="n4t3" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
            <tr><td>Tema 4</td>
                <td><input type="text" name="n1t3" placeholder="Ingresa el nombre del tema"></td>
                <td><input type="text" name="n2t3" placeholder="Ingresa la Metodología"></td>
                <td><input type="text" name="n3t3" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td><input type="text" name="n4t3" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
        </table></td></tr>
        <tr><td>Bloque 2</td>
            <td><input type="text" name="bloque2" placeholder="Ingresa Nombre del bloque"></td></tr>
            <tr><td></td>
            <td><table>
            <tr><td style="width: 16.7%">Tema 1</td>
                <td style="width: 16.6%"><input type="text" name="b2n1t1" placeholder="Ingresa el nombre del tema"></td>
                <td style="width: 16.6%"><input type="text" name="b2n2t1" placeholder="Ingresa la Metodología"></td>
                <td style="width: 33.3%"><input type="text" name="b2n3t1" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td style="width: 16.7%"><input type="text" name="b2n4t1" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
            <tr><td>Tema 2</td>
                <td><input type="text" name="b2n1t2" placeholder="Ingresa el nombre del tema"></td>
                <td><input type="text" name="b2n2t2" placeholder="Ingresa la Metodología"></td>
                <td><input type="text" name="b2n3t2" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td><input type="text" name="b2n4t2" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
            <tr><td>Tema 3</td>
                <td><input type="text" name="b2n1t3" placeholder="Ingresa el nombre del tema"></td>
                <td><input type="text" name="b2n2t3" placeholder="Ingresa la Metodología"></td>
                <td><input type="text" name="b2n3t3" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td><input type="text" name="b2n4t3" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
            <tr><td>Tema 4</td>
                <td><input type="text" name="b2n1t3" placeholder="Ingresa el nombre del tema"></td>
                <td><input type="text" name="b2n2t3" placeholder="Ingresa la Metodología"></td>
                <td><input type="text" name="b2n3t3" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td><input type="text" name="b2n4t3" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
        </table></td></tr>
        <tr><td>Bloque 3</td>
            <td><input type="text" name="bloque3" placeholder="Ingresa Nombre del bloque"></td></tr>
            <tr><td></td>
            <td><table>
            <tr><td style="width: 16.7%">Tema 1</td>
                <td style="width: 16.6%"><input type="text" name="b3n1t1" placeholder="Ingresa el nombre del tema"></td>
                <td style="width: 16.6%"><input type="text" name="b3n2t1" placeholder="Ingresa la Metodología"></td>
                <td style="width: 33.3%"><input type="text" name="b3n3t1" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td style="width: 16.7%"><input type="text" name="b3n4t1" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
            <tr><td>Tema 2</td>
                <td><input type="text" name="b3n1t2" placeholder="Ingresa el nombre del tema"></td>
                <td><input type="text" name="b3n2t2" placeholder="Ingresa la Metodología"></td>
                <td><input type="text" name="b3n3t2" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td><input type="text" name="b3n4t2" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
            <tr><td>Tema 3</td>
                <td><input type="text" name="b3n1t3" placeholder="Ingresa el nombre del tema"></td>
                <td><input type="text" name="b3n2t3" placeholder="Ingresa la Metodología"></td>
                <td><input type="text" name="b3n3t3" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td><input type="text" name="b3n4t3" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
            <tr><td>Tema 4</td>
                <td><input type="text" name="b3n1t3" placeholder="Ingresa el nombre del tema"></td>
                <td><input type="text" name="b3n2t3" placeholder="Ingresa la Metodología"></td>
                <td><input type="text" name="b3n3t3" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td><input type="text" name="b3n4t3" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
        </table></td></tr>
        <tr><td>Bloque 4</td>
            <td><input type="text" name="bloque4" placeholder="Ingresa Nombre del bloque"></td></tr>
            <tr><td></td>
            <td><table>
            <tr><td style="width: 16.7%">Tema 1</td>
                <td style="width: 16.6%"><input type="text" name="b4n1t1" placeholder="Ingresa el nombre del tema"></td>
                <td style="width: 16.6%"><input type="text" name="b4n2t1" placeholder="Ingresa la Metodología"></td>
                <td style="width: 33.3%"><input type="text" name="b4n3t1" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td style="width: 16.7%"><input type="text" name="b4n4t1" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
            <tr><td>Tema 2</td>
                <td><input type="text" name="b4n1t2" placeholder="Ingresa el nombre del tema"></td>
                <td><input type="text" name="b4n2t2" placeholder="Ingresa la Metodología"></td>
                <td><input type="text" name="b4n3t2" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td><input type="text" name="b4n4t2" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
            <tr><td>Tema 3</td>
                <td><input type="text" name="b4n1t3" placeholder="Ingresa el nombre del tema"></td>
                <td><input type="text" name="b4n2t3" placeholder="Ingresa la Metodología"></td>
                <td><input type="text" name="b4n3t3" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td><input type="text" name="b4n4t3" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
            <tr><td>Tema 4</td>
                <td><input type="text" name="b4n1t3" placeholder="Ingresa el nombre del tema"></td>
                <td><input type="text" name="b4n2t3" placeholder="Ingresa la Metodología"></td>
                <td><input type="text" name="b4n3t3" placeholder="Ingresa las Actividades de aprendizaje"></td>
                <td><input type="text" name="b4n4t3" placeholder="Ingress las herramientas necesarias"></td>
            </tr>
        </table></td></tr>
    </table>

    <p></p>
    <!--Evaluacion de aprendizaje -->
    <table>
        <tr><td>Evaluacion de arendizaje</td></tr>
    </table>
    <table>
        <tr>
            <td style="width: 40%">Instrumentos de evaluacion</td>
            <td style="width: 40%">Criterios de evaluacion</td>
            <td style="width: 20%">Ponderacion</td></tr>
        <tr>
            <td><input type="text" name="IE1" placeholder="Intrumento 1"></td>
            <td><input type="text" name="CE1" placeholder="Criterio 1"></td>
            <td><input type="text" name="P1" id="P1" placeholder="Ponderacion 1" oninput="sumarPonderacion()"></td>
        </tr>
        <tr>
            <td><input type="text" name="IE2" placeholder="Intrumento 2"></td>
            <td><input type="text" name="CE2" placeholder="Criterio 2"></td>
            <td><input type="text" name="P2" id="P2" placeholder="Ponderacion 2" oninput="sumarPonderacion()"></td>
        </tr>
        <tr>
            <td><input type="text" name="IE3" placeholder="Intrumento 3"></td>
            <td><input type="text" name="CE3" placeholder="Criterio 3"></td>
            <td><input type="text" name="P3" id="P3" placeholder="Ponderacion 3" oninput="sumarPonderacion()"></td>
        </tr>
        <tr>
            <td><input type="text" name="IE4" placeholder="Intrumento 4"></td>
            <td><input type="text" name="CE4" placeholder="Criterio 4"></td>
            <td><input type="text" name="P4" id="P4" placeholder="Ponderacion 4" oninput="sumarPonderacion()"></td>
        </tr>
        <tr>
            <td><input type="text" name="IE5" placeholder="Intrumento 5"></td>
            <td><input type="text" name="CE5" placeholder="Criterio 5"></td>
            <td><input type="text" name="P5" id="P5" placeholder="Ponderacion 5" oninput="sumarPonderacion()"></td>
        </tr>
        <tr>
            <td><input type="text" name="IE6" placeholder="Intrumento 6"></td>
            <td><input type="text" name="CE6" placeholder="Criterio 6"></td>
            <td><input type="text" name="P6" id="P6" placeholder="Ponderacion 6" oninput="sumarPonderacion()"></td>
        </tr>
        <tr>
            <td></td>
            <td>Total</td>
            <td id="resultadoPonderacion"></td>
        </tr>
    </table>
    <p></p>
    <!--Fuentes bibliograficas -->
    <table>
        <tr><td>Fuentes bibliograficas</td></tr>
        <tr><td>Bibliografia basica</td></tr>
        <tr><td><input type="text" name="FB1" placeholder="Fuente Bibliografia 1"></td></tr>
        <tr><td><input type="text" name="FB2" placeholder="Fuente Bibliografia 2"></td></tr>
        <tr><td><input type="text" name="FB3" placeholder="Fuente Bibliografia 3"></td></tr>
        <tr><td><input type="text" name="FB4" placeholder="Fuente Bibliografia 4"></td></tr>
        <tr><td>Bibliografia complementaria</td></tr>
        <tr><td><input type="text" name="FB5" placeholder="Fuente Bibliografia 5"></td></tr>
        <tr><td><input type="text" name="FB6" placeholder="Fuente Bibliografia 6"></td></tr>
        <tr><td><input type="text" name="FB7" placeholder="Fuente Bibliografia 7"></td></tr>
        <tr><td><input type="text" name="FB8" placeholder="Fuente Bibliografia 8"></td></tr>
        <tr><td><input type="text" name="FB8" placeholder="Fuente Bibliografia 9"></td></tr>
        <tr><td><input type="text" name="FB10" placeholder="Fuente Bibliografia 10"></td></tr>
    </table>
    <p></p>

    <!--Notas importantes -->
    <table>
        <tr><td>Notas Importantes</td></tr>
        <tr><td><input type="text" name="NI1" placeholder="Nota Importante 1"></td></tr>
        <tr><td><input type="text" name="NI2" placeholder="Nota Importante 2"></td></tr>
        <tr><td><input type="text" name="NI3" placeholder="Nota Importante 3"></td></tr>
        <tr><td><input type="text" name="NI4" placeholder="Nota Importante 4"></td></tr>
        <tr><td><input type="text" name="NI5" placeholder="Nota Importante 5"></td></tr>
        <tr><td><input type="text" name="NI6" placeholder="Nota Importante 6"></td></tr>
    </table>
    <p></p>

    <!--Fechas importantes -->
    <table>
        <tr><td>Fechas Importantes</td></tr>
        <tr><td><input type="text" name="FI1" placeholder="Fecha Importante 1"></td></tr>
        <tr><td><input type="text" name="FI2" placeholder="Fecha Importante 2"></td></tr>
        <tr><td><input type="text" name="FI3" placeholder="Fecha Importante 3"></td></tr>
        <tr><td><input type="text" name="FI4" placeholder="Fecha importante 4"></td></tr>
        <tr><td><input type="text" name="FI5" placeholder="Fecha Importante 5"></td></tr>
        <tr><td><input type="text" name="FI6" placeholder="Fecha Importante 6"></td></tr>
    </table>

    <button>Guardar Datos</button>
    <!--<button onclick="agregarBloque()">Agregar Fila</button>
    <button onclick="agregarTema()">Agregar Fila</button>-->
    </form>
    
    <table>
        
    </table>
    <button onclick="descargarPDF()">Imprimir en PDF</button>
    <script>
        function sumarHoras() {
            // Obtener los valores de los campos de entrada
            var TeoriaHoras = document.getElementById("TeoriaHoras").value;
            var PracticaHoras = document.getElementById("PracticaHoras").value;

            // Convertir los valores a números y sumarlos
            var resultadoHoras = parseFloat(TeoriaHoras) + parseFloat(PracticaHoras);

            // Mostrar el resultado
            document.getElementById("resultadoHoras").innerText = resultadoHoras;
        }
        function sumarCreditos() {
            // Obtener los valores de los campos de entrada
            var TeoriaCreditos = document.getElementById("TeoriaCreditos").value;
            var PracticaCreditos = document.getElementById("PracticaCreditos").value;

            // Convertir los valores a números y sumarlos
            var resultadoCreditos = parseFloat(TeoriaCreditos) + parseFloat(PracticaCreditos);

            // Mostrar el resultado
            document.getElementById("resultadoCreditos").innerText = resultadoCreditos;
        }
        function sumarPonderacion() {
            // Obtener los valores de los campos de entrada
            var P1 = document.getElementById("P1").value;
            var P2 = document.getElementById("P2").value;
            var P3 = document.getElementById("P3").value;
            var P4 = document.getElementById("P4").value;
            var P5 = document.getElementById("P5").value;
            var P6 = document.getElementById("P6").value;

            // Convertir los valores a números y sumarlos
            var resultadoPonderacion = parseFloat(P1) + parseFloat(P2) + parseFloat(P3) + parseFloat(P4) + parseFloat(P5) + parseFloat(P6);

            // Mostrar el resultado
            document.getElementById("resultadoPonderacion").innerText = resultadoPonderacion;
        }
        function agregarBloque() {
            // Obtener la referencia de la tabla
            var tabla = document.getElementById("miTabla");

            // Crear una nueva fila y agregar celdas con inputs
            var nuevaFila = tabla.insertRow(-1);
            var celda1 = nuevaFila.insertCell(0);
            var celda2 = nuevaFila.insertCell(1);

            // Crear inputs y agregarlos a las nuevas celdas
            var input1 = document.createElement("input");
            input1.type = "text";
            input1.value = "Nuevo Bloque";
            celda1.appendChild(input1);

            var input2 = document.createElement("input");
            input2.type = "text";
            input2.value = "Nombre del bloque";
            celda2.appendChild(input2);

        }
        function agregarTema() {
            // Obtener la referencia de la tabla
            var tabla = document.getElementById("miTabla");

            // Crear una nueva fila y agregar celdas con inputs
            var nuevaFila = tabla.insertRow(-1);
            var celda1 = nuevaFila.insertCell(0);
            var celda2 = nuevaFila.insertCell(1);

            // Crear inputs y agregarlos a las nuevas celdas
            var input1 = document.createElement("input");
            input1.type = "text";
            input1.value = "Nuevo Bloque";
            celda1.appendChild(input1);

            var input2 = document.createElement("input");
            input2.type = "text";
            input2.value = "Nombre del bloque";
            celda2.appendChild(input2);

        }
    </script>

</body>
</html>

