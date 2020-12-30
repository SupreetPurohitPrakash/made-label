<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MIX AND MATCH</title>
    <link rel="stylesheet" href="assets/fontawesome5/css/all.css" />
    <link rel="stylesheet" href="assets/css/style.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="js/navigation.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.png" />
</head>

<body>
    <div class="body-container">
        <!-- notice -->
        <div class="notice">
            <p><a href="">Free Frankie Wrap Start Pattern - Click Here</a></p>
        </div>
        <!-- nav container -->
        <div class="nav-container" id="nav-container">
            <!-- logo -->
            <div class="nav-logo">
                <a href="./">
                    <img src="./assets/images/logo.png" alt="">
                </a>
            </div>
            <!-- bars -->
            <div class="menu-bar">
                <i class="material-icons" onclick="NavToggle()">menu</i>
            </div>
            <!-- left nav -->
            <div class="nav-left-list" id="nav-left-list">
                <!-- bars -->
                <div class="close-bar">
                    <i class="material-icons" onclick="NavToggle()">close</i>
                </div>
                <div class="nav-item" id="ni-shop-patterns">
                    <p><a href="">Shop Patterns</a></p>
                    <div class="nav-item-content">
                        <div class="row">
                            <div class="nic-title col-3">
                                <h1>Shop Patterns</h1>
                            </div>
                            <div class="nic-shop-patterns col-3">
                                <p class="nicsp-item"><a href="">Dress</a></p>
                                <p class="nicsp-item"><a href="">Jacket & Coat</a></p>
                                <p class="nicsp-item"><a href="">Dress</a></p>
                                <p class="nicsp-item"><a href="">Jacket & Coat</a></p>
                                <p class="nicsp-item"><a href="">Dress</a></p>
                                <p class="nicsp-item"><a href="">Jacket & Coat</a></p>
                                <p class="nicsp-item"><a href="">Dress</a></p>
                                <p class="nicsp-item"><a href="">Jacket & Coat</a></p>
                            </div>
                            <div class="nic-featured col-5">
                                <a href="">
                                    <div class="nicf-item">
                                        <img src="assets/images/look-book-img1.png" alt="" />
                                        <p>Impermanance: Shop new Season</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-item" id="ni-mix-match">
                    <p><a href="">Mix & Match</a></p>
                    <div class="nav-item-content">
                        <div class="row">
                            <div class="nic-title col-3">
                                <h1>Mix & Match</h1>
                            </div>
                            <div class="nic-shop-patterns col-3">
                                <p class="nicsp-item"><a href="">Dress</a></p>
                                <p class="nicsp-item"><a href="">Jacket & Coat</a></p>
                                <p class="nicsp-item"><a href="">Dress</a></p>
                                <p class="nicsp-item"><a href="">Jacket & Coat</a></p>
                                <p class="nicsp-item"><a href="">Dress</a></p>
                                <p class="nicsp-item"><a href="">Jacket & Coat</a></p>
                                <p class="nicsp-item"><a href="">Dress</a></p>
                                <p class="nicsp-item"><a href="">Jacket & Coat</a></p>
                            </div>
                            <div class="nic-featured col-5">
                                <a href="">
                                    <div class="nicf-item">
                                        <img src="assets/images/look-book-img2.png" alt="" />
                                        <p>Impermanance: Shop new Season</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-item" id="ni-sewing">
                    <p><a href="">Sewing</a></p>
                    <div class="nav-item-content">
                        <div class="row">
                            <div class="nic-title col-3">
                                <h1>Sewing</h1>
                            </div>
                            <div class="nic-shop-patterns col-3">
                                <p class="nicsp-item"><a href="">Dress</a></p>
                                <p class="nicsp-item"><a href="">Jacket & Coat</a></p>
                                <p class="nicsp-item"><a href="">Dress</a></p>
                                <p class="nicsp-item"><a href="">Jacket & Coat</a></p>
                                <p class="nicsp-item"><a href="">Dress</a></p>
                                <p class="nicsp-item"><a href="">Jacket & Coat</a></p>
                                <p class="nicsp-item"><a href="">Dress</a></p>
                                <p class="nicsp-item"><a href="">Jacket & Coat</a></p>
                            </div>
                            <div class="nic-featured col-5">
                                <a href="">
                                    <div class="nicf-item">
                                        <img src="assets/images/look-book-img3.png" alt="" />
                                        <p>Impermanance: Shop new Season</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-item" id="ni-our-story">
                    <p><a href="">Our Story</a></p>
                </div>
                <div class="nav-item currency">
                    <p>Australia ($AUD)</p>
                </div>
                <div class="nav-item login">
                    <p><a href="">Login</a></p>
                </div>
            </div>
            <!-- right nav -->
            <div class="nav-right-list">
                <div class="nav-item search" onclick="toggleSearch()">
                    <p><span>Search</span> <i class="material-icons">search</i></p>
                </div>
                <div class="nav-item favourite">
                    <p>
                        <i id="fav-icon" class="material-icons" onmouseover="changeFavIcon('favorite')"
                            onmouseout="changeFavIcon('favorite_border')">favorite_border</i>
                    </p>
                </div>
                <div class="nav-item currency">
                    <p>Australia ($AUD)</p>
                </div>
                <div class="nav-item login">
                    <p><a href="">Login</a></p>
                </div>
                <div class="nav-item caret">
                    <p>
                        <a href=""><i class="material-icons">shopping_basket</i></a>
                    </p>
                </div>
            </div>

            <div class="nav-search-form" id="search-form">
                <input type="text" placeholder="search" />
                <button type="submit"><i class="material-icons">search</i></button>
                <div class="search-close-btn" onclick="toggleSearch()">
                    <i class="material-icons">close</i>
                </div>
            </div>
        </div>
        <!-- nav-container -->

        <!-- nav-background image -->
        <div class="header-image-container">
            <div class="header-image">
                <img src="./assets/images/bg-image.png" alt="" />
            </div>
            <div class="header-image-text">
                <h1>mix & match wrap collection</h1>
                <p>
                    mix & match different top & skirt combinations to create the perfect
                    wrap dress for your wradrobe...
                </p>
            </div>
        </div>
        <!-- nav background image -->

        <!-- clear top -->
        <div class="clear-top"></div>

        <?php
