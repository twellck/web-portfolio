@php use App\Helpers\Icons; @endphp
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Tim Wellbrock - Web & Mobile Full Stack Developer</title>
    <meta name="description"
          content="I'm Tim, a French/Australian Full Stack Developer with 3+ years of experience in web development and 4+ years of experience in mobile development. You can have a look at my work here !"/>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <link href="{{ Vite::asset('resources/images/rounded-profile-picture.png') }}" rel="shortcut icon">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.4/photoswipe.min.css"
          integrity="sha512-TdCx5ObKpq3+lwUdiXFgFLhqwTB98YsdaQWSJrwkOz084qaeO86+NMYfU/pnpPo1pDVah0a7yvFmbcvI8ZiGAw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
@php
    $project_modals = [];

    foreach ($projects as $key => $v){
        $project_modals[$key] = false;
    }
@endphp
<body class=" min-h-screen" x-data="{projectModals: @json($project_modals)}">
<section class="flex flex-col items-center justify-center min-h-screen h-screen w-screen">

    <div class="my-12 rellax"
         data-rellax-speed="0.25"
         data-rellax-mobile-speed="0.25"
         data-rellax-tablet-speed="0.25"
         data-rellax-desktop-speed="2">
        <img id="profile-picture" class="h-52 rounded-full border-1 border-white"
             src="{{ Vite::asset('resources/images/profile-picture.jpg') }}"/>
    </div>

    <div class="text-center uppercase tracking-wider rellax"
         data-rellax-speed="0.5"
         data-rellax-mobile-speed="0.15"
         data-rellax-tablet-speed="0.5"
         data-rellax-desktop-speed="2.5">
        <h1 class="animated-title text-4xl">Tim Wellbrock</h1>
        <h3 class="animated-title text-xl">Full Stack Developer</h3>
    </div>
    <a id="scroll-down" href="#my-work" data-rellax-speed="-0.2"
       class="cursor-pointer rellax absolute bottom-6 sm:bottom-16 w-16 h-16 rounded-full flex items-center justify-center">
        <svg class="fill-current hover:fill-black/60 h-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path
                d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/>
        </svg>
    </a>

    <a href="https://stripe.com" target="_blank" rel="noopener"
       class="tech-icon-hidden sm:tech-icon-visible cursor-pointer absolute top-[6%] left-[14%] xl:top-[10%] xl:left-[20%] transition-parallax duration-500 rellax"
       data-rellax-speed="0.25"
       data-rellax-tablet-speed="-0.25"
       data-rellax-desktop-speed="0.25">
        <img class="h-24 w-24 tech-icon-shadow-md"
             src="{{ Vite::asset('resources/images/technologies/stripe.svg') }}"/>
    </a>
    <a href="https://firebase.google.com/" target="_blank" rel="noopener"
       class="tech-icon-hidden sm:tech-icon-visible cursor-pointer absolute bottom-[10%] left-[10%] transition-parallax duration-500 rellax"
       data-rellax-speed="0.35"
       data-rellax-tablet-speed="0.35"
       data-rellax-desktop-speed="0.35">
        <img class="h-20 w-20 tech-icon-shadow-md"
             src="{{ Vite::asset('resources/images/technologies/firebase.svg') }}"/>
    </a>
    <a href="https://tailwindcss.com" target="_blank" rel="noopener"
       class="tech-icon-hidden sm:tech-icon-visible cursor-pointer absolute top-[8%] right-[10%] lg:top-[15%] lg:right-[12%] xl:top-[43%] xl:right-[32%] transition-parallax duration-500 rellax"
       data-rellax-speed="0.5"
       data-rellax-mobile-speed="-0.25"
       data-rellax-tablet-speed="2.5">
        <img class="h-20 w-20 tech-icon-shadow-md"
             src="{{ Vite::asset('resources/images/technologies/tailwindcss.svg') }}"/>
    </a>
    <a href="https://flutter.dev" target="_blank" rel="noopener"
       class="tech-icon-hidden lg:tech-icon-visible cursor-pointer absolute bottom-[28%] left-[23%] transition-parallax duration-500 rellax"
       data-rellax-speed="1.25"
       data-rellax-tablet-speed="1"
       data-rellax-desktop-speed="2">
        <img class="h-16 w-16 tech-icon-shadow-md"
             src="{{ Vite::asset('resources/images/technologies/flutter.svg') }}"/>
    </a>
    <a href="https://github.com" target="_blank" rel="noopener"
       class="tech-icon-hidden sm:tech-icon-visible cursor-pointer absolute bottom-[35%] right-[15%] transition-parallax duration-500 rellax"
       data-rellax-speed="3"
       data-rellax-desktop-speed="5">
        <img class="h-20 w-20 tech-icon-shadow-md"
             src="{{ Vite::asset('resources/images/technologies/github.svg') }}"/>
    </a>
    <a href="https://www.jetbrains.com/idea/" target="_blank" rel="noopener"
       class="tech-icon-hidden sm:tech-icon-visible cursor-pointer absolute top-[30%] left-[5%] transition-parallax duration-500 rellax"
       data-rellax-speed="1.25"
       data-rellax-mobile-speed="0.45"
       data-rellax-tablet-speed="0.75"
       data-rellax-desktop-speed="1.25">
        <img class="h-24 w-24 tech-icon-shadow"
             src="{{ Vite::asset('resources/images/technologies/intellij-idea.svg') }}"/>
    </a>
    <a href="https://www.jetbrains.com/phpstorm/" target="_blank" rel="noopener"
       class="cursor-pointer absolute top-[60%] right-[12%] sm:top-[22%] sm:right-[20%] lg:top-[15%] lg:right-1/3 transition-parallax duration-500 rellax"
       data-rellax-speed="4"
       data-rellax-mobile-speed="2"
       data-rellax-tablet--speed="4"
       data-rellax-desktop-speed="8.25">
        <img class="h-16 w-16 sm:h-36 sm:w-36 tech-icon-shadow"
             src="{{ Vite::asset('resources/images/technologies/phpstorm.svg') }}"/>
    </a>
    <a href="https://github.com" target="_blank" rel="noopener"
       class="tech-icon-hidden xl:tech-icon-visible cursor-pointer absolute top-[15%] right-[12%] transition-parallax duration-500 rellax"
       data-rellax-speed="2.75">
        <img class="h-16 w-16 tech-icon-shadow-md"
             src="{{ Vite::asset('resources/images/technologies/slack.svg') }}"/>
    </a>
    <a href="https://blackfire.io/" target="_blank" rel="noopener"
       class="tech-icon-hidden sm:tech-icon-visible cursor-pointer absolute bottom-[10%] right-[6%] transition-parallax duration-500 rellax"
       data-rellax-speed="0.25">
        <img class="h-24 w-24 tech-icon-shadow-md"
             src="{{ Vite::asset('resources/images/technologies/blackfire.svg') }}"/>
    </a>
    <a href="https://reactjs.org/" target="_blank" rel="noopener"
       class="cursor-pointer absolute top-[51%] left-[12%] sm:top-[42%] sm:left-[18%] xl:top-[36%] transition-parallax duration-500 rellax"
       data-rellax-speed="0.65"
       data-rellax-tablet-speed="-0.25"
       data-rellax-desktop-speed="0.65">
        <img class="h-12 w-12 sm:h-24 sm:w-24 tech-icon-shadow-md"
             src="{{ Vite::asset('resources/images/technologies/reactjs.svg') }}"/>
    </a>
    <a href="https://www.typescriptlang.org/" target="_blank" rel="noopener"
       class="cursor-pointer absolute top-[20%] right-[5%] sm:right-[3%] sm:top-[43%] lg:right-[5%] transition-parallax duration-500 rellax"
       data-rellax-speed="-0.1"
       data-rellax-mobile-speed="0.25"
       data-rellax-tablet-speed="-0.1"
       data-rellax-desktop-speed="0.8">
        <img class="h-16 w-16 tech-icon-shadow-md"
             src="{{ Vite::asset('resources/images/technologies/typescript.svg') }}"/>
    </a>
    <a href="https://nodejs.org/" target="_blank" rel="noopener"
       class="tech-icon-hidden lg:tech-icon-visible cursor-pointer absolute bottom-[16%] right-[24%] xl:right-[30%] transition-parallax duration-500 rellax"
       data-rellax-speed="0.75"
       data-rellax-desktop-speed="1.5">
        <img class="h-28 w-28 tech-icon-shadow-md"
             src="{{ Vite::asset('resources/images/technologies/nodejs.svg') }}"/>
    </a>
    <a href="https://www.mysql.com/" target="_blank" rel="noopener"
       class="tech-icon-hidden sm:tech-icon-visible cursor-pointer absolute bottom-[8%] left-[55%] lg:bottom-[4%] lg:left-[30%] transition-parallax duration-500 rellax"
       data-rellax-speed="0.1"
       data-rellax-tablet-speed="0.75"
       data-rellax-desktop-speed="0.1">
        <img class="h-36 w-36 tech-icon-shadow-md"
             src="{{ Vite::asset('resources/images/technologies/mysql.svg') }}"/>
    </a>
    <a href="https://figma.com/" target="_blank" rel="noopener"
       class="tech-icon-hidden lg:tech-icon-visible cursor-pointer absolute top-[28%] right-[20%] transition-parallax duration-500 rellax"
       data-rellax-speed="0.25"
       data-rellax-desktop-speed="1.2">
        <img class="h-24 w-24 tech-icon-shadow-md"
             src="{{ Vite::asset('resources/images/technologies/figma.svg') }}"/>
    </a>
    <a href="https://laravel.com/" target="_blank" rel="noopener"
       class="cursor-pointer absolute top-[15%] left-[16%] sm:top-[16%] sm:left-1/4 xl:top-[23%] xl:left-1/3 transition-parallax duration-500 rellax"
       data-rellax-speed="2"
       data-rellax-mobile-speed="0.75"
       data-rellax-tablet-speed="1.45"
       data-rellax-desktop-speed="2.75">
        <img class="h-20 w-20 sm:h-36 sm:w-36 sm:h-44 sm:w-44 tech-icon-shadow-md"
             src="{{ Vite::asset('resources/images/technologies/laravel.svg') }}"/>
    </a>
