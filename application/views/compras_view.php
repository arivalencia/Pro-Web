<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Compras</title>
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
                            <h5 class="card-title">Proveedores</h5>
                            
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
								<tr>
									<th>Nombre</th>
									<th>RFC</th>
									<th>Telefono</th>
									<th>Fax</th>
									<th>Catalogo</th>
									<th>Contactos</th>
									<th>Direcciones</th>
									<th>Facturacion</th>
									<th> </th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>Brembo</td>
									<td>FG23FG56F</td>
									<td>2464594735</td>
									<td>fax</td>
									<td><a href="https://www.bremboparts.com/america/es">Ver</a></td>
									<td>Ari Valencia</td>
									<td>Av. Siempre viva #43</td>
									<td>$34,000</td>
									<td>
                                        <a href="<?=base_url()?>compras/nuevoProveedor" class="btn btn-primary">
                                            <span class="text">Actualizar</span>
                                        </a>
                                        <br>
										<a type="button" class="btn btn-danger" type="submit">Eliminar</a>
									</td>
								</tr>
								</tbody>
							</table>

                            <div class="text-right">
                                <a href="<?=base_url()?>compras/nuevoProveedor" class="btn btn-primary">
                                    <span class="text">Alta de proveedor</span>
                                </a>
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