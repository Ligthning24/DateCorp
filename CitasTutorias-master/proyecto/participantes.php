<?php
    require_once 'php/guardian.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <title>Participantes</title>
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="css/participantes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>

    <?php include 'vistas/header.php' ?>
    <div class="table-widget">
        <table>
            <caption>
                Participantes
                <span class="table-row-count"></span>
            </caption>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Participante</th>
                    <th>Correo electronico</th>
                    
                </tr>
            </thead>
            <tbody id="team-member-rows">

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">
                        <ul class="pagination">

                        </ul>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <?php include 'vistas/footer.php' ?>
    <script src="js/participantes.js"></script>
</body>
</html>