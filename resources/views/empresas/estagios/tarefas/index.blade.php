@extends('empresas.layouts.app')

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
                            <a href="{{route('empresa.estagios.tarefas.create',$estagio)}}"><button class="btn-success">Cadastrar Tarefa</button></a>
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
                            @foreach($estagio->tarefas as $key=>$tarefa)
                            <tr>
                                <th scope="row">{{$tarefa->id}}</th>
                                <td>{{$tarefa->nome}}</td>
                                <td>{{$tarefa->descricao}}</td>
                                <td>{{$tarefa->qtd_horas}}</td>
                                <td>{{date('d/m/Y',strtotime($tarefa->data))}}</td>
                                <td>{!! $tarefa->estagiario_ok_label !!}</td>
                                <td>{!! $tarefa->professor_ok_label !!}</td>
                                <td>
                                    <form action="/empresa/estagios/{{$estagio->id}}/tarefas/{{$tarefa->id}}" method="post" id="formTarefa{{$key}}">
                                        @csrf
                                        @method('put')
                                        <input onchange="$('#formTarefa{{$key}}').submit()"   type="checkbox" @if($tarefa->empresa_ok === 1) checked @endif>
                                    </form>
                                </td>

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
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

@endsection


