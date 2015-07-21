$("#formConnexion button").prop("disabled", true);
$("#formConnexion button").css("transition", "0.5s all");

$("#login").keyup(function() {
	if ($("#login").val().length <= 0) {
		$("#login").parent().parent().parent().addClass("has-error");
	} else {
		$("#login").parent().parent().parent().removeClass("has-error");
	}
	checkSubmit();
});

$("#password").keyup(function() {
	if ($("#password").val().length <= 0) {
		$("#password").parent().parent().parent().addClass("has-error");
	} else {
		$("#password").parent().parent().parent().removeClass("has-error");
	}
	checkSubmit();
});

function checkSubmit() {
	if ($("#login").val().length > 0 && $("#password").val().length > 0) {
		$("#formConnexion button").prop("disabled", false);
	}
	else {
		$("#formConnexion button").prop("disabled", true);
	}
}

$("#formConnexion").submit(function( e ) {
	e.preventDefault();
	var login = $("#login");
	var password = $("#password");
	$("#formConnexion button").removeClass("btn-primary").addClass("btn-warning");
	$("#formConnexion button").prop("disabled", true);
	$.ajax({
		type: "POST",
		url: "modeles/global/connexion.php",
		data: {
			login: login.val(),
			password: password.val()
		},
		dataType: "json",
		success: function (msg) {
			console.log(msg);
			if (msg.Erreur !== undefined) {
				$("#formConnexion button").removeClass("btn-warning").addClass("btn-primary");
				$("#display-error").addClass("alert alert-danger").html(msg.Erreur);
			} else if (msg.Succes !== undefined) {
				location.reload();
			}
		},
		error: function (err) {
			console.log(err.responseText);
		}
		});
});