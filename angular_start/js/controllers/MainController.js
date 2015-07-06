app.controller('MainController', ['$scope', 'matches', function($scope, matches) { 

  $scope.schedule = matches.success(function(data) { 
  $scope.schedule = data; 

  console.log(data);
  console.log(data.matches.length);
  console.log(data.matches[0].tierBig);
  
  var temp_num = 1;
  
  for(var i = 0; i < data.matches.length; i++){
  	 if(data.matches[i].tierBig == temp_num){
  	 	console.log(temp_num);
  	 	temp_num++;
  	 }
  }


  });	

	$scope.apps = [ 
	  { 
	    
	    title: 'MOVE', 
	    developer: 'MOVE, Inc.', 
	    price: 0.99 
	  }, 
	  { 
	    
	    title: 'Shutterbugg', 
	    developer: 'Chico Dusty', 
	    price: 2.99 
	  },
	  {
	    
	    title: 'Gameboard',
	    developer: 'Armando P.',
	    price: 1.99
	  },
	  {
	   
	    title: 'Forecast',
	    developer: 'Forecast',
	    price: 1.99
	  }
	];
}]);