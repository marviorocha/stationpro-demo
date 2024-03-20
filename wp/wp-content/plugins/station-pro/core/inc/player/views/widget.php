<?php

global $stationpro;

$assets = '../assets';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="<?php echo $assets ?>/css/player.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <script src="<?php echo $assets ?>/javascript/radio.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/amplitudejs@5.3.2/dist/amplitude.js"></script>
  <script
    src="https://cdn.tailwindcss.com/3.3.1?plugins=forms@0.5.3,typography@0.5.9,aspect-ratio@0.4.2,line-clamp@0.4.4"></script>

  <title>Player Widget - Station Pro</title>

</head>

<body class="h-screen overflow-hidden bg-white/[.6] backdrop-blur-lg dark:bg-slate-900/[.6]">

  <!-- This is an example component -->
  <div x-data="app" x-init="initializePlayer()" class="w-full p-4">
    <div @click="window.close()" class="flex justify-end flex-row">
      <button aria-label="Close"
        class="shrink-0 rounded-lg bg-black/10 p-1 text-slate-800 transition hover:bg-black/20">

        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd" />
        </svg>

      </button>

    </div>
    <div class="mt-2 sm:mt-10 relative z-10 rounded-xl shadow-xl">

      <div
        class="bg-white border-slate-100 transition-all duration-500 dark:bg-slate-800 transition-all duration-500 dark:border-slate-500 border-b rounded-t-xl p-4 pb-6 sm:p-10 sm:pb-8 lg:p-6 xl:p-10 xl:pb-8 space-y-6 sm:space-y-8 lg:space-y-6 xl:space-y-8">

        <div class="flex items-center space-x-4">


          <img :src="station_data.radio_logo.url ? station_data.radio_logo.url : 'https://picsum.photos/1024/1024' "
            loading="lazy" decoding="async" alt="" class="flex-none rounded-lg bg-slate-100" width="88" height="88">
          <div class="min-w-0 flex-auto space-y-1 font-semibold">
            <p class="">
              <marquee x-show="parseInt(station_data.toggle_marqueet)"
                x-text="station_data.marqueet_one ? station_data.marqueet_one : 'This text will be scrolled to the left to a small announcements. Or that you want to scroll to the right.'"
                class="text-cyan-500 transition-all duration-500 dark:text-cyan-400 text-sm leading-6"
                onmouseout="this.start();" onmouseover="this.stop();"></marquee>
            </p>
            <h2 x-text="station_data.radio_description ? station_data.radio_description : 'Radio slugan here'"
              class="text-slate-500 transition-all duration-500 dark:text-slate-400 text-sm leading-6 truncate">

            </h2>
            <p x-text="station_data.radio_name ? station_data.radio_name : 'StationPro.co'"
              class="text-slate-900 transition-all duration-500 dark:text-slate-50 text-lg">

            </p>
          </div>
        </div>
        <div class="space-y-2">

          <div class="relative">
            <div class="flex flex row justify-center items-center">
              <i :class="vol >= 50 ? 'hidden' : ''" class="material-icons text-white">volume_down</i>
              <i :class="vol < 50 ? 'hidden' : ''" class="material-icons text-white">volume_up</i>

              <input type="range" min="1" name="vol" max="100" x-model="vol"
                class="rounded-lg overflow-hidden  amplitude-volume-slider cursor- appearance-none bg-slate-100 dark:bg-slate-700  h-3 w-full" />

            </div>
            <!-- <div class="bg-slate-100 transition-all duration-500 dark:bg-slate-700 rounded-full overflow-hidden"> -->

            <!-- <div class="bg-cyan-800 transition-all duration-500 dark:bg-cyan-400 w-1/2 h-2" role="progressbar" aria-label="music progress" aria-valuenow="1456" aria-valuemin="0" aria-valuemax="4550"></div> -->


          </div>
          <div class="flex justify-between text-sm leading-6 font-medium tabular-nums">
            <div class="text-cyan-500 transition-all duration-500 dark:text-slate-100">
              <span class="amplitude-current-time"></span>
            </div>
            <!-- <div class="text-slate-500 transition-all duration-500 dark:text-slate-400">75:50</div> -->
          </div>
        </div>
      </div>
      <div
        class="bg-slate-50 text-slate-500 transition-all duration-500 dark:bg-slate-600 transition-all duration-500 dark:text-slate-200 rounded-b-xl flex items-center">
        <div class="flex-auto flex items-center justify-evenly">
          <!-- <button type="button" aria-label="Add to favorites">
      <svg width="24" height="24">
        <path d="M7 6.931C7 5.865 7.853 5 8.905 5h6.19C16.147 5 17 5.865 17 6.931V19l-5-4-5 4V6.931Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
    </button> -->
          <!-- <button type="button" class="hidden sm:block lg:hidden xl:block" aria-label="Previous">
      <svg width="24" height="24" fill="none">
        <path d="m10 12 8-6v12l-8-6Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M6 6v12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
    </button> -->
          <!-- <button type="button" aria-label="Rewind 10 seconds">
      <svg width="24" height="24" fill="none">
        <path d="M6.492 16.95c2.861 2.733 7.5 2.733 10.362 0 2.861-2.734 2.861-7.166 0-9.9-2.862-2.733-7.501-2.733-10.362 0A7.096 7.096 0 0 0 5.5 8.226" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M5 5v3.111c0 .491.398.889.889.889H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
    </button> -->
        </div>
        <button x-bind="playing" type="button"
          class="bg-white text-slate-900 transition-all duration-500 dark:bg-slate-100 transition-all duration-500 dark:text-slate-700 flex-none -my-2 mx-auto w-20 h-20 rounded-full ring-1 ring-slate-900/5 shadow-md flex items-center justify-center"
          aria-label="Pause">

          <div x-show="load" class="fill-current  z-10 w-14 h-14">
            <div class="w-12 h-12 rounded-full absolute border-4 border-solid border-gray-200"></div>
            <div
              class="w-12 h-12 rounded-full animate-spin absolute border-4 border-solid border-gray-600 border-t-transparent">
            </div>
          </div>

          <div x-show="!load">
            <svg x-show="!play" x-transition:enter.duration.200ms width="30" height="32" fill="currentColor">
              <rect x="6" y="4" width="4" height="24" rx="2"></rect>
              <rect x="20" y="4" width="4" height="24" rx="2"></rect>
            </svg>

            <svg x-show="play" width="30" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
              fill="currentColor" class="w-10 h-10">
              <path fill-rule="evenodd"
                d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z"
                clip-rule="evenodd" />
            </svg>
          </div>


        </button>
        <div class="flex-auto flex items-center justify-evenly">
          <!-- <button type="button" aria-label="Skip 10 seconds" class="">
      <svg width="24" height="24" fill="none">
        <path d="M17.509 16.95c-2.862 2.733-7.501 2.733-10.363 0-2.861-2.734-2.861-7.166 0-9.9 2.862-2.733 7.501-2.733 10.363 0 .38.365.711.759.991 1.176" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M19 5v3.111c0 .491-.398.889-.889.889H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
    </button> -->
          <!-- <button type="button" class="hidden sm:block lg:hidden xl:block" aria-label="Next">
      <svg width="24" height="24" fill="none">
        <path d="M14 12 6 6v12l8-6Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M18 6v12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
    </button>
            <button type="button" class="rounded-lg text-xs leading-6 font-semibold px-2 ring-2 ring-inset ring-slate-500 text-slate-500 transition-all duration-500 dark:text-slate-100 transition-all duration-500 dark:ring-0 transition-all duration-500 dark:bg-slate-500">
      1x
    </button> -->
        </div>
      </div>
    </div>
    <div class="flex justify-center mt-4 text-white">

      <footer class="text-sm" style="text-align: center; padding: 3px;">
        Copyright © 2023 <span x-text="station_data.radio_name ? station_data.radio_name : 'StationPro.co'"></span>. All
        rights reserved.

        <p x-show="parseInt(station_data.toggle_brand)" class="mt-2">
          <a class="inline-flex shadow-md items-center justify-center rounded-full bg-purple-700 my-2 px-2.5 py-0.5 text-purple-200"
            target="_blank" ref="follow" href="https://stationpro.co" target="_blank">
            <span class="whitespace-nowrap text-sm">powered by:</span>
            <svg fill="currentColor" stroke="currentColor" class="ms-1 me-1.5 h-4 w-4" stroke-width="1.5"
              viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z">
              </path>
            </svg>
            <span x-text="copyright" class="whitespace-nowrap text-sm"></span>
          </a>
        </p>
      </footer>
    </div>
  </div>

</body>

</html>
