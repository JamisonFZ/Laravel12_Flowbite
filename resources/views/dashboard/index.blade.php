@extends('dashboard')

@section('title', __('Dashboard'))

@section('content')

<div class="px-4">
  <div class="my-4 grid gap-4 sm:grid-cols-2 2xl:grid-cols-4">
    <div class="flex items-center justify-between rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 md:p-6">
      <div class="shrink-0">
        <h3 class="mb-1 text-gray-500 dark:text-gray-400">Revenue</h3>
        <span class="text-2xl font-bold text-gray-900 dark:text-white">$163,256</span>
        <p class="mt-1 flex items-center text-sm text-gray-500 dark:text-gray-400 ">
          <span class="mr-1.5 flex items-center text-sm font-medium text-green-500 dark:text-green-400 sm:text-base">
            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13 4 4m-4-4-4 4" />
            </svg>
            19%
          </span>
          vs last month
        </p>
      </div>
      <div id="revenue-small-chart"></div>
    </div>
    <div class="flex items-center justify-between gap-8 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 md:p-6">
      <div class="shrink-0">
        <h3 class="mb-1 text-gray-500 dark:text-gray-400">Completed orders</h3>
        <span class="text-2xl font-bold text-gray-900 dark:text-white">23,256</span>
        <p class="mt-1 flex items-center text-sm text-gray-500 dark:text-gray-400 ">
          <span class="mr-1.5 flex items-center text-sm font-medium text-green-500 dark:text-green-400 sm:text-base">
            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13 4 4m-4-4-4 4" />
            </svg>
            2%
          </span>
          vs last month
        </p>
      </div>
      <div id="completed-orders-chart"></div>
    </div>
    <div class="flex items-center justify-between rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 md:p-6">
      <div class="shrink-0">
        <h3 class="mb-1 text-gray-500 dark:text-gray-400">Material stock</h3>
        <span class="text-2xl font-bold text-gray-900 dark:text-white">39,198</span>
        <p class="mt-1 flex items-center text-sm text-gray-500 dark:text-gray-400 ">
          <span class="mr-1.5 flex items-center text-sm font-medium text-red-600 dark:text-red-500 sm:text-base">
            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19V5m0 14-4-4m4 4 4-4" />
            </svg>
            4%
          </span>
          vs last month
        </p>
      </div>
      <div id="material-stock-chart"></div>
    </div>
    <div class="flex items-center justify-between rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 md:p-6">
      <div class="shrink-0">
        <h3 class="mb-1 text-gray-500 dark:text-gray-400">On time delivery</h3>
        <span class="text-2xl font-bold text-gray-900 dark:text-white">95%</span>
        <p class="mt-1 flex items-center text-sm text-gray-500 dark:text-gray-400 ">
          <span class="mr-1.5 flex items-center text-sm font-medium text-green-500 dark:text-green-400 sm:text-base">
            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13 4 4m-4-4-4 4" />
            </svg>
            0.9%
          </span>
          vs last month
        </p>
      </div>
      <div id="successful-deliveries-chart"></div>
    </div>
  </div>

  
  <!-- Columns-->
  <div class="my-4 grid grid-cols-1 gap-4 2xl:grid-cols-3">

    <div class="rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 md:p-6">
      
      <div class="mb-4 flex justify-between border-b border-gray-200 pb-4 dark:border-gray-700">
        <div class="flex items-center">
          <div class="me-3 flex h-12 w-12 items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-700">
            <svg class="h-6 w-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path
                fill-rule="evenodd"
                d="M4 4a2 2 0 0 0-2 2v9c0 .6.4 1 1 1h.5v.5a3.5 3.5 0 1 0 7-.5h3v.5a3.5 3.5 0 1 0 7-.5h.5c.6 0 1-.4 1-1v-4l-.1-.4-2-4A1 1 0 0 0 19 6h-5a2 2 0 0 0-2-2H4Zm14.2 11.6.3.9a1.5 1.5 0 1 1-.3-1Zm-10 0 .3.9a1.5 1.5 0 1 1-.3-1ZM14 10V8h4.4l1 2H14Z"
                clip-rule="evenodd"
              />
            </svg>
          </div>
          <div>
            <h5 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">546,354</h5>
            <p class="text-gray-500 dark:text-gray-400">Delivered shipments</p>
          </div>
        </div>
        <div>
          <span class="inline-flex items-center rounded-md bg-green-100 px-2.5 py-1 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">
            <svg class="me-1.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
            </svg>
            24%
          </span>
        </div>
      </div>

      <div id="coin-chart"></div>
      <div class="grid grid-cols-1 items-center justify-between border-t border-gray-200 dark:border-gray-700">
        <div class="flex items-center justify-between pt-5">
          <!-- Button -->
          <button
            id="totalDeliveriesButton"
            data-dropdown-toggle="totalDeliveriesDropdown"
            data-dropdown-placement="bottom"
            class="inline-flex items-center text-center text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
            type="button"
          >
            Last 7 days
            <svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
            </svg>
          </button>
          <!-- Dropdown menu -->
          <div id="totalDeliveriesDropdown" class="z-10 hidden w-32 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:bg-gray-700">
            <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="totalTrucksButton">
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</button>
              </li>
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Today</button>
              </li>
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</button>
              </li>
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</button>
              </li>
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</button>
              </li>
            </ul>
          </div>
          <a href="#" class="inline-flex items-center rounded-lg px-3 py-2 text-sm font-semibold uppercase text-primary-700  hover:bg-gray-100 dark:border-gray-700 dark:text-primary-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700">
            Full report
            <svg class="-me-0.5 ms-1 h-4 w-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 md:p-6">
      
      <div class="mb-4 flex justify-between border-b border-gray-200 pb-4 dark:border-gray-700">
        <div class="flex items-center">
          <div class="me-3 flex h-12 w-12 items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-700">
            <svg class="h-6 w-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path
                fill-rule="evenodd"
                d="M4 4a2 2 0 0 0-2 2v9c0 .6.4 1 1 1h.5v.5a3.5 3.5 0 1 0 7-.5h3v.5a3.5 3.5 0 1 0 7-.5h.5c.6 0 1-.4 1-1v-4l-.1-.4-2-4A1 1 0 0 0 19 6h-5a2 2 0 0 0-2-2H4Zm14.2 11.6.3.9a1.5 1.5 0 1 1-.3-1Zm-10 0 .3.9a1.5 1.5 0 1 1-.3-1ZM14 10V8h4.4l1 2H14Z"
                clip-rule="evenodd"
              />
            </svg>
          </div>
          <div>
            <h5 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">546,354</h5>
            <p class="text-gray-500 dark:text-gray-400">Delivered shipments</p>
          </div>
        </div>
        <div>
          <span class="inline-flex items-center rounded-md bg-green-100 px-2.5 py-1 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">
            <svg class="me-1.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
            </svg>
            24%
          </span>
        </div>
      </div>

      <div id="coin-chart"></div>
      <div class="grid grid-cols-1 items-center justify-between border-t border-gray-200 dark:border-gray-700">
        <div class="flex items-center justify-between pt-5">
          <!-- Button -->
          <button
            id="totalDeliveriesButton"
            data-dropdown-toggle="totalDeliveriesDropdown"
            data-dropdown-placement="bottom"
            class="inline-flex items-center text-center text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
            type="button"
          >
            Last 7 days
            <svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
            </svg>
          </button>
          <!-- Dropdown menu -->
          <div id="totalDeliveriesDropdown" class="z-10 hidden w-32 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:bg-gray-700">
            <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="totalTrucksButton">
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</button>
              </li>
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Today</button>
              </li>
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</button>
              </li>
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</button>
              </li>
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</button>
              </li>
            </ul>
          </div>
          <a href="#" class="inline-flex items-center rounded-lg px-3 py-2 text-sm font-semibold uppercase text-primary-700  hover:bg-gray-100 dark:border-gray-700 dark:text-primary-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700">
            Full report
            <svg class="-me-0.5 ms-1 h-4 w-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 md:p-6">
      
      <div class="mb-4 flex justify-between border-b border-gray-200 pb-4 dark:border-gray-700">
        <div class="flex items-center">
          <div class="me-3 flex h-12 w-12 items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-700">
            <svg class="h-6 w-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path
                fill-rule="evenodd"
                d="M4 4a2 2 0 0 0-2 2v9c0 .6.4 1 1 1h.5v.5a3.5 3.5 0 1 0 7-.5h3v.5a3.5 3.5 0 1 0 7-.5h.5c.6 0 1-.4 1-1v-4l-.1-.4-2-4A1 1 0 0 0 19 6h-5a2 2 0 0 0-2-2H4Zm14.2 11.6.3.9a1.5 1.5 0 1 1-.3-1Zm-10 0 .3.9a1.5 1.5 0 1 1-.3-1ZM14 10V8h4.4l1 2H14Z"
                clip-rule="evenodd"
              />
            </svg>
          </div>
          <div>
            <h5 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">546,354</h5>
            <p class="text-gray-500 dark:text-gray-400">Delivered shipments</p>
          </div>
        </div>
        <div>
          <span class="inline-flex items-center rounded-md bg-green-100 px-2.5 py-1 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">
            <svg class="me-1.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
            </svg>
            24%
          </span>
        </div>
      </div>

      <div id="coin-chart"></div>
      <div class="grid grid-cols-1 items-center justify-between border-t border-gray-200 dark:border-gray-700">
        <div class="flex items-center justify-between pt-5">
          <!-- Button -->
          <button
            id="totalDeliveriesButton"
            data-dropdown-toggle="totalDeliveriesDropdown"
            data-dropdown-placement="bottom"
            class="inline-flex items-center text-center text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
            type="button"
          >
            Last 7 days
            <svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
            </svg>
          </button>
          <!-- Dropdown menu -->
          <div id="totalDeliveriesDropdown" class="z-10 hidden w-32 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:bg-gray-700">
            <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="totalTrucksButton">
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</button>
              </li>
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Today</button>
              </li>
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</button>
              </li>
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</button>
              </li>
              <li>
                <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</button>
              </li>
            </ul>
          </div>
          <a href="#" class="inline-flex items-center rounded-lg px-3 py-2 text-sm font-semibold uppercase text-primary-700  hover:bg-gray-100 dark:border-gray-700 dark:text-primary-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700">
            Full report
            <svg class="-me-0.5 ms-1 h-4 w-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>

