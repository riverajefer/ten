@extends('layouts/default')
@section('content')

@section('title')  @parent Registros @stop
@section('titulo') @parent Registros @stop

    @section('breadcrumb') @parent 
         <li class="active">  Crear Registro</li>
    @stop

<div class="box-header">
	
    @section('breadcrumb') @parent 
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active"> <i class="fa fa-users"></i> Registros</li>
    @stop


  <h3 class="box-title">Lista de Registros</h3>
</div>

<div align="center">
	<a class="btn btn-success" href="{{URL::to('registro/create')}}"><i class="fa fa-plus"></i> Agregar</a>	
</div>

<div class="box-body">	
	<table class="table table-striped table-hover table-bordered" id="tabla">
		<thead>
			<th>No</th>
			<th width="30%">Empresa</th>
			<th>Sector</th>
			<th>Fecha</th>
			<th>Detalles</th>
			<th>Modificar</th>
			<th>Eliminar</th>
		</thead>
		<tbody>
			@foreach($registros as $key => $registro)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $registro->empresa }}</td>
					<td>
						@if ($registro->sector)
							{{$registro->sector->sector}}
						@else
							No Asignado
						@endif
					</td>
					<td>{{ $registro->created_at }}</td>
					<td>
						<a href="{{url('registro/'.$registro->id)}}" class="btn btn-xs btn-info">
							<i class="fa fa-pencil-square-o"></i> Detalles
						</a>
					</td>						
					<td>
						<a href="{{url('registro/'.$registro->id.'/edit')}}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o"></i> Modificar
						</a>
					</td>

					<td>

	                {!! Form::open(array('url' => 'registro/' . $registro->id,  'class' => 'pull-right' )) !!}
	                    {!! Form::hidden('_method', 'DELETE') !!}
	                    <button class="btn btn-xs btn-danger click_delete"><i class="fa fa-times"></i> Eliminar </button>
	                {!! Form::close() !!}

					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<script>
	$( ".pull-right" ).submit(function( event ) {
	    var r = confirm("Desea eliminar el registro");
	    if (r == true) {
	        return
	    } else {
	        event.preventDefault();
	    }	  
	});

    $(function () {
        $('#tabla').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });	
</script>
@stop