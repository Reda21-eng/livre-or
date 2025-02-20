<?php 

include_once '../bdd/db.php'; // Assurez-vous que db.php définit correctement $pdo
session_start();
var_dump($_POST);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 5;
$offset = ($page - 1) * $limit;

// Vérification de la connexion PDO
if (!isset($pdo)) {
    die("Erreur de connexion à la base de données.");
}

// Vérifier si un commentaire est soumis
if (isset($_POST['comment']) && !empty($_POST['comment'])) {
    // Vérifier si l'utilisateur est connecté
    if (isset($_SESSION['user_id'])) {
        $comment = htmlspecialchars($_POST['comment']);
        $user_id = $_SESSION['user_id']; // Récupérer l'ID de l'utilisateur depuis la session

        // Préparation de la requête d'insertion
        $stmt = $pdo->prepare("INSERT INTO comment (comment, id_user, date) VALUES (:comment, :user_id, NOW())");
        $stmt->bindParam(':comment', $comment);
        $stmt->bindParam(':user_id', $user_id);

        // Exécution de la requête
        if ($stmt->execute()) {
            echo "Commentaire ajouté avec succès.";
        } else {
            echo "Erreur lors de l'ajout du commentaire.";
        }
    } else {
        echo "Vous devez être connecté pour ajouter un commentaire.";
    }
}

// Récupération du nombre total de commentaires
$stmt = $pdo->prepare("SELECT COUNT(*) FROM comment");
$stmt->execute();
$total_comments = $stmt->fetchColumn();
$total_pages = ceil($total_comments / $limit);

// Récupération des commentaires avec correction des paramètres
$stmt = $pdo->prepare("SELECT * FROM comment ORDER BY date DESC LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
$stmt->execute();
$comments = $stmt->fetchAll();

if(isset($_POST['deconnexion'])) {
    session_destroy();
    header('Location: ../../index.php');
    exit(); // Assurez-vous de terminer le script après une redirection
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'Or</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../../index.php">Accueil</a></li>
                <li><a href="livre-or.php">Livre d'Or</a></li>
                <?php
                if(isset($_SESSION['user'])) {
                    echo("<li><form method='post' action=''><button name='deconnexion' type='submit'>déconnexion</button></form></li>");
                } else {
                    echo("
                    <li><a href='inscription.php'>S'inscrire</a></li>
                    <li><a href='connexion.php'>Se connecter</a></li>
                    ");
                }
                ?>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Livre d'Or</h1>
        <?php foreach ($comments as $comment): ?>
            <div class="comment">
                <p><strong>Posté le <?php echo date("d/m/Y", strtotime($comment['date'])); ?> par l'utilisateur <?php echo htmlspecialchars($comment['id_user']); ?></strong></p>
                <p><?php echo htmlspecialchars($comment['comment']); ?></p>
            </div>
        <?php endforeach; ?>

        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="commentaire.php">Ajouter un commentaire</a>
        <?php endif; ?>

        <div class="pagination">
            <?php if ($page > 1): ?>
                <a href="?page=<?php echo $page - 1; ?>">Précédent</a>
            <?php else: ?>
                <span>Précédent</span>
            <?php endif; ?>

            <?php if ($page < $total_pages): ?>
                <a href="?page=<?php echo $page + 1; ?>">Suivant</a>
            <?php else: ?>
                <span>Suivant</span>
            <?php endif; ?>
        </div>

        <?php if (isset($_SESSION['user_id'])): ?>

            <form method="POST">
                
             
            </form>
        <?php else: ?>
            <p>Vous devez <a href="connexion.php">vous connecter</a> pour ajouter un commentaire.</p>
        <?php endif; ?>
    </main>
</body>
</html>