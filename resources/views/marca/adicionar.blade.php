@extends('adminlte::page')

@section('title', 'Adicionar Nova Marca')

@section('content_header')
    <div class="row">
        <div class="col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Gerenciamento</li>
                <li class="breadcrumb-item"><a href="/marca/">Marca</a></li>
                <li class="breadcrumb-item active">Nova Marca</li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            @if (session()->has('create'))
                <div class="alert alert-success">
                    {{ session()->get('create') }}
                </div>
            @endif
            @if (session()->has('delete'))
                <div class="alert alert-danger">
                    {{ session()->get('delete') }}
                </div>
            @endif
            @if (session()->has('update'))
                <div class="alert alert-primary">
                    {{ session()->get('update') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Preencha os campos</h3>
                </div>
                <form action="/marca/nova" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome"
                                placeholder="Digite o nome da marca" value="{{ old('nome') }}" required autofocus>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Cadastrar</button>
                        <a href="/marca" class="btn btn-danger" tabindex="-1" role="button"
                            aria-disabled="true">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>

@stop
