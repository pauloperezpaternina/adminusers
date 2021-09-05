@extends('layouts.base')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Usuarios</h2>
            <a class="btn btn-success mb-4" href="{{url('/form')}}">+</a>
            @if(session('usuarioEliminado'))
            <div class="alert alert-success">
                {{session('usuarioEliminado')}}
            </div>
            @endif
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>E-mail</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    
                    <tr>
                        <th>{{$user->nombre}}</th>
                        <th>{{$user->email}}</th>
                        <th>
                            <a href="{{route('editform',$user->id)}}" class="btn btn-primary mb-1">
                                <i class="fas fa-pencil"></i>
                            </a>
                            <form action="{{route('delete', $user->id)}}" method="POST">
                                @CSRF @method('DELETE')
                                 <button type="submit" onclick="return confirm('Seguro?');" class="btn btn-danger">
                                 <i class="fas fa-trash"></i>
                                </button>
                             </form>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$users->links()}}
        </div>
        
    </div>

</div>
