<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="noindex, nofollow">

    <title>Not Currently Available</title>

    <style>

        :root {
            --green: #3AAA35;
            --lightgreen: #A9DC43;
            --grey800: #252527;
            --cui-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        body {
            align-items: center !important;
            background: linear-gradient(-45deg, var(--green), var(--lightgreen));

            flex-direction: row !important;

            margin: 0;
            font-family: var(--cui-font-sans-serif);
            font-size: 1rem;;
            font-weight: 400;
            line-height: 1.5;
            color: rgba(44, 56, 74, 0.95);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 21, 0);
        }

        body::after {
            content: '';
            background: url(/background-dots.svg) no-repeat;
            background-size: cover;
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0.03;
            bottom: 0;
            right: 0;
            z-index: -1;
        }

        .container {
            max-width: 1320px;

            --cui-gutter-x: 1.5rem;
            --cui-gutter-y: 0;
            width: 100%;
            padding-right: calc(var(--cui-gutter-x) * .5);
            padding-left: calc(var(--cui-gutter-x) * .5);
            margin-right: auto;
            margin-left: auto;
        }

        .row {
            align-items: center !important;
            justify-content: center !important;

            min-height: 100vh !important;

            --cui-gutter-x: 1.5rem;
            --cui-gutter-y: 0;
            display: flex
        ;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--cui-gutter-y));
            margin-right: calc(-.5 * var(--cui-gutter-x));
            margin-left: calc(-.5 * var(--cui-gutter-x));
        }

        .col {
            flex: 0 0 auto;
            width: 100%;

            max-width: 100%;
            padding-right: calc(var(--cui-gutter-x) * .5);
            padding-left: calc(var(--cui-gutter-x) * .5);
            margin-top: var(--cui-gutter-y);
        }

        @media (min-width: 992px) {
            .col {
                flex: 0 0 auto;
                width: 33.33333333%;
            }
        }
        @media (min-width: 768px) {
            .col {
                flex: 0 0 auto;
                width: 50%;
            }
        }


        h3.logo {
            color: transparent;
            margin: 0 auto;
            overflow: hidden;

            text-align: center !important;
            margin-bottom: 1.5rem !important;
            font-size: 1.75rem;

            font-weight: 500;
            line-height: 1.2;

            content: '';
            display: block;
            background: url(/surge-logo.svg) no-repeat;
            filter: contrast(0) brightness(0);
            background-size: contain;
            width: 300px;
            height: 100px;
        }

        div.content {
            text-align: center !important;

            a {
                color: var(--grey800);
            }

            a:hover {
                text-decoration: none;
            }
        }

        footer {
            position: relative;
            top: -5vh;
            text-align: center !important;

            a {
                color: var(--grey800);
            }

            a:hover {
                text-decoration: none;
            }
        }
    </style>

</head>
<body>


<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="logo">Unavailable</h3>
            <div class="content">
                This Site or Service is Not Currently Available
                <br/>Contact <a href="mailto:help@surge-online.co.uk">help@surge-online.co.uk</a> for support.
            </div>

        </div>
    </div>
</div>

<footer>
    <div>
        Developed by <a target="_blank" rel="noopener" href="https://surge-online.co.uk/development">Surge</a>.
    </div>
</footer>



</body>
</html>
