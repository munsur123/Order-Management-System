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
                        <img src="images/garmentBanner.jpg" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/garmentBanner1.jpg" alt="...">
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
                    <h1 style="color:green">Garment & Accessories:</h1>
                    <p>Knit, Sweater and Woven production at Zeysha Group has been newly developed which however has grown at a tremendous pace to become one of the top manufacturers in Bangladesh. Fitted with the latest technologies, Nabi Group Ltd is able to produce and work many Others Factory agent the most complex Knit, Woven and Sweater ranging from 3 gauges to 12 gauges.</p>
                    <h2 style="color:greenyellow">Types of Sweaters</h2>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Basic Sweaters</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Pullovers</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Cardigans</p>                   
                    <h2>Knitted Vest and Tank Tops</h2>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Knitted T-shirt</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Knitted Vest</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Knitted Tank top</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Knitted Polo Shirt</p>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Knitted Blouse</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Knitted Scarf</p>
                    <h2 style="color:greenyellow">Types of woven bottom wears</h2>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Men’s Pants</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Ladies Pants</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Kid’s Pants</p> 
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Shorts</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Basic pants</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Long pants</p>  
                    <h2>Tops</h2>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Casual Shirt</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Top Wear</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Dress Shirt</p>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Flannel Shirt</p>          
                    <div style="float: right">

                        <h2 style="color:greenyellow">The Types of Outer Wears</h2>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Basic Jacket</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Basic Lined Jacke</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Bomber Jacket</p>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Down Jacket</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Function Jacket</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Padded Jacket</p>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Woven Pullover</p>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Sealed Jacket</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Sun dress</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Woven vest</p>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Denim outer wear</p>
                    </div>
                        <h2 style="color:greenyellow">Types of Sports Wear</h2>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Sports Pants</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Sports Jackets</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Sports Jersey</p>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Promotional Jersey</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Nylon and Wool Award Jackets</p>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Corduroy Jackets</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Twill Poplin Jackets</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Supplex Jackets</p>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Satin Jackets</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Action Fleece Jackets</p>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Sports Sweats</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Swim Parkas</p>          
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Band Parkas</p>
                        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Warm-Up Suits</p>          

                    <h2 style="color:greenyellow">Types of Woven Inner Wears</h2>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Woven Boxer Shorts</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Woven Flannel Shorts</p>          
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> Woven Loungewear</p> 

                    <h2>Types of Overall Wears</h2>
                    <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> ¾ Body</p>          
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
