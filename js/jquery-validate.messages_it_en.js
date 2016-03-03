/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: IT (Italian; Italiano)
 */
$.extend( $.validator.messages, {
	required: "Campo obbligatorio | This field is required",
	remote: "Controlla questo campo | Please fix this field",
	email: "Inserisci un indirizzo email valido | Please enter a valid email address",
	url: "Inserisci un indirizzo web valido | Please enter a valid URL",
	date: "Inserisci una data valida | Please enter a valid date",
	dateISO: "Inserisci una data valida (ISO) | Please enter a valid date (ISO)",
	number: "Inserisci un numero valido | Please enter a valid number",
	digits: "Inserisci solo numeri | Please enter only digits",
	creditcard: "Inserisci un numero di carta di credito valido | ",
	equalTo: "Il valore non corrisponde | Please enter the same value again",
	extension: "Inserisci un valore con un&apos;estensione valida | ",
	maxlength: $.validator.format( "Non inserire pi&ugrave; di {0} caratteri | Please enter no more than {0} characters" ),
	minlength: $.validator.format( "Inserisci almeno {0} caratteri | Please enter at least {0} characters" ),
	rangelength: $.validator.format( "Inserisci un valore compreso tra {0} e {1} caratteri | Please enter a value between {0} and {1} characters long" ),
	range: $.validator.format( "Inserisci un valore compreso tra {0} e {1} | Please enter a value between {0} and {1}" ),
	max: $.validator.format( "Inserisci un valore minore o uguale a {0} | Please enter a value less than or equal to {0}" ),
	min: $.validator.format( "Inserisci un valore maggiore o uguale a {0} | Please enter a value greater than or equal to {0}" )
} );