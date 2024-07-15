<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        /*
! tailwindcss v3.4.4 | MIT License | https://tailwindcss.com
*//*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

        *,
        ::before,
        ::after {
            box-sizing: border-box; /* 1 */
            border-width: 0; /* 2 */
            border-style: solid; /* 2 */
            border-color: #e5e7eb; /* 2 */
        }

        ::before,
        ::after {
            --tw-content: '';
        }

        /*
        1. Use a consistent sensible line-height in all browsers.
        2. Prevent adjustments of font size after orientation changes in iOS.
        3. Use a more readable tab size.
        4. Use the user's configured `sans` font-family by default.
        5. Use the user's configured `sans` font-feature-settings by default.
        6. Use the user's configured `sans` font-variation-settings by default.
        7. Disable tap highlights on iOS
        */

        html,
        :host {
            line-height: 1.5; /* 1 */
            -webkit-text-size-adjust: 100%; /* 2 */ /* 3 */
            tab-size: 4; /* 3 */
            font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; /* 4 */
            font-feature-settings: normal; /* 5 */
            font-variation-settings: normal; /* 6 */
            -webkit-tap-highlight-color: transparent; /* 7 */
        }

        /*
        1. Remove the margin in all browsers.
        2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
        */

        body {
            margin: 0; /* 1 */
            line-height: inherit; /* 2 */
        }

        /*
        1. Add the correct height in Firefox.
        2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
        3. Ensure horizontal rules are visible by default.
        */

        hr {
            height: 0; /* 1 */
            color: inherit; /* 2 */
            border-top-width: 1px; /* 3 */
        }

        /*
        Add the correct text decoration in Chrome, Edge, and Safari.
        */

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        /*
        Remove the default font size and weight for headings.
        */

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        /*
        Reset links to optimize for opt-in styling instead of opt-out.
        */

        a {
            color: inherit;
            text-decoration: inherit;
        }

        /*
        Add the correct font weight in Edge and Safari.
        */

        b,
        strong {
            font-weight: bolder;
        }

        /*
        1. Use the user's configured `mono` font-family by default.
        2. Use the user's configured `mono` font-feature-settings by default.
        3. Use the user's configured `mono` font-variation-settings by default.
        4. Correct the odd `em` font sizing in all browsers.
        */

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; /* 1 */
            font-feature-settings: normal; /* 2 */
            font-variation-settings: normal; /* 3 */
            font-size: 1em; /* 4 */
        }

        /*
        Add the correct font size in all browsers.
        */

        small {
            font-size: 80%;
        }

        /*
        Prevent `sub` and `sup` elements from affecting the line height in all browsers.
        */

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        /*
        1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
        2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
        3. Remove gaps between table borders by default.
        */

        table {
            text-indent: 0; /* 1 */
            border-color: inherit; /* 2 */
            border-collapse: collapse; /* 3 */
        }

        /*
        1. Change the font styles in all browsers.
        2. Remove the margin in Firefox and Safari.
        3. Remove default padding in all browsers.
        */

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit; /* 1 */
            font-feature-settings: inherit; /* 1 */
            font-variation-settings: inherit; /* 1 */
            font-size: 100%; /* 1 */
            font-weight: inherit; /* 1 */
            line-height: inherit; /* 1 */
            letter-spacing: inherit; /* 1 */
            color: inherit; /* 1 */
            margin: 0; /* 2 */
            padding: 0; /* 3 */
        }

        /*
        Remove the inheritance of text transform in Edge and Firefox.
        */

        button,
        select {
            text-transform: none;
        }

        /*
        1. Correct the inability to style clickable types in iOS and Safari.
        2. Remove default button styles.
        */

        button,
        input:where([type='button']),
        input:where([type='reset']),
        input:where([type='submit']) {
            -webkit-appearance: button; /* 1 */
            background-color: transparent; /* 2 */
            background-image: none; /* 2 */
        }

        /*
        Use the modern Firefox focus style for all focusable elements.
        */

        :-moz-focusring {
            outline: auto;
        }

        /*
        Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
        */

        :-moz-ui-invalid {
            box-shadow: none;
        }

        /*
        Add the correct vertical alignment in Chrome and Firefox.
        */

        progress {
            vertical-align: baseline;
        }

        /*
        Correct the cursor style of increment and decrement buttons in Safari.
        */

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto;
        }

        /*
        1. Correct the odd appearance in Chrome and Safari.
        2. Correct the outline style in Safari.
        */

        [type='search'] {
            -webkit-appearance: textfield; /* 1 */
            outline-offset: -2px; /* 2 */
        }

        /*
        Remove the inner padding in Chrome and Safari on macOS.
        */

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        /*
        1. Correct the inability to style clickable types in iOS and Safari.
        2. Change font properties to `inherit` in Safari.
        */

        ::-webkit-file-upload-button {
            -webkit-appearance: button; /* 1 */
            font: inherit; /* 2 */
        }

        /*
        Add the correct display in Chrome and Safari.
        */

        summary {
            display: list-item;
        }

        /*
        Removes the default spacing and border for appropriate elements.
        */

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0;
        }

        fieldset {
            margin: 0;
            padding: 0;
        }

        legend {
            padding: 0;
        }

        ol,
        ul,
        menu {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /*
        Reset default styling for dialogs.
        */
        dialog {
            padding: 0;
        }

        /*
        Prevent resizing textareas horizontally by default.
        */

        textarea {
            resize: vertical;
        }

        /*
        1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
        2. Set the default placeholder color to the user's configured gray 400 color.
        */

        input::placeholder,
        textarea::placeholder {
            opacity: 1; /* 1 */
            color: #9ca3af; /* 2 */
        }

        /*
        Set the default cursor for buttons.
        */

        button,
        [role="button"] {
            cursor: pointer;
        }

        /*
        Make sure disabled buttons don't get the pointer cursor.
        */
        :disabled {
            cursor: default;
        }

        /*
        1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
        2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
           This can trigger a poorly considered lint error in some tools but is included by design.
        */

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block; /* 1 */
            vertical-align: middle; /* 2 */
        }

        /*
        Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
        */

        img,
        video {
            max-width: 100%;
            height: auto;
        }

        /* Make elements with the HTML hidden attribute stay hidden by default */
        [hidden] {
            display: none;
        }

        *, ::before, ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x:  ;
            --tw-pan-y:  ;
            --tw-pinch-zoom:  ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position:  ;
            --tw-gradient-via-position:  ;
            --tw-gradient-to-position:  ;
            --tw-ordinal:  ;
            --tw-slashed-zero:  ;
            --tw-numeric-figure:  ;
            --tw-numeric-spacing:  ;
            --tw-numeric-fraction:  ;
            --tw-ring-inset:  ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur:  ;
            --tw-brightness:  ;
            --tw-contrast:  ;
            --tw-grayscale:  ;
            --tw-hue-rotate:  ;
            --tw-invert:  ;
            --tw-saturate:  ;
            --tw-sepia:  ;
            --tw-drop-shadow:  ;
            --tw-backdrop-blur:  ;
            --tw-backdrop-brightness:  ;
            --tw-backdrop-contrast:  ;
            --tw-backdrop-grayscale:  ;
            --tw-backdrop-hue-rotate:  ;
            --tw-backdrop-invert:  ;
            --tw-backdrop-opacity:  ;
            --tw-backdrop-saturate:  ;
            --tw-backdrop-sepia:  ;
            --tw-contain-size:  ;
            --tw-contain-layout:  ;
            --tw-contain-paint:  ;
            --tw-contain-style:  ;
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
            --tw-pan-x:  ;
            --tw-pan-y:  ;
            --tw-pinch-zoom:  ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position:  ;
            --tw-gradient-via-position:  ;
            --tw-gradient-to-position:  ;
            --tw-ordinal:  ;
            --tw-slashed-zero:  ;
            --tw-numeric-figure:  ;
            --tw-numeric-spacing:  ;
            --tw-numeric-fraction:  ;
            --tw-ring-inset:  ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur:  ;
            --tw-brightness:  ;
            --tw-contrast:  ;
            --tw-grayscale:  ;
            --tw-hue-rotate:  ;
            --tw-invert:  ;
            --tw-saturate:  ;
            --tw-sepia:  ;
            --tw-drop-shadow:  ;
            --tw-backdrop-blur:  ;
            --tw-backdrop-brightness:  ;
            --tw-backdrop-contrast:  ;
            --tw-backdrop-grayscale:  ;
            --tw-backdrop-hue-rotate:  ;
            --tw-backdrop-invert:  ;
            --tw-backdrop-opacity:  ;
            --tw-backdrop-saturate:  ;
            --tw-backdrop-sepia:  ;
            --tw-contain-size:  ;
            --tw-contain-layout:  ;
            --tw-contain-paint:  ;
            --tw-contain-style:  ;
        }

        .container {
            width: 100%
        }
        @media (min-width: 640px) {
            .container {
                max-width: 640px
            }
        }
        @media (min-width: 768px) {
            .container {
                max-width: 768px
            }
        }
        @media (min-width: 1024px) {
            .container {
                max-width: 1024px
            }
        }
        @media (min-width: 1280px) {
            .container {
                max-width: 1280px
            }
        }
        @media (min-width: 1536px) {
            .container {
                max-width: 1536px
            }
        }

        .absolute {
            position: absolute
        }
        .relative {
            position: relative
        }
        .-bottom-16 {
            bottom: -4rem
        }
        .-left-16 {
            left: -4rem
        }
        .-left-20 {
            left: -5rem
        }
        .right-0 {
            right: 0px
        }
        .top-0 {
            top: 0px
        }
        .z-10 {
            z-index: 10
        }
        .\!row-span-1 {
            grid-row: span 1 / span 1 !important
        }
        .-mx-3 {
            margin-left: -0.75rem;
            margin-right: -0.75rem
        }
        .mx-5 {
            margin-left: 1.25rem;
            margin-right: 1.25rem
        }
        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }
        .my-3 {
            margin-top: 0.75rem;
            margin-bottom: 0.75rem
        }
        .-mt-2 {
            margin-top: -0.5rem
        }
        .mb-12 {
            margin-bottom: 3rem
        }
        .mb-2 {
            margin-bottom: 0.5rem
        }
        .mb-3 {
            margin-bottom: 0.75rem
        }
        .ml-1 {
            margin-left: 0.25rem
        }
        .ml-3 {
            margin-left: 0.75rem
        }
        .ml-6 {
            margin-left: 1.5rem
        }
        .mt-1 {
            margin-top: 0.25rem
        }
        .mt-2 {
            margin-top: 0.5rem
        }
        .mt-3 {
            margin-top: 0.75rem
        }
        .mt-4 {
            margin-top: 1rem
        }
        .mt-6 {
            margin-top: 1.5rem
        }
        .block {
            display: block
        }
        .inline-block {
            display: inline-block
        }
        .flex {
            display: flex
        }
        .inline-flex {
            display: inline-flex
        }
        .table {
            display: table
        }
        .grid {
            display: grid
        }
        .\!hidden {
            display: none !important
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
        .h-3 {
            height: 0.75rem
        }
        .h-4 {
            height: 1rem
        }
        .h-40 {
            height: 10rem
        }
        .h-5 {
            height: 1.25rem
        }
        .h-6 {
            height: 1.5rem
        }
        .h-\[32\.5rem\] {
            height: 32.5rem
        }
        .h-\[35\.5rem\] {
            height: 35.5rem
        }
        .h-full {
            height: 100%
        }
        .max-h-32 {
            max-height: 8rem
        }
        .min-h-screen {
            min-height: 100vh
        }
        .w-3 {
            width: 0.75rem
        }
        .w-4 {
            width: 1rem
        }
        .w-5 {
            width: 1.25rem
        }
        .w-6 {
            width: 1.5rem
        }
        .w-\[8rem\] {
            width: 8rem
        }
        .w-\[calc\(100\%\+8rem\)\] {
            width: calc(100% + 8rem)
        }
        .w-auto {
            width: auto
        }
        .w-full {
            width: 100%
        }
        .min-w-0 {
            min-width: 0px
        }
        .max-w-2xl {
            max-width: 42rem
        }
        .max-w-\[877px\] {
            max-width: 877px
        }
        .max-w-full {
            max-width: 100%
        }
        .flex-1 {
            flex: 1 1 0%
        }
        .flex-none {
            flex: none
        }
        .shrink-0 {
            flex-shrink: 0
        }
        .flex-grow {
            flex-grow: 1
        }
        .origin-top-right {
            transform-origin: top right
        }
        .transform {
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }
        @keyframes ping {
            75%, 100% {
                transform: scale(2);
                opacity: 0
            }
        }
        .animate-ping {
            animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite
        }
        .cursor-pointer {
            cursor: pointer
        }
        .resize {
            resize: both
        }
        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }
        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
        .\!flex-row {
            flex-direction: row !important
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
        .items-baseline {
            align-items: baseline
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
        .justify-between {
            justify-content: space-between
        }
        .gap-2 {
            gap: 0.5rem
        }
        .gap-3 {
            gap: 0.75rem
        }
        .gap-4 {
            gap: 1rem
        }
        .gap-6 {
            gap: 1.5rem
        }
        .space-y-2 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.5rem * var(--tw-space-y-reverse))
        }
        .self-center {
            align-self: center
        }
        .overflow-hidden {
            overflow: hidden
        }
        .overflow-x-auto {
            overflow-x: auto
        }
        .overflow-y-hidden {
            overflow-y: hidden
        }
        .overflow-x-scroll {
            overflow-x: scroll
        }
        .truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }
        .break-words {
            overflow-wrap: break-word
        }
        .rounded {
            border-radius: 0.25rem
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
        .rounded-r-md {
            border-top-right-radius: 0.375rem;
            border-bottom-right-radius: 0.375rem
        }
        .border {
            border-width: 1px
        }
        .border-l {
            border-left-width: 1px
        }
        .border-l-2 {
            border-left-width: 2px
        }
        .border-r {
            border-right-width: 1px
        }
        .border-t {
            border-top-width: 1px
        }
        .border-transparent {
            border-color: transparent
        }
        .border-l-red-500 {
            --tw-border-opacity: 1;
            border-left-color: rgb(239 68 68 / var(--tw-border-opacity))
        }
        .bg-\[\#FF2D20\]\/10 {
            background-color: rgb(255 45 32 / 0.1)
        }
        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }
        .bg-gray-200 {
            --tw-bg-opacity: 1;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity))
        }
        .bg-gray-200\/80 {
            background-color: rgb(229 231 235 / 0.8)
        }
        .bg-gray-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity))
        }
        .bg-green-400 {
            --tw-bg-opacity: 1;
            background-color: rgb(74 222 128 / var(--tw-bg-opacity))
        }
        .bg-red-500\/20 {
            background-color: rgb(239 68 68 / 0.2)
        }
        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }
        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }
        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5) var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(55 65 81 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }
        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }
        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0)  var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), transparent var(--tw-gradient-via-position), var(--tw-gradient-to)
        }
        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0)  var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }
        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }
        .to-zinc-900 {
            --tw-gradient-to: #18181b var(--tw-gradient-to-position)
        }
        .fill-red-500 {
            fill: #ef4444
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
        .p-1 {
            padding: 0.25rem
        }
        .p-2 {
            padding: 0.5rem
        }
        .p-4 {
            padding: 1rem
        }
        .p-6 {
            padding: 1.5rem
        }
        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }
        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem
        }
        .px-5 {
            padding-left: 1.25rem;
            padding-right: 1.25rem
        }
        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }
        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }
        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }
        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }
        .py-3 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem
        }
        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }
        .pb-12 {
            padding-bottom: 3rem
        }
        .pt-3 {
            padding-top: 0.75rem
        }
        .pt-4 {
            padding-top: 1rem
        }
        .pt-6 {
            padding-top: 1.5rem
        }
        .text-left {
            text-align: left
        }
        .text-center {
            text-align: center
        }
        .text-right {
            text-align: right
        }
        .font-mono {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }
        .font-sans {
            font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
        }
        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem
        }
        .text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem
        }
        .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem
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
        .text-xs {
            font-size: 0.75rem;
            line-height: 1rem
        }
        .font-bold {
            font-weight: 700
        }
        .font-semibold {
            font-weight: 600
        }
        .leading-5 {
            line-height: 1.25rem
        }
        .leading-relaxed {
            line-height: 1.625
        }
        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }
        .text-black\/50 {
            color: rgb(0 0 0 / 0.5)
        }
        .text-blue-500 {
            --tw-text-opacity: 1;
            color: rgb(59 130 246 / var(--tw-text-opacity))
        }
        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }
        .text-gray-50 {
            --tw-text-opacity: 1;
            color: rgb(249 250 251 / var(--tw-text-opacity))
        }
        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }
        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }
        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }
        .text-red-500 {
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity))
        }
        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }
        .underline {
            text-decoration-line: underline
        }
        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }
        .opacity-75 {
            opacity: 0.75
        }
        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }
        .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0,0,0,0.08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }
        .shadow-xl {
            --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }
        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }
        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }
        .ring-black {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity))
        }
        .ring-gray-900\/5 {
            --tw-ring-color: rgb(17 24 39 / 0.05)
        }
        .ring-transparent {
            --tw-ring-color: transparent
        }
        .ring-white {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
        }
        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / 0.05)
        }
        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,0.06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }
        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,0.25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }
        .filter {
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }
        .transition {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
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
        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }
        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }
        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }
        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }
        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }
        .default\:col-span-full:default {
            grid-column: 1 / -1
        }
        .default\:row-span-1:default {
            grid-row: span 1 / span 1
        }
        .hover\:bg-gray-100:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }
        .hover\:bg-gray-100\/75:hover {
            background-color: rgb(243 244 246 / 0.75)
        }
        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }
        .hover\:text-black\/70:hover {
            color: rgb(0 0 0 / 0.7)
        }
        .hover\:text-gray-500:hover {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }
        .hover\:underline:hover {
            text-decoration-line: underline
        }
        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / 0.2)
        }
        .focus\:text-gray-500:focus {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }
        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }
        .focus\:outline:focus {
            outline-style: solid
        }
        .focus\:outline-2:focus {
            outline-width: 2px
        }
        .focus\:outline-red-500:focus {
            outline-color: #ef4444
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
            .sm\:col-span-1 {
                grid-column: span 1 / span 1
            }
            .sm\:col-span-2 {
                grid-column: span 2 / span 2
            }
            .sm\:mt-10 {
                margin-top: 2.5rem
            }
            .sm\:flex {
                display: flex
            }
            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }
            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }
            .sm\:w-3\/4 {
                width: 75%
            }
            .sm\:items-center {
                align-items: center
            }
            .sm\:justify-center {
                justify-content: center
            }
            .sm\:gap-6 {
                gap: 1.5rem
            }
            .sm\:p-12 {
                padding: 3rem
            }
            .sm\:py-5 {
                padding-top: 1.25rem;
                padding-bottom: 1.25rem
            }
            .sm\:pt-5 {
                padding-top: 1.25rem
            }
            .sm\:text-3xl {
                font-size: 1.875rem;
                line-height: 2.25rem
            }
        }
        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
            .md\:block {
                display: block
            }
            .md\:inline {
                display: inline
            }
            .md\:flex {
                display: flex
            }
            .md\:hidden {
                display: none
            }
            .md\:min-w-64 {
                min-width: 16rem
            }
            .md\:max-w-80 {
                max-width: 20rem
            }
            .md\:items-center {
                align-items: center
            }
            .md\:justify-between {
                justify-content: space-between
            }
            .md\:gap-2 {
                gap: 0.5rem
            }
        }
        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }
            .lg\:block {
                display: block
            }
            .lg\:inline-block {
                display: inline-block
            }
            .lg\:h-16 {
                height: 4rem
            }
            .lg\:w-\[12rem\] {
                width: 12rem
            }
            .lg\:max-w-7xl {
                max-width: 80rem
            }
            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
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
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }
            .lg\:pt-0 {
                padding-top: 0px
            }
            .lg\:text-2xl {
                font-size: 1.5rem;
                line-height: 2rem
            }
            .lg\:text-base {
                font-size: 1rem;
                line-height: 1.5rem
            }
            .lg\:text-sm {
                font-size: 0.875rem;
                line-height: 1.25rem
            }
            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity))
            }
            .default\:lg\:col-span-6:default {
                grid-column: span 6 / span 6
            }
        }
        @media (min-width: 1280px) {
            .xl\:w-1\/2 {
                width: 50%
            }
        }
        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }
            .dark\:hidden {
                display: none
            }
            .dark\:border {
                border-width: 1px
            }
            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }
            .dark\:border-gray-800 {
                --tw-border-opacity: 1;
                border-color: rgb(31 41 55 / var(--tw-border-opacity))
            }
            .dark\:border-gray-900 {
                --tw-border-opacity: 1;
                border-color: rgb(17 24 39 / var(--tw-border-opacity))
            }
            .dark\:border-l-red-500 {
                --tw-border-opacity: 1;
                border-left-color: rgb(239 68 68 / var(--tw-border-opacity))
            }
            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity))
            }
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }
            .dark\:bg-gray-900\/80 {
                background-color: rgb(17 24 39 / 0.8)
            }
            .dark\:bg-gray-950\/95 {
                background-color: rgb(3 7 18 / 0.95)
            }
            .dark\:bg-red-500\/20 {
                background-color: rgb(239 68 68 / 0.2)
            }
            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity))
            }
            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0)  var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }
            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }
            .dark\:text-gray-100 {
                --tw-text-opacity: 1;
                color: rgb(243 244 246 / var(--tw-text-opacity))
            }
            .dark\:text-gray-300 {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity))
            }
            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }
            .dark\:text-gray-600 {
                --tw-text-opacity: 1;
                color: rgb(75 85 99 / var(--tw-text-opacity))
            }
            .dark\:text-gray-950 {
                --tw-text-opacity: 1;
                color: rgb(3 7 18 / var(--tw-text-opacity))
            }
            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }
            .dark\:text-white\/50 {
                color: rgb(255 255 255 / 0.5)
            }
            .dark\:text-white\/70 {
                color: rgb(255 255 255 / 0.7)
            }
            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }
            .dark\:ring-gray-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(31 41 55 / var(--tw-ring-opacity))
            }
            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
            }
            .dark\:hover\:bg-gray-700:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(55 65 81 / var(--tw-bg-opacity))
            }
            .dark\:hover\:bg-gray-800:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }
            .dark\:hover\:bg-gray-800\/75:hover {
                background-color: rgb(31 41 55 / 0.75)
            }
            .dark\:hover\:text-gray-500:hover {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
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
            .dark\:focus\:text-gray-500:focus {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
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
    <title>Document</title>
</head>
<body>
    <h1 class="text-3xl font-bold underline">Hello Arash -- Welcome To :  showUserTest.blade.php </h1>
</body>
</html>
