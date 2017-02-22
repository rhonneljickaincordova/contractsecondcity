  angular.module('secondCityApp',['ui.bootstrap', 'ui.bootstrap.datetimepicker'])
      .controller('historyCtrl', function ($scope,$http,$window){
  
          $scope.sucecss_message = false;
          $scope.open1 = function() {
              $scope.popup1.opened = true;
          };
  
          $scope.open2 = function() {
              $scope.popup2.opened = true;
          };
  
          $scope.open3 = function() {
              $scope.popup3.opened = true;
          };
  
          $scope.setDate = function(year, month, day) {
              $scope.Date = new Date(year, month, day);
          };
  
          $scope.popup1 = {
              opened: false
          };
  
          $scope.popup2 = {
              opened: false
          };
  
          $scope.popup3 = {
              opened: false
          };

          $scope.get_list = function(){

            var data =  angular.toJson({
              id : ''
            });

            $scope.file =  $http({
              
              method  : 'POST',
              url     : 'php/get_file.php',
              data    :  data, //forms user object
              headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
              })
              .success(function(data) 
              {
                $scope.contract_list = data;
              });

            }
            $scope.get_list();

            $scope.onClickHistoryData = function($id){
              window.location = "index.html?"+$id;
            }
            
            $scope.onDeleteContractHistory = function($id){
              $scope.deleted_id = $id;
              $("#delete_modal").modal('show');
            }

            $scope.deleteContract = function(){

              var data =  angular.toJson({
                id : $scope.deleted_id
              });

              $scope.file =  $http({
                
                method  : 'POST',
                url     : 'php/delete_file.php',
                data    :  data, //forms user object
                headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                })
                .success(function(data) 
                {
                  if(data == '0'){
                    $scope.deleted_id = '';
                    $scope.get_list();
                    $scope.sucecss_message = true;
                    $("#delete_modal").modal('hide');

                  }else{

                  }
                });
            }

  
  });
  
