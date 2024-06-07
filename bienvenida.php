<?php

session_start();
if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
       alert("Por favor debes iniciar sesión");
       window.location = "index.php";
    </script>
    ';  
  }  else {session_destroy(); }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malvezi.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>MALVEZI</h1>
        <nav>
            <ul>
                <li><a href="bienvenida.php">Inicio</a></li>
                <li><a href="catalogo.html">Productos</a></li>
                <li><a href="carrito.html">Carrito</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="primer-section">
            <h2>Nuestra Historia</h2>
            <p>Somos MALVEZI, tu tienda de moda en línea. Nuestro objetivo es ofrecerte las últimas tendencias en moda a precios asequibles y con la mejor calidad.
               En MALVEZI, creemos que la moda es una forma de expresión personal y queremos ayudarte a expresar tu estilo único con nuestra amplia gama de productos.
               Descubre nuestra colección de ropa, accesorios y más, y haz una declaración de moda con MALVEZI.</p>
        </section>
        <section class="segundo-section">
            <h2>Nuestros Productos</h2>
            <p>Explora nuestra selección de productos de moda cuidadosamente seleccionados para ti. Desde elegantes prendas de vestir hasta accesorios imprescindibles, tenemos todo lo que necesitas para completar tu look.
            Con diseños modernos y de calidad, nuestras prendas te ayudarán a destacar en cualquier ocasión. Ya sea que busques un atuendo casual para el día a día o algo más sofisticado para una ocasión especial, MALVEZI tiene lo que necesitas.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 MALVEZI - Tu Tienda de Moda</p>
    </footer>

        <a href="php/cerrar_sesion.php">cerrar sesion </a>
    
</body>
</html>
