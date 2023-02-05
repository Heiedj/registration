<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat+Alternates:ital,wght@0,100;0,400;1,100;1,400&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/1fb5deec3f.js" crossorigin="anonymous"></script>
    <title>Главная</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="" alt="Logo" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Главная</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Каталог</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">О нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Контакты</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 right-ul">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a
                      class="dropdown-item"
                      href=""
                      data-bs-toggle="modal"
                      data-bs-target="#regModal"
                      >Регистрация</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      href=""
                      data-bs-toggle="modal"
                      data-bs-target="#authModal"
                      >Авторизация</a
                    >
                  </li>
                  <li>
                    <form action="out.php" method="post"><button type="submit"
                      name = 'out'
                      class="dropdown-item"
                      data-bs-toggle="modal"
                      >Выход</button>
                    </form>
                    
                </ul>
              </li>
              <li class="nav-item cart-open">
                <a
                  class="nav-link"
                  data-bs-toggle="modal"
                  data-bs-target="#cartModal"
                  href="#"
                  ><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </a>
              </li>
            </ul>

            <!-- Modal Cart -->
            </div>
          </div>
        </div>
      </nav>
      <!-- Modal registration -->
      <div
        class="modal fade"
        id="regModal"
        tabindex="-1"
        aria-labelledby="ModalLabelReg"
        aria-hidden="true"
      >
        <!-- Форма регистрации -->
            <?php include("modules/form_reg.php")?>
          </div>
        </div>
      </div>
      <!-- Modal authorisation -->
      <div
        class="modal fade"
        id="authModal"
        tabindex="-1"
        aria-labelledby="ModalLabelAuth"
        aria-hidden="true"
      >
        <!-- Форма авторизации -->
        <?php include("modules/form_auth.php")?>
      </div>
    </header>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>