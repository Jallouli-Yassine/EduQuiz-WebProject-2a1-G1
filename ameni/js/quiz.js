let choix1 = document.getElementById('rep1');
let choix2 = document.getElementById('rep2');
let choix3 = document.getElementById('rep3');
let choix4 = document.getElementById('rep4');
let input = document.getElementById('reponseChoisie');
//document.getElementById("myCheck").checked = true
let myFunction = () => {

    if (choix1.checked == true)
        input.value = choix1.value;

    if (choix2.checked == true)
        input.value = choix2.value;

    if (choix3.checked == true)
        input.value = choix3.value;

    if (choix4.checked == true)
        input.value = choix4.value;

}
