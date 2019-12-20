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

            <p class="text">Dies ist eine ToDo-Liste</p>

            <div class="row">
                <div class="col">
                    <div class="card-header">ToDo:</div>
                        <div class="list-group">
                            <div class="list-group-item">HTML Datein erstellen</div>
                            <div class="list-group-item">CSS Datei erstellen</div>
                        </div>
                </div>

                <div class="col">
                    <div class="card-header">Erledigt:</div>
                        <div class="list-group">
                            <div class="list-group-item">PC eingeschaltet</div>
                            <div class="list-group-item">Kaffe trinken</div>
                        </div>
                </div>

                <div class="col">
                    <div class="card-header">Verschoben:</div>
                        <div class="list-group">
                            <div class="list-group-item">Für die Uni lernen</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include ('footer.php');
?>