const [menuButton] = document.getElementsByClassName('menu-button');

menuButton.addEventListener('click', () => {
    const menuLinks = document.querySelector('ul.nav-list');
    toggleClass(menuLinks, 'show');
         
    function toggleClass(element, stringClass) {
        if (element.classList.contains(stringClass))
            element.classList.remove(stringClass);
        else
            element.classList.add(stringClass);
}});