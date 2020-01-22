$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
})
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
// jQuery.validator.setDefaults({
//     debug: true,
//     success: "valid"
// });
// $( "#myform" ).validate({
//     rules: {
//         exampleInputEmail1: {
//             required: true,
//             email: true
//         },
//         exampleInputPassword1: {
//             required: true,
//             password: true
//         }
//
//     }
// });
        $( ".login" ).on( "click", function() {
        let email = $('#exampleInputEmail1').val();
        console.log(email);
        let password = $('#exampleInputPassword1').val();
            console.log(password);
        $.ajax ({
            url: "/login",
            type:'POST',
            data: {
                userEmail: email,
                userPassword: password,
            },
            success: function(data){
                console.log(alert(data));
                // $.ajax({
                    // url:,
                // });
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

    //$(itemBox).click(addToLocal());
    $('.addCart').on('click', e => {
        count++;
        var cartData = getCartData() || {},
        ItemId = e.target.dataset.id,
        ItemName = e.target.dataset.name,
        ItemPrice = e.target.dataset.price;
        //cartData[ItemId] = [ItemName, ItemPrice, 1];
        if(cartData.hasOwnProperty(ItemId)){
            cartData[ItemId][2] += 1;
        } else {
            cartData[ItemId] = [ItemName, ItemPrice, 1];
        }
        setCartData(cartData);
        return false;
    });

    $('.simpleCart_empty').on('click', () => {
        count = 0;
        localStorage.clear();
    });

