function exibir_categoria(categoria) {

    let elementos = document.getElementsByClassName('container_items');

    for (var i = 0; i < elementos.length; i++) {

        if (categoria == elementos[i].id || categoria == "todos") {
            elementos[i].style = "display:block";
        }
        else {
            elementos[i].style = "display:none";
        }
    }
};

let destaque = (imagem) => {

    if (imagem.style.height === "80%") {
        imagem.style.height = "50%";
        imagem.parentNode.style.width = "20%";
    } else {
        imagem.style.height = "80%";
        imagem.parentNode.style.width = "30%";
    }
};

let exibirborda = (t) => {
    console.log(t);
    t.style.border = "double";
    t.style.color = "blue";
    t.style.width = "100%";
    t.style.padding = " 2%";
};

let retirarborda = (y) => {
    console.log(y);
    y.style.border = "none";
};
