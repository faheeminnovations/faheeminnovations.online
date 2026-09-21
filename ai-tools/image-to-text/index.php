<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0A0E1A">
  <link rel="icon" type="image/svg+xml" href="../favicon.svg">
  <title>Imagem para Texto com IA | Faheem Innovations</title>
  <meta name="description" content="Extraia texto editável de fotos, documentos digitalizados e capturas de ecrã com OCR no navegador.">
  <meta name="robots" content="index, follow">
  <meta name="content-language" content="pt-BR">
  <meta name="language" content="Portuguese">
  <meta name="geo.region" content="BR">
  <meta name="geo.country" content="Brazil">
  <link rel="canonical" href="https://ai-image-to-text.faheeminnovations.online/">
  <link rel="alternate" hreflang="pt-BR" href="https://ai-image-to-text.faheeminnovations.online/">
  <link rel="alternate" hreflang="x-default" href="https://ai-image-to-text.faheeminnovations.online/">
  <meta property="og:title" content="Imagem para Texto com IA">
  <meta property="og:description" content="Leia texto de fotos, digitalizações e capturas de ecrã diretamente no navegador.">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:url" content="https://ai-image-to-text.faheeminnovations.online/">
  <script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"Imagem para Texto com IA","url":"https://ai-image-to-text.faheeminnovations.online/","applicationCategory":"BusinessApplication","operatingSystem":"Any","inLanguage":"pt-BR","areaServed":{"@type":"Country","name":"Brazil"},"description":"Extraia texto editável de fotos, digitalizações e capturas de ecrã no navegador."}</script>
  <script src="https://cdn.jsdelivr.net/npm/tesseract.js@5/dist/tesseract.min.js"></script>
  <style>
    :root { --bg: #f3f6f4; --panel: #fff; --ink: #17262b; --muted: #627276; --line: #d6e1de; --accent: #087f73; --soft: #e2f1ed; --gold: #e3a225; }
    * { box-sizing: border-box; }
    body { margin: 0; background: linear-gradient(145deg, #edf5f1, #fffaf1); color: var(--ink); font: 16px/1.6 "Public Sans", Arial, sans-serif; }
    .wrap { width: min(1100px, calc(100% - 32px)); margin: auto; }
    header { border-bottom: 1px solid var(--line); background: rgba(255,255,255,.78); backdrop-filter: blur(10px); }
    .nav { min-height: 64px; display: flex; align-items: center; justify-content: space-between; gap: 16px; }
    .brand { display: flex; align-items: center; gap: 10px; font-weight: 700; }
    .mark { display: grid; place-items: center; width: 36px; height: 36px; border-radius: 10px; background: var(--gold); }
    a { color: var(--accent); }
    main { padding: 56px 0; }
    .eyebrow { color: var(--accent); font-weight: 700; text-transform: uppercase; letter-spacing: .08em; font-size: .78rem; }
    h1 { max-width: 720px; margin: 8px 0 12px; font: 700 clamp(2.2rem, 6vw, 4.6rem)/1.02 Georgia, serif; }
    .lead { max-width: 650px; color: var(--muted); font-size: 1.08rem; }
    .grid { display: grid; grid-template-columns: .85fr 1.15fr; gap: 20px; margin-top: 34px; }
    .panel { padding: 22px; background: var(--panel); border: 1px solid var(--line); border-radius: 14px; box-shadow: 0 16px 40px rgba(32, 61, 62, .08); }
    label { display: block; margin-bottom: 8px; font-weight: 700; }
    input[type=file], textarea { width: 100%; border: 1px solid var(--line); border-radius: 9px; background: #fbfdfc; padding: 12px; font: inherit; }
    input[type=file] { padding: 18px 12px; }
    textarea { min-height: 270px; resize: vertical; }
    .preview { width: 100%; aspect-ratio: 16/10; object-fit: contain; display: block; background: var(--soft); border-radius: 10px; margin-top: 16px; }
    .preview[hidden] { display: none; }
    .actions { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 16px; }
    button { border: 0; border-radius: 8px; padding: 11px 16px; font: inherit; font-weight: 700; cursor: pointer; background: var(--accent); color: white; }
    button.secondary { background: var(--soft); color: var(--ink); }
    .status { margin: 14px 0 0; color: var(--muted); min-height: 26px; }
    @media (max-width: 760px) { .grid { grid-template-columns: 1fr; } main { padding: 36px 0; } }
  </style>
</head>
<body>
  <header><div class="wrap nav"><div class="brand"><span class="mark">I</span><span>Imagem para Texto</span></div><a href="/faheeminnovations.online/tools">Voltar às ferramentas</a></div></header>
  <main class="wrap">
    <div class="eyebrow">OCR no navegador</div>
    <h1>Leia texto de fotos, digitalizações e capturas de ecrã.</h1>
    <p class="lead">Envie uma imagem e extraia texto editável diretamente no navegador. A imagem é processada localmente pelo Tesseract.js.</p>
    <section class="grid">
      <div class="panel">
        <label for="image-input">Escolha uma imagem</label>
        <input id="image-input" type="file" accept="image/*">
        <img id="preview" class="preview" alt="Pré-visualização da imagem selecionada" hidden>
        <div class="actions"><button id="extract-btn" type="button">Extrair texto</button><button id="clear-btn" class="secondary" type="button">Limpar</button></div>
        <p id="status" class="status">Pronto</p>
      </div>
      <div class="panel">
        <label for="result">Texto extraído</label>
        <textarea id="result" placeholder="O texto extraído aparecerá aqui..."></textarea>
        <div class="actions"><button id="copy-btn" type="button">Copiar texto</button><button id="download-btn" class="secondary" type="button">Descarregar .txt</button></div>
      </div>
    </section>
  </main>
  <script>
    const input = document.getElementById('image-input');
    const preview = document.getElementById('preview');
    const extract = document.getElementById('extract-btn');
    const result = document.getElementById('result');
    const status = document.getElementById('status');
    let selectedFile = null;
    input.addEventListener('change', () => {
      selectedFile = input.files[0] || null;
      if (!selectedFile) return;
      preview.src = URL.createObjectURL(selectedFile);
      preview.hidden = false;
      status.textContent = 'Imagem pronta';
    });
    extract.addEventListener('click', async () => {
      if (!selectedFile) { status.textContent = 'Escolha uma imagem primeiro'; return; }
      if (!window.Tesseract) { status.textContent = 'A biblioteca OCR não está disponível'; return; }
      extract.disabled = true;
      try {
        const output = await Tesseract.recognize(selectedFile, 'por', {
          logger: message => { if (message.status === 'recognizing text') status.textContent = 'A ler a imagem ' + Math.round(message.progress * 100) + '%'; }
        });
        result.value = output.data.text.trim();
        status.textContent = result.value ? 'Texto extraído' : 'Não foi encontrado texto legível';
      } catch (error) { console.error(error); status.textContent = 'Não foi possível ler esta imagem'; }
      extract.disabled = false;
    });
    document.getElementById('clear-btn').addEventListener('click', () => { input.value = ''; result.value = ''; preview.hidden = true; preview.removeAttribute('src'); selectedFile = null; status.textContent = 'Pronto'; });
    document.getElementById('copy-btn').addEventListener('click', async () => { if (!result.value.trim()) return; await navigator.clipboard.writeText(result.value); status.textContent = 'Texto copiado'; });
    document.getElementById('download-btn').addEventListener('click', () => { if (!result.value.trim()) { status.textContent = 'Não há texto para descarregar'; return; } const url = URL.createObjectURL(new Blob([result.value], { type: 'text/plain;charset=utf-8' })); const link = document.createElement('a'); link.href = url; link.download = 'imagem-texto.txt'; link.click(); URL.revokeObjectURL(url); status.textContent = 'Texto descarregado'; });
  </script>
</body>
</html>
