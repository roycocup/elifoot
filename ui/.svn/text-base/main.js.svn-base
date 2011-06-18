var pitch = "<div id='grass'>" +
		"<div id='outLines'></div>" +
		"</div>"; 

$("#main").html(pitch);
$("#outLines").html("" +
		"<div id='player_1'></div>" +
		"<div id='player_2'></div>" +
		"<div id='player_3'></div>" +
		"<div id='player_4'></div>" +
		"<div id='player_5'></div>" +
		"<div id='player_6'></div>" +
		"<div id='player_7'></div>" +
		"<div id='player_8'></div>" +
		"<div id='player_9'></div>" +
		"<div id='player_10'></div>" +
		"<div id='player_11'></div>" +
		"<div id='player_12'></div>" +
		"<div id='player_13'></div>" +
		"<div id='player_14'></div>" +
		"<div id='player_15'></div>" +
		"<div id='player_16'></div>" +
		"<div id='player_17'></div>" +
		"<div id='player_18'></div>" +
		"<div id='player_19'></div>" +
		"<div id='player_20'></div>" +
		"<div id='player_21'></div>" +
		"<div id='player_22'></div>" +		
		"<div id='ball'></div>" +
		"");




var pitchDimensions = [450, 600];
$("#grass").css("height", pitchDimensions[0]);
$("#grass").css("width", pitchDimensions[1]);


function init(){
	getMoveCoors();
}


function getMoveCoors(){
	var result;
	//jQuery.getJSON('http://yapp.rodderscode.co.uk/engine/endpoint.php?f=getInstructions&p=params', result, 
	countMyself();
	jQuery.getJSON('http://localhost/elifoot2d/engine/endpoint.php?f=getInstructions&p=params&c='+ countMyself.counter , result,
			function(result){
				movePlayers(result);
			}
	);
}

function movePlayers(coors){
	//iterating the master coor values
	$.each(coors, 
			function(index, value){
				//if this is a ball - move it and move on
				if (value[0] == "ball"){
					$("#ball").css("position", "absolute");
					$("#ball").animate({ top: value[1][0], left: value[1][1]}, 2000, 'linear' );
				}
				//controlling the players
				$("#player_"+value[0]).css("position", "absolute");
				$("#player_"+value[0]).animate({ top: value[1][0], left: value[1][1]}, 2000, 'linear', function(){});
			} 
	);
	//init(); 
}

function countMyself() {
    // Check to see if the counter has been initialized
    if ( typeof countMyself.counter == 'undefined' ) {
        // It has not... perform the initilization
        countMyself.counter = 0;
    }

    // Do something stupid to indicate the value
    ++countMyself.counter;
}



