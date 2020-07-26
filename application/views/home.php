<?php include('partial/header.php'); ?>
<?php include('partial/navbar.php'); ?>

<div class="container">
    <h1>STAFF PORTAL</h1>
    <!-- <div style="padding-bottom:10px;"></div> -->
    <hr>
    <a href="<?php echo base_url('Welcome/add') ?>">
        <button class="btn btn-success"><i class="fa fa-plus"></i> <b>Add</b></button>
    </a>
    <div style="padding-bottom:10px;"></div>
    <table id="tablePortal" class="table hover table-bordered" style="width:100%;">
        <thead style="background-color:#838383; color:white">
            <tr>
                <td width="10">NO</td>
                <td>EMAIL</td>
                <td>PHONE</td>
                <td>POSITION</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 0;
            foreach ($data as $d) {
                $count = $count + 1;
            ?>
                <tr>
                    <td><?php echo $count ?></td>
                    <td><?php echo $d->email ?></td>
                    <td><?php echo $d->phone ?></td>
                    <td><?php echo $d->position ?></td>
                    <td>
                        <a href="<?php echo base_url("Welcome/edit/") . $d->staffId ?>">
                            <button class="btn btn-primary" title="Edit"><i class="fa fa-edit"></i></button>
                        </a> |
                        <a href="<?php echo base_url('Welcome/delete/')  . $d->staffId ?>" onclick="return confirm('Are you sure want to delete this staff ?')">
                            <button class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('partial/javascript.php'); ?>
<!-- <script src="assets/sbadmin2/vendor/jquery/jquery.min.js"></script>
    <script src="assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/sbadmin2/js/sb-admin-2.min.js"></script>
    <script src="assets/sbadmin2/vendor/chart.js/Chart.min.js"></script> -->

<script>
    $(document).ready(function() {
        $('#tablePortal').DataTable();
    });
</script>
</body>

</html>