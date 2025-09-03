<?php
// Cấu hình header
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VPN Tốc Độ Cao</title>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Outfit', sans-serif;
      background: linear-gradient(135deg, #1e1e2f, #23234e, #1a1a40);
      background-size: 600% 600%;
      animation: bgmove 15s ease infinite;
      color: white;
      overflow-x: hidden;
    }
    @keyframes bgmove {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 60px 20px;
      text-align: center;
      animation: fadeIn 1.2s ease-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    h1 {
      font-size: 1.8rem;
      background: linear-gradient(to right, #00e5ff, #3f51b5);
      -webkit-background-clip: text;
      color: transparent;
      margin-bottom: 20px;
      animation: popTitle 1s ease-in-out;
    }
    @keyframes popTitle {
      0% { transform: scale(0.95); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }
    p {
      color: #ccc;
      margin-bottom: 20px;
      font-size: 1.1rem;
    }
    .grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 30px;
      width: 100%;
      max-width: 600px;
    }
    .card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 24px;
      padding: 30px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(16px);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 0 30px rgba(0, 255, 255, 0.3);
    }
    .icon {
      font-size: 36px;
      margin-bottom: 20px;
      animation: float 3s ease-in-out infinite;
    }
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 12px 24px;
      background: linear-gradient(135deg, #00c853, #64dd17);
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      margin: 10px 5px 0 5px;
      transition: all 0.3s ease;
    }
    .btn:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #00e676, #76ff03);
    }
    .btn.secondary {
      background: linear-gradient(135deg, #1e88e5, #42a5f5);
    }
    .btn.secondary:hover {
      background: linear-gradient(135deg, #2196f3, #64b5f6);
    }
    iframe {
      width: 100%;
      height: 200px;
      border: none;
      border-radius: 12px;
      margin-top: 15px;
    }
    .link-label {
      font-weight: bold;
      margin-bottom: 10px;
      display: block;
    }
    .link-label a {
      color: #00e5ff;
      text-decoration: none;
    }
    .link-label a:hover {
      text-decoration: underline;
    }
    footer {
      margin-top: 60px;
      font-size: 0.9rem;
      color: #bbb;
    }

    /* Nhóm nút tham gia */
    .group-btn {
      margin-top: 40px;
      text-align: center;
    }
    .group-btn .btn {
      display: inline-block;
      padding: 12px 20px;
      margin: 10px;
      border-radius: 8px;
      font-weight: bold;
      text-decoration: none;
      color: white;
      transition: all 0.3s ease;
    }
    .group-btn .btn:hover {
      transform: scale(1.05);
    }
    /* Zalo */
    .group-btn .btn.zalo {
      background: linear-gradient(135deg, #007AFF, #00BFFF);
    }
    .group-btn .btn.zalo:hover {
      background: linear-gradient(135deg, #3399FF, #66CCFF);
    }
    /* Telegram */
    .group-btn .btn.telegram {
      background: linear-gradient(135deg, #0088cc, #1c9dea);
    }
    .group-btn .btn.telegram:hover {
      background: linear-gradient(135deg, #1aa9e1, #60c4f3);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>SIÊU VPN</h1>
    <p>Click 1 chạm kết nối</p>

    <div class="grid">
      <div class="card">
        <div class="icon">📱</div>
        <h2>Tải App SHOPDATA Android</h2>
        <p class="link-label"><a href="https://sieuvpn.pro.vn" target="_blank"><b>Web: sieuvpn.pro.vn</b></a></p>
        <p><b>App SHOPDATA</b> tương thích mọi thiết bị Android</p>
        <p>Tải bản mới nhất</p>
        <a href="https://sieuvpn.io.vn/download/SHOPDATA_45.apk" class="btn">Tải APK Ver 45</a>
      </div>

      <div class="card">
        <div class="icon">🍏</div>
        <h2>Tải App SHOPDATA iOS</h2>
        <p class="link-label"><a href="https://sieuvpn.pro.vn" target="_blank"><b>Web: sieuvpn.pro.vn</b></a></p>
        <p>👉 Cài đặt ứng dụng TestFlight trước khi tải <b>App SHOPDATA</b> (Ver 45 mới nhất)</p>       
        <a href="https://testflight.apple.com/join/q2ZEK5u9" class="btn secondary">Tải cho iOS</a>
      </div>
    </div>

    <!-- Nút tham gia nhóm -->
    <div class="group-btn">
      <a href="https://zalo.me/g/wbhbli911" class="btn zalo">Tham Gia Nhóm Zalo</a>
      <a href="https://t.me/V2rayNgFree365Day" class="btn telegram">Tham Gia Telegram</a>
    </div>

    <footer>
      © 2025 Bảo mật tuyệt đối - Không lưu log
    </footer>
  </div>
</body>
</html>
