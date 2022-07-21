<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
      
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
      
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
    <title>Document</title>
</head>
  
<body>
    <form action="googlesearch.php" method="POST">
        <input id='t' type="text" name="search">
          
        <br><br>
          
        <button id='press'>
            Search
        </button>
    </form>
</body>
  
</html>

<script>

// new speech recognition object
var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
var recognition = new SpeechRecognition();
            
// This runs when the speech recognition service starts
recognition.onstart = function() {
    
};

recognition.onspeechend = function() {
    // when user is done speaking
    recognition.stop();
}
              
// This runs when the speech recognition service returns result
recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
	
	var elem = document.getElementById('t');
	var elem2 = document.getElementById('press');
	elem.value=transcript;
	elem2.click();
	
	
	
};
              
// start recognition
recognition.start();

</script>