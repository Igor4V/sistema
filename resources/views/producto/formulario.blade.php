<a href="{{route("producto.index")}}"class="btn btn-primary">VOLVER</a>
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
    {{$error}}
    <br>
    @endforeach
</div>
@endif
<br>
<div class="form-group">
<label for="nombreP">NOMBRE PRODUCTO</label>
<input type="text" class="form-control" name="nombreP" id="nombreP" value="{{isset($producto->nombreP)?$producto->nombreP:' '}}">
</div>
<div class="form-group">
<label for="precioP">PRECIO</label>
<input type="text" class="form-control" name="precioP" id="precioP" value="{{isset($producto->precioP)?$producto->precioP:' '}}">
</div>
<div class="form-group">
<label for="cantidadP">CANTIDAD</label>
<input type="text" class="form-control" name="cantidadP" id="cantidadP" value="{{isset($producto->cantidadP)?$producto->cantidadP:' '}}">
</div>
<div class="form-group">
<label for="fotoP">FOTO</label>

@if (isset($producto->fotoP))
    <img class="img-thumbnail img-fluid" src="{{asset('storage'.'/'.$producto->fotoP)}}" alt="" width="100px" height="100px">    
@endif

<input type="file" class="form-control" name="fotoP" id="fotoP">

</div>
<input type="submit" class="btn btn-dark" value="REGISTRAR">
