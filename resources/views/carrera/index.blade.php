
<h1>CREAR CARRERA</h1>
<form action="/carreras" method="POST" role="form">
	{{csrf_field()}}
	<div class="form-group">
		<label for="">nombre></label>
		<textarea name="nombre" class="form-control" rows="9" placeholder="" nombre de la carrera></textarea>
	</div>
<div class="form-group">
		<label for="">Aula</label>
		<textarea name="aula" class="form-control" rows="9" placeholder=""id aula></textarea>
	</div>
</form>