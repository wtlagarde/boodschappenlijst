<nav>
  <li>
    <a href="/" <?= urlIs('/') ? "class='nav-link-active'" : "class='nav-link-inactive'" ?> >Home</a>
  </li>
  <li>
    <a href="/create" <?= urlIs('/create') ? "class='nav-link-active'" : "class='nav-link-inactive'"?> >Create</a>
  </li>
</nav>

 