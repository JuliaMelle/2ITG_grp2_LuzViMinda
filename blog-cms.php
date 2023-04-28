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
        <?php
        
        require_once 'config.php';
        $sql = "SELECT * FROM blog_post";
        if ($result = $mysqli->query($sql)) {
            if ($result->num_rows > 0) {
        echo '<table class="a">';
        echo    '<thead>';
        echo        '<tr>';
        echo            '<th class="id">ID</th>';
        echo           ' <th class="title">BLOG TITLE</th>';
        echo           ' <th class="title">BLOG CONTENT</th>';
        echo           '<th class="delete">DELETE</th>';
        echo           '<th class="edit">EDIT</th>';
        echo        '</tr>';
        echo    '</thead>';
        echo    '<tbody>';
        while ($row = $result->fetch_array()) {
        echo        '<tr>';
        echo            '<td class="blog"><span class="blog-id">' . $row['post_id'] . '</span></td>';
        echo            '<td><span class="blog-title">' . $row['title'] . '</span></td>';
        echo            '<td><span class="blog-title">' . $row['content'] . '</span></td>';
        echo            '<td><span class="blog-delete"><i class="fa-regular fa-trash-can"></i></span></td>';
        echo            '<td><span class="blog-edit"><i class="fa-regular fa-pen-to-square"></i></span></td>';
        echo        '</tr>';
        }
        echo    '</tbody>';
        echo '</table>';
        $result->free();
    } else {
        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
    }
} else {
    echo "Oops! Something went wrong. Please try again later.";
}

// Close connection
$mysqli->close();
?>

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