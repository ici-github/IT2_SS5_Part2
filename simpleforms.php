<html>
<head>
<title>A simple HTML form</title>
</head>
<body>
<form method="POST">
	<p><strong>Name:</strong><br/>
	<input type="text" name="user" required/></p>
	<p><strong>Message:</strong><br/>
	<textarea name="message" rows="5" cols="40" required></textarea></p>
	<p><input type="submit" name="send_message" value="send"/></p>
    <?php

        if(isset($_POST["send_message"])) {
            $user = $_POST['user'];
            $message = $_POST['message'];

            echo "Hello $user! <br> Your message is $message";
        }

        
    ?>
</form>
</body>
</html>
