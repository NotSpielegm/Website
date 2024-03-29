@charset "UTF-8"; /********* public:hypixel_news_index.less ********/
.p-pre-body {
    padding-top: 0
}

.p-body-main .bbWrapper {
    font-family: Georgia,serif
}

.featuredItems {
    box-sizing: border-box;
    height: 320px;
    margin: -2px 0 -12px 0
}

.featuredItems .featuredItems-item {
    height: 100%;
    width: 100%;
    padding: 20px 500px 0 40px;
    background-position: right center;
    background-size: contain;
    background-repeat: no-repeat
}

.featuredItems .featuredItems-item h1 {
    margin: 20px 0 0 0;
    font-size: 34px
}

.featuredItems .featuredItems-item h2 {
    margin-top: 0;
    font-family: Neuton,serif;
    font-size: 19px;
    font-weight: 300;
    color: #e2bb60
}

.featuredItems .featuredItems-item .featuredItems-item-text {
    font-family: Neuton,serif;
    font-size: 19px;
    line-height: 1.5em
}

.featuredItems .featuredItems-item .featuredItems-item-cta a {
    display: block;
    width: 217px;
    height: 54px;
    margin-top: 34px;
    background: url('/styles/hypixel-v2/images/bg-featured-item-button.png') no-repeat;
    font-family: Neuton,serif;
    font-size: 19px;
    font-weight: 400;
    color: #000;
    line-height: 50px;
    text-align: center;
    transition: opacity .2s
}

.featuredItems .featuredItems-item .featuredItems-item-cta a:hover {
    text-decoration: none;
    opacity: .8
}

.upgradeAccountCta {
    position: relative;
    width: 250px;
    height: 233px;
    border-radius: 5px;
    background: url('/styles/hypixel-v2/images/upgrade-account-cta.png') no-repeat 0 0;
    background-size: contain;
    overflow: hidden
}

.upgradeAccountCta-body {
    position: absolute;
    right: 0;
    left: 0;
    bottom: 0;
    padding: 8px 10px 17px 10px;
    background: rgba(0,0,0,0.5);
    text-align: center
}

.upgradeAccountCta-body h3 {
    margin: 0;
    font-family: Neuton,serif;
    font-size: 21px;
    color: #f4c75d
}

.upgradeAccountCta-body h4 {
    margin: 0 0 10px 0;
    font-family: Neuton,serif;
    font-weight: 400;
    font-size: 16px;
    color: #fff
}

.upgradeAccountCta-body .button {
    font-family: Neuton;
    font-size: 16px;
    text-transform: uppercase
}

@media (max-width: 1200px) {
    .featuredItems {
        display:none !important
    }
}

/********* public:lightbox.less ********/
body.compensate-for-scrollbar {
    overflow: hidden
}

.fancybox-active {
    height: auto
}

.fancybox-is-hidden {
    left: -9999px;
    margin: 0;
    position: absolute !important;
    top: -9999px;
    visibility: hidden
}

.fancybox-container {
    -webkit-backface-visibility: hidden;
    height: 100%;
    left: 0;
    outline: none;
    position: fixed;
    -webkit-tap-highlight-color: transparent;
    top: 0;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    transform: translateZ(0);
    width: 100%;
    z-index: 99992
}

.fancybox-container * {
    box-sizing: border-box
}

.fancybox-outer,.fancybox-inner,.fancybox-bg,.fancybox-stage {
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0
}

.fancybox-outer {
    -webkit-overflow-scrolling: touch;
    overflow-y: auto
}

.fancybox-bg {
    background: #1e1e1e;
    opacity: 0;
    transition-duration: inherit;
    transition-property: opacity;
    transition-timing-function: cubic-bezier(.47, 0, .74, .71)
}

.fancybox-is-open .fancybox-bg {
    opacity: .9;
    transition-timing-function: cubic-bezier(.22, .61, .36, 1)
}

.fancybox-infobar,.fancybox-toolbar,.fancybox-caption,.fancybox-navigation .fancybox-button {
    direction: ltr;
    opacity: 0;
    position: absolute;
    transition: opacity .25s ease,visibility 0s ease .25s;
    visibility: hidden;
    z-index: 99997
}

.fancybox-show-infobar .fancybox-infobar,.fancybox-show-toolbar .fancybox-toolbar,.fancybox-show-caption .fancybox-caption,.fancybox-show-nav .fancybox-navigation .fancybox-button {
    opacity: 1;
    transition: opacity .25s ease 0s,visibility 0s ease 0s;
    visibility: visible
}

