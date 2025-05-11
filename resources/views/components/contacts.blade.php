<section id="contacts" class="py-20 bg-white" x-data="{ form: { name: '', phone: '', object: 'apartment', area: '' }, showPopup: false }">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-12">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-6">Контакты</h2>
                <p class="text-black mb-8 text-lg">Оставьте заявку и мы свяжемся с вами в течение 30 минут для уточнения деталей и расчета стоимости.</p>

                <div class="space-y-6 mb-8">
                    <div class="flex items-start">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-4 mt-1">
                            <i class="fas fa-phone-alt text-red-500"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-black mb-1">Телефон</h4>
                            <a href="tel:+79991234567" class="text-black hover:text-red-500 transition">+7 (999) 123-45-67</a>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-4 mt-1">
                            <i class="fas fa-envelope text-red-500"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-black mb-1">Email</h4>
                            <a href="mailto:info@meh-shtukaturka.ru" class="text-black hover:text-red-500 transition">info@meh-shtukaturka.ru</a>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-4 mt-1">
                            <i class="fas fa-map-marker-alt text-red-500"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-black mb-1">Адрес</h4>
                            <p class="text-black">г. Москва, ул. Строителей, 15, оф. 204</p>
                        </div>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-black hover:bg-red-500 hover:text-white transition">
                        <i class="fab fa-vk"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-black hover:bg-red-500 hover:text-white transition">
                        <i class="fab fa-telegram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-black hover:bg-red-500 hover:text-white transition">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-black hover:bg-red-500 hover:text-white transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <div class="lg:w-1/2">
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <h3 class="text-2xl font-bold text-black mb-6">Оставить заявку</h3>
                    <form x-on:submit.prevent="showPopup = true; form = { name: '', phone: '', object: 'apartment', area: '' }" class="space-y-4">
                        <div>
                            <label for="name" class="block text-black mb-2">Ваше имя</label>
                            <input type="text" id="name" x-model="form.name" class="w-full px-4 py-3 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" required>
                        </div>

                        <div>
                            <label for="phone" class="block text-black mb-2">Телефон</label>
                            <input type="tel" id="phone" x-model="form.phone" class="w-full px-4 py-3 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" required>
                        </div>

                        <div>
                            <label for="object" class="block text-black mb-2">Тип объекта</label>
                            <select id="object" x-model="form.object" class="w-full px-4 py-3 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                                <option value="apartment">Квартира</option>
                                <option value="house">Частный дом</option>
                                <option value="cottage">Коттедж</option>
                                <option value="office">Офис/коммерция</option>
                                <option value="other">Другое</option>
                            </select>
                        </div>

                        <div>
                            <label for="area" class="block text-black mb-2">Площадь, м²</label>
                            <input type="number" id="area" x-model="form.area" class="w-full px-4 py-3 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                        </div>

                        <button type="submit" class="btn-primary w-full py-4 px-6 rounded-lg font-bold text-white mt-4">Отправить заявку</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
