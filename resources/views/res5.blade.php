<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة الدفع</title>
    <link rel="stylesheet" href="{{ asset('front/css/res5.css') }}">
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
        <a href="#">الدفع بالبطاقة</a>
        <a href="#">الدفع عند الاستلام</a>
    </nav>

    <main>
        <div class="container-5">
            <div class="payment-section">
                <div class="card">
                    <img src="{{ asset('front/image/Frame 3.png') }}" alt="صورة البطاقة">
                </div>
                <div class="payment-content">
                    <h2>الدفع بالبطاقة</h2>
                    <div class="payment-form">
                        <input type="text" placeholder="اسم حامل البطاقة">
                        <input type="text" placeholder="رقم البطاقة">
                        <input type="text" placeholder="(MM/YY) تاريخ الانتهاء">
                        <input type="text" placeholder="رمز الأمان (CVV)">
                        <h3>عنوان الفواتير</h3>
                        <div class="billing-options">
                            <label for="same-address">
                                <input type="radio" name="address" id="same-address">
                                <span>نفس العنوان</span>
                            </label>
                            <label>
                                <input type="radio" name="address" id="new-address">
                                <span>إضافة عنوان جديد</span>
                            </label>

                        </div>
                    </div>
                </div>
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
            </aside>
        </div>
    </main>
    <!-- ///////////////////////// -->

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>إضافة عنوان جديد</h2>
            <form>
                <input type="text" placeholder="العنوان">
                <input type="text" placeholder="المحافظة">
                <input type="text" placeholder="المنطقة">
                <input type="text" placeholder="الطابق">
                <input type="text" placeholder="الشقة">
                <button type="submit">حفظ العنوان</button>
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
                <h4>اتصل بنا</h4>
                <ul>
                    <li><a href="#">الدعم</a></li>
                    <li><a href="#">خدمات</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let modal = document.getElementById("myModal");
            let radioNewAddress = document.getElementById("new-address");
            let closeBtn = document.querySelector(".close-btn");

            // منع النافذة من الظهور تلقائيًا عند تحميل الصفحة
            modal.style.display = "none";

            // إظهار النافذة عند اختيار "إضافة عنوان جديد"
            radioNewAddress.addEventListener("change", function() {
                if (this.checked) {
                    modal.style.display = "flex";
                }
            });

            // إغلاق النافذة عند الضغط على زر (×)
            closeBtn.addEventListener("click", function() {
                modal.style.display = "none";
                radioNewAddress.checked = false; // إلغاء تحديد الخيار بعد الإغلاق
            });

            // إغلاق النافذة عند الضغط على الخلفية
            modal.addEventListener("click", function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                    radioNewAddress.checked = false; // إلغاء تحديد الخيار بعد الإغلاق
                }
            });
        });
    </script>
</body>

</html>