.fancybox-infobar {
    color: #ccc;
    font-size: 13px;
    -webkit-font-smoothing: subpixel-antialiased;
    height: 44px;
    left: 0;
    line-height: 44px;
    min-width: 44px;
    mix-blend-mode: difference;
    padding: 0 10px;
    pointer-events: none;
    top: 0;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.fancybox-toolbar {
    right: 0;
    top: 0
}

.fancybox-stage {
    direction: ltr;
    overflow: visible;
    transform: translateZ(0);
    z-index: 99994
}

.fancybox-is-open .fancybox-stage {
    overflow: hidden
}

.fancybox-slide {
    -webkit-backface-visibility: hidden;
    display: none;
    height: 100%;
    left: 0;
    outline: none;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
    padding: 44px;
    position: absolute;
    text-align: center;
    top: 0;
    transition-property: transform,opacity;
    white-space: normal;
    width: 100%;
    z-index: 99994
}

.fancybox-slide::before {
    content: '';
    display: inline-block;
    font-size: 0;
    height: 100%;
    vertical-align: middle;
    width: 0
}

.fancybox-is-sliding .fancybox-slide,.fancybox-slide--previous,.fancybox-slide--current,.fancybox-slide--next {
    display: block
}

.fancybox-slide--image {
    overflow: hidden;
    padding: 44px 0
}

.fancybox-slide--image::before {
    display: none
}

.fancybox-slide--html {
    padding: 6px
}

.fancybox-content {
    background: #fff;
    display: inline-block;
    margin: 0;
    max-width: 100%;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
    padding: 44px;
    position: relative;
    text-align: left;
    vertical-align: middle
}

.fancybox-slide--image .fancybox-content {
    animation-timing-function: cubic-bezier(.5, 0, .14, 1);
    -webkit-backface-visibility: hidden;
    background: transparent;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    left: 0;
    max-width: none;
    overflow: visible;
    padding: 0;
    position: absolute;
    top: 0;
    -ms-transform-origin: top left;
    transform-origin: top left;
    transition-property: transform,opacity;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    z-index: 99995
}

.fancybox-can-zoomOut .fancybox-content {
    cursor: zoom-out
}

.fancybox-can-zoomIn .fancybox-content {
    cursor: zoom-in
}

.fancybox-can-swipe .fancybox-content,.fancybox-can-pan .fancybox-content {
    cursor: -webkit-grab;
    cursor: grab
}

.fancybox-is-grabbing .fancybox-content {
    cursor: -webkit-grabbing;
    cursor: grabbing
}

.fancybox-container [data-selectable='true'] {
    cursor: text
}

.fancybox-image,.fancybox-spaceball {
    background: transparent;
    border: 0;
    height: 100%;
    left: 0;
    margin: 0;
    max-height: none;
    max-width: none;
    padding: 0;
    position: absolute;
    top: 0;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    width: 100%
}

.fancybox-spaceball {
    z-index: 1
}

.fancybox-slide--video .fancybox-content,.fancybox-slide--map .fancybox-content,.fancybox-slide--pdf .fancybox-content,.fancybox-slide--iframe .fancybox-content {
    height: 100%;
    overflow: visible;
    padding: 0;
    width: 100%
}

.fancybox-slide--video .fancybox-content {
    background: #000
}

.fancybox-slide--map .fancybox-content {
    background: #e5e3df
}

.fancybox-slide--iframe .fancybox-content {
    background: #fff
}

.fancybox-video,.fancybox-iframe {
    background: transparent;
    border: 0;
    display: block;
    height: 100%;
    margin: 0;
    overflow: hidden;
    padding: 0;
    width: 100%
}

.fancybox-iframe {
    left: 0;
    position: absolute;
    top: 0
}

.fancybox-error {
    background: #fff;
    cursor: default;
    max-width: 400px;
    padding: 40px;
    width: 100%
}

.fancybox-error p {
    color: #444;
    font-size: 16px;
    line-height: 20px;
    margin: 0;
    padding: 0
}

.fancybox-button {
    background: rgba(30,30,30,0.6);
    border: 0;
    border-radius: 0;
    box-shadow: none;
    cursor: pointer;
    display: inline-block;
    height: 44px;
    margin: 0;
    padding: 10px;
    position: relative;
    transition: color .2s;
    vertical-align: top;
    visibility: inherit;
    width: 44px
}

.fancybox-button,.fancybox-button:visited,.fancybox-button:link {
    color: #ccc
}

.fancybox-button:hover {
    color: #fff
}

.fancybox-button:focus {
    outline: none
}

.fancybox-button.fancybox-focus {
    outline: 1px dotted
}

.fancybox-button[disabled],.fancybox-button[disabled]:hover {
    color: #888;
    cursor: default;
    outline: none
}

.fancybox-button div {
    height: 100%
}

.fancybox-button svg {
    display: block;
    height: 100%;
    overflow: visible;
    position: relative;
    width: 100%
}

.fancybox-button svg path {
    fill: currentColor;
    stroke-width: 0
}

.fancybox-button--play svg:nth-child(2),.fancybox-button--fsenter svg:nth-child(2) {
    display: none
}

.fancybox-button--pause svg:nth-child(1),.fancybox-button--fsexit svg:nth-child(1) {
    display: none
}

.fancybox-progress {
    background: #ff5268;
    height: 2px;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    -ms-transform: scaleX(0);
    transform: scaleX(0);
    -ms-transform-origin: 0;
    transform-origin: 0;
    transition-property: transform;
    transition-timing-function: linear;
    z-index: 99998
}

.fancybox-close-small {
    background: transparent;
    border: 0;
    border-radius: 0;
    color: #ccc;
    cursor: pointer;
    opacity: .8;
    padding: 8px;
    position: absolute;
    right: -12px;
    top: -44px;
    z-index: 401
}

.fancybox-close-small:hover {
    color: #fff;
    opacity: 1
}

.fancybox-slide--html .fancybox-close-small {
    color: currentColor;
    padding: 10px;
    right: 0;
    top: 0
}

.fancybox-slide--image.fancybox-is-scaling .fancybox-content {
    overflow: hidden
}

.fancybox-is-scaling .fancybox-close-small,.fancybox-is-zoomable.fancybox-can-pan .fancybox-close-small {
    display: none
}

.fancybox-navigation .fancybox-button {
    background-clip: content-box;
    height: 100px;
    opacity: 0;
    position: absolute;
    top: calc(50% - 50px);
    width: 70px
}

.fancybox-navigation .fancybox-button div {
    padding: 7px
}

.fancybox-navigation .fancybox-button--arrow_left {
    left: 0;
    left: env(safe-area-inset-left);
    padding: 31px 26px 31px 6px
}

.fancybox-navigation .fancybox-button--arrow_right {
    padding: 31px 6px 31px 26px;
    right: 0;
    right: env(safe-area-inset-right)
}

.fancybox-caption {
    background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0.15) 65%, rgba(0,0,0,0.075) 75.5%, rgba(0,0,0,0.037) 82.84999999999999%, rgba(0,0,0,0.019) 88%, rgba(0,0,0,0) 100%);
    bottom: 0;
    color: #eee;
    font-size: 14px;
    font-weight: 400;
    left: 0;
    line-height: 1.5;
    padding: 75px 44px 25px 44px;
    pointer-events: none;
    right: 0;
    text-align: center;
    z-index: 99996
}

