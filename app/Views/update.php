<?php $this->extend("layout") ?>
<?php $this->section("content") ?>
<?php $this->section("title") ?>
<title><?php echo $pageTitle ?></title>
<?php $this->endSection() ?>
<div class="card text-center p-2 ">
    <div class="card-header">Update Employee <a href="<?php echo site_url("/") ?>" class="btn btn-success  btn-sm float-end   ">All Employee</a> </div>
    <div class="card-body">

        <?php
        $errors = \Config\Services::validation()->getErrors();
        if (!empty($errors)) {
        ?>
            <div class="alert alert-danger" role="alert">

                <?php
                foreach ($errors as $error) {
                ?>
                    <p>
                        <?php echo $error ?>
                    </p>
                <?php
                } ?>
            </div>
        <?php
        }
        ?>


        <?php if (isset($status)) { ?>

            <p class="alert alert-success"> <?php echo $status ?> </p>

        <?php } ?>

        <form class="" action="<?= site_url("update/".$emp['id']) ?>" method="POST">
            <?php echo csrf_field() ?>
            <div class="row">

                <div class="col-md-6 py-2">
                    <input type="text" name="full_name" value="<?php echo $emp['full_name'] ?>" id="full_name" class="form-control" required placeholder="enter full name..">
                </div>
                <div class="col-md-6 py-2">
                    <input type="email" name="email" value="<?= $emp['email'] ?>" id="email" class="form-control" placeholder="example@gmail.com">
                </div>
            </div>
            <div class=" row">
                <div class="col-md-6 py-2">
                    <input type="number" name="mobile" value="<?= $emp['mobile'] ?>" id="mobile" class="form-control" placeholder="enter mobile..">
                </div>
                <div class="col-md-6 py-2">
                    <input type="text" name="department" value="<?= $emp['department'] ?>" id="department" class="form-control" placeholder="enter departmenmt">
                </div>
                <div class="row">
                    <div class="col-md-12 py-2">
                        <textarea name="address" id="address"  class="form-control"><?php echo $emp['address'] ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 py-2">
                        <input type="number" name="salary" id="salary" value="<?= $emp['salary'] ?>" class="form-control">
                    </div>
                    <div class="col-md-4 py-2">
                        <input type="date" name="doj" id="doj" class="form-control" value="<?= $emp['doj'] ?>">
                    </div>
                    <div class="col-md-4 py-2">
                        <input type="date" name="dor" id="dor" class="form-control" value="<?= $emp['dor'] ?>">
                    </div>
                </div>
                <div class="py-2">
                    <button class="btn btn-block btn-info " type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div <?php $this->endSection(); ?>