<?php
    require_once('yocto.php'); // NEEDED ON EVERY PAGE YOU WANT TO USE YOCTO
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>yocto DEMO</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="public/css/style.css">

        <!--[if lt IE 9]> <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
    </head>
    <body>
        <div class="wrapper">
        
            <div class="container">
                <h1><?= y('title') ?></h1>
                <p><?= y('yocto') ?></p>

                <h2><?= y('howto_title') ?></h2>
                <p><?= y('howto') ?></p>
                <pre><?= htmlspecialchars(raw('code')) ?></pre>

                <h2><?= y('admin_title') ?></h2>
                <p><?= y('admin') ?></p>
            </div>            

        </div>
      
        <!-- le javascript -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    </body>
</html>