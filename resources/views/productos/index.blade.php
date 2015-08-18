@extends('layouts/default')
@section('content')

@section('title')
@parent
 ¡ Plenes !
@stop

<h3>Productos</h3>

<div class="container">
	<div class="row">

		<div align="center">
			<a class="btn btn-success" href="{{URL::to('producto/create')}}"><i class="fa fa-plus"></i> Agregar</a>	
			<hr>

			@if (Session::has('message'))
			    <script> notificacion( '<?php echo Session::get('message') ?>' ) </script>
			@endif
		</div>

		
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<th>No</th>
				<th width="70%">Plan</th>
				<th>Modificar</th>
				<th>Eliminar</th>
			</thead>
			<tbody>
				@foreach($productos as $key => $producto)
					<tr>
						<td>{{$key+1}}</td>
						<td>{{$producto->plan}}</td>
						<td>
							<a href="{{url('producto/'.$producto->id.'/edit')}}" class="btn btn-sm btn-primary">
								<i class="fa fa-pencil-square-o"></i> Modificar
							</a>
						</td>
						<td>

		                {!! Form::open(array('url' => 'producto/' . $producto->id,  'class' => 'pull-right' )) !!}
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