@extends('admin.layout')

@section('content')

<h1>Transacciones de Remesas en el Sistema</h1>

<div class="col-md-10 col-md-offset-1">
	<div class="box">
		 <div class="box-header">
	              <h3 class="box-title">Remesas</h3>

	              <div class="box-tools">
                   <div style="margin: -20px 0px !important;">{{ $transacciones->render() }}</div>

              </div>
	     </div>

	     <div class="box-body table-responsive no-padding">
              <table class="table table-hover">

              @if(session('info'))

                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> {{ session('info') }}</h4>
                      
                    </div>

              @endif

                <tr>
                  <th>Fecha de Deposito</th>
                  <th>Hora</th>
                  <th>Banco</th>
                  <th>Referencia del Deposito</th>
                  <th>Operador</th>
                  <th>PDF</th>
                  <th>Acciones</th>


                </tr>
                @if(count($transacciones) > 0)
                  @foreach($transacciones->all() as $remesas)

                         <tr>
                          <td>{{$remesas->RemFechaDeposito}}</td>
                          <td>{{$remesas->RemHoraDeposito}}</td>
                          <td>{{$remesas->RemBanco}}</td>
                          <td>{{$remesas->RemNumRef}}</td>
                          <td>{{$remesas->operador}}</td>
                          <td></td>
                          <td><a href="{{ url("/readRem/{$remesas->id}") }}"><span class="label label-info">Ver</span></a> |
                          @if((Auth::user()->name == $remesas->operador) OR (Auth::user()->rol == 'administrador'))

                               <a href='{{ url("/updateRem/{$remesas->id}") }}'><span class="label label-warning">Editar</span></a> |
                                <a href="{{ url("/deleteRem/{$remesas->id}") }}"><span class="label label-danger">Borrar</span></a></td>
                          @endif
                        </tr>

                  @endforeach
                @endif
                
              </table>
            </div>
 	</div>
</div>

@stop