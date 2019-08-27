<?php $this->extend('Layouts/layout.html.php')?>

<?php 
    $this->headLink()->appendStylesheet('/static/css/detail.css');
?>

Detail page

<?php 
    $this->headScript()->appendFile('/static/js/detail.js')
?>