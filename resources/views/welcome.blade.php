<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name')}}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600&display=swap"
        rel="stylesheet">

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#00a8f3">
    <meta name="msapplication-TileColor" content="#00a8f3">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <script>
        window.Laravel = {csrfToken: '{{ csrf_token() }}'}
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>

<body class="antialiased font-sans text-13px font-medium">
    <div
        class="relative flex items-top justify-center min-h-screen bg-grayish-blue dark:bg-gray-900 sm:items-center pt-16 pb-24 desktop:pt-40">
        <div class="container desktop:max-w-6xl mx-auto px-7">
            <div x-data="app" class="grid grid-cols-1 md:grid-cols-2 gap-7 xl:grid-cols-3 desktop:grid-cols-4" x-transition x-show="data.length>0">
                <template x-for="testimonial in data" :key="testimonial.id">
                    <div
                        class="px-8 py-7 desktop:pt-6 pb-8 relative rounded-lg shadow-xl" :class="'bg-'+testimonial.background+' text-'+testimonial.color+' '+testimonial.class">
                        <x-quote class="absolute top-0 right-5 z-0 desktop:right-20 desktop:mr-2" x-show="testimonial.id==1" />
                        <div class="z-10 relative">
                            <div class="flex">
                                <img class="border-2 border-opacity-50 w-8 h-8 rounded-full" :class="'border-'+testimonial.color"
                                    :src="'{{ asset('storage')}}/'+testimonial.path_img" :alt="testimonial.name">
                                <div class="px-3.5 grid grid-cols-1 my-auto">
                                    <span x-text="testimonial.name"></span>
                                    <span class="opacity-50 text-11px -mt-0.5" x-text="testimonial.verified"></span>
                                </div>
                            </div>

                            <div class="mt-2 desktop:mt-4 dark:text-gray-400 text-title desktop:leading-tight" :class="{'font-semibold': testimonial.background=='white'}" x-text="testimonial.title">
                            </div>
                            <div class="mt-3 desktop:mt-5 opacity-70 pr-2 desktop:pr-0" x-text='`" ${testimonial.description} "`'>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</body>

</html>
