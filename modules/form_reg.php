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

<div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalLabelReg">Форма регистрации</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <form action="reg.php" method="POST">
                <div class="mb-3">
                  <label for="InputLogin" class="form-label">Имя</label>
                  <input 
                  name="name" 
                  type="text" 
                  class="form-control"
                  id="InputLogin" />
                </div>
                <div class="mb-3">
                  <label for="InputLogin" class="form-label">Фамилия</label>
                  <input 
                  name="surname" 
                  type="text" 
                  class="form-control" 
                  id="InputLogin" />
                </div>
                <div class="mb-3">
                  <label for="InputLogin" class="form-label">Логин</label>
                  <input 
                  name="login" 
                  type="text" 
                  class="form-control" 
                  id="InputLogin" />
                </div>
                <div class="mb-3">
                  <label for="InputLogin" class="form-label">Email</label>
                  <input 
                  name="email" 
                  type="email" 
                  class="form-control" 
                  id="InputEmail" 
                  aria-describedby="emailHelp"/>
                </div>
                <div class="mb-3">
                  <label for="InputLogin" class="form-label">Телефон</label>
                  <input 
                  name="phone" 
                  type="tel" 
                  class="form-control" 
                  id="InputLogin" />
                </div>
                <div class="mb-3">
                  <label for="InputPassword" class="form-label">Пароль</label>
                  <input
                    name="pass"
                    type="password"
                    class="form-control"
                    id="InputPassword"
                  />
                </div>
                <div class="mb-3">
                  <label for="InputPassword" class="form-label">Повторите пароль</label>
                  <input
                    name="repeat_pass"
                    type="password"
                    class="form-control"
                    id="InputPassword"
                  />
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary reg_but">
                    Зарегистрироваться
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
</div>
</body>
</html>