</section>
<section id="my-work" class="min-h-screen w-screen mt-28 pt-12">
    <h2 id="project-title" class="text-center text-3xl uppercase" x-intersect.once="window.myWorkTitleAnimation();">My Work</h2>
    <div
        class="grid md:grid-cols-2 xl:grid-cols-3 grid-flow-row justify-items-center mt-16 gap-12 px-0 sm:px-20 lg:px-28">
        @foreach($projects as $project_key => $project)
            <div @click="projectModals[{{$project_key}}] = !projectModals[{{$project_key}}];"
                 id="project-{{$project_key}}"
                 class="group flex flex-col h-full bg-white shadow-md rounded-lg max-w-md mb-2 cursor-pointer hover:scale-[1.025] transition-transform">
                <img class="h-[200px] w-full object-cover rounded-t-lg"
                     src="{{$project->images_urls[0] ?? 'https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png'}}"
                     alt="">
                <div class="flex p-5 flex-col justify-between h-full">
                    <div>
                        <div class="flex items-center">
                            <h5 class="font-bold text-2xl tracking-tighter">{{ $project->name }}</h5>
                            @if(!empty($project->project_url) && $project->project_url != route('landing'))
                                <a @click.stop href="{{ $project->project_url }}" target="_blank" rel="noopener"
                                   class="cursor-pointer"><img class="ml-2 fill-current h-5 w-5"
                                                               src="{{ Vite::asset('resources/images/ext_link.svg') }}"></a>
                            @endif
                        </div>
                        <h6 class="font-bold text-black space-x-1 mb-0.5 text-sm">{{ $project->getFormattedProjectPeriod() }}</h6>
                        @if(!empty($project->company))
                            <h6 class="text-black space-x-1 mb-2 text-sm">{{ $project->company }}</h6>
                        @endif
                        <p class="font-normal mb-3 whitespace-pre-wrap">{!! $project->getTrimmedDescription() !!}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold pb-3">Read More</p>
                        <div
                            class="relative -left-1 flex flex-wrap items-end justify-start content-end h-full w-full text-xs font-bold">
                            @foreach($project->technologies as $tech)
                                <span class="bg-slate-200/60 m-1 py-1.5 px-2 rounded-xl">#{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<footer class="p-4 pt-8 rounded-lg shadow flex items-center justify-between md:p-6 md:pt-12">
        <span class="text-sm sm:text-center">© 2022 <a href="{{ route('landing') }}" class="cursor-pointer hover:underline">Tim Wellbrock</a>. All Rights Reserved.
        </span>
    <div class="flex mt-4 space-x-6 items-center sm:justify-center sm:mt-0">
        <a href="https://www.linkedin.com/in/tim-wellbrock-84ba331b9/" target="_blank" rel="noopener"
           class="cursor-pointer text-gray-900 hover:text-gray-700 ">
            <svg class="w-6 h-6" fill="currentColor" height="800px" width="800px" id="Layer_1" viewBox="0 0 455 455"
                 xml:space="preserve">
