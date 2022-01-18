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
<body>
<div class="card p-5 card1 container">
<form action= "process_login.php" method="post">
    <div class="row d-flex justify-content-center">       
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-4 first">
                        <div class="linkedin"><span class="no-gutters text-primary font-weight-bold">Linked</span><span class="in">in</span></div>
                    </div>
                    <div class="col-md-6 second pl-4 pr-4">
                        <h4 class="welcome text-primary">Welcome</h4>
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
        </div>
        </form>
        </div>
        </div>
    </div>
</div>
        
    
    <style>
        body {
    background: #eee
}

.card {
    border-radius: 12px
    
}

.card1 {
    background-image: url("https://i.imgur.com/aeidEH1.jpg");
    margin-top: 20px
}

.first {
    background-image: url("https://image.freepik.com/free-vector/team-work-building-business-puzzle-illustration-people-character-together-idea-success-strategy-partnership_121223-1016.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
    border-radius: 12px;
    max-width: 100%;
    display: block;
    height: auto
}

.linkedin {
    position: relative;
    left: 25px;
    top: 20px;
    font-size: 19px
}

.in {
    border-width: 10px;
    color: #fff;
    background: blue;
    font-weight: bold
}

.second {
    background: #fff;
    border-radius: 12px
}

.welcome {
    margin-top: 130px;
    font-size: 23px;
    font-weight:
}

.form-group {
    padding-top: 8px;
    font-size: 12px
}

.form-control {
    background: #E3F2FD;
    margin-top: 10px;
    font-size: 20px;
    font-weight: bold;
    color: #fff;
    padding-top: 15px;
    padding-bottom: 15px;
    caret-color: red
}

.form-control:focus {
    box-shadow: none
    
}

.forgot {
    padding-top: 7px;
    color: #42A5F5
}

.space {
    padding-top: 28px
}

.btn {
    width: 300px;
    margin-left:370px
}

.btn1 {
    background: #0277BD;
    padding-left: 46px;
    padding-right: 46px
}

.btn2 {
    background-color: #fff;
    color: #0277BD;
    margin-left: 10px
}

.under {
    font-size: 8px;
    color: #42A5F5;
    padding-top: 40px
}

.lower {
    font-size: 8px;
    color: #42A5F5;
    position: relative;
    top: 90%
}

@media only screen and (max-width: 800px) {
    .linkedin {
        display: none
    }
}
</style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-3.2.0.slim.min.js"></script>
    <script src="toggle-onoff.js"></script>
</body>
</html>
