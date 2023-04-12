let compte = document.querySelector(".logo_user");
let croix = document.querySelector("#croix");
let croix1 = document.querySelector("#croix1");
let div_menu = document.querySelector("#card");
let divBody = document.querySelector("#card_body");
let boutton = document.querySelectorAll("#burger");
let diVul = document.querySelector("#menu");
let userAdd = document.querySelector(".user_add");
let userAdd2 = document.querySelector(".user_add2");
let useradd1 = document.querySelector("#user_add1");
const divGeneral = document.querySelectorAll ("div");
const submit = document.querySelector("#inscription");








compte.addEventListener("click", (e) => {
    if (div_menu.style.display === "block") {
      div_menu.style.display = "none";

      divBody.style.display = "none";
    } else {
      div_menu.style.display = "block";
      div_menu.style.position = "absolute";
      div_menu.style.top = `${compte.offsetTop + compte.offsetHeight}px`;
      div_menu.style.left = `${compte.offsetLeft}px`;
      div_menu.style.zIndex = "999";
    }
  });



function toggleDiv() {
    if (divBody.style.display === "block") {
      divBody.style.display = "none";
      console.log("visible");
    } else {
  
      divBody.style.display = "block";
      divBody.style.position = "absolute";
      divBody.style.zIndex = "999";
      console.log("invisible");
    }
  }
  
  userAdd.addEventListener("click", toggleDiv);
  userAdd2.addEventListener("click", toggleDiv);
  

                                                                                    /*js responsive*/



boutton[0].addEventListener("click", (e) => {
    if (window.innerWidth < 750) {
    diVul.style.display = "block";
    diVul.style.borderRadius = "20px";
    diVul.style.width = "2px";
    diVul.style.zIndex = "999";
    boutton[0].style.display = "none";
    console.log("marche")
    }
    
});


croix.addEventListener("click",(e)=>{
    div_menu.style.display = "none";
    divBody.style.display = "none";
});

croix1.addEventListener("click",(e)=>{
  diVul.style.display = "none";
  boutton[0].style.display = "block";
});

// //Récupération du modal
// let modal = document.querySelector('#myModal');

// //Récupération du span pour fermer le modal
// let span = document.getElementsByClassName("close")[0];

// //Fonction pour fermer le modal
// function closeModal() {
//     modal.style.display = "none";
// }
// // Fonction pour fermer le modal quand on clique à l'extérieur
// window.onclick = function(event) {
//     if(event.target == modal){
//         modal.style.display = "none";
//     }
// }








