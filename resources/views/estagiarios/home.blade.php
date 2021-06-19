@extends('estagiarios.layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner" style="padding:25px!important;">
                        <h3>{{auth()->guard('estagiario')->user()->estagios->sum('qtd_horas')}}<sup style="font-size: 20px"> Horas</sup></h3>

                        <p>Restantes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner" style="padding:25px!important;">
                        <h3>{{count(auth()->guard('estagiario')->user()->tarefas_pendentes)}}</h3>

                        <p>Tarefas Pendentes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
