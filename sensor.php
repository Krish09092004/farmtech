<? php
$con= mysqli_connect('localhost','root','','agroculture');
if(mysqli_connect_errno($con))
{
    echo 'Failed to connect';
}

$temperature = $_GET["temperature"];
$humidity = $_GET["humidity"];

$query = "INSERT INTO sensordata (temperature,humidity) VALUES ('$temperature','$humidity')";
$result = mysqli_connect($con,$query);

echo "Insertion success!!!";

?>