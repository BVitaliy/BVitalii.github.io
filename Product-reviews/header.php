<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    
    <?php
        require_once "functions.php";
    
        $login = 'admin';
        $password = '12345';
    ?>
    
</head>
<body>
 
<header class="header-site">
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">PHP Test</a>
            </div>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                    <?php 
                        if($title != "Сторінка Адміністратора" ) {
                            echo '<li><a href="admin.php">Адмін</a></li>';
                        };
                    ?>
                </ul>
            </div>
        </div>
    </nav>        
</header>