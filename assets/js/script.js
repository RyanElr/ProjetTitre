function ImgChange(id, img){
  document.getElementById(id).src = img;
}
$(document).ready(function(){
  $("#myBtn").click(function(){
      $("#myModal").modal();
  });
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
$('#linkCoque').click(function(){
  $('.coqueSamsung').show();
  $('.coqueSony').show();
  $('.coqueIphone').show();
  $('.film').hide();
  $('.chargeurCable').hide();
});
$('#linkSamsung').click(function(){
  $('.coqueSamsung').show();
  $('.coqueSony').hide();
  $('.coqueIphone').hide();
  $('.film').hide();
  $('.chargeurCable').hide();
});
$('#linkIphone').click(function(){
  $('.coqueSamsung').hide();
  $('.coqueSony').hide();
  $('.coqueIphone').show();
  $('.film').hide();
  $('.chargeurCable').hide();
});
$('#linkSony').click(function(){
  $('.coqueSamsung').hide();
  $('.coqueSony').show();
  $('.coqueIphone').hide();
  $('.film').hide();
  $('.chargeurCable').hide();
});
$('#linkAccessoire').click(function(){
  $('.coqueSamsung').hide();
  $('.coqueSony').hide();
  $('.coqueIphone').hide();
  $('.film').show();
  $('.chargeurCable').show();
});
$('#linkFilm').click(function(){
  $('.coqueSamsung').hide();
  $('.coqueSony').hide();
  $('.coqueIphone').hide();
  $('.film').show();
  $('.chargeurCable').hide();
});
$('#linkChargeurCable').click(function(){
  $('.coqueSamsung').hide();
  $('.coqueSony').hide();
  $('.coqueIphone').hide();
  $('.film').hide();
  $('.chargeurCable').show();
});
//fin js audrey
var timeout;

$('#myBtn').on({
  mouseenter: function() {
    $('.modal-dialog').show();
  },
  mouseleave: function() {
    timeout = setTimeout(function() {
      $('.modal-dialog').hide();
    }, 20000);
  }
});

// laisse le contenu ouvert à son survol
// le cache quand la souris sort
$('#modal-dialog').on({
  mouseenter: function() {
    clearTimeout(timeout);
  },
  mouseleave: function() {
    $('.modal-dialog').hide();
  }
});
var qantity = {};

$(function() {
  function addElementToPage(array){
    $('.row').empty();
    for(var index = 0; index < array.length; index++){
      createCard(array[index], index);
    }
  }

  function addElementToPageWithCategory(array, category){
    $('.row').empty();
    for(var index = 0; index < array.length; index++){
      if(array[index].category == category){
        createCard(array[index], index);
      }
    }
  }

  function createCard(element, index){
    var starsCount = 0;
    var stars = '<p>';
    for(starsCount; starsCount < element.stars; starsCount++)
    {
      stars += '<span class="fas fa-star checked"></span>';
    }
    for(starsCount; starsCount < 5; starsCount++)
    {
      stars += '<span class="fas fa-star"></span>';
    }
    stars += '(' + element.stars + ')</p>';

    $('.baseContent').append('<div class="col-lg-3 col-md-6 col-12">'
    + '<div class="card w-100">'
    + '<img class="card-img-top" src="assets/image/'+ element.imgcoque+ '" alt="' + element.name + '">'
    + '<div class="card-body">'
    + '<h4 class="card-title">' + element.name + '</h4>'
    + stars
    + '<p class="card-text" data-toggle="tooltip" data-placement="bottom" title="'+ element.desc + '">'+ element.desc + '</p>'
    + '<p>Prix: ' + element.price + '€</p>'
    + '<a class="btn btn-primary" id="addShop' + index + '">Ajouter au panier</a>'
    + '</div>'
    + '</div>'
    + '</div>');
    $('#addShop' + index ).click(function(){
      var id = $(this).attr('id').split('addShop')[1];
      if(!(id in qantity)){
        qantity[id] = 1;
      } else {
        qantity[id]++;
      }
      totalPrice();
    });
  }

  addElementToPage(items);

  $('.showModalWindow').click(function(){
    $('.modalBody').empty();
     if(Object.keys(qantity).length > 0) {
    $.each(qantity, function(key, value){
      var backgroundColor = (key%2 == 1) ? 'darkgrey' : 'lightgrey';
      $('.modalBody').append('<div class=" my-0 row shoppingCardContent ' + backgroundColor + '" id="remove' + key + '">'
      + '<div class="pt-1 col-6"><p>nom : ' + items[key].name + '</p></div>'
      + '<div class="col-6"><p>prix : ' + items[key].price + '€</p></div>'
      + '<div class="col-12"><label>quantité : </label><input class="w-100" type="number" value="' + value + '" id="changeShop' + key + '"></input></div>'
      + '<div class="pb-2 col-12"><button class="w-100" id="toZero' + key + '">Supprimer</button></div>'
      + '</div>');
      totalPrice();
      $('#changeShop' + key).on('input', function(){
        var itemQantity = parseFloat($(this).val());
        if(isNaN(itemQantity)){
          $(this).val(qantity[key]);
        } else if(itemQantity == 0){
          delete qantity[key];
          $('#remove' + key).remove();
        } else if(key in qantity){
          qantity[key] = itemQantity;
        }
        totalPrice();
      });
      $('#toZero' + key).click(function(){
        delete qantity[key];
        $('#remove' + key).remove();
        totalPrice();
        if (Object.keys(qantity).length == 0){
          $('.modalFooter').empty();
          $('.modalBody').append('<p class="textEmptyMarket">Votre panier est vide !</p>');
          }
      });
    });
  } else {
    $('.modalBody').append('<p class="textEmptyMarket">Votre panier est vide !</p>');
  }
  });

  function totalPrice(){
    var totalPriceItems = 0;
    $.each(qantity, function(key, value){
      totalPriceItems += value * items[key].price;
    });
    $('.modalFooter').empty();
    $('.modalFooter').append('<p>total : ' + totalPriceItems.toFixed(2) + '€</p>'
    + '<button class="w-100">Payer</button>');
    $('.showModalWindow').empty();
    $('.showModalWindow').append('<span class="fas fa-shopping-basket"></span> Mon Panier : ' + totalPriceItems.toFixed(2) + '€ (' + totalItem() + ')');
  }

  function totalItem(){
    var count = 0;
    $.each(qantity, function(key, value){
      count += value;
    });
    return count;
  }

  $('#all').click(function(){
    addElementToPage(items);
  });

  $('#imgcoque').click(function(){
    addElementToPageWithCategory(items, 'imgcoque');
  });

  $('#livingRoomCarpet').click(function(){
    addElementToPageWithCategory(items, 'tapisDeSalon');
  });
  $(function(){
    $('.fa-arrow-alt-circle-up').click(function(){
        $("html, body").animate({scrollTop: 0},"slow");
    });
});
}); 
