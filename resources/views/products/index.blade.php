<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> البقالة </title>
    <link rel="stylesheet" href="{{ asset('front/css/products.css') }}">
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

                <div class="dropdown">
                    <a class="nav-link" href="#">الأقسام</a> <!-- تحويل الـ button إلى رابط -->
                    <div class="dropdown-content">
                        <a href="#grocery">البقالة</a>
                        <a href="#cleaning">المنظفات</a>
                    </div>
                </div>

            </div>
            <div class="nav-icons">
                <label class="navbar-brand" for="toggle-links">
                    <img src="{{ asset('front/image/Frame 43.png') }}" alt="Logo">
                </label>

                <a href="{{ route('cart.index') }}" class="image-container">
                    <img src="{{ asset('front/image/Frame 43 (2).png') }}" alt="الصورة المحددة" width="40" height: auto;>
                    <div class="number-overlay">{{ session('cart') ? count(session('cart')) : 0 }}</div>
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

    <div class="products">
        <div class="category">
            <h1 id="grocery">البقالة</h1>
            <div class="container-pro">
                @foreach($groceryProducts as $product)
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('front/image/' . $product->image) }}" alt="{{ $product->name }}">
                        <h5>{{ $product->name }}</h5>
                        <p>Price: ${{ $product->price }}</p>
                        <form action="{{ route('cart.add', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="button">Add to Cart</button>
                        </form>
                        <p class="text-success success-message" style="display: none;">Added to cart!</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="category">
            <h1 id="cleaning">المنظفات</h1>
            <div class="container-pro">

                @foreach($cleaningProducts as $product)
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('front/image/' . $product->image) }}" alt="{{ $product->name }}">
                        <h5>{{ $product->name }}</h5>
                        <p>Price: ${{ $product->price }}</p>
                        <form action="{{ route('cart.add', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="button">Add to Cart</button>
                        </form>
                        <p class="text-success success-message" style="display: none;">Added to cart!</p>
                    </div>
                </div>
                @endforeach
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
                <h4>المتاجر</h4>
                <ul>
                    <li><a href="#">ملابس رجالية</a></li>
                    <li><a href="#">ملابس نسائية</a></li>
                    <li><a href="#">إكسسوارات</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>المناطق الشائعة</h4>
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