<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap"
    rel="stylesheet">
    <script src="./js/quiz.js" defer></script>

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
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

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    
</head>

<body class="antialiased">
    <div class="relative  items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <?php if(Route::has('login')): ?>
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('/dashboard')); ?>"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <body>
            <!--<header id="js-header" class="l-header p-header">
              <div class="p-header__logo"><img src="../assets/img/logo.svg" alt="POSSE"></div>
              <button class="p-header__button" id="js-headerButton"></button>
              <div class="p-header__inner">
                <nav class="p-header__nav">
                  <ul class="p-header__nav__list">
                    <li class="p-header__nav__item">
                      <a href="../" class="p-header__nav__item__link">POSSEとは</a>
                    </li>
                    <li class="p-header__nav__item">
                      <a href="./" class="p-header__nav__item__link">クイズ</a>
                    </li>
                  </ul>
                </nav>
                <div class="p-header__official">
                  <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer" class="p-header__official__link--line">
                    <i class="u-icon__line"></i>
                    <span class="">POSSE公式LINEを追加</span>
                    <i class="u-icon__link"></i>
                  </a>
                  <a href="" class="p-header__official__link--website">POSSE 公式サイト<i class="u-icon__link"></i></a>
                </div>
                <ul class="p-header__sns p-sns">
                  <li class="p-sns__item">
                    <a href="https://twitter.com/posse_program" target="_blank" rel="noopener noreferrer" class="p-sns__item__link"
                      aria-label="Twitter">
                      <i class="u-icon__twitter"></i>
                    </a>
                  </li>
                  <li class="p-sns__item">
                    <a href="https://www.instagram.com/posse_programming/" target="_blank" rel="noopener noreferrer"
                      class="p-sns__item__link" aria-label="instagram">
                      <i class="u-icon__instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </header>-->
            <!-- /.l-header .p-header -->
          
          
            <main class="l-main">
              <section class="p-hero p-quiz-hero">
                <div class="l-container">
                  <h1 class="p-hero__title">
                    <span class="p-hero__title__label">POSSE課題</span>
                    <span class="p-hero__title__inline">ITクイズ</span>
                  </h1>
                </div>
              </section>
              <!-- /.p-hero .p-quiz-hero -->
          
              <div class="p-quiz-container l-container" id="js-quizContainer">
                <section class="p-quiz-box js-quiz" data-quiz="0">
                    <div class="p-quiz-box__question">
                      <h2 class="p-quiz-box__question__title">
                        <span class="p-quiz-box__label">Q1</span>
                        <span class="p-quiz-box__question__title__text">日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？</span>
                      </h2>
                      <figure class="p-quiz-box__question__image">
                        <img src="./img2/quiz/img-quiz01.png" alt="">
                      </figure>
                    </div>
                    <div class="p-quiz-box__answer">
                      <span class="p-quiz-box__label p-quiz-box__label--accent">A</span>
                      <ul class="p-quiz-box__answer__list">
                        <li class="p-quiz-box__answer__item">
                          <button class="p-quiz-box__answer__button js-answer" data-answer="0">
                            約28万人<i class="u-icon__arrow"></i>
                          </button>
                        </li>
                        <li class="p-quiz-box__answer__item">
                          <button class="p-quiz-box__answer__button js-answer" data-answer="1">
                            約79万人<i class="u-icon__arrow"></i>
                          </button>
                        </li>
                        <li class="p-quiz-box__answer__item">
                          <button class="p-quiz-box__answer__button js-answer" data-answer="2">
                            約183万人<i class="u-icon__arrow"></i>
                          </button>
                        </li>
                      </ul>
                      <div class="p-quiz-box__answer__correct js-answerBox">
                        <p class="p-quiz-box__answer__correct__title js-answerTitle"></p>
                        <p class="p-quiz-box__answer__correct__content">
                          <span class="p-quiz-box__answer__correct__content__label">A</span>
                          <span class="js-answerText"></span>
                        </p>
                      </div>
                    </div>
                    <cite class="p-quiz-box__note">
                      <i class="u-icon__note"></i>経済産業省 2019年3月 － IT 人材需給に関する調査
                    </cite>
                  </section>
              </div>
              <!-- /.l-container .p-quiz-container -->
            </main>
          
            <div class="p-line">
              <div class="l-container">
                <div class="p-line__body">
                  <div class="p-line__body__inner">
                    <h2 class="p-heading -light p-line__title"><i class="u-icon__line"></i>POSSE 公式LINE</h2>
                    <div class="p-line__content">
                      <p>公式LINEにてご質問を随時受け付けております。<br>詳細やPOSSE最新情報につきましては、公式LINEにてお知らせ致しますので<br>下記ボタンより友達追加をお願いします！</p>
                    </div>
                    <div class="p-line__footer">
                      <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer"
                        class="p-line__button">LINE追加<i class="u-icon__link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.p-line -->
          
            <footer class="l-footer p-footer">
              <div class="p-fixedLine">
                <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer"
                  class="p-fixedLine__link">
                  <i class="u-icon__line"></i>
                  <p class="p-fixedLine__link__text"><span class="u-sp-hidden">POSSE</span>公式LINEで<br>最新情報をGET！</p>
                  <i class="u-icon__link"></i>
                </a>
              </div>
              <div class="l-footer__inner">
                <div class="p-footer__siteinfo">
                  <span class="p-footer__logo">
                    <img src="../assets/img/logo.svg" alt="POSSE">
                  </span>
                  <a href="https://posse-ap.com/" target="_blank" rel="noopener noreferrer"
                    class="p-footer__siteinfo__link">POSSE公式サイト</a>
                </div>
                <div class="p-footer__sns">
                  <ul class="p-sns__list p-footer__sns__list">
                    <li class="p-sns__item">
                      <a href="https://twitter.com/posse_program" target="_blank" rel="noopener noreferrer"
                        class="p-sns__item__link" aria-label="Twitter">
                        <i class="u-icon__twitter"></i>
                      </a>
                    </li>
                    <li class="p-sns__item">
                      <a href="https://www.instagram.com/posse_programming/" target="_blank" rel="noopener noreferrer"
                        class="p-sns__item__link" aria-label="instagram">
                        <i class="u-icon__instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-footer__copyright">
                <small lang="en">©︎2022 POSSE</small>
              </div>
            </footer>
            <!-- /.l-footer .p-footer -->
          
          </body>

    </div>
</body>

</html>
<?php /**PATH /work/backend/resources/views/quiz.blade.php ENDPATH**/ ?>