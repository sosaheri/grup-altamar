@extends('admin.layout')

@section('content')

<h1>Actualización de Transacciones de Encomiendas</h1>

<div class="col-md-6 col-md-offset-3">
    <div class="box box-primary">
           
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ url('editEnc', array($transacciones->id)) }}">
              <div class="box-body">
              {{ csrf_field() }}
                            @if( count($errors) > 0)
                  @foreach( $errors->all() as $error )
                        
                        

                        <div class="callout callout-danger">
                            <h4>¡Atención!</h4>

                            <p>{{ $error }}</p>
                      </div>

                  @endforeach
              @endif

                <div class="box-header with-border">
                  <h3 class="box-title">Datos de Remitente</h3>
              </div>

                <div class="form-group">
              <label for="formEncomiendas">Nombre y Apellido</label>
                  <input type="text" class="form-control" name="NombreyApellidoRemitente" id="EncNombreApellidoRem" placeholder="Nombre y Apellido"  value="<?php echo $transacciones->NombreyApellidoRemitente; ?>">
                </div>

                <div class="form-group">
                  <label for="formEncomiendas">Documento de Identidad</label>
                  <input type="text" class="form-control" id="EncDocIden" name="DocumentodeIdentidadRemitente" placeholder="Documento de identidad"  value="<?php echo $transacciones->DocumentodeIdentidadRemitente; ?>">
                </div>

                <div class="form-group">
                  <label for="formEncomiendas">Teléfono del Remitente</label>
                  <input type="text" class="form-control" id="EncTelrem" name="TelefonodeRemitente"  data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="(999) 999-9999"  value="<?php echo $transacciones->TelefonodeRemitente; ?>">
                </div>

                <div class="form-group">
                  <label for="formEncomiendas">Número de Correlativo</label>
                  <input type="text" class="form-control" id="EncNumCor" name="NumerodeCorrelativo" placeholder="Número de Correlativo"  value="<?php echo $transacciones->NumerodeCorrelativo; ?>">
                </div>

                <div class="form-group">
                  <label for=formEncomiendas">Fecha de Recepción</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="fechaRecepcion" id="datepicker"  value="<?php echo $transacciones->fechaRecepcion; ?>">
                </div>
                </div>

                <div class="form-group">
                  <label for="formEncomiendas">Descripción de envio</label>
                  <textarea name="descripcion" class="form-control" rows="3" placeholder="Descripción de envio" required><?php echo $transacciones->descripcion; ?></textarea>
                </div>

                <div class="form-group">
                  <label for="formEncomiendas">Peso de envio</label>
                  <input type="text" class="form-control" id="EncPeso" name="PesoEncomienda" placeholder="Peso de envio"  value="<?php echo $transacciones->PesoEncomienda; ?>">
                  <div>
                  <p class="help-block">En Kilogramos.</p>
                </div>
                </div>

                <div class="box-header with-border">
                  <h3 class="box-title">Datos de Receptor</h3>
              </div>

                <div class="form-group">
                  <label for="formEncomiendas">Nombre y Apellido</label>

                  <input type="text" class="form-control" id="EncNombreApellidoRec" name="NombreyApellidoReceptor" placeholder="Nombre y Apellido"  value="<?php echo $transacciones->NombreyApellidoReceptor; ?>">
                </div>

                <div class="form-group">
                  <label for="formEncomiendas">Documento de Identidad</label>
                  <input type="text" class="form-control" id="EncDocIdenRec" name="DocumentodeIdentidadReceptor" placeholder="Documento de Identidad"  value="<?php echo $transacciones->DocumentodeIdentidadReceptor; ?>">
                </div>

                <div class="form-group">
                  <label for="formEncomiendas">Teléfono del Receptor</label>
                  <input type="text" class="form-control" id="EncTelrec" name="TelefonoReceptor" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="(999) 999-9999"  value="<?php echo $transacciones->TelefonoReceptor; ?>">
                </div>

                <div class="form-group">
                  <label>Dirección de Retiro</label>
                  <select id="DireccionRet" name="DireccionRetiro" class="form-control" >
                    <option value="<?php echo $transacciones->DireccionRetiro; ?>"><?php echo $transacciones->DireccionRetiro; ?></option>
                    <option value="Caracas">Caracas</option>
                    <option value="Interior">Interior</option>

                  </select>
                </div>

                <div class="form-group">
                  <label for=formEncomiendas">Fecha de Salida de Envio</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="FechaDeSalida" id="datepicker2"  value="<?php echo $transacciones->FechaDeSalida; ?>">
                </div>
                </div>                                                                                                                               

                

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href='{{ url("transaccionesEncomiendas") }}'><button type="button" class="btn btn-default">Regresar</button></a>
              </div>
            </form>
          </div>
</div>




@stop