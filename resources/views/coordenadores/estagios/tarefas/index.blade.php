@extends('coordenadores.layouts.app')

@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Tarefas</h1>
                        </div>
                        <div class="col-sm-6" style="text-align:right;">
                            <a href="{{route('coordenador.estagios.tarefas.create',$estagio)}}"><button class="btn-success">Cadastrar Tarefa</button></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Quantidade de horas</th>
                                <th scope="col">Data</th>
                                <th scope="col">Estagiário</th>
                                <th scope="col">Professor</th>
                                <th scope="col">Empresa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($estagio->tarefas as $tarefa)
                            <tr>
                                <th scope="row">{{$tarefa->id}}</th>
                                <td>{{$tarefa->nome}}</td>
                                <td>{{$tarefa->descricao}}</td>
                                <td>{{$tarefa->qtd_horas}}</td>
                                <td>{{date('d/m/Y',strtotime($tarefa->data))}}</td>
                                <td>{!!$tarefa->estagiario_ok_label!!}</td>
                                <td>{!!$tarefa->professor_ok_label!!}</td>
                                <td>{!!$tarefa->empresa_ok_label!!}</td>

                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

@endsection


