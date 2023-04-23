<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','u689329123_db_contact');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

?>


<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel='script' href='fy.php' type='text/php'>
  <!-- <title></title> -->
  <!-- <img src="wallhaven.jpg" alt="Italian Trulli"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<script src="index.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<!-- Bootstrap Font Icon CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<title>TECHNOVATION</title>

</head>

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="events.html">Events</a>
        </li>
        <li class="nav-item ">
         <a class="nav-link" href="gallery.html">Gallery</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="about.html">About Us</a>
        </li>
         <li class="nav-item ">
          <a class="nav-link" href="contact.html">Contact Us</a>
        </li>
        
    </div>
    </li>
    </ul>
    
    <img src="logo2.jpg" width="50" height="50" alt="">
    <!-- </form> -->
    </div>
  </nav>

<?php
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}?>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="events.html" class="nav-link px-2 text-muted">Events</a></li>
      <li class="nav-item"><a href="gallery.html" class="nav-link px-2 text-muted">Gallery</a></li>
      <li class="nav-item"><a href="contact.html" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">© 2023 Technovation, Inc</p>
    <p class="text-center text-muted">This Website is Developed By- Sandesh Kokad, Abhishek Patil & Umesh Bhingare</p>
    <p class="text-center text-muted">Department of BCA Science All Rights Reserved </p>
  </footer>
</div>
<!-- -----------footer ends   here----------------------- -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>