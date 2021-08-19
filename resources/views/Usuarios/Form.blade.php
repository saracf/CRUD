
@extends('layouts.app')
    @push('css')
        <link href="{{asset('css/form.css')}}" rel="stylesheet"/>
    @endpush
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href=" {{ url('Usuario') }}">Voltar</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (Request:: is('*/edit'))
                            <form action="{{ url('usuarios/update')}}/{{ $usuario->id }}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome:</label>
                                <input type="text" name="name" class="form-control" value="{{ $usuario->name }}">
                            </div>

                            <div class="form-group">
                                <label for="exempleInputEmail1">E-mail</label>
                                <input type="email" name="email" class="form-control" value="{{ $usuario->email }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                        @else
                        <h1>Lista de usuários</h1>
                        <form action="{{ url('usuarios/add')}}" method="post">
                        @csrf
                            <div=class"form-grup">
                                <label for="exampleInputEmail1">Nome:</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exempleInputEmail1">E-mail</label>
                                <input type="email" name="email" class="form-control" id="exempleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
