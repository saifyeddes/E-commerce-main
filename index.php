<?php
include 'header.php';
include 'lib/connection.php';

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if (isset($_POST['add_to_cart'])) {
    if (isset($_SESSION['auth'])) {
        if ($_SESSION['auth'] != 1) {
            header("location:login.php");
        }
    } else {
        header("location:login.php");
    }
    $user_id = $_POST['user_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_id = $_POST['product_id'];
    $product_quantity = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE productid = '$product_id'  && userid='$user_id'");

    if (mysqli_num_rows($select_cart) > 0) {
        echo $message[] = 'product already added to cart';
    } else {
        $insert_product = mysqli_query($conn, "INSERT INTO `cart`(userid, productid, name, quantity, price) VALUES('$user_id', '$product_id', '$product_name', '$product_quantity', '$product_price')");
        echo $message[] = 'product added to cart successfully';
        header('location:index.php');
    }
}
?>

<style>
    /* CSS File */
    .product-item {
        text-align: center;
    }

    .product-image {
        width: 700%; /* Ensure all images fill the container */
        height: 300px; /* Limit maximum height */
    }
</style>

<!--banner start-->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-text">
                    <p class="bt1">Welcome To</p>
                    <p class="bt2"><span class="bt3">Fashion</span>Store</p>
                    <p class="bt4">Step into the world of style and elegance at FashionStore, where every click brings you closer to your fashion dreams. Indulge in the latest trends, timeless classics, and everything in between as you explore our curated collection of clothing. With a passion for quality and a commitment to your satisfaction, we invite you to embark on a journey of fashion discovery with us. Welcome to FashionStore, where your wardrobe transformation begins! </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!--banner end-->

<!---top sell start---->
<section>
    <div class="container">
        <div class="topsell-head">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="img/mark.png">
                    <h4>All Products</h4>
                    <p>Discover endless variety at All Products – your ultimate shopping destination for all your needs!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="product-item">
                                <img src="admin/product_img/<?php echo $row['imgname']; ?>" class="product-image">
                                <div class="product-details">
                                    <h6><?php echo $row["name"] ?></h6>
                                    <span><?php echo $row["Price"] ?></span>

                                    <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                                    <input type="hidden" name="product_price" value="<?php echo $row['Price']; ?>">
                                </div>
                                <input type="submit" class="btn btn btn-primary" value="add to cart" name="add_to_cart">
                            </div>
                        </div>
                    </form>
                <?php
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>
    </div>
</section>
<!---top sell end---->

<!---logo start--->
<div class="logo5">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2 text-center">
                <img src="img/logo1.png">
            </div>
            <div class="col-md-2 text-center">
                <img src="img/logo2.png">
            </div>
            <div class="col-md-2 text-center">
                <img src="img/logo3.png">
            </div>
            <div class="col-md-2 text-center">
                <img src="img/logo4.png">
            </div>
            <div class="col-md-2 text-center">
                <img src="img/logo5.png">
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>
<!---logo end--->

<!---welcome start--->
<div class="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 col-sm-12">
                <span class="welcometitle">Welcome to Lawyers Pro</span>
                <img src="img/titleful.png">
                <img src="img/titleline.png" class="titleline">
                <div class="row" id="wel1">
                    <div class="col-md-2 col-lg-2 col-2">
                        <img src="img/w1.png" class="w" class="img-fluid">
                    </div>
                    <div class="col-md-10 col-lg-10 col-10">
                        <h6 class="wh">Fast Delivery</h6>
                        <p class="wp">Access fast delivery round-the-clock and explore a myriad of legal resources to empower your journey. Our comprehensive array of resources provides invaluable guidance, simplifying the complexities of law for your convenience. </p>
                    </div>
                </div>
                <div class="row" id="wel2">
                    <div class="col-md-2 col-lg-2 col-2">
                        <img src="img/w1.png" class="w" class="img-fluid">
                    </div>
                    <div class="col-md-10 col-lg-10 col-10">
                        <h6 class="wh">24x7 online free support</h6>
                        <p class="wp">There are many variations of passages Lorem Ipsum available<br>
                            but they are many variations </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-sm-12">
                <img src="img/12345.jpg" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!---welcome end--->

<?php
include 'footer.php';
?>
