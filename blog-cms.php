<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/blog-cms.css">

    <script src="https://kit.fontawesome.com/b1d36f5527.js" crossorigin="anonymous"></script>
    <title>Blog Management</title>
</head>

<body>
    <?php require_once 'components/navbar.php' ?>

    <div class="blog-container">
        <button class="button" id="btn-add">ADD A POST</button>
        <table class="a">
            <thead>
                <tr>
                    <th class="id">ID</th>
                    <th class="title">BLOG TITLE</th>
                    <th class="delete">DELETE</th>
                    <th class="edit">EDIT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="blog"><span class="blog-id">123123</span></td>
                    <td><span class="blog-title">A VERY LONG TITLE BECACUSE WE ARE RTESTING THE RESPNSIVENESS OF THIS SHIT</span>
                    </td>
                    <td><span class="blog-delete"><i class="fa-regular fa-trash-can"></i></span></td>
                    <td><span class="blog-edit"><i class="fa-regular fa-pen-to-square"></i></span></td>
                </tr>
                <tr>
                    <td><span class="blog-id">123124</span></td>
                    <td><span class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id pellentesque ipsum. Curabitur viverra turpis sed vestibulum porttitor. Sed risus arcu, mattis at luctus vitae, varius in magna. Fusce velit sem, malesuada id iaculis vitae, iaculis quis quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id pellentesque ipsum. Curabitur viverra turpis sed vestibulum porttitor. Sed risus arcu, mattis at luctus vitae, varius in magna. Fusce velit sem, malesuada id iaculis vitae, iaculis quis quam.</span>
                    </td>
                    <td><span class="blog-delete"><i class="fa-regular fa-trash-can"></i></span></td>
                    <td><span class="blog-edit"><i class="fa-regular fa-pen-to-square"></i></span></td>
                </tr>
            </tbody>
        </table>



    </div>

    <!-- ADD POST MODAL -->
    <div id="add-modal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <hr>

            <form action="">
                <p>TITLE</p>
                <input type="text" name="" id="" placeholder='Title here'>
                <span class="blog-category">BLOG</span>
                <p>BLOG CONTENT</p>
                <textarea placeholder='Enter comment...' maxlength='10000' minlength='100'></textarea>
                <button type="submit" class="button" id="myBtn">PUBLISH POST</button>
            </form>

        </div>

    </div>

    <?php require_once 'components/footer.php' ?>

    <script>
        // Get the modal
        var modal = document.getElementById("add-modal");

        // Get the button that opens the modal
        var btn = document.getElementById("btn-add");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>