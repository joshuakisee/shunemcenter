
<?php
if(isset($_POST["submit"])) {
/**my database
	*named shunem
*/
	include('config.php');

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;

////////////////////////////////////////////////////////////////////////////////////////
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

///////////////////////////////////////////////////////////////////////////////////////////

        // Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. <br/>";
        $img=basename( $_FILES["fileToUpload"]["name"]);
       
        /*inser to db shunem
         *table named Dinning
         */

        //variables to save to database
        $category=($_POST['category']);
        $Number=($_POST['Number']);
        $fee=($_POST['fee']);
        $description=($_POST['description']);
        

            $sqldinning="INSERT into Dinning(category,numberofpeople,cost,description,image)
                values('$category','$Number','$fee','$description','$img')";
                $querydinning=mysqli_Query($db,$sqldinning);
                if($querydinning){
                echo"<script>
                alert('record is added')
                </script>";
                }
                else{
                echo"no record added";
                }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>
