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
          <a href="">Guest Blogging</a>
          <a href="">Digital Marketing</a>
          <a href="">Website Designing</a>
          <a href="">Lifestyle</a>
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
          <img src="<?= BASE_URL ?>app/views/images/blog-image.jpg" alt="" />
          <header>
            <div class="view-count">
              <svg width="16" height="16">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#eye" />
              </svg>
              <div class="divider"></div>
              <span>46,376 Views</span>
            </div>
            <div class="author">
              <img src="<?= BASE_URL ?>app/views/images/blog-image.jpg" alt="" width="32" height="32" />
              <span>Daniella Farhat</span>
            </div>
          </header>
          <div class="blog-details-wrapper">
            <div class="blog-details">
              <header>
                <svg width="16" height="16">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#command" />
                </svg>
                <span>Lifestyle</span>
              </header>
              <h1>Why is Outlook not allowing me to attach files?</h1>
              <a href="">
                <span>Start Reading</span>
                <svg width="16" height="16" viewBox="0 0 20 20">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#arrow-right" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="blog-item">
          <div class="image-wrapper">
            <img src="<?= BASE_URL ?>app/views/images/blog-image.jpg" alt="" width="323" height="166" />
            <div class="time-category">
              <span>11 Month ago</span>
              <span>Life Style</span>
            </div>
          </div>
          <div class="content">
            <h2 class="line-clamp clamp-2">
              <a href="">Why is Outlook not allowing me to attach files?</a>
            </h2>
            <p class="line-clamp clamp-3">
              Looking to boost your online presence? Consider Our Guest
              Blogging and LinkBuilding Services. It's like having a spotlight
              on your brand, drawing in potential customers and building
              credibility.
            </p>
          </div>
        </div>
        <div class="ad-container box"></div>
        <div class="blog-item">
          <div class="image-wrapper">
            <img src="<?= BASE_URL ?>app/views/images/blog-image.jpg" alt="" width="323" height="166" />
            <div class="time-category">
              <span>11 Month ago</span>
              <span>Life Style</span>
            </div>
          </div>
          <div class="content">
            <h2 class="line-clamp clamp-2">
              <a href="">Why is Outlook not allowing me to attach files?</a>
            </h2>
            <p class="line-clamp clamp-3">
              Looking to boost your online presence? Consider Our Guest
              Blogging and LinkBuilding Services. It's like having a spotlight
              on your brand, drawing in potential customers and building
              credibility.
            </p>
          </div>
        </div>
        <div class="blog-item">
          <div class="image-wrapper">
            <img src="<?= BASE_URL ?>app/views/images/blog-image.jpg" alt="" width="323" height="166" />
            <div class="time-category">
              <span>11 Month ago</span>
              <span>Life Style</span>
            </div>
          </div>
          <div class="content">
            <h2 class="line-clamp clamp-2">
              <a href="">Why is Outlook not allowing me to attach files?</a>
            </h2>
            <p class="line-clamp clamp-3">
              Looking to boost your online presence? Consider Our Guest
              Blogging and LinkBuilding Services. It's like having a spotlight
              on your brand, drawing in potential customers and building
              credibility.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="blog-cards">
      <div class="container">
        <div class="blog-cards">
          <div class="blog-card-item">
            <img src="<?= BASE_URL ?>app/views/images/blog-image.jpg" alt="" width="244" height="244" />
            <div class="content">
              <header>
                <svg width="16" height="16">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#command" />
                </svg>
                <span>Lifestyle</span>
              </header>
              <h2 class="line-clamp clamp-2">
                <a href="">Life Style Key Martech Trends Shaping the Future of Digital
                  Marketing Looking to boost your online presence? Consider
                  Our Guest Blogging and LinkBuilding Services. It's like
                  having a spotlight on your brand, drawing in potential
                  customers and building credibility.</a>
              </h2>
              <p class="line-clamp clamp-3">
                Looking to boost your online presence? Consider Our Guest
                Blogging and LinkBuilding Services. It's like having a
                spotlight on your brand, drawing in potential customers and
                building credibility.
              </p>
            </div>
          </div>
          <div class="blog-card-item">
            <img src="<?= BASE_URL ?>app/views/images/blog-image.jpg" alt="" width="244" height="244" />
            <div class="content">
              <header>
                <svg width="16" height="16">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#command" />
                </svg>
                <span>Lifestyle</span>
              </header>
              <h2 class="line-clamp clamp-2">
                <a href="">Life Style Key Martech Trends Shaping the Future of Digital
                  Marketing Looking to boost your online presence? Consider
                  Our Guest Blogging and LinkBuilding Services. It's like
                  having a spotlight on your brand, drawing in potential
                  customers and building credibility.</a>
              </h2>
              <p class="line-clamp clamp-3">
                Looking to boost your online presence? Consider Our Guest
                Blogging and LinkBuilding Services. It's like having a
                spotlight on your brand, drawing in potential customers and
                building credibility.
              </p>
            </div>
          </div>
          <div class="blog-card-item">
            <img src="<?= BASE_URL ?>app/views/images/blog-image.jpg" alt="" width="244" height="244" />
            <div class="content">
              <header>
                <svg width="16" height="16">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#command" />
                </svg>
                <span>Lifestyle</span>
              </header>
              <h2 class="line-clamp clamp-2">
                <a href="">Life Style Key Martech Trends Shaping the Future of Digital
                  Marketing Looking to boost your online presence? Consider
                  Our Guest Blogging and LinkBuilding Services. It's like
                  having a spotlight on your brand, drawing in potential
                  customers and building credibility.</a>
              </h2>
              <p class="line-clamp clamp-3">
                Looking to boost your online presence? Consider Our Guest
                Blogging and LinkBuilding Services. It's like having a
                spotlight on your brand, drawing in potential customers and
                building credibility.
              </p>
            </div>
          </div>
          <div class="ad-container long"></div>
          <div class="blog-card-item">
            <img src="<?= BASE_URL ?>app/views/images/blog-image.jpg" alt="" width="244" height="244" />
            <div class="content">
              <header>
                <svg width="16" height="16">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#command" />
                </svg>
                <span>Lifestyle</span>
              </header>
              <h2 class="line-clamp clamp-2">
                <a href="">Life Style Key Martech Trends Shaping the Future of Digital
                  Marketing Looking to boost your online presence? Consider
                  Our Guest Blogging and LinkBuilding Services. It's like
                  having a spotlight on your brand, drawing in potential
                  customers and building credibility.</a>
              </h2>
              <p class="line-clamp clamp-3">
                Looking to boost your online presence? Consider Our Guest
                Blogging and LinkBuilding Services. It's like having a
                spotlight on your brand, drawing in potential customers and
                building credibility.
              </p>
            </div>
          </div>
          <div class="blog-card-item">
            <img src="<?= BASE_URL ?>app/views/images/blog-image.jpg" alt="" width="244" height="244" />
            <div class="content">
              <header>
                <svg width="16" height="16">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#command" />
                </svg>
                <span>Lifestyle</span>
              </header>
              <h2 class="line-clamp clamp-2">
                <a href="">Life Style Key Martech Trends Shaping the Future of Digital
                  Marketing Looking to boost your online presence? Consider
                  Our Guest Blogging and LinkBuilding Services. It's like
                  having a spotlight on your brand, drawing in potential
                  customers and building credibility.</a>
              </h2>
              <p class="line-clamp clamp-3">
                Looking to boost your online presence? Consider Our Guest
                Blogging and LinkBuilding Services. It's like having a
                spotlight on your brand, drawing in potential customers and
                building credibility.
              </p>
            </div>
          </div>
          <div class="blog-card-item">
            <img src="<?= BASE_URL ?>app/views/images/blog-image.jpg" alt="" width="244" height="244" />
            <div class="content">
              <header>
                <svg width="16" height="16">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#command" />
                </svg>
                <span>Lifestyle</span>
              </header>
              <h2 class="line-clamp clamp-2">
                <a href="">Life Style Key Martech Trends Shaping the Future of Digital
                  Marketing Looking to boost your online presence? Consider
                  Our Guest Blogging and LinkBuilding Services. It's like
                  having a spotlight on your brand, drawing in potential
                  customers and building credibility.</a>
              </h2>
              <p class="line-clamp clamp-3">
                Looking to boost your online presence? Consider Our Guest
                Blogging and LinkBuilding Services. It's like having a
                spotlight on your brand, drawing in potential customers and
                building credibility.
              </p>
            </div>
          </div>
          <div class="ad-container long"></div>
          <div class="blog-card-item">
            <img src="<?= BASE_URL ?>app/views/images/blog-image.jpg" alt="" width="244" height="244" />
            <div class="content">
              <header>
                <svg width="16" height="16">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#command" />
                </svg>
                <span>Lifestyle</span>
              </header>
              <h2 class="line-clamp clamp-2">
                <a href="">Life Style Key Martech Trends Shaping the Future of Digital
                  Marketing Looking to boost your online presence? Consider
                  Our Guest Blogging and LinkBuilding Services. It's like
                  having a spotlight on your brand, drawing in potential
                  customers and building credibility.</a>
              </h2>
              <p class="line-clamp clamp-3">
                Looking to boost your online presence? Consider Our Guest
                Blogging and LinkBuilding Services. It's like having a
                spotlight on your brand, drawing in potential customers and
                building credibility.
              </p>
            </div>
          </div>
          <div class="blog-card-item">
            <img src="<?= BASE_URL ?>app/views/images/blog-image.jpg" alt="" width="244" height="244" />
            <div class="content">
              <header>
                <svg width="16" height="16">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#command" />
                </svg>
                <span>Lifestyle</span>
              </header>
              <h2 class="line-clamp clamp-2">
                <a href="">Life Style Key Martech Trends Shaping the Future of Digital
                  Marketing Looking to boost your online presence? Consider
                  Our Guest Blogging and LinkBuilding Services. It's like
                  having a spotlight on your brand, drawing in potential
                  customers and building credibility.</a>
              </h2>
              <p class="line-clamp clamp-3">
                Looking to boost your online presence? Consider Our Guest
                Blogging and LinkBuilding Services. It's like having a
                spotlight on your brand, drawing in potential customers and
                building credibility.
              </p>
            </div>
          </div>
          <div class="blog-card-item">
            <img src="<?= BASE_URL ?>app/views/images/blog-image.jpg" alt="" width="244" height="244" />
            <div class="content">
              <header>
                <svg width="16" height="16">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#command" />
                </svg>
                <span>Lifestyle</span>
              </header>
              <h2 class="line-clamp clamp-2">
                <a href="">Life Style Key Martech Trends Shaping the Future of Digital
                  Marketing Looking to boost your online presence? Consider
                  Our Guest Blogging and LinkBuilding Services. It's like
                  having a spotlight on your brand, drawing in potential
                  customers and building credibility.</a>
              </h2>
              <p class="line-clamp clamp-3">
                Looking to boost your online presence? Consider Our Guest
                Blogging and LinkBuilding Services. It's like having a
                spotlight on your brand, drawing in potential customers and
                building credibility.
              </p>
            </div>
          </div>
          <div class="ad-container long"></div>
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