@supports (padding: max(0px)) {
    .fancybox-caption {
        padding:75px max(44px, env(safe-area-inset-right)) max(25px, env(safe-area-inset-bottom)) max(44px, env(safe-area-inset-left))
    }
}

.fancybox-caption--separate {
    margin-top: -50px
}

.fancybox-caption__body {
    max-height: 50vh;
    overflow: auto;
    pointer-events: all
}

.fancybox-caption a,.fancybox-caption a:link,.fancybox-caption a:visited {
    color: #ccc;
    text-decoration: none
}

.fancybox-caption a:hover {
    color: #fff;
    text-decoration: underline
}

.fancybox-loading {
    animation: fancybox-rotate 1s linear infinite;
    background: transparent;
    border: 4px solid #888;
    border-bottom-color: #fff;
    border-radius: 50%;
    height: 50px;
    left: 50%;
    margin: -25px 0 0 -25px;
    opacity: .7;
    padding: 0;
    position: absolute;
    top: 50%;
    width: 50px;
    z-index: 99999
}

@keyframes fancybox-rotate {
    100% {
        transform: rotate(360deg)
    }
}

.fancybox-animated {
    transition-timing-function: cubic-bezier(0, 0, .25, 1)
}

.fancybox-fx-slide.fancybox-slide--previous {
    opacity: 0;
    transform: translate3d(-100%, 0, 0)
}

.fancybox-fx-slide.fancybox-slide--next {
    opacity: 0;
    transform: translate3d(100%, 0, 0)
}

.fancybox-fx-slide.fancybox-slide--current {
    opacity: 1;
    transform: translate3d(0, 0, 0)
}

.fancybox-fx-fade.fancybox-slide--previous,.fancybox-fx-fade.fancybox-slide--next {
    opacity: 0;
    transition-timing-function: cubic-bezier(.19, 1, .22, 1)
}

.fancybox-fx-fade.fancybox-slide--current {
    opacity: 1
}

.fancybox-fx-zoom-in-out.fancybox-slide--previous {
    opacity: 0;
    transform: scale3d(1.5, 1.5, 1.5)
}

.fancybox-fx-zoom-in-out.fancybox-slide--next {
    opacity: 0;
    transform: scale3d(.5, .5, .5)
}

.fancybox-fx-zoom-in-out.fancybox-slide--current {
    opacity: 1;
    transform: scale3d(1, 1, 1)
}

.fancybox-fx-rotate.fancybox-slide--previous {
    opacity: 0;
    -ms-transform: rotate(-360deg);
    transform: rotate(-360deg)
}

.fancybox-fx-rotate.fancybox-slide--next {
    opacity: 0;
    -ms-transform: rotate(360deg);
    transform: rotate(360deg)
}

.fancybox-fx-rotate.fancybox-slide--current {
    opacity: 1;
    -ms-transform: rotate(0deg);
    transform: rotate(0deg)
}

.fancybox-fx-circular.fancybox-slide--previous {
    opacity: 0;
    transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0)
}

.fancybox-fx-circular.fancybox-slide--next {
    opacity: 0;
    transform: scale3d(0, 0, 0) translate3d(100%, 0, 0)
}

.fancybox-fx-circular.fancybox-slide--current {
    opacity: 1;
    transform: scale3d(1, 1, 1) translate3d(0, 0, 0)
}

.fancybox-fx-tube.fancybox-slide--previous {
    transform: translate3d(-100%, 0, 0) scale(.1) skew(-10deg)
}

.fancybox-fx-tube.fancybox-slide--next {
    transform: translate3d(100%, 0, 0) scale(.1) skew(10deg)
}

