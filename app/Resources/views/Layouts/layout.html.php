<!Doctype html>
<html lang="<?= $this->getLocale() ?>">
    <head>
        <?php echo $this->template("Includes/metadata.html.php")?>

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Exo+2:300,400,600&display=swap"> 
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
        <!--
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
        -->

        <?php 
            // Put your css file in web/static/css/
            $this->headLink()->prependStylesheet('/static/css/global.css');
            $this->headLink()->prependStylesheet('/static/css/style.css');

            // Put your css plugins fuels in web/static/lib/
            $this->headLink()->appendStylesheet('/static/lib/example-plugin/css/plugin.css');

        ?>
        <?= $this->headLink(); ?>

        <!--JQuery Library-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
    </head>
    <body>
        <?php echo $this->template('Includes/header.html.php')?>
        
        <?php $this->slots()->output('_content')?>

        <?php echo $this->template('Includes/footer.html.php')?>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/js/all.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>

        <?php 
            // Put your js file in web/static/js/
            $this->headScript()->prependFile('/static/js/global.js');

            // Put your js plugins files in web/static/lib/
            $this->headScript()->appendFile('/static/lib/example-plugin/js/plugin.js');
            
            echo $this->headScript();
        ?>
    </body>
</html>