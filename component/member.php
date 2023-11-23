<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Danh Sách Thành Viên</title>

</head>

<body>
    <header>
        <img src="path_to_logo.jpg" alt="Logo" width="50" height="50">
        <nav>
            <a href="index.php#footer" class="active">Members</a>
            <a href="https://github.com/TrHgTung/php_app_deploy" target="_blank">GitHub</a>
            <a href="./components/getApi.php">Mẫu API</a>
            <a href="./components/weatherApi.php">Xem Thời Tiết</a>
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