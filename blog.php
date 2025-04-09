<?php
include "path.php";
include "applicate/control/topics.php";

// Инициализация переменных по умолчанию
$posts = selectAll('posts'); // Отображение всех статей по умолчанию
$category = null;
$topics = selectAll('topics'); // Получение списка всех категорий
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sinergetix</title>
  <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
<div class="wrapper">
  
  <?php include("applicate/include/header.php"); ?>
    
  <main class="main">
    <hr>
        <div class="content-row">
            <!-- Sidebar -->
            <div class="sidebar">
                <div class="topics-wrap">
                    <select id="category-select" class="category-dropdown" onchange="location = this.value;">
                        <option value="<?= BASE_URL . 'blog.php'; ?>">Все категории</option>
                        <?php foreach ($topics as $topic): ?>
                            <option value="<?= BASE_URL . 'blog.php?id=' . $topic['id']; ?>" 
                                <?= (isset($_GET['id']) && $_GET['id'] == $topic['id']) ? 'selected' : ''; ?>>
                                <?= $topic['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

        </div>
        <div class="topic-stat">
            <!-- Main Content -->
            
                <?php
                // Проверка, выбрана ли категория
                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    $id = $_GET['id'];
                    $posts = selectAll('posts', ['id_topic' => $id]);
                    $category = selectOne('topics', ['id' => $id]);
                }
                ?>
                
                <ul class="topic-list">
                    <?php foreach ($posts as $post): ?>
                        <li class="topic-item">
                            <a class="topic-link" href="<?= BASE_URL . 'single.php?post=' . $post['id']; ?>">
                                <div class="topic-img-container">
                                    <img class="topic-img" src="<?= BASE_URL . 'asset/img/posts/' . $post['img']; ?>" alt="<?= $post['title']; ?>">
                                    <div class="topic-text-overlay">
                                        <p class="topic-text"><?= mb_substr($post['title'], 0, 80, 'UTF-8'); ?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

        </div>
                    
  </main>
<hr>
  <?php include("applicate/include/footer.php"); ?>

</div>
</body>
</html>
