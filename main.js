const menu = document.querySelectorAll('.menu');
menu.forEach(e => {
    e.addEventListener('click',()=>{
        for (let i = 0; i < menu.length; i++) {
            if(i == e.getAttribute('value')){
                menu[i].classList.add('active');
            }
            else{
                menu[i].classList.remove('active');
            }
        }
    });
});


const linia = document.querySelector('#header span');
setInterval(() => {
    let r = Math.floor(Math.random() * 255)
    let g = Math.floor(Math.random() * 255)
    let b = Math.floor(Math.random() * 255)

    linia.style.backgroundColor=`rgb(${r},${g},${b})`;
}, 1000);


const loading_screen = document.querySelector('#loading_screen');
window.addEventListener('load',()=>{
        loading_screen.style.opacity="0";
        setTimeout(() => {
            loading_screen.style.display="none";
        }, 500);
})

const exp = document.querySelector('#exp');


function fly_in(x, y) {
    x.style.transform = `translateX(${y})`;
    x.style.opacity = 1;
}



const bars = document.querySelectorAll("#exp ul li span");
const li = document.querySelectorAll("#exp ul li");

for (let i = 0; i < li.length; i++) {
    let h = li[i].getAttribute('value');
    bars[i].style.height = `${h}em`
    
}

window.addEventListener("scroll",()=>{
    let scroll = Math.floor(window.scrollY);
    console.log(scroll)
    if(scroll > 250)
    {
        fly_in(exp, 0);
        setTimeout(() => {
            bars.forEach(e => {
                e.style.transform="translateY(0)";
            });
        }, 1500);
    }
})