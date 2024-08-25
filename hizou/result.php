<?php
session_start();
$user = $_SESSION['pseudo'];
include 'db.php';
include 'config/session/img-profile.php'
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Résultats de recherche pour "hizou" - WebSim</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f2f5;
    color: #333;
  }
  .container {
    display: flex;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }
  .main-content {
    flex: 7;
    margin-right: 30px;
  }
  .sidebar {
    flex: 3;
    background-color: white;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    height: fit-content;
  }
  .header {
    background-color: #4a90e2;
    padding: 15px 0;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }
  .header-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  .logo {
    font-size: 2em;
    color: white;
    font-weight: bold;
    text-decoration: none;
  }
  .search-form {
    flex-grow: 1;
    max-width: 600px;
    margin: 0 20px;
    display: flex;
  }
  .search-input {
    flex-grow: 1;
    padding: 10px 15px;
    font-size: 16px;
    border: none;
    border-radius: 25px 0 0 25px;
    outline: none;
  }
  .search-button {
    background-color: #2c3e50;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 0 25px 25px 0;
    transition: background-color 0.3s;
  }
  .search-button:hover {
    background-color: #34495e;
  }
  .result {
    background-color: white;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: transform 0.2s;
  }
  .result:hover {
    transform: translateY(-5px);
  }
  .result h2 {
    margin-top: 0;
    color: #4a90e2;
  }
  .result h2 a {
    text-decoration: none;
    transition: color 0.3s;
  }
  .result h2 a:hover {
    color: #2c3e50;
  }
  .result p {
    color: #666;
    font-size: 14px;
    line-height: 1.6;
  }
  .result .url {
    color: #27ae60;
    font-size: 12px;
  }
  .sidebar h3 {
    color: #4a90e2;
    border-bottom: 2px solid #4a90e2;
    padding-bottom: 10px;
  }
  .sidebar ul {
    padding-left: 20px;
    list-style-type: none;
  }
  .sidebar li {
    margin-bottom: 15px;
  }
  .sidebar a {
    color: #2c3e50;
    text-decoration: none;
    transition: color 0.3s;
  }
  .sidebar a:hover {
    color: #4a90e2;
  }
  .user-profile {
    display: flex;
    align-items: center;
  }
  .user-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
    object-fit: cover;
    border: 2px solid white;
  }
  .user-name {
    color: white;
    font-weight: bold;
  }
  #form{
    color: blue;
    text-decoration: none;
  }
  #shild-2{
    background: white;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 100%;
    color: black;
    text-decoration: none;
    font-size: 22px;
    cursor: pointer;
    height: 40px;
    width: 40px;
    position: relative;
    margin-right: 10px;
    object-fit: cover;
    border: 2px solid white;
  }
</style>
</head>
<body>
  <header class="header">
    <div class="header-content">
      <p class="logo">Hizou</p>
      <form class="search-form" action="result.php" method="GET">
        <input type="text" name="query" placeholder="Surfer sur le web ..." class="search-input" required>
        <button type="submit" class="search-button">Rechercher</button>
      </form>
      <?php if (isset($_SESSION['pseudo'])): ?>
      <div class="user-profile">
          <a href="conexion-compte.php" target="_blank" class="user-avatar" style="background-image: url(<?php echo htmlspecialchars($profileImage); ?>);background-repeat: no-repeat;background-size: cover;border-radius: 100%;"></a>
        <?php else: ?>
            <a href="connexion.php" target="" method="get" id="a"><i class="fa-solid fa-user" id="shild-2"></i></a>
        <?php endif; ?>
        <a  href="conexion-compte.php" target="_blank" class="user-name"><?php echo htmlspecialchars($user); ?></a>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="main-content">
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
                        // echo "<img src='" . $row["image_url"] . "' alt='" . $row["nom_site"] . " logo' class='logo-img'>";
                        echo "<div>";
                        echo "<h2>" . $row["nom_site"] . "</h2>";
                        echo "<p class='pa-lien-url'><a href='" . $row["url"] . "' class='pa-lien-url'>" . $row["url"] . "</a></p>";
                        echo "<p><strong>Développeur:</strong> " . $row["nom_developpeur"] . "</p>";
                        // echo "<p><strong>Recherches:</strong> " . $row["recherches"] . "</p>";
                        echo "<p><strong>Description:</strong> " . $row["description"] . "</p>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Aucun résultat trouvé pour '" . htmlspecialchars($search_query) . "'.</p>";
                    echo "<p>Si votre recheche n'est pas aparue c'est peut être car vous avez fais une faute d'ortographe ou alors que un site permettant d'y acceder n'est pas dans notre base de donné.
                     Pour résoudre se probleme de notre part clicker ici une récompense sympatique vous attend !   <a id='form' href='create-site/new-site.php'>Crée un site pour nous</a>.</p>";

                }
            }

            // Fermer la connexion
            $conn->close();
            ?>
  </div>
</body></html>