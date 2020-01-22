<?php
    ini_set ('display_errors', 1);
    ini_set ('desplay_startup_errors', 1);
    error_reporting (E_ALL);
    ?>
<!DOCTYPE html>
<!--Powered with Bootstrap-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Robert Platt Resume</title>
    <col span="2" class="Rhead"><col>
    <link rel="stylesheet" href="styles.css">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>
    .highlights{
        position: webkit-sticky;
        position: sticky;
        top: 0;
    }
    </style>
</head>
<body>



<div class="p-3 mb-2 bg-primary text-white">

        <!--Built using bootstrap, & font awesome-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Robert Platt</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="https://platt.zaberwolf.com/">Resume<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://platt.zaberwolf.com/Portfolio/index.php">Portfolio<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/RobertTPlatt">LinkedIn</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://platt.zaberwolf.com/form/index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contact
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://platt.zaberwolf.com/form/index.php">Contact Robbie</a>
                        <a class="dropdown-item" href="#"></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <br>
            <br>
            <h2 width=12%>Robert T. Platt</h2>
        <table>  
                <tr>
                        <th width=25%>
                            <div class="p-3 mb-2 bg-secondary text-white">

                                <link rel="stylesheet" href="https://www.linkedin.com/in/RobertTPlatt">
                                <a href="https://www.linkedin.com/in/RobertTPlatt">RobertTPlattLinkedIn</a>
                            </div>
                        </th>
                        <th width=30%>
                                <div class="p-3 mb-2 bg-secondary text-white">Phone number: 801-946-1453 Call/Text, Text preferred</div>
                                </th>
                        <th width=25%><div class="p-3 mb-2 bg-secondary text-white">Email: RobertPlatt28@gmail.com</div>
                        </th>
                    
                </tr>
        </table>
        <div class="col">
        <img src="resumephoto.jpg" width="15%" height="15%" style="float: left; margin-right: 10px"/>
        </div>
        <?php
        $Skill;
        $mySkills = array("Maintaining Records", "Detail Oriented", "HTML", "Research online", "Microsoft Suite", "Adaptable", "Problem Solving", "CSS", "Javascript", "Photoshop", "MySQL");
$a = 1;
        foreach ($mySkills as $value) {
            echo "Skill #$a - $value <br>";
            $a++;
        }
        ?>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
$to = $message = $headers = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameErr = "Where are you from? Most names around here have letters only.";
}
} //both are needed


if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address is well-formed
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
}
}
 
if (empty($_POST["website"])) {
$website = "";
} else {
$website = test_input($_POST["website"]);
// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
$websiteErr = "Invalid URL";
}
} //both are needed

if (empty($_POST["comment"])) {
$comment = "";
} else {
$comment = test_input($_POST["comment"]);
}

if (empty($_POST["gender"])) {
$genderErr = "Gender is required";
} else {
$gender = test_input($_POST["gender"]);
}
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<form action = "">
<h2>PHP Form Validation Example</h2>
<p><span class = "error">* required field </span></p>
<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
Name: <input type = "text" name = "name" value = "<?php echo $name;?>">
<span class="error">* <?php echo $nameErr; ?></span>
<br>
<br>
E-mail: <input type = "text" name = "email" value = "<?php echo $email; ?>">
<span class = "error">* <?php echo $emailErr; ?></span>
<br>
<br>
Website: <input type = "text" name = "website" value = "<?php echo $website; ?>">
<span class = "error"><?php echo $websiteErr; ?></span>
<br>
<br>
Comment: <textarea name = "comment" rows = "5" cols = "40"><?php echo $comment; ?></textarea>
<br>
<br>
Gender:
<input type="radio" name = "gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value = "female">Female
<input type="radio" name = "gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value = "male">Male
<input type="radio" name = "gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value = "other">Other
<span class="error">* <?php echo $genderErr; ?></span>
<br>
<br>
<input type = "submit" name = "submit" value = "Submit">
<input type = "reset" value = "Reset">
</form>



<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
if (isset($_POST["submit"])){
$to = " golemiam@gmail.com, robert.platt28@gmail.com ";
$headers .= "From: $email \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "Cc: golemiam@gmail.com \r\n";
$headers .= "Bcc: robert.platt28@gmail.com \r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$email_body = "You have received a new message from the $name.\n"."The individual is $gender.\n"."Their website is $website.\n"."They comment:\n $comment.";
mail($to, " Website Request ", $email_body, $headers);
echo "Thank you for contacting us. We will be in touch with you very soon.";
}
?>

</body>
</html>