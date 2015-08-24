@extends('layouts/default')
@section('content')

@section('title')  @parent Agregar Registro @stop
@section('titulo') @parent Agregar Registro @stop

<div class="box-body crear">

			{!! Form::open(array('action' => 'RegistroController@store')) !!}

			<div class="row">
				<div class="form-group">
	
					<select name="tipoComercio" id="tipoComercio" required="" class="form-control input-lg" tabindex="1">
	                    <option value="">Tipo de Comercio</option>
	                    @foreach($sectores as $sector)
	                    	<option value="{{$sector->id}}">{{$sector->sector}}</option>
	                    @endforeach
                  	</select>

					<!--
				  <input list="tipoComercio" name="tipoComercio" placeholder="Tipo de Comercio" class="form-control input-lg">
				  <datalist id="tipoComercio">
				  	<option value="Hoteles">
				    <option value="Calzado">
				    <option value="Ropa">
				    <option value="Celulares">
				    <option value="Muebles">
				    <option value="Restaurantes">
				    <option value="Bares">
				    <option value="Odontología">
				    <option value="Centro médico">
				    <option value="Opticas">
				    <option value="Veterinarias">
				    <option value="Peluquería">
				    <option value="Gimnasios">
				    <option value="Colegios">
				    <option value="Variedades">
				    <option value="Repuestos">
				    <option value="Droguerías">
				    <option value="Laboratorio Clínicos">
				    <option value="Agencia de Viajes">
				    <option value="Construcón">
				    <option value="Super Mercado">
				    <option value="Tienda de Mascotas">
				    <option value="Servicios">
				    <option value="Persona natural">
				  </datalist>
				  -->


				</div>
			</div>		
			<div class="row">
				<div class="form-group">
	                <input type="text" name="empresa" id="empresa" class="form-control input-lg" placeholder="Empresa" tabindex="2" value="{{ old('empresa') }}" >
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="encargado" id="encargado" class="form-control input-lg" placeholder="Persona encargada" tabindex="3" value="{{ old('encargado') }}">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="cargo" id="cargo" class="form-control input-lg" placeholder="Cargo" tabindex="4" value="{{ old('cargo') }}">
					</div>
				</div>
			</div>			

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<select name="localidad" id="localidad" required="" class="form-control input-lg" tabindex="5">
		                    <option value="">Loalidad</option>

                			@foreach($localidad as $localidad)
	                    		<option value="{{$localidad}}">{{$localidad}}</option>
		                    @endforeach

	                  	</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
					<input type="text" name="barrio" id="barrio" class="form-control input-lg" placeholder="Barrio" tabindex="6" value="{{ old('barrio') }}">
					</div>
				</div>				

			</div>

			<div class="row">
				<div class="form-group">
					<input type="text" name="direccion" id="direccion" class="form-control input-lg" placeholder="Dirección" tabindex="7" value="{{ old('direccion') }}">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control input-lg" placeholder="Email" tabindex="8" value="{{ old('email') }}">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="celular" id="celular" class="form-control input-lg" placeholder="Celular" tabindex="9" value="{{ old('celular') }}" >
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="tel" name="telefono" id="telefono" class="form-control input-lg" placeholder="Teléfono" tabindex="10" value="{{ old('telefono') }}">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="number" name="extension" id="extension" class="form-control input-lg" placeholder="Extensión" tabindex="11" value="{{ old('extension') }}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<div class="form-group">
						<select name="nivelInteres" id="nivelInteres" required="" class="form-control input-lg" tabindex="12">
		                    <option value="">Nivel de Interés</option>
	               			@foreach($nivel_interes as $interes)
	                    		<option value="{{$interes}}">{{$interes}}</option>
		                    @endforeach
	                  	</select>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<select name="mensaje" id="mensaje" required="" class="form-control input-lg" tabindex="13">
		                    <option value="">Mensaje</option>
	               			@foreach($mensajes as $mensaje)
	                    		<option value="{{$mensaje}}">{{$mensaje}}</option>
		                    @endforeach		                    
	                  	</select>
					</div>					
					</div>
				</div>
			<div class="row">
				<div class="form-group">
					<select name="servicioInteres" id="servicioInteres" required="" class="form-control input-lg" tabindex="14">
	                    <option value="">Servicio de Interés</option>

	                    @foreach($productos as $producto)
	                    	<option value="{{$producto->id}}">{{$producto->plan}}</option>
	                    @endforeach	                    

                  	</select>
				</div>
			</div>				
			<div class="row">
				<div class="form-group">
					<textarea name="observaciones" class="form-control input-lg" id="observaciones" placeholder="Observaciones" tabindex="15">{{ old('observaciones') }}</textarea>
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
				<input type="submit" value="Registrar" class="btn btn-success btn-block btn-lg" tabindex="15">
				</div>
			</div>
		{!! Form::close() !!}
	</div>
</div>

<hr>
<script>
	$('form').preventDoubleSubmission();
</script>

<!-- Finaliza el render de la pagina -->
@stop