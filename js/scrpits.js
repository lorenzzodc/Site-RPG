function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
function myFunction2() {
    var x = document.getElementById("myTopnav2");
    if (x.className === "topnav2") {
        x.className += " responsive";
    } else {
        x.className = "topnav2";
    }
}
document.getElementById("myBtn").onclick = function () { myFunction3() };

function myFunction3() {
    document.getElementById("myDropdown").classList.toggle("show");
}

document.getElementById("myBtn2").onclick = function () { myFunction4() };

function myFunction4() {
    document.getElementById("myDropdown2").classList.toggle("show");
}
document.getElementById("myBtn3").onclick = function () { myFunction5() };

function myFunction5() {
    document.getElementById("myDropdown3").classList.toggle("show");
}
document.getElementById("myBtn4").onclick = function () { myFunction5() };

function myFunction6() {
    document.getElementById("myDropdown4").classList.toggle("show");
}
document.getElementById("myBtn5").onclick = function () { myFunction5() };

function myFunction7() {
    document.getElementById("myDropdown5").classList.toggle("show");
}

function recarregarIframe() {
    // Obtém o elemento iframe pelo ID
    var iframe = document.getElementById('meuIframe');
    
    // Obtém a origem (src) atual do iframe
    var src = iframe.src;
    
    // Define o src do iframe como vazio e, em seguida, restaura a origem original
    iframe.src = '';
    iframe.src = src;
}

function CarregarForm(){
    // Declara a variável de controle
let isFormVisible = false;

// Declara o elemento formulário
const form = document.querySelector(".cadastro");

// Declara o evento onclick do botão
const button = document.querySelector(".botao");
button.addEventListener("click", function() {
  // Altera o estado do formulário
  isFormVisible = !isFormVisible;

  // Define o atributo display do formulário
  form.style.display = isFormVisible ? "block" : "none";
});
}
