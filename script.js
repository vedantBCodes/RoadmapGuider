// JS code for home page

var section1=document.getElementById("section1");
var section2=document.getElementById("section2");
var section3=document.getElementById("section3");

var sectionBlock1=document.getElementById("sectionBlock1");
var sectionBlock2=document.getElementById("sectionBlock2");
var sectionBlock3=document.getElementById("sectionBlock3");

section1.onclick=function(){
    sectionBlock1.style.display="block";
    sectionBlock2.style.display="none";
    sectionBlock3.style.display="none";

    section1.style.borderBottom="2px solid black"
    section1.style.borderTop="2px solid white"
    section2.style.borderBottom="2px solid white"
    section2.style.borderTop="2px solid black"
    section3.style.borderBottom="2px solid white"
    section3.style.borderTop="2px solid black"
}
section2.onclick=function(){
    sectionBlock2.style.display="block";
    sectionBlock1.style.display="none";
    sectionBlock3.style.display="none";

    section2.style.borderBottom="2px solid black"
    section2.style.borderTop="2px solid white"
    section1.style.borderBottom="2px solid white"
    section1.style.borderTop="2px solid black"
    section3.style.borderBottom="2px solid white"
    section3.style.borderTop="2px solid black"
}
section3.onclick=function(){
    sectionBlock3.style.display="block";
    sectionBlock1.style.display="none";
    sectionBlock2.style.display="none";

    section3.style.borderBottom="2px solid black"
    section3.style.borderTop="2px solid white"
    section1.style.borderBottom="2px solid white"
    section1.style.borderTop="2px solid black"
    section2.style.borderBottom="2px solid white"
    section2.style.borderTop="2px solid black"
}

// Autocomplete search box code (Code referred from somewhere)

// Start

// Initializes  input( name of skills) 
        // with a typeahead 
        var $input = $(".typeahead"); 
        $input.typeahead({ 
            source: [ 
                "ChatGPT",
                "Graphic Designing",
                "Digital marketing",
                "Video editing", 
                "Machine learning",
                "Cloud computing", 
                "Introduction to SQL",
                "Data analysis", 
                "Introduction to  cyber security",
                "Artificial Intelligence",
                "Introduction to programming",
            ], 
            autoSelect: true, 
        }); 
  
        $input.change(function () { 
            var current = $input.typeahead("getActive"); 
            matches = []; 
  
            if (current) { 
  
                // Some item from your input matches 
                // with entered data 
                if (current.name == $input.val()) 
                { 
                    matches.push(current.name); 
                } 
            } 
        });

// End

// Search box navigation code

//start

var searchBox=document.getElementById("inputBox");
searchBox.addEventListener('keypress', (e) =>{

if(e.key=='Enter')
{
    var val=searchBox.value;

    if(val=='ChatGPT')
    {
        window.location.href = "chatGPT.html"; 
    }
    else if(val=='Graphic Designing')
    {
        window.location.href = "graphicDesigning.html";
    }
    else if(val=='Digital marketing')
    {
        window.location.href = "digitalMarketing.html";
    }
    else if(val=='Video editing')
    {
        window.location.href = "videoEditing.html";
    }
    else if(val=='Machine learning')
    {
        window.location.href = "machineLearning.html";
    }
    else if(val=='Cloud computing')
    {
        window.location.href = "cloudComputing.html";
    }
    else if(val=='Introduction to SQL')
    {
        window.location.href = "introductionToSQL.html";
    }
    else if(val=='Data analysis')
    {
        window.location.href = "dataAnalyst.html";
    }
    else if(val=='Introduction to  cyber security')
    {
        window.location.href = "cyberSecurity.html";
    }
    else if(val=='Artificial Intelligence')
    {
        window.location.href = "artificialIntelligence.html";
    }
    else if(val=='Introduction to programming')
    {
        window.location.href = "programming.html";
    }

}

});

//end


// Sign In Page code

//Start

let signupBtn = document.getElementById("signupBtn");
let signinBtn = document.getElementById("signinBtn");
let namefield = document.getElementById("namefield");
let title = document.getElementById("title");

signinBtn.onclick =function(){
    namefield.style.maxHeight = "0";
    title.innerHTML="sign in";
    signupBtn.classList.add("disable");
    signinBtn.classList.remove("disable")
}
signupBtn.onclick =function(){
    namefield.style.maxHeight = "35px";
    title.innerHTML="sign Up";
    signupBtn.classList.remove("disable");
    signinBtn.classList.add("disable")
}

//End

// Code to popup a sign In Page

var signInButton1=document.getElementById("signInButton");
var signInContainer1=document.querySelector(".SignInContainer");

signInButton1.onclick=function(){

    signInContainer1.style.display="block";

}

var crosIcon=document.getElementById("crosIcon");

crosIcon.onclick=function(){

    signInContainer1.style.display="none";
}


// Js code to scroll up arrow icon

const arrowButton = document.querySelector(".upArrowButton");

window.addEventListener("scroll", () => {
    if (window.scrollY < 800 ) {
        arrowButton.classList.remove("active");
      } 
      else if ((window.scrollY > 800) && (window.scrollY < 2200)) {
    arrowButton.style.background="rgb(166, 165, 165)";
    arrowButton.classList.add("active");
  } 
   else if ((window.scrollY > 2200) && (window.scrollY < 2600)) {

    arrowButton.style.background="white";
    arrowButton.classList.add("active");
  }
  else {
    arrowButton.classList.remove("active");
  }
})


