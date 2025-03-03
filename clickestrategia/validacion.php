<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pruebaFormulario";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$sequence_id = $_POST['sequence_id'];

$razon_social = $_POST['razon_social'];

$nombre_comercial = $_POST['nombre_comercial'];

$sector = $_POST['sector'];

$actividad_2 = $_POST['actividad_2'];

$actividad = $_POST['actividad'];

$cif = $_POST['cif'];

$direccion_del_negocio = $_POST['direccion_del_negocio'];

$codigo_postal = $_POST['codigo_postal'];

$localidad = $_POST['localidad'];

$municipio = $_POST['municipio'];

$sitio_web_del_negocio = $_POST['sitio_web_del_negocio'];

$fax_del_negocio = $_POST['fax_del_negocio'];

$numero_telefonico_del_negocio = $_POST['numero_telefonico_del_negocio'];

$descripcion_corta_del_negocio = $_POST['descripcion_corta_del_negocio'];

$fecha_fundacion_empresa = $_POST['fecha_fundacion_empresa'];

$correo_electronico_de_contacto_del_negocio = $_POST['correo_electronico_de_contacto_del_negocio'];

$poligono_industrial = $_POST['poligono_industrial'];

$numero_de_trabajadores = $_POST['municnumero_de_trabajadoresipio'];

$exporta = $_POST['exporta'];

$que_productos_exporta = $_POST['que_productos_exporta'];

$estado_de_la_sociedad = $_POST['estado_de_la_sociedad'];

$resultado_2024 = $_POST['resultado_2024'];

$facturacion_2024 = $_POST['facturacion_2024'];

$capital_social = $_POST['capital_social'];

$terms_and_conditions_acceptance_date = $_POST['terms_and_conditions_acceptance_date'];

// Aquí irían más variables si tienes más campos en tu formulario

// Preparar la consulta de actualización
$sql = "UPDATE pruebaInterna SET
        razon_social='$razon_social',
        nombre_comercial='$nombre_comercial',
        sector='$sector',
        actividad_2='$actividad_2',
        actividad='$actividad',
        cif='$cif',
        direccion_del_negocio='$direccion_del_negocio',
        codigo_postal='$codigo_postal',
        localidad='$localidad',
        municipio='$municipio',
        sitio_web_del_negocio=$sitio_web_del_negocio,
        fax_del_negocio=$fax_del_negocio,
        numero_telefonico_del_negocio=$numero_telefonico_del_negocio,
        descripcion_corta_del_negocio=$descripcion_corta_del_negocio,
        fecha_fundacion_empresa=$fecha_fundacion_empresa,
        correo_electronico_de_contacto_del_negocio='$correo_electronico_de_contacto_del_negocio',
        poligono_industrial=$poligono_industrial,
        municnumero_de_trabajadoresipio,
        exporta=$exporta,
        que_productos_exporta=$que_productos_exporta,
        estado_de_la_sociedad=$estado_de_la_sociedad,
        resultado_2024=$resultado_2024,
        facturacion_2024=$facturacion_2024,
        capital_social=$capital_social,
        terms_and_conditions_acceptance_date=$terms_and_conditions_acceptance_date
        WHERE sequence_id='$sequence_id'";
        
if ($conn->query($sql) === TRUE) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al actualizar los datos: " . $conn->error;
}

$conn->close();
?>
