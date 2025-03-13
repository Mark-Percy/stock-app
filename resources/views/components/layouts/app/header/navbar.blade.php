<nav>
    <ul>
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/profile" :active="request()->is('profile')">Profile</x-nav-link>
        <x-nav-link href="/recipes" :active="request()->is('recipes')">Recipes</x-nav-link>
    </ul>
</nav>