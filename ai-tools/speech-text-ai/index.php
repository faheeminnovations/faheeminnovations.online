<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#0A0E1A">
<link rel="icon" type="image/svg+xml" href="../favicon.svg">
<title>Voz&amp;Texto | Transcrição de voz em português</title>
<meta name="description" content="Transcreva sua voz em português diretamente no navegador. Edite, copie e baixe seu texto com o Voz&Texto.">
<meta name="robots" content="index, follow">
<meta name="content-language" content="pt-BR">
<meta name="language" content="Portuguese">
<meta name="geo.region" content="BR">
<meta name="geo.country" content="Brazil">
<link rel="canonical" href="https://ai-speech-to-text.faheeminnovations.online/">
<link rel="alternate" hreflang="pt-BR" href="https://ai-speech-to-text.faheeminnovations.online/">
<link rel="alternate" hreflang="x-default" href="https://ai-speech-to-text.faheeminnovations.online/">
<meta property="og:title" content="AI Speech to Text">
<meta property="og:description" content="Convert speech and voice recordings into editable text in your browser.">
<meta property="og:type" content="website">
<meta property="og:locale" content="pt_BR">
<meta property="og:url" content="https://ai-speech-to-text.faheeminnovations.online/">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"Voz e Texto","url":"https://ai-speech-to-text.faheeminnovations.online/","applicationCategory":"BusinessApplication","operatingSystem":"Any","inLanguage":"pt-BR","areaServed":{"@type":"Country","name":"Brazil"},"description":"Converta voz e gravações de áudio em texto editável."}</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,500&family=Public+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
  :root{
    --paper:#F7F3EA;
    --ink:#132A3A;
    --ink-soft:#3C5266;
    --card:#FFFFFF;
    --line:#DCD4C2;
    --marigold:#E0913C;
    --marigold-ink:#7A4310;
    --green:#3E7C6B;
    --green-bg:#E7EFEA;
  }
  :root:not([data-theme="light"]) {
    @media (prefers-color-scheme: dark) {
      --paper:#0F1B24;
      --ink:#F2EEE3;
      --ink-soft:#B9C4CC;
      --card:#152530;
      --line:#28394A;
      --marigold:#E9A153;
      --marigold-ink:#2A1808;
      --green:#79C1AB;
      --green-bg:#1B3630;
    }
  }
  :root[data-theme="dark"] {
    --paper:#0F1B24;
    --ink:#F2EEE3;
    --ink-soft:#B9C4CC;
    --card:#152530;
    --line:#28394A;
    --marigold:#E9A153;
    --marigold-ink:#2A1808;
    --green:#79C1AB;
    --green-bg:#1B3630;
  }

  *{box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    margin:0;
    background:var(--paper);
    color:var(--ink);
    font-family:'Public Sans', -apple-system, sans-serif;
    -webkit-font-smoothing:antialiased;
    overflow-x:hidden;
  }
  h1,h2,h3,.serif{
    font-family:'Fraunces', Georgia, serif;
    font-weight:500;
    letter-spacing:-0.01em;
    margin:0;
  }
  a{color:inherit;}
  img,svg{max-width:100%;display:block;}
  .wrap{
    max-width:1120px;
    margin:0 auto;
    padding:0 28px;
  }
  @media (max-width:640px){ .wrap{padding:0 20px;} }

  /* ---------- Header ---------- */
  header{
    position:sticky; top:0; z-index:50;
    background:color-mix(in srgb, var(--paper) 88%, transparent);
    backdrop-filter:blur(10px);
    border-bottom:1px solid var(--line);
  }
  .nav{
    display:flex; align-items:center; justify-content:space-between;
    padding:18px 0;
  }
  .brand{
    display:flex; align-items:center; gap:10px;
    font-family:'Fraunces', serif; font-size:1.25rem; font-weight:600;
  }
  .brand-mark{width:26px;height:26px;flex:none;}
  .nav-links{
    display:flex; gap:32px; font-size:0.95rem; color:var(--ink-soft);
  }
  .nav-links a{ text-decoration:none; transition:color .15s; }
  .nav-links a:hover{ color:var(--ink); }
  @media (max-width:760px){ .nav-links{display:none;} }
  .btn{
    display:inline-flex; align-items:center; gap:8px;
    padding:12px 22px;
    border-radius:3px;
    font-size:0.95rem; font-weight:600;
    text-decoration:none;
    border:1px solid transparent;
    cursor:pointer;
    font-family:'Public Sans', sans-serif;
  }
  .btn-primary{
    background:var(--marigold); color:var(--marigold-ink);
  }
  .btn-primary:hover{ filter:brightness(1.06); }
  .btn-ghost{
    background:transparent; color:var(--ink); border-color:var(--line);
  }
  .btn-ghost:hover{ border-color:var(--ink-soft); }

  /* ---------- Hero ---------- */
  .hero{
    padding:88px 0 64px;
    display:grid;
    grid-template-columns:1.05fr 0.95fr;
    gap:56px;
    align-items:center;
  }
  @media (max-width:900px){
    .hero{grid-template-columns:1fr; padding:52px 0 40px;}
  }
  .eyebrow{
    font-size:0.85rem;
    color:var(--green);
    font-weight:600;
    margin-bottom:18px;
  }
  .hero h1{
    font-size:clamp(2.4rem, 5vw, 3.6rem);
    line-height:1.06;
    max-width:11ch;
  }
  .hero p.lead{
    margin-top:22px;
    font-size:1.15rem;
    line-height:1.55;
    color:var(--ink-soft);
    max-width:46ch;
  }
  .hero-cta{ display:flex; gap:14px; margin-top:32px; flex-wrap:wrap; }
  .hero-note{
    margin-top:18px; font-size:0.85rem; color:var(--ink-soft);
  }

  /* waveform-to-text visual */
  .demo-card{
    background:var(--card);
    border:1px solid var(--line);
    border-radius:4px;
    padding:28px;
    box-shadow:0 18px 45px rgba(19,42,58,.08);
  }
  .demo-top{
    display:flex; align-items:center; gap:10px;
    font-size:0.82rem; color:var(--ink-soft); margin-bottom:18px;
  }
  .dot{width:8px;height:8px;border-radius:50%;background:var(--green);}
  #wave-svg{ width:100%; height:90px; }
  .wave-bar{ fill:var(--marigold); }
  .transcript{
    margin-top:20px;
    padding-top:20px;
    border-top:1px dashed var(--line);
    font-size:1.02rem;
    line-height:1.65;
    min-height:5.4em;
  }
  .studio-label{font-size:.78rem;text-transform:uppercase;letter-spacing:.08em;color:var(--ink-soft);font-weight:700;}
  .studio-actions{display:flex;gap:10px;flex-wrap:wrap;margin-top:18px;}
  .studio-actions .btn{padding:10px 14px;font-size:.86rem;}
  .btn-recording{background:#c94c43;color:#fff;border-color:#c94c43;}
  .btn-speaking{background:var(--green);color:#fff;border-color:var(--green);}
  .demo-card .transcript[contenteditable="true"]{outline:none;cursor:text;}
  .demo-card .transcript[contenteditable="true"]:focus{box-shadow:inset 0 -2px 0 var(--marigold);}
  .file-input{display:none;}
  .studio-status{margin-top:14px;font-size:.82rem;color:var(--ink-soft);min-height:1.25em;}
  .api-panel{margin-top:20px;padding-top:18px;border-top:1px solid var(--line);}
  .api-panel summary{cursor:pointer;font-size:.86rem;font-weight:600;color:var(--ink-soft);}
  .api-panel label{display:block;margin-top:14px;font-size:.78rem;font-weight:600;color:var(--ink-soft);}
  .api-panel input{width:100%;margin-top:6px;padding:10px 11px;border:1px solid var(--line);border-radius:3px;background:var(--paper);color:var(--ink);font:inherit;font-size:.84rem;}
  .api-panel small{display:block;margin-top:8px;color:var(--ink-soft);line-height:1.45;}
  .transcript .cursor{
    display:inline-block; width:2px; height:1.05em; background:var(--ink);
    vertical-align:middle; margin-left:2px;
    animation:blink 0.9s steps(1) infinite;
  }
  @keyframes blink{ 50%{opacity:0;} }

  /* ---------- Logos strip ---------- */
  .trust{
    padding:34px 0;
    border-top:1px solid var(--line);
    border-bottom:1px solid var(--line);
  }
  .trust-inner{
    display:flex; align-items:center; justify-content:space-between; gap:24px;
    flex-wrap:wrap;
  }
  .trust-label{ font-size:0.85rem; color:var(--ink-soft); white-space:nowrap; }
  .trust-items{ display:flex; gap:36px; flex-wrap:wrap; }
  .trust-items span{
    font-family:'Fraunces', serif; font-size:1.05rem; color:var(--ink-soft); font-style:italic;
  }

  /* ---------- Steps (real sequence) ---------- */
  .section{ padding:88px 0; }
  .section-head{ max-width:56ch; margin-bottom:52px; }
  .section-head h2{ font-size:clamp(1.9rem,3.4vw,2.5rem); line-height:1.15; }
  .section-head p{ margin-top:14px; color:var(--ink-soft); font-size:1.05rem; line-height:1.6; }

  .steps{
    display:grid; grid-template-columns:repeat(3,1fr); gap:0;
    border-top:1px solid var(--line);
  }
  @media (max-width:800px){ .steps{grid-template-columns:1fr;} }
  .step{
    padding:32px 28px 32px 0;
    border-right:1px solid var(--line);
  }
  .step:last-child{ border-right:none; }
  @media (max-width:800px){
    .step{ border-right:none; border-bottom:1px solid var(--line); padding:28px 0; }
    .step:last-child{ border-bottom:none; }
  }
  .step-num{
    font-family:'Fraunces', serif; font-style:italic; font-size:1.05rem; color:var(--green);
  }
  .step h3{ margin-top:14px; font-size:1.3rem; font-weight:500; }
  .step p{ margin-top:10px; color:var(--ink-soft); line-height:1.6; font-size:0.98rem; }

  /* ---------- Features ---------- */
  .features{
    display:grid; grid-template-columns:repeat(2,1fr); gap:0;
    border-top:1px solid var(--line);
    border-left:1px solid var(--line);
  }
  @media (max-width:700px){ .features{grid-template-columns:1fr;} }
  .feature{
    padding:32px 30px;
    border-right:1px solid var(--line);
    border-bottom:1px solid var(--line);
  }
  .feature h3{ font-size:1.12rem; font-weight:600; font-family:'Public Sans', sans-serif; }
  .feature p{ margin-top:10px; color:var(--ink-soft); font-size:0.95rem; line-height:1.6; }
  .feature .icon{ width:24px; height:24px; color:var(--marigold); margin-bottom:14px; }

  /* ---------- Use cases ---------- */
  .cases{
    display:flex; gap:20px; overflow-x:auto; padding-bottom:8px;
    scrollbar-width:thin;
  }
  .case{
    flex:0 0 260px;
    background:var(--card);
    border:1px solid var(--line);
    border-radius:4px;
    padding:24px;
  }
  .case .tag{
    display:inline-block; font-size:0.78rem; font-weight:600;
    color:var(--green); background:var(--green-bg);
    padding:4px 10px; border-radius:3px; margin-bottom:14px;
  }
  .case h3{ font-family:'Fraunces', serif; font-size:1.15rem; font-weight:500; }
  .case p{ margin-top:8px; font-size:0.92rem; color:var(--ink-soft); line-height:1.55; }

  /* ---------- Quote ---------- */
  .quote{
    padding:70px 0;
    border-top:1px solid var(--line);
    border-bottom:1px solid var(--line);
  }
  .quote blockquote{
    font-family:'Fraunces', serif; font-style:italic; font-weight:500;
    font-size:clamp(1.4rem,3vw,2rem); line-height:1.4; max-width:26ch;
    margin:0;
  }
  .quote cite{ display:block; margin-top:24px; font-style:normal; font-size:0.95rem; color:var(--ink-soft); }

  /* ---------- Pricing ---------- */
  .pricing{
    display:grid; grid-template-columns:repeat(3,1fr); gap:20px;
  }
  @media (max-width:800px){ .pricing{grid-template-columns:1fr;} }
  .plan{
    background:var(--card);
    border:1px solid var(--line);
    border-radius:4px;
    padding:30px;
    display:flex; flex-direction:column;
  }
  .plan.featured{ border-color:var(--marigold); }
  .plan-name{ font-size:0.95rem; font-weight:600; color:var(--ink-soft); }
  .plan-price{ margin-top:12px; font-family:'Fraunces', serif; font-size:2.1rem; }
  .plan-price small{ font-size:1rem; font-weight:400; color:var(--ink-soft); font-family:'Public Sans', sans-serif; }
  .plan ul{ list-style:none; padding:0; margin:22px 0 26px; flex:1; }
  .plan li{
    font-size:0.92rem; color:var(--ink-soft); padding:8px 0;
    border-top:1px solid var(--line);
  }
  .plan li:first-child{ border-top:none; }
  .free-plan{
    max-width:420px;
    border-color:var(--marigold);
    border-width:1.5px;
  }

  /* ---------- CTA ---------- */
  .cta-band{
    background:var(--ink); color:var(--paper);
    border-radius:6px;
    padding:56px 40px;
    display:flex; align-items:center; justify-content:space-between; gap:30px;
    flex-wrap:wrap;
  }
  :root[data-theme="dark"] .cta-band, .cta-band{ }
  .cta-band h2{ color:var(--paper); font-size:clamp(1.6rem,3vw,2.1rem); max-width:16ch; }
  .cta-band .btn-primary{}

  /* ---------- Footer ---------- */
  footer{ border-top:1px solid var(--line); padding:44px 0; }
  .foot-inner{
    display:flex; justify-content:space-between; align-items:center; gap:20px; flex-wrap:wrap;
    font-size:0.85rem; color:var(--ink-soft);
  }
  .foot-links{ display:flex; gap:22px; }
  .foot-links a{ text-decoration:none; }
  .foot-links a:hover{ color:var(--ink); }
</style>
</head>
<body>

<header>
  <div class="wrap nav">
    <div class="brand">
      <svg class="brand-mark" viewBox="0 0 26 26" fill="none">
        <rect width="26" height="26" rx="5" fill="#E0913C"/>
        <path d="M8 9v8M12 6v14M16 9v8M20 11v4" stroke="#132A3A" stroke-width="2" stroke-linecap="round"/>
      </svg>
      Voz&amp;Texto
    </div>
    <nav class="nav-links">
      <a href="como-funciona">Como funciona</a>
      <a href="recursos">Recursos</a>
      <a href="casos">Para quem é</a>
      <a href="precos">Preços</a>
    </nav>
    <a class="btn btn-primary" href="precos">Começar grátis</a>
  </div>
</header>

<main>
  <section class="hero wrap">
    <div>
      <div class="eyebrow">Transcrição por IA, feita para o português</div>
      <h1>Transforme voz em texto sem perder o jeito de falar</h1>
      <p class="lead">O Voz&amp;Texto transforma sua fala em texto editável diretamente no navegador, com uma experiência simples para entrevistas, reuniões, aulas e conteúdo.</p>
      <div class="hero-cta">
        <a class="btn btn-primary" href="precos">Começar grátis</a>
        <a class="btn btn-ghost" href="como-funciona">Ver como funciona</a>
      </div>
      <div class="hero-note">Gratuito no navegador · sem cadastro · seus textos ficam com você</div>
    </div>

    <div class="demo-card">
      <div class="demo-top">
        <span class="dot"></span>
        <span id="studio-file">estudio_voz.mp3 · pronto para usar</span>
      </div>
      <svg id="wave-svg" viewBox="0 0 400 90" preserveAspectRatio="none"></svg>
      <div class="studio-label">Seu texto aparece aqui</div>
      <div class="transcript" id="transcript" contenteditable="true" spellcheck="true" aria-label="Editor de transcrição"></div>
      <div class="studio-actions">
        <button class="btn btn-primary" id="record-btn" type="button">● Gravar voz</button>
        <label class="btn btn-ghost" for="audio-file">Escolher áudio</label>
        <input class="file-input" id="audio-file" type="file" accept="audio/*">
        <label class="btn btn-ghost" for="text-file">Enviar texto</label>
        <input class="file-input" id="text-file" type="file" accept=".txt,.md,text/plain,text/markdown">
        <button class="btn btn-ghost" id="copy-btn" type="button">Copiar texto</button>
        <button class="btn btn-ghost" id="download-btn" type="button">Baixar transcrição</button>
        <button class="btn btn-ghost" id="download-audio-btn" type="button" disabled>Baixar áudio</button>
        <button class="btn btn-ghost" id="speak-btn" type="button">Falar texto</button>
      </div>
      <label for="speech-language">Idioma</label>
      <select id="speech-language" class="btn btn-ghost" style="color:inherit;background:transparent;">
        <option value="pt-BR">Portuguese</option><option value="en-US">English</option><option value="es-ES">Spanish</option><option value="fr-FR">French</option><option value="de-DE">German</option><option value="it-IT">Italian</option><option value="ru-RU">Russian</option><option value="ja-JP">Japanese</option><option value="ko-KR">Korean</option><option value="tr-TR">Turkish</option>
      </select>
      <div class="studio-status" id="studio-status" role="status" aria-live="polite">Microfone pronto. Clique em “Gravar voz” para começar.</div>
      <details class="api-panel">
        <summary>Conectar uma API de transcrição própria</summary>
        <label for="api-url">Endpoint HTTPS</label>
        <input id="api-url" type="url" placeholder="https://seu-dominio.com/api/transcribe">
        <small>O áudio selecionado será enviado como campo <strong>audio</strong>. A resposta esperada é JSON com <strong>text</strong>. A chave fica no seu servidor, nunca no navegador.</small>
      </details>
    </div>
  </section>

  <div class="trust wrap">
    <div class="trust-inner">
      <span class="trust-label">Feito para transformar fala em texto em</span>
      <div class="trust-items">
        <span>Entrevistas</span>
        <span>Reuniões</span>
        <span>Aulas</span>
        <span>Podcasts</span>
      </div>
    </div>
  </div>

  <section class="section wrap" id="como-funciona">
    <div class="section-head">
      <h2>Do áudio ao texto pronto em três passos</h2>
      <p>Nada de instalar programa ou ajustar configuração. Envie, espere e revise.</p>
    </div>
    <div class="steps">
      <div class="step">
        <div class="step-num">Um</div>
        <h3>Envie o áudio</h3>
        <p>Arraste uma gravação, cole um link ou grave direto pelo navegador. Aceita entrevistas, aulas, reuniões e memorandos de voz.</p>
      </div>
      <div class="step">
        <div class="step-num">Dois</div>
        <h3>A IA transcreve</h3>
        <p>O reconhecimento de voz do navegador transforma sua fala em texto enquanto você conversa. Para arquivos, conecte seu próprio endpoint seguro.</p>
      </div>
      <div class="step">
        <div class="step-num">Três</div>
        <h3>Revise e exporte</h3>
        <p>Revise o resultado no editor, copie para onde precisar ou baixe um arquivo de texto simples em um clique.</p>
      </div>
    </div>
  </section>

  <section class="section wrap" id="recursos" style="padding-top:0;">
    <div class="section-head">
      <h2>Pensado para quem trabalha com a própria voz</h2>
      <p>Cada recurso resolve um problema real de quem transcreve português no dia a dia.</p>
    </div>
    <div class="features">
      <div class="feature">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 3v12M8 8l4-5 4 5M5 14a7 7 0 0014 0" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <h3>Sotaques e regionalismos</h3>
        <p>Escolha o idioma português do Brasil no navegador e revise o resultado no editor antes de publicar.</p>
      </div>
      <div class="feature">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="8" cy="8" r="3"/><circle cx="16" cy="16" r="3"/><path d="M8 11v2a3 3 0 003 3h2" stroke-linecap="round"/></svg>
        <h3>Identificação de falantes</h3>
        <p>A estrutura foi pensada para facilitar a revisão de entrevistas e reuniões. A separação de falantes pode ser adicionada pela sua API.</p>
      </div>
      <div class="feature">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 6h16M4 12h10M4 18h7" stroke-linecap="round"/></svg>
        <h3>Editor sincronizado</h3>
        <p>Clique em qualquer palavra do texto e o áudio pula direto para aquele trecho, para revisar com precisão.</p>
      </div>
      <div class="feature">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 4v10m0 0l-4-4m4 4l4-4M5 18h14" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <h3>Exportação flexível</h3>
        <p>Copie o resultado ou baixe um arquivo .txt leve, pronto para editar e publicar.</p>
      </div>
    </div>
  </section>

  <section class="section wrap" id="casos" style="padding-top:0;">
    <div class="section-head">
      <h2>Para quem transforma fala em conteúdo</h2>
    </div>
    <div class="cases">
      <div class="case">
        <span class="tag">Jornalismo</span>
        <h3>Entrevistas e apurações</h3>
        <p>Transcreva a gravação da coletiva antes de fechar a pauta do dia.</p>
      </div>
      <div class="case">
        <span class="tag">Podcasts</span>
        <h3>Roteiro e legendas</h3>
        <p>Gere a versão em texto do episódio para SEO e legendas em vídeo.</p>
      </div>
      <div class="case">
        <span class="tag">Educação</span>
        <h3>Aulas e palestras</h3>
        <p>Estudantes revisam a matéria lendo, sem depender de reassistir a gravação inteira.</p>
      </div>
      <div class="case">
        <span class="tag">Empresas</span>
        <h3>Atas de reunião</h3>
        <p>Cada decisão registrada em texto, com quem falou o quê.</p>
      </div>
    </div>
  </section>

  <section class="quote wrap">
    <blockquote>
    "Uma forma simples de tirar as ideias da cabeça e colocar tudo em texto, sem interromper o raciocínio."
    <cite>— Experimente o editor de voz no navegador</cite>
    </blockquote>
  </section>

  <section class="section wrap" id="precos">
    <div class="section-head" style="margin-bottom:36px;">
      <h2>100% gratuito, sem letras miúdas</h2>
      <p>Comece sem cadastro e use o reconhecimento de voz disponível no seu navegador.</p>
    </div>
    <div class="plan free-plan">
      <div class="plan-name">Voz&amp;Texto</div>
      <div class="plan-price">Grátis<small> para sempre</small></div>
      <ul>
        <li>Reconhecimento de voz no navegador</li>
        <li>Editor de texto para revisão</li>
        <li>Copiar e baixar em formato .txt</li>
        <li>Suporte para sua própria API de áudio</li>
      </ul>
      <a class="btn btn-primary" href="#">Começar agora, grátis</a>
    </div>
  </section>

  <section class="wrap" style="padding-bottom:88px;">
    <div class="cta-band">
      <h2>Sua próxima gravação já pode virar texto</h2>
      <a class="btn btn-primary" href="#precos">Começar grátis agora</a>
    </div>
  </section>
</main>

<footer>
  <div class="wrap foot-inner">
    <span>© 2026 Voz&amp;Texto. Feito para quem fala português.</span>
    <div class="foot-links">
      <a href="#">Privacidade</a>
      <a href="#">Termos</a>
      <a href="#">Contato</a>
    </div>
  </div>
</footer>

<script>
(function(){
  var svg = document.getElementById('wave-svg');
  var n = 60, barW = 400/n;
  var bars = [];
  for(var i=0;i<n;i++){
    var r = document.createElementNS('http://www.w3.org/2000/svg','rect');
    r.setAttribute('class','wave-bar');
    r.setAttribute('x', i*barW+1);
    r.setAttribute('width', Math.max(barW-2,1));
    r.setAttribute('rx', 1.5);
    svg.appendChild(r);
    bars.push(r);
  }
  var t = 0;
  function drawWave(){
    t += 0.09;
    for(var i=0;i<n;i++){
      var h = 8 + Math.abs(Math.sin(i*0.35 + t) * Math.cos(i*0.12 + t*0.6)) * 60;
      bars[i].setAttribute('height', h);
      bars[i].setAttribute('y', (90-h)/2);
    }
  }
  var waveInterval = setInterval(drawWave, 60);
  drawWave();

  var el = document.getElementById('transcript');
  var status = document.getElementById('studio-status');
  var recordButton = document.getElementById('record-btn');
  var fileInput = document.getElementById('audio-file');
  var textFileInput = document.getElementById('text-file');
  var fileLabel = document.getElementById('studio-file');
  var audioDownloadBtn = document.getElementById('download-audio-btn');
  var sample = "Então, a gente percebeu que o principal gargalo não era a apuração em si, era o tempo perdido reescutando a gravação. Com a transcrição pronta, sobra tempo pra escrever a matéria com calma.";
  el.textContent = sample;

  var audioChunks = [];
  var mediaRecorder = null;
  var micStream = null;
  var audioBlob = null;

  function setStatus(message){ status.textContent = message; }
  function setAudioDownloadEnabled(enabled){
    audioDownloadBtn.disabled = !enabled;
    audioDownloadBtn.style.opacity = enabled ? '1' : '0.55';
  }
  function downloadText(){
    var text = el.innerText.trim();
    if(!text){ setStatus('Não há texto para baixar ainda.'); return; }
    var blob = new Blob([text], {type:'text/plain;charset=utf-8'});
    var link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = 'transcricao-voz-e-texto.txt';
    document.body.appendChild(link);
    link.click();
    link.remove();
    URL.revokeObjectURL(link.href);
    setStatus('Transcrição baixada.');
  }
  function downloadAudio(){
    if(!audioBlob){ setStatus('Ainda não há áudio gravado para baixar.'); return; }
    var extension = 'webm';
    if(audioBlob.type && audioBlob.type.indexOf('mp4') !== -1) extension = 'mp4';
    else if(audioBlob.type && audioBlob.type.indexOf('mpeg') !== -1) extension = 'mp3';
    var url = URL.createObjectURL(audioBlob);
    var link = document.createElement('a');
    link.href = url;
    link.download = 'voz-gravada.' + extension;
    document.body.appendChild(link);
    link.click();
    link.remove();
    URL.revokeObjectURL(url);
    setStatus('Áudio baixado.');
  }

  document.getElementById('copy-btn').addEventListener('click', function(){
    var text = el.innerText.trim();
    if(!text){ setStatus('Não há texto para copiar ainda.'); return; }
    navigator.clipboard.writeText(text).then(function(){ setStatus('Texto copiado para a área de transferência.'); });
  });
  document.getElementById('download-btn').addEventListener('click', downloadText);
  audioDownloadBtn.addEventListener('click', downloadAudio);
  setAudioDownloadEnabled(false);

  textFileInput.addEventListener('change', function(){
    var file = textFileInput.files[0];
    if(!file) return;
    var reader = new FileReader();
    reader.onload = function(event){
      el.textContent = event.target.result;
      fileLabel.textContent = file.name + ' · texto carregado';
      setStatus('Texto carregado. Clique em “Falar texto” para ouvir.');
    };
    reader.onerror = function(){ setStatus('Não foi possível ler esse arquivo de texto.'); };
    reader.readAsText(file, 'UTF-8');
  });

  var speakButton = document.getElementById('speak-btn');
  var speechLanguage = document.getElementById('speech-language');
  var speaking = false;
  speakButton.addEventListener('click', function(){
    if(!('speechSynthesis' in window)){
      setStatus('Seu navegador não oferece leitura de texto. Use Chrome, Edge ou Safari.');
      return;
    }
    if(speaking){
      window.speechSynthesis.cancel();
      return;
    }
    var text = el.innerText.trim();
    if(!text){ setStatus('Digite ou transcreva um texto antes de ouvir.'); return; }
    var utterance = new SpeechSynthesisUtterance(text);
    utterance.lang = speechLanguage.value;
    utterance.rate = 1;
    utterance.pitch = 1;
    utterance.onstart = function(){
      speaking = true;
      speakButton.textContent = 'Parar voz';
      speakButton.classList.add('btn-speaking');
      setStatus('Lendo seu texto em voz alta...');
    };
    utterance.onend = function(){
      speaking = false;
      speakButton.textContent = 'Falar texto';
      speakButton.classList.remove('btn-speaking');
      setStatus('Leitura concluída.');
    };
    utterance.onerror = function(){
      speaking = false;
      speakButton.textContent = 'Falar texto';
      speakButton.classList.remove('btn-speaking');
      setStatus('Não foi possível reproduzir o texto.');
    };
    window.speechSynthesis.speak(utterance);
  });

  var SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
  var recognition;
  var listening = false;

  function startMicrophoneRecording(){
    if(!('MediaRecorder' in window) || !navigator.mediaDevices || !navigator.mediaDevices.getUserMedia){
      setStatus('Seu navegador não permite gravar áudio. Use Chrome, Edge ou Safari.');
      return;
    }

    navigator.mediaDevices.getUserMedia({audio: true}).then(function(stream){
      micStream = stream;
      audioChunks = [];
      var mimeType = MediaRecorder.isTypeSupported('audio/webm;codecs=opus') ? 'audio/webm;codecs=opus' : 'audio/webm';
      mediaRecorder = new MediaRecorder(stream, { mimeType: mimeType });

      mediaRecorder.ondataavailable = function(event){
        if(event.data && event.data.size > 0){ audioChunks.push(event.data); }
      };

      mediaRecorder.onstop = function(){
        audioBlob = new Blob(audioChunks, {type: mimeType});
        setAudioDownloadEnabled(true);
        fileLabel.textContent = 'gravação_voz.' + (mimeType.indexOf('mp4') !== -1 ? 'mp4' : 'webm') + ' · pronta para baixar';
        if(micStream){ micStream.getTracks().forEach(function(track){ track.stop(); }); micStream = null; }
      };

      mediaRecorder.start();
      setStatus('Gravando áudio e reconhecendo fala...');
      if(SpeechRecognition && recognition){
        try { recognition.start(); } catch (error) { /* ignore duplicate start */ }
      }
    }).catch(function(){
      setStatus('Não foi possível acessar o microfone. Verifique a permissão do navegador.');
    });
  }

  function stopMicrophoneRecording(){
    if(mediaRecorder && mediaRecorder.state !== 'inactive') {
      mediaRecorder.stop();
    }
    if(SpeechRecognition && recognition && listening){
      recognition.stop();
    }
    if(micStream){
      micStream.getTracks().forEach(function(track){ track.stop(); });
      micStream = null;
    }
  }

  if(SpeechRecognition){
    recognition = new SpeechRecognition();
    recognition.lang = speechLanguage.value;
    recognition.continuous = true;
    recognition.interimResults = true;
    recognition.onstart = function(){
      listening = true;
      recordButton.textContent = '■ Parar gravação';
      recordButton.classList.add('btn-recording');
      setStatus('Ouvindo seu microfone...');
    };
    recognition.onresult = function(event){
      var finalText = '';
      var interimText = '';
      for(var i=event.resultIndex;i<event.results.length;i++){
        if(event.results[i].isFinal) finalText += event.results[i][0].transcript + ' ';
        else interimText += event.results[i][0].transcript;
      }
      if(finalText){
        if(el.textContent === sample) el.textContent = '';
        el.textContent += finalText;
      }
      if(interimText) setStatus('Ouvindo: ' + interimText);
    };
    recognition.onerror = function(event){ setStatus('Não foi possível usar o microfone: ' + event.error + '.'); };
    recognition.onend = function(){
      listening = false;
      recordButton.textContent = '● Gravar voz';
      recordButton.classList.remove('btn-recording');
      if(status.textContent.indexOf('Não foi possível') !== 0 && !mediaRecorder) setStatus('Gravação concluída. Você pode revisar o texto.');
    };
  }

  recordButton.addEventListener('click', function(){
    if(listening || (mediaRecorder && mediaRecorder.state !== 'inactive')){
      stopMicrophoneRecording();
      if(!listening && mediaRecorder && mediaRecorder.state === 'inactive') {
        setStatus('Gravação concluída. Você pode baixar o áudio ou revisar o texto.');
      }
      return;
    }
    if(SpeechRecognition){
      startMicrophoneRecording();
    } else {
      startMicrophoneRecording();
      setStatus('Seu navegador não oferece transcrição por voz, mas a gravação de áudio está disponível.');
    }
  });

  fileInput.addEventListener('change', function(){
    var file = fileInput.files[0];
    if(!file) return;
    fileLabel.textContent = file.name + ' · selecionado';
    var apiUrl = document.getElementById('api-url').value.trim();
    if(!apiUrl){
      setStatus('Áudio selecionado. Adicione um endpoint próprio para transcrever arquivos automaticamente.');
      return;
    }
    setStatus('Enviando áudio para sua API...');
    var data = new FormData();
    data.append('audio', file);
    fetch(apiUrl, {method:'POST', body:data})
      .then(function(response){ if(!response.ok) throw new Error('HTTP ' + response.status); return response.json(); })
      .then(function(result){
        if(typeof result.text !== 'string') throw new Error('A resposta precisa conter o campo text.');
        el.textContent = result.text;
        setStatus('Transcrição concluída pela sua API.');
      })
      .catch(function(error){ setStatus('A API não respondeu corretamente: ' + error.message); });
  });

  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    clearInterval(waveInterval);
    for(var j=0;j<n;j++){ bars[j].setAttribute('height', 30); bars[j].setAttribute('y', 30); }
  }
  speechLanguage.addEventListener('change', function(){
    if(recognition) recognition.lang = speechLanguage.value;
  });

  var requestedSection = new URLSearchParams(window.location.search).get('section');
  if (requestedSection && /^(como-funciona|recursos|casos|precos)$/.test(requestedSection)) {
    var section = document.getElementById(requestedSection);
    if (section) section.scrollIntoView({block: 'start'});
  }
})();
</script>

</body>
</html>
