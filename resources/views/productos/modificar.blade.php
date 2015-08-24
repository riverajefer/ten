@extends('layouts/default')
@section('content')

@section('title')  @parent Modificar Producto Tensei @stop
@section('titulo') @parent Modificar Producto Tensei @stop

<div class="box-body crear">

	{!! Form::model($producto, array('route' => array('producto.update', $producto->id), 'method' => 'PUT')) !!}
		<div class="row">
			<div class="form-group">
                <input type="text" name="plan" id="plan" class="form-control input-lg" placeholder="Sector" tabindex="1" value="{{$producto->plan}}">
			</div>	
		</div>
		<div class="row">
			<div class="form-group">
                <textarea name="detalles" class="form-control input-lg" id="detalles" tabindex="2" placeholder="Detalles">{{$producto->detalles}}</textarea>	
			</div>	
		</div>				
		<hr>
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		    <hr>
		@endif			
		<div class="row">
			<div class="col-xs-12 col-md-offset-3 col-md-6">
			<input type="submit" value="Modificar" class="btn btn-success btn-block btn-lg" tabindex="7">
			</div>
		</div>			
	{!! Form::close() !!}

</div>

<script>
	$('form').preventDoubleSubmission();
</script>
<!-- Finaliza el render de la pagina -->
@stop