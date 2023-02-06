<?php $this->extend("layout") ?>

<?php $this->section("content") ?>
<?php $this->section("title") ?>

<title><?php echo $pageTitle ?></title>
<?php $this->endSection() ?>
<div class="card text-center p-2 ">
    <form action="" method="GET" class="input-group input-group-sm mb-3">
        <div class="form-floating">
            <input name="query" type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
            <label for="floatingInputGroup1">Employee Name..</label>
        </div>
        <span class="input-group-text"><button type="submit" class="btn btn-success ">submit</button></span>
    </form>
    <div class="card-header">All Employees <a href="<?php echo site_url("/add") ?>" class="btn btn-success  btn-sm float-end  ">Add Employee</a> </div>
    <div class="card-body">
        <table class="table table-borderd table-hover ">
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Mobile</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
            <?php
            foreach ($employees as $employee) { ?>

                <tr>
                    <td> <?php echo $employee['id'] ?> </td>
                    <td> <?php echo $employee['full_name'] ?> </td>
                    <td> <?php echo $employee['mobile'] ?> </td>
                    <td> <?php echo $employee['department'] ?> </td>
                    <td>
                        <a href="<?php echo site_url("update/" . $employee['id']) ?>" class="btn btn-info btn-sm ">Modify</a>
                        <a onclick="return confirm('Are You Sure You Want to delete Data') " href="<?= site_url("/delete/" . $employee['id'])  ?>" class="btn btn-danger btn-sm ">Delete</a>
                    </td>
                </tr>

            <?php } ?>

        </table>
    </div>
</div>
<?php $this->endSection() ?>