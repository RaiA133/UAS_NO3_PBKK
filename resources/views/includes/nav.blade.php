<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="/">UAS PBKK NO 3</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($title == "Mahasiswa") ? 'active' : '' }}" aria-current="page" href="/">Mahasiswa</a>
          <a class="nav-link {{ ($title == "Dosen") ? 'active' : '' }}" href="/dosen">Menu Dosen</a>
          <a class="nav-link {{ ($title == "Mata kuliah") ? 'active' : '' }}" href="/mata_kuliah">Menu Mata Kuliah</a>
        </div>
      </div>
    </div>
  </nav>