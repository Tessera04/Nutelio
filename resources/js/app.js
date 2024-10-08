import './bootstrap';

const cerrarButton = document.getElementById('cerrarButton');
const abrirButton = document.getElementById('abrirButton');
const aside = document.getElementById('aside');

// Función para abrir el aside
function abrirAside() {
    aside.classList.remove('hidden');          // Muestra el aside
    setTimeout(() => {
        aside.classList.remove('opacity-0');   // Aumenta la opacidad para mostrar el aside
        aside.classList.add('opacity-100');
    }, 10); // Timeout pequeño para que el cambio sea visible
}

// Función para cerrar el aside
function cerrarAside() {
    aside.classList.remove('opacity-100');      // Disminuye la opacidad
    aside.classList.add('opacity-0');         

    setTimeout(() => {
        aside.classList.add('hidden');         // Oculta el aside después de la transición
    }, 200); // La duración debe coincidir con la duración de la transición
}

// Asignamos los eventos de click a los botones
abrirButton.addEventListener('click', abrirAside);
cerrarButton.addEventListener('click', cerrarAside);

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

