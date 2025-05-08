document.addEventListener('DOMContentLoaded', function() {
    const botonSubir = document.getElementById('botonSubir');
    
    // Mostrar/ocultar botón según el scroll
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            botonSubir.classList.add('visible');
        } else {
            botonSubir.classList.remove('visible');
        }
    });
    
    // Función para subir suavemente
    botonSubir.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}); 