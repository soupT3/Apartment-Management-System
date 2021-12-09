var datepicker = new ej.calendars.DatePicker({ width: "255px" });
datepicker.appendTo('#datepicker');

function submitMaintenanceRequest() {
    alert('Thank you, your request has been submitted!');
    var frm = document.getElementsByName('contactForm')[0];
   	frm.submit(); // Submit the form
   	frm.reset();  // Reset all form data
    return false;
}

function loginUserRedirect() {
	var userType = document.getElementById("UserType1").value;
	if(userType === 'selectUser') {
		alert('Please select user type');
	} else if (userType === 'admin') {
		window.location.replace("adminDashboard.html");
	} else if (userType === 'resident') {
		window.location.replace("Maintenance.html");
	} else if (userType === 'visitor') {
		window.location.replace("index.html");
	}
	return false;
}

function submitVisitorInfo() {
    alert('Thank you, your appointment has been booked!');
    var frm = document.getElementsByName('visitorForm')[0];
   	frm.submit(); // Submit the form
   	frm.reset();  // Reset all form data
    return false;
}