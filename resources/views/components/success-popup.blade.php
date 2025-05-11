<template x-if="$store.popup.showPopup">
    <div id="success-popup" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 transition-all duration-300" x-cloak x-transition.opacity>
        <div class="bg-white p-8 rounded-xl max-w-md w-full mx-4 relative">
            <button class="absolute top-4 right-4 text-gray-500 hover:text-gray-700" x-on:click="$store.popup.showPopup = false">
                <i class="fas fa-times"></i>
            </button>
            <div class="text-center">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-check text-green-500 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Спасибо за заявку!</h3>
                <p class="text-gray-600 mb-6">Мы свяжемся с вами в течение 30 минут для уточнения деталей.</p>
                <button class="btn-primary py-3 px-6 rounded-lg font-bold text-white" x-on:click="$store.popup.showPopup = false">Хорошо</button>
            </div>
        </div>
    </div>
</template>
