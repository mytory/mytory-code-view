jQuery(document).ready(function(){
    var mb = $('.content pre').css('margin-bottom');
    $('.content pre').before($('<a/>',{
        text: '▷Open new window for code',
        'class': 'js-open-mcv-code-view',
        'href': '#'
    }));
    $('.js-open-mcv-code-view').click(function(e){
        e.preventDefault();
        $('.mcv-code-view-form__input').val($(this).next().html());
        $('.mcv-code-view-form').submit();
    });
});