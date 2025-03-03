<?php
// Obtener el sequence_id desde la URL
$sequence_id = isset($_GET['sequence_id']) ? $_GET['sequence_id'] : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos de la Empresa</title>
</head>
<body>
    <h1>Formulario de Actualización de Datos</h1>
    <p>Por favor, actualiza tus datos a continuación:</p>

    <form action="validacion.php" method="POST">
        <input type="hidden" name="sequence_id" value="<?php echo $sequence_id; ?>">

        <label for="razon_social">Razón Social:</label>
        <input type="text" id="razon_social" name="razon_social" required><br><br>

        <label for="nombre_comercial">Nombre Comercial:</label>
        <input type="text" id="nombre_comercial" name="nombre_comercial" required><br><br>

        <label for="sector">Sector:</label>
        <input type="text" id="sector" name="sector" required><br><br>

        <label for="actividad_2">Actividad 2:</label>
        <input type="text" id="actividad_2" name="actividad_2"><br><br>

        <label for="actividad">Actividad:</label>
        <input type="text" id="actividad" name="actividad"><br><br>

        <label for="cif">CIF:</label>
        <input type="text" id="cif" name="cif"><br><br>

        <label for="direccion_del_negocio">Dirección del negocio:</label>
        <input type="text" id="direccion_del_negocio" name="direccion_del_negocio"><br><br>

        <label for="codigo_postal">Código Postal:</label>
        <input type="text" id="codigo_postal" name="codigo_postal"><br><br>

        <label for="localidad">Localidad:</label>
        <input type="text" id="localidad" name="localidad"><br><br>

        <label for="municipio">Municipio:</label>
        <input type="text" id="municipio" name="municipio"><br><br>

        <label for="sitio_web_del_negocio">Sitio Web del negocio:</label>
        <input type="text" id="sitio_web_del_negocio" name="sitio_web_del_negocio"><br><br>

        <label for="fax_del_negocio">Fax:</label>
        <input type="text" id="fax_del_negocio" name="fax_del_negocio"><br><br>

        <label for="numero_telefonico_del_negocio">Numero de Teléfono:</label>
        <input type="phone" id="numero_telefonico_del_negocio" name="numero_telefonico_del_negocio"><br><br>

        <label for="descripcion_corta_del_negocio">Descripción corta del negocio:</label>
        <input type="text" id="descripcion_corta_del_negocio" name="descripcion_corta_del_negocio"><br><br>

        <label for="fecha_fundacion_empresa">Fecha de Fundación de la Empresa:</label>
        <input type="date" id="fecha_fundacion_empresa" name="fecha_fundacion_empresa"><br><br>

        <label for="correo_electronico_de_contacto_del_negocio">Correo Electrónico:</label>
        <input type="email" id="correo_electronico_de_contacto_del_negocio" name="correo_electronico_de_contacto_del_negocio" required><br><br>
        
        <label for="poligono_industrial">Poligono Industrial:</label>
        <input type="text" id="poligono_industrial" name="poligono_industrial"><br><br>

        <label for="facturacion_2024">Facturación 2024:</label>
        <input type="text" id="facturacion_2024" name="facturacion_2024"><br><br>
        
        <label for="resultado_2024">Resultado 2024:</label>
        <input type="text" id="resultado_2024" name="resultado_2024"><br><br>
        
        <label for="director_gerente">Director o Gerente:</label>
        <input type="text" id="director_gerente" name="director_gerente"><br><br>
        
        <!-- 
            CARGOS1,2,3,4,5.... 
        -->

        <label for="numero_de_trabajadores">Número de Trabajadores:</label>
        <input type="text" id="numero_de_trabajadores" name="numero_de_trabajadores"><br><br>

        <label for="exporta">Exporta:</label>
        <input type="text" id="exporta" name="exporta"><br><br>

        <label for="que_productos_exporta">que productos exporta:</label>
        <input type="text" id="que_productos_exporta" name="que_productos_exporta"><br><br>

        <label for="estado_de_la_sociedad">estado de la sociedad:</label>
        <input type="text" id="estado_de_la_sociedad" name="estado_de_la_sociedad"><br><br>
        
        <label for="capital_social">Capital Social:</label>
        <input type="text" id="capital_social" name="capital_social"><br><br>

        <label for="terms_and_conditions_acceptance_date">
        <input type="checkbox" id="terms_and_conditions_acceptance_date" name="terms_and_conditions_acceptance_date" required>
        Acepto recibir actividad comercial y comunicaciones promocionales.
        </label>

        <input type="submit" value="Actualizar Datos">
    </form>
</body>
</html>
<!--
'sequence_id ', V
'razon_social', V
'nombre_comercial', Vca
'sector', V
'actividad_2', V quitar
'actividad', V
'cif', V
'direccion_del_negocio', V
'codigo_postal ', V
'localidad', V
'municipio', V
'sitio_web_del_negocio', V
'fax_del_negocio ', V
'numero_telefonico_del_negocio', V
'descripcion_corta_del_negocio', V
'fecha_de_fundacion_de_la_empresa ', V
'correo_electronico_de_contacto_del_negocio', V
'poligono_industrial', V

DESCARTADAS *************
'facturacion_2004 ',
'facturacion_2005 ',
'facturacion_2006 ',
'facturacion_2007 ',
'facturacion_2008 ',
'facturacion_2009 ',
'facturacion_2010 ',
'facturacion_2011 ',
'facturacion_2012 ',
'facturacion_2013 ',
'facturacion_2014 ',
'facturacion_2015 ',
'facturacion_2016 ',
'facturacion_2017 ',
'resultado_2017 ',
'facturacion_2018 ',
'resultado_2018 ',
'facturacion_2019 ',
'resultado_2019 ',
'facturacion_2020 ',
'resultado_2020 ',
'facturacion_2021',
'resultado_2021 ',


'director_gerente ', V


DUDA ***************************** !!!!!
'cargo_1', V
'cargo_2', V
'cargo_3 ', V
'cargo_4 ', V solo 4
'cargo_5 ', V
'cargo_6 ', V
'cargo_7 ', V
'cargo_8 ', V
'cargo_9 ', V


'numero_de_trabajadores', V
'exporta ', V
'que_productos_exporta', V
'estado_de_la_sociedad ', V

DESCARTADAS *************
'sector_ordenar ',
'no_trabajadores_ordenar',
'ver_facturaciones_anteriores_a_2018',
'municipio_ordenar ',

'resultado_2024 ', V
'facturacion_2024 ', V

DESCARTADAS *************
'resultado_2022',
'facturacion_2023',
'facturacion_2022 ',
'facturacion_ordenar',
'resultado_2023',
'url_edicion_impresa',

'capital_social', V

DESCARTADAS *************
'username',
'fee_id ',

VOY POR AQUI*****
'terms_and_conditions_acceptance_date',

'expires_on ',

'created_date', V
'modified_date'] V
-->