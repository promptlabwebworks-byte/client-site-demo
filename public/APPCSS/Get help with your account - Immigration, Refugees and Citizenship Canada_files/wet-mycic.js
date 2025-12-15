/* wet-mycic.js [11.0] - 2016-06-28 */

/* Prefix all custom JavaScript functions with "mycic" (i.e."mycicCustomFunction") */

$(document).ready(function() {
	updateClassGeIE10();
	$.ajaxSetup({
		cache : false
	});
	mycicKitRefShowHide();
	mycicAppCategoryComboInitial();
	mycicHandleExternalLinks();
	mycicInitializeDataTables();
	if (typeof mycicAddIcons === 'function') {
		mycicAddIcons();
	}
	mycicIE8AddPngLogo();
	mycicHandlePtPortal();
	mycicInitBoardMessages();

	// Reorder Data Tables pieces in order
	$(".dataTables_info").each(function() {
		$(this).parent().prepend($(this));
	});
	$(".dataTables_filter").each(function() {
		$(this).parent().prepend($(this));
	});
});

var lang;
function setLanguage(language) {
	lang = language;
}

function mycicInitBoardMessages() {
	$(".alert-board-messages").on("click", ".close", function() {
		var closeBtns = $(".alert-board-messages .close");
		if (closeBtns && closeBtns.length <= 1) {
			$(".alert-board-messages").off("click", ".close").remove();
		}
	});
}

function updateClassGeIE10() {
	var isGeIE10 = window.navigator.msPointerEnabled;
	if (isGeIE10)
		$("html").addClass("ge-ie10");
}

function mycicKitRefShowHide() {
	$('#checklistHelp1').hide();
	mycicFixKitRefShowHide();
	$("a#nav-toggle-link").on("click", function(event) {
		event.preventDefault();
	});
	$('.nav-toggle').delegate("a#nav-toggle-link", "click", function(event) {
		$('#checklistHelp1').toggle();
	});
	$('.nav-toggle a').keydown(function(e) {
		if (e.keyCode == 13 || e.keyCode == 32) {
			e.preventDefault();
			$(this).click();
		}
	});
}

function mycicFixKitRefShowHide() {
	var text = $('.nav-toggle').text();
	$('.nav-toggle').empty();
	var toggler = '<p><a href="#checklistHelp1" id="nav-toggle-link">' + text
			+ '</a></p>';
	$('.nav-toggle').prepend(toggler);
}

// Expand WET dataTable plugin
$(".mycic-expandable tbody tr td span.fa").click(
		function() {
			var tableId = $(this).parent().parent().parent().parent().parent()
					.attr("id");
			var msgId = $(this).parent().parent().parent().attr("id");
			var row = $("#" + tableId + " #" + msgId);
			if ($('#msg' + msgId).length) {
				$("#img" + msgId + "-icon").addClass("fa-chevron-right")
						.removeClass("fa-chevron-down");
				$("#img" + msgId + "-alt").text(
						MyCIC.locale.resources.get('label.collapsed'));
				$('#msg' + msgId).remove();
			} else {
				$("#" + tableId + " tbody tr.opened").each(
						function() {
							var tmpId = $(this).prev().attr("id");
							$("#img" + tmpId + "-icon").addClass(
									"fa-chevron-right").removeClass(
									"fa-chevron-down");
							$("#img" + tmpId + "-alt").text(
									MyCIC.locale.resources
											.get('label.collapsed'));
							$(this).remove();
						});
				var colsQty = $("#" + tableId + " > thead > tr > th").size();// get
																				// the
																				// number
																				// of
																				// columns
																				// to
																				// pass
																				// in
																				// the
																				// span
				$("#img" + msgId + "-icon").addClass("fa-chevron-down")
						.removeClass("fa-chevron-right");
				$("#img" + msgId + "-alt").text(
						MyCIC.locale.resources.get('label.expanded'));
				row.after('<tr class="opened"><td colspan="' + colsQty
						+ '" id="msg' + msgId + '"></td></tr>');
				$('#msg' + msgId).load(messageLoadUrl + msgId);
				$('#msg' + msgId).attr({
					"aria-labelledby" : msgId,
					"aria-hidden" : false,
					"aria-live" : "polite",
					"role" : "tabpanel"
				});

			}
			;
		});

// Reset chevrons if headers are clicked
$(".mycic-expandable thead tr").click(
		function() {
			var tableId = $(this).parent().parent().attr("id");
			$("#" + tableId + " tbody tr td span.fa").each(
					function() {
						var tmpId = $(this).parent().parent().parent().attr(
								"id");
						$("#img" + tmpId + "-icon")
								.addClass("fa-chevron-right").removeClass(
										"fa-chevron-down");
						$("#img" + tmpId + "-alt").text(
								MyCIC.locale.resources.get('label.collapsed'));
					});
		});

function mycicAppCategoryComboInitial() {
	if ("regExistingAppEnabled" in window) {
		mycicToggleAppCategoryCombo();
		mycicToggleAppSubCategoryCombo();
	}
}

function mycicToggleAppCategoryCombo() {
	if ("regExistingAppEnabled" in window) {

		// Reset sub category when main category changes
		$("#appSubCategory").val($("#appSubCategory option:first").val());

		// pageSectionLoadURL
		$.post(pageSectionLoadURL, $("#appIdDataForm").serialize()).done(
				function(data) {
					$("#appDynamicDataDiv").html(data);
					mycicAddRegAppHandlers();
					mycicToggleAppIdCombo();
					mycicTogglePersonalInfo();
					mycicToggleCitApplicationDetails();
					mycicToggleCriteriaSelectionCombo();
				}).fail(function(response) {
			var newDoc = document.open("text/html", "replace");
			newDoc.write(response.responseText);
			newDoc.close();
		});
	}
}

function mycicToggleAppSubCategoryCombo() {
	if ("regExistingAppEnabled" in window) {

		// pageSectionLoadURL
		$.post(pageSectionLoadURL, $("#appIdDataForm").serialize()).done(
				function(data) {
					$("#appDynamicDataDiv").html(data);
					mycicAddRegAppHandlers();
					mycicToggleAppIdCombo();
					mycicTogglePersonalInfo();
					mycicToggleCitApplicationDetails();
				}).fail(function(response) {
			var newDoc = document.open("text/html", "replace");
			newDoc.write(response.responseText);
			newDoc.close();
		});
	}
}

function mycicToggleProvinceCombo() {
	if ("regExistingAppEnabled" in window) {
		var prov = $("#province").val();
		$("#cityOrTown").load("registerApp/cityInProvince/" + prov)
	}
}

function mycicToggleWorkPermitTypeCombo() {
	if ($("#workPermitType").val() == 17794) {
		$("#infoAboutWorkCda").show();
		$("#workPermitEmployerSpecific").show();
		$("#workPermitOpen").hide();
	} else if ($("#workPermitType").val() == 17795) {
		$("#infoAboutWorkCda").show();
		$("#workPermitOpen").show();
		$("#workPermitEmployerSpecific").hide();
	} else {
		$("#infoAboutWorkCda").hide();
		$("#workPermitOpen").hide();
		$("#workPermitEmployerSpecific").hide();
	}
}

