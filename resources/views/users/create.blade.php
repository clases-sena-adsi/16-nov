@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                             <div class="form-group">
                                 <label for="name">Nombres</label>
                                 <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese su nombre" required>
                             </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese su correo" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su correo" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Imagen</label>
                                <input type="file" name="image" id="v" class="form-control" required>
                            </div>
                            <hr>
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