// $id = get_sub_field('id')
// $top_image = get_sub_field('image');
// top id -------------------------------------------------------------
$top_id1 = 1;
$top_id2 = 2;
$top_id3 = 3;
// top image
$top_image1 = 'assets/images/tops-outline/freya.png';
$top_image2 = 'assets/images/tops-outline/ophelia.png';
$top_image3 = 'assets/images/tops-outline/sierra.png';
// top name
$top_name1 = 'Ferya Top';
$top_name2 = 'Ophelia Top';
$top_name3 = 'Sierra Top';
// top price
$top_price1 = 24;
$top_price2 = 30;
$top_price3 = 50;
// top description
$top_description1 = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur necessitatibus reprehenderit commodi iusto fuga, officia veritatis repellat, aperiam cumque optio dolorum unde dignissimos adipisci. Mollitia hic totam accusantium aspernatur odit?';
$top_description2 = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur necessitatibus reprehenderit commodi iusto fuga, officia veritatis repellat, aperiam cumque optio dolorum unde dignissimos adipisci. Mollitia hic totam accusantium aspernatur odit?';
$top_description3 = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur necessitatibus reprehenderit commodi iusto fuga, officia veritatis repellat, aperiam cumque optio dolorum unde dignissimos adipisci. Mollitia hic totam accusantium aspernatur odit?';

