let P = document.querySelector('.P');
let N = document.querySelector('.N');
let btns = document.querySelectorAll('.button');
let btnCont = document.querySelector('.btns');
let notify = document.querySelector('#notify');
let n = 0
btns[n].classList.add('activeBtn');
notify.style.display = 'none';

Array.from(btns).forEach(e => {
    e.addEventListener('click', () => {
        for (let btn of btns) {
            btn.classList.remove('activeBtn');
        }
        e.classList.add('activeBtn');
    });
});

N.addEventListener('click', () => {
    P.style.display = 'block';
    for (let btn of btns) {
        btn.classList.remove('activeBtn');
    }
    if (n <= 3) {
        ++n;
        btns[n].classList.add('activeBtn');
        if (n === 3) {
            N.style.display = 'none';
        }
    }
});

P.addEventListener('click', () => {
    for (let btn of btns) {
        btn.classList.remove('activeBtn');
    }
    if (n <= 3) {
        --n;
        btns[n].classList.add('activeBtn');
        N.style.display = 'block';
        if (n === 0) {
            P.style.display = 'none';
        }
    }
});

P.style.display = 'none';