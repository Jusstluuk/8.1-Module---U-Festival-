// Data-only file for schedule + artists.
// i18n/app logic lives in assets/js/app.js

/* ===== SCHEDULE GRID SETTINGS ===== */
// IMPORTANT: app.js expects THESE globals to exist.
// Times are used to build the schedule header.
const TIMES = [
  '11:00',
  '11:45',
  '12:30',
  '13:15',
  '14:00',
  '14:45',
  '15:30',
  '16:15',
  '17:00',
  '17:45',
  '18:30',
  '19:15',
  '20:00',
  '20:45',
  '21:30',
  '22:15',
  '23:00'
];

/* ===== SCHEDULE ===== */
// app.js expects SCHEDULE[currentDay] where currentDay is 'zat' or 'zon'.
// Each row: { stage: 'Ponton' | ... , slots: [ {type:'act', id, label, w} | {type:'empty', w} ] }
const SCHEDULE = {
  zat: [

    {
      stage: 'Ponton',
      slots: [
        { type: 'act', id: 'spinvis', label: 'Spinvis', w: 2 },
        { type: 'empty', w: 1 },
        { type: 'act', id: 'standup', label: 'DJ Set', w: 2 },
        { type: 'empty', w: 4 },
        { type: 'empty', w: 1 }
      ]
    },
    {
      stage: 'Lake',
      slots: [
        { type: 'empty', w: 2 },
        { type: 'act', id: 'standup', label: 'Stand-up Comedy', w: 3 },
        { type: 'empty', w: 2 },
        { type: 'act', id: 'world', label: 'World Music', w: 2 },
        { type: 'empty', w: 2 }
      ]
    },
    {
      stage: 'Hangar',
      slots: [
        { type: 'empty', w: 3 },
        { type: 'act', id: 'dj', label: 'DJ Set 1', w: 2 },
        { type: 'empty', w: 2 },
        { type: 'act', id: 'dj2', label: 'DJ Set 2', w: 2 },
        { type: 'empty', w: 1 }
      ]
    },
    {
      stage: 'Club',
      slots: [
        { type: 'empty', w: 2 },
        { type: 'act', id: 'band', label: 'The Band', w: 3 },
        { type: 'empty', w: 4 },
        { type: 'empty', w: 1 }
      ]
    },
    {
      stage: 'Main',
      slots: [
        { type: 'empty', w: 10 },
        { type: 'act', id: 'headliner', label: 'Headliner', w: 2 },
        { type: 'empty', w: 1 }
      ]
    },
    {
      stage: 'World',
      slots: [
        { type: 'empty', w: 7 },
        { type: 'act', id: 'world2', label: 'World Music', w: 2 },
        { type: 'empty', w: 3 }
      ]
    }
  ],
  zon: [
    {
      stage: 'Ponton',
      slots: [
        { type: 'empty', w: 2 },
        { type: 'act', id: 'spinvis', label: 'Spinvis', w: 2 },
        { type: 'empty', w: 3 },
        { type: 'act', id: 'dj', label: 'DJ Set 1', w: 2 },
        { type: 'empty', w: 1 }
      ]
    },
    {
      stage: 'Lake',
      slots: [
        { type: 'empty', w: 3 },
        { type: 'act', id: 'standup', label: 'Stand-up Comedy', w: 2 },
        { type: 'empty', w: 2 },
        { type: 'act', id: 'world', label: 'World Music', w: 3 },
        { type: 'empty', w: 1 }
      ]
    },
    {
      stage: 'Hangar',
      slots: [
        { type: 'empty', w: 4 },
        { type: 'act', id: 'dj2', label: 'DJ Set 2', w: 2 },
        { type: 'empty', w: 3 },
        { type: 'empty', w: 1 }
      ]
    },
    {
      stage: 'Club',
      slots: [
        { type: 'empty', w: 2 },
        { type: 'act', id: 'band', label: 'The Band', w: 3 },
        { type: 'empty', w: 4 },
        { type: 'empty', w: 1 }
      ]
    },
    {
      stage: 'Main',
      slots: [
        { type: 'empty', w: 9 },
        { type: 'act', id: 'headliner', label: 'Headliner', w: 2 },
        { type: 'empty', w: 1 }
      ]
    },
    {
      stage: 'World',
      slots: [
        { type: 'empty', w: 7 },
        { type: 'act', id: 'world2', label: 'World Music', w: 2 },
        { type: 'empty', w: 3 }
      ]
    }
  ]
};

