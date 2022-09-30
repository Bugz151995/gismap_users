<?php function isPageActive($page, $cur_page)
{
    return ($page === $cur_page) ? 'active' : '';
} ?>

<nav id="sidebar">
    <div id="sidebarBrand" class="container navbar">
        <a class="navbar-brand text-light fw-bold" href="#">GIS-Based Mapping System</a>
    </div>
    <ul class="nav flex-column p-3 gap-2">
        <li class="nav-item">
            <a class="nav-link <?= isPageActive($page, 'home') ?>" aria-current="page" href="<?= base_url() ?>/home"><i class="fas fa-fw fa-house-chimney"></i> Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= isPageActive($page, 'users') ?>" href="<?= base_url() ?>/users"><i class="fas fa-fw fa-users"></i> Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= isPageActive($page, 'map') ?>" href="<?= base_url() ?>/map"><i class="fas fa-fw fa-map"></i> Map</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= isPageActive($page, 'marine_resources') ?>" href="<?= base_url() ?>/marine_resources"><i class="fas fa-fw fa-fish"></i> Marine Resources</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>/signout"><i class="fas fa-fw fa-right-from-bracket"></i> Logout</a>
        </li>
    </ul>
</nav>