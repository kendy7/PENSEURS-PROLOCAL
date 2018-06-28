



// Add Record
// function addRecord() {
    // // get values
    // var first_name = $("#first_name").val();
    // var last_name = $("#last_name").val();
    // var email = $("#email").val();

    // // Add record
    // $.post("ajax/addRecord.php", {
        // first_name: first_name,
        // last_name: last_name,
        // email: email
    // }, function (data, status) {
        // // close the popup
        // $("#add_new_record_modal").modal("hide");

        // // read records again
        // readRecords();

        // // clear fields from the popup
        // $("#first_name").val("");
        // $("#last_name").val("");
        // $("#email").val("");
    // });
// }

// READ records
function readRecordInfos() {
    $.get("readinformation.php", {}, function (data, status) {
        $(".records_contentInfo").html(data);
    });
}
function readRecords() {
    $.get("readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}

function readRecordas() {
    $.get("readPurchase.php", {}, function (data, status) {
        $(".records_content1").html(data);
		//
    });
	//readRecordas();
}

function readRecordOrder() {
    $.get("read_archive.php", {}, function (data, status) {
        $(".records_content2").html(data);
		//
    });
}


function DeleteUser(id) {
    var conf = confirm("Voulez-vous vraiment annuler cette commande?");
    if (conf == true) {
        $.post("deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}
function DeleteArchive(id) {
    var conf = confirm("Voulez-vous vraiment supprimer cet element de l''?");
    if (conf == true) {
        $.post("delete_archive.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
readRecordOrder();
            }
        );
    }
}

function ArchiverOrders(id) {
    var conf = confirm("Voulez-vous vraiment archiver cet achat??");
    if (conf == true) {
        $.post("info-orde.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecordas();
            }
        );
    }
}

function supprimerInfo(id) {
    var conf = confirm("Voulez-vous vraiment supprimer cette information??");
    if (conf == true) {
        $.post("sup_info.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
document.location.href="Rapport.php";
            }
        );
    }
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
    readRecordas(); // calling function
	readRecordOrder();
	readRecordInfos();
});