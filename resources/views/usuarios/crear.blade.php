@extends('layouts.app')
@section('content')
    <div class="card card-primary">
        <div class="card-header"><h4>Alta de Usuarios</h4></div>

        <div class="card-body pt-1">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>¡Revise los campos!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('usuarios.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- Nombre -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nombre:</label><span class="text-danger">*</span>
                            <input id="name" type="text"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name" placeholder="Ingrese el nombre completo" value="{{ old('name') }}"
                                   required autofocus>
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Apellido Paterno -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido_p">Apellido Paterno:</label><span class="text-danger">*</span>
                            <input id="apellido_p" type="text"
                                   class="form-control{{ $errors->has('apellido_p') ? ' is-invalid' : '' }}"
                                   name="apellido_p" placeholder="Ingrese el apellido paterno" value="{{ old('apellido_p') }}"
                                   required>
                            @if ($errors->has('apellido_p'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('apellido_p') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Apellido Materno -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido_m">Apellido Materno:</label>
                            <input id="apellido_m" type="text"
                                   class="form-control{{ $errors->has('apellido_m') ? ' is-invalid' : '' }}"
                                   name="apellido_m" placeholder="Ingrese el apellido materno" value="{{ old('apellido_m') }}">
                            @if ($errors->has('apellido_m'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('apellido_m') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- CURP -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="curp">CURP:</label>
                            <input id="curp" type="text"
                                   class="form-control{{ $errors->has('curp') ? ' is-invalid' : '' }}"
                                   name="curp" placeholder="Ingrese CURP" value="{{ old('curp') }}">
                            @if ($errors->has('curp'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('curp') }}
                                </div>
                            @endif
                        </div>
                    </div>

                                        <!-- Fecha de Nacimiento -->
                                        @php
    $today = (new \DateTime())->format('Y-m-d');
@endphp

<div class="col-md-6">
    <div class="form-group">
        <label for="FechaNac" style="color: black; font-weight: bold;">Fecha de nacimiento:</label>
        <input id="FechaNac" type="date"
            class="form-control{{ $errors->has('FechaNac') ? ' is-invalid' : '' }}"
            name="FechaNac" max="{{ $today }}"
            tabindex="4" placeholder="Ingrese Fecha de nacimiento" value="{{ old('FechaNac', $user->FechaNac ?? '') }}">
        <div class="invalid-feedback">
            {{ $errors->first('FechaNac') }}
        </div>
    </div>
</div>


<!-- Sexo -->
<div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="Sexo" style="color: black; font-weight: bold;">Sexo: <span class="text-danger">*</span></label>
                            <select id="Sexo" name="Sexo" class="form-control custom-select" required>
                                <option value="">Selecciona el sexo</option>
                                <option value="masculino" {{ old('Sexo') == 'masculino' ? 'selected' : '' }}>Masculino</option>
                                <option value="femenino" {{ old('Sexo') == 'femenino' ? 'selected' : '' }}>Femenino</option>
                                <option value="otro" {{ old('Sexo') == 'otro' ? 'selected' : '' }}>Otro</option>
                            </select>
                        </div>
                    </div>



<!-- Nacionalidad -->
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="Nacionalidad" style="color: black; font-weight: bold;">Nacionalidad:</label>
                            <select id="Nacionalidad" name="Nacionalidad" class="form-control">
                                <option value="">Selecciona una nacionalidad</option>
                                <option value="Mexicana" {{ old('Nacionalidad') == 'Mexicana' ? 'selected' : '' }}>Mexicana</option>
                                <option value="Estadounidense" {{ old('Nacionalidad') == 'Estadounidense' ? 'selected' : '' }}>Estadounidense</option>
                                <option value="Canadiense" {{ old('Nacionalidad') == 'Canadiense' ? 'selected' : '' }}>Canadiense</option>
                                <option value="Otro" {{ old('Nacionalidad') == 'Otro' ? 'selected' : '' }}>Otro</option>
                            </select>
                        </div>
                    </div>

<!-- Fecha de Inicio -->
@php
    $today = (new \DateTime())->format('Y-m-d');
@endphp
<div class="col-md-6">
    <div class="form-group">
        <label for="FechaIniOP">Fecha de Inicio de Operaciones:</label>
        <input id="FechaIniOP" type="date"
            class="form-control{{ $errors->has('FechaIniOP') ? ' is-invalid' : '' }}"
            name="FechaIniOP" max="{{ $today }}"
            value="{{ old('FechaIniOP') }}">
        @if ($errors->has('FechaIniOP'))
            <div class="invalid-feedback">
                {{ $errors->first('FechaIniOP') }}
            </div>
        @endif
    </div>
</div>

<!-- Fecha del última cambio de estado -->

@php
    $today = (new \DateTime())->format('Y-m-d');
@endphp
<div class="col-md-6">
    <div class="form-group">
        <label for="fechaUltiCamEst">Fecha del última cambio de estado:</label>
        <input id="fechaUltiCamEst" type="date"
            class="form-control{{ $errors->has('fechaUltiCamEst') ? ' is-invalid' : '' }}"
            name="fechaUltiCamEst" max="{{ $today }}"
            value="{{ old('fechaUltiCamEst') }}">
        @if ($errors->has('fechaUltiCamEst'))
            <div class="invalid-feedback">
                {{ $errors->first('fechaUltiCamEst') }}
            </div>
        @endif
    </div>
</div>

<!-- Nombre Comercial-->
<div class="col-md-6">
    <div class="form-group">
        <label for="NombreComercial">Nombre Comercial:</label>
        <input id="NombreComercial" type="text"
               class="form-control{{ $errors->has('NombreComercial') ? ' is-invalid' : '' }}"
               name="NombreComercial" placeholder="Ingrese el Nombre Comercial" value="{{ old('NombreComercial') }}">
        @if ($errors->has('NombreComercial'))
            <div class="invalid-feedback">
                {{ $errors->first('NombreComercial') }}
            </div>
        @endif
    </div>
</div>


                    <!-- Email -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Correo electrónico:</label><span class="text-danger">*</span>
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email" placeholder="Ingrese correo electrónico" value="{{ old('email') }}"
                                   required>
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
    <div class="form-group">
        <label for="password">Contraseña:</label><span class="text-danger">*</span>
        <input id="password" type="password"
               class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}"
               placeholder="Ingrese contraseña" name="password" required>
        @if ($errors->has('password'))
            <div class="invalid-feedback">
                {{ $errors->first('password') }}
            </div>
        @endif
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="password_confirmation">Confirmar contraseña:</label><span class="text-danger">*</span>
        <input id="password_confirmation" type="password" placeholder="Confirme la contraseña"
               class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid': '' }}"
               name="password_confirmation" required>
        @if ($errors->has('password_confirmation'))
            <div class="invalid-feedback">
                {{ $errors->first('password_confirmation') }}
            </div>
        @endif
    </div>
</div>


                    <!-- Roles -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="roles">Roles:</label><span class="text-danger">*</span>
                            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
                            @if ($errors->has('roles'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('roles') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Botones -->
                    <div class="col-md-12 mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Guardar
                            </button>
                            <a href="/usuarios" class="btn btn-warning btn-lg btn-block">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
