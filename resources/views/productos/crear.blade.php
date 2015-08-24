@extends('layouts/default')
@section('content')

@section('title')  @parent Agregar Producto Tensei @stop
@section('titulo') @parent Agregar Producto Tensei @stop

<div class="box-body crear">

		{!! Form::open(array('action' => 'ProductoController@store')) !!}
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
				<input type="submit" value="Agregar" class="btn btn-success btn-lg" >
			</div>			
		{!! Form::close() !!}
</div>

<script>
	$('form').preventDoubleSubmission();
</script>
<!-- Finaliza el render de la pagina -->
@stop