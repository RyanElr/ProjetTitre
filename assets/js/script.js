    // When the user scrolls down 20px from the top of the document, show the button


// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
$(document).ready(function () {
    $("#myBtn").click(function () {
        $("#myModal").modal();
    });
});
$(document).ready(function () {
    $('.js-scrollTo').on('click', function () {
        var page = $(this).attr('href');
        var speed = 800;
        $('html, body').animate({scrollTop: $(page).offset().top}, speed);
        Go
        return false;
    });
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 700) {
        document.getElementById("btn7").style.display = "block";
    } else {
        document.getElementById("btn7").style.display = "none";
    }
}
});
$('#accueil1').click(function () {
    $('.luminairenaruto').hide();
    $('.luminairedbz').hide();
    $('.luminaireOnePiece').hide();
    $('.figurinedbz').hide();
    $('.figurineNaruto').hide();
    $('.figurineOnePiece').hide();
});
$('#linkPromo').click(function () {
    alert('Pas de promo actuellement')
});
$('#LinkDragon').click(function () {
    $('.luminairedbz').show();
    $('.luminairenaruto').hide();
    $('.luminaireOnePiece').hide();
});
$('#LinkNaruto').click(function () {
    $('.luminairenaruto').show();
    $('.luminairedbz').hide();
    $('.luminaireOnePiece').hide();
});
$('#LinkOnePiece').click(function () {
    $('.luminairenaruto').hide();
    $('.luminairedbz').hide();
    $('.luminaireOnePiece').show();
});
$('#naruto2').click(function () {
    $('.figurinedbz').hide();
    $('.figurineNaruto').show();
    $('.figurineOnePiece').hide();
});
$('#onepiece2').click(function () {
    $('.figurineOnePiece').show();
    $('.figurinedbz').hide();
    $('.figurineNaruto').hide();
});
$('#dragon2').click(function () {
    $('.figurineNaruto').hide();
    $('.figurineOnePiece').hide();
    $('.figurinedbz').show();
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
            if (!(index in $scope.qantities)) {
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
        $scope.qantityChange = function (index, val) {
            if ($scope.qantities[index] + val <= 0)
            {
                return;
            }
            $scope.qantities[index] += val;
            $scope.totalCalc();
            $scope.totalQantityCalc();
        };
        $scope.totalCalc = function () {
            $scope.total = 0;
            for (var key in $scope.qantities) {
                $scope.total += $scope.items[key].price * $scope.qantities[key];
            }
        };
        $scope.totalQantityCalc = function () {
            $scope.totalQantity = 0;
            for (var key in $scope.qantities) {
                $scope.totalQantity += $scope.qantities[key];
            }
        };
        $scope.changeFilter = function (newFilter) {
            $scope.itemsCategories = newFilter;
        }
        $scope.showModal = function () {
            $('#myModal').modal('show');
        }
    }]);
myShop.controller('infoController', ['$scope', function ($scope) {
        $scope.id = $routeParams.id;
    }]);
function ScrollTo(element) {
  var barHeight = $('#bar').height();
  var divPosition = $(element).position().top;
  window.scroll({
    top: (divPosition - barHeight)
  });
}

var windowC = $(window);

function CheckIfInView() {
  var animationElements = $('.animation-element');
  var windowHeight = windowC.height();
  var windowTopPosition = windowC.scrollTop();
  var windowBottomPosition = (windowTopPosition + windowHeight);
  $.each(animationElements, function() {
    var element = $(this);
    var elementHeight = element.outerHeight();
    var elementTopPosition = element.offset().top;
    var elementBottomPosition = (elementTopPosition + elementHeight);

    //check to see if this current container is within viewport
    if ((elementBottomPosition >= windowTopPosition) &&
      (elementTopPosition <= windowBottomPosition)) {
      element.removeClass('o-0');
      element.addClass('in-view');
    }
  });
}
windowC.on('scroll resize load', CheckIfInView);
windowC.trigger('scroll');