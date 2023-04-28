<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/manage-product.css">
    <script src="https://kit.fontawesome.com/b1d36f5527.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <!-- product_id	user_id	category	product_name	product_price	product_img	product_desc -->
    <div class="blog-container">

        <table class="a">
            <thead>
                <tr>
                    <th class="id">PRODUCT ID</th>
                    <th class="title">PRODUCT NAME</th>
                    <th class="title">PRODUCT PRICE</th>
                    <th class="title">PRODUCT IMG</th>
                    <th class="title">PRODUCT DESCR</th>
                    <th class="delete">DELETE</th>
                    <th class="edit">EDIT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="blog"><span class="prod-id">123123</span></td>
                    <td><span class="blog-title">A VERY LONG TITLE BECACUSE WE ARE RTESTING THE RESPNSIVENESS OF THIS SHIT</span></td>
                    <td><span class="blog-title">price dito</span></td>
                    <td><span class="blog-title">IMG DITO MAHABA</span></td>
                    <td><span class="blog-title">DESCRIPTION dito naman mahaba</span></td>
                    <td><span class="blog-delete"><i class="fa-regular fa-trash-can"></i></span></td>
                    <td><span class="blog-edit"><i class="fa-regular fa-pen-to-square"></i></span></td>
                </tr>

            </tbody>
        </table>

        <button class="button" id="btn-add">ADD A POST</button>

    </div>

    <?php require_once '../components/footer.php' ?>
</body>

</html>