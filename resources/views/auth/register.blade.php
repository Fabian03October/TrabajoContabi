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

                    <!-- Fecha nacimiento -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fecha_nacimiento" style="color: black; font-weight: bold;">Fecha de nacimiento:</label>
                            <input id="fecha_nacimiento" type="date"
                                class="form-control{{ $errors->has('fecha_nacimiento') ? ' is-invalid' : '' }}"
                                name="fecha_nacimiento" max="{{ $today }}"
                                tabindex="4" placeholder="Ingrese fecha de nacimiento" value="{{ old('fecha_nacimiento', $user->fecha_nacimiento ?? '') }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('fecha_nacimiento') }}
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
