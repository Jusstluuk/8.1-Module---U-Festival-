# TODO

## Schedule act details side list
- [ ] Add a right-side (or bottom on mobile) panel that shows **extra information** for the selected act.
- [ ] Replace the current modal-only description flow with a shared data model `ACT_INFO` keyed by artist id.
- [ ] Wire `openModal(id)` to also populate the side panel.
- [ ] Add CSS for the side panel layout on mobile.

## i18n/schedule stability
- [x] Ensure `assets/js/data.js` is data-only (`TIMES`, `SCHEDULE`, `ARTISTS` only).
- [x] Ensure i18n lives only in `assets/js/app.js`.

