<form action="" method="Post" enctype="Multipart/from-data">
    <input type="file" name="file-up" accept="">
    <input type="submit" name="btn" value="upload_file">
</form>
<?php
if (isset($_POST['btn'])) {
    if (isset($_FILES['upload_file'])) {
        $file = $_FILES['upload_file'];
    

    $namefile = $file['file-up'];
    move_uploaded_file($file['tmp_name'], $namefile);
?>
    <img src="<?php echo $namefile ?>" height="100" width="70" />
<?php
}
}


?>