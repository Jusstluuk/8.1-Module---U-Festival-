<!DOCTYPE html>
<html lang="nl" data-theme="light">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>U Festival</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
<style>
  /* ===== CSS VARIABLES ===== */
  :root {
    --red: #e8192c;
    --teal: #2bbcd4;
    --dark: #111111;
    --bg: #f5f5f5;
    --surface: #ffffff;
    --surface2: #f0f0f0;
    --text: #111111;
    --text2: #555555;
    --border: #dddddd;
    --nav-bg: #ffffff;
    --card-shadow: 0 2px 12px rgba(0,0,0,0.10);
    --schedule-empty: #e8e8e8;
    --schedule-filled: var(--teal);
  }
  [data-theme="dark"] {
    --bg: #0e0e0e;
    --surface: #1a1a1a;
    --surface2: #222222;
    --text: #f0f0f0;
    --text2: #999999;
    --border: #333333;
    --nav-bg: #111111;
    --card-shadow: 0 2px 12px rgba(0,0,0,0.40);
    --schedule-empty: #2a2a2a;
  }

  /* ===== RESET ===== */
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }
  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--bg);
    color: var(--text);
    min-height: 100vh;
    transition: background 0.3s, color 0.3s;
  }
  img { max-width: 100%; display: block; }
  a { color: inherit; text-decoration: none; }
  button { cursor: pointer; font-family: inherit; }

  /* ===== TOPBAR ===== */
  .topbar {
    background: var(--red);
    color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 16px;
    height: 52px;
    position: sticky;
    top: 0;
    z-index: 100;
  }
  .topbar-logo {
    display: flex;
    align-items: center;
    gap: 8px;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 26px;
    letter-spacing: 2px;
    color: white;
  }
  .logo-u {
    width: 34px;
    height: 34px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--red);
    font-size: 20px;
    font-family: 'Bebas Neue', sans-serif;
    font-weight: 700;
  }
  .topbar-controls {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .btn-icon {
    background: none;
    border: none;
    padding: 6px;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s;
    color: white;
    font-size: 18px;
  }
  .btn-icon:hover { background: rgba(255,255,255,0.15); }
  .flag-btn {
    background: none;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 4px;
    padding: 2px 6px;
    color: white;
    font-size: 18px;
    cursor: pointer;
    line-height: 1;
    transition: border-color 0.2s;
  }
  .flag-btn:hover { border-color: white; }
  .theme-toggle {
    width: 36px;
    height: 20px;
    background: rgba(255,255,255,0.3);
    border-radius: 10px;
    border: none;
    position: relative;
    cursor: pointer;
    transition: background 0.3s;
    flex-shrink: 0;
  }
  .theme-toggle::after {
    content: '';
    position: absolute;
    top: 2px;
    left: 2px;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background: white;
    transition: transform 0.3s;
  }
  [data-theme="dark"] .theme-toggle::after { transform: translateX(16px); }

  /* ===== BOTTOM NAV ===== */
  .bottom-nav {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    height: 60px;
    background: var(--nav-bg);
    border-top: 1px solid var(--border);
    display: flex;
    z-index: 100;
    transition: background 0.3s;
  }
  .nav-item {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 2px;
    background: none;
    border: none;
    color: var(--text2);
    font-size: 10px;
    font-family: 'DM Sans', sans-serif;
    transition: color 0.2s;
    padding: 6px 0 10px;
  }
  .nav-item svg { width: 22px; height: 22px; }
  .nav-item.active, .nav-item:hover { color: var(--red); }
  .nav-item.active svg path, .nav-item.active svg rect,
  .nav-item.active svg circle { fill: var(--red); }

  /* ===== MAIN CONTENT ===== */
  .main {
    padding-bottom: 70px;
  }

  /* ===== HERO ===== */
  .hero {
    background: var(--dark);
    position: relative;
    overflow: hidden;
    min-height: 220px;
    display: flex;
    align-items: flex-end;
  }
  .hero-bg {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, #0a0a0a 0%, #1a0a0a 50%, #0a1a1a 100%);
  }
  .hero-dots {
    position: absolute;
    inset: 0;
    background-image: radial-gradient(circle, rgba(232,25,44,0.15) 1px, transparent 1px);
    background-size: 28px 28px;
  }
  .hero-content {
    position: relative;
    z-index: 2;
    padding: 32px 20px 28px;
    width: 100%;
  }
  .hero-date-badge {
    background: var(--red);
    color: white;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    padding: 4px 10px;
    border-radius: 3px;
    display: inline-block;
    margin-bottom: 12px;
  }
  .hero-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(52px, 14vw, 90px);
    line-height: 0.9;
    color: white;
    letter-spacing: 2px;
  }
  .hero-title span { color: var(--red); }
  .hero-subtitle {
    color: rgba(255,255,255,0.6);
    font-size: 13px;
    margin-top: 10px;
    letter-spacing: 0.5px;
  }
  .hero-cta {
    margin-top: 18px;
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
  }
  .btn-primary {
    background: var(--red);
    color: white;
    border: none;
    padding: 11px 22px;
    border-radius: 6px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.5px;
    transition: opacity 0.2s, transform 0.1s;
  }
  .btn-primary:hover { opacity: 0.88; transform: translateY(-1px); }
  .btn-outline {
    background: transparent;
    color: white;
    border: 1.5px solid rgba(255,255,255,0.4);
    padding: 11px 22px;
    border-radius: 6px;
    font-size: 13px;
    font-weight: 500;
    transition: border-color 0.2s;
  }
  .btn-outline:hover { border-color: white; }

  /* ===== SECTIONS ===== */
  .section { padding: 28px 16px; }
  .section + .section { padding-top: 0; }
  .section-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 16px;
  }
  .section-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 24px;
    letter-spacing: 1px;
    color: var(--text);
  }
  .section-title span { color: var(--red); }
  .see-all {
    font-size: 12px;
    color: var(--teal);
    font-weight: 600;
    letter-spacing: 0.3px;
  }

  /* ===== INFO ACCORDION ===== */
  .accordion {
    background: var(--surface);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: var(--card-shadow);
    transition: background 0.3s;
  }
  .accordion-item { border-bottom: 1px solid var(--border); }
  .accordion-item:last-child { border-bottom: none; }
  .accordion-btn {
    width: 100%;
    background: none;
    border: none;
    padding: 15px 16px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 15px;
    font-weight: 600;
    color: var(--text);
    text-align: left;
    transition: background 0.2s;
  }
  .accordion-btn.active { background: var(--teal); color: white; }
  .accordion-btn .chevron {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: var(--red);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    flex-shrink: 0;
    transition: transform 0.3s;
  }
  .accordion-btn.active .chevron { transform: rotate(180deg); background: rgba(0,0,0,0.2); }
  .accordion-body {
    display: none;
    padding: 16px;
    font-size: 14px;
    line-height: 1.65;
    color: var(--text2);
  }
  .accordion-body.open { display: block; }
  .info-link { color: var(--teal); font-weight: 600; }
  .info-label {
    color: var(--teal);
    font-weight: 700;
    font-size: 13px;
    margin-top: 12px;
    margin-bottom: 4px;
    display: block;
  }
  .info-label:first-child { margin-top: 0; }

  /* ===== SCHEDULE ===== */
  .day-tabs {
    display: flex;
    gap: 8px;
    margin-bottom: 16px;
  }
  .day-tab {
    flex: 1;
    padding: 10px;
    border: none;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 700;
    background: var(--surface2);
    color: var(--text2);
    transition: all 0.2s;
  }
  .day-tab.active {
    background: var(--teal);
    color: white;
  }
  .schedule-wrap {
    background: var(--surface);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: var(--card-shadow);
    transition: background 0.3s;
  }
  .schedule-scroll { overflow-x: auto; }
  .schedule-grid {
    display: grid;
    min-width: 560px;
  }
  .schedule-header {
    display: flex;
    padding: 10px 0 10px 80px;
    border-bottom: 1px solid var(--border);
    position: sticky;
    top: 52px;
    background: var(--surface);
    z-index: 2;
  }
  .time-label {
    flex: 1;
    text-align: center;
    font-size: 12px;
    font-weight: 700;
    color: var(--text2);
    letter-spacing: 0.5px;
  }
  .schedule-row {
    display: flex;
    align-items: stretch;
    border-bottom: 1px solid var(--border);
    min-height: 60px;
  }
  .schedule-row:last-child { border-bottom: none; }
  .stage-name {
    width: 80px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 700;
    color: var(--text2);
    letter-spacing: 0.5px;
    writing-mode: vertical-rl;
    text-orientation: mixed;
    padding: 8px 0;
    border-right: 1px solid var(--border);
    background: var(--surface2);
  }
  .schedule-slots {
    flex: 1;
    display: flex;
    position: relative;
    padding: 8px 6px;
    gap: 4px;
  }
  .slot-empty {
    flex: 1;
    background: var(--schedule-empty);
    border-radius: 6px;
    min-height: 44px;
  }
  .slot-act {
    border-radius: 8px;
    background: var(--teal);
    color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 8px 12px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: opacity 0.2s, transform 0.1s;
    min-height: 44px;
    gap: 6px;
  }
  .slot-act:hover { opacity: 0.88; transform: scale(1.01); }
  .slot-act .heart {
    font-size: 14px;
    opacity: 0.7;
    flex-shrink: 0;
    cursor: pointer;
    transition: opacity 0.2s;
  }
  .slot-act .heart:hover { opacity: 1; }
  .slot-act.fav .heart { opacity: 1; color: #ffcc00; }
  /* widths as flex units */
  .w1 { flex: 1; }
  .w2 { flex: 2; }
  .w3 { flex: 3; }

  /* ===== ARTIST MODAL ===== */
  .modal-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.65);
    z-index: 200;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s;
  }
  .modal-overlay.open { opacity: 1; pointer-events: all; }
  .modal {
    background: var(--surface);
    width: 100%;
    max-width: 600px;
    border-radius: 18px 18px 0 0;
    padding: 24px 20px 80px;
    transform: translateY(100%);
    transition: transform 0.35s cubic-bezier(.22,1,.36,1);
    max-height: 80vh;
    overflow-y: auto;
  }
  .modal-overlay.open .modal { transform: translateY(0); }
  .modal-handle {
    width: 40px;
    height: 4px;
    background: var(--border);
    border-radius: 2px;
    margin: 0 auto 20px;
  }
  .modal-artist-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 12px;
  }
  .modal-artist-name {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 34px;
    letter-spacing: 1px;
    color: var(--teal);
  }
  .modal-heart {
    font-size: 26px;
    cursor: pointer;
    background: none;
    border: none;
    color: var(--text2);
    transition: color 0.2s;
  }
  .modal-heart.fav { color: var(--red); }
  .modal-stage-time {
    font-size: 13px;
    color: var(--text2);
    font-weight: 500;
    margin-bottom: 14px;
  }
  .modal-desc {
    font-size: 14px;
    line-height: 1.7;
    color: var(--text2);
  }
  .modal-close {
    position: absolute;
    top: 16px;
    right: 16px;
    background: var(--surface2);
    border: none;
    border-radius: 50%;
    width: 32px;
    height: 32px;
    font-size: 16px;
    color: var(--text);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* ===== MAP ===== */
  .map-container {
    background: var(--surface);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: var(--card-shadow);
    position: relative;
  }
  .map-svg-wrap {
    width: 100%;
    position: relative;
    background: #2d4a1e;
  }
  .map-svg-wrap svg { width: 100%; height: auto; display: block; }
  .map-legend {
    padding: 14px 16px;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
  }
  .legend-item {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    color: var(--text2);
    font-weight: 500;
  }
  .legend-dot {
    width: 12px;
    height: 12px;
    border-radius: 3px;
    flex-shrink: 0;
  }
  .map-gps-btn {
    position: absolute;
    bottom: 12px;
    right: 12px;
    background: white;
    border: none;
    border-radius: 8px;
    padding: 8px 12px;
    font-size: 12px;
    font-weight: 700;
    color: #333;
    display: flex;
    align-items: center;
    gap: 6px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    cursor: pointer;
    transition: transform 0.1s;
  }
  .map-gps-btn:hover { transform: scale(1.04); }
  .gps-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: var(--teal);
    flex-shrink: 0;
  }

  /* ===== ARTIST CARDS ===== */
  .artists-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
  }
  @media (min-width: 480px) {
    .artists-grid { grid-template-columns: 1fr 1fr 1fr; }
  }
  .artist-card {
    background: var(--surface);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: var(--card-shadow);
    cursor: pointer;
    transition: transform 0.15s;
  }
  .artist-card:hover { transform: translateY(-2px); }
  .artist-card-img {
    width: 100%;
    aspect-ratio: 1;
    background: linear-gradient(135deg, var(--teal), #1a7a8a);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 36px;
    color: white;
    letter-spacing: 1px;
  }
  .artist-card-body { padding: 10px 12px; }
  .artist-card-name {
    font-weight: 700;
    font-size: 13px;
    color: var(--text);
    margin-bottom: 2px;
  }
  .artist-card-stage {
    font-size: 11px;
    color: var(--text2);
  }

  /* ===== PAGE VIEWS ===== */
  .page { display: none; }
  .page.active { display: block; }

  /* ===== SCROLL PADDING ===== */
  .main { padding-bottom: 70px; }

  /* ===== NOTIFICATION ===== */
  .toast {
    position: fixed;
    bottom: 76px;
    left: 50%;
    transform: translateX(-50%) translateY(20px);
    background: #333;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 13px;
    font-weight: 500;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s;
    z-index: 300;
    white-space: nowrap;
  }
  .toast.show { opacity: 1; transform: translateX(-50%) translateY(0); }

  /* ===== UTILITIES ===== */
  .divider { height: 1px; background: var(--border); margin: 0 16px; }
  .text-center { text-align: center; }
  .mt8 { margin-top: 8px; }
  .mt4 { margin-top: 4px; }
</style>
</head>
<body>

<!-- TOPBAR -->
<header class="topbar">
  <div class="topbar-logo">
    <div class="logo-u">U</div>
    <span data-i18n="festival">FESTIVAL</span>
  </div>
  <div class="topbar-controls">
    <button class="flag-btn" id="langToggle" title="Switch language" aria-label="Switch language">🇳🇱</button>
    <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode"></button>
  </div>
</header>

<!-- PAGES -->
<main class="main">

  <!-- HOME PAGE -->
  <div class="page active" id="page-home">
    <!-- Hero -->
    <div class="hero">
      <div class="hero-bg"></div>
      <div class="hero-dots"></div>
      <div class="hero-content">
        <span class="hero-date-badge" data-i18n="hero_date">14 &amp; 15 JUNI 2025 · UTRECHT</span>
        <div class="hero-title"><span>U</span> FESTIVAL</div>
        <p class="hero-subtitle" data-i18n="hero_sub">Muziek · Cultuur · Beleving</p>
        <div class="hero-cta">
          <button class="btn-primary" onclick="switchPage('schedule')" data-i18n="btn_schedule">Programma</button>
          <button class="btn-outline" onclick="switchPage('map')" data-i18n="btn_map">Festivalkaart</button>
        </div>
      </div>
    </div>

    <!-- Info Accordion -->
    <div class="section">
      <div class="section-header">
        <h2 class="section-title" data-i18n="info_title">Algemeen <span>&amp; Contact</span></h2>
      </div>
      <div class="accordion" id="accordion">

        <div class="accordion-item">
          <button class="accordion-btn active" onclick="toggleAccordion(this)">
            <span data-i18n="acc_reach">Bereikbaarheid</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body open">
            <span class="info-label" data-i18n="acc_bike">🚲 Fiets</span>
            <span data-i18n="acc_bike_text">Er is een grote gratis fietsenstalling aanwezig waar je jouw fiets de gehele dag kunt stallen.</span>
            <span class="info-label" data-i18n="acc_car">🚗 Auto</span>
            <span data-i18n="acc_car_text">Je kunt een parkingticket aanschaffen. Parkeren kan op P+R Papendorp, volg hiervoor de borden 'P online ticket'. Geen ticket van tevoren? Dan kun je bij de parkeerwachter op locatie een parkeerticket aanschaffen (PIN ONLY).</span>
            <span class="info-label" data-i18n="acc_pt">🚌 OV</span>
            <span data-i18n="acc_pt_text">U Festival is goed bereikbaar met het openbaar vervoer. Neem bus 8 richting Papendorp, halte Festivallaan.</span>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-btn" onclick="toggleAccordion(this)">
            <span data-i18n="acc_tickets">Tickets</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body">
            <span data-i18n="acc_tickets_text">Tickets zijn verkrijgbaar via onze website. Dagtickets en combitickets beschikbaar. Kinderen t/m 12 jaar gratis. Vergeet je ticket niet te downloaden voordat je naar het festival komt!</span>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-btn" onclick="toggleAccordion(this)">
            <span data-i18n="acc_rules">Huisregels</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body">
            <span data-i18n="acc_rules_text">Meebrengen van eigen drank en etenswaren is niet toegestaan. Glazen voorwerpen zijn verboden. Fouillering kan plaatsvinden bij de ingang. Houdt rekening met elkaar en de omgeving.</span>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-btn" onclick="toggleAccordion(this)">
            <span data-i18n="acc_contact">Contact</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body">
            <span data-i18n="acc_contact_info">Voor vragen kun je terecht op onze website of stuur een e-mail naar </span>
            <a href="mailto:info@ufestival.nl" class="info-link">info@ufestival.nl</a><br><br>
            <span data-i18n="acc_social">Volg ons op </span>
            <a href="#" class="info-link">Instagram</a> &amp; <a href="#" class="info-link">Facebook</a>
          </div>
        </div>

      </div>
    </div>

    <!-- Artists Highlights -->
    <div class="section" style="padding-top: 0;">
      <div class="section-header">
        <h2 class="section-title" data-i18n="lineup_title">Line<span>up</span></h2>
        <a class="see-all" onclick="switchPage('schedule')" style="cursor:pointer" data-i18n="see_all">Alles →</a>
      </div>
      <div class="artists-grid">
        <div class="artist-card" onclick="openModal('spinvis')">
          <div class="artist-card-img" style="background:linear-gradient(135deg,#2bbcd4,#1a7a8a)">SV</div>
          <div class="artist-card-body">
            <div class="artist-card-name">Spinvis</div>
            <div class="artist-card-stage" data-i18n="stage_ponton">Ponton · 11:00</div>
          </div>
        </div>
        <div class="artist-card" onclick="openModal('standup')">
          <div class="artist-card-img" style="background:linear-gradient(135deg,#e8192c,#8b0011)">SU</div>
          <div class="artist-card-body">
            <div class="artist-card-name" data-i18n="standup">Stand-up Comedy</div>
            <div class="artist-card-stage" data-i18n="stage_lake">Lake · 12:00</div>
          </div>
        </div>
        <div class="artist-card" onclick="openModal('dj')">
          <div class="artist-card-img" style="background:linear-gradient(135deg,#f7941d,#c05200)">DJ</div>
          <div class="artist-card-body">
            <div class="artist-card-name">DJ Set 1</div>
            <div class="artist-card-stage" data-i18n="stage_hangar">Hangar · 13:00</div>
          </div>
        </div>
        <div class="artist-card" onclick="openModal('band')">
          <div class="artist-card-img" style="background:linear-gradient(135deg,#7b2d8b,#3d0052)">BA</div>
          <div class="artist-card-body">
            <div class="artist-card-name">The Band</div>
            <div class="artist-card-stage" data-i18n="stage_club">Club · 14:30</div>
          </div>
        </div>
        <div class="artist-card" onclick="openModal('world')">
          <div class="artist-card-img" style="background:linear-gradient(135deg,#2d8b4a,#0a3a1a)">WM</div>
          <div class="artist-card-body">
            <div class="artist-card-name">World Music</div>
            <div class="artist-card-stage" data-i18n="stage_ponton">Ponton · 16:00</div>
          </div>
        </div>
        <div class="artist-card" onclick="openModal('headliner')">
          <div class="artist-card-img" style="background:linear-gradient(135deg,#e8192c,#2bbcd4)">HL</div>
          <div class="artist-card-body">
            <div class="artist-card-name">Headliner</div>
            <div class="artist-card-stage" data-i18n="stage_main">Main · 21:00</div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /home -->

  <!-- SCHEDULE PAGE -->
  <div class="page" id="page-schedule">
    <div class="section">
      <h2 class="section-title" style="margin-bottom:16px" data-i18n="schedule_title">Pro<span>gramma</span></h2>
      <div class="day-tabs">
        <button class="day-tab active" id="tabZat" onclick="switchDay('zat')" data-i18n="saturday">Zaterdag</button>
        <button class="day-tab" id="tabZon" onclick="switchDay('zon')" data-i18n="sunday">Zondag</button>
      </div>
      <div class="schedule-wrap">
        <div class="schedule-scroll">
          <div id="scheduleGrid"></div>
        </div>
      </div>
      <p style="font-size:11px;color:var(--text2);margin-top:10px;text-align:center" data-i18n="schedule_tip">Tik op een artiest voor meer info · ❤️ om te bewaren</p>
    </div>
  </div>

  <!-- MAP PAGE -->
  <div class="page" id="page-map">
    <div class="section">
      <h2 class="section-title" style="margin-bottom:16px" data-i18n="map_title">Festival<span>kaart</span></h2>
      <div class="map-container">
        <div class="map-svg-wrap">
          <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
            <!-- Grass -->
            <rect width="400" height="300" fill="#3a6e28"/>
            <!-- Paths -->
            <rect x="0" y="135" width="400" height="18" fill="#c8a96e" opacity="0.7"/>
            <rect x="180" y="0" width="18" height="300" fill="#c8a96e" opacity="0.7"/>
            <!-- Water/Lake -->
            <ellipse cx="80" cy="230" rx="60" ry="38" fill="#2bbcd4" opacity="0.7"/>
            <text x="80" y="234" text-anchor="middle" fill="white" font-size="11" font-family="sans-serif" font-weight="bold">LAKE</text>
            <!-- Stages -->
            <rect x="20" y="20" width="80" height="50" rx="6" fill="#e8192c"/>
            <text x="60" y="49" text-anchor="middle" fill="white" font-size="11" font-family="sans-serif" font-weight="bold">PONTON</text>
            <rect x="220" y="20" width="80" height="50" rx="6" fill="#1a7a8a"/>
            <text x="260" y="49" text-anchor="middle" fill="white" font-size="11" font-family="sans-serif" font-weight="bold">CLUB</text>
            <rect x="320" y="20" width="65" height="50" rx="6" fill="#7b2d8b"/>
            <text x="352" y="42" text-anchor="middle" fill="white" font-size="10" font-family="sans-serif" font-weight="bold">MAIN</text>
            <text x="352" y="56" text-anchor="middle" fill="white" font-size="10" font-family="sans-serif" font-weight="bold">STAGE</text>
            <rect x="220" y="160" width="80" height="50" rx="6" fill="#f7941d"/>
            <text x="260" y="189" text-anchor="middle" fill="white" font-size="11" font-family="sans-serif" font-weight="bold">HANGAR</text>
            <rect x="320" y="160" width="65" height="50" rx="6" fill="#2d8b4a"/>
            <text x="352" y="182" text-anchor="middle" fill="white" font-size="10" font-family="sans-serif" font-weight="bold">WORLD</text>
            <text x="352" y="196" text-anchor="middle" fill="white" font-size="10" font-family="sans-serif" font-weight="bold">STAGE</text>
            <!-- Entrance -->
            <rect x="155" y="270" width="70" height="28" rx="4" fill="#111" opacity="0.8"/>
            <text x="190" y="289" text-anchor="middle" fill="white" font-size="11" font-family="sans-serif" font-weight="bold">INGANG</text>
            <!-- Food area -->
            <rect x="20" y="160" width="75" height="40" rx="6" fill="#8b6914" opacity="0.8"/>
            <text x="57" y="182" text-anchor="middle" fill="white" font-size="10" font-family="sans-serif" font-weight="bold">FOOD &amp;</text>
            <text x="57" y="194" text-anchor="middle" fill="white" font-size="10" font-family="sans-serif" font-weight="bold">DRINKS</text>
            <!-- GPS dot placeholder -->
            <circle id="gpsMarker" cx="200" cy="144" r="8" fill="#2bbcd4" opacity="0" stroke="white" stroke-width="2"/>
            <circle id="gpsMarkerPulse" cx="200" cy="144" r="14" fill="#2bbcd4" opacity="0" stroke="#2bbcd4" stroke-width="1.5"/>
          </svg>
          <button class="map-gps-btn" onclick="locateMe()">
            <span class="gps-dot"></span>
            <span data-i18n="locate_me">Mijn locatie</span>
          </button>
        </div>
        <div class="map-legend">
          <div class="legend-item"><span class="legend-dot" style="background:#e8192c"></span> Ponton</div>
          <div class="legend-item"><span class="legend-dot" style="background:#1a7a8a"></span> Club</div>
          <div class="legend-item"><span class="legend-dot" style="background:#7b2d8b"></span> Main Stage</div>
          <div class="legend-item"><span class="legend-dot" style="background:#f7941d"></span> Hangar</div>
          <div class="legend-item"><span class="legend-dot" style="background:#2d8b4a"></span> World Stage</div>
          <div class="legend-item"><span class="legend-dot" style="background:#2bbcd4"></span> Lake</div>
          <div class="legend-item"><span class="legend-dot" style="background:#8b6914"></span> Food &amp; Drinks</div>
        </div>
      </div>
    </div>
  </div>

</main>

<!-- BOTTOM NAV -->
<nav class="bottom-nav">
  <button class="nav-item active" onclick="switchPage('home')" id="nav-home">
    <svg viewBox="0 0 24 24" fill="none"><path d="M3 12L12 3L21 12V21H15V15H9V21H3V12Z" fill="currentColor"/></svg>
    <span data-i18n="nav_home">Home</span>
  </button>
  <button class="nav-item" onclick="switchPage('info')" id="nav-info">
    <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/><path d="M12 8v1M12 11v5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
    <span data-i18n="nav_info">Info</span>
  </button>
  <button class="nav-item" onclick="switchPage('schedule')" id="nav-schedule">
    <svg viewBox="0 0 24 24" fill="none"><path d="M9 19V6l12-3v13M9 19a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM21 16a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
    <span data-i18n="nav_prog">Programma</span>
  </button>
  <button class="nav-item" onclick="switchPage('map')" id="nav-map">
    <svg viewBox="0 0 24 24" fill="none"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="9" r="2.5" stroke="currentColor" stroke-width="2"/></svg>
    <span data-i18n="nav_map">Kaart</span>
  </button>
</nav>

<!-- ARTIST MODAL -->
<div class="modal-overlay" id="modalOverlay" onclick="closeModal(event)">
  <div class="modal" id="modal">
    <div class="modal-handle"></div>
    <button class="modal-close" onclick="closeModalBtn()">✕</button>
    <div class="modal-artist-header">
      <div class="modal-artist-name" id="modalName">Spinvis</div>
      <button class="modal-heart" id="modalHeart" onclick="toggleModalFav()">♡</button>
    </div>
    <div class="modal-stage-time" id="modalStageTime"></div>
    <p class="modal-desc" id="modalDesc"></p>
  </div>
</div>

<!-- TOAST -->
<div class="toast" id="toast"></div>

<script>
// ===== DATA =====
const ARTISTS = {
  spinvis: {
    name: 'Spinvis',
    stage_nl: 'Ponton', stage_en: 'Ponton',
    time: '11:00 – 12:30',
    desc_nl: 'Spinvis is de eenmansband van Erik de Jong. Het in 2002 uitgekomen Lo-Fi-debuut laat werk horen dat Spinvis op een zolderkamertje in elkaar knutselde. Hij maakte daarbij gebruik van computers, maar ook van allerlei andere attributen zoals fluitjes en pandafluits.',
    desc_en: 'Spinvis is the one-man band of Erik de Jong. His 2002 lo-fi debut showcases music he crafted in a small attic room, using computers as well as flutes and various other instruments.'
  },
  standup: {
    name_nl: 'Stand-up Comedy', name_en: 'Stand-up Comedy',
    stage_nl: 'Lake', stage_en: 'Lake',
    time: '12:00 – 13:00',
    desc_nl: 'Diverse comedians brengen een avond gevuld met humor en satire. Ideaal voor een luchtige onderbreking van het muziekprogramma.',
    desc_en: 'Various comedians bring an evening filled with humor and satire. Perfect for a light break from the music program.'
  },
  dj: {
    name: 'DJ Set 1',
    stage_nl: 'Hangar', stage_en: 'Hangar',
    time: '13:00 – 14:30',
    desc_nl: 'Een energieke dj-set die het publiek op de dansvloer krijgt met een mix van electronic en house muziek.',
    desc_en: 'An energetic DJ set getting the crowd on the dance floor with a mix of electronic and house music.'
  },
  band: {
    name: 'The Band',
    stage_nl: 'Club', stage_en: 'Club',
    time: '14:30 – 16:00',
    desc_nl: 'The Band brengt een krachtige set met invloeden van rock, soul en funk. Een must-see voor fans van live instrumentale muziek.',
    desc_en: 'The Band brings a powerful set with influences of rock, soul and funk. A must-see for fans of live instrumental music.'
  },
  world: {
    name: 'World Music',
    stage_nl: 'Ponton', stage_en: 'Ponton',
    time: '16:00 – 17:30',
    desc_nl: 'Een bijzonder optreden met muzikanten uit alle windstreken. Verwacht ritmische klanken en authentieke instrumenten.',
    desc_en: 'A special performance with musicians from around the world. Expect rhythmic sounds and authentic instruments.'
  },
  headliner: {
    name: 'Headliner',
    stage_nl: 'Main Stage', stage_en: 'Main Stage',
    time: '21:00 – 23:00',
    desc_nl: 'De afsluiter van de avond. Een wereldberoemde artiest sluit het festival af met een onvergetelijk optreden.',
    desc_en: 'The closing act of the evening. A world-famous artist closes the festival with an unforgettable performance.'
  }
};

const SCHEDULE = {
  zat: [
    { stage: 'Ponton', slots: [
      { type:'empty', w:1 },
      { type:'act', w:2, id:'spinvis', label:'Spinvis' },
      { type:'empty', w:1 },
      { type:'act', w:2, id:'world', label:'World Music' }
    ]},
    { stage: 'Club', slots: [
      { type:'empty', w:2 },
      { type:'act', w:2, id:'band', label:'The Band' },
      { type:'empty', w:2 }
    ]},
    { stage: 'Lake', slots: [
      { type:'empty', w:1 },
      { type:'act', w:2, id:'standup', label:'Stand-up' },
      { type:'empty', w:3 }
    ]},
    { stage: 'Hangar', slots: [
      { type:'empty', w:1 },
      { type:'act', w:2, id:'dj', label:'DJ set 1' },
      { type:'empty', w:1 },
      { type:'act', w:2, id:'headliner', label:'Headliner' }
    ]}
  ],
  zon: [
    { stage: 'Ponton', slots: [
      { type:'act', w:2, id:'world', label:'World Music' },
      { type:'empty', w:1 },
      { type:'act', w:2, id:'spinvis', label:'Spinvis' },
      { type:'empty', w:1 }
    ]},
    { stage: 'Club', slots: [
      { type:'empty', w:1 },
      { type:'act', w:3, id:'band', label:'The Band' },
      { type:'empty', w:2 }
    ]},
    { stage: 'Lake', slots: [
      { type:'empty', w:2 },
      { type:'act', w:2, id:'standup', label:'Stand-up' },
      { type:'empty', w:2 }
    ]},
    { stage: 'Hangar', slots: [
      { type:'act', w:2, id:'dj', label:'DJ set 2' },
      { type:'empty', w:1 },
      { type:'act', w:3, id:'headliner', label:'Headliner' }
    ]}
  ]
};

const TIMES = ['10:00','11:00','12:00','13:00','14:00','15:00','16:00'];

// ===== I18N =====
let currentLang = 'nl';
const i18n = {
  nl: {
    festival: 'FESTIVAL',
    hero_date: '14 & 15 JUNI 2025 · UTRECHT',
    hero_sub: 'Muziek · Cultuur · Beleving',
    btn_schedule: 'Programma',
    btn_map: 'Festivalkaart',
    info_title_raw: 'Algemeen',
    acc_reach: 'Bereikbaarheid',
    acc_bike: '🚲 Fiets',
    acc_bike_text: 'Er is een grote gratis fietsenstalling aanwezig waar je jouw fiets de gehele dag kunt stallen.',
    acc_car: '🚗 Auto',
    acc_car_text: "Je kunt een parkingticket aanschaffen. Parkeren kan op P+R Papendorp, volg hiervoor de borden 'P online ticket'. Geen ticket van tevoren? Dan kun je bij de parkeerwachter op locatie een parkeerticket aanschaffen (PIN ONLY).",
    acc_pt: '🚌 OV',
    acc_pt_text: 'U Festival is goed bereikbaar met het openbaar vervoer. Neem bus 8 richting Papendorp, halte Festivallaan.',
    acc_tickets: 'Tickets',
    acc_tickets_text: 'Tickets zijn verkrijgbaar via onze website. Dagtickets en combitickets beschikbaar. Kinderen t/m 12 jaar gratis.',
    acc_rules: 'Huisregels',
    acc_rules_text: 'Meebrengen van eigen drank en etenswaren is niet toegestaan. Glazen voorwerpen zijn verboden. Fouillering kan plaatsvinden bij de ingang.',
    acc_contact: 'Contact',
    acc_contact_info: 'Voor vragen kun je terecht op onze website of stuur een e-mail naar ',
    acc_social: 'Volg ons op ',
    lineup_title_raw: 'Lineup',
    see_all: 'Alles →',
    stage_ponton: 'Ponton',
    stage_lake: 'Lake',
    stage_hangar: 'Hangar',
    stage_club: 'Club',
    stage_main: 'Main Stage',
    standup: 'Stand-up Comedy',
    schedule_title_raw: 'Programma',
    saturday: 'Zaterdag',
    sunday: 'Zondag',
    schedule_tip: 'Tik op een artiest voor meer info · ❤️ om te bewaren',
    map_title_raw: 'Festivalkaart',
    locate_me: 'Mijn locatie',
    nav_home: 'Home',
    nav_info: 'Info',
    nav_prog: 'Programma',
    nav_map: 'Kaart',
    toast_fav: 'Toegevoegd aan favorieten!',
    toast_unfav: 'Verwijderd uit favorieten',
    toast_gps: 'Locatie gevonden!',
    toast_gps_err: 'Locatie niet beschikbaar',
  },
  en: {
    festival: 'FESTIVAL',
    hero_date: 'JUNE 14 & 15 2025 · UTRECHT',
    hero_sub: 'Music · Culture · Experience',
    btn_schedule: 'Programme',
    btn_map: 'Festival Map',
    info_title_raw: 'General',
    acc_reach: 'Getting There',
    acc_bike: '🚲 Bicycle',
    acc_bike_text: 'There is a large free bicycle parking area where you can park your bike all day.',
    acc_car: '🚗 Car',
    acc_car_text: "You can purchase a parking ticket. Parking is available at P+R Papendorp, follow the 'P online ticket' signs. No pre-purchased ticket? You can buy a parking ticket on-site from the parking attendant (PIN ONLY).",
    acc_pt: '🚌 Public Transport',
    acc_pt_text: 'U Festival is easily accessible by public transport. Take bus 8 towards Papendorp, stop Festivallaan.',
    acc_tickets: 'Tickets',
    acc_tickets_text: 'Tickets available on our website. Day tickets and combo tickets available. Children up to 12 years free.',
    acc_rules: 'House Rules',
    acc_rules_text: 'Bringing your own food and beverages is not permitted. Glass objects are prohibited. Security checks may take place at the entrance.',
    acc_contact: 'Contact',
    acc_contact_info: 'For questions visit our website or send an email to ',
    acc_social: 'Follow us on ',
    lineup_title_raw: 'Lineup',
    see_all: 'All →',
    stage_ponton: 'Ponton',
    stage_lake: 'Lake',
    stage_hangar: 'Hangar',
    stage_club: 'Club',
    stage_main: 'Main Stage',
    standup: 'Stand-up Comedy',
    schedule_title_raw: 'Programme',
    saturday: 'Saturday',
    sunday: 'Sunday',
    schedule_tip: 'Tap an artist for more info · ❤️ to save',
    map_title_raw: 'Festival Map',
    locate_me: 'My Location',
    nav_home: 'Home',
    nav_info: 'Info',
    nav_prog: 'Programme',
    nav_map: 'Map',
    toast_fav: 'Added to favourites!',
    toast_unfav: 'Removed from favourites',
    toast_gps: 'Location found!',
    toast_gps_err: 'Location unavailable',
  }
};

function t(key) { return i18n[currentLang][key] || key; }

function applyTranslations() {
  document.querySelectorAll('[data-i18n]').forEach(el => {
    const k = el.getAttribute('data-i18n');
    if (i18n[currentLang][k] !== undefined) el.textContent = i18n[currentLang][k];
  });
  // special HTML nodes
  document.querySelector('[data-i18n="info_title"]').innerHTML = currentLang === 'nl'
    ? 'Algemeen <span>&amp; Contact</span>' : 'General <span>&amp; Contact</span>';
  document.querySelector('[data-i18n="lineup_title"]').innerHTML = currentLang === 'nl'
    ? 'Line<span>up</span>' : 'Line<span>up</span>';
  document.querySelector('[data-i18n="schedule_title"]') && (
    document.querySelector('[data-i18n="schedule_title"]').innerHTML = currentLang === 'nl'
      ? 'Pro<span>gramma</span>' : 'Pro<span>gramme</span>'
  );
  document.querySelector('[data-i18n="map_title"]') && (
    document.querySelector('[data-i18n="map_title"]').innerHTML = currentLang === 'nl'
      ? 'Festival<span>kaart</span>' : 'Festival<span>map</span>'
  );
  document.getElementById('langToggle').textContent = currentLang === 'nl' ? '🇳🇱' : '🇬🇧';
  renderSchedule();
}

// ===== THEME =====
document.getElementById('themeToggle').addEventListener('click', () => {
  const html = document.documentElement;
  html.setAttribute('data-theme', html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark');
});

// ===== LANGUAGE =====
document.getElementById('langToggle').addEventListener('click', () => {
  currentLang = currentLang === 'nl' ? 'en' : 'nl';
  applyTranslations();
});

// ===== NAVIGATION =====
let currentPage = 'home';
function switchPage(page) {
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));

  const pageMap = { home:'home', info:'home', schedule:'schedule', map:'map' };
  const target = pageMap[page] || page;

  const pageEl = document.getElementById('page-' + target);
  if (pageEl) pageEl.classList.add('active');

  const navEl = document.getElementById('nav-' + (page === 'info' ? 'info' : page === 'schedule' ? 'schedule' : page === 'map' ? 'map' : 'home'));
  if (navEl) navEl.classList.add('active');

  currentPage = page;
  window.scrollTo(0, 0);

  if (target === 'schedule') renderSchedule();
}

