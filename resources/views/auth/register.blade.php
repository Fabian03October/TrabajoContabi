@extends('layouts.auth_app')
@section('title')
    Register
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header"><h4>Register</h4></div>

        <div class="card-body pt-1">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">Full Name:</label><span
                                    class="text-danger">*</span>
                            <input id="firstName" type="text"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name"
                                   tabindex="1" placeholder="Enter Full Name" value="{{ old('name') }}"
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
                                   tabindex="2" placeholder="Enter Apellido Paterno" value="{{ old('apellido_p') }}"
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
                                   tabindex="3" placeholder="Enter Apellido Materno" value="{{ old('apellido_m') }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('apellido_m') }}
                            </div>
                        </div>
                    </div>
                    <!-- CURP -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="curp">CURP:</label>
                            <input id="curp" type="text"
                                   class="form-control{{ $errors->has('curp') ? ' is-invalid' : '' }}"
                                   name="curp"
                                   tabindex="4" placeholder="Enter CURP" value="{{ old('curp') }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('curp') }}
                            </div>
                        </div>
                    </div>
                    @php
                        $today = (new \DateTime())->format('Y-m-d');
                    @endphp

                    <!-- Fecha de Nacimiento -->
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
<div class="col-md-6">
    <div class="form-group">
        <label for="FechaIniOP" style="color: black; font-weight: bold;">Fecha de Inicio de Operaciones:</label>
        <input id="FechaIniOP" type="date"
            class="form-control{{ $errors->has('FechaIniOP') ? ' is-invalid' : '' }}"
            name="FechaIniOP" max="{{ $today }}"
            tabindex="4" placeholder="Ingrese Fecha de Inicio de Operaciones" value="{{ old('FechaIniOP', $user->FechaIniOP ?? '') }}">
        <div class="invalid-feedback">
            {{ $errors->first('FechaIniOP') }}
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="fechaUltiCamEst" style="color: black; font-weight: bold;">Fecha del última cambio de estado:</label>
        <input id="fechaUltiCamEst" type="date"
            class="form-control{{ $errors->has('fechaUltiCamEst') ? ' is-invalid' : '' }}"
            name="fechaUltiCamEst" max="{{ $today }}"
            tabindex="4" placeholder="Ingrese Fecha del última cambio de estado<" value="{{ old('fechaUltiCamEst', $user->fechaUltiCamEst ?? '') }}">
        <div class="invalid-feedback">
            {{ $errors->first('fechaUltiCamEst') }}
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

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email:</label><span
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
                            <label for="password" class="control-label">Password
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
                                   class="control-label">Confirm Password:</label><span
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
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        Already have an account ? <a
                href="{{ route('login') }}">SignIn</a>
    </div>
@endsection
