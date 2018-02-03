CTYPE html>
<html lang="en">
<head><title>Certificate</title>
</head>

<body>
<img src = "./imgs/certificate.png" width="100%">
<?php //diploma_mill.php
//This Page receives the data from diploma_mill.html
//It will receive: person's name, course's name, the date of the class and submit in $_POST.

//Use variables to store the data submitted
$name = $_POST['name'];
$course = $_POST['course'];
$date = $_POST['date'];

//Print the certificate out on the screen.
//In fact, I guess it firstly print out as an HTML file.
print "<p style=\"color:red;font-size:56px;\" align=\"center\">
This certificate is awarded to<br><br><b><i>
 $name</i></b><br> <br>for successfully completing the<b>
 $course</b> course on $date</p><br>\n";




?>
</body>
</html>


