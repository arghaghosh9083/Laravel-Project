<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css">
  <style>
 body {
      font-family: arial;
      transition: all 0.5s ease;
      -webkit-transition: all 0.5s ease;
    }
    .container {
      padding: 40px;
      width: 80%px;
      margin: 80px auto;
      background-color: #f1f1f1;
    }
    .container h2 {
      text-align: center;
    }
    .container form {
      text-align: center;
    }
    label {
      margin-right: 25px;
      margin-top: 5px;
      width: 30%;
      text-align: right;
      font-weight: bold;
    }
    .inputs {
      padding: 3px 5px;
      border: 2px solid #e2e2e2;
      width: 35%;
    }
    .textarea-icon {
      padding-top: 14px;
    }
    fieldset {
      border: 1px solid #d4d4d4;
      padding: 20px 10px;
      margin-bottom: 20px;
      border-radius: 8px;
    }

    .button {
      text-align: center;
    }

    .submit {
      color: white;
      background: #ee9a25;
      padding: 9px 25px;
      margin-right: 10px;
      border: none;
      border-radius: 5px;
      box-shadow: 0 0 5px #c9c9c9;
    }

    .submit:hover {
      background: #d1871e;
    }

  </style>
</head>
<body>

  <div class="container">
  <h2>Student Login Page</h2>
  <form action="" method="post">
  <fieldset>
  <div class="input-field">
          <label>Roll</label>
          <i class="fa-solid fa-address-book icon textarea-icon"></i>
          <input type="int" class="inputs">
        </div>
        <br>
        <div class="input-field">
          <label>Password</label>
          <i class="fa fa-eye-slash icon"></i>
          <input type="password" class="inputs">
        </div>
  </fieldset>
  <div class="button">
        <button type="submit" class="submit">Login</button>
      
        New Register? <a href="/register"> Signup</a></form>
      </div>
  </form>
  
  
  
  </div>
  
</body>
</html>