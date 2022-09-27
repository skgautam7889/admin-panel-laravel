$(document).on('submit', '#new-user-register', function (e) {
    e.preventDefault();
    let first_name = $('.first-name').val();
    let last_name = $('.last-name').val();
    let url = $('.user-register-url').val();
    let userData = new FormData($('#new-user-register')[0]);
    // if (!first_name) {
    //     alert("Please Enter Your First Name !");
    //     $('.first-name').css('border', '2px solid red');
    //     return false;
    // }
    // if (!last_name) {
    //     $('.last-name').css('border', '2px solid red');
    //     return false;
    // }

    // const userData = {
    //     first_name: first_name,
    //     last_name: last_name,
    // }
    console.log("userData==>", userData);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: url,
        data: userData,
        contentType: false,
        processData: false,
        success: function (response) {
            console.log("response==>", response)
        }
    })
})

function checkInput() {
    console.log("dd");
}