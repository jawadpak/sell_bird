sellBird.controller('signupController', ['$scope', '$state', '$timeout', 'RestApiservice', 'usSpinnerService', function($scope, $state, $timeout, RestApiservice, usSpinnerService) {

	$scope.signup = {
		name: "",
		email: "",
		username: "",
		password: "",
		city: "",
		city_list: [],
		num_1: "",
		num_2: "",
		total_num: ""

	};

	$scope.page = function() {

		$timeout(function() {
			usSpinnerService.spin('spinner-signup');
		}, 0);

		RestApiservice.getData('services/getCity', {}, function(response) {

			if (angular.isDefined(response['city_data'])) {
				$scope.signup.city_list = response['city_data'];
			}

			$timeout(function() {
				usSpinnerService.stop('spinner-signup');
			}, 1500);

		});

		$scope.signup.num_1 = $scope.randomNumber();
		$scope.signup.num_2 = $scope.randomNumber();
		$scope.signup.total_num = $scope.signup.num_1 + $scope.signup.num_2;
	};

	$scope.randomNumber = function() {

		return Math.floor((Math.random() * 10) + 1);
	}

	$scope.signupUser = function() {
		var postdata = {
			"User": {
				'name': $scope.signup.name,
				'email': $scope.signup.email,
				'user': $scope.signup.username,
				'password': $scope.signup.password,
				'city_id': $scope.signup.city
			}
		};

		$timeout(function() {
			usSpinnerService.spin('spinner-signup');
		}, 0);

		RestApiservice.getPostData('services/addSignup', {}, postdata, function(response) {
			console.log(response);
			$timeout(function() {
				usSpinnerService.stop('spinner-signup');
			}, 1500);

		});
	};

	$scope.page();
}]);