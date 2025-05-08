// Configuración de la API
const API_KEY = '43db95931a5b41412ef23c9e52d9fe4a';
const CIUDAD = 'Medellin'; // Cambiar a ciudad de preferencia

// Función para obtener el clima
async function obtenerClima() {
    try {
        console.log('Intentando obtener el clima...');
        const url = `https://api.openweathermap.org/data/2.5/weather?q=${CIUDAD}&appid=${API_KEY}&units=metric&lang=es`;
        console.log('URL de la API:', url);
        
        const respuesta = await fetch(url);
        console.log('Respuesta recibida:', respuesta);
        
        const datos = await respuesta.json();
        console.log('Datos recibidos:', datos);
        
        if (datos.cod === 200) {
            mostrarClima(datos);
            sugerirPrendas(datos.main.temp);
        } else {
            console.error('Error en la API:', datos);
            mostrarError('No se pudo obtener la información del clima. Por favor, intenta más tarde.');
        }
    } catch (error) {
        console.error('Error al obtener el clima:', error);
        mostrarError('Error al conectar con el servicio de clima.');
    }
}

// Función para mostrar el clima en la página
function mostrarClima(datos) {
    const contenedorClima = document.getElementById('info-clima');
    if (!contenedorClima) {
        console.error('No se encontró el elemento info-clima');
        return;
    }

    const temperatura = Math.round(datos.main.temp);
    const descripcion = datos.weather[0].description;
    const icono = datos.weather[0].icon;

    contenedorClima.innerHTML = `
        <div class="clima-actual">
            <img src="http://openweathermap.org/img/wn/${icono}@2x.png" alt="Icono del clima">
            <div class="info-temperatura">
                <h3>${temperatura}°C</h3>
                <p>${descripcion}</p>
            </div>
        </div>
    `;
}

// Función para mostrar errores
function mostrarError(mensaje) {
    const contenedorClima = document.getElementById('info-clima');
    if (contenedorClima) {
        contenedorClima.innerHTML = `
            <div class="error-clima">
                <p>${mensaje}</p>
            </div>
        `;
    }
}

// Función para sugerir prendas según la temperatura
function sugerirPrendas(temperatura) {
    const sugerencias = document.getElementById('sugerencias-clima');
    if (!sugerencias) {
        console.error('No se encontró el elemento sugerencias-clima');
        return;
    }

    let mensaje = '';

    if (temperatura < 15) {
        mensaje = '¡Hace frío! Te recomendamos chaquetas y abrigos para mantenerte caliente. Perfecto para nuestra colección de invierno.';
    } else if (temperatura < 20) {
        mensaje = '¡Tiempo fresco! Ideal para usar camisetas con chaqueta ligera. Nuestras chaquetas ligeras son perfectas para este clima.';
    } else if (temperatura < 25) {
        mensaje = '¡Clima agradable! Perfecto para nuestras camisetas y pantalones de mezclilla. El clima ideal para lucir tu estilo urbano.';
    } else {
        mensaje = '¡Día caluroso! Nuestras camisetas frescas y pantalones ligeros son ideales para mantenerte cómodo.';
    }

    sugerencias.innerHTML = `<p>${mensaje}</p>`;
}

// Ejecutar cuando el documento esté listo
document.addEventListener('DOMContentLoaded', obtenerClima); 