<head>
    <title>ClassifyAndUse | Add</title>
    <!-- icon -->
    <link rel="icon" href="favicon.ico">
    <!-- add.css -->
    <link rel="stylesheet" type="text/css" href="add.css">
</head>
<body>
    <!-- input form -->
    <form action="add.php" method="post">
        <input type="text" name="title" placeholder="Title">
        <br />
        <input type="text" name="text" placeholder="Text">
        <br />
        <input type="text" name="author" placeholder="Author">
        <br />
        <input type="text" name="category" placeholder="Category">
        <br />
        <button type="submit" name="submit-add">Add</button>
    </form>
    <!-- add results -->
    <h1>Add Results</h1>
    <div class="article-container">
        <?php
            include 'settings.php';
            if (isset($_POST['submit-add'])) {
                $title = mysqli_real_escape_string($conn, $_POST['title']);
                $text = mysqli_real_escape_string($conn, $_POST['text']);
                $author = mysqli_real_escape_string($conn, $_POST['author']);
                $category = mysqli_real_escape_string($conn, $_POST['category']);
                $sql = "INSERT INTO articles (a_title, a_text, a_author, a_category) VALUES ('$title', '$text', '$author', '$category')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "Article added successfully!";
                } else {
                    echo "Article not added!";
                }
            }
        ?>
</body>