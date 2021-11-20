(function($) {
    $(document).ready(function() {


        /*******


        *******/


        $('form#insert_category').submit(function(event) {
            event.preventDefault();

            $('#error_category').text('');


            $.ajax({

                url: 'category-insert',
                data: new FormData(this),
                method: "POST",
                contentType: false,
                processData: false,
                success: function(data) {
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    $('#insertmodel').hide();
                    $('form#insert_category')[0].reset();
                    swal("Good job!", "New Category Added!", "success");

                    // $('.modal-backdrop.show').hide();
                    allCategories();

                },
                error: function(response) {
                    $('#error_category').text(response.responseJSON.errors.name);
                }



            })




        });

        /*******


        *******/

        function allCategories() {

            $.ajax({

                url: 'category-show',
                success: function(response) {

                    $('tbody#category_tbody').html(response);

                }

            });

        }

        allCategories();







        // delete Category

        $(document).on('click', 'a#delete_id_cat', function(event) {
            event.preventDefault();


            let id = $(this).attr('del_attr_cat');


            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Category!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        $.ajax({

                            url: 'category-delete/' + id,
                            success: function(response) {
                                swal("Opps Category has been deleted!", {
                                    icon: "success",
                                });
                                allCategories();

                            }


                        });



                    } else {
                        swal("Category Not Deleted Yet");
                    }
                });






        });



         // edit Category


         $(document).on('click','a#edit_id',function(e){
            e.preventDefault();



            let id = $(this).attr('edit_attr');


            $.ajax({

               url:'category-edit/' + id,
               success:function(response){

                    $("#editmodal input[name='name']").val(response.name);
                    $("#editmodal input[name='id']").val(response.id);

               }

            });


         });



         $(document).on('submit','form#edit_category',function(event){

            event.preventDefault();


            $('#error_update_span').text('');

            $.ajax({
               url: 'category-update',
               method: "POST",
               data:new FormData(this),
               processData:false,
               contentType:false,
               success:function(response){

                     $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    $('#editmodal').hide();

                   swal("Good job!", "Category Updated Successful!", "success");
                    allCategories();



               },

               error:function(response){

                $('#error_update_span').text(response.responseJSON.errors.name);

               }
            });

         });



         $(document).on('click','input.checkerinfo',function(){

            let status_id = $(this).attr('status_id_attr');

            let checked = $(this).attr('checked');



            if (checked == 'checked') {
                            $.ajax({
                url:'category-status-inactive/' + status_id,
                success:function(response){
                    swal("Owww!", "Category In-Activated!", "success");

                }
            });
                        }else{
                            $.ajax({
                                url:'category-status-active/' + status_id,
                                success:function(response){
                                    swal("Owww!", "Category Activated!", "success");

                                }
                            });
                        }







         });






    });

})(jQuery)
