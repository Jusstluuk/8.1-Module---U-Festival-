<!DOCTYPE html>
<html lang="nl" data-theme="light">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>U Festival</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/styles.css">
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

<script src="assets/js/data.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>