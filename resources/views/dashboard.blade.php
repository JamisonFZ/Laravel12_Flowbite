<x-panel-layout>

    @section('main')

    <x-navbar-dashboard />

    <div class="flex overflow-hidden bg-gray-50 pt-[62px] dark:bg-gray-900">
        
        <x-sidebar-dashboard />
        
        <div id="main-content" class="relative h-full w-full overflow-x-scroll bg-gray-50 dark:bg-gray-900 lg:ms-64">
            
            <main>
                @yield('content')
            </main>

            @include('partials.footer')
        
        </div>

    </div>

    @endsection

</x-panel-layout>
