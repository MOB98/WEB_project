<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
    .w3-sidebar {
        z-index: 3;
        width: 250px;
        top: 43px;
        bottom: 0;
        height: inherit;


    }

    body{

        background-image: url("img/im.jpg");
        background-repeat: no-repeat;

    }
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
        <a href="inde.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">create bill</a>
        <a href="show_appo.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">show Appointment</a>

        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
        <a href="doc.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">logout</a>
    </div>
</div>





<?php



@ $conn = new mysqli('localhost', 'root', '', 'clinic');
if ($conn->connect_error)
    echo 'no connection!';
else {
    $strqry = "SELECT * FROM contact ";
    $result=$conn->query($strqry);

    if ($result->num_rows > 0) {





        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Appointment</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        </head>
        <body>

        <div class="container">

            <h1>Comments</h1>
            <table class="table table-dark">
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['nam'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['msg'] . "</td>";

                    echo "</tr>";
                }
                ?>

            </table>
        </div>
        <button ><a href="doc.html">back</a></button>
        </body>
        </html>

        <?php
    } else {
        echo '<h1>no data</h1>';
    }

}


?>

