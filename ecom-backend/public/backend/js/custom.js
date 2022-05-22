jQuery(document).ready(function(){
    jQuery(".addCategory").click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var name = jQuery(".name").val();
        var description = jQuery(".description").val();
        var tag = jQuery(".tag").val();
        var status = jQuery(".status").val();
        $.ajax({
            url : 'catstore',
            type: 'POST',
            datatype: 'json',
            data:{
                'name':name,
                'description':description,
                'tag':tag,
                'status':status
            },
            success : function(result){
                if(result.status=="failed"){
                    jQuery(".nameError").text(result.errors.name);
                    jQuery(".descriptionError").text(result.errors.description);
                    jQuery(".tagError").text(result.errors.tag);
                }else{
                    jQuery(".msg").append('<div class="alert alert-success">'+result.message+'</div');
                    jQuery(".msg").fadeOut(5000);
                    jQuery("#addCategory").modal('hide');
                    jQuery("#addCategory").find('input').val('');
                    jQuery("#addCategory").find('textarea').val('');
                }
            }
        })
    });
});