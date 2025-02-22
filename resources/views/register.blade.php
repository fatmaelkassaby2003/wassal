<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/register.css') }}">
</head>
<body>

    <div class="container">
        <div class="left">
            <img src="{{ asset('front/image/freepik--Character--inject-1.png') }}" alt="خريطة التوصيل">
        </div>
        <div class="right">
            <h2>إنشاء حساب</h2>
            <form>
                <div class="form-group">
                    <label>الاسم الأول</label>
                    <input type="text" placeholder="من فضلك أدخل اسمك">
                </div>
                <div class="form-group">
                    <label>اسم العائلة</label>
                    <input type="text" placeholder="من فضلك أدخل اسم العائلة">
                </div>
                <div class="form-group">
                    <label>البريد الإلكتروني</label>
                    <input type="email" placeholder="من فضلك البريد الإلكتروني">
                </div>
                <div class="form-group">
                    <label>كلمة السر</label>
                    <input type="password" placeholder="من فضلك كلمة السر">
                </div>
                <button type="submit" class="btn">تسجيل الدخول</button>
            </form>
            <div class="social-login">
                <div class="social-btn">
                    <img src="{{ asset('front/image/flat-color-icons_google.png') }}" alt="Google"> التسجيل عبر جوجل
                </div>
                <div class="social-btn">
                    <img src="{{ asset('front/image/line-md_facebook.png') }}" alt="Facebook"> التسجيل عبر الفيسبوك
                </div>
            </div>
            <div class="footer">
                <p>تمتلك حساب؟ <a href="#">تسجيل الدخول</a></p>
            </div>
        </div>
    </div>
</body>
</html>
