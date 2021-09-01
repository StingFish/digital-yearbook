<?php 
    session_start();

    if(!isset($_SESSION['User']))
    {
      echo "<script>alert('You must login first.');window.location='LC.php';</script>";
    }
    else{
    isset($_SESSION['User']);
}

$mysqli = new mysqli('localhost','root','','yearbook') or die(mysqli_error($mysqli));

$years=date("Y");
#registrar (Delete)
/*$emaill = $_GET['email'];
$del = mysqli_query($db,"DELETE FROM users WHERE email = '$emaill'");
if($del){

}else{
	echo "Error Deleting record";
}*/
#delete btn(new)

if(isset($_GET['email2'])){
  $EMAIL = $_GET['email2'];
  $mysqli->query("DELETE FROM tab2 WHERE id = '$EMAIL'") or die($mysqli->error());
  header("Location: data7.php");
}

if(isset($_GET['email3'])){
  $EMAIL = $_GET['email3'];
  $mysqli->query("DELETE FROM tab3 WHERE id = '$EMAIL'") or die($mysqli->error());
  header("Location: data8.php");
}


if(isset($_GET['email8'])){
  $EMAIL = $_GET['email8'];
  $mysqli->query("DELETE FROM shs WHERE id = '$EMAIL'") or die($mysqli->error());
  header("Location: data9.php");
}

if(isset($_GET['email9'])){
  $EMAIL = $_GET['email9'];
  $mysqli->query("DELETE FROM shs WHERE fname = '$EMAIL'") or die($mysqli->error());
  header("Location: tabs9.php");
}

if(isset($_GET['email10'])){
  $EMAIL = $_GET['email10'];
  $mysqli->query("DELETE FROM tab10 WHERE fname = '$EMAIL'") or die($mysqli->error());
  header("Location: tabs10.php");
}

if(isset($_GET['email11'])){
  $EMAIL = $_GET['email11'];
  $mysqli->query("DELETE FROM tab11 WHERE id = '$EMAIL'") or die($mysqli->error());
  header("Location: data0.php");
}

#edit registrar account
if(isset($_GET['edit2'])){
  $id=$_GET['edit2'];
  
  $result = $mysqli->query("SELECT * FROM tab2 WHERE id = '$id'") or die($mysqli->error());
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
    echo "<form action='ss.php' method='POST' enctype='multipart/form-data'>";
    echo "<div class='card'>";
        echo "<div class='container'>";
        echo "<div class='input-group' align='center'>";
        echo "<input value='" . $row['id'] ."' name='id' style='display:none;'></input>";

    echo '<img class="imahe" style="width:80px; height:100px;" src="data:image/jpeg;base64,'.base64_encode($row['image1'] ).'"/><br>';
    echo "<label>Image:</label><input type='file' name='f1' required>";
    echo "<label>First Name:</label><input value='". $row['fname'] ."' name='firstname'></input>";
    echo "<label>Middle Name:</label><input value='". $row['mname'] ."' name='middlename'></input>";
    echo "<label>Last Name:</label><input value='". $row['lname'] ."' name='lastname'></input>";
    echo "<label>Position:</label><input value='". $row['position'] ."' name='position'></input>";
    echo "<label>Year:</label><input type='number' value='". $row['year'] ."'name='year' min='2018' max='".$years."'></input>";
    echo "<button type ='submit' class='button button1' name='save2'>SAVE</a></button>";
    echo "<script>window.addEventListener('keydown',function(e){if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){if(e.target.nodeName=='INPUT'&&e.target.type=='text'){e.preventDefault();return false;}}},true);
</script>";
    echo "</form>";
    echo "</body>";
    echo "</html>";
  }
}

if(isset($_GET['edit3'])){
  $id=$_GET['edit3'];
  $result = $mysqli->query("SELECT * FROM tab3 WHERE id = '$id'") or die($mysqli->error());
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
    echo "<form action='ss.php' method='POST' enctype='multipart/form-data'>";
    echo "<div class='card'>";
        echo "<div class='container'>";
        echo "<div class='input-group' align='center'>";
    echo "<input value='" . $row['id'] ."' name='id' style='display:none;'></input>";
    echo '<img class="imahe" style="width:80px; height:100px;" src="data:image/jpeg;base64,'.base64_encode($row['image1'] ).'"/><br>';
    echo "<label>Image:</label><input type='file' name='f1' required></input>";
    echo "<label>First Name:</label><input value='". $row['fname'] ."' name='firstname'></input>";
    echo "<label>Middle Name:</label><input value='". $row['mname'] ."' name='middlename'></input>";
    echo "<label>Last Name:</label><input value='". $row['lname'] ."' name='lastname'></input>";
    echo "<label>Position:</label><input value='". $row['position'] ."' name='position'></input>";
    echo "<label>Year:</label><input value='". $row['year'] ."'name='year'></input>";
    echo "<button type ='submit' class='button button1' name='save3'>SAVE</a></button>";
    echo "</form>";
    echo "</body>";
    echo "</html>";
  }
}

if(isset($_GET['edit8'])){
  $id=$_GET['edit8'];
  $result = $mysqli->query("SELECT * FROM shs WHERE id = '$id'") or die($mysqli->error());
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
    echo "<form action='ss.php' method='POST'>";
    echo "<div class='card'>";
        echo "<div class='container'>";
        echo "<div class='input-group' align='center'>";
    echo "<input value='" . $row['id'] ."' name='id' style='display:none'></input>";
    echo '<img class="imahe" style="width:80px; height:100px;" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>';
    echo "<label>First Name:</label><input value='". $row['fname'] ."' name='firstname'></input>";
    echo "<label>Middle Name:</label><input value='". $row['mname'] ."' name='middlename'></input>";
    echo "<label>Last Name:</label><input value='". $row['lname'] ."' name='lastname'></input>";
    echo "<label>Year:</label><input value='". $row['year'] ."'name='year'></input>";
    echo "<button type ='submit' class='button button1' name='save8'>SAVE</a></button>";
    echo "</form>";
    echo "</body>";
    echo "</html>";
  }
}

