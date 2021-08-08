const form = document.querySelector(".typing-area"),
      inputField = form.querySelector(".input-field"),
      sendBtn = form.querySelector("button");

form.onsubmit = (e)=>{
     e.preventDefault(); //preventing form from submitting
}
     

sendBtn.onclick = ()=>{
     var xhr = new XMLHttpRequest(); //creating a XML object
     xhr.open("POST", "../config/insert-chat.php", true);
     xhr.onload = ()=>{
          if(xhr.readyState === XMLHttpRequest.DONE){
               if(xhr.status === 200){
                    
                    
               }
          }
     }
     // Sending form data through ajax to php
     let formData = new FormData(form);
     xhr.send(formData);
}