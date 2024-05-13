@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="ar">

<head>
    <title>المورد</title>
</head>

<body>
    <div class="supplier-page">
        <h1 class="heading">توريد</h1>

        <div class="supplies-wrapper">
            <!-- Supply 1 -->
            <div class="supply">
                <img src="im/images1" alt="Product Image" />
                <h2>كتاكيت</h2>
                <p>
                    تتغذى الكتاكيت على طعام خاص يحتوي على تركيبة متوازنة من البروتينات
                    والفيتامينات لضمان نموها الصحي
                </p>
                <p>السعر: 10 جنيه</p>
                <p>الكميه :10 كتاكيت</p>

                <button class="main-button">أشتري</button>
            </div>

            <!-- Supply 2 -->
            <div class="supply">
                <img src="im/images2" alt="Product Image" />
                <h2>نشاره خشب</h2>
                <p>نشاره خشب ناعمه تصلح لتربيه الدجاج</p>
                <p>السعر: 100 جنيه</p>
                <p>الكميه :10 كيلو</p>

                <button class="main-button">أشتري</button>
            </div>

            <!-- Supply 3 -->
            <div class="supply">
                <img src="im/images3" alt="Product Image" />
                <h2>علف</h2>
                <p>
                    طاقه ممثلة لا تقل عن 31% بروتين خام%21 دهن خام%6.73 ألياف خام% 3.30.
                    -المكونات : • ذرة صفراء • كسب فول صويا % 46 • بذور فول صويا مبثوقه
                </p>
                <p>السعر: 300 جنيه</p>
                <p>الكميه :30 كيلو</p>

                <button class="main-button">أشتري</button>
            </div>

            <!-- Supply 4 -->
            <div class="supply">
                <img src="im/images4" alt="Product Image" />
                <h2>فراخ بيضه</h2>
                <p>فراخ بيضه وزن 1000 جرام</p>
                <p>السعر: 200 جنيه</p>
                <p>الكميه :40 فرخه</p>

                <button class="main-button">أشتري</button>
            </div>
        </div>
    </div>
</body>

</html>

@endsection
