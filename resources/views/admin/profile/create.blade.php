@extends('layouts.admin')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">Crear Perfil</div>
            <div class="card-body">
                <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        {{-- dos secciones una a la izquierda donde irá la foto y el boton para cambiarla, y otra a la derecha con los datos del form --}}
                        <div class="col-md-3">
                            <div class="form-group text-center">
                                <img src="{{ isset($profile->avatar) ? asset('storage/' . $profile->avatar) : asset('assets/img/img-profile.png') }}"
                                    alt="avatar" class="img-thumbnail" width="100%">
                                <input type="file" name="avatar" id="avatar" class="form-control mt-2"
                                    accept="image/jpg, image/jpeg, image/png">
                            </div>
                        </div>
                        <div class="row col-md-9">
                            <div class="form-group col-sm-6 mb-3">
                                <label for="first_name">Nombre</label>
                                <input type="text" name="first_name" id="first_name" class="form-control"
                                    value="{{ old('first_name') }}">
                                @error('first_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6 mb-3">
                                <label for="last_name">Apellido</label>
                                <input type="text" name="last_name" id="last_name" class="form-control"
                                    value="{{ old('last_name') }}">
                                @error('last_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6 mb-3">
                                <label for="title">Título</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ old('title') }}">
                            </div>
                            <div class="form-group col-sm-6 mb-3">
                                <label for="last_job">Ultimo empleo</label>
                                <input type="text" name="last_job" id="last_job" class="form-control"
                                    value="{{ old('last_job') }}">
                            </div>
                            <div class="form-group col-sm-6 mb-3">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-sm-3 mb-3">
                                <label for="phone">Teléfono</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    value="{{ old('phone') }}">
                            </div>
                            <div class="form-group col-sm-3 mb-3">
                                <label for="mobile">Celular</label>
                                <input type="text" name="mobile" id="mobile" class="form-control"
                                    value="{{ old('mobile') }}">
                                @error('mobile')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-sm-4 mb-3">
                                <label for="birthday">Fecha de nacimiento</label>
                                <input type="date" name="birthday" id="birthday" class="form-control"
                                    value="{{ old('birthday') }}">
                                @error('birthday')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-sm-4 mb-3">
                                <label for="github">Github</label>
                                <input type="text" name="github" id="github" class="form-control"
                                    value="{{ old('github') }}">
                            </div>
                            <div class="form-group col-sm-4 mb-3">
                                <label for="linkedin">LinkedIn</label>
                                <input type="text" name="linkedin" id="linkedin" class="form-control"
                                    value="{{ old('linkedin') }}">
                            </div>
                            <div class="form-group col-sm-4 mb-3">
                                <label for="website">Sitio web</label>
                                <input type="text" name="website" id="website" class="form-control"
                                    value="{{ old('website') }}">
                            </div>
                            <div class="form-group col-sm-8 mb-3">
                                <label for="address">Dirección</label>
                                <input type="text" name="address" id="address" class="form-control"
                                    value="{{ old('address') }}">
                            </div>
                            <div class="form-group col-sm-12 mb-3">
                                <label for="bio">Biografía (Bio)</label>
                                <div id="bio" name="bio" style="height: 200px">
                                    {!! old('bio') !!}
                                </div>
                                @error('bio')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('profile.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var quill = new Quill('#bio', {
            theme: 'snow',
            placeholder: 'Escribe algo...',
            value: '{{ old('bio') }}',
            name: 'bio'
        });

        // form submit
        $(document).ready(function() {

            $('form').submit(function(e) {
                e.preventDefault();
                $(this).find("button[type='submit']").prop('disabled', true);
                // agregar el contenido de quill en la etiqueta <p> al form
                var bio = $('.ql-editor').html();
                $('form').append('<input type="hidden" name="bio" value="' + bio + '">');
                this.submit();
            });
        });

        document.getElementById('avatar').onchange = function(e) {
            let reader = new FileReader();
            reader.readAsDataURL(e.target.files[0]);
            reader.onload = function() {
                let preview = document.querySelector('.img-thumbnail');
                preview.src = reader.result;
            }
        }
    </script>
@endsection
