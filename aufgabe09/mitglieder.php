<?php
include ('header.php');
?>
<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="display-1">Aufgabenplaner</h1>
    </div>

    <div  class="row">
        <div  class="col-2">
            <div class="list-group">
                <a href="login.php" class="list-group-item">Login</a>
                <a href="projekte.php" class="list-group-item">Projekte</a>
                <a href="augabe.php" class="list-group-item">aktuelles Projekt</a>
                <a href="reiter.php" class="list-group-item">Reiter</a>
                <a href="aufgaben.php" class="list-group-item">Aufgaben</a>
                <a href="mitglieder.php" class="list-group-item">Mitglieder</a>
            </div>
        </div>

        <div  class="col">
            <div class="form-group">
                <label for="inputUsername">Username:</label>
                <input type="text" class="form-control" id="inputUsername" placeholder="Username">
            </div>
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
                        Dem Projekt zugeordnet
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Speichern</button>
            <button type="reset" class="btn btn-secondary">Reset</button>

        </div>
    </div>
</div>
<?php
include ('footer.php');
?>