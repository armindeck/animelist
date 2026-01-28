<header class="header">
    <div class="header__section">
        <input type="checkbox" id="header-menu-check" class="header__check-menu" hidden>
        <div class="header__header">
            <div class="header__left">
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a class="logo" href="<?= APP_URL ?? "" ?>">
                                <span class="icon"><i class="fas fa-meteor"></i></span>
                                <span class="text"><?= APP_NAME ?? "" ?></span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
            <div class="header__center">
                <form method="get" action="/search" class="header__search">
                    <input type="search" name="s" id="search" min="2" placeholder="Search..." required>
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="header__right">
                <div class="header__list">
                    <nav class="header__nav">
                        <label for="header-menu-check" class="header__check-menu header__menu header__item">
                            <a>
                                <span class="open">
                                    <i class="fas fa-bars"></i>
                                </span>
                                <span class="close">
                                    <i class="fas fa-times"></i>
                                </span>
                            </a>
                        </label>
                    </nav>
                </div>
            </div>
        </div>
        <nav class="header__nav">
            <ul class="header__list">
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
</header>
