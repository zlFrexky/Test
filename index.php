<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>BHP-Büroexkursion Programm</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Permanent+Marker&display=swap');

  :root {
    --ink: #1c2a5e;
    --ink-soft: rgba(28,42,94,0.65);
    --ink-faint: rgba(28,42,94,0.42);
    --rule: rgba(28,42,94,0.25);
  }

  * { box-sizing: border-box; }

  html, body {
    margin: 0;
    padding: 0;
    min-height: 100%;
  }

  body {
    font-family: 'Inter', -apple-system, sans-serif;
    color: var(--ink);
    background-color: #f4f5f7;
    background-image:
      linear-gradient(180deg, rgba(70,100,195,0.32) 0%, rgba(150,175,225,0.12) 40%, rgba(150,205,175,0.14) 60%, rgba(69,201,126,0.32) 100%),
      radial-gradient(ellipse 90% 30% at 50% 6%, rgba(70,105,200,0.55), transparent 60%),
      radial-gradient(ellipse 80% 28% at 25% 22%, rgba(90,140,215,0.5), transparent 58%),
      radial-gradient(ellipse 70% 30% at 75% 30%, rgba(60,90,190,0.4), transparent 58%),
      radial-gradient(ellipse 80% 30% at 30% 72%, rgba(95,208,140,0.45), transparent 58%),
      radial-gradient(ellipse 90% 32% at 65% 88%, rgba(69,201,126,0.55), transparent 60%),
      radial-gradient(ellipse 85% 30% at 50% 98%, rgba(120,195,150,0.5), transparent 60%);
    background-repeat: no-repeat;
    min-height: 100vh;
    width: 100%;
    position: relative;
  }

  body::before {
    content: "";
    position: fixed;
    inset: 0;
    pointer-events: none;
    z-index: 0;
    opacity: 0.22;
    mix-blend-mode: overlay;
    filter: url(#grainNoise);
    background: #808080;
  }

  .sheet {
    position: relative;
    z-index: 1;
    max-width: 900px;
    margin: 0 auto;
    padding: 56px 48px 64px;
  }

  .masthead {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 34px;
  }

  .masthead .brand {
    font-weight: 800;
    font-size: 22px;
    line-height: 1.15;
    letter-spacing: -0.01em;
  }

  .masthead .brand span { display: block; }

  .scribble {
    font-family: 'Inter', sans-serif;
    font-weight: 800;
    color: var(--ink);
    text-shadow: 0 1px 8px rgba(255,255,255,0.5);
    font-size: 40px;
    line-height: 0.85;
    letter-spacing: -0.01em;
    transform: rotate(-2deg);
    display: inline-block;
  }
  .scribble .line1,
  .scribble .line2 { display: block; white-space: nowrap; }
  .scribble .line1 { transform: rotate(2deg); }
  .scribble .line2 { transform: rotate(-3deg); margin-left: 24px; margin-top: 14px; }

  .scribble span span {
    display: inline-block;
    transform: translateY(0) rotate(0deg) scale(1);
  }
  .scribble span span.sp { width: 14px; }
  .scribble span span:nth-child(6n+1) { transform: translateY(-4px) rotate(-12deg) scale(1.08); }
  .scribble span span:nth-child(6n+2) { transform: translateY(5px) rotate(9deg) scale(0.9); }
  .scribble span span:nth-child(6n+3) { transform: translateY(-2px) rotate(13deg) scale(1.12); }
  .scribble span span:nth-child(6n+4) { transform: translateY(4px) rotate(-10deg) scale(0.95); }
  .scribble span span:nth-child(6n+5) { transform: translateY(-6px) rotate(6deg) scale(1); }
  .scribble span span:nth-child(6n+6) { transform: translateY(2px) rotate(-14deg) scale(1.05); }
  .scribble span span.tilt-r { transform: translateY(-2px) rotate(18deg) scale(1.05); }

  .title-row {
    border-top: 2.5px solid var(--ink);
    border-bottom: 2.5px solid var(--ink);
    padding: 14px 0;
    margin-bottom: 4px;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: -0.01em;
  }

  .entry {
    display: grid;
    grid-template-columns: 78px 1fr;
    column-gap: 22px;
    padding: 22px 0;
    border-bottom: 1.5px solid var(--rule);
  }

  .entry:last-of-type { border-bottom: none; }

  .num {
    font-size: 44px;
    font-weight: 800;
    line-height: 1;
    letter-spacing: -0.02em;
    color: #c97a94;
    background: linear-gradient(135deg, #eab8c8 0%, #c97a94 55%, #b56583 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .num-day {
    display: block;
    font-size: 26px;
    font-weight: 700;
    letter-spacing: 0.03em;
    text-transform: uppercase;
    margin-top: 2px;
    color: #c97a94;
    background: linear-gradient(135deg, #eab8c8 0%, #c97a94 55%, #b56583 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .body-col h3 {
    margin: 0 0 10px;
    font-size: 24px;
    font-weight: 800;
    letter-spacing: -0.01em;
    line-height: 1.15;
    text-transform: uppercase;
  }

  .body-col h3.freizeit-title {
    font-style: italic;
    font-weight: 500;
    color: var(--ink-soft);
    font-size: 19px;
    text-transform: none;
    background: none;
    -webkit-background-clip: initial;
    background-clip: initial;
    -webkit-text-fill-color: var(--ink-soft);
  }

  .h3-row {
    display: flex;
    align-items: center;
    gap: 14px;
    flex-wrap: wrap;
    margin-bottom: 10px;
  }
  .h3-row h3 { margin: 0; }

  .pdf-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: linear-gradient(135deg, rgba(246,221,229,0.6) 0%, rgba(232,191,205,0.6) 55%, rgba(221,173,190,0.6) 100%);
    color: #fff;
    text-decoration: none;
    font-size: 12.5px;
    font-weight: 700;
    padding: 6px 14px;
    border-radius: 999px;
    letter-spacing: 0.01em;
    transition: opacity 0.15s ease;
  }
  .pdf-btn:hover { opacity: 0.82; }
  .pdf-btn svg { flex: none; }

  .col-headers {
    display: grid;
    grid-template-columns: 78px 1fr;
    column-gap: 22px;
    padding-top: 10px;
  }
  .col-headers .head-labels {
    display: grid;
    grid-template-columns: 1fr 1.15fr 1.15fr 0.8fr;
    column-gap: 16px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    color: var(--ink-faint);
  }

  .meta-grid {
    display: grid;
    grid-template-columns: 1fr 1.15fr 1.15fr 0.8fr;
    column-gap: 16px;
    font-size: 13.5px;
    line-height: 1.5;
  }

  .meta-grid .when {
    font-weight: 600;
  }
  .meta-grid .when .day {
    display: block;
    text-transform: capitalize;
  }

  .meta-grid .where {
    font-weight: 500;
    color: var(--ink);
  }

  .meta-grid .note {
    font-weight: 500;
    color: var(--ink-soft);
  }
  .meta-grid .note strong {
    display: block;
    font-weight: 700;
    color: var(--ink);
  }

  .maps a {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    color: var(--ink);
    text-decoration: none;
    font-weight: 600;
    font-size: 13px;
    border-bottom: 1px solid var(--ink);
    padding-bottom: 1px;
  }
  .maps svg { flex: none; }

  .subline {
    grid-column: 1 / -1;
    margin-top: 12px;
    font-size: 16px;
    font-weight: 600;
    font-style: italic;
    color: var(--ink-soft);
  }

  .day-header {
    grid-column: 1 / -1;
    display: flex;
    align-items: baseline;
    gap: 14px;
  }
  .day-header .num { min-width: 78px; }
  .day-header h3 { margin: 0; }

  @media (max-width: 620px) {
    .sheet { padding: 28px 18px 40px; }

    .masthead { align-items: center; margin-bottom: 24px; }
    .masthead .brand { font-size: 14px; }
    .scribble { font-size: 20px; }
    .scribble .line2 { margin-left: 16px; margin-top: 10px; }

    .title-row { font-size: 13px; padding: 11px 0; line-height: 1.35; }

    .col-headers { display: none; }

    .entry { grid-template-columns: 40px 1fr; column-gap: 12px; padding: 18px 0; }
    .num { font-size: 26px; }

    .body-col h3 { font-size: 18px; margin-bottom: 12px; }
    .body-col h3.freizeit-title { font-size: 15.5px; }

    .h3-row { gap: 10px; margin-bottom: 12px; }
    .pdf-btn { font-size: 11.5px; padding: 5px 12px; }

    .meta-grid {
      grid-template-columns: 1fr;
      row-gap: 10px;
    }
    .meta-grid > div::before {
      content: attr(data-label);
      display: block;
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: var(--ink-faint);
      margin-bottom: 2px;
    }
    .meta-grid .note:empty,
    .meta-grid .maps:empty { display: none; }

    .maps a {
      font-size: 14px;
      padding: 6px 0;
    }

    .subline { font-size: 14.5px; margin-top: 10px; }
  }

  @media (max-width: 360px) {
    .sheet { padding: 22px 14px 32px; }
    .num { font-size: 22px; }
    .body-col h3 { font-size: 16.5px; }
    .masthead .brand { font-size: 12px; }
    .scribble { font-size: 16px; }
    .scribble .line2 { margin-left: 12px; margin-top: 8px; }
  }

  .pdf-btn { cursor: pointer; border: none; font-family: 'Inter', sans-serif; }

  .prog-details { flex: none; }
  .prog-details > summary {
    list-style: none;
    cursor: pointer;
  }
  .prog-details > summary::-webkit-details-marker { display: none; }
  .prog-details > summary::marker { content: ''; }
  .prog-details > summary::after {
    content: '▾';
    margin-left: 6px;
    font-size: 10px;
  }
  .prog-details[open] > summary::after { content: '▴'; }
  .prog-details[open] { flex-basis: 100%; }

  .prog-content {
    margin-top: 16px;
    padding: 20px 22px;
    background: rgba(255,255,255,0.55);
    border-radius: 14px;
    border: 1px solid rgba(28,42,94,0.15);
  }

  .prog-groups {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px 28px;
  }

  .prog-group-title {
    font-size: 12.5px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: var(--ink);
    border-bottom: 2px solid var(--ink);
    padding-bottom: 6px;
    margin-bottom: 4px;
  }

  .prog-stop {
    padding: 10px 0;
    border-bottom: 1px solid rgba(28,42,94,0.12);
    font-size: 12px;
    line-height: 1.5;
  }
  .prog-stop:last-child { border-bottom: none; }
  .prog-stop.transfer { color: var(--ink-faint); font-style: italic; }
  .prog-stop.transfer .prog-time { color: var(--ink-faint); }

  .prog-time {
    display: block;
    font-weight: 700;
    color: var(--ink);
    margin-bottom: 4px;
  }

  .prog-title { font-weight: 700; color: var(--ink); }
  .prog-sub { color: var(--ink-soft); font-style: italic; margin: 2px 0 4px; }
  .prog-list { margin: 4px 0 0; padding-left: 15px; }
  .prog-list li { margin-bottom: 7px; }
  .prog-list li:last-child { margin-bottom: 0; }
  .prog-arch { color: var(--ink-soft); }
  .prog-note { display: block; font-style: italic; color: var(--ink-faint); font-size: 11.5px; margin-top: 1px; }

  .topic-lead { font-weight: 800; color: var(--ink); font-size: 14.5px; margin-bottom: 3px; }
  .topic-date { display: block; font-weight: 600; color: var(--ink-soft); font-size: 12px; margin-bottom: 14px; }
  .topic-text p { margin: 0 0 12px; font-size: 13px; line-height: 1.65; color: var(--ink-soft); }
  .topic-text p:last-child { margin-bottom: 0; }

  .gtk-section { margin-top: 18px; }
  .gtk-section:first-child { margin-top: 0; }
  .gtk-section.prog-group-title { text-transform: none; letter-spacing: 0; }
  .gtk-list li { font-size: 13px; color: var(--ink-soft); }
  .gtk-list li strong { color: var(--ink); font-weight: 700; }

  @media (max-width: 720px) {
    .prog-groups { grid-template-columns: 1fr; gap: 4px 0; }
    .prog-group-title { margin-top: 14px; }
    .prog-group-title:first-child { margin-top: 0; }
  }

  @media (max-width: 620px) {
    .prog-content { padding: 16px; }
  }
</style>
</head>
<body>
<svg width="0" height="0" style="position:absolute">
  <filter id="chalkGrain" x="-20%" y="-20%" width="140%" height="140%">
    <feTurbulence type="fractalNoise" baseFrequency="0.9" numOctaves="3" seed="7" result="noise"/>
    <feColorMatrix in="noise" type="matrix" values="0 0 0 0 1  0 0 0 0 1  0 0 0 0 1  0 0 0 0.9 0" result="whiteNoise"/>
    <feComposite in="whiteNoise" in2="SourceGraphic" operator="in" result="grainOnText"/>
    <feComposite in="SourceGraphic" in2="grainOnText" operator="out" result="textureCut"/>
    <feMerge>
      <feMergeNode in="textureCut"/>
      <feMergeNode in="grainOnText"/>
    </feMerge>
  </filter>
  <filter id="grainNoise" x="0%" y="0%" width="100%" height="100%">
    <feTurbulence type="fractalNoise" baseFrequency="0.85" numOctaves="2" seed="12" stitchTiles="stitch" result="noise"/>
    <feColorMatrix in="noise" type="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 0"/>
  </filter>
</svg>
<div class="sheet">

  <div class="masthead">
    <div class="brand"><span>Baumschlager</span><span>Hutter</span><span>Partners</span></div>
    <div class="scribble"><span class="line1"><span>C</span><span>h</span><span>u</span><span>m</span><span class="sp"> </span><span>u</span><span class="tilt-r">u</span><span>f</span></span><span class="line2"><span>B</span><span>a</span><span>s</span><span>e</span><span>l</span></span></div>
  </div>

  <div class="title-row">BHP-Büroexkursion — Donnerstag, 08.10. bis Sonntag, 11.10.2026</div>

  <div class="col-headers">
    <div></div>
    <div class="head-labels">
      <div>Zeit</div>
      <div>Ort</div>
      <div>Info</div>
      <div>Treffpunkte</div>
    </div>
  </div>

  <!-- Donnerstag -->
  <div class="entry">
    <div class="num">08<span class="num-day">Do.</span></div>
    <div class="body-col">
      <h3>Anreise aus den Standorten</h3>
      <div class="meta-grid">
        <div class="when" data-label="Zeit"><span class="day">donnerstag</span>ganztägig</div>
        <div class="where" data-label="Ort">—</div>
        <div class="note" data-label="Info">Individuelle Anreise</div>
        <div class="maps" data-label="Treffpunkt"></div>
      </div>
    </div>
  </div>

  <div class="entry">
    <div class="num"></div>
    <div class="body-col">
      <h3>Gemeinsamer Aperitif mit Chips</h3>
      <div class="meta-grid">
        <div class="when" data-label="Zeit"><span class="day">donnerstag</span>ab 17:00</div>
        <div class="where" data-label="Ort">Treffpunkt Motel One</div>
        <div class="note" data-label="Info">Gemeinsamer Start</div>
        <div class="maps" data-label="Treffpunkt"><a href="https://www.google.com/maps/search/?api=1&query=Motel+One+Basel+Barf%C3%BCssergasse+16+4051+Basel" target="_blank" rel="noopener"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s7-7.5 7-12a7 7 0 1 0-14 0c0 4.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>Karte</a></div>
      </div>
    </div>
  </div>
  <div class="entry">
    <div class="num"></div>
    <div class="body-col">
      <div class="h3-row">
        <h3 class="freizeit-title">Abend zur freien Verfügung</h3>
        <details class="prog-details">
          <summary class="pdf-btn"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>Good to know</summary>
          <div class="prog-content">
            <div class="prog-group-title gtk-section">Klassische Basler Beiz</div>
            <ul class="prog-list gtk-list">
              <li>Gifthüttli</li>
              <li>Schnabel</li>
              <li>Restaurant Löwenzorn</li>
              <li>Hasenburg</li>
              <li>Harmonie</li>
            </ul>

            <div class="prog-group-title gtk-section">Restaurants & Locations</div>
            <ul class="prog-list gtk-list">
              <li><strong>Volkshaus Basel</strong><span class="prog-note">Brasserie, Bar und Event – von Herzog & de Meuron</span></li>
              <li><strong>Markthalle</strong><span class="prog-note">Küche aus aller Welt, Foodstände</span></li>
              <li><strong>Za Zaa</strong><span class="prog-note">Lebanese Soul Food</span></li>
              <li><strong>Cantina Don Camillo</strong><span class="prog-note">auf dem Harteck-Areal</span></li>
              <li><strong>Le Rhin Bleu</strong><span class="prog-note">Restaurant im Rheinbad</span></li>
              <li><strong>Restaurant Alchemist</strong></li>
              <li><strong>Restaurant Zur Magd</strong></li>
              <li><strong>Nomad Bar Eatery</strong><span class="prog-note">50er-Jahre-Stil</span></li>
              <li><strong>Ufer 7</strong></li>
              <li><strong>Diverse Lokale</strong><span class="prog-note">im Kaserneareal</span></li>
            </ul>

            <div class="prog-group-title gtk-section">Bars</div>
            <ul class="prog-list gtk-list">
              <li>Cargobar</li>
              <li>Campari Bar</li>
              <li>Rio Bar</li>
              <li>Unternehmen Mitte</li>
              <li>Consum</li>
              <li>INE Bar</li>
              <li>Amber Bar</li>
              <li>Bar im Teufelhof (gehoben)</li>
              <li>Volta Bräu</li>
              <li>Bar Rouge (im Messeturm)</li>
            </ul>
          </div>
        </details>
      </div>
    </div>
  </div>

  <!-- Freitag -->
  <div class="entry">
    <div class="num">09<span class="num-day">Fr.</span></div>
    <div class="body-col">
      <div class="h3-row">
        <h3>Führung mit ArchiTour</h3>
      <details class="prog-details">
        <summary class="pdf-btn"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg>Programm</summary>
        <div class="prog-content">
          <div class="prog-groups">
            <div>
              <div class="prog-group-title">Gruppe 1</div>

              <div class="prog-stop">
                <div class="prog-time">08.00</div>
                <div><div class="prog-title">Treffpunkt: Hotel Motel One</div>Start Führung ARCHiTOUR mit öV und zu Fuss in 2 Gruppen</div>
              </div>

              <div class="prog-stop transfer">
                <div class="prog-time">08.12–08.30</div>
                <div>Tram 3 Barfüsserplatz–Felix-Platter-Spital + 08.25 Bus 48 bis Allschwil, Kreuzstrasse</div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">08.30–09.15</div>
                <div>
                  <div class="prog-title">Allschwil Bachgraben — Areal-Entwicklung BaseLink</div>
                  <div class="prog-sub">Input zur Arealentwicklung</div>
                  <ul class="prog-list">
                    <li><strong>Hortus, 2025</strong> – Innenbesichtigung Eingangsgeschoss<br><span class="prog-arch">Herzog & de Meuron, Basel</span><span class="prog-note">Der Nachhaltigkeit verpflichtet aus Holz und Lehm</span></li>
                    <li><strong>SIP – Main-Campus, 2024</strong> – Besichtigung Hof / Erschliessung<br><span class="prog-arch">Herzog & de Meuron, Basel</span><span class="prog-note">Multifunktionaler Bau im Life Science Cluster</span></li>
                    <li><strong>Tropeninstitut TPH, 2021</strong><br><span class="prog-arch">Kunz+Mösch / Itten Brechbühl</span><span class="prog-note">Neue Identität an einem Standort</span></li>
                  </ul>
                </div>
              </div>

              <div class="prog-stop transfer">
                <div class="prog-time">09.20–09.39</div>
                <div>Transfer mit Bus 38 Allschwil, Kreuzstrasse–Kannenfeldplatz + Tram 1 bis Bahnhof St. Johann</div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">09.45–10.30</div>
                <div>
                  <div class="prog-title">Transformation Lysbüchel-Süd, 2016–2024</div>
                  <div class="prog-sub">Input zur Arealentwicklung am Stadtmodell — Städtebau: Metron, Brugg (Modell im Musikerwohnhaus, Lothtringerstrasse 165, Basel)</div>
                  <ul class="prog-list">
                    <li><strong>Genossenschaftlicher Blockrand, 2021–2024</strong> – Aussenbesichtigung<br><span class="prog-arch">Reuter, Nussbaumer Trussel, Stump Schibli, MAS Studio, Stereo, Norma Tollmann, Metron, Loeliger Strub, Kollektive Architekt, NEUME, OAK</span><span class="prog-note">Blockrand mit 11 Parzellen, bebaut durch 11 Architekten</span></li>
                    <li><strong>Wohn- und Gewerbehaus Lyse-Lotte, 2023</strong> – Aussenbesichtigung<br><span class="prog-arch">Clauss, Kahl, Merz, Basel</span><span class="prog-note">Stapelung unterschiedlicher Wohntypologien</span></li>
                    <li><strong>Wohnhaus Weinlager, 2023</strong> – Aussenbesichtigung<br><span class="prog-arch">Esch Sintzel, Zürich</span><span class="prog-note">Vom Coop-Weinlager zum Wohn- und Gewerbebau</span></li>
                  </ul>
                </div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">10.30</div>
                <div>Ende Führung ARCHiTOUR beim Schulhaus Lysbüchel vor dem Lazai<br>Kurze Erfrischungspause<br>Vortrag von Peter Kaufmann, Architekt ETH, Immobilien Kanton Basel-Stadt<br>Besichtigung Elys</div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">12.30</div>
                <div>Mittagessen im Restaurant Lazai im ELYS</div>
              </div>
            </div>

            <div>
              <div class="prog-group-title">Gruppe 2</div>

              <div class="prog-stop">
                <div class="prog-time">08.00</div>
                <div><div class="prog-title">Treffpunkt: Hotel Motel One</div>Start Führung ARCHiTOUR mit öV und zu Fuss in 2 Gruppen</div>
              </div>

              <div class="prog-stop transfer">
                <div class="prog-time">08.19–08.37</div>
                <div>Tram 3 Barfüsserplatz–Strassburgallee + 08.30 Bus 38 bis Allschwil, Kreuzstrasse (alternativ zu Gruppe 1)</div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">08.40–09.15</div>
                <div>
                  <div class="prog-title">Allschwil Bachgraben — Areal-Entwicklung BaseLink</div>
                  <div class="prog-sub">Input zur Arealentwicklung</div>
                  <ul class="prog-list">
                    <li><strong>SIP – Main-Campus, 2024</strong> – Besichtigung Hof / Erschliessung<br><span class="prog-arch">Herzog & de Meuron, Basel</span><span class="prog-note">Multifunktionaler Bau im Life Science Cluster</span></li>
                    <li><strong>Hortus, 2025</strong> – Innenbesichtigung Eingangsgeschoss<br><span class="prog-arch">Herzog & de Meuron, Basel</span><span class="prog-note">Der Nachhaltigkeit verpflichtet aus Holz und Lehm</span></li>
                    <li><strong>Tropeninstitut TPH, 2021</strong><br><span class="prog-arch">Kunz+Mösch / Itten Brechbühl</span><span class="prog-note">Neue Identität an einem Standort</span></li>
                  </ul>
                </div>
              </div>

              <div class="prog-stop transfer">
                <div class="prog-time">09.20–09.39</div>
                <div>Transfer mit Bus 38 Allschwil, Kreuzstrasse–Kannenfeldplatz + Tram 1 bis Bahnhof St. Johann</div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">09.25–10.30</div>
                <div>
                  <div class="prog-title">Transformation Lysbüchel-Süd, 2016–2024</div>
                  <div class="prog-sub">Lysbüchel-Süd — Input zur Arealentwicklung am Stadtmodell — Städtebau: Metron, Brugg (Modell im Musikerwohnhaus, Lothtringerstrasse 165, Basel)</div>
                  <ul class="prog-list">
                    <li><strong>Genossenschaftlicher Blockrand, 2021–2024</strong> – Aussenbesichtigung<br><span class="prog-arch">Reuter, Nussbaumer Trussel, Stump Schibli, MAS Studio, Stereo, Norma Tollmann, Metron, Loeliger Strub, Kollektive Architekt, NEUME, OAK</span><span class="prog-note">Blockrand mit 11 Parzellen, bebaut durch 11 Architekten</span></li>
                    <li><strong>Wohn- und Gewerbehaus Lyse-Lotte, 2023</strong> – Aussenbesichtigung<br><span class="prog-arch">Clauss, Kahl, Merz, Basel</span><span class="prog-note">Stapelung unterschiedlicher Wohntypologien</span></li>
                    <li><strong>Wohnhaus Weinlager, 2023</strong> – Aussenbesichtigung<br><span class="prog-arch">Esch Sintzel, Zürich</span><span class="prog-note">Vom Coop-Weinlager zum Wohn- und Gewerbebau</span></li>
                  </ul>
                </div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">10.30</div>
                <div>Ende Führung ARCHiTOUR beim Schulhaus Lysbüchel vor dem Lazai<br>Kurze Erfrischungspause<br>Vortrag von Peter Kaufmann, Architekt ETH, Immobilien Kanton Basel-Stadt<br>Besichtigung Elys</div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">12.30</div>
                <div>Mittagessen im Restaurant Lazai im ELYS</div>
              </div>
            </div>
          </div>
        </div>
      </details>
      </div>
      <div class="meta-grid">
        <div class="when" data-label="Zeit"><span class="day">freitag</span>08.00–10.30</div>
        <div class="where" data-label="Ort">Treffpunkt Hotel Motel One</div>
        <div class="note" data-label="Info">Gruppe 1 + 2<br>08.00–10.30 Uhr</div>
        <div class="maps" data-label="Treffpunkt"><a href="https://www.google.com/maps/search/?api=1&query=Motel+One+Basel+Barf%C3%BCssergasse+16+4051+Basel" target="_blank" rel="noopener"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s7-7.5 7-12a7 7 0 1 0-14 0c0 4.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>Karte</a></div>
      </div>
    </div>
  </div>

  <div class="entry">
    <div class="num"></div>
    <div class="body-col">
      <h3>Vortrag Peter Kaufmann</h3>
      <div class="meta-grid">
        <div class="when" data-label="Zeit"><span class="day">freitag</span>10.30–12.30</div>
        <div class="where" data-label="Ort">Elys</div>
        <div class="note" data-label="Info">Mit Besichtigung Elys</div>
        <div class="maps" data-label="Treffpunkt"><a href="https://maps.app.goo.gl/E2FMcDodNJqnTqDcA" target="_blank" rel="noopener"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s7-7.5 7-12a7 7 0 1 0-14 0c0 4.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>Karte</a></div>
      </div>
    </div>
  </div>

  <div class="entry">
    <div class="num"></div>
    <div class="body-col">
      <h3>Mittagessen</h3>
      <div class="meta-grid">
        <div class="when" data-label="Zeit"><span class="day">freitag</span>12:30</div>
        <div class="where" data-label="Ort">Restaurant Lazai im ELYS</div>
        <div class="note" data-label="Info">Gemeinsames Essen</div>
        <div class="maps" data-label="Treffpunkt"><a href="https://maps.app.goo.gl/E2FMcDodNJqnTqDcA" target="_blank" rel="noopener"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s7-7.5 7-12a7 7 0 1 0-14 0c0 4.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>Karte</a></div>
      </div>
    </div>
  </div>

  <div class="entry">
    <div class="num"></div>
    <div class="body-col">
      <div class="h3-row">
        <h3>Zukunftsdialog BHP</h3>
        <details class="prog-details">
          <summary class="pdf-btn"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>Thema</summary>
          <div class="prog-content">
            <div class="topic-text">
              <div class="topic-lead">Zukunftsdialog BHP – Es geht vorwärts.</div>
              <span class="topic-date">Freitag, 9. Oktober 2026, 13.00–18.00 Uhr</span>
              <p>zu Ostern im Frühling angekündigt - im Herbst wird sichtbar, wohin sich BHP entwickelt. Jetzt ist es soweit. Wir arbeiten gemeinsam an der Zukunft von BHP. Kein Vortrag. Ein echter Dialog.</p>
              <p>Wir schaffen Orientierung: über unsere Ambition, unsere Identität und die Handlungsfelder, die vor uns liegen. Und wir fragen, was Beziehung, Haltung und Perspektive im Alltag heissen. Nicht auf dem Papier, sondern in unserer täglichen Arbeit.</p>
              <p>Was im Herbst 2025 eine Entscheidung der Eigentümer war, wird jetzt konkret. Schritt für Schritt. Gemeinsam. Vorwärts.</p>
            </div>
          </div>
        </details>
      </div>
      <div class="meta-grid">
        <div class="when" data-label="Zeit"><span class="day">freitag</span>13.00–18.00</div>
        <div class="where" data-label="Ort">Seminarraum im Lazai</div>
        <div class="note" data-label="Info"></div>
        <div class="maps" data-label="Treffpunkt"><a href="https://maps.app.goo.gl/E2FMcDodNJqnTqDcA" target="_blank" rel="noopener"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s7-7.5 7-12a7 7 0 1 0-14 0c0 4.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>Karte</a></div>
      </div>
    </div>
  </div>
  <div class="entry">
    <div class="num"></div>
    <div class="body-col">
      <div class="h3-row">
        <h3 class="freizeit-title">Abend zur freien Verfügung</h3>
        <details class="prog-details">
          <summary class="pdf-btn"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>Good to know</summary>
          <div class="prog-content">
            <div class="prog-group-title gtk-section">Klassische Basler Beiz</div>
            <ul class="prog-list gtk-list">
              <li>Gifthüttli</li>
              <li>Schnabel</li>
              <li>Restaurant Löwenzorn</li>
              <li>Hasenburg</li>
              <li>Harmonie</li>
            </ul>

            <div class="prog-group-title gtk-section">Restaurants & Locations</div>
            <ul class="prog-list gtk-list">
              <li><strong>Volkshaus Basel</strong><span class="prog-note">Brasserie, Bar und Event – von Herzog & de Meuron</span></li>
              <li><strong>Markthalle</strong><span class="prog-note">Küche aus aller Welt, Foodstände</span></li>
              <li><strong>Za Zaa</strong><span class="prog-note">Lebanese Soul Food</span></li>
              <li><strong>Cantina Don Camillo</strong><span class="prog-note">auf dem Harteck-Areal</span></li>
              <li><strong>Le Rhin Bleu</strong><span class="prog-note">Restaurant im Rheinbad</span></li>
              <li><strong>Restaurant Alchemist</strong></li>
              <li><strong>Restaurant Zur Magd</strong></li>
              <li><strong>Nomad Bar Eatery</strong><span class="prog-note">50er-Jahre-Stil</span></li>
              <li><strong>Ufer 7</strong></li>
              <li><strong>Diverse Lokale</strong><span class="prog-note">im Kaserneareal</span></li>
            </ul>

            <div class="prog-group-title gtk-section">Bars</div>
            <ul class="prog-list gtk-list">
              <li>Cargobar</li>
              <li>Campari Bar</li>
              <li>Rio Bar</li>
              <li>Unternehmen Mitte</li>
              <li>Consum</li>
              <li>INE Bar</li>
              <li>Amber Bar</li>
              <li>Bar im Teufelhof (gehoben)</li>
              <li>Volta Bräu</li>
              <li>Bar Rouge (im Messeturm)</li>
            </ul>
          </div>
        </details>
      </div>
    </div>
  </div>

  <!-- Samstag -->
  <div class="entry">
    <div class="num">10<span class="num-day">Sa.</span></div>
    <div class="body-col">
      <div class="h3-row">
        <h3>Führung mit ArchiTour</h3>
      <details class="prog-details">
        <summary class="pdf-btn"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg>Programm</summary>
        <div class="prog-content">
          <div class="prog-groups">
            <div>
              <div class="prog-group-title">Gruppe 1</div>

              <div class="prog-stop">
                <div class="prog-time">08.45</div>
                <div><div class="prog-title">Treffpunkt: Motel One</div>Start Führung ARCHiTOUR mit öV und zu Fuss</div>
              </div>

              <div class="prog-stop transfer">
                <div class="prog-time">08.57–09.06</div>
                <div>Transfer mit Tram 3 Barfüsserplatz–Felix-Platter-Spital</div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">09.10–09.45</div>
                <div>
                  <ul class="prog-list">
                    <li><strong>Westfeld I Umnutzung Felix-Platter-Spital, 2022</strong> – Innenbesichtigung Eingangshalle<br><span class="prog-arch">Müller Sigrist, Zürich</span><span class="prog-note">Zu einem vielfältigen Wohnbau umgenutzter ehemaliger Spitalbau</span></li>
                    <li><strong>„Wohnen und Mehr"</strong> – Aussenbesichtigung<br><span class="prog-arch">Bachelard Wagner & Reuter Architekten, Basel; ARGE Baumann Scheibler Villard, Basel; Enzmann Fischer, Zürich</span></li>
                  </ul>
                </div>
              </div>

              <div class="prog-stop transfer">
                <div class="prog-time">09.45–10.15</div>
                <div>Fussweg durch Kannenfeldpark + Transfer mit Tram 14 Kannenfeldplatz–Musical-Theater</div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">10.15–11.35</div>
                <div>
                  <div class="prog-title">Transformation Areal Erlenmatt-Ost (ehemaliges DB-Areal)</div>
                  <ul class="prog-list">
                    <li><strong>Wohnhaus Stiftung Habitat, 2017</strong> – Innenbesichtigung Höfe<br><span class="prog-arch">Galli Rudolf, Zürich</span><span class="prog-note">Hybrider Baukörper auf dem ehemaligen Güterbahnhofareal</span></li>
                    <li><strong>Wohnhaus Stadterle, 2017</strong> – Aussenbesichtigung<br><span class="prog-arch">Buchner Bründler, Basel</span><span class="prog-note">Wohnen in grüner Hülle</span></li>
                    <li><strong>Studierendenwohnhaus, 2019</strong><br><span class="prog-arch">Duplex, Zürich</span><span class="prog-note">Verborgener Gemeinschaftshof</span></li>
                    <li><strong>2 Wohnhäuser, 2019</strong> – Aussenbesichtigung<br><span class="prog-arch">Abraha Achermann, Zürich</span><span class="prog-note">Minimalistisches Wohnen</span></li>
                    <li><strong>Atelier-Genossenschaft Erlenmatt-Ost, 2019</strong><br><span class="prog-arch">Degelo, Basel</span><span class="prog-note">Das Haus ohne Heizung</span></li>
                    <li><strong>Wohnhaus Goldbachweg, 2026</strong> – Aussenbesichtigung<br><span class="prog-arch">EMI, Zürich</span><span class="prog-note">Hölzerner Bau – von der Tragstruktur bis zur Verkleidung</span></li>
                  </ul>
                </div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">10.45–11.35</div>
                <div><strong>Kaffeepause</strong> + Innenbesichtigung <strong>Umnutzung Silo, 2020</strong><br><span class="prog-arch">Harry Gugger Studio, Basel</span><span class="prog-note">Vom Getreidesilo zum Designhostel</span></div>
              </div>

              <div class="prog-stop transfer">
                <div class="prog-time">11.43–12.02</div>
                <div>Transfer Bus 46 Signalstrasse–Bad. Bahnhof (Kante A) + Bus 36 (Kante A) bis Dreispitz</div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">12.00–13.00</div>
                <div>
                  <div class="prog-title">Transformation Dreispitz-Areal, 2014–2024</div>
                  <div class="prog-sub">Arealrundgang — Masterplan: Herzog & de Meuron, Basel I Freiraum: Westpol, Basel</div>
                  <ul class="prog-list">
                    <li><strong>Bürogebäude HdM Mailandstrasse, 2026</strong> – Aussenbesichtigung<br><span class="prog-arch">Herzog & de Meuron, Basel</span><span class="prog-note">7-geschossiger Holz-Hybridbau als vertikaler Campus</span></li>
                    <li><strong>Kunsthaus Baselland, 2024</strong> – Aussenbesichtigung<br><span class="prog-arch">Buchner Bründler, Basel</span><span class="prog-note">Prismatische Lichttürme für die Kunst</span></li>
                    <li><strong>Campus der Künste, 2014</strong><br><span class="prog-arch">Neubau Hochhaus: Morger Dettli, Basel + Transformation Zollfreihalle: Müller Sigrist, Zürich</span><span class="prog-note">Von Zollfreilager zum Kunstzentrum</span></li>
                    <li><strong>Helsinki-Turm, 2014</strong> – Aussenbesichtigung<br><span class="prog-arch">Herzog & de Meuron, Basel</span><span class="prog-note">Ein Haus wie ein Baum – 41 Wohnungen und das Modellarchiv von HdM</span></li>
                    <li><strong>Transitlager, 2016</strong><br><span class="prog-arch">BIG, Kopenhagen</span><span class="prog-note">Ein Bau für die urbane Dreispitzkultur – Arbeiten, Wohnen und Freizeit</span></li>
                  </ul>
                </div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">13.00</div>
                <div>Ende Führung ARCHiTOUR</div>
              </div>
            </div>

            <div>
              <div class="prog-group-title">Gruppe 2</div>

              <div class="prog-stop">
                <div class="prog-time">08.45</div>
                <div><div class="prog-title">Treffpunkt: Motel One</div>Start Führung ARCHiTOUR mit öV und zu Fuss</div>
              </div>

              <div class="prog-stop transfer">
                <div class="prog-time">08.58–09.07</div>
                <div>Transfer mit Tram 6 Barfüsserplatz–Bad. Bahnhof + kurzer Fussweg</div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">09.15–10.15</div>
                <div>
                  <div class="prog-title">Transformation Areal Erlenmatt-Ost (ehemaliges DB-Areal)</div>
                  <ul class="prog-list">
                    <li><strong>Wohnhaus Stiftung Habitat, 2017</strong> – Innenbesichtigung Höfe<br><span class="prog-arch">Galli Rudolf, Zürich</span><span class="prog-note">Hybrider Baukörper auf dem ehemaligen Güterbahnhofareal</span></li>
                    <li><strong>Wohnhaus Stadterle, 2017</strong> – Aussenbesichtigung<br><span class="prog-arch">Buchner Bründler, Basel</span><span class="prog-note">Wohnen in grüner Hülle</span></li>
                    <li><strong>Studierendenwohnhaus, 2019</strong><br><span class="prog-arch">Duplex, Zürich</span><span class="prog-note">Verborgener Gemeinschaftshof</span></li>
                    <li><strong>2 Wohnhäuser, 2019</strong> – Aussenbesichtigung<br><span class="prog-arch">Abraha Achermann, Zürich</span><span class="prog-note">Minimalistisches Wohnen</span></li>
                    <li><strong>Atelier-Genossenschaft Erlenmatt-Ost, 2019</strong><br><span class="prog-arch">Degelo, Basel</span><span class="prog-note">Das Haus ohne Heizung</span></li>
                    <li><strong>Wohnhaus Goldbachweg, 2026</strong> – Aussenbesichtigung<br><span class="prog-arch">EMI, Zürich</span><span class="prog-note">Hölzerner Bau – von der Tragstruktur bis zur Verkleidung</span></li>
                    <li><strong>Umnutzung Silo, 2020</strong> – Innenbesichtigung Hostel<br><span class="prog-arch">Harry Gugger Studio, Basel</span><span class="prog-note">Vom Getreidesilo zum Designhostel</span></li>
                  </ul>
                </div>
              </div>

              <div class="prog-stop transfer">
                <div class="prog-time">10.15–10.45</div>
                <div>Transfer mit Tram 14 Musical-Theater–Kannenfeldplatz + kurzer Fussweg durch Kannenfeldpark</div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">10.45–11.35</div>
                <div>
                  <ul class="prog-list">
                    <li><strong>Westfeld I Umnutzung Felix-Platter-Spital, 2022</strong> – Innenbesichtigung Eingangshalle<br><span class="prog-arch">Müller Sigrist, Zürich</span><span class="prog-note">Zu einem vielfältigen Wohnbau umgenutzter ehemaliger Spitalbau</span></li>
                    <li><strong>Kaffeepause</strong> + Aussenbesichtigung <strong>„Wohnen und Mehr"</strong><br><span class="prog-arch">Bachelard Wagner & Reuter Architekten, Basel; ARGE Baumann Scheibler Villard, Basel; Enzmann Fischer, Zürich</span></li>
                  </ul>
                </div>
              </div>

              <div class="prog-stop transfer">
                <div class="prog-time">11.36–11.59</div>
                <div>Transfer mit Tram 3 (11.36–11.45) Felix-Platter-Spital–Barfüsserplatz + Tram 11 (11.47–11.59) bis Dreispitz</div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">12.00–13.00</div>
                <div>
                  <div class="prog-title">Transformation Dreispitz-Areal, 2014–2024</div>
                  <div class="prog-sub">Arealrundgang — Masterplan: Herzog & de Meuron, Basel I Freiraum: Westpol, Basel</div>
                  <ul class="prog-list">
                    <li><strong>Campus der Künste, 2014</strong><br><span class="prog-arch">Neubau Hochhaus: Morger Dettli, Basel + Transformation Zollfreihalle: Müller Sigrist, Zürich</span><span class="prog-note">Von Zollfreilager zum Kunstzentrum</span></li>
                    <li><strong>Transitlager, 2016</strong><br><span class="prog-arch">BIG, Kopenhagen</span><span class="prog-note">Ein Bau für die urbane Dreispitzkultur – Arbeiten, Wohnen und Freizeit</span></li>
                    <li><strong>Helsinki-Turm, 2014</strong> – Aussenbesichtigung<br><span class="prog-arch">Herzog & de Meuron, Basel</span><span class="prog-note">Ein Haus wie ein Baum – 41 Wohnungen und das Modellarchiv von HdM</span></li>
                    <li><strong>Kunsthaus Baselland, 2024</strong> – Aussenbesichtigung<br><span class="prog-arch">Buchner Bründler, Basel</span><span class="prog-note">Prismatische Lichttürme für die Kunst</span></li>
                    <li><strong>Bürogebäude HdM Mailandstrasse, 2026</strong> – Aussenbesichtigung<br><span class="prog-arch">Herzog & de Meuron, Basel</span><span class="prog-note">7-geschossiger Holz-Hybridbau als vertikaler Campus</span></li>
                  </ul>
                </div>
              </div>

              <div class="prog-stop">
                <div class="prog-time">13.00</div>
                <div>Ende Führung ARCHiTOUR</div>
              </div>
            </div>
          </div>
        </div>
      </details>
      </div>
      <div class="meta-grid">
        <div class="when" data-label="Zeit"><span class="day">samstag</span>8.45–13.00</div>
        <div class="where" data-label="Ort">Treffpunkt Hotel Motel One</div>
        <div class="note" data-label="Info">Gruppe 1 + 2</div>
        <div class="maps" data-label="Treffpunkt"><a href="https://www.google.com/maps/search/?api=1&query=Motel+One+Basel+Barf%C3%BCssergasse+16+4051+Basel" target="_blank" rel="noopener"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s7-7.5 7-12a7 7 0 1 0-14 0c0 4.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>Karte</a></div>
      </div>
    </div>
  </div>
  <div class="entry">
    <div class="num"></div>
    <div class="body-col">
      <div class="h3-row">
        <h3 class="freizeit-title">Nachmittag zur freien Verfügung</h3>
        <details class="prog-details">
          <summary class="pdf-btn"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>Good to know</summary>
          <div class="prog-content">
            <div class="prog-group-title gtk-section">Klassische Basler Beiz</div>
            <ul class="prog-list gtk-list">
              <li>Gifthüttli</li>
              <li>Schnabel</li>
              <li>Restaurant Löwenzorn</li>
              <li>Hasenburg</li>
              <li>Harmonie</li>
            </ul>

            <div class="prog-group-title gtk-section">Restaurants & Locations</div>
            <ul class="prog-list gtk-list">
              <li><strong>Volkshaus Basel</strong><span class="prog-note">Brasserie, Bar und Event – von Herzog & de Meuron</span></li>
              <li><strong>Markthalle</strong><span class="prog-note">Küche aus aller Welt, Foodstände</span></li>
              <li><strong>Za Zaa</strong><span class="prog-note">Lebanese Soul Food</span></li>
              <li><strong>Cantina Don Camillo</strong><span class="prog-note">auf dem Harteck-Areal</span></li>
              <li><strong>Le Rhin Bleu</strong><span class="prog-note">Restaurant im Rheinbad</span></li>
              <li><strong>Restaurant Alchemist</strong></li>
              <li><strong>Restaurant Zur Magd</strong></li>
              <li><strong>Nomad Bar Eatery</strong><span class="prog-note">50er-Jahre-Stil</span></li>
              <li><strong>Ufer 7</strong></li>
              <li><strong>Diverse Lokale</strong><span class="prog-note">im Kaserneareal</span></li>
            </ul>

            <div class="prog-group-title gtk-section">Bars</div>
            <ul class="prog-list gtk-list">
              <li>Cargobar</li>
              <li>Campari Bar</li>
              <li>Rio Bar</li>
              <li>Unternehmen Mitte</li>
              <li>Consum</li>
              <li>INE Bar</li>
              <li>Amber Bar</li>
              <li>Bar im Teufelhof (gehoben)</li>
              <li>Volta Bräu</li>
              <li>Bar Rouge (im Messeturm)</li>
            </ul>
          </div>
        </details>
      </div>
    </div>
  </div>

  <div class="entry">
    <div class="num"></div>
    <div class="body-col">
      <h3>Gemeinsames Abendessen</h3>
      <div class="meta-grid">
        <div class="when" data-label="Zeit"><span class="day">samstag</span>ab 18.00</div>
        <div class="where" data-label="Ort">Restaurant BASSO</div>
        <div class="note" data-label="Info">ab 19.00 Start Essen<br>ab 21.30 DJ bis 2 Uhr</div>
        <div class="maps" data-label="Treffpunkt"><a href="https://www.google.com/maps/search/?api=1&query=Restaurant+Basso+Basel" target="_blank" rel="noopener"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s7-7.5 7-12a7 7 0 1 0-14 0c0 4.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>Karte</a></div>
      </div>
    </div>
  </div>

  <!-- Sonntag -->
  <div class="entry">
    <div class="num">11<span class="num-day">So.</span></div>
    <div class="body-col">
      <h3>Rückreise</h3>
      <div class="meta-grid">
        <div class="when" data-label="Zeit"><span class="day">sonntag</span>ganztägig</div>
        <div class="where" data-label="Ort">—</div>
        <div class="note" data-label="Info">Individuelle Rückreise</div>
        <div class="maps" data-label="Treffpunkt"></div>
      </div>
    </div>
  </div>

</div>
</body>
</html>