// ===== ACCORDION =====
function toggleAccordion(btn) {
  const body = btn.nextElementSibling;
  const isOpen = body.classList.contains('open');
  // close all
  document.querySelectorAll('.accordion-btn').forEach(b => b.classList.remove('active'));
  document.querySelectorAll('.accordion-body').forEach(b => b.classList.remove('open'));
  if (!isOpen) {
    btn.classList.add('active');
    body.classList.add('open');
  }
}

// ===== SCHEDULE =====
let currentDay = 'zat';
let favorites = {};

function switchDay(day) {
  currentDay = day;
  document.getElementById('tabZat').classList.toggle('active', day === 'zat');
  document.getElementById('tabZon').classList.toggle('active', day === 'zon');
  renderSchedule();
}

function renderSchedule() {
  const grid = document.getElementById('scheduleGrid');
  if (!grid) return;
  const rows = SCHEDULE[currentDay];

  let html = `<div class="schedule-header">`;
  TIMES.forEach(t => { html += `<span class="time-label">${t}</span>`; });
  html += `</div>`;

  rows.forEach(row => {
    html += `<div class="schedule-row">
      <div class="stage-name">${row.stage}</div>
      <div class="schedule-slots">`;
    row.slots.forEach(slot => {
      if (slot.type === 'empty') {
        html += `<div class="slot-empty w${slot.w}"></div>`;
      } else {
        const isFav = favorites[slot.id];
        html += `<div class="slot-act w${slot.w}${isFav?' fav':''}" onclick="openModal('${slot.id}')">
          <span>${slot.label}</span>
          <span class="heart" onclick="event.stopPropagation();toggleFav('${slot.id}',this)">${isFav?'❤️':'♡'}</span>
        </div>`;
      }
    });
    html += `</div></div>`;
  });

  grid.innerHTML = html;
}

