

// Autocomplete search box code

// Start

// Initializes  input( name of skills) 
        // with a typeahead 
        var $input = $(".typeahead"); 
        $input.typeahead({ 
            source: [ 
                "Cloud computing", 
                "Video editing", 
                "Machine learning", 
                "Introduction to programming", 
                "Introduction to  cyber security", 
                "Digital marketing", 
                "Data analysis", 
                "ChatGPT", 
                "Introduction to SQL", 
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
    namefield.style.maxHeight = "60px";
    title.innerHTML="sign Up";
    signupBtn.classList.remove("disable");
    signinBtn.classList.add("disable")
}
