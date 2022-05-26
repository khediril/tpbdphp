<h1>TP BASE DE DONNEES</h1>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="liste.php">Liste</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="liste.php">Liste des produit</a></li>
            <li><a class="dropdown-item" href="recherche.php">Recherche produit</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="formajout.php">Nouveau produit</a></li>
            <li><a class="dropdown-item" href="update.php">Modifier un produit</a></li>
            <li><a class="dropdown-item" href="delete.php">Supprimer un produit</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" tabindex="-1">Logout</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
