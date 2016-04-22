$(document).ready(function() {
	alert("return to the home page at any time by clicking the logo to the left of the search bar");
	
	$('#account').click(function() {
		alert("leads to a page where the user can see and modify their account information");
	});
	
	$('#nav-playlists').click(function() {
		alert("leads to a page where the user sees their personal playlists");
	});
	
	$('#play').click(play);
	
	$('#playlist-body').click(function() {
		alert("jumps to selected song");
	});
	
	$('#search-btn').click(search);
	
	$('#tab1').click(function() {
		alert("sets panel to display upcoming songs in the playlist");
	});
	
	$('#tab2').click(function() {
		alert("sets panel to history of most recently played songs");
	});
	
	$('.volume-btn').click(function() {
		alert("toggles the sound");
	});
	
	$('.repeat').click(function() {
		alert("repeats the current track until clicked again");
	});
});

function search() {
	alert("Clicking this button will search the site for the songs or artists matching user input");
} 

function play() {
	// $(this).children('img').attr('src', 'images/pawprint.png');
	alert("This button toggles the song between playing and paused");
}