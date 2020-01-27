$(document).ready(function(c) {
    $('.close1').on('click', function(c){
        $('.cart-header').fadeOut('slow', function(c){
            $('.cart-header').remove();
        });
    });
    $('.close2').on('click', function(c){
        $('.cart-header2').fadeOut('slow', function(c){
            $('.cart-header2').remove();
        });
    });
});
// /*        jQuery.validator.setDefaults({
//             debug: true,
//             success: "valid"
//         });
//         $( "#myform" ).validate({
//             rules: {
//                 exampleInputEmail1: {
//                     required: true,
//                     email: true
//                 },
//                 exampleInputPassword1: {
//                     required: true,
//                     password: true
//                 }
//
//             }
//         });*/

        $( ".login" ).on( "click", function() {
        let email = $('#exampleInputEmail1').val();
        let password = $('#exampleInputPassword1').val();
        $.ajax({
            url: "/login",
            type:'POST',
            data: {
                userEmail: email,
                userPassword: password,
            },
            success: function(data){

            },
            error: function() {
                alert("Error");
            }
        });
    });

    function getCartData() {
        return JSON.parse(localStorage.getItem('cart'));
    }

    function setCartData(o) {
        localStorage.setItem('cart', JSON.stringify(o));
        return false;
    }

    var ItemIdArr = [];
    $('.addCart').on('click', e =>{
        var cartData = getCartData() || {},
            // i = 0;
        ItemId = e.target.dataset.id,
        ItemName = e.target.dataset.name,
        ItemPrice = e.target.dataset.price;
        if(cartData.hasOwnProperty(ItemId)){
            cartData[ItemId][2] += 1;
        } else {
            cartData[ItemId] = [ItemName, ItemPrice, 1];

            ItemIdArr.push(ItemId);
        }
        setCartData(cartData);
        return false;
    });

    $('.simpleCart_empty').on('click', () => {
        count = 0;
        localStorage.clear();
    });

    $('.showCart').on('click', () =>{
        // for(let i= 0;i<ItemIdArr.length; i++) {
            console.log(ItemIdArr);
            //console.log(JSON.parse(localStorage.getItem('cart'))[ItemIdArr][i]);
        // }
    });
