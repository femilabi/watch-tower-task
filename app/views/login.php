<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?= $title; ?></title>
  <script type="module" crossorigin src="<?= BASE_URL ?>app/views/assets/root.js"></script>
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/root.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/login.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/common.css">
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
    <section id="login-action">
      <div class="container">
        <div class="login-buttons">
          <button class="clickable GoogleLoginBtn">
            <svg width="24" height="24">
              <use href="<?= BASE_URL ?>app/views/assets/icons.svg#google" />
            </svg>
            <span>Continue with Google</span>
          </button>
          <button class="clickable">
            <svg width="24" height="24">
              <use href="<?= BASE_URL ?>app/views/assets/icons.svg#facebook-blue" />
            </svg>
            <span>Continue with Facebook</span>
          </button>
        </div>
      </div>
    </section>
  </main>
</body>

<script>
  document.querySelector('.GoogleLoginBtn').addEventListener('click', () => {
    window.location.href = '<?= BASE_URL ?>auth/google-login';
  });
</script>

</html>