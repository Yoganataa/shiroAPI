<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Shiro API</title>
    <!-- essential -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/main.css" />
    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        *,
        ::before,
        ::after {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb;
        }

        ::before,
        ::after {
            --tw-content: '';
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        body {
            margin: 0;
            line-height: inherit;
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px;
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        b,
        strong {
            font-weight: bolder;
        }

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em;
        }

        small {
            font-size: 80%;
        }

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

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        [type='button'],
        [type='reset'],
        [type='submit'] {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none;
        }

        :-moz-focusring {
            outline: auto;
        }

        :-moz-ui-invalid {
            box-shadow: none;
        }

        progress {
            vertical-align: baseline;
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto;}[type='search'] {
                -webkit-appearance: textfield;
                outline-offset: -2px;
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none;
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit;
            }

            summary {
                display: list-item;
            }

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

            textarea {
                resize: vertical;
            }

            input::-moz-placeholder,
            textarea::-moz-placeholder {
                opacity: 1;
                color: #9ca3af;
            }

            input:-ms-input-placeholder,
            textarea:-ms-input-placeholder {
                opacity: 1;
                color: #9ca3af;
            }

            input::placeholder,
            textarea::placeholder {
                opacity: 1;
                color: #9ca3af;
            }

            button,
            [role="button"] {
                cursor: pointer;
            }

            :disabled {
                cursor: default;
            }

            img,
            svg,
            video,
            canvas,
            audio,
            iframe,
            embed,
            object {
                display: block;
                vertical-align: middle;
            }

            img,
            video {
                max-width: 100%;
                height: auto;
            }

            [hidden] {
                display: none;
            }

            :root,
            [data-theme] {
                background-color: hsla(var(--b1) / var(--tw-bg-opacity, 1));
                color: hsla(var(--bc) / var(--tw-text-opacity, 1));
            }

            html {
                -webkit-tap-highlight-color: transparent;
            }

            :root {
                --p: 212 100% 51%;
                --pf: 212 100% 41%;
                --sf: 247 47% 35%;
                --af: 310 49% 42%;
                --nf: 217 92% 8%;
                --pc: 212 100% 90%;
                --sc: 247 100% 89%;
                --ac: 310 100% 90%;
                --nc: 217 100% 82%;
                --inc: 192 100% 16%;
                --suc: 182 100% 13%;
                --wac: 32 100% 17%;
                --erc: 0 100% 14%;
                --rounded-box: 1rem;
                --rounded-btn: 0.5rem;
                --rounded-badge: 1.9rem;
                --animation-btn: 0.25s;
                --animation-input: .2s;
                --btn-text-case: uppercase;
                --btn-focus-scale: 0.95;
                --border-btn: 1px;
                --tab-border: 1px;
                --tab-radius: 0.5rem;
                --s: 247 47% 43%;
                --a: 310 49% 52%;
                --n: 217 92% 10%;
                --b1: 0 0% 100%;
                --b2: 217 100% 97%;
                --b3: 219 44% 92%;
                --bc: 214 30% 32%;
                --in: 192 93% 78%;
                --su: 182 47% 66%;
                --wa: 32 62% 84%;
                --er: 0 63% 72%;
            }

            @media (prefers-color-scheme: dark) {
                :root {
                    --p: 262 80% 50%;
                    --pf: 262 80% 40%;
                    --sf: 316 70% 40%;
                    --af: 175 70% 33%;
                    --in: 198 93% 60%;
                    --su: 158 64% 52%;
                    --wa: 43 96% 56%;
                    --er: 0 91% 71%;
                    --inc: 198 100% 12%;
                    --suc: 158 100% 10%;
                    --wac: 43 100% 11%;
                    --erc: 0 100% 14%;
                    --rounded-box: 1rem;
                    --rounded-btn: 0.5rem;
                    --rounded-badge: 1.9rem;
                    --animation-btn: 0.25s;
                    --animation-input: .2s;
                    --btn-text-case: uppercase;
                    --btn-focus-scale: 0.95;
                    --border-btn: 1px;
                    --tab-border: 1px;
                    --tab-radius: 0.5rem;
                    --pc: 0 0% 100%;
                    --s: 316 70% 50%;
                    --sc: 0 0% 100%;
                    --a: 175 70% 41%;
                    --ac: 0 0% 100%;
                    --n: 218 18% 12%;
                    --nf: 223 17% 8%;
                    --nc: 220 13% 69%;
                    --b1: 220 18% 20%;
                    --b2: 220 17% 17%;
                    --b3: 219 18% 15%;
                    --bc: 220 13% 69%;
                }
            }

            [data-theme=winter] {
                --p: 212 100% 51%;
                --pf: 212 100% 41%;
                --sf: 247 47% 35%;
                --af: 310 49% 42%;
                --nf: 217 92% 8%;
                --pc: 212 100% 90%;
                --sc: 247 100% 89%;
                --ac: 310 100% 90%;
                --nc: 217 100% 82%;
                --inc: 192 100% 16%;
                --suc: 182 100% 13%;
                --wac: 32 100% 17%;
                --erc: 0 100% 14%;
                --rounded-box: 1rem;
                --rounded-btn: 0.5rem;
                --rounded-badge: 1.9rem;
                --animation-btn: 0.25s;
                --animation-input: .2s;
                --btn-text-case: uppercase;
                --btn-focus-scale: 0.95;
                --border-btn: 1px;
                --tab-border: 1px;
                --tab-radius: 0.5rem;
                --s: 247 47% 43%;
                --a: 310 49% 52%;
                --n: 217 92% 10%;
                --b1: 0 0% 100%;
                --b2: 217 100% 97%;
                --b3: 219 44% 92%;
                --bc: 214 30% 32%;
                --in: 192 93% 78%;
                --su: 182 47% 66%;
                --wa: 32 62% 84%;
                --er: 0 63% 72%;
            }

            [data-theme=dark] {
                --p: 262 80% 50%;
                --pf: 262 80% 40%;
                --sf: 316 70% 40%;
                --af: 175 70% 33%;
                --in: 198 93% 60%;
                --su: 158 64% 52%;
                --wa: 43 96% 56%;
                --er: 0 91% 71%;
                --inc: 198 100% 12%;
                --suc: 158 100% 10%;
                --wac: 43 100% 11%;
                --erc: 0 100% 14%;
                --rounded-box: 1rem;
                --rounded-btn: 0.5rem;
                --rounded-badge: 1.9rem;
                --animation-btn: 0.25s;
                --animation-input: .2s;
                --btn-text-case: uppercase;
                --btn-focus-scale: 0.95;
                --border-btn: 1px;
                --tab-border: 1px;
                --tab-radius: 0.5rem;
                --pc: 0 0% 100%;
                --s: 316 70% 50%;
                --sc: 0 0% 100%;
                --a: 175 70% 41%;
                --ac: 0 0% 100%;
                --n: 218 18% 12%;
                --nf: 223 17% 8%;
                --nc: 220 13% 69%;
                --b1: 220 18% 20%;
                --b2: 220 17% 17%;
                --b3: 219 18% 15%;
                --bc: 220 13% 69%;
            }

            [data-theme=garden] {
                --p: 139 16% 43%;
                --pf: 139 16% 34%;
                --sf: 97 37% 75%;
                --af: 0 68% 75%;
                --nf: 0 4% 28%;
                --b2: 0 4% 82%;
                --b3: 0 4% 74%;
                --in: 198 93% 60%;
                --su: 158 64% 52%;
                --wa: 43 96% 56%;
                --er: 0 91% 71%;
                --pc: 139 100% 89%;
                --inc: 198 100% 12%;
                --suc: 158 100% 10%;
                --wac: 43 100% 11%;
                --erc: 0 100% 14%;
                --rounded-box: 1rem;
                --rounded-btn: 0.5rem;
                --rounded-badge: 1.9rem;
                --animation-btn: 0.25s;
                --animation-input: .2s;
                --btn-text-case: uppercase;
                --btn-focus-scale: 0.95;
                --border-btn: 1px;
                --tab-border: 1px;
                --tab-radius: 0.5rem;
                --s: 97 37% 93%;
                --sc: 96 32% 15%;
                --a: 0 68% 94%;
                --ac: 0 22% 16%;
                --n: 0 4% 35%;
                --nc: 0 4% 91%;
                --b1: 0 4% 91%;
                --bc: 0 3% 6%;
            }

            *,
            ::before,
            ::after {
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
                --tw-backdrop-sepia: ;
            }

            .avatar {
                position: relative;
                display: inline-flex;
            }

            .avatar>div {
                display: block;
                aspect-ratio: 1 / 1;
                overflow: hidden;
            }

            .avatar img {
                height: 100%;
                width: 100%;
                -o-object-fit: cover;
                object-fit: cover;
            }

            .avatar.placeholder>div {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .badge {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                transition-duration: 200ms;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                height: 1.25rem;
                font-size: 0.875rem;
                line-height: 1.25rem;
                width: -webkit-fit-content;
                width: -moz-fit-content;
                width: fit-content;
                padding-left: 0.563rem;
                padding-right: 0.563rem;
                border-width: 1px;
                --tw-border-opacity: 1;
                border-color: hsl(var(--n) / var(--tw-border-opacity));
                --tw-bg-opacity: 1;
                background-color: hsl(var(--n) / var(--tw-bg-opacity));
                --tw-text-opacity: 1;
                color: hsl(var(--nc) / var(--tw-text-opacity));
                border-radius: var(--rounded-badge, 1.9rem);
            }

            .btn {
                display: inline-flex;
                flex-shrink: 0;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
                border-color: transparent;
                border-color: hsl(var(--n) / var(--tw-border-opacity));
                text-align: center;
                transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                transition-duration: 200ms;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                border-radius: var(--rounded-btn, 0.5rem);
                height: 3rem;
                padding-left: 1rem;
                padding-right: 1rem;
                font-size: 0.875rem;
                line-height: 1.25rem;
                line-height: 1em;
                min-height: 3rem;
                font-weight: 600;
                text-transform: uppercase;
                text-transform: var(--btn-text-case, uppercase);
                border-width: var(--border-btn, 1px);
                -webkit-animation: button-pop var(--animation-btn, 0.25s) ease-out;
                animation: button-pop var(--animation-btn, 0.25s) ease-out;
                --tw-border-opacity: 1;
                --tw-bg-opacity: 1;
                background-color: hsl(var(--n) / var(--tw-bg-opacity));
                --tw-text-opacity: 1;
                color: hsl(var(--nc) / var(--tw-text-opacity));
            }

            .btn-disabled,
            .btn[disabled] {
                pointer-events: none;
                --tw-border-opacity: 0;
                background-color: hsl(var(--n) / var(--tw-bg-opacity));
                --tw-bg-opacity: 0.2;
                color: hsl(var(--bc) / var(--tw-text-opacity));
                --tw-text-opacity: 0.2;
            }

            .btn-square {
                height: 3rem;
                width: 3rem;
                padding: 0px;
            }

            .btn.loading,
            .btn.loading:hover {
                pointer-events: none;
            }

            .btn.loading:before {
                margin-right: 0.5rem;
                height: 1rem;
                width: 1rem;
                border-radius: 9999px;
                border-width: 2px;
                -webkit-animation: spin 2s linear infinite;
                animation: spin 2s linear infinite;
                content: "";
                border-top-color: transparent;
                border-left-color: transparent;
                border-bottom-color: currentColor;
                border-right-color: currentColor;
            }

            @media (prefers-reduced-motion: reduce) {
                .btn.loading:before {
                    -webkit-animation: spin 10s linear infinite;
                    animation: spin 10s linear infinite;
                }
            }

            @-webkit-keyframes spin {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }

            @keyframes spin {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }

            .btn-group {
                display: flex;
                flex-wrap: wrap;
            }

            .btn-group>input[type="radio"].btn {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
            }

            .btn-group>input[type="radio"].btn:before {
                content: attr(data-title);
            }

            .card {
                position: relative;
                display: flex;
                flex-direction: column;
                overflow: hidden;
                border-radius: var(--rounded-box, 1rem);
            }

            .card:focus {
                outline: 2px solid transparent;
                outline-offset: 2px;
            }

            .card-body {
                display: flex;
                flex: 1 1 auto;
                flex-direction: column;
                padding: var(--padding-card, 2rem);
                gap: 0.5rem;
            }

            .card-body :where(p) {
                flex-grow: 1;
            }

            .card figure {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .card.image-full {
                display: grid;
            }

            .card.image-full:before {
                position: relative;
                content: "";
                z-index: 10;
                --tw-bg-opacity: 1;
                background-color: hsl(var(--n) / var(--tw-bg-opacity));
                opacity: 0.75;
                border-radius: var(--rounded-box, 1rem);
            }

            .card.image-full:before,
            .card.image-full>* {
                grid-column-start: 1;
                grid-row-start: 1;
            }

            .card.image-full>figure img {
                height: 100%;
                -o-object-fit: cover;
                object-fit: cover;
            }

            .card.image-full>.card-body {
                position: relative;
                z-index: 20;
                --tw-text-opacity: 1;
                color: hsl(var(--nc) / var(--tw-text-opacity));
            }

            .checkbox {
                flex-shrink: 0;
                --chkbg: var(--bc);
                --chkfg: var(--b1);
                height: 1.5rem;
                width: 1.5rem;
                cursor: pointer;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                border-width: 1px;
                border-color: hsl(var(--bc) / var(--tw-border-opacity));
                --tw-border-opacity: 0.2;
                border-radius: var(--rounded-btn, 0.5rem);
            }

            .divider {
                display: flex;
                flex-direction: row;
                align-items: center;
                align-self: stretch;
                margin-top: 1rem;
                margin-bottom: 1rem;
                height: 1rem;
                white-space: nowrap;
            }

            .divider:before,
            .divider:after {
                content: "";
                flex-grow: 1;
                height: 0.125rem;
                width: 100%;
            }

            .drawer {
                display: grid;
                width: 100%;
                overflow: hidden;
                height: 100vh;
                height: 100svh;
            }

            .drawer.drawer-end {
                direction: rtl;
            }

            .drawer.drawer-end>* {
                direction: ltr;
            }

            .drawer.drawer-end .drawer-toggle~.drawer-side>.drawer-overlay+* {
                --tw-translate-x: 100%;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                justify-self: end;
            }

            .drawer.drawer-end .drawer-toggle:checked~.drawer-side>.drawer-overlay+* {
                --tw-translate-x: 0px;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            :where(.drawer-toggle ~ .drawer-content) {
                height: inherit;
            }

            .drawer-toggle {
                position: absolute;
                height: 0px;
                width: 0px;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                opacity: 0;
            }

            .drawer-toggle~.drawer-content {
                z-index: 0;
                grid-column-start: 1;
                grid-row-start: 1;
                overflow-y: auto;
                transition-property: all;
                transition-duration: 300ms;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .drawer-toggle~.drawer-side {
                grid-column-start: 1;
                grid-row-start: 1;
                display: grid;
                max-height: 100vh;
            }

            .drawer-toggle~.drawer-side>.drawer-overlay {
                visibility: hidden;
                grid-column-start: 1;
                grid-row-start: 1;
                opacity: 0;
                cursor: pointer;
                --tw-bg-opacity: 1;
                background-color: hsl(var(--nf, var(--n)) / var(--tw-bg-opacity));
                transition-property: all;
                transition-duration: 300ms;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .drawer-toggle~.drawer-side>.drawer-overlay+* {
                z-index: 10;
                grid-column-start: 1;
                grid-row-start: 1;
                --tw-translate-x: -100%;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                transition-property: all;
                transition-duration: 300ms;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .drawer-toggle:checked~.drawer-side {
                overflow-y: auto;
            }

            .drawer-toggle:checked~.drawer-side>.drawer-overlay {
                visibility: visible;
                opacity: 0.999999;
                --tw-bg-opacity: 0.4;
            }

            .drawer-toggle:checked~.drawer-side>.drawer-overlay+* {
                --tw-translate-x: 0px;

                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));}[dir="rtl"] .drawer-toggle~.drawer-side>.drawer-overlay+* {
                    --tw-translate-x: 100%;

                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));}[dir="rtl"] .drawer-toggle:checked~.drawer-side>.drawer-overlay+* {
                        --tw-translate-x: 0px;
                        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                    }

                    @media (min-width: 1024px) {
                        .drawer-mobile {
                            grid-auto-columns: -webkit-max-content auto;
                            grid-auto-columns: max-content auto;
                        }

                        .drawer-mobile>.drawer-toggle~.drawer-content {
                            height: auto;
                        }

                        @media (min-width: 1024px) {
                            .drawer-mobile>.drawer-toggle~.drawer-content {
                                grid-column-start: 2;
                            }
                        }

                        @media (min-width: 1024px) {
                            .drawer-mobile>.drawer-toggle~.drawer-side>.drawer-overlay {
                                visibility: visible;
                            }
                        }

                        @media (min-width: 1024px) {
                            .drawer-mobile>.drawer-toggle~.drawer-side>.drawer-overlay+* {
                                --tw-translate-x: 0px;
                                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                            }
                        }

                        @media (min-width: 1024px) {
                            .drawer-mobile.drawer-end>.drawer-toggle~.drawer-content {
                                grid-column-start: 1;
                            }
                        }

                        @media (min-width: 1024px) {
                            .drawer-mobile.drawer-end>.drawer-toggle~.drawer-side {
                                grid-column-start: 2;
                            }
                        }

                        @media (min-width: 1024px) {
                            .drawer-mobile.drawer-end>.drawer-toggle~.drawer-side>.drawer-overlay {
                                visibility: visible;
                            }
                        }

                        @media (min-width: 1024px) {
                            .drawer-mobile.drawer-end>.drawer-toggle~.drawer-side>.drawer-overlay+* {
                                --tw-translate-x: 0px;
                                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                            }
                        }

                        .drawer-mobile>.drawer-toggle~.drawer-side {
                            overflow-y: auto;
                        }

                        .drawer-mobile.drawer-end {
                            grid-auto-columns: auto -webkit-max-content;
                            grid-auto-columns: auto max-content;
                            direction: ltr;
                        }

                        .drawer-mobile.drawer-end>.drawer-toggle~.drawer-content {
                            height: auto;
                        }

                        .drawer-mobile.drawer-end>.drawer-toggle~.drawer-side {
                            overflow-y: auto;
                        }

                        .drawer-mobile>.drawer-toggle:checked~.drawer-content {
                            --tw-translate-x: 0px;
                            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                        }
                    }

                    .form-control {
                        display: flex;
                        flex-direction: column;
                    }

                    .label {
                        display: flex;
                        -webkit-user-select: none;
                        -moz-user-select: none;
                        -ms-user-select: none;
                        user-select: none;
                        align-items: center;
                        justify-content: space-between;
                        padding-left: 0.25rem;
                        padding-right: 0.25rem;
                        padding-top: 0.5rem;
                        padding-bottom: 0.5rem;
                    }

                    .input {
                        flex-shrink: 1;
                        transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                        transition-duration: 200ms;
                        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                        height: 3rem;
                        padding-left: 1rem;
                        padding-right: 1rem;
                        font-size: 0.875rem;
                        line-height: 1.25rem;
                        line-height: 2;
                        border-width: 1px;
                        border-color: hsl(var(--bc) / var(--tw-border-opacity));
                        --tw-border-opacity: 0;
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--b1) / var(--tw-bg-opacity));
                        border-radius: var(--rounded-btn, 0.5rem);
                    }

                    .input-group {
                        display: flex;
                        width: 100%;
                        align-items: stretch;
                    }

                    .input-group>*,
                    .input-group>.input {
                        border-radius: 0px;
                    }

                    .input-group :where(span) {
                        display: flex;
                        align-items: center;
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--b3, var(--b2)) / var(--tw-bg-opacity));
                        padding-left: 1rem;
                        padding-right: 1rem;
                    }

                    .input-group :first-child {
                        border-top-left-radius: var(--rounded-btn, 0.5rem);
                        border-top-right-radius: 0;
                        border-bottom-left-radius: var(--rounded-btn, 0.5rem);
                        border-bottom-right-radius: 0;
                    }

                    .input-group :last-child {
                        border-top-left-radius: 0;
                        border-top-right-radius: var(--rounded-btn, 0.5rem);
                        border-bottom-left-radius: 0;
                        border-bottom-right-radius: var(--rounded-btn, 0.5rem);
                    }

                    .link {
                        cursor: pointer;
                        -webkit-text-decoration-line: underline;
                        text-decoration-line: underline;
                    }

                    .mask {
                        -webkit-mask-size: contain;
                        mask-size: contain;
                        -webkit-mask-repeat: no-repeat;
                        mask-repeat: no-repeat;
                        -webkit-mask-position: center;
                        mask-position: center;
                    }

                    .menu {
                        display: flex;
                        flex-direction: column;
                    }

                    .menu.horizontal {
                        display: inline-flex;
                        flex-direction: row;
                    }

                    .menu.horizontal :where(li) {
                        flex-direction: row;
                    }

                    .menu :where(li) {
                        position: relative;
                        display: flex;
                        flex-direction: column;
                        flex-wrap: wrap;
                        align-items: stretch;
                    }

                    .menu :where(li:not(.menu-title))> :where(*:not(ul)) {
                        display: flex;
                    }

                    .menu :where(li:not(.disabled):not(.menu-title))> :where(*:not(ul)) {
                        cursor: pointer;
                        -webkit-user-select: none;
                        -moz-user-select: none;
                        -ms-user-select: none;
                        user-select: none;
                        align-items: center;
                        outline: 2px solid transparent;
                        outline-offset: 2px;
                    }

                    .menu> :where(li > *:not(ul):focus) {
                        outline: 2px solid transparent;
                        outline-offset: 2px;
                    }

                    .menu> :where(li.disabled > *:not(ul):focus) {
                        cursor: auto;
                    }

                    .menu> :where(li) :where(ul) {
                        display: flex;
                        flex-direction: column;
                        align-items: stretch;
                    }

                    .menu> :where(li)> :where(ul) {
                        position: absolute;
                        display: none;
                        top: initial;
                        left: 100%;
                        border-top-left-radius: inherit;
                        border-top-right-radius: inherit;
                        border-bottom-right-radius: inherit;
                        border-bottom-left-radius: inherit;
                    }

                    .menu> :where(li:hover)> :where(ul) {
                        display: flex;
                    }

                    .menu> :where(li:focus)> :where(ul) {
                        display: flex;
                    }

                    .navbar {
                        display: flex;
                        align-items: center;
                        padding: var(--navbar-padding, 0.5rem);
                        min-height: 4rem;
                        width: 100%;
                    }

                    :where(.navbar > *) {
                        display: inline-flex;
                        align-items: center;
                    }

                    .select {
                        display: inline-flex;
                        flex-shrink: 0;
                        cursor: pointer;
                        -webkit-user-select: none;
                        -moz-user-select: none;
                        -ms-user-select: none;
                        user-select: none;
                        -webkit-appearance: none;
                        -moz-appearance: none;
                        appearance: none;
                        height: 3rem;
                        padding-left: 1rem;
                        padding-right: 2.5rem;
                        font-size: 0.875rem;
                        line-height: 1.25rem;
                        line-height: 2;
                        min-height: 3rem;
                        border-width: 1px;
                        border-color: hsl(var(--bc) / var(--tw-border-opacity));
                        --tw-border-opacity: 0;
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--b1) / var(--tw-bg-opacity));
                        font-weight: 600;
                        transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                        transition-duration: 200ms;
                        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                        border-radius: var(--rounded-btn, 0.5rem);
                        background-image: linear-gradient(45deg, transparent 50%, currentColor 50%), linear-gradient(135deg, currentColor 50%, transparent 50%);
                        background-position: calc(100% - 20px) calc(1px + 50%), calc(100% - 16px) calc(1px + 50%);
                        background-size: 4px 4px, 4px 4px;
                        background-repeat: no-repeat;
                    }

                    .select-disabled,
                    .select[disabled] {
                        pointer-events: none;
                        cursor: not-allowed;
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--b2, var(--b1)) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--b2, var(--b1)) / var(--tw-bg-opacity));
                        --tw-text-opacity: 0.2;
                    }

                    .table {
                        position: relative;
                        text-align: left;
                    }

                    .table th:first-child {
                        position: sticky;
                        position: -webkit-sticky;
                        left: 0px;
                        z-index: 11;
                    }

                    .avatar-group .avatar {
                        overflow: hidden;
                        border-radius: 9999px;
                        border-width: 4px;
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--b1) / var(--tw-border-opacity));
                    }

                    .btn-outline .badge {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--nf, var(--n)) / var(--tw-border-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--nc) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-primary .badge {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--p) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--p) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--pc) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-secondary .badge {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--s) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--s) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--sc) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-accent .badge {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--a) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--a) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--ac) / var(--tw-text-opacity));
                    }

                    .btn-outline .badge.outline {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--nf, var(--n)) / var(--tw-border-opacity));
                        background-color: transparent;
                    }

                    .btn-outline.btn-primary .badge-outline {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--p) / var(--tw-border-opacity));
                        background-color: transparent;
                        --tw-text-opacity: 1;
                        color: hsl(var(--p) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-secondary .badge-outline {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--s) / var(--tw-border-opacity));
                        background-color: transparent;
                        --tw-text-opacity: 1;
                        color: hsl(var(--s) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-accent .badge-outline {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--a) / var(--tw-border-opacity));
                        background-color: transparent;
                        --tw-text-opacity: 1;
                        color: hsl(var(--a) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-success .badge-outline {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--su) / var(--tw-border-opacity));
                        background-color: transparent;
                        --tw-text-opacity: 1;
                        color: hsl(var(--su) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-warning .badge-outline {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--wa) / var(--tw-border-opacity));
                        background-color: transparent;
                        --tw-text-opacity: 1;
                        color: hsl(var(--wa) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-error .badge-outline {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--er) / var(--tw-border-opacity));
                        background-color: transparent;
                        --tw-text-opacity: 1;
                        color: hsl(var(--er) / var(--tw-text-opacity));
                    }

                    .btn-outline:hover .badge {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--b2, var(--b1)) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--b2, var(--b1)) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--bc) / var(--tw-text-opacity));
                    }

                    .btn-outline:hover .badge.outline {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--b2, var(--b1)) / var(--tw-border-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--nc) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-primary:hover .badge {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--pc) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--pc) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--p) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-primary:hover .badge.outline {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--pc) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--pf, var(--p)) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--pc) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-secondary:hover .badge {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--sc) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--sc) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--s) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-secondary:hover .badge.outline {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--sc) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--sf, var(--s)) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--sc) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-accent:hover .badge {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--ac) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--ac) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--a) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-accent:hover .badge.outline {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--ac) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--af, var(--a)) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--ac) / var(--tw-text-opacity));
                    }

                    .btn:active:hover,
                    .btn:active:focus {
                        -webkit-animation: none;
                        animation: none;
                        transform: scale(var(--btn-focus-scale, 0.95));
                    }

                    .btn:hover,
                    .btn-active {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--nf, var(--n)) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--nf, var(--n)) / var(--tw-bg-opacity));
                    }

                    .btn:focus-visible {
                        outline: 2px solid hsl(var(--nf));
                        outline-offset: 2px;
                    }

                    .btn-primary {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--p) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--p) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--pc) / var(--tw-text-opacity));
                    }

                    .btn-primary:hover,
                    .btn-primary.btn-active {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--pf, var(--p)) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--pf, var(--p)) / var(--tw-bg-opacity));
                    }

                    .btn-primary:focus-visible {
                        outline: 2px solid hsl(var(--p));
                    }

                    .btn-secondary {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--s) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--s) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--sc) / var(--tw-text-opacity));
                    }

                    .btn-secondary:hover,
                    .btn-secondary.btn-active {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--sf, var(--s)) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--sf, var(--s)) / var(--tw-bg-opacity));
                    }

                    .btn-secondary:focus-visible {
                        outline: 2px solid hsl(var(--s));
                    }

                    .btn-accent {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--a) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--a) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--ac) / var(--tw-text-opacity));
                    }

                    .btn-accent:hover,
                    .btn-accent.btn-active {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--af, var(--a)) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--af, var(--a)) / var(--tw-bg-opacity));
                    }

                    .btn-accent:focus-visible {
                        outline: 2px solid hsl(var(--a));
                    }

                    .btn-info:hover,
                    .btn-info.btn-active {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--in) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--in) / var(--tw-bg-opacity));
                    }

                    .btn-success {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--su) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--su) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--suc, var(--nc)) / var(--tw-text-opacity));
                    }

                    .btn-success:hover,
                    .btn-success.btn-active {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--su) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--su) / var(--tw-bg-opacity));
                    }

                    .btn-success:focus-visible {
                        outline: 2px solid hsl(var(--su));
                    }

                    .btn-warning {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--wa) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--wa) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--wac, var(--nc)) / var(--tw-text-opacity));
                    }

                    .btn-warning:hover,
                    .btn-warning.btn-active {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--wa) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--wa) / var(--tw-bg-opacity));
                    }

                    .btn-warning:focus-visible {
                        outline: 2px solid hsl(var(--wa));
                    }

                    .btn-error {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--er) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--er) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--erc, var(--nc)) / var(--tw-text-opacity));
                    }

                    .btn-error:hover,
                    .btn-error.btn-active {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--er) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--er) / var(--tw-bg-opacity));
                    }

                    .btn-error:focus-visible {
                        outline: 2px solid hsl(var(--er));
                    }

                    .btn.glass:hover,
                    .btn.glass.btn-active {
                        --glass-opacity: 25%;
                        --glass-border-opacity: 15%;
                    }

                    .btn.glass:focus-visible {
                        outline: 2px solid 0 0 2px currentColor;
                    }

                    .btn-ghost {
                        border-width: 1px;
                        border-color: transparent;
                        background-color: transparent;
                        color: currentColor;
                    }

                    .btn-ghost:hover,
                    .btn-ghost.btn-active {
                        --tw-border-opacity: 0;
                        background-color: hsl(var(--bc) / var(--tw-bg-opacity));
                        --tw-bg-opacity: 0.2;
                    }

                    .btn-ghost:focus-visible {
                        outline: 2px solid 0 0 2px currentColor;
                    }

                    .btn-link:hover,
                    .btn-link.btn-active {
                        border-color: transparent;
                        background-color: transparent;
                        -webkit-text-decoration-line: underline;
                        text-decoration-line: underline;
                    }

                    .btn-outline.btn-primary {
                        --tw-text-opacity: 1;
                        color: hsl(var(--p) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-primary:hover {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--pf, var(--p)) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--pf, var(--p)) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--pc) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-secondary {
                        --tw-text-opacity: 1;
                        color: hsl(var(--s) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-secondary:hover {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--sf, var(--s)) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--sf, var(--s)) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--sc) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-accent {
                        --tw-text-opacity: 1;
                        color: hsl(var(--a) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-accent:hover {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--af, var(--a)) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--af, var(--a)) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--ac) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-success {
                        --tw-text-opacity: 1;
                        color: hsl(var(--su) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-success:hover {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--su) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--su) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--suc, var(--nc)) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-warning {
                        --tw-text-opacity: 1;
                        color: hsl(var(--wa) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-warning:hover {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--wa) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--wa) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--wac, var(--nc)) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-error {
                        --tw-text-opacity: 1;
                        color: hsl(var(--er) / var(--tw-text-opacity));
                    }

                    .btn-outline.btn-error:hover {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--er) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--er) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--erc, var(--nc)) / var(--tw-text-opacity));
                    }

                    .btn.loading.btn-square:before,
                    .btn.loading.btn-circle:before {
                        margin-right: 0px;
                    }

                    .btn.loading.btn-xl:before,
                    .btn.loading.btn-lg:before {
                        height: 1.25rem;
                        width: 1.25rem;
                    }

                    .btn.loading.btn-sm:before,
                    .btn.loading.btn-xs:before {
                        height: 0.75rem;
                        width: 0.75rem;
                    }

                    .btn-group>input[type="radio"]:checked.btn,
                    .btn-group>.btn-active {
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--p) / var(--tw-border-opacity));
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--p) / var(--tw-bg-opacity));
                        --tw-text-opacity: 1;
                        color: hsl(var(--pc) / var(--tw-text-opacity));
                    }

                    .btn-group>input[type="radio"]:checked.btn:focus-visible,
                    .btn-group>.btn-active:focus-visible {
                        outline: 2px solid hsl(var(--p));
                    }

                    .btn-group>.btn:not(:first-of-type) {
                        margin-left: -1px;
                        border-top-left-radius: 0px;
                        border-bottom-left-radius: 0px;
                    }

                    .btn-group>.btn:not(:last-of-type) {
                        border-top-right-radius: 0px;
                        border-bottom-right-radius: 0px;
                    }

                    @-webkit-keyframes button-pop {
                        0% {
                            transform: scale(var(--btn-focus-scale, 0.95));
                        }

                        40% {
                            transform: scale(1.02);
                        }

                        100% {
                            transform: scale(1);
                        }
                    }

                    @keyframes button-pop {
                        0% {
                            transform: scale(var(--btn-focus-scale, 0.95));
                        }

                        40% {
                            transform: scale(1.02);
                        }

                        100% {
                            transform: scale(1);
                        }
                    }

                    .card:focus-visible {
                        outline: 2px solid currentColor;
                        outline-offset: 2px;
                    }

                    .card.bordered {
                        border-width: 1px;
                        --tw-border-opacity: 1;
                        border-color: hsl(var(--b2, var(--b1)) / var(--tw-border-opacity));
                    }

                    .card.compact .card-body {
                        padding: 1rem;
                        font-size: 0.875rem;
                        line-height: 1.25rem;
                    }

                    .card-title {
                        display: flex;
                        align-items: center;
                        gap: 0.5rem;
                        font-size: 1.25rem;
                        line-height: 1.75rem;
                        font-weight: 600;
                    }

                    .checkbox:focus-visible {
                        outline: 2px solid hsl(var(--bc));
                        outline-offset: 2px;
                    }

                    .checkbox:checked,
                    .checkbox[checked="true"] {
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--bc) / var(--tw-bg-opacity));
                        background-repeat: no-repeat;
                        -webkit-animation: checkmark var(--animation-input, 0.2s) ease-in-out;
                        animation: checkmark var(--animation-input, 0.2s) ease-in-out;
                        background-image: linear-gradient(-45deg, transparent 65%, hsl(var(--chkbg)) 65.99%), linear-gradient(45deg, transparent 75%, hsl(var(--chkbg)) 75.99%), linear-gradient(-45deg, hsl(var(--chkbg)) 40%, transparent 40.99%), linear-gradient(45deg, hsl(var(--chkbg)) 30%, hsl(var(--chkfg)) 30.99%, hsl(var(--chkfg)) 40%, transparent 40.99%), linear-gradient(-45deg, hsl(var(--chkfg)) 50%, hsl(var(--chkbg)) 50.99%);
                    }

                    .checkbox:indeterminate {
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--bc) / var(--tw-bg-opacity));
                        background-repeat: no-repeat;
                        -webkit-animation: checkmark var(--animation-input, 0.2s) ease-in-out;
                        animation: checkmark var(--animation-input, 0.2s) ease-in-out;
                        background-image: linear-gradient(90deg, transparent 80%, hsl(var(--chkbg)) 80%), linear-gradient(-90deg, transparent 80%, hsl(var(--chkbg)) 80%), linear-gradient(0deg, hsl(var(--chkbg)) 43%, hsl(var(--chkfg)) 43%, hsl(var(--chkfg)) 57%, hsl(var(--chkbg)) 57%);
                    }

                    .checkbox:disabled {
                        cursor: not-allowed;
                        border-color: transparent;
                        --tw-bg-opacity: 1;
                        background-color: hsl(var(--bc) / var(--tw-bg-opacity));
                        opacity: 0.2;
                    }

                    @-webkit-keyframes checkmark {
                        0% {
                            background-position-y: 5px;
                        }

                        50% {
                            background-position-y: -2px;
                        }

                        100% {
                            background-position-y: 0;
                        }
                    }

                    @keyframes checkmark {
                        0% {
                            background-position-y: 5px;
                        }

                        50% {
                            background-position-y: -2px;
                        }

                        100% {
                            background-position-y: 0;}}body[dir="rtl"] .checkbox {
                                --chkbg: var(--bc);

                                --chkfg: var(--b1);}body[dir="rtl"] .checkbox:checked,
                                body[dir="rtl"] .checkbox[checked="true"] {
                                    background-image: linear-gradient(45deg, transparent 65%, hsl(var(--chkbg)) 65.99%), linear-gradient(-45deg, transparent 75%, hsl(var(--chkbg)) 75.99%), linear-gradient(45deg, hsl(var(--chkbg)) 40%, transparent 40.99%), linear-gradient(-45deg, hsl(var(--chkbg)) 30%, hsl(var(--chkfg)) 30.99%, hsl(var(--chkfg)) 40%, transparent 40.99%), linear-gradient(45deg, hsl(var(--chkfg)) 50%, hsl(var(--chkbg)) 50.99%);
                                }

                                .divider:before {
                                    background-color: hsl(var(--bc) / var(--tw-bg-opacity));
                                    --tw-bg-opacity: 0.1;
                                }

                                .divider:after {
                                    background-color: hsl(var(--bc) / var(--tw-bg-opacity));
                                    --tw-bg-opacity: 0.1;
                                }

                                .divider:not(:empty) {
                                    gap: 1rem;
                                }

                                .drawer.drawer-end .drawer-toggle:checked~.drawer-content {
                                    --tw-translate-x: -0.5rem;
                                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                                }

                                .drawer-toggle:checked~.drawer-content {
                                    --tw-translate-x: 0.5rem;
                                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                                }

                                .drawer-toggle:focus-visible~.drawer-content .drawer-button {
                                    outline: 2px solid hsl(var(--nf));
                                    outline-offset: 2px;
                                }

                                .drawer-toggle:focus-visible~.drawer-content .drawer-button.btn-primary {
                                    outline: 2px solid hsl(var(--p));
                                }

                                .drawer-toggle:focus-visible~.drawer-content .drawer-button.btn-secondary {
                                    outline: 2px solid hsl(var(--s));
                                }

                                .drawer-toggle:focus-visible~.drawer-content .drawer-button.btn-accent {
                                    outline: 2px solid hsl(var(--a));
                                }

                                .drawer-toggle:focus-visible~.drawer-content .drawer-button.btn-info {
                                    outline: 2px solid hsl(var(--in));
                                }

                                .drawer-toggle:focus-visible~.drawer-content .drawer-button.btn-success {
                                    outline: 2px solid hsl(var(--su));
                                }

                                .drawer-toggle:focus-visible~.drawer-content .drawer-button.btn-warning {
                                    outline: 2px solid hsl(var(--wa));
                                }

                                .drawer-toggle:focus-visible~.drawer-content .drawer-button.btn-error {
                                    outline: 2px solid hsl(var(--er));
                                }

                                .drawer-toggle:focus-visible~.drawer-content .drawer-button.glass {
                                    outline: 2px solid currentColor;
                                }

                                .drawer-toggle:focus-visible~.drawer-content .drawer-button.btn-ghost {
                                    outline: 2px solid currentColor;
                                }

                                .drawer-toggle:focus-visible~.drawer-content .drawer-button.btn-link {
                                    outline: 2px solid currentColor;
                                }

                                .label a:hover {
                                    --tw-text-opacity: 1;
                                    color: hsl(var(--bc) / var(--tw-text-opacity));
                                }

                                .input-bordered {
                                    --tw-border-opacity: 0.2;
                                }

                                .input:focus {
                                    outline: 2px solid hsla(var(--bc) / 0.2);
                                    outline-offset: 2px;
                                }

                                .input-disabled,
                                .input[disabled] {
                                    cursor: not-allowed;
                                    --tw-border-opacity: 1;
                                    border-color: hsl(var(--b2, var(--b1)) / var(--tw-border-opacity));
                                    --tw-bg-opacity: 1;
                                    background-color: hsl(var(--b2, var(--b1)) / var(--tw-bg-opacity));
                                    --tw-text-opacity: 0.2;
                                }

                                .input-disabled::-moz-placeholder,
                                .input[disabled]::-moz-placeholder {
                                    color: hsl(var(--bc) / var(--tw-placeholder-opacity));
                                    --tw-placeholder-opacity: 0.2;
                                }

                                .input-disabled:-ms-input-placeholder,
                                .input[disabled]:-ms-input-placeholder {
                                    color: hsl(var(--bc) / var(--tw-placeholder-opacity));
                                    --tw-placeholder-opacity: 0.2;
                                }

                                .input-disabled::placeholder,
                                .input[disabled]::placeholder {
                                    color: hsl(var(--bc) / var(--tw-placeholder-opacity));
                                    --tw-placeholder-opacity: 0.2;
                                }

                                .link:focus {
                                    outline: 2px solid transparent;
                                    outline-offset: 2px;
                                }

                                .link:focus-visible {
                                    outline: 2px solid currentColor;
                                    outline-offset: 2px;
                                }

                                .mask-squircle {
                                    -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCiAgPHBhdGggZD0iTSAxMDAgMCBDIDIwIDAgMCAyMCAwIDEwMCBDIDAgMTgwIDIwIDIwMCAxMDAgMjAwIEMgMTgwIDIwMCAyMDAgMTgwIDIwMCAxMDAgQyAyMDAgMjAgMTgwIDAgMTAwIDAgWiIvPgoKPC9zdmc+);
                                    mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCiAgPHBhdGggZD0iTSAxMDAgMCBDIDIwIDAgMCAyMCAwIDEwMCBDIDAgMTgwIDIwIDIwMCAxMDAgMjAwIEMgMTgwIDIwMCAyMDAgMTgwIDIwMCAxMDAgQyAyMDAgMjAgMTgwIDAgMTAwIDAgWiIvPgoKPC9zdmc+);
                                }

                                .menu.horizontal li.bordered>a,
                                .menu.horizontal li.bordered>button,
                                .menu.horizontal li.bordered>span {
                                    border-left-width: 0px;
                                    border-bottom-width: 4px;
                                    --tw-border-opacity: 1;

                                    border-color: hsl(var(--p) / var(--tw-border-opacity));}.menu[class*=" p-"] li > *, .menu[class^="p-"] li > * {
                                            border-radius: var(--rounded-btn, 0.5rem);
                                        }

                                        .menu :where(li.bordered > *) {
                                            border-left-width: 4px; --tw-border-opacity: 1; border-color: hsl(var(--p) / var(--tw-border-opacity));
                                        }

                                        .menu :where(li) > :where(*:not(ul)) {
                                            gap: 0.75rem; padding-left: 1rem; padding-right: 1rem; padding-top: 0.75rem; padding-bottom: 0.75rem; color: currentColor;
                                        }

                                        .menu :where(li:not(.menu-title):not(:empty)) > :where(*:not(ul):focus), .menu :where(li:not(.menu-title):not(:empty)) > :where(*:not(ul):hover) {
                                            background-color: hsl(var(--bc) / var(--tw-bg-opacity)); --tw-bg-opacity: 0.1;
                                        }

                                        .menu :where(li:not(.menu-title):not(:empty)) > :where(:not(ul).active), .menu :where(li:not(.menu-title):not(:empty)) > :where(*:not(ul):active) {
                                            --tw-bg-opacity: 1; background-color: hsl(var(--p) / var(--tw-bg-opacity)); --tw-text-opacity: 1; color: hsl(var(--pc) / var(--tw-text-opacity));
                                        }

                                        .menu :where(li:empty) {
                                            margin-left: 1rem; margin-right: 1rem; margin-top: 0.5rem; margin-bottom: 0.5rem; height: 1px; background-color: hsl(var(--bc) / var(--tw-bg-opacity)); --tw-bg-opacity: 0.1;
                                        }

                                        .menu li.disabled > * {
                                            -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; color: hsl(var(--bc) / var(--tw-text-opacity)); --tw-text-opacity: 0.2;
                                        }

                                        .menu li.disabled > *:hover {
                                            background-color: transparent;
                                        }

                                        .menu li.hover-bordered a {
                                            border-left-width: 4px; border-color: transparent;
                                        }

                                        .menu li.hover-bordered a:hover {
                                            --tw-border-opacity: 1; border-color: hsl(var(--p) / var(--tw-border-opacity));
                                        }

                                        .menu.compact li > a, .menu.compact li > span {
                                            padding-top: 0.5rem; padding-bottom: 0.5rem; font-size: 0.875rem; line-height: 1.25rem;
                                        }

                                        .menu .menu-title > * {
                                            padding-top: 0.25rem; padding-bottom: 0.25rem; font-size: 0.75rem; line-height: 1rem; font-weight: 700; color: hsl(var(--bc) / var(--tw-text-opacity)); --tw-text-opacity: 0.4;
                                        }

                                        .menu :where(li:not(.disabled)) > :where(*:not(ul)) {
                                            outline: 2px solid transparent; outline-offset: 2px; transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter; transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter; transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter; transition-duration: 200ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                                        }

                                        .menu > :where(li:first-child) {
                                            border-top-left-radius: inherit; border-top-right-radius: inherit; border-bottom-right-radius: unset; border-bottom-left-radius: unset;
                                        }

                                        .menu > :where(li:first-child) > :where(:not(ul)) {
                                            border-top-left-radius: inherit; border-top-right-radius: inherit; border-bottom-right-radius: unset; border-bottom-left-radius: unset;
                                        }

                                        .menu > :where(li:last-child) {
                                            border-top-left-radius: unset; border-top-right-radius: unset; border-bottom-right-radius: inherit; border-bottom-left-radius: inherit;
                                        }

                                        .menu > :where(li:last-child) > :where(:not(ul)) {
                                            border-top-left-radius: unset; border-top-right-radius: unset; border-bottom-right-radius: inherit; border-bottom-left-radius: inherit;
                                        }

                                        .menu > :where(li) > :where(ul) :where(li) {
                                            width: 100%; white-space: nowrap;
                                        }

                                        .menu > :where(li) > :where(ul) :where(li) :where(ul) {
                                            padding-left: 1rem;
                                        }

                                        .menu > :where(li) > :where(ul) :where(li) :where(:not(ul)) {
                                            width: 100%; white-space: nowrap;
                                        }

                                        .menu > :where(li) > :where(ul) > :where(li:first-child) {
                                            border-top-left-radius: inherit; border-top-right-radius: inherit; border-bottom-right-radius: unset; border-bottom-left-radius: unset;
                                        }

                                        .menu > :where(li) > :where(ul) > :where(li:first-child) > :where(:not(ul)) {
                                            border-top-left-radius: inherit; border-top-right-radius: inherit; border-bottom-right-radius: unset; border-bottom-left-radius: unset;
                                        }

                                        .menu > :where(li) > :where(ul) > :where(li:last-child) {
                                            border-top-left-radius: unset; border-top-right-radius: unset; border-bottom-right-radius: inherit; border-bottom-left-radius: inherit;
                                        }

                                        .menu > :where(li) > :where(ul) > :where(li:last-child) > :where(:not(ul)) {
                                            border-top-left-radius: unset; border-top-right-radius: unset; border-bottom-right-radius: inherit; border-bottom-left-radius: inherit;
                                        }

                                        @-webkit-keyframes progress-loading {
                                            50% {
                                                left: 107%;
                                            }
                                        }

                                        @keyframes progress-loading {
                                            50% {
                                                left: 107%;
                                            }
                                        }

                                        @-webkit-keyframes radiomark {
                                            0% {
                                                box-shadow: 0 0 0 12px hsl(var(--b1)) inset, 0 0 0 12px hsl(var(--b1)) inset;
                                            }

                                            50% {
                                                box-shadow: 0 0 0 3px hsl(var(--b1)) inset, 0 0 0 3px hsl(var(--b1)) inset;
                                            }

                                            100% {
                                                box-shadow: 0 0 0 4px hsl(var(--b1)) inset, 0 0 0 4px hsl(var(--b1)) inset;
                                            }
                                        }

                                        @keyframes radiomark {
                                            0% {
                                                box-shadow: 0 0 0 12px hsl(var(--b1)) inset, 0 0 0 12px hsl(var(--b1)) inset;
                                            }

                                            50% {
                                                box-shadow: 0 0 0 3px hsl(var(--b1)) inset, 0 0 0 3px hsl(var(--b1)) inset;
                                            }

                                            100% {
                                                box-shadow: 0 0 0 4px hsl(var(--b1)) inset, 0 0 0 4px hsl(var(--b1)) inset;
                                            }
                                        }

                                        @-webkit-keyframes rating-pop {
                                            0% {
                                                transform: translateY(-0.125em);
                                            }

                                            40% {
                                                transform: translateY(-0.125em);
                                            }

                                            100% {
                                                transform: translateY(0);
                                            }
                                        }

                                        @keyframes rating-pop {
                                            0% {
                                                transform: translateY(-0.125em);
                                            }

                                            40% {
                                                transform: translateY(-0.125em);
                                            }

                                            100% {
                                                transform: translateY(0);
                                            }
                                        }

                                        .select-bordered {
                                            --tw-border-opacity: 0.2;
                                        }

                                        .select:focus {
                                            outline: 2px solid hsla(var(--bc) / 0.2); outline-offset: 2px;
                                        }

                                        .select-disabled::-moz-placeholder, .select[disabled]::-moz-placeholder {
                                            color: hsl(var(--bc) / var(--tw-placeholder-opacity)); --tw-placeholder-opacity: 0.2;
                                        }

                                        .select-disabled:-ms-input-placeholder, .select[disabled]:-ms-input-placeholder {
                                            color: hsl(var(--bc) / var(--tw-placeholder-opacity)); --tw-placeholder-opacity: 0.2;
                                        }

                                        .select-disabled::placeholder, .select[disabled]::placeholder {
                                            color: hsl(var(--bc) / var(--tw-placeholder-opacity)); --tw-placeholder-opacity: 0.2;
                                        }

                                        .select-multiple, .select[multiple], .select[size].select:not([size="1"]) {
                                        background-image: none;
                                        padding-right: 1rem;
                                    }

                                    .table :where(th, td) {
                                        white-space: nowrap;
                                        padding: 1rem;
                                        vertical-align: middle;
                                    }

                                    .table tr.active th,
                                    .table tr.active td,
                                    .table tr.active:nth-child(even) th,
                                    .table tr.active:nth-child(even) td {
                                        --tw-bg-opacity: 1;
                                        background-color: hsl(var(--b3, var(--b2)) / var(--tw-bg-opacity));
                                    }

                                    .table tr.hover:hover th,
                                    .table tr.hover:hover td,
                                    .table tr.hover:nth-child(even):hover th,
                                    .table tr.hover:nth-child(even):hover td {
                                        --tw-bg-opacity: 1;
                                        background-color: hsl(var(--b3, var(--b2)) / var(--tw-bg-opacity));
                                    }

                                    .table:where(:not(.table-zebra)) :where(thead, tbody, tfoot) :where(tr:not(:last-child) :where(th, td)) {
                                        border-bottom-width: 1px;
                                        --tw-border-opacity: 1;
                                        border-color: hsl(var(--b2, var(--b1)) / var(--tw-border-opacity));
                                    }

                                    .table :where(thead, tfoot) :where(th, td) {
                                        --tw-bg-opacity: 1;
                                        background-color: hsl(var(--b2, var(--b1)) / var(--tw-bg-opacity));
                                        font-size: 0.75rem;
                                        line-height: 1rem;
                                        font-weight: 700;
                                        text-transform: uppercase;
                                    }

                                    .table :where(:first-child) :where(:first-child) :where(th, td):first-child {
                                        border-top-left-radius: 0.5rem;
                                    }

                                    .table :where(:first-child) :where(:first-child) :where(th, td):last-child {
                                        border-top-right-radius: 0.5rem;
                                    }

                                    .table :where(:last-child) :where(:last-child) :where(th, td):first-child {
                                        border-bottom-left-radius: 0.5rem;
                                    }

                                    .table :where(:last-child) :where(:last-child) :where(th, td):last-child {
                                        border-bottom-right-radius: 0.5rem;
                                    }

                                    .table :where(tbody th, tbody td) {
                                        --tw-bg-opacity: 1;
                                        background-color: hsl(var(--b1) / var(--tw-bg-opacity));
                                    }

                                    :root .prose {
                                        --tw-prose-body: hsla(var(--bc)/.8);
                                        --tw-prose-headings: hsl(var(--bc));
                                        --tw-prose-lead: hsl(var(--bc));
                                        --tw-prose-links: hsl(var(--bc));
                                        --tw-prose-bold: hsl(var(--bc));
                                        --tw-prose-counters: hsl(var(--bc));
                                        --tw-prose-bullets: hsla(var(--bc)/.5);
                                        --tw-prose-hr: hsla(var(--bc)/.2);
                                        --tw-prose-quotes: hsl(var(--bc));
                                        --tw-prose-quote-borders: hsla(var(--bc)/.2);
                                        --tw-prose-captions: hsla(var(--bc)/.5);
                                        --tw-prose-code: hsl(var(--bc));
                                        --tw-prose-pre-code: hsl(var(--nc));
                                        --tw-prose-pre-bg: hsl(var(--n));
                                        --tw-prose-th-borders: hsla(var(--bc)/.5);
                                        --tw-prose-td-borders: hsla(var(--bc)/.2);
                                    }

                                    .prose :where(code):not(:where([class~="not-prose"] *)) {
                                        padding: 2px 8px;
                                        border-radius: var(--rounded-badge);
                                    }

                                    .prose code:after,
                                    .prose code:before {
                                        content: none;
                                    }

                                    .prose pre code {
                                        border-radius: none;
                                        padding: 0;
                                    }

                                    .prose :where(tbody tr, thead):not(:where([class~="not-prose"] *)) {
                                        border-bottom-color: hsl(var(--bc) / 20%);
                                    }

                                    .rounded-box {
                                        border-radius: var(--rounded-box, 1rem);
                                    }

                                    .glass,
                                    .glass:hover,
                                    .glass.btn-active {
                                        border: none;
                                        -webkit-backdrop-filter: blur(var(--glass-blur, 40px));
                                        backdrop-filter: blur(var(--glass-blur, 40px));
                                        background-color: transparent;
                                        background-image: linear-gradient(135deg, rgb(255 255 255 / var(--glass-opacity, 30%)) 0%, rgb(0 0 0 / 0%) 100%), linear-gradient(var(--glass-reflex-degree, 100deg), rgb(255 255 255 / var(--glass-reflex-opacity, 10%)) 25%, rgb(0 0 0 / 0%) 25%);
                                        box-shadow: 0 0 0 1px rgb(255 255 255 / var(--glass-border-opacity, 10%)) inset, 0 0 0 2px rgb(0 0 0 / 5%);
                                        text-shadow: 0 1px rgb(0 0 0 / var(--glass-text-shadow-opacity, 5%));
                                    }

                                    .badge-lg {
                                        height: 1.5rem;
                                        font-size: 1rem;
                                        line-height: 1.5rem;
                                        padding-left: 0.688rem;
                                        padding-right: 0.688rem;
                                    }

                                    .btn-xs {
                                        height: 1.5rem;
                                        padding-left: 0.5rem;
                                        padding-right: 0.5rem;
                                        min-height: 1.5rem;
                                        font-size: 0.75rem;
                                    }

                                    .btn-sm {
                                        height: 2rem;
                                        padding-left: 0.75rem;
                                        padding-right: 0.75rem;
                                        min-height: 2rem;
                                        font-size: 0.875rem;
                                    }

                                    .btn-square:where(.btn-xs) {
                                        height: 1.5rem;
                                        width: 1.5rem;
                                        padding: 0px;
                                    }

                                    .btn-square:where(.btn-sm) {
                                        height: 2rem;
                                        width: 2rem;
                                        padding: 0px;
                                    }

                                    .btn-square:where(.btn-md) {
                                        height: 3rem;
                                        width: 3rem;
                                        padding: 0px;
                                    }

                                    .btn-square:where(.btn-lg) {
                                        height: 4rem;
                                        width: 4rem;
                                        padding: 0px;
                                    }

                                    .btn-circle:where(.btn-xs) {
                                        height: 1.5rem;
                                        width: 1.5rem;
                                        border-radius: 9999px;
                                        padding: 0px;
                                    }

                                    .btn-circle:where(.btn-sm) {
                                        height: 2rem;
                                        width: 2rem;
                                        border-radius: 9999px;
                                        padding: 0px;
                                    }

                                    .card-side {
                                        align-items: stretch;
                                        flex-direction: row;
                                    }

                                    .card-side figure>* {
                                        max-width: unset;
                                    }

                                    :where(.card-side figure > *) {
                                        width: 100%;
                                        height: 100%;
                                        -o-object-fit: cover;
                                        object-fit: cover;
                                    }

                                    .avatar.online:before {
                                        content: "";
                                        position: absolute;
                                        z-index: 10;
                                        display: block;
                                        border-radius: 9999px;
                                        --tw-bg-opacity: 1;
                                        background-color: hsl(var(--su) / var(--tw-bg-opacity));
                                        width: 15%;
                                        height: 15%;
                                        top: 7%;
                                        right: 7%;
                                        box-shadow: 0 0 0 2px hsl(var(--b1));
                                    }

                                    .avatar.offline:before {
                                        content: "";
                                        position: absolute;
                                        z-index: 10;
                                        display: block;
                                        border-radius: 9999px;
                                        --tw-bg-opacity: 1;
                                        background-color: hsl(var(--b3, var(--b2)) / var(--tw-bg-opacity));
                                        width: 15%;
                                        height: 15%;
                                        top: 7%;
                                        right: 7%;
                                        box-shadow: 0 0 0 2px hsl(var(--b1));
                                    }

                                    .badge-secondary {
                                        --tw-border-opacity: 1;
                                        border-color: hsl(var(--s) / var(--tw-border-opacity));
                                        --tw-bg-opacity: 1;
                                        background-color: hsl(var(--s) / var(--tw-bg-opacity));
                                        --tw-text-opacity: 1;
                                        color: hsl(var(--sc) / var(--tw-text-opacity));
                                    }

                                    .badge-outline.badge-secondary {
                                        --tw-text-opacity: 1;
                                        color: hsl(var(--s) / var(--tw-text-opacity));
                                    }

                                    .card-compact .card-body {
                                        padding: 1rem;
                                        font-size: 0.875rem;
                                        line-height: 1.25rem;
                                    }

                                    .card-compact .card-title {
                                        margin-bottom: 0.25rem;
                                    }

                                    .card-normal .card-body {
                                        padding: var(--padding-card, 2rem);
                                        font-size: 1rem;
                                        line-height: 1.5rem;
                                    }

                                    .card-normal .card-title {
                                        margin-bottom: 0.75rem;
                                    }

                                    .table-normal :where(th, td) {
                                        padding: 1rem;
                                        font-size: 1rem;
                                        line-height: 1.5rem;
                                    }

                                    .prose {
                                        color: var(--tw-prose-body);
                                        max-width: 65ch;
                                    }

                                    .prose :where([class~="lead"]):not(:where([class~="not-prose"] *)) {
                                        color: var(--tw-prose-lead);
                                        font-size: 1.25em;
                                        line-height: 1.6;
                                        margin-top: 1.2em;
                                        margin-bottom: 1.2em;
                                    }

                                    .prose :where(a):not(:where([class~="not-prose"] *)) {
                                        color: var(--tw-prose-links);
                                        text-decoration: underline;
                                        font-weight: 500;
                                    }

                                    .prose :where(strong):not(:where([class~="not-prose"] *)) {
                                        color: var(--tw-prose-bold);
                                        font-weight: 600;
                                    }

                                    .prose :where(ol):not(:where([class~="not-prose"] *)) {
                                        list-style-type: decimal;
                                        padding-left: 1.625em;
                                    }

                                    .prose :where(ol[type="A"]):not(:where([class~="not-prose"] *)) {
                                        list-style-type: upper-alpha;
                                    }

                                    .prose :where(ol[type="a"]):not(:where([class~="not-prose"] *)) {
                                        list-style-type: lower-alpha;
                                    }

                                    .prose :where(ol[type="A" s]):not(:where([class~="not-prose"] *)) {
                                        list-style-type: upper-alpha;
                                    }

                                    .prose :where(ol[type="a" s]):not(:where([class~="not-prose"] *)) {
                                        list-style-type: lower-alpha;
                                    }

                                    .prose :where(ol[type="I"]):not(:where([class~="not-prose"] *)) {
                                        list-style-type: upper-roman;
                                    }

                                    .prose :where(ol[type="i"]):not(:where([class~="not-prose"] *)) {
                                        list-style-type: lower-roman;
                                    }

                                    .prose :where(ol[type="I" s]):not(:where([class~="not-prose"] *)) {
                                        list-style-type: upper-roman;
                                    }

                                    .prose :where(ol[type="i" s]):not(:where([class~="not-prose"] *)) {
                                        list-style-type: lower-roman;
                                    }

                                    .prose :where(ol[type="1"]):not(:where([class~="not-prose"] *)) {
                                        list-style-type: decimal;
                                    }

                                    .prose :where(ul):not(:where([class~="not-prose"] *)) {
                                        list-style-type: disc;
                                        padding-left: 1.625em;
                                    }

                                    .prose :where(ol > li):not(:where([class~="not-prose"] *))::marker {
                                        font-weight: 400;
                                        color: var(--tw-prose-counters);
                                    }

                                    .prose :where(ul > li):not(:where([class~="not-prose"] *))::marker {
                                        color: var(--tw-prose-bullets);
                                    }

                                    .prose :where(hr):not(:where([class~="not-prose"] *)) {
                                        border-color: var(--tw-prose-hr);
                                        border-top-width: 1px;
                                        margin-top: 3em;
                                        margin-bottom: 3em;
                                    }

                                    .prose :where(blockquote):not(:where([class~="not-prose"] *)) {
                                        font-weight: 500;
                                        font-style: italic;
                                        color: var(--tw-prose-quotes);
                                        border-left-width: 0.25rem;
                                        border-left-color: var(--tw-prose-quote-borders);
                                        quotes: "\201C" "\201D" "\2018" "\2019";
                                        margin-top: 1.6em;
                                        margin-bottom: 1.6em;
                                        padding-left: 1em;
                                    }

                                    .prose :where(blockquote p:first-of-type):not(:where([class~="not-prose"] *))::before {
                                        content: open-quote;
                                    }

                                    .prose :where(blockquote p:last-of-type):not(:where([class~="not-prose"] *))::after {
                                        content: close-quote;
                                    }

                                    .prose :where(h1):not(:where([class~="not-prose"] *)) {
                                        color: var(--tw-prose-headings);
                                        font-weight: 800;
                                        font-size: 2.25em;
                                        margin-top: 0;
                                        margin-bottom: 0.8888889em;
                                        line-height: 1.1111111;
                                    }

                                    .prose :where(h1 strong):not(:where([class~="not-prose"] *)) {
                                        font-weight: 900;
                                    }

                                    .prose :where(h2):not(:where([class~="not-prose"] *)) {
                                        color: var(--tw-prose-headings);
                                        font-weight: 700;
                                        font-size: 1.5em;
                                        margin-top: 2em;
                                        margin-bottom: 1em;
                                        line-height: 1.3333333;
                                    }

                                    .prose :where(h2 strong):not(:where([class~="not-prose"] *)) {
                                        font-weight: 800;
                                    }

                                    .prose :where(h3):not(:where([class~="not-prose"] *)) {
                                        color: var(--tw-prose-headings);
                                        font-weight: 600;
                                        font-size: 1.25em;
                                        margin-top: 1.6em;
                                        margin-bottom: 0.6em;
                                        line-height: 1.6;
                                    }

                                    .prose :where(h3 strong):not(:where([class~="not-prose"] *)) {
                                        font-weight: 700;
                                    }

                                    .prose :where(h4):not(:where([class~="not-prose"] *)) {
                                        color: var(--tw-prose-headings);
                                        font-weight: 600;
                                        margin-top: 1.5em;
                                        margin-bottom: 0.5em;
                                        line-height: 1.5;
                                    }

                                    .prose :where(h4 strong):not(:where([class~="not-prose"] *)) {
                                        font-weight: 700;
                                    }

                                    .prose :where(figure > *):not(:where([class~="not-prose"] *)) {
                                        margin-top: 0;
                                        margin-bottom: 0;
                                    }

                                    .prose :where(figcaption):not(:where([class~="not-prose"] *)) {
                                        color: var(--tw-prose-captions);
                                        font-size: 0.875em;
                                        line-height: 1.4285714;
                                        margin-top: 0.8571429em;
                                    }

                                    .prose :where(code):not(:where([class~="not-prose"] *)) {
                                        color: var(--tw-prose-code);
                                        font-weight: 600;
                                        font-size: 0.875em;
                                    }

                                    .prose :where(code):not(:where([class~="not-prose"] *))::before {
                                        content: "`";
                                    }

                                    .prose :where(code):not(:where([class~="not-prose"] *))::after {
                                        content: "`";
                                    }

                                    .prose :where(a code):not(:where([class~="not-prose"] *)) {
                                        color: var(--tw-prose-links);
                                    }

                                    .prose :where(pre):not(:where([class~="not-prose"] *)) {
                                        color: var(--tw-prose-pre-code);
                                        background-color: var(--tw-prose-pre-bg);
                                        overflow-x: auto;
                                        font-weight: 400;
                                        font-size: 0.875em;
                                        line-height: 1.7142857;
                                        margin-top: 1.7142857em;
                                        margin-bottom: 1.7142857em;
                                        border-radius: 0.375rem;
                                        padding-top: 0.8571429em;
                                        padding-right: 1.1428571em;
                                        padding-bottom: 0.8571429em;
                                        padding-left: 1.1428571em;
                                    }

                                    .prose :where(pre code):not(:where([class~="not-prose"] *)) {
                                        background-color: transparent;
                                        border-width: 0;
                                        border-radius: 0;
                                        padding: 0;
                                        font-weight: inherit;
                                        color: inherit;
                                        font-size: inherit;
                                        font-family: inherit;
                                        line-height: inherit;
                                    }

                                    .prose :where(pre code):not(:where([class~="not-prose"] *))::before {
                                        content: none;
                                    }

                                    .prose :where(pre code):not(:where([class~="not-prose"] *))::after {
                                        content: none;
                                    }

                                    .prose :where(table):not(:where([class~="not-prose"] *)) {
                                        width: 100%;
                                        table-layout: auto;
                                        text-align: left;
                                        margin-top: 2em;
                                        margin-bottom: 2em;
                                        font-size: 0.875em;
                                        line-height: 1.7142857;
                                    }

                                    .prose :where(thead):not(:where([class~="not-prose"] *)) {
                                        border-bottom-width: 1px;
                                        border-bottom-color: var(--tw-prose-th-borders);
                                    }

                                    .prose :where(thead th):not(:where([class~="not-prose"] *)) {
                                        color: var(--tw-prose-headings);
                                        font-weight: 600;
                                        vertical-align: bottom;
                                        padding-right: 0.5714286em;
                                        padding-bottom: 0.5714286em;
                                        padding-left: 0.5714286em;
                                    }

                                    .prose :where(tbody tr):not(:where([class~="not-prose"] *)) {
                                        border-bottom-width: 1px;
                                        border-bottom-color: var(--tw-prose-td-borders);
                                    }

                                    .prose :where(tbody tr:last-child):not(:where([class~="not-prose"] *)) {
                                        border-bottom-width: 0;
                                    }

                                    .prose :where(tbody td):not(:where([class~="not-prose"] *)) {
                                        vertical-align: baseline;
                                        padding-top: 0.5714286em;
                                        padding-right: 0.5714286em;
                                        padding-bottom: 0.5714286em;
                                        padding-left: 0.5714286em;
                                    }

                                    .prose {
                                        --tw-prose-body: #374151;
                                        --tw-prose-headings: #111827;
                                        --tw-prose-lead: #4b5563;
                                        --tw-prose-links: #111827;
                                        --tw-prose-bold: #111827;
                                        --tw-prose-counters: #6b7280;
                                        --tw-prose-bullets: #d1d5db;
                                        --tw-prose-hr: #e5e7eb;
                                        --tw-prose-quotes: #111827;
                                        --tw-prose-quote-borders: #e5e7eb;
                                        --tw-prose-captions: #6b7280;
                                        --tw-prose-code: #111827;
                                        --tw-prose-pre-code: #e5e7eb;
                                        --tw-prose-pre-bg: #1f2937;
                                        --tw-prose-th-borders: #d1d5db;
                                        --tw-prose-td-borders: #e5e7eb;
                                        --tw-prose-invert-body: #d1d5db;
                                        --tw-prose-invert-headings: #fff;
                                        --tw-prose-invert-lead: #9ca3af;
                                        --tw-prose-invert-links: #fff;
                                        --tw-prose-invert-bold: #fff;
                                        --tw-prose-invert-counters: #9ca3af;
                                        --tw-prose-invert-bullets: #4b5563;
                                        --tw-prose-invert-hr: #374151;
                                        --tw-prose-invert-quotes: #f3f4f6;
                                        --tw-prose-invert-quote-borders: #374151;
                                        --tw-prose-invert-captions: #9ca3af;
                                        --tw-prose-invert-code: #fff;
                                        --tw-prose-invert-pre-code: #d1d5db;
                                        --tw-prose-invert-pre-bg: rgb(0 0 0 / 50%);
                                        --tw-prose-invert-th-borders: #4b5563;
                                        --tw-prose-invert-td-borders: #374151;
                                        font-size: 1rem;
                                        line-height: 1.75;
                                    }

                                    .prose :where(p):not(:where([class~="not-prose"] *)) {
                                        margin-top: 1.25em;
                                        margin-bottom: 1.25em;
                                    }

                                    .prose :where(img):not(:where([class~="not-prose"] *)) {
                                        margin-top: 2em;
                                        margin-bottom: 2em;
                                    }

                                    .prose :where(video):not(:where([class~="not-prose"] *)) {
                                        margin-top: 2em;
                                        margin-bottom: 2em;
                                    }

                                    .prose :where(figure):not(:where([class~="not-prose"] *)) {
                                        margin-top: 2em;
                                        margin-bottom: 2em;
                                    }

                                    .prose :where(h2 code):not(:where([class~="not-prose"] *)) {
                                        font-size: 0.875em;
                                    }

                                    .prose :where(h3 code):not(:where([class~="not-prose"] *)) {
                                        font-size: 0.9em;
                                    }

                                    .prose :where(li):not(:where([class~="not-prose"] *)) {
                                        margin-top: 0.5em;
                                        margin-bottom: 0.5em;
                                    }

                                    .prose :where(ol > li):not(:where([class~="not-prose"] *)) {
                                        padding-left: 0.375em;
                                    }

                                    .prose :where(ul > li):not(:where([class~="not-prose"] *)) {
                                        padding-left: 0.375em;
                                    }

                                    .prose> :where(ul > li p):not(:where([class~="not-prose"] *)) {
                                        margin-top: 0.75em;
                                        margin-bottom: 0.75em;
                                    }

                                    .prose> :where(ul > li > *:first-child):not(:where([class~="not-prose"] *)) {
                                        margin-top: 1.25em;
                                    }

                                    .prose> :where(ul > li > *:last-child):not(:where([class~="not-prose"] *)) {
                                        margin-bottom: 1.25em;
                                    }

                                    .prose> :where(ol > li > *:first-child):not(:where([class~="not-prose"] *)) {
                                        margin-top: 1.25em;
                                    }

                                    .prose> :where(ol > li > *:last-child):not(:where([class~="not-prose"] *)) {
                                        margin-bottom: 1.25em;
                                    }

                                    .prose :where(ul ul, ul ol, ol ul, ol ol):not(:where([class~="not-prose"] *)) {
                                        margin-top: 0.75em;
                                        margin-bottom: 0.75em;
                                    }

                                    .prose :where(hr + *):not(:where([class~="not-prose"] *)) {
                                        margin-top: 0;
                                    }

                                    .prose :where(h2 + *):not(:where([class~="not-prose"] *)) {
                                        margin-top: 0;
                                    }

                                    .prose :where(h3 + *):not(:where([class~="not-prose"] *)) {
                                        margin-top: 0;
                                    }

                                    .prose :where(h4 + *):not(:where([class~="not-prose"] *)) {
                                        margin-top: 0;
                                    }

                                    .prose :where(thead th:first-child):not(:where([class~="not-prose"] *)) {
                                        padding-left: 0;
                                    }

                                    .prose :where(thead th:last-child):not(:where([class~="not-prose"] *)) {
                                        padding-right: 0;
                                    }

                                    .prose :where(tbody td:first-child):not(:where([class~="not-prose"] *)) {
                                        padding-left: 0;
                                    }

                                    .prose :where(tbody td:last-child):not(:where([class~="not-prose"] *)) {
                                        padding-right: 0;
                                    }

                                    .prose> :where(:first-child):not(:where([class~="not-prose"] *)) {
                                        margin-top: 0;
                                    }

                                    .prose> :where(:last-child):not(:where([class~="not-prose"] *)) {
                                        margin-bottom: 0;
                                    }

                                    .fixed {
                                        position: fixed;
                                    }

                                    .sticky {
                                        position: -webkit-sticky;
                                        position: sticky;
                                    }

                                    .top-0 {
                                        top: 0px;
                                    }

                                    .bottom-\[20\] {
                                        bottom: 20;
                                    }

                                    .bottom-\[10\] {
                                        bottom: 10;
                                    }

                                    .bottom-5 {
                                        bottom: 1.25rem;
                                    }

                                    .bottom-2 {
                                        bottom: 0.5rem;
                                    }

                                    .z-50 {
                                        z-index: 50;
                                    }

                                    .m-6 {
                                        margin: 1.5rem;
                                    }

                                    .mx-auto {
                                        margin-left: auto;
                                        margin-right: auto;
                                    }

                                    .mt-10 {
                                        margin-top: 2.5rem;
                                    }

                                    .inline-block {
                                        display: inline-block;
                                    }

                                    .flex {
                                        display: flex;
                                    }

                                    .table {
                                        display: table;
                                    }

                                    .hidden {
                                        display: none;
                                    }

                                    .h-5 {
                                        height: 1.25rem;
                                    }

                                    .h-4 {
                                        height: 1rem;
                                    }

                                    .h-12 {
                                        height: 3rem;
                                    }

                                    .h-40 {
                                        height: 10rem;
                                    }

                                    .h-screen {
                                        height: 100vh;
                                    }

                                    .h-6 {
                                        height: 1.5rem;
                                    }

                                    .h-8 {
                                        height: 2rem;
                                    }

                                    .w-full {
                                        width: 100%;
                                    }

                                    .w-5 {
                                        width: 1.25rem;
                                    }

                                    .w-4 {
                                        width: 1rem;
                                    }

                                    .w-fit {
                                        width: -webkit-fit-content;
                                        width: -moz-fit-content;
                                        width: fit-content;
                                    }

                                    .w-60 {
                                        width: 15rem;
                                    }

                                    .w-16 {
                                        width: 4rem;
                                    }

                                    .w-12 {
                                        width: 3rem;
                                    }

                                    .w-80 {
                                        width: 20rem;
                                    }

                                    .w-32 {
                                        width: 8rem;
                                    }

                                    .w-6 {
                                        width: 1.5rem;
                                    }

                                    .w-8 {
                                        width: 2rem;
                                    }

                                    .max-w-screen-lg {
                                        max-width: 1024px;
                                    }

                                    .max-w-none {
                                        max-width: none;
                                    }

                                    .max-w-screen-2xl {
                                        max-width: 1536px;
                                    }

                                    .flex-none {
                                        flex: none;
                                    }

                                    .flex-1 {
                                        flex: 1 1 0%;
                                    }

                                    .flex-row {
                                        flex-direction: row;
                                    }

                                    .flex-wrap {
                                        flex-wrap: wrap;
                                    }

                                    .items-center {
                                        align-items: center;
                                    }

                                    .justify-start {
                                        justify-content: flex-start;
                                    }

                                    .justify-center {
                                        justify-content: center;
                                    }

                                    .gap-1 {
                                        gap: 0.25rem;
                                    }

                                    .gap-8 {
                                        gap: 2rem;
                                    }

                                    .space-x-3> :not([hidden])~ :not([hidden]) {
                                        --tw-space-x-reverse: 0;
                                        margin-right: calc(0.75rem * var(--tw-space-x-reverse));
                                        margin-left: calc(0.75rem * calc(1 - var(--tw-space-x-reverse)));
                                    }

                                    .space-y-2> :not([hidden])~ :not([hidden]) {
                                        --tw-space-y-reverse: 0;
                                        margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
                                        margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
                                    }

                                    .space-y-6> :not([hidden])~ :not([hidden]) {
                                        --tw-space-y-reverse: 0;
                                        margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
                                        margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
                                    }

                                    .overflow-hidden {
                                        overflow: hidden;
                                    }

                                    .overflow-x-auto {
                                        overflow-x: auto;
                                    }

                                    .overflow-y-auto {
                                        overflow-y: auto;
                                    }

                                    .overflow-y-scroll {
                                        overflow-y: scroll;
                                    }

                                    .break-words {
                                        overflow-wrap: break-word;
                                    }

                                    .rounded-full {
                                        border-radius: 9999px;
                                    }

                                    .bg-base-100 {
                                        --tw-bg-opacity: 1;
                                        background-color: hsl(var(--b1) / var(--tw-bg-opacity));
                                    }

                                    .bg-base-200 {
                                        --tw-bg-opacity: 1;
                                        background-color: hsl(var(--b2, var(--b1)) / var(--tw-bg-opacity));
                                    }

                                    .fill-current {
                                        fill: currentColor;
                                    }

                                    .stroke-current {
                                        stroke: currentColor;
                                    }

                                    .p-3 {
                                        padding: 0.75rem;
                                    }

                                    .p-2 {
                                        padding: 0.5rem;
                                    }

                                    .py-\[35\] {
                                        padding-top: 35;
                                        padding-bottom: 35;
                                    }

                                    .py-8 {
                                        padding-top: 2rem;
                                        padding-bottom: 2rem;
                                    }

                                    .pl-4 {
                                        padding-left: 1rem;
                                    }

                                    .pt-8 {
                                        padding-top: 2rem;
                                    }

                                    .pt-10 {
                                        padding-top: 2.5rem;
                                    }

                                    .pt-4 {
                                        padding-top: 1rem;
                                    }

                                    .text-right {
                                        text-align: right;
                                    }

                                    .text-xl {
                                        font-size: 1.25rem;
                                        line-height: 1.75rem;
                                    }

                                    .text-3xl {
                                        font-size: 1.875rem;
                                        line-height: 2.25rem;
                                    }

                                    .text-sm {
                                        font-size: 0.875rem;
                                        line-height: 1.25rem;
                                    }

                                    .text-xs {
                                        font-size: 0.75rem;
                                        line-height: 1rem;
                                    }

                                    .text-2xl {
                                        font-size: 1.5rem;
                                        line-height: 2rem;
                                    }

                                    .font-extrabold {
                                        font-weight: 800;
                                    }

                                    .font-bold {
                                        font-weight: 700;
                                    }

                                    .normal-case {
                                        text-transform: none;
                                    }

                                    .text-blue-500 {
                                        --tw-text-opacity: 1;
                                        color: rgb(59 130 246 / var(--tw-text-opacity));
                                    }

                                    .text-black {
                                        --tw-text-opacity: 1;
                                        color: rgb(0 0 0 / var(--tw-text-opacity));
                                    }

                                    .opacity-50 {
                                        opacity: 0.5;
                                    }

                                    .shadow-xl {
                                        --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
                                        --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
                                        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                                    }

                                    @media (min-width: 768px) {
                                        .md\:block {
                                            display: block;
                                        }

                                        .md\:space-y-6> :not([hidden])~ :not([hidden]) {
                                            --tw-space-y-reverse: 0;
                                            margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
                                            margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
                                        }

                                        .md\:py-\[35\] {
                                            padding-top: 35;
                                            padding-bottom: 35;
                                        }

                                        .md\:text-3xl {
                                            font-size: 1.875rem;
                                            line-height: 2.25rem;
                                        }
                                    }

                                    @media (min-width: 1024px) {
                                        .lg\:m-6 {
                                            margin: 1.5rem;
                                        }

                                        .lg\:block {
                                            display: block;
                                        }

                                        .lg\:hidden {
                                            display: none;
                                        }

                                        .lg\:w-\[70vw\] {
                                            width: 70vw;
                                        }

                                        .lg\:w-\[30vw\] {
                                            width: 30vw;
                                        }

                                        .lg\:w-32 {
                                            width: 8rem;
                                        }

                                        .lg\:w-\[65vw\] {
                                            width: 65vw;
                                        }

                                        .lg\:w-\[35vw\] {
                                            width: 35vw;
                                        }

                                        .lg\:w-\[60vw\] {
                                            width: 60vw;
                                        }

                                        .lg\:w-\[40vw\] {
                                            width: 40vw;
                                        }

                                        .lg\:justify-start {
                                            justify-content: flex-start;
                                        }

                                        .lg\:justify-end {
                                            justify-content: flex-end;
                                        }

                                        .lg\:p-4 {
                                            padding: 1rem;
                                        }

                                        .lg\:pt-4 {
                                            padding-top: 1rem;
                                        }
                                    }

                                    @media (min-width: 1280px) {
                                        .xl\:block {
                                            display: block;
                                        }
                                    }
    </style>
