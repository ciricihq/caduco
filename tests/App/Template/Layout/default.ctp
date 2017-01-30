<?php
use Cake\Core\Configure;
if ($this->fetch('description')) {
    $this->prepend('meta', $this->Html->meta('description', $this->fetch('description')));
}
if ($this->fetch('keywords')) {
    $this->prepend('meta', $this->Html->meta('keywords', $this->fetch('keywords')));
}
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
</body>
