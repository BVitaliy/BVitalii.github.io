<?php
    $title = "Сторінка відгуків";
    require "header.php";
    $reviews = getReviews ();
?>
 
   <div class="reviews-page">
    <div class="container">
        <h1>Відгуки</h1>
<!--        Список відгуків-->
        <div class="reviews-list">
        <?php
            for($i = 0; $i < count($reviews); $i++){
                if ($reviews[$i]["status"] == 1 ){
                    echo '                    
                          <div class="review-item">
                            <div class="review-header">
                                <div class="review-photo">
                                    <img src="uploads/'.$reviews[$i]["photo"].'" alt="'.$reviews[$i]["photo"].'">
                                </div>
                                <div class="review-info">
                                    <div class="name">'.$reviews[$i]["name"].'</div>
                                    <a href="" class="email">'.$reviews[$i]["email"].'</a>   
                                    <div class="date">'.$reviews[$i]["date"].' | '.$reviews[$i]["time"].'</div>
                                </div>
                            </div>
                            <div class="review-text">
                                 '.$reviews[$i]["message"].'
                            </div>
                        </div> ';
                }
            }      
        ?>
           
        </div>
<!--        Форма для відгука-->
        <div class="review-form">
            <h2>Залишіть відгук</h2>
            <form id="review-form" enctype="multipart/form-data" action="send.php" method="post">
                <div class="form-group">
                    <label for="email">E-mail <em>*</em></label>
                    <input type="email" name="email" class="form-control" id="email" required>
                    <div class="error"></div>
                </div>
                <div class="form-group">
                    <label for="name">Ім'я</label>
                    <input type="text" name="name" class="form-control" id="name">
                    <div class="error"></div>
                </div>  
                <div class="form-group">
                    <label class="photo btn btn-success" data-title="Виберіть фото"><input type="file" name="photo"></label>
                </div>               
                <div class="form-group">
                    <label for="text">Текст відгуку <em>*</em></label>
                    <textarea name="message" id="text" class="form-control" required></textarea>
                    <div class="error"></div>
                </div> 
                <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">
                <input type="hidden" name="time" value="<?php echo date('H:i:s'); ?>">
                <input type="submit" name="send" class="btn btn-primary" value="Відправити">
            </form>
        </div>
    </div>
</div>
<?php
    require "footer.php"
?>