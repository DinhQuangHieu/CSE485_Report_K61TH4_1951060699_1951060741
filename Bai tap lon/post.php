<?php
    session_start();
    if(!isset($_SESSION['isloginok'])){
        header('location: Login.php');
    }
?>
<?php
include("template/header.php");
?>
<?php
include("template/Navbar.php");
?>
        <div class="container ps-5 pe-0 pt-3 tatpd">
            <div class="row">
                <div class="col-md-12 ps-5 pe-5 d-flex tatpd">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-11 ThanhPost">
                                <div class="row bg-light pt-2 pb-2">
                                    <form class="" action= "process_post.php" method="post">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="txtTitle" id="formGroupExampleInput" placeholder="Input Title">
                                        </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Content</label>
                                        <input type="text" class="form-control" name="txtContent" id="formGroupExampleInput2" placeholder="Input Content">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Image Address</label>
                                        <input type="text" class="form-control" name="txtImg" id="formGroupExampleInput2" placeholder="Input Image Address">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="btnPost" class="btn btn-primary">Post</button>
                                    </div>
                                    <div class="mb-3">
                                    <?php
                                        if(isset($_GET['error'])){
                                            echo "<h5 style = 'color:red'> {$_GET['error']} </h5>";
                                        }
                                    ?>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                                
   </div>
<?php
include("template/footer.php");
?>