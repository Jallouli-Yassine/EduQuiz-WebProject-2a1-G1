/* FROM JallouliY BRANCH */
"use strict";

let error = 0;
const btn = document.querySelector('.add_course');
const TitleInput = document.querySelector('#Title');
const PriceInput = document.querySelector('#Price');
const DescriptionInput = document.querySelector('#Description');
const VideoInput = document.querySelector('#Video');
const ImageInput = document.querySelector('#Image');


let ImageExt = (PicName) => {
    // get the file extension
    let PicExt = PicName.split('.').pop().toLowerCase();

    if (PicExt != "png" && PicExt != "jpeg" && PicExt != "jpg") {
        error++;
        document.getElementById('errorImageExt').innerHTML = `extension must be (png , jpeg , jpg , jpg )`;
    }
    else
        document.getElementById('errorImageExt').innerHTML = "";
}

let VidExt = (VidName) => {
    // get the file extension
    let VidExt = VidName.split('.').pop().toLowerCase();

    if (VidExt != "mp4" && VidExt != "webm" && VidExt != "mkv") {
        error++;
        document.getElementById('errorVideoExt').innerHTML = `extension must be (mp4 , webm , mkv)`;
    }
    else
        document.getElementById('errorVideoExt').innerHTML = "";
}

let inputRequired = (inputValue, errorID, nameRequired) => {
    if (inputValue == "") {
        error++;
        document.getElementById(`${errorID}`).innerHTML = `you need to put a ${nameRequired}`;
    } else
        document.getElementById(`${errorID}`).innerHTML = "";
}

document.getElementById('contactForm').addEventListener("submit", (e) => {

    error = 0;
    inputRequired(TitleInput.value, "errorTitle", "TITLE");
    inputRequired(PriceInput.value, "errorPrice", "Price");
    inputRequired(DescriptionInput.value, "errorDescription", "DESCRIPTION");
    ImageExt(ImageInput.value);
    VidExt(VideoInput.value);

    //alert(error);
    if (error > 0)
        e.preventDefault();
})
