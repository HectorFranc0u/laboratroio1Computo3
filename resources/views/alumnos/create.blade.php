Nuevo Registro de Alumno

<form action="{{ url('/') }}" method="POST">
    @csrf
    Nombre:
    <input type="text" name="nombre" value="{{ isset($alumnos->nombre)?$alumnos->nombre:'' }}" /><br />
    @error('nombre')
        <div class="error-message"> {{ $message }} </div> <br>
    @enderror
    
    Apellido:
    <input type="text" name="apellido" id="apellido" value="{{ isset($alumnos->apellido)?$alumnos->apellido:'' }}" /><br />
    @error('apellido')
        <div class="error-message"> {{ $message }} </div> <br>
    @enderror
    
    Asignatura:
    <input type="text" name="asignatura" id="asignatura" value="{{ isset($alumnos->asignatura)?$alumnos->asignatura:'' }}" /><br />
    @error('asignatura')
        <div class="error-message"> {{ $message }} </div> <br>
    @enderror
    
    Edad:
    <input type="number" name="edad" id="edad" value="{{ isset($alumnos->edad)?$alumnos->edad:'' }}" /><br />
    @error('edad')
        <div class="error-message"> {{ $message }} </div> <br>
    @enderror
    
    <button type="submit">Guardar</button>   
</form>