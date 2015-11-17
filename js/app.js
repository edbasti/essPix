'use strict';
var app = angular.module('example366', ['ngAnimate', 'ngTouch']);
angular.module('example366').controller('MainCtrl', function ($scope, $http) {
    
    
    $scope.photos= [];
    $http.get('php/getFiles.php').success(function(data) { 
        console.log("success!");
        $scope.photos = data.photos;
        console.log(data.photos);
    });    

    // initial image index
    $scope._Index = 0;
 
    // if a current image is the same as requested image
    $scope.isActive = function (index) {
        return $scope._Index === index;
    };
 
    // show prev image
    $scope.showPrev = function () {
        $scope._Index = ($scope._Index > 0) ? --$scope._Index : $scope.photos.length - 1;
    };
 
    // show next image
    $scope.showNext = function () {
        $scope._Index = ($scope._Index < $scope.photos.length - 1) ? ++$scope._Index : 0;
    };
 
    // show a certain image
    $scope.showPhoto = function (index) {
        $scope._Index = index;
    };
});