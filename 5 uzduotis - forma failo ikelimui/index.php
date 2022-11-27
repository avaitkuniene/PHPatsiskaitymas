<html>
<head>
    <style>
        form input {
            border: 2px solid gray;
                    margin: 5px;
                    border-radius: 2px;
                }
                form button {
            border: 2px solid gray;
                    margin: 5px;
                    border-radius: 2px;
                }
    </style>
</head>
<body>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="filename"><br>
    <input type="file" name="my_file"><br>
    <button type="submit">Upload</button>
</form>

</body>
</html>