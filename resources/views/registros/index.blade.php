@extends('layouts/default')
@section('content')

@section('title')
@parent
 ¡ Sectores Comerciales !
@stop

<h1>Registro de Datos</h1>
<!-- Finaliza el render de la pagina -->

<div class="container">
	<div class="row">

		<div align="center">
			<a class="btn btn-success" href="{{URL::to('registro/create')}}"><i class="fa fa-plus"></i> Agregar Registro</a>	
			<hr>

			@if (Session::has('message'))
			    <script> notificacion( '<?php echo Session::get('message') ?>' ) </script>
			@endif
		</div>

		
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<th>No</th>
				<th width="70%">Fecha</th>
				<th>Detalles</th>
				<th>Modificar</th>
				<th>Eliminar</th>
			</thead>
			<tbody>
				@foreach($registros as $key => $registro)
					<tr>
						<td>{{$key+1}}</td>
						<td>{{$registro->created_at}}</td>
						<td>
							<a href="{{url('registro/'.$registro->id)}}" class="btn btn-sm btn-info">
								<i class="fa fa-pencil-square-o"></i> Detalles
							</a>
						</td>						
						<td>
							<a href="{{url('registro/'.$registro->id.'/edit')}}" class="btn btn-sm btn-primary">
								<i class="fa fa-pencil-square-o"></i> Modificar
							</a>
						</td>

						<td>

		                {!! Form::open(array('url' => 'registro/' . $registro->id,  'class' => 'pull-right' )) !!}
		                    {!! Form::hidden('_method', 'DELETE') !!}
		                    <button class="btn btn-sm btn-danger click_delete"><i class="fa fa-times"></i> Eliminar </button>
		                {!! Form::close() !!}

						</td>
					</tr>
				@endforeach
			</tbody>
			
		</table>
	</div>
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
</script>
@stop