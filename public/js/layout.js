
/* Declarar variável para recebimento para captura das labels do slider */
var radio = document.querySelector('.bar')
var count = 1

/* Captura botão do primeiro slide */
document.getElementById('radio1').checked = true

/* chama a função temporizada para passar para a proxima imagem do slider */
setInterval(() => {
    nextImg()
}, 7500)

/* cria a função temporizada para passar para a proxima imagem do slider */
function nextImg(){
    count++ 

    /* Vai adicionando ou resetando qual opção está ativado no momento */
    if(count > 3){
        count = 1
    }

    /* Passa para a imagem referente ao botão que foi ativado na função chamafda anteriormente */
    document.getElementById('radio'+count).checked = true
}

/* Collapsible FAQ da página inicial */
    var elemsColap = document.querySelectorAll('.collapsible');
    var instancesColap = M.Collapsible.init(elemsColap);

/* Modal */
    var elemsModal = document.querySelectorAll('.modal');
    var instanceModal = M.Modal.init(elemsModal);

/* Tooltip */
    var elemsTooltip = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elemsTooltip);

/* Dropdown */

var elemDrop = document.querySelectorAll('.dropdown-trigger');
var instanceDrop = M.Dropdown.init(elemDrop, {
    coverTrigger: false,
    constrainWidth: false
});


/*********************************************************************************/

setTimeout(function(){

    var a = document.getElementById("preloader");
    
    a.style="display:none"
    
    
    }, 1500);

setTimeout(function(){

     var a = document.getElementById("logo");
        
    a.style="display:block"
        
        
    }, 10);

/********************************************/

const backToTopButton = document.querySelector('.back-to-top')

const backToTop = () => {
 if (window.scrollY >= 100) {
backToTopButton.classList.add('show')
 } else {
backToTopButton.classList.remove('show')
 }
}

window.addEventListener('scroll', function () {
 backToTop()
})
