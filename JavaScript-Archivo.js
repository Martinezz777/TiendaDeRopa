document.addEventListener("DOMContentLoaded", () => {
  // Seleccionamos todos los botones de agregar al carrito
  const botonesAgregar = document.querySelectorAll('.info button');
  const listaCarrito = document.querySelector('#lista-carrito tbody');
  const vaciarCarritoBtn = document.querySelector('#vaciar-carrito');
  const notificacion = document.querySelector('#notificacion');
  let carrito = [];

  // Esta función maneja la adición de productos al carrito
  function agregarProductoAlCarrito(e) {
    // Extraemos el producto de la fila del botón de "Agregar al Carrito"
    const producto = e.target.closest('.items');
    
    // Capturamos el nombre y precio del producto
    const nombreProducto = producto.querySelector('h3').textContent;
    const precioProducto = producto.querySelector('p').textContent;
    
    // Capturamos la talla seleccionada
    let tallaProducto = '';
    const tallaSeleccionada = producto.querySelector('select');
    if (tallaSeleccionada) {
      tallaProducto = tallaSeleccionada.value;
    }

    // Si la talla no está seleccionada, mostramos un mensaje de error
    if (!tallaProducto) {
      mostrarNotificacion("Por favor, selecciona una talla");
      return; // Detenemos la ejecución si no hay talla seleccionada
    }

    // Creamos un objeto con la información del producto
    const productoInfo = {
      imagen: producto.querySelector('img').src,
      nombre: nombreProducto,
      precio: precioProducto,
      cantidad: 1,
      talla: tallaProducto
    };

    // Verificamos si el producto ya está en el carrito
    const productoExistente = carrito.find(item => 
      item.nombre === productoInfo.nombre && 
      item.talla === productoInfo.talla
    );

    if (productoExistente) {
      // Si ya existe, incrementamos la cantidad
      productoExistente.cantidad++;
    } else {
      // Si no existe, agregamos el producto al carrito
      carrito.push(productoInfo);
    }

    // Actualizamos la vista del carrito
    actualizarCarrito();

    // Mostramos la notificación de que el producto fue agregado
    mostrarNotificacion("¡Producto agregado al carrito!");
  }

  // Esta función actualiza la tabla del carrito con los productos actuales
  function actualizarCarrito() {
    // Limpiamos la tabla antes de agregar los productos
    listaCarrito.innerHTML = '';

    // Recorremos cada producto en el carrito y agregamos una fila a la tabla
    carrito.forEach((producto, index) => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td><img src="${producto.imagen}" width="40" height="40"></td>
        <td>${producto.nombre}</td>
        <td>${producto.precio}</td>
        <td style="text-align: center;">${producto.cantidad}</td>
        <td>${producto.talla || 'No seleccionada'}</td>
        <td><button class="eliminar" data-index="${index}">Eliminar</button></td>
      `;
      listaCarrito.appendChild(row);
    });
  }

  // Función para eliminar un producto del carrito
  function eliminarProducto(e) {
    if (e.target.classList.contains('eliminar')) {
      const index = e.target.getAttribute('data-index');
      carrito.splice(index, 1);
      actualizarCarrito();
      mostrarNotificacion("Producto eliminado del carrito");
    }
  }

  // Función para vaciar todo el carrito
  function vaciarCarrito() {
    carrito = [];
    actualizarCarrito();
    mostrarNotificacion("Carrito vaciado");
  }

  // Función para mostrar la notificación
  function mostrarNotificacion(mensaje) {
    notificacion.textContent = mensaje;
    notificacion.style.display = "block";
    notificacion.style.position = "fixed";
    notificacion.style.top = "10px";
    notificacion.style.right = "10px";
    notificacion.style.backgroundColor = "#28a745";
    notificacion.style.color = "white";
    notificacion.style.padding = "8px 12px";
    notificacion.style.borderRadius = "4px";
    notificacion.style.fontSize = "14px";
    notificacion.style.maxWidth = "200px";
    notificacion.style.textAlign = "center";

    // Ocultar la notificación después de 3 segundos
    setTimeout(() => {
      notificacion.style.display = "none";
    }, 3000);
  }

  // Agregamos eventos a cada botón de "Agregar al Carrito"
  botonesAgregar.forEach(button => {
    button.addEventListener('click', agregarProductoAlCarrito);
  });

  // Agregamos el evento para eliminar productos del carrito
  listaCarrito.addEventListener('click', eliminarProducto);

  // Agregamos el evento para vaciar el carrito
  vaciarCarritoBtn.addEventListener('click', vaciarCarrito);
});
