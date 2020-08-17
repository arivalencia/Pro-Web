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
                            <div class="bg-white table-responsive rounded shadow-sm pt-3 pb-3 mb-30">
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
                                        <tr>
                                            <th>Materia</th>
                                            <th>Grupo</th>
                                            <th>Profesor</th>
                                            <th>Estatus</th>
                                            <th>Parciales</th>
                                            <th>Calf. final</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>31312</td>
                                            <td>Jose Javier Carmona Lopez</td>
                                            <td>Capturado</td>
                                            <td>
                                                <div class="form-row">
                                                    <div class="col-md-3"><label >1°</label></div>
                                                    <div class="col-md-3"><label >2°</label></div>
                                                    <div class="col-md-3"><label >3°</label></div>
                                                    <div class="col-md-3"><label >4°</label></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3"><p >78</p></div>
                                                    <div class="col-md-3"><p>98</p></div>
                                                    <div class="col-md-3"><p>87</p></div>
                                                    <div class="col-md-3"><p>78</p></div>
                                                </div>
                                            </td>
                                            <td >90</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>31312</td>
                                            <td>Esperanza Quiroz Muñoz</td>
                                            <td>Capturado</td>
                                            <td>
                                                <div class="form-row">
                                                    <div class="col-md-3"><label >1°</label></div>
                                                    <div class="col-md-3"><label >2°</label></div>
                                                    <div class="col-md-3"><label >3°</label></div>
                                                    <div class="col-md-3"><label >4°</label></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3"><p >78</p></div>
                                                    <div class="col-md-3"><p>98</p></div>
                                                    <div class="col-md-3"><p>87</p></div>
                                                    <div class="col-md-3"><p>78</p></div>
                                                </div>
                                            </td>
                                            <td>89</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>31312</td>
                                            <td>Veronica Granados Meza</td>
                                            <td>Capturado</td>
                                            <td>
                                                <div class="form-row">
                                                    <div class="col-md-3"><label >1°</label></div>
                                                    <div class="col-md-3"><label >2°</label></div>
                                                    <div class="col-md-3"><label >3°</label></div>
                                                    <div class="col-md-3"><label >4°</label></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3"><p >78</p></div>
                                                    <div class="col-md-3"><p>98</p></div>
                                                    <div class="col-md-3"><p>87</p></div>
                                                    <div class="col-md-3"><p>78</p></div>
                                                </div>
                                            </td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>31312</td>
                                            <td>Irán Benavides Moran</td>
                                            <td>Capturado</td>
                                            <td>
                                                <div class="form-row">
                                                    <div class="col-md-3"><label >1°</label></div>
                                                    <div class="col-md-3"><label >2°</label></div>
                                                    <div class="col-md-3"><label >3°</label></div>
                                                    <div class="col-md-3"><label >4°</label></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3"><p >78</p></div>
                                                    <div class="col-md-3"><p>98</p></div>
                                                    <div class="col-md-3"><p>87</p></div>
                                                    <div class="col-md-3"><p>78</p></div>
                                                </div>
                                            </td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>31312</td>
                                            <td>Ivette Hernandez Davila</td>
                                            <td>Capturado</td>
                                            <td>
                                                <div class="form-row">
                                                    <div class="col-md-3"><label >1°</label></div>
                                                    <div class="col-md-3"><label >2°</label></div>
                                                    <div class="col-md-3"><label >3°</label></div>
                                                    <div class="col-md-3"><label >4°</label></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3"><p >78</p></div>
                                                    <div class="col-md-3"><p>98</p></div>
                                                    <div class="col-md-3"><p>87</p></div>
                                                    <div class="col-md-3"><p>78</p></div>
                                                </div>
                                            </td>
                                            <td>90</td>
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



