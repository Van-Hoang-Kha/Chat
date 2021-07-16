<?php
    session_start();
    if(isset($_SESSION['UNIQUE_ID'])){ //if user is logged in
        header("location: users.php");
    }
?>

<?php include_once "header.php"; ?>
    <body>
        
        <div class="wrapper">
            <section class="form login">
                <header style="text-align: center; color: blue;">Alpha App</header>
                <form action="#">
                    <div class="error-txt"></div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Enter your email" required="required">
                    </div>
                    <div class="field input">
                        <label>Mật khẩu</label>
                        <input type="password" name="password" placeholder="Enter your password" required="required">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Tiếp tục trò chuyện">
                    </div>
                </form>
                <div class="link">Chưa đăng ký? <a href="index.php">Đăng ký ngay</a></div>
            </section>
        </div>

        <script type="text/javascript" src="javascript/pass-show-hide.js"></script>
        <script type="text/javascript" src="javascript/login.js"></script>
        
    </body>
</html> 