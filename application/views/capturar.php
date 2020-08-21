<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Actas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
	<meta name="msapplication-tap-highlight" content="no">
	
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>main.css" rel="stylesheet">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

        <!--NAV SUP--->
        <?=$this->load->view('includes/nav.php','',true); ?>
        <!--NAV SUP--->

        <!-- CONTENEDOR DE LAS VISTAS -->
        <div class="app-main">

            <!--NAV LATERAL--->
            <?=$this->load->view('includes/nav_lateral.php','',true); ?>
            <!--NAV LATERAL--->

            <!--CUERPO DE EL CUADRO PRINCIPAL--->
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="bg-white table-responsive rounded shadow-sm pt-3 pb-3 mb-30">
                                <?php echo form_open_multipart('capturar_calificacion/actualizar_calificacion',['id'=>'nuevo-miembro']); ?> 
                                    <h3 class=" text-capitalize font400 mb-20">Ari Valencia Delgado</h3>
                                    <span>Acta de calificaciones</span>
                                    <div class="form-row">
                                        <div class="col-md-5">
                                            <label><b>Carrera: </b></label>
                                            <label>Ingeniería en Tecnologías de la Información</label>
                                        </div>
                                        <div class="col-md-4">
                                            <label><b>Matricula: </b></label>
                                            <label>1811113747</label>
                                        </div>
                                        <div class="col-md-3">
                                            <label><b>Periodo: </b></label>
                                            <label>Mayo-Agosto-2020</label>
                                        </div>
                                    </div>
                                    <table id="data-table" class="table mb-0 table-striped" cellspacing="0" width="100%">
                                        <thead>
                                        <!--CABECERAS DE TABLA-->
                                            <tr>
                                                <th>Alumno</th>
                                                <th>Parcial 1</th>
                                                <th>Parcial 2</th>
                                                <th>Parcial 3</th>
                                                <th>Parcial 4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <!--
                                            FORMULARIO PARA INGRESAR DATOS
                                            --->
                                            <tr>
                                                <th scope="row"> <?php echo $alumno->Nombre.' '.$alumno->Apaterno.' '.$alumno->Amaterno; ?></th>
                                                <td><input type="text" class="form-control" name="parcial1" value="<?php echo set_value('parcial1'); ?>"></td>
                                                <td><input type="text" class="form-control" name="parcial2" value="<?php echo set_value('parcial2'); ?>"></td>
                                                <td><input type="text" class="form-control" name="parcial3" value="<?php echo set_value('parcial3'); ?>"></td>
                                                <td><input type="text" class="form-control" name="parcial4" value="<?php echo set_value('parcial4'); ?>"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <input type="hidden" name="id" value="<?php echo $alumno->Id_Aspirante; ?>">
                                    <button class="btn btn-primary" type="submit" id="button-upload">Guardar</button>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</body>
</html>



