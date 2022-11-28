<?php 
require_once("lib/config.php");
?>

        <?php include 'link.php'; ?>
        <section>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="home.php">Zeysha Group</a>


                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="home.php">Home<span class="sr-only">(current)</span></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Products <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="garments.php">Garments & Accessories</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="stocklots.php">Garments Stock Lots </a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="leathers.php">Leather & Accessories</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="jutes.php">Jute & Home Products</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="contact-us.php">Contact Us<span class="sr-only">(current)</span></a></li>
                            <li><a href="#">OUTSOURCING AND BUYING AGENT IN BANGLADESH</a></li>

                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buyer <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.php">Buyer Profile</a></li>
                                    <li><a href="order.php">Buying Order</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href='signout.php'><span>SignOut</span></a></li>

                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                          <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <?php
                                $id = $_SESSION["s_id"];

                                $name = $_SESSION["s_name"];

//echo "<br/>";
                                $photo = "uploads/" . $id . ".jpg";
//echo "<br>";
                                echo "<a href= 'profile.php'> <img src='$photo' width='35' height='35' alt='$name' title='$name' /></a><br/>";
//echo $name."<br/>";
                                //include("placeholder.php");
                                ?>
                            </div>
                          </form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </section>

    </body>
    <html>