/*if(isset($_GET['edit9'])){
  $id=$_GET['edit9'];
  $result = $mysqli->query("SELECT * FROM shs WHERE id = '$id'") or die($mysqli->error());
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

.button1 {background: linear-gradient(to right, red, red);}
.button2 {background: linear-gradient(to right, #9C27B0, #E040FB);}
}";
echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<div class='header'>
    <h2>Edit Information</h2>
  </div>";
    echo "<form action='ss.php' method='POST'>";
    echo "<div class='card'>";
        echo "<div class='container'>";
        echo "<div class='input-group' align='center'>";
    echo "<label>ID:</label><input value='" . $row['id'] ."' name='id'></input>";
    echo '<img class="imahe" style="width:80px; height:100px;" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>';
    echo "<label>First Name:</label><input value='". $row['fname'] ."' name='firstname'></input>";
    echo "<label>Middle Name:</label><input value='". $row['mname'] ."' name='middlename'></input>";
    echo "<label>Last Name:</label><input value='". $row['lname'] ."' name='lastname'></input>";
    echo "<label>Year:</label><input value='". $row['year'] ."'name='year'></input>";
    echo "<button type ='submit' class='button button1' name='save9'>SAVE</a></button>";
    echo "</form>";
    echo "</body>";
    echo "</html>";
  }
}

if(isset($_GET['edit10'])){
  $id=$_GET['edit10'];
  $result = $mysqli->query("SELECT * FROM tab10 WHERE id = '$id'") or die($mysqli->error());
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

.button1 {background: linear-gradient(to right, red, red);}
.button2 {background: linear-gradient(to right, #9C27B0, #E040FB);}
}";
echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<div class='header'>
    <h2>Edit Information</h2>
  </div>";
    echo "<form action='ss.php' method='POST'>";
    echo "<div class='card'>";
        echo "<div class='container'>";
        echo "<div class='input-group' align='center'>";
    echo "<label>ID:</label><input value='" . $row['id'] ."' name='id'></input>";
    echo '<img class="imahe" style="width:80px; height:100px;" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>';
    echo "<label>First Name:</label><input value='". $row['fname'] ."' name='firstname'></input>";
    echo "<label>Middle Name:</label><input value='". $row['mname'] ."' name='middlename'></input>";
    echo "<label>Last Name:</label><input value='". $row['lname'] ."' name='lastname'></input>";  
    echo "<label>Year:</label><input value='". $row['year'] ."'name='year'></input>";
    echo "<button type ='submit' class='button button1' name='save10'>SAVE</a></button>";
    echo "</form>";
    echo "</body>";
    echo "</html>";
  }
}
*/

if(isset($_GET['edit11'])){
  $id=$_GET['edit11'];
  $result = $mysqli->query("SELECT * FROM tab11 WHERE id = '$id'") or die($mysqli->error());
  while($row = $result->fetch_assoc()){
    echo "<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Edit Info</title>
  <link rel='icon' type='text/css' href='dist/img/logo-removebg.png'>
  <link rel='stylesheet' type='text/css' href='s1.css'>
  <!-- Google Font: Source Sans Pro -->
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback'>
  <!-- Font Awesome -->
  <link rel='stylesheet' href='plugins/fontawesome-free/css/all.min.css'>
  <!-- Theme style -->
  <link rel='stylesheet' href='dist/css/adminlte.min.css'>
</head>
<body class='hold-transition sidebar-mini bg-dark' style='margin-left:400px;margin-top:40px;'>
<div class='wrapper'>

  <!-- Main content -->
    <section class='content'>
      <div class='container-fluid'>
        <div class='row'>
          <!-- left column -->
          <div class='col-md-6'>
            <!-- general form elements -->
            <div class='card card-primary'>
              <div class='card-header'>
                <h3 class='card-title'>Quick Example</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form action='ss.php' method='POST'>
              <div class='card-body'>";
echo "<input value='" . $row['id'] ."' name='id' style='display:none;'></input>";
echo "<div class='form-group'><br>";
echo '<img class="imahe" style="width:300px; height:200px;margin-left:30px;" src="data:image/jpeg;base64,'.base64_encode($row['image1'] ).'"/></div>';
  echo "<div class='form-group'>
                    <label for='A'>Description</label>
                    <input type='text' class='form-control' value='". $row['description'] ."'name='dess' id='A'></input></div>";
  echo "<div class='form-group'>
                <input type='number' class='form-control' value='". $row['year'] ."'name='year'></input></div>";
  echo "<div class='card-footer'>
                    <button type='submit' class='btn btn-light' style='margin-left:60px;'><a href='data0.php'>Cancel</a></button>
                  <button type ='submit' class='btn btn-primary' name='save11'>Save changes</a></button>
                <!-- /.card-body -->
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- Control Sidebar -->
  <aside class='control-sidebar control-sidebar-dark'>
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src='plugins/jquery/jquery.min.js'></script>
<!-- Bootstrap 4 -->
<script src='plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
<!-- bs-custom-file-input -->
<script src='plugins/bs-custom-file-input/bs-custom-file-input.min.js'></script>
<!-- AdminLTE App -->
<script src='dist/js/adminlte.min.js'></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
";
  }
}
#POST


#add registrar (Add Registrar)
if(isset($_POST['Adds'])){
header("Location: adEmail.php");
}
?>
