@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8 content">
            
            <div class="card mt-2">
                
                <div class="card-header">{{ __('Cadastrar Aluno') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- 
                        nome_aluno, turma, endereco, telefone, email
                    -->
                    

                    <form action="{{url('salvar_aluno')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nome_aluno" class="form-label">Nome do aluno</label>
                            <input type="text" class="form-control" id="nome_aluno" placeholder="Nome do aluno..." name="nome_aluno">
                        </div>

                        <div class="form-group">
                            <label for="turma" class="col-form-label">Turma</label>
                            <input type="text" class="form-control" placeholder="Turma..." id="turma" name="turma">
                        </div>

                        <div class="form-group">
                            <label for="endereco" class="col-form-label">Endereco</label>
                            <input type="text" class="form-control" placeholder="Endereco..." id="endereco" name="endereco">
                        </div>

                        <div class="form-group">
                            <label for="telefone" class="col-form-label">Telefone</label>
                            <input type="text" class="form-control" placeholder="Telefone..." id="telefone" name="telefone">
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-form-label">E-mail</label>
                            <input type="email" class="form-control" placeholder="Email..." id="email" name="email">
                        </div>


                        <input type="submit" class="btn btn-success" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
