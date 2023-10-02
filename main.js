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
    loading_screen.style.display="none"
})