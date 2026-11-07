<svg class="illustration"
     viewBox="405 225 850 375"
     role="img"
     aria-label="Katak dan jerapah di balik pembatas jalan dengan helm proyek"
     xmlns="http://www.w3.org/2000/svg">

    {{-- Blob krem samar di belakang --}}
    <path fill="#FBEBD6"
          d="M432 582 C405 520 404 440 424 392 C446 336 500 316 560 318 C622 320 652 290 712 256 C782 218 884 216 952 240 C1012 260 1050 322 1100 346 C1180 346 1250 400 1250 470 C1250 540 1222 575 1202 585 Z"/>

    {{-- Garis tanah --}}
    <ellipse cx="828" cy="582" rx="397" ry="5" fill="#F7E4C8"/>
    <ellipse cx="830" cy="589" rx="262" ry="5" fill="#F5E0C2" opacity=".7"/>

    {{-- Rumput kiri & kanan --}}
    <path fill="#A8DE93"
          d="M445 580 C445 560 455 545 468 534 C470 548 476 556 481 560 C486 548 498 543 508 546 C516 556 516 570 527 580 Z"/>
    <path fill="#A8DE93"
          d="M1115 580 C1118 562 1130 548 1143 545 C1146 555 1150 560 1155 560 C1160 548 1172 540 1181 538 C1183 555 1192 565 1192 580 Z"/>

    {{-- ================= JERAPAH ================= --}}
    <g>
        {{-- tanduk --}}
        <line x1="1004" y1="316" x2="996" y2="266" stroke="#FFD770" stroke-width="20" stroke-linecap="round"/>
        <rect x="979" y="248" width="38" height="28" rx="10" transform="rotate(-14 998 262)" fill="#FFD25A"/>
        <line x1="1060" y1="312" x2="1062" y2="250" stroke="#FFD770" stroke-width="20" stroke-linecap="round"/>
        <rect x="1044" y="234" width="36" height="28" rx="10" fill="#FFD25A"/>
        <line x1="1096" y1="326" x2="1124" y2="290" stroke="#FFD770" stroke-width="20" stroke-linecap="round"/>
        <rect x="1108" y="269" width="36" height="28" rx="10" transform="rotate(38 1126 283)" fill="#FFD25A"/>

        {{-- kepala + leher + badan --}}
        <path fill="#FFD770"
              d="M985 336 C990 312 1030 305 1060 306 C1096 308 1115 336 1112 382 C1110 420 1100 446 1086 472 L1089 578 L987 578 L993 472 C976 442 974 366 985 336 Z"/>
        {{-- telinga --}}
        <ellipse cx="970" cy="388" rx="17" ry="42" fill="#FFE08A"/>
        {{-- moncong --}}
        <rect x="975" y="380" width="117" height="82" rx="38" fill="#FFF0CE"/>
        {{-- lubang hidung --}}
        <ellipse cx="1015" cy="414" rx="7" ry="11" fill="#E9CC8E"/>
        <ellipse cx="1065" cy="421" rx="7" ry="11" fill="#E9CC8E"/>
        {{-- mulut --}}
        <path d="M1000 445 L1072 454" stroke="#C9A35F" stroke-width="4" stroke-linecap="round" fill="none"/>
        {{-- mata --}}
        <circle cx="1013" cy="361" r="8" fill="#1D1D20"/>
        <circle cx="1077" cy="372" r="8" fill="#1D1D20"/>
        {{-- bercak di badan --}}
        <path d="M1070 500 C1085 502 1092 520 1090 548 C1078 548 1070 540 1070 520 Z" fill="#F5C95A"/>
    </g>

    {{-- ================= KATAK ================= --}}
    <g>
        {{-- tangan kanan --}}
        <ellipse cx="744" cy="441" rx="20" ry="10" fill="#86DC85"/>
        {{-- badan --}}
        <path fill="#86DC85"
              d="M550 452 C534 498 558 524 572 532 C572 548 586 560 612 558 L642 556 L642 470 Z"/>
        {{-- kepala --}}
        <ellipse cx="640" cy="425" rx="100" ry="58" fill="#86DC85"/>
        {{-- bintik hidung --}}
        <circle cx="628" cy="402" r="2.6" fill="#5DB65E"/>
        <circle cx="636" cy="409" r="2.6" fill="#5DB65E"/>
        {{-- lidah --}}
        <path fill="#F07079"
              d="M585 440 C600 420 640 405 670 400 C686 398 684 425 670 441 C650 461 620 471 600 468 C585 465 580 450 585 440 Z"/>
        <path fill="#F59AA0"
              d="M598 440 C612 426 640 416 660 411 C664 420 660 430 650 438 C634 450 616 455 604 452 Z"/>
        {{-- mata kiri --}}
        <circle cx="572" cy="403" r="33" fill="#C9F5C4"/>
        <circle cx="572" cy="403" r="27" fill="#F6FFF4"/>
        <circle cx="574" cy="404" r="15" fill="#1D1D20"/>
        <circle cx="580" cy="398" r="4.5" fill="#fff"/>
        {{-- mata kanan --}}
        <circle cx="653" cy="361" r="33" fill="#C9F5C4"/>
        <circle cx="653" cy="361" r="27" fill="#F6FFF4"/>
        <circle cx="655" cy="362" r="15" fill="#1D1D20"/>
        <circle cx="661" cy="356" r="4.5" fill="#fff"/>
    </g>

    {{-- ================= PEMBATAS ================= --}}
    <defs>
        <clipPath id="barrier-clip">
            <rect x="605" y="455" width="460" height="95" rx="20"/>
        </clipPath>
    </defs>
    {{-- kaki --}}
    <polygon points="648,548 667,548 646,586 617,586" fill="#6B3E22"/>
    <polygon points="1004,548 1026,548 1052,586 1022,586" fill="#6B3E22"/>
    {{-- badan pembatas --}}
    <rect x="605" y="455" width="460" height="95" rx="20" fill="#FCEEDB"/>
    <g clip-path="url(#barrier-clip)" fill="#F98C47">
        <polygon points="598,550 644,550 739,455 693,455"/>
        <polygon points="689,550 735,550 830,455 784,455"/>
        <polygon points="780,550 826,550 921,455 875,455"/>
        <polygon points="871,550 917,550 1012,455 966,455"/>
        <polygon points="962,550 1008,550 1103,455 1057,455"/>
        <polygon points="1053,550 1099,550 1194,455 1148,455"/>
        <polygon points="507,550 553,550 648,455 602,455"/>
        <rect x="605" y="538" width="460" height="12" fill="#000" opacity=".06"/>
    </g>

    {{-- ================= HELM ================= --}}
    <g>
        <path fill="#FFC845"
              d="M768 436 C770 386 810 352 850 355 C900 358 935 400 932 440 Z"/>
        <path fill="#F5A623" opacity=".85"
              d="M880 360 C912 372 934 405 932 440 L894 440 C900 410 896 380 880 360 Z"/>
        <path d="M826 360 C822 390 824 415 830 436" stroke="#F5A623" stroke-width="5" fill="none" stroke-linecap="round"/>
        <path d="M858 358 C862 390 862 415 858 436" stroke="#F5A623" stroke-width="5" fill="none" stroke-linecap="round"/>
        <path d="M790 400 C796 384 806 374 818 368" stroke="#FFE08A" stroke-width="6" fill="none" stroke-linecap="round"/>
        <rect x="750" y="430" width="188" height="40" rx="20" fill="#FDBE3A"/>
        <rect x="754" y="432" width="180" height="14" rx="7" fill="#FFD25A"/>
    </g>

    {{-- Garis kilau di atas helm --}}
    <g stroke="#FFD45F" stroke-width="16" stroke-linecap="round">
        <line x1="842" y1="276" x2="842" y2="320"/>
        <line x1="790" y1="296" x2="808" y2="326"/>
        <line x1="892" y1="296" x2="874" y2="326"/>
    </g>
</svg>