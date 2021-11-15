$(document).ready(function() {
    var bar = $('#bar');
    var step1 = $("#step1");
    var step2 = $("#step2");
    var qr = {};

    // Bar
    $("#cancelar", bar).click(function(e) {
        document.location.href = "/";
    });

    $(".seletType").click(function(e) {
        qr.type = $(this).data("type");
    });

    $("#siguiente", step1).click(function(e) {
        saveQR();
        document.location.href = "/step2";
    });

    $("#siguiente", step2).click(function(e) {
        saveQR();
    });

    function saveQR() {
        window.localStorage.setItem('qr', JSON.stringify(qr));
    }

    function getQR() {
        return JSON.parse(window.localStorage.getItem('qr'));
    }

});