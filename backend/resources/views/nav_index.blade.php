<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="/"><i class="fas fa-bible mr-1"></i>Book</a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @guest
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('register') }}">ユーザー登録</a>
        </li>
        @endguest

        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">ログイン</a>
        </li>
        @endguest

        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.create') }}"><i class="fas fa-paper-plane"></i></a>
        </li>
        @endauth

        <!-- Navbar dropdown -->
        @auth
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
          <i class="fas fa-id-card-alt"></i>
          </a>
          <!-- Dropdown menu -->
          <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <button class="dropdown-item" type="button"
                onclick="location.href=''">
            マイページ
            </button>
          <div class="dropdown-divider"></div>
            <button form="logout-button" class="dropdown-item" type="submit">
            ログアウト
            </button>
          </div>
        </li>
        <form id="logout-button" method="POST" action="{{ route('logout') }}">
        @csrf
        </form>
        @endauth
      </ul>
      <!-- Left links -->

      <!-- Search form -->
      <form class="d-flex input-group w-auto" action="{{ route('posts.index') }}">
        <input
          type="text" name="keyword" value="{{ $keyword }}"
          class="form-control"
          placeholder="検索フォーム"
          aria-label="Search"
        />
        @if($posts->count())

        <table border="1">
          @foreach ($posts as $post)
          @endforeach
        </table>
        @else
        <p>見つかりませんでした。</p>
        @endif
        <input type="submit" value="検索" class="btn btn-info">
      </form>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->