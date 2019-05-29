function sendAlert() {
	alert("Clicked!");
}
function changeDivColor(divToChange) {
	document.getElementById(divToChange).style.backgroundColor = document.getElementById(divToChange + 'ColorChange').value;
}
function changeDivWithPrompt(divToChange) {
	document.getElementById(divToChange).style.backgroundColor = prompt('Please enter a color');
}
function changeDivWithJQuery(divToChange) {
	var color = document.getElementById(divToChange + 'ColorChange').value;
	$('#' + divToChange).css('background-color',color);
}

function toggleVisibility(divToChange) {
	var $element = $("#" + divToChange);
	if ($element.is(':visible')) {
	    $element.fadeOut(2000);
	} else {
	    $element.fadeIn(2000);
	}
}