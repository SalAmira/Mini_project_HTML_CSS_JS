<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime chat App</header>
            <form action="#">
                <div class="error-txt">this is an error message!</div>
                <div class="name-details">
                  <div class="field input">
                      <label for="">First name</label>
                      <input type="text" placeholder="Enter first name">
                  </div>
                  <div class="field input">
                      <label for="">Last name</label>
                      <input type="text" placeholder="Enter last name">
                  </div>
                </div>
                  <div class="field input">
                      <label for="">Email</label>
                      <input type="text" placeholder="Enter your email">
                  </div>
                  <div class="field input">
                      <label for="">Password</label>
                      <input type="password" placeholder="Enter your passwoed">
                      <i class="fa-solid fa-eye"></i>
                  </div>
                  <div class="field image">
                      <label for="">select image</label>
                      <input type="file">
                  </div>
                  <div class="field button">
                  <input type="submit" value="Continue to chat">
                  </div>
                  <div class="link">Already signed up? <a href="login.php">login now</a></div>
               
            </form>

        </section>
    </div>
   <script src="hide.js"></script>
    <script src="signup.js"></script>
</body>
</html>