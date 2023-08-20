// Меню бургер
const iconMenu = document.querySelector('.top-panel-left-menu__icon');
if (iconMenu) {
    const menuBody = document.querySelector('.top-panel-left-menu__body');
    iconMenu.addEventListener("click", function(e) {
        document.body.classList.toggle('_lock');
        iconMenu.classList.toggle('_active');
        menuBody.classList.toggle('_active');
    })
}