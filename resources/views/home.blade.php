@extends('app')

@section('content')
    <!-- MAIN -->
    <div id="main" class="main">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/images/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/images/img3.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="overlay">
                    <div class="container">
                        <div class="row h-100 align-items-center">
                            <div class="offset-md-6 col-md-6 text-md-right text-center">
                                <h3>TecnoEduca</h3>
                                <p class="d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                    optio suscipit, cum
                                    adipisci doloremque ad voluptatum ducimus error perspiciatis voluptatem.</p>
                                <a href="{{route('registro')}}" class="btn btn-outline-light">Quiero ser alumno</a>
                                <a href="#" class="btn btn-tecnoeduca">Mas informacion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </div>

    <!-- CARDS -->
    <section id="cursos" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4 text-uppercase">
                    <small>Conoce nuestros</small>
                    <h2>Cursos</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="./images/html.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">HTML</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#htmlModal">Ver
                                curso</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="./images/css.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">CSS</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Ver curso</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mx-auto mb-5">
                    <div class="card">
                        <img class="card-img-top" src="./images/javascript.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">JavaScript</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Ver curso</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INFO -->
    <section id="online" class="info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 pl-0 pr-0">
                    <img src="./images/joven.jpg" alt="">
                </div>

                <div class="col-lg-6 col-md-12 pt-4 pb-4">
                    <h2>Clase de prueba online Agosto 2021</h2>
                    <p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus nihil, totam
                        iure commodi quae quibusdam laborum exercitationem amet, facilis dolores voluptate at ducimus
                        possimus necessitatibus adipisci, doloremque mollitia praesentium. Sit aut laborum quas
                        accusantium consequatur facere quasi consequuntur assumenda, amet perspiciatis beatae blanditiis
                        quos, aspernatur necessitatibus molestiae dignissimos officia exercitationem.</p>
                    <a href="#" class="btn btn-outline-light">Registrarme</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FORMULARIO -->
    <section id="maestro" class="pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <small class="text-uppercase">Conviertete en un</small>
                    <h2>MAESTRO</h2>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <abbr data-toggle="tooltip"
                        title="Es nombre de tu nueva familia">TecnoEduca</abbr>
                </div>
            </div>

            <div class="row ">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Apellidos">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-12 form-group">
                                <textarea class="form-control"></textarea>
                                <small>Incluye un titulo en tu descripcion</small>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col form-group">
                                <button class="btn btn-primary btn-block">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    @include('modals')
@endsection
