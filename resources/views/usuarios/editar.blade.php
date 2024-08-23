@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading" style="color: black">Editar Contribuyente</h3>
        </div>
        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <label class="text-danger">Los campos con * son obligatorios</label>
                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            {!! Form::model($user, ['method' => 'PATCH','route' => ['usuarios.update', $user->id]]) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="name">Nombre <span class="required text-danger">*</span></label>
                                        {!! Form::text('name', null, [
                                            'class' => 'form-control',
                                            'pattern' => '[A-Za-záéíóúÁÉÍÓÚñÑ\s]+',
                                            'title' => 'Debe contener solo letras y espacios'
                                        ]) !!}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="name">Apellido Paterno <span class="required text-danger">*</span></label>
                                        {!! Form::text('apellido_p', null, [
                                            'class' => 'form-control',
                                            'pattern' => '[A-Za-záéíóúÁÉÍÓÚñÑ\s]+',
                                            'title' => 'Debe contener solo letras y espacios'
                                        ]) !!}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="apellido_m">Apellido Materno <span class="required text-danger">*</span></label>
                                        {!! Form::text('apellido_m', null, [
                                            'class' => 'form-control',
                                            'pattern' => '[A-Za-záéíóúÁÉÍÓÚñÑ\s]+',
                                            'title' => 'Debe contener solo letras y espacios'
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="curp">CURP <span class="required text-danger">*</span></label>
                                        {!! Form::text('curp', null, [
                                            'class' => 'form-control',
                                            'pattern' => '[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]{2}', // Corregido para HTML5
                                            'title' => 'Debe contener 18 caracteres en el formato válido: 4 letras seguidas de 6 dígitos, 1 letra de género (H/M), 5 letras y 2 caracteres finales',
                                            'maxlength' => 18,
                                            'required' => true,
                                            'placeholder' => 'Ingrese CURP'
                                        ]) !!}
                                        <div class="invalid-feedback">
                                            {{ $errors->first('curp') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="status" id="status" value="1" {{ $user->status ? 'checked' : '' }}>
                                            <label class="form-check-label" for="status">Activar contribuyente</label>
                                        </div>
                                    </div>
                                </div>

                                @php
                                    $today = (new \DateTime())->format('Y-m-d');
                                @endphp

                                <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;" for="FechaIniOP">Fecha de Inicio de Operaciones</label>
                                    <input id="FechaIniOP" type="date"
                                        class="form-control{{ $errors->has('FechaIniOP') ? ' is-invalid' : '' }}"
                                        name="FechaIniOP"
                                        value="{{ old('FechaIniOP', $user->FechaIniOP ?? '') }}"
                                        max="{{ $today }}">
                                    @if ($errors->has('FechaIniOP'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('FechaIniOP') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: black; font-weight: bold;" for="fechaUltiCamEst">Fecha del última cambio de estado</label>
                                    <input id="fechaUltiCamEst" type="date"
                                        class="form-control{{ $errors->has('fechaUltiCamEst') ? ' is-invalid' : '' }}"
                                        name="fechaUltiCamEst"
                                        value="{{ old('fechaUltiCamEst', $user->fechaUltiCamEst ?? '') }}"
                                        max="{{ $today }}">
                                    @if ($errors->has('fechaUltiCamEst'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('fechaUltiCamEst') }}
                                        </div>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="NombreComercial">Nombre comercial:<span class="required text-danger">*</span></label>
                                        {!! Form::text('NombreComercial', null, [
                                            'class' => 'form-control',
                                            'pattern' => '[A-Za-záéíóúÁÉÍÓÚñÑ\s]+',
                                            'title' => 'Debe contener solo letras y espacios'
                                        ]) !!}
                                    </div>
                                </div>

                                @php
                                    // Extrae los primeros 10 caracteres de la CURP, si existen
                                    $curp = old('curp', $user->curp ?? '');
                                    $curpPart = substr($curp, 0, 10);

                                    // Llama al método para generar una homoclave
                                    $homoclave = App\Http\Controllers\UsuarioController::homoclave();

                                    // Combina la parte del CURP con la homoclave
                                    $rfc = strtoupper($curpPart . $homoclave);
                                @endphp
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="rfc">RFC <span class="required text-danger">*</span></label>
                                        {!! Form::text('rfc', $user->rfc, [
                                            'class' => 'form-control',
                                            'pattern' => '[A-Z]{3,4}\d{6}[A-Z0-9]{3}',
                                            'title' => 'El RFC debe tener el formato válido, por ejemplo: ABC123456XYZ',
                                            'maxlength' => 13, // Ajusta a 14 si usas RFC con homoclave
                                            'required' => true
                                        ]) !!}
                                        <div class="invalid-feedback">
                                            {{ $errors->first('rfc') }}
                                        </div>
                                    </div>
                                </div>


{{--
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="curp">Rfc <span class="required text-danger">*</span></label>
                                        {!! Form::text('rfc', null, [
                                            'class' => 'form-control',
                                            'pattern' => '[A-Za-záéíóúÁÉÍÓÚñÑ\s]+',
                                            'title' => 'Debe contener solo letras y espacios'
                                        ]) !!}
                                    </div>
                                </div> --}}

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="email">Correo <span class="required text-danger">*</span></label>
                                        {!! Form::text('email', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="password">Contraseña <span class="required text-danger">*</span></label>
                                        {!! Form::password('password', array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="confirm-password">Confirmar contraseña <span class="required text-danger">*</span></label>
                                        {!! Form::password('confirm-password', array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color: black; font-weight: bold;" for="roles">Roles <span class="required text-danger">*</span></label>
                                        {!! Form::select('roles[]', $roles, $userRole, array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <a href="/usuarios-activos" class="btn btn-secondary" style="color: black; margin-right: 10px;" title="Regresar al inicio">
                                        <i class="fas fa-times"></i> Cancelar
                                    </a>
                                    <!-- Botón con clase personalizada -->
                                    <button type="submit" class="btn btn-primary"  title="Actualizar usuario">
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
