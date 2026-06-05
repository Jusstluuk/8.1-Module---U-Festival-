# U Festival (Single Page Web)

Dit project is een kleine **single-page website** voor **U Festival**. De site bevat:

- **Home** pagina met hero, info-accordion en lineup kaarten
- **Programma** pagina met een interactieve tijdlijn/grid en modal
- **Kaart** pagina met een simpele SVG-kaart + GPS-locate knop
- **Thema toggle** (light/dark)
- **Taal toggle** (NL/EN) via `data-i18n` attributen

## Bestandsstructuur

- `index.php`
  - De volledige HTML voor alle pagina’s (home/schedule/map)
  - Roept global JS-functies aan zoals `switchPage()`, `switchDay()`, `openModal()`.

- `assets/js/app.js`
  - UI-logica:
    - i18n vertalingen toepassen (`applyTranslations`, `t`)
    - theme + language toggles
    - accordion toggle
    - schedule rendering + favorieten + modal handling
    - GPS locate functie

- `assets/js/data.js`
  - Data die gebruikt wordt door de UI (schedule + artiesten).
  - `app.js` verwacht o.a.:
    - `TIMES`
    - `SCHEDULE`
    - `ARTISTS`
    - optioneel `ACT_INFO` (wordt gebruikt voor extra/uitgebreide tekst in de modal wanneer `ARTISTS[].desc_*` leeg is)

- `assets/css/styles.css`
  - Styling voor de volledige interface, inclusief responsive layout.

## Interacties (hoe het werkt)

### Taal (NL/EN)
- HTML elementen gebruiken `data-i18n="some_key"`.
- `app.js` bevat een i18n dictionary.
- Klik op `#langToggle` wisselt `currentLang` en voert `applyTranslations()` opnieuw uit.

### Thema (light/dark)
- Klik op `#themeToggle` zet `data-theme` op `document.documentElement`.
- CSS gebruikt `[data-theme="dark"]` overrides.

### Home: lineup kaarten
- Elke kaart heeft `onclick="openModal('<id>')"`.
- `openModal(id)` vult de modal met:
  - artiestnamen/stage/tijd uit `ARTISTS[id]`
  - en indien beschikbaar: extra bio/tekst uit `ACT_INFO[id]`

### Programma: schedule grid
- `renderSchedule()` bouwt de grid in `#scheduleGrid`.
- Klik op een gevulde slot opent de modal via `openModal(slot.id)`.
- Favorieten worden in-memory bijgehouden (`favorites` object).

### GPS
- Klik op “Mijn locatie” roept `locateMe()` aan.
- Gebruikt `navigator.geolocation` en animeert `#gpsMarkerPulse`.

## Lokaal draaien

1. Zet de map in je XAMPP `htdocs` directory.
2. Start Apache via XAMPP.
3. Open `index.php` in je browser.

## Opmerking

- Dit is een front-end demo (geen backend/API calls).
- Als je schedule/artist inhoud wijzigt: pas `assets/js/data.js` aan.

