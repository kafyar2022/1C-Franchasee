@extends('admin.layouts.master')

@section('title', '1С:Франчайзи - Автоматизируем ваши бизнес-процессы')

@section('content')
  <main class="home-page">
    <article class="welcome-section">
      <div class="container welcome-container">
        <div class="welcome-right">
          <h1 data-table="texts" data-caption="welcome-title" class="welcome-title">{{$home['welcome-title']}}</h1>
          <p data-table="texts" data-caption="welcome-subtitle" class="welcome-subtitle">{{$home['welcome-subtitle']}}</p>
          <a data-table="texts" data-caption="welcome-link" class="link link--yellow welcome-link" href="{{route('services')}}">{{$home['welcome-link']}}</a>
        </div>
        <div class="welcome-left">
          <svg class="welcome-left-bg" width="663" height="386" viewBox="0 0 663 385" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M470.138 51.7449C485.601 52.6605 500.927 55.2257 515.864 59.3982C518.45 60.1157 528.912 64.0618 531.615 65.3772C553.994 75.8988 573.19 92.3317 587.204 112.964C601.219 133.597 609.54 157.675 611.3 182.69C613.06 207.705 608.195 232.743 597.212 255.196C586.229 277.649 569.529 296.696 548.852 310.353C528.175 324.009 504.277 331.777 479.647 332.846C455.016 333.915 430.555 328.247 408.809 316.432C387.064 304.616 368.83 287.086 356.006 265.666C343.183 244.247 336.239 219.721 335.899 194.645L286.058 194.645C286.283 228.441 295.304 261.574 312.202 290.672C329.101 319.77 353.275 343.796 382.265 360.304C411.254 376.812 444.025 385.214 477.243 384.654C510.461 384.095 542.94 374.595 571.377 357.119C599.813 339.644 623.193 314.818 639.135 285.167C655.078 255.515 663.016 222.097 662.141 188.312C661.266 154.526 651.61 121.579 634.154 92.8233C616.699 64.0671 592.067 40.5277 562.765 24.6001C552.74 19.4415 542.37 15.006 531.733 11.3265C513.524 6.19362 494.861 2.90901 476.015 1.52086C469.903 1.52086 448.156 0.683819 441.809 0.683819L-2.74651e-05 0.68378L-3.18872e-05 51.2667L440.869 51.2667C445.806 51.2667 465.671 51.3862 470.138 51.7449ZM440.869 131.027C444.513 131.027 463.438 131.027 466.964 131.027C473.992 131.646 480.979 132.685 487.888 134.136C492.957 135.456 497.88 137.299 502.581 139.637C511.483 144.744 518.923 152.124 524.165 161.05C529.407 169.975 532.271 180.136 532.474 190.531C532.676 200.926 530.211 211.195 525.321 220.325C520.431 229.455 513.286 237.13 504.589 242.592C495.893 248.054 485.947 251.115 475.733 251.473C465.519 251.831 455.39 249.472 446.345 244.631C437.3 239.79 429.653 232.634 424.157 223.867C418.662 215.101 415.508 205.029 415.008 194.645L367.166 194.645C367.475 213.993 372.833 232.911 382.692 249.46C392.55 266.009 406.556 279.595 423.274 288.827C439.992 298.059 458.821 302.605 477.834 301.999C496.847 301.393 515.359 295.657 531.476 285.379C547.593 275.1 560.735 260.649 569.557 243.504C578.378 226.359 582.561 207.138 581.678 187.807C580.795 168.477 574.878 149.733 564.532 133.494C554.186 117.255 539.784 104.106 522.799 95.3921C516.972 92.2753 510.822 89.8288 504.462 88.0976C493.339 85.3988 482.016 83.639 470.608 82.8361C466.611 82.8361 447.099 82.8361 443.102 82.8361L99.5 82.8361L99.5 131.027L440.869 131.027Z" fill="#F5F5F5"/>
            <path d="M466.964 131.027L440.869 131.027L99.5 131.027L99.5 82.8361L443.102 82.8361L470.608 82.8361C482.016 83.639 493.339 85.3988 504.462 88.0976C510.822 89.8288 516.972 92.2753 522.799 95.3921C539.784 104.106 554.186 117.255 564.532 133.494C574.878 149.733 580.795 168.477 581.678 187.807C582.561 207.138 578.378 226.359 569.557 243.504C560.735 260.649 547.593 275.1 531.476 285.379C515.359 295.657 496.847 301.393 477.834 301.999C458.821 302.605 439.992 298.059 423.274 288.827C406.556 279.595 392.55 266.009 382.692 249.46C372.833 232.911 367.475 213.993 367.166 194.645L415.008 194.645C415.508 205.029 418.662 215.101 424.157 223.867C429.653 232.634 437.3 239.79 446.345 244.631C455.39 249.472 465.519 251.831 475.733 251.473C485.947 251.115 495.893 248.054 504.589 242.592C513.286 237.13 520.431 229.455 525.321 220.325C530.211 211.195 532.676 200.926 532.474 190.531C532.271 180.136 529.407 169.975 524.165 161.05C518.923 152.124 511.483 144.744 502.581 139.637C497.88 137.299 492.957 135.456 487.888 134.136C480.979 132.685 473.992 131.646 466.964 131.027Z" fill="#F5F5F5"/>
          </svg>
          <img class="welcome-hand" src="{{asset('img/hand.png')}}" alt="cyber">
          <img class="welcome-hand red-hand" src="{{asset('img/hand-red.png')}}" alt="cyber">
        </div>
      </div>
    </article>

    <section class="whywe-section">
      <div class="container whywe-container">
        <div class="whywe-inner">
          <h2 data-table="texts" data-caption="whywe-title" class="whywe-title">{{$home['whywe-title']}}</h2>
          <ul class="whywe-list">
            <li class="whywe-list-item">
              <div class="whywe-list-icon escort">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g filter="url(#filter0_d_3119_1141)">
                    <path d="M35.3008 23.4944C35.3724 22.9216 35.4261 22.3487 35.4261 21.7401C35.4261 21.1315 35.3724 20.5586 35.3008 19.9858L39.078 17.0321C39.4181 16.7636 39.5076 16.2802 39.2928 15.8864L35.7125 9.69257C35.4977 9.29874 35.0144 9.15553 34.6206 9.29874L30.1632 11.0889C29.2323 10.3728 28.2298 9.78208 27.1379 9.33455L26.4576 4.59072C26.4039 4.16109 26.028 3.83887 25.5804 3.83887H18.42C17.9724 3.83887 17.5965 4.16109 17.5428 4.59072L16.8625 9.33455C15.7706 9.78208 14.7681 10.3907 13.8372 11.0889L9.37983 9.29874C8.9681 9.13763 8.50267 9.29874 8.28786 9.69257L4.70761 15.8864C4.47489 16.2802 4.5823 16.7636 4.92242 17.0321L8.69958 19.9858C8.62798 20.5586 8.57427 21.1494 8.57427 21.7401C8.57427 22.3308 8.62798 22.9216 8.69958 23.4944L4.92242 26.4481C4.5823 26.7166 4.49279 27.2 4.70761 27.5938L8.28786 33.7876C8.50267 34.1815 8.986 34.3247 9.37983 34.1815L13.8372 32.3913C14.7681 33.1074 15.7706 33.6981 16.8625 34.1457L17.5428 38.8895C17.5965 39.3191 17.9724 39.6413 18.42 39.6413H25.5804C26.028 39.6413 26.4039 39.3191 26.4576 38.8895L27.1379 34.1457C28.2298 33.6981 29.2323 33.0895 30.1632 32.3913L34.6206 34.1815C35.0323 34.3426 35.4977 34.1815 35.7125 33.7876L39.2928 27.5938C39.5076 27.2 39.4181 26.7166 39.078 26.4481L35.3008 23.4944ZM22.0002 28.0055C18.5453 28.0055 15.7348 25.195 15.7348 21.7401C15.7348 18.2852 18.5453 15.4747 22.0002 15.4747C25.4551 15.4747 28.2656 18.2852 28.2656 21.7401C28.2656 25.195 25.4551 28.0055 22.0002 28.0055Z" fill="white"/>
                  </g>
                  <defs>
                    <filter id="filter0_d_3119_1141" x="-3.4165" y="-2.16113" width="50.8254" height="51.8027" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                      <feOffset dy="2"/>
                      <feGaussianBlur stdDeviation="4"/>
                      <feComposite in2="hardAlpha" operator="out"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0.113725 0 0 0 0 0.113725 0 0 0 0 0.113725 0 0 0 0.25 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3119_1141"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3119_1141" result="shape"/>
                    </filter>
                  </defs>
                </svg>
              </div>
              <h3 data-table="texts" data-caption="whywe-escort-title" class="whywe-list-title">{{$home['whywe-escort-title']}}</h3>
              <p data-table="texts" data-caption="whywe-escort-subtitle" class="whywe-list-subtitle">{{$home['whywe-escort-subtitle']}}</p>
            </li>
            <li class="whywe-list-item">
              <div class="whywe-list-icon">
                <div class="equalizer">
                  <div class="equalizer-item"></div>
                  <div class="equalizer-item"></div>
                  <div class="equalizer-item"></div>
                </div>
              </div>
              <h3 data-table="texts" data-caption="whywe-effect-title" class="whywe-list-title">{{$home['whywe-effect-title']}}</h3>
              <p data-table="texts" data-caption="whywe-effect-subtitle" class="whywe-list-subtitle">{{$home['whywe-effect-subtitle']}}</p>
            </li>
            <li class="whywe-list-item">
              <div class="whywe-list-icon">
                <svg width="56" height="52" viewBox="0 0 56 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g filter="url(#filter0_d_3119_80)">
                    <path d="M29.6991 7.53824L19.7805 17.4885C19.1181 18.1531 18.7421 19.0691 18.7421 20.021V37.9639C18.7421 39.9395 20.3534 41.556 22.3228 41.556H38.436C39.8683 41.556 41.1573 40.6939 41.7302 39.3828L47.5668 25.7146C49.0707 22.1583 46.4747 18.207 42.6254 18.207H32.5099L34.2108 9.98091C34.3898 9.08287 34.1212 8.16686 33.4767 7.52028C32.4204 6.47855 30.7375 6.47855 29.6991 7.53824ZM11.5807 41.556C13.5501 41.556 15.1614 39.9395 15.1614 37.9639V23.5952C15.1614 21.6195 13.5501 20.003 11.5807 20.003C9.61132 20.003 8 21.6195 8 23.5952V37.9639C8 39.9395 9.61132 41.556 11.5807 41.556Z" fill="white"/>
                  </g>
                  <defs>
                    <filter id="filter0_d_3119_80" x="0" y="0.741211" width="56" height="50.8145" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                      <feOffset dy="2"/>
                      <feGaussianBlur stdDeviation="4"/>
                      <feComposite in2="hardAlpha" operator="out"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0.113725 0 0 0 0 0.113725 0 0 0 0 0.113725 0 0 0 0.25 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3119_80"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3119_80" result="shape"/>
                    </filter>
                  </defs>
                </svg>
              </div>
              <h3 data-table="texts" data-caption="whywe-list-title" class="whywe-list-title">{{$home['whywe-client-title']}}</h3>
              <p data-table="texts" data-caption="whywe-list-subtitle" class="whywe-list-subtitle">{{$home['whywe-client-subtitle']}}</p>
            </li>
          </ul>
          <h2 data-table="texts" data-caption="advantages-title" class="advantages-title">{!! $home['advantages-title'] !!}</h2>
          <ul class="advantages-list">
            @foreach ($home['advantages'] as $advantage)
              <li class="advantages-list-item">
                <svg width="24" height="13" viewBox="0 0 24 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.2999 0.300285C16.9099 -0.0897146 16.2799 -0.0897146 15.8899 0.300285L10.2499 5.94028L11.6599 7.35029L17.2999 1.70029C17.6799 1.32029 17.6799 0.680285 17.2999 0.300285ZM21.5399 0.290285L11.6599 10.1703L8.17989 6.70028C7.78989 6.31029 7.15989 6.31029 6.76989 6.70028C6.37989 7.09028 6.37989 7.72028 6.76989 8.11028L10.9499 12.2903C11.3399 12.6803 11.9699 12.6803 12.3599 12.2903L22.9499 1.71029C23.3399 1.32029 23.3399 0.690285 22.9499 0.300285H22.9399C22.5599 -0.0997146 21.9299 -0.0997148 21.5399 0.290285ZM1.11989 8.12029L5.29989 12.3003C5.68989 12.6903 6.31989 12.6903 6.70989 12.3003L7.40989 11.6003L2.52989 6.70028C2.13989 6.31029 1.50989 6.31029 1.11989 6.70028C0.729893 7.09028 0.729893 7.73029 1.11989 8.12029Z" fill="#10B981"/>
                </svg>
                <div data-table="advantages" data-advantage-id="{{$advantage->id}}">{{$advantage->content}}</div>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="section-joiner">
        <div class="section-joiner-item"><i></i></div>
        <div class="section-joiner-item"><i></i></div>
        <div class="section-joiner-item"><i></i></div>
        <div class="section-joiner-item"><i></i></div>
        <div class="section-joiner-item"><i></i></div>
        <div class="section-joiner-item"><i></i></div>
        <div class="section-joiner-item"><i></i></div>
        <div class="section-joiner-item"><i></i></div>
        <div class="section-joiner-item"><i></i></div>
        <div class="section-joiner-item"><i></i></div>
        <div class="section-joiner-item"><i></i></div>
        <div class="section-joiner-item"><i></i></div>
        <div class="section-joiner-item"><i></i></div>
        <div class="section-joiner-item"><i></i></div>
        <div class="section-joiner-item"><i></i></div>
      </div>
    </div>

    <section class="products-section">
      <div class="container whywe-container">
        <div class="products-section-inner">
          <h2 data-table="texts" data-caption="products-section-title" class="products-section-title">{{$home['products-section-title']}}</h2>
          <p data-table="texts" data-caption="products-section-subtitle" class="products-section-subtitle">{{$home['products-section-subtitle']}}</p>
          <ul class="products-list">
            @foreach ($home['products'] as $product)
              <li class="products-list-item">
                <x-product :product="$product" />
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </section>

    <section class="feedback-section">
      <div class="container feedback-section-container">
        <h2 data-table="texts" data-caption="feedback-title" class="feedback-section-title">{{$header['feedback-title']}}</h2>
        <p data-table="texts" data-caption="feedback-text" class="feedback-section-text">{{$header['feedback-text']}}</p>
        <form class="feedback-form" action="{{route('feedback')}}" method="post">
          @csrf
          <label class="feedback-label">
            <input class="feedback-input" name="name" type="text" placeholder="Ваше имя" autocomplete="off">
          </label>
          <label class="feedback-label">
            <input class="feedback-input" id="home-phone" name="phone" type="number" placeholder="Ваш телефон" autocomplete="off">
          </label>
          <div class="feedback-btn-wrap">
            <button class="feedback-form-btn feedback-submit-btn">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.88004 2.04977C13.06 2.44977 15.55 4.93976 15.95 8.11977C16.01 8.62977 16.44 8.99977 16.94 8.99977C16.98 8.99977 17.02 8.99977 17.06 8.98977C17.61 8.91977 18 8.41977 17.93 7.86977C17.42 3.77977 14.21 0.569766 10.12 0.0597656C9.57004 -0.000234421 9.07004 0.389766 9.01004 0.939766C8.94004 1.48977 9.33004 1.98977 9.88004 2.04977ZM10.26 4.15977C9.73004 4.01977 9.18004 4.33977 9.04004 4.87977C8.90004 5.41977 9.22004 5.95977 9.76004 6.09977C10.81 6.36977 11.63 7.18977 11.91 8.24977C12.03 8.69977 12.43 8.99977 12.88 8.99977C12.96 8.99977 13.05 8.98977 13.13 8.96977C13.66 8.82977 13.98 8.27977 13.85 7.74977C13.38 5.97977 12.01 4.60977 10.26 4.15977ZM16.23 12.2598L13.69 11.9698C13.08 11.8998 12.48 12.1098 12.05 12.5398L10.21 14.3798C7.38004 12.9398 5.06004 10.6298 3.62004 7.78977L5.47004 5.93976C5.90004 5.50977 6.11004 4.90977 6.04004 4.29977L5.75004 1.77977C5.63004 0.769766 4.78004 0.00976562 3.76004 0.00976562H2.03004C0.900041 0.00976562 -0.0399593 0.949766 0.0300407 2.07977C0.560041 10.6198 7.39004 17.4398 15.92 17.9698C17.05 18.0398 17.99 17.0998 17.99 15.9698V14.2398C18 13.2298 17.24 12.3798 16.23 12.2598Z" fill="white"/>
              </svg>
              <span data-table="texts" data-caption="feedback-submit-btn" class="text">{{$header['feedback-submit-btn']}}</span>
            </button>
            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            <div class="feedback-form-btn feedback-fail-msg">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 5C10.55 5 11 5.45 11 6V10C11 10.55 10.55 11 10 11C9.45 11 9 10.55 9 10V6C9 5.45 9.45 5 10 5ZM9.99 0C4.47 0 0 4.48 0 10C0 15.52 4.47 20 9.99 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 9.99 0ZM10 18C5.58 18 2 14.42 2 10C2 5.58 5.58 2 10 2C14.42 2 18 5.58 18 10C18 14.42 14.42 18 10 18ZM11 15H9V13H11V15Z" fill="white"/>
              </svg>
              {{$header['feedback-fail-msg']}}
            </div>
            <div class="feedback-form-btn feedback-success-msg">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 0H10C9.45004 0 9.00004 0.45 9.00004 1V10L12 7H17C17.55 7 18 6.55 18 6V1C18 0.45 17.55 0 17 0ZM16.23 12.26L13.69 11.97C13.08 11.9 12.48 12.11 12.05 12.54L10.21 14.38C7.38004 12.94 5.06004 10.63 3.62004 7.79L5.47004 5.94C5.90004 5.51 6.11004 4.91 6.04004 4.3L5.75004 1.78C5.63004 0.77 4.78004 0.00999999 3.76004 0.00999999H2.03004C0.900041 0.00999999 -0.0399593 0.95 0.0300407 2.08C0.560041 10.62 7.39004 17.44 15.92 17.97C17.05 18.04 17.99 17.1 17.99 15.97V14.24C18 13.23 17.24 12.38 16.23 12.26Z" fill="white"/>
              </svg>
              {{$header['feedback-success-msg']}}
            </div>
          </div>
        </form>
        <img class="feedback-section-hand" src="{{asset('img/hand.png')}}" alt="cyber">
        <img class="feedback-section-hand yellow-hand" src="{{asset('img/hand-yellow.png')}}" alt="cyber">
      </div>
    </section>

    <section class="projects-section">
      <div class="container projects-container">
        <h2 data-table="texts" data-caption="projects-section-title" class="projects-section-title">{{$home['projects-section-title']}}</h2>
        <div data-table="texts" data-caption="projects-section-subtitle" class="projects-section-subtitle">{!! $home['projects-section-subtitle'] !!}</div>
        <ul class="products-list">
          @foreach ($home['projects'] as $project)
            <li class="products-list-item">
              <x-project :project="$project" />
            </li>
          @endforeach
        </ul>
        <a class="all-projects-link" href="{{route('projects')}}">
          <div data-table="texts" data-caption="all-projects-link">{{$home['all-projects-link']}}</div>
          <div class="all-projects-icon">
            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.498515 2.41773L4.08005 5.99927L0.498515 9.58081C0.138516 9.94081 0.138516 10.5223 0.498516 10.8823C0.858515 11.2423 1.44005 11.2423 1.80005 10.8823L6.03698 6.64542C6.39698 6.28542 6.39698 5.70388 6.03698 5.34388L1.80005 1.10696C1.44005 0.746961 0.858515 0.746961 0.498515 1.10696C0.147746 1.46696 0.138515 2.05773 0.498515 2.41773Z" fill="white"/>
            </svg>
          </div>
        </a>
      </div>
    </section>

    <section class="companies">
      <div class="container companies-container">
        <h2 data-table="texts" data-caption="companies-title" class="companies-title">{{$home['companies-title']}}</h2>
        <div class="owl-carousel admin-companies-carousel">
          @foreach ($home['companies'] as $company)
            <a data-table="companies" data-id="{{$company->id}}" data-logo="{{$company->logo}}" data-site="{{$company->site}}" data-title="{{$company->title}}" data-category="{{$company->category}}" data-src="{{asset('img')}}" class="company" href="{{$company->site}}" target="_blank" tabindex="-1">
              <img class="company-logo" src="{{asset('img/companies/' . $company->logo)}}" alt="{{$company->title}}">
              <h3 class="company-title">{{$company->title}}</h3>
              <p class="company-category">{{$company->category}}</p>
            </a>
          @endforeach
        </div>
      </div>
    </section>
  </main>
@endsection