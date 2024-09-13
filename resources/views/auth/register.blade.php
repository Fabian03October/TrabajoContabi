@extends('layouts.auth_app')
@section('title')
    Register
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header"><h4>Preinscripción al RFC</h4></div>

        <div class="card-body pt-1">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">Nombres:</label><span
                                    class="text-danger">*</span>
                            <input id="firstName" type="text"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name"
                                   tabindex="1" placeholder="Ingresa nombres" value="{{ old('name') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        </div>
                    </div>
                    <!-- Apellido Paterno -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido_p">Apellido Paterno:</label><span class="text-danger">*</span>
                            <input id="apellido_p" type="text"
                                   class="form-control{{ $errors->has('apellido_p') ? ' is-invalid' : '' }}"
                                   name="apellido_p"
                                   tabindex="2" placeholder="Ingresa Apellido Paterno" value="{{ old('apellido_p') }}"
                                   required>
                            <div class="invalid-feedback">
                                {{ $errors->first('apellido_p') }}
                            </div>
                        </div>
                    </div>
                    <!-- Apellido Materno -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido_m">Apellido Materno:</label>
                            <input id="apellido_m" type="text"
                                   class="form-control{{ $errors->has('apellido_m') ? ' is-invalid' : '' }}"
                                   name="apellido_m"
                                   tabindex="3" placeholder="Ingresa Apellido Materno" value="{{ old('apellido_m') }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('apellido_m') }}
                            </div>
                        </div>
                    </div>
                    <!-- CURP -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="curp">CURP:</label><span class="text-danger">*</span>
                            <input id="curp" type="text"
                                   class="form-control{{ $errors->has('curp') ? ' is-invalid' : '' }}"
                                   name="curp"
                                   tabindex="4" placeholder="Ingresa CURP" value="{{ old('curp') }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('curp') }}
                            </div>
                        </div>
                    </div>
                    @php
                        $today = (new \DateTime())->format('Y-m-d');
                    @endphp

                    <!-- Fecha de Inicio -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fecha_nacimiento" style="color: black; font-weight: bold;">Fecha de nacimiento:</label> <span class="text-danger">*</span>
                            <input id="fecha_nacimiento" type="date"
                                class="form-control{{ $errors->has('fecha_nacimiento') ? ' is-invalid' : '' }}"
                                name="fecha_nacimiento" max="{{ $today }}"
                                tabindex="4" placeholder="Ingrese su fecha de nacimiento" value="{{ old('fecha_nacimiento', $user->fecha_nacimiento ?? '') }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('fecha_nacimiento') }}
                            </div>
                        </div>
                    </div>


                    <!-- Nombre Comercial -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="NombreComercial">Nombre comercial:</label>
                            <input id="NombreComercial" type="text"
                                   class="form-control{{ $errors->has('NombreComercial') ? ' is-invalid' : '' }}"
                                   name="NombreComercial"
                                   tabindex="3" placeholder="Ingrese el Nombre Comercial:" value="{{ old('NombreComercial') }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('NombreComercial') }}
                            </div>
                        </div>
                    </div>

                    {{-- sexo --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sexo">Género:</label>
                            <select id="sexo"
                                    class="form-control{{ $errors->has('sexo') ? ' is-invalid' : '' }}"
                                    name="sexo"
                                    tabindex="3">
                                <option value="" nulable="disabled">Seleccione una opción</option>
                                <option value="masculino" {{ old('sexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                <option value="femenino" {{ old('sexo') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                                <option value="otro" {{ old('sexo') == 'Otro' ? 'selected' : '' }}>Otro</option>
                            </select>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Disable the default option after form load
                                    let selectElement = document.querySelector('select[name="sexo"]');
                                    if (selectElement) {
                                        selectElement.options[0].disabled = true;
                                    }
                                });
                            </script>
                            <div class="invalid-feedback">
                                {{ $errors->first('sexo') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cp">Codigo postal:</label><span
                                    class="text-danger">*</span>
                            <input id="cp" type="text"
                                   class="form-control{{ $errors->has('cp') ? ' is-invalid' : '' }}"
                                   name="cp"
                                   tabindex="1" placeholder="Ingresa vialidad" value="{{ old('cp') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('cp') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tipo_vialidad">Tipo de la vialidad:</label>
                            <input id="tipo_vialidad" type="text"
                                   class="form-control{{ $errors->has('tipo_vialidad') ? ' is-invalid' : '' }}"
                                   name="tipo_vialidad"
                                   tabindex="1" placeholder="Ingresa vialidad" value="{{ old('tipo_vialidad') }}"
                                   autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('tipo_vialidad') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre_vialidad">Nombre de la vialidad:</label><span
                                    class="text-danger">*</span>
                            <input id="nombre_vialidad" type="text"
                                   class="form-control{{ $errors->has('nombre_vialidad') ? ' is-invalid' : '' }}"
                                   name="nombre_vialidad"
                                   tabindex="1" placeholder="Ingresa vialidad" value="{{ old('nombre_vialidad') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('nombre_vialidad') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="num_interior">Número interior:</label><span
                                    class="text-danger">*</span>
                            <input id="num_interior" type="text"
                                   class="form-control{{ $errors->has('num_interior') ? ' is-invalid' : '' }}"
                                   name="num_interior"
                                   tabindex="1" placeholder="Ingresa vialidad" value="{{ old('num_interior') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('num_interior') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="num_exterior">Número exterior:</label><span
                                    class="text-danger">*</span>
                            <input id="num_exterior" type="text"
                                   class="form-control{{ $errors->has('num_exterior') ? ' is-invalid' : '' }}"
                                   name="num_exterior"
                                   tabindex="1" placeholder="Ingresa vialidad" value="{{ old('num_exterior') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('num_exterior') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="colonia">Colonia:</label><span
                                    class="text-danger">*</span>
                            <input id="colonia" type="text"
                                   class="form-control{{ $errors->has('colonia') ? ' is-invalid' : '' }}"
                                   name="colonia"
                                   tabindex="1" placeholder="Ingresa vialidad" value="{{ old('colonia') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('colonia') }}
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="localidad">Localidad:</label><span
                            class="text-danger">*</span>
                            <input id="localidad" type="text"
                                   class="form-control{{ $errors->has('localidad') ? ' is-invalid' : '' }}"
                                   name="localidad"
                                   tabindex="1" placeholder="Ingresa localidad" value="{{ old('localidad') }}"
                                   autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('localidad') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="municipio">Municipio:</label><span
                            class="text-danger">*</span>
                            <input id="municipio" type="text"
                                   class="form-control{{ $errors->has('municipio') ? ' is-invalid' : '' }}"
                                   name="municipio"
                                   tabindex="1" placeholder="Ingresa municipio" value="{{ old('municipio') }}"
                                   autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('municipio') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="entidad">Entidad:</label><span
                            class="text-danger">*</span>
                            <input id="entidad" type="text"
                                   class="form-control{{ $errors->has('entidad') ? ' is-invalid' : '' }}"
                                   name="entidad"
                                   tabindex="1" placeholder="Ingresa entidad" value="{{ old('entidad') }}"
                                   autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('entidad') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="entre_calle1"> Entre calle:</label>
                            <input id="entre_calle1" type="text"
                                   class="form-control{{ $errors->has('entre_calle1') ? ' is-invalid' : '' }}"
                                   name="entre_calle1"
                                   tabindex="1" placeholder="Ingresa vialidad" value="{{ old('entre_calle1') }}"
                                   autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('entre_calle1') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="entre_calle2">Y calle:</label>
                            <input id="entre_calle2" type="text"
                                   class="form-control{{ $errors->has('entre_calle2') ? ' is-invalid' : '' }}"
                                   name="entre_calle2"
                                   tabindex="1" placeholder="Ingresa vialidad" value="{{ old('entre_calle2') }}"
                                   autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('tipo_vialidad') }}
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Correo:</label><span
                                    class="text-danger">*</span>
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   placeholder="Enter Email address" name="email" tabindex="1"
                                   value="{{ old('email') }}"
                                   required autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password" class="control-label">Contraseña
                                :</label><span
                                    class="text-danger">*</span>
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}"
                                   placeholder="Set account password" name="password" tabindex="2" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password_confirmation"
                                   class="control-label">Confirmar Contraseña:</label><span
                                    class="text-danger">*</span>
                            <input id="password_confirmation" type="password" placeholder="Confirm account password"
                                   class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid': '' }}"
                                   name="password_confirmation" tabindex="2">
                            <div class="invalid-feedback">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Preinscribirse
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        Usted ya es contribuyente ? <a
                href="{{ route('login') }}">Ingresar</a>
    </div>
@endsection
