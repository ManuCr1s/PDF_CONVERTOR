<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF_CONVERTOR</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="container-fluid bg-light">
    <div class="row">
            <div class="col-2"></div>
            <div class="col-4 shadow vh-100 bg-white m-3">
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
                                    
            <div class="col-5 m-3">
                <form class="row bg-warning h-25 m-3 rounded p-3" method="POST" action="procesa.php" enctype="multipart/form-data">
                        <h5 class="text-white col-12">Archivo</h5>
                        <div class="custom-file col-10 m-1">
                            <input type="file" name="archivo" class="custom-file-input" />
                            <label type="file" class="custom-file-label">Seleccionar Archivo</label>
                        </div>
                        <div class="form-group col-10 m-1">
                            <button type="submit" class="btn btn-info">Enviar</button>
                        </div>
                </form>
                <div class="row bg-danger h-25 m-3 rounded p-3">
                    <h5 class="text-white col-12">Consolidar Pruebas</h5>
                    <div class="form-group d-flex col-12">
                        <a href="reportes/impresion.php" class="col-4 btn btn-success p-2 m-1">SEROLOGICAS</a>
                        <a href="reportes/impresion2.php" class="col-4 btn btn-secondary p-2 m-1">MOLECULARES</a>
                        <a href="reportes/impresion3.php" class="col-4 btn text-white btn-warning p-2 m-1">QUENUALES</a>
                    </div>
                </div>
                <div class="row bg-dark h-25 m-3 rounded p-3">
                    <h5 class="text-white col-12">Exportar PDFS</h5>
                    <div class="form-group col-12">
                        <a href="split/split.php" class="btn btn-primary">EXPORTAR</a>
                    </div>
                </div>
            </div>
    </div>
<script type="text/javascript" src="http://localhost/PDF_CONVERTOR/js/jquery.js"></script>
<script type="text/javascript" src="http://localhost/PDF_CONVERTOR/js/bootstrap.js"></script>
</body>
</html>