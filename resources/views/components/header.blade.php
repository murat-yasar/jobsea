<header class="bg-blue-900 text-white p-4" x-data="{open:false}">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{url('/')}}">JobSea</a>
        </h1>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex items-center space-x-4">
            <x-nav-link url="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link url="/jobs" :active="request()->is('jobs')">All Jobs</x-nav-link>
            @auth
            <x-nav-link url="/jobs/saved" :active="request()->is('jobs/saved')">Saved Jobs</x-nav-link>
            <x-nav-link url="/dashboard" :active="request()->is('dashboard')" icon="gauge">Dashboard</x-nav-link>
            <x-logout-button />
            <x-button-link url="/jobs/create" icon="edit">Create Job</x-button-link>
            @else
            <x-nav-link url="/login" :active="request()->is('login')" icon="user">Login</x-nav-link>
            <x-nav-link url="/register" :active="request()->is('register')">Register</x-nav-link>
            @endauth
        </nav>
        <button id="hamburger" @click="open=!open" class="text-white md:hidden flex items-center">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <nav id="mobile-menu" x-show="open" class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">
        <x-nav-link url="/jobs" :active="request()->is('jobs')" :mobile="true">All Jobs</x-nav-link>
        @auth
        <x-nav-link url="/jobs/saved" :active="request()->is('jobs/saved')" :mobile="true">Saved Jobs</x-nav-link>
        <x-nav-link url="/dashboard" :active="request()->is('dashboard')" :mobile="true" icon="gauge">Dashboard</x-nav-link>
        <x-logout-button />
        <div class="pt-2"></div>
        <x-button-link url="/jobs/create" :block="true" icon="edit">Create Job</x-button-link>
        @else
        <x-nav-link url="/login" :active="request()->is('login')" :mobile="true" icon="user">Login</x-nav-link>
        <x-nav-link url="/register" :active="request()->is('register')" :mobile="true">Register</x-nav-link>
        @endauth
    </nav>
</header>