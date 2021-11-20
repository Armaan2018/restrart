(function($) {
    $(document).ready(function() {

                    allPosts();
                    allTrash();
                    trashCountingSystem();
                    postCountingSystem();


$('input#feature_image').change(function(e){


let file_url = URL.createObjectURL(e.target.files[0]);
    $('img#feature_image_load').attr('src',file_url);
});




   $('.input-images').imageUploader();






   //post formatting

   $('.qtagselect__select').tagselect();




                
                $('#title').hide();
                $('#text').hide();
                $('#image').hide();
                $('#video').hide();
                $('#audio').hide();
                $('#gallery').hide();
                $('#basic_editor').hide();
                $('button#post_btn').hide();
                $('#category').hide();
                $('#tag').hide();


                $(document).on('change','#post_format',function(){

                    let format = $(this).val();


                 if (format == 'text') {
                    $('#title').show();
                    $('#basic_editor').show();
                    $('button#post_btn').show();
                    $('#image').hide();
                    $('#gallery').hide();
                    $('#audio').hide();
                    $('#video').hide();
                    $('#category').show();
                    $('#tag').show();


                }

                if(format == 'image'){
                    $('#title').show();
                    $('#image').show();
                    $('button#post_btn').show();
                    $('#gallery').hide();
                    $('#audio').hide();
                    $('#video').hide();
                    $('#basic_editor').show();
                    $('#category').show();
                    $('#tag').show();

                }                

                if(format == 'gallery'){
                    $('#title').show();
                    $('#gallery').show();
                    $('button#post_btn').show();
                    $('#image').hide();
                    $('#audio').hide();
                    $('#video').hide();
                    $('#basic_editor').show();
                    $('#category').show();
                    $('#tag').show();

                }                

                if(format == 'audio'){
                    $('#title').show();
                    $('#audio').show();
                    $('button#post_btn').show();
                    $('#gallery').hide();
                    $('#image').hide();
                    $('#video').hide();
                    $('#basic_editor').show();
                    $('#category').show();
                    $('#tag').show();

                }                

                if(format == 'video'){
                    $('#title').show();
                    $('#video').show();
                    $('button#post_btn').show();
                    $('#gallery').hide();
                    $('#image').hide();
                    $('#audio').hide();
                    $('#basic_editor').show();
                    $('#category').show();
                    $('#tag').show();

                }

                });





//post form 


$(document).on('submit','form#post_form',function(event){
    event.preventDefault();
    
    $('#error_tag').text('');



    $.ajax({
        url:'post-create',
        method:'POST',
        data:new FormData(this),
        contentType:false,
        processData:false,
        success:function(response){
                    allPosts();
                    trashCountingSystem();
                    postCountingSystem();
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    $('#insertmodel').hide();
                    $('form#post_form')[0].reset();
                    $('#title').hide();
                    $('#text').hide();
                    $('#image').hide();
                    $('#video').hide();
                    $('#audio').hide();
                    $('#gallery').hide();
                    $('#basic_editor').hide();
                    $('button#post_btn').hide();
                    $('#category').hide();
                    $('#tag').hide();

                    swal("Good job!", "New Post Added!", "success");



        },

        error:function(response){
            $('#error_tag').text(response.responseJSON.errors.title);

        }





    });

});



$(document).on('click','button#emni',function(){




  



    $.ajax({
        url:'format-type',
        success:function(response){

            alert(response)



        }
    });









    
});



function allPosts(){
    $.ajax({
        url:'post-show',
        success:function(response){

            $('tbody#post_tbody').html(response);



        }
    });
}




allPosts();



function allTrash(){
    $.ajax({
        url:'trash-show',
        success:function(response){

            $('tbody#post_trash_tbody').html(response);

        }
    });
}


allTrash();



$(document).on('click','a#post_move_id',function(event){
    event.preventDefault();

    let id = $(this).attr('move_attr');

    $.ajax({
        url:'post-trashmove/' + id,
        success:function(response){
            postCountingSystem();
            trashCountingSystem();

            swal("Opps!", "Your Post has been Moved To Trash!", "warning", {
  button: "Trashed!",
});

            allPosts();


        }



    });

});




$(document).on('click','a#restore_post_id',function(event){
    event.preventDefault();

    let id = $(this).attr('restore_post_attr');

    $.ajax({
        url:'post-restore/' + id,
        success:function(response){
            postCountingSystem();
            trashCountingSystem();

            swal("Yess!!!!", "Your Post Has been Restored!", "success", {
  button: "Restored!",
});

            allTrash();


        }



    });

});




$(document).on('click','a#post_delete_id',function(event){
    event.preventDefault();

    let id = $(this).attr('post_delete_attr');


    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Post!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

        $.ajax({
        url:'post-delete/' + id,
        success:function(response){

            allTrash();
            postCountingSystem();
            trashCountingSystem();


    swal("Poof! Your post has been deleted!", {
      icon: "success",
    });

           

        }



    });



  } else {
    swal("Your Post is Safe!");
  }
});



});






function postCountingSystem(){
           $.ajax({
        url:'post-count',
        success:function(response){

            $('span#post_count_span').text('(' + response +')');



        }

       });

}



function trashCountingSystem(){
           $.ajax({
        url:'trash-count',
        success:function(response){

            $('span#trash_count_span').text('(' + response +')');



        }

       });

}

postCountingSystem();
trashCountingSystem();




$(document).on('click','a#post_edit_id',function(event){
    event.preventDefault();

    let postid = $(this).attr('post_edit_attr');

    $.ajax({
        url:'post-edit/' + postid,
        success:function(response){
            $('button#feat_btn').text(response.featured);
            $('button#feat_btn_cat').text(response.category);
            $("#posteditmodal input[name='id']").val(response.id);
            

        }
    });

});


//admin menu fix
$('#sidebar-menu ul li ul li.ok').parent('ul').slideDown();
$('#sidebar-menu ul li ul li.ok a').css('color','#5ae8ff');
$('#sidebar-menu ul li ul li.ok').parent('ul').parent('li').children('a').css('background-color','#00d0f1');
$('#sidebar-menu ul li ul li.ok').parent('ul').parent('li').children('a').addClass('subdrop');















       





    });

})(jQuery)
