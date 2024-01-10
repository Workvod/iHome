// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

// owl carousel 

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 6
        }
    }
})

const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

// Добавляем обработчик события на каждый элемент
dropdownToggles.forEach(toggle => {
    toggle.addEventListener('click', (event) => {
        // Предотвращаем действие по умолчанию (например, переход по ссылке)
        event.preventDefault();
        // Добавляем класс для применения стилей при клике
        toggle.classList.add('clicked');
    });
});