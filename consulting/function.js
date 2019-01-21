//For validating in search form
function validateForm() {
	var x = document.forms["searchForm"]["keyword"].value;
	if (x == "") {
		alert("Fill in your question keywords!");
		return false;
	}
}