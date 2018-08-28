
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});$(document).ready(function() {         $('.js-scrollTo').on('click', function() {
  var page = $(this).attr('href');
  var speed = 1500;
  $('html, body').animate( { scrollTop: $(page).offset().top}, speed );Go
  return false;         });
});
$('#accueil1').click(function(){
  $('.luminairenaruto').hide();
  $('.luminairedbz').hide();
  $('.luminaireOnePiece').hide();
  $('.figurinedbz').hide();
  $('.figurineNaruto').hide();
  $('.figurineOnePiece').hide();
});
$('#linkAccueil').click(function(){
  $('.coqueSamsung').show();
  $('.coqueSony').show();
  $('.coqueIphone').show();
  $('.film').show();
  $('.chargeurCable').show();
});
$('#linkPromo').click(function(){
  alert('Pas de promo actuellement')
});
$('#LinkDragon').click(function(){
  $('.luminairedbz').show();
  $('.luminairenaruto').hide();
  $('.luminaireOnePiece').hide();
});
$('#LinkNaruto').click(function(){
  $('.luminairenaruto').show();
  $('.luminairedbz').hide();
  $('.luminaireOnePiece').hide();
});
$('#LinkOnePiece').click(function(){
  $('.luminairenaruto').hide();
  $('.luminairedbz').hide();
  $('.luminaireOnePiece').show();
});
$('#naruto2').click(function(){
  $('.figurinedbz').hide();
  $('.figurineNaruto').show();
  $('.coqueIphone').hide();
  $('.film').hide();
  $('.figurineOnePiece').hide();
});
$('#onepiece2').click(function(){
  $('.figurineOnePiece').show();
  $('.figurinedbz').hide();
  $('.figurineNaruto').hide();
});
$('#dragon2').click(function(){
  $('.coqueSamsung').hide();
  $('.figurineNaruto').hide();
  $('.figurineOnePiece').hide();
  $('.figurinedbz').show();
  $('.chargeurCable').hide();
});
myShop.run(function ($rootScope, $http) {
  $rootScope.qantities = {};
  $rootScope.total = 0;
  $rootScope.totalQantity = 0;
  $rootScope.itemsCategories = '';
  $http.get('../index.html').then(function (response) {
    $rootScope.items = response.data;
  });

});
myShop.controller('myContent', ['$scope', function ($scope) {
  $scope.addToBasket = function (index) {
    if(!(index in $scope.qantities)) {
      $scope.qantities[index] = 1;
    } else {
      $scope.qantities[index]++;
    }
    $scope.totalCalc();
    $scope.totalQantityCalc();
  };
  $scope.erase = function (index) {
    delete $scope.qantities[index];
    $scope.totalCalc();
    $scope.totalQantityCalc();
  };
  $scope.qantityChange = function(index, val) {
    if($scope.qantities[index] + val <= 0)
    {
      return;
    }
    $scope.qantities[index] += val;
    $scope.totalCalc();
    $scope.totalQantityCalc();
  };
  $scope.totalCalc = function(){
    $scope.total = 0;
    for (var key in $scope.qantities) {
      $scope.total += $scope.items[key].price * $scope.qantities[key];
    }
  };
  $scope.totalQantityCalc = function(){
    $scope.totalQantity = 0;
    for (var key in $scope.qantities) {
      $scope.totalQantity += $scope.qantities[key];
    }
  };
  $scope.changeFilter = function(newFilter){
    $scope.itemsCategories = newFilter;
  }
  $scope.showModal = function(){
    $('#myModal').modal('show');
  }
}]);
myShop.controller('infoController', ['$scope', function ($scope){
  $scope.id = $routeParams.id;
}]);
