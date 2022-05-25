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
                    <a href="contactUs.html">Contact</a>  
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
                    <option value="low" >Price: Low to High</option>
                    <option value="high">Price: High to Low</option>
                </select>
                <button class="sorting-button" name="sorting-button">
                    <i class="fa-solid fa-check-double"></i>
                </button>
            </form>
        </div>





        <?php
            if (isset($_POST['search-button'])) {
        ?>

        <div class="all-products">

        <?php
            $searchWord=$_POST['search-word'];
            $data="select * from `products` where `Name` like '%$searchWord%'"; 
            $finalData= mysqli_query($connection,$data);
            while ($record=mysqli_fetch_array($finalData)) {
        ?>

        <div class="available-product">
            <img src="<?php echo $record['Image']; ?>" alt="shoes"/>
            <div class="product-caption">
                <h4><?php echo $record['Name'];  ?></h4>
                <span class="price">&#36; <?php echo $record['Price'];  ?>.00</span>
            </div>
        </div>



        <?php
                                                    }

                                                }
        ?>
        </div>




        <?php

        if (isset($_POST['sorting-button'])) {
        ?>
  
        <div class="all-products">

        <?php
            $option=$_POST['sorting'];
            if ($option=="low") {
                $availableData="select * from `products` order by `Price` ASC";
                $collectedData=mysqli_query($connection,$availableData);
                while ($item=mysqli_fetch_array($collectedData)) {
        ?>
                <div class="available-product">
                    <img src="<?php echo $item['Image']; ?>" alt="shoes"/>
                    <div class="product-caption">
                        <h4><?php echo $item['Name'];  ?></h4>
                        <span class="price">&#36; <?php echo $item['Price'];  ?>.00</span>
                    </div>
                </div>



        <?php
                                                    }

                            }
            else{
                $availableData="SELECT * FROM `products` order by `Price` DESC";
                $collectedData=mysqli_query($connection,$availableData);
                while ($item=mysqli_fetch_array($collectedData)) {
        ?>
                <div class="available-product">
                    <img src="<?php echo $item['Image']; ?>" alt="shoes"/>
                    <div class="product-caption">
                        <h4><?php echo $item['Name'];  ?></h4>
                        <span class="price">&#36; <?php echo $item['Price'];  ?>.00</span>
                    </div>
                </div>
        <?php
                                                    }
                }
                                                }
        ?>
        </div>
    </section>

</body>
</html>