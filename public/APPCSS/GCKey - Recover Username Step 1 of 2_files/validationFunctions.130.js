$(document).ready(function() {
	$(':submit').click(function(event) {
		if ($(this).hasClass("clearall")) {
			clearInputsAndErrors();
			return false;
		}
		if ($(this).hasClass("cancel")) {
			return true;
		}
		var hasError = true;
		if (typeof validationGenericError !== "undefined") {
			hasError = fpValidator(formValidation, validationGenericError);
		} else if (typeof additionalValidation !== "undefined") {
			hasError = validator(formValidation, additionalValidation);
		} else {
			hasError = validator(formValidation);
		}
		if (hasError) {
			event.preventDefault();
		} else {
			return true;
		}
	});
});

function validUserPassLength(a, b) {
	return !(a.length > 16 || a.length < 8);
}


function validPassLowerSpecialChar(a, b) {
	return /[a-z\u00F9\u00FB\u00FC\u00FF\u00E0\u00E2\u00E6\u00E7\u00E9\u00E8\u00EA\u00EB\u00EE\u00F4\u0153]/
			.test(a);
}

function validPassUpperSpecialChar(a, b) {
	return /[A-Z\u00D9\u00DB\u00DC\u0178\u00C0\u00C6\u00C7\u00C9\u00C8\u00CA\u00CB\u00CF\u00CE\u00D4\u0152]/
			.test(a);
}

function hasNumeric(a, b) {
	return /[0-9]/.test(a);
}

function passwordContainsUserid (a,b) {
   return partCheck(uid,a);
}

function partCheck(userid, password) {
	if (userid == undefined) {
		return true;
	}
	password = password.toLowerCase();
	userid = userid.toLowerCase();
	for (var i = 0; i <= userid.length - 3; i++) {
		if (password.indexOf(userid.slice(i, i + 3)) != -1) {
			return false;
		}
	}
	return true;
}

function passwordSpecialChar(a, b) {
	if (isRequired(a)) {
		return /^[\w\u00F9\u00FB\u00FC\u00FF\u00E0\u00E2\u00E6\u00E7\u00E9\u00E8\u00EA\u00EB\u00EE\u00F4\u0153\u00D9\u00DB\u00DC\u0178\u00C0\u00C6\u00C7\u00C9\u00C8\u00CA\u00CB\u00CF\u00CE\u00D4\u0152\u007E\u0060\u0021\u0040\u0023\u0024\u0025\u005E\u0026\u002A\u0028\u0029\u002D\u005F\u003D\u002B\u007B\u007D\u007C\u005B\u005D\u005C\u0022\u003A\u003B\u0027\u003F\u002F\u002E\u002C\u003C\u003E\u0020\u00AB\u00BB]+$/
			.test(a);
	}
	return true;
}

function validUsernameLength(a, b) {
	return !(a.length > 64 || a.length < 8);
}

function validUsernameMinLength(a, b) {
	return a.length >= 8;
}

function validUsernameMaxLength(a, b) {
	return a.length <= 64;
}

function passwordMatchesConfirm(a, b) {
	return a == $("#confirmPassword").val();
}

function confirmMatchPassFunction(a, b) {
	return a == $("#password").val();
}

function passwordMatchesOld(a, b) {
	return !(a == $("#oldPassword").val());
}

function confirmMatchesNewPassword(a, b) {
	return a == $("#newPassword").val();
}

function validSpecialChar(a, b) {
	return !/[^A-Za-z0-9_\u00F9\u00FB\u00FC\u00FF\u00E0\u00E2\u00E6\u00E7\u00E9\u00E8\u00EA\u00EB\u00EE\u00F4\u00EF\u0153\u00D9\u00DB\u00DC\u0178\u00C0\u00C2\u00C6\u00C7\u00C9\u00C8\u00CA\u00CB\u00CF\u00CE\u00D4\u0152\u0020]/
		.test(a);
}

