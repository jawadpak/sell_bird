 <div class="row" >
 	<div class="col-lg-12">
 		<h1 class="page-header">Sign up</h1>
 	</div>
 	<div class="col-lg-8">
 		<div class="panel panel-default">
 			<div class="panel-heading">
 				Sign Up
 			</div>
 			<div class="panel-body">
 				<div class="row">
 					<div class="col-lg-10">
 						<form role="form" name="form">
 							<div class="form-group" ng-class="{'has-error':(form.name.$error.required || form.name.$error.minlength) && !form.name.$pristine}">
 								<label>Name</label>
 								<input class="form-control" name="name" ng-model="name" ng-minlength="4" required>

 								<p ng-show="form.name.$error.required && !form.name.$pristine" class="help-block">Name is required.</p>
 								<p ng-show="form.name.$error.minlength && !form.name.$pristine" class="help-block">Name is too short.</p>
 							</div>
 							<div class="form-group">
 								<label>Email</label>
 								<input class="form-control">
 							</div>
 							<div class="form-group">
 								<label>User</label>
 								<input class="form-control">
 							</div>
 							<div class="form-group">
 								<label>Password</label>
 								<input class="form-control">
 							</div>
 							<div class="form-group">
 								<label>Confirm Password</label>
 								<input class="form-control">
 							</div>
 							<div class="form-group">
 								<p class="help-block">You are not robot 5 + 6 = <input placeholder="Enter text"></p>
 							</div>
 							<button class="btn btn-default" type="submit">Submit</button>
 						</form>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>