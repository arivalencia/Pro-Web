<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Capturar calificaciónes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
	<meta name="msapplication-tap-highlight" content="no">
	
	<link href="./main.css" rel="stylesheet">
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
                            <div class="table-responsive">
                                <h3 >Captura de calificaciónes</h3>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <label><b>Profesor: </b></label>
                                        <label>Jose Javier Carmona Lopez</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Materia: </b></label>
                                        <label>Programacion Web</label>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <label><b>No. de empleado: </b></label>
                                        <label>4763</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Estatus: </b></label>
                                        <select name="select" id="estatus" class="form-control">
                                            <option>Pendiente</option>
                                            <option>Capturado</option>
                                        </select>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Matricula</th>
                                            <th>Alúmno</th>
                                            <th>Tipo examen</th>
                                            <th>1°</th>
                                            <th>2°</th>
                                            <th>3°</th>
                                            <th>4°</th>
                                            <th>Calf. final</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1811113747</th>
                                            <td>Eduardo Gonzales Valencia</td>
                                            <td>0</td>
                                            <td>93</td>
                                            <td>90</td>
                                            <td></td>
                                            <td></td>
                                            <td>47</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1811113747</th>
                                            <td>Pepe Pica Papas</td>
                                            <td>0</td>
                                            <td>93</td>
                                            <td>90</td>
                                            <td></td>
                                            <td></td>
                                            <td>47</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1811113747</th>
                                            <td>Daniel Gonzales Valencia</td>
                                            <td>0</td>
                                            <td>93</td>
                                            <td>90</td>
                                            <td></td>
                                            <td></td>
                                            <td>47</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1811113747</th>
                                            <td>El amor de mi vida 3000</td>
                                            <td>0</td>
                                            <td>93</td>
                                            <td>90</td>
                                            <td></td>
                                            <td></td>
                                            <td>47</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1811113747</th>
                                            <td>Luis Alberto Titla</td>
                                            <td>0</td>
                                            <td>93</td>
                                            <td>90</td>
                                            <td></td>
                                            <td></td>
                                            <td>47</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1811113747</th>
                                            <td>Cesar Bermudes Rivas</td>
                                            <td>0</td>
                                            <td>93</td>
                                            <td>90</td>
                                            <td></td>
                                            <td></td>
                                            <td>47</td>
                                        </tr>
                                    </tbody>
                                </table>
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