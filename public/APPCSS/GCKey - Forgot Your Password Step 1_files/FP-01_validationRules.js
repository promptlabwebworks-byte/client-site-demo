$(document).ready(function() {
 // add errors to field(s)
 $("#userID").addClass("uidIncomplete");

 // create validation objects
 formValidation.push({
  className : "uidIncomplete",
  validationMethod : notEmpty,
  summaryMsg : uidIncompleteError,
  fieldMsg : uidIncompleteError_field
 });

});

function clearInputs() {
}