function limpar()
{
    document.getElementById("peso").value = "";
    document.getElementById("idade").value = "";
    document.getElementById("altura").value = "";
}

// function teste()
// {
//     var imgb = "pic/black.png";
//     var imgw = "pic/white.png";
//     document.body.style.backgroundColor = "White";
//     document.getElementById("tema").src = imgw;

//     if(document.getElementById("tema").src = imgw)
//     {
//         document.body.style.backgroundColor = "black";
//         document.getElementById("tema").src = imgb;
//     }
// }

function teste() {
    var imgb = "pic/black.png";
    var imgw = "pic/white.png";
    var tema = document.getElementById("tema");

    if (tema.src.includes(imgw)) {
        document.body.style.backgroundColor = "black";
        tema.src = imgb;
    } else {
        document.body.style.backgroundColor = "white";
        tema.src = imgw;
    }
}

function truque() 
{
    const peso = document.getElementById("peso").value;
    const altura = document.getElementById("altura").value;
    const imcc = peso / (altura * altura);
    console.log(imc);
    console.log(altura);
    localStorage.setItem(imc);
    document.getElementById("imczada").innerText = imc;
}

function imc()
{
    let peso = document.getElementById("peso").value;
    let altura = document.getElementById("altura").value;
    let imcc =  peso / (altura * altura);
}
