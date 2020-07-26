<?php include('partial/header.php'); ?>
<?php include('partial/navbar.php'); ?>
<div class="container">
    <h1>Add/Edit Staff</h1>
    <hr>
    <div style="padding-bottom:10px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url('Welcome/update') ?>" method="post">
                    <input style="border-radius: 10px;" class="form-control" type="hidden" name="staffId" autocomplete="off" id="staffId" value="<?php echo $data->staffId ?>" required />
                    <div class="input-group" style="padding-bottom:20px;">
                        <label class="col-md-1">Email:</label>
                        <input style="border-radius: 10px;" class="form-control" type="email" name="email" autocomplete="off" id="email" value="<?php echo $data->email ?>" placeholder="email@example.com" required />
                    </div>
                    <div class="input-group" style="padding-bottom:20px;">
                        <label class="col-md-1">Phone:</label>
                        <input style="border-radius: 10px;" class="form-control" type="text" name="phone" autocomplete="off" id="phone" value="<?php echo $data->phone ?>" placeholder="08xxxxxxxx" required />
                    </div>
                    <div class="input-group" style="padding-bottom:20px;">
                        <label class="col-md-1">Position:</label>
                        <input style="border-radius: 10px;" class="form-control" type="text" name="position" autocomplete="off" id="position" value="<?php echo $data->position ?>" placeholder="Position" required />
                    </div>
                    <?php if ($username['username'] == $data->email) { ?>
                        <div class="input-group" style="padding-bottom:20px;">
                            <label class="col-md-1">Password:</label>
                            <input style="border-radius: 10px;" class="form-control" type="password" name="password" autocomplete="off" id="password" placeholder="Password" minlength="8" maxlength="12" />
                        </div>
                    <?php } ?>
                    <div class="submit-btn">
                        <input type="submit" name="submit" value="Submit" class='btn btn-primary' />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('partial/javascript.php'); ?>
<!-- <script src="assets/sbadmin2/vendor/jquery/jquery.min.js"></script>
    <script src="assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/sbadmin2/js/sb-admin-2.min.js"></script>
    <script src="assets/sbadmin2/vendor/chart.js/Chart.min.js"></script> -->

<script>
    $(document).ready(function() {});
</script>
</body>

</html>