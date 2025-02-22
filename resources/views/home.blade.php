<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wassel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
</head>

<body>
    <div class="image-container">
        <img class="background" src="{{ asset('front/image/Ellipse 1.png') }}" alt="Base Image">
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
                    <a class="nav-link" href="#about">شراكتنا</a>
                </div>
                <div class="nav-icons">
                    <label class="navbar-brand" for="toggle-links">
                        <img src="{{ asset('front/image/Frame 43.png') }}" alt="Logo">
                    </label>

                    <a href="{{ route('cart.index') }}" class="image-container-1">
                        <img src="{{ asset('front/image/Frame 43 (2).png') }}" alt="" width="40" height: auto;>
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
        <img class="overlay" src="{{ asset('front/image/Frame 53.png') }}" alt="Overlay Image">
    </div>
    <div class="title">
        <h4 class="text1">توصيل سريع للطعام والبقالة والمزيد</h4>
    </div>
    <div class="container-fluid">
        <form class="d-flex" role="search">
            <input class="form-control me-2 search-input" type="search" placeholder="ابحث عن منطقة ,شارع,معلم معروف ..."
                aria-label="Search">
            <button class="btn btn-warning" type="submit">اختر موقعك وتابع</button>
        </form>
    </div>
    <div class="cards-container">
        <a href="{{ route('resturant') }}" class="card-link">
        <div class="card">
            <img src="{{ asset('front/image/mdi_food-outline.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">اطلب طعام </h5>
            </div>
        </div>
        </a>


        <a href="{{ route('resturant') }}" class="card-link">
        <div class="card">
            <img src="{{ asset('front/image/mdi_food-outline.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">اطلب الدواء</h5>
            </div>
        </div>
        </a>

        <a href="{{ route('home') }}" class="card-link">
        <div class="card">
            <img src="{{ asset('front/image/fluent_building-shop-20-regular.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">اطلب بقاله</h5>
            </div>
        </div>
        </a>


        <a href="{{ route('resturant') }}" class="card-link">
        <div class="card">
            <img src="{{ asset('front/image/icon-park-outline_love-and-help.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">تبرع</h5>
            </div>
        </div>
        </a>
    </div>

    <div class="cards-wrapper">
        <div class="info-card">
            <div class="info-content">
                <h2>طور مسارك المهني</h2>
                <p>كن جزءًا من فريق مميز يعمل خلف الستار ليحقق نجاح وصل</p>
                <button class="action-btn">اكتشف الوظائف المتاحة</button>
            </div>
            <img src="{{ asset('front/image/Job hunt-rafiki 1.png')}}" alt="طور مسارك المهني" class="info-img">
        </div>

        <div class="info-card">
            <div class="info-content">
                <h2>انضم إلينا كشريك</h2>
                <p>اجذب المزيد من العملاء وحقق نموا استنائيا . ابدأ فصلك الجديد مع طلبات</p>
                <button class="action-btn">اعرف المزيد</button>
            </div>
            <img src="{{ asset('front/image/Group 2.png')}}" alt="انضم إلينا كشريك" class="info-img">
        </div>
    </div>

    <section class="about-section" id="about">
        <h2>من نحن - "وصل" التوصيل أسرع وأبسط!</h2>
        <p class="about-text"><strong>وصل</strong> هو منصتك الذكية لتوصيل الطعام بسرعة وسهولة! نوفر لك تجربة توصيل طلب من سلسلة من أفضل الأماكن القريبة منك، مع خيارات متعددة تناسب كل الأذواق.</p>
    </section>

    <section class="features-section">
        <h3>مهمتنا</h3>
        <div class="features-container">
            <div class="feature-box">
                <img src="{{ asset('front/image/image 3.png')}}" alt="توصيل سريع">
                <h4>توصيل أسرع</h4>
                <p>توصيل طلباتك في أقل وقت ممكن</p>
            </div>
            <div class="feature-box">
                <img src="{{ asset('front/image/image.png')}}" alt="جودة مضمونة">
                <h4>جودة مضمونة</h4>
                <p>نختار أفضل الأماكن لضمان أعلى جودة</p>
            </div>
            <div class="feature-box">
                <img src="{{ asset('front/image/image (1).png')}}" alt="تجربة سهلة">
                <h4>تجربة سهلة</h4>
                <p>تصميم بسيط، طلب سريع وتتبع مباشر</p>
            </div>
        </div>
    </section>

    <section class="benefits-section">
        <h3>لماذا تختار "وصل"؟</h3>
        <ul class="benefits-list">
            <li>أكثر من <strong>X</strong> مطعم شريك في جميع أنحاء</li>
            <li>دعم فني متوفر <strong>24/7</strong> لمساعدتك دائمًا</li>
            <li>عروض وخصومات حصرية يومية</li>
        </ul>
        <div class="illustration">
            <img src="{{ asset('front/image/Take Away-pana (1) 1.png')}}" alt="توصيل الطعام">
        </div>
    </section>


    <div class="cities-container">
        <h2>مدن نخدمها في <span>Egypt</span></h2>
        <div class="cities-grid">
            <div class="city-card">
                <a href="#" class="city-name">بـنـهـا</a>
                <a href="#" class="city-link">مشاهدة المزيد من الأماكن</a>
                <a href="#" class="arrow">›</a>
            </div>
            <div class="city-card">
                <a href="#" class="city-name">الإسكندرية</a>
                <a href="#" class="city-link">مشاهدة المزيد من الأماكن</a>
                <a href="#" class="arrow">›</a>
            </div>
            <div class="city-card">
                <a href="#" class="city-name">الدقهلية</a>
                <a href="#" class="city-link">مشاهدة المزيد من الأماكن</a>
                <a href="#" class="arrow">›</a>
            </div>
            <div class="city-card">
                <a href="#" class="city-name">القاهرة</a>
                <a href="#" class="city-link">مشاهدة المزيد من الأماكن</a>
                <a href="#" class="arrow">›</a>
            </div>
            <div class="city-card">
                <a href="#" class="city-name">الجيزة</a>
                <a href="#" class="city-link">مشاهدة المزيد من الأماكن</a>
                <a href="#" class="arrow">›</a>
            </div>
            <div class="city-card">
                <a href="#" class="city-name">المنوفية</a>
                <a href="#" class="city-link">مشاهدة المزيد من الأماكن</a>
                <a href="#" class="arrow">›</a>
            </div>
            <div class="city-card">
                <a href="#" class="city-name">الأقصر</a>
                <a href="#" class="city-link">مشاهدة المزيد من الأماكن</a>
                <a href="#" class="arrow">›</a>
            </div>
            <div class="city-card">
                <a href="#" class="city-name">أسوان</a>
                <a href="#" class="city-link">مشاهدة المزيد من الأماكن</a>
                <a href="#" class="arrow">›</a>
            </div>
            <div class="city-card">
                <a href="#" class="city-name">سوهاج</a>
                <a href="#" class="city-link">مشاهدة المزيد من الأماكن</a>
                <a href="#" class="arrow">›</a>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>