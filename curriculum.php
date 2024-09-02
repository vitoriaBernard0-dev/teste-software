<<<<<<< HEAD
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: index.php");
    exit();
}

include 'users.php';

if (!isset($_GET['user']) || !isset($curriculums[$_GET['user']])) {
    header("location: dashboard.php");
    exit();
}

$user_data = $curriculums[$_GET['user']];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Currículo de <?php echo $user_data['name']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="curriculum-container">
        <h1><?php echo $user_data['name']; ?></h1>
        <p><?php echo $user_data['bio']; ?></p>
        <p><strong>Experiência Profissional:</strong> <?php echo $user_data['experience']; ?></p>
        <p><strong>Formação Acadêmica:</strong> <?php echo $user_data['education']; ?></p>
        <p><a href="<?php echo $user_data['linkedin']; ?>">LinkedIn</a> | <a href="<?php echo $user_data['github']; ?>">GitHub</a></p>
        <a href="dashboard.php" class="back-btn">Voltar</a>
    </div>
</body>
</html>
=======
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: index.php");
    exit();
}

include 'users.php';

if (!isset($_GET['user']) || !isset($curriculums[$_GET['user']])) {
    header("location: dashboard.php");
    exit();
}

$user_data = $curriculums[$_GET['user']];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Currículo de <?php echo $user_data['name']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="curriculum-container">
        <h1><?php echo $user_data['name']; ?></h1>
        <p><?php echo $user_data['bio']; ?></p>
        <p><strong>Experiência Profissional:</strong> <?php echo $user_data['experience']; ?></p>
        <p><strong>Formação Acadêmica:</strong> <?php echo $user_data['education']; ?></p>
        <p><a href="<?php echo $user_data['linkedin']; ?>">LinkedIn</a> | <a href="<?php echo $user_data['github']; ?>">GitHub</a></p>
        <a href="dashboard.php" class="back-btn">Voltar</a>
    </div>
</body>
</html>
>>>>>>> a9451c3dfe69788b21995521abde373d67292752
