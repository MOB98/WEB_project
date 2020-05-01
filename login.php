
<?php

$conn = new mysqli('localhost', 'root', '', 'clinic');

if($conn->connect_error){
    echo"khjj";
}
else{
    if (isset($_REQUEST["tf_user"]) && isset($_REQUEST["tf_pass"])) {
        $user = $_REQUEST["tf_user"];
        $pass = sha1($_REQUEST["tf_pass"]);





        $strqry = "SELECT * FROM loginn WHERE  username = '$user' and password = '$pass' ";
        $result = $conn->query($strqry);

        if ($result->num_rows > 0) {
             if($user === 'bashar_jaber'){


            ?>
            <script type="text/javascript">

                window.location.href="doc.html";

            </script>

            <?php
                 }
                 else{
                     ?>
                         <script type="text/javascript">

                     window.location.href="Secretary.html";

            </script>

                 <?php
                 }
             }
        } else {
            echo '<h1>nooooo</h1>';
        }
    }
?>