.fancybox-fx-tube.fancybox-slide--current {
    transform: translate3d(0, 0, 0) scale(1)
}

@media all and (max-height: 576px) {
    .fancybox-slide {
        padding-left:6px;
        padding-right: 6px
    }

    .fancybox-slide--image {
        padding: 6px 0
    }

    .fancybox-close-small {
        right: -6px
    }

    .fancybox-slide--image .fancybox-close-small {
        background: #4e4e4e;
        color: #f2f4f6;
        height: 36px;
        opacity: 1;
        padding: 6px;
        right: 0;
        top: 0;
        width: 36px
    }

    .fancybox-caption {
        padding-left: 12px;
        padding-right: 12px
    }

    @supports (padding: max(0px)) {
        .fancybox-caption {
            padding-left:max(12px, env(safe-area-inset-left));
            padding-right: max(12px, env(safe-area-inset-right))
        }
    }
}

.fancybox-share {
    background: #f4f4f4;
    border-radius: 3px;
    max-width: 90%;
    padding: 30px;
    text-align: center
}

.fancybox-share h1 {
    color: #222;
    font-size: 35px;
    font-weight: 700;
    margin: 0 0 20px 0
}

.fancybox-share p {
    margin: 0;
    padding: 0
}

.fancybox-share__button {
    border: 0;
    border-radius: 3px;
    display: inline-block;
    font-size: 14px;
    font-weight: 700;
    line-height: 40px;
    margin: 0 5px 10px 5px;
    min-width: 130px;
    padding: 0 15px;
    text-decoration: none;
    transition: all .2s;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    white-space: nowrap
}

.fancybox-share__button:visited,.fancybox-share__button:link {
    color: #fff
}

.fancybox-share__button:hover {
    text-decoration: none
}

.fancybox-share__button--fb {
    background: #3b5998
}

.fancybox-share__button--fb:hover {
    background: #344e86
}

.fancybox-share__button--pt {
    background: #bd081d
}

.fancybox-share__button--pt:hover {
    background: #aa0719
}

.fancybox-share__button--tw {
    background: #1da1f2
}

.fancybox-share__button--tw:hover {
    background: #0d95e8
}

.fancybox-share__button svg {
    height: 25px;
    margin-right: 7px;
    position: relative;
    top: -1px;
    vertical-align: middle;
    width: 25px
}

.fancybox-share__button svg path {
    fill: #fff
}

.fancybox-share__input {
    background: transparent;
    border: 0;
    border-bottom: 1px solid #d7d7d7;
    border-radius: 0;
    color: #5d5b5b;
    font-size: 14px;
    margin: 10px 0 0 0;
    outline: none;
    padding: 10px 15px;
    width: 100%
}

.fancybox-thumbs {
    background: #ddd;
    bottom: 0;
    display: none;
    margin: 0;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    padding: 2px 2px 4px 2px;
    position: absolute;
    right: 0;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    top: 0;
    width: 212px;
    z-index: 99995
}

.fancybox-thumbs-x {
    overflow-x: auto;
    overflow-y: hidden
}

.fancybox-show-thumbs .fancybox-thumbs {
    display: block
}

.fancybox-show-thumbs .fancybox-inner {
    right: 212px
}

.fancybox-thumbs__list {
    font-size: 0;
    height: 100%;
    list-style: none;
    margin: 0;
    overflow-x: hidden;
    overflow-y: auto;
    padding: 0;
    position: absolute;
    position: relative;
    white-space: nowrap;
    width: 100%
}

.fancybox-thumbs-x .fancybox-thumbs__list {
    overflow: hidden
}

.fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar {
    width: 7px
}

.fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-track {
    background: #fff;
    border-radius: 10px;
    box-shadow: inset 0 0 6px rgba(0,0,0,0.3)
}

.fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-thumb {
    background: #2a2a2a;
    border-radius: 10px
}

.fancybox-thumbs__list a {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    background-color: rgba(0,0,0,0.1);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    cursor: pointer;
    float: left;
    height: 75px;
    margin: 2px;
    max-height: calc(100% - 8px);
    max-width: calc(50% - 4px);
    outline: none;
    overflow: hidden;
    padding: 0;
    position: relative;
    -webkit-tap-highlight-color: transparent;
    width: 100px
}

.fancybox-thumbs__list a::before {
    border: 6px solid #ff5268;
    bottom: 0;
    content: '';
    left: 0;
    opacity: 0;
    position: absolute;
    right: 0;
    top: 0;
    transition: all .2s cubic-bezier(.25, .46, .45, .9399999999999999);
    z-index: 99991
}

.fancybox-thumbs__list a:focus::before {
    opacity: .5
}

.fancybox-thumbs__list a.fancybox-thumbs-active::before {
    opacity: 1
}

@media all and (max-width: 576px) {
    .fancybox-thumbs {
        width:110px
    }

    .fancybox-show-thumbs .fancybox-inner {
        right: 110px
    }

    .fancybox-thumbs__list a {
        max-width: calc(100% - 10px)
    }
}

body.compensate-for-scrollbar {
    margin-right: 0 !important
}

.fancybox-container {
    z-index: 700
}

.fancybox-infobar,.fancybox-toolbar,.fancybox-caption,.fancybox-navigation .fancybox-button {
    direction: inherit
}

