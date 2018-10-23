<center><h1>CREAR aula</h1>
<form action="/aula" method="POST" >
	@csrf
	<div class="form-group">
		<label for="">Capacidad del aula</label>
		<textarea name="nombre" class="form-control" placeholder="Capacidad del aula"></textarea>
	</div>
<br>
<button type="submit" class="btn btn-primary">Guardar Nuevo</button>
</center>
</form>