/* ===== ARTISTS (for modal) ===== */
// app.js expects ARTISTS[id] and reads:
// - name (optional)
// - name_nl / name_en
// - stage_nl / stage_en
// - desc_nl / desc_en
// - time
const ACT_INFO = {
  // Put your full act info here keyed by artist id.
  // (Only a subset is provided right now; extend as needed.)
  kensington: {
    en: "Kensington\n\nRotterdam-born indie rock quintet known for soaring choruses and driving guitar riffs. Hits like ‘Streets’ and ‘Riddles’ showcase their knack for arena-ready hooks and emotionally charged lyricism."
  },
  within_temptation: {
    en: "Within Temptation\n\nSymphonic metal pioneers fronted by Sharon den Adel. Their cinematic soundscapes and operatic vocals (think ‘Ice Queen,’ ‘Mother Earth’) translate into dramatic, visually stunning festival performances."
  },
  de_staat: {
    en: "De Staat\n\nExperimental rock outfit from Nijmegen, blending funky grooves with angular guitar work and theatrical stagecraft. Tracks like ‘Witch Doctor’ and ‘Down Town’ highlight their genre-bending approach and infectious energy."
  },
  chef_special: {
    en: "Chef’ Special\n\nA four-piece from Haarlem mixing funk, pop, rock and hip-hop. Their upbeat, genre-fluid sound on songs like ‘Amigo’ and ‘In Your Arms’ makes for joyous, dance-floor-friendly live shows."
  },
  navarone: {
    en: "Navarone\n\nUtrecht’s hard-hitting rock four-piece, delivering riff-driven anthems and dynamic vocals. With a live reputation for raw intensity, they’re tailor-made for late-night main stages."
  },
  dotan: {
    en: "Dotan\n\nFolk-pop singer-songwriter whose intimate voice and acoustic arrangements (notably on ‘Home’) have earned him platinum sales and sell-out shows. His heartfelt storytelling connects deeply on festival acoustic stages."
  },
  eefje_de_visser: {
    en: "Eefje de Visser\n\nIndie-pop artist crafting atmospheric, electronic-tinged songs. Her hypnotic vocals and lush production (as heard on ‘Ongeveer’) create a dreamlike vibe perfect for twilight festival slots."
  },
  froukje: {
    en: "Froukje\n\nBreakthrough pop singer Froukje Veenstra combines candid lyrics with catchy, synth-driven hooks. Since her 2021 debut, she’s become a voice of her generation—ideal for mid-day festival stages."
  },
  spinvis: {
    en: "Spinvis\n\nErik de Jong performs under the moniker Spinvis, crafting poetic, collage-like songs that blend spoken-word snippets, lo-fi electronics and wistful pop. Since his debut album in 2002—recorded in his attic—he’s become a fixture of Dutch indie, renowned for narratives that feel both intimate and surreal. His live shows turn everyday observations into shared, dreamlike experiences."
  }
};