.fancybox-slide--image .fancybox-content {
    left: 0
}

.fancybox-slide--video .fancybox-content iframe {
    background: transparent;
    border: 0;
    display: block;
    height: 100%;
    margin: 0;
    overflow: hidden;
    padding: 0;
    width: 100%
}

.fancybox-slide--embed .fancybox-content {
    box-shadow: none;
    background: transparent;
    padding: 0
}

.fancybox-slide--embed .fancybox-content .bbMediaWrapper,.fancybox-slide--embed .fancybox-content .bbMediaJustifier,.fancybox-slide--embed .fancybox-content .bbOembed {
    margin-left: auto;
    margin-right: auto
}

.fancybox-slide--embed .fancybox-content .bbMediaWrapper-inner {
    position: static
}

.fancybox-slide--embed .fancybox-content iframe {
    margin-bottom: 0
}

.fancybox-progress {
    background: #ffc02e
}

@supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
    --backdrop-filter:blur(0px);
    -webkit-backdrop-filter:var(--backdrop-filter);backdrop-filter: var(--backdrop-filter)
}

@supports not ((-webkit-backdrop-filter: none) or (backdrop-filter: none)) {
    background:none
}

@supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
    --backdrop-filter:blur(5px);
    -webkit-backdrop-filter:var(--backdrop-filter);backdrop-filter: var(--backdrop-filter)
}

@supports not ((-webkit-backdrop-filter: none) or (backdrop-filter: none)) {
    background:none
}

.fancybox-content {
    box-shadow: 5px 5px 15px rgba(0,0,0,0.5)
}

.fancybox-container {
    --fancybox-thumb-size: 150px
}

@media (max-width: 480px),(max-height:480px) {
    .fancybox-container {
        --fancybox-thumb-size:75px
    }
}

.fancybox-thumbs__list a {
    width: var(--fancybox-thumb-size);
    height: var(--fancybox-thumb-size)
}

.fancybox-thumbs__list a::before {
    border: 2px solid #eee;
    background: radial-gradient(transparent, rgba(0,0,0,0.75))
}

.fancybox-show-thumbs .fancybox-inner {
    right: 0;
    bottom: var(--fancybox-thumb-size)
}

.fancybox-button>i {
    font-family: 'Font Awesome 5 Pro';
    font-size: inherit;
    font-style: normal;
    font-weight: 400;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    display: block;
    height: 100%;
    overflow: visible;
    position: relative;
    width: 100%
}

.fancybox-is-zoomable .fancybox-button.fancybox-button--zoom>i:before,.fancybox-button.fancybox-button--zoom[disabled]>i:before {
    content: "\f00e";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}

.fancybox-is-zoomable .fancybox-button.fancybox-button--zoom>i:nth-child(1),.fancybox-button.fancybox-button--zoom[disabled]>i:nth-child(1) {
    display: block
}

.fancybox-is-zoomable .fancybox-button.fancybox-button--zoom>i:nth-child(2),.fancybox-button.fancybox-button--zoom[disabled]>i:nth-child(2) {
    display: none
}

.fancybox-can-pan .fancybox-button.fancybox-button--zoom>i:before {
    content: "\f010";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}

.fancybox-can-pan .fancybox-button.fancybox-button--zoom>i:nth-child(1) {
    display: none
}

.fancybox-can-pan .fancybox-button.fancybox-button--zoom>i:nth-child(2) {
    display: block
}

.fancybox-button.fancybox-button--nw>i:before {
    content: "\f08e";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}

.fancybox-button.fancybox-button--fsenter>i:before {
    content: "\f065";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}

.fancybox-button.fancybox-button--fsenter>i:nth-child(2) {
    display: none
}

.fancybox-button.fancybox-button--fsexit>i:before {
    content: "\f066";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}

.fancybox-button.fancybox-button--fsexit>i:nth-child(1) {
    display: none
}

.fancybox-button.fancybox-button--download>i:before {
    content: "\f019";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}

.fancybox-button.fancybox-button--thumbs>i:before {
    content: "\f58d";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}

.fancybox-button.fancybox-button--close>i:before {
    content: "\f00d";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}

.fancybox-button.fancybox-button--sidebartoggle>i:before {
    content: "\f323";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}

.fancybox-show-sidebar .fancybox-button.fancybox-button--sidebartoggle>i:before {
    content: "\f324";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}

.fancybox-button.fancybox-button--arrow_left>i {
    padding: 7px;
    height: 100%
}

.fancybox-button.fancybox-button--arrow_left>i:before {
    content: "\f053";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}

.fancybox-button.fancybox-button--arrow_right>i {
    height: 100%;
    padding: 7px
}

.fancybox-button.fancybox-button--arrow_right>i:before {
    content: "\f054";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}

.fancybox-button.fancybox-button--play>i:before {
    content: "\f04b";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}

.fancybox-button.fancybox-button--play>i:nth-child(2) {
    display: none
}

.fancybox-button.fancybox-button--pause>i:before {
    content: "\f04c";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}

.fancybox-button.fancybox-button--pause>i:nth-child(1) {
    display: none
}

.fancybox-sidebartoggle {
    display: none;
    text-align: right
}

