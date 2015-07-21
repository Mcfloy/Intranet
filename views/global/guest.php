<div class="row">
	<div class="col-lg-12">
		<div id="display-error"></div>
		<div class="well">
			<form class="form-horizontal" id="formConnexion">
				<input style="display:none" type="text" name="fakelogin"/>
				<input style="display:none" type="password" name="fakepassword"/>
				<fieldset>
					<legend>Formulaire de connexion</legend>
					<div class="form-group">
						<div class="col-lg-6 col-lg-offset-3">
							<label for="login" class="col-lg-4 control-label">Votre identifiant</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="login" placeholder="Ex: l.perreau" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-6 col-lg-offset-3">
							<label for="password" class="col-lg-4 control-label">Votre mot de passe</label>
							<div class="col-lg-8">
								<input type="password" class="form-control" id="password" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-2 col-lg-offset-5">
							<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
<script src="resources/js/guest.js"></script>