<?php
    require_once 'php/guardian.php';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calendario_maestro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/vistaalumno.css">
    <title>Calendario Vista_Profesor</title>
</head>
<body>
    <?php include 'vistas/header.php'?>
    <section class="layout">
        <div class="calendar">
            <dl class="calendar__info">
                <dt class="calendar__prev" id="prev-month">&#9664;</dt>
                <dt class="calendar__month" id="month"></dt>
                <dt class="calendar__year" id="year"></dt>
                <dt class="calendar__next" id="next-month">&#9654;</dt>
            </dl>
            <dl class="calendar__week">
                <dt class="calendar__day calendar__item">Lun</dt>
                <dt class="calendar__day calendar__item">Mar</dt>
                <dt class="calendar__day calendar__item">Mier</dt>
                <dt class="calendar__day calendar__item">Juev</dt>
                <dt class="calendar__day calendar__item">Vier</dt>
                <dt class="calendar__day calendar__item">Sab</dt>
                <dt class="calendar__day calendar__item">Dom</dt>
            </dl>
            <ul class="calendar__dates" id="dates"></ul>
        </div>
        <div class="agenda">
            <form id="agenda-form">
                <h2>Agenda de Evento</h2>
                <label for="evento">Evento:</label>
                <input type="text" id="evento" name="evento" required>
                <label for="fecha">Fecha de apertura:</label>
                <input type="date" id="fecha-apertura" name="fecha-apertura" required>
                <label for="fecha">Fecha de cierre:</label>
                <input type="date" id="fecha-cierre" name="fecha-cierre" required>
                <label for="materia">Materia:</label>
                <select name="materia" id="materia">
                    <option disabled selected value="Materia">Seleccione una materia</option>
                    <option value="Materia1">Arte</option>
                    <option value="Materia2">Seguridad Industrial</option>
                    
                </select>
                <label for="grupo">Grupo:</label>
                <select name="grupo" id="grupo">
                    <option value="Grupo A">Grupo A</option>
                    <option value="Grupo B">Grupo B</option>
                </select>
                <div>
                    <label for="desc">Descripción:</label>
                    <textarea name="desc" id="desc" placeholder="Describe la tarea"></textarea>
                </div>

                <div class="avatar">
                    <label for="avatar">&#x262d</label>
                    <input type="file" name="avatar" id="avatar">
                </div>
                <div class="archivo">
                    <button type="submit" class="btn-green">Guardar Evento</button>
                </div>
            </form>
        </div>
        
        
    </section>
    <div></div>
    <?php include 'vistas/footer.php'?>
    <script src="js/meses_maestro.js"></script>
</body>
</html>
