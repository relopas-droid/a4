<?php
// SavoryCookLab - Main Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SavoryCookLab — Umami Reduction Science, Bone Broths & Copper Cookware</title>
  <meta name="description" content="SavoryCookLab explores umami reduction chemistry, heavy copper cookware thermal reactivity, bone broth collagen extraction, and dry-aging biochemistry.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <style>
    .active-cook {
      background: var(--accent-copper) !important;
      color: #ffffff !important;
      border-color: var(--accent-copper) !important;
    }
  </style>
</head>
<body>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Savory<span>CookLab</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Culinary Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Hero Header -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-content">
        <span class="hero-badge">Savory Culinary Lab & Umami Science</span>
        <h1 class="hero-title">The Art & Science of Savory Flavor Extraction</h1>
        <p class="hero-desc">Discover the synthesis of heavy copper cookware thermal reactivity, 12-hour bone broth collagen hydrolyzation, wood-fired Maillard searing, and koji fermentation.</p>
        <div class="hero-btns">
          <a href="blog.html" class="btn btn-copper">Explore Culinary Essays</a>
          <a href="about.html" class="btn btn-outline-dark" style="color: #fff; border-color: #fff;">Kitchen Studio</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Savory Gastronomy & Flavor Extraction Pillars Grid -->
  <section class="section" id="craft-pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Laboratory Standards</span>
        <h2 class="section-title">The Four Pillars of Savory Gastronomy</h2>
      </div>
      <div class="grid-4">
        <div class="cook-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🥘</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-copper); margin-bottom: 0.75rem;">Heavy Copper Thermal Mass</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Instantaneous heat conductivity eliminating hot spots for precision pan sauce reductions.</p>
        </div>
        <div class="cook-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🥩</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-copper); margin-bottom: 0.75rem;">Dry-Aging Biochemistry</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Enzymatic calpain breakdown of muscle fibers and natural moisture concentration over 45 days.</p>
        </div>
        <div class="cook-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🍲</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-copper); margin-bottom: 0.75rem;">Collagen Gelatin Extraction</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">12-hour gentle simmers converting connective tissues into luxurious, mouthcoating broth body.</p>
        </div>
        <div class="cook-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">🌿</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-copper); margin-bottom: 0.75rem;">Fat-Soluble Herb Layering</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Infusing essential oils of rosemary, thyme, and bay leaves into clarified butter and lard.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Umami Reduction & Searing Technique Explorer -->
  <section class="section" id="cook-explorer" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Reduction Explorer</span>
        <h2 class="section-title">The Umami Technique & Cookware Architecture Explorer</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Select a savory cooking technique profile to inspect its simmer duration, cookware material, and umami score:</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="btn btn-outline-dark cook-btn active-cook" data-cook="Red Wine & Shallot Glace de Viande" data-desc="8-hour veal stock reduction in 3mm solid copper saucier pan with Cabernet reduction and cold butter whisking." data-score="9.9/10 Umami Density & Gelatin Body">Red Wine Glace de Viande</button>
          <button class="btn btn-outline-dark cook-btn" data-cook="45-Day Dry-Aged Ribeye Wood Sear" data-desc="Hardwood oak fire sear at 650°F creating caramelized amino acid Maillard crust with rosemary basting." data-score="9.8/10 Concentrated Beef Intramuscular Flavor">45-Day Dry-Aged Ribeye</button>
          <button class="btn btn-outline-dark cook-btn" data-cook="Artisanal Roasted Tonkotsu Broth" data-desc="14-hour high-boil pork marrow bone extraction with roasted garlic, kombu, and shiitake mushroom glutamates." data-score="9.9/10 Glutamate-Inosinate Flavor Synergy">Roasted Tonkotsu Broth</button>
          <button class="btn btn-outline-dark cook-btn" data-cook="Koji-Cured Roasted Game Duck" data-desc="Aspergillus oryzae rice koji curing for 48 hours breaking down surface proteins for crispy roasted skin." data-score="9.7/10 Enzymatic Crust Caramelization">Koji-Cured Game Duck</button>
        </div>
        <div id="cook-detail">
          <div class="cook-card" style="border-left: 4px solid var(--accent-copper);">
            <h3 style="color: var(--accent-copper); font-size: 1.5rem; margin-bottom: 0.5rem;">Red Wine & Shallot Glace de Viande Culinary Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">8-hour veal stock reduction in 3mm solid copper saucier pan with Cabernet reduction and cold butter whisking.</p>
            <strong style="color: var(--accent-sage); font-size: 0.95rem;">Empirical Umami & Reduction Benchmark: 9.9/10 Umami Density & Gelatin Body</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Heavy Copper Cookware & Thermal Conductivity Spotlight -->
  <section class="section" id="copper-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="section-subtitle" style="display:block; text-align:left;">Thermal Physics</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">Solid 3mm Copper Conductivity & Precise Sauce Control</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            The difference between scorched pan sauces and silky veloutés lies in cookware thermal conductivity. Copper conducts heat 20 times faster than stainless steel, allowing instant temperature adjustments when whisking delicate butter emulsions.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">🍳 <strong style="color:var(--text-primary);">Hand-Wiped Tin Lining:</strong> Non-reactive protective barrier offering effortless fond release.</li>
            <li style="margin-bottom: 0.75rem;">🔥 <strong style="color:var(--text-primary);">Instant Response Curve:</strong> Cooling pan temperature in seconds upon reducing burner flame.</li>
            <li style="margin-bottom: 0.75rem;">🍷 <strong style="color:var(--text-primary);">Fond Dissolution Mastery:</strong> Unlocking deeply caramelized proteins into red wine reduction.</li>
          </ul>
          <a href="about.html" class="btn btn-copper">Our Culinary Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=800&q=80" alt="Copper Cookware Reduction Display" style="border-radius: 12px; border: 1px solid var(--border-color); box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Savory Flavor Matcher & Cooking Diagnostic Quiz -->
  <section class="section" id="cook-quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Flavor Diagnostic</span>
        <h2 class="section-title">Savory Cooking Matcher Quiz</h2>
      </div>
      <div class="cook-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-copper); margin-bottom: 1rem;">What Is Your Primary Goal for Tonight's Savory Culinary Creation?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="cook-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="8-Hour Glace de Viande Pan Sauce Reduction in Copper Saucier with Red Wine Fond.">
            A. Deep Umami Pan Sauce Reduction with Velvet Gelatin Mouthfeel
          </button>
          <button class="cook-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Wood-Fired Sear 45-Day Dry-Aged Ribeye with Rosemary Butter Basting.">
            B. High-Heat Hardwood Fire Sear with Maillard Crust Caramelization
          </button>
          <button class="cook-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="12-Hour Roasted Bone Broth with Glutamate-Rich Mushrooms & Kombu.">
            C. Clear & Gelatinous Bone Broth Extraction with Rich Herb Layering
          </button>
        </div>
        <div id="cook-quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Simmer Extraction & Maillard Temperature Metrics Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Laboratory Benchmarks</span>
        <h2 class="section-title">Savory Cook Lab Research Metrics</h2>
      </div>
      <div class="grid-4">
        <div class="cook-card" style="text-align: center;">
          <h3 class="metric-number text-copper" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="cook-card" style="text-align: center;">
          <h3 class="metric-number text-copper" data-target="45" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Days Dry-Aging Peak</p>
        </div>
        <div class="cook-card" style="text-align: center;">
          <h3 class="metric-number text-copper" data-target="650" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">°F Wood Sear Temp</p>
        </div>
        <div class="cook-card" style="text-align: center;">
          <h3 class="metric-number text-copper" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Master Chefs & Culinary Science Researchers Testimonials -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Culinary Acclaim</span>
        <h2 class="section-title">Endorsements From Executive Chefs & Food Scientists</h2>
      </div>
      <div class="grid-3">
        <div class="cook-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "SavoryCookLab provides the definitive guide for understanding glutamate-inosinate synergy, 3mm copper thermal response, and glace de viande reductions."
          </p>
          <strong style="color: var(--accent-copper); display: block;">— Chef Jean-Luc Moreau</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Executive Chef & Sauce Master, Lyon</span>
        </div>
        <div class="cook-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their research on dry-aging enzymatic calpain breakdown and koji rice curing sets a new benchmark for culinary science journalism."
          </p>
          <strong style="color: var(--accent-copper); display: block;">— Dr. Marcus Vance</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Food Biochemistry Researcher, Boston</span>
        </div>
        <div class="cook-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The premier digital journal for understanding bone broth collagen hydrolyzation, emulsified beurre blanc, and wood-fired Maillard searing."
          </p>
          <strong style="color: var(--accent-copper); display: block;">— Chef Hiroshi Tanaka</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Umami Gastronomy Specialist, Tokyo</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Savory Cooking Dispatches & Article Grid + Newsletter -->
  <section class="section" id="journal-dispatches">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Culinary Dispatches</span>
        <h2 class="section-title">Latest Savory Cooking Essays</h2>
      </div>
      <div class="grid-3" style="margin-bottom: 4rem;">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=800&q=80" alt="Science of Umami">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Umami Science</span>
            <div class="blog-date">August 24, 2026</div>
            <h3 class="blog-title"><a href="blog/the-science-of-umami-glutamates-inosinates-and-flavor-synergy.html">The Science of Umami</a></h3>
            <p class="blog-excerpt">Glutamate-inosinate synergy, dashi extraction, and flavor enhancement.</p>
            <a href="blog/the-science-of-umami-glutamates-inosinates-and-flavor-synergy.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=800&q=80" alt="Dry-Aging Beef">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Meat Science</span>
            <div class="blog-date">August 20, 2026</div>
            <h3 class="blog-title"><a href="blog/dry-aging-beef-enzymatic-tenderization-and-moisture-evaporation.html">Dry-Aging Beef Biochemistry</a></h3>
            <p class="blog-excerpt">Enzymatic calpain breakdown, moisture loss, and nutty flavor creation.</p>
            <a href="blog/dry-aging-beef-enzymatic-tenderization-and-moisture-evaporation.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=800&q=80" alt="Copper Cookware Mastering">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Cookware Science</span>
            <div class="blog-date">August 15, 2026</div>
            <h3 class="blog-title"><a href="blog/mastering-copper-cookware-thermal-reactivity-and-tin-lining.html">Mastering Heavy Copper Cookware</a></h3>
            <p class="blog-excerpt">Thermal reactivity of 3mm copper, hand-wiped tin linings, and sauce control.</p>
            <a href="blog/mastering-copper-cookware-thermal-reactivity-and-tin-lining.html" class="read-more">Read Essay →</a>
          </div>
        </div>
      </div>

      <!-- Newsletter Dispatch Container -->
      <div class="cook-card" style="text-align: center; max-width: 800px; margin: 0 auto; background: var(--bg-secondary); border-color: var(--accent-copper);">
        <span class="section-subtitle">Culinary Dispatch</span>
        <h2 class="section-title" style="margin-bottom: 1rem; font-size: 2.2rem;">Subscribe to The Savory Gazette</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly analyses of reduction techniques, copper care routines, and umami science recipes.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to SavoryCookLab Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: var(--bg-primary); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 8px;">
          <button type="submit" class="btn btn-copper">Subscribe</button>
        </form>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Savory<span>CookLab</span></a>
          <p>SavoryCookLab is a premier editorial platform dedicated to savory culinary science, heavy copper cookware, bone broth extraction, and umami reduction dynamics.</p>
          <p style="margin-top: 1rem; color: var(--accent-copper);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Culinary Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Savory Focus</h4>
          <p>Deconstructing glutamate-inosinate synergy, 3mm copper thermal response, dry-aged beef biochemistry, collagen hydrolyzation, and koji fermentation globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 SavoryCookLab. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed with Culinary Precision.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
