$(document).ready(function () {
    $("#regForm").on("submit", function (e) {
        let phone = $("#phone").val();
        let course = $("#course").val();
        let age = $("#age").val();

        if (phone.length !== 10 || isNaN(phone)) {
            alert("Please enter a valid 10-digit phone number.");
            e.preventDefault();
        }

        if (course === "") {
            alert("Please select a course.");
            e.preventDefault();
        }

        if (age === "" || age <= 0) {
            alert("Please enter a valid Date of Birth.");
            e.preventDefault();
        }
    });

});