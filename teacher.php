<?php include_once "vendor/autoload.php";?>
<?php
use App\Controller\Teacher;

$teach = new Teacher;


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teacher info</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<?php
        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $cell = $_POST['cell'];
            $username = $_POST['username'];

            if (empty($name)||empty($email)||empty($cell)||empty($username)){
                $msg = "all fields are required";
            }else{
                $msg = $teach -> teacherData($name,$email,$cell,$username);
            }
        }





    ?>
	

	<div class="wrap ">
        <a class="btn btn-sm btn-primary" href="index.php"> Students</a>
        <a class="btn btn-sm btn-primary" href="teachertable.php">all teacher</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Registration form</h2>
                <?php
                if (isset($msg)){
                    echo $msg;
                }
                ?>
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="username" class="form-control" type="text">
					</div>
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>