<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة الطعام</title>
    <link rel="stylesheet" href="{{ asset('front/css/res2.css') }}">
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

    <div class="container-1">
        <div>
            <nav class="nav">
                <a href="#">قائمة الطعام</a>
                <a href="#">تقييم المطعم</a>
                <a href="#">معلومات المطعم</a>
            </nav>
            <div class="row">
                <aside class="sidebar">
                    <ul>
                        <li>الشوربة</li>
                        <li>المقبلات</li>
                        <li>السلطات</li>
                        <li>السندويتشات</li>
                        <li>الطبق الرئيسي</li>
                        <li>المكرونة</li>
                        <li>البيتزا</li>
                        <li>المشروبات الباردة</li>
                    </ul>
                </aside>

                <div class="search-bar">
                    <input type="text" placeholder="ابحث عن أصناف">
                    <section class="food-category">
                    </section>
                </div>
            </div>

        </div>

        <!-- سلة المشتريات -->
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


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // بيانات الأصناف لكل فئة
            const menuData = {
                "الشوربة": [{
                        name: "شوربة كريمة بالمشروم",
                        img: "{{ asset('front/image/Group 2.png') }}",
                        desc: "شوربة مصنوعة من الفطر الطازج مع الكريمة والتوابل."
                    },
                    {
                        name: "شوربة العدس",
                        img: "{{ asset('front/image/Group 3.png') }}",
                        desc: "شوربة غنية بالعدس والتوابل الشرقية."
                    }
                ],
                "المقبلات": [{
                        name: "سمبوسة بالجبن",
                        img: "{{ asset('front/image/Group 2.png') }}",
                        desc: "سمبوسة محشوة بالجبن اللذيذ ومقلية للقرمشة."
                    },
                    {
                        name: "حمص بالطحينة",
                        img: "{{ asset('front/image/Group 5.png') }}",
                        desc: "حمص كريمي محضر بزيت الزيتون والطحينة."
                    }
                ],
                "السلطات": [{
                        name: "سلطة سيزر",
                        img: "{{ asset('front/image/Group 2.png') }}",
                        desc: "سلطة دجاج مشوي مع صوص السيزر والخبز المحمص."
                    },
                    {
                        name: "سلطة تبولة",
                        img: "{{ asset('front/image/Group 7.png') }}",
                        desc: "سلطة تبولة طازجة مع البرغل والبقدونس والطماطم."
                    }
                ],

                "المكرونة": [{
                        name: "سلطة سيزر",
                        img: "{{ asset('front/image/Group 2.png') }}",
                        desc: "سلطة دجاج مشوي مع صوص السيزر والخبز المحمص."
                    },
                    {
                        name: "سلطة تبولة",
                        img: "{{ asset('front/image/Group 7.png') }}",
                        desc: "سلطة تبولة طازجة مع البرغل والبقدونس والطماطم."
                    }
                ]
            };

            // الحصول على العناصر
            const categoryItems = document.querySelectorAll(".sidebar ul li");
            const foodCategory = document.querySelector(".food-category");

            // عند النقر على فئة
            categoryItems.forEach(item => {
                item.addEventListener("click", function() {
                    const categoryName = this.textContent.trim(); // اسم الفئة المختارة

                    // التحقق إذا كانت الفئة موجودة
                    if (menuData[categoryName]) {
                        foodCategory.innerHTML = `<h3>${categoryName}</h3>`; // تحديث العنوان
                        menuData[categoryName].forEach(food => {
                            foodCategory.innerHTML += `
                            <div class="food-item">
                                <img src="${food.img}" alt="${food.name}">
                                <div class="details">
                                    <h4>${food.name}</h4>
                                    <p>${food.desc}</p>
                                </div>
                                <button class="add-to-cart">+</button>
                            </div>
                        `;
                        });
                    }
                });
            });
        });
    </script>

</body>

</html>