<div class="my-4 grid gap-4 sm:grid-cols-2 2xl:grid-cols-4">
  <!-- Card -->
  <div class="space-y-4 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800">
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center">
        <svg class="me-2 h-7 text-gray-900 dark:text-white" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
          <path
            fill="currentColor"
            d="M 14.728516 4.0078125 C 10.197246 4.3417754 1.9458438 14.28525 5.1054688 16.953125 L 5.8945312 17.623047 C 5.6815312 18.194047 5.6067813 18.808062 5.6757812 19.414062 C 5.8557812 21.199063 7.5991562 22.644578 9.2851562 22.642578 C 12.371156 29.755578 23.605672 29.766734 26.513672 22.802734 C 26.605672 22.562734 27 21.485156 27 20.535156 C 27 19.585156 26.460234 19.185547 26.115234 19.185547 C 25.936234 18.558547 25.820516 18.486406 25.603516 18.191406 C 25.734516 17.995406 26.420453 16.907906 25.439453 15.878906 C 24.883453 15.294906 23.775625 14.892156 23.390625 14.785156 C 23.310625 14.176156 23.639234 11.646656 22.240234 10.347656 C 23.351234 9.1966563 24.002 7.9288437 24 6.8398438 C 23.997 4.7468438 21.470734 4.1128281 18.302734 5.4238281 L 17.630859 5.7089844 C 17.627859 5.7059844 16.416438 4.5199063 16.398438 4.5039062 C 15.947062 4.1101563 15.37584 3.9601035 14.728516 4.0078125 z M 15.140625 4.8730469 C 15.270432 4.8793362 15.393688 4.898875 15.507812 4.9296875 C 15.804813 5.0136875 16.787109 6.1523438 16.787109 6.1523438 C 16.787109 6.1523438 14.961531 7.1641719 13.269531 8.5761719 C 10.988531 10.333172 9.266375 12.885297 8.234375 15.654297 C 7.424375 15.812297 6.7084844 16.272203 6.2714844 16.908203 C 6.0104844 16.690203 5.5244531 16.266469 5.4394531 16.105469 C 4.7444531 14.777469 6.19975 12.203047 7.21875 10.748047 C 9.579375 7.3786719 13.193525 4.7787073 15.140625 4.8730469 z M 18.326172 8.1425781 C 18.349172 8.1405781 18.367141 8.1596406 18.369141 8.1816406 C 18.370141 8.1956406 18.364516 8.2077969 18.353516 8.2167969 C 18.199516 8.3357969 18.060406 8.4758594 17.941406 8.6308594 C 17.928406 8.6488594 17.933172 8.6725469 17.951172 8.6855469 C 17.958172 8.6905469 17.965609 8.6923594 17.974609 8.6933594 C 18.632609 8.6983594 19.559016 8.9285781 20.166016 9.2675781 C 20.207016 9.2905781 20.178813 9.369375 20.132812 9.359375 C 16.414813 8.507375 13.552406 10.351922 12.941406 10.794922 C 12.922406 10.806922 12.898719 10.80025 12.886719 10.78125 C 12.876719 10.76625 12.877672 10.748375 12.888672 10.734375 L 12.884766 10.734375 C 13.779766 9.700375 14.882141 8.801875 15.869141 8.296875 C 15.888141 8.285875 15.910875 8.2915469 15.921875 8.3105469 C 15.928875 8.3225469 15.928875 8.3366094 15.921875 8.3496094 C 15.843875 8.4916094 15.692531 8.7953906 15.644531 9.0253906 C 15.639531 9.0473906 15.653781 9.0692188 15.675781 9.0742188 C 15.686781 9.0772188 15.698031 9.0743594 15.707031 9.0683594 C 16.321031 8.6493594 17.390172 8.2005781 18.326172 8.1425781 z M 21.507812 11.361328 C 21.631563 11.381828 21.751375 11.427094 21.859375 11.496094 C 22.394375 11.851094 22.468094 12.710844 22.496094 13.339844 C 22.512094 13.698844 22.555313 14.568406 22.570312 14.816406 C 22.604312 15.386406 22.754594 15.467453 23.058594 15.564453 C 23.229594 15.620453 23.386141 15.662516 23.619141 15.728516 C 24.325141 15.926516 24.593328 16.231234 24.861328 16.490234 C 24.997328 16.624234 25.087234 16.797328 25.115234 16.986328 C 25.198234 17.594328 24.792266 18.241828 23.322266 18.923828 C 20.825266 20.082828 18.314172 19.695297 17.951172 19.654297 C 16.874172 19.509297 16.26025 20.902469 16.90625 21.855469 C 18.11625 23.641469 23.448094 22.924844 24.996094 20.714844 C 25.033094 20.661844 25.002031 20.628156 24.957031 20.660156 C 22.724031 22.188156 19.770797 22.702781 18.091797 22.050781 C 17.836797 21.951781 17.303281 21.707156 17.238281 21.160156 C 19.569281 21.881156 21.033203 21.199219 21.033203 21.199219 C 21.033203 21.199219 21.141906 21.0485 21.003906 21.0625 C 21.003906 21.0625 19.093109 21.344594 17.287109 20.683594 C 17.619109 19.605594 18.729453 21.009313 22.439453 19.945312 C 23.256453 19.711312 24.181578 19.354359 25.017578 18.693359 C 25.264578 18.950359 25.473875 19.442672 25.546875 19.888672 C 25.742875 19.853672 26.308203 19.859469 26.158203 20.855469 C 25.982203 21.917469 25.532437 22.780219 24.773438 23.574219 C 24.299437 24.088219 23.734422 24.510312 23.107422 24.820312 C 22.758422 25.003312 22.395484 25.156297 22.021484 25.279297 C 19.161484 26.213297 16.231156 25.186469 15.285156 22.980469 C 15.208156 22.812469 15.145703 22.637984 15.095703 22.458984 C 14.692703 21.004984 15.035516 19.260109 16.103516 18.162109 C 16.169516 18.092109 16.236328 18.01025 16.236328 17.90625 C 16.227328 17.81725 16.190812 17.733062 16.132812 17.664062 C 15.758812 17.123062 14.466563 16.199109 14.726562 14.412109 C 14.913562 13.129109 16.035031 12.225297 17.082031 12.279297 L 17.349609 12.294922 C 17.802609 12.321922 18.198266 12.379531 18.572266 12.394531 C 19.197266 12.421531 19.758828 12.331344 20.423828 11.777344 C 20.648828 11.590344 20.828812 11.427953 21.132812 11.376953 C 21.256813 11.345953 21.384062 11.340828 21.507812 11.361328 z M 21.306641 13.529297 C 20.973641 13.583297 20.961078 13.997359 21.080078 14.568359 C 21.147078 14.889359 21.266391 15.162031 21.400391 15.332031 C 21.565391 15.311031 21.731484 15.311031 21.896484 15.332031 C 21.985484 15.127031 22.001875 14.775578 21.921875 14.392578 C 21.802875 13.822578 21.639641 13.475297 21.306641 13.529297 z M 17.488281 15.083984 C 17.206156 15.117984 16.931812 15.222984 16.695312 15.396484 C 16.535312 15.513484 16.38425 15.675437 16.40625 15.773438 C 16.45125 15.973437 16.942234 15.628891 17.615234 15.587891 C 17.989234 15.564891 18.299109 15.681156 18.537109 15.785156 C 18.776109 15.892156 18.922469 15.960391 18.980469 15.900391 C 19.081469 15.796391 18.794031 15.397219 18.332031 15.199219 C 18.061031 15.086719 17.770406 15.049984 17.488281 15.083984 z M 21.789062 15.878906 L 21.789062 15.880859 C 21.380063 15.873859 21.364391 16.725422 21.775391 16.732422 C 22.186391 16.739422 22.201063 15.886906 21.789062 15.878906 z M 18.056641 16.060547 C 17.571641 16.136547 17.253937 16.408609 17.335938 16.599609 C 17.383937 16.617609 17.398281 16.642641 17.613281 16.556641 C 17.932281 16.436641 18.278234 16.401125 18.615234 16.453125 C 18.771234 16.471125 18.844906 16.481734 18.878906 16.427734 C 18.956906 16.308734 18.574641 15.999547 18.056641 16.060547 z M 20.410156 16.451172 C 20.315906 16.462172 20.23275 16.506859 20.1875 16.599609 C 20.005948 16.968698 20.767752 17.339063 20.951172 16.974609 C 21.086922 16.699359 20.692906 16.418172 20.410156 16.451172 z M 8.8964844 16.480469 C 9.8666833 16.511085 10.816984 17.196219 11.044922 18.667969 C 11.287922 20.251969 10.794703 21.794812 9.2207031 21.757812 L 9.2226562 21.759766 C 8.0026562 21.726766 6.6856875 20.628172 6.5546875 19.326172 C 6.3690625 17.482859 7.6490857 16.441105 8.8964844 16.480469 z M 8.8261719 17.400391 C 8.4667969 17.389641 8.1212344 17.549672 7.9277344 17.763672 C 7.4617344 18.276672 7.4611563 19.021781 7.6601562 19.050781 C 7.8881562 19.080781 7.8786875 18.705687 8.0546875 18.429688 C 8.2606875 18.111687 8.6859063 18.020563 9.0039062 18.226562 C 9.0059063 18.227563 9.0077656 18.228469 9.0097656 18.230469 C 9.6297656 18.636469 9.0818594 19.178766 9.1308594 19.759766 C 9.2048594 20.651766 10.116156 20.634234 10.285156 20.240234 C 10.307156 20.200234 10.302438 20.151234 10.273438 20.115234 C 10.275438 20.163234 10.310703 20.047703 10.095703 20.095703 L 10.09375 20.097656 C 10.02275 20.114656 9.772625 20.176656 9.640625 19.972656 C 9.362625 19.544656 10.234781 18.883547 9.8007812 18.060547 C 9.5577812 17.593547 9.1855469 17.411141 8.8261719 17.400391 z"
          />
        </svg>
        <span class="font-semibold text-gray-900 dark:text-white">Mailchimp</span>
      </div>
      <!-- Dropdown button -->
      <button
        id="integration-1-dropdown-button"
        type="button"
        data-dropdown-toggle="integration-1-dropdown"
        class="inline-flex items-center rounded-lg p-2 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
      >
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M9.6 2.6A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2l.5.3a2 2 0 0 1 2.9 0l1.4 1.3a2 2 0 0 1 0 2.9l.1.5h.1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2l-.3.5a2 2 0 0 1 0 2.9l-1.3 1.4a2 2 0 0 1-2.9 0l-.5.1v.1a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2l-.5-.3a2 2 0 0 1-2.9 0l-1.4-1.3a2 2 0 0 1 0-2.9l-.1-.5H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2l.3-.5a2 2 0 0 1 0-2.9l1.3-1.4a2 2 0 0 1 2.9 0l.5-.1V4c0-.5.2-1 .6-1.4ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z"
            clip-rule="evenodd"
          />
        </svg>
      </button>
      <div id="integration-1-dropdown" class="z-10 hidden w-40 rounded-lg bg-white shadow-sm dark:bg-gray-700">
        <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="integration-1-dropdown-button">
          <li>
            <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
            >
              <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path
                  fill-rule="evenodd"
                  d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4v11c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16c0-.6.4-1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z"
                  clip-rule="evenodd"
                />
              </svg>
              View details
            </button>
          </li>
          <li>
            <button
            type="button"
            id="deleteToolButton"
            data-modal-target="deleteToolModal"
            data-modal-toggle="deleteToolModal"
            class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
          >
            <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path
                fill-rule="evenodd"
                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                clip-rule="evenodd"
              />
            </svg>
            Remove
          </button>
          </li>
        </ul>
      </div>
    </div>
    <p class="text-gray-500 dark:text-gray-400">Online platform for sending professionals e-mails to mass recipients.</p>
    <div class="flex items-center space-x-4">
      <button
        type="button"
        id="deleteToolButton"
        data-modal-target="deleteToolModal"
        data-modal-toggle="deleteToolModal"
        class="w-full rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
      >
        Remove
      </button>
      <button
        type="button"
        id="successIntegrationButton"
        data-modal-target="successIntegrationModal"
        data-modal-toggle="successIntegrationModal"
        class="w-full rounded-lg bg-primary-700 px-3 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
      >
        Connect
      </button>
    </div>
  </div>
  <!-- Card -->
  <div class="space-y-4 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800">
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center">
        <svg class="me-2 h-7 text-gray-900 dark:text-white" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
          <path
            fill="currentColor"
            d="M 14.728516 4.0078125 C 10.197246 4.3417754 1.9458438 14.28525 5.1054688 16.953125 L 5.8945312 17.623047 C 5.6815312 18.194047 5.6067813 18.808062 5.6757812 19.414062 C 5.8557812 21.199063 7.5991562 22.644578 9.2851562 22.642578 C 12.371156 29.755578 23.605672 29.766734 26.513672 22.802734 C 26.605672 22.562734 27 21.485156 27 20.535156 C 27 19.585156 26.460234 19.185547 26.115234 19.185547 C 25.936234 18.558547 25.820516 18.486406 25.603516 18.191406 C 25.734516 17.995406 26.420453 16.907906 25.439453 15.878906 C 24.883453 15.294906 23.775625 14.892156 23.390625 14.785156 C 23.310625 14.176156 23.639234 11.646656 22.240234 10.347656 C 23.351234 9.1966563 24.002 7.9288437 24 6.8398438 C 23.997 4.7468438 21.470734 4.1128281 18.302734 5.4238281 L 17.630859 5.7089844 C 17.627859 5.7059844 16.416438 4.5199063 16.398438 4.5039062 C 15.947062 4.1101563 15.37584 3.9601035 14.728516 4.0078125 z M 15.140625 4.8730469 C 15.270432 4.8793362 15.393688 4.898875 15.507812 4.9296875 C 15.804813 5.0136875 16.787109 6.1523438 16.787109 6.1523438 C 16.787109 6.1523438 14.961531 7.1641719 13.269531 8.5761719 C 10.988531 10.333172 9.266375 12.885297 8.234375 15.654297 C 7.424375 15.812297 6.7084844 16.272203 6.2714844 16.908203 C 6.0104844 16.690203 5.5244531 16.266469 5.4394531 16.105469 C 4.7444531 14.777469 6.19975 12.203047 7.21875 10.748047 C 9.579375 7.3786719 13.193525 4.7787073 15.140625 4.8730469 z M 18.326172 8.1425781 C 18.349172 8.1405781 18.367141 8.1596406 18.369141 8.1816406 C 18.370141 8.1956406 18.364516 8.2077969 18.353516 8.2167969 C 18.199516 8.3357969 18.060406 8.4758594 17.941406 8.6308594 C 17.928406 8.6488594 17.933172 8.6725469 17.951172 8.6855469 C 17.958172 8.6905469 17.965609 8.6923594 17.974609 8.6933594 C 18.632609 8.6983594 19.559016 8.9285781 20.166016 9.2675781 C 20.207016 9.2905781 20.178813 9.369375 20.132812 9.359375 C 16.414813 8.507375 13.552406 10.351922 12.941406 10.794922 C 12.922406 10.806922 12.898719 10.80025 12.886719 10.78125 C 12.876719 10.76625 12.877672 10.748375 12.888672 10.734375 L 12.884766 10.734375 C 13.779766 9.700375 14.882141 8.801875 15.869141 8.296875 C 15.888141 8.285875 15.910875 8.2915469 15.921875 8.3105469 C 15.928875 8.3225469 15.928875 8.3366094 15.921875 8.3496094 C 15.843875 8.4916094 15.692531 8.7953906 15.644531 9.0253906 C 15.639531 9.0473906 15.653781 9.0692188 15.675781 9.0742188 C 15.686781 9.0772188 15.698031 9.0743594 15.707031 9.0683594 C 16.321031 8.6493594 17.390172 8.2005781 18.326172 8.1425781 z M 21.507812 11.361328 C 21.631563 11.381828 21.751375 11.427094 21.859375 11.496094 C 22.394375 11.851094 22.468094 12.710844 22.496094 13.339844 C 22.512094 13.698844 22.555313 14.568406 22.570312 14.816406 C 22.604312 15.386406 22.754594 15.467453 23.058594 15.564453 C 23.229594 15.620453 23.386141 15.662516 23.619141 15.728516 C 24.325141 15.926516 24.593328 16.231234 24.861328 16.490234 C 24.997328 16.624234 25.087234 16.797328 25.115234 16.986328 C 25.198234 17.594328 24.792266 18.241828 23.322266 18.923828 C 20.825266 20.082828 18.314172 19.695297 17.951172 19.654297 C 16.874172 19.509297 16.26025 20.902469 16.90625 21.855469 C 18.11625 23.641469 23.448094 22.924844 24.996094 20.714844 C 25.033094 20.661844 25.002031 20.628156 24.957031 20.660156 C 22.724031 22.188156 19.770797 22.702781 18.091797 22.050781 C 17.836797 21.951781 17.303281 21.707156 17.238281 21.160156 C 19.569281 21.881156 21.033203 21.199219 21.033203 21.199219 C 21.033203 21.199219 21.141906 21.0485 21.003906 21.0625 C 21.003906 21.0625 19.093109 21.344594 17.287109 20.683594 C 17.619109 19.605594 18.729453 21.009313 22.439453 19.945312 C 23.256453 19.711312 24.181578 19.354359 25.017578 18.693359 C 25.264578 18.950359 25.473875 19.442672 25.546875 19.888672 C 25.742875 19.853672 26.308203 19.859469 26.158203 20.855469 C 25.982203 21.917469 25.532437 22.780219 24.773438 23.574219 C 24.299437 24.088219 23.734422 24.510312 23.107422 24.820312 C 22.758422 25.003312 22.395484 25.156297 22.021484 25.279297 C 19.161484 26.213297 16.231156 25.186469 15.285156 22.980469 C 15.208156 22.812469 15.145703 22.637984 15.095703 22.458984 C 14.692703 21.004984 15.035516 19.260109 16.103516 18.162109 C 16.169516 18.092109 16.236328 18.01025 16.236328 17.90625 C 16.227328 17.81725 16.190812 17.733062 16.132812 17.664062 C 15.758812 17.123062 14.466563 16.199109 14.726562 14.412109 C 14.913562 13.129109 16.035031 12.225297 17.082031 12.279297 L 17.349609 12.294922 C 17.802609 12.321922 18.198266 12.379531 18.572266 12.394531 C 19.197266 12.421531 19.758828 12.331344 20.423828 11.777344 C 20.648828 11.590344 20.828812 11.427953 21.132812 11.376953 C 21.256813 11.345953 21.384062 11.340828 21.507812 11.361328 z M 21.306641 13.529297 C 20.973641 13.583297 20.961078 13.997359 21.080078 14.568359 C 21.147078 14.889359 21.266391 15.162031 21.400391 15.332031 C 21.565391 15.311031 21.731484 15.311031 21.896484 15.332031 C 21.985484 15.127031 22.001875 14.775578 21.921875 14.392578 C 21.802875 13.822578 21.639641 13.475297 21.306641 13.529297 z M 17.488281 15.083984 C 17.206156 15.117984 16.931812 15.222984 16.695312 15.396484 C 16.535312 15.513484 16.38425 15.675437 16.40625 15.773438 C 16.45125 15.973437 16.942234 15.628891 17.615234 15.587891 C 17.989234 15.564891 18.299109 15.681156 18.537109 15.785156 C 18.776109 15.892156 18.922469 15.960391 18.980469 15.900391 C 19.081469 15.796391 18.794031 15.397219 18.332031 15.199219 C 18.061031 15.086719 17.770406 15.049984 17.488281 15.083984 z M 21.789062 15.878906 L 21.789062 15.880859 C 21.380063 15.873859 21.364391 16.725422 21.775391 16.732422 C 22.186391 16.739422 22.201063 15.886906 21.789062 15.878906 z M 18.056641 16.060547 C 17.571641 16.136547 17.253937 16.408609 17.335938 16.599609 C 17.383937 16.617609 17.398281 16.642641 17.613281 16.556641 C 17.932281 16.436641 18.278234 16.401125 18.615234 16.453125 C 18.771234 16.471125 18.844906 16.481734 18.878906 16.427734 C 18.956906 16.308734 18.574641 15.999547 18.056641 16.060547 z M 20.410156 16.451172 C 20.315906 16.462172 20.23275 16.506859 20.1875 16.599609 C 20.005948 16.968698 20.767752 17.339063 20.951172 16.974609 C 21.086922 16.699359 20.692906 16.418172 20.410156 16.451172 z M 8.8964844 16.480469 C 9.8666833 16.511085 10.816984 17.196219 11.044922 18.667969 C 11.287922 20.251969 10.794703 21.794812 9.2207031 21.757812 L 9.2226562 21.759766 C 8.0026562 21.726766 6.6856875 20.628172 6.5546875 19.326172 C 6.3690625 17.482859 7.6490857 16.441105 8.8964844 16.480469 z M 8.8261719 17.400391 C 8.4667969 17.389641 8.1212344 17.549672 7.9277344 17.763672 C 7.4617344 18.276672 7.4611563 19.021781 7.6601562 19.050781 C 7.8881562 19.080781 7.8786875 18.705687 8.0546875 18.429688 C 8.2606875 18.111687 8.6859063 18.020563 9.0039062 18.226562 C 9.0059063 18.227563 9.0077656 18.228469 9.0097656 18.230469 C 9.6297656 18.636469 9.0818594 19.178766 9.1308594 19.759766 C 9.2048594 20.651766 10.116156 20.634234 10.285156 20.240234 C 10.307156 20.200234 10.302438 20.151234 10.273438 20.115234 C 10.275438 20.163234 10.310703 20.047703 10.095703 20.095703 L 10.09375 20.097656 C 10.02275 20.114656 9.772625 20.176656 9.640625 19.972656 C 9.362625 19.544656 10.234781 18.883547 9.8007812 18.060547 C 9.5577812 17.593547 9.1855469 17.411141 8.8261719 17.400391 z"
          />
        </svg>
        <span class="font-semibold text-gray-900 dark:text-white">Mailchimp</span>
      </div>
      <!-- Dropdown button -->
      <button
        id="integration-1-dropdown-button"
        type="button"
        data-dropdown-toggle="integration-1-dropdown"
        class="inline-flex items-center rounded-lg p-2 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
      >
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M9.6 2.6A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2l.5.3a2 2 0 0 1 2.9 0l1.4 1.3a2 2 0 0 1 0 2.9l.1.5h.1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2l-.3.5a2 2 0 0 1 0 2.9l-1.3 1.4a2 2 0 0 1-2.9 0l-.5.1v.1a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2l-.5-.3a2 2 0 0 1-2.9 0l-1.4-1.3a2 2 0 0 1 0-2.9l-.1-.5H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2l.3-.5a2 2 0 0 1 0-2.9l1.3-1.4a2 2 0 0 1 2.9 0l.5-.1V4c0-.5.2-1 .6-1.4ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z"
            clip-rule="evenodd"
          />
        </svg>
      </button>
      <div id="integration-1-dropdown" class="z-10 hidden w-40 rounded-lg bg-white shadow-sm dark:bg-gray-700">
        <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="integration-1-dropdown-button">
          <li>
            <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
            >
              <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path
                  fill-rule="evenodd"
                  d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4v11c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16c0-.6.4-1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z"
                  clip-rule="evenodd"
                />
              </svg>
              View details
            </button>
          </li>
          <li>
            <button
            type="button"
            id="deleteToolButton"
            data-modal-target="deleteToolModal"
            data-modal-toggle="deleteToolModal"
            class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
          >
            <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path
                fill-rule="evenodd"
                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                clip-rule="evenodd"
              />
            </svg>
            Remove
          </button>
          </li>
        </ul>
      </div>
    </div>
    <p class="text-gray-500 dark:text-gray-400">Online platform for sending professionals e-mails to mass recipients.</p>
    <div class="flex items-center space-x-4">
      <button
        type="button"
        id="deleteToolButton"
        data-modal-target="deleteToolModal"
        data-modal-toggle="deleteToolModal"
        class="w-full rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
      >
        Remove
      </button>
      <button
        type="button"
        id="successIntegrationButton"
        data-modal-target="successIntegrationModal"
        data-modal-toggle="successIntegrationModal"
        class="w-full rounded-lg bg-primary-700 px-3 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
      >
        Connect
      </button>
    </div>
  </div>

  <!-- Card -->
  <div class="space-y-4 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800">
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center">
        <svg class="me-2 h-7 text-gray-900 dark:text-white" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
          <path
            fill="currentColor"
            d="M 14.728516 4.0078125 C 10.197246 4.3417754 1.9458438 14.28525 5.1054688 16.953125 L 5.8945312 17.623047 C 5.6815312 18.194047 5.6067813 18.808062 5.6757812 19.414062 C 5.8557812 21.199063 7.5991562 22.644578 9.2851562 22.642578 C 12.371156 29.755578 23.605672 29.766734 26.513672 22.802734 C 26.605672 22.562734 27 21.485156 27 20.535156 C 27 19.585156 26.460234 19.185547 26.115234 19.185547 C 25.936234 18.558547 25.820516 18.486406 25.603516 18.191406 C 25.734516 17.995406 26.420453 16.907906 25.439453 15.878906 C 24.883453 15.294906 23.775625 14.892156 23.390625 14.785156 C 23.310625 14.176156 23.639234 11.646656 22.240234 10.347656 C 23.351234 9.1966563 24.002 7.9288437 24 6.8398438 C 23.997 4.7468438 21.470734 4.1128281 18.302734 5.4238281 L 17.630859 5.7089844 C 17.627859 5.7059844 16.416438 4.5199063 16.398438 4.5039062 C 15.947062 4.1101563 15.37584 3.9601035 14.728516 4.0078125 z M 15.140625 4.8730469 C 15.270432 4.8793362 15.393688 4.898875 15.507812 4.9296875 C 15.804813 5.0136875 16.787109 6.1523438 16.787109 6.1523438 C 16.787109 6.1523438 14.961531 7.1641719 13.269531 8.5761719 C 10.988531 10.333172 9.266375 12.885297 8.234375 15.654297 C 7.424375 15.812297 6.7084844 16.272203 6.2714844 16.908203 C 6.0104844 16.690203 5.5244531 16.266469 5.4394531 16.105469 C 4.7444531 14.777469 6.19975 12.203047 7.21875 10.748047 C 9.579375 7.3786719 13.193525 4.7787073 15.140625 4.8730469 z M 18.326172 8.1425781 C 18.349172 8.1405781 18.367141 8.1596406 18.369141 8.1816406 C 18.370141 8.1956406 18.364516 8.2077969 18.353516 8.2167969 C 18.199516 8.3357969 18.060406 8.4758594 17.941406 8.6308594 C 17.928406 8.6488594 17.933172 8.6725469 17.951172 8.6855469 C 17.958172 8.6905469 17.965609 8.6923594 17.974609 8.6933594 C 18.632609 8.6983594 19.559016 8.9285781 20.166016 9.2675781 C 20.207016 9.2905781 20.178813 9.369375 20.132812 9.359375 C 16.414813 8.507375 13.552406 10.351922 12.941406 10.794922 C 12.922406 10.806922 12.898719 10.80025 12.886719 10.78125 C 12.876719 10.76625 12.877672 10.748375 12.888672 10.734375 L 12.884766 10.734375 C 13.779766 9.700375 14.882141 8.801875 15.869141 8.296875 C 15.888141 8.285875 15.910875 8.2915469 15.921875 8.3105469 C 15.928875 8.3225469 15.928875 8.3366094 15.921875 8.3496094 C 15.843875 8.4916094 15.692531 8.7953906 15.644531 9.0253906 C 15.639531 9.0473906 15.653781 9.0692188 15.675781 9.0742188 C 15.686781 9.0772188 15.698031 9.0743594 15.707031 9.0683594 C 16.321031 8.6493594 17.390172 8.2005781 18.326172 8.1425781 z M 21.507812 11.361328 C 21.631563 11.381828 21.751375 11.427094 21.859375 11.496094 C 22.394375 11.851094 22.468094 12.710844 22.496094 13.339844 C 22.512094 13.698844 22.555313 14.568406 22.570312 14.816406 C 22.604312 15.386406 22.754594 15.467453 23.058594 15.564453 C 23.229594 15.620453 23.386141 15.662516 23.619141 15.728516 C 24.325141 15.926516 24.593328 16.231234 24.861328 16.490234 C 24.997328 16.624234 25.087234 16.797328 25.115234 16.986328 C 25.198234 17.594328 24.792266 18.241828 23.322266 18.923828 C 20.825266 20.082828 18.314172 19.695297 17.951172 19.654297 C 16.874172 19.509297 16.26025 20.902469 16.90625 21.855469 C 18.11625 23.641469 23.448094 22.924844 24.996094 20.714844 C 25.033094 20.661844 25.002031 20.628156 24.957031 20.660156 C 22.724031 22.188156 19.770797 22.702781 18.091797 22.050781 C 17.836797 21.951781 17.303281 21.707156 17.238281 21.160156 C 19.569281 21.881156 21.033203 21.199219 21.033203 21.199219 C 21.033203 21.199219 21.141906 21.0485 21.003906 21.0625 C 21.003906 21.0625 19.093109 21.344594 17.287109 20.683594 C 17.619109 19.605594 18.729453 21.009313 22.439453 19.945312 C 23.256453 19.711312 24.181578 19.354359 25.017578 18.693359 C 25.264578 18.950359 25.473875 19.442672 25.546875 19.888672 C 25.742875 19.853672 26.308203 19.859469 26.158203 20.855469 C 25.982203 21.917469 25.532437 22.780219 24.773438 23.574219 C 24.299437 24.088219 23.734422 24.510312 23.107422 24.820312 C 22.758422 25.003312 22.395484 25.156297 22.021484 25.279297 C 19.161484 26.213297 16.231156 25.186469 15.285156 22.980469 C 15.208156 22.812469 15.145703 22.637984 15.095703 22.458984 C 14.692703 21.004984 15.035516 19.260109 16.103516 18.162109 C 16.169516 18.092109 16.236328 18.01025 16.236328 17.90625 C 16.227328 17.81725 16.190812 17.733062 16.132812 17.664062 C 15.758812 17.123062 14.466563 16.199109 14.726562 14.412109 C 14.913562 13.129109 16.035031 12.225297 17.082031 12.279297 L 17.349609 12.294922 C 17.802609 12.321922 18.198266 12.379531 18.572266 12.394531 C 19.197266 12.421531 19.758828 12.331344 20.423828 11.777344 C 20.648828 11.590344 20.828812 11.427953 21.132812 11.376953 C 21.256813 11.345953 21.384062 11.340828 21.507812 11.361328 z M 21.306641 13.529297 C 20.973641 13.583297 20.961078 13.997359 21.080078 14.568359 C 21.147078 14.889359 21.266391 15.162031 21.400391 15.332031 C 21.565391 15.311031 21.731484 15.311031 21.896484 15.332031 C 21.985484 15.127031 22.001875 14.775578 21.921875 14.392578 C 21.802875 13.822578 21.639641 13.475297 21.306641 13.529297 z M 17.488281 15.083984 C 17.206156 15.117984 16.931812 15.222984 16.695312 15.396484 C 16.535312 15.513484 16.38425 15.675437 16.40625 15.773438 C 16.45125 15.973437 16.942234 15.628891 17.615234 15.587891 C 17.989234 15.564891 18.299109 15.681156 18.537109 15.785156 C 18.776109 15.892156 18.922469 15.960391 18.980469 15.900391 C 19.081469 15.796391 18.794031 15.397219 18.332031 15.199219 C 18.061031 15.086719 17.770406 15.049984 17.488281 15.083984 z M 21.789062 15.878906 L 21.789062 15.880859 C 21.380063 15.873859 21.364391 16.725422 21.775391 16.732422 C 22.186391 16.739422 22.201063 15.886906 21.789062 15.878906 z M 18.056641 16.060547 C 17.571641 16.136547 17.253937 16.408609 17.335938 16.599609 C 17.383937 16.617609 17.398281 16.642641 17.613281 16.556641 C 17.932281 16.436641 18.278234 16.401125 18.615234 16.453125 C 18.771234 16.471125 18.844906 16.481734 18.878906 16.427734 C 18.956906 16.308734 18.574641 15.999547 18.056641 16.060547 z M 20.410156 16.451172 C 20.315906 16.462172 20.23275 16.506859 20.1875 16.599609 C 20.005948 16.968698 20.767752 17.339063 20.951172 16.974609 C 21.086922 16.699359 20.692906 16.418172 20.410156 16.451172 z M 8.8964844 16.480469 C 9.8666833 16.511085 10.816984 17.196219 11.044922 18.667969 C 11.287922 20.251969 10.794703 21.794812 9.2207031 21.757812 L 9.2226562 21.759766 C 8.0026562 21.726766 6.6856875 20.628172 6.5546875 19.326172 C 6.3690625 17.482859 7.6490857 16.441105 8.8964844 16.480469 z M 8.8261719 17.400391 C 8.4667969 17.389641 8.1212344 17.549672 7.9277344 17.763672 C 7.4617344 18.276672 7.4611563 19.021781 7.6601562 19.050781 C 7.8881562 19.080781 7.8786875 18.705687 8.0546875 18.429688 C 8.2606875 18.111687 8.6859063 18.020563 9.0039062 18.226562 C 9.0059063 18.227563 9.0077656 18.228469 9.0097656 18.230469 C 9.6297656 18.636469 9.0818594 19.178766 9.1308594 19.759766 C 9.2048594 20.651766 10.116156 20.634234 10.285156 20.240234 C 10.307156 20.200234 10.302438 20.151234 10.273438 20.115234 C 10.275438 20.163234 10.310703 20.047703 10.095703 20.095703 L 10.09375 20.097656 C 10.02275 20.114656 9.772625 20.176656 9.640625 19.972656 C 9.362625 19.544656 10.234781 18.883547 9.8007812 18.060547 C 9.5577812 17.593547 9.1855469 17.411141 8.8261719 17.400391 z"
          />
        </svg>
        <span class="font-semibold text-gray-900 dark:text-white">Mailchimp</span>
      </div>
      <!-- Dropdown button -->
      <button
        id="integration-1-dropdown-button"
        type="button"
        data-dropdown-toggle="integration-1-dropdown"
        class="inline-flex items-center rounded-lg p-2 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
      >
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M9.6 2.6A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2l.5.3a2 2 0 0 1 2.9 0l1.4 1.3a2 2 0 0 1 0 2.9l.1.5h.1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2l-.3.5a2 2 0 0 1 0 2.9l-1.3 1.4a2 2 0 0 1-2.9 0l-.5.1v.1a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2l-.5-.3a2 2 0 0 1-2.9 0l-1.4-1.3a2 2 0 0 1 0-2.9l-.1-.5H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2l.3-.5a2 2 0 0 1 0-2.9l1.3-1.4a2 2 0 0 1 2.9 0l.5-.1V4c0-.5.2-1 .6-1.4ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z"
            clip-rule="evenodd"
          />
        </svg>
      </button>
      <div id="integration-1-dropdown" class="z-10 hidden w-40 rounded-lg bg-white shadow-sm dark:bg-gray-700">
        <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="integration-1-dropdown-button">
          <li>
            <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
            >
              <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path
                  fill-rule="evenodd"
                  d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4v11c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16c0-.6.4-1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z"
                  clip-rule="evenodd"
                />
              </svg>
              View details
            </button>
          </li>
          <li>
            <button
            type="button"
            id="deleteToolButton"
            data-modal-target="deleteToolModal"
            data-modal-toggle="deleteToolModal"
            class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
          >
            <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path
                fill-rule="evenodd"
                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                clip-rule="evenodd"
              />
            </svg>
            Remove
          </button>
          </li>
        </ul>
      </div>
    </div>
    <p class="text-gray-500 dark:text-gray-400">Online platform for sending professionals e-mails to mass recipients.</p>
    <div class="flex items-center space-x-4">
      <button
        type="button"
        id="deleteToolButton"
        data-modal-target="deleteToolModal"
        data-modal-toggle="deleteToolModal"
        class="w-full rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
      >
        Remove
      </button>
      <button
        type="button"
        id="successIntegrationButton"
        data-modal-target="successIntegrationModal"
        data-modal-toggle="successIntegrationModal"
        class="w-full rounded-lg bg-primary-700 px-3 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
      >
        Connect
      </button>
    </div>
  </div>

  <!-- Card -->
  <div class="space-y-4 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800">
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center">
        <svg class="me-2 h-7 text-gray-900 dark:text-white" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
          <path
            fill="currentColor"
            d="M 14.728516 4.0078125 C 10.197246 4.3417754 1.9458438 14.28525 5.1054688 16.953125 L 5.8945312 17.623047 C 5.6815312 18.194047 5.6067813 18.808062 5.6757812 19.414062 C 5.8557812 21.199063 7.5991562 22.644578 9.2851562 22.642578 C 12.371156 29.755578 23.605672 29.766734 26.513672 22.802734 C 26.605672 22.562734 27 21.485156 27 20.535156 C 27 19.585156 26.460234 19.185547 26.115234 19.185547 C 25.936234 18.558547 25.820516 18.486406 25.603516 18.191406 C 25.734516 17.995406 26.420453 16.907906 25.439453 15.878906 C 24.883453 15.294906 23.775625 14.892156 23.390625 14.785156 C 23.310625 14.176156 23.639234 11.646656 22.240234 10.347656 C 23.351234 9.1966563 24.002 7.9288437 24 6.8398438 C 23.997 4.7468438 21.470734 4.1128281 18.302734 5.4238281 L 17.630859 5.7089844 C 17.627859 5.7059844 16.416438 4.5199063 16.398438 4.5039062 C 15.947062 4.1101563 15.37584 3.9601035 14.728516 4.0078125 z M 15.140625 4.8730469 C 15.270432 4.8793362 15.393688 4.898875 15.507812 4.9296875 C 15.804813 5.0136875 16.787109 6.1523438 16.787109 6.1523438 C 16.787109 6.1523438 14.961531 7.1641719 13.269531 8.5761719 C 10.988531 10.333172 9.266375 12.885297 8.234375 15.654297 C 7.424375 15.812297 6.7084844 16.272203 6.2714844 16.908203 C 6.0104844 16.690203 5.5244531 16.266469 5.4394531 16.105469 C 4.7444531 14.777469 6.19975 12.203047 7.21875 10.748047 C 9.579375 7.3786719 13.193525 4.7787073 15.140625 4.8730469 z M 18.326172 8.1425781 C 18.349172 8.1405781 18.367141 8.1596406 18.369141 8.1816406 C 18.370141 8.1956406 18.364516 8.2077969 18.353516 8.2167969 C 18.199516 8.3357969 18.060406 8.4758594 17.941406 8.6308594 C 17.928406 8.6488594 17.933172 8.6725469 17.951172 8.6855469 C 17.958172 8.6905469 17.965609 8.6923594 17.974609 8.6933594 C 18.632609 8.6983594 19.559016 8.9285781 20.166016 9.2675781 C 20.207016 9.2905781 20.178813 9.369375 20.132812 9.359375 C 16.414813 8.507375 13.552406 10.351922 12.941406 10.794922 C 12.922406 10.806922 12.898719 10.80025 12.886719 10.78125 C 12.876719 10.76625 12.877672 10.748375 12.888672 10.734375 L 12.884766 10.734375 C 13.779766 9.700375 14.882141 8.801875 15.869141 8.296875 C 15.888141 8.285875 15.910875 8.2915469 15.921875 8.3105469 C 15.928875 8.3225469 15.928875 8.3366094 15.921875 8.3496094 C 15.843875 8.4916094 15.692531 8.7953906 15.644531 9.0253906 C 15.639531 9.0473906 15.653781 9.0692188 15.675781 9.0742188 C 15.686781 9.0772188 15.698031 9.0743594 15.707031 9.0683594 C 16.321031 8.6493594 17.390172 8.2005781 18.326172 8.1425781 z M 21.507812 11.361328 C 21.631563 11.381828 21.751375 11.427094 21.859375 11.496094 C 22.394375 11.851094 22.468094 12.710844 22.496094 13.339844 C 22.512094 13.698844 22.555313 14.568406 22.570312 14.816406 C 22.604312 15.386406 22.754594 15.467453 23.058594 15.564453 C 23.229594 15.620453 23.386141 15.662516 23.619141 15.728516 C 24.325141 15.926516 24.593328 16.231234 24.861328 16.490234 C 24.997328 16.624234 25.087234 16.797328 25.115234 16.986328 C 25.198234 17.594328 24.792266 18.241828 23.322266 18.923828 C 20.825266 20.082828 18.314172 19.695297 17.951172 19.654297 C 16.874172 19.509297 16.26025 20.902469 16.90625 21.855469 C 18.11625 23.641469 23.448094 22.924844 24.996094 20.714844 C 25.033094 20.661844 25.002031 20.628156 24.957031 20.660156 C 22.724031 22.188156 19.770797 22.702781 18.091797 22.050781 C 17.836797 21.951781 17.303281 21.707156 17.238281 21.160156 C 19.569281 21.881156 21.033203 21.199219 21.033203 21.199219 C 21.033203 21.199219 21.141906 21.0485 21.003906 21.0625 C 21.003906 21.0625 19.093109 21.344594 17.287109 20.683594 C 17.619109 19.605594 18.729453 21.009313 22.439453 19.945312 C 23.256453 19.711312 24.181578 19.354359 25.017578 18.693359 C 25.264578 18.950359 25.473875 19.442672 25.546875 19.888672 C 25.742875 19.853672 26.308203 19.859469 26.158203 20.855469 C 25.982203 21.917469 25.532437 22.780219 24.773438 23.574219 C 24.299437 24.088219 23.734422 24.510312 23.107422 24.820312 C 22.758422 25.003312 22.395484 25.156297 22.021484 25.279297 C 19.161484 26.213297 16.231156 25.186469 15.285156 22.980469 C 15.208156 22.812469 15.145703 22.637984 15.095703 22.458984 C 14.692703 21.004984 15.035516 19.260109 16.103516 18.162109 C 16.169516 18.092109 16.236328 18.01025 16.236328 17.90625 C 16.227328 17.81725 16.190812 17.733062 16.132812 17.664062 C 15.758812 17.123062 14.466563 16.199109 14.726562 14.412109 C 14.913562 13.129109 16.035031 12.225297 17.082031 12.279297 L 17.349609 12.294922 C 17.802609 12.321922 18.198266 12.379531 18.572266 12.394531 C 19.197266 12.421531 19.758828 12.331344 20.423828 11.777344 C 20.648828 11.590344 20.828812 11.427953 21.132812 11.376953 C 21.256813 11.345953 21.384062 11.340828 21.507812 11.361328 z M 21.306641 13.529297 C 20.973641 13.583297 20.961078 13.997359 21.080078 14.568359 C 21.147078 14.889359 21.266391 15.162031 21.400391 15.332031 C 21.565391 15.311031 21.731484 15.311031 21.896484 15.332031 C 21.985484 15.127031 22.001875 14.775578 21.921875 14.392578 C 21.802875 13.822578 21.639641 13.475297 21.306641 13.529297 z M 17.488281 15.083984 C 17.206156 15.117984 16.931812 15.222984 16.695312 15.396484 C 16.535312 15.513484 16.38425 15.675437 16.40625 15.773438 C 16.45125 15.973437 16.942234 15.628891 17.615234 15.587891 C 17.989234 15.564891 18.299109 15.681156 18.537109 15.785156 C 18.776109 15.892156 18.922469 15.960391 18.980469 15.900391 C 19.081469 15.796391 18.794031 15.397219 18.332031 15.199219 C 18.061031 15.086719 17.770406 15.049984 17.488281 15.083984 z M 21.789062 15.878906 L 21.789062 15.880859 C 21.380063 15.873859 21.364391 16.725422 21.775391 16.732422 C 22.186391 16.739422 22.201063 15.886906 21.789062 15.878906 z M 18.056641 16.060547 C 17.571641 16.136547 17.253937 16.408609 17.335938 16.599609 C 17.383937 16.617609 17.398281 16.642641 17.613281 16.556641 C 17.932281 16.436641 18.278234 16.401125 18.615234 16.453125 C 18.771234 16.471125 18.844906 16.481734 18.878906 16.427734 C 18.956906 16.308734 18.574641 15.999547 18.056641 16.060547 z M 20.410156 16.451172 C 20.315906 16.462172 20.23275 16.506859 20.1875 16.599609 C 20.005948 16.968698 20.767752 17.339063 20.951172 16.974609 C 21.086922 16.699359 20.692906 16.418172 20.410156 16.451172 z M 8.8964844 16.480469 C 9.8666833 16.511085 10.816984 17.196219 11.044922 18.667969 C 11.287922 20.251969 10.794703 21.794812 9.2207031 21.757812 L 9.2226562 21.759766 C 8.0026562 21.726766 6.6856875 20.628172 6.5546875 19.326172 C 6.3690625 17.482859 7.6490857 16.441105 8.8964844 16.480469 z M 8.8261719 17.400391 C 8.4667969 17.389641 8.1212344 17.549672 7.9277344 17.763672 C 7.4617344 18.276672 7.4611563 19.021781 7.6601562 19.050781 C 7.8881562 19.080781 7.8786875 18.705687 8.0546875 18.429688 C 8.2606875 18.111687 8.6859063 18.020563 9.0039062 18.226562 C 9.0059063 18.227563 9.0077656 18.228469 9.0097656 18.230469 C 9.6297656 18.636469 9.0818594 19.178766 9.1308594 19.759766 C 9.2048594 20.651766 10.116156 20.634234 10.285156 20.240234 C 10.307156 20.200234 10.302438 20.151234 10.273438 20.115234 C 10.275438 20.163234 10.310703 20.047703 10.095703 20.095703 L 10.09375 20.097656 C 10.02275 20.114656 9.772625 20.176656 9.640625 19.972656 C 9.362625 19.544656 10.234781 18.883547 9.8007812 18.060547 C 9.5577812 17.593547 9.1855469 17.411141 8.8261719 17.400391 z"
          />
        </svg>
        <span class="font-semibold text-gray-900 dark:text-white">Mailchimp</span>
      </div>
      <!-- Dropdown button -->
      <button
        id="integration-1-dropdown-button"
        type="button"
        data-dropdown-toggle="integration-1-dropdown"
        class="inline-flex items-center rounded-lg p-2 text-center text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
      >
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M9.6 2.6A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2l.5.3a2 2 0 0 1 2.9 0l1.4 1.3a2 2 0 0 1 0 2.9l.1.5h.1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2l-.3.5a2 2 0 0 1 0 2.9l-1.3 1.4a2 2 0 0 1-2.9 0l-.5.1v.1a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2l-.5-.3a2 2 0 0 1-2.9 0l-1.4-1.3a2 2 0 0 1 0-2.9l-.1-.5H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2l.3-.5a2 2 0 0 1 0-2.9l1.3-1.4a2 2 0 0 1 2.9 0l.5-.1V4c0-.5.2-1 .6-1.4ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z"
            clip-rule="evenodd"
          />
        </svg>
      </button>
      <div id="integration-1-dropdown" class="z-10 hidden w-40 rounded-lg bg-white shadow-sm dark:bg-gray-700">
        <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="integration-1-dropdown-button">
          <li>
            <button type="button" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
            >
              <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path
                  fill-rule="evenodd"
                  d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4v11c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16c0-.6.4-1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z"
                  clip-rule="evenodd"
                />
              </svg>
              View details
            </button>
          </li>
          <li>
            <button
            type="button"
            id="deleteToolButton"
            data-modal-target="deleteToolModal"
            data-modal-toggle="deleteToolModal"
            class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
          >
            <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path
                fill-rule="evenodd"
                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                clip-rule="evenodd"
              />
            </svg>
            Remove
          </button>
          </li>
        </ul>
      </div>
    </div>
    <p class="text-gray-500 dark:text-gray-400">Online platform for sending professionals e-mails to mass recipients.</p>
    <div class="flex items-center space-x-4">
      <button
        type="button"
        id="deleteToolButton"
        data-modal-target="deleteToolModal"
        data-modal-toggle="deleteToolModal"
        class="w-full rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
      >
        Remove
      </button>
      <button
        type="button"
        id="successIntegrationButton"
        data-modal-target="successIntegrationModal"
        data-modal-toggle="successIntegrationModal"
        class="w-full rounded-lg bg-primary-700 px-3 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
      >
        Connect
      </button>
    </div>
  </div>
