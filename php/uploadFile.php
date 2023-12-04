<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $fileArray = ['jpg','jpeg','png','gif'];
    $check = getimagesize($_FILES['image']['tmp_name']);
    if($check === false){
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if($_FILES['image']['size'] > 10000){
        echo "File size is too large.";
        $uploadOk = 0;
    }

    if(!in_array($imageFileType, $fileArray)){
        echo "File type is not allowed!";   
        $uploadOk = 0;
    }

    if($uploadOk){
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
            echo "file uploaded successfully";
        }
    } else {
        echo "Sorry, your file was not uploaded.";
    }

}
?>

<html !Doctype>

<head>
    <title>PHP File upload test</title>
</head>

<body>
    <H1>Upload file</H1>
    <form method="post" enctype="multipart/form-data">
        <div>
            <label for="image">Choose Image</label><br>
            <input type="file" name="image" id="image">
        </div>
        <br>
        <button type="submit">Submit</button>
    </form>

    <script>
        function generatePasswprd(length) {
            var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789" +
                '~!@#$%^&*_-=+`|(){}[];:""<>,.?/',
                retVal = "";
            for (var i = 0, n = charset.length; i < length; ++i) {
                retVal += charset.charAt(Math.floor(Math.random() * n));
            }
            var pasws = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]$/;
            // if(retVal.match(pasws)){
            //     console.log(true)
            // }
            // else {console.log(false)
            // }

            var special = '/[~!@#$%^&*_-=+`|(){}[];:<>,.?/]+/';
            if (special.match(retVal) == true) {
                // if (preg_match('/[~!@#$%^&*_-=+`|(){}[];:<>"",.?/]+/', retVal)) {
                console.log(true)
            } else {
                console.log(false)
            }

            console.log(retVal);
        }
        generatePasswprd(16);
    </script>
</body>

</html>