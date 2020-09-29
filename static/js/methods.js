// var script = document.createElement('script');
// script.src = '/static/js/vendors/jquery.js';
// script.type = 'text/javascript';
// document.getElementsByTagName('head')[0].appendChild(script);

// function make_ajax_request(ajax_type='POST', ajax_async=false, ajax_global=false, ajax_url='/server/api.php', query_body) {
//     var response = function (body=query_body) {
//         var tmp = null
        
//         $.ajax({
//             type: 'POST',
//             async: false,
//             global: false,
//             url: '/server/api.php',
//             dataType: 'json',
//             contentType: 'application/json',
//             data: JSON.stringify(body),

//             success: function(response) {
//                 tmp = response
//             }
//         })
//         return tmp
//     }()
//     return response
// }

function get_product() {
    var response = function () {
        var tmp = null
        
        $.ajax({
            type: 'POST',
            async: false,
            global: false,
            url: '/server/api.php',
            dataType: 'json',
            contentType: 'application/json',
            data: JSON.stringify(
                {'query': 'get_product'}
            ),

            success: function(response) {
                tmp = response
            }
        })
        return tmp
    }()
    return response
}


function add_product(title, photo, description, price, currency) {
    
}