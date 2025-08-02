<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vite App</title>
    <script type="module" crossorigin src="/assets/dashboard/single-domain.js"></script>
    <link rel="modulepreload" crossorigin href="/assets/root.js">
    <link rel="modulepreload" crossorigin href="/assets/index2.js">
    <link rel="modulepreload" crossorigin href="/assets/common4.js">
    <link rel="stylesheet" crossorigin href="/assets/root.css">
    <link rel="stylesheet" crossorigin href="/assets/common4.css">
    <link rel="stylesheet" crossorigin href="/assets/alert.css">
    <link rel="stylesheet" crossorigin href="/assets/dynamic-button.css">
    <link rel="stylesheet" crossorigin href="/assets/single-domain.css">
    <link rel="stylesheet" crossorigin href="/assets/custom-select.css">
    <link rel="stylesheet" crossorigin href="/assets/dashboard-list-items.css">
    <link rel="stylesheet" crossorigin href="/assets/tab-view.css">
  </head>
  <body>
    <header class="page-header">
      <div class="header-title-wrapper">
        <button class="clickable" id="open-side-nav">
          <svg width="24" height="24">
            <use href="/assets/icons.svg#rows" />
          </svg>
        </button>
        <div class="divider"></div>
        <a href="" class="go-back clickable">
          <svg width="24" height="24" viewBox="0 0 20 20">
            <use href="/assets/icons.svg#arrow-left" />
          </svg>
          <h1>The Watchtower</h1>
        </a>
      </div>
      <div class="toolbar">
        <div id="control-wrapper">
          <div class="control">
            <header>
              <span>Search</span>
              <button class="clickable" id="search-modal-close">
                <svg width="24" height="24" viewBox="0 0 16 16">
                  <use href="/assets/icons.svg#cancel" />
                </svg>
              </button>
            </header>
            <div
              class="custom-select category-filter"
              data-default-value="ai"
              data-down-arrow-svg-name="caret-down"
              data-down-arrow-svg-view-box="0 0 24 24"
            >
              <div data-value="ai">Ai</div>
              <div data-value="technology">technology</div>
              <div data-value="nature">Nature</div>
            </div>
            <div class="search">
              <input
                type="text"
                placeholder="Search"
                name="search"
                class="search-filter"
              />
              <svg width="24" height="24">
                <use href="/assets/icons.svg#magnifying-glass" />
              </svg>
            </div>
          </div>
        </div>
        <button
          aria-label="search modal trigger"
          class="search-modal-button clickable icon-button"
          id="search-modal-trigger"
        >
          <svg width="24" height="24">
            <use href="/assets/icons.svg#magnifying-glass" />
          </svg>
        </button>
        <div class="webmaster-notification-avatar">
          <button class="webmaster clickable">
            <svg width="24" height="24">
              <use href="/assets/icons.svg#chat-dots" />
            </svg>
            <span class="text">Webmaster</span>
            <span class="unread-count">
              <svg width="12" height="12">
                <use href="/assets/icons.svg#asteriks" />
              </svg>
              <span>3</span>
            </span>
          </button>
          <button
            data-modal-target="notifications-modal"
            class="notification clickable"
          >
            <span class="icon-wrapper">
              <svg width="24" height="24">
                <use href="/assets/icons.svg#bell-simple" />
              </svg>
              <span>
                <svg width="8" height="8" viewbox="0 0 12 12">
                  <use href="/assets/icons.svg#asteriks" />
                </svg>
              </span>
            </span>
          </button>
          <button
            class="avatar clickable"
            data-modal-target="profile-modal"
            aria-label="Profile avatar"
          >
            <img
              src="https://s3-alpha-sig.figma.com/img/6c6a/d993/8970e35e63860494df619ec37e4d6197?Expires=1741564800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=i9ku~9zoq2UL33-8VhAUa4buf6e821b7eu97Ie2Nn~yy9GAwYYkUMbElMKD55liQdno80xSPzaYrQVh~BTeTrzYAmBW~i5rpR6Yfvxgk-fs8IWiOg39fGi6RmBcvPlvH3OkbhR3LWeJ59Z5OgZBqchT~aPgP62Uor3d3CcVd79zvpfHMj2JZTnMxEj5Ooxf40LPwOunAWNvjti7yqGe7uOLfbNjxwEVL4Qp3tJnQ3w4gR2jzd7ZrQ5bXwKjxDODeFUJczFgK1oRuufLCqLYQuCIoKeNIJsm2EHRQvhvybC2KrBxcMtGEwyB7shJnmA8tMpeK-bNIgQueY5ktvNYovw__"
              alt="Daniella August"
              width="44"
              height="44"
            />
          </button>
        </div>
      </div>
      <nav id="side-nav">
        <header>
          <svg width="209" height="44" viewBox="0 0 209 44">
            <use href="/assets/icons.svg#logo-full" />
          </svg>
          <button class="clickable" id="close-side-nav">
            <svg width="24" height="24" viewBox="0 0 16 16">
              <use href="/assets/icons.svg#cancel" />
            </svg>
          </button>
        </header>
        <ul>
          <li>
            <a href="">
              <svg width="24" height="24">
                <use href="/assets/icons.svg#chat-dots" />
              </svg>
              <span class="title">Webmaster</span>
              <span class="unread-count">
                <svg width="12" height="12">
                  <use href="/assets/icons.svg#asteriks" />
                </svg>
                <span>3</span>
              </span>
            </a>
          </li>
          <li>
            <a href="" class="active">
              <svg width="24" height="24">
                <use href="/assets/icons.svg#chat-bar-horizontal" />
              </svg>
              <span class="title">Stats</span>
            </a>
          </li>
          <li>
            <a href="">
              <svg width="24" height="24">
                <use href="/assets/icons.svg#currency-eth" />
              </svg>
              <span class="title">Assets</span>
            </a>
          </li>
          <li>
            <a href="">
              <svg width="24" height="24">
                <use href="/assets/icons.svg#list-dashes" />
              </svg>
              <span class="title">Manage Category</span>
            </a>
          </li>
          <li>
            <a href="">
              <svg width="24" height="24">
                <use href="/assets/icons.svg#newspaper" />
              </svg>
              <span class="title">Guest Blogging</span>
            </a>
          </li>
          <li>
            <a href="">
              <svg width="24" height="24">
                <use href="/assets/icons.svg#blocked" />
              </svg>
              <span class="title">Blocked Keywords</span>
            </a>
          </li>
          <li>
            <a href="">
              <svg width="24" height="24">
                <use href="/assets/icons.svg#blocked" />
              </svg>
              <span class="title">Blocked Domains</span>
            </a>
          </li>
          <li>
            <a href="">
              <svg width="24" height="24">
                <use href="/assets/icons.svg#trash" />
              </svg>
              <span class="title">Removals</span>
            </a>
          </li>
        </ul>
        <footer>
          <div class="logo-wrapper">
            <div class="logo">
              <svg width="24" height="22">
                <use href="/assets/icons.svg#logo-icon" />
              </svg>
            </div>
            <span>The Watchtower</span>
          </div>
          <button class="clickable">
            <svg width="24" height="24">
              <use href="/assets/icons.svg#arrow-line-right" />
            </svg>
          </button>
        </footer>
      </nav>
      <div
        role="dialog"
        class="overflow"
        data-modal-element
        id="notifications-modal"
        data-modal-title="Notifications"
        aria-label="Notifications"
      >
        <ul>
          <li data-status="rejected">
            <div class="icon">
              <svg width="24" height="24">
                <use href="/assets/icons.svg#bell" />
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
                <use href="/assets/icons.svg#bell" />
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
            <use href="/assets/icons.svg#bell" />
          </svg>
          <div class="content">
            <h2>No Notification</h2>
            <p>You do not have notifications yet</p>
          </div>
        </div>
      </div>
      <div
        role="dialog"
        class="overflow"
        data-modal-element
        id="profile-modal"
        data-modal-title="Author's Profile"
        aria-label="Authors Profile"
        data-close-icon-svg-size="16"
      >
        <form id="profile-update" class="content">
          <div class="profile-photo-container">
            <div class="image-container">
              <img
                width="84"
                height="84"
                alt="Daniella August"
                id="photo-preview"
              />
              <svg width="24" height="24" viewBox="0 0 15 15">
                <use href="/assets/icons.svg#image" />
              </svg>
            </div>
            <label class="clickable" for="profile-photo-upload-input"
              ><span>Update Photo</span>
              <input
                type="file"
                name="profile_photo"
                id="profile-photo-upload-input"
                accept="image/*"
              />
            </label>
          </div>
          <label class="input-field" for="author-name">
            <span>Author's Name</span>
            <input type="text" name="author_name" id="author-name" required />
          </label>
          <label
            class="input-field dynamic-word-count"
            for="author-description"
          >
            <span>Author's Description</span>
            <textarea
              name="author_description"
              id="author-description"
              rows="4"
              maxlength="120"
            ></textarea>
            <div class="word-count-wrapper">
              <span class="word-count">0</span>/<span>120</span>
            </div>
          </label>
          <button class="clickable dynamic-button">
            <span class="idle">
              <span>Update</span>
              <svg width="24" height="24">
                <use href="/assets/icons.svg#paper-plane-tilt" />
              </svg>
            </span>
          </button>
        </form>
      </div>
    </header>
    <main>
      <div class="container with-padding">
        <div class="tab-switcher tab-view-wrapper">
          <header>
            <div class="tab-switcher-controls tab-view-controls">
              <button data-tab="all" class="active clickable">
                <span class="title">All</span>
                <span class="value">21, 245</span>
              </button>
              <button data-tab="my-posts" class="clickable">
                <span class="title">My Posts</span>
                <span class="value">21, 245</span>
              </button>
              <button data-tab="other-posts" class="clickable">
                <span class="title">Other Posts</span>
                <span class="value">21, 245</span>
              </button>
            </div>
            <button class="create clickable">
              <span>Create</span>
              <svg width="16" height="16">
                <use href="/assets/icons.svg#arrow-up-right" />
              </svg>
            </button>
          </header>
          <div class="tab-views">
            <div class="tab-view" data-tab-element="all">
              <div class="list-content-container content-wrapper">
                <div class="list-content content-container">
                  <div class="list-header header row">
                    <div class="post-title"><p>Post Title</p></div>
                    <div class="post-links"><p>My Links</p></div>
                    <div class="post-category"><p>Category</p></div>
                    <div class="post-authors"><p>Authors</p></div>
                    <div class="post-created-on"><p>Created on</p></div>
                    <div class="post-action"><p>Action</p></div>
                  </div>
                  <ul class="list">
                    <li
                      class="item row"
                      data-post_id="234234"
                      data-post_title="How to design your site footer like we did"
                      data-post_links="234"
                      data-post_category="All"
                      data-post_authors=""
                      data-post_created_on="Mar 13, 2023"
                      data-post_edit_url="www.edit.com"
                    >
                      <div class="post-title">
                        <p>How to design your site footer like we did</p>
                      </div>
                      <div class="post-links">
                        <p>234</p>
                      </div>
                      <div class="post-category">
                        <p>All</p>
                      </div>
                      <div class="post-authors">
                        <p></p>
                      </div>
                      <div class="post-created-on">
                        <p>Mar 13, 2023</p>
                      </div>
                      <div class="post-link">
                        <a href="" class="clickable">
                          <svg width="16" height="16">
                            <use href="/assets/icons.svg#link" />
                          </svg>
                          <span>Add / Edit</span></a
                        >
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="pagination">
                  <div
                    class="custom-select items-per-page"
                    data-default-value="10"
                    data-down-arrow-svg-name="caret-down"
                    data-down-arrow-svg-view-box="0 0 24 24"
                  >
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
                      <button
                        class="clickable icon-button previous-page"
                        aria-label="previous"
                      >
                        <svg width="20" height="20">
                          <use href="/assets/icons.svg#arrow-left" />
                        </svg>
                      </button>
                      <button
                        class="clickable icon-button next-page"
                        aria-label="next"
                      >
                        <svg width="20" height="20">
                          <use href="/assets/icons.svg#arrow-right" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="empty-list">
                  <svg width="118" height="118">
                    <use href="/assets/icons.svg#read-cv-logo" />
                  </svg>
                  <div class="content">
                    <h2>No Post yet</h2>
                    <p>
                      You do not have any post yet, when you create one it will
                      show up here.
                    </p>
                    <a href="" class="soft clickable"
                      ><span>Create New</span>
                      <svg width="16" height="16" viewbox="0 0 17 17">
                        <use href="/assets/icons.svg#plus" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-view" data-tab-element="my-posts">
              <div class="list-content-container content-wrapper">
                <div class="list-content content-container">
                  <div class="list-header header row">
                    <div class="post-title"><p>Post Title</p></div>
                    <div class="post-links"><p>My Links</p></div>
                    <div class="post-category"><p>Category</p></div>
                    <div class="post-created-on"><p>Created on</p></div>
                    <div class="post-authors"><p>Status</p></div>
                    <div class="post-action"><p>Action</p></div>
                  </div>
                  <ul class="list">
                    <li
                      class="item row"
                      data-post_title="How to design your site footer like we did"
                      data-post_links="234"
                      data-post_category="All"
                      data-post_status="disapproved"
                      data-post_created_on="Mar 13, 2023"
                      data-post_edit_url="www.edit.com"
                    >
                      <div class="post-title">
                        <p>How to design your site footer like we did</p>
                      </div>
                      <div class="post-links">
                        <p>234</p>
                      </div>
                      <div class="post-category">
                        <p>All</p>
                      </div>
                      <div class="post-created-on">
                        <p>Mar 13, 2023</p>
                      </div>
                      <div class="post-status">
                        <p data-status="disapproved"></p>
                      </div>
                      <div class="post-link">
                        <a href="" class="clickable">
                          <svg width="16" height="16">
                            <use href="/assets/icons.svg#link" />
                          </svg>
                          <span>Add / Edit</span></a
                        >
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="pagination">
                  <div
                    class="custom-select items-per-page"
                    data-default-value="10"
                    data-down-arrow-svg-name="caret-down"
                    data-down-arrow-svg-view-box="0 0 24 24"
                  >
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
                      <button
                        class="clickable icon-button previous-page"
                        aria-label="previous"
                      >
                        <svg width="20" height="20">
                          <use href="/assets/icons.svg#arrow-left" />
                        </svg>
                      </button>
                      <button
                        class="clickable icon-button next-page"
                        aria-label="next"
                      >
                        <svg width="20" height="20">
                          <use href="/assets/icons.svg#arrow-right" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                 <div class="empty-list">
                  <svg width="118" height="118">
                    <use href="/assets/icons.svg#read-cv-logo" />
                  </svg>
                  <div class="content">
                    <h2>No Post yet</h2>
                    <p>
                      You do not have any post yet, when you create one it will
                      show up here.
                    </p>
                    <a href="" class="soft clickable"
                      ><span>Create New</span>
                      <svg width="16" height="16" viewbox="0 0 17 17">
                        <use href="/assets/icons.svg#plus" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-view" data-tab-element="other-posts">
              <div class="list-content-container content-wrapper">
                <div class="list-content content-container">
                  <div class="list-header header row">
                    <div class="post-title"><p>Post Title</p></div>
                    <div class="post-links"><p>My Links</p></div>
                    <div class="post-category"><p>Category</p></div>
                    <div class="post-authors"><p>Authors</p></div>
                    <div class="post-created-on"><p>Created on</p></div>
                    <div class="post-action"><p>Action</p></div>
                  </div>
                  <ul class="list">
                    <li class="item row">
                      <div class="post-title">
                        <p>How to design your site footer like we did</p>
                      </div>
                      <div class="post-links">
                        <p>234</p>
                      </div>
                      <div class="post-category">
                        <p>All</p>
                      </div>
                      <div class="post-authors">
                        <p></p>
                      </div>
                      <div class="post-created-on">
                        <p>Mar 13, 2023</p>
                      </div>
                      <div class="post-link">
                        <a href="" class="clickable">
                          <svg width="16" height="16">
                            <use href="/assets/icons.svg#link" />
                          </svg>
                          <span>Add / Edit</span></a
                        >
                      </div>
                    </l>
                  </ul>
                </div>
                <div class="pagination">
                  <div
                    class="custom-select items-per-page"
                    data-default-value="10"
                    data-down-arrow-svg-name="caret-down"
                    data-down-arrow-svg-view-box="0 0 24 24"
                  >
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
                      <button
                        class="clickable icon-button previous-page"
                        aria-label="previous"
                      >
                        <svg width="20" height="20">
                          <use href="/assets/icons.svg#arrow-left" />
                        </svg>
                      </button>
                      <button
                        class="clickable icon-button next-page"
                        aria-label="next"
                      >
                        <svg width="20" height="20">
                          <use href="/assets/icons.svg#arrow-right" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                 <div class="empty-list">
                  <svg width="118" height="118">
                    <use href="/assets/icons.svg#read-cv-logo" />
                  </svg>
                  <div class="content">
                    <h2>No Post yet</h2>
                    <p>
                      No post from others yet, when ohers create one it will
                      show up here.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
