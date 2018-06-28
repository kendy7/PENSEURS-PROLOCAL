function readRecords() {
    $.get("../cancel_orders.php", {},
	function (data, status) 
	{
	 //url: $('body').data('abs_client_path')+'/paypal-pay.php',
        $(".records_content").html(data);

    });
}

function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});
