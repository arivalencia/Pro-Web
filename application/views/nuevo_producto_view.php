<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Nuevo producto</title>
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
                            <h5 class="card-title">Alta de equipo</h5>
                            
                                <div class="row">

                                    <div class="col-lg-12">

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Nombre</label>
                                                <input type="text" name="NombreEquipo" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Marca</label>
                                                <input type="text" name="Marca" class="form-control" placeholder="">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Modelo</label>
                                                <input type="text" name="Modelo" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Precio</label>
                                                <input type="Number" name="Precio" class="form-control" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Numero de serie</label>
                                            <input type="text" name="NumSerie" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Descripcion</label>
                                            <input type="text" name="Descripcion" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Estatus</label>
                                            <select name="Estatus" class="form-control m-b">
                                                <option>Existencia</option>
                                                <option>Inexistente</option>
                                            </select>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Fecha de Ingreso</label>
                                                <input type="date" class="form-control" name="Fecha" value="01-06-2020" data-date-format="dd-mm-yyyy">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Hora de Ingreso</label>
                                                <input type="time" class="form-control" name="Fecha" value="01-06-2020" data-date-format="dd-mm-yyyy">
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