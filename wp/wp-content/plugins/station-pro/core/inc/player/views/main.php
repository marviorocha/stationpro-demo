<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow" />
  <link rel="stylesheet" href="../assets/css/animate.min.css" />
  <link rel="stylesheet" href="../assets/css/player.css">
  <link rel="stylesheet" href="../assets/css/material_icos.css" />
  <script type="text/javascript" src="../assets/javascript/alpine.min.js" defer></script>
  <script type="text/javascript" src="../assets/javascript/radio.js"></script>
  <script type="text/javascript" src="../assets/javascript/amplitude.js"></script>
  <script type="text/javascript" src="../assets/javascript/tailwindcss.js"></script>
  <title>Player</title>
</head>

<body>

  <div x-data="app" x-init="initializePlayer" class=" font-normal text-xl">


    <div x-show="!screen" x-bind="closeWindow" class=" z-10 flex item-center justify-end mx-8 mt-8">

      <span
        class="inline-flex items-center animate__animated animate__pulse animate__infinite    infinite relative rounded-full p-2 z-10 cursor-pointer bg-red-500/[.6] backdrop-blur-lg text-white group transition-all duration-500 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-none"
        role="alert" tabindex="0">


        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-8 h-8">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M9.348 14.651a3.75 3.75 0 010-5.303m5.304 0a3.75 3.75 0 010 5.303m-7.425 2.122a6.75 6.75 0 010-9.546m9.546 0a6.75 6.75 0 010 9.546M5.106 18.894c-3.808-3.808-3.808-9.98 0-13.789m13.788 0c3.808 3.808 3.808 9.981 0 13.79M12 12h.008v.007H12V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
        </svg>


        <span
          class="whitespace-nowrap z-10 inline-block group-hover:max-w-screen-2xl group-focus:max-w-screen-2xl max-w-0 scale-80 group-hover:scale-100 overflow-hidden transition-all duration-500 group-hover:px-2 group-focus:px-2" />Open
        player</span>
      <span class="animate-ping absolute  top-2 left-2 z-1 rounded-full w-10 h-10 bg-white opacity-40"></span>
      </span>

    </div>

    <!-- // star navbar player // -->

    <div x-show="screen"
      class="h-screen animate__animated animate__fadeInUp  bg-white/[.6] backdrop-blur-lg dark:bg-slate-900/[.6]">
      <div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 mx-auto">
        <!-- Grid -->
        <div class="grid justify-center sm:grid-cols-2 sm:items-center gap-4">

          <div class="flex items-center gap-x-3 md:gap-x-5">

            <figure>
              <img :src="station_data.radio_logo.url ? station_data.radio_logo.url : 'https://picsum.photos/1024/1024' "
                class="flex-shrink-0 rounded-lg w-20 h-10 md:w-16 md:h-14" width="40" height="40"
                :alt="station_data.radio_name" ">
                        </figure>

          <div class" grow space-x-5">
              <p x-text="station_data.radio_name ? station_data.radio_name : 'StationPro.co'"
                class="truncate md:text-xl text-gray-800 font-semibold dark:text-gray-200">
              </p>


              <span
                class="text-xs flex items-center justify-between space-x-2 md:text-sm text-wite-800 dark:text-gray-200">
                <span x-show='!play' x-transition
                  class="amplitude-current-time text-xs md:text-sm text-wite-800 dark:text-gray-200"></span>
                <marquee x-show="parseInt(station_data.toggle_marqueet)" onmouseout="this.start();"
                  onmouseover="this.stop();">
                  <span
                    x-text="station_data.marqueet_one ? station_data.marqueet_one : 'Here is your marqueet radio promotion...'"></span>
                </marquee>
              </span>
              <!-- <p x-text="station_data.radio_description ? station_data.radio_description : 'Radio slugan here'" class="text-xs md:text-sm text-gray-800 dark:text-gray-200">

            </p> -->
          </div>

          <div class="mx-4">

            <button x-bind="navplayer"
              class="transition transform duration-500 ease-in hover:scale-105 amplitude-play-pause">

              <div x-show="load" class="fill-current relative z-10 p-1 items-center bg-white rounded-full w-14 h-14">
                <div class="w-12 h-12 rounded-full absolute border-4 border-solid border-gray-200">
                </div>
                <div
                  class="w-12 h-12 rounded-full animate-spin absolute border-4 border-solid border-gray-600 border-t-transparent">
                </div>
              </div>

              <div x-show="!load">

                <svg x-show="play"
                  class="fill-current relative z-10 text-blue-600 w-14 h-14  bg-white rounded-full shadow-lg hover:text-opacity-70"
                  xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" viewBox="0 0 24 24">
                  <path
                    d="M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m-2 14.5l6-4.5l-6-4.5v9z" />
                  <rect />
                </svg>

                <svg fill="none" x-show="!play"
                  class="relative z-10 text-blue-600 w-14 h-14  bg-white rounded-full shadow-lg hover:text-opacity-70"
                  stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.25 9v6m-4.5 0V9M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>

              <span x-show="play"
                class="animate-ping absolute top-2 left-2 z-1 rounded-full w-10 h-10 bg-white opacity-40">
              </span>

            </button>

          </div>


          <div class="w-60">
            <span
              class="inline-flex items-center rounded-full p-2 cursor-pointer bg-indigo-500 text-white group transition-all duration-500 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-none"
              role="alert" tabindex="0">
              <i :class="vol >= 50 ? 'hidden' : ''" class="material-icons text-white">volume_down</i>
              <i :class="vol < 50 ? 'hidden' : ''" class="material-icons text-white">volume_up</i>
              <span
                class="whitespace-nowrap items-center inline-block group-hover:max-w-screen-2xl group-focus:max-w-screen-2xl max-w-0 scale-80 group-hover:scale-100 overflow-hidden transition-all duration-500 group-hover:px-2 group-focus:px-2">
                <input type="range" min="1" name="vol" max="100" x-model="vol"
                  class="rounded-lg overflow-hidden amplitude-volume-slider cursor- appearance-none bg-slate-100 dark:bg-slate-700  h-3 w-128" />
              </span>
            </span>
          </div>

        </div>


        <div class="text-center  sm:text-left flex sm:justify-end sm:items-center gap-x-3 md:gap-x-4">

          <a id="modelboxnew" x-show="parseInt(station_data.toggle_action)" :href="station_data.btn_action_url"
            target="_blank"
            class="py-2 a2a_dd px-3 inline-flex justify-center items-center gap-2 rounded-md sm:rounded-full border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm md:py-3 md:px-4"
            href="#">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
            </svg>
            Schedule
          </a>

          <span x-show="parseInt(station_data.toggle_favorite)" x-bind="toggleFavorite"
            class="inline-flex items-center rounded-full p-2 cursor-pointer bg-indigo-500 text-white group transition-all duration-500 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-none"
            role="alert" tabindex="0">
            <svg x-show="!favorite" x-transition xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>

            <svg x-show="favorite" x-transition xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
              fill="currentColor" class="w-6 h-6">
              <path
                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
            </svg>

            <span
              class="whitespace-nowrap inline-block group-hover:max-w-screen-2xl group-focus:max-w-screen-2xl max-w-0 scale-80 group-hover:scale-100 overflow-hidden transition-all duration-500 group-hover:px-2 group-focus:px-2">Favorite</span>
          </span>

          <span x-bind="widget" x-ref="popup"
            class="inline-flex items-center rounded-full p-2 cursor-pointer bg-indigo-500 text-white group transition-all duration-500 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-none"
            role="alert" tabindex="0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
            </svg>
            <span
              class="whitespace-nowrap  inline-block group-hover:max-w-screen-2xl group-focus:max-w-screen-2xl max-w-0 scale-80 group-hover:scale-100 overflow-hidden transition-all duration-500 group-hover:px-2 group-focus:px-2" />Open
            in screen</span>
          </span>
        </div>

        <!-- End Col -->
      </div>

    </div>
  </div>
  </div>

</body>

</html>
