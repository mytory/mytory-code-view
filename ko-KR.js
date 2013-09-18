jQuery(document).ready(function(){

    var add_open_new_window_for_code = function(){
        $('.content pre').each(function(){
            if(this.scrollWidth > this.clientWidth){
                $(this).before($('<a/>',{
                    text: '▷코드 새 창에서 보기',
                    'class': 'js-open-mcv-code-view',
                    'href': '#'
                }));
            }
        });
        $('.js-open-mcv-code-view').click(function(e){
            e.preventDefault();
            $('.mcv-code-view-form__input').val($(this).next().html());
            $('.mcv-code-view-form').submit();
        });
    };

    var mb = $('.content pre').css('margin-bottom');
    add_open_new_window_for_code();
    $(window).resize(function(){
        $('.js-open-mcv-code-view').remove();
        add_open_new_window_for_code();
    });
});