function clearEvents(type) {
    if (type == "base") {
        $(".select-multiple-event").val(null).trigger("change");
    } else if (type == "premium") {
        $(".select-single-event").val(null).trigger("change");
    } else {
        $(".select-multiple-event").val(null).trigger("change");
        $(".select-single-event").val(null).trigger("change");
    }

    // $(".select-mega-event").val(null).trigger("change");
}

function showEvents() {
    const pass_type = $(".select-pass").val();
    if (pass_type == "base") {
        $(".select-single-event-div").show();
        $(".select-multiple-event-div").hide();
        $(".pay-150").show();
        $(".pay-300").hide();
    } else if (pass_type == "premium") {
        $(".select-single-event-div").hide();
        $(".select-multiple-event-div").show();
        $(".pay-150").hide();
        $(".pay-300").show();
    } else {
        $(".select-payment-required").removeAttr("required");
        $(".select-payment-text").hide();
        $(".select-single-event-div").hide();
        $(".select-multiple-event-div").hide();
        $(".pay-150").hide();
        $(".pay-300").hide();
    }

    clearEvents(pass_type);
}

$(function () {
    $(".select-multiple-event").select2();
    $(".select-mega-event").select2();
    showEvents();
});

$(".select-pass").on("change", function () {
    if (this.value == "base") {
        clearEvents(this.value);
        $(".select-single-event-div").show();
        $(".select-multiple-event-div").hide();
        $(".select-payment-text").show();
        $(".pay-150").show();
        $(".pay-300").hide();
    } else if (this.value == "premium") {
        clearEvents(this.value);
        $(".select-single-event-div").hide();
        $(".select-multiple-event-div").show();
        $(".select-payment-text").show();
        $(".pay-150").hide();
        $(".pay-300").show();
    } else if (this.value == "mega") {
        clearEvents(this.value);
        $(".select-payment-required").removeAttr("required");
        $(".select-payment-text").hide();
        $(".select-single-event-div").hide();
        $(".select-multiple-event-div").hide();
        $(".pay-150").hide();
        $(".pay-300").hide();
    }
});

