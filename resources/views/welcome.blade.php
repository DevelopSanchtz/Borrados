<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

        <script src="https://kit.fontawesome.com/0dd7a6f868.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="/assets/css/estilos.css">
    <title>Borrados</title>
</head>

<body>

    <!-- seccion navbar y carusel -->
    <header id="inicio">
        <!-- navbar  -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
            <a class="navbar-brand" href="#">
                <img src=" /assets/images/logo.png" width="200" height="30" alt="" loading="lazy">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#inicio">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class=" btn btn-outline-danger" href="#solicitar">Solicitar amigurumi</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- carusel -->
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active" data-interval="10000">
                    <img src="/assets/images/portada1.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item" data-interval="2000">
                    <img src="/assets/images/portada2.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item" data-interval="2000">
                    <img src="/assets/images/portada3.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item" data-interval="2000">
                    <img src="/assets/images/portada4.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item" data-interval="2000">
                    <img src="/assets/images/portada5.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>


    <!-- seccion categorias -->
    <section>
        <div class="mt-5 container">
            <h4>Categorías</h4>
            <div class="linea-roja">
            </div>

            <div class="card-deck mt-4">
                <div class="card mb-3 overflow-hidden shadow bg-white rounded" style="min-width: 12rem">
                    <div class="bg-holder bg-card"></div>
                    <div class="card-body position-relative">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <p>Amigurumis</p>
                                    <h6>
                                        Adquiere Amigurumis personalizados
                                    </h6>
                                    <a href="#solicitar" class="btn mt-2 btn-outline-danger">Ver más</a>
                                </div>
                                <div class="col-6">
                                    <img width="150" height="150" src="/assets/images/OsoColor.jpg">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mb-3 overflow-hidden shadow bg-white rounded" style="min-width: 12rem">
                    <div class="bg-holder bg-card"></div>
                    <div class="card-body position-relative">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <p>Prendas</p>
                                    <h6>
                                        Encuentra prendas tejidas a mano
                                    </h6>
                                    <a href="#solicitar" class="btn mt-2 btn-outline-danger">Ver más</a>
                                </div>
                                <div class="col-6">
                                    <img width="150" height="150" src="/assets/images/GorroColor.jpg">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 overflow-hidden shadow bg-white rounded" style="min-width: 12rem">
                    <div class="bg-holder bg-card"></div>
                    <div class="card-body position-relative">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <p>Más</p>
                                    <h6>
                                        Disfruta de la variedad de productos
                                    </h6>
                                    <a href="#solicitar" class="btn mt-2 btn-outline-danger">Ver más</a>
                                </div>
                                <div class="col-6">
                                    <img width="150" height="150" src="/assets/images/BufandaColor.jpg">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- seccion productos destacados -->
    <section id="productos">
        <div class="mt-5 container">
            <h4>Productos destacados</h4>
            <div class="linea-roja">
            </div>
            <div class="mt-5 row">
                <div class="col-6 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2">
                    <img class="imgProductos" src="/assets/images2/imge1.jpg" alt="producto">
                </div>
                <div class="col-6 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2">
                    <img class="imgProductos" src="/assets/images2/imge2.jpg" alt="producto">
                </div>
                <div class="col-6 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2">
                    <img class="imgProductos" src="/assets/images2/img3.jpg" alt="producto">
                </div>
                <div class="col-6 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2">
                    <img class="imgProductos" src="/assets/images2/img4.jpg" alt="producto">
                </div>
            </div>
        </div>>
    </section>


    <!-- seccion productos -->
    <section>
        <div class="mt-5 container">
            <h4>Productos</h4>
            <div class="linea-roja">
            </div>

            <div class="mt-5 row">
                <div class="col-6 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-4 mt-2">
                    <img class="imgProductos" src="/assets/images2/img5.jpg" alt="producto">
                </div>
                <div class="col-6 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-4 mt-2">
                    <img class="imgProductos" src="/assets/images2/img6.jpg" alt="producto">
                </div>
                <div class="col-6 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-4 mt-2">
                    <img class="imgProductos" src="/assets/images2/img7.jpg" alt="producto">
                </div>
                <div class="col-6 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-4 mt-2">
                    <img class="imgProductos" src="/assets/images2/img8.jpg" alt="producto">
                </div>


                <div class="col-6 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-4 mt-2">
                    <img class="imgProductos" src="/assets/images2/img9.jpg" alt="producto">
                </div>
                <div class="col-6 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-4 mt-2">
                    <img class="imgProductos" src="/assets/images2/img10.jpg" alt="producto">
                </div>
                <div class="col-6 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-4 mt-2">
                    <img class="imgProductos" src="/assets/images2/img11.jpg" alt="producto">
                </div>
                <div class="col-6 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-4 mt-2">
                    <img class="imgProductos" src="/assets/images2/img12.jpg" alt="producto">
                </div>
            </div>
        </div>
    </section>


    <div class="mt-5 d-none d-lg-block d-md-block d-sm-none d-xs-none  solicitarAmigurumi">
    </div>


    <!-- seccion personaliza tu amigurumi -->
    <section>
        <div class="mt-5 container">
            <h4>Personaliza tu Amigurumi</h4>
            <div class="linea-roja"> </div>
            <div class="mt-5 row justify-content-center">
                <div class="col-6 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 mt-2">
                    <img class="personalizar" src="/assets/images2/img19.jpg" alt="producto">
                </div>
                <div class="col-6 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 mt-2">
                    <img class="personalizar" src="/assets/images2/img22.jpg" alt="producto">
                </div>
            </div>
        </div>
    </section>


    <!-- seccion amigurumis navideños -->
    <div class="mt-5  d-none d-lg-block d-md-block d-sm-none d-xs-none">
        <div class="amigurumiNavidad">
        </div>
    </div>

    <!-- seccion solicitar producto -->
    <section id="solicitar">
        <div class="container mt-5">
            <h4>Solicitar producto</h4>
            <div class="linea-roja"> </div>
            <p>Para solicitar cualquiera de nuestros <b> productos</b> ingresa los siguientes datos</p>

            <form action="{{route('solicitarProducto')}}" method="POST" class=" mt-4">
                @csrf
    <h6>Producto a solicitar:</h6>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="producto_solicitar" id="exampleRadios1"
            value="Amigurumis" checked>
        <label class="form-check-label" for="exampleRadios1">
            Amigurumis
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="producto_solicitar" id="exampleRadios2"
            value="Prendas">
        <label class="form-check-label" for="exampleRadios2">
            Prendas
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="producto_solicitar" id="exampleRadios3"
            value="Otros">
        <label class="form-check-label" for="exampleRadios3">
            Otros
        </label>
    </div>


    <div class="form-group mt-3">
        <label for="nombre">Nombre:</label>
        <input placeholder="Nombre" name="nombre" type="text" class="form-control" id="nombre"
            aria-describedby="emailHelp">
    </div>
    <div class="form-row">
        <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <label for="Telefono">Teléfono:</label>
            <input placeholder="Teléfono" name="telefono" type="text" class="form-control" id="Telefono">
        </div>

        <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <label for="Cantidad">Cantidad:</label>
            <input placeholder="1" type="number" name="cantidad" class="form-control" id="Cantidad">
        </div>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Especificar producto:</label>
        <textarea placeholder="Especifique el producto que desea solicitar" name="especificar_producto" class="form-control"
            id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="container">
        <div class="row justify-content-end">
            <button class="btn btn-outline-danger">Solicitar producto</button>
        </div>
    </div>
