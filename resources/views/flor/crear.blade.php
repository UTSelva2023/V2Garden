
	<div class="row form-group">
		<div class="col-md-12">
			<label for="nombre">Nombre</label>
				<input type="text" class="form-control"  name="nombre"  required> 
		</div>
	</div>

	<div class="row form-group">
	    <div class="col-md-12">
			<label for="descripcion">Descripcion</label>
				<textarea type="text" class="form-control"  name="descripcion"   required></textarea>
		</div>
	</div>
    <div class="row form-group">
		<div class="col-md-12">
			<label for="imagen">imagen</label>
				<input type="file" class="form-control"  name="imagen" id="imagen" accept="image/*" onchange="mostrarImagen()">
					<img id="vista-previa" src="images/">
		</div>
	</div>
											
									
	<div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

						