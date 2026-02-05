<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPC+ Favicon Center</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
        .preview-grid {
            background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
            background-size: 20px 20px;
        }
        #renderCanvas { display: none; }
        .success-toast {
            transform: translateY(100px);
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .success-toast.show { transform: translateY(0); }
        
        /* Simulation de l'onglet du navigateur */
        .browser-tab {
            width: 220px;
            height: 40px;
            background: #ffffff;
            border-radius: 8px 8px 0 0;
            display: flex;
            align-items: center;
            padding: 0 12px;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body class="bg-slate-50 min-h-screen">

    <header class="bg-white border-b sticky top-0 z-40">
        <div class="max-w-5xl mx-auto px-4 h-16 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="bg-blue-900 text-white p-1.5 rounded-md">
                    <i class="fas fa-home text-sm"></i>
                </div>
                <span class="font-bold text-blue-900 tracking-tight">EPC+ ASSETS</span>
            </div>
            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Générateur de Favicon</span>
        </div>
    </header>

    <main class="max-w-5xl mx-auto px-4 py-10">
        <div class="grid lg:grid-cols-2 gap-10">
            
            <!-- CONFIGURATION -->
            <div class="space-y-8">
                <div>
                    <h1 class="text-3xl font-bold text-slate-900">Configurateur d'icône</h1>
                    <p class="text-slate-500 mt-2">Préparez les fichiers nécessaires pour l'onglet de votre navigateur.</p>
                </div>

                <!-- Type de fond -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                    <label class="block text-xs font-black text-slate-400 uppercase mb-4">Style de l'icône</label>
                    <div class="grid grid-cols-2 gap-4">
                        <label class="relative cursor-pointer group">
                            <input type="radio" name="favStyle" value="rounded" checked class="sr-only peer">
                            <div class="p-4 border-2 rounded-xl peer-checked:border-blue-600 peer-checked:bg-blue-50 hover:border-slate-300 transition-all">
                                <div class="w-10 h-10 bg-blue-900 rounded-lg mx-auto flex items-center justify-center mb-2">
                                    <i class="fas fa-home text-white text-xs"></i>
                                </div>
                                <p class="text-center text-sm font-bold">Carré arrondi</p>
                            </div>
                        </label>
                        <label class="relative cursor-pointer group">
                            <input type="radio" name="favStyle" value="plain" class="sr-only peer">
                            <div class="p-4 border-2 rounded-xl peer-checked:border-blue-600 peer-checked:bg-blue-50 hover:border-slate-300 transition-all">
                                <div class="w-10 h-10 mx-auto flex items-center justify-center mb-2">
                                    <i class="fas fa-home text-blue-900 text-2xl"></i>
                                </div>
                                <p class="text-center text-sm font-bold">Symbole seul</p>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Download Actions -->
                <div class="grid grid-cols-1 gap-4">
                    <button onclick="exportFavicon('png')" class="flex items-center justify-between bg-white border border-slate-200 p-5 rounded-2xl hover:border-blue-500 hover:shadow-md transition-all group">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-file-code text-xl"></i>
                            </div>
                            <div class="text-left">
                                <p class="font-bold text-slate-900">favicon.png</p>
                                <p class="text-xs text-slate-500">48x48 px - Format moderne recommandé</p>
                            </div>
                        </div>
                        <i class="fas fa-download text-slate-300 group-hover:text-blue-500"></i>
                    </button>

                    <button onclick="exportFavicon('ico')" class="flex items-center justify-between bg-white border border-slate-200 p-5 rounded-2xl hover:border-orange-500 hover:shadow-md transition-all group">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-window-restore text-xl"></i>
                            </div>
                            <div class="text-left">
                                <p class="font-bold text-slate-900">favicon.ico</p>
                                <p class="text-xs text-slate-500">32x32 px - Compatibilité héritée (IE)</p>
                            </div>
                        </div>
                        <i class="fas fa-download text-slate-300 group-hover:text-orange-500"></i>
                    </button>
                </div>
            </div>

            <!-- PREVIEW PANEL -->
            <div class="space-y-6">
                <div class="bg-slate-200 rounded-3xl p-8 preview-grid flex flex-col items-center justify-center min-h-[400px]">
                    
                    <!-- Real Tab Simulation -->
                    <p class="text-[10px] font-black text-slate-400 uppercase mb-4 tracking-widest">Aperçu dans le navigateur</p>
                    <div class="browser-tab mb-12">
                        <div id="tabIconPreview" class="w-4 h-4 mr-2 flex items-center justify-center">
                            <!-- SVG injecté ici -->
                        </div>
                        <span class="text-xs font-medium text-slate-600 truncate">EPC+ | Pôle Bati Pro Plus</span>
                        <i class="fas fa-times text-[10px] ml-auto text-slate-300"></i>
                    </div>

                    <!-- Large Preview -->
                    <div class="bg-white p-10 rounded-3xl shadow-2xl shadow-blue-900/10 flex items-center justify-center border border-white">
                        <div id="largeIconPreview" class="w-24 h-24 flex items-center justify-center">
                            <!-- SVG injecté ici -->
                        </div>
                    </div>
                </div>

                <div class="bg-blue-900 rounded-2xl p-6 text-white">
                    <h4 class="font-bold flex items-center gap-2 mb-2">
                        <i class="fas fa-info-circle text-blue-300"></i>
                        Installation
                    </h4>
                    <code class="text-[10px] bg-blue-950/50 p-3 rounded-lg block text-blue-100 leading-relaxed">
                        &lt;link rel="icon" type="image/png" href="/favicon.png"&gt;<br>
                        &lt;link rel="shortcut icon" href="/favicon.ico"&gt;
                    </code>
                </div>
            </div>
        </div>
    </main>

    <!-- Hidden Master SVG for Rendering -->
    <div style="display:none">
        <svg id="faviconMaster" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <rect id="svgBg" x="0" y="0" width="100" height="100" rx="20" fill="#1e3a8a" />
            <path id="svgHome" d="M50 30 L30 48 L30 75 L43 75 L43 60 L57 60 L57 75 L70 75 L70 48 Z M24 48 L50 24 L76 48 L71 52 L50 32 L29 52 Z" fill="white" />
        </svg>
    </div>

    <canvas id="renderCanvas"></canvas>

    <div id="successToast" class="fixed bottom-8 left-1/2 -translate-x-1/2 bg-slate-900 text-white px-6 py-3 rounded-full shadow-2xl flex items-center gap-3 z-50 pointer-events-none success-toast">
        <i class="fas fa-check-circle text-green-400"></i>
        <span class="text-sm font-bold" id="toastMessage">Fichier généré !</span>
    </div>

    <script>
        const renderCanvas = document.getElementById('renderCanvas');
        const masterSvg = document.getElementById('faviconMaster');
        const svgBg = document.getElementById('svgBg');
        const svgHome = document.getElementById('svgHome');
        const tabIconPreview = document.getElementById('tabIconPreview');
        const largeIconPreview = document.getElementById('largeIconPreview');

        function updateUI() {
            const style = document.querySelector('input[name="favStyle"]:checked').value;
            
            if (style === 'rounded') {
                svgBg.style.display = 'block';
                svgHome.setAttribute('fill', 'white');
            } else {
                svgBg.style.display = 'none';
                svgHome.setAttribute('fill', '#1e3a8a');
            }

            const svgContent = masterSvg.outerHTML;
            tabIconPreview.innerHTML = svgContent;
            largeIconPreview.innerHTML = svgContent;
            
            // On s'assure que les clones sont visibles
            tabIconPreview.querySelector('svg').style.display = 'block';
            largeIconPreview.querySelector('svg').style.display = 'block';
        }

        async function exportFavicon(format) {
            const size = format === 'ico' ? 32 : 48;
            const ctx = renderCanvas.getContext('2d');
            
            renderCanvas.width = size;
            renderCanvas.height = size;
            ctx.clearRect(0, 0, size, size);

            const svgData = new XMLSerializer().serializeToString(masterSvg);
            const svgBlob = new Blob([svgData], { type: 'image/svg+xml;charset=utf-8' });
            const url = URL.createObjectURL(svgBlob);

            const img = new Image();
            img.onload = function() {
                ctx.drawImage(img, 0, 0, size, size);
                
                const dataUrl = renderCanvas.toDataURL('image/png');
                const link = document.createElement('a');
                link.href = dataUrl;
                link.download = `favicon.${format}`;
                link.click();
                
                URL.revokeObjectURL(url);
                showToast(`favicon.${format} téléchargé !`);
            };
            img.src = url;
        }

        function showToast(msg) {
            document.getElementById('toastMessage').innerText = msg;
            const toast = document.getElementById('successToast');
            toast.classList.add('show');
            setTimeout(() => toast.classList.remove('show'), 3000);
        }

        document.querySelectorAll('input[name="favStyle"]').forEach(input => {
            input.addEventListener('change', updateUI);
        });

        // Init
        updateUI();
    </script>
</body>
</html>