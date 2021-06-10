<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Yep</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{$current == "twitter" ? "active" : ""}}">
                    <a class="nav-link" href="index.php">Twitter </a>
                </li>
                <li class="nav-item {{$current == "inkbunny" ? "active" : ""}}">
                    <a class="nav-link"  href="inkbunny.php">InkBunny </a>
                </li>
            </ul>
            <form class="form-inline ml-auto" method="GET" action="{{ $current == "twitter" ? "index.php" : "inkbunny.php" }}">
                <div class="form-group no-border">
                    <input name="keyword" type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-white btn-just-icon btn-round">
                    <i class="material-icons">search</i>
                </button>
            </form>
        </div>
    </div>
</nav>