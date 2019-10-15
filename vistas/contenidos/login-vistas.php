<!--<script type="text/javascript">
$(document).ready(function() {
    function changeNumber() {
        //var token = '<?ph //echo $codigo ?>'?token='+token;
        $.ajax
        ({
            sync:  false, 
            type: "POST",
            Type:"html",
            url: 'http://localhost/secciones/ajax/httpushAjax.php',
            success: function(data) 
            {
//                var datos        = eval("(" + data + ")");
//                var atender          = datos.atender;
//                var estatus          = datos.estatus;
//                document.cookie ='variable='+atender+'; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/';
                //$.post('', {variable: atender});
                //window.location="atender=" + atender + "estatus=" + estatus;
//                $('#atender').text(atender);
                $('#contenido').html(data);
                //console.log(atender);

            }
        });
    }
    setInterval(changeNumber, 50000);
    
//    function primero() {
//        //var token = '<?ph //echo $codigo ?>'?token='+token;
////        $.ajax
////        ({
////            sync:  false, 
////            type: "POST",
////            Type:"html",
////            url: 'http://localhost/secciones/ajax/httpushAjax.php',
////            success: function(data) 
////            {
//////                var datos        = eval("(" + data + ")");
//////                var atender          = datos.atender;
//////                var estatus          = datos.estatus;
//////                document.cookie ='variable='+atender+'; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/';
////                //$.post('', {variable: atender});
////                //window.location="atender=" + atender + "estatus=" + estatus;
//////                $('#atender').text(atender);
////                $('#contenido').html(data);
////                //console.log(atender);
////
////            }
////        });
//    }
//    setInterval(primero, 500);
});
</script>-->
<!--<script type="text/javascript">
$(document).ready(function() {
//        var id="<?php echo $id; ?>";
//        var tipo="<?php echo $tipo; ?>";
//        function changeNumber() {  ?id="+id+"&tipo="+tipo
        $.ajax
        ({
            sync:  false, 
            type: "POST",
            Type:"html",
            url: "http://localhost/secciones/ajax/httpushAjax.php",
//            data: { valor : val },
            success: function(data) 
            {
//                var datos        = eval("(" + data + ")");
//                for (var i=0;i<datos.length;i++) {
//                    var nombre=datos[i].nombre;
//                    var texto=datos[i].texto;
//                    var link=datos[i].link;
////                    var pdfimagen=datos[i].pdfimagen;
//                    var fechaini=datos[i].finicio;
//                    var final=datos[i].final;
//                    var idcon=datos[i].idcon;
//                    var cdseccion=datos[i].cdseccion;
//                    var contador=datos.length;
                    
//                    var con= '<input class="form-control" type="text" value='+contador+' name="con">\n\
//                              <input class="form-control" type="text" value='+contador+' name="con">';
//                    $.post('http://localhost/secciones/vistas/contenidos/vistageneral',{con:contador}),
//                    console.log(nombre);
//                    console.log(texto);
//                    console.log(link);
////                    console.log(pdfimagen);
//                    console.log(idcon);
//                    console.log(fechaini);
//                    console.log(final);
//                    console.log(cdseccion);
//                    console.log(i);
//                    console.log(contador);
                   
//                }
//                    var n =  new Date();//Año
//                    var y = n.getFullYear();//Mes
//                    var m = n.getMonth() + 1;//Día
//                    var d = n.getDate();
//                    if(d<10)
//                    d='0'+d; //agrega cero si el menor de 10
//                    if(m<10)
//                    m='0'+m; 
//                    var anio = d+"/"+m+"/"+y;
                    //console.log(anio);
                    
                    

//                    if(anio >= fechaini){
//                        $("#div1").show();
//                        $('#titulo').text(nombre);
//                        $('#texto').text(texto);
//                        $('#link').text(link);
                        $('#finanzas').html(data);
//                        $('#contador').html(con);
    //                    $("#div2").hide();
    //                    $("#div2").disabled=true;
                        //document.getElementById("div1").appendChild(todo);la variable contiene toda la infmacion
//                    }
//                    else if(anio <= final){
//                        $("#div1").hide();
//                    }
//                }
//                $.post('http://localhost/secciones/vistas/contenidos/vistageneral-vistas.php',{con:contador}),
            }
            
        });
//        }
//    setInterval(changeNumber, 5000);
});
</script>-->
<div class="container-fluid">
    <!--documents-->
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
                    <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i><a href="<?php echo SERVERURL;?>index"><b>Subdirección de Desarrollo Organizacional HOLA</b></a></li>
                <?php
//                    require_once "./controladores/httpushControlador.php";
//                    $instancia= new httpushControlador();
//                    $finanzas= $instancia->actualizar_httpush();
//                    
//                    require_once "./controladores/sacmexControlador.php";
//                    $instancia2= new sacmexControlador();
//                    $sacmex= $instancia2->sacmex();
//                    
//                    require_once "./controladores/generalControlador.php";
//                    $instancia3= new generalControlador();
//                    $general= $instancia3->general();
//                    
//                    require_once "./controladores/todoControlador.php";
//                    $instancia4= new todoControlador();
//                    $todo= $instancia4->obtener_todo();
                    ////////////////////////////////////////////////////////
                    require_once "./controladores/contadorControlador.php";
                    $instancia6= new contadorControlador();
                    $contador= $instancia6->obtener_contador();
                    
                    require_once "./controladores/tipoControlador.php";
                    $instancia5= new tipoControlador();
                    $tipos= $instancia5->obtener_tipo();
