<!DOCTYPE html>
<html lang="en">
   <head>
     <title>ShowcaseAI - Prelaunch</title>
      <meta charset="utf-8">
      <?php $base_url = base_url(); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5TZFP6T7');</script>
      <!-- End Google Tag Manager -->

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Syne:wght@400..800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="<?= base_url('jv-assets/css/animate.css') ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" crossorigin="anonymous" />
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="shortcut icon" type="image/png" href="<?= base_url('prelaunch-assets/images/favicon.png') ?>">
      <link rel="stylesheet" type="text/css" href="<?= base_url('jv-assets/css/style.css') ?>">
      <link rel="stylesheet" type="text/css" href="<?= base_url('prelaunch-assets/css/style.css') ?>">
   </head>
   <body class="scOnlyPrelaunchPage">
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TZFP6T7"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->

      <div class="mainWrap_box">
         <!-- Banner -->
         <section class="sc_prelaunch_banner_wrapper bg_cover relative">
            <canvas id="bodyParticalCanvas"></canvas>
            <div class="container">
               <div class="sc_prelaunch_banner_head text-center">
                  <div class="sc_pre_logo">
                     <a href="<?= base_url('prelaunch'); ?>">
                        <svg width="309" height="50" viewBox="0 0 309 50" fill="none">
                           <g clip-path="url(#clip0_4248_33)">
                              <g filter="url(#filter0_i_4248_33)">
                                 <path d="M304.242 47.2532C304.242 47.866 303.941 48.1667 303.328 48.1667H296.945C296.332 48.1667 296.032 47.866 296.032 47.2532V17.0612C296.032 16.4484 296.332 16.1477 296.945 16.1477H303.328C303.941 16.1477 304.242 16.4484 304.242 17.0612V47.2532ZM290.481 47.1144C290.527 47.2532 290.551 47.3804 290.551 47.496C290.551 47.7041 290.481 47.8776 290.342 47.9932C290.204 48.0973 290.019 48.1551 289.776 48.1551H283.219C282.699 48.1551 282.364 47.9007 282.19 47.4035L280.733 43.1366H269.251L267.794 47.4035C267.644 47.9007 267.297 48.1551 266.765 48.1551H260.231C259.989 48.1551 259.792 48.0973 259.642 47.9932C259.503 47.866 259.434 47.7041 259.434 47.496C259.434 47.3688 259.457 47.2416 259.503 47.1144L271.159 16.83C271.344 16.3443 271.691 16.1015 272.211 16.1015H277.842C278.363 16.1015 278.71 16.3443 278.895 16.83L290.481 47.1144ZM278.432 36.3142L275.379 27.3411L274.975 25.8841L274.628 27.3411L271.575 36.3142H278.432ZM300.333 3.31238L300.784 4.56122C301.039 5.24346 301.432 5.86788 301.952 6.37667C302.472 6.89702 303.097 7.29017 303.791 7.533L305.051 7.98398C305.074 7.99554 305.097 8.0071 305.109 8.03023C305.12 8.05336 305.132 8.07648 305.132 8.09961C305.132 8.12274 305.12 8.14586 305.109 8.16899C305.097 8.19212 305.074 8.20368 305.051 8.21524L303.791 8.66621C303.097 8.90905 302.472 9.3022 301.952 9.82255C301.432 10.3429 301.039 10.9558 300.784 11.638L300.333 12.8868C300.322 12.91 300.31 12.9331 300.287 12.9447C300.264 12.9562 300.241 12.9678 300.218 12.9678C300.194 12.9678 300.171 12.9562 300.148 12.9447C300.125 12.9331 300.114 12.91 300.102 12.8868L299.651 11.638C299.408 10.9558 299.003 10.3313 298.483 9.82255C297.963 9.3022 297.338 8.90905 296.644 8.66621L295.384 8.21524C295.361 8.20368 295.338 8.19212 295.326 8.16899C295.315 8.14586 295.303 8.12274 295.303 8.09961C295.303 8.07648 295.315 8.05336 295.326 8.03023C295.338 8.0071 295.361 7.99554 295.384 7.98398L296.644 7.533C297.338 7.29017 297.963 6.89702 298.483 6.37667C299.003 5.85632 299.397 5.24346 299.651 4.56122L300.102 3.31238C300.114 3.28925 300.125 3.26612 300.148 3.25456C300.171 3.243 300.194 3.23143 300.218 3.23143C300.241 3.23143 300.275 3.243 300.299 3.25456C300.31 3.26612 300.322 3.28925 300.333 3.31238ZM305.999 0.317463L306.231 0.953448C306.358 1.30035 306.554 1.61256 306.82 1.87852C307.086 2.14448 307.398 2.34105 307.745 2.46825L308.381 2.69952C308.393 2.69952 308.404 2.71108 308.416 2.72264C308.428 2.73421 308.428 2.74577 308.428 2.75733C308.428 2.7689 308.428 2.78046 308.416 2.79202C308.404 2.80359 308.393 2.81515 308.381 2.81515L307.745 3.04642C307.398 3.17361 307.075 3.37019 306.82 3.63615C306.554 3.90211 306.358 4.21432 306.231 4.56122L305.999 5.1972C305.999 5.20877 305.988 5.22033 305.976 5.23189C305.965 5.24346 305.953 5.24346 305.941 5.24346C305.93 5.24346 305.918 5.24346 305.907 5.23189C305.895 5.22033 305.884 5.20877 305.884 5.1972L305.652 4.56122C305.525 4.21432 305.329 3.90211 305.063 3.63615C304.797 3.37019 304.484 3.17361 304.138 3.04642L303.502 2.81515C303.49 2.81515 303.478 2.80359 303.467 2.79202C303.455 2.78046 303.455 2.7689 303.455 2.75733C303.455 2.74577 303.455 2.73421 303.467 2.72264C303.478 2.71108 303.49 2.69952 303.502 2.69952L304.138 2.46825C304.484 2.34105 304.808 2.14448 305.063 1.87852C305.329 1.61256 305.525 1.30035 305.652 0.953448L305.884 0.317463C305.884 0.3059 305.895 0.294336 305.907 0.282773C305.918 0.27121 305.93 0.27121 305.941 0.27121C305.953 0.27121 305.965 0.27121 305.976 0.282773C305.988 0.294336 305.999 0.3059 305.999 0.317463ZM305.999 11.0483L306.231 11.6843C306.358 12.0312 306.554 12.3434 306.82 12.6093C307.086 12.8753 307.398 13.0719 307.745 13.1991L308.381 13.4303C308.393 13.4303 308.404 13.4419 308.416 13.4534C308.428 13.465 308.428 13.4766 308.428 13.4881C308.428 13.4997 308.428 13.5113 308.416 13.5228C308.404 13.5344 308.393 13.546 308.381 13.546L307.745 13.7772C307.398 13.9044 307.075 14.101 306.82 14.367C306.554 14.6329 306.358 14.9451 306.231 15.292L305.999 15.928C305.999 15.9396 305.988 15.9511 305.976 15.9627C305.965 15.9743 305.953 15.9743 305.941 15.9743C305.93 15.9743 305.918 15.9743 305.907 15.9627C305.895 15.9511 305.884 15.9396 305.884 15.928L305.652 15.292C305.525 14.9451 305.329 14.6329 305.063 14.367C304.797 14.101 304.484 13.9044 304.138 13.7772L303.502 13.546C303.49 13.546 303.478 13.5344 303.467 13.5228C303.455 13.5113 303.455 13.4997 303.455 13.4881C303.455 13.4766 303.455 13.465 303.467 13.4534C303.478 13.4419 303.49 13.4303 303.502 13.4303L304.138 13.1991C304.484 13.0719 304.808 12.8753 305.063 12.6093C305.329 12.3434 305.525 12.0312 305.652 11.6843L305.884 11.0483C305.895 10.9905 305.976 10.9905 305.999 11.0483Z" fill="#06B873"/>
                              </g>
                              <g filter="url(#filter1_i_4248_33)">
                                 <path d="M242.563 49.6647C239.811 49.6647 237.348 49.0172 235.162 47.7336C232.977 46.4385 231.265 44.704 230.039 42.5186C228.825 40.3331 228.212 37.951 228.212 35.3608C228.212 32.7475 228.791 30.3423 229.947 28.1569C231.115 25.9598 232.745 24.2022 234.827 22.9186C236.908 21.612 239.267 20.9644 241.915 20.9644C244.771 20.9644 247.246 21.5773 249.339 22.8146C251.432 24.0403 253.027 25.7517 254.126 27.914C255.236 30.0879 255.791 32.5509 255.791 35.3146C255.791 35.9274 255.756 36.5172 255.699 37.1185C255.641 37.6851 255.317 37.9626 254.739 37.9626H236.168C236.665 39.4774 237.533 40.6684 238.747 41.5125C239.961 42.3682 241.348 42.7845 242.898 42.7845C243.881 42.7845 244.771 42.6457 245.558 42.3798C246.367 42.0907 247.142 41.686 247.905 41.1541C248.101 41.0038 248.298 40.9228 248.495 40.9228C248.737 40.9228 248.957 41.0616 249.154 41.3275L251.952 45.3169C252.091 45.5135 252.16 45.6985 252.16 45.8835C252.16 46.1379 252.033 46.3692 251.802 46.5657C250.541 47.5486 249.131 48.3234 247.558 48.8668C245.997 49.3988 244.343 49.6647 242.563 49.6647ZM248.125 32.2503C247.697 30.747 246.968 29.5907 245.939 28.7813C244.91 27.9718 243.65 27.5787 242.158 27.5787C240.701 27.5787 239.429 27.9834 238.354 28.8044C237.29 29.6254 236.538 30.7702 236.099 32.2503H248.125ZM214.094 49.6647C211.931 49.6647 209.942 49.3062 208.127 48.5893C206.323 47.8608 204.623 46.797 203.051 45.3978C202.808 45.2013 202.681 44.9815 202.681 44.7387C202.681 44.5421 202.762 44.334 202.935 44.1259L206.011 40.2753C206.219 40.0209 206.439 39.8937 206.67 39.8937C206.843 39.8937 207.04 39.9746 207.283 40.1481C208.393 40.9806 209.48 41.6282 210.567 42.0791C211.665 42.5301 212.764 42.7614 213.874 42.7614C214.637 42.7614 215.238 42.6226 215.701 42.3335C216.152 42.0329 216.383 41.605 216.383 41.0616C216.383 40.6915 216.244 40.3678 215.978 40.0556C215.724 39.7549 215.262 39.4427 214.614 39.142C213.955 38.8183 213.03 38.4598 211.839 38.0435C209.549 37.2688 207.653 36.2165 206.161 34.8752C204.669 33.5338 203.929 31.6952 203.929 29.3594C203.929 27.8678 204.288 26.4917 205.028 25.2082C205.768 23.9362 206.901 22.9071 208.404 22.1323C209.919 21.346 211.781 20.9529 213.99 20.9529C215.504 20.9529 217.065 21.2535 218.661 21.8664C220.268 22.4561 221.691 23.3465 222.916 24.5375C223.136 24.7457 223.24 24.9654 223.24 25.1735C223.24 25.3585 223.136 25.5667 222.916 25.8095L219.32 29.5213C219.124 29.7295 218.916 29.8451 218.684 29.8451C218.488 29.8451 218.28 29.7526 218.048 29.5676C217.424 29.0704 216.73 28.6541 215.978 28.3419C215.238 28.0065 214.487 27.8446 213.747 27.8446C212.972 27.8446 212.382 27.9834 211.966 28.2725C211.573 28.5616 211.376 28.9547 211.376 29.452C211.376 29.7989 211.527 30.1226 211.804 30.4117C212.105 30.6892 212.59 30.9667 213.238 31.2558C213.897 31.5334 214.799 31.8571 215.967 32.2387C218.476 33.0482 220.407 34.1235 221.772 35.4765C223.136 36.8294 223.818 38.6564 223.818 40.9691C223.818 42.4723 223.437 43.8946 222.651 45.2244C221.887 46.5426 220.777 47.618 219.297 48.439C217.84 49.2484 216.106 49.6647 214.094 49.6647ZM190.204 22.1092C190.4 21.6351 190.747 21.4038 191.256 21.4038H195.627C196.24 21.4038 196.54 21.7045 196.54 22.3174V48.069C196.54 48.6818 196.24 48.9825 195.627 48.9825H191.094C190.597 48.9825 190.238 48.7512 190.042 48.2771L189.475 46.9126C187.579 48.6934 185.197 49.5838 182.317 49.5838C179.716 49.5838 177.322 48.9478 175.137 47.6642C172.951 46.3692 171.217 44.6347 169.945 42.4492C168.673 40.2521 168.037 37.8354 168.037 35.2221C168.037 32.6203 168.673 30.2383 169.945 28.0643C171.24 25.8789 172.974 24.1444 175.16 22.8724C177.345 21.6004 179.739 20.9529 182.317 20.9529C185.22 20.9529 187.625 21.8548 189.545 23.6587L190.204 22.1092ZM182.456 42.1601C183.717 42.1601 184.861 41.871 185.902 41.2928C186.954 40.7031 187.775 39.8821 188.365 38.853C188.978 37.8007 189.279 36.6328 189.279 35.3261C189.279 34.0079 188.978 32.8169 188.388 31.7762C187.799 30.7124 186.978 29.8798 185.948 29.2669C184.919 28.6541 183.774 28.3534 182.503 28.3534C181.242 28.3534 180.097 28.6541 179.057 29.2669C178.039 29.8567 177.23 30.6892 176.64 31.7531C176.062 32.8169 175.773 34.0079 175.773 35.3261C175.773 36.6444 176.062 37.8238 176.64 38.853C177.218 39.8821 178.004 40.7031 179.01 41.2928C180.028 41.8826 181.173 42.1601 182.456 42.1601ZM155.144 49.6647C152.438 49.6647 149.998 49.0287 147.824 47.7452C145.662 46.4501 143.973 44.7156 142.748 42.5301C141.533 40.3446 140.921 37.951 140.921 35.3493C140.921 32.7244 141.533 30.3192 142.748 28.1222C143.962 25.9251 145.662 24.1675 147.824 22.884C149.998 21.5889 152.449 20.9529 155.178 20.9529C156.971 20.9529 158.647 21.2188 160.208 21.7507C161.792 22.2827 163.203 23.0343 164.452 24.0056C164.706 24.2137 164.834 24.445 164.834 24.6878C164.834 24.8729 164.764 25.0694 164.626 25.2776L161.735 29.4057C161.538 29.6948 161.307 29.8335 161.052 29.8335C160.891 29.8335 160.682 29.7526 160.463 29.6023C159.688 29.0704 158.913 28.6656 158.138 28.3997C157.364 28.1222 156.473 27.995 155.467 27.995C154.242 27.995 153.097 28.3187 152.045 28.9547C150.992 29.5907 150.16 30.4695 149.535 31.6027C148.911 32.7128 148.599 33.9617 148.599 35.3608C148.599 36.7253 148.911 37.9626 149.535 39.0727C150.171 40.1828 151.015 41.05 152.068 41.6976C153.132 42.322 154.265 42.6342 155.49 42.6342C156.473 42.6342 157.364 42.507 158.138 42.2526C158.925 41.9751 159.7 41.5819 160.463 41.05C160.694 40.8997 160.891 40.8187 161.052 40.8187C161.307 40.8187 161.538 40.9575 161.735 41.2466L164.626 45.3747C164.776 45.5828 164.857 45.791 164.857 45.9876C164.857 46.1841 164.764 46.3692 164.579 46.531C163.319 47.5371 161.885 48.3118 160.301 48.8553C158.717 49.3872 156.994 49.6647 155.144 49.6647ZM129.797 22.1555C129.947 21.6582 130.294 21.4038 130.826 21.4038H137.452C137.694 21.4038 137.879 21.4617 138.018 21.5889C138.169 21.6929 138.249 21.8548 138.249 22.063C138.249 22.1902 138.226 22.3174 138.18 22.4445L128.906 48.2424C128.721 48.7281 128.374 48.9709 127.854 48.9709H122.026C121.506 48.9709 121.159 48.7281 120.974 48.2424L117.216 38.2864L113.77 48.2424C113.62 48.7281 113.273 48.9709 112.741 48.9709H106.82C106.3 48.9709 105.953 48.7281 105.768 48.2424L96.4942 22.4445C96.4479 22.3058 96.4248 22.1786 96.4248 22.063C96.4248 21.8548 96.4942 21.6929 96.6329 21.5889C96.7832 21.4617 96.9798 21.4038 97.2226 21.4038H103.513C104.045 21.4038 104.392 21.6582 104.542 22.1555L109.827 39.6046L114.336 22.1786C114.394 21.9011 114.51 21.7045 114.683 21.5889C114.845 21.4617 115.065 21.4038 115.342 21.4038H121.968C122.223 21.4038 122.419 21.4617 122.558 21.5889C122.697 21.7161 122.766 21.8779 122.766 22.0861C122.766 22.1902 122.743 22.3174 122.697 22.4561L120.604 28.5384L124.478 39.6161L129.797 22.1555ZM47.5349 20.9529C49.7666 20.9529 51.7324 21.4617 53.409 22.4792C55.0973 23.4968 56.404 24.9422 57.329 26.8039C58.2541 28.6541 58.7166 30.8049 58.7166 33.2563V48.069C58.7166 48.6818 58.416 48.9825 57.8031 48.9825H51.8827C51.2698 48.9825 50.9692 48.6818 50.9692 48.069V34.1235C50.9692 32.9094 50.7379 31.8456 50.2869 30.9321C49.8475 30.007 49.2115 29.2901 48.3905 28.7928C47.5811 28.2956 46.6445 28.0412 45.5691 28.0412C44.4243 28.0412 43.3836 28.3187 42.4238 28.8622C41.4872 29.3941 40.7356 30.0995 40.1921 30.9783C39.6486 31.8571 39.3711 32.7938 39.3711 33.7766V48.069C39.3711 48.6818 39.0705 48.9825 38.4576 48.9825H32.6065C31.9937 48.9825 31.693 48.6818 31.693 48.069V14.2692C31.693 13.6564 31.9937 13.3557 32.6065 13.3557H38.4576C39.0705 13.3557 39.3711 13.6564 39.3711 14.2692V24.2137C40.4349 23.254 41.7185 22.4792 43.2217 21.8664C44.7365 21.2535 46.1704 20.9529 47.5349 20.9529ZM13.4229 49.526C10.9715 49.526 8.67037 49.0519 6.49646 48.1152C4.33411 47.1786 2.46085 45.8025 0.841974 43.9871C0.65696 43.779 0.564453 43.5708 0.564453 43.3742C0.564453 43.143 0.680087 42.9233 0.911354 42.692L4.94697 38.8645C5.14355 38.668 5.35169 38.5639 5.55983 38.5639C5.80266 38.5639 6.02236 38.6795 6.21894 38.9108C7.19026 39.9168 8.27722 40.6684 9.47981 41.1888C10.6824 41.686 11.9312 41.9404 13.2148 41.9404C14.5099 41.9404 15.4696 41.7207 16.1056 41.2813C16.7416 40.8419 17.0654 40.2406 17.0654 39.4774C17.0654 38.957 16.9266 38.5176 16.6375 38.136C16.36 37.7544 15.8281 37.3729 15.0187 36.9913C14.2324 36.6097 13.0645 36.1934 11.5381 35.7424C9.00571 35.0024 6.73929 33.8113 4.75039 32.1925C2.77306 30.5505 1.79017 28.3419 1.79017 25.5667C1.79017 23.9131 2.20645 22.3867 3.03901 20.9876C3.87158 19.5884 5.15511 18.4783 6.86649 17.6342C8.57787 16.7785 10.694 16.3622 13.2032 16.3622C15.3193 16.3622 17.3313 16.7438 19.2624 17.507C21.1935 18.2702 22.9049 19.2878 24.4081 20.5828C24.6394 20.7794 24.755 20.9991 24.755 21.242C24.755 21.4501 24.6625 21.6698 24.4775 21.8779L20.7888 26.0292C20.5922 26.272 20.3725 26.3992 20.1297 26.3992C19.9331 26.3992 19.725 26.3183 19.5168 26.1448C18.6611 25.4742 17.7014 24.9191 16.626 24.4566C15.5506 23.9825 14.4867 23.7512 13.4345 23.7512C11.2953 23.7512 10.2199 24.3872 10.2199 25.6476C10.2199 26.1795 10.3933 26.6305 10.7402 26.989C11.0871 27.359 11.5497 27.6596 12.1278 27.9256C12.7176 28.18 13.6195 28.5269 14.8336 28.9547C14.9955 29.001 15.2499 29.0819 15.5853 29.2091C17.7476 29.9723 19.5284 30.7817 20.9391 31.649C22.3498 32.5162 23.4484 33.5801 24.2231 34.8405C24.9979 36.0893 25.3794 37.5926 25.3794 39.3502C25.3794 41.3853 24.8822 43.1777 23.8993 44.7272C22.9164 46.2651 21.5173 47.4561 19.7018 48.3002C17.9095 49.1097 15.8165 49.526 13.4229 49.526Z" fill="white"/>
                                 <path d="M78.2243 32.1823C78.2243 31.7194 78.5827 31.3837 78.9759 31.3837C79.1031 31.3837 79.2303 31.4184 79.3575 31.4994L82.9884 33.988C83.4856 34.3005 83.4856 35.076 82.9768 35.3769L79.2997 37.7961C79.184 37.8655 79.0568 37.9002 78.9296 37.9002C78.5365 37.9002 78.1664 37.5646 78.178 37.09L78.2243 32.1823Z" fill="white"/>
                                 <path d="M81.647 21.4295C74.3968 21.4295 68.5226 27.3094 68.5226 34.5667C68.5226 41.824 74.3968 47.704 81.647 47.704C84.2372 47.704 86.6655 46.9516 88.7007 45.6437C86.1452 47.866 82.8034 49.2087 79.1493 49.2087C71.0665 49.2087 64.5217 42.6574 64.5217 34.5667C64.5217 26.4876 71.0781 19.9248 79.1493 19.9248C82.8034 19.9248 86.1336 21.2674 88.7007 23.4898C86.6655 22.1934 84.2488 21.4295 81.647 21.4295Z" fill="white"/>
                                 <path d="M82.0864 23.8602C87.9953 23.8602 92.7825 28.6521 92.7825 34.5667C92.7825 40.4814 87.9953 45.2733 82.0864 45.2501C79.4153 45.2501 76.9754 44.2663 75.1022 42.6458C76.5938 43.6065 78.363 44.1621 80.2594 44.1621C85.5554 44.1621 89.857 39.8679 89.857 34.5551C89.857 29.254 85.567 24.9482 80.2594 24.9482C78.363 24.9482 76.5938 25.5153 75.1022 26.4645C76.9754 24.844 79.4153 23.8602 82.0864 23.8602Z" fill="white"/>
                              </g>
                           </g>
                           <defs>
                              <filter id="filter0_i_4248_33" x="256.173" y="-2.98966" width="52.255" height="51.1563" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                 <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                 <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                 <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                 <feOffset dx="-3.26087" dy="-3.26087"/>
                                 <feGaussianBlur stdDeviation="1.63043"/>
                                 <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                                 <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.4 0"/>
                                 <feBlend mode="normal" in2="shape" result="effect1_innerShadow_4248_33"/>
                              </filter>
                              <filter id="filter1_i_4248_33" x="-2.69642" y="10.0949" width="258.487" height="39.5698" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                 <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                 <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                 <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                 <feOffset dx="-3.26087" dy="-3.26087"/>
                                 <feGaussianBlur stdDeviation="1.63043"/>
                                 <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                                 <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.4 0"/>
                                 <feBlend mode="normal" in2="shape" result="effect1_innerShadow_4248_33"/>
                              </filter>
                              <clipPath id="clip0_4248_33">
                                 <rect width="308.696" height="50" fill="white"/>
                              </clipPath>
                           </defs>
                        </svg>
                     </a>
                  </div>
                  <h1 class="sc_banner_top_heading fs30 fw700 sc_primary pt30 pb20 fontSyne">THE FUTURE OF AI-POWERED VIDEO CREATION</h1>
                  <h2 class="sc_banner_main_heading">Create Studio-Quality AI Videos Without Filming, Editing, or Hiring Anyone</h2>
                  <p class="sc_banner_sub_heading">ShowcaseAI turns photos and products into talking avatars, product demos, cinematic showcases, AI ads, and virtual try-ons - all in minutes.</p>
               </div>
               <div class="form-box d-flex justify-content-center align-items-center">
                  <div class="sc_videoBox">
                     <div style="padding:56.25% 0 0 0;position:relative;">
                        <iframe loading="lazy" data-src="https://player.vimeo.com/video/1158681100?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="ShowcaseAI Prelaunch" class="lazy-iframe"></iframe>
                     </div>
                     <script src="https://player.vimeo.com/api/player.js"></script>
                  </div>
                  <div class="sp_innerFormBox">
                     <div class="sc_innerform text-center">
                        <h2 class="fs36 fw700 sc_white fontPlus scai_desk_h2">Webinar Begins</h2>
                        <h3 class="fs16 fw700 fontPlus d-inline-flex justify-content-center align-items-center scai_lap12">2nd Feb 2026 At 10 AM EST</h3>
                        <form data-smart-form action="javascript:void(0);" method="post">
                           <div class="col-12">
                              <div class="sc_pre_input_group">
                                 <lable class="sp_lable">First Name</lable>
                                 <input type="text" name="first_name" placeholder="First Name" required />
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="sc_pre_input_group">
                                 <lable class="sp_lable">Last Name</lable>
                                 <input type="text" name="last_name" placeholder="Last Name" required />
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="sc_pre_input_group">
                                 <lable class="sp_lable">Email Address</lable>
                                 <input type="email" id="email" name="email" placeholder="Email Address" required />
                              </div>
                           </div>
                           <input type="hidden" name="autoresponder_id" value="CCmjB">
                           <input type="hidden" name="webinar_id" value="6898767413996889685">
                           <button type="submit" class="sc_primary_btn w-100 mt10">
                              <span>Reserve Your Seat Now</span>
                           </button>
                        </form>
                     </div>
                  </div>
               </div>
               <h4 class="fs22 fw700 fontPlus sc_white text-center mt20"><span style="color:#FFFF00;">5 LUCKY ATTENDEES</span> Will Get ShowcaseAI For FREE!</h4>
            </div>
         </section>
         <!-- Banner -->

         <!-- Webinar bullets Section -->
         <section class="sc_webinar_bullets_wrapper sc_webinar_bullets_wrapper_banner relative">
            <div class="container">
               <div class="sc_webinar_bullets_parent">
                  <div class="sc_webinar_bullets_box relative">
                     <div class="sc_webinar_heading_parent text-center">
                        <h2 class="sc_webinar_bullets_heading d-inline-flex justify-content-center align-items-center">In this FREE webinar, You'll learn</h2>
                     </div>
                     <div class="sc_webinar_bullets_list">
                        <ul>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to use AI-generated videos to <b>sell your own products or services faster</b> without hiring designers, editors, or agencies
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to turn ShowcaseAI into a <b>profit-generating asset</b> by creating high-demand video content for clients, brands, and businesses
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to create <b>studio-quality AI </b>videos using nothing but photos, products, and simple text
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to turn <b>any image into a talking avatar</b> that speaks naturally with realistic expressions
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to create <b>product promo videos</b> without models, cameras, or expensive photoshoots
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to generate <b>ready-to-use AI ads</b> that look like real studio productions
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to transform <b>static product images into cinematic showcase videos</b>
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How fashion brands and sellers are using <b>AI virtual try-ons</b> to boost engagement and sales
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to create <b>multilingual videos</b> to reach global audiences effortlessly
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to produce <b>high-converting marketing videos in minutes</b>, not days
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to use <b>one simple dashboard</b> to replace multiple video tools
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How ShowcaseAI helps creators, marketers, and businesses <b>save time, cut costs, and scale faster</b>
                              </p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Webinar bullets Section -->

         <!-- Top Feature -->
         <section class="sc_top_feature_wrapper pt80 relative">
            <div class="container">

               <!-- Feature Section 1 -->
               <div class="sc_top_feat_flex d-flex justify-content-center align-items-center">
                  <div class="sc_top_feat_img">
                     <img loading="lazy" src="<?= base_url('jv-assets/images/feat-img.png') ?>" alt="ShowcaseAI feature preview" data-aos="fade-up">
                  </div>
                  <div class="sc_feature_content">
                     <h3 class="sc_feature_title mt20">What Is ShowcaseAI?</h3>
                     <p><b>ShowcaseAI is an all-in-one AI-powered video creation platform</b> that turns simple photos
                        and product images into studio-quality marketing videos — in minutes.
                     </p>
                     <p>Instead of spending thousands on video shoots, actors, editing tools, and voiceovers, users can simply upload an image, choose a style, and let AI handle everything.</p>
                     <p>With ShowcaseAI, users can create:</p>
                     <ul>
                        <li>✔️ <b>Talking Avatar Videos</b> from a single photo</li>
                        <li>✔️ <b>Product Avatar Videos</b> where avatars present products naturally</li>
                        <li>✔️ <b>Cinematic Product Showcase Videos</b></li>
                        <li>✔️ <b>AI-Generated Ad Videos</b> that look like studio shoots</li>
                        <li>✔️ <b>Virtual Try-On Videos & Images</b> for apparel & accessories</li>
                     </ul>
                     <p>Everything — from script generation to voiceovers, avatars, and final video output — is automated by AI.</p>
                  </div>
               </div>
               <!-- Feature Section 2 -->
               <div class="sc_top_feat_flex sc_top_feat_flex2 d-flex justify-content-center align-items-center">
                  <div class="sc_top_feat_img">
                     <img loading="lazy" src="<?= base_url('jv-assets/images/feat-img-2.png') ?>" alt="ShowcaseAI conversion benefits" data-aos="fade-up">
                  </div>
                  <div class="sc_feature_content">
                     <h3 class="sc_feature_title mt20">Why Creators and Businesses Are Switching to ShowcaseAI</h3>
                     <p>ShowcaseAI isn't just another AI tool - it's a complete video creation system for your business.</p>
                     <ul>
                        <li>✔️ Create professional videos in minutes using photos, products, and text</li>
                        <li>✔️ No cameras, editing, or technical skills required</li>
                        <li>✔️ Works across multiple industries and use cases</li>
                        <li>✔️ Cuts production costs while boosting content output</li>
                        <li>✔️ One platform to create ads, avatars, showcases, and demos</li>
                     </ul>
                     <p>ShowcaseAI helps you create more videos, faster - without the usual time, cost, or complexity.</p>
                  </div>
               </div>
            </div>
         </section>
         <!-- Top Feature -->

         <!-- Banner Slider -->
         <section>
            <div class="sc_banner_slider mt40 relative">
               <div class="sc_banner_slider_item_img">
						<video muted loop autoplay playsinline class="lazy-video">
							<!-- <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/examples-videos-white.webm" type="video/webm"> -->
							<source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/examples-videos-white.mp4" type="video/mp4">
						</video>
					</div>
            </div>
         </section>
         <!-- Banner Slider -->

         <!-- Features -->
         <section class="sc_feature_wrapper relative bg_cover pt70 pb80" id="feature">
            <div class="container">
               <div class="sc_common_heading text-center">
                  <h2 class="sc_gredient_heading">All-in-One AI Studio for <span>Creators and Brands</span> </h2>
                  <p class="sc_sub_heading">ShowcaseAI transforms your creative vision into lifelike videos that
                     connect, engage, and inspire.
                  </p>
               </div>
               <div class="sc_feature_parent pt70">
                  <div class="sc_feature_items">
                     <div class="sc_feature_content">
                        <span class="sc_feat_number">#1</span>
                        <h3 class="sc_feature_title" data-splitting>Talking Avatar Videos</h3>
                        <p>Make any photo talk with your script in seconds.</p>
                        <p>Your avatar speaks naturally with realistic expressions and lip-sync.
                           Perfect for intros,
                           tutorials, or social media videos no camera needed.
                        </p>
                     </div>
                     <div class="sc_feature_video">
                        <video muted loop autoplay playsinline class="lazy-video"
                           preload="none">
                           <source
                              data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/example3.mp4"
                              type="video/mp4">
                        </video>
                     </div>
                  </div>
                  <div class="sc_feature_items">
                     <div class="sc_feature_content">
                        <span class="sc_feat_number">#2</span>
                        <h3 class="sc_feature_title" data-splitting>Product Avatar Videos</h3>
                        <p>Bring your product to life with an AI avatar that can talk.</p>
                        <p>Show your product being demonstrated or highlighted naturally with
                           speech and gestures.
                           Great for ads, online stores, or product explainers without a
                           photoshoot.
                        </p>
                     </div>
                     <div class="sc_feature_video">
                        <video muted loop autoplay playsinline class="lazy-video"
                           preload="none">
                           <source
                              data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/example5.mp4"
                              type="video/mp4">
                        </video>
                     </div>
                  </div>
                  <div class="sc_feature_items">
                     <div class="sc_feature_content">
                        <span class="sc_feat_number">#3</span>
                        <h3 class="sc_feature_title" data-splitting>Product Showcase Videos</h3>
                        <p>Turn product images into cinematic, studio-quality videos.</p>
                        <p>Show your product exactly how you want — angles, lighting,
                           backgrounds, and motion.
                           Create professional-looking videos in minutes —no photoshoot
                           needed.
                        </p>
                     </div>
                     <div class="sc_feature_video">
                        <video muted loop autoplay playsinline class="lazy-video"
                           preload="none">
                           <source
                              data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/example4.mp4"
                              type="video/mp4">
                        </video>
                     </div>
                  </div>
                  <div class="sc_feature_items">
                     <div class="sc_feature_content">
                        <span class="sc_feat_number">#4</span>
                        <h3 class="sc_feature_title" data-splitting>AI Ads Video</h3>
                        <p>Create hyper-realistic ad videos that look like real studio shoots.
                           AI generates the
                           script, voice, and model — all in perfect sync. Bring your brand story
                           to life with
                           cinematic precision.
                        </p>
                     </div>
                     <div class="sc_feature_video">
                        <video muted loop autoplay playsinline class="lazy-video"
                           preload="none">
                           <source
                              data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/example1.mp4"
                              type="video/mp4">
                        </video>
                     </div>
                  </div>
                  <div class="sc_feature_items">
                     <div class="sc_feature_content">
                        <span class="sc_feat_number">#5</span>
                        <h3 class="sc_feature_title" data-splitting>Virtual Try-On</h3>
                        <p>Bring your clothing to life with AI-powered try-on videos. Swap or
                           clone outfits that
                           move naturally with your model. Perfect for fashion creators, brands,
                           and digital
                           catalogs.
                        </p>
                     </div>
                     <div class="sc_feature_video">
                        <video muted loop autoplay playsinline class="lazy-video"
                           preload="none">
                           <source
                              data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/example2.mp4"
                              type="video/mp4">
                        </video>
                     </div>
                  </div>
                  <div class="sc_feature_items">
                     <div class="sc_feature_content">
                        <span class="sc_feat_number">#6</span>
                        <h3 class="sc_feature_title" data-splitting>AI Voice Clone</h3>
                        <p>Make avatars and videos speak in your own voice.</p>
                        <p>ShowcaseAI replicates your tone, style, and emotion naturally. Keep
                           your content
                           personal, consistent, and instantly recognizable.
                        </p>
                     </div>
                     <div class="sc_feature_video">
                        <video muted loop autoplay playsinline class="lazy-video"
                           preload="none">
                           <source
                              data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/voice-clone.mp4"
                              type="video/mp4">
                        </video>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Features -->

      <section class="fe_intro_section xspt4 zspt6 zspb6 d-none1">
        <div class="container-fluid">
            <div class="container-fluid container1500">
                <div class="row">
                    <div class="col-12">
                        <div class="sc_common_heading text-center">
                           <h2 class="sc_gredient_heading mb-2">Special Bonus</h2>
                           <img loading="lazy" src="<?= base_url('jv-assets/images/shopify_logo.png') ?>" alt="image" class="img-fluid shopify_logo">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 mb-5 mt-5">
                        <div class="text-center">
                            <img loading="lazy" src="<?= base_url('jv-assets/images/link_mock.png') ?>" alt="image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-12 text-center mt-4 mb-5">
                     <div class="sc_common_heading ">
                        <h2 class="sc_gredient_heading"><span class="primary-color">ShowcaseAI Shopify Plugin</span></h2>
                        <p class="plugin_head">Create Product Videos Directly Inside Shopify...</p>
                     </div>
                     <h2 class="sc_webinar_bullets_heading d-inline-flex justify-content-center align-items-center">That means</h2>
               </div>
            </div>
        </div>

        <div class="container-fluid container1260">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4">
                    <div class="fe_choice_box_means fe_choice_box_meanswrapper mb_md_30">
                        <img loading="lazy" src="<?= base_url('jv-assets/images/means1.png') ?>" alt="image" class="img-fluid">
                        <div class="fe_close_icon_box">
                            <img loading="lazy" src="<?= base_url('jv-assets/images/cross.png') ?>" alt="image" class="img-fluid crossper">
                            <h4>No exporting product<br> images</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="fe_choice_box_means fe_choice_box_meanswrapper mb_md_30">
                        <img loading="lazy" src="<?= base_url('jv-assets/images/means2.png') ?>" alt="image" class="img-fluid">
                        <div class="fe_close_icon_box">
                            <img loading="lazy" src="<?= base_url('jv-assets/images/cross.png') ?>" alt="image" class="img-fluid">
                            <h4>No copying descriptions</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="fe_choice_box_means fe_choice_box_meanswrapper mb_md_30">
                        <img loading="lazy" src="<?= base_url('jv-assets/images/means3.png') ?>" alt="image" class="img-fluid">
                        <div class="fe_close_icon_box">
                            <img loading="lazy" src="<?= base_url('jv-assets/images/cross.png') ?>" alt="image" class="img-fluid">
                            <h4>No re-uploading assets</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box_style1">
            <div class="container-fluid container1260">
                <div class="row">
                     <div class="col-12 text-center mt-4 mb-5">
                        <div class="sc_common_heading ">
                           <h2 class="sc_gredient_heading">The ShowcaseAI plugin<br>automatically pulls</h2>
                        </div>
                     </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 sm-6">
                        <div class="fe_choice_box_means mb_md_30">
                            <img loading="lazy" src="<?= base_url('jv-assets/images/plug1.png') ?>" alt="image" class="img-fluid">
                            <div class="fe_close_icon_box">
                                <h4>Product images</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-6">
                        <div class="fe_choice_box_means mb_md_30">
                            <img loading="lazy" src="<?= base_url('jv-assets/images/plug2.png') ?>" alt="image" class="img-fluid">
                            <div class="fe_close_icon_box">
                                <h4>Titles and descriptions</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-6">
                        <div class="fe_choice_box_means mb_md_30">
                            <img loading="lazy" src="<?= base_url('jv-assets/images/plug3.png') ?>" alt="image" class="img-fluid">
                            <div class="fe_close_icon_box">
                                <h4>Variants and details</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box_style2">
                <div class="container-fluid container1260">
                    <div class="row">
                        <div class="col-12 text-center mt-4 mb-5">
                           <div class="sc_common_heading ">
                              <h2 class="sc_gredient_heading">and uses them to create</h2>
                           </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4">
                            <div class="fe_choice_box_means mb_md_30">
                                <img loading="lazy" src="<?= base_url('jv-assets/images/plug4.png') ?>" alt="image" class="img-fluid">
                                <div class="fe_close_icon_box">
                                    <h4>Product avatar<br>videos</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="fe_choice_box_means mb_md_30">
                                <img loading="lazy" src="<?= base_url('jv-assets/images/plug5.png') ?>" alt="image" class="img-fluid">
                                <div class="fe_close_icon_box">
                                    <h4>Product showcase<br>videos</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="fe_choice_box_means mb_md_30">
                                <img loading="lazy" src="<?= base_url('jv-assets/images/plug6.png') ?>" alt="image" class="img-fluid">
                                <div class="fe_close_icon_box">
                                    <h4>Ad-ready product<br>videos</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center xsb2 zsmb2">
                            <h2 class="mt-1">All without filming, editing, or setting anything up manually.</h2>
                        </div>
                    </div>
                </div>
                <div class="box_style3">
                     <div class="col-12 text-center mt-4 mb-5">
                        <div class="sc_common_heading ">
                           <h2 class="sc_gredient_heading">This is Perfect For</h2>
                        </div>
                     </div>
                    <div class="container-fluid container1260 container_style3">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-6">
                                <div class="fe_choice_perfect1">
                                    <div class="fe_choice_box_dif">
                                        <img loading="lazy" src="<?= base_url('jv-assets/images/per1.png') ?>" alt="image" class="img-fluid">
                                        <h4>Shopify store owners who<br> don't want to film content</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="fe_choice_perfect2">
                                    <div class="fe_choice_box_dif">
                                        <img loading="lazy" src="<?= base_url('jv-assets/images/per2.png') ?>" alt="image" class="img-fluid">
                                        <h4>DTC brands launching<br> products fast</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="fe_choice_perfect3">
                                    <div class="fe_choice_box_dif">
                                        <img loading="lazy" src="<?= base_url('jv-assets/images/per3.png') ?>" alt="image" class="img-fluid">
                                        <h4>Dropshippers testing<br>creatives</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="fe_choice_perfect4">
                                    <div class="fe_choice_box_dif">
                                        <img loading="lazy" src="<?= base_url('jv-assets/images/per4.png') ?>" alt="image" class="img-fluid">
                                        <h4>Agencies managing<br> multiple Shopify stores</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center mt-5">
                        <div class="fb_down_scroll_arrow">
                           <img loading="lazy" src="<?= base_url('jv-assets/images/down_scroll_arrow.png') ?>" alt="image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

         <!-- Video Section -->
         <section class="sc_demo_wrapper sc_pre_video_section_wrapper bg_cover relative">
            <div class="container">
               <div class="sc_common_heading text-center">
                     <h1 class="sc_gredient_heading">See What ShowcaseAI Can Create</h1>
                     <p class="sc_sub_heading">Real videos generated using ShowcaseAI - no filming, no editing, no production team.</p>
               </div>
               <!-- Nav Tabs -->
               <div class="sc_demo_tab text-center mt30 mb30">
                     <ul class="nav nav-tabs d-inline-flex justify-content-center align-items-center" id="myTab2" role="tablist">
                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" id="talking-avatars-tab-2" data-bs-toggle="tab"
                                 data-bs-target="#talking-avatars-2" type="button" role="tab"
                                 aria-controls="talking-avatars-2" aria-selected="true">
                                 Talking Avatars
                           </button>
                        </li>

                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="product-avatar-tab-2" data-bs-toggle="tab"
                                 data-bs-target="#product-avatar-2" type="button" role="tab"
                                 aria-controls="product-avatar-2" aria-selected="false">
                                 Product Avatar
                           </button>
                        </li>

                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="product-shoot-tab-2" data-bs-toggle="tab"
                                 data-bs-target="#product-shoot-2" type="button" role="tab"
                                 aria-controls="product-shoot-2" aria-selected="false">
                                 Product Showcase
                           </button>
                        </li>

                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="ai-ads-tab-2" data-bs-toggle="tab"
                                 data-bs-target="#ai-ads-2" type="button" role="tab"
                                 aria-controls="ai-ads-2" aria-selected="false">
                                 AI Ads
                           </button>
                        </li>

                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="virtual-tryon-tab-2" data-bs-toggle="tab"
                                 data-bs-target="#virtual-tryon-2" type="button" role="tab"
                                 aria-controls="virtual-tryon-2" aria-selected="false">
                                 Virtual Try-On
                           </button>
                        </li>
                     </ul>
               </div>

               <!-- Tab Content -->
                  <div class="tab-content" id="myTab2Content">
                     <div class="tab-pane show active" id="talking-avatars-2" role="tabpanel"
                        aria-labelledby="talking-avatars-tab-2">
                        <div class="sc_explore_parent">
                           <div class="sc_explore_flex d-flex flex-wrap justify-content-center">
                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/40.mp4"
                                                type="video/mp4">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/41.mp4"
                                                type="video/mp4">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/42.mp4"
                                                type="video/mp4">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/47.mp4"
                                                type="video/mp4">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/44.mp4"
                                                type="video/mp4">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/45.mp4"
                                                type="video/mp4">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/46.mp4"
                                                type="video/mp4">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/43.mp4"
                                                type="video/mp4">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/48.mp4"
                                                type="video/mp4">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/landingpage_videos/49.mp4"
                                                type="video/mp4">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="product-avatar-2" role="tabpanel" aria-labelledby="product-avatar-tab-2">
                        <div class="sc_explore_parent">
                           <div class="sc_explore_flex d-flex flex-wrap justify-content-center">
                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/3.webm"
                                                type="video/mp4">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/5.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/9.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/12.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/15.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/16.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/17.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/18.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/20.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/38.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="product-shoot-2" role="tabpanel" aria-labelledby="product-shoot-tab-2">
                        <div class="sc_explore_parent">
                           <div class="sc_explore_flex d-flex flex-wrap justify-content-center">
                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/4.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/6.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/7.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/10.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/11.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/13.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/14.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/21.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/27.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/28.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/33.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/34.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/35.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/37.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/51.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="ai-ads-2" role="tabpanel" aria-labelledby="ai-ads-tab-2">
                        <div class="sc_explore_parent">
                           <div class="sc_explore_flex d-flex flex-wrap justify-content-center">
                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/29.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/22.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/23.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/25.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/26.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/19.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/31.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/32.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/36.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/39.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="virtual-tryon-2" role="tabpanel" aria-labelledby="virtual-tryon-tab-2">
                        <div class="sc_explore_parent">
                           <div class="sc_explore_flex d-flex flex-wrap justify-content-center">
                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/1.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/2.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/8.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/30.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="sc_explore_box video-wrapper">
                                    <div class="sc_explore_img">
                                       <video muted loop playsinline preload="none" class="lazy-video hover-play">
                                             <source data-src="https://d3orgd3vfbg4nb.cloudfront.net/sales-videos/50.webm" type="video/webm">
                                       </video>
                                       <div class="video-shimmer"></div>
                                       <div class="sc_volume_icon">
                                             <img src="<?= $base_url?>assets/images/play-icon.png" alt="Video Play icon">
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
         </section>
         <!-- Video Section -->

			<!-- Demo Section -->
			<section class="sc_demo_wrapper bg_cover relative" id="demo">
				<div class="container">
					<div class="sc_common_heading text-center">
						<h2 class="sc_gredient_heading" data-splitting>Watch Ideas Turn Instantly <span>Into Reality</span></h2>
						<p class="sc_sub_heading">See ShowcaseAI transform simple visuals into
							professional, cinematic
							videos in seconds.</p>
					</div>
					<!-- Nav Tabs -->
					<div class="sc_demo_tab text-center mt40 mb30">
						<ul
							class="nav nav-tabs d-inline-flex justify-content-center align-items-center"
							id="myTab"
							role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="talking-avatars-tab"
									data-bs-toggle="tab"
									data-bs-target="#talking-avatars" type="button" role="tab"
									aria-controls="talking-avatars" aria-selected="true">
									Talking Avatars
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="product-avatar-tab" data-bs-toggle="tab"
									data-bs-target="#product-avatar" type="button" role="tab"
									aria-controls="product-avatar"
									aria-selected="false">
									Product Avatar
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="product-shoot-tab" data-bs-toggle="tab"
									data-bs-target="#product-shoot" type="button" role="tab"
									aria-controls="product-shoot"
									aria-selected="false">
									Product Showcase
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="ai-ads-tab" data-bs-toggle="tab"
									data-bs-target="#ai-ads"
									type="button" role="tab" aria-controls="ai-ads" aria-selected="false">
									AI Ads
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="virtual-tryon-tab" data-bs-toggle="tab"
									data-bs-target="#virtual-tryon" type="button" role="tab"
									aria-controls="virtual-tryon"
									aria-selected="false">
									Virtual Try-On
								</button>
							</li>
						</ul>
					</div>

					<!-- Tab Content -->
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="talking-avatars"
							role="tabpanel"
							aria-labelledby="talking-avatars-tab">
							<div class="sc_demo_video">
								<div style="position: relative; padding-bottom: 56.25%; height: 0;">
									<iframe loading="lazy" title="vimeo-player"
										data-src="https://player.vimeo.com/video/1145884386?" width="100%"
										height="100%" frameborder="0"
										referrerpolicy="strict-origin-when-cross-origin"
										allow="fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
										class="lazy-iframe"
										style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="product-avatar" role="tabpanel"
							aria-labelledby="product-avatar-tab">
							<div class="sc_demo_video">
								<div style="position: relative; padding-bottom: 56.25%; height: 0;">
									<iframe loading="lazy" title="vimeo-player"
										data-src="https://player.vimeo.com/video/1145884270?" width="100%"
										height="100%" frameborder="0"
										referrerpolicy="strict-origin-when-cross-origin"
										allow="fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
										class="lazy-iframe"
										style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="product-shoot" role="tabpanel"
							aria-labelledby="product-shoot-tab">
							<div class="sc_demo_video">
								<div style="position: relative; padding-bottom: 56.25%; height: 0;">
									<iframe loading="lazy" title="vimeo-player"
										data-src="https://player.vimeo.com/video/1145884342?" width="100%"
										height="100%" frameborder="0"
										referrerpolicy="strict-origin-when-cross-origin"
										allow="fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
										class="lazy-iframe"
										style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="ai-ads" role="tabpanel"
							aria-labelledby="ai-ads-tab">
							<div class="sc_demo_video">
								<div style="position: relative; padding-bottom: 56.25%; height: 0;">
									<iframe loading="lazy" title="vimeo-player"
										data-src="https://player.vimeo.com/video/1145884217?" width="100%"
										height="100%" frameborder="0"
										referrerpolicy="strict-origin-when-cross-origin"
										allow="fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
										class="lazy-iframe"
										style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="virtual-tryon" role="tabpanel"
							aria-labelledby="virtual-tryon-tab">
							<div class="sc_demo_video">
								<div style="position: relative; padding-bottom: 56.25%; height: 0;">
									<iframe loading="lazy" title="vimeo-player"
										data-src="https://player.vimeo.com/video/1145884426?" width="100%"
										height="100%" frameborder="0"
										referrerpolicy="strict-origin-when-cross-origin"
										allow="fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
										class="lazy-iframe"
										style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Demo Section -->

         <!-- Language Section -->
			<section class="sc_language_wrapper bg_cover relative pt60">
				<div class="container">
					<div class="sc_common_heading text-center">
						<span class="sc_top_heading" data-splitting>Multilingual</span>
						<h2 class="sc_gredient_heading" data-splitting>Go Global with Multilingual
							AI Video Creation</h2>
						<p class="sc_sub_heading">Break language barriers, expand your reach, and
							connect with audiences
							worldwide using lifelike multilingual AI videos.</p>
					</div>
					<div class="sc_lang_mockup text-center pt50 relative">
						<img loading="lazy" src="<?= base_url('jv-assets/images/lang-mockp-mobile.jpg') ?>" class="sc_lang_mockup_image" alt="Language mockup">
					</div>
				</div>
			</section>
			<!-- Language Section -->

         <!-- Subscribe Section -->
          <section class="sc_subscribe_wrapper bg_cover relative pt80">
            <div class="container">
               <div class="sc_common_heading text-center pb40">
						<h2 class="sc_gredient_heading">Don't Miss This</h2>
						<p class="sc_sub_heading">Live Webinar That Reveals How to Create Professional Videos Using AI in Minutes</p>
					</div>
               <div class="sc_subscribe_box">
                  <div class="sc_subscribe_box_inner">
                     <div class="sc_subscribe_head text-center">
                        <h3 class="sc_subscribe_top_heading fs20 fw600 fontPlus text-capitalize pb10">5 LUCKY ATTENDEES Will Get ShowcaseAI For FREE!</h3>
                        <h4 class="sc_subscribe_main_heading fs25 fw700 sc_primary pb30">Join the FREE Webinar That Begins 2nd Feb 2026 At 10 AM EST</h4>
                     </div>
                     <div class="sc_subscribe_form_parent">
                        <form data-smart-form action="javascript:void(0);" method="post" class="sc_subscribe_form d-flex justify-content-center align-items-center">
                           <div class="sc_pre_input_group">
                              <input type="text" name="first_name" placeholder="First Name" required />
                           </div>
                           <div class="sc_pre_input_group">
                              <input type="text" name="last_name" placeholder="Last Name" required />
                           </div>
                           <div class="sc_pre_input_group">
                              <input type="email" name="email" placeholder="Email Address" required />
                           </div>
                           <input type="hidden" name="autoresponder_id" value="CCmjB">
                           <input type="hidden" name="webinar_id" value="6898767413996889685">
                           <button type="submit" class="sc_primary_btn">
                              <span>Reserve Your Seat Now</span>
                           </button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
          </section>
         <!-- Subscribe Section -->

         <!-- Webinar bullets Section -->
         <section class="sc_webinar_bullets_wrapper relative pt60 pb80">
            <div class="container">
               <div class="sc_webinar_bullets_parent">
                  <div class="sc_webinar_bullets_box relative">
                     <div class="sc_webinar_heading_parent text-center">
                        <h2 class="sc_webinar_bullets_heading d-inline-flex justify-content-center align-items-center">In this FREE webinar, You'll learn</h2>
                     </div>
                     <div class="sc_webinar_bullets_list">
                        <ul>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to use AI-generated videos to <b>sell your own products or services faster</b> without hiring designers, editors, or agencies
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to turn ShowcaseAI into a <b>profit-generating asset</b> by creating high-demand video content for clients, brands, and businesses
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to create <b>studio-quality AI </b>videos using nothing but photos, products, and simple text
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to turn <b>any image into a talking avatar</b> that speaks naturally with realistic expressions
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to create <b>product promo videos</b> without models, cameras, or expensive photoshoots
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to generate <b>ready-to-use AI ads</b> that look like real studio productions
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to transform <b>static product images into cinematic showcase videos</b>
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How fashion brands and sellers are using <b>AI virtual try-ons</b> to boost engagement and sales
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to create <b>multilingual videos</b> to reach global audiences effortlessly
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to produce <b>high-converting marketing videos in minutes</b>, not days
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How to use <b>one simple dashboard</b> to replace multiple video tools
                              </p>
                           </li>
                           <li>
                              <img src="<?= base_url('prelaunch-assets/images/checked.png') ?>" alt="Check Icon">
                              <p>
                                 How ShowcaseAI helps creators, marketers, and businesses <b>save time, cut costs, and scale faster</b>
                              </p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Webinar bullets Section -->

         <!-- Why Us -->
			<section class="sc_whyus_wrapper pt70 pb80 relative bg_cover" id="whyus">
				<div class="container">
					<div class="sc_common_heading text-center">
						<span class="sc_top_heading" data-splitting>Why Us</span>
						<h2 class="sc_gredient_heading" data-splitting>Why Creators and Brands
							Love ShowcaseAI</h2>
						<p class="sc_sub_heading">Helping creators and brands turn ideas into
							videos that truly connect with
							their audience.</p>
					</div>
					<div class="sc_whyus_boxs_parent pt60">
						<div class="row gy-4">
							<div class="col-lg-3 col-sm-6">
								<div class="sc_whyus_box">
									<div class="sc_whyus_inner">
										<div class="sc_whyus_content">
											<img loading="lazy" src="<?= base_url('jv-assets/images/box-icon1.png') ?>" alt="Icon">
											<h2>Time-Saving <br>Workflow</h2>
											<p>No shoots or edits required. Create professional videos in
												minutes.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="sc_whyus_box">
									<div class="sc_whyus_inner">
										<div class="sc_whyus_content">
											<img loading="lazy" src="<?= base_url('jv-assets/images/box-icon2.png') ?>" alt="Icon">
											<h2>Professional <br>Studio Quality</h2>
											<p>Every video looks polished, realistic, and ready to share
												instantly.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="sc_whyus_box">
									<div class="sc_whyus_inner">
										<div class="sc_whyus_content">
											<img loading="lazy" src="<?= base_url('jv-assets/images/box-icon3.png') ?>" alt="Icon">
											<h2>AI-Powered <br>Precision</h2>
											<p>Realistic motion, speech, and expressions delivered naturally by
												AI
												technology.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="sc_whyus_box">
									<div class="sc_whyus_inner">
										<div class="sc_whyus_content">
											<img loading="lazy" src="<?= base_url('jv-assets/images/box-icon4.png') ?>" alt="Icon">
											<h2>Cost-Effective <br>Solution</h2>
											<p>Replace expensive shoots with one easy-to-use, AI-powered creation
												tool.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Why Us -->

         <!-- FAQ Section -->
         <section class="sc_faq_wrapper relative pt80 pb80">
            <div class="container">
               <div class="sc_faq_parent d-flex justify-content-between align-items-center">
                  <div class="sc_faq_left">
                     <div class="sc_common_heading text-left">
                        <h2 class="sc_gredient_heading" data-splitting>We Know You've <span>Got a Few Questions</span> </h2>
                        <p class="sc_sub_heading">A quick guide to how ShowcaseAI helps you create videos faster, smarter, and easier.</p>
                     </div>
                     <div class="sc_faq_img pt40">
                        <img loading="lazy" src="<?= base_url('jv-assets/images/faq-img.png') ?>" alt="image">
                     </div>
                  </div>
                  <div class="sc_faq_right">
                     <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button" type="button"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapse1" aria-expanded="true"
                                 aria-controls="collapse1">
                              What is ShowcaseAI?
                              </button>
                           </h2>
                           <div id="collapse1" class="accordion-collapse collapse show"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>ShowcaseAI is an all-in-one AI video studio that turns your photos
                                    or
                                    products into lifelike talking avatars, product videos, and
                                    AI-powered ads -
                                    all in minutes.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapse2" aria-expanded="true"
                                 aria-controls="collapse2">
                              Do I need any video editing skills?
                              </button>
                           </h2>
                           <div id="collapse2" class="accordion-collapse collapse"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>Not at all! ShowcaseAI handles everything - voice, visuals, and
                                    animation -
                                    so you can create stunning videos effortlessly.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapse3" aria-expanded="true"
                                 aria-controls="collapse3">
                              Can I create talking avatars from any photo?
                              </button>
                           </h2>
                           <div id="collapse3" class="accordion-collapse collapse"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>Yes! Upload a clear photo, add your script or audio, and
                                    ShowcaseAI brings it
                                    to life with natural expressions and voice sync.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapse4" aria-expanded="true"
                                 aria-controls="collapse4">
                              What kind of videos can I create?
                              </button>
                           </h2>
                           <div id="collapse4" class="accordion-collapse collapse"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>From talking avatars and product showcases to marketing ads and
                                    virtual
                                    try-ons - you can create almost any kind of AI video.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapse5" aria-expanded="true"
                                 aria-controls="collapse5">
                              Can I clone my own voice?
                              </button>
                           </h2>
                           <div id="collapse5" class="accordion-collapse collapse"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>Yes! You can record or upload your voice, and ShowcaseAI will
                                    replicate it
                                    perfectly for your AI avatars.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapse6" aria-expanded="true"
                                 aria-controls="collapse6">
                              Does ShowcaseAI support multiple languages?
                              </button>
                           </h2>
                           <div id="collapse6" class="accordion-collapse collapse"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>Absolutely. Create videos in multiple languages and reach global
                                    audiences
                                    with our multilingual AI technology.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapse7" aria-expanded="true"
                                 aria-controls="collapse7">
                              Can I customize background, camera angle, or style?
                              </button>
                           </h2>
                           <div id="collapse7" class="accordion-collapse collapse"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>Yes! You can choose from AI-generated backgrounds, camera angles,
                                    and styles
                                    - or let ShowcaseAI do it automatically.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapse8" aria-expanded="true"
                                 aria-controls="collapse8">
                              Can I use ShowcaseAI for commercial projects?
                              </button>
                           </h2>
                           <div id="collapse8" class="accordion-collapse collapse"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>Of course! ShowcaseAI is built for creators, brands, and
                                    businesses to
                                    produce professional, ready-to-share marketing content.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- FAQ Section -->
      </div>
      <!-- Footer Start -->
      <footer class="sc_footer_wrapper relative pt60 pb50">
         <div class="container">
            <div class="sc_footer_top text-center pb50">
               <img loading="lazy"
                  src="https://showcaseai.app/assets/images/footer-placehold-logo.png"
                  class="sc_placehold_logo" alt="Placehold Logo">
               <a href="https://showcaseai.app/">
                  <svg width="309" height="50" viewBox="0 0 309 50" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <g clip-path="url(#clip0_2481_2311)">
                        <g filter="url(#filter0_i_2481_2311)">
                           <path
                              d="M304.242 47.2535C304.242 47.8663 303.941 48.167 303.329 48.167H296.946C296.333 48.167 296.032 47.8663 296.032 47.2535V17.0615C296.032 16.4486 296.333 16.148 296.946 16.148H303.329C303.941 16.148 304.242 16.4486 304.242 17.0615V47.2535ZM290.482 47.1147C290.528 47.2535 290.551 47.3807 290.551 47.4963C290.551 47.7044 290.482 47.8779 290.343 47.9935C290.204 48.0976 290.019 48.1554 289.776 48.1554H283.22C282.7 48.1554 282.364 47.901 282.191 47.4038L280.734 43.1369H269.251L267.794 47.4038C267.644 47.901 267.297 48.1554 266.765 48.1554H260.232C259.989 48.1554 259.793 48.0976 259.642 47.9935C259.503 47.8663 259.434 47.7044 259.434 47.4963C259.434 47.3691 259.457 47.2419 259.503 47.1147L271.159 16.8302C271.344 16.3446 271.691 16.1017 272.212 16.1017H277.843C278.363 16.1017 278.71 16.3446 278.895 16.8302L290.482 47.1147ZM278.433 36.3145L275.38 27.3413L274.975 25.8844L274.628 27.3413L271.576 36.3145H278.433ZM300.334 3.31265L300.785 4.56149C301.039 5.24373 301.432 5.86816 301.953 6.37694C302.473 6.8973 303.097 7.29045 303.791 7.53328L305.052 7.98425C305.075 7.99582 305.098 8.00738 305.109 8.03051C305.121 8.05363 305.133 8.07676 305.133 8.09989C305.133 8.12301 305.121 8.14614 305.109 8.16927C305.098 8.19239 305.075 8.20396 305.052 8.21552L303.791 8.66649C303.097 8.90932 302.473 9.30248 301.953 9.82283C301.432 10.3432 301.039 10.956 300.785 11.6383L300.334 12.8871C300.322 12.9102 300.311 12.9334 300.287 12.9449C300.264 12.9565 300.241 12.9681 300.218 12.9681C300.195 12.9681 300.172 12.9565 300.149 12.9449C300.126 12.9334 300.114 12.9102 300.102 12.8871L299.651 11.6383C299.409 10.956 299.004 10.3316 298.484 9.82283C297.963 9.30248 297.339 8.90932 296.645 8.66649L295.385 8.21552C295.361 8.20396 295.338 8.19239 295.327 8.16927C295.315 8.14614 295.304 8.12301 295.304 8.09989C295.304 8.07676 295.315 8.05363 295.327 8.03051C295.338 8.00738 295.361 7.99582 295.385 7.98425L296.645 7.53328C297.339 7.29045 297.963 6.8973 298.484 6.37694C299.004 5.85659 299.397 5.24373 299.651 4.56149L300.102 3.31265C300.114 3.28952 300.126 3.2664 300.149 3.25483C300.172 3.24327 300.195 3.23171 300.218 3.23171C300.241 3.23171 300.276 3.24327 300.299 3.25483C300.311 3.2664 300.322 3.28952 300.334 3.31265ZM306 0.317738L306.231 0.953723C306.358 1.30062 306.555 1.61284 306.821 1.87879C307.087 2.14475 307.399 2.34133 307.746 2.46852L308.382 2.69979C308.393 2.69979 308.405 2.71136 308.417 2.72292C308.428 2.73448 308.428 2.74605 308.428 2.75761C308.428 2.76917 308.428 2.78074 308.417 2.7923C308.405 2.80386 308.393 2.81543 308.382 2.81543L307.746 3.04669C307.399 3.17389 307.075 3.37047 306.821 3.63643C306.555 3.90238 306.358 4.21459 306.231 4.56149L306 5.19748C306 5.20904 305.988 5.22061 305.977 5.23217C305.965 5.24373 305.954 5.24373 305.942 5.24373C305.93 5.24373 305.919 5.24373 305.907 5.23217C305.896 5.22061 305.884 5.20904 305.884 5.19748L305.653 4.56149C305.526 4.21459 305.329 3.90238 305.063 3.63643C304.797 3.37047 304.485 3.17389 304.138 3.04669L303.502 2.81543C303.491 2.81543 303.479 2.80386 303.467 2.7923C303.456 2.78074 303.456 2.76917 303.456 2.75761C303.456 2.74605 303.456 2.73448 303.467 2.72292C303.479 2.71136 303.491 2.69979 303.502 2.69979L304.138 2.46852C304.485 2.34133 304.809 2.14475 305.063 1.87879C305.329 1.61284 305.526 1.30062 305.653 0.953723L305.884 0.317738C305.884 0.306174 305.896 0.294611 305.907 0.283048C305.919 0.271484 305.93 0.271484 305.942 0.271484C305.954 0.271484 305.965 0.271484 305.977 0.283048C305.988 0.294611 306 0.306174 306 0.317738ZM306 11.0485L306.231 11.6845C306.358 12.0314 306.555 12.3436 306.821 12.6096C307.087 12.8756 307.399 13.0721 307.746 13.1993L308.382 13.4306C308.393 13.4306 308.405 13.4422 308.417 13.4537C308.428 13.4653 308.428 13.4769 308.428 13.4884C308.428 13.5 308.428 13.5115 308.417 13.5231C308.405 13.5347 308.393 13.5462 308.382 13.5462L307.746 13.7775C307.399 13.9047 307.075 14.1013 306.821 14.3672C306.555 14.6332 306.358 14.9454 306.231 15.2923L306 15.9283C306 15.9399 305.988 15.9514 305.977 15.963C305.965 15.9745 305.954 15.9745 305.942 15.9745C305.93 15.9745 305.919 15.9745 305.907 15.963C305.896 15.9514 305.884 15.9399 305.884 15.9283L305.653 15.2923C305.526 14.9454 305.329 14.6332 305.063 14.3672C304.797 14.1013 304.485 13.9047 304.138 13.7775L303.502 13.5462C303.491 13.5462 303.479 13.5347 303.467 13.5231C303.456 13.5115 303.456 13.5 303.456 13.4884C303.456 13.4769 303.456 13.4653 303.467 13.4537C303.479 13.4422 303.491 13.4306 303.502 13.4306L304.138 13.1993C304.485 13.0721 304.809 12.8756 305.063 12.6096C305.329 12.3436 305.526 12.0314 305.653 11.6845L305.884 11.0485C305.896 10.9907 305.977 10.9907 306 11.0485Z"
                              fill="#06B873" />
                        </g>
                        <g filter="url(#filter1_i_2481_2311)">
                           <path
                              d="M242.564 49.6654C239.812 49.6654 237.349 49.0179 235.163 47.7343C232.978 46.4392 231.266 44.7047 230.041 42.5193C228.826 40.3338 228.214 37.9517 228.214 35.3615C228.214 32.7482 228.792 30.343 229.948 28.1576C231.116 25.9605 232.746 24.2029 234.828 22.9194C236.909 21.6127 239.268 20.9651 241.916 20.9651C244.772 20.9651 247.247 21.578 249.34 22.8153C251.433 24.041 253.029 25.7524 254.127 27.9147C255.237 30.0886 255.792 32.5516 255.792 35.3153C255.792 35.9281 255.758 36.5179 255.7 37.1192C255.642 37.6858 255.318 37.9633 254.74 37.9633H236.169C236.666 39.4781 237.534 40.6691 238.748 41.5133C239.962 42.3689 241.35 42.7852 242.899 42.7852C243.882 42.7852 244.772 42.6465 245.559 42.3805C246.368 42.0914 247.143 41.6867 247.906 41.1548C248.103 41.0045 248.299 40.9235 248.496 40.9235C248.739 40.9235 248.958 41.0623 249.155 41.3282L251.953 45.3176C252.092 45.5142 252.161 45.6992 252.161 45.8842C252.161 46.1386 252.034 46.3699 251.803 46.5664C250.542 47.5493 249.132 48.3241 247.559 48.8676C245.998 49.3995 244.344 49.6654 242.564 49.6654ZM248.126 32.251C247.698 30.7478 246.969 29.5914 245.94 28.782C244.911 27.9725 243.651 27.5794 242.159 27.5794C240.702 27.5794 239.43 27.9841 238.355 28.8051C237.291 29.6261 236.539 30.7709 236.1 32.251H248.126ZM214.095 49.6654C211.932 49.6654 209.943 49.307 208.128 48.59C206.324 47.8615 204.624 46.7977 203.052 45.3985C202.809 45.202 202.682 44.9823 202.682 44.7394C202.682 44.5429 202.763 44.3347 202.936 44.1266L206.012 40.276C206.22 40.0216 206.44 39.8944 206.671 39.8944C206.844 39.8944 207.041 39.9753 207.284 40.1488C208.394 40.9813 209.481 41.6289 210.568 42.0799C211.666 42.5308 212.765 42.7621 213.875 42.7621C214.638 42.7621 215.239 42.6233 215.702 42.3343C216.153 42.0336 216.384 41.6058 216.384 41.0623C216.384 40.6923 216.245 40.3685 215.98 40.0563C215.725 39.7556 215.263 39.4434 214.615 39.1428C213.956 38.819 213.031 38.4605 211.84 38.0442C209.55 37.2695 207.654 36.2172 206.162 34.8759C204.671 33.5345 203.93 31.696 203.93 29.3601C203.93 27.8685 204.289 26.4924 205.029 25.2089C205.769 23.9369 206.902 22.9078 208.406 22.133C209.92 21.3467 211.782 20.9536 213.991 20.9536C215.505 20.9536 217.066 21.2542 218.662 21.8671C220.27 22.4568 221.692 23.3472 222.918 24.5382C223.137 24.7464 223.241 24.9661 223.241 25.1742C223.241 25.3592 223.137 25.5674 222.918 25.8102L219.321 29.522C219.125 29.7302 218.917 29.8458 218.685 29.8458C218.489 29.8458 218.281 29.7533 218.049 29.5683C217.425 29.0711 216.731 28.6548 215.98 28.3426C215.239 28.0072 214.488 27.8454 213.748 27.8454C212.973 27.8454 212.383 27.9841 211.967 28.2732C211.574 28.5623 211.377 28.9554 211.377 29.4527C211.377 29.7996 211.528 30.1233 211.805 30.4124C212.106 30.6899 212.591 30.9675 213.239 31.2565C213.898 31.5341 214.8 31.8578 215.968 32.2394C218.477 33.0489 220.408 34.1243 221.773 35.4772C223.137 36.8301 223.819 38.6571 223.819 40.9698C223.819 42.473 223.438 43.8953 222.652 45.2251C221.888 46.5433 220.778 47.6187 219.298 48.4397C217.841 49.2491 216.107 49.6654 214.095 49.6654ZM190.205 22.1099C190.401 21.6358 190.748 21.4046 191.257 21.4046H195.628C196.241 21.4046 196.541 21.7052 196.541 22.3181V48.0697C196.541 48.6825 196.241 48.9832 195.628 48.9832H191.095C190.598 48.9832 190.239 48.7519 190.043 48.2778L189.476 46.9133C187.58 48.6941 185.198 49.5845 182.319 49.5845C179.717 49.5845 177.323 48.9485 175.138 47.665C172.952 46.3699 171.218 44.6354 169.946 42.4499C168.674 40.2528 168.038 37.8361 168.038 35.2228C168.038 32.621 168.674 30.239 169.946 28.0651C171.241 25.8796 172.975 24.1451 175.161 22.8731C177.346 21.6011 179.74 20.9536 182.319 20.9536C185.221 20.9536 187.626 21.8555 189.546 23.6594L190.205 22.1099ZM182.457 42.1608C183.718 42.1608 184.862 41.8717 185.903 41.2936C186.955 40.7038 187.776 39.8828 188.366 38.8537C188.979 37.8014 189.28 36.6335 189.28 35.3269C189.28 34.0086 188.979 32.8176 188.389 31.7769C187.8 30.7131 186.979 29.8805 185.949 29.2676C184.92 28.6548 183.776 28.3541 182.504 28.3541C181.243 28.3541 180.098 28.6548 179.058 29.2676C178.04 29.8574 177.231 30.6899 176.641 31.7538C176.063 32.8176 175.774 34.0086 175.774 35.3269C175.774 36.6451 176.063 37.8245 176.641 38.8537C177.219 39.8828 178.005 40.7038 179.011 41.2936C180.029 41.8833 181.174 42.1608 182.457 42.1608ZM155.145 49.6654C152.439 49.6654 149.999 49.0294 147.825 47.7459C145.663 46.4508 143.974 44.7163 142.749 42.5308C141.535 40.3453 140.922 37.9517 140.922 35.35C140.922 32.7251 141.535 30.3199 142.749 28.1229C143.963 25.9258 145.663 24.1682 147.825 22.8847C149.999 21.5896 152.45 20.9536 155.179 20.9536C156.972 20.9536 158.648 21.2195 160.209 21.7515C161.794 22.2834 163.204 23.035 164.453 24.0063C164.708 24.2144 164.835 24.4457 164.835 24.6885C164.835 24.8736 164.765 25.0701 164.627 25.2783L161.736 29.4064C161.539 29.6955 161.308 29.8342 161.053 29.8342C160.892 29.8342 160.683 29.7533 160.464 29.603C159.689 29.0711 158.914 28.6663 158.14 28.4004C157.365 28.1229 156.474 27.9957 155.468 27.9957C154.243 27.9957 153.098 28.3194 152.046 28.9554C150.993 29.5914 150.161 30.4702 149.536 31.6034C148.912 32.7135 148.6 33.9624 148.6 35.3615C148.6 36.726 148.912 37.9633 149.536 39.0734C150.172 40.1835 151.016 41.0507 152.069 41.6983C153.133 42.3227 154.266 42.6349 155.491 42.6349C156.474 42.6349 157.365 42.5077 158.14 42.2533C158.926 41.9758 159.701 41.5826 160.464 41.0507C160.695 40.9004 160.892 40.8195 161.053 40.8195C161.308 40.8195 161.539 40.9582 161.736 41.2473L164.627 45.3754C164.777 45.5836 164.858 45.7917 164.858 45.9883C164.858 46.1849 164.765 46.3699 164.58 46.5318C163.32 47.5378 161.886 48.3125 160.302 48.856C158.718 49.3879 156.995 49.6654 155.145 49.6654ZM129.798 22.1562C129.948 21.6589 130.295 21.4046 130.827 21.4046H137.453C137.695 21.4046 137.88 21.4624 138.019 21.5896C138.17 21.6936 138.251 21.8555 138.251 22.0637C138.251 22.1909 138.227 22.3181 138.181 22.4453L128.907 48.2431C128.722 48.7288 128.375 48.9716 127.855 48.9716H122.027C121.507 48.9716 121.16 48.7288 120.975 48.2431L117.217 38.2871L113.771 48.2431C113.621 48.7288 113.274 48.9716 112.742 48.9716H106.821C106.301 48.9716 105.954 48.7288 105.769 48.2431L96.4952 22.4453C96.4489 22.3065 96.4258 22.1793 96.4258 22.0637C96.4258 21.8555 96.4952 21.6936 96.6339 21.5896C96.7843 21.4624 96.9808 21.4046 97.2237 21.4046H103.514C104.046 21.4046 104.393 21.6589 104.543 22.1562L109.828 39.6053L114.337 22.1793C114.395 21.9018 114.511 21.7052 114.684 21.5896C114.846 21.4624 115.066 21.4046 115.343 21.4046H121.969C122.224 21.4046 122.42 21.4624 122.559 21.5896C122.698 21.7168 122.767 21.8787 122.767 22.0868C122.767 22.1909 122.744 22.3181 122.698 22.4568L120.605 28.5392L124.479 39.6169L129.798 22.1562ZM47.5359 20.9536C49.7676 20.9536 51.7334 21.4624 53.41 22.4799C55.0983 23.4975 56.405 24.9429 57.33 26.8046C58.2551 28.6548 58.7176 30.8056 58.7176 33.257V48.0697C58.7176 48.6825 58.417 48.9832 57.8041 48.9832H51.8837C51.2708 48.9832 50.9702 48.6825 50.9702 48.0697V34.1243C50.9702 32.9101 50.7389 31.8463 50.2879 30.9328C49.8485 30.0077 49.2125 29.2908 48.3915 28.7935C47.5821 28.2963 46.6455 28.0419 45.5701 28.0419C44.4253 28.0419 43.3846 28.3194 42.4248 28.8629C41.4882 29.3948 40.7366 30.1002 40.1931 30.979C39.6496 31.8578 39.3721 32.7945 39.3721 33.7774V48.0697C39.3721 48.6825 39.0715 48.9832 38.4586 48.9832H32.6075C31.9947 48.9832 31.694 48.6825 31.694 48.0697V14.27C31.694 13.6571 31.9947 13.3564 32.6075 13.3564H38.4586C39.0715 13.3564 39.3721 13.6571 39.3721 14.27V24.2145C40.4359 23.2547 41.7195 22.4799 43.2227 21.8671C44.7375 21.2542 46.1714 20.9536 47.5359 20.9536ZM13.4239 49.5267C10.9725 49.5267 8.67135 49.0526 6.49744 48.1159C4.33509 47.1793 2.46182 45.8033 0.842951 43.9878C0.657937 43.7797 0.56543 43.5715 0.56543 43.375C0.56543 43.1437 0.681063 42.924 0.912331 42.6927L4.94795 38.8652C5.14453 38.6687 5.35267 38.5646 5.56081 38.5646C5.80364 38.5646 6.02334 38.6802 6.21992 38.9115C7.19124 39.9175 8.2782 40.6691 9.48079 41.1895C10.6834 41.6867 11.9322 41.9411 13.2158 41.9411C14.5109 41.9411 15.4706 41.7214 16.1066 41.282C16.7426 40.8426 17.0664 40.2413 17.0664 39.4781C17.0664 38.9577 16.9276 38.5183 16.6385 38.1367C16.361 37.7552 15.8291 37.3736 15.0196 36.992C14.2333 36.6104 13.0654 36.1941 11.5391 35.7431C9.00669 35.0031 6.74027 33.812 4.75137 32.1932C2.77403 30.5512 1.79115 28.3426 1.79115 25.5674C1.79115 23.9138 2.20743 22.3874 3.03999 20.9883C3.87255 19.5891 5.15609 18.479 6.86747 17.6349C8.57885 16.7792 10.6949 16.3629 13.2042 16.3629C15.3203 16.3629 17.3323 16.7445 19.2634 17.5077C21.1945 18.2709 22.9059 19.2885 24.4091 20.5836C24.6404 20.7801 24.756 20.9998 24.756 21.2427C24.756 21.4508 24.6635 21.6705 24.4785 21.8786L20.7898 26.0299C20.5932 26.2727 20.3735 26.3999 20.1307 26.3999C19.9341 26.3999 19.7259 26.319 19.5178 26.1455C18.6621 25.4749 17.7024 24.9198 16.627 24.4573C15.5516 23.9832 14.4877 23.7519 13.4355 23.7519C11.2962 23.7519 10.2208 24.3879 10.2208 25.6483C10.2208 26.1802 10.3943 26.6312 10.7412 26.9897C11.0881 27.3597 11.5506 27.6603 12.1288 27.9263C12.7185 28.1807 13.6205 28.5276 14.8346 28.9554C14.9965 29.0017 15.2509 29.0826 15.5863 29.2098C17.7486 29.973 19.5294 30.7824 20.9401 31.6497C22.3508 32.5169 23.4493 33.5808 24.2241 34.8412C24.9988 36.09 25.3804 37.5933 25.3804 39.3509C25.3804 41.3861 24.8832 43.1784 23.9003 44.7279C22.9174 46.2658 21.5183 47.4568 19.7028 48.3009C17.9105 49.1104 15.8175 49.5267 13.4239 49.5267Z"
                              fill="white" />
                           <path
                              d="M78.2253 32.1831C78.2253 31.7201 78.5837 31.3844 78.9769 31.3844C79.1041 31.3844 79.2313 31.4191 79.3585 31.5001L82.9894 33.9887C83.4866 34.3012 83.4866 35.0767 82.9778 35.3777L79.3007 37.7968C79.185 37.8662 79.0578 37.9009 78.9306 37.9009C78.5375 37.9009 78.1675 37.5653 78.179 37.0907L78.2253 32.1831Z"
                              fill="white" />
                           <path
                              d="M81.648 21.4302C74.3978 21.4302 68.5236 27.3101 68.5236 34.5674C68.5236 41.8247 74.3978 47.7047 81.648 47.7047C84.2382 47.7047 86.6665 46.9523 88.7017 45.6444C86.1462 47.8667 82.8044 49.2094 79.1503 49.2094C71.0675 49.2094 64.5227 42.6581 64.5227 34.5674C64.5227 26.4883 71.0791 19.9255 79.1503 19.9255C82.8044 19.9255 86.1346 21.2681 88.7017 23.4905C86.6665 22.1941 84.2498 21.4302 81.648 21.4302Z"
                              fill="white" />
                           <path
                              d="M82.0874 23.8609C87.9963 23.8609 92.7836 28.6528 92.7836 34.5674C92.7836 40.4821 87.9963 45.274 82.0874 45.2508C79.4163 45.2508 76.9764 44.267 75.1032 42.6465C76.5948 43.6072 78.364 44.1628 80.2604 44.1628C85.5564 44.1628 89.858 39.8686 89.858 34.5559C89.858 29.2547 85.568 24.9489 80.2604 24.9489C78.364 24.9489 76.5948 25.516 75.1032 26.4652C76.9764 24.8447 79.4163 23.8609 82.0874 23.8609Z"
                              fill="white" />
                        </g>
                     </g>
                     <defs>
                        <filter id="filter0_i_2481_2311" x="256.173" y="-2.98939" width="52.255"
                           height="51.1564" filterUnits="userSpaceOnUse"
                           color-interpolation-filters="sRGB">
                           <feflood flood-opacity="0" result="BackgroundImageFix" />
                           <feblend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                              result="shape" />
                           <fecolormatrix in="SourceAlpha" type="matrix"
                              values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                              result="hardAlpha" />
                           <feoffset dx="-3.26087" dy="-3.26087" />
                           <fegaussianblur stdDeviation="1.63044" />
                           <fecomposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                           <fecolormatrix type="matrix"
                              values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.4 0" />
                           <feblend mode="normal" in2="shape"
                              result="effect1_innerShadow_2481_2311" />
                        </filter>
                        <filter id="filter1_i_2481_2311" x="-2.69544" y="10.0956"
                           width="258.487" height="39.5695" filterUnits="userSpaceOnUse"
                           color-interpolation-filters="sRGB">
                           <feflood flood-opacity="0" result="BackgroundImageFix" />
                           <feblend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                              result="shape" />
                           <fecolormatrix in="SourceAlpha" type="matrix"
                              values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                              result="hardAlpha" />
                           <feoffset dx="-3.26087" dy="-3.26087" />
                           <fegaussianblur stdDeviation="1.63044" />
                           <fecomposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                           <fecolormatrix type="matrix"
                              values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.4 0" />
                           <feblend mode="normal" in2="shape"
                              result="effect1_innerShadow_2481_2311" />
                        </filter>
                        <clippath id="clip0_2481_2311">
                           <rect width="308.696" height="50" fill="white" />
                        </clippath>
                     </defs>
                  </svg>
               </a>
               <p class="fs18 fw300 pb30">ShowcaseAI is your all-in-one AI studio for
                  creating lifelike avatars, cinematic product videos, marketing ads, and
                  virtual try-ons — all in minutes. Built for creators, brands, and
                  businesses that want to create smarter and stand out effortlessly.
               </p>
               <ul class="d-inline-flex justify-content-center align-items-center">
                  <li>
                     <a href="https://www.facebook.com/profile.php?id=61554020237314"
                        target="_blank">
                     <img loading="lazy" src="https://showcaseai.app/assets/images/fb.svg"
                        alt="Facebook Icon">
                     </a>
                  </li>
                  <li>
                     <a href="https://x.com/PixaLabAI" target="_blank">
                     <img loading="lazy" src="https://showcaseai.app/assets/images/twitter.svg"
                        alt="Twitter Icon">
                     </a>
                  </li>
                  <li>
                     <a href="https://www.instagram.com/pixalab.ai" target="_blank">
                     <img loading="lazy" src="https://showcaseai.app/assets/images/insta.svg"
                        alt="Instagram Icon">
                     </a>
                  </li>
                  <li>
                     <a href="https://www.linkedin.com/company/pixalabai" target="_blank">
                     <img loading="lazy" src="https://showcaseai.app/assets/images/linkedin.svg"
                        alt="Linkedin Icon">
                     </a>
                  </li>
                  <li>
                     <a href="https://www.youtube.com/@pixalab-ai" target="_blank">
                     <img loading="lazy" src="https://showcaseai.app/assets/images/youtube.svg"
                        alt="Youtube Icon">
                     </a>
                  </li>
               </ul>
            </div>
            <div
               class="sc_footer_copyright text-center pt50 d-flex justify-content-center align-items-center">
               <div class="sc_footer_left">
                  <p class="fs16 fw300">© <span id="currentYear"></span> ShowcaseAI, All
                     Rights Reserved. Made with ❤️ by <a href="https://pixalab.ai/"
                        target="_blank">PixaLab</a> | Powered by <a href="https://pixelnx.com/"
                        target="_blank">PixelNX</a>.
                  </p>
                  <div
                     class="sc_footer_legal_pages d-flex flex-wrap justify-content-between align-items-center pt30">
                     <a href="https://showcaseai.app/privacy-policy" target="_blank">Privacy Policy</a>
                     <a href="https://showcaseai.app/terms-conditions" target="_blank">Terms & Conditions</a>
                     <a href="https://support.showcaseai.app/auth/registration" target="_blank" rel="nofollow,noindex">Support</a>
                     <a href="https://showcaseai.app/disclaimer" target="_blank">Disclaimer</a>
                     <a href="https://showcaseai.app/refund-policy" target="_blank">Refund Policy</a>
                     <a href="https://showcaseai.app/cookie-policy" target="_blank">Cookie Policy</a>
                     <a href="https://showcaseai.app/data-remover" target="_blank">Data Remover</a>
                     <a href="https://showcaseai.app/contact-us" target="_blank">Contact Us</a>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer End -->

      <!--Main js file Style-->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://unpkg.com/splitting/dist/splitting.min.js" defer></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" defer></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" defer></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="https://pixelnx.com/assets/js/lead-sync/leadSyncScript.js"></script>
      <script src="<?= base_url('prelaunch-assets/js/custom.js') ?>"></script>
   </body>
</html>