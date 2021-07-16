<?php
    session_start();
    if(isset($_SESSION['UNIQUE_ID'])){ //if user is logged in
        header("location: users.php");
    }
?>

<?php include_once "header.php"; ?>

    <body>
        
        <div class="wrapper">
            <section class="form signup">
                <header style="text-align: center; color: blue;">Alpha App</header>
                <form action="#" enctype="multipart/form-data">
                    <div class="error-txt"></div>
                    <div class="name-details">
                        <div class="field input">
                            <label>Họ</label>
                            <input type="text" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="field input">
                            <label>Tên</label>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                        <div class="field input">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="field input">
                            <label>Mật khẩu</label>
                            <input type="password" name="password" placeholder="Enter new password" required>
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field image">
                            <label>Chọn ảnh</label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="field button">
                            <input type="submit" value="Tiếp tục trò chuyện">
                        </div>
                </form>
                <div class="link">Đã đăng ký? <a href="login.php">Đăng nhập ngay</a></div>
            </section>
        </div>
        
        <script type="text/javascript" src="javascript/pass-show-hide.js"></script>
        <script type="text/javascript" src="javascript/signup.js"></script>

    </body>
</html> 