function mycicAddRegAppHandlers() {
	var progressBox;
	$("#appIdCombo").change(mycicToggleAppIdCombo);
	$("#personalInfoSelect").change(mycicTogglePersonalInfo);
	$("#appCategory").change(mycicToggleAppCategoryCombo);
	$("#appSubCategory").change(mycicToggleAppSubCategoryCombo);
	$("#province").change(mycicToggleProvinceCombo);
	$("#workPermitType").change(mycicToggleWorkPermitTypeCombo);
	$("#applicationDetailsLovId").change(mycicToggleCitApplicationDetails);
	$("#criteriaSelectionLovId").change(
			mycicToggleCriteriaSelectionComboDefault);
	$("#appIdDataForm").submit(function() {
		progressBox = new ajaxLoader($("#appDynamicDataDiv"));
		var formData = $("#appIdDataForm").serialize() + "&_submit";
		$.post(pageSectionPostURL, formData).done(function(response) {
			if (progressBox)
				progressBox.remove();
			$('#appDynamicDataDiv').html(response);
			mycicAddRegAppHandlers();
			mycicToggleAppIdCombo();
			mycicToggleWorkPermitTypeCombo();
			mycicTogglePersonalInfo();
			mycicToggleCitApplicationDetails();
			mycicToggleCriteriaSelectionCombo();
		}).fail(function(response) {
			var newDoc = document.open("text/html", "replace");
			newDoc.write(response.responseText);
			newDoc.close();
		});

		return false;
	});
}

function mycicTogglePersonalInfo() {
	var personalInfoSelect = $('#personalInfoSelect').val();
	var categoryChosen = $("#appCategory").val();

	if (categoryChosen == 17842 || categoryChosen == 18196
			|| categoryChosen == 19398) {
		$("#showPersonalSelection").hide();
		$('#showBirthPlace').show();
		$('#showRelativeInformation').show();
	} else if (categoryChosen == 17840) {
		$('#showPassport').show();
	} else if (personalInfoSelect == 19166) {
		$('#showBirthPlace').show();
		$('#showPassport').hide();
		cleanPersonFields("passport");
	} else if (personalInfoSelect == 19167) {
		$('#showPassport').show();
		$('#showBirthPlace').hide();
		cleanPersonFields("birthplace");
	} else if (personalInfoSelect == 0) {
		$("#showPersonalSelection").show();
		$('#showBirthPlace').hide();
		$('#showPassport').hide();
		cleanPersonFields("passport");
		cleanPersonFields("birthplace");
	} else {
		$("#showPersonalSelection").show();
		$('#showBirthPlace').hide();
		$('#showPassport').hide();
		$('#showClientInformation').hide();
		cleanPersonFields("passport");
		cleanPersonFields("birthplace");
	}
}

function mycicToggleCitApplicationDetails() {
	var applicationDetailsLovId = $('#applicationDetailsLovId').val();
	var appSubCategory = $("#appSubCategory").val();

	if (appSubCategory == 19399) {// proof
		$("#citProof").show();
		$('#citSearch').hide();
		$("#countryOfMailingLovId").val(
				$("#countryOfMailingLovId option:first").val());

		if (applicationDetailsLovId == 19184) {// relative
			$("#showRelativeInformation").show();
			$('#showClientInformation').hide();
		} else if (applicationDetailsLovId == 19185) {// client
			$("#showRelativeInformation").hide();
			/* cleanRelativeInformationFields(); */
			$("#criteriaSelectionLovId").val(
					$("#criteriaSelectionLovId option:first").val());
			$("#proofBasedOnLovId").val(
					$("#proofBasedOnLovId option:first").val());
			$('#showClientInformation').show();
		} else {
			$("#showRelativeInformation").hide();
			/* cleanRelativeInformationFields(); */
			$('#showClientInformation').hide();
			cleanClientInformationFields();
			$("#proofBasedOnLovId").val(
					$("#proofBasedOnLovId option:first").val());
		}
	} else if (appSubCategory == 19400) {// search
		$("#citProof").hide();
		$("#applicationDetailsLovId").val(
				$("#applicationDetailsLovId option:first").val());
		$("#criteriaSelectionLovId").val(
				$("#criteriaSelectionLovId option:first").val());
		cleanClientInformationFields();
		$("#showRelativeInformation").hide();
		/* cleanRelativeInformationFields(); */
		$('#citSearch').show();
		$('#showClientInformation').hide();
	} else {
		$("#citProof").hide();
		$('#citSearch').hide();
		$("#applicationDetailsLovId").val(
				$("#applicationDetailsLovId option:first").val());
		$("#criteriaSelectionLovId").val(
				$("#criteriaSelectionLovId option:first").val());
		$("#countryOfMailingLovId").val(
				$("#countryOfMailingLovId option:first").val());
		cleanClientInformationFields();
		/* cleanRelativeInformationFields(); */
	}

}

function cleanPersonFields(personalSection) {
	if (personalSection == "birthplace") {
		$("#placeOfBirth").val("");
		$("#birthCountry").val($("#birthCountry option:first").val());
	} else if (personalSection == "passport") {
		$("#passportNumber").val("");
		$("#passportCountryOfIssue").val(
				$("#passportCountryOfIssue option:first").val());
		$("#passportIssueYear").val($("#passportIssueYear option:first").val());
		$("#passportIssueMonth").val(
				$("#passportIssueMonth option:first").val());
		$("#passportIssueDay").val($("#passportIssueDay option:first").val());
		$("#passportExpiryYear").val(
				$("#passportExpiryYear option:first").val());
		$("#passportExpiryMonth").val(
				$("#passportExpiryMonth option:first").val());
		$("#passportExpiryDay").val($("#passportExpiryDay option:first").val());

	}
}

function cleanClientInformationFields() {
	$("#citFamilyName").val("");
	$("#dobYearLovId").val($("#dobYearLovId option:first").val());
	$("#dobMonthLovId").val($("#dobMonthLovId option:first").val());
	$("#dobDayLovId").val($("#dobDayLovId option:first").val());
	$("#countryOfBirthLovId").val($("#countryOfBirthLovId option:first").val());
	$("#certificateNumber").val("");
}

function cleanRelativeInformationFields() {
	$("#applicationReasonLovId").val(
			$("#applicationReasonLovId option:first").val());
}

