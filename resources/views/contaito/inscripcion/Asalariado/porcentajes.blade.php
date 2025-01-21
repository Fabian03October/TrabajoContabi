<style>
    .divider {
        border: 0;
        height: 0.5px;
        background: #dfdede;
        margin: 10px 0;
    }

    .instructions {
        font-family: Arial, sans-serif;
        font-size: 16px;
        color: #333;
    }

    .table-container {
        margin-top: 20px;
    }

    .continue-btn {
        margin-top: 20px;
        text-align: right; /* Alinea el botón a la derecha */
    }
</style>

@extends('layouts.app2')

@section('content')
<section class="section">
    <div class="section-header">
        <h5 class="page__heading" style="color:black">Actividades economicas</h5>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5>2.- Indica cómo realizas tus actividades y el porcentaje de ingresos que percibes por cada una.</h5>
                        <h5>Actividades seleccionadas</h5>
                        {{-- <p class="instructions">
                            Instrucciones: Da clic en el recuadro de la respuesta de tu elección, después da clic en el botón Aceptar para que se muestre la siguiente pregunta. En caso de que no haya más preguntas da clic en el botón Continuar.
                        </p> --}}
                        <h6>Indica cómo realizas tus actividades y el porcentaje de ingresos que percibes por cada una.</h6>
                        <hr class="divider">
                        <form action="{{ route('inscripcion.procesarAsalariado') }}" method="POST">
                            @csrf
                            <div class="table-container">
                                <table class="table table-bordered" style="border: 2px solid #dcdcdc; border-collapse: collapse;">
                                    <caption style="caption-side: top; font-weight: bold; font-size: 18px; border: 1px solid #dcdcdc; padding: 5px;">
                                        Prestas servicios profesionales de manera independiente
                                    </caption>
                                    <thead style="border: 2px solid #dcdcdc;">
                                        <tr>
                                            <th style="border: 1px solid #dcdcdc;">Descripción</th>
                                            <th style="border: 1px solid #dcdcdc;">Forma en que realizas tu actividad económica</th>
                                            <th style="border: 1px solid #dcdcdc;">Porcentaje</th>
                                            <th style="border: 1px solid #dcdcdc;">Borrar</th>
                                        </tr>
                                    </thead>
                                    <tbody id="actividad-table-body">
                                        @foreach ($actividades as $actividad)
                                            <tr id="actividad-{{ $actividad->id }}">
                                                <td style="border: 1px solid #dcdcdc;">
                                                    {{ $actividad->nombre }}
                                                    <input type="hidden" name="actividad_id[]" value="{{ $actividad->id }}">
                                                </td>
                                                <td style="border: 1px solid #dcdcdc;">
                                                    <select class="form-select" name="forma_actividad[]">
                                                        <option value="">Selecciona opción</option>
                                                        <option value="individual">Individual</option>
                                                        <option value="sociedad">Sociedad</option>
                                                    </select>
                                                </td>
                                                <td style="border: 1px solid #dcdcdc;">
                                                    <input type="number" class="form-control porcentaje-input" name="porcentaje[]" min="0" max="100" value="0">
                                                </td>
                                                <td style="border: 1px solid #dcdcdc;">
                                                    <button type="button" class="btn btn-danger btn-sm delete-row">
                                                        <i class="fa fa-trash"></i> Borrar
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" class="text-end" style="border: 1px solid #dcdcdc;">Total:</td>
                                            <td colspan="2" style="border: 1px solid #dcdcdc;">
                                                <input type="text" class="form-control" readonly value="0%" id="totalPorcentaje">
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="continue-btn">
                                <button type="submit" class="btn btn-primary" id="continueButton" style="display: none;">Continuar</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tableBody = document.getElementById("actividad-table-body");
        const totalPorcentajeInput = document.getElementById("totalPorcentaje");

        // Función para calcular el total
        function calcularTotal() {
            let total = 0;
            const porcentajeInputs = tableBody.querySelectorAll(".porcentaje-input");
            porcentajeInputs.forEach(input => {
                const value = parseFloat(input.value) || 0; // Manejar valores no numéricos
                total += value;
            });
            totalPorcentajeInput.value = total + "%";
        }

        const porcentajeInputs = tableBody.querySelectorAll(".porcentaje-input");
        if (porcentajeInputs.length === 1) {
            porcentajeInputs[0].value = 100;
            calcularTotal(); // Actualizar el total
        }

        // Escucha los cambios en los inputs de porcentaje
        tableBody.addEventListener("input", function (event) {
            if (event.target.classList.contains("porcentaje-input")) {
                calcularTotal();
            }
        });

        // Escucha el clic en el botón de borrar
        tableBody.addEventListener("click", function (event) {
            if (event.target.closest(".delete-row")) {
                const row = event.target.closest("tr"); // Obtiene la fila más cercana
                row.remove();
                calcularTotal(); // Recalcula el total después de eliminar
            }
        });

            // Asignar 100% al único input si solo hay una actividad
        
        document.addEventListener("DOMContentLoaded", function() {
    // Detecta el evento de clic en el botón "Borrar"
    const deleteButtons = document.querySelectorAll('.delete-row');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Obtén la fila de la tabla que contiene el botón
            const row = this.closest('tr');
            // Oculta la fila (puedes también eliminarla si lo prefieres)
            row.style.display = 'none';

            // Marca la fila como eliminada agregando un atributo a la fila
            row.setAttribute('data-deleted', 'true');
        });
    });
});
    });

    document.addEventListener('DOMContentLoaded', function () {
        const tableBody = document.getElementById('actividad-table-body');
        const continueButton = document.getElementById('continueButton');

        // Función para contar <td> en la tabla y mostrar/ocultar el botón
        function updateButtonVisibility() {
            const rows = tableBody.querySelectorAll('tr');
            let cellCount = 0;

            rows.forEach(row => {
                cellCount += row.querySelectorAll('td').length;
            });

            // Mostrar el botón si el conteo de celdas es mayor a 1
            continueButton.style.display = cellCount > 0 ? 'block' : 'none';
        }

        // Inicializar visibilidad del botón
        updateButtonVisibility();

        // Escuchar eventos para eliminar filas y actualizar el botón
        tableBody.addEventListener('click', function (e) {
            if (e.target.classList.contains('delete-row')) {
                const row = e.target.closest('tr');
                row.remove();
                updateButtonVisibility();
            }
        });
    });
</script>
