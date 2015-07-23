var blog = angular.module('blogApp',[]);


blog.controller('blogCtrl', function ($scope,$http){
	
		//$scope.socialmedia = [{'name':'twitter'},{'name':'facebook'}];
		
		$scope.socialmedia = [];
		
		$http({method:'GET', url:'feed.php', params:[{'cat_nbr':'2'}]})
			.success(function(data, status)
				{
					$scope.articles = data;
					$scope.status = status;
					
					console.log($scope.articles);
				})
	
});