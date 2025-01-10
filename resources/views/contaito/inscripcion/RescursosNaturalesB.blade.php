<style>
    .instructions {
        font-family: Arial, sans-serif;
        font-size: 16px;
        color: #333;
    }

    .activity-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        margin-top: 20px;
    }

    .activity-card {
        width: 200px;
        text-align: center;
        cursor: pointer;
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 10px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .activity-card:hover {
        transform: scale(1.05);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    .activity-card img {
        width: 100%;
        border-radius: 8px;
    }

    .activity-card h6 {
        margin-top: 10px;
        font-size: 14px;
        font-weight: bold;
        color: #333;
    }

    .continue-btn {
        margin-top: 30px;
        text-align: center;
    }
</style>

@extends('layouts.app2')

@section('content')
<section class="section">
    <div class="section-header">
        <h4 class="page__heading" style="color:black">Identifica tu actividad económica</h4>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5>1.- Ubica el grupo al que pertenece tu actividad</h5>
                        <p class="instructions">
                            Instrucciones: Da clic en la imagen para seleccionar el grupo. Puedes seleccionar más de uno. Pasa el apuntador del mouse sobre las imágenes para obtener más información.</p>
                        <H6>Tus ingresos exceden de $900,000.00 pesos anuales.</H6>
                        <div class="activity-container">
                            <!-- Ejemplo de actividad -->
                            <div class="activity-card">
                                    <label for="recursos_naturales">
                                        <img src="{{ asset('img/recursos_naturales.png') }}" alt="recursos naturales ">
                                        <h6>Recursos naturales<br><small>Persona física</small></h6>
                                        <input type="checkbox" id="recursos_naturales" name="activities[]" value="recursos_naturales">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="continue-btn">
                            <button type="button" class="btn btn-primary" onclick="submitSelection()">Continuar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    let selectedActivities = [];

    function selectActivity(activity) {
        if (!selectedActivities.includes(activity)) {
            selectedActivities.push(activity);
            alert(`Actividad seleccionada: ${activity}`);
        } else {
            alert(`Ya seleccionaste esta actividad: ${activity}`);
        }
    }

    function submitSelection() {
        // Aquí puedes enviar las actividades seleccionadas al servidor
        console.log(selectedActivities);
        // Por ejemplo, mediante un formulario oculto:
        // document.getElementById('hiddenForm').submit();
    }
</script>
@endsection
