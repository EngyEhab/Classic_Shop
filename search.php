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
                    <a href="shop.html">Shop</a>
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
            </ul>
        </div>
    </header>
    <section class="search-section">
            <div class="search">
                <form method="post">
                    <input class="search-field" type="text" name="search-word" placeholder="Search" required>
                    <button class="search-button" name="search-button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
    </section>

    <section class="display-section">
        <div class="sort">
            <form method="post">
                <label>Sort By:</label>
                <select class="select-area" name="sorting" required>
                    <option> Select Option</option>
                    <option value="low">
                        <a href="#">Price: Low to High </a>
                    </option>
                    <option value="high">
                        <a href="#">Price: High to Low</a>
                    </option>
                </select>
            </form>
        </div>





        <?php
            if (isset($_POST['search-button'])) {
        ?>

        <div class="all-products">

        <?php
            $st=$_POST['search-word'];
            $myquery="select * from `products` where `Name` like '%$st%'"; 
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

                                                }
        ?>
        </div>

    </section>

</body>
</html>