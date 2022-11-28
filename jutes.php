<?php session_start();
if (!isset($_SESSION["s_id"]))
    header("location:login.php");
include("nav.php"); ?>
<section>
    <div class="container">
        <div class="col-lg-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/juteBanner.jpg" alt="juteBanner">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/juteBanner1.jpg" alt="juteBanner">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="col-md-9">
                    <h1 style="color:green">Jute & Home Products:</h1>
                    <p>Zeysha Group is one of the premier jute products manufacturers and exporters of High- Quality and Eco-Friendly Jute Products.
                        Jute is considered one of the most useful natural resources of Bangladesh; 
                        in fact it really ruled the market. 
                        Jute products are on hand in earthy and neutral colors such as olive green and various shades of white.
                        These high quality jute products made their way into virtually every natural lover’s home.</p>                    <h2 style="color:greenyellow">Types of Jute & Home Products:</h2>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Lifestyle and Fashion bags
                    </p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Traditional bags
                    </p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Office bags
                    </p>                   
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Bazaar bags
                    </p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Rugs</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Webbing</p>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Clothes and many more</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Knitted Scarf</p>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Bazaar bags
                    </p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Rugs</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Webbing</p>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Clothes and many more</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Knitted Scarf</p>
                    <h2>Jute Bags:</h2>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> B-Twill
                    </p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Cut B-Twill</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Binola</p>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Heavy Cees</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Suger-Twill</p>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Light Cees</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Hessian Bag</p>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Poly Laminated Seed Bag and more</p>
                    <h2>Jute Yarn:</h2>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Sacking
                    </p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Hessian</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> CR</p>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> CB</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> CRM</p>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>CRX
                    </p>          

                </div>
                <div class="col-md-3">
                    <h3>Jute Bags:</h3>
                    <ul>
                        <li><a href="garments.php">Knitting</a></li>
                        <li><a href="garments.php">Woven</a></li>
                        <li><a href="garments.php">Sweater</a></li>
                        <li><a href="leathers.php">Leather</a></li>
                        <li><a href="jutes.php">Jute</a></li>
                        <li><a href="home.php">Home Products</a></li>
                        <li><a href="stocklots.php">Stock Lot</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footers.php'; ?>

</body>
</html>
