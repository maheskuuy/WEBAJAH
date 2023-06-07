<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="{{asset('img/apple-icon.png')}}"
    />
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}" />
    <title>PEDULI APP</title>
    <!-- Fonts and icons -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
      rel="stylesheet"
    />
    <!-- Font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/42d5adcbca.js"
      crossorigin="anonymous"
    ></script>
    <!-- Nucleo Icons -->
    <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Main Styling -->
    <link
      href="{{asset('css/soft-ui-dashboard-tailwind.css?v=1.0.4')}}"
      rel="stylesheet"
    />
  </head>

  <body
    class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500"
  >
    <!-- Navbar -->
    <nav
      class="absolute top-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mt-6 mb-4 shadow-none lg:flex-nowrap lg:justify-start"
    >
      <div
        class="container flex items-center justify-between py-0 flex-wrap-inherit"
      >
        <a
          class="py-2.375 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-white lg:ml-0"
          href="../pages/dashboard.html"
        >
          PEDULI APP
        </a>
        <button
          navbar-trigger
          class="px-3 py-1 ml-2 leading-none transition-all bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg ease-soft-in-out lg:hidden"
          type="button"
          aria-controls="navigation"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span
            class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none"
          >
            <span
              bar1
              class="w-5.5 rounded-xs duration-350 relative my-0 mx-auto block h-px bg-white transition-all"
            ></span>
            <span
              bar2
              class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"
            ></span>
            <span
              bar3
              class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"
            ></span>
          </span>
        </button>
        <div
          navbar-menu
          class="items-center flex-grow transition-all ease-soft duration-350 lg-max:bg-white lg-max:max-h-0 lg-max:overflow-hidden basis-full rounded-xl lg:flex lg:basis-auto"
        ></div>
      </div>
    </nav>

    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
      <section class="min-h-screen mb-32">
        <div
          class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl"
          style="background-image: url('{{ asset('img/curved-images/curved14.jpg') }}');">>
          <span
            class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-60"
          ></span>
          <div class="container z-10">
            <div class="flex flex-wrap justify-center -mx-3">
              <div
                class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12"
              >
                <h1 class="mt-12 mb-2 text-white">Lengkapi Data</h1>
                <p class="text-white">
                  Silahkan Masukkan Detail Kedudukan Anda
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
              <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                  <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                      <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                          <h5>Data Perumahan</h5>
                      </div>
      
                      <div class="flex-auto p-6">
                          <form role="form" action="{{ route('detail_kedudukan.store') }}" method="POST">
                              @csrf
      
                              <div class="mb-4">
                                  <input
                                      type="text"
                                      name="nama_perumahan"
                                      class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                      placeholder="Nama Perumahan"
                                      aria-label="Name"
                                      aria-describedby="email-addon"
                                  />
                              </div>
                              <div class="mb-4">
                                  <input
                                      type="text"
                                      name="RT"
                                      class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                      placeholder="RT"
                                      aria-label="Email"
                                      aria-describedby="email-addon"
                                  />
                              </div>
                              <div class="mb-4">
                                  <input
                                      type="text"
                                      name="RW"
                                      class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                      placeholder="RW"
                                      aria-label="Password"
                                      aria-describedby="password-addon"
                                  />
                              </div>
                              <div class="mb-4 mt-4">
                                  <select
                                      name="negara"
                                      class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                      aria-label="Negara"
                                      aria-placeholder="Negara"
                                      aria-describedby="role-addon"
                                  >
                                      <option value="Indonesia">Indonesia</option>
                                      <option value="Zimbabwe">Zimbabwe</option>
                                  </select>
                              </div>
      
                              <div class="min-h-6 pl-6.92 mb-0.5 block"></div>
      
                              <div class="text-center">
                                  <button
                                      type="submit"
                                      class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white"
                                  >
                                      Sign up
                                  </button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      </section>
      <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
      <footer class="py-12">
        <div class="container">
          <div class="flex flex-wrap -mx-3">
            <div
              class="flex-shrink-0 w-full max-w-full mx-auto mb-6 text-center lg:flex-0 lg:w-8/12"
            >
              <a
                href="javascript:;"
                target="_blank"
                class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"
              >
                Beranda
              </a>

              <a
                href="javascript:;"
                target="_blank"
                class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"
              >
                Berita
              </a>
              <a
                href="javascript:;"
                target="_blank"
                class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"
              >
                Formulir Pengaduan
              </a>
            </div>
            <div
              class="flex-shrink-0 w-full max-w-full mx-auto mt-2 mb-6 text-center lg:flex-0 lg:w-8/12"
            >
              <a
                href="javascript:;"
                target="_blank"
                class="mr-6 text-slate-400"
              >
                <span class="text-lg fab fa-dribbble"></span>
              </a>

              <a
                href="javascript:;"
                target="_blank"
                class="mr-6 text-slate-400"
              >
                <span class="text-lg fab fa-instagram"></span>
              </a>

              <a
                href="javascript:;"
                target="_blank"
                class="mr-6 text-slate-400"
              >
                <span class="text-lg fab fa-github"></span>
              </a>
            </div>
          </div>
          <div class="flex flex-wrap -mx-3">
            <div class="w-8/12 max-w-full px-3 mx-auto mt-1 text-center flex-0">
              <p class="mb-0 text-slate-400">
                Copyright © PEDULI APP
                <script>
                  document.write(new Date().getFullYear());
                </script>
              </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    </main>
  </body>
  <!-- plugin for scrollbar  -->
  <script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}" async></script>
  <!-- main script file  -->
  <script
    src="{{asset('js/soft-ui-dashboard-tailwind.js?v=1.0.4')}}"
    async
  ></script>
</html>
