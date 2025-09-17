@php
    $size = $size ?? 32;
@endphp

@switch($name)
    @case('wifi')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="m1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.08 2.93 1 9m8 8l3 3l3-3a4.237 4.237 0 0 0-6 0m-4-4l2 2a7.074 7.074 0 0 1 10 0l2-2C15.14 9.14 8.87 9.14 5 13" />
        </svg>
    @break

    @case('cctv')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 512 512">
            <path fill="currentColor"
                d="M109.285 30.402c-14.82-.007-30.414 2.144-46.822 6.932l-.145.05a10 10 0 0 0-.496.173a10 10 0 0 0-.39.152a10 10 0 0 0-.47.218a10 10 0 0 0-.384.193a10 10 0 0 0-.463.273a10 10 0 0 0-.342.22a10 10 0 0 0-.435.32a10 10 0 0 0-.324.256a10 10 0 0 0-.397.357a10 10 0 0 0-.297.29a10 10 0 0 0-.37.405a10 10 0 0 0-.247.293a10 10 0 0 0-.342.463a10 10 0 0 0-.215.315a10 10 0 0 0-.282.472a10 10 0 0 0-.193.354a10 10 0 0 0-.233.497a10 10 0 0 0-.156.367a10 10 0 0 0-.178.512a10 10 0 0 0-.122.386a10 10 0 0 0-.17.688L33.42 156.55a9.5 9.5 0 0 0 5.625 10.614l82.023 34.578l31.62 162.133l-116.534 25.313a9.5 9.5 0 0 0-7.5 9.156l-1.062 76.47A9.5 9.5 0 0 0 39.967 484l146.468-46.813l24.123-4.677c.177.003.353.015.53.015c9.956 0 19.332-4.742 25.88-12.472c6.543-7.724 9.966-17.79 9.956-28.16v-.026c.006-6.574-1.372-13.037-4.045-18.855l-25.273-130.57l125.774 53.02l.155.058a10 10 0 0 0 .545.197a10 10 0 0 0 .35.11a10 10 0 0 0 .543.138a10 10 0 0 0 .416.086a10 10 0 0 0 .483.073a10 10 0 0 0 .482.05a10 10 0 0 0 .43.02a10 10 0 0 0 .54.004a10 10 0 0 0 .363-.01l83.406-5.28a9.5 9.5 0 0 0 7.97-5.438l50.522-106.954l.008-.014v-.002l.02-.047a9.5 9.5 0 0 0-5.51-13.137a93.5 93.5 0 0 0-23.956-9.148L152.273 36.688a10 10 0 0 0-.802-.268c-13.317-3.843-27.364-6.01-42.185-6.018zM82.938 44.125a9.5 9.5 0 0 1 3.687.72l290.75 116.53a9.51 9.51 0 0 1 5.77 10.79a9.5 9.5 0 0 0-.707 1.46l-.836 2.07a9.51 9.51 0 0 1-11.29 3.336L79.563 62.47a9.5 9.5 0 0 1 3.376-18.345zm357.308 128.367c4.4.038 8.75.508 13.068 1.404l14.74 5.72l-23.67 50.114c.912-4.058 1.378-8.082 1.335-11.855c-.1-8.732-2.94-15.95-7.845-19.563s-11.688-3.48-18.375.25c-1.65.92-3.305 2.063-4.906 3.375c.614-.822 1.19-1.72 1.687-2.687c1.417-2.757 2.248-5.952 2.22-8.78c-.032-2.835-.945-5.243-2.563-6.47a4.35 4.35 0 0 0-2.75-.906c-1.01.016-2.102.332-3.156.937c-2.107 1.212-4.08 3.52-5.5 6.282c-1.417 2.764-2.25 5.948-2.217 8.782c.03 2.833.945 5.242 2.562 6.47c1.617 1.225 3.798 1.147 5.906-.064c-3.416 3.562-6.546 7.9-9.092 12.72c-4.608 8.716-7.226 18.798-7.125 27.53s3 15.98 7.906 19.594c4.904 3.614 11.624 3.45 18.31-.28c4.178-2.332 8.29-6.018 11.91-10.582l-8.41 17.8l-62.75 4l37.253-92.39c14.635-7.746 28.272-11.513 41.463-11.4zm-298.078 38.145l16.014 6.752l29.732 139.555a32 32 0 0 0-9.342-1.41c-2.724 0-5.4.366-7.988 1.037l-28.416-145.935zm37.353 15.748l17.017 7.174l23 118.83a32 32 0 0 0-8.447-1.156c-1.643 0-3.266.14-4.865.39l-26.704-125.24zM211.09 370.3c3.863 0 8.258 1.978 11.472 5.772s5.433 9.89 5.424 15.795a9.47 9.532 0 0 0 0 .026c.01 5.905-2.21 12-5.423 15.795a17.1 17.1 0 0 1-5.188 4.142l-6.143 1.19c2.106-5.273 3.184-11.002 3.178-16.827v-.025a46 46 0 0 0-1.342-11.107a9.5 9.5 0 0 0-.193-2.248l-2.656-12.458c.29-.022.583-.055.87-.055zm-32.518 4.3c3.864 0 8.26 1.978 11.475 5.773s5.43 9.89 5.422 15.795a9.47 9.532 0 0 0 0 .025c.008 5.905-2.21 12-5.423 15.795c-3.215 3.795-7.61 5.774-11.475 5.774c-3.863 0-8.233-1.98-11.447-5.774s-5.458-9.89-5.45-15.795a9.47 9.532 0 0 0 0-.025c-.008-5.905 2.236-12 5.45-15.795s7.584-5.773 11.447-5.773zm-34.496 10.59a46 46 0 0 0-1.312 10.978v.025c-.01 10.37 3.41 20.437 9.953 28.16q1.259 1.486 2.648 2.817L46.78 461.875l.782-55.72l96.514-20.966z" />
        </svg>
    @break

    @case('network')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <rect width="6" height="6" x="16" y="16" rx="1" />
                <rect width="6" height="6" x="2" y="16" rx="1" />
                <rect width="6" height="6" x="9" y="2" rx="1" />
                <path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3m-7-4V8" />
            </g>
        </svg>
    @break

    @case('radio')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path
                    d="M16.247 7.761a6 6 0 0 1 0 8.478m2.828-11.306a10 10 0 0 1 0 14.134m-14.15 0a10 10 0 0 1 0-14.134m2.828 11.306a6 6 0 0 1 0-8.478" />
                <circle cx="12" cy="12" r="2" />
            </g>
        </svg>
    @break

    @case('access')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M7 14q-.825 0-1.412-.587T5 12t.588-1.412T7 10t1.413.588T9 12t-.587 1.413T7 14m0 4q-2.5 0-4.25-1.75T1 12t1.75-4.25T7 6q1.675 0 3.038.825T12.2 9H21l3 3l-4.5 4.5l-2-1.5l-2 1.5l-2.125-1.5H12.2q-.8 1.35-2.162 2.175T7 18m0-2q1.4 0 2.463-.85T10.875 13H14l1.45 1.025L17.5 12.5l1.775 1.375L21.15 12l-1-1h-9.275q-.35-1.3-1.412-2.15T7 8Q5.35 8 4.175 9.175T3 12t1.175 2.825T7 16" />
        </svg>
    @break

    @case('arrow-right')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24">
            <g fill="none" fill-rule="evenodd">
                <path
                    d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                <path fill="currentColor"
                    d="M15.707 11.293a1 1 0 0 1 0 1.414l-5.657 5.657a1 1 0 1 1-1.414-1.414l4.95-4.95l-4.95-4.95a1 1 0 0 1 1.414-1.414z" />
            </g>
        </svg>
    @break

    @case('arrow-right-2')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M4 12h16m0 0l-6-6m6 6l-6 6" />
        </svg>
    @break

    @case('arrow-left')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24">
            <g fill="none" fill-rule="evenodd">
                <path
                    d="M24 0v24H0V0zM11.407 23.258l.011.002l.071.035l.02.004l.014-.004l.071-.035q.016-.005.024.005l.004.01l.017.428l-.005.02l-.01.013l-.104.074l-.015.004l-.012-.004l-.104-.074l-.012-.016l-.004-.017l.017-.427q.004-.016.017-.018m-.265-.113l.013.002l.185.093l.01.01l.003.011l-.018.43l-.005.012l-.008.007l-.201.093q-.019.005-.029-.008l-.004-.014l.034-.614q.005-.019.02-.022m.715.002a.02.02 0 0 1 .027.006l.006.014l.034.614q-.001.018-.017.024l-.015-.002l-.201-.093l-.01-.008l-.004-.011l-.017-.43l.003-.012l.01-.01z" />
                <path fill="currentColor"
                    d="M8.293 12.707a1 1 0 0 1 0-1.414l5.657-5.657a1 1 0 1 1 1.414 1.414l-4.95 4.95l4.95 4.95a1 1 0 0 1-1.414 1.414z" />
            </g>
        </svg>
    @break

    @case('arrow-left-2')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M20 12H4m0 0l6-6m-6 6l6 6" />
        </svg>
    @break

    @case('arrow-up')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 16 16">
            <path fill="currentColor"
                d="m2.931 10.843l4.685-4.611a.546.546 0 0 1 .768 0l4.685 4.61a.55.55 0 0 0 .771 0a.53.53 0 0 0 0-.759l-4.684-4.61a1.65 1.65 0 0 0-2.312 0l-4.684 4.61a.53.53 0 0 0 0 .76a.55.55 0 0 0 .771 0" />
        </svg>
    @break

    @case('map')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 36 36">
            <path fill="currentColor"
                d="M33.31 7.35L25 9.94V14h-2v-3.71l-9-4.61V9h-2V5.27l-9.67 4a.53.53 0 0 0-.33.48v20.7a.53.53 0 0 0 .74.49L12 27.12V23h2v4.53l9 4.61V28h2v3.79l8.63-2.7a.53.53 0 0 0 .37-.51V7.86a.53.53 0 0 0-.69-.51M14 21h-2v-4h2Zm0-6h-2v-4h2Zm11 11h-2v-4h2Zm0-6h-2v-4h2Z"
                class="clr-i-solid clr-i-solid-path-1" />
            <path fill="none" d="M0 0h36v36H0z" />
        </svg>
    @break

    @case('email-newsletter')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M12 .64L8.23 3H5v2L2.97 6.29C2.39 6.64 2 7.27 2 8v10a2 2 0 0 0 2 2h16c1.11 0 2-.89 2-2V8c0-.73-.39-1.36-.97-1.71L19 5V3h-3.23M7 5h10v4.88L12 13L7 9.88M8 6v1.5h8V6M5 7.38v1.25L4 8m15-.62L20 8l-1 .63M8 8.5V10h8V8.5Z" />
        </svg>
    @break

    @case('phone')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="m19.23 15.26l-2.54-.29a1.99 1.99 0 0 0-1.64.57l-1.84 1.84a15.05 15.05 0 0 1-6.59-6.59l1.85-1.85c.43-.43.64-1.03.57-1.64l-.29-2.52a2 2 0 0 0-1.99-1.77H5.03c-1.13 0-2.07.94-2 2.07c.53 8.54 7.36 15.36 15.89 15.89c1.13.07 2.07-.87 2.07-2v-1.73c.01-1.01-.75-1.86-1.76-1.98" />
        </svg>
    @break

    @case('whatsapp')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}"
            viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
        </svg>
    @break

    @case('x-twitter')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}"
            viewBox="0 0 16 16">
            <path fill="currentColor"
                d="M9.294 6.928L14.357 1h-1.2L8.762 6.147L5.25 1H1.2l5.31 7.784L1.2 15h1.2l4.642-5.436L10.751 15h4.05zM7.651 8.852l-.538-.775L2.832 1.91h1.843l3.454 4.977l.538.775l4.491 6.47h-1.843z" />
        </svg>
    @break

    @case('facebook')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}"
            viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4z" />
        </svg>
    @break

    @case('instagram')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}"
            viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16a4 4 0 1 0 0-8a4 4 0 0 0 0 8" />
                <path d="M3 16V8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="m17.5 6.51l.01-.011" />
            </g>
        </svg>
    @break

    @case('navigation')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}"
            viewBox="0 0 16 16">
            <path fill="currentColor"
                d="M2 3.75A.75.75 0 0 1 2.75 3h10.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 3.75m0 4A.75.75 0 0 1 2.75 7h10.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 7.75m0 4a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75" />
        </svg>
    @break

    @case('time')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}"
            viewBox="0 0 24 24">
            <g fill="none">
                <path
                    d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                <path fill="currentColor"
                    d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2m0 4a1 1 0 0 0-1 1v5a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V7a1 1 0 0 0-1-1" />
            </g>
        </svg>
    @break

    @case('play-arrow')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}"
            viewBox="0 0 24 24">
            <path fill="currentColor" d="M8 19V5l11 7z" />
        </svg>
    @break

    @case('file')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}"
            viewBox="0 0 24 24">
            <path fill="currentColor" d="M13 9V3.5L18.5 9M6 2c-1.11 0-2 .89-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z" />
        </svg>
    @break

    @case('date')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}"
            viewBox="0 0 36 36">
            <path fill="currentColor"
                d="M32.25 6H29v2h3v22H4V8h3V6H3.75A1.78 1.78 0 0 0 2 7.81v22.38A1.78 1.78 0 0 0 3.75 32h28.5A1.78 1.78 0 0 0 34 30.19V7.81A1.78 1.78 0 0 0 32.25 6"
                class="clr-i-outline clr-i-outline-path-1" />
            <path fill="currentColor" d="M8 14h2v2H8z" class="clr-i-outline clr-i-outline-path-2" />
            <path fill="currentColor" d="M14 14h2v2h-2z" class="clr-i-outline clr-i-outline-path-3" />
            <path fill="currentColor" d="M20 14h2v2h-2z" class="clr-i-outline clr-i-outline-path-4" />
            <path fill="currentColor" d="M26 14h2v2h-2z" class="clr-i-outline clr-i-outline-path-5" />
            <path fill="currentColor" d="M8 19h2v2H8z" class="clr-i-outline clr-i-outline-path-6" />
            <path fill="currentColor" d="M14 19h2v2h-2z" class="clr-i-outline clr-i-outline-path-7" />
            <path fill="currentColor" d="M20 19h2v2h-2z" class="clr-i-outline clr-i-outline-path-8" />
            <path fill="currentColor" d="M26 19h2v2h-2z" class="clr-i-outline clr-i-outline-path-9" />
            <path fill="currentColor" d="M8 24h2v2H8z" class="clr-i-outline clr-i-outline-path-10" />
            <path fill="currentColor" d="M14 24h2v2h-2z" class="clr-i-outline clr-i-outline-path-11" />
            <path fill="currentColor" d="M20 24h2v2h-2z" class="clr-i-outline clr-i-outline-path-12" />
            <path fill="currentColor" d="M26 24h2v2h-2z" class="clr-i-outline clr-i-outline-path-13" />
            <path fill="currentColor" d="M10 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1"
                class="clr-i-outline clr-i-outline-path-14" />
            <path fill="currentColor" d="M26 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1"
                class="clr-i-outline clr-i-outline-path-15" />
            <path fill="currentColor" d="M13 6h10v2H13z" class="clr-i-outline clr-i-outline-path-16" />
            <path fill="none" d="M0 0h36v36H0z" />
        </svg>
    @break

    @case('user')
        <svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}"
            viewBox="0 0 256 256">
            <path fill="currentColor"
                d="M230.93 220a8 8 0 0 1-6.93 4H32a8 8 0 0 1-6.92-12c15.23-26.33 38.7-45.21 66.09-54.16a72 72 0 1 1 73.66 0c27.39 8.95 50.86 27.83 66.09 54.16a8 8 0 0 1 .01 8" />
        </svg>
    @break

    {{-- icon lainnya --}}
@endswitch
