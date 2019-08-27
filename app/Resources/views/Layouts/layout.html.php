<!Doctype html>
<html lang="<?= $this->getLocale() ?>">
<head>
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

    <?php 
        // Put your js file in web/static/js/
        $this->headScript()->prependFile('/static/js/global.js');

        // Put your js plugins files in web/static/lib/
        $this->headScript()->appendFile('/static/lib/example-plugin/js/plugin.js');
        
        echo $this->headScript();
    ?>
</body>
</html>