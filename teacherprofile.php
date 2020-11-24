<?php include_once "vendor/autoload.php";?>
<?php
use App\Controller\Teacher;

$teach = new Teacher;
if (isset($_GET['id'])){
    $id = $_GET['id'];

    $info = $teach -> profileData($id);
    $p_data = $info -> fetch_assoc();
}

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
	<div class="wrap">
        <table class="table table-striped">
            <tr>
                <td>Name</td>
                <td><?php echo $p_data['name']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $p_data['email']; ?></td>
            </tr>
            <tr>
                <td>Cell</td>
                <td><?php echo $p_data['cell']; ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo $p_data['username']; ?></td>
            </tr>
        </table>
        <a class="btn btn-sm btn-primary" href="teachertable.php">Back</a>
    </div>

	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>