const express = require("express");
const app = express();
const port = 4000;

// Sử dụng thư mục 'public' để phục vụ các tệp tĩnh như hình ảnh
app.use(express.static("public"));

app.get("/", (req, res) => {
  // Hiển thị trang HTML với hình ảnh và thông tin cá nhân của bạn
  res.send(`
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Thông Tin Cá Nhân</title>
    </head>
    <body>
      <h1>Thông Tin Cá Nhân</h1>
      <img src="/your-image-file.jpg" alt="Your Image" width="300" height="300">
      <p>Họ và Tên: [Tên Của Bạn]</p>
      <p>Ngày Sinh: [Ngày Sinh Của Bạn]</p>
      <p>Email: [Địa Chỉ Email Của Bạn]</p>
    </body>
    </html>
  `);
});

app.listen(port, () => {
  console.log(`Server is running at http://localhost:${port}`);
});
