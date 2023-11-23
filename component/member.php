<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/headerFooter.css">
    <title>Danh Sách Thành Viên</title>
</head>

<body>
    <header>
        <div class="logo">
            <h1>THINH.</h1>
        </div>
        <nav class="navbar">
            <ul>
                <a href="../index.php">TRANG CHỦ</a>
                <a href="#">THÀNH VIÊN</a>
                <a href="#">GITHUB</a>
                <a href="#">LIÊN HỆ</a>
                <button class="btnLogin-popup">Login</button>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Danh Sách Thành Viên</h1>
        <?php
        // Mảng chứa thông tin của các thành viên
        $members = array(
            array('name' => 'Hồ Ngọc Hưng Thịnh', 'image' => './images/Dog.jpg'),
            array('name' => 'Chu Thị Thanh Huyền', 'image' => './images/Dog.jpg'),
            array('name' => 'Võ Thị Mỹ Ngọc', 'image' => './images/Dog.jpg'),
            array('name' => 'Nguyễn Hoàng Nam', 'image' => './images/Dog.jpg'),
            array('name' => 'Phạm Anh Tùng', 'image' => './images/Dog.jpg')
        );

        // Hiển thị hình ảnh và tên của từng thành viên
        foreach ($members as $member) {
            echo '<div>';
            echo '<img src="' . $member['image'] . '" alt="' . $member['name'] . '" class="member-img">';
            echo '<p>' . $member['name'] . '</p>';
            echo '</div>';
        }
        ?>
    </section>

    <!-- Footer -->
    <footer>
        <div class="grid footer__container">
            <div class="grid footer__container">
                <ul>
                    <li>
                        <h3>DevOps</h3>
                        <ul class="foot-item-box">
                            <li>Email: <a href="mailto:tungng14@gmail.com"><b>tungng14@gmail.com</b></a></li>
                        </ul>
                    </li>
                    <li>
                        <h3>Contact Me: </h3>
                        <ul>
                            <!-- Contact information for team members -->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>