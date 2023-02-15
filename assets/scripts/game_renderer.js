// Game renderer

var el_game = document.getElementById("game");
var ctx = el_game.getContext("2d");

console.log("renderer loaded");


var bg_rotation_degree = 0;
var core_loaded_assets = 0;
var core_renderer_interval_fps = 1000 / 24; 


//cursor location
var cursorX = 0;
var cursorY = 0;
var cursorPressed = false;
var cursorPressedIcon = false;

var clicker_size = 224;
var score = 0;
var good_jobs = [];
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

var img_good_job = new Image();
img_good_job.src = "./assets/images/good_job.png";
img_good_job.onload = function () {
	core_loaded_assets++;
}


function renderer(){
	ctx.clearRect(0, 0, el_game.width, el_game.height);
	clicker_size = 224;
	
	if(core_loaded_assets == 4){
		bg_rotation_degree += 0.15;
		
		//Rendering Background
		render_background();
		
		
		
		
		
		
		
		
		
		if(cursorY > (el_game.height/2)-(224/2) && cursorX > (el_game.width/2)-(224/2) && ((el_game.height/2)-(224/2) + 224) > cursorY && ((el_game.width/2)-(224/2) + 224) > cursorX){ //
			if(cursorPressed){
				clicker_size = 189;
				cursorPressedIcon = true;
				
				
			}
		}
		
		
		if(cursorPressedIcon && !cursorPressed){
		
			cursorPressedIcon = false;
			score++;
			
			
			var rand_x = Math.floor(Math.random() * (el_game.width/2)-(224/2)) + 224;
			var rand_y = Math.floor(Math.random() * (el_game.height/2)) + 224 ;
			
			var object = {
				x: rand_x,
				y: rand_y,
				t: 0
			}
			
			good_jobs.push(object);
		}
		
		ctx.font = "48px serif";
		ctx.fillText(score + " Social Credits", 10, 50);
		
		
		
		ctx.drawImage(img_icon, (el_game.width/2)-(clicker_size/2), (el_game.height/2)-(clicker_size/2), clicker_size, clicker_size)
		
		for (var i = 0; i < good_jobs.length; i++) {
			var object = good_jobs[i];
			
			//TODO: read t add 1 and y add 2 till t is 60
			
			ctx.drawImage(img_good_job, object.x, object.y, 42, 42);
		
			
			
			if(object.t >= 60){
				good_jobs.splice(i,1);
			} else {
			
				object.y--;
				object.t++;
			
				good_jobs[i] = object;
			}
			
		
		}
		
		
		
		
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
