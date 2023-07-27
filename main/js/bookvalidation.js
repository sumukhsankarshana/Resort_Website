$(document).ready(function() {
    $("#submit").clock(function() {
        fname = $("#name").val();
        email = $("#email").val();
        phnum = $("#phnum").val();
        cidate = $("#cidate").val();
        codate = $("#codate").val();
        noadults = $("#noadults").val();
        nochild = $("#nochild").val();
        roomno = $("#roomno").val();
        roomtype = $("#roomtype").val();
        

        $.ajax({
            type: "POST",
            url: "bookvalidation.php",
            data: "name=" + fname + "&email=" + email + "&phnum=" + phnum + "&cidate=" + cidate + "&codate=" + codate + "&noadults=" + noadults + "&nochild=" + nochild  + "&roomno=" + roomno + "&roomtype=" + roomtype,
            success: function(html) {
                if(html == 'true'){
                    $("#add_err").html('<div class="alert alert-success"> \
                    <strong>Booking</strong> processed. <br> Please confirm your booking with reception \ \
                    </div>');
                    window.location.href = "booksuccess.php";
                }
                else if(html == 'false'){
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Booking</strong> failed. \ \
                    </div>');
                }
                else if(html == 'fname'){
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Name</strong> is required. \ \
                    </div>');
                }
                else if(html == 'eshort'){
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Email</strong> is Short. \ \
                    </div>');
                }
                else if(html == 'eformat'){
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Email</strong> format is wrong. \ \
                    </div>');
                }
                else if(html == 'phnum'){
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Phone Number</strong> should be 10 digits. \ \
                    </div>');
                }
                else if(html == 'cidate'){
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Check In Date</strong> is required. \ \
                    </div>');
                }
                else if(html == 'codate'){
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Check Out Date</strong> is required. \ \
                    </div>');
                }
                else if(html == 'noadults'){
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>No. of Adults</strong> is required. \ \
                    </div>');
                }
                else if(html == 'roomno'){
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Number of Rooms</strong> is required. \ \
                    </div>');
                }
                else if(html == 'roomtype'){
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Room Type</strong> is required. \ \
                    </div>');
                }
                else{
                    $("#add_err").html('<div class="alert alert-danger"> \
                    <strong>Error</strong> processing request. Please try again. \ \
                    </div>');
                }
            },
            beforeSend:function()
            {
                $("#add_err").html("Loading...");
            }
        });
        return false;
    });
});
