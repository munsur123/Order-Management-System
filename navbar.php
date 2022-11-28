<?php
include 'link.php';
 ?>
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
                <a class="navbar-brand" href="index.php">Zeysha Group</a>
                

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>

                    <li class="active"><a href="about_us.php">About Us<span class="sr-only">(current)</span></a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Products <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="garment.php">Garments & Accessories</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="mensitems.php">Mens Items</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="leather.php">Leather & Accessories</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="jute.php">Jute & Home Products</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="contactUs.php">Contact Us<span class="sr-only">(current)</span></a></li>
                <li><a href="admin">Admin Login</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            
                        <li><a href="login.php">Buyer Login</a></li>
                        
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</section>