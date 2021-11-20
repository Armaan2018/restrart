(function($) {
    $(document).ready(function() {



        $(document).on('submit','form#insert_tag',function(event){

            event.preventDefault();


            $('#error_tag').text('');


            $.ajax({

                url:'tag-create',
                method:'POST',
                data:new FormData(this),
                processData:false,
                contentType:false,
                success:function(response){

                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    $('#insertmodel').hide();
                    $('form#insert_tag')[0].reset();
                    swal("Good job!", "New Tag Added!", "success");
                    allTags();

                },
                error: function(response) {
                    $('#error_tag').text(response.responseJSON.errors.name);
                }

            });

        });




        function allTags() {


            $.ajax({
                url:'tag-show',
                success:function(response){

                    $('tbody#tag_tbody').html(response);

                }
            });


            
        }


        allTags();



        $(document).on('click','a#delete_id',function(event){
            event.preventDefault();

            let id = $(this).attr('del_attr');

             swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Tag!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

    $.ajax({

        url:'tag-delete/' + id,
        success:function(response){

    swal("OPPs! Your tag  has been deleted!", {
      icon: "success",
    });

    allTags();



        }


    });





  } else {
    swal("Your tag  is safe!");
  }
});

        });









        $(document).on('click','a#edit_id',function(event){
            event.preventDefault();

            let id = $(this).attr('edit_attr');


            $.ajax({
                url:'tag-edit/'+ id,
                success:function(response){

                    $("#editmodal input[name='name']").val(response.name);
                    $("#editmodal input[name='id']").val(response.id);

                }
            });




        });



        $(document).on('submit','form#edit_tag',function(event){
            event.preventDefault();

            $('#error_update_span').text('');

            $.ajax({
                url:'tag-update',
                method:'POST',
                data:new FormData(this),
                processData:false,
                contentType:false,
                success:function(response){

                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    $('#editmodal').hide();
                    swal("Good job!", "Category Updated!", "success");
                    allTags();

                },
                error:function(response){
                    $('#error_update_span').text(response.responseJSON.errors.name);

                }

                
            });
        });





$(document).on('click','input.checker_tag',function(){

    let tag_status_id = $(this).attr('status_tag_id');

    let checked = $(this).attr('checked');




if (checked == 'checked') {
        $.ajax({
        url:'tag-status-inactive/' + tag_status_id,
        success:function(response){
            swal("awws!", "Tag In-Activated!", "success");

        }
    });
}else{
        $.ajax({
        url:'tag-status-active/' + tag_status_id,
        success:function(response){
            swal("Owww!", "Tag Activated!", "success");

        }
    });
}
















});












       





    });

})(jQuery)