<g>
    <path style="fill-rule:evenodd;clip-rule:evenodd;"
          d="M246.4,204.35v-0.665c-0.136,0.223-0.324,0.446-0.442,0.665H246.4z"/>
    <path style="fill-rule:evenodd;clip-rule:evenodd;"
          d="M0,0v455h455V0H0z M141.522,378.002H74.016V174.906h67.506V378.002z    M107.769,147.186h-0.446C84.678,147.186,70,131.585,70,112.085c0-19.928,15.107-35.087,38.211-35.087   c23.109,0,37.31,15.159,37.752,35.087C145.963,131.585,131.32,147.186,107.769,147.186z M385,378.002h-67.524V269.345   c0-27.291-9.756-45.92-34.195-45.92c-18.664,0-29.755,12.543-34.641,24.693c-1.776,4.34-2.24,10.373-2.24,16.459v113.426h-67.537   c0,0,0.905-184.043,0-203.096H246.4v28.779c8.973-13.807,24.986-33.547,60.856-33.547c44.437,0,77.744,29.02,77.744,91.398V378.002   z"/>
</g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
</svg>
            <span class="sr-only">LinkedIn</span>
        </a>
        <a href="https://github.com/twellck" target="_blank" rel="noopener" class="cursor-pointer text-gray-900 hover:text-gray-700">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                      clip-rule="evenodd"/>
            </svg>
            <span class="sr-only">GitHub</span>
        </a>
    </div>
