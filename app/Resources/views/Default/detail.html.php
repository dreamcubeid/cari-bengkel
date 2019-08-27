<?php $this->extend('Layouts/layout.html.php')?>

<?php 
    // Call css file on specific page
    $this->headLink()->appendStylesheet('/static/css/detail.css');
?>

<!-- 
    Add your html script code here
-->

<?php 
    // Call js file on specific page
    $this->headScript()->appendFile('/static/js/detail.js')
?>