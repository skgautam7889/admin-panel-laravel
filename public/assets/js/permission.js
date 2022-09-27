$(document).on('submit', '#new-permission', function (e) {
    e.preventDefault();
    let first_name = $('.first-name').val();
    let last_name = $('.last-name').val();
    let url = $('.new-permission-url').val();
    let permissionData = new FormData($('#new-permission')[0]);
    console.log(permissionData);
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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: url,
        data: permissionData,
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