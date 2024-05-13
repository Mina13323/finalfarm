<!DOCTYPE html>
<html lang="ar">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>إدارة المزرعة</title>
    <link rel="stylesheet" href="/public/styles/styles.css" />
    <script src="/public/scripts/scripts.js" defer></script>
  </head>

  <body>
    <div class="owner">
      <div class="container">

        <h1>إدارة المزرعة</h1>
        <form class="form" onsubmit="return validateForm()">

          <div class="input">
            <label for="username"> اسم المنتج </label>
            <input type="text" id="product" placeholder="اسم المنتج" required />
          </div>

          <div class="input">
            <label for="text">الوصف</label>
            <input type="text" id="description" placeholder="وصف المنتج" required />
          </div>

          <div class="input">
            <label for="price">السعر</label>
            <input type="text" id="price" placeholder="السعر" required />
          </div>

          <div class="input">
            <label for="quantity">الكمية</label>
            <input type="text" id="quantity" placeholder="الكمية" required />
          </div>

          <div class="input">
            <label for="role">اختر </label>
            <select id="role" class="dropbtn" onchange="handleRoleChange(this)" required >
              <option value="" disabled selected style="display: none">
                اختر دورك
              </option>
              <option value="buyer">مشتري</option>
              <option value="supplier">مورد</option>
              <option value="veterinarian">بيطري</option>
            </select>
          </div>

          <button type="submit" class="main-button">انشاء</button>
        </form>
      </div>
    </div>
  </body>
</html>