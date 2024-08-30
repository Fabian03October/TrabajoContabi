@extends('layouts.app')

@section('title', 'Crear usuario')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading" style="color:black;">Preinscribir nuevo Contribuyentes</h3>
        </div>
        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <!-- Nota al usuario final con color personalizado y auto-ocultamiento -->
                            <div class="alert alert-info" id="autoDismissAlert" role="alert" style="background-color: #487dd9; color: white;">
                                Por favor, rellena los campos para preinscribir al nuevo contribullente al RFC...
                            </div>
                            <p class="text-danger">Los campos con * son obligatorios</p>
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos!</strong>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            {!! Form::open(['route' => 'usuarios.store', 'method' => 'POST']) !!}
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label style="color: black; font-weight: bold;" for="name">Nombre <span class="text-danger">*</span></label>
                                            {!! Form::text('name', null, ['class' => 'form-control', 'pattern' => '[A-Za-záéíóúÁÉÍÓÚñÑ\s]+', 'title' => 'Debe contener solo letras y espacios']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label style="color: black; font-weight: bold;" for="name">Apellido paterno:  <span class="text-danger">*</span></label>
                                            {!! Form::text('apellido_p', null, ['class' => 'form-control', 'pattern' => '[A-Za-záéíóúÁÉÍÓÚñÑ\s]+', 'title' => 'Debe contener solo letras y espacios']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label style="color: black; font-weight: bold;" for="apellido_m">Apellido Materno:</label>
                                            {!! Form::text('apellido_m', null, [
                                                'class' => 'form-control',
                                                'pattern' => '[A-Za-záéíóúÁÉÍÓÚñÑ\s]*',
                                                'title' => 'Debe contener solo letras y espacios'
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label style="color: black; font-weight: bold;" for="curp">CURP: <span class="text-danger">*</span></label>
                                            {!! Form::text('curp', null, [
                                                'class' => 'form-control',
                                                'pattern' => '[A-Z]{4}[0-9]{6}[H|M][A-Z]{5}[0-9]{2}',
                                                'title' => 'El CURP debe estar en el formato correcto: 4 letras seguidas de 6 números, H o M, 5 letras, y 2 números',
                                                'required' => 'required'
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label style="color: black; font-weight: bold;" for="fecha_nacimiento">Fecha de Nacimiento: <span class="text-danger">*</span></label>
                                            {!! Form::date('fecha_nacimiento', null, [
                                                'class' => 'form-control',
                                                'max' => now()->format('Y-m-d'), // Opcional: para limitar la fecha al día de hoy o anterior
                                                'required' => 'required'
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label style="color: black; font-weight: bold;" for="sexo">Género: <span class="text-danger">*</span></label>
                                            {!! Form::select('sexo', [
                                                '' => 'Seleccione una opción',
                                                'Masculino' => 'Masculino',
                                                'Femenino' => 'Femenino',
                                                'Otro' => 'Otro'],
                                                null, [
                                                    'class' => 'form-control',
                                                    'required' => 'required'
                                                ])
                                            !!}
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    // Disable the default option after form load
                                                    let selectElement = document.querySelector('select[name="sexo"]');
                                                    if (selectElement) {
                                                        selectElement.options[0].disabled = true;
                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label style="color: black; font-weight: bold;" for="NombreComercial">Nombre Comercial <span class="text-danger">*</span></label>
                                            {!! Form::text('NombreComercial', null, [
                                                'class' => 'form-control',
                                                'pattern' => '[A-Za-záéíóúÁÉÍÓÚñÑ\s\'".]+',
                                                'title' => 'Debe contener solo letras, espacios, comillas simples, comillas dobles y puntos.'
                                            ]) !!}
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
                            <label for="localidad">localidad:</label>
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
                            <label for="municipio">municipio:</label>
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
                            <label for="entidad">entidad:</label>
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
                            <label for="entre_calle2">ENTRE CALLE:</label>
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


                    





                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label style="color: black; font-weight: bold;" for="email">Correo electrónico <span class="text-danger">*</span></label>
                                            {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
                                            <div id="emailFeedback" class="invalid-feedback">
                                                Introduce un correo electrónico válido.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label style="color: black; font-weight: bold;" for="password">Contraseña <span class="text-danger">*</span></label>
                                            {!! Form::password('password', ['class' => 'form-control', 'id' => 'password']) !!}
                                            <small id="passwordHelpBlock" class="form-text text-muted" style="color: red;">
                                                La contraseña debe contener al menos una mayúscula, una minúscula, un número y un carácter especial.
                                            </small>
                                            <div id="passwordStrength" class="progress mt-2" style="height: 10px; display: none;">
                                                <div id="passwordProgressBar" class="progress-bar" role="progressbar" style="width: 0%;"></div>
                                            </div>
                                            <div id="passwordFeedback" class="invalid-feedback">
                                                Debe cumplir con los requisitos de la contraseña.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label style="color: black; font-weight: bold;" for="confirm-password">Confirmar contraseña <span class="text-danger">*</span></label>
                                            {!! Form::password('confirm-password', ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label style="color: black; font-weight: bold;" for="roles">Roles <span class="required text-danger">*</span></label>
                                            {!! Form::select('roles[]', $roles, null, array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <a href="/usuarios-activos" class="btn btn-secondary" style="color: black; margin-right: 10px;" title="Regresar al inicio">
                                            <i class="fas fa-times"></i> Cancelar
                                        </a>
                                        <button type="submit" class="btn" title="Guardar nuevo usuario" style="background-color: rgb(11, 75, 146); color: white;">
                                            <i class="fas fa-check"></i> Guardar
                                        </button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#password').on('keyup', function() {
            var password = $(this).val();

            // Validar longitud mínima y caracteres especiales
            var minLength = 8; // Mínimo 8 caracteres
            var specialChars = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/; // Caracteres especiales

            var isValidLength = password.length >= minLength;
            var hasSpecialChars = specialChars.test(password);

            // Validar al menos una mayúscula, una minúscula y un número
            var hasUpperCase = /[A-Z]/.test(password);
            var hasLowerCase = /[a-z]/.test(password);
            var hasNumber = /\d/.test(password);

            // Calcular la fuerza de la contraseña
            var strength = 0;
            if (isValidLength) strength++;
            if (hasSpecialChars) strength++;
            if (hasUpperCase && hasLowerCase) strength++;
            if (hasNumber) strength++;

            // Mostrar barra de progreso y actualizar porcentaje
            $('#passwordStrength').show();
            $('#passwordProgressBar').css('width', (strength * 25) + '%');

            // Mostrar mensaje de feedback basado en la fuerza de la contraseña
            if (strength >= 3) {
                $('#passwordHelpBlock').css('color', 'black');
                $('#passwordFeedback').hide();
            } else {
                $('#passwordHelpBlock').css('color', 'red');
                $('#passwordFeedback').show();
            }
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            document.getElementById('autoDismissAlert').style.display = 'none';
        }, 4000); // La alerta desaparecerá después de 5 segundos
    });
</script>