.fancybox-has-sidebar .fancybox-sidebartoggle {
    display: block
}

.fancybox-navigation .fancybox-button {
    background: transparent
}

.fancybox-navigation .fancybox-button i {
    background: rgba(30,30,30,0.6)
}

.fancybox-caption {
    padding-top: 60px;
    padding-bottom: max(10px, env(safe-area-inset-bottom))
}

.fancybox-caption__body h4,.fancybox-caption__body p {
    margin: 0
}

.fancybox-thumbs {
    top: auto;
    width: auto;
    bottom: 0;
    left: 0;
    right: 0;
    height: auto;
    padding: 0 10px;
    box-sizing: border-box;
    background: rgba(0,0,0,0.3)
}

.fancybox-show-thumbs .fancybox-inner {
    right: 0
}

.fancybox-show-thumbs .fancybox-inner,.fancybox-show-thumbs .fancybox-sidebar {
    bottom: var(--fancybox-thumb-size);
    margin-bottom: 4px
}

.fancybox-navigation .fancybox-button i,.fancybox-thumbs__list a,.fancybox-thumbs__list a:before,.fancybox-image {
    border-radius: 5px
}

.fancybox-show-sidebar .fancybox-inner {
    right: 360px
}

.fancybox-sidebar {
    background: #fefefe;
    bottom: 0;
    margin: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: 360px;
    z-index: 700;
    overflow-y: auto;
    display: none
}

.fancybox-sidebar.is-active {
    display: block
}

.fancybox-sidebar-loader {
    opacity: 0;
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
    text-align: center;
    pointer-events: none;
    color: #0b0a07;
    background: rgba(254,254,254,0.9);
    z-index: 200
}

.is-loading .fancybox-sidebar-loader {
    opacity: 1
}

.is-loading .fancybox-sidebar-loader .fa--xf {
    animation-name: spin
}

.fancybox-sidebar-loader .fa--xf {
    position: absolute;
    left: calc(50% - 0.5em);
    top: calc(50% - 0.5em);
    animation-duration: 1000ms;
    animation-iteration-count: infinite
}

@media (max-width: 900px) {
    .fancybox-sidebar .block-row {
        padding:3px 6px
    }

    .fancybox-sidebar .xfmgInfoBlock-title .contentRow-figure {
        display: none
    }

    .fancybox-sidebar .xfmgInfoBlock-title .contentRow-main {
        padding-left: 0
    }

    .fancybox-sidebar .message-responseRow .comment-avatar {
        display: none
    }

    .fancybox-sidebar .message-responseRow .comment-main {
        padding-left: 0
    }
}

@media (max-width: 650px) {
    .fancybox-sidebar .block-container {
        margin:0
    }
}

/********* public:notices.less ********/
.notices {
    list-style: none;
    margin: 0;
    padding: 0
}

.notices.notices--block .notice {
    margin-bottom: 10px
}

.notices.notices--floating {
    margin: 0 20px 0 auto;
    width: 300px;
    max-width: 100%;
    z-index: 800
}

@media (max-width: 340px) {
    .notices.notices--floating {
        margin-right:10px
    }
}

.notices.notices--floating .notice {
    margin-bottom: 20px
}

.notices.notices--scrolling {
    display: flex;
    align-items: stretch;
    overflow: hidden;
    border-width: 1px;
    border-style: solid;
    border-top-color: #dfdfdf;
    border-right-color: #d8d8d8;
    border-bottom-color: #cbcbcb;
    border-left-color: #d8d8d8;
    margin-bottom: 10px
}

.notices.notices--scrolling.notices--isMulti {
    margin-bottom: 30px
}

.notices.notices--scrolling .notice {
    width: 100%;
    flex-grow: 0;
    flex-shrink: 0;
    border: none
}

.noticeScrollContainer {
    margin-bottom: 10px
}

.noticeScrollContainer .lSSlideWrapper {
    border-width: 1px;
    border-style: solid;
    border-top-color: #dfdfdf;
    border-right-color: #d8d8d8;
    border-bottom-color: #cbcbcb;
    border-left-color: #d8d8d8
}

.noticeScrollContainer .notices.notices--scrolling {
    border: none;
    margin-bottom: 0
}

.notice {
    position: relative;
    border-width: 1px;
    border-style: solid;
    border-top-color: #dfdfdf;
    border-right-color: #d8d8d8;
    border-bottom-color: #cbcbcb;
    border-left-color: #d8d8d8
}

.notice:before,.notice:after {
    content: " ";
    display: table
}

.notice:after {
    clear: both
}

.notice.notice--primary {
    color: #0b0a07;
    background: #e9e8e6
}

.notice.notice--accent {
    color: #aa4909;
    background: #fff4e5
}

.notice.notice--accent a:not(.button--notice) {
    color: #ffc02e
}

.notice.notice--dark {
    color: #fefefe;
    border: none;
    background: #141414
}

.notice.notice--dark a:not(.button--notice) {
    color: #b4b4b4
}

.notice.notice--light {
    color: #141414;
    background: #fefefe
}

.notice.notice--light a:not(.button--notice) {
    color: #828282
}

.notice.notice--warn {
    color: #fff;
    border: none;
    background: #ff3333
}

