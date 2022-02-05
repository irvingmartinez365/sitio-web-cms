const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

const likeBtn = document.querySelectorAll('.like');
console.log(likeBtn)
likeBtn.forEach(btn => {
    
    btn.likeSwitch = false;
    btn.addEventListener('click', () => {
        const parent = btn.parentElement;
        const brother = parent.querySelector('span');
        let num = Number(brother.textContent);
        if(btn.likeSwitch){
            num--;
            btn.children[0].classList.remove('fas');
            btn.children[0].classList.add('far');


            // Enviar informacion al servidor


            btn.likeSwitch = false;
        } else {
            num++;
            btn.children[0].classList.remove('far');
            btn.children[0].classList.add('fas');


            // Enviar informacion al servidor


            btn.likeSwitch = true;
        }

        
        brother.textContent = num;
    })
})
