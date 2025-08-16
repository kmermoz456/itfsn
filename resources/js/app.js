import './bootstrap';

(function () {
    const slides = Array.from(document.querySelectorAll('[data-hero-slide]'));
    const dots   = Array.from(document.querySelectorAll('[data-hero-dot]'));
    if (!slides.length) return;

    let index = 0, timer = null, delay = 2000;

    const show = (i) => {
      slides.forEach((s, k) => s.style.opacity = k === i ? '1' : '0');
      dots.forEach((d, k) => {
        d.classList.toggle('bg-white/70', k === i);
        d.classList.toggle('bg-white/40', k !== i);
      });
      index = i;
    };

    const play = () => timer = setInterval(() => show((index + 1) % slides.length), delay);
    const stop = () => { if (timer) clearInterval(timer); timer = null; };

    dots.forEach((dot, i) => dot.addEventListener('click', () => { stop(); show(i); play(); }));

    const hero = document.getElementById('hero');
    hero.addEventListener('mouseenter', stop);
    hero.addEventListener('mouseleave', () => !timer && play());

    show(0);
    play();
  })();

  

  (function(){
    const toggle = document.getElementById('nav-toggle');
    const menu   = document.getElementById('nav-menu');
    const openI  = document.getElementById('icon-open');
    const closeI = document.getElementById('icon-close');

    const open = () => {
      menu.style.maxHeight = menu.scrollHeight + 'px';
      toggle.setAttribute('aria-expanded','true');
      openI.classList.add('hidden'); closeI.classList.remove('hidden');
    };
    const close = () => {
      menu.style.maxHeight = '0px';
      toggle.setAttribute('aria-expanded','false');
      closeI.classList.add('hidden'); openI.classList.remove('hidden');
    };

    toggle.addEventListener('click', () => {
      const expanded = toggle.getAttribute('aria-expanded') === 'true';
      expanded ? close() : open();
    });

    // fermer après clic sur un lien
    document.querySelectorAll('#nav-menu a').forEach(a => {
      a.addEventListener('click', () => close());
    });

    // reset en desktop
    const mq = window.matchMedia('(min-width: 768px)');
    const sync = () => { if (mq.matches) { menu.style.maxHeight = ''; close(); } };
    mq.addEventListener ? mq.addEventListener('change', sync) : mq.addListener(sync);
  })();

   (function () {
    // ----- Onglets année -----
    const tabYears = document.querySelectorAll('[data-tab]');
    const panelsYears = {
      l1: document.getElementById('panel-l1'),
      l2: document.getElementById('panel-l2')
    };
    function showYear(key){
      Object.entries(panelsYears).forEach(([k, el])=>{
        const btn = document.querySelector(`[data-tab="${k}"]`);
        const active = (k===key);
        el.classList.toggle('hidden', !active);
        if(active){
          // reset transition then fade-in
          requestAnimationFrame(()=>{
            el.classList.remove('opacity-0','translate-y-2');
          });
        }else{
          el.classList.add('opacity-0','translate-y-2');
        }
        btn.setAttribute('aria-selected', active);
        btn.classList.toggle('bg-gray-900', active);
        btn.classList.toggle('text-white', active);
        btn.classList.toggle('bg-gray-100', !active);
        btn.classList.toggle('text-gray-800', !active);
      });
    }
    tabYears.forEach(b=>b.addEventListener('click', ()=> showYear(b.dataset.tab)));
    showYear('l1'); // défaut

    // ----- Sous-onglets (semestres) -----
    function wireSubtabs(panelId){
      const container = document.getElementById(panelId);
      const btns = container.querySelectorAll('[data-subtab]');
      const panels = {};
      btns.forEach(b=>{
        const id = b.dataset.subtab;
        panels[id] = document.getElementById('panel-' + id);
      });
      function showSub(id){
        btns.forEach(b=>{
          const active = (b.dataset.subtab===id);
          b.setAttribute('aria-selected', active);
          b.classList.toggle('bg-emerald-500', active);
          b.classList.toggle('text-black', active);
          b.classList.toggle('bg-gray-100', !active);
          b.classList.toggle('text-gray-800', !active);
        });
        Object.entries(panels).forEach(([k, el])=>{
          const active = (k===id);
          el.classList.toggle('hidden', !active);
          if(active){
            el.classList.remove('opacity-0','translate-y-2');
          }else{
            el.classList.add('opacity-0','translate-y-2');
          }
        });
      }
      btns.forEach(b=>b.addEventListener('click',()=>showSub(b.dataset.subtab)));
      // défaut: 1er bouton actif
      if(btns[0]) showSub(btns[0].dataset.subtab);
    }
    wireSubtabs('panel-l1');
    wireSubtabs('panel-l2');

    // ----- Reveal des cartes au scroll -----
    const revealer = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting){
          e.target.classList.remove('opacity-0','translate-y-3');
          e.target.style.transition = 'all 600ms ease';
          revealer.unobserve(e.target);
        }
      });
    },{threshold: 0.12});
    document.querySelectorAll('.reveal').forEach(card=>{
      card.classList.add('opacity-0','translate-y-3','will-change-transform');
      revealer.observe(card);
    });
  })();

  document.addEventListener('alpine:init', () => {
  Alpine.data('mdEditor', ({ initial = '', uploadUrl = '', csrf = '' }) => ({
    tab: 'write',
    content: initial,
    previewHtml: '',
    slugLocked: false,

    init(){
      // réglages Marked (facultatif)
      if (window.marked) {
        marked.setOptions({ breaks: true, gfm: true });
      }
    },

    // Helpers sélection
    _sel(){
      const ta = this.$refs.ta;
      return { ta, start: ta.selectionStart, end: ta.selectionEnd, val: ta.value };
    },

    wrap(open, close){
      const { ta, start, end, val } = this._sel();
      const before = val.slice(0, start), sel = val.slice(start, end), after = val.slice(end);
      const newVal = `${before}${open}${sel || 'texte'}${close}${after}`;
      this.content = newVal;
      this.$nextTick(() => { ta.focus(); ta.selectionStart = start + open.length; ta.selectionEnd = end + open.length + (sel ? 0 : 'texte'.length); });
    },

    heading(level=2){
      const { ta, start, end, val } = this._sel();
      const lineStart = val.lastIndexOf("\n", start - 1) + 1;
      const prefix = '#'.repeat(level) + ' ';
      const newVal = val.slice(0, lineStart) + prefix + val.slice(lineStart);
      this.content = newVal;
      this.$nextTick(() => { ta.focus(); ta.selectionStart = ta.selectionEnd = start + prefix.length; });
    },

    list(bullet='- '){
      const { ta, start, end, val } = this._sel();
      const sel = val.slice(start, end) || 'élément';
      const lines = sel.split('\n').map(l => (l ? bullet + l : bullet + 'élément')).join('\n');
      this.content = val.slice(0, start) + lines + val.slice(end);
      this.$nextTick(() => ta.focus());
    },

    olist(){
      const { ta, start, end, val } = this._sel();
      const sel = val.slice(start, end) || 'élément';
      let i = 1;
      const lines = sel.split('\n').map(l => `${i++}. ${l || 'élément'}`).join('\n');
      this.content = val.slice(0, start) + lines + val.slice(end);
      this.$nextTick(() => ta.focus());
    },

    quote(){
      const { ta, start, end, val } = this._sel();
      const sel = val.slice(start, end) || 'citation';
      const lines = sel.split('\n').map(l => `> ${l || 'citation'}`).join('\n');
      this.content = val.slice(0, start) + lines + val.slice(end);
      this.$nextTick(() => ta.focus());
    },

    codeBlock(){
      const { ta, start, end, val } = this._sel();
      const sel = val.slice(start, end) || 'console.log("Hello")';
      const block = `\n\`\`\`js\n${sel}\n\`\`\`\n`;
      this.content = val.slice(0, start) + block + val.slice(end);
      this.$nextTick(() => ta.focus());
    },

    link(){
      const url = prompt('URL du lien :', 'https://');
      if (!url) return;
      this.wrap('[', `](${url})`);
    },

    // Preview
    render(){
      const raw = (window.marked ? marked.parse(this.content || '') : this.content);
      this.previewHtml = window.DOMPurify ? DOMPurify.sanitize(raw) : raw;
    },

    charCount(){ return (this.content || '').length; },

    // Upload d’image (drag & drop + input file)
    async dropUpload(e){
      const file = [...e.dataTransfer.files][0];
      if (file) await this._upload(file);
    },
    async uploadFromInput(e){
      const file = e.target.files[0];
      if (file) await this._upload(file);
      e.target.value = '';
    },
    async _upload(file){
      if (!this.uploadUrl) return alert('Route upload non configurée.');
      const fd = new FormData();
      fd.append('image', file);
      fd.append('_token', this.csrf);
      const res = await fetch(this.uploadUrl, { method:'POST', body: fd });
      if (!res.ok) return alert('Upload échoué.');
      const data = await res.json();
      if (data?.url){
        const md = `![image](${data.url})`;
        const { ta, start, end, val } = this._sel();
        this.content = val.slice(0,start) + md + val.slice(end);
        this.$nextTick(() => ta.focus());
      }
    },
  }));
});

