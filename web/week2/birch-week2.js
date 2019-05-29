function sendAlert() {
	alert("Clicked!");
}
function changeDivColor(divToChange) {
	if (divToChange === 'big') {
		document.getElementById('big').style.backgroundColor = document.getElementById('bigColorChange').value;
	} else if (divToChange === 'medium') {
		document.getElementById('medium').style.backgroundColor = document.getElementById('mediumColorChange').value;
	} else if (divToChange === 'small') {
		document.getElementById('small').style.backgroundColor = document.getElementById('smallColorChange').value;
	} else {
		alert('no div selected. :(');
	}
}