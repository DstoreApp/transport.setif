<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>تسجيل</title>
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
    <!-- content -->
    <div class="card text-dark bg-light mb-3 mx-auto d-block" style="max-width: 30rem;">
        <h3 class="text-center p-2">تسجيل</h3>
        <div class="card-body mx-auto d-block">
            <div class="card-header mx-auto d-block">
              <div class="alert alert-primary mx-auto d-block text-center" style="width: 25rem;" role="alert">
              مهم! يرجى التأكد من البريد الإلكتروني الخاص بك قبل إرسال استمارة التسجيل
              </div>  
            </div>
              <form method="post" class="p-2" dir="rtl">
                <div class="row mb-3">
                  <label for="colFormLabel" class="col-sm-4 col-form-label">رمز الدخول</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="colFormLabel" placeholder="رمز الدخول">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="colFormLabel" class="col-sm-4 col-form-label">كلمة المرور</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="colFormLabel" placeholder="كلمة المرور">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="colFormLabel" class="col-sm-4 col-form-label">تأكيد كلمة المرور</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="colFormLabel" placeholder="تأكيد كلمة المرور">
                  </div>
                </div>
                  <p style="color: red; font-size: 12px;">
                    ملاحظة: كن حذرًا ، وتأكد من إدخال بريد إلكتروني صالح ، وتأكد من أن صندوق الوارد الخاص بك يتلقى رسائل البريد الإلكتروني.
                  </p>
                <div class="row mb-3">
                  <label for="colFormLabel" class="col-sm-4 col-form-label">البريد الالكتروني</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="colFormLabel" placeholder="البريد الالكتروني">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="colFormLabel" class="col-sm-4 col-form-label">الوظيفة</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="colFormLabel" placeholder="الوظيفة">
                  </div>
                </div>  
                  <button type="submit" class="btn btn-primary w-100">موافق</button>
              </form>
        </div>
    </div>
    
    <!-- footer -->
    <footer>
        <div class="m-3 p-3">
            <h2>العنوان</h2>
            <p>الحي المالي - سطيف</p>
            <p>الهاتف: 036363636</p>
            <p>Site WEB: www.example.dz</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>