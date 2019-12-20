<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reiter</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="display-1">Aufgabenplaner</h1>
    </div>

    <div  class="row">
        <?php include ('navigation.php'); ?>

        <div  class="col">

            <div class="form-group">
                <label for="inputReiter">Bezeichnung des Reiters:</label>
                <input type="text" class="form-control" id="inputReiter" placeholder="Reiter">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Beschreibung:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Beschreibung" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Zugehöriges Projekt:</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>ToDo-Liste</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Speichern</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </div>
</div>
</body>
</html>