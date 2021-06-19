@extends('coordenadores.layouts.app')

@section('content')
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- jquery validation -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Cadastrar Atividade</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form  action="{{route('coordenador.estagios.tarefas.store',$estagio)}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nome</label>
                                            <input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Nome da Atividade">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Descrição</label>
                                            <textarea name="descricao" class="form-control"  placeholder="Defina a descrição da atividade..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Data</label>
                                            <input type="date" name="data" class="form-control" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Quantidade de Horas</label>
                                            <input type="text" name="qtd_horas" class="form-control" id="exampleInputEmail1" placeholder="Horas">
                                        </div>
                                        <!--div class="form-group mb-0">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                            <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                                          </div>
                                        </div>
                                      </div -->
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                        </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">

                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
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