</div>

  <!-- Widget -->
  <div class="mb-4 rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:p-6">
    <div class="border-b dark:border-gray-700 border-gray-200">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Latest shipments</h2>
      <div class="flex flex-col-reverse items-center justify-between pb-4 md:flex-row md:space-x-4 md:pb-6">
        <div class="flex w-full flex-col space-y-4 md:flex-row md:items-center md:space-y-0 lg:w-2/3">
          <form class="w-full flex-1 md:mr-4 md:max-w-sm">
            <label for="default-search" class="sr-only text-sm font-medium text-gray-900 dark:text-white">Search</label>
            <div class="relative">
              <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                <svg aria-hidden="true" class="h-4 w-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </div>
              <input
                type="search"
                id="default-search"
                class="block w-full min-w-64 rounded-lg border border-gray-300 bg-gray-50 p-2 pl-9 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                placeholder="Search for shipment"
                required=""
              />
              <button
                type="submit"
                class="absolute bottom-0 right-0 top-0 rounded-r-lg bg-primary-700 px-4 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
              >
                Search
              </button>
            </div>
          </form>
          <div class="items-center space-y-4 sm:flex sm:space-x-4 sm:space-y-0">
            <button
              id="filterDropdownButton"
              data-dropdown-toggle="filterDropdown"
              data-dropdown-ignore-click-outside-class="datepicker"
              class="inline-flex w-full shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto"
              type="button"
            >
              Last 7 days
              <svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
              </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="filterDropdown" class="z-10 hidden w-[340px] rounded-lg bg-white p-2 shadow-sm dark:bg-gray-700">
              <ul class="space-y-1 text-sm" aria-labelledby="filterDropdownButton">
                <li class="flex rounded-sm px-3 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                  <button type="button" class="text-primary-700 dark:text-primary-500">Today<span class="ms-1 text-gray-400">Aug 21, 2025 - Aug 21, 2025</span></button>
                </li>
                <li class="flex rounded-sm px-3 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                  <button type="button" class="text-primary-700 dark:text-primary-500">Yesterday<span class="ms-1 text-gray-400">Aug 20, 2025 - Aug 21, 2025</span></button>
                </li>
                <li class="flex rounded-sm px-3 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                  <button type="button" class="text-primary-700 dark:text-primary-500">Last 7 days<span class="ms-1 text-gray-400">Aug 14, 2025 - Aug 21, 2025</span></button>
                </li>
                <li class="flex rounded-sm px-3 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                  <button type="button" class="text-primary-700 dark:text-primary-500">Month to Date<span class="ms-1 text-gray-400">Sep 21, 2025 - Aug 21, 2025</span></button>
                </li>
                <li class="flex rounded-sm px-3 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                  <button type="button" class="text-primary-700 dark:text-primary-500">Year to Date<span class="ms-1 text-gray-400">Jan 1, 2025 - Aug 21, 2025</span></button>
                </li>
                <li class="flex rounded-sm px-3 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                  <button type="button" class="text-primary-700 dark:text-primary-500">All time<span class="ms-1 text-gray-400">Jan 1, 2020 - Aug 21, 2025</span></button>
                </li>
              </ul>
            </div>
            <button
              type="button"
              class="inline-flex w-full shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto"
            >
              <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path
                  fill-rule="evenodd"
                  d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7c0 1.1.9 2 2 2 0 1.1.9 2 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm1 8.8A2.3 2.3 0 0 0 9.6 13a2.3 2.3 0 0 0 2.1 2.5h.7a.3.3 0 0 1 .2.4l-.4.1h-1a1 1 0 1 0 0 2h1c.5 0 1 0 1.4-.3a2 2 0 0 0 1-1.1 2.3 2.3 0 0 0-2.2-3l-.5-.1a.3.3 0 0 1-.3-.4.3.3 0 0 1 .4-.3h1a1 1 0 1 0 0-2h-1Zm8 1.5a1 1 0 1 0-2-.6l-.5 1.7-.5-1.7a1 1 0 0 0-2 .6l1.5 4.8a1 1 0 0 0 1.9 0l1.6-4.8Zm-13.8.9.4-.2h1a1 1 0 1 0 0-2h-1A2.6 2.6 0 0 0 4 13.6v1.8A2.6 2.6 0 0 0 6.6 18h1a1 1 0 1 0 0-2h-1a.6.6 0 0 1-.6-.6v-1.8c0-.1 0-.3.2-.4Z"
                  clip-rule="evenodd"
                />
              </svg>
              Export CSV
            </button>
          </div>
        </div>
        <div class="mb-4 flex w-full shrink-0 flex-col items-stretch justify-end md:mb-0 md:w-auto md:flex-row md:items-center md:space-x-3">
          <button
            id="addShipmentButton"
            data-modal-target="addShipmentModal"
            data-modal-toggle="addShipmentModal"
            type="button"
            class="flex items-center justify-center rounded-lg bg-primary-700 px-3 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
          >
            <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
            </svg>
            Add shipment
          </button>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap py-4 md:py-6">
      <div class="mr-4 hidden items-center text-sm font-medium text-gray-900 dark:text-white md:flex">Show only:</div>
      <div class="flex flex-wrap gap-4">
        <div class="flex items-center">
          <input
            id="inline-radio"
            type="radio"
            value=""
            name="inline-radio-group"
            class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
          />
          <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">All</label>
        </div>
        <div class="flex items-center">
          <input
            id="inline-2-radio"
            type="radio"
            value=""
            name="inline-radio-group"
            class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
          />
          <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Delivered</label>
        </div>
        <div class="flex items-center">
          <input
            id="inline-3-radio"
            type="radio"
            value=""
            name="inline-radio-group"
            class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
          />
          <label for="inline-3-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">In transit</label>
        </div>
      </div>
    </div>
    <div class="overflow-x-auto relative">
      <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
        <thead class="bg-gray-50 text-xs uppercase text-gray-500 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="p-4">
              <div class="flex items-center">
                <input
                  id="checkbox-all"
                  type="checkbox"
                  class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                />
                <label for="checkbox-all" class="sr-only">checkbox</label>
              </div>
            </th>
            <th scope="col" class="whitespace-nowrap px-4 py-3 font-semibold">Shipment ID</th>
            <th scope="col" class="whitespace-nowrap px-4 py-3 font-semibold">
              Customer
              <svg class="ml-1 inline-block h-3 w-3" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                  d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                />
              </svg>
            </th>
            <th scope="col" class="whitespace-nowrap px-4 py-3 font-semibold">Email</th>
            <th scope="col" class="whitespace-nowrap px-4 py-3 font-semibold">
              Total
              <svg class="ml-1 inline-block h-3 w-3" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                  d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                />
              </svg>
            </th>
            <th scope="col" class="whitespace-nowrap px-4 py-3 font-semibold">
              Due Date
              <svg class="ml-1 inline-block h-3 w-3" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                  d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                />
              </svg>
            </th>
            <th scope="col" class="whitespace-nowrap px-4 py-3 font-semibold">
              Status
              <svg class="ml-1 inline-block h-3 w-3" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                  d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                />
              </svg>
            </th>
            <th scope="col" class="whitespace-nowrap px-4 py-3 font-semibold">
              Delivery Type
              <svg class="ml-1 inline-block h-3 w-3" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                  d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                />
              </svg>
            </th>
            <th scope="col" class="px-4 py-3 font-semibold">
              <span class="sr-only">Actions</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700 border-gray-200">
            <td class="w-4 px-4 py-3">
              <div class="flex items-center">
                <input
                  id="checkbox-table-search-1"
                  type="checkbox"
                  onclick="event.stopPropagation()"
                  class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                />
                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
              </div>
            </td>
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"><a href="#" class="hover:underline">#1846325</a></th>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Flowbite LLC</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium">flowbite@example.com</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">$466</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">09 Mar 2025</td>
            <td class="whitespace-nowrap px-4 py-3">
              <span class="mr-2 rounded-sm bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">Completed</span>
            </td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Instant (digital)</td>
            <td class="px-4 py-3">
              <button
                id="transaction-1-dropdown-button"
                type="button"
                data-dropdown-toggle="transaction-1-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-200 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="transaction-1-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="transaction-1-dropdown-button">
                  <li>
                    <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Details
                    </a>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="deleteInvoiceButton"
                      data-modal-target="deleteShipmentModal"
                      data-modal-toggle="deleteShipmentModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                    >
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Delete
                    </button>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr class="border-b hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700 border-gray-200">
            <td class="w-4 px-4 py-3">
              <div class="flex items-center">
                <input
                  id="checkbox-table-search-1"
                  type="checkbox"
                  onclick="event.stopPropagation()"
                  class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                />
                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
              </div>
            </td>
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"><a href="#" class="hover:underline">#1846326</a></th>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Jese Leos</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium">name@example.com</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">$2000</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">07 Mar 2025</td>
            <td class="whitespace-nowrap px-4 py-3">
              <span class="me-2 rounded-sm bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Failed</span>
            </td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Shipment (Packaging)</td>
            <td class="px-4 py-3">
              <button
                id="transaction-2-dropdown-button"
                type="button"
                data-dropdown-toggle="transaction-2-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-200 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="transaction-2-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="transaction-2-dropdown-button">
                  <li>
                    <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Details
                    </a>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="deleteInvoiceButton"
                      data-modal-target="deleteShipmentModal"
                      data-modal-toggle="deleteShipmentModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                    >
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Delete
                    </button>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr class="border-b hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700 border-gray-200">
            <td class="w-4 px-4 py-3">
              <div class="flex items-center">
                <input
                  id="checkbox-table-search-1"
                  type="checkbox"
                  onclick="event.stopPropagation()"
                  class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                />
                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
              </div>
            </td>
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"><a href="#" class="hover:underline">#1846327</a></th>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Bonnie Green</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium">name@company.com</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">$245</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">12 Mar 2025</td>
            <td class="whitespace-nowrap px-4 py-3">
              <span class="mr-2 rounded-sm bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">Completed</span>
            </td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Scheduled (Digital)</td>
            <td class="px-4 py-3">
              <button
                id="transaction-3-dropdown-button"
                type="button"
                data-dropdown-toggle="transaction-3-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-200 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="transaction-3-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="transaction-3-dropdown-button">
                  <li>
                    <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Details
                    </a>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="deleteInvoiceButton"
                      data-modal-target="deleteShipmentModal"
                      data-modal-toggle="deleteShipmentModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                    >
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Delete
                    </button>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr class="border-b hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700 border-gray-200">
            <td class="w-4 px-4 py-3">
              <div class="flex items-center">
                <input
                  id="checkbox-table-search-1"
                  type="checkbox"
                  onclick="event.stopPropagation()"
                  class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                />
                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
              </div>
            </td>
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"><a href="#" class="hover:underline">#1846328</a></th>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Themesberg LLC</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium">company@example.com</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">$90</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">18 Apr 2025</td>
            <td class="whitespace-nowrap px-4 py-3">
              <span class="mr-2 rounded-sm bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">Refunded</span>
            </td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Instant (Digital)</td>
            <td class="px-4 py-3">
              <button
                id="transaction-4-dropdown-button"
                type="button"
                data-dropdown-toggle="transaction-4-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-200 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="transaction-4-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="transaction-4-dropdown-button">
                  <li>
                    <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Details
                    </a>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="deleteInvoiceButton"
                      data-modal-target="deleteShipmentModal"
                      data-modal-toggle="deleteShipmentModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                    >
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Delete
                    </button>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr class="border-b hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700 border-gray-200">
            <td class="w-4 px-4 py-3">
              <div class="flex items-center">
                <input
                  id="checkbox-table-search-1"
                  type="checkbox"
                  onclick="event.stopPropagation()"
                  class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                />
                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
              </div>
            </td>
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"><a href="#" class="hover:underline">#1846329</a></th>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Micheal Gough</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium">name@example.com</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">$3040</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">21 Apr 2025</td>
            <td class="whitespace-nowrap px-4 py-3">
              <span class="mr-2 rounded-sm bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300">Pending</span>
            </td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Shipment (Packaging)</td>
            <td class="px-4 py-3">
              <button
                id="transaction-5-dropdown-button"
                type="button"
                data-dropdown-toggle="transaction-5-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-200 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="transaction-5-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="transaction-5-dropdown-button">
                  <li>
                    <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Details
                    </a>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="deleteInvoiceButton"
                      data-modal-target="deleteShipmentModal"
                      data-modal-toggle="deleteShipmentModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                    >
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Delete
                    </button>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr class="border-b hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700 border-gray-200">
            <td class="w-4 px-4 py-3">
              <div class="flex items-center">
                <input
                  id="checkbox-table-search-1"
                  type="checkbox"
                  onclick="event.stopPropagation()"
                  class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                />
                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
              </div>
            </td>
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"><a href="#" class="hover:underline">#1846330</a></th>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Lana Byrd</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium">name@example.com</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">$2999</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">24 Apr 2025</td>
            <td class="whitespace-nowrap px-4 py-3">
              <span class="mr-2 rounded-sm bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">Completed</span>
            </td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Instant (Digital)</td>
            <td class="px-4 py-3">
              <button
                id="transaction-6-dropdown-button"
                type="button"
                data-dropdown-toggle="transaction-6-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-200 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="transaction-6-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="transaction-6-dropdown-button">
                  <li>
                    <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Details
                    </a>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="deleteInvoiceButton"
                      data-modal-target="deleteShipmentModal"
                      data-modal-toggle="deleteShipmentModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                    >
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Delete
                    </button>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr class="border-b hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700 border-gray-200">
            <td class="w-4 px-4 py-3">
              <div class="flex items-center">
                <input
                  id="checkbox-table-search-1"
                  type="checkbox"
                  onclick="event.stopPropagation()"
                  class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                />
                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
              </div>
            </td>
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"><a href="#" class="hover:underline">#1846331</a></th>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Netflix LLC</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium">company@example.com</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">$1870</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">05 May 2025</td>
            <td class="whitespace-nowrap px-4 py-3">
              <span class="mr-2 rounded-sm bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">Completed</span>
            </td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Instant (Digital)</td>
            <td class="px-4 py-3">
              <button
                id="transaction-7-dropdown-button"
                type="button"
                data-dropdown-toggle="transaction-7-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-200 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="transaction-7-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="transaction-7-dropdown-button">
                  <li>
                    <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Details
                    </a>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="deleteInvoiceButton"
                      data-modal-target="deleteShipmentModal"
                      data-modal-toggle="deleteShipmentModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                    >
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Delete
                    </button>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr class="border-b hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700 border-gray-200">
            <td class="w-4 px-4 py-3">
              <div class="flex items-center">
                <input
                  id="checkbox-table-search-1"
                  type="checkbox"
                  onclick="event.stopPropagation()"
                  class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                />
                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
              </div>
            </td>
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"><a href="#" class="hover:underline">#1846332</a></th>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Leslie Livingston</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium">name@example.com</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">$5067</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">08 May 2025</td>
            <td class="whitespace-nowrap px-4 py-3">
              <span class="mr-2 rounded-sm bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">Refunded</span>
            </td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Shipment (Packaging)</td>
            <td class="px-4 py-3">
              <button
                id="transaction-8-dropdown-button"
                type="button"
                data-dropdown-toggle="transaction-8-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-200 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="transaction-8-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="transaction-8-dropdown-button">
                  <li>
                    <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Details
                    </a>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="deleteInvoiceButton"
                      data-modal-target="deleteShipmentModal"
                      data-modal-toggle="deleteShipmentModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                    >
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Delete
                    </button>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr class="border-b hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700 border-gray-200">
            <td class="w-4 px-4 py-3">
              <div class="flex items-center">
                <input
                  id="checkbox-table-search-1"
                  type="checkbox"
                  onclick="event.stopPropagation()"
                  class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                />
                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
              </div>
            </td>
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"><a href="#" class="hover:underline">#1846333</a></th>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Bergside LLC</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium">company@example.com</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">$60</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">02 May 2025</td>
            <td class="whitespace-nowrap px-4 py-3">
              <span class="mr-2 rounded-sm bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300">Pending</span>
            </td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Instant (Digital)</td>
            <td class="px-4 py-3">
              <button
                id="transaction-9-dropdown-button"
                type="button"
                data-dropdown-toggle="transaction-9-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-200 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="transaction-9-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="transaction-9-dropdown-button">
                  <li>
                    <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Details
                    </a>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="deleteInvoiceButton"
                      data-modal-target="deleteShipmentModal"
                      data-modal-toggle="deleteShipmentModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                    >
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Delete
                    </button>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr class="hover:bg-gray-100 dark:hover:bg-gray-800">
            <td class="w-4 px-4 py-3">
              <div class="flex items-center">
                <input
                  id="checkbox-table-search-1"
                  type="checkbox"
                  onclick="event.stopPropagation()"
                  class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                />
                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
              </div>
            </td>
            <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"><a href="#" class="hover:underline">#1846334</a></th>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Robert Brown</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium">name@example.com</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">$499</td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">20 Jun 2025</td>
            <td class="whitespace-nowrap px-4 py-3">
              <span class="mr-2 rounded-sm bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">Completed</span>
            </td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Instant (Digital)</td>
            <td class="px-4 py-3">
              <button
                id="transaction-10-dropdown-button"
                type="button"
                data-dropdown-toggle="transaction-10-dropdown"
                class="inline-flex items-center rounded-lg p-1 text-center text-sm font-medium text-gray-500 hover:bg-gray-200 hover:text-gray-900 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0" />
                </svg>
              </button>
              <div id="transaction-10-dropdown" class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow-sm dark:divide-gray-600 dark:bg-gray-700">
                <ul class="p-2 text-sm font-medium text-gray-500 dark:text-gray-400" aria-labelledby="transaction-10-dropdown-button">
                  <li>
                    <a href="#" class="inline-flex w-full items-center rounded-md px-3 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Details
                    </a>
                  </li>
                  <li>
                    <button
                      type="button"
                      id="deleteInvoiceButton"
                      data-modal-target="deleteShipmentModal"
                      data-modal-toggle="deleteShipmentModal"
                      class="inline-flex w-full items-center rounded-md px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                    >
                      <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          fill-rule="evenodd"
                          d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                      Delete
                    </button>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="relative overflow-hidden rounded-b-lg border-t border-gray-200 pt-4 dark:border-gray-700 md:pt-6">
      <nav class="flex flex-col items-start justify-between space-y-3 md:flex-row md:items-center md:space-y-0" aria-label="Table navigation">
        <span class="text-sm text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
        <ul class="inline-flex items-stretch -space-x-px">
          <li>
            <a
              href="#"
              class="ml-0 flex h-full items-center justify-center rounded-l-lg border border-gray-300 bg-white px-3 py-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
            >
              <span class="sr-only">Previous</span>
              <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7" />
              </svg>
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >1</a
            >
          </li>
          <li>
            <a
              href="#"
              class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >2</a
            >
          </li>
          <li>
            <a
              href="#"
              aria-current="page"
              class="z-10 flex items-center justify-center border border-primary-300 bg-primary-50 px-3 py-2 text-sm leading-tight text-primary-600 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"
              >3</a
            >
          </li>
          <li>
            <a
              href="#"
              class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >...</a
            >
          </li>
          <li>
            <a
              href="#"
              class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
              >100</a
            >
          </li>
          <li>
            <a
              href="#"
              class="flex h-full items-center justify-center rounded-r-lg border border-gray-300 bg-white px-3 py-1.5 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
            >
              <span class="sr-only">Next</span>
              <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
              </svg>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>

