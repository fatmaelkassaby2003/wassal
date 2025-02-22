<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة الطعام</title>
    <link rel="stylesheet" href="{{ asset('front/css/contact.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('front/css/register.css') }}"> -->
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container nav-container">
            <div class="right-section">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('front/image/solar_delivery-bold-duotone.png') }}" alt="Logo">
                </a>
                <a class="nav-link" href="#">وصل</a>
            </div>
            <div class="nav-links">
                <a class="nav-link active" href="{{ route('home1') }}">الصفحة الرئيسية</a>
                <a class="nav-link" href="{{ route('home1') }}">شراكتنا</a>
            </div>
            <div class="nav-icons">
    <label class="navbar-brand" for="toggle-links">
        <img src="{{ asset('front/image/Frame 43.png') }}" alt="Logo">
    </label>

    <a href="{{ route('cart.index') }}" class="image-container-1">
        <img src="{{ asset('front/image/Frame 43 (2).png') }}" alt="الصورة المحددة" width="40" height: auto;>
        <div class="number-overlay">4</div>
    </a>
</div>

            <input type="checkbox" id="toggle-links" class="toggle-links" hidden />

            <div class="links">
                <ul>
                    <li><a href="{{ route('register') }}">تسجيل</a></li>
                    <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                    <li><a href="logout-link">تسجيل الخروج</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="container-1">

    <div class="image-container">
            <img src="{{ asset('front/image/Contact-us-Scene-4-Curved-520x325.png') }}" alt="صورة توضيحية">
        </div>

        <!-- الفورم -->
        <div class="form-container">
            <h2>اتصل بنا</h2>
            <form>
                <div class="form-group">
                    <label for="name">الاسم</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">الرسالة</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit">إرسال</button>
            </form>
        </div>

    </div>

    <footer>
        <div class="container">
            <div class="footer-section">
                <h4>تابعنا</h4>
                <div class="social-icons">
                    <a href="#"><img src="{{ asset('front/image/basil_linkedin-outline.png')}}" alt="LinkedIn"></a>
                    <a href="#"><img src="{{ asset('front/image/si_youtube-line.png')}}" alt="YouTube"></a>
                    <a href="#"><img src="{{ asset('front/image/lets-icons_insta.png')}}" alt="Instagram"></a>
                    <a href="#"><img src="{{ asset('front/image/ri_facebook-fill.png')}}" alt="Facebook"></a>
                </div>
                <button class="contact-btn">اتصل بنا</button>
            </div>
            <div class="footer-section">
                <h4>شركتنا</h4>
                <ul>
                    <li><a href="#">وظائف</a></li>
                    <li><a href="#">الشروط والأحكام</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>المطاعم</h4>
                <ul>
                    <li><a href="#">طابون</a></li>
                    <li><a href="#">بيتزا</a></li>
                    <li><a href="#">مطاعم أخرى</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>مناطق شائعة</h4>
                <ul>
                    <li><a href="#">مسالك الرحاب</a></li>
                    <li><a href="#">شارع صلاح الدين</a></li>
                    <li><a href="#">مناطق أخرى</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>