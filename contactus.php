<?php
    if (isset($_POST['submit'])) 
    {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $message = $_POST['abcmessage'];

        $link = mysqli_connect("localhost", "root", "", "feedback");
        if ($link === false) {
            die("Could Not Connect" . mysqli_connect_error());
        }
        $sql = "INSERT INTO feedback_table(username,email,abcmessage) VALUES ('$name','$email','$message')";
        mysqli_query($link, $sql);  
        mysqli_close($link);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="style.css" />
        <title>Contact Us</title>
    </head>
    <body>
        <div class="container-div">
            <div class="info-div">
                <p class="contact-us-heading"><b>Give Us Your Feedback</b></p>
                <div class="address-info">
                    <img src="addressIMG.png" alt="address icon" />
                    <p><b>120/A Lane B, Area C, Block D, Dhaka 1204</b></p>
                    <img src="phoneIMG.png" alt="phone pic" />
                    <p><b>+880 171 11 11 111</b></p>
                    <img src="mail.png" alt="" />
                    <p><b>fourtwenty@yahoo.com</b></p>
                </div>
            </div>

            <div class="form-div">
                <form class="form" action="contactus.php" method="POST">
                    <div class="form-item">
                        <div><p>Name:</p></div>
                        <div>
                            <textarea
                                name="username"
                                id="username"
                                cols="60"
                                rows="1"
                            ></textarea>
                        </div>
                    </div>
                    <div class="form-item">
                        <div><p>Email ID:</p></div>
                        <div>
                            <textarea
                                name="email"
                                id="email"
                                cols="60"
                                rows="1"
                            ></textarea>
                        </div>
                    </div>
                    <div class="form-item">
                        <div><p>Feedback:</p></div>
                        <div>
                            <textarea
                                name="abcmessage"
                                id="abcmessage"
                                cols="60"
                                rows="7"
                            ></textarea>
                        </div>
                    </div>
                    <button
                        class="button"
                        type="submit"
                        name="submit"
                        value="submit"
                    >
                        Send
                    </button>
                </form>
            </div>
        </div>
    </body>
</html>
