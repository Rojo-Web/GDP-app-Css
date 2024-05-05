<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GDP</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-left-20 {
            left: -5rem
        }

        .top-0 {
            top: 0px
        }

        .-bottom-16 {
            bottom: -4rem
        }

        .-left-16 {
            left: -4rem
        }

        .-mx-3 {
            margin-left: -0.75rem;
            margin-right: -0.75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .aspect-video {
            aspect-ratio: 16 / 9
        }

        .size-12 {
            width: 3rem;
            height: 3rem
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-40 {
            height: 10rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-full {
            width: 100%
        }

        .w-\[calc\(100\%\+8rem\)\] {
            width: calc(100% + 8rem)
        }

        .w-auto {
            width: auto
        }

        .max-w-\[877px\] {
            max-width: 877px
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .items-stretch {
            align-items: stretch
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .self-center {
            align-self: center
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-\[10px\] {
            border-radius: 10px
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-md {
            border-radius: 0.375rem
        }

        .rounded-sm {
            border-radius: 0.125rem
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: rgb(255 45 32 / 0.1)
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }

        .stroke-\[\#FF2D20\] {
            stroke: #FF2D20
        }

        .object-cover {
            object-fit: cover
        }

        .object-top {
            object-position: top
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .pt-3 {
            padding-top: 0.75rem
        }

        .text-center {
            text-align: center
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .text-sm\/relaxed {
            font-size: 0.875rem;
            line-height: 1.625
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-semibold {
            font-weight: 600
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-transparent {
            --tw-ring-color: transparent
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / 0.05)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .duration-300 {
            transition-duration: 300ms
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .hover\:text-black\/70:hover {
            color: rgb(0 0 0 / 0.7)
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / 0.2)
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
        }

        @media (min-width: 640px) {
            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0px
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }

            .dark\:hidden {
                display: none
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity))
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity))
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .dark\:text-white\/50 {
                color: rgb(255 255 255 / 0.5)
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-white\/70 {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:hover\:text-white\/70:hover {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:hover\:text-white\/80:hover {
                color: rgb(255 255 255 / 0.8)
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
            }
        }
    </style>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">


    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Capa_2" data-name="Capa 2" viewBox="0 0 154.81 158.13" width="80" height="80">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <g id="Capa_1-2" data-name="Capa 1">
                                <path class="cls-1" d="m18.57,122.02c1.35,1.43,2.59,2.74,3.91,4.14,1.55-1.37,2.88-2.56,4.21-3.74,3.3-2.93,6.59-5.87,9.92-8.78.89-.78,1.04-1.44.04-2.2-.26-.2-.46-.48-.7-.71-.74-.68-.87-1.28.11-1.88.42-.26.84-.6,1.11-1,.52-.79,1.04-.89,1.73-.11l.18-.26c-.71-1-1.42-2-2-2.82-.33.4-.54.87-.9,1.06-2.53,1.34-2.57,1.33-3.93-1.22-.44-.83-.93-.48-1.44-.23-3.44,1.68-6.88,3.36-10.3,5.06-1.75.87-3.44,1.86-5.23,2.65-.94.42-1.04.99-.76,1.78.38,1.06.8,2.1,1.25,3.13.28.64.14,1.01-.51,1.26-.97.37-1.97.71-2.87,1.22-1.2.68-1.83.23-2.33-.86-1.1-2.42-2.32-4.8-3.31-7.27-1.52-3.78-2.93-7.6-4.3-11.43-.6-1.68-.48-1.79,1.14-2.5.84-.37,1.71-.66,2.52-1.08.86-.45,1.33-.13,1.65.66.4,1,.89,1.99,1.16,3.03.29,1.1.83,1.1,1.74.78,4.9-1.74,9.81-3.44,14.72-5.15.82-.28,1.65-.53,2.66-.85-.25-.88-.47-1.75-.76-2.6-.28-.79-.15-1.27.76-1.44,1.01-.2,2.01-.47,3.17-.75-.09-.58-.22-1.5-.33-2.26-1.28.08-2.46.18-3.64.22-.75.02-.93-.48-1-1.15-.24-2.5-.26-2.55-2.83-2.4-5.32.3-10.64.67-15.96.98-.75.04-1.04.33-1.03,1.05.02,1.49,0,2.99,0,4.69-1.75,0-3.48.06-5.2-.06-.29-.02-.7-.85-.74-1.34C.24,87.16-.01,84.66,0,82.17c.03-4.33.2-8.66.39-12.98.09-1.95.19-1.96,2.18-1.99q3.8-.06,3.84,3.73c0,.62,0,1.23,0,1.94,1.86.18,3.58.38,5.31.5,4.24.29,8.47.52,12.71.84,1.24.09,1.77-.19,1.77-1.59,0-2.17.11-2.17,2.36-1.96.73.07,1.46.15,2.26.24.28-1.49.56-3.02.88-4.73-.19.41-.32.66-.43.92q-.7,1.58-2.33.98c-2.02-.74-2.06-.82-1.4-2.87.14-.43.3-.85.48-1.38-.43-.19-.79-.39-1.16-.52-5.41-1.91-10.83-3.79-16.23-5.74-.93-.33-1.35-.13-1.66.77-.36,1.06-.86,2.07-1.27,3.12-.3.77-.72,1.03-1.53.64-.9-.43-1.84-.78-2.78-1.1-1.05-.36-1.49-.98-1.08-2.08,1.46-3.98,2.83-8,4.38-11.94.97-2.47,2.21-4.84,3.32-7.26.51-1.1,1.22-1.47,2.39-.86.92.48,1.9.84,2.86,1.24.62.26.79.63.5,1.27-.5,1.14-.9,2.33-1.39,3.48-.31.73-.13,1.06.61,1.42,5.26,2.6,10.5,5.23,15.71,7.93.9.47,1.24.23,1.62-.53,1.31-2.6,2.03-2.72,4.17-.7.21.19.34.46.61.81.95-1.38,1.85-2.7,2.76-4.03-.08-.03-.18-.08-.2-.06-.55.46-1.38,1.43-1.6,1.31-.95-.53-1.76-1.35-2.53-2.15-.14-.14.04-.79.26-1.05,1.79-2.11,1.81-2.11-.23-3.94-3.87-3.49-7.73-6.97-11.6-10.45-1.23-1.1-1.27-1.08-2.35.12-.67.74-1.4,1.42-2.07,2.16-.56.62-1.01.54-1.54-.06-.71-.82-1.43-1.64-2.23-2.36-.87-.78-.77-1.47-.06-2.24,2.75-3.01,5.43-6.08,8.26-9.01,1.85-1.91,3.87-3.66,5.88-5.41,1.32-1.15,1.52-1.08,2.74.21.9.96,1.82,1.9,2.59,2.71-1.05,1.16-1.93,2.22-2.91,3.16-.57.55-.68.94-.15,1.56,4.06,4.75,8.09,9.51,12.27,14.42.65-.55,1.28-.95,1.73-1.5.71-.87,1.3-.73,1.9.04.63.81,1.23,1.64,1.92,2.58.58-.37,1.27-.8,1.96-1.23-.57-1.12-1.06-2.16-1.62-3.17-.41-.74-.3-1.18.49-1.58,2.32-1.18,2.3-1.2,1.17-3.58-2.29-4.81-4.59-9.61-6.86-14.43-.43-.91-.9-1.31-1.92-.77-.95.51-1.95.95-2.97,1.29-.33.11-1.03-.09-1.16-.35-.61-1.22-1.16-2.49-1.56-3.8-.12-.39.17-1.19.51-1.38,5.67-3.09,11.57-5.67,17.7-7.72,2.94-.98,2.96-.94,4.12,1.96q1.03,2.58-1.52,3.63c-2.59,1.06-2.62,1.07-1.74,3.73,1.67,5.05,3.41,10.08,5.06,15.13.36,1.09.87,1.4,1.89.85.33-.18.7-.27,1.06-.38.91-.26,1.44.11,1.64,1.01.21.96.42,1.92.63,2.9,1.24-.1,2.51-.21,3.77-.31,0-.06,0-.11-.01-.17-.51-.09-1.22,0-1.47-.3-.28-.34-.17-1.02-.19-1.56q-.11-2.7,2.72-2.85c.2-.01.4-.05.78-.09-.1-1.85-.2-3.66-.3-5.47-.24-4.32-.5-8.64-.73-12.97-.09-1.63-.09-1.66-1.71-1.67-.92,0-1.83-.03-2.75,0-.94.03-1.39-.31-1.31-1.32.06-.91.02-1.83.01-2.75-.02-1.7.04-1.81,1.77-1.98,2.11-.21,4.23-.49,6.35-.47,4.49.05,8.99.24,13.47.46,1.56.07,1.78.47,1.74,2.07-.03,1.2,0,2.41,0,3.93-1.46,0-2.82.08-4.17-.02-1.12-.08-1.44.4-1.5,1.41-.15,2.87-.34,5.73-.53,8.6-.2,2.99-.36,5.98-.63,8.97-.09.96.07,1.36,1.12,1.41,2.68.12,2.68.17,2.45,2.86-.16,1.92-.11,1.93,1.73,2.21,1.18.18,2.34.53,3.55.65-.67-.24-1.34-.47-2-.71-.31-.12-.88-.3-.87-.39.13-.97.29-1.95.59-2.88.1-.31.61-.65.95-.66.51-.01,1.08.16,1.54.41,1.16.62,1.56.13,1.92-.96,1.76-5.46,3.56-10.91,5.41-16.34.37-1.09.16-1.61-.92-1.94-.99-.3-1.93-.76-2.91-1.11-.72-.25-.87-.68-.6-1.35.48-1.24.87-2.53,1.46-3.71.17-.35,1-.69,1.37-.56,6.75,2.25,13.39,4.79,19.64,8.24.74.41.86.91.55,1.65-.48,1.11-.94,2.22-1.36,3.35-.29.78-.71.9-1.44.55-1.05-.51-2.14-.91-3.19-1.41-.68-.32-1.07-.15-1.38.52-2.57,5.41-5.15,10.81-7.75,16.21-.41.85-.34,1.41.65,1.7.39.12.75.36,1.12.53.78.36.87.88.47,1.62-.48.87-.88,1.78-1.42,2.89.69.42,1.39.85,2.02,1.24.72-.99,1.32-1.83,1.93-2.66.48-.65.95-.61,1.55-.09,2.05,1.75,2.05,1.72,3.83-.34,3.42-3.98,6.84-7.96,10.32-11.88.81-.92.88-1.55-.07-2.36-.97-.84-1.84-1.8-2.93-2.88,1.24-1.23,2.4-2.46,3.66-3.56.21-.18,1.05.05,1.36.35,3.45,3.26,6.89,6.53,10.24,9.89,1.58,1.59,2.94,3.4,4.41,5.1.6.69.57,1.31-.09,1.96-.74.73-1.47,1.48-2.14,2.27-.63.74-1.19.78-1.84.05-.75-.84-1.56-1.62-2.3-2.47-.48-.55-.86-.62-1.44-.08-2.57,2.37-5.17,4.71-7.78,7.04-1.68,1.5-3.37,2.97-5.08,4.44-1.28,1.1-1.31,1.36-.2,2.58.28.31.67.61.76.97.1.43.07,1.08-.19,1.35-.75.77-1.64,1.39-2.56,2.13.72,1.04,1.44,2.09,2.03,2.95.18-.51.26-1.28.68-1.74.48-.53,1.24-.83,1.92-1.12.21-.09.6.13.85.29.16.1.22.34.32.53,1.2,2.24,1.18,2.21,3.43,1.1,4.88-2.42,9.77-4.84,14.68-7.19.78-.37.73-.81.49-1.39-.43-1.03-.88-2.07-1.39-3.06-.5-.98-.45-1.59.77-1.92.91-.25,1.79-.67,2.63-1.13.98-.52,1.56-.18,2.02.69.37.7.86,1.35,1.15,2.07,2.22,5.6,4.44,11.2,6.57,16.84.67,1.77.54,1.82-1.2,2.62q-3.47,1.6-4.9-1.88c-.8-1.94-.78-1.89-2.77-1.19-5.13,1.81-10.28,3.6-15.44,5.32-.99.33-1.25.7-.93,1.69.8,2.56.4,3.09-2.34,3.37-.24.02-.48.03-.93.05.13.91.24,1.74.36,2.61,1.25-.1,2.32-.18,3.39-.26.72-.06,1.04.24,1.11.99.08.88.03,2.07.56,2.53.48.42,1.65.05,2.52,0,5.31-.34,10.63-.7,15.94-1.01.74-.04.93-.37.92-1.01-.02-1.17.02-2.34-.05-3.5-.06-.95.37-1.27,1.25-1.24,1.12.03,2.25.03,3.37.02.82-.01,1.22.32,1.23,1.18.1,5.86.26,11.73.31,17.59.02,1.61-.25,3.23-.41,5.03-1.68,0-3.33.05-4.97-.05-.28-.02-.73-.65-.75-1.02-.07-1.16-.05-2.34.07-3.49.09-.83-.17-1.12-.98-1.17-5.19-.32-10.39-.68-15.58-1.03-.79-.05-1.58-.13-2.36-.21-.68-.07-.92.21-1.01.9-.39,3.06-.43,3.07-3.54,2.6-.24-.04-.48-.12-.9-.22-.17.9-.34,1.77-.47,2.49,1.29.41,2.47.74,3.59,1.19.2.08.33.69.26,1.01-.19.93-.5,1.83-.76,2.75,5.85,2.05,11.62,4.05,17.37,6.09.89.32,1.41.13,1.73-.77.37-1.06.84-2.08,1.18-3.15.23-.74.61-.93,1.29-.66,1.08.44,2.15.9,3.23,1.31.88.33,1.13.87.8,1.75-1.9,5.05-3.75,10.13-5.69,15.17-.57,1.47-1.39,2.84-2.07,4.26-.45.94-1.03,1.32-2.08.81-.93-.45-1.93-.78-2.9-1.15-.81-.31-1.11-.75-.64-1.62.47-.88.78-1.84,1.19-2.75.38-.85.3-1.37-.67-1.86-5.13-2.57-10.23-5.21-15.31-7.87-.89-.47-1.3-.28-1.73.58-1.27,2.53-1.31,2.53-3.69.88-.41-.28-.71-.72-1.05-1.08-.46.6-1.03,1.35-1.65,2.17.84.73,1.62,1.46,2.45,2.13.79.64.83,1.22.13,1.98-1.74,1.86-1.71,1.86.23,3.56,4.07,3.57,8.12,7.16,12.19,10.74.25.22.51.42.99.81,1-1.06,2.02-2.09,2.98-3.16.5-.56.9-.62,1.43-.04.68.73,1.43,1.4,2.14,2.1,1.26,1.23,1.3,1.35.13,2.73-1.69,2-3.37,4.03-5.2,5.9-2.71,2.76-5.51,5.44-8.35,8.07-1.72,1.59-1.8,1.53-3.42-.08-.59-.59-1.13-1.23-1.74-1.79-.65-.6-.57-1.13.03-1.68.79-.74,1.59-1.48,2.37-2.22.62-.59.66-1.16.07-1.84-3.85-4.44-7.68-8.89-11.5-13.34-.58-.68-.99-.93-1.75-.1-1.66,1.81-3.22,1.38-4.02-1.01-.12-.35-.02-.78-.02-1.18-.11.03-.19.04-.26.08q-2.32,1.46-1.15,3.86c.91,1.87.9,1.95-1.21,2.75-.79.3-1.2.63-.76,1.55,2.64,5.51,5.25,11.05,7.87,16.57.1.22.26.41.4.63,1.33-.58,2.64-1.11,3.9-1.73.84-.41,1.33-.2,1.65.64.42,1.09.87,2.16,1.31,3.24.27.67.15,1.17-.54,1.56-5.88,3.34-12.09,5.94-18.51,8.02-2.14.69-2.19.56-3.01-1.5-.31-.77-.59-1.56-.99-2.29-.41-.76-.18-1.13.55-1.42,1.35-.52,2.69-1.07,4.24-1.69-.46-1.46-.91-2.95-1.39-4.43-1.47-4.51-2.96-9-4.42-13.51-.26-.8-.54-1.27-1.49-.84-.75.33-1.57.51-2.59.83-.37-1.11-.83-2.25-1.1-3.43-.08-.37.38-.86.59-1.3.14.09.27.17.41.26-1.17.19-2.34.38-3.61.59.19,1.48.37,2.86.58,4.42-.98.08-1.83.2-2.69.21-.76,0-1.13.17-1.07,1.07.4,5.86.73,11.72,1.12,17.57.11,1.67.15,1.66,1.88,1.62,1-.02,2.01-.09,2.99.02.33.04.85.54.87.86.08,1.24-.03,2.5-.02,3.74,0,.83-.32,1.22-1.16,1.25-4.4.17-8.8.44-13.21.51-2.62.04-5.24-.24-7.86-.34-.77-.03-1.16-.32-1.17-1.11-.01-1.37-.1-2.75-.03-4.12.02-.29.59-.74.93-.77,1.12-.1,2.25-.08,3.37-.04.87.03,1.28-.29,1.34-1.21.18-2.91.44-5.81.63-8.71.21-3.36.38-6.73.57-10.23-.92-.07-1.77-.18-2.63-.18-.85,0-1.07-.36-.96-1.16.15-1.11.22-2.23.34-3.51-.84-.15-1.75-.31-2.79-.5.78,1.52-.27,2.6-.62,3.8-.05.16-.83.25-1.2.15-2.53-.73-2.52-.75-3.35,1.81-1.69,5.18-3.38,10.36-5.09,15.53-.25.77-.19,1.22.71,1.48,1.07.31,2.09.82,3.14,1.21.62.23.86.57.58,1.23-.5,1.19-.96,2.39-1.44,3.59-.3.75-.89.84-1.54.62-2.6-.87-5.25-1.63-7.77-2.68-3.68-1.54-7.29-3.25-10.88-5.01-1.82-.89-1.81-1.16-.99-3.02.47-1.06.92-2.12,1.45-3.36,1.41.61,2.75,1.14,4.04,1.78.78.39,1.16.24,1.54-.54,2.58-5.45,5.19-10.89,7.83-16.31.38-.78.13-1.09-.56-1.42-2.42-1.18-2.42-1.2-1.22-3.51.26-.51.6-.98,1-1.64-.69-.48-1.45-1-1.93-1.34-.87,1.09-1.64,2.12-2.5,3.05-.11.12-.77-.09-1.05-.31-.69-.52-1.31-1.13-2.09-1.82-1.84,2.16-3.61,4.25-5.39,6.32-2.25,2.62-4.49,5.26-6.8,7.83-.62.69-.66,1.18-.04,1.79.77.75,1.54,1.52,2.33,2.26.58.54.75,1.06.11,1.69-.8.79-1.56,1.62-2.34,2.42-.72.75-1.41.87-2.23.05-3.86-3.85-7.77-7.64-11.62-11.49-1.06-1.06-1.96-2.27-2.93-3.4-.56-.65-.54-1.26.06-1.88.98-1.01,1.95-2.03,2.99-3.12Zm54.39-13.67c-.21-1.55.18-2.31,1.64-2.15.15.02.49-.51.51-.8.13-1.57.18-3.16.27-4.73.05-.83.15-1.64-.83-2.12-.22-.11-.27-.72-.22-1.08.02-.14.52-.3.8-.3,1.46-.02,2.92-.01,4.37.05.37.02.72.26,1.08.41-.19.37-.39.75-.59,1.12-.24.44-.71.89-.69,1.32.05,1.78.19,3.57.41,5.34.04.31.58.78.91.79.82.03,1.24.22,1.18,1.15-.06.86.37,1.24,1.26.87.37-.15.75-.28,1.22-.45-.3-.62-.56-1.14-.81-1.65,1.88-1.18,1.87-1.18,1.18-3.26-.39-1.18-.77-2.37-1.11-3.57-.18-.63-.39-1.03-1.17-.99-.35.02-.72-.35-1.08-.54.29-.38.51-.94.89-1.1,1.64-.69,3.34-1.27,5.01-1.89.18-.07.36-.19.49-.33,1.25-1.32,2.47-2.68,3.76-3.97.32-.32.85-.42,1.29-.61.14.04.28.08.43.12-1.1,1.97.12,2.92,1.32,3.9.84.69,1.69,1.37,2.42,2.16.62.67,1.11.65,1.62-.02.58-.76,1.12-.55,1.63.05.18.21.29.48.58.97.62-.99,1.03-1.63,1.45-2.3-.23-.16-.36-.28-.51-.33-.94-.37-1.74-.76-.85-1.97.09-.13-.23-.76-.49-.91-1.61-.87-3.25-1.69-4.91-2.46-.27-.13-.67.02-1,.06-.48.06-.96.13-1.44.2,0-.49-.15-1.06.05-1.45,1.76-3.41,2.63-6.97,2.06-10.82-.05-.33.23-.71.36-1.06.38.19.75.39,1.13.58.42.22.85.62,1.27.62,1.66-.01,3.32-.2,4.99-.22.85-.01,1.26-.23,1.12-1.14-.12-.78.2-1.23,1.04-1.09,1.07.18,1.25-.3,1-1.2-.12-.43-.18-.88-.27-1.28-.15-.02-.19-.04-.23-.03-.12.04-.24.07-.34.14-.96.7-1.63.67-2.04-.62-.07-.23-.76-.47-1.07-.38-1.71.5-3.41,1.07-5.08,1.71-.32.12-.53.61-.74.95-.21.33-.36.7-.53,1.05-.39-.28-.95-.48-1.14-.86-.59-1.23-1.08-2.52-1.54-3.82-.14-.39-.02-.86-.02-1.3.45.07.91.13,1.35.21.36.07.8.35,1.06.23,1.72-.83,3.41-1.72,5.09-2.64.2-.11.34-.5.36-.77.03-.53-.24-1.19-.01-1.58.24-.4.92-.55,1.51-.87-.5-.68-1-1.36-1.51-2.04-.78.53-1.15,2.1-2.28.79-.61-.71-.98-.5-1.51-.01-1.25,1.16-2.51,2.31-3.81,3.43-.46.4-.73.69-.35,1.35.13.23-.2.8-.45,1.11-.1.13-.66.09-.82-.07-1.33-1.35-2.62-2.75-4.25-4.48.91-.11,1.48-.15,2.03-.26.39-.08.88-.14,1.12-.4,1.11-1.24,2.11-2.58,3.22-3.82.58-.65.65-1.13,0-1.79-.48-.49-.78-1.14.19-1.6.15-.07.27-.65.16-.77-.42-.45-.95-.81-1.7-1.42-.24,2.42-1.46,2.01-2.72,1.27-.92,1.9-1.72,3.68-2.64,5.4-.38.71-.59,1.21.14,1.82.23.19.23.75.19,1.12,0,.09-.62.27-.86.17-1.56-.58-3.1-1.2-4.62-1.88-.25-.11-.48-.62-.44-.9.03-.24.45-.46.73-.63.33-.21.91-.28,1.01-.54.77-2.09,1.44-4.2,2.17-6.39-.98-.13-1.69-.32-1.56-1.45.2-1.71-.1-1.91-2.03-1.52.21,1.26-.11,2.1-1.65,1.98-.18-.01-.55.55-.57.86-.14,1.66-.18,3.32-.28,4.98-.05.75-.04,1.38.86,1.69.23.08.36.66.38,1.02.01.16-.36.51-.54.5-1.89-.05-3.78-.16-5.95-.26.34-.58.57-.98.8-1.38.2-.35.56-.71.55-1.05-.07-2.11-.22-4.22-.35-6.45-1.64.26-2.44-.35-2.1-1.95-2.07-.07-2.49.14-2.13,1.19.44,1.28.14,1.84-1.34,1.75.1.62.12,1.11.26,1.57.4,1.27.85,2.52,1.28,3.78.34,1,.64,2.01,2.05,1.89.22-.02.47.37.71.57-.2.19-.36.44-.59.55-1.46.7-2.92,1.4-4.42,2.03-.35.15-.81.05-1.22.06.02-.52.03-1.04.08-1.56.03-.35.28-.76.16-1.02-.84-1.89-1.75-3.75-2.7-5.73-1.25.52-2.55,1.05-2.89-1.12-.72.58-1.24.99-1.76,1.41q1.26,1.4-.14,2.92c1.39,1.72,2.78,3.48,4.22,5.19.15.18.68.29.85.18.84-.59,1.25-.16,1.64.52-1.45,1.52-2.87,3.02-4.34,4.56-.5-.63-1.39-.98-.75-2.01.1-.15-.12-.64-.32-.82-1.52-1.34-3.08-2.65-4.74-4.07-.86,1.31-1.83,1.37-2.83-.04-.49.78-.85,1.35-1.22,1.94.65.64,1.99.77,1.3,1.99-.47.82-.06,1.1.56,1.42,1.48.76,2.97,1.51,4.41,2.33.63.36,1.05.53,1.58-.17.19-.25.8-.19,1.21-.27.02.38.16.81.04,1.14-.51,1.45-1.08,2.88-1.69,4.29-.12.27-.54.6-.79.58-.28-.03-.76-.43-.75-.66.05-1.19-.82-1.28-1.6-1.54-1.14-.38-2.27-.82-3.41-1.21-1.82-.62-1.82-.61-2.43,1.22-.58-.11-1.17-.22-1.74-.32-.83,1.84-.79,1.93,1.22,2.49.22,2.04-.3,1.67,2,1.95,1.28.16,2.57.17,3.86.29.74.07,1.42.16,1.61-.85.04-.21.49-.5.72-.47.26.03.59.34.69.6.14.37.15.82.11,1.23-.27,3.09.06,6.05,1.61,8.81.26.47.5.98.62,1.49.09.39-.04.84-.07,1.26-.41-.04-.82-.09-1.23-.12-.49-.04-1.04-.22-1.45-.06-1.12.44-2.19,1.01-3.27,1.55-.59.3-1.4.51-1.67,1-.24.43.14,1.19.23,1.81.01.08-.03.16-.07.32-.15.05-.34.11-.53.18-1.15.41-.64,1.22-.35,1.85.36.79.79.21,1.28,0,.42-.18,1,.03,1.51.07.41.04.98.3,1.21.11,1.4-1.11,2.78-2.27,4.05-3.52.35-.35.36-1.08.46-1.64.07-.42.01-.86.01-1.29.15-.05.31-.1.46-.15.79.78,1.57,1.55,2.36,2.33,1,.99,1.85,2.21,3.02,2.9,1.41.83,3.06,1.27,4.65,1.76.91.28,1.2.75.91,1.83-1.83-.75-2.05.63-2.43,1.85-.4,1.27-.81,2.54-1.27,3.78-.28.76-.25,1.24.65,1.5.88.25,1.07.84.54,1.63-.11.16-.14.37-.26.68.75.17,1.4.33,2.29.53Zm47.68-49.66c-.35.18-.46.22-.56.29-2.24,1.48-2.26,1.49-3.83-.65-.45-.61-.82-.48-1.35-.17-2.83,1.68-5.66,3.34-8.5,4.98-.74.43-.99.86-.52,1.69.61,1.08.42,1.54-.77,1.94-.61.21-1.15.36-.83,1.16.33.84.91.49,1.44.25.82-.37,1.52-.29,1.76.68.27,1.1.91,1.06,1.78.8,2.59-.75,5.2-1.47,7.8-2.17,2.25-.6,2.26-.59,1.87-2.96-.14-.82.1-1.28.98-1.36.74-.08,1.47-.22,2.37-.37-.54-1.35-1.07-2.68-1.64-4.1Zm-10.87-15.47c-.11.09-.22.18-.33.27-.03.03-.08.05-.09.08-1.49,2.49-1.49,2.48-4,1.2-.27-.13-.87-.09-1.02.11-2.16,2.85-4.29,5.72-6.36,8.64-.18.25,0,1.11.24,1.23,1.33.68.76,1.4.16,2.16-.2.25-.43.48-.65.73.47.78.87.9,1.59.29.53-.45,1.31-1.43,2-.15.54,1,1.03.79,1.75.23,2.53-1.96,5.08-3.9,7.66-5.8.69-.51.73-.98.34-1.69-1.17-2.07-1.15-2.08.73-3.54.07-.05.2-.08.2-.13.04-.35.22-.82.06-1.02-.71-.91-1.51-1.75-2.28-2.62Zm-34.42-12.4c.05.44.08.77.11,1.09.07.77.46,1.78.11,2.26-.35.49-1.42.48-2.18.64-.8.17-.91.64-.8,1.38.47,3.17.94,6.34,1.29,9.52.11.96.39,1.38,1.34,1.22,1.2-.2,1.6.36,1.41,1.48-.1.59-.1,1.08.72,1.1.84.03.86-.51.8-1.07-.12-1.2.36-1.71,1.57-1.49.74.13,1.09-.1,1.17-.97.29-2.98.67-5.95,1.08-8.92.28-2.06.33-2.1-1.7-2.49-1.03-.2-1.31-.7-1.13-1.65.13-.67.2-1.34.3-2.1h-4.1Zm49.68,46.29c-.71.12-1.24.2-1.76.29-1.74.31-1.76.3-2.07-1.47-.02-.12-.05-.25-.05-.37,0-.82-.43-1.1-1.21-1-3.26.41-6.51.83-9.77,1.21-.79.09-1.04.43-.99,1.22.08,1.47-.16,1.65-1.63,1.47-.23-.03-.47-.05-.79-.08-.1.62-.19,1.15-.29,1.75.37.02.58.06.78.04,1.79-.13,1.74-.13,1.97,1.66.04.34.55.82.9.88,3.28.51,6.57.98,9.87,1.36.35.04.96-.43,1.1-.79.27-.71.3-1.51.46-2.45.87.18,1.69.29,2.46.54.69.22.99-.05,1.01-.65.05-1.15.01-2.31.01-3.61Zm-31.52-43.66c-.02.33-.01.53-.04.73-.45,3.11-.14,3.09-2.92,2.36-.62-.16-1.01-.06-1.19.65-.85,3.34-1.74,6.67-2.61,10-.17.65-.09,1.14.68,1.33,1.29.32,1.34,1.12.88,2.19-.13.31-.07.96.15,1.11.53.37.78.04,1.02-.56.56-1.38,1.05-1.47,2.35-.91.27.12.96-.14,1.12-.42,1.73-2.94,3.38-5.92,5.09-8.87.4-.69.28-1.12-.38-1.52-.65-.4-1.25-.87-1.92-1.35.53-.79,1.03-1.41,1.38-2.11.14-.27.04-.94-.15-1.05-1.09-.58-2.23-1.04-3.44-1.57Zm.12,91.22c.7-.22,1.26-.37,1.79-.58,2.27-.88,2.32-.92.9-2.9-.65-.9-.45-1.4.4-1.87.18-.1.34-.26.53-.32,1.29-.4,1.15-1.1.56-2.07-1.43-2.39-2.79-4.82-4.17-7.24-.36-.63-.72-1.27-1.09-1.91-.3.13-.46.18-.6.25-1.56.78-1.71.72-2.37-.87-.05-.12-.05-.28-.14-.34-.24-.18-.51-.32-.78-.48-.15.26-.34.5-.42.78-.05.18.03.42.11.6.48,1.13.25,1.84-1.04,2.19-.31.08-.73.82-.65,1.15.85,3.38,1.82,6.73,2.71,10.1.2.76.65.89,1.3.72.36-.09.71-.24,1.07-.34.83-.23,1.38-.04,1.51.92.09.69.23,1.37.38,2.22Zm-60.96-61.53c.49,0,.77,0,1.06,0,2.57.09,2.6.12,2.05,2.64-.18.8-.02,1.22.83,1.46,3.28.93,6.53,1.92,9.8,2.87.25.07.54,0,.8,0,.39-2.1.49-2.16,1.88-1.89.46.09.97-.1,1.45-.15-.3-.42-.53-.91-.91-1.23-.59-.49-1.15-.96-.6-1.75.62-.89.21-1.3-.56-1.75-2.59-1.5-5.16-3.04-7.73-4.57-1.53-.91-1.53-.92-2.51.58-.07.1-.13.21-.19.32-.55.95-1.2,1.03-2.02.29-.47-.42-1.01-.75-1.66-1.22-.61,1.56-1.11,2.87-1.7,4.38Zm89.64,32.51c-.44-.07-.72-.11-1-.16-2.33-.43-2.31-.43-2.17-2.78.02-.37-.2-1.01-.44-1.09-3.34-.99-6.71-1.92-10.08-2.78-.29-.07-.99.4-1.08.74-.38,1.34-.44,1.41-1.74.84-1.22-.54-1.46-.4-1.59.97.06.05.12.12.19.15,1.9.63,1.86.62,1.23,2.43-.11.32.05.99.3,1.14,3.18,1.88,6.4,3.69,9.77,5.61.43-.62.89-1.25,1.3-1.9.41-.66.85-.82,1.53-.35.6.42,1.25.76,2.04,1.24.6-1.39,1.13-2.63,1.74-4.05ZM42.22,46.38c.08.14.16.28.24.42.18.08.39.12.54.24,2.4,1.81,2.74,1.03.86,3.71-.4.57-.34.96.18,1.37,2.71,2.13,5.4,4.29,8.14,6.39.24.18.98.14,1.11-.06.74-1.09,1.44-1.27,2.37-.22.18.2.65.13.99.19.06-.35.2-.71.14-1.03-.06-.3-.31-.58-.53-.83-.56-.65-.53-1.21.26-1.6.77-.38.79-.82.29-1.47-1.74-2.27-3.45-4.58-5.18-6.86-1.39-1.83-1.41-1.85-3.42-.74-.78.43-1.27.36-1.71-.46-.32-.6-.78-1.13-1.1-1.59-1.12.9-2.15,1.72-3.18,2.55Zm70.21,65.53c-.71-.5-1.25-.94-1.84-1.31-.75-.47-.97-.99-.34-1.71.19-.22.34-.48.54-.69.76-.79.61-1.35-.26-2.01-2.65-2-5.25-4.08-7.85-6.15-.56-.45-.84-.28-1.17.25-.67,1.06-1.27,1.11-2.13.18-.39-.42-.69-1.05-1.38-.43-.73.66,0,1.02.35,1.41.7.78.9,1.49-.13,2.15-.71.45-.62.94-.15,1.55,1.79,2.35,3.55,4.72,5.32,7.08,1.22,1.63,1.23,1.65,2.94.54.91-.58,1.59-.59,2.11.48.28.57.65,1.1,1.09,1.81,1.05-1.13,1.93-2.09,2.92-3.15Zm-46.16-59.81c.13-.1.27-.2.4-.29-.05-.44.02-.95-.18-1.29-.63-1.09-.24-1.6.84-1.9.69-.19.83-.61.64-1.34-.9-3.37-1.73-6.76-2.63-10.13-.06-.24-.56-.49-.86-.5-.39-.01-.79.22-1.2.32-1,.24-1.64-.12-1.79-1.16-.1-.68-.14-1.38-.23-2.28-1.47.67-2.82,1.28-4.18,1.9.18.33.21.41.26.47,1.79,2.14,1.8,2.16-.24,3.83-.62.51-.65.97-.25,1.6.56.88,1.09,1.77,1.61,2.67,1.28,2.23,2.54,4.46,3.84,6.74.23-.09.43-.13.6-.24.96-.65,1.7-.77,2.21.57.16.43.77.69,1.17,1.03Zm-36.3,29.5c1.09-.26,1.85-.45,2.61-.62.6-.13,1.08-.06,1.13.72.02.37.2.73.2,1.1,0,1.25.56,1.5,1.75,1.31,2.91-.47,5.84-.88,8.78-1.14,1.14-.1,1.6-.37,1.43-1.52-.13-.88.06-1.44,1.19-1.33.39.04.82-.48,1.24-.74-.39-.27-.76-.73-1.16-.76-.94-.07-1.43-.38-1.25-1.37.16-.91-.23-1.25-1.12-1.36-3.18-.4-6.35-.85-9.52-1.31-.77-.11-1.12.09-1.27.91-.44,2.36-.47,2.35-2.79,1.9-.2-.04-.44-.14-.61-.07-.23.09-.56.31-.57.49-.05,1.19-.03,2.39-.03,3.79Zm44.26,29.66c-.09.51-.17.87-.22,1.24-.35,2.97-.7,5.94-1.04,8.91-.23,1.96-.24,2.01,1.79,2.4.89.17,1.22.49,1,1.41-.18.75-.22,1.53-.33,2.36h4.06c-.12-.85-.19-1.59-.35-2.31-.19-.85-.02-1.37.95-1.45.45-.04.95-.1,1.32-.33.3-.19.66-.67.62-.98-.35-3.43-.78-6.85-1.16-10.28-.08-.75-.41-1.07-1.14-.89-1.04.26-1.41-.22-1.54-1.2-.05-.41-.46-.78-.71-1.16-.26.39-.74.78-.74,1.17,0,.97-.41,1.26-1.29,1.17-.36-.04-.73-.04-1.23-.06Zm-11.74-3.72c-1.82,3.3-3.54,6.47-5.34,9.6-.58,1.01-.26,1.5.64,1.95,1.84.94,1.88,1.16.59,2.7-.16.19-.42.36-.46.58-.05.3-.03.81.14.9.99.55,2.04,1.01,3.13,1.53.15-.61.26-1.01.34-1.41.47-2.26.48-2.3,2.72-1.61.96.3,1.16-.19,1.35-.91.54-2.09,1.1-4.18,1.63-6.27.38-1.47.73-2.95,1.09-4.41-1.89-.74-1.87-.74-1.62-2.52.06-.44-.13-.91-.2-1.37-.12-.03-.24-.07-.37-.1-.33.49-.73.94-.99,1.46-.36.73-.85.85-1.52.5-.33-.17-.65-.35-1.15-.63Zm-12.25,6.35c.16-.27.28-.54.46-.77,2.09-2.69,4.2-5.37,6.3-8.06.43-.55.45-1.07-.18-1.48-.97-.64-.99-1.3-.17-2.11.31-.31.44-.8.65-1.2-.09-.11-.18-.22-.28-.33-.4.17-.86.26-1.18.52-1.13.95-1.3.98-2.31-.17-.46-.53-.76-.55-1.32-.09-2.38,1.95-4.78,3.88-7.23,5.74-1.55,1.18-1.62,1.23-.41,2.79.1.13.22.25.32.38.46.62.42,1.12-.29,1.54-.66.39-1.28.85-1.98,1.33.73.79,1.36,1.45,1.97,2.13.56.63,1.04.55,1.5-.12.44-.63.89-1.24,1.37-1.91.94.62,1.73,1.14,2.76,1.82Zm-3.04-25.17c-.51.11-.95.18-1.37.3-2.68.74-5.35,1.52-8.03,2.24-2.06.56-2.08.54-1.66,2.61.17.84.02,1.36-.97,1.45-.68.06-1.35.26-2.23.45.55,1.41,1.03,2.65,1.54,3.96.39-.2.59-.27.74-.39,1.84-1.38,2.5-1.85,3.69.6.38.8.91.49,1.44.18,2.69-1.58,5.35-3.2,8.08-4.69.96-.53,1.15-1.06.68-1.96-.47-.91-.25-1.47.79-1.76.3-.08.49-.55.73-.84-.4-.18-.84-.57-1.18-.5-1.85.39-1.85.43-2.25-1.64Zm58.92-4.77c-.21-.11-.33-.23-.42-.21-1.28.27-1.84-.22-1.85-1.54,0-.22-.61-.57-.97-.61-1.48-.18-2.98-.25-4.47-.4-1.51-.16-2.14.19-2.55,1.53-.29.94.44,2.45,1.45,2.83,1.52.56,3.06,1.06,4.59,1.59.73.25,1.23.02,1.41-.75.19-.82.71-.81,1.33-.53.3.14.58.3.87.46.11-.13.24-.21.26-.32.13-.65.23-1.3.35-2.04Zm-17,11.07c-1.98.1-2.7,1.21-1.95,2.96.68,1.56,1.42,3.1,2.21,4.6.13.25.75.47,1.04.37.9-.31,1.53-.33,1.75.81.04.19.48.51.58.46.5-.27.97-.6,1.39-.99.09-.08-.03-.62-.19-.71-1.04-.56-.86-1.18-.15-1.84.53-.5.53-.9,0-1.46-1.03-1.08-2.03-2.21-2.92-3.4-.51-.68-1-1.08-1.75-.81Zm-39.61-8.77c.97-.71,1.75-.87,2.18.48.07.23.72.49,1.01.4,1.7-.51,3.41-1.05,5.05-1.72,1.09-.44,1.29-1.58,1.05-2.54-.21-.87-.67-1.78-1.97-1.62-1.6.2-3.22.26-4.83.37-.76.05-1.26.26-1.16,1.2.03.27-.27.71-.53.84-1.49.73-1.5.7-.79,2.58Zm17.45,8.78c-.38,0-.84-.04-1.29.01-.46.05-1.08.03-1.34.31-1.36,1.5-2.62,3.09-4.09,4.85.29.18.53.33.77.48.66.39.65.87.26,1.46-.79,1.2-.44,1.78,1.25,1.97.12-2.1,1.47-1.31,2.57-.92.7-1.42,1.3-2.73,1.98-4,.74-1.37,1.57-2.7-.12-4.15Z" />
                            </g>
                        </svg>
                    </div>
                    @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                        <a href="{{ url('/home') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Home
                        </a>
                        @else
                        <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Log in
                        </a>

                        @if(DB::table('users')->where('rol', '=', 'admin')->count()<=0 ) @if (Route::has('register')) <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                            </a>
                            @endif
                            @else
                            @endif
                            @endauth
                    </nav>
                    @endif
                </header>

                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        @if (Auth::check())
                        <a href="{{ url('/home') }}" id="docs-card" class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            @else
                            <a href="{{ url('/login') }}" id="docs-card" class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                @endif
                                <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                    <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Laravel documentation screenshot" class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden" onerror="
                                            document.getElementById('screenshot-container').classList.add('!hidden');
                                            document.getElementById('docs-card').classList.add('!row-span-1');
                                            document.getElementById('docs-card-content').classList.add('!flex-row');
                                            document.getElementById('background').classList.add('!hidden');
                                        " />
                                    <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Laravel documentation screenshot" class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
                                    <div class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"></div>
                                </div>

                                <div class="relative flex items-center gap-6 lg:items-end">
                                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                            </svg>
                                        </div>

                                        <div class="pt-3 sm:pt-5 lg:pt-0">
                                            <h2 class="text-xl font-semibold text-black dark:text-white">Gestion de equipos</h2>

                                            <p class="mt-4 text-sm/relaxed">
                                                ¡Maximiza la eficiencia de tus equipos y la gestión de proyectos con nuestra innovadora herramienta de software! Simplifica la colaboración, supervisa el progreso y alcanza tus objetivos con facilidad. Únete a nuestra comunidad de usuarios satisfechos y lleva tus proyectos al siguiente nivel. Descubre hoy mismo cómo podemos hacer que tu equipo trabaje de manera más inteligente y efectiva. </p>
                                        </div>
                                    </div>

                                </div>
                            </a>
                            @if (Auth::check())
                            <a href="{{ url('/home') }}" class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                @else
                                <a href="{{ url('/login') }}" class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                    @endif
                                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                                            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                                        </svg>
                                    </div>

                                    <div class="pt-3 sm:pt-5">
                                        <h2 class="text-xl font-semibold text-black dark:text-white">Gestion de tareas</h2>

                                        <p class="mt-4 text-sm/relaxed">
                                            ¡Haz de la gestión de proyectos una tarea sencilla y eficiente! Nuestro software te ofrece la solución perfecta para organizar tus proyectos y tareas de manera fluida. ¡Empieza hoy mismo a simplificar tu trabajo y alcanzar tus metas con facilidad!
                                        </p>
                                    </div>

                                    <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                    </svg>
                                </a>

                                @if (Auth::check())
                                <a href="{{ url('/home') }}" class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                    @else
                                    <a href="{{ url('/login') }}" class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                        @endif
                                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                            </svg>
                                        </div>

                                        <div class="pt-3 sm:pt-5">
                                            <h2 class="text-xl font-semibold text-black dark:text-white">Gestion de usuarios</h2>

                                            <p class="mt-4 text-sm/relaxed">
                                                Maximiza la eficiencia de tus proyectos con nuestro software de gestión de usuarios. Simplifica la administración de equipos y colaboradores para alcanzar tus metas con mayor rapidez y precisión. ¡Únete hoy y descubre una nueva forma de potenciar tus proyectos!
                                            </p>
                                        </div>

                                        <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                        </svg>
                                    </a>
                                    @if (Auth::check())
                                <a href="{{ url('/home') }}" class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                    @else
                                    <a href="{{ url('/login') }}" class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                        @endif
                                    <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793z" />
                                            </svg>
                                        </div>

                                        <div class="pt-3 sm:pt-5">
                                            <h2 class="text-xl font-semibold text-black dark:text-white">Seguridad</h2>

                                            <p class="mt-4 text-sm/relaxed">
                                                Protege tus rutas y controla los roles de acceso con nuestra herramienta de software. Evita ingresos indebidos y garantiza la seguridad de tus operaciones. Únete a nosotros para una gestión eficiente y segura.
                                            </p>
                                        </div>
                                    </div></a>
                    </div>
                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    GDP V1.0.0
                </footer>
            </div>
        </div>
    </div>
</body>

</html>
