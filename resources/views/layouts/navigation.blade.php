<div class="hidden space-x-8 sm:my-px sm:ml-10 sm:flex">

    <!--links de navegacion-->
    <x-nav-link :href="route('dashboard')" : active="request()->routeIs('dashboard')">
        {{__('Dashboard')}}
    </x-nav-link>

    <!--se añaden la navegacion a projectos-->

    <x-nav-link :href="route('projects.index')" : active="request()->routeIs('projects.index')">
    {{__('Projectos')}}
    </x-nav-link>
</div>