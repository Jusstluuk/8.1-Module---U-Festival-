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
    <img src="assets/img/logoWhite.webp" alt="U Festival" class="logo-img">
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
        <div class="hero-title">
          <img src="assets/img/logoWhite.webp" alt="U" class="hero-logo"> FESTIVAL
        </div>
        <p class="hero-subtitle" data-i18n="hero_sub">Muziek · Cultuur · Beleving</p>
        <div class="hero-cta">
          <button class="btn-primary" onclick="switchPage('schedule')" data-i18n="btn_schedule">Programma</button>
          <button class="btn-outline" onclick="window.location.href='kaart.php'" data-i18n="btn_map">Festivalkaart</button>
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
            <span data-i18n="acc_general_contact">Algemeen &amp; Contact</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body open">
            <span class="info-label" data-i18n="acc_general_heart">❤️ U Festival</span>
            <span data-i18n="acc_general_text">Het ❤️U Festival is voor (nieuwe) studenten in de regio Utrecht en is een aanvulling op UIT.</span>
            <span class="info-label" data-i18n="acc_contact_label">Contact</span>
            <span data-i18n="acc_contact_text">Voor vragen kun je terecht op onze website of stuur een e-mail naar </span>
            <a href="mailto:info@ufestival.nl" class="info-link">info@ufestival.nl</a>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-btn" onclick="toggleAccordion(this)">
            <span data-i18n="acc_address">Adres</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body">
            <span class="info-label" data-i18n="acc_address_location">Locatie</span>
            <span data-i18n="acc_address_location_text">Strijkviertel, Utrecht</span>
            <span class="info-label" data-i18n="acc_address_nav">Navigatieadres</span>
            <span data-i18n="acc_address_nav_text">Strijkviertelweg, Utrecht</span>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-btn" onclick="toggleAccordion(this)">
            <span data-i18n="acc_datetime">Datum &amp; Openingstijden</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body">
            <span data-i18n="acc_datetime_text">Zaterdag 5 september 2026 &ndash; 12:00 tot 23:00 uur</span>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-btn" onclick="toggleAccordion(this)">
            <span data-i18n="acc_accessibility">Bereikbaarheid</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body">
            <span class="info-label" data-i18n="acc_bike">🚲 Fiets</span>
            <span data-i18n="acc_bike_text">Er is een grote gratis fietsenstalling aanwezig waar je jouw fiets de gehele dag kunt stallen.</span>
            <span class="info-label" data-i18n="acc_car">🚗 Auto</span>
            <span data-i18n="acc_car_text">Je kunt een parkingticket aanschaffen. Parkeren kan op P+R Papendorp, volg hiervoor de borden 'P online ticket'. Heb je geen ticket van te voren gekocht? Dan kun je bij de parkeerwachter op locatie een parkeerticket aanschaffen (PIN ONLY). Let wel op: VOL=VOL</span>
            <span class="info-label" data-i18n="acc_pt">🚌 OV</span>
            <span data-i18n="acc_pt_text">Kom je met het openbaar vervoer? Plan dan je trip via <span class="info-link">9292.nl</span>.</span>
            <span class="info-label" data-i18n="acc_shuttle">🚍 Shuttlebus</span>
            <span data-i18n="acc_shuttle_text">Vanaf Utrecht Centraal kun je onze gratis shuttlebus richting het festivalterrein pakken. Volg de witte bordjes met zwarte pijlen én '❤️U Festival'.</span>
            <span class="info-label" data-i18n="acc_shuttle_times">🕒 Tijden</span>
            <span data-i18n="acc_shuttle_times_text">De bus rijdt tussen 12:00 uur &amp; 19:00 uur richting het festival en vanaf 21:00 uur terug richting het station.</span>
            <span class="info-label" data-i18n="acc_taxi_kiss">🚕 Taxi + Kiss &amp; Ride</span>
            <span data-i18n="acc_taxi_kiss_text">Navigeer naar Strijkviertel, De Meern (Utrecht). Volg de borden "Kiss &amp; Ride ❤️U Festival".</span>
            <span class="info-label" data-i18n="acc_lockers">🧷 Lockers</span>
            <span data-i18n="acc_lockers_text">Op het festivalterrein zijn kluisjes aanwezig. Hier passen 3 à 4 jassen in. Je kunt je kluisje de hele dag openen en sluiten.</span>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-btn" onclick="toggleAccordion(this)">
            <span data-i18n="acc_faq">FAQ</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body">
            <span class="info-label" data-i18n="faq_medication">Ik gebruik medicatie. Wat nu?</span>
            <span data-i18n="faq_medication_text">Het is toegestaan om medicijnen mee te nemen in een dosis die je maximaal nodig hebt op 1 dag. Een doktersverklaring/medicatiepaspoort is noodzakelijk.</span>
            <span class="info-label" data-i18n="faq_leave">Mag ik het festivalterrein tussentijds verlaten?</span>
            <span data-i18n="faq_leave_text">Nee, helaas is dat niet mogelijk om de veiligheid van alle bezoekers te waarborgen.</span>
            <span class="info-label" data-i18n="faq_lockers">Zijn er lockers?</span>
            <span data-i18n="faq_lockers_text">Yes! Op het terrein kun je medium &amp; grote lockers huren.</span>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-btn" onclick="toggleAccordion(this)">
            <span data-i18n="acc_golden_glu">Golden-GLU</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body">
            <span data-i18n="acc_golden_glu_text">Studenten van het GLU hebben tijdens het festival speciale privileges en zijn herkenbaar aan een gouden armbandje.</span>
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
      <div class="artists-grid" id="artistsGrid"></div>
    </div>

  </div><!-- /page-home -->

  <!-- SCHEDULE PAGE -->
  <div class="page" id="page-schedule">
    <div class="section">
      <h2 class="section-title" style="margin-bottom:16px" data-i18n="schedule_title">Pro<span>gramma</span></h2>
      <div class="schedule-layout">
        <div class="schedule-main">
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
        <aside class="schedule-side" aria-live="polite">
          <div class="schedule-side-inner">
            <div class="schedule-side-title" id="actInfoTitle">&nbsp;</div>
            <div class="schedule-side-body" id="actInfoBody">Selecteer een act voor meer info.</div>
          </div>
        </aside>
      </div>
    </div>
  </div><!-- /page-schedule -->
