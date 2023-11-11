<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <style>
    body{
        background-color:green;
    }
  </style>
</head>
<body>
  <div class="content__container">
    <h1>Register page - final project</h1>
    <form action="index.php" id="register-form" method="POST" onsubmit="return validateForm()">
      <label for="username">
        <span>Username</span>
        <input type="text" name="username" id="username" required>
      </label>
      <label for="email">
        <span>E-mail</span>
        <input type="text" name="email" id="email" required>
        <p id="email-error" style="color: red;"></p>
      </label>
      <label for="password">
        <span>Password</span>
        <input type="password" name="password" id="psw" required>
      </label>        
      <label for="repeat_password">
        <span>Confirm password</span>
        <input type="password" name="repeat_password" id="psw-confirm" required>
      </label>
      <div class="btns__container">
        <input type="submit" value="Send" class="btn">
        <input type="reset" value="Reset" class="btn">
      </div>
    </form>
  </div>



  <script>

    function validateForm() {
      var emailInput = document.getElementById('email');
      var emailError = document.getElementById('email-error');

      var emailCaracteres = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;

      if (!emailCaracteres.test(emailInput.value)) {
        emailError.textContent = 'usa una cuenta que contenga "gmail.com"';
        return false; // Evita que el formulario se envíe si la validación falla
      } else {
        emailError.textContent = ''; 
      }
    }
  </script>
</body>
</html>
