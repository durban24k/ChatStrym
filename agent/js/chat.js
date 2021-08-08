const userSearchBar=document.querySelector(".chat-content .users .search input"),
      userSearchBtn=document.querySelector(".chat-content .users .search button"),
      userList = document.querySelector(".chat-content .users .users-list");
     
userSearchBtn.onclick=()=>{
     userSearchBar.classList.toggle("active");
     userSearchBar.focus();
     userSearchBtn.classList.toggle("active");
     userSearchBar.value = "";
}

userSearchBar.onkeyup = ()=>{
     let searchTerm = userSearchBar.value;
     if(searchTerm != ""){
          userSearchBar.classList.add("active");
     }else{
          userSearchBar.classList.remove("active");
     }
     var xhr = new XMLHttpRequest(); //creating a XML object
     xhr.open("POST", "./search.php", true);
     xhr.onload = ()=>{
          if(xhr.readyState === XMLHttpRequest.DONE){
               if(xhr.status === 200){
                    userList.innerHTML = xhr.responseText;
               }
          }
     }
     xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
     xhr.send("searchTerm=" + searchTerm);
}

setInterval(()=>{
     var xhr = new XMLHttpRequest(); //creating a XML object
     xhr.open("GET", "./users.php", true);
     xhr.onload = ()=>{
          if(xhr.readyState === XMLHttpRequest.DONE){
               if(xhr.status === 200){
                    
                    if(!userSearchBar.classList.contains("active")){
                         userList.innerHTML = xhr.responseText;
                    }
               }
          }
     }
     xhr.send();
}, 500);