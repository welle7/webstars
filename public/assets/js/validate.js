var $jq = jQuery.noConflict();
$jq(document).ready(function() {
//eigene Methoden
	jQuery.validator.addMethod("namen", function(value, element)
	{	return this.optional(element) || /^[A-Za-züÜäÄöÖéèàâç. ]*$/.test(value);
	},	"Ungültige Zeichen!")
	jQuery.validator.classRuleSettings.namen = {namen: true};

	jQuery.validator.addMethod("fonNummer", function(value, element)
	{	return this.optional(element) || /^([0-9\s\(\)\+\-\/]{9,30})*$/.test(value);
	}, 	"Gültige Telefonnummer?")
	jQuery.validator.classRuleSettings.fonNummer = {fonNummer: true};

	jQuery.validator.addMethod("usernamen", function(value, element)
	{	return this.optional(element) || /^[\a-zA-Z$]*$/.test(value);
	},	"Ungültige Zeichen!")
	jQuery.validator.classRuleSettings.kommentar = {usernamen: true};

//validieren
	$jq("#userform").validate({
//Regeln
	rules: {
	vorname: {
		required: true,
		minlength:2,
		namen: true
		},
	nachname: {
		required: true,
		name: true,
		minlength:3
		},
	username: {
		required: true,
		usernamen: true,
		minlength:6
		},
	mail: {
		required: true,
		email: true
		},
	passwort: {
		required: true,
		minlength: 6
		},
	passwort2: {
		required: true,
		minlength: 6,
		equalTo: "#passwort"
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
		required: "Vorname eingeben",
		minlength: "Minimum 3 Zeichen erforderlich"
		},
	nachname: {
		required: "Nachname eingeben",
		minlength: "Nachname zu Kurz"
		},
	username: {
		required: "Username eingeben",
		minlength: "Username zu Kurz"
			},
	mail: {
		required: "Mail eingeben",
		email: "Mail Adresse?"
		},
	passwort: {
		required: "Bitte Passwort eingeben",
		minlength: "Passwort zu Kurz"
		},
	passwort2: {
		required: "Bitte Passwort eingeben",
		minlength: "Passwort zu kurz",
		equalTo: "Passwörter stimmen nicht überein"
					},
	}
	});
});
