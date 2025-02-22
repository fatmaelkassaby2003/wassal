<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة الطعام</title>
    <link rel="stylesheet" href="{{ asset('front/css/basket.css') }}">
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

                <a href="#" class="image-container">
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

    <div class="container-1">
        <!-- سلة المشتريات -->
        <aside class="cart">
            <h2>سلة المشتريات</h2>
            <ul id="cart-items">
                @php $subtotal = 0; @endphp

                @foreach($cart as $id => $item)
                @php
                $itemTotal = $item['price'] * $item['quantity'];
                $subtotal += $itemTotal;
                @endphp
                <li>
                    {{ $item['name'] }}
                    <span>${{ number_format($itemTotal, 2) }}</span>

                    <div class="quantity">
                        <!-- نموذج إنقاص الكمية -->
                        <form action="{{ route('cart.updateQuantity') }}" method="POST" style="display:inline;">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <input type="hidden" name="action" value="decrease">
                            <button type="submit" class="decrease">-</button>
                        </form>

                        <span class="count">{{ $item['quantity'] }}</span>

                        <!-- نموذج زيادة الكمية -->
                        <form action="{{ route('cart.updateQuantity') }}" method="POST" style="display:inline;">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <input type="hidden" name="action" value="increase">
                            <button type="submit" class="increase">+</button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>

            @php
            $deliveryFee = 29.99;
            $serviceFee = 24.50;
            $total = $subtotal + $deliveryFee + $serviceFee;
            @endphp

            <div class="total">
                <p>المجموع الفرعي: <span id="subtotal">{{ number_format($subtotal, 2) }}</span> م.ج</p>
                <p>رسوم التوصيل: {{ number_format($deliveryFee, 2) }} م.ج</p>
                <p>رسوم الخدمة: {{ number_format($serviceFee, 2) }} م.ج</p>
                <p>المجموع الإجمالي: <span id="total">{{ number_format($total, 2) }}</span> م.ج</p>
            </div>

            <button class="checkout">تنفيذ الطلب</button>

        </aside>
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