@extends('layouts.app')
@push('css')
    <link href="{{ asset('css/list.css') }}" rel="stylesheet"/>
@endpush
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>Lista de usuários</h1>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Deletar</th>
                                </tr>
                             </thead>
                            <tbody>
                            @foreach( $usuarios as $u)
                            <tr>
                                    <th scope="row">{{ $u->id }}</th>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>
                                        <a href="{{ $u->id }}/edit" class="btn btn-info">Editar</a>
                                    </td>
                                    <td>
                                        <form action="delete/{{ $u->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">Deletar</button>
                                        </form>
                                    </td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                        <a class="btn btn-primary" href="{{ url('home') }}" role="button">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
