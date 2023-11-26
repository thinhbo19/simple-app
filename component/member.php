<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/member.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Danh Sách Thành Viên</title>
</head>

<body>
    <header>
        <div id="logomain" class="logo">
            <h2 class="logomain">MEMBERS</h2>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="../index.php">Back To Home Page</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="member-list">
            <?php
            // Mảng chứa thông tin của các thành viên
            $members = array(
                array('name' => 'Hồ Ngọc Hưng Thịnh', 'image' => '../images/Dog.jpg', 'facebook' => '#', 'instagram' => '#', 'linkedin' => '#'),
                array('name' => 'Chu Thị Thanh Huyền', 'image' => '../images/Dog.jpg', 'facebook' => '#', 'instagram' => '#', 'linkedin' => '#'),
                array('name' => 'Võ Thị Mỹ Ngọc', 'image' => '../images/Dog.jpg', 'facebook' => '#', 'instagram' => '#', 'linkedin' => '#'),
                array('name' => 'Nguyễn Hoàng Nam', 'image' => '../images/Dog.jpg', 'facebook' => '#', 'instagram' => '#', 'linkedin' => '#'),
                array('name' => 'Phạm Anh Tùng', 'image' => '../images/Dog.jpg', 'facebook' => '#', 'instagram' => '#', 'linkedin' => '#')
            );

            // Hiển thị hình ảnh, tên và biểu tượng social của từng thành viên
            foreach ($members as $member) {
                echo '<div class="memberlist">';
                echo '<img src="' . $member['image'] . '" alt="' . $member['name'] . '" class="member-img">';
                echo '<p>' . $member['name'] . '</p>';

                // Thêm biểu tượng social
                echo '<div class="social-icons">';
                echo '<a href="' . $member['facebook'] . '" target="_blank"><i class="fab fa-facebook"></i></a>';
                echo '<a href="' . $member['instagram'] . '" target="_blank"><i class="fab fa-instagram"></i></a>';
                echo '<a href="' . $member['linkedin'] . '" target="_blank"><i class="fab fa-linkedin"></i></a>';
                echo '</div>';

                echo '</div>';
            }
            ?>
        </div>
    </section>

    <script src="../component/script.js"></script>
</body>

</html>