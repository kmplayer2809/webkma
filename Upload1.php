<META NAME = "HTTP-EQUV" Charset = "UTF-8">
<?php
	//Bước 2: Kiểm tra xem tác vụ có phải là upload hay không: 
	if ($_SERVER["REQUEST_METHOD"] != "POST" ) { 
		//thông báo lỗi không phải là method POST và thoát
		echo "Method không phải là POST";
		exit(-1); 
	} 
	//Bước 3: Tiếp theo kiểm tra xem quá trình upload có lỗi gì không:
	if ($_FILES["filename"]["error"] > 0){
	//thông báo lỗi dựa vào giá trị của $_FILES["filename"]["error"] và thoát 
	  echo "Error: " . $_FILES["filename"]["error"] . "<br />";
	  exit(-1); 
	}else{
	  echo "Upload: " . $_FILES["filename"]["name"] . "<br />";
	  echo "Type: " . $_FILES["filename"]["type"] . "<br />";
	  echo "Size: " . ($_FILES["filename"]["size"] / 1024) . " KB<br />";
	}
	//Kiểm tra kich thước file
	if ($_FILES["filename"]["size"] < $_REQUEST['MAX_FILE_SIZE']){
		if ($_FILES["filename"]["error"] > 0){
			echo "Error: " . $_FILES["filename"]["error"] . "<br />";
			exit(-1);
		}
	}else{
		echo "Error: " . $_FILES["filename"]["error"] . "<br />";
		exit(-1);
	}
	//Kiểm tra kiểu file
	if ($_FILES["filename"]["type"] == 'image/jpg'||$_FILES["filename"]["type"] == 'image/png'||$_FILES["filename"]["type"] == 'image/jpeg'||$_FILES["filename"]["type"] == 'image/gif'){
		if ($_FILES["filename"]["error"] > 0){
			echo "Error: " . $_FILES["filename"]["error"] . "<br />";
			exit(-1);
		}
	}else{
		echo "Error: " . $_FILES["filename"]["error"] . "<br />";
		echo "Chỉ cho phep UPLOAD file JPG, JPEG, PNG, GIF";
		exit(-1);
	}
	//Tách tên file từ client: 
/* 	$temp = preg_split('/[\/\\\\]+/', $_FILES["filename"]["name"]); 
	$filename = $temp[count($temp)-1];  */
	//Và cuối cùng, lưu file được upload vào nơi cần thiết:
	move_uploaded_file($_FILES["filename"]["tmp_name"],"upload/".$_FILES["filename"]["name"]);
	$imgsize = getimagesize("upload/".$_FILES["filename"]["name"]);
	echo "<h2>Kích thước file là {$imgsize[0]}x{$imgsize[1]}</h2>";
   	echo "<H1>Đã upload thành công!</H1>";
	echo "<H1>Hẹn gặp lại!</h1>";
	echo "<a href = 'FormUpload.php'>Click vào đây để về trang Upload</a>";
	//echo "<script>window.setTimeout(window.history.back(), 3000);</script>";
	echo "<img src = 'upload/{$_FILES["filename"]["name"]}'>";
?>