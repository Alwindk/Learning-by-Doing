<button onclick=" topFunction()" id="myBtn" title="Go to top"><img src="/public/images/up-arrow-01.svg" width="40px" alt=""></button>
<div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <a class="navbar-brand" href="/"><img src="/public/images/logo-1.png" alt="" style="max-width: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto align-items-center">
                <?php foreach ($vars['menu'] as $menu) : ?>
                    <li class="nav-item<?= isset($menu['submenu']) ? ' dropdown' : '' ?><?= $vars['active'] == $menu['url'] ? ' active' : '' ?>">
                        <?php if (!isset($menu['submenu'])) : ?>
                            <a class="nav-link mx-3 font-weight-bold text-monospace" href="<?= $menu['url'] ?>"><?= $menu['name'] ?></a>
                        <?php else : ?>
                            <a class="nav-link dropdown-toggle mx-3 font-weight-bold text-monospace" href="oefengesprekken" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $menu['name'] ?></a>
                        <?php endif ?>
                        <?php if (isset($menu['submenu'])) : ?>
                            <div class="dropdown-menu mt-3 px-4 mb-4 sub-menu" aria-labelledby="navbarDropdown">
                                <?php foreach ($menu['submenu'] as $submenu) : ?>
                                    <a class="dropdown-item mt-3 font-weight-bold" href="<?= $submenu['url'] ?>"><?= $submenu['name'] ?></a>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?>
                    </li>
                <?php endforeach ?>
                <a role="button" href="contact" id="contact-button" class="mx-3 font-weight-bold text-center">contact</a>
            </ul>
        </div>
    </nav>
</div>