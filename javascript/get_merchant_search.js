/**
 * Jquery code to make a dcom rest api call on merchant search.
 * User: sliu & Nick Eden
 * Date: 4/26/14
 * Time: 12:07 PM
 * To change this template use File | Settings | File Templates.
 */
/**
 * You may need to include <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 * in your html file.
 */
$.getJSON( "https://sandbox.delivery.com/merchant/search/delivery",
        {
            client_id: "MDlkMzY3Nzg3MjU1ZjRkNmY4OWZjNDA0NjBjMTI0MWZl",
            address: "199 Water Street, New York, NY, United States"
        }
    )
    .done(function( results ) {
        console.log("success!");
        console.log( results );
    })
    .fail(function( results ) {
        console.log("fail");
        console.log(results);
    });