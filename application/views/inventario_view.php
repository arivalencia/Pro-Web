<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Inventario</title>
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
                            <h5 class="card-title">Inventario</h5>
                            
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
								<tr>
									<th>Estatus</th>
									<th>Codigo inventario</th>
									<th>Stock</th>
									<th>Precio</th>
									<th>Fecha de registro</th>
									<th>Nombre</th>
									<th>Marca</th>
									<th>Modelo</th>
									<th># de serie</th>
									<th>Descripcion</th>
									<th>Categoria</th>
									<th> </th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>OK</td>
									<td>90191</td>
									<td>90</td>
									<td>100</td>
									<td>Octubre, 2020</td>
									<td>Balatas</td>
									<td>Brembo</td>
									<td>H2</td>
									<td>DF34DF456</td>
									<td>Blatas para freno de tambor</td>
									<td>Freno</td>
									<td>
                                        <a href="<?=base_url()?>inventario/nuevoProducto" class="btn btn-primary">
                                            <span class="text">Actualizar</span>
                                        </a>
                                        <br>
										<a type="button" class="btn btn-danger" type="submit">Eliminar</a>
									</td>
								</tr>
								</tbody>
							</table>

                            <div class="text-right">
                                <a href="<?=base_url()?>inventario/nuevoProducto" class="btn btn-primary">
                                    <span class="text">Alta de equipo</span>
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

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    $("#img_acta_nacimiento").change(function () {
        readURL(this);
    });

    $("#").change(function () {
        readURL(this);
    });

    $("#").change(function () {
        readURL(this);
    });

    $("#").change(function () {
        readURL(this);
    });

    $("#").change(function () {
        readURL(this);
    });

    $("#").change(function () {
        readURL(this);
    });

    $("#").change(function () {
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {

            $('#img').attr('src', e.target.result);
        }//end of if
        reader.readAsDataURL(input.files[0]);
    }};
</script>


