<?php
// Cargar el XML
$xml = new DOMDocument();
$xml->load('datos.xml');

// Cargar la hoja de estilo XSL
$xsl = new DOMDocument();
$xsl->load('transformacion.xsl');

// Crear el procesador XSLT
$proc = new XSLTProcessor();
$proc->importStyleSheet($xsl);

// Aplicar la transformación XSLT al XML
echo $proc->transformToXML($xml);
?>
