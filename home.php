<?php
session_start();
if (!isset($_SESSION["s_id"]))
    header("location:login.php");

require_once("lib/config.php");

?>

<section>
    <?php include("nav.php"); ?>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption" style="background-color: #d9edf7">
                        <h4>Jute & Home Products</h4>
                    </div>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="" data-slide-to="0" class="active"></li>
                            <li data-target="" data-slide-to="1"></li>
                            <li data-target="" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/juteSlider.jpg" alt="...">
                                <div class="carousel-caption">
                                </div>
                            </div>

                            <div class="item">
                                <img src="images/juteSlider1.jpg" alt="...">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/juteSlider2.jpg" alt="...">
                                <div class="carousel-caption">
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                    </div>  
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption" style="background-color: #d9edf7">
                        <h4>Leather Products & Accessories</h4>
                    </div>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="" data-slide-to="0" class="active"></li>
                            <li data-target="" data-slide-to="1"></li>
                            <li data-target="" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/leatherSlider.jpg" alt="...">
                                <div class="carousel-caption">

                                </div>
                            </div>

                            <div class="item">
                                <img src="images/leatherSlider1.jpg" alt="...">
                                <div class="carousel-caption">

                                </div>
                            </div>
                            <div class="item">
                                <img src="images/leatherSlider2.jpg" alt="...">
                                <div class="carousel-caption">

                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                    </div>  
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption" style="background-color: #d9edf7">
                        <h4>Garmnet Products & Accessories</h4>
                    </div>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="" data-slide-to="0" class="active"></li>
                            <li data-target="" data-slide-to="1"></li>
                            <li data-target="" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/garmentSlide.jpg" alt="...">
                                <div class="carousel-caption">
                                </div>
                            </div>

                            <div class="item">
                                <img src="images/garmentSlide1.jpg" alt="...">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/garmentSlide2.jpg" alt="...">
                                <div class="carousel-caption">
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                    </div>  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>Welcome to Zeysa Group</h3>
                <p>Zeysa Group is a Bangladeshi Garment, Leather and Jute manufacturer, Agent and Outsourcing Company, is leading supplier of readymade garments and denim fabric in the world. We are one of the top clothing, leather, Jute  and agent Outsourcing company in Bangladesh. The company produces some of the most fashionable denim fabrics and garment products and owns one of the most comprehensive Leather and Jute resourceful manufacturing facilities in Bangladesh.</p> 

                <p>Zeysa Group Ltd has earned name and fame both at home and abroad as one of the top clothing companies in Bangladesh. The continuous growth of this group is moving forward hand on hand with the industrialization of the home country Bangladesh. Moreover we as a Bangladeshi clothing manufacturer have been contributing immensely in the financial growth of the nation.</p> 

                <p>Zeysa Group Ltd one of the top clothing companies in Bangladesh exporting to USA and Europe for a long time. Because of our successful history with the world leading customers and buyers, we are the most valued and well reputed Bangladeshi clothing manufacturer.</p> 

                <p>Company produces million pcs of T-shirt, Sweater, woven, Jute and Leather garments per month with the assortment of infant to adult in men and women. garments factories, a unique Denim mill, Sweater factory, Embroidery and Printing factory, Carton factory, Poly bag industry, Label factory, Leather factory, Jute mill, Chemical formulation plant, IT Firm, Transport company, News Channel and a national daily Newspaper. Its overseas office gives fastest support in procurement of fabric and accessories. Own C & F office in every Bangladeshi port gives privilege of quick clearing and forwarding support.</p> 

                <p>Zeysa GroupLtd will make all types of knit, Sweater, woven, Leather and Jute products like tops & bottoms for man, women and children.</p>
            </div>
            </br>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="images/garmentProduct1.jpg" alt="...">
                    <div class="caption">
                        <h3>Polo</h3>
                        <p><a href="garments.php" class="btn btn-primary" role="button">See More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="images/garmentProduct2.jpg" alt="jeans pant">
                    <div class="caption">
                        <h3>Jeans Pants</h3>
                        <p><a href="garments.php" class="btn btn-primary" role="button">See More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="images/garmentProduct.jpg" alt="...">
                    <div class="caption">
                        <h3>Shirt</h3>
                        <p><a href="garments.php" class="btn btn-primary" role="button">See More</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="images/leatherProduct.jpg" alt="...">
                    <div class="caption">
                        <h3>Leather Raw Products</h3>
                        <p><a href="leathers.php" class="btn btn-primary" role="button">See More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="images/leatherSlider1.jpg" alt="...">
                    <div class="caption">
                        <h3>Leather Products</h3>
                        <p><a href="leathers.php" class="btn btn-primary" role="button">See More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="images/leatherSlider.jpg" alt="...">
                    <div class="caption">
                        <h3>Leather Bag</h3>
                        <p><a href="leathers.php" class="btn btn-primary" role="button">See More</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="images/juteProduct1.jpg" alt="...">
                    <div class="caption">
                        <h3>Jute Yarn</h3>
                        <p><a href="jutes.php" class="btn btn-primary" role="button">See More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="images/juteProduct2.jpg" alt="...">
                    <div class="caption">
                        <h3>Jute Bag</h3>
                        <p><a href="jutes.php" class="btn btn-primary" role="button">See More</a></p></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="images/juteProduct.jpg" alt="...">
                    <div class="caption">
                        <h3>Jute Products</h3>
                        <p><a href="jutes.php" class="btn btn-primary" role="button">See More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include 'footers.php'; ?>
</body>
</html>

