export function dark_theme(){
    let btn = document.getElementById("btn_t");
    let btnicon =document.getElementById("btnicon");

    if(localStorage.getItem("theme")=="light"){
        document.body.classList.toggle("dark-theme");
        if(document.body.classList.contains("dark-theme")){
            btnicon.src="asset/sun.png";

        }else{
            btnicon.src="asset/moon.png";
        }
    }

    btn.onclick = function(){
        document.body.classList.toggle("dark-theme");
        if(document.body.classList.contains("dark-theme")){
            btnicon.src="asset/sun.png";
            localStorage.setItem("theme","light")
        }else{
            btnicon.src="asset/moon.png";
            localStorage.setItem("theme","dark")
        }
    }
}