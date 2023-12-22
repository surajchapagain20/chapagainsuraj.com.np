// JavaScript Document
$(document).ready(function() {
$(function() {
$("#dialog").dialog({
autoOpen: false
});
$("#button").on("click", function() {
$("#dialog").dialog("open");
});
});
// Validating Form Fields.....
$("#submit").click(function(e) {
var email = $("#first_name").val();
var name = $("#last_name").val();
var email = $("#email").val();
var name = $("#telephone").val();
var name = $("#comments").val();
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
if (email === '' || name === '') {
alert("Please fill all fields...!!!!!!");
e.preventDefault();
} else if (!(email).match(emailReg)) {
alert("Invalid Email...!!!!!!");
e.preventDefault();
} else {
alert("Form Submitted Successfully......");
}
});
});