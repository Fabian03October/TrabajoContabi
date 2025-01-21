@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Asignar Obligaciones a la Actividad</h3>
    </div>
    <div class="section-body">
        <form action="{{ route('actividades.asignarObligaciones', $actividade->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="actividad" style="font-weight: bold;">Actividad:</label>
                <input type="text" value="{{ $actividade->nombre }}" class="form-control" disabled>
            </div>

            <div class="form-group">
                <label for="obligaciones" style="font-weight: bold;">Obligaciones:</label>
                <div>
                    @foreach($obligaciones as $obligacion)
                    <div class="form-check">
                        <input
                            type="checkbox"
                            name="obligacion_id[]"
                            value="{{ $obligacion->id }}"
                            id="obligacion_{{ $obligacion->id }}"
                            class="form-check-input"
                            @if(in_array($obligacion->id, $obligacionesAsociadas)) checked @endif>
                        <label class="form-check-label" for="obligacion_{{ $obligacion->id }}">
                            {{ $obligacion->nombre }}
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('actividades.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</section>
@endsection