function mycicToggleAppIdCombo() {
	var appIdComboSel = $('#appIdCombo').val();

	if (appIdComboSel) {
		switch (appIdComboSel) {
		// Application Number and Unique Client Identifier (UCI)
		case '8300':
			$('#appNumber').attr('disabled', false);
			$('#appNumber_lbl').addClass("required");
			$('#appNumber_lbl').find('strong.required').show();
			$('#uci').attr('disabled', false);
			$('#uci_lbl').addClass("required");
			$('#uci_lbl').find('strong.required').show();
			$('#familyName').attr('disabled', true);
			$('#familyName_lbl').removeClass("required");
			$('#familyName').val("");
			$('#givenName').attr('disabled', true);
			$('#givenName_lbl').removeClass("required");
			$('#givenName').val("");
			$('#dobDay').attr('disabled', true);
			$('#dobDay').val("546");
			$('#dobMonth').attr('disabled', true);
			$('#dobMonth').val("740");
			$('#dobYear').attr('disabled', true);
			$('#dobYear').val("882");
			$('#dobYear_lbl').removeClass("required");
			break;
		// Application Number and Family Name
		case '8301':
			$('#appNumber').attr('disabled', false);
			$('#appNumber_lbl').addClass("required");
			$('#appNumber_lbl').find('strong.required').show();
			$('#familyName').attr('disabled', false);
			$('#familyName_lbl').addClass("required");
			$('#familyName_lbl').find('strong.required').show();
			$('#uci').attr('disabled', true);
			$('#uci_lbl').removeClass("required");
			$('#uci').val("");
			$('#givenName').attr('disabled', true);
			$('#givenName_lbl').removeClass("required");
			$('#givenName').val("");
			$('#dobDay').val("546");
			$('#dobDay').attr('disabled', true);
			$('#dobMonth').val("740");
			$('#dobMonth').attr('disabled', true);
			$('#dobYear').val("882");
			$('#dobYear').attr('disabled', true);
			$('#dobYear_lbl').removeClass("required");
			break;
		// Unique Client Identifier (UCI) and Family Name
		case '8302':
			$('#uci').attr('disabled', false);
			$('#uci_lbl').addClass("required");
			$('#uci_lbl').find('strong.required').show();
			$('#familyName').attr('disabled', false);
			$('#familyName_lbl').addClass("required");
			$('#familyName_lbl').find('strong.required').show();
			$('#appNumber').attr('disabled', true);
			$('#appNumber').val("");
			$('#givenName').attr('disabled', true);
			$('#givenName_lbl').removeClass("required");
			$('#givenName').val("");
			$('#dobDay').attr('disabled', true);
			$('#dobDay').val("546");
			$('#dobMonth').attr('disabled', true);
			$('#dobMonth').val("740");
			$('#dobYear').attr('disabled', true);
			$('#dobYear').val("882");
			$('#dobYear_lbl').removeClass("required");
			break;
		// Family Name, Given Name and Date of Birth
		case '8303':
			$('#appNumber').attr('disabled', true);
			$('#appNumber_lbl').removeClass("required");
			$('#appNumber').val("");
			$('#uci').attr('disabled', true);
			$('#uci_lbl').removeClass("required");
			$('#uci').val("");
			$('#familyName').attr('disabled', false);
			$('#familyName_lbl').addClass("required");
			$('#familyName_lbl').find('strong.required').show();
			$('#givenName').attr('disabled', false);
			$('#givenName_lbl').addClass("required");
			$('#givenName_lbl').find('strong.required').show();
			$('#dobDay').attr('disabled', false);
			$('#dobMonth').attr('disabled', false);
			$('#dobYear').attr('disabled', false);
			$('#dobYear_lbl').addClass("required");
			$('#dobYear_lbl').find('strong.required').show();
			break;
		default:
			$('#appNumber').attr('disabled', true);
			$('#appNumber_lbl').removeClass("required");
			$('#appNumber_lbl').find('strong.required').hide();
			$('#appNumber').val("");
			$('#uci').attr('disabled', true);
			$('#uci_lbl').removeClass("required");
			$('#uci_lbl').find('strong.required').hide();
			$('#uci').val("");
			$('#familyName').attr('disabled', true);
			$('#familyName_lbl').removeClass("required");
			$('#familyName_lbl').find('strong.required').hide();
			$('#familyName').val("");
			$('#givenName').attr('disabled', true);
			$('#givenName_lbl').removeClass("required");
			$('#givenName_lbl').find('strong.required').hide();
			$('#givenName').val("");
			$('#dobDay').attr('disabled', true);
			$('#dobDay').val("546");
			$('#dobMonth').attr('disabled', true);
			$('#dobMonth').val("740");
			$('#dobYear').attr('disabled', true);
			$('#dobYear').val("882");
			$('#dobYear_lbl').removeClass("required");
			$('#dobYear_lbl').find('strong.required').hide();
			break;
		}
	}
}

