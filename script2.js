const pojoc = document.querySelector(".pojoc");

let suma = 0;
let ilosc = 0;

const przyc = document.querySelector(".przyc");
const dodaj = document.querySelector(".dodaj");
const wysw = document.querySelector(".suma");

dodaj.addEventListener(
    'click',
    function(){
        suma = suma + (1* pojoc.value);
        ilosc = ilosc + 1;
    }
)
przyc.addEventListener(
    'click',
    function(){
        wysw.innerText = suma / ilosc;
        suma = 0;
        ilosc = 0;
    }
)