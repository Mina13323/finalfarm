@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="ar">

<head>
    <title>المشتري</title>
</head>

<body>
    <div class="customer-page">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

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
                    <input type="number" class="quantity-input" value="0">
                    <button class="plus-button">+</button>
                </div>
                <button class="main-button purchase-button">أشتري</button>
            </div>

            <!-- Product 2 -->
            <div class="product">
                <img src="im/Product.jpeg" alt="Product Image" />
                <h2>اسم المنتج 2</h2>
                <p>وصف المنتج 2</p>
                <p>السعر: 125 جنيه</p>
                <div class="quantity">
                    <button class="minus-button">-</button>
                    <input type="number" class="quantity-input" value="0">
                    <button class="plus-button">+</button>
                </div>
                <button class="main-button purchase-button">أشتري</button>
            </div>
            <!-- Product 4 -->
            <div class="product">
                <img src="im/Product.jpeg" alt="Product Image" />
                <h2>اسم المنتج 3</h2>
                <p>وصف المنتج 3</p>
                <p>السعر: 175 جنيه</p>
                <div class="quantity">
                    <button class="minus-button">-</button>
                    <span class="quantity-text">0</span>
                    <button class="plus-button">+</button>
                </div>
                <button class="main-button">أشتري</button>
            </div>

            @if(auth()->user()->role === 'admin')
                <div class="admin-section">
                    <h2>إضافة منتج جديد</h2>
                    <form action="{{ route('admin.add_product') }}" method="POST">
                        @csrf
                        <label for="product-name">اسم المنتج:</label>
                        <input type="text" id="product-name" name="product_name" required>
                        <label for="product-description">وصف المنتج:</label>
                        <textarea id="product-description" name="product_description" required></textarea>
                        <label for="product-price">السعر:</label>
                        <input type="number" id="product-price" name="product_price" min="0" step="0.01" required>
                        <button type="submit">إضافة المنتج</button>
                    </form>
                </div>
            @endif
            <button class="main-button">أشتري</button>
        </div>
        <form id="purchase-form" action="{{ route('purchase') }}" method="POST">
            @csrf
            <input type="hidden" id="product-id" name="product_id">
            <input type="hidden" id="quantity" name="quantity">
        </form>

    </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const purchaseButtons = document.querySelectorAll('.purchase-button');

            purchaseButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    const product = this.parentElement;
                    const productId = product.dataset.productId;
                    const quantityInput = product.querySelector('.quantity-input');
                    const quantity = parseInt(quantityInput.value);

                    if (quantity > 0) {
                        // Set the product id and quantity in the form
                        document.getElementById('product-id').value = productId;
                        document.getElementById('quantity').value = quantity;

                        // Submit the form
                        document.getElementById('purchase-form').submit();
                    } else {
                        alert('يرجى تحديد كمية للشراء');
                    }
                });
            });
        });
    </script>
</body>

</html>
@endsection
