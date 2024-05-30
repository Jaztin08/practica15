<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css_stem.css"/>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js_codigo.js"></script>
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
      
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: Cálculo de la velocidad orbital de la Tierra</h2>
        <p>Descripción:</p>
        <p>La órbita de la Tierra es circular, con un radio de 1.5x10^11 m. La masa de la Tierra es M y la constante gravitacional es G. <br>
        </p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="VelOrbital.jpg">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        Velocidad orbital = sqrt(G * M / r)
      </section>
      <section class="datos">
        <h2>Datos:</h2>
          M = 1.989 × 10^30 kg <br>
          G = 6.67430 × 10^-11 m^3 kg^-1 s^-2 <br>
          r = 1.496 × 10^11 m
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>La velocidad orbital de la Tierra es:<br>
        velocidad = sqrt(G * M / r) m/s <br>
        </p>
        <button onclick="calcula_velocidad();">Presiona para calcular</button>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 4.0 SciSoft 2024
    </footer>
  </section>
<?php
function calcula_velocidad() {
    $G = 6.67430e-11; // m^3 kg^-1 s^-2
    $M = 1.989e30; // kg
    $r = 1.496e11; // m
    $v = sqrt($G * $M / $r);
    return number_format($v, 2) . ' m/s';
}

$resultado = calcula_velocidad();
?>


</body>
</html>
