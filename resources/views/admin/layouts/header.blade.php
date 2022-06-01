<header class="header">
  <div class="container header-container">
    <div class="header-top">
      <a class="home-link" href="{{route('admin.home')}}">
        <img class="main-logo" src="{{asset('img/logo.svg')}}" alt="">
      </a>

      <ul class="header-grid">
        <li class="header-grid-item">
          <a data-table="texts" data-caption="email" class="header-grid-link" href="mailto:{{str_replace(' ', '', $header['email-2'])}}">{{$header['email-2']}}</a>
        </li>
        <li class="header-grid-item">
          <a data-table="texts" data-caption="phone" class="header-grid-link" href="tel:{{str_replace(' ', '', $header['phone'])}}">{{$header['phone']}}</a>
        </li>
        <li class="header-grid-item">
          <a data-table="texts" data-caption="address" class="header-grid-link" target="_blank" href="http://maps.google.com/?q={{str_replace(' ', '', $header['address'])}}">{{$header['address']}}</a>
        </li>
      </ul>

      <div class="feedback">
        <button class="button button--red feedback-open-btn" type="button">
          <svg class="feedback-btn-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.88004 2.04977C13.06 2.44977 15.55 4.93977 15.95 8.11977C16.01 8.62977 16.44 8.99977 16.94 8.99977C16.98 8.99977 17.02 8.99977 17.06 8.98977C17.61 8.91977 18 8.41977 17.93 7.86977C17.42 3.77977 14.21 0.569766 10.12 0.0597656C9.57004 -0.000234421 9.07004 0.389766 9.01004 0.939766C8.94004 1.48977 9.33004 1.98977 9.88004 2.04977ZM10.26 4.15977C9.73004 4.01977 9.18004 4.33977 9.04004 4.87977C8.90004 5.41977 9.22004 5.95977 9.76004 6.09977C10.81 6.36977 11.63 7.18977 11.91 8.24977C12.03 8.69977 12.43 8.99977 12.88 8.99977C12.96 8.99977 13.05 8.98977 13.13 8.96977C13.66 8.82977 13.98 8.27977 13.85 7.74977C13.38 5.97977 12.01 4.60977 10.26 4.15977ZM16.23 12.2598L13.69 11.9698C13.08 11.8998 12.48 12.1098 12.05 12.5398L10.21 14.3798C7.38004 12.9398 5.06004 10.6298 3.62004 7.78977L5.47004 5.93976C5.90004 5.50976 6.11004 4.90977 6.04004 4.29977L5.75004 1.77977C5.63004 0.769766 4.78004 0.00976562 3.76004 0.00976562H2.03004C0.900041 0.00976562 -0.0399593 0.949766 0.0300407 2.07977C0.560041 10.6198 7.39004 17.4398 15.92 17.9698C17.05 18.0398 17.99 17.0998 17.99 15.9698V14.2398C18 13.2298 17.24 12.3798 16.23 12.2598Z" fill="white"/>
          </svg>
          <span data-table="texts" data-caption="feedback">{{$header['feedback']}}</span>
        </button>

        <div class="feedback-modal">
          <svg class="feedback-modal-bg" width="848" height="719" viewBox="0 0 848 719" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.3">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M721.447 245.157C739.228 256.874 755.712 270.459 770.629 285.687C773.215 288.318 782.961 300.202 785.276 303.625C804.693 331.519 816.264 364.256 818.781 398.426C821.299 432.596 814.673 466.95 799.593 497.909C784.512 528.868 761.53 555.301 733.038 574.454C704.546 593.607 671.587 604.78 637.594 606.809C603.6 608.838 569.816 601.65 539.76 585.992C509.703 570.334 484.473 546.779 466.697 517.781C448.922 488.783 439.251 455.403 438.692 421.115C438.132 386.828 446.705 352.889 463.518 322.832L404.183 288.575C381.245 328.922 369.235 374.525 369.373 420.745C369.512 466.966 381.795 512.153 404.973 551.711C428.151 591.269 461.395 623.786 501.325 645.952C541.256 668.119 586.446 679.145 632.298 677.908C678.151 676.672 723.03 663.217 762.369 638.912C801.708 614.607 834.104 580.32 856.259 539.54C878.415 498.759 889.541 452.94 888.504 406.744C887.468 360.548 874.306 315.623 850.359 276.541C841.965 263.515 832.665 251.113 822.528 239.426C804.375 220.806 784.411 204.071 762.929 189.467C755.652 185.266 730.337 169.323 722.78 164.961L196.804 -138.712L162.073 -78.5563L686.93 224.47C692.808 227.863 716.376 241.66 721.447 245.157ZM632.165 319.325C636.504 321.83 659.034 334.838 663.232 337.262C671.174 342.829 678.779 348.865 686.007 355.341C691.136 360.394 695.732 365.97 699.723 371.982C706.814 384.174 710.604 398.064 710.716 412.282C710.829 426.499 707.261 440.552 700.365 453.054C693.47 465.555 683.484 476.074 671.394 483.57C659.304 491.066 645.527 495.282 631.424 495.801C617.321 496.32 603.378 493.124 590.973 486.529C578.567 479.934 568.127 470.167 560.683 458.193C553.239 446.219 549.049 432.451 548.525 418.249C548.002 404.047 551.163 389.901 557.698 377.207L500.742 344.323C487.824 367.546 481.214 393.726 481.588 420.184C481.962 446.641 489.307 472.425 502.871 494.895C516.435 517.365 535.731 535.713 558.782 548.06C581.832 560.408 607.81 566.311 634.055 565.165C660.3 564.02 685.868 555.866 708.141 541.54C730.415 527.214 748.593 507.23 760.814 483.635C773.036 460.039 778.861 433.681 777.694 407.258C776.527 380.835 768.409 355.297 754.172 333.26C749.375 325.548 743.732 318.411 737.35 311.981C725.961 301.126 713.689 291.251 700.659 282.455C695.901 279.708 672.671 266.296 667.913 263.549L258.853 27.3778L225.764 84.6892L632.165 319.325Z" fill="#F5F5F5"/>
              <path d="M663.232 337.262L632.165 319.325L225.764 84.6892L258.853 27.3778L667.913 263.549L700.659 282.455C713.689 291.251 725.961 301.126 737.35 311.981C743.732 318.411 749.375 325.548 754.172 333.26C768.409 355.297 776.527 380.835 777.694 407.258C778.861 433.681 773.036 460.039 760.814 483.635C748.593 507.23 730.415 527.214 708.141 541.54C685.868 555.866 660.3 564.02 634.055 565.165C607.81 566.311 581.832 560.408 558.782 548.06C535.731 535.713 516.435 517.365 502.871 494.895C489.307 472.425 481.962 446.641 481.588 420.184C481.214 393.726 487.824 367.546 500.742 344.323L557.698 377.207C551.163 389.901 548.002 404.047 548.525 418.249C549.049 432.451 553.239 446.219 560.683 458.193C568.127 470.167 578.567 479.934 590.973 486.529C603.378 493.124 617.321 496.32 631.424 495.801C645.527 495.282 659.304 491.066 671.394 483.57C683.484 476.074 693.47 465.555 700.365 453.054C707.261 440.552 710.829 426.499 710.716 412.282C710.604 398.064 706.814 384.174 699.723 371.982C695.732 365.97 691.136 360.394 686.007 355.341C678.779 348.865 671.174 342.829 663.232 337.262Z" fill="#F5F5F5"/>
            </g>
          </svg>

          <div class="feedback-modal-inner">
            <div class="feedback-modal-top">
              <h2 data-table="texts" data-caption="feedback-title" class="feedback-modal-title">{{$header['feedback-title']}}</h2>
              <p data-table="texts" data-caption="feedback-text" class="feedback-modal-text">{{$header['feedback-text']}}</p>
              <svg class="feedback-modal-logo" width="110" height="69" viewBox="0 0 110 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M54.4254 46.1818C52.3258 46.0573 50.2449 45.7085 48.2168 45.1412C47.8656 45.0437 46.4452 44.5072 46.0781 44.3283C43.0395 42.8978 40.4331 40.6636 38.5302 37.8584C36.6273 35.0532 35.4975 31.7796 35.2585 28.3785C35.0195 24.9775 35.6801 21.5733 37.1713 18.5206C38.6626 15.468 40.9301 12.8784 43.7376 11.0216C46.5451 9.16483 49.79 8.10877 53.1343 7.96341C56.4786 7.81805 59.8 8.58871 62.7526 10.1951C65.7052 11.8015 68.181 14.1849 69.9221 17.0971C71.6633 20.0093 72.6061 23.3438 72.6524 26.7532H79.4196C79.3891 22.1583 78.1643 17.6536 75.8698 13.6974C73.5753 9.74118 70.293 6.47471 66.3568 4.23027C62.4206 1.98583 57.971 0.84353 53.4607 0.919579C48.9504 0.995629 44.5404 2.28732 40.6793 4.66323C36.8181 7.03914 33.6438 10.4145 31.479 14.4459C29.3143 18.4772 28.2365 23.0208 28.3553 27.6142C28.4742 32.2077 29.7853 36.6871 32.1554 40.5968C34.5255 44.5064 37.87 47.7068 41.8485 49.8724C43.2098 50.5737 44.6178 51.1768 46.0621 51.677C48.5344 52.3749 51.0686 52.8215 53.6274 53.0102C54.4573 53.0102 57.41 53.124 58.2719 53.124H109.984V46.2468H58.3996C57.7293 46.2468 55.0319 46.2305 54.4254 46.1818ZM58.3996 35.4026C57.9048 35.4026 55.3352 35.4026 54.8564 35.4026C53.9021 35.3184 52.9534 35.1772 52.0154 34.9799C51.3271 34.8005 50.6586 34.5499 50.0203 34.232C48.8116 33.5376 47.8015 32.5342 47.0897 31.3207C46.3779 30.1073 45.9891 28.7257 45.9615 27.3124C45.934 25.8991 46.2687 24.503 46.9327 23.2617C47.5966 22.0204 48.5669 20.977 49.7476 20.2343C50.9284 19.4917 52.2788 19.0755 53.6657 19.0269C55.0526 18.9782 56.4279 19.2988 57.656 19.957C58.8841 20.6152 59.9225 21.5882 60.6686 22.7801C61.4148 23.9719 61.843 25.3413 61.9109 26.7532H68.4068C68.365 24.1226 67.6375 21.5506 66.2988 19.3005C64.9602 17.0505 63.0585 15.2033 60.7886 13.9482C58.5187 12.693 55.962 12.075 53.3805 12.1574C50.7989 12.2398 48.2853 13.0196 46.0969 14.4171C43.9086 15.8145 42.1241 17.7793 40.9264 20.1103C39.7287 22.4413 39.1607 25.0546 39.2805 27.6828C39.4004 30.3109 40.2039 32.8594 41.6086 35.0672C43.0134 37.275 44.969 39.0628 47.2751 40.2475C48.0663 40.6713 48.9014 41.0039 49.7649 41.2393C51.2752 41.6062 52.8127 41.8455 54.3616 41.9546C54.9042 41.9546 57.5537 41.9546 58.0963 41.9546H109.92V35.4026H58.3996ZM24.244 53.0915H17.4289V7.89371H7.46953V1.00023H24.244V53.0915ZM0 11.4217V18.0876H7.46953V53.0915H14.0293V11.4217H0Z" fill="#D20A11"/>
                <path d="M54.8564 35.4026H58.3996H109.92V41.9546H58.0963H54.3616C52.8127 41.8455 51.2752 41.6062 49.7649 41.2393C48.9014 41.0039 48.0663 40.6713 47.2751 40.2475C44.969 39.0628 43.0134 37.275 41.6086 35.0672C40.2039 32.8594 39.4004 30.3109 39.2805 27.6828C39.1607 25.0546 39.7287 22.4413 40.9264 20.1103C42.1241 17.7793 43.9086 15.8145 46.0969 14.4171C48.2853 13.0196 50.7989 12.2398 53.3805 12.1574C55.962 12.075 58.5187 12.693 60.7886 13.9482C63.0585 15.2033 64.9602 17.0505 66.2988 19.3005C67.6375 21.5506 68.365 24.1226 68.4068 26.7532H61.9109C61.843 25.3413 61.4148 23.9719 60.6686 22.7801C59.9225 21.5882 58.8841 20.6152 57.656 19.957C56.4279 19.2988 55.0526 18.9782 53.6657 19.0269C52.2788 19.0755 50.9284 19.4917 49.7476 20.2343C48.5669 20.977 47.5966 22.0204 46.9327 23.2617C46.2687 24.503 45.934 25.8991 45.9615 27.3124C45.9891 28.7257 46.3779 30.1073 47.0897 31.3207C47.8015 32.5342 48.8116 33.5376 50.0203 34.232C50.6586 34.5499 51.3271 34.8005 52.0154 34.9799C52.9534 35.1772 53.9021 35.3184 54.8564 35.4026Z" fill="#D20A11"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M92.8428 1.48777C92.2581 1.48349 91.6782 1.59657 91.1363 1.82058C90.5944 2.04459 90.1012 2.37513 89.6847 2.79332C89.2682 3.21152 88.9367 3.70917 88.7091 4.25788C88.4814 4.80659 88.3621 5.39561 88.3579 5.99129C88.3579 7.20295 88.8304 8.36498 89.6715 9.22175C90.5126 10.0785 91.6534 10.5598 92.8428 10.5598C94.0323 10.5598 95.1731 10.0785 96.0142 9.22175C96.8552 8.36498 97.3278 7.20295 97.3278 5.99129C97.3278 5.39437 97.2114 4.80339 96.9852 4.25272C96.7591 3.70204 96.4277 3.20266 96.0104 2.78361C95.593 2.36456 95.0981 2.0342 94.5543 1.81174C94.0105 1.58928 93.4288 1.47915 92.8428 1.48777ZM92.8428 9.81197C92.1062 9.80555 91.388 9.57739 90.7783 9.15618C90.1687 8.73498 89.695 8.13955 89.4167 7.44478C89.1385 6.75002 89.0681 5.98696 89.2145 5.25157C89.3609 4.51618 89.7175 3.84131 90.2395 3.31185C90.7615 2.7824 91.4255 2.422 92.1481 2.27599C92.8706 2.12998 93.6194 2.20489 94.3002 2.49128C94.9811 2.77767 95.5636 3.26275 95.9745 3.88553C96.3854 4.5083 96.6064 5.24094 96.6095 5.99129C96.6117 6.49501 96.5156 6.99414 96.3268 7.45973C96.1381 7.92532 95.8605 8.3481 95.5101 8.70352C95.1597 9.05895 94.7434 9.33996 94.2856 9.53023C93.8277 9.72051 93.3373 9.81628 92.8428 9.81197Z" fill="#D20A11"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M94.5507 7.20991C94.5507 6.70591 94.4709 6.23442 93.9123 6.05558C94.136 6.00365 94.3355 5.87537 94.4778 5.69201C94.62 5.50866 94.6965 5.28126 94.6944 5.04757C94.6935 4.8593 94.6535 4.67336 94.577 4.50198C94.5005 4.3306 94.3892 4.17768 94.2505 4.05326C94.1118 3.92885 93.9487 3.83578 93.7722 3.78018C93.5956 3.72457 93.4094 3.70769 93.226 3.73065H91.2788V8.23417H92.0928V6.38074H92.7312C93.6569 6.38074 93.7367 6.81972 93.7367 7.20991C93.7367 7.97405 93.7367 8.12037 93.9123 8.23417H94.7263C94.5507 8.05533 94.6146 7.89276 94.5507 7.20991ZM93.0504 5.73041H92.0928V4.31595H92.9068C93.4814 4.31595 93.8644 4.49479 93.8644 5.04757C93.8644 5.32396 93.7367 5.73041 93.0504 5.73041Z" fill="#D20A11"/>
                <path d="M8.6982 61.3019H7.46924V59.3672H10.805V67.7564H8.6982V61.3019Z" fill="#D20A11"/>
                <path d="M18.3226 67.382C17.668 67.8133 16.899 68.029 16.12 67.9998C15.0121 67.9314 13.9715 67.4349 13.2107 66.6116C12.45 65.7882 12.0264 64.7002 12.0264 63.5695C12.0264 62.4388 12.45 61.3507 13.2107 60.5274C13.9715 59.7041 15.0121 59.2075 16.12 59.1391C16.9137 59.1271 17.6925 59.3594 18.3545 59.8057V62.2444C18.1265 61.9406 17.8349 61.6924 17.5007 61.518C17.1666 61.3436 16.7985 61.2474 16.4233 61.2364C16.128 61.2438 15.8374 61.3133 15.5698 61.4407C15.3022 61.5681 15.0634 61.7506 14.8685 61.9766C14.6735 62.2027 14.5267 62.4674 14.4372 62.7542C14.3477 63.0409 14.3174 63.3434 14.3484 63.6426C14.3237 63.9333 14.3593 64.2261 14.4529 64.5018C14.5465 64.7776 14.696 65.0303 14.8917 65.2434C15.0873 65.4565 15.3248 65.6253 15.5886 65.7388C15.8525 65.8524 16.1369 65.9082 16.4233 65.9025C16.7886 65.8903 17.1478 65.8033 17.4796 65.6469C17.8113 65.4905 18.1088 65.2678 18.3545 64.9921L18.3226 67.382Z" fill="#D20A11"/>
                <path d="M20.4776 61.7568C20.7143 61.7568 20.9457 61.8284 21.1426 61.9623C21.3394 62.0963 21.4929 62.2868 21.5835 62.5096C21.6741 62.7324 21.6978 62.9776 21.6516 63.2141C21.6054 63.4506 21.4914 63.6679 21.324 63.8384C21.1566 64.009 20.9433 64.1251 20.7111 64.1721C20.4789 64.2192 20.2382 64.195 20.0195 64.1027C19.8007 64.0105 19.6138 63.8542 19.4823 63.6536C19.3507 63.4531 19.2805 63.2174 19.2805 62.9762C19.2847 62.6541 19.4121 62.3464 19.6357 62.1186C19.8593 61.8909 20.1614 61.761 20.4776 61.7568ZM20.4776 65.5287C20.7143 65.5287 20.9457 65.6003 21.1426 65.7342C21.3394 65.8682 21.4929 66.0587 21.5835 66.2815C21.6741 66.5043 21.6978 66.7495 21.6516 66.986C21.6054 67.2225 21.4914 67.4398 21.324 67.6103C21.1566 67.7809 20.9433 67.897 20.7111 67.944C20.4789 67.9911 20.2382 67.9669 20.0195 67.8746C19.8007 67.7824 19.6138 67.6261 19.4823 67.4255C19.3507 67.225 19.2805 66.9893 19.2805 66.7481C19.2847 66.426 19.4121 66.1183 19.6357 65.8905C19.8593 65.6628 20.1614 65.5329 20.4776 65.5287Z" fill="#D20A11"/>
                <path d="M26.2706 66.5851C24.866 66.5851 22.4241 66.1787 22.4241 63.2359C22.4245 62.7474 22.5293 62.2649 22.7312 61.8219C22.9332 61.3788 23.2273 60.9858 23.5933 60.6702C23.9594 60.3547 24.3884 60.124 24.8507 59.9943C25.3131 59.8646 25.7975 59.839 26.2706 59.9192V59.0088H28.537V59.9192C29.0047 59.8398 29.4838 59.8639 29.9416 59.9898C30.3994 60.1157 30.8252 60.3406 31.1902 60.6491C31.5551 60.9575 31.8505 61.3424 32.0564 61.7776C32.2623 62.2127 32.3739 62.6879 32.3835 63.1709C32.3835 66.1136 29.9415 66.5363 28.537 66.5201V67.6907H26.2706V66.5851ZM26.4781 61.5451C26.0421 61.5451 25.6239 61.7215 25.3156 62.0355C25.0073 62.3496 24.8341 62.7755 24.8341 63.2197C24.8341 63.6638 25.0073 64.0897 25.3156 64.4038C25.6239 64.7178 26.0421 64.8942 26.4781 64.8942V61.5451ZM28.4252 64.8942C28.8612 64.8942 29.2794 64.7178 29.5877 64.4038C29.896 64.0897 30.0692 63.6638 30.0692 63.2197C30.0692 62.7755 29.896 62.3496 29.5877 62.0355C29.2794 61.7215 28.8612 61.5451 28.4252 61.5451V64.8942Z" fill="#D20A11"/>
                <path d="M33.1494 59.3672H36.5809C36.9435 59.3672 37.3026 59.4399 37.6376 59.5813C37.9726 59.7226 38.277 59.9298 38.5334 60.191C38.7898 60.4522 38.9932 60.7622 39.1319 61.1035C39.2707 61.4447 39.3421 61.8105 39.3421 62.1798C39.3421 62.5492 39.2707 62.915 39.1319 63.2562C38.9932 63.5975 38.7898 63.9075 38.5334 64.1687C38.277 64.4299 37.9726 64.6371 37.6376 64.7784C37.3026 64.9198 36.9435 64.9925 36.5809 64.9925H35.4318V67.7564H33.1494V59.3672ZM35.4318 63.1716H36.0542C37.0597 63.1716 37.1715 62.5538 37.1715 62.1961C37.1715 61.8384 37.0278 61.2369 36.0542 61.2369H35.3999L35.4318 63.1716Z" fill="#D20A11"/>
                <path d="M41.7686 59.3672H44.5298L47.4346 67.7564H44.9926L44.5298 66.3094H41.7686L41.3057 67.7564H38.8638L41.7686 59.3672ZM42.2155 64.4723H44.035L43.1093 61.3669L42.2155 64.4723Z" fill="#D20A11"/>
                <path d="M48.041 59.3672H50.3074V62.3912H53.0845V59.3672H55.3669V67.7564H53.0845V64.4072H50.3074V67.7564H48.041V59.3672Z" fill="#D20A11"/>
                <path d="M60.6347 64.4885C60.1072 64.5758 59.573 64.6138 59.0387 64.6023C56.2935 64.6023 56.1658 63.1879 56.1658 61.8059V59.3672H58.4481V61.5458C58.4481 62.1961 58.4481 62.8139 59.709 62.8139C59.9005 62.8139 60.124 62.8139 60.5709 62.8139V59.5623H62.8532V67.9515H60.6347V64.4885Z" fill="#D20A11"/>
                <path d="M66.3795 59.3672H69.1566L72.0455 67.7564H69.5716L69.1247 66.3094H66.3795L65.9326 67.7564H63.4587L66.3795 59.3672ZM66.8424 64.4723H68.6938L67.7681 61.3669L66.8424 64.4723Z" fill="#D20A11"/>
                <path d="M74.6957 59.3666V64.4067L77.8878 59.3666H80.1223V67.7558H77.8878V62.7321L74.6957 67.7558H72.4612V59.3666H74.6957ZM78.7337 57.5782C78.4973 58.0176 78.1406 58.3775 77.7071 58.6142C77.2735 58.8509 76.7818 58.9541 76.2917 58.9114C75.8019 58.9521 75.311 58.8479 74.8778 58.6115C74.4447 58.375 74.0877 58.0162 73.8498 57.5782L75.1585 57.0742C75.2687 57.2851 75.4331 57.4614 75.6341 57.5844C75.8351 57.7073 76.0652 57.7723 76.2997 57.7723C76.5342 57.7723 76.7643 57.7073 76.9653 57.5844C77.1663 57.4614 77.3307 57.2851 77.4409 57.0742L78.7337 57.5782Z" fill="#D20A11"/>
                <path d="M81.0796 59.92C81.9121 59.4204 82.8585 59.1514 83.8248 59.1396C85.6603 59.1396 87.0169 60.0989 87.0169 61.5134C87.0159 61.929 86.8877 62.3339 86.6503 62.6719C86.4129 63.0099 86.078 63.2641 85.6922 63.3993C86.1215 63.5235 86.497 63.7918 86.7577 64.1607C87.0185 64.5296 87.1492 64.9775 87.1286 65.4316C87.1286 67.0574 85.7081 68.0004 83.9365 68.0004C82.7531 68.022 81.608 67.5729 80.7444 66.7485L81.6861 65.1227C82.2163 65.6643 82.9171 65.9982 83.6652 66.0656C84.6388 66.0656 84.8622 65.4966 84.8622 65.1552C84.8622 64.8138 84.5271 64.2772 83.5535 64.2772H82.1808V62.6514H83.4736C84.5111 62.6514 84.6867 62.1637 84.6867 61.7897C84.6867 61.4158 84.2078 60.9443 83.5215 60.9443C82.9426 60.9651 82.3845 61.1697 81.9255 61.5296L81.0796 59.92Z" fill="#D20A11"/>
                <path d="M90.2091 59.3672V64.4072L93.4012 59.3672H95.6357V67.7564H93.4012V62.7326L90.2091 67.7564H87.9746V59.3672H90.2091Z" fill="#D20A11"/>
                <path d="M96.5134 59.3672H98.7958V62.3912H101.573V59.3672H103.855V67.7564H101.573V64.4072H98.7958V67.7564H96.5134V59.3672Z" fill="#D20A11"/>
                <path d="M105.004 59.3672H109.888V61.3832H107.271V67.7564H105.004V59.3672Z" fill="#D20A11"/>
              </svg>
            </div>

            <form class="feedback-form" action="{{route('feedback')}}" method="post">
              @csrf
              <label class="feedback-label">
                <input class="feedback-input" id="name" name="name" type="text" placeholder="Ваше имя" autofocus autocomplete="off">
              </label>
              <label class="feedback-label">
                <input class="feedback-input" id="phone" type="number" placeholder="Ваш телефон" autocomplete="off">
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

            <div class="feedback-modal-bottom">
              <a data-table="texts" data-caption="email" class="header-grid-link" href="mailto:{{str_replace(' ', '', $header['email'])}}">{{$header['email']}}</a>
              <a data-table="texts" data-caption="phone" class="header-grid-link" href="tel:{{str_replace(' ', '', $header['phone'])}}">{{$header['phone']}}</a>
            </div>
          </div>{{-- <<= feedback-modal-inner --}}
          <button class="feedback-modal-close" type="button">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.3 0.709727C12.91 0.319727 12.28 0.319727 11.89 0.709727L6.99997 5.58973L2.10997 0.699727C1.71997 0.309727 1.08997 0.309727 0.699971 0.699727C0.309971 1.08973 0.309971 1.71973 0.699971 2.10973L5.58997 6.99973L0.699971 11.8897C0.309971 12.2797 0.309971 12.9097 0.699971 13.2997C1.08997 13.6897 1.71997 13.6897 2.10997 13.2997L6.99997 8.40973L11.89 13.2997C12.28 13.6897 12.91 13.6897 13.3 13.2997C13.69 12.9097 13.69 12.2797 13.3 11.8897L8.40997 6.99973L13.3 2.10973C13.68 1.72973 13.68 1.08973 13.3 0.709727Z" fill="#1D1D1D"/>
            </svg>
          </button>
          <img class="feedback-modal-img" src="{{asset('img/hand.png')}}" alt="Рука">
        </div>{{-- <<= feedback-modal --}}
        <button class="feedback-close-btn" tabindex ="-1" type="button"></button>
      </div>{{-- <<= feedback --}}
    </div>{{-- <<= header-top --}}

    <nav class="header-navigation">
      <ul class="header-navigation-list">
        @foreach ($header['pages'] as $page)
          @if ($page->route == 'products')
            <li class="products-dropdown">
              <div class="header-navigation-item">
                <button data-table="pages" data-page-id="{{$page->id}}" data-route="products" class="header-navigation-link {{$route == 'admin.products.read' ? 'current' : ''}}" data-action="show" type="button">{{$page->title}}</button>
              </div>

              <ul class="products-dropdown-list">
                @if (count($header['products']) == 0)
                  <li data-table="pages" data-page-id="{{$page->id}}" data-route="products" class="products-dropdown-item">Продукты отсутсвуют</li>
                @endif
                @foreach ($header['products'] as $product)
                <li class="products-dropdown-item">
                  <a data-table="products" data-product-id="{{$product->id}}" class="products-dropdown-link" href="{{route('admin.products.read', $product->id)}}">{{$product->title}}</a>
                </li>
                @endforeach
              </ul>
              <button class="products-dropdown-close" data-action="hide" type="button" aria-label="Закрыть"></button>
            </li>
          @elseif($page->route == 'publications')
            <li class="header-navigation-item">
              <a data-table="pages" data-page-id="{{$page->id}}" data-route="{{$page->route}}" class="header-navigation-link {{$route == 'admin.publications'
              || $route == 'admin.publications.create'
              || $route == 'admin.publications.read'
              || $route == 'admin.publications.update' ? 'current' : ''}}" href="{{route('admin.publications')}}">{{$page->title}}</a>
            </li>
          @else
            <li class="header-navigation-item">
              <a data-table="pages" data-page-id="{{$page->id}}" data-route="{{$page->route}}" class="header-navigation-link {{$route == 'admin.' . $page->route ? 'current' : ''}}" href="{{route('admin.' . $page->route)}}">{{$page->title}}</a>
            </li>
          @endif
        @endforeach
      </ul>
    </nav>
  </div>{{-- <<= header-container --}}
</header>
