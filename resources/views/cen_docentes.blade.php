<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulario Cen_Docentes</title>
</head>
<body>
<h1>Formulario Cen_Docentes</h1>
    <form method="POST" action="/form/guardar">
        <ul>
            
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            
        </ul>

        @csrf
        <div class="form-group">
            <label for="denominacion">{{__("messages.denominacion")}}</label>
            <input required type="text" name="denominacion" class="form-control" placeholder="Introduce denominacion" value="{{ old('denominacion')}}"><br>
            <p> {{ $errors->first('denominacion') }}</p>
        </div>
        <div class="form-group">
            <label for="codigo">{{__("messages.codigo")}}</label>
            <input required type="text" name="codigo" class="form-control" placeholder="Introduce codigo" value="{{ old('codigo')}}"><br>
        </div>
        <div class="form-group">
            <label for="CIF">{{__("messages.CIF")}}</label>
            <input required type="text" name="CIF" class="form-control" placeholder="Introduce CIF" value="{{ old('CIF')}}"><br>
        </div>
        <div class="form-group">
            <label for="titularidad">{{__("messages.titularidad")}}</label>
            <select required class="form-control" id="titularidad">
                <option>publica</option>
                <option>privado</option>
                <option>concertado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="dir_postal">{{__("messages.dir_postal")}}</label>
            <input required type="text" name="dir_postal" class="form-control" placeholder="Introduce dir_postal" value="{{ old('dir_postal')}}"><br>
        </div>            
        <div class="form-group">
            <label for="cp">{{__("messages.cp")}}</label>
            <input required type="number" name="cp" class="form-control" placeholder="Introduce Codigo Postal" value="{{ old('cp')}}"><br>
        </div> 
        <div class="form-group">
            <label for="director_nom">{{__("messages.director_nom")}}</label>
            <input required type="text" name="director_nom" class="form-control" placeholder="Introduce director_nom" value="{{ old('director_nom')}}"><br>
            <p> {{ $errors->first('director_nom') }}</p>
        </div>
        <div class="form-group">
            <label for="director_apel1">{{__("messages.director_apel1")}}</label>
            <input required type="text" name="director_apel1" class="form-control" placeholder="Introduce director_apel1" value="{{ old('director_apel1')}}"><br>
            <p> {{ $errors->first('director_apel1') }}</p>
        </div>
        <div class="form-group">
            <label for="director_apel2">{{__("messages.director_apel2")}}</label>
            <input required type="text" name="director_apel2" class="form-control" placeholder="Introduce director_apel2" value="{{ old('director_apel2')}}"><br>
            <p> {{ $errors->first('director_apel2') }}</p>
        </div>
        <div class="form-group">
            <label for="identificada">{{__("messages.identificada")}}</label>
            <input required type="text" name="identificada" class="form-control" placeholder="Introduce identificada" value="{{ old('identificada')}}"><br>
        </div>        
        <div class="form-group">
            <label for="tipo_identificada">{{__("messages.tipo_identificada")}}</label>
            <select required class="form-control" id="tipo_identificada">
                <option>NIF</option>
                <option>NIE</option>
                <option>Pasaporte</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>