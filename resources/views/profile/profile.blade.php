@extends('layouts.app')
@section('pages', 'Profile')
@section('judul', 'Data Profile')
@section('content')

<nav
  class="absolute z-20 flex flex-wrap items-center justify-between w-full px-6 py-2 text-white transition-all shadow-none duration-250 ease-soft-in lg:flex-nowrap lg:justify-start"
  navbar-profile
  navbar-scroll="true"
>
  <div
    class="flex items-center justify-between w-full px-6 py-1 mx-auto flex-wrap-inherit"
  >
    <nav>
      <!-- breadcrumb -->
      <ol
        class="flex flex-wrap pt-1 pl-2 pr-4 mr-12 bg-transparent rounded-lg sm:mr-16"
      >
      
          
        </li>
      </ol>
    
    </nav>

    <div
      class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto"
    >
      <div class="flex items-center md:ml-auto md:pr-4">
        <div
          class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft"
        >
        
        </div>
      </div>
      <ul
        class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full"
      >
      
        </li>
        <li class="flex items-center pl-4 xl:hidden">
          <a
            href="javascript:;"
            class="block p-0 text-white transition-all ease-soft-in-out text-sm"
            sidenav-trigger
          >
            <div class="w-4.5 overflow-hidden">
              <i
                class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"
              ></i>
              <i
                class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"
              ></i>
              <i
                class="ease-soft relative block h-0.5 rounded-sm bg-white transition-all"
              ></i>
            </div>
          </a>
        </li>
        <li class="flex items-center px-4">
          <a
            href="javascript:;"
            class="p-0 text-white transition-all text-sm ease-soft-in-out"
          >
            <i
              fixed-plugin-button-nav
              class="cursor-pointer fa fa-cog"
              aria-hidden="true"
            ></i>
            <!-- fixed-plugin-button-nav  -->
          </a>
        </li>

        <!-- notifications -->

        <li class="relative flex items-center pr-2">
          <p class="hidden transform-dropdown-show"></p>
          <a
            dropdown-trigger
            href="javascript:;"
            class="block p-0 text-white transition-all text-sm ease-nav-brand"
            aria-expanded="false"
          >
            <i class="cursor-pointer fa fa-bell" aria-hidden="true"></i>
          </a>

          <ul
            dropdown-menu
            class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer"
          >
            <!-- add show class on dropdown open js -->
            <li class="relative mb-2">
              <a
                class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 lg:transition-colors"
                href="javascript:;"
              >
                <div class="flex py-1">
                  <div class="my-auto">
                    <img
                      src="{{asset('img/team-2.jpg')}}"
                      class="inline-flex items-center justify-center mr-4 text-white text-sm h-9 w-9 max-w-none rounded-xl"
                    />
                  </div>
                  <div class="flex flex-col justify-center">
                    <h6 class="mb-1 font-normal leading-normal text-sm">
                      <span class="font-semibold">New message</span> from
                      Laur
                    </h6>
                    <p class="mb-0 leading-tight text-xs text-slate-400">
                      <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                      13 minutes ago
                    </p>
                  </div>
                </div>
              </a>
            </li>

            <li class="relative mb-2">
              <a
                class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 duration-300 lg:transition-colors"
                href="javascript:;"
              >
                <div class="flex py-1">
                  <div class="my-auto">
                    <img

                      src="{{asset('img/small-logos/logo-spotify.svg')}}"
                      class="inline-flex items-center justify-center mr-4 text-white text-sm bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl"
                    />
                  </div>
                  <div class="flex flex-col justify-center">
                    <h6 class="mb-1 font-normal leading-normal text-sm">
                      <span class="font-semibold">New album</span> by
                      Travis Scott
                    </h6>
                    <p class="mb-0 leading-tight text-xs text-slate-400">
                      <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                      1 day
                    </p>
                  </div>
                </div>
              </a>
            </li>

            <li class="relative">
              <a
                class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 duration-300 lg:transition-colors"
                href="javascript:;"
              >
                <div class="flex py-1">
                  <div
                    class="inline-flex items-center justify-center my-auto mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl"
                  >
                    <svg
                      width="12px"
                      height="12px"
                      viewBox="0 0 43 36"
                      version="1.1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                      <title>credit-card</title>
                      <g
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <g
                          transform="translate(-2169.000000, -745.000000)"
                          fill="#FFFFFF"
                          fill-rule="nonzero"
                        >
                          <g
                            transform="translate(1716.000000, 291.000000)"
                          >
                            <g
                              transform="translate(453.000000, 454.000000)"
                            >
                              <path
                                class="color-background"
                                d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                opacity="0.593633743"
                              ></path>
                              <path
                                class="color-background"
                                d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"
                              ></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="flex flex-col justify-center">
                    <h6 class="mb-1 font-normal leading-normal text-sm">
                      Payment successfully completed
                    </h6>
                    <p class="mb-0 leading-tight text-xs text-slate-400">
                      <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                      2 days
                    </p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="w-full px-6 mx-auto">
  <div
    class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl"
    style= "background-image: url('{{ asset('img/curved-images/curved6.jpg') }}');"
      background-position-y: 50%;
  >
    <span
      class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-purple-700 to-pink-500 opacity-60"
    ></span>
  </div>
  <div
    class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200"
  >
    <div class="flex flex-wrap -mx-3">
      <div class="flex-none w-auto max-w-full px-3">
        <div
          class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200"
        >
          <img
            src="{{asset('img/bruce-mars.jpg')}}"
            alt="profile_image"
            class="w-full shadow-soft-sm rounded-xl"
          />
        </div>
      </div>
      <div class="flex-none w-auto max-w-full px-3 my-auto">
        <div class="h-full">
          <h5 class="mb-1">gayusluplup</h5>
          <p class="mb-0 font-semibold leading-normal text-sm">
            Ketua RW  
          </p>
        </div>
      </div>
      <div
        class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12"
      >
        <div class="relative right-0">
          <ul
            class="relative flex flex-wrap p-1 list-none bg-transparent rounded-xl"
            nav-pills
            role="tablist"
          >
            <li class="z-30 flex-auto text-center">
              <a
                class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700"
                nav-link
                active
                href="javascript:;"
                role="tab"
                aria-selected="true"
              >
                <svg
                  class="text-slate-700"
                  width="16px"
                  height="16px"
                  viewBox="0 0 42 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <g
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <g
                      transform="translate(-2319.000000, -291.000000)"
                      fill="#FFFFFF"
                      fill-rule="nonzero"
                    >
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(603.000000, 0.000000)">
                          <path
                            class="fill-slate-800"
                            d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"
                          ></path>
                          <path
                            class="fill-slate-800"
                            d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                            opacity="0.7"
                          ></path>
                          <path
                            class="fill-slate-800"
                            d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                            opacity="0.7"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
                <span class="ml-1">App</span>
              </a>
            </li>
            <li class="z-30 flex-auto text-center">
              <a
                class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700"
                nav-link
                href="javascript:;"
                role="tab"
                aria-selected="false"
              >
                <svg
                  class="text-slate-700"
                  width="16px"
                  height="16px"
                  viewBox="0 0 40 44"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>document</title>
                  <g
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <g
                      transform="translate(-1870.000000, -591.000000)"
                      fill="#FFFFFF"
                      fill-rule="nonzero"
                    >
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(154.000000, 300.000000)">
                          <path
                            class="fill-slate-800"
                            d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                            opacity="0.603585379"
                          ></path>
                          <path
                            class="fill-slate-800"
                            d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
                <span class="ml-1">Messages</span>
              </a>
            </li>
            <li class="z-30 flex-auto text-center">
              <a
                class="z-30 block w-full px-0 py-1 mb-0 transition-colors border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700"
                nav-link
                href="javascript:;"
                role="tab"
                aria-selected="false"
              >
                <svg
                  class="text-slate-700"
                  width="16px"
                  height="16px"
                  viewBox="0 0 40 40"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>settings</title>
                  <g
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <g
                      transform="translate(-2020.000000, -442.000000)"
                      fill="#FFFFFF"
                      fill-rule="nonzero"
                    >
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(304.000000, 151.000000)">
                          <polygon
                            class="fill-slate-800"
                            opacity="0.596981957"
                            points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"
                          ></polygon>
                          <path
                            class="fill-slate-800"
                            d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                            opacity="0.596981957"
                          ></path>
                          <path
                            class="fill-slate-800"
                            d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
                <span class="ml-1">Settings</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="w-full p-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 xl:w-4/12">
      <div
        class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border"
      >
        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
          <h6 class="mb-0">Platform Settings</h6>
        </div>
        <div class="flex-auto p-4">
          <h6
            class="font-bold leading-tight uppercase text-xs text-slate-500"
          >
            Account
          </h6>
          <ul class="flex flex-col pl-0 mb-0 rounded-lg">
            <li
              class="relative block px-0 py-2 bg-white border-0 rounded-t-lg text-inherit"
            >
              <div class="min-h-6 mb-0.5 block pl-0">
                <input id="follow" class="mt-0.54 rounded-10 duration-250
                ease-soft-in-out after:rounded-circle
                after:shadow-soft-2xl after:duration-250
                checked:after:translate-x-5.25 h-5 relative float-left
                ml-auto w-10 cursor-pointer appearance-none border
                border-solid border-gray-200 bg-slate-800/10 bg-none
                bg-contain bg-left bg-no-repeat align-top transition-all
                after:absolute after:top-px after:h-4 after:w-4
                after:translate-x-px after:bg-white after:content-['']
                checked:border-slate-800/95 checked:bg-slate-800/95
                checked:bg-none checked:bg-right" type="checkbox" "
                checked />
                <label
                  for="follow"
                  class="w-4/5 mb-0 ml-4 overflow-hidden font-normal cursor-pointer select-none text-sm text-ellipsis whitespace-nowrap text-slate-500"
                  for="flexSwitchCheckDefault"
                  >Email me when someone follows me</label
                >
              </div>
            </li>
            <li
              class="relative block px-0 py-2 bg-white border-0 text-inherit"
            >
              <div class="min-h-6 mb-0.5 block pl-0">
                <input
                  id="answer"
                  class="mt-0.54 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                  type="checkbox"
                />
                <label
                  for="answer"
                  class="w-4/5 mb-0 ml-4 overflow-hidden font-normal cursor-pointer select-none text-sm text-ellipsis whitespace-nowrap text-slate-500"
                  for="flexSwitchCheckDefault1"
                  >Email me when someone answers on my post</label
                >
              </div>
            </li>
            <li
              class="relative block px-0 py-2 bg-white border-0 rounded-b-lg text-inherit"
            >
              <div class="min-h-6 mb-0.5 block pl-0">
                <input
                  id="mention"
                  class="mt-0.54 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                  type="checkbox"
                  checked
                />
                <label
                  for="mention"
                  class="w-4/5 mb-0 ml-4 overflow-hidden font-normal cursor-pointer select-none text-sm text-ellipsis whitespace-nowrap text-slate-500"
                  for="flexSwitchCheckDefault2"
                  >Email me when someone mentions me</label
                >
              </div>
            </li>
          </ul>
          <h6
            class="mt-6 font-bold leading-tight uppercase text-xs text-slate-500"
          >
            Application
          </h6>
          <ul class="flex flex-col pl-0 mb-0 rounded-lg">
            <li
              class="relative block px-0 py-2 bg-white border-0 rounded-t-lg text-inherit"
            >
              <div class="min-h-6 mb-0.5 block pl-0">
                <input
                  id="launches projects"
                  class="mt-0.54 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                  type="checkbox"
                />
                <label
                  for="launches projects"
                  class="w-4/5 mb-0 ml-4 overflow-hidden font-normal cursor-pointer select-none text-sm text-ellipsis whitespace-nowrap text-slate-500"
                  for="flexSwitchCheckDefault3"
                  >New launches and projects</label
                >
              </div>
            </li>
            <li
              class="relative block px-0 py-2 bg-white border-0 text-inherit"
            >
              <div class="min-h-6 mb-0.5 block pl-0">
                <input
                  id="product updates"
                  class="mt-0.54 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                  type="checkbox"
                  checked
                />
                <label
                  for="product updates"
                  class="w-4/5 mb-0 ml-4 overflow-hidden font-normal cursor-pointer select-none text-sm text-ellipsis whitespace-nowrap text-slate-500"
                  for="flexSwitchCheckDefault4"
                  >Monthly product updates</label
                >
              </div>
            </li>
            <li
              class="relative block px-0 py-2 pb-0 bg-white border-0 rounded-b-lg text-inherit"
            >
              <div class="min-h-6 mb-0.5 block pl-0">
                <input
                  id="subscribe"
                  class="mt-0.54 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                  type="checkbox"
                />
                <label
                  for="subscribe"
                  class="w-4/5 mb-0 ml-4 overflow-hidden font-normal cursor-pointer select-none text-sm text-ellipsis whitespace-nowrap text-slate-500"
                  for="flexSwitchCheckDefault5"
                  >Subscribe to newsletter</label
                >
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
      <div
        class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border"
      >
        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
          <div class="flex flex-wrap -mx-3">
            <div
              class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none"
            >
              <h6 class="mb-0">Informasi Profile</h6>
            </div>
            <div
              class="w-full max-w-full px-3 text-right shrink-0 md:w-4/12 md:flex-none"
            >
              <a
                href="javascript:;"
                data-target="tooltip_trigger"
                data-placement="top"
              >
                <i
                  class="leading-normal fas fa-user-edit text-sm text-slate-400"
                ></i>
              </a>
              <div
                data-target="tooltip"
                class="hidden px-2 py-1 text-center text-white bg-black rounded-lg text-sm"
                role="tooltip"
              >
                Edit Profile
                <div
                  class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                  data-popper-arrow
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex-auto p-4">
          <p class="leading-normal text-sm">
            
          </p>
          <hr
            class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent"
          />
          <ul class="flex flex-col pl-0 mb-0 rounded-lg">
            <li
              class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"
            >
              <strong class="text-slate-700">Nama Lengkap:</strong> &nbsp;
              Gayus sukorejo
            </li>
            <li
              class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"
            >
              <strong class="text-slate-700">Mobile:</strong> &nbsp; (+62)
             82****7767
            </li>
            <li
              class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"
            >
              <strong class="text-slate-700">Email:</strong> &nbsp;
              gayusluplup@gmail.com
            </li>
            <li
              class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"
            >
              <strong class="text-slate-700">Location:</strong> &nbsp; INDONESIA
            </li>
          
          </ul>
        </div>
      </div>
    </div>
    <!-- informasi kedudukan -->
    <div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
      <div
        class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border"
      >
        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
          <div class="flex flex-wrap -mx-3">
            <div
              class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none"
            >
              <h6 class="mb-0">Informasi Kedudukan</h6>
            </div>
            <div
              class="w-full max-w-full px-3 text-right shrink-0 md:w-4/12 md:flex-none"
            >
              <a
                href="javascript:;"
                data-target="tooltip_trigger"
                data-placement="top"
              >
                <i
                  class="leading-normal fas fa-user-edit text-sm text-slate-400"
                ></i>
              </a>
              <div
                data-target="tooltip"
                class="hidden px-2 py-1 text-center text-white bg-black rounded-lg text-sm"
                role="tooltip"
              >
                Edit Profile
                <div
                  class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                  data-popper-arrow
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex-auto p-4">
          <hr
            class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent"
          />
          <ul class="flex flex-col pl-0 mb-0 rounded-lg">
            <li
              class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"
            >
              <strong class="text-slate-700">RT:</strong> &nbsp;
              1
            </li>
            <li
              class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"
            >
              <strong class="text-slate-700">RW:</strong> &nbsp; 
              2
            </li>
            <li
              class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"
            >
              <strong class="text-slate-700">Kecamatan:</strong> &nbsp;
              Randu Merak
            </li>
            <li
              class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"
            >
              <strong class="text-slate-700">Kabupaten:</strong> &nbsp; 
            wonosobo
            </li>      
        </div>
    </div>
</div>    
@endsection