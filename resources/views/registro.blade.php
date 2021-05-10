@extends('app')

@section('content')
    <div id="signup" class="container mt-5 pt-5 mb-5">
        <div class="row">
            <div class="col-lg-5 col-md-8 col-12 mx-auto">
                <div class="card login pt-5 pb-5">
                    <div class="card-body">
                        <div class="card-title text-center mb-5">
                            <h2>Registrate</h2>
                        </div>
                        <form action="/signup" method="POST">

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="user" placeholder="Usuario" class="form-control" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <input type="text" name="fullname" placeholder="Nombre completo" class="form-control"
                                        required>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" placeholder="Contraseña" class="form-control"
                                    required>
                            </div>

                            <div class="form-group">
                                <input type="password" name="passwords" placeholder="Contraseña" class="form-control"
                                    required>
                            </div>

                            <div class="form-group pt-3">
                                <p style="font-size: 13px">Al hacer clic en Registrarse, acepto que he leído y aceptado los <a
                                        href="#">Términos de uso y la Política de privacidad</a></p>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-block">
                                    Registrarse
                                </button>
                            </div>

                            <div class="form-group pt-4">
                                <p>¿Ya tienes una cuenta?</p>
                                <a href="/login">Iniciar sesión</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
