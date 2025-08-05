<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title ?></title>
  <script type="module" crossorigin src="<?= BASE_URL ?>app/views/assets/dashboard.js"></script>
  <link rel="modulepreload" crossorigin href="<?= BASE_URL ?>app/views/assets/root.js">
  <link rel="modulepreload" crossorigin href="<?= BASE_URL ?>app/views/assets/index2.js">
  <link rel="modulepreload" crossorigin href="<?= BASE_URL ?>app/views/assets/common4.js">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/root.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/common4.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/alert.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/dynamic-button.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/dashboard.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/custom-select.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/dashboard-list-items.css">
</head>

<body>
  <header class="page-header">
    <?php include "includes/header-title.php"; ?>
    <div class="toolbar">
      <div id="control-wrapper">
        <div class="control">
          <header>
            <span>Search</span>
            <button class="clickable" id="search-modal-close">
              <svg width="24" height="24" viewBox="0 0 16 16">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#cancel" />
              </svg>
            </button>
          </header>
          <div class="search">
            <input type="text" placeholder="Search" name="search" class="search-filter" />
            <svg width="24" height="24">
              <use href="<?= BASE_URL ?>app/views/assets/icons.svg#magnifying-glass" />
            </svg>
          </div>
        </div>
      </div>
      <button aria-label="search modal trigger" class="search-modal-button clickable icon-button"
        id="search-modal-trigger">
        <svg width="24" height="24">
          <use href="<?= BASE_URL ?>app/views/assets/icons.svg#magnifying-glass" />
        </svg>
      </button>
      <?php include "includes/header-right.php"; ?>

    </div>
    <?php include "includes/side-nav.php"; ?>
    <div role="dialog" class="overflow" data-modal-element id="notifications-modal" data-modal-title="Notifications"
      aria-label="Notifications">
      <ul>
        <li data-status="rejected">
          <div class="icon">
            <svg width="24" height="24">
              <use href="<?= BASE_URL ?>app/views/assets/icons.svg#bell" />
            </svg>
          </div>
          <div class="wrapper">
            <header>
              <h2>How does writing influence your personal brand?</h2>
              <p>9:41 AM</p>
            </header>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla,
              a. Maiores dicta, quaerat aperiam quo magni sequi quae sed
              voluptate.
            </p>
            <span class="status clickable">Rejected</span>
          </div>
        </li>
        <li data-status="published">
          <div class="icon">
            <svg width="24" height="24">
              <use href="<?= BASE_URL ?>app/views/assets/icons.svg#bell" />
            </svg>
          </div>
          <div class="wrapper">
            <header>
              <h2>How does writing influence your personal brand?</h2>
              <p>9:41 AM</p>
            </header>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla,
              a. Maiores dicta, quaerat aperiam quo magni sequi quae sed
              voluptate.
            </p>
            <span class="status clickable">Published</span>
          </div>
        </li>
      </ul>
      <div class="empty-list">
        <svg width="117" height="117" viewBox="0 0 24 24">
          <use href="<?= BASE_URL ?>app/views/assets/icons.svg#bell" />
        </svg>
        <div class="content">
          <h2>No Notification</h2>
          <p>You do not have notifications yet</p>
        </div>
      </div>
    </div>
    <div role="dialog" class="overflow" data-modal-element id="profile-modal" data-modal-title="Author's Profile"
      aria-label="Authors Profile" data-close-icon-svg-size="16">
      <form id="profile-update" class="content">
        <div class="profile-photo-container">
          <div class="image-container">
            <img width="84" height="84" alt="Daniella August" id="photo-preview" />
            <svg width="24" height="24" viewBox="0 0 15 15">
              <use href="<?= BASE_URL ?>app/views/assets/icons.svg#image" />
            </svg>
          </div>
          <label class="clickable" for="profile-photo-upload-input"><span>Update Photo</span>
            <input type="file" name="profile_photo" id="profile-photo-upload-input" accept="image/*" />
          </label>
        </div>
        <label class="input-field" for="author-name">
          <span>Author's Name</span>
          <input type="text" name="author_name" id="author-name" required />
        </label>
        <label class="input-field dynamic-word-count" for="author-description">
          <span>Author's Description</span>
          <textarea name="author_description" id="author-description" rows="4" maxlength="120"></textarea>
          <div class="word-count-wrapper">
            <span class="word-count">0</span>/<span>120</span>
          </div>
        </label>
        <button class="clickable dynamic-button">
          <span class="idle">
            <span>Update</span>
            <svg width="24" height="24">
              <use href="<?= BASE_URL ?>app/views/assets/icons.svg#paper-plane-tilt" />
            </svg>
          </span>
        </button>
      </form>
    </div>
  </header>
  <main>
    <div class="page-content">
      <div class="list-content-container">
        <div class="list-content content">
          <div class="list-header header row">
            <div>
              <p>Domains</p>
            </div>
            <div>
              <p>Niche</p>
            </div>
            <div>
              <p>Avg. Monthly Traffic</p>
            </div>
            <div>
              <p>Min Price Per Link</p>
            </div>
            <div class="post-count">
              <p>No. of Post</p>
            </div>
            <div>
              <p>Blog Posts</p>
            </div>
            <div>
              <p>Link</p>
            </div>
          </div>
          <ul class="list">
            <li class="item row" data-domain_title="The Watchtower" data-domain_url="thewatchtower.com"
              data-domain_niche="General" data-domain_traffic="290,302,830" data-domain_price="$387.99"
              data-domain_post_count="0" data-create_new_url="https:watchtower" data-edit_url="https:watchtower">
              <div class="domain">
                <p>The Watchtower</p>
                <a href="thewatchtower.com">thewatchtower.com</a>
              </div>
              <div class="niche">
                <p>General</p>
              </div>
              <div class="domain-trafic">
                <p>290,302,830</p>
              </div>
              <div class="domain-price">
                <p>$387.99</p>
              </div>
              <div class="post-count">
                <p>0</p>
              </div>
              <div class="post-blog">
                <a href="<?= BASE_URL ?>dashboard/create-post" class="clickable"><span>Create New</span></a>
              </div>
              <div class="post-link">
                <a href="" class="clickable">
                  <svg width="16" height="16">
                    <use href="<?= BASE_URL ?>app/views/assets/icons.svg#link" />
                  </svg>
                  <span>Add / Edit</span></a>
              </div>
            </li>
          </ul>
        </div>
        <div class="pagination">
          <div class="custom-select items-per-page" data-default-value="10" data-down-arrow-svg-name="caret-down"
            data-down-arrow-svg-view-box="0 0 24 24">
            <div data-value="5">5</div>
            <div data-value="10">10</div>
            <div data-value="25">25</div>
            <div data-value="50">50</div>
            <div data-value="100">100</div>
            <div data-value="250">250</div>
          </div>
          <div class="pages-wrapper">
            <div class="page-count">
              <span class="page page-number-count">01</span>
              <span>/</span>
              <span class="total-pages-count">03</span>
            </div>
            <div class="navigation">
              <button class="clickable icon-button previous-page" aria-label="previous">
                <svg width="20" height="20">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#arrow-left" />
                </svg>
              </button>
              <button class="clickable icon-button next-page" aria-label="next">
                <svg width="20" height="20">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#arrow-right" />
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class="empty-list">
          <svg width="118" height="118">
            <use href="<?= BASE_URL ?>app/views/assets/icons.svg#list" />
          </svg>
          <div class="content">
            <h2>No Post yet</h2>
            <p>
              You do not have any post yet, when you create one it will show
              up here.
            </p>
          </div>
          <button class="create clickable">
            <svg width="24" height="24">
              <use href="<?= BASE_URL ?>app/views/assets/icons.svg#plus" />
            </svg>
            <span>Create</span>
          </button>
        </div>
      </div>
    </div>
  </main>

</body>

</html>