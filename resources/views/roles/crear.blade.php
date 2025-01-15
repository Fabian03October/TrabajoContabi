@extends('layouts.app')
@section('title')
    Crear rol
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading"  style="color: black;">Crear Rol</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
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

                            {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nombre del Rol:</label> <span class="required text-danger">*</span>
                                        {!! Form::text('name', null, ['class' => 'form-control', 'pattern' => '[A-Za-záéíóúÁÉÍÓÚñÑ\s]+', 'title' => 'Debe contener solo letras y espacios']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="permissionsForRole">Permisos para este Rol: <span class="required text-danger">*</span></label>
                                        <br>
                                        <button style="color:black" type="button" class="btn btn-secondary btn-sm mb-3" id="select-all" title="Marcar todos los permisos">Seleccionar Todos</button>
                                        <button style="color:black" type="button" class="btn btn-secondary btn-sm mb-3" id="deselect-all" title="Desmarcar todos los permisos">Deseleccionar Todos</button>
                                        @php
                                            $permissionsCount = count($permission);
                                        @endphp
                                        @for ($i = 0; $i < $permissionsCount; $i += 4)
                                            <div class="row">
                                                @for ($j = $i; $j < min($i + 4, $permissionsCount); $j++)
                                                    <div class="col">
                                                        @if ($j < $permissionsCount)
                                                            <label style="color: black; font-weight: bold;">
                                                                {{ Form::checkbox('permission[]', $permission[$j]->id, false, ['class' => 'name']) }}
                                                                {{ ucfirst(strtolower($permission[$j]->name)) }}
                                                            </label>

                                                        @endif
                                                    </div>
                                                @endfor
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div style="text-align: center; margin-top: 20px;">
                                <a href="/roles" class="btn btn-secondary"style="color: black; margin-right: 10px;" title="Regresar al inicio">
                                    <i class="fas fa-times"></i> Cancelar
                                </a>
                                <button type="submit" class="btn" title="Guardar nuevo rol" style="background-color: rgb(11, 75, 146); color: white;">
                                    <i class="fas fa-check"></i> Guardar
                                </button>

                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const selectAllButton = document.getElementById('select-all');
                            const deselectAllButton = document.getElementById('deselect-all');
                            const checkboxes = document.querySelectorAll('.name');

                            selectAllButton.addEventListener('click', function() {
                                checkboxes.forEach(checkbox => {
                                    checkbox.checked = true;
                                });
                            });

                            deselectAllButton.addEventListener('click', function() {
                                checkboxes.forEach(checkbox => {
                                    checkbox.checked = false;
                                });
                            });
                        });
                    </script>

                </div>
            </div>
        </div>
    </section>
@endsection
