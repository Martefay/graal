window.addEventListener('scroll', function showHeader(){

    let btn = document.querySelector('.uptogo');
    
    if(window.pageYOffset > 200){
        btn.classList.remove('hidden');
    }
    else{
        btn.classList.add('hidden');
    };

    btn.onclick = () => {
      window.scrollTo(0, 0);
    }
  });

  const navigation = document.getElementById('navbar');
const burgerButton = document.getElementById('burger-button');


burgerButton.addEventListener('click', function berger(){
	
    navigation.classList.toggle('hidden');
    navigation.classList.add('flex');

});

document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.mySwiper', {
                slidesPerView: 'auto',
                centeredSlides: true,
                spaceBetween: 20,
                loop: true,
                loopedSlides: 2,
                speed: 800,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    }
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('modal');
    const closeModalBtn = document.getElementById('closeModal');
    const cancelBtn = document.getElementById('cancelBtn');
    
    // Открытие модального окна по всем кнопкам с классом openModal
    document.querySelectorAll('.openModal').forEach(btn => {
        btn.addEventListener('click', function() {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Закрытие модального окна (остальной код без изменений)
    function closeModal() {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }
    
    closeModalBtn.addEventListener('click', closeModal);
    cancelBtn.addEventListener('click', closeModal);
    
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    // Обработка формы (без изменений)
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;
        const email = document.getElementById('email').value;
        console.log({name, phone, email});
        closeModal();
        form.reset();
        alert('Спасибо! Ваша заявка отправлена.');
    });
});

document.getElementById('phone').addEventListener('input', function (e) {
    let x = e.target.value.replace(/\D/g, '').match(/(\d{0,1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
    e.target.value = !x[2] ? '+' + x[1] : 
                     '+' + x[1] + ' (' + x[2] + ')' +
                     (x[3] ? ' ' + x[3] : '') +
                     (x[4] ? '-' + x[4] : '') +
                     (x[5] ? '-' + x[5] : '');
});