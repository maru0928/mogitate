<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>mogitate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
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
    <div class="product-container">
        <h1>商品一覧</h1>
        <button class="add-product-button">＋商品を追加</button>
    </div>
    <div class="search-container">
        <input type="text" placeholder="商品名で検索">
        <button>検索</button>
        <div class="product-card">
            <img src="product1.jpg" alt="商品1">
            <h3>キウイ</h3>
            <p>¥800</p>
        </div>
        <div class="product-card">
            <img src="product2.jpg" alt="商品2">
            <h3>ストロベリー</h3>
            <p>¥1200</p>
        </div>
        <div class="product-card">
            <img src="product3.jpg" alt="商品3">
            <h3>オレンジ</h3>
            <p>¥850</p>
        </div>
        <div class="product-card">
            <img src="product3.jpg" alt="商品3">
            <h3>スイカ</h3>
            <p>¥700</p>
        </div> 
        <div class="product-card">
            <img src="product3.jpg" alt="商品3">
            <h3>ピーチ</h3>
            <p>¥1000</p>
        </div>
        <div class="product-card">
            <img src="product3.jpg" alt="商品3">
            <h3>オレンジ</h3>
            <p>¥850</p>
        </div>
        <div class="product-card">
            <img src="product3.jpg" alt="商品3">
            <h3>シャインマスカット</h3>
            <p>¥1400</p>
        </div>
        <div class="product-card">
            <img src="product3.jpg" alt="商品3">
            <h3>パイナップル</h3>
            <p>¥800</p>
        </div>
        <div class="product-card">
            <img src="product3.jpg" alt="商品3">
            <h3>ブドウ</h3>
            <p>¥1100</p>
        </div>
        <div class="product-card">
            <img src="product3.jpg" alt="商品3">
            <h3>バナナ</h3>
            <p>¥600</p>
        </div>
        <div class="product-card">
            <img src="product3.jpg" alt="商品3">
            <h3>メロン</h3>
            <p>¥900</p>
        </div>
</div>
        
        

</body>
</html>
