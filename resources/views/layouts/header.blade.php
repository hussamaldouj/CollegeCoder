<nav class="header before:bg-white dark:before:bg-navy-750 print:hidden">
    <!-- App Header  -->
    <div class="header-container relative flex w-full bg-white dark:bg-navy-750 print:hidden">
        <!-- Header Items -->
        <div class="flex w-full items-center justify-between">
            <!-- Left: Sidebar Toggle Button -->
            <div class="size-7">
                <button class="menu-toggle ml-0.5 flex size-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80" @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

            <!-- Right: Header buttons -->
            <div class="-mr-1.5 flex items-center space-x-2">
                <!-- Mobile Search Toggle -->
                @include('layouts.mobilesearch')



                <!-- Dark Mode Toggle -->
                @include('layouts.darkmode')
                <!-- Monochrome Mode Toggle -->
                @include('layouts.Monochrome')

                <!-- Notification-->
                @include('layouts.Notification')

                <!-- Right Sidebar Toggle -->
                @include('layouts.rightsidebar')
            </div>
        </div>
    </div>
</nav>