<?php 
session_start();

    if(!isset($_SESSION['User2']))
    {
      echo "<script>alert('You must login first.');window.location='login.php';</script>";
    }
    else{
    isset($_SESSION['User2']);
}
$mysqli = new mysqli('localhost','root','','yearbook') or die(mysqli_error($mysqli));

#registrar (Delete)
/*$emaill = $_GET['email'];
$del = mysqli_query($db,"DELETE FROM users WHERE email = '$emaill'");
if($del){

}else{
	echo "Error Deleting record";
}*/
#delete btn(new)
if(isset($_GET['emailan'])){
  $EMAIL = $_GET['emailan'];
  $mysqli->query("DELETE FROM confirm WHERE email = '$EMAIL'") or die($mysqli->error());
  echo "<script>alert('Deleted Successfully!');window.location='data6.php';</script>";
  header("Location: data6.php");
}

if(isset($_GET['email'])){
	$EMAIL = $_GET['email'];
	$mysqli->query("DELETE FROM confirmed WHERE email = '$EMAIL'") or die($mysqli->error());
  header("Location: data5.php");
}

i

#edit registrar account
if(isset($_GET['editan'])){
  $EMAIL = $_GET['editan'];
  $years = "SELECT email FROM confirm WHERE id='$EMAIL'";
                  $resulta=mysqli_query($mysqli,$years);
                  $log = mysqli_fetch_assoc($resulta);
                  $tot= $log['email'];
  $to = $tot;
         $subject = "Confirmation Email";
         $message = "<h3>Hi!<br><br> You have successfully registered on our Digital Yearbook in our campus. You can now login using your registered School ID No. and your Password. You can also direct to login on this link: <a href='localhost/abcd/LC.php'>localhost/abcd/LC.php</a>Thank you.</h3><br><br>-Admin";
       $header = "FROM:rarceno503@gmail.com \n";
         $header .= "Cc:rarceno503@gmail.com \n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\n";
         $retval = mail($to,$subject,$message,$header);
      if( $retval == true ) {
            $mysqli->query("INSERT INTO confirmed (SELECT * FROM confirm WHERE id='$EMAIL')") or die($mysqli->error());
   $mysqli->query("DELETE FROM confirm WHERE id='$EMAIL'") or die($mysqli->error());
  echo "<script>alert('Added Successfully!');window.location='data6.php';</script>";
         }else {
            echo "<script>alert('failed');window.location='data6.php';</script>";
         }

}

if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$result = $mysqli->query("SELECT * FROM confirmed WHERE id = '$id'") or die($mysqli->error());
	while($row = $result->fetch_assoc()){
		echo "<html>";
		echo "<head>";
		echo "<title>Edit Info</title>";
		echo "<link rel='stylesheet' type='text/css' href='style2.css'>";
		echo "<style>";
		echo "* {
  margin: 0px;
  padding: 0px;
}
body {
margin-top:10px;	
  font-size: 120%;
  background-color:gray;
  font-family: 'Ubuntu', sans-serif;
}

.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #0275d8;
  text-align: center;
  border: 1px solid #0275d8;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
  font-family: 'Ubuntu', sans-serif;
}
.btn {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #9C27B0, #E040FB);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    
}
.error {
  width: 95%; 
  margin: 0px auto; 
  padding: 5px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
  font-family: 'Ubuntu', sans-serif;
  font-size: 13px;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
.button {
  border-radius: 25px;
  border:none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

}

.button1 {background: linear-gradient(to right, red, red);} /* Green */
.button2 {background: linear-gradient(to right, #9C27B0, #E040FB);} /* Blue */
}";
echo "</style>";
		echo "</head>";
		echo "<body>";
		echo "<div class='header'>
    <h2>Edit Information</h2>
  </div>";
		echo "<form action='s.php' method='POST'>";
		echo "<div class='card'>";
        echo "<div class='container'>";
        echo "<div class='input-group' align='center'>";
		echo "<input value='" . $row['id'] ."' name='ids' style='display:none;'></input>";
    echo "<label>School ID:</label><input value='" . $row['Sid'] ."' name='id2'></input>";
		echo "<label>Email:</label><input value='" . $row['email'] ."' name='email' readonly></input>";
		echo "<input style='display:none' name='password'  value='" . $row['password'] ."'></input>";
		echo "<label>First Name:</label><input value='". $row['fname'] ."' name='firstname'></input>";
		echo "<label>Middle Name:</label><input value='". $row['mname'] ."' name='middlename'></input>";
		echo "<label>Last Name:</label><input value='". $row['lname'] ."' name='lastname'></input>";
		echo "<button type ='submit' class='button button1' name='save'>SAVE</a></button>";
		echo "</form>";
		echo "</body>";
		echo "</html>";
	}
}

#POST


#add registrar (Add Registrar)
if(isset($_POST['Adds'])){
header("Location: adEmail.php");
}
?>
