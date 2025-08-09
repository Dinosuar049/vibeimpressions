<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>About — Vibe Impressions</title>
  <style>
    /* --- Logo fix: removes the circular mask/border --- */
    img.logo {
      border-radius: 0 !important; /* remove rounded/circle shape */
      border: none !important;     /* remove any visible border */
      background: transparent !important;
      display: inline-block;
      max-width: 160px;
      height: auto;
    }

    /* Page layout */
    :root{
      --accent:#0b6cf6;
      --muted:#666;
      --bg:#fff;
      --container:1100px;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    body{margin:0;background:var(--bg);color:#111;line-height:1.5}
    header{display:flex;align-items:center;justify-content:space-between;padding:18px 20px;border-bottom:1px solid #eee}
    .brand{display:flex;align-items:center;gap:12px}
    nav a{margin-left:18px;text-decoration:none;color:var(--muted);font-weight:600}
    .container{max-width:var(--container);margin:36px auto;padding:0 20px}

    .hero{display:flex;gap:28px;align-items:center}
    .hero h1{margin:0;font-size:28px}
    .hero p{margin:6px 0;color:var(--muted)}

    .card{background:#fafafa;padding:20px;border-radius:12px;box-shadow:0 6px 18px rgba(12,20,30,0.04)}
    .grid{display:grid;grid-template-columns:1fr 320px;gap:24px;margin-top:22px}

    .section-title{font-size:20px;margin-bottom:10px}

    footer{padding:20px;text-align:center;color:var(--muted);font-size:14px;border-top:1px solid #eee;margin-top:40px}

    @media (max-width:820px){
      .grid{grid-template-columns:1fr}
      .hero{flex-direction:column;align-items:flex-start}
    }
  </style>
</head>
<body>
  <header>
    <div class="brand">
      <!-- Update the src to match your actual logo path on the site -->
      <img src="logo.png" alt="Vibe Impressions logo" class="logo" />
      <div>
        <strong>Vibe Impressions</strong><br>
        <small style="color:var(--muted)">For your lasting impression</small>
      </div>
    </div>
    <nav>
      <a href="/">Product</a>
      <a href="/services.html">Services</a>
      <a href="about.html">About us</a>
    </nav>
  </header>

  <main class="container">
    <section class="hero">
      <div>
        <h1>About Vibe Impressions</h1>
        <p>Small team • Big energy • Custom printed vibes</p>
        <p style="color:var(--muted);max-width:60%">We design and produce high-quality, custom branded items that help your brand leave an impression that lasts. From badges and stickers to event merch, our focus is on quality, sustainability and a fast friendly service.</p>
      </div>
    </section>

    <div class="grid">
      <div>
        <div class="card">
          <h2 class="section-title">Our Story</h2>
          <p>Founded by creatives and makers, Vibe Impressions started as a school market stall and quickly grew into a small business serving local events and schools. We believe in making uniforms and merch that people actually want to wear.</p>

          <h2 class="section-title" style="margin-top:18px">What we do</h2>
          <ul>
            <li>Custom badges &amp; pins</li>
            <li>Printed apparel and accessories</li>
            <li>Event and school merchandise</li>
            <li>Small-batch production and rapid turnarounds</li>
          </ul>

          <h2 class="section-title" style="margin-top:18px">Why choose us</h2>
          <p>We focus on simple, durable designs, transparent pricing and personal service. If you want quick quotes, bulk discounts or design help, we’re easy to work with.</p>
        </div>
      </div>

      <aside>
        <div class="card">
          <h3 class="section-title">Contact</h3>
          <p style="margin:0">Email: hello@vibeimpressions.example</p>
          <p style="margin:0">Phone: +64 21 000 000</p>

          <hr style="margin:12px 0;border:none;border-top:1px solid #eee">

          <h3 class="section-title">Our Values</h3>
          <p style="margin:0">Sustainability • Community • Craft</p>
        </div>
      </aside>
    </div>

    <section style="margin-top:28px">
      <div class="card">
        <h2 class="section-title">Team</h2>
        <p>We're a small tight-knit team of designers and makers who take pride in personalising every order. We love collaborating with schools and local creators.</p>
      </div>
    </section>
  </main>

  <footer>
    © Vibe Impressions — Made with care
  </footer>
</body>
</html>
