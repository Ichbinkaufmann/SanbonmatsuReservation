<?php 

session_start();
require_once ('component.php');
require_once ('db_config.php');
$database = new getDB("sanbonmatsu_reservation", "item");


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/small icon.png" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="effect.css">

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="bootsrap-datepicker\css\bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="bootsrap-datepicker\css\bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="bootsrap-datepicker\css\bootstrap-datepicker3.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <title>Hiking - Sanbonmatsu Chaya</title>
</head>
<div class="container">
    <div class="mb-3">
        <select id="hikingcategory" class="form-select" aria-label="Default select example">
            <option value="">Chose what hiking type do you want</option>
            <option value="1">Personal</option>
            <option value="2">Business</option>
            <option value="3">Student</option>
        </select>
    </div>
    <div class="mb-3">
        <form method="POST" action="">
            <input type="file" name="picItem">
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>

    </div>
</div>
<script>
// Hiking Form
const personalForm = document.getElementById("hikingpersonal");
const businessForm = document.getElementById("hikingbusiness");
const studentForm = document.getElementById("hikingstudent");


document.getElementById("hikingcategory").onchange = function() {
    if (this.value == "1") {
        personalForm.classList.remove("d-none");
        businessForm.classList.add("d-none");
        studentForm.classList.add("d-none");
    } else if (this.value == "2") {
        businessForm.classList.remove("d-none");
        personalForm.classList.add("d-none");
        studentForm.classList.add("d-none");
    } else if (this.value == "3") {
        studentForm.classList.remove("d-none");
        personalForm.classList.add("d-none");
        businessForm.classList.add("d-none");
    } else {
        personalForm.classList.add("d-none");
        businessForm.classList.add("d-none");
        studentForm.classList.add("d-none");
    }
};

// date picker
$('#datepicker').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'dd-mm-yyyy',
    todayHighlight: true,
    minDate: new Date(new Date().setDate(new Date().getDate() + 2)),
    maxDate: new Date(new Date().setDate(new Date().getDate() + 14))

}).val();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>
<script src="bootsrap-datepicker\js\bootstrap-datepicker.js" type="text/javascript"></script>
<script src="bootsrap-datepicker\js\bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="bootsrap-datepicker\js\jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="scrollIt.js" type="text/javascript"></script>
<script src="script.js"></script>