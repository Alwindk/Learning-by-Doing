<header class="nav-header">
    <section class="nav-header-content">
        <div class="row">
            <div class="col-md-12">
                <div class="nav-header-search">
                    <input type="text" name="search" id="search" autocomplete="off">
                    <input type="submit" id="search-submit" value="Zoeken">
                </div>

                <div class="nav-header-user">
                    <div class="nav-headder-user-full_name">
                        <?= $_SESSION['user']['full_name'] ?>
                    </div>
                    <div class="nav-headder-user-logout">
                        <a href="logout">Uitloggen</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4 style="margin-left: 260px;">Current App</h4>
            </div>
        </div>
    </section>
</header>