function mycicToggleCriteriaSelectionCombo() {
	var criteriaSel = $('#criteriaSelectionLovId').val();

	if (criteriaSel) {
		switch (criteriaSel) {
		// Country of Birth and Certificate Number
		case '19194':
			$('#citFamilyName').attr('disabled', true);
			$('#citFamilyName_lbl').removeClass("required");
			$('#citFamilyName_lbl').find('strong.required').hide();
			$('#dob_lbl').removeClass("required");
			$('#dob_lbl').find('strong.required').hide();
			$('#dobDayLovId').attr('disabled', true);
			$('#dobMonthLovId').attr('disabled', true);
			$('#dobYearLovId').attr('disabled', true);
			$('#countryOfBirthLovId').attr('disabled', false);
			$('#countryOfBirthLovId_lbl').addClass("required");
			$('#countryOfBirthLovId_lbl').find('strong.required').show();
			$('#certificateNumber').attr('disabled', false);
			$('#certificateNumber_lbl').addClass("required");
			$('#certificateNumber_lbl').find('strong.required').show();
			break;
		// Date of Birth and Certificate Number
		case '19193':
			$('#citFamilyName').attr('disabled', true);
			$('#citFamilyName_lbl').removeClass("required");
			$('#citFamilyName_lbl').find('strong.required').hide();
			$('#dob_lbl').addClass("required");
			$('#dob_lbl').find('strong.required').show();
			$('#dobDayLovId').attr('disabled', false);
			$('#dobMonthLovId').attr('disabled', false);
			$('#dobYearLovId').attr('disabled', false);
			$('#countryOfBirthLovId').attr('disabled', true);
			$('#countryOfBirthLovId_lbl').removeClass("required");
			$('#countryOfBirthLovId_lbl').find('strong.required').hide();
			$('#certificateNumber').attr('disabled', false);
			$('#certificateNumber_lbl').addClass("required");
			$('#certificateNumber_lbl').find('strong.required').show();
			break;
		// Date of Birth and Country of Birth
		case '19192':
			$('#citFamilyName').attr('disabled', true);
			$('#citFamilyName_lbl').removeClass("required");
			$('#citFamilyName_lbl').find('strong.required').hide();
			$('#dob_lbl').addClass("required");
			$('#dob_lbl').find('strong.required').show();
			$('#dobDayLovId').attr('disabled', false);
			$('#dobMonthLovId').attr('disabled', false);
			$('#dobYearLovId').attr('disabled', false);
			$('#countryOfBirthLovId').attr('disabled', false);
			$('#countryOfBirthLovId_lbl').addClass("required");
			$('#countryOfBirthLovId_lbl').find('strong.required').show();
			$('#certificateNumber').attr('disabled', true);
			$('#certificateNumber_lbl').removeClass("required");
			$('#certificateNumber_lbl').find('strong.required').hide();
			break;
		// Family Name and Certificate Number
		case '19191':
			$('#citFamilyName').attr('disabled', false);
			$('#citFamilyName_lbl').addClass("required");
			$('#citFamilyName_lbl').find('strong.required').show();
			$('#dob_lbl').removeClass("required");
			$('#dob_lbl').find('strong.required').hide();
			$('#dobDayLovId').attr('disabled', true);
			$('#dobMonthLovId').attr('disabled', true);
			$('#dobYearLovId').attr('disabled', true);
			$('#countryOfBirthLovId').attr('disabled', true);
			$('#countryOfBirthLovId_lbl').removeClass("required");
			$('#countryOfBirthLovId_lbl').find('strong.required').hide();
			$('#certificateNumber').attr('disabled', false);
			$('#certificateNumber_lbl').addClass("required");
			$('#certificateNumber_lbl').find('strong.required').show();
			break;
		// Family Name and Country of Birth
		case '19190':
			$('#citFamilyName').attr('disabled', false);
			$('#citFamilyName_lbl').addClass("required");
			$('#citFamilyName_lbl').find('strong.required').show();
			$('#dob_lbl').removeClass("required");
			$('#dob_lbl').find('strong.required').hide();
			$('#dobDayLovId').attr('disabled', true);
			$('#dobMonthLovId').attr('disabled', true);
			$('#dobYearLovId').attr('disabled', true);
			$('#countryOfBirthLovId').attr('disabled', false);
			$('#countryOfBirthLovId_lbl').addClass("required");
			$('#countryOfBirthLovId_lbl').find('strong.required').show();
			$('#certificateNumber').attr('disabled', true);
			$('#certificateNumber_lbl').removeClass("required");
			$('#certificateNumber_lbl').find('strong.required').hide();
			break;
		// Family Name and Date of Birth
		case '19189':
			$('#citFamilyName').attr('disabled', false);
			$('#citFamilyName_lbl').addClass("required");
			$('#citFamilyName_lbl').find('strong.required').show();
			$('#dob_lbl').addClass("required");
			$('#dob_lbl').find('strong.required').show();
			$('#dobDayLovId').attr('disabled', false);
			$('#dobMonthLovId').attr('disabled', false);
			$('#dobYearLovId').attr('disabled', false);
			$('#countryOfBirthLovId').attr('disabled', true);
			$('#countryOfBirthLovId_lbl').removeClass("required");
			$('#countryOfBirthLovId_lbl').find('strong.required').hide();
			$('#certificateNumber').attr('disabled', true);
			$('#certificateNumber_lbl').removeClass("required");
			$('#certificateNumber_lbl').find('strong.required').hide();
			break;
		default:
			$('#citFamilyName').attr('disabled', true);
			$('#citFamilyName_lbl').removeClass("required");
			$('#citFamilyName_lbl').find('strong.required').hide();
			$('#dob_lbl').removeClass("required");
			$('#dob_lbl').find('strong.required').hide();
			$('#dobDayLovId').attr('disabled', true);
			$('#dobMonthLovId').attr('disabled', true);
			$('#dobYearLovId').attr('disabled', true);
			$('#countryOfBirthLovId').attr('disabled', true);
			$('#countryOfBirthLovId_lbl').removeClass("required");
			$('#countryOfBirthLovId_lbl').find('strong.required').hide();
			$('#certificateNumber').attr('disabled', true);
			$('#certificateNumber_lbl').removeClass("required");
			$('#certificateNumber_lbl').find('strong.required').hide();
			break;
		}
	}
}

function mycicToggleCriteriaSelectionComboClearValues() {
	var criteriaSel = $('#criteriaSelectionLovId').val();

	if (criteriaSel) {
		$('#citFamilyName').val("");
		$('#dobDayLovId').val("546");
		$('#dobMonthLovId').val("740");
		$('#dobYearLovId').val("882");
		$('#countryOfBirthLovId').val("0");
		$('#certificateNumber').val("");
	}
}
function mycicToggleCriteriaSelectionComboDefault() {
	var criteriaSel = $('#criteriaSelectionLovId').val();

	if (criteriaSel) {
		mycicToggleCriteriaSelectionComboClearValues();
		mycicToggleCriteriaSelectionCombo();
	}
}

// In the StudentTransfer flow - modify fields based on drop-down selection
// in studentInfo.jsp
function setStudentProgramIdFields() {
	var programIdComboSel = $('#programIdCombo').val();

	if (programIdComboSel) {
		switch (programIdComboSel) {
		case '19168':
			$('#programDurationFromYear_lbl').addClass("required");
			$('#programDurationFromYear_lbl').find('strong.required').show();
			$('#programDurationFromDay').attr('disabled', false);
			$('#programDurationFromMonth').attr('disabled', false);
			$('#programDurationFromYear').attr('disabled', false);

			$('#programDurationToYear_lbl').addClass("required");
			$('#programDurationToYear_lbl').find('strong.required').show();
			$('#programDurationToDay').attr('disabled', false);
			$('#programDurationToMonth').attr('disabled', false);
			$('#programDurationToYear').attr('disabled', false);

			$('#dli_lbl').removeClass("required");
			$('#dli_lbl').find('strong.required').hide();
			$('#dli').attr('disabled', true);
			$('#dli').val("");
			break;

		case '19169':
			$('#programDurationFromYear_lbl').addClass("required");
			$('#programDurationFromYear_lbl').find('strong.required').show();
			$('#programDurationFromDay').attr('disabled', false);
			$('#programDurationFromMonth').attr('disabled', false);
			$('#programDurationFromYear').attr('disabled', false);

			$('#programDurationToYear_lbl').removeClass("required");
			$('#programDurationToYear_lbl').find('strong.required').hide();
			$('#programDurationToDay').attr('disabled', true);
			$('#programDurationToDay').val("546");
			$('#programDurationToMonth').attr('disabled', true);
			$('#programDurationToMonth').val("740");
			$('#programDurationToYear').attr('disabled', true);
			$('#programDurationToYear').val("882");

			$('#dli_lbl').addClass("required");
			$('#dli_lbl').find('strong.required').show();
			$('#dli').attr('disabled', false);
			break;

		case '19170':
			$('#programDurationFromYear_lbl').removeClass("required");
			$('#programDurationFromYear_lbl').find('strong.required').hide();
			$('#programDurationFromDay').attr('disabled', true);
			$('#programDurationFromDay').val("546");
			$('#programDurationFromMonth').attr('disabled', true);
			$('#programDurationFromMonth').val("740");
			$('#programDurationFromYear').attr('disabled', true);
			$('#programDurationFromYear').val("882");

			$('#programDurationToYear_lbl').addClass("required");
			$('#programDurationToYear_lbl').find('strong.required').show();
			$('#programDurationToDay').attr('disabled', false);
			$('#programDurationToMonth').attr('disabled', false);
			$('#programDurationToYear').attr('disabled', false);

			$('#dli_lbl').addClass("required");
			$('#dli_lbl').find('strong.required').show();
			$('#dli').attr('disabled', false);
			break;

		default:
			$('#programDurationFromYear_lbl').removeClass("required");
			$('#programDurationFromYear_lbl').find('strong.required').hide();
			$('#programDurationFromDay').attr('disabled', true);
			$('#programDurationFromDay').val("546");
			$('#programDurationFromMonth').attr('disabled', true);
			$('#programDurationFromMonth').val("740");
			$('#programDurationFromYear').attr('disabled', true);
			$('#programDurationFromYear').val("882");

			$('#programDurationToYear_lbl').removeClass("required");
			$('#programDurationToYear_lbl').find('strong.required').hide();
			$('#programDurationToDay').attr('disabled', true);
			$('#programDurationToDay').val("546");
			$('#programDurationToMonth').attr('disabled', true);
			$('#programDurationToMonth').val("740");
			$('#programDurationToYear').attr('disabled', true);
			$('#programDurationToYear').val("882");

			$('#dli_lbl').removeClass("required");
			$('#dli_lbl').find('strong.required').hide();
			$('#dli').attr('disabled', true);
			$('#dli').val("");

			break;
		}
	}
}

