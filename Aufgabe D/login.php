<?php
include ('header.php');
?>
<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="display-1">Aufgabenplaner</h1>
    </div>

    <div  class="container">
        <div  class="col">
            <div class="form-group">
                <label for="inputEmail">E-Mail-Adresse:</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="E-Mail-Adresse eingeben">
            </div>
            <div class="form-group">
                <label for="inputPasswort">Passwort:</label>
                <input type="password" class="form-control" id="inputPasswort" placeholder="Passwort">
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        AGBs und Datenschutzbedingung akzeptieren
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Einloggen</button>
        </div>
        <div class="col">
            <p>Noch nicht registirert?<a href="aufgabe.php" > Registrierung</a></p>
            <p>Da der Login Vorgang technisch noch nicht realisiert wurde:<a href="index.php?page=2" > Überspringen</a></p>
        </div>
    </div>
</div>
<?php
include ('footer.php');
?>