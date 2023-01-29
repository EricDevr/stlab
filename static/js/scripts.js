const URLBASE = "http://localhost/stlab";
//const URLBASE = "http://localhost:8003";
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


{
    let conx;
    const btn_login = document.getElementById("btn-login");
    btn_login.addEventListener("click", ()=>{
        const form = new FormData(document.getElementsByClassName("form-login")[0]);
        conx = new XMLHttpRequest();
        conx.onreadystatechange = success;
        conx.open("POST", URLBASE+"/includes/login.php");
        conx.send(form);
    });
    function success() {
        if(conx.readyState == 4) {
            const resp = conx.responseText;
            if(resp == "success") {
                window.location = URLBASE;
            } else {
                alert(resp);
            }
        }
    }
}