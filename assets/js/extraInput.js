
const check = document.getElementById("form-checkbox");
const extraDiv = document.getElementById("extra-input"); 

check.addEventListener('click', showInput);

function showInput(){
    console.log(`${check.checked}`);

    if(check.checked == true){
        extraDiv.style = "display: flex;";
    }else{
        extraDiv.style = "display: none;";
    }
}

