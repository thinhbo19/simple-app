<?php
$warning_remove = error_reporting(E_ERROR | E_PARSE);
$error = "";

if (array_key_exists('submit', $_GET)) {
    $error = "";

    if (!is_numeric($_GET['lat']) || !is_numeric($_GET['lon'])) {
        $error = "<p class='message'>Giá trị vĩ độ hoặc kinh độ không hợp lệ!</p>";
    } elseif (empty($_GET['lat']) || empty($_GET['lon'])) {
        $error = "<p class='message'>Vui lòng nhập cả vĩ độ và kinh độ!</p>";
    } else {
        $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/weather?lat=" . $_GET['lat'] . "&lon=" . $_GET['lon'] . "&appid=61e0614bbd1c0c357bd21c6346984989");

        $xuLiJSON = json_decode($apiData, true);

        $weather = "<b>Tình trạng thời tiết: </b>" . $xuLiJSON['weather']['0']['main'];
        $temperature = "<b>Nhiệt độ: </b>" . $xuLiJSON['main']['temp'] . " độ F";
        $city = "<b>Địa điểm: </b>" . $xuLiJSON['name'];
        $wind = "<b>Tốc độ gió: </b>" . $xuLiJSON['wind']['speed'] . " km/h";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/weather.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Xem Thời Tiết</title>
</head>

<body>
    <header>
        <div id="logomain" class="logo">
            <h2 class="logomain">API THỜI TIẾT</h2>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="../index.php">QUAY VỀ TRANG CHỦ</a></li>
            </ul>
        </nav>
    </header>
    <h1 class="title-content">THEO VĨ ĐỘ VÀ KINH ĐỘ</h1>
    <div class="main">
        <div class="form-main">
            <h2><label for="city">Nhập tọa độ, sau đó nhấn Enter:</label></h2>
            <form action="" method="get">
                <input type="text" name="lon" id="lon" placeholder="Nhập Kinh Độ (Longitude)" value="<?= isset($_GET['lon']) ? $_GET['lon'] : '' ?>">
                <input type="text" name="lat" id="lat" placeholder="Nhập Vĩ Độ (Latitude)" value="<?= isset($_GET['lat']) ? $_GET['lat'] : '' ?>">
                <button class="btn-sub" type="submit" name="submit">Search</button>
            </form>
        </div>
        <div class="arrow">
            <i class="fa-solid fa-arrow-right"></i>
        </div>
        <div class="result">
            <h2> <label for="">KẾT QUẢ</label> </h2>
            <div class="weather-results">
                <div class="message-log">
                    <?php
                    echo '<p class="message">' . $error . '</p>';
                    if (!empty($city)) {
                        echo '<p class="message">' . $city . '</p>';
                        echo '<p class="message">' . $weather . '</p>';
                        echo '<p class="message">' . $temperature . '</p>';
                        echo '<p class="message">' . $wind . '</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="next"><a href="./city.php">Theo tên thành phố</a></div>
    <script src="../component/script.js"></script>
</body>

</html>