@extends('layouts/default')
@section('content')

@section('title')
@parent
 ¡ Productos !
@stop

<div class="container">
	<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

		{!! Form::open(array('action' => 'ProductoController@store')) !!}
			<h3>Agregar Producto</h3>
			<hr>
			<div class="row">
				<div class="form-group">
	                <input type="text" name="plan" id="plan" class="form-control input-lg" placeholder="Plan" tabindex="1" value="{{old('plan')}}" required>
				</div>	
			</div>
			<div class="row">
				<div class="form-group">
	                <textarea name="detalles" class="form-control input-lg" id="detalles" tabindex="2" placeholder="Detalles">{{old('detalles')}}</textarea>	
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
				<input type="submit" value="Agregar" class="btn btn-success btn-block btn-lg" tabindex="7">
				</div>
			</div>			
		{!! Form::close() !!}
	 </div>
	</div>
</div>
<script>
	$('form').preventDoubleSubmission();
</script>
<!-- Finaliza el render de la pagina -->
@stop