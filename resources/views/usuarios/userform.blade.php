@extends('layouts.base')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
            <!-- Mensaje Flash -->
            @if(session('usuarioGuardado'))
            <div class="alert alert-success">
                {{session('usuarioGuardado')}}
            </div>
            @endif
            <!-- Validando errorres de formulario -->

            @if($errors->any())

            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach

                </ul>
            </div>
            @endif
            <a class="btn btn-success mb-4" href="{{url('/')}}"><-</a>
            <div class="card">
                <form action="{{route('save')}}" method="POST">
                    @CSRF
                    <div class="card-header text-center">Agregar Usuario</div>
                        <div class="card-body">
                            <div class="row form-group">
                                <label for="" class="col-2">Nombre</label>
                                <input type="text" name="nombre" class="form-control col-md-9">

                            </div>
                           <div class="row form-group">
                                <label for="" class="col-2">E-mail</label>
                                <input type="text" name="email" class="form-control col-md-9">
                                
                            </div>
                            <div class="row form-group mt-4">
                                <button type="submit" class="btn btn-success col-md-9 offset-2">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>