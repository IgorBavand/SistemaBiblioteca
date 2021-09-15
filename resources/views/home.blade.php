@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8 content">
            <div class="row">
                <div>
                    <a href="cadastrar_aluno" class="btn btn-primary ml-3"><i>Cadastrar Aluno</i> <i class="bi bi-person-plus-fill"></i></a>
                </div>
                <div class="ml-2">
                <a href="#" class="btn btn-primary"><i>Cadastrar Livro </i> <i class="bi bi-book-fill"></i></a>
                </div>

            </div>
            
            <div class="card mt-2">
                
                <div class="card-header">{{ __('Painel Administrativo') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