function ajaxLoader(el, options) {
	// Becomes this.options
	var defaults = {
		bgColor : '#fff',
		duration : 800,
		opacity : 0.7,
		classOveride : false
	};
	this.options = jQuery.extend(defaults, options);
	this.container = $(el);

	this.init = function() {
		var container = this.container;
		// Delete any other loaders
		this.remove();
		// Create the overlay
		var overlay = $('<div></div>').css({
			'background-color' : this.options.bgColor,
			'opacity' : this.options.opacity,
			'width' : container.width(),
			'height' : container.height(),
			'position' : 'absolute',
			'top' : '0px',
			'left' : '0px',
			'z-index' : 99999
		}).addClass('ajax_overlay');
		// add an overiding class name to set new loader style
		if (this.options.classOveride) {
			overlay.addClass(this.options.classOveride);
		}
		// insert overlay and loader into DOM
		container.append(overlay.append(
				$('<div></div>').addClass('ajax_loader')).fadeIn(
				this.options.duration));
	};

	this.remove = function() {
		var overlay = this.container.children(".ajax_overlay");
		if (overlay.length) {
			overlay.fadeOut(this.options.classOveride, function() {
				overlay.remove();
			});
		}
	};

	this.init();
}

/*
 * Returns an array of table values from a particular column object:oSettings -
 * dataTable settings object int:iColumn - id of the column to extract the data
 * from bool:bUnique - optional - if false, duplicated values are not filtered
 * out bool:bFiltered - optional - if false, all the table data is used (not
 * only the filtered data) bool:bIgnoreEmpty - optional - if false, empty values
 * are not filtered from the result array Author: Benedikt Forchhammer
 * <b.forchhammer -at- mind2.de>
 * http://www.datatables.net/examples/api/multi_filter_select.html
 */

$.fn.dataTableExt.oApi.fnGetColumnData = function(oSettings, iColumn, bUnique,
		bFiltered, bIgnoreEmpty) {

	// Check that we have a column id
	if (typeof iColumn == "undefined")
		return new Array();

	// By default we only want unique data
	if (typeof bUnique == "undefined")
		bUnique = true;

	// By default we do want to only look at filtered data
	if (typeof bFiltered == "undefined")
		bFiltered = true;

	// By default we do not want to include empty values
	if (typeof bIgnoreEmpty == "undefined")
		bIgnoreEmpty = true;

	// Loop through list of rows
	var aiRows;

	// Use only filtered rows
	if (bFiltered == true)
		aiRows = oSettings.aiDisplay;
	// Use all rows
	else
		aiRows = oSettings.aiDisplayMaster; // All row numbers

	// Set up data array
	var asResultData = new Array();

	for (var i = 0, c = aiRows.length; i < c; i++) {
		iRow = aiRows[i];
		var aData = this.fnGetData(iRow);
		var sValue = aData[iColumn];

		// Ignore empty values?
		if (bIgnoreEmpty == true && sValue.length == 0)
			continue;

		// Ignore unique values?
		else if (bUnique == true && jQuery.inArray(sValue, asResultData) > -1)
			continue;

		// Otherwise push the value onto the result data array
		else
			asResultData.push(sValue);
	}

	return asResultData;
};

function mycicCreateSelect(filterIndex, aData) {
	var r = '<select id="selectIndex' + filterIndex
			+ '"><option value=""></option>', i, iLen = aData.length;
	for (i = 0; i < iLen; i++) {
		// Add regex expression ^...$ around the value to make sure we
		r += '<option value="^' + aData[i] + '$">' + aData[i] + '</option>';
	}
	return r + '</select>';
}

function dateRenderFunction(val, typeCall, fullDataSourceForRow) {
	if (typeCall === 'display' && val) {
		var dateSplit = val.split('@');
		if (dateSplit.length > 1) {
			return dateSplit[1];
		}
	}
	return val;
}
function eadminCreateSelect(filterIndex, aData) {
	var sorted = aData.sort();
	var r = '<select id="selectIndex' + filterIndex
			+ '"><option value=""></option>', i, iLen = sorted.length;
	for (i = 0; i < iLen; i++) {
		// Add regex expression ^...$ around the value to make sure we
		r += '<option value="^' + sorted[i] + '$">' + sorted[i] + '</option>';
	}
	return r + '</select>';
}

function dateCellClean() {
}

// use class mycic-data-table-filter on a <div> to identify a filter
// use columnX on the same <div> to identify the column to search on
// use mycic-select-filter to indicate that a <select> should be used with the
// columns contents

