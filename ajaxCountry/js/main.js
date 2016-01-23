$(function(){
    $('#days').keyup(function(){
        if($(this).val()==0 || isNaN($(this).val())){
            $('#daysBlock .message').css('visibility','visible');
        }else{
            $('#daysBlock .message').css('visibility','hidden');
        }
    });

    $('#getTourPrice').submit(function(e){
        e.preventDefault();
        console.log('Отправка');

        if($('#country').val()==null) {
            $('#countryBlock .message').css('visibility','visible');
            return false;
        }
        if($('#days').val()==0 || isNaN($('#days').val())) {
            $('#daysBlock .message').css('visibility', 'visible');
            return false;
        }

        var formData=$(this).serializeArray();
        console.log(formData);

        $.ajax({
            url: "feedback.php",
            method: "post",
            data: formData,
            dataType:'json', //фортмат ответа , можно 'html'
            success: function(answer){
                console.log(answer);
                if (answer){
                    $('.answer').html(answer);
                }else{
                    alert('Сорри. Проблемы на сервере. Попробуйте позже');
                }
            }
        });
    });
});
