const form = document.querySelector(".signup");
submitBtn=form.querySelector(".button input");

form.onsubmit=(e)=>{
     e.preventDefault(); //preventing form from submitting
}

submitBtn.onclick=()=>{
     let xhr=new XMLHttpRequest(); //creating a XML object
     xhr.open("POST","../../config/signup.php",true);
     xhr.onload=()=>{

     }
     xhr.send();
}