<?php
include ('header.php');
?>
<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="display-1">Aufgabenplaner</h1>
    </div>

    <div  class="row">
        <?php include ('navigation.php'); ?>

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