const URLBASE = "http://localhost/stlab";
{
    const btnmenu = document.getElementsByClassName("btn-menu")[0];
    btnmenu.addEventListener("click", () => {
        const menu = document.getElementsByClassName("menu")[0];
        const display = window.getComputedStyle(menu).display;
        const img = btnmenu.children[0];
        if(display == "block") {
            menu.style.display = "none";
            img.setAttribute("src", URLBASE+"/static/images/icon-menu.png");
        } else {
            menu.style.display = "block";
            img.setAttribute("src", URLBASE+"/static/images/icon-x.png");
        }
    });
}