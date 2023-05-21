<?php
// Kullanıcı adı ve şifreyi alın
$username = $_POST['username'];
$password = $_POST['password'];

// Kullanıcı adı ve şifreyi doğrulayın
// Burada veritabanı sorguları veya başka bir doğrulama yöntemi kullanabilirsiniz

if ($username == 'admin' && $password == '12345') {
  // Doğrulama başarılı ise kullanıcıyı başka bir sayfaya yönlendir
  header("Location: dashboard.html");
  exit();
} else {
  // Doğrulama başarısız ise kullanıcıyı hata sayfasına yönlendir veya hata mesajı göster
  header("Location: error.html");
  exit();
}

