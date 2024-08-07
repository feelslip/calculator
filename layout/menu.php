<nav class="navbar navbar-expand-xl bg-main shadow p-2" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand fs-4 me-5 p-2" href="admin.php?page=home"> <?=$projectName?> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link mx-3 my-2 fs-5 <?=($_GET['page']=='home')?'active':''?>" aria-current="page"  href="admin.php?page=home"> <i class="fa-solid fa-house"></i> HOME </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 my-2 fs-5 <?=($_GET['page']=='listBooks')?'active':''?>" href="admin.php?page=listBooks"> <i class="fa-solid fa-book"></i> LIVROS </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 my-2 fs-5 <?=($_GET['page']=='insertBook')?'active':''?>" href="admin.php?page=insertBook"> <i class="fa-solid fa-book-medical"></i> CADASTRO </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 my-2 fs-5" href="config/logout.php"> <i class="fa-solid fa-power-off"></i> SAIR </a>
          </li>
          <li class="nav-item text-nowrap">
            <button class="nav-link px-5 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
            </button>
          </li>
          <li class="nav-item d-lg-none text-end">
            <span class="navbar-text" style="font-size: 1.1em;">
              Bem vindo <?=$_SESSION['user_data']['username'];?>!<br> Logado às <?=$_SESSION['user_data']['access'];?>
            </span>
          </li>
        </ul>
        <span class="navbar-text ms-auto d-none d-lg-block" style="font-size: 1.1em;">
              Bem vindo <?=$_SESSION['user_data']['username'];?>!<br> Logado às <?=$_SESSION['user_data']['access'];?>
        </span>
      </div>
    </div>
</nav>