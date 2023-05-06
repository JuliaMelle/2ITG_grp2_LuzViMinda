<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/footer.css">


    <link rel="stylesheet" href="../styles/seller-account.css">
    <title>Account Page</title>
</head>

<body>
    <?php require_once '../components/navbar-seller.php' ?>

    <!-- ITO YUNG PAGE FOR VIEWERS ONLY -->


    <!-- // ACCOUNT DETAILS -->
    <div class="wrapper">
        <div class="header orange"></div>
        <div class="flex content">

            <div class="profile-img">
                <h1>EXAMPLE</h1>
            </div>

            <div class="details">
                <h3>Seller Name</h3>
                <div class="box"></div>
                <h3>Email</h3>
                <div class="box"></div>
                <h3>Link</h3>
                <div class="box"></div>
            </div>

        </div>

    </div>

    <!-- // SHOW PRODUCTS OF SELLER -->
    <div class="wrapper-prod">

        <div class="header blue"></div>
        <h1 class="label">Products</h1>
        <div class="card-wrapper">
            <div class="flex-2">
            
                <div class="card">
                    <div class="details-prod">
                        <div class="category">category</div>
                        <img class="product-img">
                    </div>
                    <h3>IMG</h3>
                    <h3>naame item</h3>
                    <h3>sellrer</h3>

                </div>

                <div class="card">
                    <div class="details-prod">
                        <div class="category">category</div>
                        <img class="product-img">
                    </div>
                    <h3>IMG</h3>
                    <h3>naame item</h3>
                    <h3>sellrer</h3>

                </div>

                <div class="card">
                    <div class="details-prod">
                        <div class="category">category</div>
                        <img class="product-img">
                    </div>
                    <h3>IMG</h3>
                    <h3>naame item</h3>
                    <h3>sellrer</h3>

                </div>

                <div class="card">
                    <div class="details-prod">
                        <div class="category">category</div>
                        <img class="product-img">
                    </div>
                    <h3>IMG</h3>
                    <h3>naame item</h3>
                    <h3>sellrer</h3>

                </div>

                <div class="card">
                    <div class="details-prod">
                        <div class="category">category</div>
                        <img class="product-img">
                    </div>
                    <h3>IMG</h3>
                    <h3>naame item</h3>
                    <h3>sellrer</h3>

                </div>
                
            </div>

            



        </div>

    </div>


    <?php require_once '../components/footer.php' ?>
</body>

</html>