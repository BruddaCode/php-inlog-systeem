var audio = new Audio("./assets/audio/ccp.mp3");
audio.loop = true;

audio.addEventListener("canplaythrough", (event) => {
	audio.play();
});

document.body.addEventListener("click", (event) => {
	if(!isPlaying ) audio.play();
	

});



var isPlaying = function () {
    return audio.currentAudio
        && audio.currentAudio.currentTime > 0
        && !audio.currentAudio.paused
        && !audio.currentAudio.ended
        && audio.currentAudio.readyState > 2;
}
