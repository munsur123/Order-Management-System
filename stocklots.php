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
                        <img src="images/stockBanner.jpg" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/stockBanner1.jpg" alt="...">
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
                    <h1 style="color:green">Stock Lot:</h1>
                    <p>We are glad to introduce you, Nabi Group Ltd has been launched which however has grown at a tremendous pace to become one of the top Stock Lot Company in Bangladesh. And with the latest product which able to produce even more complex Stock Lot ranging Business.</p>
                    <h2 style="color:greenyellow">Types of Stock Lot:</h2>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> T-Shirt</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Shirt</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Polo</p>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Sweaters</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Pullovers</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Cardigans</p>                   
                    <h2>Knitted Vest and Tank Tops</h2>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Knitted Vest</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Knitted Tank top</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Hudies</p>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Knitted Blouse</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Knitted Scarf</p>
                    <div style="float: right">
                        <h2 style="color:greenyellow">Types of woven bottom wears:</h2>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Men’s Pants</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Ladies Pants</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Kid’s Pants</p>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Shorts</p>          

                        <h2>Tops:</h2>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Casual Shirt</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Top Wear</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Dress Shirt</p>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Flannel Shirt</p>
                        <h2 style="color:greenyellow">The Types of Outer Wears:</h2>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Basic Jacket</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>Basic Lined Jacket</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Woven Pullover</p>
                    </div>
                    <h2>Types of Sports Wear:</h2>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Sports Pants</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Sports Jackets</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Sports Jersey</p>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Sports Sweats</p>          
                    <h2 style="color:greenyellow">Types of Woven Inner Wears:</h2>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>Woven Boxer Shorts</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>Woven Flannel Shorts</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>Woven Loungewear</p>                              
                    <h2>Types of Overall Wears:</h2>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Full Body</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Work wear</p>          

                </div>
                <div class="col-md-3">
                    <h3>Our Services:</h3>
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