</form>
        </div>
    </section>


    <!-- seccion categorias amigurumis prendas mas -->
    <section>
        <div class="container mt-5">
            <div class="row mt-3">
                <div class="col">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#tab1" class="nav-link active" data-toggle="tab">Amigurumis</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab2" class="nav-link" data-toggle="tab">Prendas</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab3" class="nav-link" data-toggle="tab">Más</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1" role="tabpanel">
                            <h4 class="mt-3">Amigurumis</h4>
                            <div class="mt-5 row justify-content-center">
                                <div class="col-4 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-4 mt-2">
                                    <img class="ImgSeccionMas" src="/assets/images2/img17.jpg" alt="producto">
                                </div>
                                <div class="col-4 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-4 mt-2">
                                    <img class="ImgSeccionMas" src="/assets/images2/img18.jpg" alt="producto">
                                </div>
                                <div class="col-4 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-4 mt-2">
                                    <img class="ImgSeccionMas" src="/assets/images2/img20.jpg" alt="producto">
                                </div>
                                <div class="col-4 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-4 mt-2">
                                    <img class="ImgSeccionMas" src="/assets/images2/img21.jpg" alt="producto">
                                </div>
                                <div class="col-4 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-4 mt-2">
                                    <img class="ImgSeccionMas" src="/assets/images2/img24.jpg" alt="producto">
                                </div>
                                <div class="col-4 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-4 mt-2">
                                    <img class="ImgSeccionMas" src="/assets/images/img1.jpg" alt="producto">
                                </div>

                            </div>


                        </div>

                        <div class="tab-pane" id="tab2" role="tabpanel">
                            <h4 class="mt-3">Prendas</h4>
                            <div class="mt-5 row justify-content-center">
                                <div class="col-4 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-4 mt-2">
                                    <img class="ImgSeccionMas" src="/assets/images2/img13.jpg" alt="producto">
                                </div>
                                <div class="col-4 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-4 mt-2">
                                    <img class="ImgSeccionMas" src="/assets/images2/img14.jpg" alt="producto">
                                </div>
                                <div class="col-4 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-4 mt-2">
                                    <img class="ImgSeccionMas" src="/assets/images2/img15.jpg" alt="producto">
                                </div>
                                <div class="col-4 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-4 mt-2">
                                    <img class="ImgSeccionMas" src="/assets/images2/img16.jpg" alt="producto">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab3" role="tabpanel">
                            <h4 class="mt-3">Más</h4>
                            <div class="mt-5 row justify-content-center">
                                <div class="col-4 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-4 mt-2">
                                    <img class="ImgSeccionMas" src="/assets/images2/img23.jpg" alt="producto">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--sección sobre nosotros-->
    <section id="sobre">
        <div class="mt-5 container">
            <h4>Sobre nosotros</h4>
            <div class="linea-roja">
            </div>
            <div class="mt-3 row justify-content-center">
                <div class="col-12 col-lg-6 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2">
                    <h4>Misión</h4>
                    <p> En Borrado’s Crochet somos una empresa con mucho potencial para cumplir con toda demanda que se
                        le ofrezca al público satisfaciendo cualquier expectativa que este pueda tener, ofreciendo
                        trabajos de alta calidad con los toques muy
                        particulares que solo nuestra empresa sabe ofrecer.</p>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2">
                    <h4>Visión</h4>
                    <p>Ser la empresa líder en el mercado de las artesanías de esta índole, crecer y mantenernos
                        actualizados con respecto a nuestros diseños y conceptos de fabricación, expandirnos a nuevas
                        fronteras para alzar nuestro nombre cada vez más
                        y estar presente con todos nuestros clientes.
                    </p>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2">
                    <h4> Valores </h4>
                    <p>
                    <h6>Responsabilidad</h6>
                    <h6>Respeto</h6>
                    <h6>Ecología</h6>
                    <h6>Tolerancia</h6>
                    </p>
                </div>

            </div>
        </div>>
    </section>
    <!--Fin sección sobre nosotros-->


    <!--sección preguntas frecuentes-->
    <section id="preguntas">
        <div class="faqs">
            <div class="container mb-3">
                <h4>Preguntas frecuentes
                </h4>
                <div class="linea-roja"> </div>
                <div class="row">

                    <div class="container py-3">
                        <div class="row">
                            <div class="col-10 mx-auto">
                                <div class="accordion" id="faqExample">
                                    <div class="card">
                                        <div class="card-header p-2" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    ¿Pueden hacer amigurimis personalizados?
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#faqExample">
                                            <div class="card-body">
                                                Por supuesto, solo necesitamos de sus especificaciones.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header p-2" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    ¿Pueden hacer amigurumis con solo mandarles una imagen? </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#faqExample">
                                            <div class="card-body">
                                                Por supuesto, solo con la imagen y el tamaño en que lo deseas.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header p-2" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    ¿Qué se necesita para pedir un amigurumi a mi asemejanza o a la de
                                                    alguna otra
                                                    persona? </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#faqExample">
                                            <div class="card-body">
                                                Solo se necesita ua foto de cuerpo completo de la persona, acompañada de
                                                especificaciones como tamaño y detalles.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header p-2" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button"
                                                    data-toggle="collapse" data-target="#cuatro" aria-expanded="false"
                                                    aria-controls="cuatro">
                                                    ¿De qué tamaños manejan los atrapasueños? </button>
                                            </h5>
                                        </div>
                                        <div id="cuatro" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#faqExample">
                                            <div class="card-body">
                                                Manejamos gran variedad de tamaños, pero lo podemos resumir en chico,
                                                mediano,
                                                grande y extragrande.

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header p-2" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button"
                                                    data-toggle="collapse" data-target="#cinco" aria-expanded="false"
                                                    aria-controls="cuatro">
                                                    ¿Qué tipo de hilo utilizan para las prendas? </button>
                                            </h5>
                                        </div>
                                        <div id="cinco" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#faqExample">
                                            <div class="card-body">
                                                Utilizamos distintos, para su comodidad nos puede decir cual prefiere o
                                                describir
                                                cual les gustaría.
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--container-->
                </div>

            </div>

        </div>
    </section>


    <!-- sección contacto -->
    <section class="contactar mt-5" id="contacto">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Contacto</h4>
                    <div class="linea-roja"> </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4"></div>

                <div class="col-lg-4">
                    <form action="{{route('correo')}}" method="POST" class="mt-3">
                        @csrf
                        <div class="form-group">
                            <input placeholder="Nombre" name="nombre" type="text" class="form-control" id="Nombre"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">

                            <input placeholder="Correo" name="correo" type="email" class="form-control" id="Correo"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">

                            <textarea placeholder="Mensaje" name="mensaje" class="form-control" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>

                        <input type="submit" class="btn btn-block btn-outline-danger"></input>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>



    <!-- sección contacto -->
    <section class="mapa mt-5" id="contacto">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="card fondo-cont" style="width: 250px;">
                                <div class="card-body">
                                    <h5 class="card-title"><span class="badge badge-mapa"></span>Visítanos en nuestra
                                    </h5>
                                    <h5 class="card-title"> <span class="badge badge-mapa"> <i
                                                class="fas fa-map-marker-alt"></i>
                                        </span>tienda física</h5>
                                    <p class="card-text">212 Av. Juárez. Ciudad Mante Tamaulipas. </p>

                                  

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-4 d-none d-lg-block d-md-block d-sm-none d-xs-none">
                    <div class="container">
                        <div class="row justify-content-center">
                            <img width="300" height="200" class="mt-4" src="/assets/images/mapa2.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



     <!-- footer -->
     <footer class="bgDark">
        <div class="container">
            <a href="#"><img src="assets/images/logo.png" width="300" height="70" alt="logo"> </a>
            <ul class="list-inline">
                <li class="list-inline-item footer-menu"><a href="#">Inicio</a></li>
                <li class="list-inline-item footer-menu"><a href="#productos">Productos</a></li>
                <li class="list-inline-item foter-menu"><a href="#contacto">Contacto</a></li>
                <li class="list-inline-item footer-menu"><a href="#sobre">Sobre nosotros</a></li>
                <li class="list-inline-item footer-menu"><a href="#solicitar">Solicitar Amigurumis</a></li>
                <li class="list-inline-item footer-menu"><a href="#preguntas">Preguntas frecuentes</a></li>
            </ul>
            <ul class="list-inline">

                <li class="list-inline-item"><a class="redes-facebook"
                        href="https://www.facebook.com/Borrados-Crochet-110969077095726" target="_blank"><i
                            class="fab fa-facebook"></i></a>
                </li>

            </ul>
            <small>©2020 Borrado´s Crochet <a href="http://emmanueldl.tecdevsmx.com/" class="font-weight-bold"
                    target="_blank" rel="noopener"> by: @Emmanuel @Armando @Idalia @Alma</a></small>
        </div>
    </footer>
 
    <script>
        AOS.init();
    </script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

</body>

</html>