</head>

<body>
    <div class="drawer drawer-mobile">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex justify-center lg:justify-start">
            <div class="lg:w-[60vw] max-w-screen-lg lg:pt-4 lg:p-4">
                <div class="navbar bg-base-100 lg:hidden sticky top-0 w-full z-50">
                    <div class="flex-none">
                        <label for="my-drawer-2" class="btn btn-square btn-ghost lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="inline-block w-5 h-5 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </label>
                    </div>
                    <div class="flex-1">
                        <a class="btn btn-ghost normal-case text-xl" href="./">Shiro API</a>
                    </div>
                    <div class="flex-none">
                        <button data-set-theme="winter" class="btn btn-sm btn-ghost btn-square"
                            data-act-class="btn-active">
                            <svg class="inline-block w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <title>ionicons-v5-q</title>
                                <path d="M256,118a22,22,0,0,1-22-22V48a22,22,0,0,1,44,0V96A22,22,0,0,1,256,118Z" />
                                <path d="M256,486a22,22,0,0,1-22-22V416a22,22,0,0,1,44,0v48A22,22,0,0,1,256,486Z" />
                                <path
                                    d="M369.14,164.86a22,22,0,0,1-15.56-37.55l33.94-33.94a22,22,0,0,1,31.11,31.11l-33.94,33.94A21.93,21.93,0,0,1,369.14,164.86Z" />
                                <path
                                    d="M108.92,425.08a22,22,0,0,1-15.55-37.56l33.94-33.94a22,22,0,1,1,31.11,31.11l-33.94,33.94A21.94,21.94,0,0,1,108.92,425.08Z" />
                                <path d="M464,278H416a22,22,0,0,1,0-44h48a22,22,0,0,1,0,44Z" />
                                <path d="M96,278H48a22,22,0,0,1,0-44H96a22,22,0,0,1,0,44Z" />
                                <path
                                    d="M403.08,425.08a21.94,21.94,0,0,1-15.56-6.45l-33.94-33.94a22,22,0,0,1,31.11-31.11l33.94,33.94a22,22,0,0,1-15.55,37.56Z" />
                                <path
                                    d="M142.86,164.86a21.89,21.89,0,0,1-15.55-6.44L93.37,124.48a22,22,0,0,1,31.11-31.11l33.94,33.94a22,22,0,0,1-15.56,37.55Z" />
                                <path d="M256,358A102,102,0,1,1,358,256,102.12,102.12,0,0,1,256,358Z" />
                            </svg>
                        </button>
                        <button data-set-theme="garden" class="btn btn-sm btn-ghost btn-square"
                            data-act-class="btn-active">
                            <svg class="inline-block w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </button>
                        <button data-set-theme="dark" class="btn btn-sm btn-ghost btn-square"
                            data-act-class="btn-active">
                            <svg class="inline-block w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <title>ionicons-v5-j</title>
                                <path
                                    d="M152.62,126.77c0-33,4.85-66.35,17.23-94.77C87.54,67.83,32,151.89,32,247.38,32,375.85,136.15,480,264.62,480c95.49,0,179.55-55.54,215.38-137.85-28.42,12.38-61.8,17.23-94.77,17.23C256.76,359.38,152.62,255.24,152.62,126.77Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex-1 p-3 md:py-[35]">
                    <div class="space-y-2 md:space-y-6">
                        <div class="card bg-base-200 shadow-xl">
                            <figure>
                                <img src="/storage/profile-photos/tensura.jpg" style="width: 900px"
                                    alt="Movie" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Tensei shitara slime datta ken</h2>
                                <div class="justify-start">
                                    <button class="btn btn-xs btn-primary">Manga</button>
                                    <button class="btn btn-xs btn-secondary">Japan</button>
                                </div>
                                <p style="text-align: justify">
                                    Tensei Shitara Slime Datta Ken (Jepang: 転生したらスライムだった件), juga dikenal sebagai Anime Rapat (Jepang: 転スラ, Hepburn: Tensura)[3] atau Slime Isekai,[3] yang diterbitkan di Indonesia dengan judul Regarding Reincarnated to Slime oleh Elex Media Komputindo,[4] atau Bereinkarnasi Malah Menjadi Slime, adalah sebuah seri novel ringan Jepang yang ditulis oleh Fuse.

