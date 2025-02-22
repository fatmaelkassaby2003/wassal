<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة المطاعم</title>
    <link rel="stylesheet" href="{{ asset('front/css/res.css') }}">
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
    <div class="container-restaurants">
        <h2>المطاعم</h2>
        <div class="search-bar">
            <button>
                <img src="{{ asset('front/image/fi-rr-search (1).png') }}" alt="Filter Icon">
            </button>
            <input type="text" placeholder=" ابحث عن مطعم معين .....">
        </div>

        <!-- بطاقة مطعم -->
        <div class="restaurant-card">
            <div class="restaurant-info">
                <img src="https://via.placeholder.com/70x70?text=MOJO" alt="MOJO Logo" class="logo">
                <div class="restaurant-details">
                    <h3>موجو</h3>
                    <p>أمريكي، الوجبات السريعة، المشروبات</p>
                    <p>EGP 50.00: الحد الأدنى للطلب</p>
                </div>

                <div class="status-rating">
                    <span class="status">مفتوح</span>
                    <div class="rating">
                        <span>3.5</span>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Plain_Yellow_Star.png" alt="Star">
                    </div>
                </div>
            </div>
        </div>

        <!-- تكرار البطاقة -->
        <div class="restaurant-card">
            <div class="restaurant-info">
                <img src="https://via.placeholder.com/70x70?text=MOJO" alt="MOJO Logo" class="logo">
                <div class="restaurant-details">
                    <h3>موجو</h3>
                    <p>أمريكي، الوجبات السريعة، المشروبات</p>
                    <p>EGP 50.00: الحد الأدنى للطلب</p>
                </div>

                <div class="status-rating">
                    <span class="status">مفتوح</span>
                    <div class="rating">
                        <span>3.5</span>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Plain_Yellow_Star.png" alt="Star">
                    </div>
                </div>
            </div>
        </div>

        <div class="restaurant-card">
            <div class="restaurant-info">
                <img src="https://via.placeholder.com/70x70?text=MOJO" alt="MOJO Logo" class="logo">
                <div class="restaurant-details">
                    <h3>موجو</h3>
                    <p>أمريكي، الوجبات السريعة، المشروبات</p>
                    <p>EGP 50.00: الحد الأدنى للطلب</p>
                </div>

                <div class="status-rating">
                    <span class="status">مفتوح</span>
                    <div class="rating">
                        <span>3.5</span>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Plain_Yellow_Star.png" alt="Star">
                    </div>
                </div>
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