function toggleFav(id, el) {
  favorites[id] = !favorites[id];
  el.textContent = favorites[id] ? '❤️' : '♡';
  el.closest('.slot-act').classList.toggle('fav', favorites[id]);
  showToast(favorites[id] ? t('toast_fav') : t('toast_unfav'));
  // sync modal heart
  const mh = document.getElementById('modalHeart');
  if (mh && document.getElementById('modalOverlay').classList.contains('open')) {
    mh.textContent = favorites[id] ? '❤' : '♡';
    mh.classList.toggle('fav', favorites[id]);
  }
}

// ===== MODAL =====
let currentArtistId = null;
function openModal(id) {
  currentArtistId = id;
  const a = ARTISTS[id];
  if (!a) return;
  const name = a.name || a['name_'+currentLang] || a.name_nl;
  const stage = a['stage_'+currentLang] || a.stage_nl;
  const desc = a['desc_'+currentLang] || a.desc_nl;
  document.getElementById('modalName').textContent = name;
  document.getElementById('modalStageTime').textContent = `${stage} · ${a.time}`;
  document.getElementById('modalDesc').textContent = desc;
  const mh = document.getElementById('modalHeart');
  mh.textContent = favorites[id] ? '❤' : '♡';
  mh.classList.toggle('fav', !!favorites[id]);
  document.getElementById('modalOverlay').classList.add('open');
}
function closeModal(e) {
  if (e.target === document.getElementById('modalOverlay')) closeModalBtn();
}
function closeModalBtn() {
  document.getElementById('modalOverlay').classList.remove('open');
  currentArtistId = null;
}
function toggleModalFav() {
  if (!currentArtistId) return;
  favorites[currentArtistId] = !favorites[currentArtistId];
  const mh = document.getElementById('modalHeart');
  mh.textContent = favorites[currentArtistId] ? '❤' : '♡';
  mh.classList.toggle('fav', favorites[currentArtistId]);
  showToast(favorites[currentArtistId] ? t('toast_fav') : t('toast_unfav'));
  renderSchedule();
}

// ===== GPS =====
function locateMe() {
  if (!navigator.geolocation) {
    showToast(t('toast_gps_err')); return;
  }
  navigator.geolocation.getCurrentPosition(
    () => {
      // Show marker on festival map (simulated position)
      const dot = document.getElementById('gpsMarker');
      const pulse = document.getElementById('gpsMarkerPulse');
      if (dot) {
        dot.style.opacity = '1';
        pulse.style.opacity = '0.4';
        // Animate pulse
        let s = 14;
        const anim = setInterval(() => {
          s += 0.5;
          if (s > 22) { s = 14; }
          if (pulse) pulse.setAttribute('r', s);
        }, 50);
        setTimeout(() => clearInterval(anim), 4000);
      }
      showToast(t('toast_gps'));
    },
    () => showToast(t('toast_gps_err'))
  );
}

// ===== TOAST =====
function showToast(msg) {
  const toast = document.getElementById('toast');
  toast.textContent = msg;
  toast.classList.add('show');
  setTimeout(() => toast.classList.remove('show'), 2500);
}

// ===== INIT =====
applyTranslations();
renderSchedule();
</script>
</body>
</html>