function mycicHandleDataTable(tableId, columnsToLimit, dateColumns,
		unsortableColumns, shouldApplyGrouping, shouldApplyExpand, simpleTable,
		initialSort) {
	// initialize dataTable overlay

	// Replaced cause for issue that required to absolutely introduce an element
	// with id language
	// Used attribute lang from the html element instead that is always present
	// on every page by default
	// <input type="hidden" name="language" id="language"
	// value="${requestContext.locale.language}" /> could be remove
	// var language = document.getElementById("language")
	var language = $('html').attr('lang');
	if (language != null) {
		setLanguage(language);
	} else {
		setLanguage("en");
	}

	// $(".dataTable").DataTable({"lengthMenu": [ 5, 10, 25, 50, 100 ]});

	var dataTableInitArray;
	if (simpleTable === true) {
		dataTableInitArray = ({
			"bAutoWidth" : false,
			"bPaginate" : false,
			"bInfo" : false,
			"bFilter" : false,
			"aLengthMenu" : [ 5, 10, 25, 50, 100 ]
		});
	} else if (tableId == "completedAppTable" || tableId == "inProgressTable") {
		// Required for limitation of 5 entries on MyCIC 322079
		dataTableInitArray = {
			"bAutoWidth" : false,
			"aLengthMenu" : [ 5, 10, 25, 50, 100 ]
		};
	} else {
		dataTableInitArray = {
			"bAutoWidth" : false
		};
	}

	var aoColumnDefsArray = new Array();

	if (undefined != columnsToLimit) {
		aoColumnDefsArray.push({
			"aTargets" : columnsToLimit
		});
	}
	if (undefined != dateColumns) {

		aoColumnDefsArray.push({
			"mRender" : dateRenderFunction,
			"aTargets" : dateColumns
		});
		for (var i = 0; i < dateColumns.length; ++i) {
			aoColumnDefsArray.push({
				"mData" : dateColumns[i],
				"aTargets" : [ dateColumns[i] ]
			});
		}
	}
	if (undefined != unsortableColumns) {
		aoColumnDefsArray.push({
			"bSortable" : false,
			"aTargets" : unsortableColumns
		});
	}
	if (aoColumnDefsArray.length > 0) {
		dataTableInitArray.aoColumnDefs = aoColumnDefsArray;
	}

	if (lang && lang === 'fr') {
		dataTableInitArray.oLanguage = {
			"sProcessing" : "Traitement en cours...",
			"sSearch" : "Rechercher&nbsp;:",
			"sLengthMenu" : "Afficher _MENU_ &eacute;l&eacute;ments",
			"sInfo" : "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
			"sInfoEmpty" : "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
			"sInfoFiltered" : "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
			"sInfoPostFix" : "",
			"sLoadingRecords" : "Chargement en cours...",
			"sZeroRecords" : "Aucun &eacute;l&eacute;ment &agrave; afficher",
			"sEmptyTable" : "Aucune donn\xe9e disponible dans le tableau",
			"oPaginate" : {
				"sFirst" : "Premier",
				"sPrevious" : "Pr&eacute;c&eacute;dent",
				"sNext" : "Suivant",
				"sLast" : "Dernier"
			},
			"oAria" : {
				"sSortAscending" : ": activer pour trier la colonne par ordre croissant",
				"sSortDescending" : ": activer pour trier la colonne par ordre d&eacute;croissant"
			}
		};
	}
	if (undefined != initialSort) {
		dataTableInitArray.fnInitComplete = function() {
			$('#' + tableId).DataTable().order(initialSort).draw();
		}
	}
	var oTable = $('#' + tableId).dataTable(dataTableInitArray);

	// add row grouping with or without collapsibe groups
	if (shouldApplyGrouping) {
		if (shouldApplyExpand) {
			oTable.rowGrouping({
				bExpandableGrouping : true
			});
		} else {
			oTable.rowGrouping();
		}
	}
	// look for divs on the page that are to be setup as filters on the table
	oTable.le
	var numColumns = oTable.fnSettings().aoColumns.length;
	// loop through columns searching each filter definition for column number
	// class
	$("div .data-table-filter")
			.each(
					function(filterIndex) {
						for (var columnNum = 0; columnNum < numColumns; columnNum++) {
							// determine if the filter is to be free-text or a
							// select of column data
							if ($(this).hasClass("column" + columnNum)) {
								if ($(this).hasClass("select-filter")) {
									if ($(this).hasClass(
											"select-filter-non-searchable")) {
										// Do nothing as Select content is set
										// with lov in jsp
									} else {
										this.innerHTML = eadminCreateSelect(
												filterIndex,
												oTable.fnGetColumnData(
														columnNum, true));
										// apply datatables filter to newly
										// created <select>
										$('select', this).addClass(
												"data-table-filter-select");
										$('select', this).change(
												function() {
													oTable.fnFilter($(this)
															.val(), columnNum,
															true);
												});
									}
									// select have searchable turned off to
									// avoid searching on all entries of select.
									var oSettings = oTable.fnSettings();
									oSettings.aoColumns[columnNum].bSearchable = false;
									break;
								} else {
									if ($(this).hasClass("select-filter-date")) {

										$(".datepick").datepicker({
											showOn : "both"
										});

										$('#min').on("change",
												function(dateString) {
													oTable.fnDraw();
												});

										$('#max').on("change",
												function(dateString) {
													oTable.fnDraw();
												});

										$.fn.dataTableExt.afnFiltering
												.push(function(oSettings,
														aData, iDataIndex) {
													var iMin = document
															.getElementById('min').value;
													var iMax = document
															.getElementById('max').value;

													if (iMin == null
															|| iMin == "") {
														return true;
													}
													if (iMax == null
															|| iMax == "") {
														return true;
													}

													var minDate = new Date(iMin);
													var maxDate = new Date(iMax);
													var date = new Date();
													date
															.setTime(aData[columnNum]);

													if (minDate <= date
															&& date <= maxDate) {
														return true;
													}
													return false;
												});

										break;
									} else {
										var searchId = "inputIndex"
												+ filterIndex;
										this.innerHTML = '<input type="text" id="'
												+ searchId + '"/>';
										// apply datatables filter to newly
										// created <input>
										$('input', this).addClass(
												"data-table-filter-input");
										break;
									}
								}
							}
						}
					});
	return oTable;
}

function mycicClearSearchTable(tableId, formId) {
	$('#' + formId)[0].reset();
	$('#' + tableId).DataTable().search('').columns().search('').draw();
	mycicSearchTable(tableId, formId);
}


function mycicSearchTable(tableId, formId) {
	var oTable = $('#' + tableId).dataTable();
	var oForm = $('#' + formId);
	var numColumns = $('#' + tableId).find('thead tr th').length;
	for (var columnNum = 0; columnNum < numColumns; columnNum++) {
		if (oForm.find('#filterCol' + columnNum).length) {
			var thisInput = $('#filterCol' + columnNum);
			if (thisInput.val() !== 'undefined') {
				if (thisInput.is("select")) {
					if (thisInput.val() !== '0') {
						oTable.fnFilter($(
								'#filterCol' + columnNum + ' option:selected')
								.text(), columnNum, true);
					}
				} else {
					oTable.fnFilter(thisInput.val(), columnNum, true);
				}
			}
		}
	}
	
	// adding support for <select> inputs
	for (var columnNum = 0; columnNum < numColumns; columnNum++) {
		if (oForm.find('#filterColInput' + columnNum).length) {
			var thisInput = $('#filterColInput' + columnNum, this);
			if ($('#filterColInput' + columnNum + ' option:selected').val() !== '0') {
				oTable.fnFilter($(
						'#filterColInput' + columnNum + ' option:selected')
						.val(), columnNum, true);
			}
		}
	}
		 
	// adding support for date inputs
	for (var columnNum = 0; columnNum < numColumns; columnNum++) {
		if (oForm.find('#filterColDate' + columnNum + 'Start').length) {
			var start = $('#filterColDate' + columnNum + 'Start');
		}
		if (oForm.find('#filterColDate' + columnNum + 'End').length) {
			var end = $('#filterColDate' + columnNum + 'End');
		}
		
		if ((oForm.find('#filterColDate' + columnNum + 'Start').length)
				|| (oForm.find('#filterColDate' + columnNum + 'End').length)) 
		{
			var newSDate = $('#filterColDate' + columnNum + 'Start').val();
			var newEDate = $('#filterColDate' + columnNum + 'End').val();
			oTable.fnFilter(newSDate + '--' + newEDate, columnNum, true);
		}
	}
	
	if ($(".outer__"+tableId).length)
	{
		if($(".outer__"+tableId).css("display")=="none"){ 
			$(".outer__"+tableId).fadeIn();
		} 
	}
}


