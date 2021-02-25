<!--Bước 1: Tạo form Upload-->
Upload file nhỏ
<form method="POST" enctype="multipart/form-data" action="Upload1.php"> 
<input type="hidden" name="MAX_FILE_SIZE" value="30000000">
<input type="file" name="filename">
<input type="submit" value="Upload">
</form>
