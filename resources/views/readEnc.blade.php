@extends('admin.layout')

@section('content')


​	<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Transacción #{{ $transacciones->id }} de fecha {{ $transacciones->created_at }}</h3>

        </div>
        <div class="box-body">

<table class="table table-hover">
	<thead>
		<tr>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><h1>Datos de Remitente</h1></td>
			<td></td>
		</tr>
		<tr>
			<td><h3>Nombre y Apellido</h3></td>
			<td><h4>{{ $transacciones->NombreyApellidoRemitente }}</h4></td>
		</tr>
		<tr>
			<td><h3>Documento de Identidad</h3> </td>
			<td><h4>{{ $transacciones->DocumentodeIdentidadRemitente }}</h4></td>
		</tr>
		<tr>
			<td><h3>Teléfono del Remitente</h3></td>
			<td><h4>{{ $transacciones->TelefonodeRemitente }}</h4></td>
		</tr>
		<tr>
			<td><h3>Número de Correlativo</h3></td>
			<td><h4>{{ $transacciones->NumerodeCorrelativo }}</h4></td>
		</tr>
		<tr>
			<td><h3>Fecha de Recepción</h3></td>
			<td><h4>{{ $transacciones->fechaRecepcion }}</h4></td>
		</tr>
		<tr>
			<td><h3>Descripción</h3></td>
			<td><h4>{{ $transacciones->descripcion }}</h4></td>
		</tr>
		<tr>
			<td><h3>Peso de La encomienda</h3></td>
			<td><h4>{{ $transacciones->PesoEncomienda }}</h4></td>
		</tr>
		<tr>
			<td><h1>Datos del Receptor</h1></td>
			<td><h4></h4></td>
		</tr>

		<tr>
			<td><h3>Nombre y Apellido del Receptor</h3></td>
			<td><h4>{{ $transacciones->NombreyApellidoReceptor }}</h4></td>
		</tr>
		<tr>
			<td><h3>Documento de Identidad del Receptor</h3></td>
			<td><h4>{{ $transacciones->DocumentodeIdentidadReceptor }}</h4></td>
		</tr>
		<tr>
			<td><h3>Teléfono del Receptor</h3></td>
			<td><h4>{{ $transacciones->TelefonoReceptor }}</h4></td>
		</tr>
		<tr>
			<td><h3>Dirección de Retiro de la Encomienda</h3></td>
			<td><h4>{{ $transacciones->DireccionRetiro }}</h4></td>
		</tr>
		<tr>
			<td><h3>Fecha de Salida de la Encomienda</h3></td>
			<td><h4>{{ $transacciones->FechaDeSalida }}</h4></td>
		</tr>
				<tr>
			<td><h3>Registrado por</h3></td>
			<td><h4>{{ $transacciones->operador }}</h4></td>
		</tr>																		
	</tbody>
</table>
			
        	
        </div>
        <!-- /.box-body -->
              <div class="box-footer">

                <a href='{{ url("transaccionesEncomiendas") }}'><button type="button" class="btn btn-default btn-lg">Regresar</button></a>
				<a href="{{action('EncomiendasController@downloadPDF', $transacciones->id)}}" target="_blank"><button type="button" class="btn btn-default btn-lg">Generar PDF</button></a>



                
              </div>
        <!-- /.box-footer-->
      </div>





@stop