const ARTISTS = {
  armin_van_buuren: {
    name: 'Armin van Buuren',
    stage: 'Main Stage · 21:30',
    initials: 'AB',
    gradient: 'linear-gradient(135deg,#e8192c,#8b0011)',
    desc: "Five-time \"World's No. 1 DJ\" and trance icon, Armin delivers euphoric, high-energy sets that have headlined festivals from Tomorrowland to Ultra. His uplifting melodies and impeccable mixing keep crowds dancing for hours.",
    youtube: 'https://www.youtube.com/watch?v=TxvpctgU_s8'
  },
  martin_garrix: {
    name: 'Martin Garrix',
    stage: 'Main Stage · 20:30',
    initials: 'MG',
    gradient: 'linear-gradient(135deg,#2bbcd4,#1a7a8a)',
    desc: 'Broke through as a teenager with "Animals," Martin Garrix has become one of the biggest names in EDM. His anthemic big-room tracks and stadium-sized drops make him a festival favorite across Europe.',
    youtube: 'https://www.youtube.com/watch?v=Zv1QV6lrc_Y'
  },
  kensington: {
    name: 'Kensington',
    stage: 'Club · 14:30',
    initials: 'KN',
    gradient: 'linear-gradient(135deg,#7b2d8b,#3d0052)',
    desc: 'Rotterdam-born indie rock quintet known for soaring choruses and driving guitar riffs. Hits like "Streets" and "Riddles" showcase their knack for arena-ready hooks and emotionally charged lyricism.',
    youtube: 'https://www.youtube.com/watch?v=IH77eOyV95o'
  },
  within_temptation: {
    name: 'Within Temptation',
    stage: 'Lake · 12:00',
    initials: 'WT',
    gradient: 'linear-gradient(135deg,#1a7a8a,#2d8b4a)',
    desc: 'Symphonic metal pioneers fronted by Sharon den Adel. Their cinematic soundscapes and operatic vocals (think "Ice Queen," "Mother Earth") translate into dramatic, visually stunning festival performances.',
    youtube: 'https://www.youtube.com/watch?v=iQVei5C2N4E'
  },
  de_staat: {
    name: 'De Staat',
    stage: 'Hangar · 13:15',
    initials: 'DS',
    gradient: 'linear-gradient(135deg,#f7941d,#c05200)',
    desc: 'Experimental rock outfit from Nijmegen, blending funky grooves with angular guitar work and theatrical stagecraft. Tracks like "Witch Doctor" and "Down Town" highlight their genre-bending approach and infectious energy.',
    youtube: 'https://www.youtube.com/watch?v=0ttGgIQpAUc'
  },
  chef_special: {
    name: "Chef'Special",
    stage: 'Ponton · 16:00',
    initials: 'CS',
    gradient: 'linear-gradient(135deg,#e8192c,#8b0011)',
    desc: 'A four-piece from Haarlem mixing funk, pop, rock and hip-hop. Their upbeat, genre-fluid sound on songs like "Amigo" and "In Your Arms" makes for joyous, dance-floor-friendly live shows.',
    youtube: 'https://www.youtube.com/watch?v=l3jRIr44lss'
  },
  navarone: {
    name: 'Navarone',
    stage: 'World · 17:00',
    initials: 'NA',
    gradient: 'linear-gradient(135deg,#2d8b4a,#0a3a1a)',
    desc: "Utrecht's hard-hitting rock four-piece, delivering riff-driven anthems and dynamic vocals. With a live reputation for raw intensity, they're tailor-made for late-night main stages.",
    youtube: 'https://www.youtube.com/watch?v=EvLpaCSnc4k'
  },
  dotan: {
    name: 'Dotan',
    stage: 'Lake · 15:30',
    initials: 'DO',
    gradient: 'linear-gradient(135deg,#2bbcd4,#6666ee)',
    desc: 'Folk-pop singer-songwriter whose intimate voice and acoustic arrangements (notably on "Home") have earned him platinum sales and sell-out shows. His heartfelt storytelling connects deeply on festival acoustic stages.',
    youtube: 'https://www.youtube.com/watch?v=FZEuqzW16Nw'
  },
  eefje_de_visser: {
    name: 'Eefje de Visser',
    stage: 'Club · 14:00',
    initials: 'EV',
    gradient: 'linear-gradient(135deg,#6666ee,#9b4dcc)',
    desc: 'Indie-pop artist crafting atmospheric, electronic-tinged songs. Her hypnotic vocals and lush production (as heard on "Ongeveer") create a dreamlike vibe perfect for twilight festival slots.',
    youtube: 'https://www.youtube.com/watch?v=6IlLJNmLDMg'
  },
  froukje: {
    name: 'Froukje',
    stage: 'Hangar · 20:00',
    initials: 'FR',
    gradient: 'linear-gradient(135deg,#9b4dcc,#2d8b4a)',
    desc: "Breakthrough pop singer Froukje Veenstra combines candid lyrics with catchy, synth-driven hooks. Since her 2021 debut, she's become a voice of her generation—ideal for mid-day festival stages.",
    youtube: 'https://www.youtube.com/watch?v=g4PlReX9e-E'
  },
  spinvis: {
    name: 'Spinvis',
    stage: 'Ponton · 11:00',
    initials: 'SV',
    gradient: 'linear-gradient(135deg,#2bbcd4,#1a7a8a)',
    desc: "Erik de Jong performs under the moniker Spinvis, crafting poetic, collage-like songs that blend spoken-word snippets, lo-fi electronics and wistful pop. Since his debut album in 2002—recorded in his attic—he's become a fixture of Dutch indie, renowned for narratives that feel both intimate and surreal. His live shows turn everyday observations into shared, dreamlike experiences.",
    youtube: 'https://www.youtube.com/watch?v=F3ZTrGWSLf4'
  }
};

