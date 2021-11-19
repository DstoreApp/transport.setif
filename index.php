<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>البوابة الالكترونية لمديرية النقل بسطيف</title>
    <link rel="stylesheet" href="style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@700&display=swap" rel="stylesheet">
    <!-- ------ -->
    <!-- style -->
    <style>
      body {
          font-family: 'Crimson Pro', serif;
      }
      header{
          font-family: 'Changa', sans-serif;
      }
    </style>
    <!-- ----- -->
  </head>
  <body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col head_l">
                    <h4 class="mt-2 shadow-sm text-center">Ministére des transports - Algerie</h1>
                    <h4 class="mt-2 shadow-sm text-center">Direction des Transports de Sétif</h1>
                    <h6 class="mb-2 shadow-sm text-center">Portail de la Direction des transports</h1>
                </div>
                <div class="col head_r">
                    <h4 class="mt-2 shadow-sm text-center">وزارة النقل - الجزائر</h1>
                    <h4 class="mt-2 shadow-sm text-center">مديرية النقل لولاية سطيف</h1>
                    <h5 class="mb-2 shadow-sm text-center">البوابة الالكترونية</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- navbar -->
    <div class="nav1">.</div>
    
    <!-- body -->
      
      <!-- form -->
    <div class="card mx-auto d-block" style="width: 20rem;">
      <div class="card-body">
        <h5 class="card-title text-center">دخول</h5>
        <!-- form -->
          <form action="home.php" method="post" class="p-2" dir="rtl">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">رمز الدخول</label>
              <input type="text" name="entre_code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">كلمة المرور</label>
              <input type="password" name="password_code" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="entre" class="btn btn-primary w-100">دخول</button>
            <div class="row">
                <a href="">نسيت كلمة المرور</a>
                <a href="tsjil.php">تسجيل</a>
            </div>
          </form>
          <?php
            if(isset($_POST['entre'])){
              $enter_code    = $_POST['entre_code'];
              $password_code = $_POST['password_code'];
              if($enter_code=='admin' && $password_code=='admin'){
                echo 'good';
              }else{
                echo "<p class='text-center' style='color:red;'>كلمة المرور أو رمز الدخول خاطئتين، أعد المحاولة</p>";
              }
            }
          ?>  
      </div>
    </div>
    
    <!-- -------- -->
    <iframe class="m-3 w-75 mx-auto d-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3219.804436223931!2d5.414014885238575!3d36.195637709196575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f315977b998a9b%3A0xd8c965d688d73382!2z2YXYr9mK2LHZitipINin2YTZhtmC2YTYjCDYs9i32YrZgeKAjg!5e0!3m2!1sar!2sdz!4v1637071867367!5m2!1sar!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 

    <footer>
        <div class="m-3 p-3">
            <h2>العنوان</h2>
            <p>الحي المالي - سطيف</p>
            <p>الهاتف: 036363636</p>
            <p>Site WEB: www.example.dz</p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="JavaScript.js"></script>
  </body>
</html>