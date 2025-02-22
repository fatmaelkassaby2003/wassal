<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="{{ asset('front/css/login.css') }}">
</head>
<body>
    <div class="login-container">
        <h2>تسجيل الدخول</h2>
        <form>
            <label for="email">البريد الالكتروني</label>
            <input type="email" id="email" placeholder="من فضلك البريد الالكتروني">
            
            <label for="password">كلمة السر</label>
            <input type="password" id="password" placeholder="من فضلك كلمة السر">
            
            <button type="submit" class="login-btn">تسجيل الدخول</button>
        </form>
        
        <div class="separator">او</div>
        
        <button class="social-btn">
            <img src="{{ asset('front/image/flat-color-icons_google.png') }}" alt="Google Logo">
            التسجيل عبر جوجل
        </button>
        
        <button class="social-btn">
            <img src="{{ asset('front/image/line-md_facebook.png') }}" alt="Facebook Logo">
            التسجيل عبر الفيسبوك
        </button>
        
        <div class="signup-link">
            لا تملك حساب؟ <a href="#">انشاء حساب</a>
        </div>
    </div>
</body>
</html>
