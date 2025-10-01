const header = document.querySelector('#header');
const banner = document.querySelector('#banner');
const headerHeight = header.offsetHeight;

if (banner) {
    banner.style.marginTop = `${-headerHeight}px`
    banner.style.paddingTop = `${headerHeight}px`
}

var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: { slidesPerView: 1, spaceBetween: 10 },
        768: { slidesPerView: 3, spaceBetween: 15 },
        1024: { slidesPerView: 6, spaceBetween: 40 }
    }
});


document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault(); // impede que a URL mude
            const targetID = this.getAttribute("href").substring(1);
            const target = document.getElementById(targetID);
            if (target) {
                target.scrollIntoView({
                    behavior: "smooth"
                });
            }
        });
    });
});



// Máscara CPF (000.000.000-00) → 14 caracteres
function mascaraCPF(input) {
    let v = input.value.replace(/\D/g, "");
    v = v.slice(0, 11); // limita a 11 números
    v = v.replace(/(\d{3})(\d)/, "$1.$2");
    v = v.replace(/(\d{3})(\d)/, "$1.$2");
    v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    input.value = v;
}

// Máscara Telefone ( (00) 00000-0000 ) → 15 caracteres
function mascaraTelefone(input) {
    let v = input.value.replace(/\D/g, "");
    v = v.slice(0, 11); // limita a 11 números
    v = v.replace(/^(\d{2})(\d)/g, "($1) $2");
    v = v.replace(/(\d{5})(\d{4})$/, "$1-$2");
    input.value = v;
}

// Apenas números (ex: Nota Fiscal)
function somenteNumeros(input) {
    let v = input.value.replace(/\D/g, "");
    v = v.slice(0, 9); // limita a 9 números (ajuste conforme necessário)
    input.value = v;
}
