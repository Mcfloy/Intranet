function deconnexion() {	
	$.ajax({
		type: "GET",
		url: "modeles/global/deconnexion.php"
	}).done(function() {
		location.reload();
	});
}