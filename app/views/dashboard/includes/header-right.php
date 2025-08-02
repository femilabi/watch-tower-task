<div class="webmaster-notification-avatar">
    <button class="webmaster clickable">
        <svg width="24" height="24">
            <use href="<?= BASE_URL ?>app/views/assets/icons.svg#chat-dots" />
        </svg>
        <span class="text">Webmaster</span>
        <span class="unread-count">
            <svg width="12" height="12">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#asteriks" />
            </svg>
            <span>3</span>
        </span>
    </button>
    <button data-modal-target="notifications-modal" class="notification clickable">
        <span class="icon-wrapper">
            <svg width="24" height="24">
                <use href="<?= BASE_URL ?>app/views/assets/icons.svg#bell-simple" />
            </svg>
            <span>
                <svg width="8" height="8" viewbox="0 0 12 12">
                    <use href="<?= BASE_URL ?>app/views/assets/icons.svg#asteriks" />
                </svg>
            </span>
        </span>
    </button>
    <button class="avatar clickable" data-modal-target="profile-modal" aria-label="Profile avatar">
        <img src="<?= $user["avatar"] ?>" alt="<?= $user["first_name"] ?> <?= $user["last_name"] ?>" width="44" height="44" />
    </button>
</div>