document.addEventListener("DOMContentLoaded", () => {
    const carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    const verCarritoBotones = document.querySelectorAll(".verCarritoBoton");
    const listaCarrito = document.getElementById("listaCarrito");
    const totalCarrito = document.getElementById("totalCarrito");
  
    window.agregarAlCarrito = function(nombre, precio) {
        carrito.push({ nombre, precio });
        alert(`${nombre} ha sido añadido al carrito`);
        localStorage.setItem("carrito", JSON.stringify(carrito));
        actualizarCarrito();
    };
  
    function eliminarDelCarrito(index) {
        carrito.splice(index, 1);
        localStorage.setItem("carrito", JSON.stringify(carrito));
        actualizarCarrito();
    }
  
    function actualizarCarrito() {
        if (listaCarrito) {
            listaCarrito.innerHTML = "";
            let total = 0;
            carrito.forEach((item, index) => {
                const li = document.createElement("li");
                const botonEliminar = document.createElement("button");
                botonEliminar.textContent = "Eliminar";
                botonEliminar.addEventListener("click", () => {
                    eliminarDelCarrito(index);
                });
                li.textContent = `${item.nombre} - $${item.precio} mxn`;
                li.appendChild(botonEliminar);
                listaCarrito.appendChild(li);
                total += item.precio;
            });
            totalCarrito.textContent = total;
        }
    }
  
    if (verCarritoBotones) {
        verCarritoBotones.forEach(boton => {
            boton.addEventListener("click", () => {
                window.location.href = "carrito.html";
            });
        });
    }
  
    actualizarCarrito();
  });
  