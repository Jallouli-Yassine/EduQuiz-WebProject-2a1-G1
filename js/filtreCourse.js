const card = document.querySelectorAll('.course');

let filtre = (categorie) => {
    // console.log(card);
    for (let i = 0; i < card.length; i++) {
        if (!card[i].classList.contains(`${categorie}`))
            card[i].classList.add("vide");
        else
            card[i].classList.remove("vide");
    }
}