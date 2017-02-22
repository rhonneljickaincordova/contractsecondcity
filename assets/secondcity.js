  angular.module('secondCityApp',['ui.bootstrap', 'ui.bootstrap.datetimepicker'])
      .controller('secondCityCtrl', function ($scope,$http,$window){
  
          var url = window.location.href;
          var url_id = url.substring(url.lastIndexOf('?') + 1);
          if(url_id > 0){

            var data =  angular.toJson({
              id : url_id
            });

            $scope.file =  $http({
              
              method  : 'POST',
              url     : 'php/get_file.php',
              data    :  data, //forms user object
              headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
              })
              .success(function(data) 
              {
                 angular.forEach(data,function(file){

                  $scope.to = file.client_to;
                  $scope.email = file.client_email;
                  $scope.address = file.client_address;
                  $scope.work_address = file.client_work_address;
                  $scope.date = new Date(file.client_date);
                  $scope.phone1 = file.client_phone_1;
                  $scope.phone2 = file.client_phone_2;
                  $scope.company_from = file.company_from;
                  $scope.company_email = file.company_email;
                  $scope.company_phone1 = file.company_phone;
                  $scope.project_title = file.project_title;
                  $scope.project_description = file.project_description;
                  $scope.payment_agree_sum = file.payment_sum;
                  $scope.payment_date_contract = file.payment_data_cotract;
                  $scope.payment_amount = file.payment_amount;
                  $scope.payment_on = file.payment_on;
                  $scope.payment_balance = file.payment_balance;

                });

              });

          }

          $scope.onchangeDate = function($date){
            $scope.temp_date = $date.toLocaleDateString();
          }

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
              // $scope.Date = new Date(year, month, day);
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

          $scope.onShowModal = function(){
            window.location = "history.html";
          }

          $scope.save_contract_information = function(){
                  

            var data =  angular.toJson({
              to   : $scope.to ,
              email :   $scope.email, 
              address :   $scope.address ,
              work_address :    $scope.work_address ,
              client_date:    $scope.temp_date ,
              phone1:    $scope.phone1, 
              phone2 :    $scope.phone2 ,
              company_from:    $scope.company_from ,
              company_email:    $scope.company_email, 
              company_phone1:    $scope.company_phone1, 
              project_title:    $scope.project_title, 
              project_description:    $scope.project_description, 
              payment_agree_sum:    $scope.payment_agree_sum, 
              payment_date_contract:    $scope.payment_date_contract, 
              payment_amount:    $scope.payment_amount, 
              payment_on  :  $scope.payment_on, 
              payment_balance:    $scope.payment_balance 
            });
            $scope.file =  $http({
              method  : 'POST',
              url     : 'php/insert_file.php',
              data    :  data, //forms user object
              headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
              })
              .success(function(data) 
              {
              });

          }
  
  });
  
