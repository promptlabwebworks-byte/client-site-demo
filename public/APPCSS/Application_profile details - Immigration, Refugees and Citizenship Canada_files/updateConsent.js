function updateConsent() {
	var spinner = new ProgressSpinner();
    spinner.start();
    var consentLovId;
    var applicantId;
    
    if(document.getElementById("agree").checked){
    	consentLovId = document.getElementById("agree").value
    } else if(document.getElementById("disAgree").checked){
    	consentLovId = document.getElementById("disAgree").value
    }
	var consentUpdateUrl = ajaxConsentUpdateUrl+consentLovId;
    $.ajax({
        type: 'POST',
        url: consentUpdateUrl,
        dataType: "json",				
		contentType: "application/json",
        data: {applicantId: '${applicantId}',consentLovId: '${consentLovId}'},
        success : function(response) {
            spinner.stop();
        	console.log(response.hasFault);
        	if(response.hasFault == true){
        		document.getElementById("consentResponse").innerHTML = errorConsentResponse;
        		return false;
        	}
        	else
        	{
        		document.getElementById("consentResponse").innerHTML = successfulConsentResponse;
        		document.getElementById("updateConsentButton").disabled = true;
        		return true;
        	}
        		
        },
        error : function(e) {
            spinner.stop();
            document.getElementById("consentResponse").innerHTML = errorConsentResponse;
        	return false;;
        }
    });
    return false;
};

function handleRadioButtonClick(consent)
{
	if ((consent === 'false') && document.getElementById("disAgree").checked)
	{
		document.getElementById("updateConsentButton").disabled = true;
	}
	else if ((consent === 'true') && document.getElementById("agree").checked)
	{
		document.getElementById("updateConsentButton").disabled = true;
	}
	else
	{
		document.getElementById("updateConsentButton").disabled = false;
	}
	if (document.getElementById("agree").checked)
	{
		helpModal('agreeConsent');
	}
	if (document.getElementById("disAgree").checked)
	{
		helpModal('disAgreeConsent');
	}
	
}

