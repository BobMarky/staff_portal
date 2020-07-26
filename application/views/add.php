<?php include('partial/header.php'); ?>
<?php include('partial/navbar.php'); ?>

<div class="container">
    <h1>Add/Edit Staff</h1>
    <hr>
    <div style="padding-bottom:10px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url('Welcome/insert') ?>" method="post">
                    <div class="input-group" style="padding-bottom:20px;">
                        <label class="col-md-1">Email:</label>
                        <input style="border-radius: 10px;" class="form-control" type="email" name="email" autocomplete="off" id="email" placeholder="email@example.com" required />
                    </div>
                    <div class="input-group" style="padding-bottom:20px;">
                        <label class="col-md-1">Phone:</label>
                        <input style="border-radius: 10px;" class="form-control" type="text" name="phone" autocomplete="off" id="phone" placeholder="08xxxxxxxx" required />
                    </div>
                    <div class="input-group" style="padding-bottom:20px;">
                        <label class="col-md-1">Position:</label>
                        <input style="border-radius: 10px;" class="form-control" type="text" name="position" autocomplete="off" id="position" placeholder="Position" required />
                    </div>
                    <div class="input-group" style="padding-bottom:20px;">
                        <label class="col-md-1">Password:</label>
                        <input style="border-radius: 10px;" class="form-control" type="password" name="password" autocomplete="off" id="password" placeholder="Password" minlength="8" maxlength="12" required />
                    </div>
                    <div class="submit-btn">
                        <input type="submit" name="submit" value="Submit" class='btn btn-primary' />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('partial/javascript.php'); ?>
<script>
    $(document).ready(function() {});
</script>
</body>

</html>