<?php
    include "path.php";
    include "applicate/control/topics.php";
    $limit = 6;

    $page = isset($_GET['page']) ? $_GET['page']: 1;
    $offset = $limit * ($page - 1);
 
    $posts = selectLatestPosts('posts'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sinergetix</title>
  <link rel="stylesheet" href="asset\css\style.css">
</head>
<body>
<div class="wrapper">
  
  <?php include("applicate/include/header.php")?>

  <main class="main">
    <hr>
    <div class="hello-block">
      <p class="hello-text">
        "Всякий раз, когда я нахожу новую закономерность в природе, я нахожу смысл в своей жизни."
      </p>
      <div class="transcrib">
        <p class="hello-author">
          — Рэйчел Карсон
        </p>
        <p class="hello-outher">
          О глубокой связи науки с личным вдохновением и любовью к миру.
        </p>
      </div>
    </div>

    <div class="topic-stat">
      <h1 class="topic-title"><span>Самые интересные статьи по биологии собранные в нашем в блоге:</span></h1>
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



      <a href="<?php echo BASE_URL . 'blog.php' ?>" class="topic-plus">
                    Показать больше статей ➡
      </a>
      <a href="<?=BASE_URL . 'all_articles.php'; ?>" ></a>
</div>

    <hr>
  </main>

  <?php include("applicate/include/footer.php")?>

</div>
</body>
</html>