function mycicInitializeDataTables() {
	if ("inProgressClientAppTableActive" in window) {
		// apply the datatable overlay with nothing extra for clients
		mycicHandleDataTable('inProgressTable', [ 1, 3 ], [ 1, 2 ], [ 4 ],
				false, false, false, [ 1, 'desc' ]);
	}
	if ("completedAppTableActive" in window) {
		// apply the datatable overlay with searching and grouping for apr's
		mycicHandleDataTable('completedAppTable', [ 3, 4, 5, 8 ], [ 3, 4, 5 ],
				[ 8 ], true, true);
	}
	if ("completedClientAppTableActive" in window) {
		// apply the datatable overlay with nothing extra for clients
		mycicHandleDataTable('completedAppTable', undefined, [ 3 ], [ 6 ],
				false, false, false, [ 3, 'desc' ]);
	}
	if ("tfwpTableActive" in window) {
		// apply the datatable overlay with nothing extra for clients
		mycicHandleDataTable('completedAppTable', [ 2, 3, 4 ], [ 2, 3, 4 ],
				[ 7 ], false, false);
	}

	if ("messageDashboardTableActive" in window) {
		mycicHandleDataTable('messageDashboardTable', undefined, [ 1, 2 ],
				undefined, false, false, false, [ 1, 'desc' ]);
	}

	if ("ispTableActive" in window) {
		// mycicHandleDataTable('activitiesTable', [ 1, 2, 3, 4, 5 ], undefined,
		// undefined, false, false);

	}
}

// Handle the external link, displays a confirmation dialog.
function mycicHandleExternalLinks() {

	$(document).find('body').append('<div id="externalUrlDialog"></div>');

	// A default message will be set to the title of the page when the dialog
	// text is not avaliable
	var defaultMessage = $(document).find("title").text();

	var buttons = {};

	// get value of dialog buttons from the global dictionary
	var cancelLabel = MyCIC.locale.resources.get('btn.dialogCancel');
	var logoutLabel = MyCIC.locale.resources.get('btn.dialogLogout');
	var continueLabel = MyCIC.locale.resources.get('btn.dialogContinue');
	var externalUrlType = "privacy";

	// process the logout button
	buttons[logoutLabel] = function() {
		dialogProcessLogout(this, externalUrlType);
	};
	// process the cancel button
	buttons[cancelLabel] = function() {
		dialogProcessCancel(this);
	};
	// process the continue button
	buttons[continueLabel] = function() {
		dialogProcessContinue(this, externalUrlType);
	};

	// dialog setting
	$("#externalUrlDialog").dialog({
		modal : true,
		width : 580,
		height : 'auto',
		autoOpen : false,
		resizable : false,
		show : {
			effect : "blind",
			duration : 400
		},
		hide : {
			effect : "fade",
			duration : 400
		},
		position : [ 'center', 'center' ],
		buttons : buttons
	});

	// set the dialog buttons to align center
	$(".ui-dialog-buttonset").attr('style', 'float: none;');
	$(".ui-dialog-buttonpane ").attr('style', 'text-align: center;');

	// sets the overlay of the page and prevents users from any other action
	$(".ui-widget-overlay").attr('style',
			'background-color:red; opacity:20; z-index:1001;');

	// replaces the ugly x icon(close) on the dialog
	$(".ui-dialog-titlebar-close span").removeClass("ui-icon-closethick")
			.addClass("ui-icon-close");

	// process the onclick event on the external links
	$("a.confirm")
			.click(
					function(event) {

						event.preventDefault();

						// $( "span" ).wrap( '<div id="externalLinkId'+ $( this
						// ).text()+'"></div>');

						// get the value of the dialog text from the global UI
						// dictionary
						var dialogText = MyCIC.locale.resources
								.get('txt.dialogText');

						// return the dialog text message if none retrun the
						// default text.
						var message = (dialogText == undefined || dialogText == '') ? defaultMessage
								: dialogText;

						// sets the alert icon inside the dialog box
						var alertIcon = '<span class="ui-icon ui-icon-alert" style="float:left; height:15px; width:15px;margin:15px 10px -10px 0px;"></span>';

						// Sets the dialog title to the external link name
						title = $(this).text();

						// sets the title of the dialog
						$("#externalUrlDialog")
								.dialog('option', 'title', title);

						// sets the alert icon before displaying the dialog text
						$('#externalUrlDialog').html(
								'<p>' + alertIcon + message + '</p>');

						// Opens the dialog
						$("#externalUrlDialog").dialog("open");

					});
}

var processLogoutUrl = {
	logoutUrl : '/mycic/dialogLogout',
	continueUrl : '/mycic/dialogContinue'
};

// Process the logout button on the dialog.users will be logged out before
// navigating to the external link.
function dialogProcessLogout(dialog, externalUrlType) {
	handleDialogProcessAction(processLogoutUrl.logoutUrl, externalUrlType);
}

// Process the continue button on the dialog, users will be logged on and
// navigating to the external link.
function dialogProcessContinue(dialog, externalUrlType) {
	handleDialogProcessAction(processLogoutUrl.continueUrl, externalUrlType);
}

// Process the Cancel button on the dialog and closes the dialog box.
function dialogProcessCancel(dialog) {
	$(dialog).dialog("close");
}

// Handles the dialog button actions.
function handleDialogProcessAction(url, externalUrl) {

	if (url != null) {
		$.ajax({
			url : url,
			data : {
				"externalUrlType" : externalUrl
			},

			// if successfull navigate user to the external link
			success : function(response) {
				window.location.href = response;
			},

			// diaplays the error message on the dialog
			error : function(xhr, thrownError) {
				setExceptionDialog();
			}
		});
	}
}

// sets the exception dialog for errors and exceptions
function setExceptionDialog() {

	var dialogError = MyCIC.locale.resources.get('txt.applicationError');

	$(document).find('body').append('<div id="err_msg"></div>');

	$('#err_msg').html(dialogError);

	// dialog setting
	$('#err_msg').dialog({
		autoOpen : true,
		width : 550,
		height : 'auto',
		title : "ERROR!"
	});

	// closes the existing dialog
	$("#externalUrlDialog").dialog("close");
	// replaces the ugly x icon(close) on the dialog
	$(".ui-dialog-titlebar-close span").removeClass("ui-icon-closethick")
			.addClass("ui-icon-close");
}

