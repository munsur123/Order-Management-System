
<?php
include("header.php");
include 'lib/config.php';
include 'link.php';
?>

<div class="container">
    <section>
        <div class="row">
            <div class="col-lg-12">
                <div class="col-sm-3"></div>
                <div class="col-lg-6" style="height: 300px; background-color: #f4f4f4;border:1px solid gray;margin-bottom: 50px;margin-top: 50px">
                    <h1>Login To Nabi Group Ltd</h1>

             



                    <form class="form-horizontal" action="" method="POST">


                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
                            </div>
                        </div>

                    </form> 
                </div>
                <div class="col-sm-3"></div>

            </div>
        </div>

    </section>
</div>

<?php include 'footer.php'; ?>
</body>
</html>


