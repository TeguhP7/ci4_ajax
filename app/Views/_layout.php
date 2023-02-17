<!DOCTYPE html>
<html class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="information-management.png">
    <title>
        <?=(!empty($title) ? $title : 'No Title') ?>
    </title>

    <?= $this->include('_layout/css') ?>
</head>

<body>
    <?= $this->include('_layout/nav') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include('_layout/footer') ?>
    <?= $this->include('_layout/js') ?>
</body>

</html>