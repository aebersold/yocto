<?php
    $pass = "yocto"; // PASSWORD FOR ADMIN

    $strings = file_get_contents('./text.json') or die ("Unable to open text-file");
    $strings = json_decode($strings, true);

    if (isset($_POST['password'])) {
        if($_POST['password'] === $pass)
        {
            foreach(array_keys($strings) as $key)
            {
                $strings[$key] = $_POST[$key];
            }
            file_put_contents('./text.json', json_encode($strings)) or die ("Unable to write text-file"); 
            $msg = "Saved all changes!";
        } else {
            echo "Password is not correct. Use the back button of your browser and try again!";
            die;
        }
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>yocto CMS ADMIN</title>
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <!--[if lt IE 9]> <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
    </head>
    <body class="admin">

        <div class="container">
            <h1>yocto CMS ADMIN</h1>
        
            <?php if($msg): ?>

                <div class="alert alert-success" role="alert">
                    <p><?=$msg?></p>
                </div>

            <?php endif; ?>

        <form method="POST" action="admin.php">

            <?php foreach(array_keys($strings) as $key): ?>
                
            <div class="form-group">
                <label><?=$key?></label>
                <textarea class="form-control" name="<?=$key?>" rows="10" id="<?=$key?>"><?=$strings[$key]?></textarea>
            </div>
            <hr>
                
            <?php endforeach; ?>
            
            <div>
                <label>Password</label>
                <input type="password" class="form-control" name="password" value="">
            </div>
            <hr>

            <input type="submit" value="Save Changes" class="btn btn-primary">
        </form>
        <br>
        <span>&copy; yocto CMS by <a href="http://aebersold.me">Simon Aebersold</a></span>
        </div>

        <!-- le javascript -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
    </body>
</html>