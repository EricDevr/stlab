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
{
    function bbcode(code) {
        const textarea = document.getElementsByClassName("content")[0];
        const ini = textarea.selectionStart;
        const fin = textarea.selectionEnd;
        const textini = textarea.value.substring(0, ini);
        const textfin = textarea.value.substring(fin, textarea.value.length);
        const stri = textarea.value.substring(ini, fin);
        const bbco = "<" + code + ">" + stri + "</" + code + ">";
        const texto = textini + bbco + textfin;
        textarea.value = texto;
    }
    function form_upload_image() {
        const cont = document.getElementsByClassName("content-form-u-image")[0];
        const display = window.getComputedStyle(cont).display;
        if(display == "none") {
            cont.style.display = "block";
        } else {
            cont.style.display = "none";
        }
    }

    let conx;
    function upload_image() {
        const image = document.getElementById("image-u");
        const name = document.getElementById("name-u");
        const form = new FormData();
        form.append("image-u", image.files[0]);
        form.append("name-u",name.value);
        conx = new XMLHttpRequest();
        conx.onreadystatechange = success;
        conx.open("POST", URLBASE+"/includes/upload_image.php",true);
        //conx.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        conx.send(form);
    }
    function success() {
        const response = document.getElementsByClassName("response")[0];
        if(conx.readyState == 4) {
            response.innerHTML = conx.responseText;
        }
    }
}