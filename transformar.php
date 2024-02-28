<?php
// Datos de ejemplo (simulando una consulta a una base de datos)
$polizas = array(
    array(
        "numero" => "99000000",
        "tomador" => "Manuel Gonzalez Sanchez",
        "asegurados" => array(
            array(
                "nombre" => "Carlos",
                "apellidos" => "Sanchez",
                "garantias" => array(
                    array("tipo" => "Accidentes", "capital" => 10000, "vigor" => "S"),
                    array("tipo" => "Dental", "capital" => 500, "vigor" => "S")
                )
            ),
            array(
                "nombre" => "Juan",
                "apellidos" => "López",
                "garantias" => array(
                    array("tipo" => "Vida", "capital" => 60000, "vigor" => "N")
                )
            )
        )
    ),
    array(
        "numero" => "99000001",
        "tomador" => "Pedro Martin Gomez",
        "asegurados" => array(
            array(
                "nombre" => "Pedro",
                "apellidos" => "Martin",
                "garantias" => array(
                    array("tipo" => "Vida", "capital" => 80000, "vigor" => "S")
                )
            )
        )
    ),
    array(
        "numero" => "99000002",
        "tomador" => "Alfredo Salas Perez",
        "asegurados" => array(
            array(
                "nombre" => "Lucas",
                "apellidos" => "Montero",
                "garantias" => array(
                    array("tipo" => "Vida", "capital" => 90000, "vigor" => "S")
                )
            ),
            array(
                "nombre" => "Carmen",
                "apellidos" => "Sanchez",
                "garantias" => array()
            ),
            array(
                "nombre" => "Maria",
                "apellidos" => "Fernandez",
                "garantias" => array(
                    array("tipo" => "Vida", "capital" => 90000, "vigor" => "S"),
                    array("tipo" => "Accidentes", "capital" => 4000, "vigor" => "N"),
                    array("tipo" => "Dental", "capital" => 300, "vigor" => "S")
                )
            )
        )
    )
);

// Transformar los datos a HTML
$html = '<table border="1">
            <tr>
                <th>Tipo de Seguro</th>
                <th>Nº de Póliza</th>
                <th>Capital</th>
                <th>Vigor</th>
            </tr>';

foreach ($polizas as $poliza) {
    foreach ($poliza['asegurados'] as $asegurado) {
        foreach ($asegurado['garantias'] as $garantia) {
            $html .= '<tr>';
            $html .= '<td>' . $garantia['tipo'] . '</td>';
            $html .= '<td>' . $poliza['numero'] . '</td>';
            $html .= '<td>' . $garantia['capital'] . '</td>';
            $html .= '<td>' . $garantia['vigor'] . '</td>';
            $html .= '</tr>';
        }
    }
}

$html .= '</table>';

// Imprimir el HTML generado
echo $html;
?>