<!-- INFO PAGE -->
  <div class="page" id="page-info">
    <div class="section">
      <div class="section-header">
        <h2 class="section-title">Algemeen <span>&amp; Contact</span></h2>
      </div>
      <div class="accordion">

        <div class="accordion-item">
          <button class="accordion-btn active" onclick="toggleAccordion(this)">
            <span>Algemeen &amp; Contact</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body open">
            <span class="info-label">❤️ U Festival</span>
            <span>Het ❤️U Festival is voor (nieuwe) studenten in de regio Utrecht en is een aanvulling op UIT.</span>
            <span class="info-label">Contact</span>
            <span>Voor vragen kun je terecht op onze website of stuur een e-mail naar </span>
            <a href="mailto:info@ufestival.nl" class="info-link">info@ufestival.nl</a>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-btn" onclick="toggleAccordion(this)">
            <span>Adres</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body">
            <span class="info-label">Locatie</span>
            <span>Strijkviertel, Utrecht</span>
            <span class="info-label">Navigatieadres</span>
            <span>Strijkviertelweg, Utrecht</span>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-btn" onclick="toggleAccordion(this)">
            <span>Datum &amp; Openingstijden</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body">
            <span>Zaterdag 5 september 2026 &ndash; 12:00 tot 23:00 uur</span>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-btn" onclick="toggleAccordion(this)">
            <span>Bereikbaarheid</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body">
            <span class="info-label">🚲 Fiets</span>
            <span>Er is een grote gratis fietsenstalling aanwezig waar je jouw fiets de gehele dag kunt stallen.</span>
            <span class="info-label">🚗 Auto</span>
            <span>Je kunt een parkingticket aanschaffen. Parkeren kan op P+R Papendorp, volg hiervoor de borden 'P online ticket'. Heb je geen ticket van te voren gekocht? Dan kun je bij de parkeerwachter op locatie een parkeerticket aanschaffen (PIN ONLY). Let wel op: VOL=VOL</span>
            <span class="info-label">🚌 OV</span>
            <span>Kom je met het openbaar vervoer? Plan dan je trip via <span class="info-link">9292.nl</span>.</span>
            <span class="info-label">🚍 Shuttlebus</span>
            <span>Vanaf Utrecht Centraal kun je onze gratis shuttlebus richting het festivalterrein pakken. Volg de witte bordjes met zwarte pijlen én '❤️U Festival'.</span>
            <span class="info-label">🕒 Tijden shuttlebus</span>
            <span>De bus rijdt tussen 12:00 uur &amp; 19:00 uur richting het festival en vanaf 21:00 uur terug richting het station.</span>
            <span class="info-label">🚕 Taxi + Kiss &amp; Ride</span>
            <span>Navigeer naar Strijkviertel, De Meern (Utrecht). Volg de borden "Kiss &amp; Ride ❤️U Festival".</span>
            <span class="info-label">🧷 Lockers</span>
            <span>Op het festivalterrein zijn kluisjes aanwezig. Hier passen 3 à 4 jassen in. Je kunt je kluisje de hele dag openen en sluiten.</span>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-btn" onclick="toggleAccordion(this)">
            <span>FAQ</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body">
            <span class="info-label">Ik gebruik medicatie. Wat nu?</span>
            <span>Het is toegestaan om medicijnen mee te nemen in een dosis die je maximaal nodig hebt op 1 dag. Een doktersverklaring/medicatiepaspoort is noodzakelijk. De beveiliging zal jouw documentatie beoordelen en de medicijnen controleren.</span>
            <span class="info-label">Mag ik het festivalterrein tussentijds verlaten?</span>
            <span>Nee, helaas is dat niet mogelijk om de veiligheid van alle bezoekers te waarborgen.</span>
            <span class="info-label">Zijn er lockers?</span>
            <span>Yes! Op het terrein kun je medium &amp; grote lockers huren.</span>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-btn" onclick="toggleAccordion(this)">
            <span>Golden-GLU</span>
            <span class="chevron">▼</span>
          </button>
          <div class="accordion-body">
            <span>Studenten van het GLU hebben tijdens het festival speciale privileges en zijn herkenbaar aan een gouden armbandje. Met dit gouden armbandje kunnen ze gebruik maken van de gouden toiletten en met goud gemarkeerde bestelpunten aan de bars zonder in een rij te hoeven staan.</span>
          </div>
        </div>

      </div>
    </div>
  </div><!-- /page-info -->
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
  <button class="nav-item" onclick="window.location.href='kaart.php'" id="nav-map">
    <svg viewBox="0 0 24 24" fill="none"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="9" r="2.5" stroke="currentColor" stroke-width="2"/></svg>
    <span data-i18n="nav_map">Kaart</span>
  </button>
