<button id="back-to-top" class="fixed bottom-8 right-8 w-12 h-12 bg-orange-500 text-white rounded-full shadow-lg flex items-center justify-center transition-all duration-300"
        x-data="{ visible: false }"
        x-init="$watch('visible', value => $el.classList.toggle('opacity-0', !value); $el.classList.toggle('invisible', !value))"
        x-on:scroll.window="visible = window.pageYOffset > 300"
        x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' })">
    <i class="fas fa-arrow-up"></i>
</button>
