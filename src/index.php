<?php
$todos = [
    'Installer Docker',
    'Construire l image php-todo',
    'Lancer le conteneur sur le port 8888',
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO Docker</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #1f2933;
        }

        main {
            max-width: 720px;
            margin: 48px auto;
            padding: 32px;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.12);
        }

        h1 {
            margin-top: 0;
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 12px;
        }

        .status {
            margin-top: 24px;
            padding: 16px;
            background: #e8f7ee;
            border-left: 4px solid #2f9e44;
        }
    </style>
</head>
<body>
    <main>
        <h1>Application TODO</h1>
        <p>Cette page est servie par Apache depuis une image Docker basee sur PHP 8.</p>
        <ul>
            <?php foreach ($todos as $todo): ?>
                <li><?php echo htmlspecialchars($todo, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
        </ul>
        <div class="status">Image Docker prete pour le TP.</div>
    </main>
</body>
</html>