//                    
//                    require_once "./controladores/contadortituloControlador.php";
//                    $instancia7= new contadortituloControlador();
//                    $contadortitulo= $instancia7->obtener_contador_titulo();
                    
                    $i=1;
                ?>
                <?php 
                        for($a=1;$a<=$contador;$a++){
                            while($row=$tipos->fetch(PDO::FETCH_ASSOC)){ 
                                $tiposeccion=$row['tiposeccion'];
                                $fechaactual2= date("d/m/Y");
//                                    $tipo=$row['tiposeccion'];
//                                    $titulo=  utf8_encode($row['nombre']);
//                                    $id=$row['idsecciones'];
                                    $fechafin=$row['fecha_fin'];
                                    $estatus=$row['estatus'];
                                    $ffinal=$row['fecha_fin'];
                                    $finicio=$row['fecha_inicio'];
                                    $fechaactual = date("Y-m-d H:i:s");
                                    
//                                    $id= mainModel::encryption($id);
//                                    $tipo= mainModel::encryption($tipo);
                                
                                $consulta=mainModel::ejecutar_consulta_simple("SELECT
                                                                                        tiposecciones.idtiposecciones,
                                                                                        tiposecciones.tiposeccion,
                                                                                        secciones.nombre,
                                                                                        contenidos.fecha_fin,
                                                                                        secciones.idsecciones,
                                                                                        secciones.estatus AS status
                                                                                        FROM
                                                                                        secciones
                                                                                        INNER JOIN tiposecciones ON tiposecciones.idtiposecciones = secciones.idtiposecciones
                                                                                        INNER JOIN contenidos ON secciones.idsecciones = contenidos.idsecciones
                                                                                        WHERE
                                                                                        tiposecciones.tiposeccion ='$tiposeccion'");
                                //print_r($consulta->errorInfo());
                                
//                                $consulta2=mainModel::ejecutar_consulta_simple("SELECT
//                                                                                        tiposecciones.idtiposecciones,
//                                                                                        tiposecciones.tiposeccion,
//                                                                                        secciones.nombre,
//                                                                                        contenidos.fecha_inicio,
//                                                                                        contenidos.fecha_fin,
//                                                                                        secciones.estatus
//                                                                                        FROM
//                                                                                        secciones
//                                                                                        INNER JOIN tiposecciones ON tiposecciones.idtiposecciones = secciones.idtiposecciones
//                                                                                        INNER JOIN contenidos ON secciones.idsecciones = contenidos.idsecciones
//                                                                                        ORDER BY
//                                                                                        tiposecciones.idtiposecciones ASC");
                                
                                $ancla='#demo'.$i;
                                $collapse='demo'.$i;
//                                while($r=$consulta2->fetch(PDO::FETCH_ASSOC)){
//                                    $estatus=$r['estatus'];
//                                    print_r($estatus);
//                                }
                            
                                                               
//                        if($finicio<=$fechaactual){
     
//                             if($final>=$fechaactual){
                           //if($estatus==1){
                               
                            if($finicio<=$fechaactual && $ffinal>=$fechaactual && $estatus==1){
                                
                ?>
                  <a href="<?php echo $ancla;?>" class="list-group-item" data-toggle="collapse"><?php echo $tiposeccion;?><span class="glyphicon glyphicon-chevron-right"></span></a>
                  <div id="contenido"></div>
                    <li class="collapse" id="<?php echo $collapse; ?>">
                    <?php
                                while($row=$consulta->fetch(PDO::FETCH_ASSOC)){ 
//                                    $fechaactual2= date("d/m/Y");
                                    $tipo=$row['tiposeccion'];
                                    $titulo=  utf8_encode($row['nombre']);
                                    $id=$row['idsecciones'];
//                                    $fechafin=$row['fecha_fin'];
                                    $estatus2=$row['status'];
                                    $id= mainModel::encryption($id);
                                    $tipo= mainModel::encryption($tipo);
//                                    
//                                                                    
                                if($estatus2==1){//if 3 
                        ?>
                        <a href="/secciones/vistageneral/<?php echo $id;?>/<?php echo $tipo; ?>" class="list-group-item"><?php echo $titulo; ?></a>
                        <?php  
                                    }//if
                                }//while 
                              $i++;
                        ?>
                    </li>
                <?php
                               }
//                              }
                            }
                    }//for 2
                ?>
                    <!--<li class="list-group-item"><a href="http://localhost/contenido/" target="_blank"><span class="glyphicon glyphicon-log-in"></span>&nbsp; Acceder</a></li>-->
                </ul>
          </div>
            <div class="col-xs-12 col-sm-9 content">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Ocultar/Mostrar Menu"></span></a>Ocultar / Mostrar Menu</h3>
                    </div>
                    <div class="panel-body">
                        <div class="content-row">
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </div>