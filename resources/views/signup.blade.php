<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>إنشاء حساب</title>
    <link rel="stylesheet" href="/public/styles/styles.css" />
    <script src="/public/scripts/scripts.js" defer></script>
  </head>

  <body>
    <div class="signup">
      <div class="container">
        <h1>إنشاء حساب</h1>
        <form class="form" onsubmit="return validateForm()">
          <div class="input">
            <label for="username">اسم المستخدم أو البريد الإلكتروني</label>
            <input
              type="email"
              id="username"
              placeholder="someone@example.com"
              required
            />
          </div>
          <div class="input">
            <label for="password">كلمة المرور</label>
            <input
              type="password"
              id="password"
              placeholder="كلمة المرور"
              minlength="8"
              required
            />
          </div>
          <div class="input">
            <label for="confirm_password" class="confirm-password-label"
              >تأكيد كلمة المرور</label
            >
            <input
              type="password"
              id="confirm_password"
              placeholder="تأكيد كلمة المرور"
              minlength="8"
              required
            />
          </div>
          <div class="input">
            <label for="phone_number">رقم الهاتف</label>
            <input
              type="tel"
              id="phone_number"
              placeholder="رقم الهاتف"
              pattern="[0-9]{10}"
              required
            />
          </div>
          <div class="input">
            <label for="address">العنوان </label>
            <input type="add" id="add" placeholder="العنوان " required />
          </div>
          <div class="input">
            <label for="role">اختر دورك</label>
            <select
              id="role"
              class="dropbtn"
              onchange="handleRoleChange(this)"
              required
            >
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
