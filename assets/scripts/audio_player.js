var audio = new Audio();
audio.source = "../audio/ccp.mp3";

audio.addEventListener("canplaythrough", (event) => {
	audio.play();
});
