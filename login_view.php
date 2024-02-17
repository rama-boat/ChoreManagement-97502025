<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chore Management App</title>
  <link rel="stylesheet" type="text/css" href="../css/login_view.css">
  <script src="../login/login_view.js"></script>
</head>
<body>

  <div class="Log">
    <h1>Login</h1>
    <!-- Form -->
    <form class="log-box" action="../action/login_user_action.php" name="loginForm" method="post" onsubmit="return validateForm()">
      <!-- email -->
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" placeholder="Enter your email here" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"><br>
      <div id="e_error" class="error" style="display: none;">Please fill up your Email</div><br>

      <!-- password -->
      <label for="password">Password:</label><br>
      <input type="password" name="password" id="password" placeholder="Enter your password here" required pattern=".{8,}"><br>
      <div id="p_error" class="error" style="display: none;">Please enter your password</div><br>
      
      <!-- login button -->
      <button type="submit" class="login" name ="loginForm" value="Submit" id="submitBtn"> Submit</a></button>
        
    </form>
    <p id="for">Don't have an account? <a id="sec" href="../login/register_view.php">Sign Up Here</a></p>
  </div>


</body>
</html>