Novel ini mulai diserialisasikan secara daring antara tahun 2013 dan 2016 di situs web penerbit novel buatan pengguna, Shōsetsuka ni Narō. Hak atas seri ini kemudian menjadi milik Micro Magazine, yang menerbitkan seri novel ringan volume pertama pada tahun 2014. Hingga 30 Oktober 2023, 21 volume ditambah 2 volume ekstra telah diterbitkan.

Novel ringan ini telah dilisensi di Amerika Utara oleh Yen Press, yang menerbitkan volume pertama pada bulan Desember 2017. Seri ini telah mendapatkan sebuah adaptasi manga yang diterbitkan oleh Kodansha, bersama dengan 3 manga sempalan yang masing-masing diterbitkan oleh Micro Megazine dan Kodansha, dan sebuah adaptasi serial anime televisi yang diproduksi oleh Eight Bit yang telah ditayangkan sejak 2 Oktober 2018 hingga 19 Maret 2019.[1] Musim kedua dari serial anime ini sedang ditayangkan sejak 5 Januari 2021, sedangkan adaptasi anime dari manga sempalan kedua[a] telah ditayangkan sejak 6 April hingga 22 Juni 2021.[5]
                                </p>
                                <button class="btn btn-xs btn-warning">Sinopsis</button>
                                <p style="text-align: justify">
                                Satoru Mikami merupakan seorang karyawan biasa berumur 37 tahun yang masih perjaka. Ia tewas ketika melindungi juniornya dari seorang penyerang tak dikenal.[6] Lahir kembali di dunia penuh fantasi, dia bereinkarnasi menjadi sesosok monster slime dengan kekuatan super karena keinginan terakhirnya.[7]

