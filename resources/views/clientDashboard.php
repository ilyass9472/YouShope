@role('client')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChronoSwiss - Space Timer Jupiter</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Helvetica', sans-serif;
    }
    
    body {
      background: linear-gradient(to right, #1a1a1a, #3a3a3a, #1a1a1a);
      color: white;
      overflow-x: hidden;
    }
    
    .nav-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      position: relative;
      z-index: 10;
    }
    
    .logo {
      font-size: 24px;
      font-weight: 300;
      letter-spacing: 2px;
    }
    
    .nav-links {
      display: flex;
      gap: 30px;
    }
    
    .nav-links a {
      color: white;
      text-decoration: none;
      text-transform: uppercase;
      font-size: 14px;
      letter-spacing: 1px;
    }
    
    .nav-right {
      display: flex;
      gap: 15px;
      align-items: center;
    }
    
    .currency-selector, .lang-selector {
      background: rgba(0, 0, 0, 0.4);
      border: none;
      color: white;
      padding: 5px 10px;
      border-radius: 15px;
      font-size: 12px;
    }
    
    .icon {
      width: 20px;
      height: 20px;
      filter: invert(1);
    }
    
    .hero {
      position: relative;
      height: 80vh;
      display: flex;
      align-items: center;
      padding: 0 40px;
    }
    
    .hero-content {
      width: 50%;
    }
    
    .limited-badge {
      background-color: rgba(0, 0, 0, 0.4);
      display: inline-block;
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 12px;
      margin-bottom: 20px;
    }
    
    .model-number {
      color: #aaa;
      font-size: 14px;
      margin-bottom: 10px;
    }
    
    .product-title {
      font-size: 48px;
      font-weight: 300;
      line-height: 1.1;
      margin-bottom: 30px;
    }
    
    .cta-button {
      background-color: #c9a675;
      color: #000;
      border: none;
      padding: 10px 20px;
      border-radius: 20px;
      font-size: 14px;
      cursor: pointer;
      font-weight: bold;
    }
    
    .product-image {
      position: absolute;
      right: 5%;
      top: 50%;
      transform: translateY(-50%);
      width: 50%;
      max-width: 600px;
    }
    
    .thumbnail {
      position: absolute;
      right: 10%;
      bottom: 100px;
      width: 120px;
      height: 120px;
      border-radius: 10px;
      overflow: hidden;
    }
    
    .thumbnail img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .available-tag {
      position: absolute;
      top: 120px;
      right: 40px;
      color: #c9a675;
      font-size: 14px;
    }
    
    .bottom-nav {
      display: flex;
      justify-content: space-between;
      padding: 20px 40px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .indicators {
      display: flex;
      gap: 5px;
      justify-content: center;
      margin-top: 20px;
    }
    
    .dot {
      width: 8px;
      height: 8px;
      background-color: rgba(255, 255, 255, 0.3);
      border-radius: 50%;
    }
    
    .dot.active {
      background-color: white;
    }
  </style>
</head>
<body>
  <div class="nav-container">
    <div class="logo">CHRONOSWISS</div>
    <div class="nav-links">
      <a href="#">Watches</a>
      <a href="#">Warranty & Service</a>
      <a href="#">Stores</a>
    </div>
    <div class="nav-right">
      <select class="currency-selector">
        <option>EUR</option>
        <option>USD</option>
        <option>CHF</option>
      </select>
      <select class="lang-selector">
        <option>ENG</option>
        <option>DEU</option>
        <option>FRA</option>
      </select>
      <img src="/api/placeholder/20/20" alt="Heart" class="icon">
      <img src="/api/placeholder/20/20" alt="Account" class="icon">
      <img src="/api/placeholder/20/20" alt="Cart" class="icon">
    </div>
  </div>
  
  <div class="hero">
    <div class="hero-content">
      <div class="limited-badge">LIMITED TO 50 PIECES</div>
      <div class="model-number">CH-9343.2-CUBK</div>
      <h1 class="product-title">SPACE<br>TIMER<br>JUPITER</h1>
      <button class="cta-button">FIND OUT MORE</button>
    </div>
    
    <img src="/api/placeholder/600/400" alt="Space Timer Jupiter Watch" class="product-image">
    <div class="thumbnail">
      <img src="/api/placeholder/120/120" alt="Watch Thumbnail">
    </div>
    <div class="available-tag">AVAILABLE</div>
  </div>
  
  <div class="indicators">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot active"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </div>
  
  <div class="bottom-nav">
    <div>
    


    </div>
    
  </div>
</body>
</html>
@endif