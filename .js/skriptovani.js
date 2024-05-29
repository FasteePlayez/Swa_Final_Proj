function redirekt(){
    if (localStorage.getItem("stary") != "ano"){
        if (confirm('Je ti nad 18 let?')) {
            localStorage.setItem("stary", "ano")
            console.log('je legalni chlapci.');
          } else {
            
            console.log('neni legalni chlapci.');
            location.replace("https://www.google.com/")
        }
    }
}