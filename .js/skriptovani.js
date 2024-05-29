function redirekt(){
    if (confirm('Je ti nad 18 let?')) {
        // Save it!
        console.log('je legalni chlapci.');
      } else {
        
        console.log('neni legalni chlapci.');
        location.replace("https://www.google.com/")
      }
}