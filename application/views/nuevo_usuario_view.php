<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Usuario</title>
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

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Usuario</h5>
                            
                                <div class="row">

                                    <div class="col-lg-12">

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Nombre</label>
                                                <input type="text" name="NombreUsuario" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Apellidos</label>
                                                <input type="text" name="Apellidos" class="form-control" placeholder="">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Area</label>
                                                <input type="text" name="Area" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Puesto</label>
                                                <input type="number" name="Puesto" class="form-control" placeholder="">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Tipo de usuario</label>
                                                <input type="text" name="Tipo" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Grupo de trabajo</label>
                                                <input type="Number" name="Grupo" class="form-control" placeholder="">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Firma digital</label>
                                                <input type="file" name="FirmaDigital" class="form-control" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Contraseña</label>
                                                <input type="password" name="Contraseña" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                            <div class="text-right">
                                <a type="button" href="javascript:history.back()" class="btn btn-danger" type="submit">Cancelar</a>
                                <button class="btn btn-primary" type="submit" id="button-upload">Guardar</button>
                            </div>
                        </div>
                    </div>       
                </div>
            </div> 
            
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<!-- ME -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</body>
</html>