</footer>
{{--    PROJECT MODALS  --}}
@foreach($projects as $project_key => $project)
    <div @click="projectModals[{{$project_key}}] = false" x-show="projectModals[{{$project_key}}]"
         @keydown.escape.window="projectModals[{{$project_key}}] = false"
         x-trap.noscroll.inert="projectModals[{{$project_key}}]"
         class="fixed w-full h-full top-0 left-0 flex items-center justify-center backdrop-blur-md overflow-auto"
         x-cloak x-transition.duration.350ms>
        <div @click.stop class="absolute w-full h-full md:w-fit md:h-fit md:max-w-2xl md:rounded-xl bg-white">
            <div @click="projectModals[{{$project_key}}] = false"
                 class="absolute z-50 text-white top-0 right-0 flex flex-col items-center mt-4 mr-4 text-yellow-500 text-sm cursor-pointer text-lg md:text-sm">
                <svg class="fill-current h-10 w-10 md:h-6 md-w-6" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 18 18">
                    <path
                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                (Esc)
            </div>

            <div class="h-full w-full">
                @if(count($project->images_urls ?? []) > 1)
                    <div class="swiper h-[150px] sm:h-[200px] md:h-[300px] w-full md:rounded-t-xl"
                         id="project-{{$project_key}}-gallery">
                        <ul class="swiper-wrapper" itemscope itemtype="http://schema.org/ImageGallery">
                            <!-- Slides -->
                            @foreach($project->images_urls ?? [] as $image_url)
                                <li id="slide_1" class="swiper-slide" itemprop="associatedMedia" itemscope
                                    itemtype="http://schema.org/ImageObject">
                                    <a
                                        class="cursor-pointer "
                                        itemprop="contentUrl"
                                        href="{{$image_url}}"
                                        data-pswp-width="1600"
                                        data-pswp-height="900"
                                        target="_blank"
                                    >
                                        <img
                                            class="object-cover"
                                            src="{{$image_url}}"
                                            alt=""
                                            itemprop="thumbnail"
                                        />
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination text-yellow-500 text-xl"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev cursor-pointer text-yellow-500"></div>
                        <div class="swiper-button-next cursor-pointer text-yellow-500"></div>
                    </div>
                @else
                    <img class="h-[40%] md:h-[35%] w-full object-cover md:rounded-t-xl"
                         src="{{$project->images_urls[0] ?? 'https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png'}}"
                         alt="">
                @endif
                <div class="py-4 px-6">
                    <div class="flex items-center">
                        <h5 class="text-2xl font-bold text-center tracking-tighter md:text-left">{{ $project->name }}</h5>
                        @if(!empty($project->project_url) && $project->project_url != route('landing'))
                            <a href="{{ $project->project_url }}" target="_blank" rel="noopener" class="cursor-pointer"><img
                                    class="ml-3 fill-current h-7 w-7"
                                    src="{{ Vite::asset('resources/images/ext_link.svg') }}"></a>
                        @endif
                    </div>
                    <h6 class="font-bold text-black space-x-1 mb-1 text-sm">{{ $project->getFormattedProjectPeriod() }}</h6>
                    @if(!empty($project->company))
                        <h6 class="text-black space-x-1 mb-4 text-sm">{{ $project->company }}</h6>
                    @endif
                    <p class="whitespace-pre-wrap pb-4">{{ $project->description }}</p>
                    <div class="relative -left-1 w-full flex flex-wrap items-center text-xs font-bold -mr-1">
                        @foreach($project->technologies as $tech)
                            <span class="bg-slate-200/60 py-1.5 px-2.5 rounded-xl m-1">#{{$tech}}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @if(count($project->images_urls ?? []) > 1)
            <script type="module">
                let swiper_{{$project_key}} = new Swiper("#project-{{$project_key}}-gallery", {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    centeredSlides: true,
                    grabCursor: true,
                    effect: "creative",
                    creativeEffect: {
                        prev: {
                            translate: ["-50%", 0, -1],
                        },
                        next: {
                            translate: ["100%", 0, 0],
                        },
                    },
                    loop: window.swiper_photoswipe_loop_setting,
                    pagination: {
                        el: ".swiper-pagination",
                        type: "fraction",
                    },
                    // Navigation arrows
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    // keyboard control
                    keyboard: {
                        enabled: true,
                    }
                });

                import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5.3.4/dist/photoswipe-lightbox.esm.js';
                import PhotoSwipe from 'https://unpkg.com/photoswipe@5.3.4/dist/photoswipe.esm.js';

                const lightbox_{{$project_key}} = new PhotoSwipeLightbox({
                    gallery: '#project-{{$project_key}}-gallery',
                    pswpModule: PhotoSwipe,
                    // set background opacity
                    showHideOpacity: true,
                    children: 'a',
                    loop: window.swiper_photoswipe_loop_setting,
                    showHideAnimationType: 'zoom', /* options: fade, zoom, none */

                    /* Click on image moves to the next slide */
                    imageClickAction: 'next',
                    tapAction: 'next',

                    /* ## Hiding a specific UI element ## */
                    zoom: false,
                    close: true,
                    escKey: false,
                    counter: !window.swiper_photoswipe_loop_setting,
                    arrowKeys: true,
                    /* ## Options ## */
                    wheelToZoom: true, /* deafult: undefined */
                });

                lightbox_{{$project_key}}.init();

                lightbox_{{$project_key}}.on('change', () => {
                    const pswp_{{$project_key}} = lightbox_{{$project_key}}.pswp;
                    swiper_{{$project_key}}.slideTo(pswp_{{$project_key}}.currIndex, 0, false);
                });

                lightbox_{{$project_key}}.on('afterInit', () => {
                    if (swiper_{{$project_key}}.params.autoplay.enabled) {
                        swiper_{{$project_key}}.autoplay.stop();
                    }
                });


                lightbox_{{$project_key}}.on('closingAnimationStart', () => {
                    const pswp_{{$project_key}} = lightbox_{{$project_key}}.pswp;
                    swiper_{{$project_key}}.slideTo(pswp_{{$project_key}}.currIndex, 0, false);
                    /* if autoplay enabled == true -> autoplay.start() when close lightbox */
                    if (swiper_{{$project_key}}.params.autoplay.enabled) {
                        swiper_{{$project_key}}.autoplay.start();
                    }
                });
            </script>
        @endif
    </div>
@endforeach
</body>
</html>
