<?php
session_start();
if (!isset($_SESSION["s_id"]))
    header("location:login.php");
include("nav.php");
?>
<section>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-7"> 
                    <h3>Contact Us</h3>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_cont'])) {
                        $fullname = $_POST['fullname'];
                        $email = $_POST['email'];
                        $company = $_POST['company'];
                        $messgae = $_POST['messgae'];

                        if ($fullname == "" or $email == "" or $company == "" or $messgae == "") {
                            echo"<div class='alart text-danger'><strong>Error!</strong>Field Must be Fill Up</div>";
                        } else {
                            $query = $db->query("insert into tbl_contact(fullname, email, company, messgae)VALUES('$fullname','$email','$company','$messgae')");
                            if ($query) {
                                echo '<div class="bg bg-success" style="padding:5px">Success</div>';
                            } else {
                                echo'fail';
                            }
                        }
                    }
                    ?>
                    <form action="contact-us.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="company" class="form-control" id="exampleInputEmail1" placeholder="Company">
                        </div>
                        <div class="form-group">
                            <textarea name="messgae" cols="20" rows="3" class="form-control" id="exampleInputPassword1" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" name="btn_cont" class="btn btn-primary">Register</button>
                                <button type="reset" name="reset" class="btn btn-primary">Reset</button>
                            </div>
                        </div>
                    </form> 
                    <p>we are the out sourcing and buying agent in Bangladesh what you need contact with us we will try our full effort to do the work.</p>
                    <p>Our quality will bring you more work</p>

                </div>

                <div class="col-lg-5">
                    <ul>
                        <h3>Company Informaton</h3>
                        <address>
                            <p>House No:82/11, BaranTek,</>
                            <p>Balu Maat, Dhaka Cantoonment-1206,</p>
                            <p>Dhaka Bangladesh.</p>
                            <p>Phone:+8801721613996</p>
                            <p>Email:nagigroupltd@gmail.com</p>
                            <p>Skype:nabigroupltd</p>

                        </address>

                    </ul>
                </div>

            </div>
        </div>
        <div class="col-lg-12">
            <img src="images/map.jpg" alt="map" height="300" width="100%">
            <h3>Company Map</h3>
        </div>



    </div>
</section>
<?php include 'footers.php'; ?>

