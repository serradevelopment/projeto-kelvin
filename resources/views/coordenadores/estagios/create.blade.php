@extends('coordenadores.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Cadastrar Estágio</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-10">
                    <div class="card card-primary">
                        <form action="{{route('coordenador.estagios.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Nome do Estágio</label>
                                    <input type="text" name="nome" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Descrição do Estágio</label>
                                    <textarea id="inputDescription" name="descricao" class="form-control"
                                              rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Quantidade de Horas</label>
                                    <input type="text" id="inputName" name="qtd_horas" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Status</label>
                                    <select id="inputStatus" name="status" class="form-control custom-select">
                                        <option selected disabled>Selecione um</option>
                                        <option value="1">Ativo</option>
                                        <option value="2">Finalizado</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Estágiario</label>
                                    <select id="inputStatus" name="estagiario_id" class="form-control custom-select">
                                        <option selected disabled>Selecione um</option>
                                        @foreach($estagiarios as $estagiario)
                                            <option value="{{$estagiario->id}}">{{$estagiario->nome}}</option>

                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">Empresa</label>
                                    <select id="inputStatus" name="empresa_id" class="form-control custom-select">
                                        <option selected disabled>Selecione um</option>
                                        @foreach($empresas as $empresa)
                                            <option value="{{$empresa->id}}">{{$empresa->razao_social}}</option>

                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">Professor Responsável</label>
                                    <select id="inputStatus" name="professor_id" class="form-control custom-select">
                                        <option selected disabled>Selecione um</option>
                                        @foreach($professores as $professor)
                                            <option value="{{$professor->id}}">{{$professor->nome}}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row m-5">
                                <div class="col-12">
                                    <input type="submit" value="Criar Estágio" class="btn btn-success float-right">
                                </div>
                            </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection
