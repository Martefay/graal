<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 hidden">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <!-- Заголовок модального окна -->
            <div class="flex justify-between items-center border-b p-4">
                <h3 class="text-xl font-semibold text-gray-800">Оставить заявку</h3>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <!-- Тело модального окна с формой -->
            <form class="p-4 md:p-6">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Ваше имя</label>
                    <input type="text" id="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Иван Иванов" required>
                </div>
                
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">Номер телефона</label>
                    <input type="tel" id="phone" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="+7 (999) 123-45-67" required>
                </div>
                
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Почта</label>
                    <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="example@mail.com" required>
                </div>
                
                <div class="flex justify-end space-x-3">
                    <button type="button" id="cancelBtn" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-gray-300 rounded-md transition-all duration-500">
                        Отмена
                    </button>
                    <button type="submit" class="px-4 py-2 rounded-md border bg-[#660066] leading-10 text-white transition-all duration-500">
                        Отправить
                    </button>
                </div>
            </form>
        </div>
    </div>