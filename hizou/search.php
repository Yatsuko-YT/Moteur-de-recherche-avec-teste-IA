<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat de recherche</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container-exter{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            gap: 25px;
        }
        .container-infer{
            width: 875px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            position: relative;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .container{
            background-color: white;
            border: 2.5px solid grey;
            width: 650px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 10px;
            padding: 10px;
            max-height: 500px;
        }
        .search-bar {
            display: flex;
            margin-bottom: 20px;
        }
        .search-bar input[type="text"] {
            flex: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px 0 0 4px;
            border-radius: 20px 0 0 20px;
            color: black;
        }
        .search-bar button {
            padding: 10px 20px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-left: none;
            color: grey;
            cursor: pointer;
            border-radius: 0 4px 4px 0;
        }
        .search-bar button:hover {
            background-color: grey;
            color: white;
        }
        .result {
            display: flex;
            align-items: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background: #fff;
            margin-bottom: 20px;
        }
        .result img {
            margin-right: 20px;
            border-radius: 4px;
        }
        .result h2 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }
        .result p {
            margin: 5px 0;
            color: #666;
        }
        .result a {
            color: #007bff;
            text-decoration: none;
        }
        .result a:hover {
            text-decoration: underline;
        }
        .pa-lien-url{
            text-decoration: none;
        }
        .pa-lien-url:hover{
            text-decoration: none;
        }
        .logo-img{
            max-width: 100px;
            max-height: 100px;
            border-radius: 20px;
        }.header {
    text-align: center;
    margin-bottom: 20px;
}

.logo {
    width: 100px;
}

.suggestions {
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
}

.suggestions button {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px;
    margin: 0;
    border-radius: 5px;
    cursor: pointer;
    margin: 0 5px; /* Add margin to create space between buttons */
}

.suggestions button:hover {
    background-color: #0056b3;
}

.input-area {
    display: flex;
    flex-direction: row;
    margin-bottom: 20px;
}

.input-area input {
    width: 80%;
    padding: 10px;
    margin: 0 0 0 5px;
    border-radius: 5px 0 0 5px;
    border: 2px solid grey;
}

.input-area button {
    background-color: white;
    color: grey;
    border: 2px solid grey;
    padding: 10px;
    border-radius:0 5px 5px 0;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
}

.input-area button:hover {
    background-color: grey;
    color: white;
    border: 2px solid grey;
}

.response-area {
    background-color: #e9ecef;
    padding: 10px;
    border-radius: 5px;
}
.logo{
    border-radius: 20px;
}
#awi{
    margin: 100px 0 20px 0;
    color: #333;
    text-decoration: none;
    position: relative;
}
@media screen and (max-width: 840px){
    .container{
        display: none;
    }
}
        
    </style>
</head>
<body>
    <div class="container-exter">
        <div class="container-infer">
            <form class="search-bar" action="search.php" method="GET">
                <input type="text" name="query" placeholder="Surfer sur le web ...">
                <button type="submit">Rechercher</button>
            </form>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "hizou";

            // Créer la connexion
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Vérifier la connexion
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Récupérer la recherche de l'utilisateur
            $search_query = isset($_GET['query']) ? $_GET['query'] : '';

            if (!empty($search_query)) {
                // Préparer et exécuter la requête SQL
                $sql = "SELECT * FROM sitesWeb WHERE nom_site LIKE '%$search_query%' OR description LIKE '%$search_query%'";
                $result = $conn->query($sql);

                // Vérifier s'il y a des résultats
                if ($result->num_rows > 0) {
                    // Afficher les résultats
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='result'>";
                        echo "<img src='" . $row["image_url"] . "' alt='" . $row["nom_site"] . " logo' class='logo-img'>";
                        echo "<div>";
                        echo "<h2>" . $row["nom_site"] . "</h2>";
                        echo "<p><strong>Développeur:</strong> " . $row["nom_developpeur"] . "</p>";
                        // echo "<p><strong>Recherches:</strong> " . $row["recherches"] . "</p>";
                        echo "<p><strong>Description:</strong> " . $row["description"] . "</p>";
                        echo "<p class='pa-lien-url'><a href='" . $row["url"] . "' class='pa-lien-url'>" . $row["url"] . "</a></p>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Aucun résultat trouvé pour '" . htmlspecialchars($search_query) . "'.</p>";
                }
            }

            // Fermer la connexion
            $conn->close();
            ?>
        </div>
        <div class="container">
            <div class="header">
                <h1>Parler a Awi</h1>
                <p id="des">Awi votre assistant au quotidien</p>
                <img src="images/Awi.png" alt="" class="logo">
            </div>
            <div class="suggestions">
                <button onclick="suggestQuestion('Quelle est la météo aujourd\'hui ?')">Quelle est la météo aujourd'hui ?</button>
                <button onclick="suggestQuestion('Comment cuisiner un gâteau au chocolat ?')">Comment cuisiner un gâteau au chocolat ?</button>
                <button onclick="suggestQuestion('Quels sont les bienfaits de la méditation ?')">Quels sont les bienfaits de la méditation ?</button>
                <button onclick="suggestQuestion('Comment fonctionne l\'IA ?')">Comment fonctionne l'IA ?</button>
            </div>
            <div class="input-area">
                <input type="text" id="userQuestion" placeholder="Posez votre question ici..." required>
                <button onclick="processQuestion()">Envoyer</button>
            </div>
            <div class="response-area" id="responseArea"></div>
            <a href="Aurora/Aurora.html" target="_blank" id="awi">Vister le site</a>
            <br>
            <hr>
        <script src="script.js"></script>
        </div>
    </div>
</body>
</html>