<!-- Delete shipment modal -->
<div id="deleteShipmentModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
  <div class="relative max-h-full w-full max-w-sm p-4">
    <!-- Modal content -->
    <div class="relative rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:p-5">
      <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Delete shipment</h3>
      <button
        type="button"
        class="absolute end-2.5 top-2.5 me-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
        data-modal-toggle="deleteShipmentModal"
      >
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
        </svg>
        <span class="sr-only">Close modal</span>
      </button>
      <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Are you certain you want to delete this shipment? This cannot be undone.</p>
      <ul role="list" class="mb-4 space-y-2 text-left font-medium text-gray-900 dark:text-white sm:mb-5">
        <li class="flex items-center space-x-2">
          <svg aria-hidden="true" class="h-4 w-4 shrink-0 text-gray-400 dark:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
          </svg>
          <span>Shipment #1846325</span>
        </li>
      </ul>
      <div class="flex items-center space-x-4">
        <button
          data-modal-toggle="deleteShipmentModal"
          type="button"
          class="rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
        >
          Cancel
        </button>
        <button type="submit" class="inline-flex items-center rounded-lg bg-red-600 px-3 py-2 text-center text-sm font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
          <svg aria-hidden="true" class="-ml-1 mr-1.5 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
              fill-rule="evenodd"
              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
              clip-rule="evenodd"
            />
          </svg>
          Yes, delete
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Add shipment modal -->
<div id="addShipmentModal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
  <div class="relative max-h-full w-full max-w-xl p-4">
    <!-- Modal content -->
    <div class="relative rounded-lg bg-white p-4 shadow-sm dark:bg-gray-800 sm:p-5">
      <!-- Modal header -->
      <div class="mb-4 flex items-center justify-between rounded-t border-b pb-4 dark:border-gray-600 sm:mb-5 border-gray-200">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add new shipment</h3>
        <button
          type="button"
          class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-toggle="addShipmentModal"
        >
          <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <form action="#">
        <div class="mb-4 grid gap-4 sm:grid-cols-2">
          <div>
            <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Shipment ID</label>
            <input
              type="text"
              name="shipment-id"
              id="shipment-id"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
              placeholder="Type shipment ID"
              required=""
            />
          </div>
          <div>
            <label for="customer" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Customer</label>
            <input
              type="text"
              name="customer"
              id="customer"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
              placeholder="Customer"
              required=""
            />
          </div>
          <div>
            <label for="price" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Price</label>
            <input
              type="number"
              name="price"
              id="price"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
              placeholder="$2999"
              required=""
            />
          </div>
          <div>
            <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Due date</label>
            <div class="relative max-w-sm">
              <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3.5">
                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    fill-rule="evenodd"
                    d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                    clip-rule="evenodd"
                  />
                </svg>
              </div>
              <input
                datepicker
                id="default-datepicker"
                type="text"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-9 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                placeholder="Select date"
              />
            </div>
          </div>
          <div>
            <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
              placeholder="name@company.com"
              required=""
            />
          </div>
          <div>
            <label for="status" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Status</label>
            <select
              id="status"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
            >
              <option selected="">Select status</option>
              <option value="TV">Completed</option>
              <option value="PC">Failed</option>
              <option value="GA">Refunded</option>
              <option value="PH">Pending</option>
            </select>
          </div>
          <div class="sm:col-span-2">
            <label for="description" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea
              id="description"
              rows="4"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
              placeholder="Write product description here"
            ></textarea>
          </div>
        </div>
        <button
          type="submit"
          class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
        >
          <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
          </svg>
          Add new shipment
        </button>
      </form>
    </div>
  </div>
</div>


@endsection