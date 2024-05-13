@extends('layouts.app')

@section('content')
<body class="background">
    <header>
        <img src="im/Logo.png" alt="شعار مزرعة الدواجن في مصر" />
        <h1>مرحبًا بك في المزرعة السعيدة للدواجن في مصر</h1>
        <h3>أختر دورك في المزرعة</h3>
    </header>

    <main>
        <section class="role-section">
            <a href="login" class="role" id="buyer">
                <div class="role-description">
                    <h2>المشترين</h2>
                    <p>ابحث عن الدجاج الطازج والصحي لوجبات عائلتك.</p>
                </div>
                <img src="im/Customer.jpeg" alt="صورة المشترين" />
            </a>

            <a href="login" class="role" id="veterinarian">
                <div class="role-description">
                    <h2>البيطارين</h2>
                    <p>احصل على نصائح خبراء حول صحة الدواجن ورعايتها.</p>
                </div>
                <img src="im/Veterinarian.jpeg" alt="صورة البيطارين" />
            </a>

            <a href="login" class="role" id="supplier">
                <div class="role-description">
                    <h2>الموردين</h2>
                    <p>قم بتوفير منتجات دجاج عالية الجودة للأسواق المحلية.</p>
                </div>
                <img src="im/Supplier.jpeg" alt="صورة الموردين" />
            </a>
        </section>
    </main>

    <footer>
        <p>اتصل بنا على: contact@chickenfarmegypt.com</p>
    </footer>
</body>
@endsection
