const form = document.querySelector(".signup form"),
      submitBtn=form.querySelector(".button input");

form.onsubmit=(e)=>{
     e.preventDefault(); //preventing form from submitting
}

submitBtn.onclick=()=>{
     let xhr=new XMLHttpRequest(); //creating a XML object
     xhr.open("POST","../config/signup.php",true);
     xhr.onload=()=>{
          if(xhr.readyState===XMLHttpRequest.DONE){
               if(xhr.status===200){
                    let data = xhr.response;
                    console.log(data);
               }
          }
     }
     // Sending form data through ajax to php
     let formData = new FormData(form);
     xhr.send(formData);
}