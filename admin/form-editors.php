<?php
include('../config/dbconfig.php');
if(isset($_POST['akash'])){
$description = $_POST['description'];
$query = $connection->query("INSERT INTO `blog`(`details`) VALUES ('$description')");
if($query){
    header('Location: form-editors.php');
}
}
?>
<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8"/>
    <title>Your Company Name</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.21.0/ckeditor.js" integrity="sha512-ff67djVavIxfsnP13CZtuHqf7VyX62ZAObYle+JlObWZvS4/VQkNVaFBOO6eyx2cum8WtiZ0pqyxLCQKC7bjcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

<form action="#" method="post">
    <textarea name="description"></textarea>
    <button type="submit" name="akash">Submit</button>
</form>


<script>
    CKEDITOR.replace('description');
</script>

</body>


</html>
