var audio = new Audio("../audio/ccp.mp3");

audio.addEventListener("canplaythrough", (event) => {
	audio.play();
});
