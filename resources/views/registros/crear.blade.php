@extends('layouts/default')
@section('content')

@section('title')
@parent
 ¡ Registro de Datos !
@stop



<div class="container">

<div class="row">

    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

			{!! Form::open(array('action' => 'RegistroController@store')) !!}
			<h2>Registro de Datos</h2>
			<hr>

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
				    <option value="Gimnacio">
				    <option value="Colegio">
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
	                <input type="text" name="empresa" id="empresa" class="form-control input-lg" placeholder="Empresa" tabindex="2">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="encargado" id="encargado" class="form-control input-lg" placeholder="Persona encargada" tabindex="3">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="cargo" id="cargo" class="form-control input-lg" placeholder="Cargo" tabindex="4">
					</div>
				</div>
			</div>			

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<select name="localidad" id="localidad" required="" class="form-control input-lg" tabindex="5">
		                    <option value="">Loalidad</option>
		                    <option value="Bosa">Bosa</option>
		                    <option value="Chapinero">Chapinero</option>
	                  	</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="direccion" id="direccion" class="form-control input-lg" placeholder="Dirección" tabindex="6">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control input-lg" placeholder="Email" tabindex="7">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="celular" id="celular" class="form-control input-lg" placeholder="Celular" tabindex="8">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="tel" name="telefono" id="telefono" class="form-control input-lg" placeholder="Teléfono" tabindex="9">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="number" name="extension" id="extension" class="form-control input-lg" placeholder="Extensión" tabindex="10">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<div class="form-group">
						<select name="nivelInteres" id="nivelInteres" required="" class="form-control input-lg" tabindex="11">
		                    <option value="">Nivel de Interés</option>
		                    <option value="Alto">Alto</option>
		                    <option value="Medio">Medio</option>
		                    <option value="Bajo">Bajo</option>
	                  	</select>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<select name="mensaje" id="mensaje" required="" class="form-control input-lg" tabindex="12">
		                    <option value="">Mensaje</option>
		                    <option value="Envíar portafolio por correo">Envíar portafolio por correo</option>
		                    <option value="Envìar cotización por correo">Envìar cotización por correo</option>
		                    <option value="Nosotros le escribimos o lo llamamos luego">Nosotros le escribimos o lo llamamos luego</option>
		                    <option value="Volver cuando este el dueño">Volver cuando este el dueño</option>
		                    <option value="Muy costoso">Muy costoso</option>
		                    <option value="En el monento no me interesa">En el monento no me interesa</option>
		                    <option value="Llamar luego">Llamar luego</option>
	                  	</select>
					</div>					
					</div>
				</div>
			<div class="row">
				<div class="form-group">
					<select name="servicioInteres" id="servicioInteres" required="" class="form-control input-lg" tabindex="13">
	                    <option value="">Servicio de Interés</option>

	                    <optgroup label="Desarrollo Web">
		                    <option value="basico">Plan Básico</option>
		                    <option value="Intermedio">Plan Intermedio</option>
		                    <option value="Tienda">Plan Tienda Virtual</option>
		                    <option value="Medida">Plan A la medida</option>
		                    <option value="Micro Sitio">Micro Sitio</option>
		                </optgroup>

		                <option value="app">Aplicación Móbil</option>
		                <option value="Posicionamiento">Posicionamiento</option>
		                <option value="video">Vídeo</option>
		                <option value="animacion">Animación</option>
		                <option value="diseno">Diseño</option>
		                <option value="promocionales">Promocionales</option>
		                <option value="otro">Redes Sociales</option>
		                <option value="otro">Otro</option>
		                <option value="otro">Ninguno</option>
                  	</select>
				</div>
			</div>				
			<div class="row">
				<div class="form-group">
					<textarea name="observaciones" class="form-control input-lg" id="observaciones" placeholder="Observaciones" tabindex="14"></textarea>
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

</div>
<hr>
<script>
	$('form').preventDoubleSubmission();
</script>

<!-- Finaliza el render de la pagina -->
@stop