function memPersonNotEqualRecAns(a, b) {
	if (isRequired(a)) {
		return a != $("#recoveryAnswer").val();
	}
	return true;
}

function recoveryMatchPerson(a, b) {
	if (isRequired(a)) {
		return a != $("#memorablePerson").val();
	}
	return true;
}

function uidValidChars(a, b) {
	// !/[^A-Za-z0-9ùûüÿàâæçéèêëîïôœÙÛÜŸÀÂÆÇÉÈÊËÏÎÔŒ!$%^?:{}~'?/|&*_-.`()[]]/.test(a);
	return !/[^A-Za-z0-9\u00F9\u00FB\u00FC\u00FF\u00E0\u00E2\u00E6\u00E7\u00E9\u00E8\u00EA\u00EB\u00EE\u00F4\u00EF\u0153\u00D9\u00DB\u00DC\u0178\u00C0\u00C2\u00C6\u00C7\u00C9\u00C8\u00CA\u00CB\u00CF\u00CE\u00D4\u0152_!\$%\^\?:\{\}~'\/\|&\*\-\.`\[\]\(\)]/
			.test(a);
}

function notEmpty(a, b) {
	return a.length > 0;
}

function validEmail(emailStr) {
	if (emailStr.length > 0) {
		var regex = /[\s\S]+@.+\..+/i;
		return regex.test(emailStr);
	} else {
		return true;
	}
}

function checkedCheckbox(a, b) {
   return a[0].checked;
}

function newEmailMatchesConfirm(a, b) {
	return a.toUpperCase() === $("#confirmEmail").val().toUpperCase();
}

function confirmMatchesNewEmail(a, b) {
	return a.toUpperCase() === $("#email").val().toUpperCase();
}

function emailDifferentFromCurrent(a, b) {
	if (!currentEmailAddress) {
		return true;
	}
	return a.toUpperCase() !== currentEmailAddress.toUpperCase();
}

function emailDifferentFromCurrentPending(a, b) {
	if (!currentPendingEmailAddress) {
		return true;
	}
	return a.toUpperCase() !== currentPendingEmailAddress.toUpperCase();
}

function hasNoErrors(a) {
	if (errors) {
		return errors.length == 0;
	}
	return false;
}

function validThreeCharLength(a, b) {
	return !(a.length < 3);
}

function validThreeChar(a, b) {
	if (isRequired(a)) {
		return validThreeCharLength(a, b);
	}
	return true;
}

function hintValidSpecialChar(a, b) {
	return !/[^A-Za-z0-9_\u00F9\u00FB\u00FC\u00FF\u00E0\u00E2\u00E6\u00E7\u00E9\u00E8\u00EA\u00EB\u00EE\u00F4\u00EF\u0153\u00D9\u00DB\u00DC\u0178\u00C0\u00C2\u00C6\u00C7\u00C9\u00C8\u00CA\u00CB\u00CF\u00CE\u00D4\u0152\u0020\u002E\u0027\u002C\u002D\u003F]/.test(a);
}

function validOptionalSpecialChar(a, b) {
	if (isRequired(a)) {
		return hintValidSpecialChar(a, b);
	}
	return true;
}

function isRequired(a) {
	return a.length;
}

function token1Check(a, b) {
	return a.length > 0 && $("#token2").val().length > 0;
}

function token2Check(a, b) {
	return a.length > 0 && $("#token1").val().length > 0;
}

function summaryContainerBuilder() {
	// check if summary container exists
	var summaryContainer = $("div#errors-login");
	// create summary container if it does not exist
	if (summaryContainer.length === 0) {
		summaryContainer = $('<div class="row col-md-8"><div id="errors-login" role="alert" tabindex="-1"><ul></ul></div></div>');
		summaryContainer.insertAfter("h1#wb-cont");
	} else {
		// destroy summary container children (titles and links) and rebuild
		summaryContainer.empty();
		summaryContainer.append('<ul></ul>');
	}
}

function fpWriteErrors(faults) {
	var lang = getPageLang();
	var e = "Error";
	var ws = '';
	if (lang === "fra") {
		e = "Erreur";
		ws = ' ';
	}

	summaryContainerBuilder();

	for (var i = 0; i < faults.length; i++) {
		// write message to container
		$('#errors-login ul').append(
			'<li><a href="#recoveryAnswer"><span class="prefix">' + e + ' ' + 1 + ws + ': </span>'
			+ faults[i].summaryMsg + '</a></li>');
	}
	$('<p><strong>' + errorTitle + '</strong></p>').prependTo('#errors-login');

	// focus summary container
	$("#errors-login").focus();
}

function getIdxInForm(elementId) {

	var x = elementId.closest("form");
	if (x.length > 0) {
		var i;
		for (i = 0; i < x[0].length; i++) {
			if (x[0].elements[i].id === elementId) {
				return i;
			}
		}
	}
	return 0;
}

function sortByIdx(a, b) {
	var leftIdx = a.idx;
	var rightIdx = b.idx;
	return leftIdx - rightIdx;
}

function clearInputsAndErrors() {
	// remove existing error label messages
	$('.form-group > .checkbox > strong').remove();
	$('.form-group > strong').remove();
	$("div#errors-login").remove();
	$('input[type=password]').val('').change();
	$('input[type=text]').val('');
	$('select').val('');
	clearInputs();
}

function writeErrors(inputsWithErrors) {
	var lang = getPageLang();
	var e = "Error";
	var ws = '';
	var singleError = " error was found";
	var multipleErrors = " errors were found";
	if (lang === "fra") {
		e = "Erreur";
		ws = ' ';
		singleError = " erreur a été trouvée";
		multipleErrors = " erreurs ont été trouvées";
	}

	// sort inputs by form element index
	inputsWithErrors = inputsWithErrors.sort(sortByIdx);

	summaryContainerBuilder();

	// remove existing error label messages
	$('.form-group > strong').remove();
	$('.form-group > .checkbox > strong').remove();

	var errorCount = 0;

	for (var i = 0; i < inputsWithErrors.length; i++) {
		var input = inputsWithErrors[i].input;

		// clear input val if permitted 
		if (!$(input).hasClass('noClearOnError')) {
			$(input).val('').change();
		}

		// get error message for input
		var errorMessages = inputsWithErrors[i].messages;
		for (var idx = 0; idx < errorMessages.length; idx++) {
			errorCount++;
			// write message before input field
			if('checkbox' === $(input).attr('type')) {
				$(input).parent().before(
					'<strong><span class="inputError"><span class="prefix">' + e + ' ' + errorCount + ws + ': </span>'
					+ errorMessages[idx].fieldMsg + '</span></strong>');
			} else {
				$(input).before(
					'<strong><span class="inputError"><span class="prefix">' + e + ' ' + errorCount + ws + ': </span>'
					+ errorMessages[idx].fieldMsg + '</span></strong>');
			}
			
			// write message to container
			$('#errors-login ul').append(
				'<li><a href="#' + $(input).attr('id') + '"><span class="prefix">' + e + ' ' + errorCount + ws + ': </span>'
				+ errorMessages[idx].summaryMsg + '</a></li>');
		}
	}

	// update summary container title
	var updatedErrorTitle = null;
	if (errorCount === 1) {
		updatedErrorTitle = errorTitle.replace("{reason}", errorCount + singleError);
	} else {
		updatedErrorTitle = errorTitle.replace("{reason}", errorCount + multipleErrors);
	}
	$('<p><strong>' + updatedErrorTitle + '</strong></p>').prependTo('#errors-login');

	// focus summary container
	$("#errors-login").focus();
}

function processValidation(validation, errors) {
	var inputError = {};
	for (var i = 0; i < validation.length; i++) {
		var className = validation[i].className;
		var method = validation[i].validationMethod;
		var summaryMsg = validation[i].summaryMsg;
		var fieldMsg = validation[i].fieldMsg;
		var input = $('.' + className);
		if('checkbox' === input.attr('type')){
			var isValid = method($(input));
		} else {
			var isValid = method($(input).val());
		}

		if (!isValid) {
			for (var j = 0; j < errors.length; j++) {
				//check if input already has an error, if so then just add to the array of messages
				if ($(errors[j].input).attr('id') === $(input).attr('id')) {
					errors[j].messages.push({
						summaryMsg: summaryMsg,
						fieldMsg: fieldMsg
					});
					input = null;
					break;
				}
			}
			if (input != null) {
				// That input does not have an error yet, create new inputError object
				inputError = {};
				inputError.input = input;
				inputError.idx = getIdxInForm($(input));
				inputError.messages = new Array();
				inputError.messages.push({
					summaryMsg: summaryMsg,
					fieldMsg: fieldMsg
				});
				errors.push(inputError);
			}
		}
	}
	return errors;
}

function validator(validation, extraValidation) {
	errors = new Array();
	errors = processValidation(validation, errors);
	if (extraValidation) {
		errors = processValidation(extraValidation, errors);
	}

	if (errors.length) {
		// do page specific input handling
		clearInputs();
		writeErrors(errors);
		addErrorLinkClickHandler();
		return true;
	}
	return false;
}

function fpValidator(validation, genericMsg) {
	var errors = new Array();
	for (var i = 0; i < validation.length; i++) {
		var className = validation[i].className;
		var method = validation[i].validationMethod;
		var input = $('.' + className);
		var isValid = method($(input).val());
		if (!isValid) {
			var error = {
				summaryMsg: genericMsg
			};
			errors.push(error);
			break;
		}
	}
	if (errors.length) {
		clearInputs();
		fpWriteErrors(errors);
		addErrorLinkClickHandler();
		return true;
	}
	return false;
}

function checklist(id, validation, type) {
	var lang = getPageLang();

	var status;
	for (var i = 0; i < validation.length; i++) {
		var checklistId = validation[i].id;
		var method = validation[i].validationMethod;

		if ($('#' + id).val().length === 0) {
			(lang === "eng") ? status = "required" : status = "exigé";
			processChecklistDisplay(checklistId, type, "unSet", status, lang);
		} else {
			var isValid = method($('#' + id).val());
			if (!isValid) {
				(lang === "eng") ? status = "not met" : status = "non satisfait";
				processChecklistDisplay(checklistId, type, "notMet", status, lang);
			} else {
				(lang === "eng") ? status = "met" : status = "satisfait";
				processChecklistDisplay(checklistId, type, "met", status, lang);
			}
		}
	}
}

function processChecklistDisplay(checklistId, type, classTag, status, lang) {
	var text;
	(lang === "eng") ? text = "{type} criteria {result} " : text = "Critère {result} ";

	// handle icon
	$('#' + checklistId).removeClass();
	$('#' + checklistId).addClass(classTag);

	// handle title and child text
	var title = $('#' + checklistId).attr("title");
	if (title) {
		var titleOriginal = title;
		title = title.substring(title.indexOf('-'), title.length);
		if (lang === "eng") {
			text = text.replace("{type}", type);
		}
		text = text.replace("{result}", status);
		title = text.concat(title);

		// set title and child text on page
		if (titleOriginal != title) {
			$('#' + checklistId).attr("title", title);
			$('#' + checklistId).find(".wb-invisible").text(text);
		}
	}
}

function getPageLang() {
	return ($('html').attr("lang") === "en") ? "eng" : "fra";
}

function addErrorLinkClickHandler() {
	if (!/MSIE ((5\.5)|6|7)/.test(navigator.userAgent)) {
		$('#errors-login a').click(function() {
			$($(this).attr('href')).focus();
			return false;
		});
	}
}

$(document).ready(function(event) {
	if ($('#errors-login').length > 0) {
		addErrorLinkClickHandler();
	}
});

var formValidation = new Array();
var errors = null;