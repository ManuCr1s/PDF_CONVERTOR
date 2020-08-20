<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF_CONVERTOR</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="container-fluid bg-light">
    <div class="row justify-content-around">
            <div  id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                            <div class="col-7 align-self-center shadow vh-100 d-inline-flex bg-white border border-white rounded-lg mt-2">
                                                    <div class="partes">
                                                            <div class="cabecera">
                                                                <img src="img/logo.png" alt="">
                                                            </div>
                                                            <p class="parrafo_0">
                                                                CONSTANCIA DE ALTA
                                                            </p>
                                                            <div class="cuerpo">
                                                                <p class="parrafo_1">
                                                                    Por  la  presente  se deja  constancia  que, ,
                                                                    <br>identificado con DNI: , realizo aislamiento social por 14 días, luego de haber 
                                                                    <br>pasado perfil COVID -19 en nuestra institución, obteniendo resultado positivo 
                                                                    <br>en la prueba serológica,  este periodo está comprendido entre el al 
                                                                    <br4>, quien ha evolucionado favorablemente.
                                                                    <br>Se expide la presente a solicitud del interesado para los fines que crea 
                                                                    <br>por conveniente.
                                                                </p> 
                                                            </div>
                                                            <div class="pie">
                                                                <img src="img/firma_llerena.png" alt="">
                                                            </div>
                                                            <p class="parrafo_2">CMP: 49335<br>
                                                            Director de vigilancia Médica Ocupacional &Telegestión<br>
                                                            S.G. Natclar SAC</p>
                                                    </div>
                                            </div>  
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                        <h1>Quenuales</h1>
                    </div>
                               
            </div>            


            <div class="col-3">
                <div class="row bg-dark h-25 m-3 rounded p-3">
                    <h5 class="text-white text-center">Modelo</h5>
                    <div class="col-12">
                        <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Normal</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Quenuales</a>
                        </div>
                    </div>                    
                 </div>
                <form class="row bg-warning h-25 m-3 rounded p-3" method="POST" action="procesa.php" enctype="multipart/form-data">
                        <h5 class="text-white text-center">Archivo</h5>
                        <div class="custom-file">
                            <input type="file" name="archivo" class="custom-file-input" />
                            <label type="file" class="custom-file-label">Seleccionar Archivo</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                </form>
                <div class="row bg-danger h-25 m-3 rounded p-3">
                    <h5 class="text-white text-center">Exportar</h5>
                    <div class="form-group d-block">
                        <a href="reportes/impresion.php" class=" btn btn-success">Consolidar</a>
                        <a href="split/split.php" class="  btn btn-success">Expostarr</a>
                    </div>
                </div>
            </div>
    </div>
<script type="text/javascript" src="http://localhost/PDF_CONVERTOR/js/jquery.js"></script>
<script type="text/javascript" src="http://localhost/PDF_CONVERTOR/js/bootstrap.js"></script>
</body>
</html>