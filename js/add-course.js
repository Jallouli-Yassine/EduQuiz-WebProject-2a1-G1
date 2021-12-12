/* FROM JallouliY BRANCH */

const btn = document.querySelector('.add_course');
const TitleInput = document.querySelector('#Title');
const PriceInput = document.querySelector('#Price');
const DescriptionInput = document.querySelector('#Description');
const CategorieInput = document.querySelector('#Categorie');

let inputRequired = (inputValue, errorID, nameRequired) => {
    if (inputValue == "") {
        error++;
        document.getElementById(`${errorID}`).innerHTML = `you need to put a ${nameRequired}`;
    } else
        document.getElementById(`${errorID}`).innerHTML = "";
}

let selectRequired = (errorID, nameRequired) => {
    if (CategorieInput.selectedIndex < 1) {
        error++;
        document.getElementById(`${errorID}`).innerHTML = `you need to put a ${nameRequired}`;
    } else
        document.getElementById(`${errorID}`).innerHTML = "";

}

document.getElementById("addCourse").addEventListener('submit', (e) => {
    error = 0;
    inputRequired(TitleInput.value, "errorTitle", "TITLE");
    inputRequired(PriceInput.value, "errorPrice", "Price");
    inputRequired(DescriptionInput.value, "errorDescription", "DESCRIPTION");
    selectRequired("errorCategories", "CATEGORIES");
    //ImageExt(ImageInput.value);
    // VidExt(VideoInput.value);
    console.log(error);
    if (error > 0)
        e.preventDefault();
})
