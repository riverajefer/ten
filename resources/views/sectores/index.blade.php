@extends('layouts/default')
@section('content')

@section('title')
@parent
 ¡ Sectores Comerciales !
@stop

<h1>Sectores Comerciales</h1>
<!-- Finaliza el render de la pagina -->

<div class="container">
	<div class="row">

		<div align="center">
			<a class="btn btn-success" href="{{URL::to('sector/create')}}"><i class="fa fa-plus"></i> Agregar</a>	
			<hr>

			@if (Session::has('message'))
			    <script> notificacion( '<?php echo Session::get('message') ?>' ) </script>
			@endif
		</div>

		
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<th>No</th>
				<th width="70%">Sector</th>
				<th>Modificar</th>
				<th>Eliminar</th>
			</thead>
			<tbody>
				@foreach($sectores as $key => $sector)
					<tr>
						<td>{{$key+1}}</td>
						<td>{{$sector->sector}}</td>
						<td>
							<a href="{{url('sector/'.$sector->id.'/edit')}}" class="btn btn-sm btn-primary">
								<i class="fa fa-pencil-square-o"></i> Modificar
							</a>
						</td>
						<td>

		                {!! Form::open(array('url' => 'sector/' . $sector->id,  'class' => 'pull-right' )) !!}
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