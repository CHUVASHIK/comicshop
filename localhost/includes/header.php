<!--
    Шапка сайта
-->
<header class="header">
    <div class="header-section container">
        <div class="row pt-0 pt-md-3 mb-3 align-items-center header-pos">
            <!-- Логотип -->
            <div class="col-12 col-md-auto header-logo">
                <div class="nav navbar navv">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="../index.php" class="logo-block">
                                <img src="../assest/img/logo.png" alt="Логотип" title="The comics shop" class="logo-img">
                            </a>
                        </li>

                        <? if (!isset($_SESSION['user'])) { ?> <!-- Если не существует сессия с параметром user, то вывод след. ссылок -->

                            <li class="nav__item personal reg">
                                <img src="../assest/img/account.png" alt="Войти">
                                <a href="../blocks/Login_page.php" class="nav__link">Войти</a>
                            </li>

                            <li class="nav__item personal">
                                <img src="../assest/img/account.png" alt="Зарегистрироваться">
                                <a href="../blocks/Registration_page.php" class="nav__link">Зарегистрироваться</a>
                            </li>

                        <? } elseif ($_SESSION['user']['role'] == 'admin') { ?> <!-- в случае если сессия пользователя равна админской, то -->
                            <li class="nav__item admin_link"><a class="nav__link " href="#">Админ-панель</a></li>
                            <li class="nav__item admin_link"><a class="nav__link " href="../includes/logout.php">Выход</a></li>

                        <? } else { ?> <!-- в данном случаев выводит следующее -->
                            <li class="nav__item personal reg">
                                <img src="../assest/img/account.png" alt="Личный кабинет">
                                <a href="../blocks/Personal_page.php" class="nav__link">Личный кабинет</a>
                            </li>
                            <li class="nav__item"><a class="nav__link " href="../includes/logout.php">Выход</a></li>
                            <li class="nav__item personal">
                                <button class="cart" id="cart">
                                    <img class="cart__image" src="../assest/img/shopping_cart.svg" alt="Cart" />
                                    <div class="cart__num" id="cart_num">0</div>
                                </button>
                            </li>
                        <? } ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header_section">
            <div class="header-section container">
                <div class="col">
                    <nav class="top-nav">
                        <ul class="nav-list-1">
                            <li class="nav-1">
                                <a href="../blocks/Category_page.php" class="nav-1 nav-1-link">
                                    <span class="nav-1-link-text">Каталог комиксов</span>
                                </a>
                            </li>

                            <li class="nav-1">
                                <a href="../blocks/Contact_page.php" class="nav-1 nav-1-link">
                                    <span class="nav-1-link-text">Наши контакты</span>
                                </a>
                            </li>

                            <li class="nav-1">
                                <a href="../blocks/Revuise_page.php" class="nav-1 nav-1-link">
                                    <span class="nav-1-link-text">Отзывы</span>
                                </a>
                            </li>

                            <li class="nav-1">
                                <a href="../blocks/About_page.php" class="nav-1 nav-1-link">
                                    <span class="nav-1-link-text">О «Comics Shop»</span>
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- ./header_section -->
    </div>
</header>