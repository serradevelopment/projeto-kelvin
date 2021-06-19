@extends('coordenadores.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Cadastrar Empresa</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Cadastrar</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{route('coordenador.empresas.store')}}" method="post" autocomplete="off">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row email-and-password">
                                            <div class="form-group col-lg-12">
                                                <label for="exampleInputEmail1">Razão Social</label>
                                                <input type="text" name="razao_social" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                            </div>
                                            <div class="form-group col-lg-8">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="row adress">
                                            <div class="form-group col-lg-8">
                                                <label for="exampleInputEmail1">Endereço</label>
                                                <input type="text" name="endereco" class="form-control" id="exampleInputEmail1" placeholder="Endereco">
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="exampleInputPassword1">Bairro</label>
                                                <input type="text" name="bairro" class="form-control" id="exampleInputEmail1" placeholder="Bairro">
                                            </div>
                                            <div class="form-group col-lg-5">
                                                <label for="exampleInputEmail1">CEP</label>
                                                <input type="text" name="cep" class="form-control" id="cep" placeholder="CEP">
                                            </div>
                                            <div class="form-group col-lg-5">
                                                <label for="exampleInputPassword1">Cidade</label>
                                                <input type="text" name="cidade" class="form-control" id="exampleInputEmail1" placeholder="Cidade">
                                            </div>
                                            <div class="form-group col-lg-2">
                                                <label for="exampleInputPassword1">UF</label>
                                                <input type="text" maxlength="2" name="uf" class="form-control" id="exampleInputEmail1" placeholder="UF">
                                            </div>
                                        </div>
                                        <div class="row adress-company">
                                            <div class="form-group col-lg-4">
                                                <label for="exampleInputEmail1">Telefone</label>
                                                <input type="text" name="telefone" class="form-control" id="exampleInputEmail1" placeholder="Telefone (00) 00000-0000">
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="exampleInputEmail1">CNPJ</label>
                                                <input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="CNPJ">
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="exampleInputEmail1">Insc. Estadual</label>
                                                <input type="text" name="inscricao_estadual" class="form-control" id="exampleInputEmail1" placeholder="Inscricao">
                                            </div>
                                        </div>
                                        <div class="row representant">
                                            <div class="form-group col-lg-6">
                                                <label for="exampleInputPassword1">Representante Empresa</label>
                                                <input type="text" name="representante_empresa" class="form-control" id="exampleInputEmail1" placeholder="Representante>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="exampleInputPassword1">Cargo</label>
                                                <input type="text" name="cargo" class="form-control" id="exampleInputEmail1" placeholder="Cargo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Cadastrar Empresa</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>

@endsection
