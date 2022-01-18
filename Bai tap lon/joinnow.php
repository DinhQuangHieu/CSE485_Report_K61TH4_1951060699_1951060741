<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
  
<body id="body1">
  <img id="img4" src="images/LinkedIn_Logo_2013.svg.png" class="card-img-top img-fluid" alt="...">
  
  <div id="div3">
  <form action="">      
    <h1 id="h1">Sign in</h1>
    <p id="p8">Stay updated on your professional world</p>
    <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="email" name = "txtEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email or Phone" class="form-control">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="password" name="txtPassword" class="form-control" id="exampleInputPassword1" placeholder="Password" class="form-control">                             
                        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            <?php
                 if(isset($_GET['error'])){
                     echo "<h5 style = 'color:red'> {$_GET['error']} </h5>";
                 }
            ?>
        </div>
                     <div class="forgot"><span>Forgot Password?</span></div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="btnSignIn">Sign In</button>
        
  
    <label id="label11">or</label>
 
    <button name="sign_in_with_Apple" id="sign_in_with_Apple">
    <img id="img5" src="images/apple.png" alt="">  
    <b id="b8">Sign in with Apple</b>  
    </button>
  </form><br>
</div>
   <p id="p5">New to LinkedIn?</p>
   <a id="a6" href="#">Join now</a>
   <br> 
  <div id="div4">
      <label id="label7">Linked</label>
      <i class="fa fa-linkedin"></i>
      <label id="label8">&copy; 2020</label>
      <a id="a3" href="#">About</a>
      <a id="a3" href="#">Accessibility</a>
      <a id="a3" href="#">User Agreement</a>  
      <a id="a3" href="#">Privacy Policy</a>
      <a id="a3" href="#">Cookie Policy</a>
      <a id="a3" href="#">Copyright Policy</a>
      <a id="a3" href="#">Brand Policy</a>
      <a id="a3" href="#">Guest Controls</a>
      <a id="a3" href="#">Community Guidelines</a>
      <select name="languages" id="languages">
         <option selected hidden>Language</option>
         <option value="Bengali">Bengali</option>
         <option value="Hindi">Hindi</option>
         <option value="Urdu">Urdu</option>
         <option value="Arabic">Arabic</option>
         <option value="Japanese">Japenese</option>
    </select>
  </div>
</body>
</html>