               <?php 
                ini_set('max_execution_time', 0);
                ini_set('memory_limit', '2048M');
                	$fecha = date("Y-m-d");

					$nuevafecha = strtotime ( '-7 day' , strtotime ( $fecha ) ) ;
					$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reporte</title>
      <link rel="stylesheet" href="{!! asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')!!}">
  </head>
  <body>
<span class="pull-right">Desde {{ $nuevafecha }} hasta {{ date('Y-m-d') }}</span>
<div><img height="45px" src="{{ url('logo.png') }}" alt="Logo altamar"></div>

<span class="text-center"><h1>Remesas</h1></span>

    <table class="table">
     				<tr>
     			        <th>Nro.</th>
                  <th>Fecha de Deposito</th>
                  <th>Hora de Deposito</th>
                  <th>Banco</th>
                  <th>Número de Referencia</th>
                  <th>Oficina</th>
                  <th>Beneficiario</th>
                  <th>Monto</th>
                  <th>Tasa</th>
                  <th>Banco Receptor</th>


                </tr>

 
                @if(count($transacciones) > 0)
						@foreach($transacciones->where('RemFechaDeposito', '>',$nuevafecha ) as $remesa)
                              
                        	<tr>
                                <td>{{ $remesa->id }}</td>
                                <td>{{$remesa->RemFechaDeposito}}</td>
                                <td>{{$remesa->RemHoraDeposito}}</td>
                                <td>{{$remesa->RemBanco}}</td>
                                <td>{{$remesa->RemNumRef}}</td>
                                <td>{{$remesa->RemOficina}}</td>
                                <td>{{$remesa->RemBene}}</td>
                                <td>{{$remesa->RemMonto}}</td>
                                <td>{{$remesa->RemTasa}}</td>
                                <td>{{$remesa->RemBancoRec}}</td>                         
                            </tr>

                        @endforeach
                @endif

                
    </table>



  </body>
</html>