<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Log In | ToDoList</title>
  <link rel="stylesheet" type="text/css" href="todo_list-axelde_la_fuente/styles/style.css">
  <link rel="stylesheet" type="text/css" href="todo_list-axelde_la_fuente/styles/login.css">
  <link rel="icon" type="image/x-icon" href="ressources/images/favicon.png" >
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
  <div class="login-page">
    <h1 class="title">
      <span class="material-symbols-outlined">format_list_bulleted</span>ToDo List
    </h1>
    <div class="login-container">
    <h1 class="subtitle">Sign In</h1>
    <form class="login-form" method="post">
      <div>
        <span class="form-item material-symbols-outlined">mail</span>
        <input class="form-placeholder" type="email" placeholder="Enter your e-mail" name="email" required> 
      </div>
      <div>
        <span class="form-item material-symbols-outlined">lock</span>
        <input class="form-placeholder" type="password" placeholder="Enter your password" name="password" required> 
      </div>
      <div class="footer-login">
        <input class="form-submit" type="submit" value="Sign In">
        
        <?php
        if (isset($dVueEreur) && count($dVueEreur)>0) {
          echo "Erreur : ";
          foreach ($dVueEreur as $value){
            echo $value;
          }}
        ?>

      </div>
      <!-- action !!!!!!!!!! --> 
      <input type="hidden" name="action" value="validationLogin">
      </form>
      <form method="post">
        <input class="changePage" type="submit" value="Don't have already an account ?">

        <input type="hidden" name="action" value="goRegister">      
      </form> 
    </div>
  </div>
</body>
</html>