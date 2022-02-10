const articleContainer = document.getElementById('container-article');

const id = articleContainer.getAttribute("data-article-id");

const xhr = new XMLHttpRequest();

/* xhr.responseType = "html"; */
const host = "http://localhost/cms";
xhr.open('GET', `${host}/app/article.php?id=${id}`);

xhr.addEventListener('load', () => {
    const urlArticle = xhr.response;
    
    const xhr2 = new XMLHttpRequest();
    xhr2.open('GET', urlArticle);
    
    xhr2.addEventListener('load', () => {
        const response = xhr2.response;
        
        articleContainer.innerHTML = response;
    })
    
    xhr2.send();
})

xhr.send();




const responseBtn = document.querySelectorAll('.response');
const likeBtn = document.querySelectorAll('.like');
const reportBtn = document.querySelectorAll('.report');

const comentTxt = document.getElementById('coment-txt');
likeBtn.forEach(btn => {
    
    btn.likeSwitch = false;
    btn.addEventListener('click', () => {
        const parent = btn.parentElement;
        const brother = parent.querySelector('span');
        let num = Number(brother.textContent);
        if (btn.likeSwitch) {
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
    });
});

responseBtn.forEach(btn => {
    btn.addEventListener('click', () => {
        const coment = btn.parentElement.parentElement.parentElement;
        const username = coment.querySelector('.d-flex .coment-content .coment-info strong').textContent;
        comentTxt.textContent = `RES -> ${username}: `;
        comentTxt.focus();
 
    })
    
});

reportBtn.forEach(btn => {
    btn.reportSwitch = false;
    btn.addEventListener('click', () => {
        if (btn.reportSwitch) {
            btn.children[0].classList.remove('fas');
            btn.children[0].classList.add('far');
            btn.reportSwitch = false;
        } else {
            const coment = btn.parentElement.parentElement.parentElement;
            btn.children[0].classList.remove('far');
            btn.children[0].classList.add('fas');
            
            btn.reportSwitch = true;


            alert("Se ha informado al administrador");

        }
        
    })
})

