<?php
//connect mysql database
$host = "localhost";
$user = "root";
$pass = "";
$db = "yearbook";
$con = mysqli_connect($host, $user, $pass, $db) or die("Error " . mysqli_error($con));

//check if form is submitted
if (isset($_POST['submit'])){
    $filename = $_FILES['file1']['name'];

    //upload file
    if($filename != ''){
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg', 'ppsx', 'html', 'zip'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = "SELECT max(id) as id from tbl_files";
            $result = mysqli_query($con, $sql);
            
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']). $filename;
            
            

            //set target directory
            $path = 'uploads/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO tbl_files(filename, created) VALUES('$filename', '$created')";
            mysqli_query($con, $sql);
            header("Location: index.php?st=success");
        }
        else
        {
            header("Location: index.php?st=error");
        }
    }
    else
        header("Location: index.php");
}
?>