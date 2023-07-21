<?php
class ArticleModel
{
    public static function getArticlesByCategory($categoryId)
    {
        $servername = "localhost";
        $username = "mglsi_user";
        $password = "passer";
        $dbname = "mglsi_news";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = $categoryId == 0 ? "SELECT * FROM Article" : "SELECT * FROM Article WHERE categorie = $categoryId";
         
        $result = $conn->query($sql);

        $articles = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $articles[] = $row;
            }
        }

        $conn->close();

        return $articles;
    }
}
?>
