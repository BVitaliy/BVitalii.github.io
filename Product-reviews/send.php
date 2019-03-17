<?php 
    include "connectDB.php";

    $email = strip_tags(trim($_POST['email']));
    $name = strip_tags(trim($_POST['name']));
    $message = strip_tags(trim($_POST['message']));
    $date = $_POST['date'];
    $time = $_POST['time'];   
    $status = 3;
    $type = NULL;
    
    //Залишаю тільки цифри для назви картинки
    $nameTimePart = preg_replace('/[^0-9]/', '', $time);
    
    //Формат картинки для її назви
    if($_FILES['photo']['type'] == 'image/jpeg') $type = 'jpg';
    if($_FILES['photo']['type'] == 'image/png') $type = 'png';
    
    //Нова назва картинки 
    $photoname =  $date.'_'.$nameTimePart.'.'.$type;
    
    //Завантаження картинки в директорію
    $uploaddir = 'uploads/';
    $uploadfile = $uploaddir . basename($photoname);
    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
 
    //Відправлення диних з форми в БД
    $sql = "INSERT INTO `reviews` (`status`, `name`, `photo`, `email`, `date`, `time`, `message`) VALUES ('$status', '$name', '$photoname', '$email', '$date', '$time', '$message')";

    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    //Закриття з'єднання з БД
    mysqli_close($conn);
?>