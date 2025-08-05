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
        <a class="clickable" href="<?= BASE_URL ?>dashboard/logout">
            <svg width="24" height="24">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#arrow-line-right" />
            </svg>
        </a>
    </footer>
</nav>