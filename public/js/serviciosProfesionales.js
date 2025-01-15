// Función para manejar el toggle de las actividades
document.addEventListener('DOMContentLoaded', function () {
    const toggleProfesionales = document.getElementById('toggle-profesionales');
    const checkboxContainer1 = document.getElementById('checkbox-container');
    const icon1 = document.getElementById('toggle-icon');

    const toggleEducativos = document.getElementById('toggle-educativos');
    const checkboxContainer2 = document.getElementById('checkbox-container2');
    const icon2 = document.getElementById('toggle-icon2');

    const toggleSalud = document.getElementById('toggle-salud');
    const checkboxContainer3 = document.getElementById('checkbox-container3');
    const icon3 = document.getElementById('toggle-icon3');

    const toggleConstruccion = document.getElementById('toggle-construccion');
    const checkboxContainer4 = document.getElementById('checkbox-container4');
    const icon4 = document.getElementById('toggle-icon4');

    const toggleTurismo = document.getElementById('toggle-turismo');
    const checkboxContainer5 = document.getElementById('checkbox-container5');
    const icon5 = document.getElementById('toggle-icon5');

    const toggleApoyo = document.getElementById('toggle-apoyo');
    const checkboxContainer6 = document.getElementById('checkbox-container6');
    const icon6 = document.getElementById('toggle-icon6');

    const toggleRecreativo = document.getElementById('toggle-recreativo');
    const checkboxContainer7 = document.getElementById('checkbox-container7');
    const icon7 = document.getElementById('toggle-icon7');

    const toggleagropecuarias = document.getElementById('toggle-agropecuarias');
    const checkboxContainer8 = document.getElementById('checkbox-container8');
    const icon8 = document.getElementById('toggle-icon8');

    const toggleInmuebles = document.getElementById('toggle-inmuebles');
    const checkboxContainer9 = document.getElementById('checkbox-container9');
    const icon9 = document.getElementById('toggle-icon9');

    const togglefinancieros = document.getElementById('toggle-financieros');
    const checkboxContainer10 = document.getElementById('checkbox-container10');
    const icon10 = document.getElementById('toggle-icon10');
    // Función para alternar el display y el icono
    function toggleVisibility(container, icon) {
        if (container.style.display === 'none') {
            container.style.display = 'block';
            icon.innerHTML = '➖'; // Cambiar a "menos"
        } else {
            container.style.display = 'none';
            icon.innerHTML = '➕'; // Cambiar a "más"
        }
    }

    // Agregar eventos de clic para toggles
    toggleProfesionales.addEventListener('click', function () {
        toggleVisibility(checkboxContainer1, icon1);
    });

    toggleEducativos.addEventListener('click', function () {
        toggleVisibility(checkboxContainer2, icon2);
    });

    toggleSalud.addEventListener('click', function () {
        toggleVisibility(checkboxContainer3, icon3);
    });

    toggleConstruccion.addEventListener('click', function () {
        toggleVisibility(checkboxContainer4, icon4);
    });

    toggleTurismo.addEventListener('click', function () {
        toggleVisibility(checkboxContainer5, icon5);
    });

    toggleApoyo.addEventListener('click', function () {
        toggleVisibility(checkboxContainer6, icon6);
    });

    toggleRecreativo.addEventListener('click', function () {
        toggleVisibility(checkboxContainer7, icon7);
    });

    toggleagropecuarias.addEventListener('click', function () {
        toggleVisibility(checkboxContainer8, icon8);
    });

    toggleInmuebles.addEventListener('click', function () {
        toggleVisibility(checkboxContainer9, icon9);
    });

    togglefinancieros.addEventListener('click', function () {
        toggleVisibility(checkboxContainer10, icon10);
    });
});
