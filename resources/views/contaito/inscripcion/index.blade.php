@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading" style="color:black">Inscripción al régimen</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <form id="form-regimen" method="POST" action="{{ route('verificar.codigo') }}">
                            @csrf
                            <div class="form-group required">
                                <label for="tipo_persona" style="color:black">Selecciona el tipo de persona:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="persona_fisica" name="tipo_persona" value="fisica" required>
                                    <label class="form-check-label" for="persona_fisica">Persona Física</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="persona_moral" name="tipo_persona" value="moral" required>
                                    <label class="form-check-label" for="persona_moral">Persona Moral</label>
                                </div>
                                <div id="radioError" class="text-danger" style="display: none;">Por favor, seleccione una opción.</div>
                            </div>

                            <!-- Mostrar el CAPTCHA -->
                            <div class="form-group">
                                <label for="captcha">Introduzca el texto de la imagen:</label>
                                <div class="captcha mb-2">
                                    <img src="{{ captcha_src() }}" alt="captcha" class="captcha-img" id="captcha_image" style="width: 40%; height: 25%;">
                                    <button type="button" class="btn btn-outline-secondary btn-refresh" onclick="refreshCaptcha()">
                                        &#x21bb;
                                    </button>
                                </div>
                                <input type="text" id="captcha" name="captcha" class="form-control" placeholder="Ingrese el código" required>
                                @error('captcha')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Continuar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function refreshCaptcha() {
        // Actualiza la imagen del CAPTCHA
        $('#captcha_image').attr('src', '{{ captcha_src() }}' + '?' + Math.random());
    }

    $(document).ready(function() {
        $('input[type="radio"]').on('change', function() {
            $('input[type="radio"]').not(this).prop('checked', false);
        });
    });
</script>

@section('scripts')
@if(session('success'))
    <script>
        Swal.fire({
            title: "Felicidades!",
            text: "{{ Session::get('success') }}",
            icon: "success",
            confirmButtonColor: 'rgb(11, 75, 146)'  // Cambiado aquí
        });
    </script>
    @endif
@endsection