Hidup sendiri di sebuah gua yang penuh dengan monster, dia kemudian bertemu dengan Veldora, seekor naga badai yang terkurung selama 300 tahun karena telah menghancurkan sebuah kota menjadi abu.[7] Karena Satoru bersimpati kepada Veldora atas kesulitan yang telah dialaminya, Satoru kemudian berteman dengannya dan berjanji untuk membantu melepaskan segel kurungan tersebut. Sebagai imbalannya, Veldora memberikan Satoru sebuah nama, yaitu Rimuru, dan Rimuru juga memberikan nama tersumpah untuk dirinya sendiri dan Veldora, yaitu Tempest. Setelah itu, Rimuru memulai perjalanan baru di dunia fantasi yang secara bertahap mengubah hidup dan nasibnya. Dalam perjalanannya, ia mendirikan sebuah negara untuk para monster bernama Federasi Jura Tempest.[8]
                                </p>
                            </div>
                        </div>

                        <div class="card bg-base-200 shadow-xl">
                            <figure>
                                <img src="storage/profile-photos/solev.jpg" style="width: 900px" alt="Movie" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Solo Leveling</h2>
                                <div class="justify-start">
                                    <button class="btn btn-xs btn-error">Manhwa</button>
                                    <button class="btn btn-xs btn-success">Korea</button>
                                </div>
                                <p style="text-align: justify">
                                    Solo Leveling (bahasa Korea: 나 혼자만 레벨업, translit. Na Honjaman Rebereop, har. "Hanya Saya Sendiri yang Naik Level"; Jepang: 俺だけレベルアップな件, Ore Dake Reberuappu-na Ken) adalah salah satu novel berseri berbahasa Korea asal Korea Selatan yang ditulis oleh Chugong. Novel ini awalnya diterbitkan dalam bentuk novel web di layanan komik dan fiksi digital milik perusahaan Kakao, yaitu KakaoPage pada tanggal 25 Juli 2016. Setelah itu, novel ini diterbitkan dalam bentuk novel ringan dalam media cetak oleh D&C Media di bawah label dagang Papyrus pada tanggal 4 November 2016. Novel ini kemudian dilisensikan dalam bentuk novel web berbahasa Inggris dengan judul Only I Level Up dalam layanan Webnovel dan dalam bentuk novel cetak berbahasa Inggris oleh penerbit Yen On.

