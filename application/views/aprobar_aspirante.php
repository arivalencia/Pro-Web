<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Aprobar aspirantes</title>
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
        <div class="app-main">
            <!--NAV LATERAL--->
            <?=$this->load->view('includes/nav_lateral.php','',true); ?>
            <!--NAV LATERAL--->
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="portlet-box">
                                <div class="portlet-header flex-row flex d-flex align-items-center">
                                    <div class="flex d-flex flex-column">
                                        <h3>Inscribir aspirantes</h3> 
                                        <!-- <span>Table example</span> -->
                                    </div>
                                </div>
                                <div class="portlet-body no-padding">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                            <!--
                                                CABECERAS DE LA TABLA
                                            -->
                                                <th>#</th>
                                                <th>Nombre(s)</th>
                                                <th>Apellidos</th>
                                                <th>Estaus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <!--
                                            LLENADO DE TABLAS
                                            CON LOS DIFERENTES DATOS
                                        -->
                                        <?php
                                            $count = 0;
                                            foreach($aspirantes as $aspirante){
                                                $count++;
                                                echo '
                                                    <tr>
                                                        <th scope="row">'.$count.'</th>
                                                        <td>'.$aspirante->Nombre.'</td>
                                                        <td>'.$aspirante->Apaterno.' '.$aspirante->Amaterno.'</td>
                                                        <td>';
                                                            echo form_open_multipart('aprobar_aspirante/inscribir',['id'=>'nuevo_estudiante']);
                                                                echo '<input type="hidden" name="id" value="'.$aspirante->Id_Aspirante.'">';
                                                                echo '<a href="javascript:void(0)" class="btn btn-icon btn-primary mb-2">
                                                                    <input class="btn btn-primary" value="Inscribir" type="submit" id="button-upload">
                                                                </a>';
                                                            echo form_close();
                                                   echo '</td>
                                                    </tr>
                                                ';
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
</html>

<script>
    
</script>