<!DOCTYPE html>
<html lang="en">
<head>
  <title>appointment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 </html>
 <?php
if(isset($_POST['name'])){
	$name=$_POST['name'];
}
if(isset($_POST['age'])){
	$age=$_POST['age'];

}
if(isset($_POST['mobno'])){
	$mn=$_POST['mobno'];
	//echo $mn;
}
if(isset($_POST['email'])){
	$email=$_POST['email'];
	//echo $email;
}
if(isset($_POST['soi'])){
	$soi=$_POST['soi'];
}
if(isset($_POST['mi'])){
	$mi=$_POST['mi'];
}
if(isset($_POST['time'])&&isset($_POST['date'])){
    echo 'yes';
	$st=$_POST['time'];
    $sd=$_POST['date'];
}
$BD=array("2016-05-10","2016-05-09","2016-05-08","2016-05-07","2016-05-06","2016-05-05","2016-05-04","2016-05-03","2016-05-02");
$BT=array("11:00","10:00","12:00","13:00","09:00","04:00","02:00",);
$a=1;
$b=1;
foreach ($BD as $d) {
	if($d!="$sd"){$a++;}
    else $a=1;
}
foreach ($BT as $t) {
	if($t!="$st"){$b++;}
    else $b=1;
}
if(($a==10)&&($b==8)){
    echo' <table class="table">
     <thead><tr><th>NAME</th><th>AGE</th><th >MOB NO</th><th>date</th><th>time</th></tr>
     <tbody>
     <tr class="success"><td>'.$name.'</td><td>'.$age.'</td><td>'.$mn.'</td><td>'.$sd.'</td><td>'.$st.'</td></tr>
     </tbody>
     </table>';
	 echo 'To print your schedule press ctrl+p';
}
else{
    echo' <table class="table">
     <thead><tr><th>NAME</th><th>AGE</th><th >MOB NO</th><th>date</th><th>time</th></tr>
     <tbody>
     <tr class="success"><td>'.$name.'</td><td>'.$age.'</td><td>'.$mn.'</td><td>select another time slot</td><td>select another date</td></tr>
     </tbody>
     </table>';
	 echo '<html><a href="form.php">click here to select another date and timing</a></html>';
}
?>
