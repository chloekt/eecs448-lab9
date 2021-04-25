document.addEventListener("DOMContentLoaded",()=>
{
  document.getElementById('pastastore').addEventListener('submit', (e)=>
  {
    let bowtienum = document.getElementById('bowties');
    let tagnum = document.getElementById('tagliatelle');
    let ravnum = document.getElementById('ravs');
    let username = document.getElementById('username');
    let password = document.getElementById('password');
    let freeship = document.getElementById('free');
    let threeday = document.getElementById('3-day');
    let overnight = document.getElementById('overnight');

    if(bowtienum.value == 0 && tagnum.value == 0 && ravnum.value == 0){
      alert("Cannot leave all quantities at 0, please buy something!");
      e.preventDefault();
    }
    if(!validEmail(username.value)){
      alert("Please enter a valid email of the form blahblah@email.com");
      e.preventDefault();
    }
    if(password.value.length == 0){
      alert("Please make sure to enter your password!");
      e.preventDefault();
    }
    if(freeship.checked==false && threeday.checked==false && overnight.checked==false){
      alert("Please select a shipping method");
      e.preventDefault();
    }
  });

  function validEmail(email){
    let temp = false;
    for(let i=0; i<email.length; i++){
      console.log(email[i]);
      if(email[i] == "@" && i!=0 && i!= email.length-1){
        temp = true;
      }
    }
    return temp;
  }
});
