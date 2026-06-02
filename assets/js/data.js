// ===== ARTISTS DATA =====
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

// ===== SCHEDULE DATA =====
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

// ===== TIME SLOTS =====
const TIMES = ['10:00','11:00','12:00','13:00','14:00','15:00','16:00'];