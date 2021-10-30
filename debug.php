<html>
<head>
    <meta charset="UTF-8">
    <title>Ejemplo Select provincias Españolas.</title>
    <script src="https://cdn.jsdelivr.net/npm/pselect.js@4.0.1/dist/pselect.min.js" ></script>
</head>

<body>
<h2>Seleccione provincia</h2>
<!-- Select de provincias -->
<select id="ps-prov"></select>
<!-- Select de municipios -->
<select id="ps-mun"></select>
</body>

<script>
    // Crear el selector pasandole los elementos del dom.
    var prov = document.getElementById('ps-prov');
    var mun = document.getElementById('ps-mun');
    new Pselect().create(prov, mun);
</script>
</html>
