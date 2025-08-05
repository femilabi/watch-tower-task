<?php
use function App\Helpers\timeAgo;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title; ?></title>
  <script type="module" crossorigin src="<?= BASE_URL ?>app/views/assets/root.js"></script>
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/root.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/index.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/common.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/ad-container.css">
</head>

<body>
  <?php include "includes/header.php"; ?>
  <main>
    <section id="categories">
      <div class="container">
        <menu>
          <?php for ($i = 0; $i < count($post_categories); $i++): ?>
            <a href=""><?= $post_categories[$i]["cate_name"] ?></a>
          <?php endfor; ?>
          <button>
            <span>More</span>
            <svg width="16" height="16" viewBox="0 0 17 17">
              <use href="<?= BASE_URL ?>app/views/assets/icons.svg#plus" />
            </svg>
          </button>
        </menu>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="ad-container long"></div>
      </div>
    </section>
    <section id="hero">
      <div class="container">
        <div class="featured">
          <img src="<?= $trending_posts[0]["post_image"] ?>" alt="<?= $trending_posts[0]["post_title"] ?>" />
          <header>
            <div class="view-count">
              <svg width="16" height="16">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#eye" />
              </svg>
              <div class="divider"></div>
              <span><?= number_format($trending_posts[0]["post_views"]) ?> Views</span>
            </div>
            <div class="author">
              <img src="<?= $trending_posts[0]["poster_avatar"] ?>"
                alt="<?= $trending_posts[0]["poster_firstname"] ?> <?= $trending_posts[0]["poster_lastname"] ?>"
                width="32" height="32" />
              <span><?= $trending_posts[0]["poster_firstname"] ?> <?= $trending_posts[0]["poster_lastname"] ?></span>
            </div>
          </header>
          <div class="blog-details-wrapper">
            <div class="blog-details">
              <header>
                <svg width="16" height="16">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#command" />
                </svg>
                <span><?= $trending_posts[0]["post_category_name"] ?></span>
              </header>
              <h1><?= $trending_posts[0]["post_title"] ?></h1>
              <a href="">
                <span>Start Reading</span>
                <svg width="16" height="16" viewBox="0 0 20 20">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#arrow-right" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <?php for ($i = 1; $i < count($trending_posts); $i++):
          $post = $trending_posts[$i];
          ?>
          <?php if ($i == 2): ?>
            <div class="ad-container box"></div>
          <?php endif ?>
          <div class="blog-item">
            <div class="image-wrapper">
              <img src="<?= $post["post_image"] ?>" alt="<?= $post["post_title"] ?>" width="323" height="166" />
              <div class="time-category">
                <span><?= timeAgo($post["created_at"]) ?></span>
                <span><?= $post["post_category_name"] ?></span>
              </div>
            </div>
            <div class="content">
              <h2 class="line-clamp clamp-2">
                <a href="<?= BASE_URL ?>post/<?= $post["post_unique"] ?>"><?= $post["post_title"] ?></a>
              </h2>
              <p class="line-clamp clamp-3">
                <?= $post["post_description"] ?>
              </p>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </section>
    <section id="blog-cards">
      <div class="container">
        <div class="blog-cards">
          <?php for ($i = 0; $i < count($latest_posts); $i++): ?>
            <div class="blog-card-item">
              <img src="<?= $latest_posts[$i]["post_image"] ?>" alt="<?= $latest_posts[$i]["post_title"] ?>" width="244"
                height="244" />
              <div class="content">
                <header>
                  <svg width="16" height="16">
                    <use href="<?= BASE_URL ?>app/views/assets/icons.svg#command" />
                  </svg>
                  <span><?= $latest_posts[$i]["post_category_name"] ?></span>
                </header>
                <h2 class="line-clamp clamp-2">
                  <a
                    href="<?= BASE_URL ?>post/<?= $latest_posts[$i]["post_unique"] ?>"><?= $latest_posts[$i]["post_title"] ?></a>
                </h2>
                <p class="line-clamp clamp-3">
                  <?= $latest_posts[$i]["post_description"] ?>
                </p>
              </div>
            </div>
            <?php if ($i % 3 == 0 && $i < count($latest_posts) - 1): ?>
              <div class="ad-container long"></div>
            <?php endif; ?>
          <?php endfor; ?>
        </div>
        <div class="ad-containers">
          <div class="ad-wrapper">
            <div class="ad-container tall"></div>
          </div>
          <div class="ad-wrapper">
            <div class="ad-container tall"></div>
          </div>
          <div class="ad-wrapper">
            <div class="ad-container tall"></div>
          </div>
          <div class="ad-wrapper">
            <div class="ad-container tall"></div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="container">
      <div>
        <div>
          <h2>Never miss our update Join our daily Newsletter.</h2>
          <form>
            <div class="input-wrapper">
              <svg width="16" height="16">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#email-simple-open" />
              </svg>
              <input type="email" name="" id="" placeholder="Enter your email" />
            </div>
            <div class="divider"></div>
            <button>
              <span>Join Now</span>
              <svg width="16" height="16">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#arrow-up-right" />
              </svg>
            </button>
          </form>
        </div>
      </div>
      <div>
        <svg width="220" height="45" viewBox="0 0 209 44">
          <use href="<?= BASE_URL ?>app/views/assets/icons.svg#logo-full" />
        </svg>
      </div>
      <div class="ad-container long"></div>
    </div>
  </footer>
</body>

</html>