.notice.notice--warn a:not(.button--notice) {
    color: #fff
}

.notice.notice--enablePush {
    display: none
}

@media (max-width: 900px) {
    .notice.notice--enablePush {
        padding:3px 3px 10px;
        font-size: 13px
    }
}

@media (max-width: 900px) {
    .notice.notice--cookie .notice-content {
        padding:3px 3px 10px;
        font-size: 12px
    }

    .notice.notice--cookie .notice-content .button--notice {
        font-size: 12px;
        padding: 3px 6px
    }

    .notice.notice--cookie .notice-content .button--notice .button-text {
        font-size: 12px
    }
}

.notice.notice--cookieAdvanced .notice-content {
    padding: 1em 0
}

.notice.notice--cookieAdvanced .notice-content .u-pageCentered {
    display: grid;
    grid-template-columns: 1fr 250px;
    gap: 10px;
    align-items: end
}

@media (max-width: 650px) {
    .notice.notice--cookieAdvanced .notice-content .u-pageCentered {
        display:block
    }
}

.notice.notice--cookieAdvanced .notice-content h2 {
    margin: 0
}

.notice.notice--cookieAdvanced .notice-content .button {
    width: 100%;
    margin: .5em 0;
    font-weight: bold
}

.notice.notice--cookieAdvanced .notice-content form.is-active {
    display: contents;
    grid-column: span 2
}

.notice.notice--cookieAdvanced .notice-content form.is-active .formRow.formRow--fullWidth>dd {
    padding-left: 0;
    padding-right: 0
}

.notice.notice--cookieAdvanced .notice-content form:not(.is-active) {
    display: none
}

.notices--block .notice {
    font-size: 15px;
    border-radius: 4px
}

.notices--floating .notice {
    font-size: 11px;
    border-radius: 4px;
    box-shadow: 1px 1px 3px rgba(0,0,0,0.25)
}

.notices--floating .notice.notice--primary {
    background-color: rgba(233,232,230,0.8)
}

.notices--floating .notice.notice--accent {
    background-color: rgba(255,244,229,0.8)
}

.notices--floating .notice.notice--dark {
    background-color: rgba(20,20,20,0.8)
}

.notices--floating .notice.notice--light {
    background-color: rgba(254,254,254,0.8)
}

.has-js .notices--floating .notice {
    display: none
}

.notice.notice--hasImage .notice-content {
    margin-left: 68px;
    min-height: 68px
}

@media (max-width: 900px) {
    .notice.notice--hidewide:not(.is-vis-processed) {
        display:none;
        visibility: hidden
    }
}

@media (max-width: 650px) {
    .notice.notice--hidemedium:not(.is-vis-processed) {
        display:none;
        visibility: hidden
    }
}

@media (max-width: 480px) {
    .notice.notice--hidenarrow:not(.is-vis-processed) {
        display:none;
        visibility: hidden
    }
}

.notice-image {
    float: left;
    padding: 10px 0 10px 10px
}

.notice-image img {
    max-width: 48px;
    max-height: 48px
}

.notice-content {
    padding: 10px
}

.notice-content a.notice-dismiss {
    float: right;
    color: inherit;
    font-size: 16px;
    line-height: 1;
    height: 1em;
    box-sizing: content-box;
    padding: 0 0 5px 5px;
    opacity: .5;
    -webkit-transition: opacity .25s ease;
    transition: opacity .25s ease;
    cursor: pointer
}

.notice-content a.notice-dismiss:before {
    font-family: 'Font Awesome 5 Pro';
    font-size: inherit;
    font-style: normal;
    font-weight: 400;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: "\f00d";
    width: .75em;
    display: inline-block;
    text-align: center
}

.notice-content a.notice-dismiss:hover {
    text-decoration: none;
    opacity: 1
}

.notices--floating .notice-content a.notice-dismiss {
    font-size: 14px
}

/********* public:extra.less ********/
.message-signature {
    max-height: 300px;
    overflow: hidden
}

.bbWrapper {
    overflow-x: auto;
    overflow-y: auto
}

.structItemContainer-group.structItemContainer-group--sticky>div.structItem {
    background-color: #f5f5f5
}

.structItem--thread.is-deleted {
    background-color: #fde9e9
}

.fr-box.fr-basic .fr-element.fr-view {
    font-family: Georgia,Serif
}

.notice--status {
    color: #0b0a07;
    background: #e9e8e6;
    border-width: 1px;
    border-style: solid;
    border-top-color: #dfdfdf;
    border-right-color: #d8d8d8;
    border-bottom-color: #cbcbcb;
    border-left-color: #d8d8d8
}

.notice--status::after {
    content: "\f071";
    font-family: 'Font Awesome 5 Pro';
    font-weight: 900;
    font-size: 75px;
    position: absolute;
    top: 2%;
    right: 2%;
    opacity: 0.2
}

.notice--status td {
    vertical-align: top
}

.notice--status tr>td:first-child {
    font-weight: bold;
    padding-right: 5px
}

.notice--status h2 {
    margin: 0;
    text-transform: uppercase;
    text-align: center
}

.notice--status p {
    margin: 0
}

.notice--status h2>a {
    color: inherit
}

