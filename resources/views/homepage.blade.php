<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<style>
    /* Tambahan CSS untuk menyembunyikan elemen yang akan di-fade-in */
    .fade-in {
        opacity: 0;
        transform: translateY(-20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }
    /* Class untuk menampilkan elemen dengan efek fade-in */
    .fade-in.active {
        opacity: 1;
        transform: translateY(0);
    }
</style>
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
         @vite('resources/css/app.css')
    </head>
   <body>

<div class="w-[1440px] h-[1517px] relative bg-gray-50">

<div class="w-[1348px] h-[1517px] relative bg-gray-50">
    <div class="w-[1348px] h-[60px] left-0 top-0 absolute bg-white shadow"></div>
    <img class="w-[35px] h-[43px] left-[20px] top-[8px] absolute" src="{{ URL('asset/1.png') }}" />
    <div class="left-[75px] top-[25px] absolute text-neutral-700 text-sm font-medium font-['Lato'] capitalize leading-9">Provinsi Kalimantan Timur</div>
    <div class="w-[286px] left-[75px] top-[5px] absolute text-sky-500 font-black font-['Lato'] capitalize leading-9">Badan Kesatuan Bangsa dan Politik</div>
     <a href="{{ url('login') }}" class="absolute left-[1250px] top-[5px] w-[80px] py-1 px-4 bg-sky-500 text-white font-bold text-lg leading-9 hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-sky-50 focus:ring-opacity-50 rounded-md">
    Login
</a>



</div>

    <div class="w-[1065px] h-[1287px] left-[188px] top-[135px] absolute bg-white rounded-[15px]"></div>
    <div class="left-[285px] top-[205px] absolute text-center text-gray-600 text-2xl font-black font-['Inter'] capitalize leading-9">LAPORAN TIM DESK PILKADA DAN TIM PEMANTAUAN<br/>PERKEMBANGAN POLITIK DAERAH SE KALIMANTAN TIMUR TAHUN 2024</div>
     <div class="left-[412px] top-[349px] absolute text-gray-600 text-xl font-extrabold font-['Inter']">PASANGAN CALON GUBERNUR PROVINSI KALIMANTAN TIMUR</div>
     
     
   
   
    <div class="w-[214px] h-[214px] left-[979px] top-[405px] absolute bg-lime-300 rounded-full"></div>
    
    <div class="w-[214px] h-[214px] left-[979px] top-[405px] absolute bg-green-400 rounded-full"></div>
    <div class="w-[214px] h-[214px] left-[979px] top-[405px] absolute bg-slate-400 rounded-full"></div>

    <div class="left-[1005px] top-[468px] absolute text-white text-base font-bold font-['Inter']">29,06%</div>
     <div class="left-[1112px] top-[477px] absolute text-white text-base font-bold font-['Inter']">37,13%</div>
     <div class="left-[1047px] top-[558px] absolute text-white text-base font-bold font-['Inter']">33,91%</div>
    
   


  
   
    <div class="w-[228px] h-[215px] left-[493px] top-[404px] absolute bg-green-400 rounded-lg">
        <img class="w-[428px] h-[285px] left-0 top-[-35px] absolute" src="https://via.placeholder.com/428x285" />
        <div class="left-[16px] top-[161px] absolute text-white text-base font-bold font-['Inter']">Fauziah</div>
        <div class="left-[16px] top-[180px] absolute text-white text-base font-bold font-['Inter']">Muhammad Fauzi</div>
        <div class="left-[16px] top-[12px] absolute text-white text-2xl font-bold font-['Inter']">Paslon 2</div>
        <div class="left-[16px] top-[112px] absolute text-white text-sm font-bold font-['Inter']">941.832 Suara</div>
        <div class="left-[16px] top-[83px] absolute text-white text-2xl font-bold font-['Inter']">33,91%</div>
    </div>

    <div class="w-[228px] h-[215px] left-[738px] top-[404px] absolute bg-lime-300 rounded-lg">
        <img class="w-[428px] h-[285px] left-0 top-[-35px] absolute" src="https://via.placeholder.com/428x285" />
        <div class="left-[16px] top-[161px] absolute text-white text-base font-bold font-['Inter']">Kamsoel</div>
        <div class="left-[16px] top-[180px] absolute text-white text-base font-bold font-['Inter']">Juwai</div>
        <div class="left-[16px] top-[12px] absolute text-white text-2xl font-bold font-['Inter']">Paslon 3</div>
        <div class="left-[16px] top-[112px] absolute text-white text-sm font-bold font-['Inter']">814.471 Suara</div>
        <div class="left-[16px] top-[83px] absolute text-white text-2xl font-bold font-['Inter']">29,06%</div>
    </div>
    
    <div class="w-[807px] h-[313px] left-[342px] top-[713px] absolute">
        <div class="w-[807px] h-[313px] left-0 top-0 absolute border border-stone-300"></div>
    </div>
    <div class="w-[60px] h-[216px] left-[360px] top-[810px] absolute bg-blue-300"></div>
    <div class="w-[60px] h-[191px] left-[439px] top-[835px] absolute bg-blue-300"></div>
    <div class="w-[60px] h-32 left-[518px] top-[898px] absolute bg-blue-300"></div>
    <div class="w-[60px] h-[166px] left-[597px] top-[860px] absolute bg-blue-300"></div>
    <div class="w-[60px] h-[207px] left-[676px] top-[819px] absolute bg-blue-300"></div>
    <div class="w-[60px] h-40 left-[755px] top-[866px] absolute bg-blue-300"></div>
    <div class="w-[60px] h-[221px] left-[834px] top-[805px] absolute bg-blue-300"></div>
    <div class="w-[60px] h-[142px] left-[913px] top-[884px] absolute bg-blue-300"></div>
    <div class="w-[60px] h-[173px] left-[992px] top-[853px] absolute bg-blue-300"></div>
    <div class="w-[60px] h-40 left-[1071px] top-[866px] absolute bg-blue-300"></div>
   





    <div class="w-[162px] h-[77px] p-2.5 left-[278px] top-[1182px] absolute bg-gray-200 rounded-[7px] justify-center items-center gap-2.5 inline-flex">
        <div class="text-center text-gray-600 text-xl font-bold font-['Inter'] capitalize leading-9">Samarinda</div>
    </div>
    <div class="w-[161px] h-[77px] p-2.5 left-[460px] top-[1182px] absolute bg-gray-200 rounded-[7px] justify-center items-center gap-2.5 inline-flex">
        <div class="text-center text-gray-600 text-xl font-bold font-['Inter'] capitalize leading-9">Balikpapan</div>
    </div>
    <div class="w-[161px] h-[77px] p-2.5 left-[460px] top-[1182px] absolute bg-gray-200 rounded-[7px] justify-center items-center gap-2.5 inline-flex">
        <div class="text-center text-gray-600 text-xl font-bold font-['Inter'] capitalize leading-9">Balikpapan</div>
    </div>
    <div class="w-[162px] h-[77px] p-2.5 left-[640px] top-[1182px] absolute bg-gray-200 rounded-[7px] justify-center items-center gap-2.5 inline-flex">
        <div class="text-center text-gray-600 text-xl font-bold font-['Inter'] capitalize leading-9">Bontang</div>
    </div>
    <div class="w-[161px] h-[77px] p-2.5 left-[820px] top-[1182px] absolute bg-gray-200 rounded-[7px] justify-center items-center gap-2.5 inline-flex">
        <div class="text-center text-gray-600 text-xl font-bold font-['Inter'] capitalize leading-7">Kutai<br/>Kartanegara</div>
    </div>
    <div class="w-[162px] h-[77px] p-2.5 left-[1001px] top-[1182px] absolute bg-gray-200 rounded-[7px] justify-center items-center gap-2.5 inline-flex">
        <div class="text-center text-gray-600 text-xl font-bold font-['Inter'] capitalize leading-9">Kutai Timur</div>
    </div>
    <div class="w-[162px] h-[77px] p-2.5 left-[278px] top-[1285px] absolute bg-gray-200 rounded-[7px] justify-center items-center gap-2.5 inline-flex">
        <div class="text-center text-gray-600 text-xl font-bold font-['Inter'] capitalize leading-9">Kutai Barat</div>
    </div>
    <div class="w-[161px] h-[77px] p-2.5 left-[460px] top-[1285px] absolute bg-gray-200 rounded-[7px] justify-center items-center gap-2.5 inline-flex">
        <div class="text-center text-gray-600 text-xl font-bold font-['Inter'] capitalize leading-9">Berau</div>
    </div>
    <div class="w-[162px] h-[77px] p-2.5 left-[640px] top-[1285px] absolute bg-gray-200 rounded-[7px] justify-center items-center gap-2.5 inline-flex">
        <div class="text-center text-gray-600 text-xl font-bold font-['Inter'] capitalize leading-9">Paser</div>
    </div>
    <div class="w-[161px] h-[77px] p-2.5 left-[820px] top-[1285px] absolute bg-gray-200 rounded-[7px] justify-center items-center gap-2.5 inline-flex">
        <div class="text-center text-gray-600 text-xl font-bold font-['Inter'] capitalize leading-7">Penajam    Paser Utara</div>
    </div>
    <div class="w-[162px] h-[77px] p-2.5 left-[1001px] top-[1285px] absolute bg-gray-200 rounded-[7px] justify-center items-center gap-2.5 inline-flex">
        <div class="text-center text-gray-600 text-xl font-bold font-['Inter'] capitalize leading-9">Mahakam Ulu</div>
    </div>
    <div class="w-[945px] h-[431px] left-[248px] top-[664px] absolute bg-violet-50 rounded-[7px]"></div>
    <div class="left-[319px] top-[1012px] absolute text-neutral-500 text-base font-normal font-['Inter']">0</div>
    <div class="left-[291px] top-[968px] absolute text-neutral-500 text-base font-normal font-['Inter']">1000</div>
    <div class="left-[289px] top-[924px] absolute text-neutral-500 text-base font-normal font-['Inter']">2000</div>
    <div class="left-[288px] top-[880px] absolute text-neutral-500 text-base font-normal font-['Inter']">3000</div>
    <div class="left-[288px] top-[836px] absolute text-neutral-500 text-base font-normal font-['Inter']">4000</div>
    <div class="left-[289px] top-[792px] absolute text-neutral-500 text-base font-normal font-['Inter']">5000</div>
    <div class="left-[290px] top-[748px] absolute text-neutral-500 text-base font-normal font-['Inter']">7000</div>
    <div class="left-[289px] top-[704px] absolute text-neutral-500 text-base font-normal font-['Inter']">8000</div>
    <div class="left-[364px] top-[1031px] absolute text-zinc-700 text-[10px] font-semibold font-['Inter']">Samarinda</div>
    <div class="left-[442px] top-[1031px] absolute text-zinc-700 text-[10px] font-semibold font-['Inter']">Balikpapan</div>
    <div class="left-[527px] top-[1031px] absolute text-zinc-700 text-[10px] font-semibold font-['Inter']">Bontang</div>
    <div class="left-[597px] top-[1031px] absolute text-center text-zinc-700 text-[10px] font-semibold font-['Inter']">Kutai<br/>Kartanegara</div>
    <div class="left-[691px] top-[1031px] absolute text-center text-zinc-700 text-[10px] font-semibold font-['Inter']">Kutai <br/>Timur</div>
    <div class="left-[772px] top-[1031px] absolute text-center text-zinc-700 text-[10px] font-semibold font-['Inter']">Kutai<br/>Barat</div>
    <div class="left-[849px] top-[1031px] absolute text-zinc-700 text-[10px] font-semibold font-['Inter']">Berau</div>
    <div class="left-[993px] top-[1031px] absolute text-center text-zinc-700 text-[10px] font-semibold font-['Inter']">Penajam<br/>Pasur Utara</div>
    <div class="left-[1077px] top-[1031px] absolute text-center text-zinc-700 text-[10px] font-semibold font-['Inter']">Mahakam<br/>Ulu</div>
    <div class="left-[929px] top-[1031px] absolute text-zinc-700 text-[10px] font-semibold font-['Inter']">Paser</div>
   
 
</div>


<!-- Navbar -->
<!-- Content -->
<!-- Footer -->

 @vite('resources/js/app.js')
</body>

</html>
