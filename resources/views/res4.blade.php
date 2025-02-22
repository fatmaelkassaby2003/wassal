<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معلومات المطعم</title>
    <link rel="stylesheet" href="{{ asset('front/css/res4.css') }}">
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

                <a href="{{ route('cart.index') }}" class="image-container">
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

    <nav class="nav-1">
        <a href="#">قائمة الطعام</a>
        <a href="#">تقييم المطعم</a>
        <a href="#">معلومات المطعم</a>
    </nav>
    <main>
        <div class="details">
            <div class="details-header">
                <img src="{{ asset('front/image/Group 2.png') }}" alt="MOJO Logo">
                <h2>MOJO</h2>
            </div>
            <div class="details-description">
                مطعم MOJO يقدم أشهى الوجبات السريعة والمشروبات بجودة عالية ومذاق فريد. يتميز بتقديم تجربة فريدة لعشاق
                الأطعمة الأمريكية.
            </div>
            <div class="details-item">الحد الأدنى للطلب <span>EGP 50.00</span></div>
            <div class="details-item">وقت التوصيل <span>50 دقيقة</span></div>
            <div class="details-item">التقييم <span class="rating">⭐ 3.5</span></div>
            <div class="details-item">نوع المطعم <span>أمريكي والوجبات السريعة والمشروبات</span></div>
        </div>
        <aside class="cart">
            <h2>سلة المشتريات</h2>
            <ul id="cart-items">
                <li>
                    شوربة كريمة بالمشروم
                    <span>190 م.ج</span>
                    <div class="quantity">
                        <button class="decrease">-</button>
                        <span class="count">1</span>
                        <button class="increase">+</button>
                    </div>
                </li>
            </ul>
            <div class="total">
                <p>المجموع الفرعي: <span id="subtotal">190</span> م.ج</p>
                <p>رسوم التوصيل: 29.99 م.ج</p>
                <p>رسوم الخدمة: 24.50 م.ج</p>
                <p>المجموع الإجمالي: <span id="total">244.49</span> م.ج</p>
            </div>
            <button class="checkout">تنفيذ الطلب</button>
        </aside>
    </main>
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