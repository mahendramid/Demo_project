<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body >

<div ng-app="myapp" ng-controller="myctrl">
  <form>
     Name: <input type="text" ng-model="formdate.name" name="firstname" id="p"><br>
	Mobile-no: <input type="number" ng-model="formdate.mobile"><br>
	Email: <input type="email" ng-model="formdate.email"><br><br>
	<input type="submit" value="Add-data" ng-click="addvalue();" >
  </form>


</div>
<script>
var app = angular.module("myapp", []); 
app.controller("myctrl", function($scope,$http) 
{  
						//var a=document.getElementById("p
   $scope.formdate={name:'',mobile:'',email:''};
   $scope.addvalue=function()
   {
                      //$scope.mob=$scope.mobile_number;
      //console.log($scope.formdate);   
         

		 
   /*   $http.post("insert.php", 
	  {
		  'data':$scope.formdate
	
	  })*/
	    var postData = 'myData='+JSON.stringify($scope.formdate);
	  $http({
			method : 'POST',
			url : 'insert.php',
			data: postData,
			headers : {'Content-Type': 'application/x-www-form-urlencoded'}  

	})   
	  
     .success(function(data,status,headers,config)
	 {
        console.log("Data Inserted Successfully")
         $scope.showvalue();
    
      })
		$scope.formdate={name:'',mobile:'',email:''};
   }
               
    $scope.addvalue=function()
    {
               $http({
                     method : 'POST',
                     url : 'select.php',
                     //data: postData,
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'}
                     
                     })
               .success(function(data,status,headers,config)
                        {
                        console.log(data)
                        
                        
                        })
               
    }
               
     
});




</script>


</body>
</html>


