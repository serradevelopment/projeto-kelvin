@extends('professores.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Estágios</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content" style="max-width: 1500px;">

            <!-- Default box -->
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>

                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 40%">
                                Estagiario
                            </th>
                            <th>
                                Horas Restantes
                            </th>
                            <th style="width: 20%" class="text-center">
                                Status
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($estagios as $estagio)
                            <tr>
                                <td>
                                    {{$estagio->id}}
                                </td>
                                <td>
                                    <a>
                                        {{$estagio->estagiario->nome}}
                                    </a>
                                    <br/>
                                    <small>
                                        Criado em {{date('d/m/Y',strtotime($estagio->created_at))}}
                                    </small>
                                </td>
                                <td class="project_progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: {{($estagio->horas_concluidas/$estagio->qtd_horas)*100}}%">
                                        </div>
                                    </div>
                                    <small>
                                        {{$estagio->qtd_horas - $estagio->horas_concluidas}} horas
                                    </small>
                                </td>
                                <td class="project-state">
                                    {!! $estagio->status_label !!}

                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{route('professor.estagios.tarefas.index',$estagio)}}">
                                        <i class="fas fa-folder">
                                        </i>
                                        Tarefas
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{route('professor.estagios.show',$estagio)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Detalhes
                                    </a>
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
@endsection
