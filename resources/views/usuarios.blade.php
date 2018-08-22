@extends('admin.layout')

@section('content')

<h1>Listado de Usuarios</h1>

<div class="col-md-10 col-md-offset-1">
    <div class="box">
         <div class="box-header">
                  <h3 class="box-title">Listado de Usuarios</h3>
         </div>

         <div class="box-body table-responsive no-padding">


              @if(session('info'))

                    <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> {{ session('info') }}</h4>
                      
                    </div>

              @endif


              <table class="table table-hover">
                <tr>
                  <th>Nombre de Usuario</th>
                  <th>Correo</th>
                  <th>Rol</th>
                  <th></th>

                </tr>

 
                 @if(count($users) > 0)
                        @foreach($users->all() as $user)
                 <tr>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          
                          <td>{{$user->rol}}</td>
                          <td><a href="{{ url("/deleteUsr/{$user->id}") }}"><span class="label label-danger">Eliminar</span></a></td>
                          
                 </tr>
                        @endforeach
                @endif

              </table>
            </div>
    </div>
</div>
@stop