@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('users.create') }}" class="btn btn-primary mt-3 mb-3">Crear nuevo usuario</a>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>FOTO</th>
                        <th>NOMBRE</th>
                        <th>CORREO</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ url($user->image ? $user->image : 'img/default_profile.png') }}" alt="" width="40px"></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
