// Game renderer

var el_game = document.getElementById("game");
var ctx = el_game.getContext("2d");

console.log("renderer loaded");


var bg_rotation_degree = 0;
var core_loaded_assets = 0;
var core_renderer_interval_fps = 1000 / 60; 


//cursor location
var cursorX = 0;
var cursorY = 0;
var cursorPressed = false;


var clicker_size = 224;
//TODO: Move this function to a custom loader.


//image data
var img_bg = new Image();
img_bg.src = "./assets/images/game_background.png";
img_bg.onload = function () {
	core_loaded_assets++;
}

var img_icon = new Image();
img_icon.src = "./assets/images/ccp.png";
img_icon.onload = function () {
	core_loaded_assets++;
}

var img_cursor = new Image();
img_cursor.src = "./assets/images/cursor.png";
img_cursor.onload = function () {
	core_loaded_assets++;
}



function renderer(){
	ctx.clearRect(0, 0, el_game.width, el_game.height);
	clicker_size = 224;
	
	if(core_loaded_assets == 3){
		bg_rotation_degree += 0.15;
		
		//Rendering Background
		render_background();
		
		
		if(cursorY > (el_game.height/2)-(224/2) && cursorX >(el_game.width/2)-(224/2) && ((el_game.height/2)-(224/2) + 224) > cursorY && ((el_game.width/2)-(224/2) + 224) > cursorX){ //
			console.log("test");
			if(cursorPressed){
				clicker_size = 189;
			}
		}
		
		ctx.drawImage(img_icon, (el_game.width/2)-(clicker_size/2), (el_game.height/2)-(clicker_size/2), clicker_size, clicker_size)
		
		
		ctx.drawImage(img_cursor, cursorX, cursorY);
	} else {
	
		
	}
	


}

function render_background() {
	ctx.save(); //saves the state of canvas
	ctx.clearRect(0, 0, el_game.width, el_game.height); //clear the canvas
	ctx.translate(img_bg.width/6 , img_bg.height/6 ); //let's translate
	ctx.rotate(Math.PI / 180 * bg_rotation_degree); //increment the angle and rotate the image 
	ctx.drawImage(img_bg, -img_bg.width / 2, -img_bg.height / 2); //draw the image ;)
	ctx.restore(); //restore the state of canvas


}



document.addEventListener("mousemove", function(e) {
	cursorX = parseInt((e.clientX - el_game.getBoundingClientRect().x) / (el_game.clientWidth/512)); 
	cursorY = parseInt((e.clientY - el_game.getBoundingClientRect().y) / (el_game.clientHeight/832)); 
	
	

});
document.addEventListener("mousedown", function(e) { 
	cursorPressed = true;
});

document.addEventListener("mouseup", function(e) { 
	cursorPressed = false;
});


setInterval(renderer, core_renderer_interval_fps);