function mycicHandlePtPortal() {
	if ("ptPortalSearchTableActive" in window) {
		if (ptPortalSearchTableActive === true) {
			mycicHandleDataTable('candidateSearchResultsTable', [], [ 7 ], [ 0,
					1 ], false, false);

			$('#candidateSearchResultsTable')
					.on(
							'click',
							'input.selectCand',
							function() {
								if (oTable2.fnSettings().fnRecordsTotal() < 10) {
									var recordNumber = $('input.recordNumber')
											.val();
									var nTrId = this.id.substring(6);
									var newRowId = nTrId + '-' + recordNumber
									var nTr = $('#' + newRowId);
									// this is for ticket:264403
									var existing = document
											.getElementById('selected'
													+ newRowId);
									if (existing === null) {
										var rowData = oTable1.fnGetData(nTr[0]);
										rowData[1] = "<a href='#'><img src='/mycic/resource/images/close-button.gif' id='img"
												+ newRowId
												+ "' width='25' height='25' class='image-actual candidateSelected'></a>";
										rowData[2] = nTrId;
										var newRow = oTable2.fnAddData(rowData);
										var newRowTr = oTable2.fnSettings().aoData[newRow[0]].nTr;
										newRowTr.id = "selected" + newRowId;

									}
								}
							});
			mycicPtPortalSearchHandleExportLink();
		}
	}

	if ("ptPortalSearchMessageActive" in window) {
		mycicPtPortalSearchMessageHandleExportLink();
	}
	if ("candidateListActive" in window) {
		if (candidateListActive === true) {
			mycicHandleDataTable('ptQueueStatusTable', undefined, [ 4 ], [ 0 ],
					false, false);

			$('#ptQueueStatusTable')
					.on(
							'click',
							'input.selectCand',
							function() {
								if (oTable2.fnSettings().fnRecordsTotal() < 10) {
									var recordNumber = $('input.recordNumber')
											.val();
									var nTrId = this.id.substring(6);
									var newRowId = nTrId + '-' + recordNumber
									var nTr = $('#' + newRowId);
									var existing = document
											.getElementById('selected'
													+ newRowId);
									if (existing === null) {
										var rowData = oTable1.fnGetData(nTr[0]);
										rowData[1] = "<a href='#'><img src='/mycic/resource/images/close-button.gif' id='img"
												+ newRowId
												+ "' width='25' height='25' class='image-actual candidateSelected'></a>";
										rowData[2] = nTrId;
										var newRow = oTable2.fnAddData(rowData);
										var newRowTr = oTable2.fnSettings().aoData[newRow[0]].nTr;
										newRowTr.id = "selected" + newRowId;
									}
								}
							});
			mycicPtPortalCandidateHandleExportLink();
		}
	}
}

function mycicPtPortalCandidateHandleExportLink() {
	var progressBox;
	var fileDownloadCheckTimer;
	$('#exportLink').on(
			'click',
			function(e) {
				var token = new Date().getTime();
				$('#ptPortal_selected_candidats_form').attr('action',
						'/mycic/repPortal/pt/repQueue/ptSearch');
				progressBox = new ajaxLoader($("#ptQueueStatusTableDiv"));
				$('#download_token_value_id').val(token);
				$('#exportToExcelBoolean').val(true);
				$('#ptPortal_selected_candidats_form').submit();
				fileDownloadCheckTimer = window.setInterval(function() {
					var cookieValue = readCookie('fileDownloadToken');
					if (cookieValue == token)
						finishDownload(progressBox, fileDownloadCheckTimer);
					$('#exportToExcelBoolean').val(false);
				}, 2000);
			});
}

function mycicPtPortalSearchHandleExportLink() {
	var progressBox;
	var fileDownloadCheckTimer;
	$('#exportLink')
			.on(
					'click',
					function(e) {
						var token = new Date().getTime();
						$('#ptPortal_Express_Entry_Search_form').attr('action',
								'/mycic/repPortal/pt/repQueue/ptSearch');
						$('#download_token_value_id').val(token);
						$('#exportToExcelBoolean').val(true);
						progressBox = new ajaxLoader(
								$("#candidateSearchResultsTable"));
						$('#download_token_value_id').val(token);
						$('#ptPortal_Express_Entry_Search_form').submit();
						fileDownloadCheckTimer = window.setInterval(function() {
							var cookieValue = readCookie('fileDownloadToken');
							if (cookieValue == token)
								finishDownload(progressBox,
										fileDownloadCheckTimer);
							$('#exportToExcelBoolean').val(false);
						}, 2000);
					});
}

function mycicPtPortalSearchMessageHandleExportLink() {
	var progressBox;
	var fileDownloadCheckTimer;
	$('#exportLink').on(
			'click',
			function(e) {
				var token = new Date().getTime();
				$('#ptPortal_express_entry_search_message_form').attr('action',
						'/mycic/repPortal/pt/repQueue/ptSearch');
				$('#download_token_value_id').val(token);
				progressBox = new ajaxLoader(
						$("#candidateSearchResultsMessageForm"));
				$('#download_token_value_id').val(token);
				$('#exportToExcelBoolean').val(true);

				$('#ptPortal_message_confirmation_form').submit();
				fileDownloadCheckTimer = window.setInterval(function() {
					var cookieValue = readCookie('fileDownloadToken');
					if (cookieValue == token)
						finishDownload(progressBox, fileDownloadCheckTimer);
				}, 2000);
			});
}

function modifyLinkInTable(trId) {
	var dashIndex = trId.search("-");
	var msgLink = document.getElementById("summaryLink"
			+ trId.substring(dashIndex + 1));
	if (msgLink != null) {
		var summaryLinkTd = document.getElementById("summaryLinkTd"
				+ trId.substring(dashIndex + 1));
		var linkText = document.createTextNode(msgLink.innerHTML);
		summaryLinkTd.insertBefore(linkText, msgLink);
		summaryLinkTd.removeChild(msgLink);
	}
}

function createCookie(name, value, days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
		var expires = "; expires=" + date.toGMTString();
	} else
		var expires = "";
	document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ')
			c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) == 0)
			return c.substring(nameEQ.length, c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name, "", -1);
}

function finishDownload(progress, fileDownloadCheckTimer) {
	window.clearInterval(fileDownloadCheckTimer);
	eraseCookie('fileDownloadToken');
	if (progress)
		progress.remove();
}

function openModal(messageLoadUrl, msgId) {
	$('#msgSentDate' + msgId).load(messageLoadUrl + "/" + msgId);

	$(document).trigger("open.wb-lbx", [ [ {
		src : "#msg" + msgId,
		type : "inline"
	} ] ]);
}

// called from dashboard messages - opens a modal msg + then updates view date
function openMessageModal(messageLoadUrl, msgId) {

	$(document).trigger("open.wb-lbx", [ [ {
		src : "#msg" + msgId,
		type : "inline"
	} ] ]);
	$('#msgViewedDate' + msgId).load(messageLoadUrl + "/" + msgId);
}

// called from dashboard messages after msg doc download - updates view date
function updateMessageViewDate(messageLoadUrl, msgId) {

	$('#msgViewedDate' + msgId).load(messageLoadUrl + "/" + msgId);
}
