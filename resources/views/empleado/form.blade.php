<h1>{{ $modo }} empleado</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif

<div class="form-group mb-3">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre')}}"
        id="Nombre">
</div>

<div class="form-group mb-3">
<label for="ApellidoMaterno">Apellido Paterno</label>
<input class="form-control" type="text" name="ApellidoPaterno"
    value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : old('ApellidoPaterno') }}" id="ApellidoPaterno">

</div>

<div class="form-group mb-3">
<label for="ApellidoMaterno">Apellido Materno</label>
<input class="form-control" type="text" name="ApellidoMaterno"
    value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : old('ApellidoMaterno') }}" id="ApellidoMaterno">
</div>

<div class="form-group mb-3">
<label for="Correo">Correo</label>
<input class="form-control" type="text" name="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : old('Correo') }}" id="Correo">

</div>

<div class="form-group mb-2">
<label for="Celular">Celular</label>
<input class="form-control" type="tel" name="Celular" value="{{ isset($empleado->Celular) ? $empleado->Celular : old('Celular') }}" name="Celular">

</div>

<div class="form-group mb-3">
<label class="mb-1" for="Foto">Foto</label>
<br>
@if (isset($empleado->Foto))
    <img class="img-thumbnail img-fluid" src="{{ asset('storage' . '/' . $empleado->Foto) }}" alt="" width="100">
@endif
<input class="form-control mt-2" type="file" name="Foto" value="" id="Foto">

</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">
<a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>

