<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Create User</title>
<link rel="stylesheet" href="./assets/css/main.css" type="text/css" media="all" />
<link rel="stylesheet" href="./assets/css/panel.css" type="text/css" media="all" />
<link rel="stylesheet" href="./assets/css/form.css" type="text/css" media="all" />
</head>
<body>
	<form class="form" id="form" method="post" action="/hotel/activity/create" novalidate="novalidate">
		<div class="panel center-block col-md-7">
			<div class="panel-head">
				<div class="panel-title">Base</div>
			</div>
			<div class="panel-body">
				<div class="form-group col-md-10">
					<label class="label col-md-2">First Name</label>
					<input type="text" class="input_text col-md-7" name="first_name" value="">
				</div>
				<div class="form-group col-md-10">
					<label class="label col-md-2">Last Name</label>
					<input type="text" class="input_text col-md-7" name="first_name" value="">
				</div>
				<div class="form-group col-md-10">
					<label class="label col-md-2">User Name</label>
					<input type="text" class="input_text col-md-7" name="user_name" value="">
				</div>
				<div class="form-group col-md-10">
					<label class="label col-md-2">Email</label>
					<input type="text" class="input_text col-md-7" name="email" value="">
				</div>
				<div class="form-group col-md-10">
					<label class="label col-md-2">Country</label>
					<select class="select col-md-7" name="country">
						<option value="China">China</option>
						<option value="USA">USA</option>
						<option value="England">England</option>
					</select>
				</div>
				<div class="form-group col-md-10">
					<label class="label col-md-2">City</label>
					<input type="text" class="input_text col-md-7" name="city" value="">
				</div>
				<div class="form-group col-md-10">
					<label class="label col-md-2">Street</label>
					<input type="text" class="input_text col-md-7" name="street" value="">
				</div>
				<div class="form-group col-md-10">
					<label class="label col-md-2">Zip Code</label>
					<input type="text" class="input_text col-md-7" name="zipcode" value="">
				</div>
				<div class="form-group col-md-10">
					<label class="label col-md-2">Company</label>
					<div class="col-md-7 checkbox">
						<input type="checkbox" id="company">
						<label for="company">i have a company</label>
					</div>
				</div>
				<div class="form-group col-md-10">
					<label class="label col-md-2">Company Name</label>
					<input type="text" class="input_text col-md-7" name="company_name" value="">
				</div>
				<div class="form-group col-md-10">
					<label class="label col-md-2">Company Description</label>
					<textarea class="textarea col-md-7" name="company_description" value="">
				</div>
			</div>
		</div>
		<div class="form-submit">
			<div class="center-block submit-body">
				<button type="submit" class="button button-submit button-large">保存</button>
				<button type="reset" class="button button-cancel button-large">重置</button>
			</div>
		</div>
	</form>
</body>
</html>