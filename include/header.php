<header class="container">
    <div
        class="row d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img class="logo" src="/assets/logo.png">
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/"
                    class="nav-link px-2 <?= $_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' ? 'link-secondary' : 'link-dark' ?>">Home</a>
            </li>
            <li><a href="/card.php"
                    class="nav-link px-2 <?= $_SERVER['REQUEST_URI'] == '/card.php' ? 'link-secondary' : 'link-dark' ?>">Card</a>
            </li>
            <li><a href="/table.php"
                    class="nav-link px-2 <?= $_SERVER['REQUEST_URI'] == '/table.php' ? 'link-secondary' : 'link-dark' ?>">Table</a>
            </li>
            <li><a href="/blog.php"
                    class="nav-link px-2 <?= $_SERVER['REQUEST_URI'] == '/blog.php' ? 'link-secondary' : 'link-dark' ?>">Blog</a>
            </li>
            <li><a href="/profile.php"
                    class="nav-link px-2 <?= $_SERVER['REQUEST_URI'] == '/profile.php' ? 'link-secondary' : 'link-dark' ?>">Profile</a>
            </li>
        </ul>

        <div class="col-md-3 text-end">
            <a id="github-button" class="btn btn-block btn-social btn-github">
                <i class="fa fa-github"></i> Sign in with Github
            </a>
        </div>
    </div>
</header>