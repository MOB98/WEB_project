<?php

$conn = new mysqli('localhost', 'root', '', 'clinic');

if($conn->connect_error){
    echo"error ";
}
else{
    if (isset($_GET["name"]) && isset($_GET["id"])&&isset($_GET["cost"])) {
        $namee = $_GET["name"];
        $idd = $_GET["id"];
        $costt = $_GET["cost"];




        $strqry = "INSERT INTO create_bill VALUES ('".$namee."','".$idd."','".$costt."')";


        if ($conn->query($strqry) === TRUE) {
            ?>
            <script type="text/javascript">

                window.location.href="doc.html";

            </script>
            <?php








        } else {
            ?>
            <script type="text/javascript">
              alert("please insert valid information")
                window.location.href="inde.html";

            </script>
            <?php

    }
    /*  }//else {
      //   echo '<h1> its null </h1>';
    // }
 //}
 else{echo'<h1>not set</h1>';}

}*/}}
?>
