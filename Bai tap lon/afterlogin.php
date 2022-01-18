<?php
    //  trước khi cho người dùng vào bên trong phải kiểm tra xem có vé chưa
    session_start();
    if(!isset($_SESSION['isloginok'])){
        $_SESSION['theme']=$_GET['theme'];
        header('location: login.php');
    }
?>
<?php
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','db_linkedln');
    if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sqlh = "SELECT nd.TenNguoiDung, nd.Anh, tk.Email FROM taikhoan tk, thongtinnguoidung nd WHERE (tk.Email=  '{$_SESSION['isloginok']}' OR tk.TenDangNhap =  '{$_SESSION['isloginok']}') AND nd.MaNguoiDung = tk.MaNguoiDung";
    $resulth = mysqli_query($conn,$sqlh);
    // Bước 03: Xử lý kết quả truy vấn
    if(mysqli_num_rows($resulth) > 0){
    $row = mysqli_fetch_assoc($resulth);
    }                                          
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Linkedin.com</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/fc2d12e6d6.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="assets/css/afterlogin.css" />
</head>

    <body>
        <nav class="general navbar navbar-expand bg-white navbar-white">
            <div class="pb-0">
                <ul class="navbar-nav">
                    <li class="nav-item pl-2 active">
                        <a class="link nav-link" href="#">
                            <i class='logo link fab fa-linkedin ml-4 mt-1' style='font-size:40px;color:rgb(28, 78, 187);'></i></a>
                    </li>
                    <li class="nav-item" style="margin-right: 100px;">
                        <input class="search" type="search" style="width:280px; margin-top: 15px; height: 35px;"  placeholder="Search">
                    </li>
                    <li class="nav-item active">
                        <a class="link nav-link" href="#"><i style='font-size:17px; font-weight: bold;' class='link fa fa-home'></i><p style="font-size: small; " class="pl-3" >Home</p></a>
                    </li>
                    <li class="nav-item">
                        <a class=" link nav-link" href="#"><i style='font-size:17px' class='pl-4 link fas fa-user-friends'></i><p style="font-size: small;">My Network</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="link nav-link" href="#"><i style='font-size:17px' class='link fa fa-shopping-bag'></i><p class="pl-4" style="font-size: small;">Jobs</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="link nav-link" href="#"><i style='font-size:17px' class='link fas fa-comment-dots'></i><p style="font-size: small;">Messaging</p></a>
                    </li>
                    <li class="nav-ite">
                        <a class="link nav-link" href="#"><i style='font-size:17px' class='link fas fa-bell'>&#xe7f4;</i><p style="font-size: small;">Notifications</p></a>
                    </li>
                    <li class="nav-item ">
                        <img src="images/dqh1.jpg" style="margin-top: 2px; margin-bottom: 0px;  " width="35px" height="25px" class="nne">  <a style="margin-top: 0px; font-size: small;" class="link nav-link pl-2" href="#">Me<span style="font-size:small" class="fas fa-caret-down"></span>  </a>
                    </li>
                    <li class="nav-item line" >
                        <a class="link nav-link" href="#"><i style='font-size:17px' class='link pl-2 fas fa-th'></i><p style="font-size: small;">Work<span style="font-size:small" class="fas fa-caret-down"></span></p></a>
                    </li>
                    <li class="nav-item">
                        <a class="link nav-link pt-4" href="#"><span style="font-size: small;">Try Premium for free</span></a>
                    </li>
            </div>
         </nav>
         <section class="container-fliud">
            <div class="row">
                <div class="col-3 ml-5">
                    <div class="first ml-5 mr-0">
                        <img src="images/dqh1.jpg" style="margin-top: 20px; margin-bottom: 25px; margin-left: 90px ;" width="80px" height="70px" class="nne">            
                    </div>
                    <div class="first1 ml-5 mr-0 container-fliud">
                         <h3 style="font-size: small;" class="name pt-5">Quang Hiếu</h3>
                         <p class="dept font-size: small">Computer Engineer, front-end developer, network manager</p>
                         <hr>
                         <a href="#">
                            <p class=" view font-size: small py-0">Who viewed your profile  <span class="num">75</span><br>
                                Views of your post <span class="num1" >234</span>
                            </p>
                        </a> 
                        <hr class="py-0">
                        <a href="#">
                            <p class="view font-size: small  pl-3 py-0">Access exclusive tools & insights
                                <i class='fa fa-square square ' style='font-size:14px;color:rgb(214, 201, 23);'><span style="font-size: 14px; color: rgb(41, 40, 40);"> Try Premium for free</span></i>
                            </p>
                        </a>
                        <hr>
                        <a href="#">
                            <i class='fa fa-bookmark pb-5 pl-3 ' style='font-size:12px;color:gray;'><span style="font-size: 12px; color: rgb(41, 40, 40);">  My items</span></i>
                        </a> 
                    </div>
                    <div class="first2 ml-5 mr-0">
                        <p class="view pl-3 pt-2" style="color: rgb(27, 27, 27); font-size: small;">Recent <br>
                            <i class='fas fa-user-friends pt-2' style='font-size:12px;color:gray;'><span class="pl-2" style="font-size: 14px; color: gray">  Thủy Lợi University</span></i>
                            <i class='fas fa-user-friends pt-2' style='font-size:12px;color:gray;'><span class="pl-2" style="font-size: 14px; color: gray">  Website Technology CSE </span></i>
                            <i class='fa fa-hashtag pt-2' style='font-size:15px;color:gray;'><span class="pl-2" style="font-size: 14px; color: gray"> CSE485</span></i><br>
                            <i class='fa fa-hashtag pt-2' style='font-size:15px;color:gray;'><span class="pl-2" style="font-size: 14px; color: gray">  technology</span></i><br>
                            <i class='fa fa-hashtag pt-2' style='font-size:15px;color:gray;'><span class="pl-2" style="font-size: 14px; color: gray">  jobseekers</span></i>
                        </p>
                        <h6 class="view pl-3" style="color: rgb(0, 140, 255); font-size: small;">Group</h6>
                        <p class="view pl-3">
                            <i class='fas fa-user-friends pt-2' style='font-size:12px;color:gray;'><span class="pl-2" style="font-size: 14px; color: gray">  Thủy Lợi University</span></i>
                            <i class='fas fa-user-friends pt-2' style='font-size:12px;color:gray;'><span class="pl-2" style="font-size: 14px; color: gray">  Website Technology CSE </span></i>
                            <i class='fa fa-hashtag pt-2' style='font-size:15px;color:gray;'><span class="pl-2" style="font-size: 14px; color: gray"> CSE485</span></i><br>
                        </p>
                    </div>
                </div>
                <div class="col-5">
                    <div class="second ml-1">
                        <img src="images/dqh1.jpg"  width="70px" height="60px"  class="nne">
                        <input type="search" class="search1" placeholder="  Start a post"><br>
                        <i class='fa fa-image photo' style='font-size:20px;color:rgb(57, 108, 150);'><span style="font-size: 15px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: rgba(20, 20, 20, 0.6);">   Photo</span></i>
                        <i class='fab fa-youtube photo' style='font-size:20px;color:rgba(46, 145, 59, 0.9);'><span style="font-size: 15px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: rgba(20, 20, 20, 0.6);">   Video</span></i>
                        <i class="material-icons photo" style='font-size:20px;color:rgb(146, 144, 28);'>event</i><span style="font-size: 15px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: rgba(20, 20, 20, 0.6);">   Event</span>
                        <i class='material-icons photo' style='font-size:20px;color:rgb(57, 108, 150);'>library_books</i><span style="font-size: 15px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: rgba(20, 20, 20, 0.6);">  Photo</span>
                    </div>
                    <div class="second1 row ">
                        <div class="col-9"><hr></div>
                        <div class="col-2"><span style="color: gray; font-size: small;">Sort by:<span style="font-size: small; color: rgb(14, 13, 13);">Top</div>
                        <div class="col-1"><span class="fas fa-caret-down"></span></div>
                    </div>
                    <div class="second2 ml-1">
                        <p class="pt-2 pl-2" style="color: rgb(14, 13, 13); font-size: small;">Arsenal
                            <span style="font-size: small; color: gray;" > celebrates this</span><span class="fas fa-ellipsis-h more" style='font-size:20px;color:rgb(146, 144, 28);'></span></p> 
                        <hr class="mx-2">
                        <div class="row">
                            <div class="col-2">
                                <img src="images/arsenal.jpg"  width="70px" height="60px"  class="nne">
                            </div>
                            <div class="col-6">
                                <p class="pl-0" style="font-size: 14px; color: rgba(31, 29, 29, 1.0);">Arsenal. <span style="color: gray;">3rd+</span><span style="color: gray; font-size: 13px;"><br>131,587 followers</span><br><span style="font-size: 13px;">2d.<i class='fas fa-globe pl-2' style='font-size:15px;color:gray;'></i></span></p>
                            </div>
                            <div class="col-1">

                            </div>
                            <div class="col-2">
                                <a href="#"><h4 class="pl-4 pt-2" style="font-size: large; color: rgb(15, 111, 190);">+Follow</h4></a>
                            </div>
                        </div>
                        <div>
                            <p class="px-2" style="font-size: small;">Arsenal have hardly been starved of iconic players in this particular strip. As Bukayo Saka makes the natural progression from 77 to seven, he is the newest name on a star-studded roll-call of talent.


                            </p>
                            <img src="images/arsenal1.jpg" width="100%" height="100%" class="img-responsive mx-auto d-block">
                            
                        </div>   
                    </div> 
                </div>
                <div class="col-3">
                    <div class="third ml-1">
                         <div class="row">
                             <div class="col-6">
                                <h5 class="pt-3 pl-2" style="color: rgb(44, 43, 43); font-size: 17px;">Add to your feed</h5>
                             </div>
                             <div class="col-4">

                             </div>
                             <div class="col-1 pt-3">
                                <button type="button" class="alphi">i</button>
                             </div>
                         </div>  
                         
                         <div class="row">
                             <div class="col-3">
                                <img src="images/thaydzung.jpg"  width="60px" height="50px"  class="nne pr-0">
                             </div>
                             <div class="col-9">
                                <a href="#">
                                    <p class="pl-0 pt-1" style="font-size: 13px;"><span style="font-weight: bold; color: rgba(66, 61, 61, 0.8);">Kiều Tuấn Dũng <br><span style="color: gray; font-weight: lighter;"> Web Developer</span></span></p>
                                </a>
                             </div>
                         </div>  
                         <div class="row">
                            <div class="col-3">
                                
                            </div>
                            <div class="col-5">
                                <button class="follow">+Follow</button>
                            </div>
                            <div class="col-4">

                            </div>
                         </div>      
                         <div class="row">
                            <div class="col-3">
                               <img src="images/qanh.jpg"  width="60px" height="50px"  class="nne pr-0">
                            </div>
                            <div class="col-9">
                               <a href="#">
                                   <p class="pl-0 pt-2" style="font-size: 13px;"><span style="font-weight: bold; color: rgba(66, 61, 61, 0.8);">Quỳnh Anh<br><span style="color: gray; font-weight: lighter;"> Actor </span></span></p>
                               </a>
                            </div>
                        </div>  
                        <div class="row">
                           <div class="col-3">
                               
                           </div>
                           <div class="col-5">
                               <button class="follow">+Follow</button>
                           </div>
                           <div class="col-4">

                           </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                               <img src="images/sosla.jpg"  width="60px" height="50px"  class="nne pr-0">
                            </div>
                            <div class="col-9">
                               <a href="#">
                                   <p class="pl-0 pt-2" style="font-size: 12px;"><span style="font-weight: bold; color: rgba(66, 61, 61, 0.8);">Ole Gunnar Solskjær<br><span style="color: gray; font-weight: lighter;"> Football Manager<br></span></span></p>
                               </a>
                            </div>
                        </div>  
                        <div class="row">
                           <div class="col-3">
                               
                           </div>
                           <div class="col-5">
                               <button class="follow">+Follow</button>
                           </div>
                           <div class="col-4">

                           </div>
                        </div> 
                            <a href="#" id="all">
                                <h6 class="pt-2 pl-4" style="font-size: 13px; color:rgba(66, 61, 61, 0.8) ;"><span>View all recommmendations<i class='fas fa-arrow-right pl-2  pt-2' style='font-size:15px;color:gray;'></i></span></h6>  	                       
                            </a>                    
                        </div>
                    <div class="third1 ml-1">
                        <div class="row">
                            <div class="col-9">
                               <h6 class="pt-3 pl-2" style="color: rgb(44, 43, 43); font-size: 16px;"> Today’s most viewed posts</h6>
                            </div>
                            <div class="col-1">

                            </div>
                            <div class="col-1 pt-3">
                               <button type="button" class="alphi">i</button>
                            </div>
                        </div> 
                       <div class="row">
                        <h6>
                            <a href="#">
                                <ol class="num2 ml-0">
                                    <li class=" ml-0 mb-2 link1" >THÔNG BÁO: Điểm quá trình
                                        <br><span class="link2">Dung Kieu Tuan | Xem xét dừng thi nhiều bạn</span></li>
                                    <li class=" ml-0 mb-2 link1" >Cập nhật <br><span class="link2">Dung Kieu Tuan | Danh sách bổ sung Cấm thi</span></li>
                                    <li class=" ml-0 link1" >Quang Hieu <br><span class="link2">How to be a web developer</span></li>
                                </ol>
                            </a>
                        </h6>    
                       </div>
                       <a href="#" id="all">
                        <p class=" pl-4" style="font-size: 13px; color:rgba(66, 61, 61, 0.8) ;"><span>Show more on Linkedln Learning<i class='fas fa-arrow-right pl-2  pt-2' style='font-size:15px;color:gray;'></i></span></p>  	                       
                       </a> 
                    </div>
                    <div class="third2 ml-1">
                        <img class="photo3" src="images/linked.jpg">
                    </div>
                </div>
            </div>
            

         </section>
    </body>
    
</html>