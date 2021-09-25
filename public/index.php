<?php
    include __DIR__ . '/php/connect_db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- info utente -->
    <section>
        <h2>Dati utente</h2>
        <form ID= "Clie" name = "Clie"  method="post" action="utente.php">
            <!-- nome -->
            <div>
                <label for="name" class="form-label">Nome*</label> 
                <input type="text" id="name" name="name" placeholder="Paolo">
            </div>
            <!-- cognome -->
            <div>
                <label for="last_name" class="form-label">Cognome*</label> 
                <input type="text" id="last_name" name="last_name" placeholder="Rossi">
            </div>
           <!--  mail -->
            <div>
                <label for="mail" class="form-label">Email*</label> 
                <input type="email" id="mail" name="mail" placeholder="paolo_rossi@gmail.com">
            </div>
           <!--  submit -->
            <button type="submit" class='btn btn-primary'>SUBMIT</button>
        </form>
    </section>

    <!-- info evento -->
    <section>
        <h2>Dati evento</h2>
        <form ID= "Event" name = "Event"  method="post" action="evento.php">
            <!-- nome evento -->
            <div>
                <label for="name_event" class="form-label">Nome Evento*</label> 
                <input type="text" id="name_event" name="name_event" placeholder="Mostra dei fiori">
            </div>
            <!-- descrizione evento -->
            <div>
                <label for="description" class="form-label">Descrizione evento*</label> 
                <input type="text" id="description" name="description" placeholder="Tante varietà dei fiori">
            </div>
            <!-- data evento -->
            <div>
                <label for="date" class="form-label">Data evento*</label> 
                <input type="date" id="date" name="date">
            </div>
           <!--  ora evento -->
            <div>
                <label for="time" class="form-label">Ora evento*</label> 
                <input type="time" id="time" name="time" >
            </div>
            <!-- submit -->
            <button type="submit" class='btn btn-primary'>SUBMIT</button>
        </form>
    </section>
</body>
</html>