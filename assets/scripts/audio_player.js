var audio = new Audio("./assets/audio/ccp.mp3");

audio.addEventListener("canplaythrough", (event) => {
	audio.play();
});