<!-- 
    <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="main-card mb-3 card">
                    <//?php echo form_open_multipart('inventario/agregar_aspirante',['id'=>'nuevo-miembro']); ?>
                        <div class="card-body">
                            <h5 class="card-title">Datos del aspirante</h5>
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Nombre</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre..." name="nombre" value="<?php echo set_value('nombre'); ?>" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Apellido paterno</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Paterno..." name="a_paterno" value="<?php echo set_value('a_paterno'); ?>" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom03">Apellido materno</label>
                                        <input type="text" class="form-control" id="validationCustom03" placeholder="Materno..." name="a_materno" value="<?php echo set_value('a_materno'); ?>" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleSelect" class="">Carrera elegida</label>
                                        <//?php
                                            $val = array(
                                                'id'=>'id_carrera',
                                                'class' => 'form-control',
                                                'value' => set_value('carrera')
                                              );
                                            echo  form_dropdown( 'carrera' ,  $carreras ,  'Seleccionar miembro...', $val ); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>Adeudas materia en secundaria</label>
                                        <fieldset>
                                            <label>
                                                <input type="radio" name="adeudo" value="1"> Si
                                            </label>
                                            <label>
                                                <input type="radio" name="adeudo" value="0" checked> No
                                            </label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom03">¿Cuántas?</label>
                                        <input type="text" class="form-control" id="validationCustom03" placeholder="Cuantas..." name="num_adeudo" value="<?php echo set_value('num_adeudo'); ?>" required>
                                    </div>
                                </div>
                            </form>

                            <div class="divider"></div>
                            <legend class="col-form-label">Aspectos de salud</legend>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label>¿Padeces de alguna enfermedad?</label>
                                    <fieldset>
                                        <label>
                                            <input type="radio" name="enfermedad" value="1"> Si
                                        </label>
                                        <label>
                                            <input type="radio" name="enfermedad" value="0" checked> No
                                        </label>
                                    </fieldset>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <label for="exampleText" class="">Tipo de enfermedad</label>
                                                <input type="text" class="form-control" id="" placeholder="Enfermedad..." name="tipo_enfermedad" value="<?php echo set_value('tipo_enfermedad'); ?>" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <label for="exampleText" class="">Tratamiento que llevas</label>
                                                <textarea name="text" id="exampleText" class="form-control" name="tratamiento" placeholder="Tratamiento..."><?php echo set_value('tratamiento'); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>¿Tienes alergias?</label>
                                    <fieldset>
                                        <label>
                                            <input type="radio" name="alergias" value="1"> Si
                                        </label>
                                        <label>
                                            <input type="radio" name="alergias" value="0" checked> No
                                        </label>
                                    </fieldset>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <div class="position-relative form-group">
                                                <label for="exampleText" class="">Tipo de alergia</label>
                                                <input type="text" class="form-control" id="tipo_alergia" placeholder="Alergia..." name="tipo_alergia" value="<?php echo set_value('tipo_alergia'); ?>" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="divider"></div>
                            <legend class="col-form-label ">Aspectos emocionales</legend>
                            <div class="form-row">
                                <div class="col-md-2 mb-3">
                                    <label for="">¿Sufres ansiedad?</label><br>
                                    <fieldset>
                                        <label>
                                            <input type="radio" name="ansiedad" value="1"> Si
                                        </label>
                                        <label>
                                            <input type="radio" name="ansiedad" value="0" checked> No
                                        </label>
                                    </fieldset>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="">¿Sufres estrés?</label> <br>
                                    <fieldset>
                                        <label>
                                            <input type="radio" name="estres" value="1"> Si
                                        </label>
                                        <label>
                                            <input type="radio" name="estres" value="0" checked> No
                                        </label>
                                    </fieldset>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label >¿Sufres depresión?</label> <br>
                                    <fieldset>
                                        <label>
                                            <input type="radio" name="depresion" value="1"> Si
                                        </label>
                                        <label>
                                            <input type="radio" name="depresion" value="0" checked> No
                                        </label>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">¿Te sientes rechazado por tu familia o tus amigos?</label> <br>
                                    <fieldset>
                                        <label>
                                            <input type="radio" name="rechazo" value="1"> Si
                                        </label>
                                        <label>
                                            <input type="radio" name="rechazo" value="0" checked> No
                                        </label>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                <label for="">¿Te adaptas fácilmente a cambios?</label> <br>
                                <fieldset>
                                        <label>
                                            <input type="radio" name="adaptarse_a_cambios" value="1" checked> Si
                                        </label>
                                        <label>
                                            <input type="radio" name="adaptarse_a_cambios" value="0"> No
                                        </label>
                                    </fieldset>
                                </div>
                                <div class="col-md-8 ">
                                    <div class="position-relative form-group">
                                        <label for="exampleText" class="">Alguna situación emocional que no haya sido considerada anteriormente</label>
                                        <input type="text" class="form-control" id="" placeholder="Situación..." name="extra" value="<//?php echo set_value('extra'); ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="divider"></div>
                            <legend class="col-form-label">Cargar archivos</legend>
                            <div class="form-row">
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-main text-bold">Foto de acta de nacimiento: </label>
                                        <input type="file" class="form-control-file" name="img[]" id="img_acta_nacimiento" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-main text-bold">Foto de CURP actualizada: </label>
                                        <input type="file" class="form-control-file" name="img[]" id="img_curp" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-main text-bold">Foto de comprobante de domicilio: </label>
                                        <input type="file" class="form-control-file" name="img[]" id="img_comprobante_domicilio" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-main text-bold">Foto de comprobante de estudios: </label>
                                        <input type="file" class="form-control-file" name="img[]" id="img_comprobante_estudios" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-main text-bold">Foto del aspirante: </label>
                                        <input type="file" class="form-control-file" name="img[]" id="img_aspirante" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-main text-bold">Foto de la ficha de admición: </label>
                                        <input type="file" class="form-control-file" name="img[]" id="img_ficha_admicion" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label text-main text-bold">Foto del formato de inscripción: </label>
                                        <input type="file" class="form-control-file" name="img[]" id="img_formato_inscripcion" required>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <a type="button" href="javascript:history.back()" class="btn btn-danger" type="submit">Cancelar</a>
                                <button class="btn btn-primary" type="submit" id="button-upload">Guardar</button>
                            </div>
                        </div>
                    <//?php echo form_close(); ?>
                    </div>       
                </div>
            </div> 
-->