</nav>

<!-- ARTIST MODAL -->
<div class="modal-overlay" id="modalOverlay" onclick="closeModal(event)">
  <div class="modal" id="modal">
    <div class="modal-handle"></div>
    <button class="modal-close" onclick="closeModalBtn()">✕</button>
    <div class="modal-artist-img" id="modalImg"></div>
    <div class="modal-artist-header">
      <div class="modal-artist-name" id="modalName"></div>
      <button class="modal-heart" id="modalHeart" onclick="toggleModalFav()">♡</button>
    </div>
    <div class="modal-stage-time" id="modalStageTime"></div>
    <p class="modal-desc" id="modalDesc"></p>
    <a class="modal-yt-btn" id="modalYT" href="#" target="_blank" rel="noopener">
      <svg viewBox="0 0 24 24" width="18" height="18" fill="white"><path d="M23 7s-.3-2-1.2-2.8c-1.1-1.2-2.4-1.2-3-1.3C16.6 2.8 12 2.8 12 2.8s-4.6 0-6.8.2c-.6.1-1.9.1-3 1.3C1.3 5 1 7 1 7S.8 9.2.8 11.3v2c0 2.1.2 4.3.2 4.3s.3 2 1.2 2.8c1.1 1.2 2.6 1.1 3.3 1.2C7.4 21.8 12 21.8 12 21.8s4.6 0 6.8-.3c.6-.1 1.9-.1 3-1.3.9-.8 1.2-2.8 1.2-2.8s.2-2.1.2-4.3v-2C23.2 9.2 23 7 23 7zM9.7 15.5V8.3l8.1 3.6-8.1 3.6z"/></svg>
      Bekijk op YouTube
    </a>
  </div>
</div>

<!-- TOAST -->
<div class="toast" id="toast"></div>

<script src="assets/js/data.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>