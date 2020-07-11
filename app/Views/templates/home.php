<?php $title = 'BLOG'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>

<?php $content = ob_get_clean(); ?>

<?php require('../app/Views/layout.php'); ?>
