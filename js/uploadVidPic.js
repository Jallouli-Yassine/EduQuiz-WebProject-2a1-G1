const VideoInput = document.querySelector('#Video');
const ImageInput = document.querySelector('#Picture');


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

document.getElementById("contactForm").addEventListener('submit', (e) => {
    error = 0;

    ImageExt(ImageInput.value);
    VidExt(VideoInput.value);
    console.log(error);
    if (error > 0)
        e.preventDefault();
})