// skirt id------------------------------------------------------
$skirt_id1 = 1;
$skirt_id2 = 2;
$skirt_id3 = 3;
// skirt images
$skirt_image1 = 'assets/images/skirt-outline/belle.png';
$skirt_image2 = 'assets/images/skirt-outline/buttercup.png';
$skirt_image3 = 'assets/images/skirt-outline/gypsy.png';
// skirt name
$skirt_name1 = 'Belle Skirt';
$skirt_name2 = 'Buttercup Skirt';
$skirt_name3 = 'Gypsy Skirt';
// skirt price
$skirt_price1 = 24;
$skirt_price2 = 30;
$skirt_price3 = 50;
// skirt description
$skirt_description1 = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur necessitatibus reprehenderit commodi iusto fuga, officia veritatis repellat, aperiam cumque optio dolorum unde dignissimos adipisci. Mollitia hic totam accusantium aspernatur odit?';
$skirt_description2 = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur necessitatibus reprehenderit commodi iusto fuga, officia veritatis repellat, aperiam cumque optio dolorum unde dignissimos adipisci. Mollitia hic totam accusantium aspernatur odit?';
$skirt_description3 = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur necessitatibus reprehenderit commodi iusto fuga, officia veritatis repellat, aperiam cumque optio dolorum unde dignissimos adipisci. Mollitia hic totam accusantium aspernatur odit?';

?>

        <!-- please do not remove this -->
        <?php
$product_info = 'For full pattern details click the below SHOP buttons to explore the pattern
                                        product pages. This style combination comes with a full sew-along video
                                        tutorial.';
