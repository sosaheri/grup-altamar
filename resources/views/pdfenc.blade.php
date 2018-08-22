<!-- pdf.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Comprobante de Transacción</title>
      <link rel="stylesheet" href="{!! asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')!!}">
  </head>
  <body>
<div><img height="45px" src="{{ url('logo.png') }}" alt="Logo altamar"></div>

<span class="text-center"><h1>Reporte de transacción</h1></span>

Fecha: {{$transacciones->created_at}}

    <table class="table table-bordered">
     <tr>
			<td><h4>Datos de Remitente</h4></td>
			<td></td>
		</tr>
		<tr>
			<td>Nombre y Apellido</td>
			<td><h4>{{ $transacciones->NombreyApellidoRemitente }}</h4></td>
		</tr>
		<tr>
			<td>Documento de Identidad< </td>
			<td><h4>{{ $transacciones->DocumentodeIdentidadRemitente }}</h4></td>
		</tr>
		<tr>
			<td>Teléfono del Remitente</td>
			<td><h4>{{ $transacciones->TelefonodeRemitente }}</h4></td>
		</tr>
		<tr>
			<td>Número de Correlativo</td>
			<td><h4>{{ $transacciones->NumerodeCorrelativo }}</h4></td>
		</tr>
		<tr>
			<td>Fecha de Recepción</td>
			<td><h4>{{ $transacciones->fechaRecepcion }}</h4></td>
		</tr>
		<tr>
			<td>Descripción</td>
			<td><h4>{{ $transacciones->descripcion }}</h4></td>
		</tr>
		<tr>
			<td>Peso de La encomienda</td>
			<td><h4>{{ $transacciones->PesoEncomienda }}</h4></td>
		</tr>
		<tr>
			<td><h4>Datos del Receptor</h4></td>
			<td><h4></h4></td>
		</tr>

		<tr>
			<td>Nombre y Apellido del Receptor</td>
			<td><h4>{{ $transacciones->NombreyApellidoReceptor }}</h4></td>
		</tr>
		<tr>
			<td>Documento de Identidad del Receptor</td>
			<td><h4>{{ $transacciones->DocumentodeIdentidadReceptor }}</h4></td>
		</tr>
		<tr>
			<td>Teléfono del Receptor</td>
			<td><h4>{{ $transacciones->TelefonoReceptor }}</h4></td>
		</tr>
		<tr>
			<td>Dirección de Retiro de la Encomienda</td>
			<td><h4>{{ $transacciones->DireccionRetiro }}</h4></td>
		</tr>
		<tr>
			<td>Fecha de Salida de la Encomienda</td>
			<td><h4>{{ $transacciones->FechaDeSalida }}</h4></td>
		</tr>
				<tr>
			<td>Registrado por</td>
			<td><h4>{{ $transacciones->operador }}</h4></td>
		</tr>		
    </table>



  </body>
</html>