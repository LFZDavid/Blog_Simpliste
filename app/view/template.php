<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <title><?= $title ?></title>
        <link href="/blog/app/public/css/styles.css" rel="stylesheet" />
    </head>
        
    <body>
        <div class="main">
    	   <header>
                <div class="header">
            		<a href="/blog/app/"><h1 class="app-title"><?=$title?></h1></a>
                </div>
    	   </header>
           <div class="content container">
                <?= $content ?>
            </div>
            <footer>
                <div class="footer-content">
                    <a href="index.php?action=admin" class="admin">Admin</a>
                </div>            
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/app/public/js/script.js"></script>
    </body>
</html>