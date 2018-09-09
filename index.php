<?php include('main.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Class of Champions</title>
</head>

<body>
    
    <div id="container">
         <div id="logo">
        
        </div>

        <form id="submit_form" action="" method="POST">
            <fieldset>
                <legend align="center">Submit Facebook & Instagram Credentials
                    for Class of Champions Yearbook app</legend>
                <input id="regNumber" required type="text" name="regNumber" placeholder="Your School Registration Number"
                    autocomplete="on" autofocus />
                <br />
                <input id="fullName" required type="text" name="fullName" placeholder="Full-Name" autocomplete="on"
                    autofocus />
                <br />
                <input id="email" required type="email" name="email" autocomplete="on" placeholder="Email Address"
                    autofocus" />
                <br />
                <input id="phone" required type="text" name="phone" autocomplete="on" placeholder="Phone Number"
                    autofocus />
                <br />
                <input id="facebook" required type="text" name="facebook" autocomplete="on" placeholder="Your Facebook name"
                    autofocus />
                <br />
                <input id="instagram" required type="text" name="instagram" autocomplete="on" placeholder="Your Instagram name"
                    autofocus />
                <br>
            </fieldset>
            <input id="submit" type="submit" name="submit" value="Submit Information!" />
        </form>
        <p id="response"></p>
        <?php include('errors.php') ?>
    </div>
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>