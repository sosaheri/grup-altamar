@extends('admin.layout')

@section('content')

<h1>Reportes Remesas</h1>


 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Remesas</h3>

              <h3 class="pull-right"><a href="{{action('ReportesController@downloadPDF2')}}" target="_blank"

                >Imprimir Últimos 7 días</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                      <th>Fecha de Deposito</th>
              <th>Hora de Deposito</th>
              <th>Banco</th>
              <th>Numero Ref</th>
              <th>Oficina</th>
              <th>Beneficiario</th>
              <th>Monto</th>
              <th>Tasa</th>
              <th>Banco Receptor</th>
                </tr>
                </thead>
                <tbody>
        @if(count($rem) > 0)
                        @foreach($rem->all() as $remesa) 

                <tr>
                      <td>{{$remesa->RemFechaDeposito}}</td>
              <td>{{$remesa->RemHoraDeposito}}</td>
              <td>{{$remesa->RemBanco}}</td>
              <td>{{$remesa->RemNumRef}}</td>
              <td>{{$remesa->RemOficina}}</td>
              <td>{{$remesa->RemBene}}</td>
              <td>{{$remesa->RemMonto}}</td>
              <td>{{$remesa->Remtasa}}</td>
              <td>{{$remesa->RemBancoRec}}</td>
                </tr>

                  @endforeach
          @endif                 

                
                <tfoot>
                <tr>
                      <th>Fecha de Deposito</th>
              <th>Hora de Deposito</th>
              <th>Banco</th>
              <th>Numero Ref</th>
              <th>Oficina</th>
              <th>Beneficiario</th>
              <th>Monto</th>
              <th>Tasa</th>
              <th>Banco Receptor</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


@stop