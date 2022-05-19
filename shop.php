<?php 
    include 'connection.php ';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classic_Shop</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="special-nav">
            <ul class="nav">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="shop.php">Shop</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="blog.html">Blog</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>  
                </li> 

                <li>
                    <a href="search.php">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <div class="separate"></div>

    <section class="display-section">

        <div class="all-products">

        <?php
            $myquery="select * from `products`"; 
            $result= mysqli_query($connection,$myquery);
            while ($row=mysqli_fetch_array($result)) {
        ?>

        <div class="available-product">
            <img src="<?php echo $row['Image']; ?>" alt="shoes"/>
            <div class="product-caption">
                <h4><?php echo $row['Name'];  ?></h4>
                <span class="price">&#36; <?php echo $row['Price'];  ?>.00</span>
            </div>
        </div>



        <?php
                                                    }

        ?>
        </div>

    </section>


    <footer class="footer">
        <div class="main-footer">
            <div class="sub-footer">
                <h4>About us</h4>
                <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur. I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur.</p>
                <p>We are the champions! We are the most amazing theme of all time, yeah.</p>
            </div>

            <div class="sub-footer">
                <h4>Opening Hours</h4>
                <p>
                    <i class="fa-solid fa-angle-right"></i> Monday 10AM - 9PM
                </p>
                <hr>
                <p>
                    <i class="fa-solid fa-angle-right"></i> Tuesday 10AM - 9PM
                </p>
                <hr>
                <p>
                    <i class="fa-solid fa-angle-right"></i> Wednesday 10AM - 9PM
                </p>
                <hr>
                <p>
                    <i class="fa-solid fa-angle-right"></i> Thursday 10AM - 10PM
                </p>
                <hr>
                <p>
                    <i class="fa-solid fa-angle-right"></i> Friday 10AM - 10PM
                </p>
                <hr>
                <p>
                    <i class="fa-solid fa-angle-right"></i> Weekends 10AM - 11PM
                </p>
            </div>

            <div class="sub-footer">
                <h4>Top Rated Products</h4>
                <div class="items">
                    <div class="item">
                        <div class="item-caption">
                            <p>Basic Sandals</p>
                            <span>&#36; 20.00</span>
                        </div>
                        <img src="images/shoes.jpg" alt="shoes"/>
                    </div>
                    <hr>
                    <div class="item">
                        <div class="item-caption">
                            <p>Light Shoes</p>
                            <span>&#36; 18.00</span>
                        </div>
                        <img src="images/shoes2.jpg" alt="shoes"/>
                    </div>
                    <hr>
                    <div class="item">
                        <div class="item-caption">
                            <p>White Bag</p>
                            <span>&#36; 35.00</span>
                        </div>
                        <img src="images/bag2.jpg" alt="bag"/>
                    </div>
                </div>
            </div>

            <div class="sub-footer">
                <h4>Contact Details</h4>
                <p>
                    <i class="fa-solid fa-location-dot"></i>   Manchester Road 123-78B, Silictown 7854MD, Great Country
                </p>

                <p>
                    <i class="fa-solid fa-phone"></i>   <a href="tel+46 123 456 789">+46 123 456 789</a>
                </p>

                <p>
                    <i class="fa-solid fa-envelope"></i>   <a href="mailto:hello@sitename.com">hello@sitename.com</a>
                </p>

                <p>
                    <i class="fa-solid fa-earth-africa"></i>  <a href=" http://www.sitename.com"> http://www.sitename.com</a>
                </p>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="copyright">
                <p>Copyright 2021. All rights reserved.</p>
                <div class="contact-icons">
                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" >
                        <i class="fa-brands fa-google"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>