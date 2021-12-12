let select = document.getElementById('select');
let nUsers = 0;
let nProf = 0;
let nAdmin = 0;

let input = document.getElementById('search');
//document.getElementById("myCheck").checked = true
select.addEventListener("change", (e) => {
    let value = select.value;
    input.value = value;

})

