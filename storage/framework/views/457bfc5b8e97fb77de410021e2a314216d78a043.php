    <nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top">
        <a class="navbar-brand" href="/"><?php echo e(config('app.name', 'Cholo Ure Berai')); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts/create">Create Post</a>
            </li>
          </ul>
        </div>
    </nav>