.notice--status-maintenance {
    border-color: #217dbb;
    background: #3498db
}

.notice--status-minor,.notice--status-major {
    border-color: #d68b09;
    background: #f5a61d
}

.notice--status-critical {
    border-color: #ec1818;
    background: #f04747;
    color: white
}

.rank-badge {
    padding: 1px 4px;
    display: inline-block;
    background: #ccc;
    font-size: 11px;
    margin-bottom: 3px;
    text-transform: uppercase;
    vertical-align: middle;
    text-shadow: none
}

.rank-badge-admin,.rank-badge-owner {
    background-color: #bc4141;
    color: #fff
}

.rank-badge-moderator,.rank-badge-mod,.rank-badge-game_master,.rank-badge-gm {
    background-color: #3e7134;
    color: #fff
}

.rank-badge-helper,.rank-badge-jr_helper {
    background-color: #2e5c8b;
    color: #fff
}

.rank-badge-youtuber {
    border: 1px solid #fff;
    box-shadow: 0 0 0 1px #c60000;
    background-color: #c60000;
    color: #fff
}

.rank-badge-superstar,.rank-badge-GOLD {
    background-color: #e8983a;
    color: #453909
}

.rank-badge-mvp_plus,.rank-badge-mvp {
    background-color: #a1e8ec;
    color: #0a3a3d
}

.rank-badge-vip_plus,.rank-badge-vip {
    background-color: #98cd7c;
    color: #203f10
}

#forumGameDesc {
    flex: 1;
    display: flex;
    align-items: center
}

@media (max-width: 650px) {
    #forumGameDesc {
        flex-flow:column
    }

    #forumGameDesc .gameFeaturedVideo {
        margin-left: 0 !important
    }

    #forumGameDesc .artPane {
        display: none
    }
}

@media (min-width: 650px) {
    #forumGameDesc .gameFeaturedVideo {
        display:inline;
        position: absolute;
        margin-top: -54px
    }
}

#forumGameDesc h4 {
    margin: 0;
    padding-left: 0;
    font-size: 19px;
    font-family: Neuton,serif;
    font-weight: 100;
    color: #e5bd58;
    text-shadow: 0 0 3px #000;
    display: inline
}

#forumGameDesc p {
    margin-bottom: 17px;
    font-size: 19px;
    text-shadow: 0 0 3px #000;
    font-family: Neuton,serif;
    color: #fff;
    font-weight: 100;
    padding-right: 30px
}

#forumGameDesc .gameFeaturedVideo a::before {
    content: " ";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 81.33px;
    border-radius: 3px;
    background: rgba(0,0,0,0.5) url(/styles/hypixel-v2/images/play-video-button.png) no-repeat 50% 50%;
    background-size: 40px;
    transition: background-color .1s
}

#forumGameDesc .gameFeaturedVideo a {
    display: inline-block;
    position: relative;
    height: 61px;
    margin: 20px 0 0;
    border-radius: 3px;
    font-family: Neuton,Times;
    vertical-align: middle;
    overflow: hidden;
    cursor: pointer
}

#forumGameDesc .gameFeaturedVideo a img {
    display: inline-block;
    height: 61px;
    border-radius: 3px;
    margin-right: 10px;
    vertical-align: middle
}

#forumGameDesc .gameFeaturedVideo a span {
    display: inline-block;
    height: 61px;
    font-size: 1.2rem;
    color: #e5bd58;
    text-shadow: 0 0 3px #000;
    line-height: 61px;
    vertical-align: middle;
    font-family: Neuton,Times
}

#forumGameDesc .artPane {
    float: right
}

#forumGameDesc .artPane img {
    height: 100%;
    width: 100%;
    object-fit: contain
}

#cinema {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.85);
    z-index: 499;
    display: none
}

#featuredVideoModal.modal-wrapper {
    background: rgba(0,0,0,0.5)
}

#featuredVideoModal.modal-wrapper .dialog {
    padding: 0;
    background: none;
    box-shadow: 0 0 15px #000
}

#featuredVideoModal.modal-wrapper .dialog .close {
    top: 0;
    right: -32px;
    color: #fff
}

.trailerContainer {
    display: none;
    position: absolute;
    width: 635px;
    height: 435px;
    right: 20px;
    top: 26px
}

.featuredItems {
    visibility: hidden !important;
    height: 50px !important
}

.p-pageWrapper {
    background-image: radial-gradient(farthest-side at top, rgba(11,10,7,0), #0b0a07),url(styles/hypixel-v2/images/header-bg-seasonal-easter.png) !important;
    background-size: 1263px 1263px,1259px auto;
    background-position: center -30px,center -30px
}

.p-description a {
    color: #ffc02e !important
}

.p-description {
    color: #ededed
}

.formRow--reportItem {
    border-top: 1px solid #d8d8d8
}

.approvalQueue-item .formRow>dt {
    width: 0% !important
}

@media screen and (min-width: 1200px) {
    .p-nav-list {
        overflow:hidden
    }
}

.template-hypixel_play_index .p-body-inner {
    max-width: 1200px;
    padding: 0 !important
}

.blockStatus-message--stale::before {
    content: "\f017";
    width: 1.28571429em;
    display: inline-block;
    text-align: center
}
