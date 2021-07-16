<?php

    session_start();

    if(!isset($_SESSION['UNIQUE_ID'])){
        header("location: login.php");
    }

?>

<?php include_once "header.php"; ?>

    <body>
        
        <div class="wrapper">
            <section class="users">
                <header>
                   <?php
                      include_once "php/config.php";
                      $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['UNIQUE_ID']}");
                      if(mysqli_num_rows($sql) > 0){
                          $row = mysqli_fetch_assoc($sql);
                      }
                    ?>
                    <div class="content">
                        <img src="php/images/<?php echo $row['img']; ?>" alt="User image">
                        <div class="details">
                            <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                            <p><?php echo $row['status']; ?></p>
                        </div>
                    </div>
                    <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Đăng xuất</a>
                </header>
                <div class="search">
                    <span class="text">Chọn một người dùng để bắt đầu trò chuyện</span>
                    <input type="text" placeholder="Nhập tên người muốn trò chuyện...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="users-list">
                    
                </div>
            </section>
        </div>
        
     <script type="text/javascript" src="javascript/users.js"></script>

    </body>
</html>