Adaptasi dari novel tersebut ke dalam bentuk manhwa webtun berbahasa Korea dengan judul yang sama pertama kali diterbitkan di KakaoPage pada 4 Maret 2018. Manhwa tersebut diilustrasikan oleh Dubu (nama asli: Jang Sung-rak; bahasa Korea: 장성락, translit. Jang Seong-rak), direktur utama dari Redice Studio yang menjadi rumah produksi dan publikasi dari webtun ini, serta disadur oleh h-goon (nama asli: Hyun Goon; bahasa Korea: 현군, translit. Hyeon Gun). Musim pertama dari webtun ini berakhir pada tanggal 19 Maret 2020, sementara musim keduanya dimulai pada tanggal 1 Agustus 2020. Serialisasi webtun ini berakhir pada tanggal 29 Desember 2021 dengan jumlah bab sebanyak 179 buah. Masing-masing bab tersebut dikumpulkan dan kemudian diterbitkan dalam bentuk manhwa cetak oleh D&C Media menjadi tiga volume pada bulan Juli 2020. Sementara itu, manhwa webtun Solo Leveling ini diterjemahkan ke dalam bahasa Inggris, Mandarin, dan Thai, lalu diterbitkan dalam berbagai layanan yang berbeda. Manhwa webtun tersebut juga diterjemahkan ke dalam bahasa Indonesia dan diterbitkan dalam layanan KakaoPage.

