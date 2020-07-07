$(document).ready(function ($) {
    STATICS.alert()
});

STATICS = {
    alert:function () {
        $('.alert-success').fadeToggle(100)
    }
};
