<header class="fixed w-full bg-white shadow-md z-50" x-data="{ mobileMenuOpen: false }">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center">
            <i class="fas fa-trowel text-red-500 text-3xl mr-2"></i>
            <span class="text-xl font-bold text-black">Ремонт<span class="text-red-500"> Мечты</span></span>
        </div>
        <nav class="hidden md:flex space-x-8">
            <a href="#about" class="text-black hover:text-red-500 font-medium transition">О нас</a>
            <a href="#advantages" class="text-black hover:text-red-500 font-medium transition">Преимущества</a>
            <a href="#works" class="text-black hover:text-red-500 font-medium transition">Наши работы</a>
            <a href="#prices" class="text-black hover:text-red-500 font-medium transition">Цены</a>
            <a href="#contacts" class="text-black hover:text-red-500 font-medium transition">Контакты</a>
        </nav>
        <div class="flex items-center">
            <a href="tel:+79991234567" class="hidden md:flex items-center mr-6 text-black hover:text-red-500 transition">
                <i class="fas fa-phone-alt mr-2"></i>
                <span class="font-medium">+7 (999) 123-45-67</span>
            </a>
            <button class="md:hidden text-black" x-on:click="mobileMenuOpen = !mobileMenuOpen">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>

    <!-- Мобильное меню -->
    <div class="md:hidden bg-white w-full py-4 px-4 shadow-lg" x-show="mobileMenuOpen" x-transition>
        <div class="flex flex-col space-y-4">
            <a href="#about" class="text-black hover:text-red-500 font-medium transition" x-on:click="mobileMenuOpen = false">О нас</a>
            <a href="#advantages" class="text-black hover:text-red-500 font-medium transition" x-on:click="mobileMenuOpen = false">Преимущества</a>
            <a href="#works" class="text-black hover:text-red-500 font-medium transition" x-on:click="mobileMenuOpen = false">Наши работы</a>
            <a href="#prices" class="text-black hover:text-red-500 font-medium transition" x-on:click="mobileMenuOpen = false">Цены</a>
            <a href="#contacts" class="text-black hover:text-red-500 font-medium transition" x-on:click="mobileMenuOpen = false">Контакты</a>
            <a href="tel:+79991234567" class="flex items-center text-black hover:text-red-500 transition">
                <i class="fas fa-phone-alt mr-2"></i>
                <span class="font-medium">+7 (999) 123-45-67</span>
            </a>
        </div>
    </div>
</header>
