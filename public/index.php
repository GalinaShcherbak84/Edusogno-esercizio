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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>
</head>
<body >
    <main class="uk-grid-small uk-child-width-expand@s" uk-grid>
        <!-- info utente -->
        <section class="uk-padding uk-background-muted uk-width-1-2@s">
            <form ID= "Clie" name = "Clie"  method="post" action="utente.php">
                <fieldset class="uk-fieldset">
                    <legend class="uk-legend">Dati utente</legend>
                    <!-- nome -->
                    <div class="uk-margin">
                        <label for="name" class="form-label">Nome*</label> 
                        <input class="uk-input" type="text" id="name" name="name" placeholder="Paolo">
                    </div>
                    <!-- cognome -->
                    <div class="uk-margin">
                        <label for="last_name" class="form-label">Cognome*</label> 
                        <input class="uk-input" type="text" id="last_name" name="last_name" placeholder="Rossi">
                    </div>
                    <!--  mail -->
                    <div class="uk-margin">
                        <label for="mail" class="form-label">Email*</label> 
                        <input class="uk-input" type="email" id="mail" name="mail" placeholder="paolo_rossi@gmail.com">
                    </div>
                    <!--  submit -->
                    <button type="submit" class='uk-margin uk-button uk-button-primary'>SUBMIT</button>
                </fieldset>
            </form>
        </section>

        <!-- info evento -->
        <section class="uk-padding uk-background-muted uk-width-1-2@s">
            <form ID= "Event" name = "Event"  method="post" action="evento.php">
                <fieldset class="uk-fieldset">
                    <legend class="uk-legend">Dati evento</legend>
                    <!-- nome evento -->
                    <div class="uk-margin">
                        <label for="name_event" class="form-label">Nome Evento*</label> 
                        <input class="uk-input" type="text" id="name_event" name="name_event" placeholder="Mostra dei fiori">
                    </div>
                    <!-- descrizione evento -->
                    <div class="uk-margin">
                        <label for="description" class="form-label">Descrizione evento*</label> 
                        <textarea name="description" id="description" class="uk-textarea" rows="5" placeholder="Tante varietà dei fiori" rows="10"></textarea>
                        <!-- <input type="textarea" id="description" name="description" placeholder="Tante varietà dei fiori"> -->
                    </div>
                    <!-- data evento -->
                    <div class="uk-margin">
                        <label for="date" class="form-label">Data evento*</label> 
                        <input class="uk-input" type="date" id="date" name="date">
                    </div>
                    <!--  ora evento -->
                    <div class="uk-margin">
                        <label for="time" class="form-label">Ora evento*</label> 
                        <input class="uk-input" type="time" id="time" name="time" >
                    </div>
                    <!-- submit -->
                    <button type="submit" class='uk-button uk-button-primary uk-margin'>SUBMIT</button>
                </fieldset>
            </form>
        </section>
    </main>
</body>
</html>