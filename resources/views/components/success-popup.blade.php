<div id="success-popup" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 transition-all duration-300"
     x-data x-cloak x-show="$store.popup.showPopup" x-transition.opacity>
    <div class="bg-white p-8 rounded-xl max-w-md w-full mx-4 relative">
        <button class="absolute top-4 right-4 text-black hover:text-red-500" x-on:click="$store.popup.showPopup = false">
            <i class="fas fa-times"></i>
        </button>
        <div class="text-center">
            <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-check text-red-500 text-3xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-black mb-4">Спасибо за заявку!</h3>
            <p class="text-black mb-6">Мы свяжемся с вами в течение 30 минут для уточнения деталей.</p>
            <button class="btn-primary py-3 px-6 rounded-lg font-bold text-white" x-on:click="$store.popup.showPopup = false">Хорошо</button>
        </div>
    </div>
</div>
