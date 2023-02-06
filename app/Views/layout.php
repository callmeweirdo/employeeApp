<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/bootstrap.min.css")  ?> ">
    <?php $this->renderSection("title") ?>
</head>

<body>

    <div class="container mt-5 p-5 ">

        <?php $this->renderSection("content") ?>

    </div>


</body>

</html>