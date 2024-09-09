$(document).on('focusout', '._inputText', function() {
    const hasValue = $(this).find('input').val()
    console.log((hasValue == ""));
    if(hasValue != ""){
        $(this).addClass('hasValue');
    }else {
        $(this).removeClass('hasValue');
    }
})