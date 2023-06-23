<?php
/**
 * @var \App\View\AppView $this
 */
$this->layout = 'error';
$this->assign('title', 'Page Not Found!');
?>

<style>
    *, *:before, *:after {
        box-sizing: border-box;
    }

    * {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        transform-style: preserve-3d;
    }

    *:focus {
        outline: none !important;
    }

    body, html {
        height: 100%;
    }

    body {
        display: flex;
        align-items: center;
        align-content: center;
        justify-content: center;
        padding: 12px;
        background: #343434;
        color: white;
        font-family: "brandon-grotesque", "Brandon Grotesque", "Source Sans Pro", "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
        font-size: 24px;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
    }

    ::selection {
        background: none;
    }

    a {
        display: block;
        cursor: pointer;
        animation: pulseColor 1000ms linear 3100ms forwards;
        font-weight: 500;
    }

    a:hover b, a:focus b {
        color: #f04f54;
    }

    a:active b {
        color: #43cb9d;
    }

    svg {
        width: 50px;
        height: auto;
    }

    .crack {
        position: relative;
        z-index: 4;
        margin-left: -50px;
    }

    .crack polyline {
        fill: none;
        stroke: #f04f54;
        stroke-width: 10px;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-dasharray: 1649.099;
        stroke-dashoffset: 1649.099;
        animation: drawStroke 1500ms ease-out 500ms forwards;
    }

    main {
        display: flex;
        align-items: center;
        align-content: center;
        justify-content: center;
    }

    main > div {
        display: flex;
        align-items: center;
        align-content: center;
        position: relative;
        overflow: hidden;
    }

    main > div svg {
        position: relative;
        z-index: 1;
    }

    main > div svg polygon {
        fill: #343434;
    }

    main > div span {
        display: block;
        position: relative;
        z-index: 0;
        padding: 0 12px;
        line-height: 1.4;
    }

    main > div:first-child {
        text-align: right;
        z-index: 1;
    }

    main > div:first-child span:first-child {
        opacity: 0;
        transform: translateX(100%);
        animation: translateLeft 1000ms linear 1250ms forwards;
    }

    main > div:first-child span:last-child {
        opacity: 0;
        transform: translateX(100%);
        animation: translateLeft 1000ms linear 1450ms forwards;
    }

    main > div:first-child svg polygon {
        animation: removeFill 10ms ease-out 1600ms forwards;
    }

    main > div:last-child {
        z-index: 0;
        margin-left: -50px;
    }

    main > div:last-child span:first-child {
        opacity: 0;
        transform: translateX(-100%);
        animation: translateRight 1000ms linear 1650ms forwards;
    }

    main > div:last-child span:last-child {
        opacity: 0;
        transform: translateX(-100%);
        animation: translateRight 1000ms linear 1850ms forwards;
    }

    @keyframes drawStroke {
        0% {
            stroke-dashoffset: 1649.099;
        }
        100% {
            stroke-dashoffset: 0;
        }
    }

    @keyframes removeFill {
        0% {
            fill: rgba(52, 52, 52, 1);
        }
        100% {
            fill: rgba(52, 52, 52, 0);
        }
    }

    @keyframes pulseColor {
        0% {
            color: white;
        }
        25% {
            color: #43cb9d;
        }
        50% {
            color: white;
        }
        75% {
            color: #43cb9d;
        }
        100% {
            color: white;
        }
    }

    /* https://goo.gl/v323yz */
    @keyframes translateLeft {
        0% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 150, 0, 0, 1);
            opacity: 1;
        }
        7.61% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 69.561, 0, 0, 1);
        }
        11.41% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 39.355, 0, 0, 1);
        }
        15.12% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 17.801, 0, 0, 1);
        }
        18.92% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 3.02, 0, 0, 1);
        }
        22.72% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -5.661, 0, 0, 1);
        }
        30.23% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -10.852, 0, 0, 1);
        }
        50.25% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -2.282, 0, 0, 1);
        }
        70.27% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0.519, 0, 0, 1);
        }
        100% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
            opacity: 1;
        }
    }

    /* https://goo.gl/p1Hnde */
    @keyframes translateRight {
        0% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -150, 0, 0, 1);
            opacity: 1;
        }
        7.61% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -69.561, 0, 0, 1);
        }
        11.41% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -39.355, 0, 0, 1);
        }
        15.12% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -17.801, 0, 0, 1);
        }
        18.92% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -3.02, 0, 0, 1);
        }
        22.72% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 5.661, 0, 0, 1);
        }
        30.23% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 10.852, 0, 0, 1);
        }
        50.25% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 2.282, 0, 0, 1);
        }
        70.27% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -0.519, 0, 0, 1);
        }
        100% {
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
            opacity: 1;
        }
    }

</style>
<main>
    <div>
        <div>
            <span>Page Not Found</span>
        </div>
        <svg viewBox="0 0 200 600">
            <polygon
                    points="118.302698 8 59.5369448 66.7657528 186.487016 193.715824 14 366.202839 153.491505 505.694344 68.1413353 591.044514 200 591.044514 200 8"></polygon>
        </svg>
    </div>
    <svg class="crack" viewBox="0 0 200 600">
        <polyline
                points="118.302698 8 59.5369448 66.7657528 186.487016 193.715824 14 366.202839 153.491505 505.694344 68.1413353 591.044514"></polyline>
    </svg>
    <div>
        <svg viewBox="0 0 200 600">
            <polygon
                    points="118.302698 8 59.5369448 66.7657528 186.487016 193.715824 14 366.202839 153.491505 505.694344 68.1413353 591.044514 0 591.044514 0 8"></polygon>
        </svg>
        <div>
            <span>Sorry About That!</span>
        </div>
    </div>
</main>
