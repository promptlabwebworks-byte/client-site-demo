$(document).ready(function() {
 // add errors to field(s)
 $("#email").addClass("emailValidation");

 // create validation objects
 formValidation.push({
  className : "emailValidation",
  validationMethod : notEmpty,
  summaryMsg : emailIncompleteError,
  fieldMsg : emailIncompleteError_field
 });
 formValidation.push({
  className : "emailValidation",
  validationMethod : validEmail,
  summaryMsg : emailValidError,
  fieldMsg : emailValidError_field
 });

});

function clearInputs() {
}