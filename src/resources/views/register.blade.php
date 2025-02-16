<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Vesper+Libre:wght@500&display=swap" rel="stylesheet">
</head>

  <body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        mogitate
      </a>
    </div>
  </header>

  <main>
    <div class="register-form__content">
      <div class="register-form__heading">
        <h2>商品登録</h2>
      </div>
      <form class="form">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">商品名</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="product-name" placeholder="商品名を入力" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">値段</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="number" name="price" placeholder="値段を入力" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">商品画像</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="file" id="image">
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">季節</span>
            <span class="form__label--required">必須</span>
          </div>
        <div class="season-container">
        　<label><input type="radio" name="season" value="spring"> 春</label>
        　<label><input type="radio" name="season" value="summer"> 夏</label>
        　<label><input type="radio" name="season" value="autumn"> 秋</label>
        　<label><input type="radio" name="season" value="winter"> 冬</label>
    　　　</div>
   　　　 <div class="form__group-title">
            <span class="form__label--item">商品説明</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="description" placeholder="商品の説明を入力"></textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="back" type="back">戻る</button>
          <button class="form__button-register" type="register">登録</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
