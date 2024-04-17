$('#toggleRegisterPassword , #toggleLoginPassword').on('click',function(){
    var inputId = $(this).attr('data-inputId')
    togglePassword(inputId,this)
})

function togglePassword(inputId, buttonElement)
{
    if($('#'+inputId).prop('type')=='password')
    {
        $('#'+inputId).prop('type','text')
        $(buttonElement).html('<i class="fa-solid fa-eye-slash"></i>')
    }
    else // đang là input text
    {
        $('#'+inputId).prop('type','password')
        $(buttonElement).html('<i class="fa-solid fa-eye"></i>')
    }
}