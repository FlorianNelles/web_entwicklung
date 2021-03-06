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
                <label for="inputAufgabe">Aufgabenbezeichnung:</label>
                <input type="text" class="form-control" id="inputAufgabe" placeholder="Aufgabe">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Beschreibung der Aufgabe:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Beschreibung" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="inputErstellungsdatum">Erstellungsdatum:</label>
                <input type="text" class="form-control" id="inputErstellungsdatum" placeholder="01.01.19">
            </div>
            <div class="form-group">
                <label for="inputFälligkeitsdatum">Fällig bis:</label>
                <input type="text" class="form-control" id="inputFälligkeitsdatum" placeholder="01.01.19">
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
            <div class="form-group">
                <label for="exampleFormControlSelect2">Zugehöriges Reiter:</label>
                <select class="form-control" id="exampleFormControlSelect2">
                    <option>ToDo</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Zugewiesen an:</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Mitbewohner 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Mitbewohner 2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                            <label class="form-check-label" for="gridRadios3">
                                Mitbewohner 3
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Speichern</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </div>
</div>
<?php
include ('footer.php');
?>