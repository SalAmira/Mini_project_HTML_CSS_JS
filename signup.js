const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");

form.onsubmit = (e)=>{
    e.preventDefault();//preventing form from submiting
}

continueBtn.onclick = ()=> {
    //// naw partie of Ajax in our javascript coding
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if(data =="success"){
                    location.href = "users.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }

            }
        }
    } //we have to send form data through ajax to php  
    let formData = new FormData(form);//creating new formData Object 
    xhr.send(formData);//sending the form data t php
}