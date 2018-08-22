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
    </table>



  </body>
</html>