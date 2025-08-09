<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About — Vibe Impressions</title>
  <style>
    img.logo {
      border-radius: 0;
      border: none;
      background: transparent;
      max-width: 160px;
      height: auto;
    }

    :root{
      --accent:#0b6cf6;
      --muted:#666;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    body {
      margin:0;
      background:white;
      color:#111;
      line-height:1.5;
    }
    header {
      display:flex;
      align-items:center;
      justify-content:space-between;
      padding:18px 20px;
      border-bottom:1px solid #eee;
    }
    .brand {
      display:flex;
      align-items:center;
      gap:12px;
    }
    nav a {
      margin-left:18px;
      text-decoration:none;
      color:var(--muted);
      font-weight:600;
    }
    main {
      padding:20px;
    }
    .card {
      background:#fafafa;
      padding:20px;
      border-radius:12px;
      box-shadow:0 6px 18px rgba(12,20,30,0.04);
      margin-bottom:20px;
    }
    footer {
      padding:20px;
      text-align:center;
      color:var(--muted);
      font-size:14px;
      border-top:1px solid #eee;
      margin-top:40px;
    }
  </style>
</head>
<body>
  <header>
    <div class="brand">
      <img src="logo.png" alt="Vibe Impressions logo" class="logo">
      <div>
        <strong>Vibe Impressions</strong><br>
        <small style="color:var(--muted)">For your lasting impression</small>
      </div>
    </div>
    <nav>
      <a href="index.html">Product</a>
      <a href="services.html">Services</a>
      <a href="about.html">About us</a>
    </nav>
  </header>

  <main>
    <div class="card">
      <h1>About Vibe Impressions</h1>
      <p>We design and produce high-quality, custom branded items that help your brand leave a lasting impression. From badges and stickers to event merch, our focus is on quality, sustainability, and friendly service.</p>
    </div>

    <div class="card">
      <h2>Our Story</h2>
      <p>Founded by creatives and makers, Vibe Impressions started as a school market stall and quickly grew into a small business serving local events and schools.</p>
    </div>

    <div class="card">
      <h2>Contact</h2>
      <p>Email: hello@vibeimpressions.example</p>
      <p>Phone: +64 21 000 000</p>
    </div>
  </main>

  <footer>
    © Vibe Impressions — Made with care
  </footer>
</body>
</html>
