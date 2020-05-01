<?php

/*$user = $_post['tf_user'];
$pass = sha1($_post['tf_pass']);

if (isset($user) && isset($pass)) {

    if (user != null && pass != null) {
        /*$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "clinic";
*/

$id = $_POST['id'];
if(isset($_POST['id'])) {
    $conn = new mysqli('localhost', 'root', '', 'clinic');
    if ($conn->connect_error) echo 'no connection!';
    else {
        $strqry = "SELECT * FROM create_bill where id='$id'";
        $result = $conn->query($strqry);
        $row = $result->fetch_assoc();
        $cost=$row["cost"];
        $name1=$row["pname"];



        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Appointment</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!--===============================================================================================-->
            <link rel="icon" type="image/png" href="ContactFrom_v1/images/icons/favicon.ico"/>
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="ContactFrom_v1/vendor/bootstrap/css/bootstrap.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="ContactFrom_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="ContactFrom_v1/vendor/animate/animate.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="ContactFrom_v1/vendor/css-hamburgers/hamburgers.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="ContactFrom_v1/vendor/select2/select2.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="ContactFrom_v1/css/util.css">
            <link rel="stylesheet" type="text/css" href="ContactFrom_v1/css/main.css">
            <!--===============================================================================================-->
        </head>
        <body>


        <div class="contact1">
            <div class="container-contact1">
                <div class="contact1-pic js-tilt" data-tilt>
                    <img src="ContactFrom_v1/images/img-01.png" alt="IMG">
                </div>

                <form class="contact1-form validate-form" action="sec.php" method="post">
				<span class="contact1-form-title">
					Checking The Bill
				</span>

                    <div class="wrap-input1 validate-input" data-validate="Name is required">
                        <input class="input1" type="text" name="id" placeholder="Enter the patient ID">
                        <span class="shadow-input1"></span>
                    </div>


                    <div class="container-contact1-form-btn">
                        <button id="check" class="contact1-form-btn">
						<span>
						Check
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
                        </button>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Name is required">
                        <input class="input1" type="text" id="pname" name="pname" value="<?php echo $name1?>" placeholder="Patient Name">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input" data-validate="Name is required">
                        <input class="input1" type="text" value="<?php echo $cost?>" id="cost"  name="cost" placeholder="Total Cost ">
                        <span class="shadow-input1"></span>
                    </div>

                    <div >
                        <button id="cancel" >
						<span>
                            <a href="Secretary.html">cancel</a>
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>


        <!--===============================================================================================-->
        <script src="ContactFrom_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="ContactFrom_v1/vendor/bootstrap/js/popper.js"></script>
        <script src="ContactFrom_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="ContactFrom_v1/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="ContactFrom_v1/vendor/tilt/tilt.jquery.min.js"></script>
        <script>
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>

        <!--===============================================================================================-->
        <script src="ContactFrom_v1/js/main.js"></script>


        </body>
        </html>

        <?php


    }
}


?>