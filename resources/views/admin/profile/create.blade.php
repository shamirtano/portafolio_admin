@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Crear Perfil</h1>
    <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-md-6 mb-3">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
            </div>            
            <div class="form-group col-md-3 mb-3">
                <label for="phone">Teléfono</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
            </div>        
            <div class="form-group col-md-3 mb-3">
                <label for="mobile">Celular</label>
                <input type="text" name="mobile" id="mobile" class="form-control" value="{{ old('mobile') }}">
            </div>                       
            <div class="form-group col-md-4 mb-3">
                <label for="github">Github</label>
                <input type="text" name="github" id="github" class="form-control" value="{{ old('github') }}">
            </div>
            <div class="form-group col-md-4 mb-3">
                <label for="linkedin">LinkedIn</label>
                <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ old('linkedin') }}">
            </div>
            <div class="form-group col-md-4 mb-3">
                <label for="website">Sitio web</label>
                <input type="text" name="website" id="website" class="form-control" value="{{ old('website') }}">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="address">Dirección</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
            </div>        
            <div class="form-group col-md-12 mb-3">
                <label for="bio">Biografía (Bio)</label>
                <textarea name="bio" id="bio" class="form-control">{{ old('bio') }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('profile.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection