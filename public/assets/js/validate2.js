var $jq = jQuery.noConflict();
$jq(document).ready(function() {
//validieren
	$jq("#userform").validate({
//Regeln
	rules: {
	vorname: {
		required: true,
		minlength:2
		},
	},
	success: function(element) {
		element
		.text('OK!').addClass('valid')
		.closest('.control-group').removeClass('error').addClass('success');
	},
//Ausgabe
	messages: {
	vorname: {
		required: "Vorname eingeben"
		},
	}
	});
});
