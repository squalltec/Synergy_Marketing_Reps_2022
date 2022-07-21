<?php
// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');
 $res=$_POST['search'];
 $res=str_replace(' ', '_', $res);
 
// get DOM from URL or file
$html = file_get_html('https://en.m.wikipedia.org/wiki/'.$res);

// find all p
$ar=array();
foreach($html->find('p') as $e) 
    array_push($ar,$e->plaintext);
	

?>

<label id='text' style='display:none;'><?php echo $ar[1];?></label>
<input type='submit' id='stopper' onclick='stop()' value='stop'>

<script>
function stop(){
	
	window.speechSynthesis.cancel();
}
function speak (message) {
  var msg = new SpeechSynthesisUtterance(message)
  var voices = window.speechSynthesis.getVoices()
  msg.voice = voices[1]
  window.speechSynthesis.speak(msg)
   
}
 var elem = document.getElementById('text').innerHTML;
 if (elem.includes('Undefined')){
	 speak('No Result Was Found');
	 
	 
 }
 else{
 speak(elem)
 
 
 
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
	
	
	 if(transcript.includes('stop') ||transcript.includes('Stop') ||transcript.includes('Pause') ||transcript.includes('pause')  ){
		 
		 var elem = document.getElementById('stopper').click();
		
	 }
	
	
	
};
              
// start recognition
recognition.start();

 
 
 
 
 
 
 
 
 
 }

</script>