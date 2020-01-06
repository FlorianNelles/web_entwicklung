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
            <div class="form-group">
                <label for="inputProjektname">Projektname:</label>
                <input type="text" class="form-control" id="inputProjektname" placeholder="Projekt">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Projektbeschreibung:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Beschreibung" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Speichern</button>
        </div>
    </div>
</div>
<?php
include ('footer.php');
?>