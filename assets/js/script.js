
// Quand l'utilisateur utilise ce bouton ça l'envoie vers le haut de la page

function topFunction() {
    document.documentElement.scrollTop = 0;
}

//Modal du panier

$(document).ready(function () {
    $("#myBtn").click(function () {
        $("#myModal").modal();
    });
});  
var panier = 0;
$('.add-to-cart').click(function() {
    panier++;
$('#panerInc').val(panier);
 });
//Modal pour supprimer un utilisateur

$(document).ready(function () {
    $("#removeUser").click(function () {
        $("#userModal").modal();
    });
});

//Modal pour modifier un utilisateur

$(document).ready(function () {
    $("#modifUser").click(function () {
        $("#userModifModal").modal();
    });
});
$(document).ready(function () {
    $("#modifUserType").click(function () {
        $("#userRoleModal").modal();
    });
});

//Bouton permettant de scroll à une certaine vitesse et à partir d'un certain endroit de la page

$(document).ready(function () {
    $('.js-scrollTo').on('click', function () {
        var page = $(this).attr('href');
        var speed = 800;
        $('html, body').animate({scrollTop: $(page).offset().top}, speed);
        Go
        return false;
    });
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.documentElement.scrollTop > 700 && window.innerWidth > 1200) {
            document.getElementById("btn7").style.display = "block";
            var speed = 800;
        } else {
            document.getElementById("btn7").style.display = "none";
        }
    }
});

// Fonction créant une alerte permettant d'avoir l'information que l'inscription a bien été effectuée

function alertNewUser() {
    alert(" Vous êtes inscris ");
}

//////////////////// SHOPPING ////////////////////
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+d.toUTCString();
    
  // règle le pb des caractères interdits
  if ('btoa' in window) {
    cvalue = btoa(cvalue);
  }
    
  document.cookie = cname + "=" + cvalue + "; " + expires+';path=/';
}

function saveCart(inCartItemsNum, cartArticles) {
  setCookie('inCartItemsNum', inCartItemsNum, 5);
  setCookie('cartArticles', JSON.stringify(cartArticles), 5);
};

 $('.add-to-cart').click(function () {
    var id = $(this).attr('data-id');
    var name = $(this).attr('data-title');
    var price = $(this).attr('data-price');
    var selectq = '<select id="qt"><option selected value="1">' + 1 + '</option><option value="2">' + 2 + '</option><option value="3">' + 3 + '</option><option value="4">' + 4 + '</option></select>';
    var qt = parseInt($('#qt').val());
    var totalprice = parseInt(price) * parseInt(qt) + '€';
   $('.afficherPanier').append('<tr><td>' + id + '</td><td>' + name + '</td><td>' + price + '€</td><td>' + selectq + '</td><td>' + totalprice + '</td></tr>');
});

