<!DOCTYPE html>
<html>

<head>
    <title>Actualités polytechniciennes</title>
    <style>
        body {}

        .center-content {
            text-align: center;
            color: white;
        }

        h1 {
            text-transform: uppercase;
            font-size: 36px;
        }

        h2 {
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        li { 
            border-left: 1px solid;
            border-right: 1px solid;
            border-bottom: 2px solid transparent;
            padding: 10px; 
        }

        li:hover {
            border-bottom-color: red;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .article {
            border: 2px solid;
            border-bottom: 2px solid;
            background-color: lightgray;
            padding: 5px;
            border-radius: 10px;
            margin: 5px;
            margin-left: 10%;
            margin-right: 10%;
        }

        .header {
            background-color: black;
            border: 1px solid white;
        }

        .menu {
            border: 1px solid white;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="center-content">
            <h1>Actualités polytechniciennes</h1>
        </div>
        <div class="menu center-content">
             
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php?controller=ArticleController&action=showByCategory&category=1">Sport</a></li>
                    <li><a href="index.php?controller=ArticleController&action=showByCategory&category=2">Santé</a></li>
                    <li><a href="index.php?controller=ArticleController&action=showByCategory&category=3">Education</a>
                    </li>
                    <li><a href="index.php?controller=ArticleController&action=showByCategory&category=4">Politique</a>
                    </li>
                </ul>  
        </div>
    </div>
    <div>
        <h2>Les dernières actualités </h2>
        <?php
    if (empty($articles)) {
        echo "<div class='article'>";
        echo "Aucun article trouvé.";
        echo "</div>";
    } else {
        foreach ($articles as $article) {
            echo "<div class='article'>";
            echo "<h3>" . $article['titre'] . "</h3>";
            echo "<p>" . $article['contenu'] . "</p>";
            echo "</div>";
        }
    }
    ?>
    </div>

</body>

</html>