@extends('layouts.base')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Usuarios</h2>
            <a class="btn btn-success mb-4" href="{{url('/form')}}">+</a>
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    
                    <tr>
                        <th>{{$user->nombre}}</th>
                        <th>{{$user->email}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$users->links()}}
        </div>
        
    </div>

</div>