Permainan video bermain peran berdasarkan seri tersebut saat ini sedang dikembangkan oleh perusahaan Korea, Netmarble Corp.[2] Adaptasi ke dalam seri televisi anime sedang dibuat oleh A-1 Pictures dan direncakan akan ditayangkan perdana pada bulan Januari 2024. Adaptasi ke dalam drama Korea juga sedang dalam tahap pengembangan, sementara webtun sekuel Solo Leveling: Ragnarok direncanakan akan terbit perdana sekitar tahun 2024.[3]
                                </p>
                                <button class="btn btn-xs btn-warning">Sinopsis</button>
                                <p style="text-align: justify">
                                    Dunia diserang monster! Muncullah "hunter" untuk menyerang monster-monster itu. Di kalangan hunter, ada yang disebut hunter terlemah di dunia. Itulah julukan Seong Jin-woo. Masuk rumah sakit adalah kebiasaannya setelah masuk ke dungeon. Suatu hari, saat melakukan raid, suatu peristiwa tragis menimpanya. Peristiwa itu hampir merenggut nyawanya. Namun, saat tersadar, dia mendapati dirinya masih hidup dan melihat sesuatu yang tidak bisa dilihat orang lain. Sejak saat itu, kehidupan Seong Jin-woo berubah. Inilah perjalanan Seong Jin-woo untuk menjadi hunter terkuat di dunia![4]
                                </p>
                            </div>
                        </div>

                        <div class="card bg-base-200 shadow-xl">
                            <figure>
                                <img src="storage/profile-photos/btth.jpg" style="width: 900px"
                                    alt="Movie" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Battle Through the Heavens</h2>
                                <div class="justify-start">
                                    <button class="btn btn-xs btn-warning">Manhua</button>
                                    <button class="btn btn-xs btn-primary">China</button>
                                </div>
                                <p style="text-align: justify">
                                    Battle Through the Heavens (Hanzi: 斗破苍穹; Pinyin: Dòupò Cāngqióng; harfiah: 'Bertarung Melalui Langit') adalah serial televisi Tiongkok tahun 2018 yang diadaptasi dari novel eponim Doupo Cangqiong (斗破苍穹) oleh Tiancan Tudou (天蚕土豆). Serial ini dibintangi oleh Leo Wu, Lin Yun, Baron Chen, Li Qin, Xin Zhilei dan Liu Meitong.[1] Serial ini ditayangkan di Hunan TV pada tanggal 3 September 2018 hingga 25 Oktober 2018.[2][3]

