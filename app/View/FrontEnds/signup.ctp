<div class="row" ng-controller="signupController">
  <div class="col-lg-12">
     <h1 class="page-header"> SIGN UP</h1>
 </div>
 <div class="col-lg-12">
     <div class="panel panel-default">
        <div class="panel-heading">
         SIGN UP 
         <span us-spinner="{radius:30, width:8, length: 16}" spinner-key="spinner-signup"></span>
     </div>
     <div class="panel-body">
         <form role="form" name="form" class="form-horizontal"  ng-submit="form.$valid && signupUser();">
            
                <div class="form-group" ng-class="{'has-error':(form.name.$error.required || form.name.$error.minlength) && !form.name.$pristine}">
                    <label class="col-xs-2 control-label">Name:</label>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" name="name" ng-model="signup.name" ng-minlength="3" required>

                        <p ng-show="form.name.$error.required && !form.name.$pristine" class="help-block">Name is required.</p>
                        <p ng-show="form.name.$error.minlength && !form.name.$pristine" class="help-block">Name is too short.</p>
                    </div>
                </div>
                <div class="form-group" ng-class="{'has-error':(form.email.$error.required || form.email.$error.email) && !form.email.$pristine}">
                    <label class="col-xs-2 control-label">Email:</label>
                    <div class="col-xs-5">
                        <input type="email" class="form-control" ng-model="signup.email" name="email" required/>
                        <p ng-show="form.email.$error.required && !form.email.$pristine" class="help-block">Email is required.</p>
                        <p ng-show="form.email.$error.email && !form.email.$pristine" class="help-block">Email is not valid.</p>
                    </div>
                </div>
                <div class="form-group" ng-class="{'has-error':(form.username.$error.required || form.username.$error.minlength) && !form.username.$pristine}">
                    <label class="col-xs-2 control-label">User Name:</label>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" name="username" ng-model="signup.username" ng-minlength="4" required>

                        <p ng-show="form.username.$error.required && !form.username.$pristine" class="help-block">User Name is required.</p>
                        <p ng-show="form.username.$error.minlength && !form.username.$pristine" class="help-block">User Name is too short.</p>
                    </div>
                </div>
                <div class="form-group" ng-class="{'has-error':(form.password.$error.required || form.password.$error.minlength) && !form.password.$pristine}">
                    <label class="col-xs-2 control-label">Password:</label>
                    <div class="col-xs-5">
                        <input type="password" class="form-control" name="password" ng-model="signup.password" ng-minlength="3" required>

                        <p ng-show="form.password.$error.required && !form.password.$pristine" class="help-block">Password is required.</p>
                        <p ng-show="form.password.$error.minlength && !form.password.$pristine" class="help-block">Password at least 8 character</p>
                    </div>
                </div>

                <div class="form-group" ng-class="{'has-error': form.city.$error.required && !form.city.$pristine}" required>
                    <label class="col-xs-2 control-label">City:</label>
                    <div class="col-xs-5"> 
                        <select  name="city" class="form-control" ng-model="signup.city" required>
                          <option value="">-</option>
                          <option ng-repeat="v in signup.city_list" value="{{v.City.Id}}" title="{{v.City.name}}"
       >{{v.City.name}}</option>
                        </select>
                        <p ng-show="form.city.$error.required && !form.city.$pristine" class="help-block">City is required.</p>
                    </div>
              </div>
              
           <button class="btn btn-outline btn-warning" type="submit"> Submit </button>
       </form> 
   </div>
</div>
</div>
</div>