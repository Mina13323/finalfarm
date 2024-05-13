@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="ar">

<head>
    <title>المشتري</title>
</head>

<body>
    <div class="customer-page">
        <h1 class="heading">شراء</h1>

        <div class="products-wrapper">
            <!-- Product 1 -->
            <div class="product">
                <img src="im/Product.jpeg" alt="Product Image" />
                <h2>اسم المنتج 1</h2>
                <p>وصف المنتج 1</p>
                <p>السعر: 100 جنيه</p>
                <div class="quantity">
                    <button class="minus-button">-</button>
                    <span class="quantity-text">0</span>
                    <button class="plus-button">+</button>
                </div>
                <button class="main-button">أشتري</button>
            </div>

            <!-- Product 2 -->
            <div class="product">
                <img src="im/Product.jpeg" alt="Product Image" />
                <h2>اسم المنتج 1</h2>
                <p>وصف المنتج 1</p>
                <p>السعر: 125 جنيه</p>
                <div class="quantity">
                    <button class="minus-button">-</button>
                    <span class="quantity-text">0</span>
                    <button class="plus-button">+</button>
                </div>
                <button class="main-button">أشتري</button>
            </div>

            <!-- Product 3 -->
            <div class="product">
                <img src="im/Product.jpeg" alt="Product Image" />
                <h2>اسم المنتج 1</h2>
                <p>وصف المنتج 1</p>
                <p>السعر: 150 جنيه</p>
                <div class="quantity">
                    <button class="minus-button">-</button>
                    <span class="quantity-text">0</span>
                    <button class="plus-button">+</button>
                </div>
                <button class="main-button">أشتري</button>
            </div>

            <!-- Product 4 -->
            <div class="product">
                <img src="im/Product.jpeg" alt="Product Image" />
                <h2>اسم المنتج 1</h2>
                <p>وصف المنتج 1</p>
                <p>السعر: 175 جنيه</p>
                <div class="quantity">
                    <button class="minus-button">-</button>
                    <span class="quantity-text">0</span>
                    <button class="plus-button">+</button>
                </div>
                <button class="main-button">أشتري</button>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