Serial ini juga dialihsuarakan ke dalam bahasa Indonesia sebagai Legenda Pendekar Langit yang ditayangkan di GTV pada tanggal 12 Maret 2024.
                                </p>
                                <button class="btn btn-xs btn-warning">Sinopsis</button>
                                <p style="text-align: justify">
                                Xiao Yan (Leo Wu) adalah putra dari Xiao Zhan (Yu Rongguang) dan Gu Wenxin (Carman Lee). Ketika Xiao Yan berusia sembilan tahun, ibunya dibunuh oleh musuh dan ayahnya tidak pernah membicarakannya. Hingga ia berusia lima belas tahun, seni bela dirinya tidak mengalami kemajuan karena cincin ibunya menyerap semua kemajuannya. Suatu hari, Xiao Yan bertemu dengan lelaki tua Yao Chen (Baron Chen) setelah melakukan kontak dengan cincin itu. Dengan bantuan Yao Chen, Xiao Yan membuat kemajuan besar dalam seni bela diri, dan mengetahui dari penghasut utama kematian ibunya. Xiao Yan mendaftar ke Akademi Jianan (迦南学院) dan berteman di sana. Begitu dia dijebak dan nyaris lolos, dia menyadari bahwa keluarganya telah hancur. Untuk membalas dendam atas pembunuhan ibunya, tetapi juga demi keadilan Jianghu, Xiao Yan dengan tegas memilih satu orang untuk menantang kekuatan jahat.
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-center">
                            <div class="btn-group">
                                <button class="btn">1</button>
                                <button class="btn">2</button>
                                <button class="btn btn-disabled">...</button>
                                <button class="btn">99</button>
                                <button class="btn">100</button>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <p class="text-sm pl-4">© 2024 Shiro API</p>
                    <p class="text-xs pl-4">
                        API stock by
                        <a class="link" href="https://porto.yoganata.web.id">Shiro Tales</a>
                    </p>
                </div>

            </div>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" class="drawer-overlay"></label>
            <div class="overflow-y-auto flex lg:justify-end w-fit lg:w-[40vw]">
                <!-- Sidebar content here -->
                <div class="w-fit p-3 lg:m-6 bg-base-100">
                    <!-- avatar start -->
                    <div class="avatar w-60">
                        <div class="w-16 lg:w-32 rounded-full mx-auto">
                            <img
                                src="storage/profile-photos/rimuru.webp" />
                        </div>
                    </div>
                    <!-- avatar end -->
                    <h1 class="text-2xl p-2 pl-4">Yoganata</h1>
                    <p class="text-sm pl-4">Selamat datang di halaman awal Shiro API</p>
                    <div class="flex gap-1 justify-center pt-4">
                        <a class="btn btn-sm btn-ghost btn-square">
                            <svg class="inline-block w-4 h-4 fill-current" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                            </svg>
                        </a>
                        <a class="btn btn-sm btn-ghost btn-square">
                            <svg class="inline-block w-4 h-4 fill-current" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                            </svg>
                        </a>
                        <a class="btn btn-sm btn-ghost btn-square">
                            <svg class="inline-block w-4 h-4 fill-current" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                <rect x="2" y="9" width="4" height="12" />
                                <circle cx="4" cy="4" r="2" />
                            </svg>
                        </a>
                        <a class="btn btn-sm btn-ghost btn-square">
                            <svg class="inline-block w-4 h-4 fill-current" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                            </svg>
                        </a>
                    </div>
                    <div class="divider"></div>
                    <!-- menu start -->
                    <div class="pt-4">
                        <ul class="menu bg-base-100 rounded-box">
                            <li>
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/dashboard') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Dashboard
                                        </a>
                                    @else
                                        <a href="{{ route('login') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"
                                                height="25" width="25">
                                                <path
                                                    d="M192 176v-40a40 40 0 0140-40h160a40 40 0 0140 40v240a40 40 0 01-40 40H240c-22.09 0-48-17.91-48-40v-40"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32" />
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32"
                                                    d="M288 336l80-80-80-80M80 256h272" />
                                            </svg>
                                            Log in
                                        </a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                    viewBox="0 0 512 512" height="25" width="25">
                                                    <path
                                                        d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32" />
                                                </svg>

                                                Register
                                            </a>
                                        @endif
                                    @endauth
                                @endif
                                <a href="./">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"
                                        height="25" width="25">
                                        <path
                                            d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256M400 179V64h-48v69"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                    </svg>
                                    Home
                                </a>
                            </li>
                            {{-- <li>
                  <a href="./about.html">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                      />
                    </svg>
                    About
                  </a>
                </li> --}}
                            {{-- <li>
                  <a href="./categories.html">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"
                      />
                    </svg>
                    Categories
                  </a>
                </li>
                <li>
                  <a href="./search.html">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                      />
                    </svg>
                    Search
                  </a>
                </li>
                <li>
                  <a href="./archive.html">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"
                      />
                    </svg>
                    Archive
                  </a>
                </li> --}}
                            <div class="divider"></div>
                            <li class="hidden lg:block">
                                <div class="flex gap-1 justify-center">
                                    <button data-set-theme="winter" class="btn btn-sm btn-ghost btn-square"
                                        data-act-class="btn-active">
                                        <svg class="inline-block w-4 h-4 fill-current"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <title>ionicons-v5-q</title>
                                            <path
                                                d="M256,118a22,22,0,0,1-22-22V48a22,22,0,0,1,44,0V96A22,22,0,0,1,256,118Z" />
                                            <path
                                                d="M256,486a22,22,0,0,1-22-22V416a22,22,0,0,1,44,0v48A22,22,0,0,1,256,486Z" />
                                            <path
                                                d="M369.14,164.86a22,22,0,0,1-15.56-37.55l33.94-33.94a22,22,0,0,1,31.11,31.11l-33.94,33.94A21.93,21.93,0,0,1,369.14,164.86Z" />
                                            <path
                                                d="M108.92,425.08a22,22,0,0,1-15.55-37.56l33.94-33.94a22,22,0,1,1,31.11,31.11l-33.94,33.94A21.94,21.94,0,0,1,108.92,425.08Z" />
                                            <path d="M464,278H416a22,22,0,0,1,0-44h48a22,22,0,0,1,0,44Z" />
                                            <path d="M96,278H48a22,22,0,0,1,0-44H96a22,22,0,0,1,0,44Z" />
                                            <path
                                                d="M403.08,425.08a21.94,21.94,0,0,1-15.56-6.45l-33.94-33.94a22,22,0,0,1,31.11-31.11l33.94,33.94a22,22,0,0,1-15.55,37.56Z" />
                                            <path
                                                d="M142.86,164.86a21.89,21.89,0,0,1-15.55-6.44L93.37,124.48a22,22,0,0,1,31.11-31.11l33.94,33.94a22,22,0,0,1-15.56,37.55Z" />
                                            <path d="M256,358A102,102,0,1,1,358,256,102.12,102.12,0,0,1,256,358Z" />
                                        </svg>
                                    </button>
                                    <button data-set-theme="garden" class="btn btn-sm btn-ghost btn-square"
                                        data-act-class="btn-active">
                                        <svg class="inline-block w-4 h-4 fill-current"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                    </button>
                                    <button data-set-theme="dark" class="btn btn-sm btn-ghost btn-square"
                                        data-act-class="btn-active">
                                        <svg class="inline-block w-4 h-4 fill-current"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <title>ionicons-v5-j</title>
                                            <path
                                                d="M152.62,126.77c0-33,4.85-66.35,17.23-94.77C87.54,67.83,32,151.89,32,247.38,32,375.85,136.15,480,264.62,480c95.49,0,179.55-55.54,215.38-137.85-28.42,12.38-61.8,17.23-94.77,17.23C256.76,359.38,152.62,255.24,152.62,126.77Z" />
                                        </svg>
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>
