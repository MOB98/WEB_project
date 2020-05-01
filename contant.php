<?php

$conn = new mysqli('localhost', 'root', '', 'clinic');

if($conn->connect_error){
    echo"error ";
}
else{
    if (isset($_GET["nam"]) && isset($_GET["emal"])&&isset($_GET["masg"])) {
        $namee = $_GET["nam"];
        $idd = $_GET["emal"];
        $costt = $_GET["masg"];




        $strqry = "INSERT INTO contact VALUES ('".$namee."','".$idd."','".$costt."')";


        if ($conn->query($strqry) === TRUE) {
            ?>
            <script type="text/javascript">

                window.location.href="contact.html";

            </script>
            <?php






        } else {
            echo '<h1>nooooo</h1>';

        }
        /*  }//else {
          //   echo '<h1> its null </h1>';
        // }
     //}
     else{echo'<h1>not set</h1>';}

    }*/}}
?>

