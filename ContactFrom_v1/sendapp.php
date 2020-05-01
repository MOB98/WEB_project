<?php

$conn = new mysqli('localhost', 'root', '', 'clinic');

if($conn->connect_error){
    echo"khjj";
}
else{
    if (isset($_GET["nam"]) && isset($_GET["id"])&&isset($_GET["datee"])) {
        $namee = $_GET["nam"];
        $idd = $_GET["id"];
        $date = $_GET["datee"];
        $pn = $_GET["phonenumber"];



        $strqry = "INSERT INTO appointment VALUES ('".$namee."','".$idd."','".$pn."','".$date."')";


        if ($conn->query($strqry) === TRUE) {
            ?>


            <script type="text/javascript">
                alert("your booking is sent,please be in time");
                    window.location.href="../index.html";
                </script>
<?php
        } else {
            echo '<h1>nooooo</h1>';
        }
    }
    /*  }//else {
      //   echo '<h1> its null </h1>';
    // }
 //}
 else{echo'<h1>not set</h1>';}

}*/}
?>