

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/blog-cms.css">

    <script src="https://kit.fontawesome.com/b1d36f5527.js" crossorigin="anonymous"></script>
    <title>Blog Management</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>

    <div class="blog-container">
        <a href="add-blog.php"><button class="button">ADD A POST</button></a>
        <!-- id="btn-add" -->
        <table class="a">
            <thead>
                <tr>
                    <th class="id">POST ID</th>
                    <th class="title">BLOG TITLE</th>
                    <th class="title">BLOG CONTENT</th>
                    <th class="delete">DELETE</th>
                    <th class="edit">EDIT</th>
                </tr>
            </thead>
            <tbody>

                <?php
                require_once '../config.php';
                $sql = "SELECT * FROM blog_post";
                if ($result = $conn-> query($sql)) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_array()) {
                            echo '<tr>';
                            echo '<td class="blog"><span class="blog-id">' . $row['post_id'] . '</span></td>';
                            echo '<td><span class="blog-title">' . $row['title'] . '</span></td>';
                            echo '<td><span class="blog-title">' . $row['content'] . '</span></td>';
                            // echo '<td><a id="btn-add" href="backend/blog-delete2.php?post_id=' . $row['post_id'] . '" title="Delete Record" data-toggle="tooltip"><span class="blog-delete"><i class="fa-regular fa-trash-can"></i></span></a></td>';

                            echo '<td><a href="../backend/blog-delete.php?post_id=' . $row['post_id'] . '"title="Delete Record" data-toggle="tooltip"><span class="blog-delete" onclick="return confirm('."'". "Are you sure?" ."'".');"><i class="fa-regular fa-trash-can"></i></span></a></td>';
                            echo '<td><a href="edit-blog.php?post_id=' . $row['post_id'] . '" title="Edit Record" data-toggle="tooltip"><span class="blog-edit"><i class="fa-regular fa-pen-to-square"></i></span></a></td>';
                            
                        }
                        $result->free();
                    }
                }
                $conn->close();
                ?>

                </tr>
            </tbody>
        </table>


    </div>
    <?php require_once '../components/footer.php' ?>
</body>

</html>