<?php
$ua =$_SERVER['HTTP_USER_AGENT'];
$isWechat = (strpos($ua, 'MicroMessenger')) ? true : false;
if ($isWechat) {
    header("Content-Disposition: attachment; filename=\"a.doc\"");
    header("Content-Type: application/vnd.ms-word; charset=utf-8");
} else {
    header('location: https://www.xuezuoweb.com');
}
?>
<!DOCTYPE html>

<html lang="zh">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>浏览器打开</title>
<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f7f7f7;
    text-align: center;
    padding-top: 50px;
  }

  .container {
    margin: 0 auto;
    width: 90%;
    max-width: 600px;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
  }

  button {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
  }

  button:hover {
    background-color: #0056b3;
  }

  .instructions {
    margin-top: 20px;
    font-size: 16px;
    color: #666;
  }
</style>

<script>
function openInBrowser() {
  var targetUrl = 'https://www.xuezuoweb.com/'; // 替换为您想要跳转的网址

  // 检测是否在微信浏览器中
  var ua = navigator.userAgent.toLowerCase();
  if (ua.match(/MicroMessenger/i) == 'micromessenger') {
    // 在微信内，显示提示信息
    alert('请点击右上角菜单，选择"在浏览器中打开"');
  } else {
    // 不在微信内，直接跳转
    window.location.href = targetUrl;
  }
}
</script>
</head>
<body>

<div class="container">
  <h1>网站搭建学习网</h1>
  <p>为了更好浏览体验,请通过右上角从浏览器打开</p>
  <div class="instructions">
    <p>如果您在微信中打开此页面，请：</p>
    <ol>
      <li>点击页面右上角的三个点</li>
      <li>选择“在浏览器中打开”</li>
      <li><button onclick="openInBrowser()">打开网站搭建学习网</button></li>
    </ol>

  </div>
</div>

</body>
</html>