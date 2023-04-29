    <?php

    //1. Setup Database connection
    require_once '../config.php';
    $upload_dir= '../user_identification/';
    // $upload_dir = '../uploads/';

    $business_name = $_POST['business_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password =$_POST['password'];

    $imgName = $_FILES['image']['name'];
	$imgTmp = $_FILES['image']['tmp_name'];
	$imgSize = $_FILES['image']['size'];

    $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

	if($imgSize < 5000000){
	move_uploaded_file($imgTmp,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		

    //2. Insert SQL
    $sql = "  INSERT INTO 
    `users`
    (`business_name`, `username`, `email`, `password`, `address`, `profile_img`, `valid_id_img`) 
    VALUES (
        '".$business_name."',
        '".$username."',
        '".$email."',
        '".$password."',
        '".$address."',
        '".$userPic."',
        'heh'
        )";


    //3. Execute SQL
    if (mysqli_query($conn, $sql)) {
    header('Location:../login.php');
    } else {
    mysqli_error($conn);
    header('Location: ../registration_form?authenticate=false');
    }

    //.4 Closing Database Connection
    mysqli_close($conn);
 
    


    ?>