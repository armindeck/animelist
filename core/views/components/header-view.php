<header class="header">
    <div class="header__section">
        <div class="header__left">
            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__item">
                        <a class="logo" href="<?= APP_URL ?? "" ?>" class="header__button">
                            <span class="icon"><i class="fas fa-meteor"></i></span>
                            <span class="text"><?= APP_NAME ?? "" ?></span>
                        </a>
                    </li>
                    <li class="header__item">
                        <a href="<?= APP_URL ?? "" ?>" class="header__button">
                            <span class="icon"><i class="fas fa-home"></i></span>
                            <span class="text">Home</span>
                        </a>
                    </li>
                    <li class="header__item">
                        <a href="<?= APP_URL ?? "" ?>/anime" class="header__button">
                            <span class="icon"><i class="fas fa-hamburger"></i></span>
                            <span class="text">Anime</span>
                        </a>
                    </li>
                    <li class="header__item">
                        <a href="<?= APP_URL ?? "" ?>/list" class="header__button">
                            <span class="icon"><i class="fas fa-list"></i></span>
                            <span class="text">List</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header__right">
            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__item">
                        <a href="<?= APP_URL ?? "" ?>/register" class="header__button">
                            <span class="icon"><i class="fas fa-user-plus"></i></span>
                            <span class="text">Register</span>
                        </a>
                    </li>
                    <li class="header__item">
                        <a href="<?= APP_URL ?? "" ?>/login" class="header__button">
                            <span class="icon"><i class="fas fa-user"></i></span>
                            <span class="text">Login</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>