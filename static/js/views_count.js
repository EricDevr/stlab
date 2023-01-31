{
    setTimeout(()=> {
        views_u();
    }, 5000);

    let conx;
    function views_u() {
        const url = window.location;
        const form = new FormData();
        form.append("url", url);
        conx = new XMLHttpRequest();
        conx.onreadystatechange = success;
        conx.open("POST", URLBASE+"/includes/views_count.php");
        conx.send(form);
    }
    function success() {
        if(conx.readyState == 4) {
            // null
        }
    }
}