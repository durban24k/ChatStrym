const form = document.querySelector(".login form"),
      submitBtn = form.querySelector(".button input"),
      errorTxt = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
     e.preventDefault(); //preventing form from submitting
}

submitBtn.onclick = ()=>{
     var xhr = new XMLHttpRequest(); //creating a XML object
     xhr.open("POST", "../config/login.php", true);
     xhr.onload = ()=>{
          if(xhr.readyState === XMLHttpRequest.DONE){
               if(xhr.status === 200){
                    console.log(xhr.responseText);
                    if(xhr.responseText === 'success'){
                         location.href = '../agent/index.php';
                    }else{
                         errorTxt.style.display = "block";
                         errorTxt.textContent = xhr.responseText;
                    }
               }
          }
     }
     // Sending form data through ajax to php
     let formData = new FormData(form);
     xhr.send(formData);
}