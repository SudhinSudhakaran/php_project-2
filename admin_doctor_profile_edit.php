<!--Doctor's profile edit by Admin-->
<?php 
    include('header.php');
    include('php_connection.php'); 
    $var = $_GET['id'];
    $sql = "select * from doctors where did='".$var."'";
    $result = mysqli_query($conn,$sql);
    if($row = mysqli_fetch_assoc($result))
        {
?>

<section>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="p-3 fontcol">Edit Profile</h3>
                    <div class="card-body">
                        <form name="my-form" onsubmit="return validform()" action="php_doctor_profile_update.php"
                            method="post">
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Registration
                                    ID</label>
                                <div class="col-md-6 ">
                                    <input type="text" id="full_name" class="form-control box-bg " name="rid"
                                        value="<?php echo $row['d_regid']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control box-bg" name="name"
                                        value="<?php echo $row['dname']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Address</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control box-bg" name="address"
                                        value="<?php echo $row['daddress']; ?>" required>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">DOB</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control box-bg" name="dob"
                                        value="<?php echo $row['ddob']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                    class="col-md-4 col-form-label text-md-right font-weight-bolder">Specelization</label>
                                <div class="col-md-6">
                                    <input type="text" name="specs" class="form-control box-bg"
                                        value="<?php echo $row['dspecs']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Gender</label>
                                <div class="col-md-6 d-flex form-check">
                                    <select name="gender">
                                        <option selected value="<?php echo $row['dgender']; ?>">
                                            <?php echo $row['dgender']; ?></option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                        <option value="Other">Other</option>
                                    </select>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control box-bg"
                                        value="<?php echo $row['demail']; ?>" required>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mobile</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control box-bg" name="mobile"
                                        value="<?php echo $row['dmobile']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control box-bg"
                                        value="<?php echo $row['dpassword']; ?>" name="password" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Confirm
                                    Password</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control box-bg" required>
                                </div>
                            </div>





                            <div class="row">
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-primary" name="submit" onclick="say()">
                                        <a class="text-light text-decoration-none">Save</a>
                                    </button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
						}
						?>
    </div>
</section>

<script>
function say() {
    //alert("successfully submitted");
}
</script>



<!-- Footer -->
<?php include('footer.php'); ?>