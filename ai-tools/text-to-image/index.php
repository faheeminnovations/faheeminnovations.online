<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0A0E1A">
  <link rel="icon" type="image/svg+xml" href="../favicon.svg">
  <title>Texto para Imagem | Gerador de Imagens</title>
  <meta name="description" content="Crie cartões de frases, gráficos para redes sociais e imagens PNG descarregáveis a partir de texto.">
  <meta name="robots" content="index, follow">
  <meta name="content-language" content="pt-BR">
  <meta name="language" content="Portuguese">
  <meta name="geo.region" content="BR">
  <meta name="geo.country" content="Brazil">
  <link rel="canonical" href="https://ai-text-to-image.faheeminnovations.online/">
  <link rel="alternate" hreflang="pt-BR" href="https://ai-text-to-image.faheeminnovations.online/">
  <link rel="alternate" hreflang="x-default" href="https://ai-text-to-image.faheeminnovations.online/">
  <meta property="og:title" content="Text to Image Generator">
  <meta property="og:description" content="Turn a quote, announcement, or message into a polished downloadable PNG.">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:url" content="https://ai-text-to-image.faheeminnovations.online/">
  <script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"Texto para Imagem","url":"https://ai-text-to-image.faheeminnovations.online/","applicationCategory":"DesignApplication","operatingSystem":"Any","inLanguage":"pt-BR","areaServed":{"@type":"Country","name":"Brazil"},"description":"Crie imagens PNG descarregáveis a partir de texto no navegador."}</script>
  <style>
    :root { --bg: #101b24; --panel: #172833; --ink: #edf7f2; --muted: #a8beb9; --line: #2b4650; --accent: #67d0b2; --gold: #f2b544; }
    * { box-sizing: border-box; }
    body { margin: 0; background: radial-gradient(circle at 80% 5%, #294c4a, transparent 35%), var(--bg); color: var(--ink); font: 16px/1.6 "Public Sans", Arial, sans-serif; }
    .wrap { width: min(1100px, calc(100% - 32px)); margin: auto; }
    header { border-bottom: 1px solid var(--line); background: rgba(16,27,36,.82); backdrop-filter: blur(10px); }
    .nav { min-height: 64px; display: flex; align-items: center; justify-content: space-between; gap: 16px; }
    .brand { display: flex; align-items: center; gap: 10px; font-weight: 700; }
    .mark { display: grid; place-items: center; width: 36px; height: 36px; border-radius: 10px; background: var(--gold); color: #17212a; }
    a { color: var(--accent); }
    main { padding: 56px 0; }
    .eyebrow { color: var(--accent); font-weight: 700; text-transform: uppercase; letter-spacing: .08em; font-size: .78rem; }
    h1 { max-width: 720px; margin: 8px 0 12px; font: 700 clamp(2.2rem, 6vw, 4.6rem)/1.02 Georgia, serif; }
    .lead { max-width: 650px; color: var(--muted); font-size: 1.08rem; }
    .grid { display: grid; grid-template-columns: .8fr 1.2fr; gap: 20px; margin-top: 34px; }
    .panel { padding: 22px; background: var(--panel); border: 1px solid var(--line); border-radius: 14px; }
    label { display: block; margin-bottom: 8px; font-weight: 700; }
    textarea, select, input[type=color] { width: 100%; border: 1px solid var(--line); border-radius: 9px; background: #10202a; color: var(--ink); padding: 12px; font: inherit; }
    textarea { min-height: 260px; resize: vertical; }
    .field { margin-bottom: 16px; }
    .row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
    input[type=color] { height: 46px; padding: 4px; }
    canvas { display: block; width: 100%; max-height: 520px; object-fit: contain; background: #0b1116; border-radius: 10px; }
    .actions { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 16px; }
    button { border: 0; border-radius: 8px; padding: 11px 16px; font: inherit; font-weight: 700; cursor: pointer; background: var(--accent); color: #10242a; }
    button.secondary { background: #25404a; color: var(--ink); }
    @media (max-width: 760px) { .grid { grid-template-columns: 1fr; } main { padding: 36px 0; } }
  </style>
</head>
<body>
  <header><div class="wrap nav"><div class="brand"><span class="mark">T</span><span>Text to Image</span></div><a href="/faheeminnovations.online/tools">Back to tools</a></div></header>
  <main class="wrap">
    <div class="eyebrow">Shareable image maker</div>
    <h1>Turn a message into a polished image.</h1>
    <p class="lead">Write a quote, announcement, or social post, choose a style, and download a ready-to-share PNG.</p>
    <section class="grid">
      <div class="panel">
        <div class="field"><label for="text">Your text</label><textarea id="text" placeholder="Write something worth sharing...">Ideas become useful when they are made clear.</textarea></div>
        <div class="row"><div class="field"><label for="background">Background</label><input id="background" type="color" value="#1f5f5b"></div><div class="field"><label for="text-color">Text color</label><input id="text-color" type="color" value="#ffffff"></div></div>
        <div class="field"><label for="size">Image size</label><select id="size"><option value="1200x1200">Square 1200 x 1200</option><option value="1200x675">Landscape 1200 x 675</option><option value="1080x1350">Portrait 1080 x 1350</option></select></div>
        <div class="actions"><button id="download" type="button">Download PNG</button><button id="sample" class="secondary" type="button">Load sample</button></div>
      </div>
      <div class="panel"><canvas id="canvas" width="1200" height="1200"></canvas></div>
    </section>
  </main>
  <script>
    const text = document.getElementById('text');
    const background = document.getElementById('background');
    const textColor = document.getElementById('text-color');
    const size = document.getElementById('size');
    const canvas = document.getElementById('canvas');
    const context = canvas.getContext('2d');
    function wrapLines(value, maxWidth, font) {
      context.font = font;
      const words = value.trim().split(/\s+/).filter(Boolean);
      const lines = []; let line = '';
      words.forEach(word => { const next = line ? line + ' ' + word : word; if (context.measureText(next).width > maxWidth && line) { lines.push(line); line = word; } else line = next; });
      if (line) lines.push(line); return lines.length ? lines : [' '];
    }
    function draw() {
      const [width, height] = size.value.split('x').map(Number); canvas.width = width; canvas.height = height;
      context.fillStyle = background.value; context.fillRect(0, 0, width, height);
      context.fillStyle = 'rgba(255,255,255,.12)'; context.fillRect(width * .08, height * .08, width * .02, height * .84);
      const fontSize = Math.max(34, Math.round(width / 15)); const font = '700 ' + fontSize + 'px Georgia';
      const lines = wrapLines(text.value, width * .72, font); const lineHeight = fontSize * 1.25; const startY = height / 2 - (lines.length * lineHeight) / 2 + fontSize;
      context.font = font; context.fillStyle = textColor.value; context.textAlign = 'center'; lines.forEach((line, index) => context.fillText(line, width / 2, startY + index * lineHeight));
      context.font = '600 22px Arial'; context.globalAlpha = .72; context.fillText('FAHEEM INNOVATIONS', width / 2, height - 56); context.globalAlpha = 1;
    }
    [text, background, textColor, size].forEach(element => element.addEventListener('input', draw));
    document.getElementById('sample').addEventListener('click', () => { text.value = 'Small steps, clearly shared, create momentum.'; draw(); });
    document.getElementById('download').addEventListener('click', () => { const link = document.createElement('a'); link.download = 'text-to-image.png'; link.href = canvas.toDataURL('image/png'); link.click(); });
    draw();
  </script>
</body>
</html>
