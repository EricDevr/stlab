{
    let conx;
    const btnp = document.getElementById("btn-publicar");
    btnp.addEventListener("click", ()=>{
        const form = new FormData(document.getElementsByClassName("form-publicar")[0]);
        conx = new XMLHttpRequest();
        conx.onreadystatechange = success;
        conx.open("POST", URLBASE+"/includes/publicar.php");
        conx.send(form);
    });
    function success() {
        if(conx.readyState == 4) {
            alert(conx.responseText);
        }
    }
}