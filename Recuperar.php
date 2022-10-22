<?php 

$buscar = 1;

if(isset($_POST['buscador'])){
    
    $buscar = $_POST['buscar'];
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cuestionario</title>
        <link href="css/formatos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
            
            <h1>Revisión de Encuestas</h1>
            <center>
            
            <form name="buscador" action="Recuperar.php" method="POST">
                
                Bucador <input type="text" name="buscar" value="<?php echo $buscar;?>" /> <input type="submit" value="Buscar" name="buscador" />
                
            </form>
            
            </center>
            <?php 
            
            require_once './recursos/conexion.php';
            require_once './recursos/funciones.php';
            
            $datos_generales = traer_datos_generales($conexion, $buscar);
            
            while ($fila = mysqli_fetch_assoc($datos_generales)){
            
            ?>
            <center>
            <h2>Datos Generales</h2>
            
            <table border="1">
            
                <tr>
                
                    <td>Fecha:</td>
                    <td><input type="date" name="fecha" value="<?php echo $fila['fecha']; $total = $fila['total']; $observacion = $fila['observaciones'];?>" /> <br>
                    </td>
                </tr>
                
                <tr>
                    <td>Provincia:</td>
                <td><input type="text" name="provincia" value="<?php echo $fila['provincia'] ?>" /><br>
                </td>
                </tr>
                
                <tr>
                    <td>Ciudad:</td>
                <td><input type="text" name="ciudad" value="<?php echo $fila['ciudad'] ?>" /><br>
                </td>
                </tr>
                
                <tr>
                
                    <td>Área de Trabajo:</td>
                <td><input type="text" name="area" value="<?php echo $fila['area'] ?>" /><br>
                </td>
                </tr>
                
                <tr>

                <tr>
                
                    <td>Departamento:</td>
                <td><input type="text" name="area" value="<?php echo $fila['departamento'] ?>" /><br>
                </td>
                </tr>

                <tr>
                
                    <td>SubArea:</td>
                <td><input type="text" name="area" value="<?php echo $fila['departamentoN2'] ?>" /><br>
                </td>
                </tr>

                <tr>
                
                    <td>Especialidad:</td>
                <td><input type="text" name="area" value="<?php echo $fila['departamentoN3'] ?>" /><br>
                </td>
                </tr>
                
                <tr>
                
                    <td>Nivel más alto de instrucción: </td>
                <td><input type="text" name="nivel" value="<?php echo $fila['nivel_instruccion'] ?>" /><br>
                </td>
                </tr>
            
                <tr>
                
                    <td>Antigüedad, años de experiencia dentro de la empresa o institución:</td> 
                <td><input type="text" name="antiguedad" value="<?php echo $fila['antiguedad'] ?>" /><br>
                </td>
                </tr>
                
                <tr>
                
                    <td>Edad del trabajador o servidor:</td>
                <td><input type="text" name="edad" value="<?php echo $fila['edad'] ?>" /><br>
                </td>
                </tr>
            
                <tr>
                <td>
                    Auto-identificación étnica:</td>
                <td><input type="text" name="etnia" value="<?php echo $fila['etnia'] ?>" /><br>
                </td>
                </tr>
            
                <tr>
                <td>
                    Género del trabajador o servidor:</td> 
                <td><input type="text" name="genero" value="<?php echo $fila['genero'] ?>" /><br></td>
                </tr>
            </table>
            
            </center>
            <?php } 
            
         $carga_ritmo_trabajo = traer_carga_ritmo_trabajo($conexion, $buscar);
         
         while ($fila = mysqli_fetch_assoc($carga_ritmo_trabajo)){
            
            ?>
            
            <h2>Carga y Ritmo de Trabajo</h2>
            
            <table border="1">
                <thead>
                    <tr>
                        <th>Ítem</th>
                        <th>Puntaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Considero que son aceptables las solicitudes y requerimientos<br> 
                            que me piden otras personas (compañeros de trabajo, <br> 
                            usuarios, clientes) </td>
                        <td><center><?php echo $fila['pregunta_1'];?></center></td>
                    </tr>
                    <tr>
                        <td>Decido el ritmo de trabajo en mis actividades </td>
                        <td><center><?php echo $fila['pregunta_2'];?></center></td>
                    </tr><tr>
                        <td>Las actividades y/o responsabilidades que me fueron<br> 
                            asignadas no me causan estrés </td>
                        <td><center><?php echo $fila['pregunta_3'];?></center></td>
                    </tr><tr>
                        <td>Tengo suficiente tiempo para realizar todas las actividades<br>
                            que me han sido encomendadas dentro de mi jornada laboral </td>
                        <td><center><?php echo $fila['pregunta_4'];?></center></td>
                    </tr>
                    <tr>
                        <td>Total </td>
                        <td><center><?php echo $fila['total']; $total1 = $fila['total'];?></center></td>
                    </tr>
                </tbody>
            </table>

         <?php }
         
         $desarrollo_competencias = traer_desarrollo_competencias($conexion, $buscar);
         
         while ($fila = mysqli_fetch_assoc($desarrollo_competencias)){
         
         ?>
            
            <h2>DESARROLLO DE COMPETENCIAS</h2>
            
            <table border="1">
                <thead>
                    <tr>
                        <th>Ítem</th>
                        <th>Puntaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Considero que tengo los suficientes conocimientos,<br>
                            habilidades y destrezas para desarrollar el <br>
                            trabajo para el cual fui contratado </td>
                        <td><center><?php echo $fila['pregunta_1'];?></center></td>
                    </tr>
                    <tr>
                        <td>En mi trabajo aprendo y adquiero nuevos conocimientos, <br>
                            habilidades y destrezas de mis compañeros de trabajo  </td>
                        <td><center><?php echo $fila['pregunta_2'];?></center></td>
                    </tr><tr>
                        <td>En mi trabajo se cuenta con un plan de carrera, capacitación<br>
                            y/o entrenamiento para el desarrollo de mis conocimientos,<br>
                            habilidades y destrezas </td>
                        <td><center><?php echo $fila['pregunta_3'];?></center></td>
                    </tr><tr>
                        <td>En mi trabajo se evalúa objetiva y periódicamente las<br> 
                            actividades que realizo </td>
                        <td><center><?php echo $fila['pregunta_4'];?></center></td>
                    </tr>
                    <tr>
                        <td>Total </td>
                        <td><center><?php echo $fila['total'];$total2 = $fila['total'];?></center></td>
                    </tr>
                </tbody>
            </table>
            
         <?php }
         
         $liderazgo = traer_liderazgo($conexion, $buscar);
         
         while ($fila = mysqli_fetch_assoc($liderazgo)){
         
         ?>
            
            <h2>LIDERAZGO</h2>
            
            <table border="1">
                <thead>
                    <tr>
                        <th>Ítem</th>
                        <th>Puntaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>En mi trabajo se reconoce y se da crédito a la persona que<br>
                            realiza un buen trabajo o logran sus objetivos. </td>
                        <td><center><?php echo $fila['pregunta_1'];?></center></td>
                    </tr>
                    <tr>
                        <td>Mi jefe inmediato esta dispuesto a escuchar propuestas de<br>
                            cambio e iniciativas de trabajo  </td>
                        <td><center><?php echo $fila['pregunta_2'];?></center></td>
                    </tr><tr>
                        <td>Mi jefe inmediato establece metas, plazos claros y factibles<br>
                            para el cumplimiento de mis funciones o actividades  </td>
                        <td><center><?php echo $fila['pregunta_3'];?></center></td>
                    </tr><tr>
                        <td>Mi jefe inmediato interviene, brinda apoyo, soporte y se <br>
                            preocupa cuando tengo demasiado trabajo que realizar </td>
                        <td><center><?php echo $fila['pregunta_4'];?></center></td>
                    </tr><tr>
                        <td>Mi jefe inmediato me brinda suficientes lineamientos y<br>
                            retroalimentación para el desempeño de mi trabajo </td>
                        <td><center><?php echo $fila['pregunta_5'];?></center></td>
                    </tr><tr>
                        <td>Mi jefe inmediato pone en consideración del equipo de<br>
                            trabajo, las decisiones que pueden afectar a todos. </td>
                        <td><center><?php echo $fila['pregunta_6'];?></center></td>
                    </tr>
                    <tr>
                        <td>Total </td>
                        <td><center><?php echo $fila['total'];$total3 = $fila['total'];?></center></td>
                    </tr>
                </tbody>
            </table>
            
         <?php }
         
         $margen_accion_control = traer_margen_accion_control($conexion, $buscar);
         
         while ($fila = mysqli_fetch_assoc($margen_accion_control)){
         
         ?>
            
            <h2>MARGEN DE ACCIÓN Y CONTROL</h2>
            
            <table border="1">
                <thead>
                    <tr>
                        <th>Ítem</th>
                        <th>Puntaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>En mi trabajo existen espacios de discusión para debatir<br>
                            abiertamente los problemas comunes y diferencias de <br>
                            opinión </td>
                        <td><center><?php echo $fila['pregunta_1'];?></center></td>
                    </tr>
                    <tr>
                        <td>Me es permitido realizar el trabajo con colaboración de mis <br>
                            compañeros de trabajo y/u otras áreas   </td>
                        <td><center><?php echo $fila['pregunta_2'];?></center></td>
                    </tr><tr>
                        <td>Mi opinión es tomada en cuenta con respecto a fechas límites <br>
                            en el cumplimiento de mis actividades o cuando exista<br> 
                            cambio en mis funciones  </td>
                        <td><center><?php echo $fila['pregunta_3'];?></center></td>
                    </tr><tr>
                        <td>Se me permite aportar con ideas para mejorar las actividades<br>
                            y la organización del trabajo </td>
                        <td><center><?php echo $fila['pregunta_4'];?></center></td>
                    </tr>
                    <tr>
                        <td>Total </td>
                        <td><center><?php echo $fila['total'];$total4 = $fila['total'];?></center></td>
                    </tr>
                </tbody>
        </table>
            
         <?php }
         
         $organizacion_trabajo = traer_organizacion_trabajo($conexion, $buscar);
         
         while ($fila = mysqli_fetch_assoc($organizacion_trabajo)){
         
         ?>
            
            <h2>ORGANIZACIÓN DEL TRABAJO</h2>
            
            <table border="1">
                <thead>
                    <tr>
                        <th>Ítem</th>
                        <th>Puntaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Considero que las formas de comunicación en mi trabajo son<br>
                            adecuados, accesibles y de fácil comprensión  </td>
                        <td><center><?php echo $fila['pregunta_1'];?></center></td>
                    </tr>
                    <tr>
                        <td>En mi trabajo se informa regularmente de la gestión y logros <br>
                            de la empresa o institución a todos los trabajadores y<br>
                            servidores   </td>
                        <td><center><?php echo $fila['pregunta_2'];?></center></td>
                    </tr><tr>
                        <td>En mi trabajo se respeta y se toma en consideración las<br>
                            limitaciones de las personas con discapacidad para  la<br>
                            asignación de roles y tareas </td>
                        <td><center><?php echo $fila['pregunta_3'];?></center></td>
                    </tr><tr>
                        <td>En mi trabajo tenemos reuniones suficientes y significantes<br>
                            para el cumplimiento de los objetivos </td>
                        <td><center><?php echo $fila['pregunta_4'];?></center></td>
                    </tr><tr>
                        <td>Las metas y objetivos en mi trabajo son claros y alcanzables </td>
                        <td><center><?php echo $fila['pregunta_5'];?></center></td>
                    </tr>
                    <tr>
                        <td>Siempre dispongo de tareas y actividades a realizar en mi<br>
                            jornada y lugar de trabajo  </td>
                        <td><center><?php echo $fila['pregunta_6'];?></center></td>
                    </tr>
                    <tr>
                        <td>Total </td>
                        <td><center><?php echo $fila['total'];$total5 = $fila['total'];?></center></td>
                    </tr>
                </tbody>
        </table>
            
         <?php }
         
         $recuperacion = traer_recuperacion($conexion, $buscar);
         
         while ($fila = mysqli_fetch_assoc($recuperacion)){
         
         ?>
            
            <h2>RECUPERACIÓN</h2>
            
            <table border="1">
                <thead>
                    <tr>
                        <th>Ítem</th>
                        <th>Puntaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Después del trabajo tengo la suficiente energía como para<br>
                            realizar otras actividades  </td>
                        <td><center><?php echo $fila['pregunta_1'];?></center></td>
                    </tr>
                    <tr>
                        <td>En mi trabajo se me permite realizar pausas de periodo corto <br>
                            para renovar y recuperar la energía.   </td>
                        <td><center><?php echo $fila['pregunta_2'];?></center></td>
                    </tr><tr>
                        <td>En mi trabajo tengo tiempo para dedicarme a reflexionar<br>
                            sobre mi desempeño en el trabajo </td>
                        <td><center><?php echo $fila['pregunta_3'];?></center></td>
                    </tr><tr>
                        <td>Tengo un horario y jornada de trabajo que se ajusta a mis<br>
                            expectativas y exigencias laborales </td>
                        <td><center><?php echo $fila['pregunta_4'];?></center></td>
                    </tr>
                    <tr>
                        <td>Todos los días siento que he descansado lo suficiente y que<br>
                            tengo la energía para iniciar mi trabajo   </td>
                        <td><center><?php echo $fila['pregunta_5'];?></center></td>
                    </tr>
                    <tr>
                        <td>Total </td>
                        <td><center><?php echo $fila['total'];$total6 = $fila['total'];?></center></td>
                    </tr>
                </tbody>
        </table>
            
         <?php }
         
         $soporte_apoyo = traer_soporte_apoyo($conexion, $buscar);
         
         while ($fila = mysqli_fetch_assoc($soporte_apoyo)){
         
         ?>
            
            <h2>SOPORTE Y APOYO</h2>
            
            <table border="1">
                <thead>
                    <tr>
                        <th>Ítem</th>
                        <th>Puntaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>El trabajo está organizado de tal manera que  fomenta la<br>
                            colaboración de equipo y el diálogo con otras personas  </td>
                        <td><center><?php echo $fila['pregunta_1'];?></center></td>
                    </tr>
                    <tr>
                        <td>En mi trabajo percibo un sentimiento de compañerismo y<br>
                            bienestar con mis colegas   </td>
                        <td><center><?php echo $fila['pregunta_2'];?></center></td>
                    </tr><tr>
                        <td>En mi trabajo se brinda el apoyo necesario a los trabajadores<br>
                            sustitutos o trabajadores con algún grado de discapacidad y<br>
                            enfermedad  </td>
                        <td><center><?php echo $fila['pregunta_3'];?></center></td>
                    </tr><tr>
                        <td>En mi trabajo se me brinda ayuda técnica y administrativa<br>
                            cuando lo requiero </td>
                        <td><center><?php echo $fila['pregunta_4'];?></center></td>
                    </tr>
                    <tr>
                        <td>En mi trabajo tengo acceso a la atención de un médico,<br>
                            psicólogo, trabajadora social, consejero, etc. en situaciones<br>
                            de crisis y/o rehabilitación   </td>
                        <td><center><?php echo $fila['pregunta_5'];?></center></td>
                    </tr>
                    <tr>
                        <td>Total </td>
                        <td><center><?php echo $fila['total'];$total7 = $fila['total'];?></center></td>
                    </tr>
                </tbody>
        </table>
            
         <?php }
         
         $puntos_importantes = traer_puntos_importantes($conexion, $buscar);
         
         while ($fila = mysqli_fetch_assoc($puntos_importantes)){
         
         ?>
            
            <h2>OTROS PUNTOS IMPORTANTES </h2>
            
            <table border="1">
                <thead>
                    <tr>
                        <th>Ítem</th>
                        <th>Puntaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>En mi trabajo tratan por igual a todos, indistintamente la edad<br>
                            que tengan </td>
                        <td><center><?php echo $fila['pregunta_1'];?></center></td>
                    </tr>
                    <tr>
                        <td>Las directrices y metas que me autoimpongo, las cumplo<br>
                            dentro de mi jornada y horario de trabajo   </td>
                        <td><center><?php echo $fila['pregunta_2'];?></center></td>
                    </tr><tr>
                        <td>En mi trabajo existe un buen ambiente laboral  </td>
                        <td><center><?php echo $fila['pregunta_3'];?></center></td>
                    </tr><tr>
                        <td>Tengo un trabajo donde los hombres y mujeres tienen las<br>
                            mismas oportunidades </td>
                        <td><center><?php echo $fila['pregunta_4'];?></center></td>
                    </tr>
                    <tr>
                        <td>En mi trabajo me siento aceptado y valorado   </td>
                        <td><center><?php echo $fila['pregunta_5'];?></center></td>
                    </tr>
                    <tr>
                        <td>Los espacios y ambientes físicos en mi trabajo brindan las<br>
                            facilidades para el acceso de las personas con discapacidad   </td>
                        <td><center><?php echo $fila['pregunta_6'];?></center></td>
                    </tr>
                    <tr>
                        <td>Considero que mi trabajo esta libre de amenazas,<br>
                            humillaciones, ridiculizaciones, burlas, calumnias o<br>
                            difamaciones reiteradas con el fin de causarme daño.   </td>
                        <td><center><?php echo $fila['pregunta_7'];?></center></td>
                    </tr>
                    <tr>
                        <td>Me siento estable a pesar de cambios que se presentan en<br>
                            mi trabajo.   </td>
                        <td><center><?php echo $fila['pregunta_8'];?></center></td>
                    </tr>
                    <tr>
                        <td>En mi trabajo estoy libre de conductas sexuales que afecten<br>
                            mi integridad física, psicológica y moral   </td>
                        <td><center><?php echo $fila['pregunta_9'];?></center></td>
                    </tr>
                    <tr>
                        <td>Considero que el trabajo que realizo no me causa efectos<br>
                            negativos a mi salud física y mental  </td>
                        <td><center><?php echo $fila['pregunta_10'];?></center></td>
                    </tr>
                    <tr>
                        <td>Me resulta fácil relajarme cuando no estoy trabajando    </td>
                        <td><center><?php echo $fila['pregunta_11'];?></center></td>
                    </tr>
                    <tr>
                        <td>Siento que mis problemas familiares o personales no<br>
                            influyen en el desempeño de las actividades en el trabajo  </td>
                        <td><center><?php echo $fila['pregunta_12'];?></center></td>
                    </tr>
                    <tr>
                        <td>Las instalaciones, ambientes, equipos, maquinaria y <br>
                            herramientas que utilizo para realizar el trabajo son las<br>
                            adecuadas para no sufrir accidentes de trabajo y<br>
                            enfermedades profesionales   </td>
                        <td><center><?php echo $fila['pregunta_13'];?></center></td>
                    </tr>
                    <tr>
                        <td>Mi trabajo esta libre de acoso sexual  </td>
                        <td><center><?php echo $fila['pregunta_14'];?></center></td>
                    </tr>
                    <tr>
                        <td>En mi trabajo se me permite solucionar mis problemas<br> 
                            familiares y personales  </td>
                        <td><center><?php echo $fila['pregunta_15'];?></center></td>
                    </tr>
                    <tr>
                        <td>Tengo un trabajo libre de conflictos estresantes, rumores<br>
                            maliciosos o calumniosos sobre mi persona.  </td>
                        <td><center><?php echo $fila['pregunta_16'];?></center></td>
                    </tr>
                    <tr>
                        <td>Tengo un equilibrio y separo bien el trabajo de mi vida<br>
                            personal.  </td>
                        <td><center><?php echo $fila['pregunta_17'];?></center></td>
                    </tr>
                    <tr>
                        <td>Estoy orgulloso de trabajar en mi empresa o institución  </td>
                        <td><center><?php echo $fila['pregunta_18'];?></center></td>
                    </tr>
                    <tr>
                        <td>En mi trabajo se respeta mi ideología, opinión política,<br>
                            religiosa, nacionalidad y orientación sexual.  </td>
                        <td><center><?php echo $fila['pregunta_19'];?></center></td>
                    </tr>
                    <tr>
                        <td>Mi trabajo y los aportes que realizo son valorados y me<br>
                            generan motivación. </td>
                        <td><center><?php echo $fila['pregunta_20'];?></center></td>
                    </tr>
                    <tr>
                        <td>Me siento libre de culpa cuando no estoy trabajando en algo  </td>
                        <td><center><?php echo $fila['pregunta_21'];?></center></td>
                    </tr>
                    <tr>
                        <td>En mi trabajo no existen espacios de uso exclusivo de un<br>
                            grupo determinado de personas ligados a un privilegio, por <br>
                            ejemplo, cafetería exclusiva, baños exclusivos, etc., mismo<br>
                            que causa malestar y perjudica mi ambiente laboral  </td>
                        <td><center><?php echo $fila['pregunta_22'];?></center></td>
                    </tr>
                    <tr>
                        <td>Puedo dejar de pensar en el trabajo durante mi tiempo libre <br>
                            (pasatiempos, actividades de recreación, otros)   </td>
                        <td><center><?php echo $fila['pregunta_23'];?></center></td>
                    </tr>
                    <tr>
                        <td>Considero que me encuentro física y mentalmente saludable  </td>
                        <td><center><?php echo $fila['pregunta_24'];?></center></td>
                    </tr>
                    <tr>
                        <td>Total </td>
                        <td><center><?php echo $fila['total'];$total8 = $fila['total'];?></center></td>
                    </tr>
                </tbody>
        </table>
            
            <br>
            
            <table border="1">
                <thead>
                    <tr>
                        <th>Observaciones y Comentarios</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <?php echo $observacion;?> </td>
                    </tr>
                    
                </tbody>
        </table>
            
            <br>
            
            <table border="1">
                <thead>
                    <tr>
                        <th>Ítem</th>
                        <th>Puntaje</th>
                        <th>&nbsp;&nbsp;&nbsp;</th>
                        <th>Riesgo Bajo</th>
                        <th>&nbsp;&nbsp;&nbsp;</th>
                        <th>Riesgo Medio</th>
                        <th>&nbsp;&nbsp;&nbsp;</th>
                        <th>Riesgo Alto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Resultado Global </td>
                        <td> <?php echo $total;?> </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 175 a 232 </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 117 a 174 </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 58 a 116 </td>
                    </tr>
                    
                </tbody>
        </table>
            
            <br>
            
            <table border="1">
                <thead>
                    <tr>
                        <th>Resultado por Dimensiones</th>
                        <th>Puntaje</th>
                        <th>&nbsp;&nbsp;&nbsp;</th>
                        <th>Riesgo Bajo</th>
                        <th>&nbsp;&nbsp;&nbsp;</th>
                        <th>Riesgo Medio</th>
                        <th>&nbsp;&nbsp;&nbsp;</th>
                        <th>Riesgo Alto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Carga y ritmo de trabajo </td>
                        <td> <?php echo $total1;?> </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 13 a 16 </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 8 a 12 </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 4 a 7 </td>
                    </tr>
                    
                    
                    <tr>
                        <td> Desarrollo de competencias </td>
                        <td> <?php echo $total2;?> </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 13 a 16 </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 8 a 12 </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 4 a 7 </td>
                    </tr>
                    
                    
                    <tr>
                        <td> Liderazgo </td>
                        <td> <?php echo $total3;?> </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 18 a 24 </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 12 a 17</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 6 a 11 </td>
                    </tr>
                    
                    
                    
                    <tr>
                        <td> Margen de acción y control </td>
                        <td> <?php echo $total4?> </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 13 a 16 </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>8 a 12</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 4 a 7 </td>
                    </tr>
                    
                    <tr>
                        <td> Organización del trabajo </td>
                        <td> <?php echo $total5;?> </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 18 a 24 </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 12 a 17 </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 6 a 11 </td>
                    </tr>
                    
                    
                    <tr>
                        <td> Recuperación </td>
                        <td> <?php echo $total6;?> </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>16 a 20</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 10 a 15 </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 5 a 9 </td>
                    </tr>
                    
                    
                    <tr>
                        <td> Soporte y apoyo </td>
                        <td> <?php echo $total7;?> </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>16 a 20</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 10 a 15 </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 5 a 9 </td>
                    </tr>
                    
                    
                    <tr>
                        <td> Otros puntos importantes </td>
                        <td> <?php echo $total8;?> </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 73 a 96 </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 49 a 72 </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td> 24 a 48 </td>
                    </tr>
                    
                    
                </tbody>
        </table>
            
         <?php }?>
            
            <br>
            <br>
    </body>
</html>
