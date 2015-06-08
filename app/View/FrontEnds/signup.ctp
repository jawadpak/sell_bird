<div class="row">
 	<div class="col-lg-12">
 		<h1 class="page-header"> SIGN UP</h1>
 	</div>
 	<div class="col-lg-12">
 			<div class="panel panel-default">
                <div class="panel-heading">
                   SIGN UP
                </div>
                <div class="panel-body">
                       <form role="form" name="form" class="form-horizontal">
<div ng-class="{'has-error':(form.name.$error.required || form.name.$error.minlength) && !form.name.$pristine}">
                          		<div class="form-group">
                            <label class="col-xs-2 control-label">Name:</label>
                            <div class="col-xs-5">
                            <input class="form-control" name="name" ng-model="name" ng-minlength="4" required>
    
                                    <p ng-show="form.name.$error.required && !form.name.$pristine" class="help-block">Name is required.</p>
                                    <p ng-show="form.name.$error.minlength && !form.name.$pristine" class="help-block">Name is too short.</p>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="col-xs-2 control-label">Email:</label>
                                    <div class="col-xs-5">
                                    <input type="text" class="form-control" />
                                    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-2 control-label">User Name:</label>
                                    <div class="col-xs-5">
                                    <input class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-2 control-label">Password:</label>
                                    <div class="col-xs-5">
                                    <input class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-2 control-label">Confirm Password:</label>
                                    <div class="col-xs-5">
                                    <input class="form-control">
                                    </div>
                                </div>
								<button class="btn btn-outline btn-warning" type="submit">Submit</button>
                            </form> 
                </div>
 			</div>
 	</div>
 	</div>