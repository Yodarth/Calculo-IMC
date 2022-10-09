<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <title>Índice de masa corporal</title>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="imge/ico" href="../r2d2.ico">
    </head>
    <body>
        <!-- ENCABEZADO -->
        <header class="container-fluid bg-success d-flex justify-content-center">
            <p class="text-light mb-0 p-4 fs-6" > <p>
        </header>

        <nav class="navbar navbar-expand-lg bg-light p-3 sticky-top" id="menu">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://www.unitec.mx/">
                    <span class="fs-5 fw-bold" style="color: #006FBA"> UNITEC </span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#seccion-calculo">
                                Calculadora
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Carrusel -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="img/slide1.jpg" class="d-block w-100" alt="foto">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="img/slide2.jpg" class="d-block w-100" alt="foto">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="img/slide3.jpg" class="d-block w-100" alt="foto">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <!-- Informacion -->
        <section class= "w-50 mx-auto text-center pt-5" id="intro">
            <h1 class="p-3 fs-2 border-top border-3"> Tu cuerpo es templo de la <span class="text-success"> naturaleza </span> y del espíritu divino. Consérvalo <span class="text-success"> sano, respétalo, estúdialo y concédele sus derechos. </span> </h1> 
        </section>

        <!-- Info adicional -->
        <section class="container-fluid">
            <div class="row w-75 mx-auto my-5 servicio-fila">
                <div align="center" class="col-lg-6 col-md-12 col-sm-12  my-5 icono-wrap">
                    <img src="img/nutricion.png" alt="foto" width=180 height=160>
                    <div>
                        <h3 class="fs-5 mt-4 px-4 pb-1">Alimentacion balanceada</h3>
                        <p align="justify" class="px-4">Debe incluir todos los grupos de alimentos de acuerdo a los requerimientos esenciales de cada persona. Una excelente herramienta es el plato del bien comer, que te ayudará a conocer los diferentes grupos de alimentos.</p>
                    </div>
                </div>
                <div align="center" class="col-lg-6 col-md-12 col-sm-12  my-5 icono-wrap">
                    <img src="img/deporte.png" alt="foto" width="180" height=160>
                    <div>
                        <h3 align="center" class="fs-5 mt-4 px-4 pb-1">Actividad fisica</h3>
                        <p align="justify" class="px-4">Cuando estás relajado, haces deporte y comes sano; tu cuerpo simplemente se siente bien consigo mismo. Por ejemplo, cuando haces ejercicio diariamente por unos 30 minutos, tu cuerpo produce endorfina, esta hormona hace que entres en un estado de felicidad, otra hormona que produce el hacer ejercicio es la serotonina, hormona que es capaz de aliviar el estado de ánimo. </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Plato del buen comer -->
        <section>
            <div id="local">
                <div class="wrapper">
                    <h2 align="center" style="color: #215732">El plato del buen comer</h2>
                </div>
                <div>
                    <div class="footer"></div>
                </div>
            </div>
        </section>
        <section>
            <div id="local">
                <div class="plato" align="center">
                    <img class="img-fluid" src="img/plato.png" alt="foto">
                </div>
            </div>
        </section>

        <!-- imc -->
        <section id="seccion-calculo">
            <div id="bg-calculo" >
                <br>
                <br>
                <div class="wrapper">
                    <h2 align="center" style="color: #215732" class="fs-8  py-8 px-4 pb-6">Calcula tu Índice de Masa Corporal</h2>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#215733" fill-opacity="1" d="M0,224L60,224C120,224,240,224,360,202.7C480,181,600,139,720,149.3C840,160,960,224,1080,234.7C1200,245,1320,203,1380,181.3L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
                <div class="container" id="contenedor-imc">
                    <div class="text-center mb-4">
                        <div><img src="img/hoja.png" alt="foto" class="img-fluid" width="180" height=160></div>
                    </div>
                    <form action="index.php#seccion-calculo" method="post">
                        <div class="mb-3">
                            <label for="Peso" class="form-label">Introduce tu peso (Kg)</label>
                            <input type="text" class="form-control" name="peso" placeholder="ej.: 50">
                        </div>
                        <div class="mb-3">
                            <label for="Estatura" class="form-label">Introduce tu estatura (m)</label>
                            <input type="text" class="form-control" name="estatura" placeholder="ej.: 1.65">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success btn-block w-100 fs-5">Calcular</button>
                        </div>
                        
                    </form>
                    <?php
                        if($_POST){
                            $peso = $_POST["peso"];
                            $altura = $_POST["estatura"];
                            $imc = $peso/pow($altura,2);
                            if($imc < 18.5){
                                echo "<input type='text' class= 'form-control col-6 mx-auto' style='color: #215732' value=".number_format($imc,1). ">";
                                echo "<div align='center'><br><img src='img/imc-bajo.png' align='center' width=100 height=300 alt='foto'></div>";
                                echo "<br><h5 class= 'text-center' style='color: #A4BEDC'>IMC Bajo</h5>";
                            }
                            else if($imc >= 18.5 and $imc < 25){
                                echo "<input type='text' class= 'form-control col-6 mx-auto' style='color: #215732' value=".number_format($imc,1). ">";
                                echo "<div align='center'><br><img src='img/imc-normal.png' align='center' width=110 height=300 alt='foto'></div>";
                                echo "<br><h5 class= 'text-center' style='color: #98C1A1'>IMC Normal</h5> ";
                            }
                            else if($imc >= 25 and $imc < 30){
                                echo "<input type='text' class= 'form-control col-6 mx-auto' style='color: #215732' value=".number_format($imc,1). ">";
                                echo "<div align='center'><br><img src='img/imc-sobrepeso.png' align='center' width=120 height=300 alt='foto'></div>";
                                echo "<br><h5 class= 'text-center' style='color: #F7B104'>IMC Sobrepeso</h5> ";
                            }
                            else if($imc >= 30 and $imc < 35){
                                echo "<input type='text' class= 'form-control col-6 mx-auto' style='color: #215732' value=".number_format($imc,1). ">";
                                echo "<div align='center'><br><img src='img/imc-obesidad.png' align='center' width=130 height=300 alt='foto'></div>";
                                echo "<br><h5 class= 'text-center' style='color: #E0A556'>IMC Obesidad grado l</h5> ";
                            }
                            else if($imc >= 35 and $imc < 40){
                                echo "<input type='text' class= 'form-control col-6 mx-auto' style='color: #215732' value=".number_format($imc,1). ">";
                                echo "<div align='center'><br><img src='img/imc-morbido.png' align='center' width=160 height=300 alt='foto'></div>";
                                echo "<br><h5 class= 'text-center' style='color: #C74E47'>IMC Obesidad grado ll</h5> ";
                            }
                            else if($imc > 40){
                                echo "<input type='text' class= 'form-control col-6 mx-auto' style='color: #215732' value=".number_format($imc,1). ">";
                                echo "<div align='center'><br><img src='img/imc-morbido.png' align='center' width=160 height=300 alt='foto'></div>";
                                echo "<br><h5 class= 'text-center' style='color: #C74E47'>IMC Obesidad grado lll</h5> ";
                            }
                            
                        }
                    ?>
                </div>
            </div>
            <section id="morecolor" style="color: #DEE6E2">
                <br><p>Información recuperada de: <br>Bienestar Nutrimental. (s. f.). Nutrioli. Recuperado 9 <br>de octubre de 2022, de https://www.nutrioli.com<br>/bienestar-nutrimental/<br><br>VIVIR SALUDABLE PARA MANTENER LA MENTE Y EL<br> CUERPO SANO. (s. f.). <br>Residential Plaza Blue Lagoon. Recuperado 9 de octubre<br> de 2022, de https://residentialplaza.com/vivir-saludable<br>-para-mantener-la-mente-y-el-cuerpo-sano/</p>
            </section>
            <section id="seccion-imc" class="border-bottom border-secondary border-2">

            </section>
    </body>
</html>