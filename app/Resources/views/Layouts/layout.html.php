<!Doctype html>
<html lang="<?= $this->getLocale() ?>">
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

        <?php 
            // Put your css file in web/static/css/
            $this->headLink()->prependStylesheet('/static/css/global.css');

            // Put your css plugins fuels in web/static/lib/
            $this->headLink()->appendStylesheet('/static/lib/example-plugin/css/plugin.css');

        ?>
        <?= $this->headLink(); ?>

    </head>
    <body>
        <?php echo $this->template('Includes/header.html.php')?>
        
        <?php $this->slots()->output('_content')?>

        <?php echo $this->template('Includes/footer.html.php')?>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/js/all.min.js"></script>

        <?php 
            // Put your js file in web/static/js/
            $this->headScript()->prependFile('/static/js/global.js');

            // Put your js plugins files in web/static/lib/
            $this->headScript()->appendFile('/static/lib/example-plugin/js/plugin.js');
            
            echo $this->headScript();
        ?>
    </body>
</html>