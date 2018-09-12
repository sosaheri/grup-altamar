@extends('admin.layout')

@section('content')

<h1>Bienvenidos a Sistema Altamar</h1>

<div class="row">
        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $contador[2] }}</h3>

              <p>Cantidad de Transacciones</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer"></a>
          </div>

          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $contador[0] }}</h3>

              <p>Remesas Enviadas</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer"></a>
          </div>


        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $contador[1] }}</h3>

              <p>Encomiendas Enviadas</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"></a>
          </div>

                    <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $contador[3] }} Kilos</h3>

              <p>Acumulado Actual Encomiendas</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer"></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-12">
          <!-- small box -->

        </div>
        <!-- ./col -->
</div>




@stop