<!DOCTYPE html>
<html lang="">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <style>
        .form-control {
            border: 0;
            outline: 0;
            border-radius: 0;
        }

        .form-control:focus, .form-control:active {
            -webkit-box-shadow: 0 0 0 1px rgb(0 123 255 / 25%);
            box-shadow: 0 0 0 1px rgb(0 123 255 / 25%);
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light border-bottom">
    <a class="navbar-brand mr-auto mr-lg-0" href="#">Doptor</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
    </button>
    </div>
</nav>
<div class="container clearfix">
    <div class="text-center">
        <?= $this->Flash->render() ?>
    </div>
    <?= $this->fetch('content') ?>
</div>
<footer>
</footer>
</body>
</html>
