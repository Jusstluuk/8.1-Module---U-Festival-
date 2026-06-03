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
  // Special HTML nodes with styled spans
  document.querySelector('[data-i18n="info_title"]').innerHTML = currentLang === 'nl'
    ? 'Algemeen <span>&amp; Contact</span>' : 'General <span>&amp; Contact</span>';
  document.querySelector('[data-i18n="lineup_title"]').innerHTML = 'Line<span>up</span>';
  const schedTitle = document.querySelector('[data-i18n="schedule_title"]');
  if (schedTitle) schedTitle.innerHTML = currentLang === 'nl'
    ? 'Pro<span>gramma</span>' : 'Pro<span>gramme</span>';
  const mapTitle = document.querySelector('[data-i18n="map_title"]');
  if (mapTitle) mapTitle.innerHTML = currentLang === 'nl'
    ? 'Festival<span>kaart</span>' : 'Festival<span>map</span>';
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

  const pageMap = { home: 'home', info: 'home', schedule: 'schedule', map: 'map' };
  const target = pageMap[page] || page;

  const pageEl = document.getElementById('page-' + target);
  if (pageEl) pageEl.classList.add('active');

  const navId = page === 'info' ? 'nav-info'
    : page === 'schedule' ? 'nav-schedule'
    : page === 'map' ? 'nav-map'
    : 'nav-home';
  const navEl = document.getElementById(navId);
  if (navEl) navEl.classList.add('active');

  currentPage = page;
  window.scrollTo(0, 0);

  if (target === 'schedule') renderSchedule();
}

// ===== ACCORDION =====
function toggleAccordion(btn) {
  const body = btn.nextElementSibling;
  const isOpen = body.classList.contains('open');
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

const STAGE_DOTS = {
  Ponton: '#2bbcd4',
  Club:   '#9b4dcc',
  Lake:   '#6666ee',
  Hangar: '#f7941d',
  World:  '#2d8b4a'
};

function switchDay(day) {
  currentDay = day;
  document.getElementById('tabZat').classList.toggle('active', day === 'zat');
  document.getElementById('tabZon').classList.toggle('active', day === 'zon');
  renderSchedule();
}

function renderSchedule() {
  const grid = document.getElementById('scheduleGrid');
  if (!grid) return;

  // Time header row (skip last time label — it's the end marker)
  let html = `<div class="time-header"><div class="th-blank"></div>`;
  TIMES.slice(0, -1).forEach(time => {
    html += `<div class="th-time">${time}</div>`;
  });
  html += `</div>`;

  SCHEDULE[currentDay].forEach((row, ri) => {
    const sc = row.stage.toLowerCase();
    const dot = STAGE_DOTS[row.stage] || '#888';

    // Full-width stage separator before each row
    html += `<div class="stage-separator">
      <div class="stage-sep-line"></div>
      <div class="stage-sep-label">
        <div class="stage-dot-sm" style="background:${dot}"></div>
        <span>${row.stage}</span>
      </div>
      <div class="stage-sep-line"></div>
    </div>`;

    // Stage label + slots row
    html += `
      <div class="stage-label">
        <div class="stage-label-inner">
          <div class="stage-dot" style="background:${dot}"></div>
          <span class="stage-name-label">${row.stage}</span>
        </div>
      </div>
      <div class="schedule-slots">`;

    row.slots.forEach(slot => {
      if (slot.type === 'empty') {
        html += `<div class="slot-empty" style="grid-column:span ${slot.w}"></div>`;
      } else {
        const isFav = favorites[slot.id];
        html += `
          <div class="slot-act col-${sc}${isFav ? ' fav' : ''}"
               style="grid-column:span ${slot.w}"
               onclick="openModal('${slot.id}')">
            <span class="act-name">${slot.label}</span>
            <span class="heart${isFav ? ' fav' : ''}"
                  onclick="event.stopPropagation();toggleFav('${slot.id}',this)">
              ${isFav ? '❤️' : '♡'}
            </span>
          </div>`;
      }
    });

    html += `</div>`;
  });

  grid.innerHTML = html;
}

function toggleFav(id, el) {
  favorites[id] = !favorites[id];
  el.textContent = favorites[id] ? '❤️' : '♡';
  el.classList.toggle('fav', favorites[id]);
  el.closest('.slot-act').classList.toggle('fav', favorites[id]);
  showToast(favorites[id] ? t('toast_fav') : t('toast_unfav'));

  // Sync heart in open modal
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
  const name      = a.name || a['name_' + currentLang] || a.name_nl;
  const stage     = a['stage_' + currentLang] || a.stage_nl;
  const desc      = a['desc_' + currentLang]  || a.desc_nl;
  document.getElementById('modalName').textContent      = name;
  document.getElementById('modalStageTime').textContent = `${stage} · ${a.time}`;
  document.getElementById('modalDesc').textContent      = desc;
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
    showToast(t('toast_gps_err'));
    return;
  }
  navigator.geolocation.getCurrentPosition(
    () => {
      const dot   = document.getElementById('gpsMarker');
      const pulse = document.getElementById('gpsMarkerPulse');
      if (dot) {
        dot.style.opacity   = '1';
        pulse.style.opacity = '0.4';
        let s = 14;
        const anim = setInterval(() => {
          s += 0.5;
          if (s > 22) s = 14;
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
