<!Doctype html>
<html lang="<?= $this->getLocale() ?>">
<head>
    <?php 
        $this->headLink()->prependStylesheet('/static/css/global.css');
    ?>
    <?= $this->headLink(); ?>
</head>
<body>
    <?php echo $this->template('Includes/header.html.php')?>
    
    <?php $this->slots()->output('_content')?>

    <?php echo $this->template('Includes/footer.html.php')?>

    <?php 
        $this->headScript()->prependFile('/static/js/global.js');
        
        echo $this->headScript();
    ?>
</body>
</html>