<head>
    <title>ClassifyAndUse | Search</title>
    <!-- icon -->
    <link rel="icon" href="favicon.ico">
    <!-- search.css -->
    <link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>
    <!-- input form -->
    <form action="search.php" method="post">
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="submit-search">Search</button>
    </form>
    <!-- search results -->
    <h1>Search Results</h1>
    <div class="article-container">
        <?php
            include 'settings.php';
            if (isset($_POST['submit-search'])) {
                $search = mysqli_real_escape_string($conn, $_POST['search']);
                $sql = "SELECT * FROM articles WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_author LIKE '%$search%' OR a_date LIKE '%$search%'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);
                if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='article-box'>
                            <h3>".$row['a_title']."</h3>
                            <p>".$row['a_text']."</p>
                            <p>".$row['a_author']."</p>
                            <p>".$row['a_date']."</p>
                        </div>";
                    }
                } else {
                    echo "There are no results matching your search!";
                }
            }
        ?>
