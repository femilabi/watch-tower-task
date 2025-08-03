<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title ?></title>
  <script type="module" crossorigin src="<?= BASE_URL ?>app/views/assets/dashboard/create-post.js"></script>
  <link rel="modulepreload" crossorigin href="<?= BASE_URL ?>app/views/assets/root.js">
  <link rel="modulepreload" crossorigin href="<?= BASE_URL ?>app/views/assets/create-editor.js">
  <link rel="modulepreload" crossorigin href="<?= BASE_URL ?>app/views/assets/index2.js">
  <link rel="modulepreload" crossorigin href="<?= BASE_URL ?>app/views/assets/common4.js">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/root.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/create-editor.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/common4.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/alert.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/dynamic-button.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/create-post.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/custom-select.css">
  <link rel="stylesheet" crossorigin href="<?= BASE_URL ?>app/views/assets/tag-input.css">
</head>

<body>
  <div id="app-config" data-competitor-promotion="https://zoop.com,fdd.com" data-unpaid-link="stuff.com,nice.com"
    data-blocked-domain="https://porn-hub.com" data-gambling="bet,casino" data-adult="explicit"
    data-user-name="Adrian Bollarg" data-cost-per-link="400" data-min-word-count="600"
    data-category-to-cost-map='{"ai":35,"technology":30,"soft":35}'></div>
  <header class="page-header">
    <?php include "includes/header-title.php"; ?>
    <div class="toolbar">
      <div></div>

      <?php include "includes/header-right.php"; ?>
    </div>
    <nav id="side-nav">
      <header>
        <svg width="209" height="44" viewBox="0 0 209 44">
          <use href="<?= BASE_URL ?>app/views/assets/icons.svg#logo-full" />
        </svg>
        <button class="clickable" id="close-side-nav">
          <svg width="24" height="24" viewBox="0 0 16 16">
            <use href="<?= BASE_URL ?>app/views/assets/icons.svg#cancel" />
          </svg>
        </button>
      </header>
      <ul>
        <li>
          <a href="">
            <svg width="24" height="24">
              <use href="<?= BASE_URL ?>app/views/assets/icons.svg#chat-dots" />
            </svg>
            <span class="title">Webmaster</span>
            <span class="unread-count">
              <svg width="12" height="12">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#asteriks" />
              </svg>
              <span>3</span>
            </span>
          </a>
        </li>
        <li>
          <a href="" class="active">
            <svg width="24" height="24">
              <use href="<?= BASE_URL ?>app/views/assets/icons.svg#globe" />
            </svg>
            <span class="title">Domains</span>
          </a>
        </li>
        <li>
          <a href="">
            <svg width="24" height="24" viewbox="0 0 16 16">
              <use href="<?= BASE_URL ?>app/views/assets/icons.svg#link" />
            </svg>
            <span class="title">Link Exchange</span>
          </a>
        </li>
        <li>
          <a href="">
            <svg width="24" height="24">
              <use href="<?= BASE_URL ?>app/views/assets/icons.svg#currency-dollar-simple" />
            </svg>
            <span class="title">Payment History</span>
          </a>
        </li>
      </ul>
      <footer>
        <div class="logo-wrapper">
          <div class="logo">
            <svg width="24" height="22">
              <use href="<?= BASE_URL ?>app/views/assets/icons.svg#logo-icon" />
            </svg>
          </div>
          <span>The Watchtower</span>
        </div>
        <button class="clickable">
          <svg width="24" height="24">
            <use href="<?= BASE_URL ?>app/views/assets/icons.svg#arrow-line-right" />
          </svg>
        </button>
      </footer>
    </nav>
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
            <img width="84" height="84" alt="<?= $user["first_name"] ?> <?= $user["last_name"] ?>" id="photo-preview"
              src="<?= $user["avatar"] ?>" />
            <svg width="24" height="24" viewBox="0 0 15 15">
              <use href="<?= $user["avatar"] ?>" />
            </svg>
          </div>
          <label class="clickable" for="profile-photo-upload-input"><span>Update Photo</span>
            <input type="file" name="profile_photo" id="profile-photo-upload-input" accept="image/*" />
          </label>
        </div>
        <label class="input-field" for="author-name">
          <span>Author's Name</span>
          <input type="text" name="author_name" id="author-name"
            value="<?= $user["first_name"] ?> <?= $user["last_name"] ?>" required />
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
    <form class="page-content" action="<?= BASE_URL ?>app/viewsdashboard/create-post" method="POST"
      enctype="multipart/form-data">
      <section class="main">
        <label class="slug-url">
          <div class="field-title">Slug URL</div>
          <div class="slug-field">
            <span><?= BASE_URL ?></span>
            <input type="text" value="" readonly />
          </div>
        </label>
        <div class="meta-info">
          <header class="toggle">
            <div class="title">
              <svg width="15" height="16">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#tag" />
              </svg>
              <span>Meta info</span>
            </div>
            <div class="section-drop-down-control">
              <button type="button" aria-label="dropdown control">
                <svg width="16" height="16">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#caret-down" />
                </svg>
              </button>
            </div>
          </header>
          <div class="drop-down">
            <div class="fields-container">
              <label class="field-item dynamic-word-count">
                <header>
                  <span class="field-title">Meta Title</span>
                  <div class="word-count-wrapper">
                    <span class="word-count">0</span>/<span>60</span>
                  </div>
                </header>
                <input type="text" name="meta_title" maxlength="60" />
              </label>
              <label class="field-item dynamic-word-count">
                <header>
                  <span class="field-title">Meta Description</span>
                  <div class="word-count-wrapper">
                    <span class="word-count">0</span>/<span>60</span>
                  </div>
                </header>
                <input type="text" name="meta_description" maxlength="60" />
              </label>
              <label class="field-item">
                <header>
                  <span class="field-title">Meta Keywords</span>
                </header>
                <input type="text" name="meta_keywords" class="tag-input" placeholder="Enter Keyword and hit Enter" />
              </label>
            </div>
          </div>
        </div>
        <div class="field-item-group">
          <label class="field-item dynamic-word-count">
            <header>
              <span class="field-title">Blog title</span>
              <div class="word-count-wrapper">
                <span class="word-count">0</span>/<span>60</span>
              </div>
            </header>
            <input type="text" name="post_title" maxlength="60" />
          </label>
          <label class="field-item">
            <header>
              <span class="field-title">Blog category</span>
            </header>
            <div class="custom-select" data-default-value="1" data-name="post_category">
              <?php foreach ($categories as $category) { ?>
                <div data-value="<?= $category['cate_id'] ?>"><?= $category['cate_name'] ?></div>
              <?php } ?>
            </div>
          </label>
        </div>
        <label class="field-item dynamic-word-count">
          <header>
            <span class="field-title">Blog description</span>
            <div class="word-count-wrapper">
              <span class="word-count">0</span>/<span>120</span>
            </div>
          </header>
          <textarea name="post_description" rows="4" maxlength="120"></textarea>
        </label>
        <div class="blog-editor-wrapper">
          <div class="alert-wrapper"></div>
          <div class="field-item">
            <header>
              <span class="field-title">Blog editor</span>
              <div class="word-count-tracker-wrapper"></div>
            </header>
            <textarea id="blog-content-editor" name="content"></textarea>
          </div>
        </div>
      </section>
      <section class="side-bar">
        <header>
          <button class="page-close-side-bar clickable">Back</button>
          <h2>Pay & Publish</h2>
        </header>
        <section class="blog-details-wrapper">
          <div class="cover-image-wrapper">
            <div class="empty-image">
              <svg width="53" height="53" viewBox="0 0 15 15">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#image" />
              </svg>
            </div>
            <img alt="preview" id="cover-image-oreview" />
          </div>
          <div class="cover-image-upload">
            <div class="detail">
              <header>
                <svg width="15" height="15" viewBox="0 0 15 15">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#image" />
                </svg>
                <span>Image</span>
              </header>
              <p id="cover-image-file-name">Cover image</p>
            </div>
            <label for="cover-image-input" class="clickable">
              <svg width="24" height="24" viewBox="0 0 15 15">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#image" />
              </svg>
              <span>Upload</span>
              <input type="file" name="cover-image-input" id="cover-image-input" />
            </label>
          </div>
          <label class="field-item">
            <header>
              <span class="field-title">Blog author</span>
            </header>
            <input type="text" name="blog_author" value="<?= $user["first_name"] ?> <?= $user["last_name"] ?>"
              readonly />
          </label>
          <label class="field-item">
            <header>
              <span class="field-title">Unique URL Slug</span>
            </header>
            <input type="text" name="post_unique" readonly />
          </label>
        </section>
        <div id="payment-wrapper"></div>
      </section>
      <!-- <button class="dynamic-button clickable" style="background-color: yellowgreen">Publish</button> -->
      <!-- <button class="open-pay-publish clickable" type="submit">Publish</button> -->
    </form>
    <div role="dialog" aria-label="image edit workspace" id="image-edit" class="overflow" data-modal-element="true"
      data-dismissable="false" data-modal-title="
      <svg width='24' height='24'>
        <use href='<?= BASE_URL ?>app/views/assets/icons.svg#crop' />
      </svg>
      <span>Crop Cover Image</span>
      ">
      <div class="content-wrapper">
        <div class="content-container">
          <div id="image-edit-workspace">
            <img width="384" height="188" alt="workspce" />
          </div>
          <div class="file-data">
            <div class="title">
              <svg width="32" height="32" viewBox="0 0 16 16">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#image" />
              </svg>
              <span class="file-name">Hello.png</span>
            </div>
            <label for="replace-image-input" class="clickable replace-file">
              Replace
              <input type="file" id="replace-image-input" />
            </label>
          </div>
          <div class="controls">
            <div class="transform-tools">
              <button id="control-rotate-x-180" class="rotate-x-180" aria-label="rotate on x axis 180">
                <svg width="25" height="24">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#arrows-outline-horizontal" />
                </svg>
              </button>
              <button id="control-rotate-y-180" class="rotate-y-180" aria-label="rotate on y axis 180">
                <svg width="25" height="24">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#arrows-outline-vertical" />
                </svg>
              </button>
            </div>
            <button class="rotate-z" id="control-rotate-z" aria-label="rotate on z axis">
              <svg width="25" height="24">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#rotate" />
              </svg>
            </button>
            <div class="fit-tools">
              <button id="control-rotate-x-180" class="fit-horizontal" aria-label="rotate on x axis 180">
                <svg width="24" height="24">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#fit-horizontal" />
                </svg>
              </button>
              <button id="control-rotate-y-180" class="fit-vertical" aria-label="rotate on y axis 180">
                <svg width="24" height="24">
                  <use href="<?= BASE_URL ?>app/views/assets/icons.svg#fit-vertical" />
                </svg>
              </button>
            </div>
          </div>
          <div class="rotate-range-wrapper">
            <span>-45°</span>
            <input type="range" min="-45" max="45" value="0" step="1" name="" id="rotate-range-slider"
              aria-label="Rotate Range Slider" class="rotate-slider" />
            <span>45°</span>
          </div>
          <div class="actions">
            <button class="cancel edit-cancel clickable" id="edit-cancel" aria-label="cancel image edit">
              <svg width="24" height="24" viewBox="0 0 16 16">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#cancel" />
              </svg>
            </button>
            <button class="reset edit-reset clickable" id="edit-reset" aria-label="reset image edit">
              <svg width="24" height="24">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#reset" />
              </svg>
            </button>
            <button class="done edit-done clickable" id="edit-done" aria-label="confirm image edit">
              <svg width="25" height="24">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#check" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div role="dialog" class="overflow payment-status-feedback" data-modal-element id="payment-success"
      data-add-modal-header="false" aria-label="Payment successful">
      <div class="content">
        <h2>Payment Successful</h2>
        <p>Your payment is completed check your email for payment details.</p>
        <button data-close-modal-button class="clickable">Done</button>
      </div>
      <img width="313" height="313"
        src="<?= BASE_URL ?>app/views/assets/marketplace/generic/crocodile-playing-the-trumpet-and-celebrating-success.png"
        alt="crocodile playing the trumpet and celebrating success" />
    </div>
    <div role="dialog" class="overflow payment-status-feedback" data-modal-element id="payment-error"
      data-add-modal-header="false" aria-label="Payment error">
      <div class="content">
        <h2>Opps Failed</h2>
        <p>Your payment didn't go through check your detail and try again.</p>
        <button data-close-modal-button class="clickable">Try Again</button>
      </div>
      <img width="313" height="313" src="<?= BASE_URL ?>app/views/assets/generic/bad-gateway.webp"
        alt="crocodile holding a map" />
    </div>
  </main>
  <script
    src="https://www.paypal.com/sdk/js?client-id=AUv8rrc_P-EbP2E0mpb49BV7rFt3Usr-vdUZO8VGOnjRehGHBXkSzchr37SYF2GNdQFYSp72jh5QUhzG&components=buttons&enable-funding=venmo&disable-funding=paylater,card"
    data-sdk-integration-source="integrationbuilder_sc"></script>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.querySelectorAll('.open-pay-publish').forEach(function (btn) {
        console.log(btn);
        btn.removeAttribute('disabled');
      });
    });
  </script>
</body>

</html>