?>
        <!-- dress slider container -->
        <div class="dress-slider-container">
            <div class="row">
                <div class="outline-slider col-4">
                    <!-- top slider -->
                    <div class="dress-top-slider">
                        <div class="slideshow-container-1">
                            <div class="mySlides1 fade" data-id="<?php echo $top_id1 ?>">
                                <img src="<?php echo $top_image1 ?>" />
                            </div>
                            <div class="mySlides1 fade" data-id="<?php echo $top_id2 ?>">
                                <img src="<?php echo $top_image2 ?>" />
                            </div>
                            <div class="mySlides1 fade" data-id="<?php echo $top_id3 ?>">
                                <img src="<?php echo $top_image3 ?>" />
                            </div>
                            <a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides1(1)">&#10095;</a>
                        </div>
                    </div>
                    <!-- bottom slider -->
                    <div class="dress-skirt-slider">
                        <div class="slideshow-container-2">
                            <div class="mySlides2 fade" data-id="<?php echo $skirt_id1 ?>">
                                <img src="<?php echo $skirt_image1 ?>" />
                            </div>
                            <div class="mySlides2 fade" data-id="<?php echo $skirt_id2 ?>">
                                <img src="<?php echo $skirt_image2 ?>" />
                            </div>
                            <div class="mySlides2 fade" data-id="<?php echo $skirt_id3 ?>">
                                <img src="<?php echo $skirt_image3 ?>" />
                            </div>
                            <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides2(1)">&#10095;</a>
                        </div>
                    </div>
                </div>

                <div class="slider-details col-8">
                    <div class="combination-img-details">
                        <div class="top-skirt-combination-img">
                            <!-- top skirt final image is shown here no need to put any code here you just need to save the filename correctly ie.
                ferya.png+frella.png = ferya-frella.png
                -->
                            <img src="" alt="" id="tsc-img" />
                        </div>
                        <div class="top-skirt-description">
                            <h1 class="tsd-title">wrap collection</h1>
                            <!-- to skirt details container  -->
                            <div class="top-skirt-detail-container">
                                <!-- item 1 -->
                                <div class="tsdc-item" id="<?php echo 'top-skirt-' . $top_id1 . $skirt_id1 ?>">
                                    <p class="tsdc-item-name"><?php echo $top_name1 ?> + <?php echo $skirt_name1 ?></p>
                                    <p class="tsdc-item-price"> $<?php echo $top_price1 + $skirt_price1 ?> AUD</p>
                                    <p class="tsdc-item-size"> Sizes : 4-24</p>
                                    <p class="tsdc-item-info"><?php echo $product_info ?></p>
                                    <p class="tsdc-item-shop-pattern"><a href=""> SHOP DRESS PATTERN</a></a>
                                        <div class="tsdc-item-shop-individual-btn">
                                            <p><a href="">SHOP TOP ONLY</a></p>
                                            <p><a href="">SHOP SKIRT ONLY </a></p>
                                        </div>
                                        <div class="tsdc-item-top-desc">
                                            <p onclick="showTopDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-top-desc"><?php echo $top_description1 ?></p>
                                        </div>
                                        <div class="tsdc-item-skirt-desc">
                                            <p onclick="showSkirtDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-skirt-desc"><?php echo $skirt_description1 ?></p>
                                        </div>
                                        <div class="size-guide">
                                            <p onclick="SizeGuideToggle()"> <i class="fas fa-tape"></i>SIZE GUIDE</p>
                                            <div class="size-guide-table">
                                                <!-- table will be shown here using js -->
                                            </div>
                                        </div>
                                </div>

                                <!-- item 2 -->
                                <div class="tsdc-item" id="<?php echo 'top-skirt-' . $top_id1 . $skirt_id2 ?>">
                                    <p class="tsdc-item-name"><?php echo $top_name1 ?> + <?php echo $skirt_name2 ?></p>
                                    <p class="tsdc-item-price"> $<?php echo $top_price1 + $skirt_price2 ?> AUD</p>
                                    <p class="tsdc-item-size"> Sizes : 4-24</p>
                                    <p class="tsdc-item-info"><?php echo $product_info ?></p>
                                    <p class="tsdc-item-shop-pattern"><a href=""> SHOP DRESS PATTERN</a></a>
                                        <div class="tsdc-item-shop-individual-btn">
                                            <p><a href="">SHOP TOP ONLY</a></p>
                                            <p><a href="">SHOP SKIRT ONLY </a></p>
                                        </div>
                                        <div class="tsdc-item-top-desc">
                                            <p onclick="showTopDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-top-desc"><?php echo $top_description1 ?></p>
                                        </div>
                                        <div class="tsdc-item-skirt-desc">
                                            <p onclick="showSkirtDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-skirt-desc"><?php echo $skirt_description2 ?></p>
                                        </div>
                                        <div class="size-guide">
                                            <p onclick="SizeGuideToggle()"> <i class="fas fa-tape"></i>SIZE GUIDE</p>
                                            <div class="size-guide-table">
                                                <!-- table will be shown here using js -->
                                            </div>
                                        </div>
                                </div>

                                <!-- item 3 -->
                                <div class="tsdc-item" id="<?php echo 'top-skirt-' . $top_id1 . $skirt_id3 ?>">
                                    <p class="tsdc-item-name"><?php echo $top_name1 ?> + <?php echo $skirt_name3 ?></p>
                                    <p class="tsdc-item-price"> $<?php echo $top_price1 + $skirt_price3 ?> AUD</p>
                                    <p class="tsdc-item-size"> Sizes : 4-24</p>
                                    <p class="tsdc-item-info"><?php echo $product_info ?></p>
                                    <p class="tsdc-item-shop-pattern"><a href=""> SHOP DRESS PATTERN</a></a>
                                        <div class="tsdc-item-shop-individual-btn">
                                            <p><a href="">SHOP TOP ONLY</a></p>
                                            <p><a href="">SHOP SKIRT ONLY </a></p>
                                        </div>
                                        <div class="tsdc-item-top-desc">
                                            <p onclick="showTopDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-top-desc"><?php echo $top_description1 ?></p>
                                        </div>
                                        <div class="tsdc-item-skirt-desc">
                                            <p onclick="showSkirtDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-skirt-desc"><?php echo $skirt_description3 ?></p>
                                        </div>
                                        <div class="size-guide">
                                            <p onclick="SizeGuideToggle()"> <i class="fas fa-tape"></i>SIZE GUIDE</p>
                                            <div class="size-guide-table">
                                                <!-- table will be shown here using js -->
                                            </div>
                                        </div>
                                </div>

                                <!-- item 4 -->
                                <div class="tsdc-item" id="<?php echo 'top-skirt-' . $top_id2 . $skirt_id1 ?>">
                                    <p class="tsdc-item-name"><?php echo $top_name2 ?> + <?php echo $skirt_name1 ?></p>
                                    <p class="tsdc-item-price"> $<?php echo $top_price2 + $skirt_price1 ?> AUD</p>
                                    <p class="tsdc-item-size"> Sizes : 4-24</p>
                                    <p class="tsdc-item-info"><?php echo $product_info ?></p>
                                    <p class="tsdc-item-shop-pattern"><a href=""> SHOP DRESS PATTERN</a></a>
                                        <div class="tsdc-item-shop-individual-btn">
                                            <p><a href="">SHOP TOP ONLY</a></p>
                                            <p><a href="">SHOP SKIRT ONLY </a></p>
                                        </div>
                                        <div class="tsdc-item-top-desc">
                                            <p onclick="showTopDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-top-desc"><?php echo $top_description2 ?></p>
                                        </div>
                                        <div class="tsdc-item-skirt-desc">
                                            <p onclick="showSkirtDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-skirt-desc"><?php echo $skirt_description1 ?></p>
                                        </div>
                                        <div class="size-guide">
                                            <p onclick="SizeGuideToggle()"> <i class="fas fa-tape"></i>SIZE GUIDE</p>
                                            <div class="size-guide-table">
                                                <!-- table will be shown here using js -->
                                            </div>
                                        </div>
                                </div>

                                <!-- item 5 -->
                                <div class="tsdc-item" id="<?php echo 'top-skirt-' . $top_id2 . $skirt_id2 ?>">
                                    <p class="tsdc-item-name"><?php echo $top_name2 ?> + <?php echo $skirt_name2 ?></p>
                                    <p class="tsdc-item-price"> $<?php echo $top_price2 + $skirt_price2 ?> AUD</p>
                                    <p class="tsdc-item-size"> Sizes : 4-24</p>
                                    <p class="tsdc-item-info"><?php echo $product_info ?></p>
                                    <p class="tsdc-item-shop-pattern"><a href=""> SHOP DRESS PATTERN</a></a>
                                        <div class="tsdc-item-shop-individual-btn">
                                            <p><a href="">SHOP TOP ONLY</a></p>
                                            <p><a href="">SHOP SKIRT ONLY </a></p>
                                        </div>
                                        <div class="tsdc-item-top-desc">
                                            <p onclick="showTopDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-top-desc"><?php echo $top_description2 ?></p>
                                        </div>
                                        <div class="tsdc-item-skirt-desc">
                                            <p onclick="showSkirtDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-skirt-desc"><?php echo $skirt_description2 ?></p>
                                        </div>
                                        <div class="size-guide">
                                            <p onclick="SizeGuideToggle()"> <i class="fas fa-tape"></i>SIZE GUIDE</p>
                                            <div class="size-guide-table">
                                                <!-- table will be shown here using js -->
                                            </div>
                                        </div>
                                </div>

                                <!-- item 6 -->
                                <div class="tsdc-item" id="<?php echo 'top-skirt-' . $top_id2 . $skirt_id3 ?>">
                                    <p class="tsdc-item-name"><?php echo $top_name2 ?> + <?php echo $skirt_name3 ?></p>
                                    <p class="tsdc-item-price"> $<?php echo $top_price2 + $skirt_price3 ?> AUD</p>
                                    <p class="tsdc-item-size"> Sizes : 4-24</p>
                                    <p class="tsdc-item-info"><?php echo $product_info ?></p>
                                    <p class="tsdc-item-shop-pattern"><a href=""> SHOP DRESS PATTERN</a></a>
                                        <div class="tsdc-item-shop-individual-btn">
                                            <p><a href="">SHOP TOP ONLY</a></p>
                                            <p><a href="">SHOP SKIRT ONLY </a></p>
                                        </div>
                                        <div class="tsdc-item-top-desc">
                                            <p onclick="showTopDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-top-desc"><?php echo $top_description2 ?></p>
                                        </div>
                                        <div class="tsdc-item-skirt-desc">
                                            <p onclick="showSkirtDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-skirt-desc"><?php echo $skirt_description3 ?></p>
                                        </div>
                                        <div class="size-guide">
                                            <p onclick="SizeGuideToggle()"> <i class="fas fa-tape"></i>SIZE GUIDE</p>
                                            <div class="size-guide-table">
                                                <!-- table will be shown here using js -->
                                            </div>
                                        </div>
                                </div>

                                <!-- item 7 -->
                                <div class="tsdc-item" id="<?php echo 'top-skirt-' . $top_id3 . $skirt_id1 ?>">
                                    <p class="tsdc-item-name"><?php echo $top_name3 ?> + <?php echo $skirt_name1 ?></p>
                                    <p class="tsdc-item-price"> $<?php echo $top_price3 + $skirt_price1 ?> AUD</p>
                                    <p class="tsdc-item-size"> Sizes : 4-24</p>
                                    <p class="tsdc-item-info"><?php echo $product_info ?></p>
                                    <p class="tsdc-item-shop-pattern"><a href=""> SHOP DRESS PATTERN</a></a>
                                        <div class="tsdc-item-shop-individual-btn">
                                            <p><a href="">SHOP TOP ONLY</a></p>
                                            <p><a href="">SHOP SKIRT ONLY </a></p>
                                        </div>
                                        <div class="tsdc-item-top-desc">
                                            <p onclick="showTopDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-top-desc"><?php echo $top_description3 ?></p>
                                        </div>
                                        <div class="tsdc-item-skirt-desc">
                                            <p onclick="showSkirtDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-skirt-desc"><?php echo $skirt_description1 ?></p>
                                        </div>
                                        <div class="size-guide">
                                            <p onclick="SizeGuideToggle()"> <i class="fas fa-tape"></i>SIZE GUIDE</p>
                                            <div class="size-guide-table">
                                                <!-- table will be shown here using js -->
                                            </div>
                                        </div>
                                </div>

                                <!-- item 8 -->
                                <div class="tsdc-item" id="<?php echo 'top-skirt-' . $top_id3 . $skirt_id2 ?>">
                                    <p class="tsdc-item-name"><?php echo $top_name3 ?> + <?php echo $skirt_name2 ?></p>
                                    <p class="tsdc-item-price"> $<?php echo $top_price3 + $skirt_price2 ?> AUD</p>
                                    <p class="tsdc-item-size"> Sizes : 4-24</p>
                                    <p class="tsdc-item-info"><?php echo $product_info ?></p>
                                    <p class="tsdc-item-shop-pattern"><a href=""> SHOP DRESS PATTERN</a></a>
                                        <div class="tsdc-item-shop-individual-btn">
                                            <p><a href="">SHOP TOP ONLY</a></p>
                                            <p><a href="">SHOP SKIRT ONLY </a></p>
                                        </div>
                                        <div class="tsdc-item-top-desc">
                                            <p onclick="showTopDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-top-desc"><?php echo $top_description3 ?></p>
                                        </div>
                                        <div class="tsdc-item-skirt-desc">
                                            <p onclick="showSkirtDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-skirt-desc"><?php echo $skirt_description2 ?></p>
                                        </div>
                                        <div class="size-guide">
                                            <p onclick="SizeGuideToggle()"> <i class="fas fa-tape"></i>SIZE GUIDE</p>
                                            <div class="size-guide-table">
                                                <!-- table will be shown here using js -->
                                            </div>
                                        </div>
                                </div>

                                <!-- item 9 -->
                                <div class="tsdc-item" id="<?php echo 'top-skirt-' . $top_id3 . $skirt_id3 ?>">
                                    <p class="tsdc-item-name"><?php echo $top_name3 ?> + <?php echo $skirt_name3 ?></p>
                                    <p class="tsdc-item-price"> $<?php echo $top_price3 + $skirt_price3 ?> AUD</p>
                                    <p class="tsdc-item-size"> Sizes : 4-24</p>
                                    <p class="tsdc-item-info"><?php echo $product_info ?></p>
                                    <p class="tsdc-item-shop-pattern"><a href=""> SHOP DRESS PATTERN</a></a>
                                        <div class="tsdc-item-shop-individual-btn">
                                            <p><a href="">SHOP TOP ONLY</a></p>
                                            <p><a href="">SHOP SKIRT ONLY </a></p>
                                        </div>
                                        <div class="tsdc-item-top-desc">
                                            <p onclick="showTopDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-top-desc"><?php echo $top_description3 ?></p>
                                        </div>
                                        <div class="tsdc-item-skirt-desc">
                                            <p onclick="showSkirtDetails()">
                                                <i class="material-icons">add</i>Skirt
                                                Details
                                            </p>
                                            <p class="tsdc-skirt-desc"><?php echo $skirt_description3 ?></p>
                                        </div>
                                        <div class="size-guide">
                                            <p onclick="SizeGuideToggle()"> <i class="fas fa-tape"></i>SIZE GUIDE</p>
                                            <div class="size-guide-table">
                                                <!-- table will be shown here using js -->
                                            </div>
                                        </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- size guide modal -->

        <!-- look book container -->
        <div class="look-book-container">
            <div class="look-book-heading">
                <div class="look-book-title">
                    <p>Wrap Collection</p>
                    <h1>look book</h1>
                </div>
                <div class="look-book-heading-link">
                    <a href="">SHOP COLLECTION PATTERNS</a>
                </div>
            </div>
            <div class="look-book-shop">
                <!-- look book item 1 -->
                <div class="look-book-shop-item1">
                    <div class="lbsi-title">
                        <div class="lbsi-heading">
                            <h1>The Effortless Style Of The Wrap Dress</h1>
                        </div>
                        <div class="lbsi-shop-link">
                            <p>Freya Top + Classic Skirt Combo</p>
                            <a href="">SHOP THIS PATTERN</a>
                        </div>
                    </div>
                    <div class="lbsi-image">
                        <img src="./assets/images/look-book-img1.png" alt="" />
                    </div>
                </div>
                <!-- look book item 2 -->
                <div class="look-book-shop-item2">
                    <div class="lbsi2-image">
                        <img src="./assets/images/look-book-img2.png" alt="" />
                    </div>
                    <div class="lbsi2-shop-link">
                        <p>Lilly Top + Ruffle Skirt Combo</p>
                        <a href="">SHOP THIS PATTERN</a>
                    </div>
                </div>
                <!-- look book item 3 -->
                <div class="look-book-shop-item3">
                    <div class="lbsi3-title">
                        <h1>
                            SHOP THE SEPERATES.<br />
                            CREATE THEM AS INDIVIDUAL PIECES OR MIX + MATCH THEM TO CREATE
                            BEAUTIFUL DRESS COMBINATIONS....
                        </h1>
                    </div>
                    <div class="lbsi3-image">
                        <div class="lbsi3-image-item1">
                            <img src="./assets/images/look-book-img3.png" alt="" />
                        </div>
                        <div class="lbsi3-image-item2">
                            <div class="lbsi3-image-child">
                                <img src="./assets/images/look-book-img3-1.png" alt="" />
                                <p>Penelope Top</p>
                            </div>
                            <div class="lbsi3-image-child">
                                <img src="./assets/images/look-book-img3-2.png" alt="" />
                                <p>Stargazer Top</p>
                            </div>
                            <div class="lbsi3-image-child">
                                <img src="./assets/images/look-book-img3-3.png" alt="" />
                                <p>Classic Skirt</p>
                            </div>
                            <div class="lbsi3-image-child">
                                <img src="./assets/images/look-book-img3-4.png" alt="" />
                                <p>Ruffle Skirt</p>
                            </div>
                        </div>
                    </div>
                    <div class="lbsi3-shop-link">
                        <p>All Wrap Collection Seperates</p>
                        <a href="">SHOP NOW</a>
                    </div>
                </div>
                <!-- look book item 4-->
                <div class="look-book-shop-item4">
                    <div class="lbsi4-image">
                        <img src="./assets/images/look-book-img4.png" alt="" />
                    </div>
                    <div class="lbsi4-shop-link">
                        <p>Dandelion Top + Ruffle Skirt Combo</p>
                        <a href="">SHOP THIS PATTERN</a>
                    </div>
                </div>
                <!-- look book item 5-->
                <div class="look-book-shop-item5">
                    <div class="lbsi5-child1">
                        <div class="lbsi5-image">
                            <img src="./assets/images/look-book-img5.png" alt="" />
                        </div>
                        <div class="lbsi5-shop-link">
                            <p>Dandelion Top + Mini Skirt Combo</p>
                            <a href="">SHOP THIS PATTERN</a>
                        </div>
                    </div>
                    <div class="lbsi5-child2">
                        <div class="lbsi5-image">
                            <img src="./assets/images/look-book-img6.png" alt="" />
                        </div>
                        <div class="lbsi5-shop-link">
                            <p>Dandelion Top + Mini Skirt Combo</p>
                            <a href="">SHOP THIS PATTERN</a>
                        </div>
                    </div>
                </div>
                <!-- look book item 6 -->
                <div class="look-book-shop-item6">
                    <div class="lbsi6-title">
                        <h1>
                            FIND A TOP OR SKIRT YOU LOVE....<br />
                            then mix and match for endless DRESS possibilities.
                        </h1>
                    </div>
                    <div class="lbsi6-image">
                        <img src="./assets/images/look-book-img7.png" alt="" />
                    </div>
                    <div class="lbsi6-shop-link">
                        <p>
                            (LEFT) PENELOPE TOP AND RUFFLE MINI<br />
                            (RIGHT) PENELOPE TOP AND MINI RUFFLE
                        </p>
                        <a href="">SHOP COLLECTION</a>
                    </div>
                </div>
                <!-- look book item 7 -->
                <div class="look-book-shop-item7">
                    <div class="lbsi7-image">
                        <img src="./assets/images/look-book-img8.png" alt="" />
                    </div>
                    <div class="lbsi7-shop-link">
                        <p>Dandelion Top + Ruffle Skirt Combo</p>
                        <a href="">SHOP THIS PATTERN</a>
                    </div>
                </div>
                <!-- look book item 8 -->
                <div class="look-book-shop-item8">
                    <div class="lbsi8-image">
                        <img src="./assets/images/look-book-img9.png" alt="" />
                    </div>
                    <div class="lbsi8-shop-link">
                        <p>Dandelion Top + Ruffle Skirt Combo</p>
                        <a href="">SHOP THIS PATTERN</a>
                    </div>
                </div>

                <!-- look book all patterns link -->
                <div class="shop-all-patterns-link">
                    <p><a href="">SHOP ALL PATTERNS IN COLLECTION</a></p>
                </div>
            </div>
        </div>
        <!-- look book container -->
    </div>
    <!-- body container---------------------------------------------- -->

    <!-- footer container ------------------------------------------- -->
    <div class="footer-container">
        <div class="footer-content">
            <div class="sewing">
                <h1 class="title">Sewing</h1>
                <div class="sewing-list">
                    <p class="sewing-items"><a href="">Mix & Match Collections</a></p>
                    <p class="sewing-items"><a href="">Sew-Along Tutorials</a></p>
                    <p class="sewing-items">
                        <a href="">Quick Lessons + Journals</a>
                    </p>
                    <p class="sewing-items"><a href="">Difficulty Scale</a></p>
                </div>
            </div>

            <div class="discover">
                <h1 class="title">Discover</h1>
                <div class="discover-list">
                    <p class="discover-items">
                        <a href="">Our Story</a>
                    </p>
                    <p class="discover-items">
                        <a href="">Size Guide</a>
                    </p>
                    <p class="discover-items">
                        <a href="">Style Maker Stories</a>
                    </p>
                    <p class="discover-items">
                        <a href="">FAQs</a>
                    </p>
                    <p class="discover-items">
                        <a href="">GIving Back</a>
                    </p>
                    <p class="discover-items">
                        <a href="">Contact Us</a>
                    </p>
                    <p class="discover-items">
                        <a href="">Garment Care</a>
                    </p>
                </div>
            </div>

            <div class="contact">
                <div class="icon-title">
                    <img src="./assets/icons/sewing-icon.png" alt="" />
                    <p class="title">Get Our Free Frankie Wrap Skirt Pattern</p>
                </div>
                <div class="footer-link">
                    <p><a href="">GET IT HERE</a></p>
                </div>
                <div class="footer-social-links">
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fab fa-pinterest-p"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="far fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p class="copyright-label">copyright Made Lable 2020</p>
            <p class="privacy-policy"><a href="">Privacy Policy</a></p>
            <p class="terms-of-use"><a href="">Terms of Use</a></p>
        </div>
    </div>
    <!-- footer container ------------------------------------------- -->

    <script src="./js/index.js"></script>
</body>

</html>