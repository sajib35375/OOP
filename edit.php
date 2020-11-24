<?php include_once "vendor/autoload.php";?>
<?php
use App\Controller\Student;

$stu = new Student;
if (isset($_GET['id'])){
    $id = $_GET['id'];

    $edit=$stu -> editData($id);
    $ed = $edit -> fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student info</title>
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

                $msg = $stu -> editStudent($name,$email,$cell,$username,$id);
            }
        }





    ?>
	

	<div class="wrap ">

		<div class="card shadow">
			<div class="card-body">
				<h2>Update Student Data</h2>
                <?php
                if (isset($msg)){
                    echo $msg;
                }
                ?>
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input value="<?php echo $ed['name']; ?>" name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input value="<?php echo $ed['email']; ?>" name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input value="<?php echo $ed['cell']; ?>" name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input value="<?php echo $ed['username']; ?>" name="username" class="form-control" type="text">
					</div>
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Submit">
					</div>
				</form>
                <a class="btn btn-sm btn-primary" href="students.php">Back</a>
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