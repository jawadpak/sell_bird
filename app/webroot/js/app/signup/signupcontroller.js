sellBird.controller('signupController',['$scope','$state','$timeout','RestApiservice','usSpinnerService', function($scope,$state,$timeout,RestApiservice,usSpinnerService){
	
	$scope.signup = {
		name:"",
		email:"",
		username:"",
		password:"",
		confirmpassword:"",
		city:"",
		city_list:[],
		num_1:"",
		num_2:"",
		total_num:""

	};

	$scope.page = function(){

		$timeout(function() {
					usSpinnerService.spin('spinner-signup');
		}, 0);

		RestApiservice.getData('services/getCity',{},function(response){
			
			if(angular.isDefined(response['city_data'])){
				$scope.signup.city_list = response['city_data'];
				console.log($scope.signup.city_list);
			}

			$timeout(function() {
				usSpinnerService.stop('spinner-signup');
			}, 1500);
			
		});

		$scope.signup.num_1 = $scope.randomNumber();
		$scope.signup.num_2 = $scope.randomNumber();
		$scope.signup.total_num = $scope.signup.num_1 + $scope.signup.num_2;
	};

	$scope.randomNumber = function(){

		return Math.floor((Math.random() * 10) + 1); 
	}

	$scope.page();
}]);