function record(){
	var recognition = new webkitSpeechRecognition();
		recognition.lang = "en-GB";
		recognition.onresult = function(event){
		document.getElementById('search').value=event.results[0][0].transcript;
  
		}
		recognition.start();
  
	}

function draggnot()
{
	document.getElementById('myImage').setAttribute('draggable', false);
}