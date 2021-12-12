/* FROM JallouliY BRANCH */

const DescriptionInput = document.querySelector('#Description');


let inputRequired = (inputValue, errorID, nameRequired) => {
    if (inputValue == "") {
        error++;
        document.getElementById(`${errorID}`).innerHTML = `you need to put a ${nameRequired}`;
    } else
        document.getElementById(`${errorID}`).innerHTML = "";
}

document.getElementById("addCourse").addEventListener('submit', (e) => {
    error = 0;
    inputRequired(DescriptionInput.value, "errorDescription", "EMAIL");

    //ImageExt(ImageInput.value);
    // VidExt(VideoInput.value);
    console.log(error);
    if (error > 0)
        e.preventDefault();
})
