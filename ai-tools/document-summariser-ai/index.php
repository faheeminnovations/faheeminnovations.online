<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#0A0E1A" />
  <link rel="icon" type="image/svg+xml" href="../favicon.svg" />
  <title>Resumidor de Documentos com IA | PDF e Imagens</title>
  <meta name="description" content="Resuma PDFs, imagens e documentos colados com uma ferramenta prática de IA no navegador.">
  <meta name="robots" content="index, follow">
  <meta name="content-language" content="pt-BR">
  <meta name="language" content="Portuguese">
  <meta name="geo.region" content="BR">
  <meta name="geo.country" content="Brazil">
  <link rel="canonical" href="https://ai-document-summariser.faheeminnovations.online/">
  <link rel="alternate" hreflang="pt-BR" href="https://ai-document-summariser.faheeminnovations.online/">
  <link rel="alternate" hreflang="x-default" href="https://ai-document-summariser.faheeminnovations.online/">
  <meta property="og:title" content="Document Summariser AI">
  <meta property="og:description" content="Get key points from PDFs, images, and long documents in seconds.">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:url" content="https://ai-document-summariser.faheeminnovations.online/">
  <script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"Resumidor de Documentos com IA","url":"https://ai-document-summariser.faheeminnovations.online/","applicationCategory":"BusinessApplication","operatingSystem":"Any","inLanguage":"pt-BR","areaServed":{"@type":"Country","name":"Brazil"},"description":"Resuma PDFs, imagens e documentos no navegador."}</script>
  <style>
    :root {
      --bg: #f5f7fb;
      --panel: #ffffff;
      --ink: #172033;
      --muted: #55627a;
      --line: #dfe7f3;
      --accent: #e0913c;
      --accent-dark: #cb7d22;
      --accent-soft: #fff1e4;
      --success: #1b8f5a;
      --shadow: 0 20px 45px rgba(24, 38, 64, 0.12);
    }
    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(180deg, #edf2fa 0%, #f7fafc 100%);
      color: var(--ink);
    }
    .wrap {
      width: min(1180px, calc(100% - 32px));
      margin: 0 auto;
    }
    .topbar {
      padding: 18px 0 10px;
      background: rgba(255,255,255,0.7);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(148,163,184,0.22);
      position: sticky;
      top: 0;
      z-index: 10;
    }
    .brand-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 18px;
    }
    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 700;
      font-size: 1.15rem;
    }
    .brand-mark {
      width: 36px;
      height: 36px;
      border-radius: 10px;
      background: linear-gradient(135deg, #e0913c, #f7ba73);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: #11243f;
      font-weight: 800;
    }
    .nav a {
      color: var(--muted);
      text-decoration: none;
      margin-left: 14px;
      font-size: 0.96rem;
    }
    .hero {
      padding: 44px 0 20px;
    }
    .hero-grid {
      display: grid;
      grid-template-columns: 1.2fr 1fr;
      gap: 28px;
      align-items: start;
    }
    .eyebrow {
      display: inline-block;
      background: var(--accent-soft);
      color: var(--accent-dark);
      border: 1px solid #f3d4a7;
      padding: 8px 12px;
      border-radius: 999px;
      font-size: 0.78rem;
      letter-spacing: 0.04em;
      font-weight: 700;
      text-transform: uppercase;
    }
    h1 {
      font-size: clamp(2.2rem, 5vw, 4rem);
      line-height: 1.05;
      margin: 18px 0 14px;
    }
    .lead {
      font-size: 1.08rem;
      line-height: 1.7;
      color: var(--muted);
      max-width: 620px;
    }
    .cta-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 24px;
    }
    .btn {
      border: 1px solid var(--line);
      border-radius: 12px;
      padding: 12px 18px;
      cursor: pointer;
      font-size: 0.96rem;
      font-weight: 700;
      transition: 0.2s ease;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: #fff;
      color: var(--ink);
    }
    .btn.primary {
      background: linear-gradient(135deg, var(--accent), #f3af5f);
      border-color: transparent;
      color: #fff;
      box-shadow: 0 12px 22px rgba(224, 145, 60, 0.28);
    }
    .btn.primary:hover { background: linear-gradient(135deg, var(--accent-dark), #e9a151); }
    .btn.secondary:hover { background: #f7f9fb; }
    .stats {
      display: grid;
      grid-template-columns: repeat(3, minmax(120px, 1fr));
      gap: 12px;
      margin-top: 24px;
    }
    .stat {
      background: rgba(255,255,255,0.7);
      border: 1px solid var(--line);
      border-radius: 16px;
      padding: 14px 16px;
    }
    .stat strong {
      display: block;
      font-size: 1.5rem;
      margin-top: 6px;
    }
    .stat span {
      color: var(--muted);
      font-size: 0.82rem;
      text-transform: uppercase;
      letter-spacing: 0.06em;
    }
    .panel {
      background: var(--panel);
      border: 1px solid var(--line);
      border-radius: 24px;
      box-shadow: var(--shadow);
      padding: 18px;
    }
    .panel-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      margin-bottom: 12px;
      color: var(--muted);
      font-size: 0.9rem;
    }
    textarea {
      width: 100%;
      min-height: 330px;
      resize: vertical;
      border: 1px solid var(--line);
      border-radius: 18px;
      padding: 18px 16px;
      font-size: 1rem;
      line-height: 1.7;
      font-family: Arial, sans-serif;
      color: var(--ink);
      background: #fbfcff;
    }
    textarea:focus {
      outline: 2px solid rgba(224,145,60,0.22);
      border-color: rgba(224,145,60,0.5);
    }
    .tools-row {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 16px;
    }
    .summary-box {
      margin-top: 26px;
      border: 1px solid var(--line);
      border-radius: 18px;
      background: #fbfcff;
      padding: 18px 16px;
    }
    .summary-box h3 {
      margin: 0 0 12px;
      font-size: 1.05rem;
    }
    .summary-output {
      color: var(--ink);
      line-height: 1.8;
      white-space: pre-wrap;
      font-size: 1rem;
    }
    .badge {
      background: #eef8f3;
      color: var(--success);
      border: 1px solid #cfeee0;
      border-radius: 999px;
      padding: 6px 10px;
      font-size: 0.78rem;
      font-weight: 700;
    }
    .section {
      padding: 40px 0 20px;
    }
    .features {
      display: grid;
      grid-template-columns: repeat(3, minmax(220px, 1fr));
      gap: 18px;
      margin-top: 18px;
    }
    .feature {
      background: rgba(255,255,255,0.8);
      border: 1px solid var(--line);
      border-radius: 18px;
      padding: 18px;
    }
    .feature h4 { margin: 12px 0 8px; }
    .feature p { margin: 0; color: var(--muted); line-height: 1.65; }
    .icon {
      width: 42px;
      height: 42px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 12px;
      background: var(--accent-soft);
      color: var(--accent-dark);
      font-weight: 800;
    }
    @media (max-width: 860px) {
      .hero-grid {
        grid-template-columns: 1fr;
      }
      .features {
        grid-template-columns: 1fr;
      }
      .brand-row { flex-wrap: wrap; }
    }
  </style>
</head>
<body>
  <header class="topbar">
    <div class="wrap brand-row">
      <div class="brand">
        <div class="brand-mark">S</div>
        <span>Resumidor de Documentos com IA</span>
      </div>
      <nav class="nav">
        <a href="/faheeminnovations.online/tools">Voltar às ferramentas</a>
      </nav>
    </div>
  </header>

  <main class="wrap hero">
    <section class="hero-grid">
      <div>
        <div class="eyebrow">Resumo com IA</div>
        <h1>Transforme documentos longos em ideias curtas e claras.</h1>
        <p class="lead">Cole notas, artigos, relatórios ou reuniões e obtenha uma versão concisa em segundos. Esta ferramenta funciona diretamente no navegador.</p>

        <div class="cta-row">
          <button class="btn primary" id="summarise-btn" type="button">Resumir texto</button>
          <button class="btn secondary" id="sample-btn" type="button">Carregar exemplo</button>
          <button class="btn secondary" id="clear-btn" type="button">Limpar</button>
          <label class="btn secondary" for="file-input" style="cursor:pointer;">Enviar PDF / imagem</label>
          <input id="file-input" type="file" accept="application/pdf,image/*" style="display:none;" />
        </div>

        <div class="stats">
          <div class="stat">
            <span>Palavras</span>
            <strong id="word-count">0</strong>
          </div>
          <div class="stat">
            <span>Frases</span>
            <strong id="sentence-count">0</strong>
          </div>
          <div class="stat">
            <span>Resumo</span>
            <strong id="summary-length">0</strong>
          </div>
        </div>
      </div>

      <div class="panel">
        <div class="panel-header">
          <span>Documento de origem</span>
          <span class="badge" id="status-badge">Pronto</span>
        </div>
        <textarea id="input-text" placeholder="Cole aqui um documento, notas ou artigo longo...">A equipa está a planear um novo fluxo de IA para melhorar o apoio ao cliente e reduzir o tempo de resposta. A iniciativa inclui melhor encaminhamento, resumo automático de emails e uma base de conhecimento partilhada. Os primeiros testes mostram respostas mais rápidas e menos perguntas repetitivas.</textarea>
        <div class="tools-row">
          <button class="btn secondary" id="copy-btn" type="button">Copiar resumo</button>
          <button class="btn secondary" id="download-btn" type="button">Descarregar .txt</button>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="summary-box">
        <h3>Resultado do resumo</h3>
        <div id="summary-output" class="summary-output">O resumo gerado aparecerá aqui.</div>
      </div>
    </section>

    <section class="section">
      <div class="features">
        <div class="feature">
          <div class="icon">1</div>
          <h4>Revisão rápida</h4>
          <p>Obtenha a ideia principal e os pontos-chave sem ler cada frase.</p>
        </div>
        <div class="feature">
          <div class="icon">2</div>
          <h4>Resultado claro</h4>
          <p>Os resumos são organizados nos pontos e decisões mais importantes.</p>
        </div>
        <div class="feature">
          <div class="icon">3</div>
          <h4>Pronto para partilhar</h4>
          <p>Copie ou descarregue o resultado para emails, notas, relatórios ou reuniões.</p>
        </div>
      </div>
    </section>
  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tesseract.js@5/dist/tesseract.min.js"></script>
  <script>
    if (window.pdfjsLib) {
      window.pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';
    }

    (function () {
      const input = document.getElementById('input-text');
      const summaryOutput = document.getElementById('summary-output');
      const summaryBtn = document.getElementById('summarise-btn');
      const sampleBtn = document.getElementById('sample-btn');
      const clearBtn = document.getElementById('clear-btn');
      const copyBtn = document.getElementById('copy-btn');
      const downloadBtn = document.getElementById('download-btn');
      const fileInput = document.getElementById('file-input');
      const wordCount = document.getElementById('word-count');
      const sentenceCount = document.getElementById('sentence-count');
      const summaryLength = document.getElementById('summary-length');
      const statusBadge = document.getElementById('status-badge');

      const sampleText = `The business is expanding its AI workflow to improve customer support, reduce response delays, and make knowledge sharing easier across teams. The initiative includes better ticket routing, automatic summaries for incoming messages, and a central knowledge base for staff. Early tests show improved response speed, fewer repetitive questions, and more consistent answers. Leaders also want stronger quality assurance for high-risk cases, especially where customer trust matters most. The next phase involves comparing tools by speed, cost, and accuracy before scaling the system more widely. Overall, the project aims to make service faster without reducing clarity, reliability, or accountability.`;

      const stopWords = new Set([
        'the','a','an','and','or','but','if','then','else','for','with','without','from','into','out','on','in','at','to','of','is','are','was','were','be','been','being','as','by','it','its','this','that','these','those','we','you','your','they','them','their','he','she','his','her','i','me','my','our','us','do','does','did','not','no','yes','can','could','should','would','will','may','might','have','has','had','about','after','before','over','under','through','between','during','such','more','most','very','also','just','because','so','than','too','into','up','down','again','where','when','what','which','who','how','why','any','each','every','few','many','much','some','all','most','other','same','only','new','next','first','last','work','team','project','business','company','tool','tools','system','process','phase','result','results','using','use','used'
      ]);

      function updateStats(text) {
        const words = text.trim() ? text.trim().split(/\s+/).filter(Boolean).length : 0;
        const sentences = text.split(/[.!?]+/).filter(s => s.trim().length > 0).length;
        wordCount.textContent = words;
        sentenceCount.textContent = sentences;
      }

      function normaliseText(text) {
        return text.replace(/\s+/g, ' ').trim();
      }

      function getKeywordScores(text) {
        const words = text.toLowerCase().replace(/[^a-z0-9\s]/g, ' ').split(/\s+/).filter(Boolean);
        const freq = {};
        for (const word of words) {
          if (word.length < 4 || stopWords.has(word)) continue;
          freq[word] = (freq[word] || 0) + 1;
        }
        return freq;
      }

      function buildSummary(text) {
        const cleanText = normaliseText(text);
        if (!cleanText) return 'Add some text to generate a summary.';

        const sentences = cleanText.split(/(?<=[.!?])\s+/).map(s => s.trim()).filter(Boolean);
        if (sentences.length === 0) return 'We need more text for a useful summary.';

        const keywordScores = getKeywordScores(cleanText);
        const sentenceScores = sentences.map((sentence) => {
          const words = sentence.toLowerCase().replace(/[^a-z0-9\s]/g, ' ').split(/\s+/).filter(Boolean);
          let score = 0;
          for (const word of words) {
            if (word.length >= 4 && !stopWords.has(word)) score += (keywordScores[word] || 0) * 2;
          }
          score += Math.min(words.length / 10, 10);
          return { sentence, score };
        });

        const sorted = sentenceScores.sort((a, b) => b.score - a.score);
        const topCount = Math.min(Math.max(2, Math.ceil(sentences.length * 0.35)), 5);
        const chosen = [...new Set(sorted.slice(0, topCount).map(item => item.sentence))];

        let summary = chosen.join(' ');
        if (chosen.length === 1) {
          summary = chosen[0];
        }

        summary = summary.replace(/\s+/g, ' ').trim();
        if (summary.length > 0) {
          summary = summary.split(/(?<=[.!?])\s+/).map(s => s.trim()).filter(Boolean).join(' ');
        }

        return summary;
      }

      function renderSummary() {
        const text = input.value || '';
        updateStats(text);
        const summary = buildSummary(text);
        summaryOutput.textContent = summary;
        summaryLength.textContent = summary.length;
        statusBadge.textContent = text.trim() ? 'Pronto' : 'Vazio';
      }

      async function extractTextFromPdf(file) {
        if (!window.pdfjsLib) {
          return 'PDF library is not loaded yet. Please try again.';
        }

        const arrayBuffer = await file.arrayBuffer();
        const pdf = await pdfjsLib.getDocument({ data: arrayBuffer }).promise;
        let text = '';

        for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
          const page = await pdf.getPage(pageNum);
          const content = await page.getTextContent();
          const pageText = content.items.map(item => (item && item.str) ? item.str : '').join(' ').replace(/\s+/g, ' ').trim();
          if (pageText) {
            text += pageText + '\n\n';
          }
        }

        if (text.trim()) {
          return text;
        }

        if (!window.Tesseract) {
          return 'No readable text found in the PDF. Try a text-based PDF or a clearer scanned file.';
        }

        statusBadge.textContent = 'A analisar páginas do PDF...';
        let ocrText = '';
        for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
          const page = await pdf.getPage(pageNum);
          const viewport = page.getViewport({ scale: 1.6 });
          const canvas = document.createElement('canvas');
          const ctx = canvas.getContext('2d');
          canvas.width = viewport.width;
          canvas.height = viewport.height;
          await page.render({ canvasContext: ctx, viewport: viewport }).promise;
          const result = await Tesseract.recognize(canvas, 'por', {
            logger: (m) => {
              if (m && m.status && m.progress) {
                statusBadge.textContent = 'OCR PDF ' + Math.round(m.progress * 100) + '%';
              }
            }
          });
          ocrText += (result && result.data && result.data.text ? result.data.text : '') + '\n\n';
        }

        return ocrText.trim();
      }

      async function extractTextFromImage(file) {
        if (!window.Tesseract) {
          return 'Image OCR library is not loaded yet. Please try again.';
        }
        statusBadge.textContent = 'A ler a imagem...';
        const result = await Tesseract.recognize(file, 'por', {
          logger: (m) => {
            if (m && m.status && m.progress) {
              statusBadge.textContent = 'OCR ' + Math.round(m.progress * 100) + '%';
            }
          }
        });
        return result.data.text || '';
      }

      async function handleUploadedFile(file) {
        if (!file) return;
        statusBadge.textContent = 'A processar ficheiro...';
        let extracted = '';

        try {
          const isPdf = file.type === 'application/pdf' || file.name.toLowerCase().endsWith('.pdf');
          if (isPdf) {
            extracted = await extractTextFromPdf(file);
          } else if (file.type.startsWith('image/')) {
            extracted = await extractTextFromImage(file);
          } else {
            statusBadge.textContent = 'Ficheiro não suportado';
            return;
          }

          if (!extracted || !extracted.trim()) {
            statusBadge.textContent = 'Não foi encontrado texto legível';
            return;
          }

          input.value = extracted;
          renderSummary();
          statusBadge.textContent = 'Ficheiro resumido';
        } catch (error) {
          console.error(error);
          statusBadge.textContent = 'Não foi possível ler o ficheiro';
        }
      }

      summaryBtn.addEventListener('click', () => {
        renderSummary();
        statusBadge.textContent = 'Resumo pronto';
      });

      sampleBtn.addEventListener('click', () => {
        input.value = sampleText;
        renderSummary();
        statusBadge.textContent = 'Exemplo carregado';
      });

      clearBtn.addEventListener('click', () => {
        input.value = '';
        summaryOutput.textContent = 'Your generated summary will appear here.';
        updateStats('');
        summaryLength.textContent = '0';
        statusBadge.textContent = 'Limpo';
      });

      copyBtn.addEventListener('click', async () => {
        const summary = summaryOutput.textContent.trim();
        if (!summary || summary === 'Your generated summary will appear here.') {
          statusBadge.textContent = 'Nada para copiar';
          return;
        }
        try {
          await navigator.clipboard.writeText(summary);
          statusBadge.textContent = 'Copiado';
        } catch (error) {
          statusBadge.textContent = 'Cópia bloqueada';
        }
      });

      downloadBtn.addEventListener('click', () => {
        const text = summaryOutput.textContent.trim();
        if (!text || text === 'Your generated summary will appear here.') {
          statusBadge.textContent = 'Não há resumo para descarregar';
          return;
        }
        const blob = new Blob([text], { type: 'text/plain;charset=utf-8' });
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = 'document-summary.txt';
        document.body.appendChild(link);
        link.click();
        link.remove();
        URL.revokeObjectURL(link.href);
        statusBadge.textContent = 'Descarregado';
      });

      fileInput.addEventListener('change', (event) => {
        const file = event.target.files && event.target.files[0];
        handleUploadedFile(file);
      });

      input.addEventListener('input', renderSummary);
      renderSummary();
    })();
  </script>
</body>
</html>
