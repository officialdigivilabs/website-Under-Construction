<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digivi Labs – Under Construction</title>
    <meta name="description" content="Digivi Labs sedang dalam tahap pembangunan.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&family=Quicksand:wght@700&display=swap"
          rel="stylesheet">

    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}">
</head>
<body>
<main class="page">

    {{-- Blob kiri atas (oranye) --}}
    <svg class="corner corner--tl" viewBox="0 0 360 300" aria-hidden="true" focusable="false">
        <path class="fill-orange"
              d="M0 0 H356 C350 40 310 55 270 70 C235 83 215 100 222 125 C230 150 246 175 244 210 C240 265 195 300 140 298 C80 296 30 275 0 255 Z"/>
        <line x1="104" y1="266" x2="165" y2="193" class="stroke-brown" stroke-width="16" stroke-linecap="round"/>
        <circle cx="187" cy="225" r="9" class="fill-brown"/>
    </svg>

    {{-- Blob kanan atas (hitam, bentuk burung) --}}
    <svg class="corner corner--tr" viewBox="0 0 230 262" aria-hidden="true" focusable="false">
        <path class="fill-charcoal"
              d="M143 0 H230 V204 C200 226 168 258 112 258 C52 258 8 214 8 150 C8 100 40 62 86 52 C116 45 128 28 143 0 Z"/>
        <path class="fill-orange stroke-orange" d="M5 74 H60 L32 124 Z" stroke-width="6" stroke-linejoin="round"/>
        <circle cx="93" cy="156" r="28" class="fill-white"/>
        <circle cx="93" cy="156" r="15" class="fill-charcoal"/>
    </svg>

    {{-- Blob kiri bawah (hijau) --}}
    <svg class="corner corner--bl" viewBox="0 0 330 201" aria-hidden="true" focusable="false">
        <path class="fill-green"
              d="M0 3 C48 -8 108 12 138 72 C160 114 192 126 236 131 C288 138 322 166 330 201 H0 Z"/>
        <line x1="157" y1="53" x2="195" y2="23" class="stroke-peach" stroke-width="16" stroke-linecap="round"/>
        <line x1="187" y1="88" x2="229" y2="63" class="stroke-peach" stroke-width="16" stroke-linecap="round"/>
    </svg>

    {{-- Blob kanan bawah (kuning) --}}
    <svg class="corner corner--br" viewBox="0 -60 337 271" aria-hidden="true" focusable="false">
        <path class="fill-yellow"
              d="M337 0 C300 6 274 30 244 56 C208 86 168 104 118 112 C58 121 14 152 0 211 H337 Z"/>
        <line x1="173" y1="-10" x2="205" y2="25" class="stroke-yellow" stroke-width="14" stroke-linecap="round"/>
        <line x1="215" y1="-43" x2="246" y2="0" class="stroke-yellow" stroke-width="14" stroke-linecap="round"/>
    </svg>

    {{-- Konten tengah --}}
    <div class="content">
        <div class="logo" aria-label="Digivi">digivi</div>

        @include('partials.illustration')

        <h1 class="title">Under Construction</h1>

        <div class="divider" aria-hidden="true"></div>
    </div>

</main>
</body>
</html>