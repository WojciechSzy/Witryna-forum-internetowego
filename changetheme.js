// zmiana na ciemny
var dark = document.getElementById("dark");
dark.addEventListener("click", changethemedark);

function changethemedark(){
    var changedark = document.getElementById("test");
    changedark.innerHTML = '<link rel="stylesheet" href="style_dark.css">';
}

// zmiana na jasny
var bright = document.getElementById("bright");
bright.addEventListener("click", changethemebright);

function changethemebright(){
    var changebright = document.getElementById("test");
    changebright.innerHTML = '';
}