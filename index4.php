
<?php
//first class

if (isset($_POST["lessons"])){
$var=$_POST["lessons"];
}
else{
    $var=array("Tony","Steve","Jeff","Franklin");
// $var=array
// (
//     array("Volvo",22,18),
//     array("BMW",15,13),
//     array("Saab",5,2),
//     array("Land Rover",17,15),
// );
}



$var3=6;
$var2="<html>
<head> </head>
<body>
    <h1>Hello from arbazkhan Pathan</h1>
    <form action='http://localhost/lessons/index4.php' method = 'POST'>
    <input type='text' name='name'>Your Name</input><br />
    <b>What lessons do you want to learn?</b><br>
<select name='lessons[]' size='4' multiple>
    <option value='mysql'>MY SQL</option>
    <option value='web_dev'>Web Development</option>
    <option value='oracle'>ORACLE</option>
    <option value='javascript'>Javascript</option>
</select>    
    <input type='submit' value='Submit'>
    </form>    
    </body>
    </html>";  

// array_push($var, "Billy");
// array_pop($var);
// $var[2]="Arnold";

foreach($var as $index)
{
       // foreach($index as $value){
    echo $index." ";
//}
    echo "<br>";
}

//print_r($var);
echo $var2;


?>
