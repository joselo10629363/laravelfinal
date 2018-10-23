
<center><h1>CREAR CARRERA</h1>
<form action="/carrera" method="POST" >
	@csrf
	<div class="form-group">
		<label for="">NOMBRE CARRERA</label>
		<textarea name="nombre" class="form-control" placeholder="nombre de la carrera"></textarea>
	</div>
<div class="form-group">
		<label for="">Aula</label>
		<textarea name="aula" class="form-control"  placeholder="id aula"></textarea>
	</div>
	<br>
<button type="submit" class="btn btn-primary">Guardar Nuevo</button>
</center>
</form>