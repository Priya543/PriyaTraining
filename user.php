<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="jquery-ui.css">
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script src="jquery-ui.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" 
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" 
    crossorigin="anonymous">
    </script>
    <script src="bootstrap.min.js"></script>
<style>
.myclass {
            padding: 30px;   
            height: 500px;
        }
</style>
</head>

<body>

<?php
$servername = "localhost";
$username = "shopnix";
$password = "snix1233";
$dbname = "myDatabase";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>
    <div class="container" >
        <div class="row myclass" style="background-color: rgb(184, 185, 186);">
            <h1 align="center" style="font-size:50px;">User Form</h1>
            <h3>Enter user's details below....</h3>
            
            <form class="form-horizontal"  method="post">
                
                <label class="control-label col-sm-2">User ID:</label>
                <div class="col-sm-10">
                <input  class="form-control"  type="text" type="number" name="uid" >
                </div><br>
                <label class="control-label col-sm-2">Enter Name:</label>
                <div class="col-sm-10">
                <input  class="form-control" type="text" name="name" >
                </div>
                <br>
                <label class="control-label col-sm-2">Email ID:</label>
                <div class="col-sm-10">
                <input  class="form-control" type="text" name="email" >
                </div>
                <br>
                <label class="control-label col-sm-2">Password:</label>
                <div class="col-sm-10">
                <input  class="form-control" type="text" name="pw">
                </div>
                <br>
                <label class="control-label col-sm-2">Address:</label>
                <div class="col-sm-10">
                <textarea rows="4" cols="50" name="addrs" "></textarea>
                </div>
                <br>
                <label class="control-label col-sm-2">Contact no:</label>
                <div class="col-sm-10">
                <input  class="form-control" type="text" type="number" name="phone" >
                </div>
                <p align="center">
                <input type="submit" >
                </p>
            </form>
<?php
// Query to insert data into database.

$Uid = $_POST["uid"];
$Name = $_POST["name"];
$Email = $_POST["email"];
$Pw = $_POST["pw"];
$Addrs = $_POST["addrs"];
$Phone = $_POST["phone"];
$len = strlen($res);

$sql=  "INSERT INTO tUser (user_id,Name ,Email_id ,Password,Address,Phone)
        VALUES ($Uid,'".$Name."' ,'".$Email."' ,'".$Pw."' ,'".$Addrs."' ,$Phone)";
     $result = $conn->query($sql);

        
?>
        </div></br>
        </div>
    </div>
</body>
</html>