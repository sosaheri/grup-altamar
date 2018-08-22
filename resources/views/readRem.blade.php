@extends('admin.layout')

@section('content')

<!--top-->
	<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Transacción #{{ $transacciones->id }} de fecha {{ $transacciones->created_at }}</h3>

        </div>
<!--fin top-->

​<!--cuerpo-->
	<div class="box-body">

		<table class="table table-hover">
			<thead>
				<tr>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><h1>Datos de Remesa</h1></td>
					<td></td>
				</tr>
				<tr>
					<td><h3>Fecha de Deposito</h3></td>
					<td><h4>{{ $transacciones->RemFechaDeposito }}</h4></td>
				</tr>
				<tr>
					<td><h3>Hora Deposito</h3> </td>
					<td><h4>{{ $transacciones->RemHoraDeposito }}</h4></td>
				</tr>
				<tr>
					<td><h3>Banco</h3></td>
					<td><h4>{{ $transacciones->RemBanco }}</h4></td>
				</tr>
				<tr>
					<td><h3>Número de Referencia</h3></td>
					<td><h4>{{ $transacciones->RemNumRef }}</h4></td>
				</tr>
				<tr>
					<td><h3>Oficina</h3></td>
					<td><h4>{{ $transacciones->RemOficina }}</h4></td>
				</tr>
				<tr>
					<td><h3>Beneficiario</h3></td>
					<td><h4>{{ $transacciones->RemBene }}</h4></td>
				</tr>
				<tr>
					<td><h3>Monto</h3></td>
					<td><h4>{{ $transacciones->RemMonto }}</h4></td>
				</tr>
				<tr>
					<td><h3>Tasa</h3></td>
					<td><h4>{{ $transacciones->Remtasa }}</h4></td>
				</tr>
				<tr>
					<td><h3>Banco receptor</h3></td>
					<td><h4>{{ $transacciones->RemBancoRec }}</h4></td>
				</tr>
				<tr>
					<td><h3>Registrado por</h3></td>
					<td><h4>{{ $transacciones->operador }}</h4></td>
				</tr>																		
			</tbody>
		</table>
	</div>
<!--fin cuerpo-->


  	  <div>	
        <!-- /.box-footer -->

              <div class="box-footer">

                <a href='{{ url("transaccionesRemesas") }}'><button type="button" class="btn btn-default btn-lg">Regresar</button></a>
				<a href="{{action('RemesasController@downloadPDF', $transacciones->id)}}" target="_blank"><button type="button" class="btn btn-default btn-lg">Generar PDF</button></a>



                
              </div>
        <!-- fin /.box-footer-->
      </div>              

@stop