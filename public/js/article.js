const articleContainer = document.getElementById('container-article');

const id = articleContainer.getAttribute("data-article-id");

const xhr = new XMLHttpRequest();

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


    btn.addEventListener('click', () => {
         

        const parent = btn.parentElement;
        const brother = parent.querySelector('span');
        let num = Number(brother.textContent);
        let action = "";
        
        const comentID = parent.parentElement.getAttribute("data-coment-id");
        btn.likeSwitch = parent.parentElement.getAttribute("data-liked"); // true o false



        if (btn.likeSwitch == 'true') {
            num--;
            btn.children[0].classList.remove('fas');
            btn.children[0].classList.add('far');

            action = "rest";           

            parent.parentElement.setAttribute("data-liked", "false");
        } else {
            num++;
            btn.children[0].classList.remove('far');
            btn.children[0].classList.add('fas');

            action = "add";

            parent.parentElement.setAttribute("data-liked", "true");
        }

        const xhr = new XMLHttpRequest();
        xhr.open('POST', `${host}/app/like.php`);
        xhr.addEventListener('load', () => {
            console.log(xhr.response);
        })
        brother.textContent = num;
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.send(`action=${action}&comentID=${comentID}`)

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


comentTxt.addEventListener('input', () => {
    const newHeight = comentTxt.scrollHeight
    comentTxt.style.height = `${newHeight}px`
})
