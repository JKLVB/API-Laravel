@extends('layouts.app')

@section('title', 'Cadastrar')

@section('content')
    <section>
        <div class="container">
            <h3 style="text-align:center; height: 70px; margin-top: 40px;">Formulário de Cadastro</h3>
            <form action="{{ route('usuarios-store') }}" method="POST">
                @csrf
                <div class="row mb-3" style="display: flex; justify-content: center;">
                    <label for="inputNome3" class="col-sm-1 col-form-label">Nome</label>
                    <div class="col-sm-3">
                    <input type="text" pattern=".*\S+.*" class="form-control" id="nome" name="nome" placeholder="Insira seu nome" maxlength="35">
                    </div>
                </div>
                <div class="row mb-3" style="display: flex; justify-content: center;">
                    <label for="inputCpf3" class="col-sm-1 col-form-label">CPF</label>
                    <div class="col-sm-3">
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Apenas números" minlength="11" maxlength="11">
                    </div>
                </div>
                <div class="row mb-3" style="display: flex; justify-content: center;">
                    <label for="inputSenha3" class="col-sm-1 col-form-label">Senha</label>
                    <div class="col-sm-3">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha com 8 dígitos" minlength="8" maxlength="8">
                    </div>
                </div>
                <div class="row mb-3" style="display: flex; justify-content: center;">
                    <label for="inputSalario3" class="col-sm-1 col-form-label">Telefone</label>
                    <div class="col-sm-3">
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Apenas números" minlength="11" maxlength="11">
                    </div>
                </div>

                <fieldset class="row mb-3" style="display: flex; justify-content: center;">
                    <legend class="col-form-label col-sm-1 pt-0">Cargo</legend>
                    <div class="col-sm-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cargo" id="administrador" value="administrador">
                        <label class="form-check-label" for="gridRadios1">
                            Administrador
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cargo" id="analista" value="analista">
                        <label class="form-check-label" for="gridRadios2">
                            Analista
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="cargo" id="desenvolvedor" value="desenvolvedor">
                        <label class="form-check-label" for="gridRadios3">
                            Desenvolvedor
                        </label>
                    </div>
                    </div>
                </fieldset>
                <div style="width: 100%;  display: flex; justify-content: center;">
                    <div class="form-group" style="display: flex; justify-content: space-between; width: 450px">
                    <button type="submit" name="submit" class="btn btn-info">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection