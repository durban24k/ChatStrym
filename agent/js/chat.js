const userSearchBar=document.querySelector(".chat-content .users .search input"),
      userSearchBtn=document.querySelector(".chat-content .users .search button");
     
userSearchBtn.onclick=()=>{
     userSearchBar.classList.toggle("active");
     userSearchBar.focus();
     userSearchBtn.classList.toggle("active");
}