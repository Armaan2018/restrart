<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;  

class PostController extends Controller
{
    public function index()
    {

    	$category = Category::where('status',true)->latest()->get();
    	$tag = Tag::where('status',true)->latest()->get();
        $published = Post::where('trash',false)->count();
        $trashed = Post::where('trash',true)->count();
    	return view('admin.layouts.post.post',compact('category','tag','published','trashed'));
    }


    public function postCount()
    {
        return $countingpost = Post::where('trash',false)->count();
    }    

    public function trashCount()
    {
        return $countingtrash = Post::where('trash',true)->count();
    }

    public function postCreate(Request $request)
    {


    	$request -> validate([

    		'title' =>'required|unique:posts',

    	]);


    	 $unique_file_name = '';

        if ($request -> hasFile('image')) {

            $img = $request -> file('image');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('media/post/'), $unique_file_name);
        }


        $gallery_arr = [];



            if ($request -> hasFile('gallery')) {


              foreach ($request -> file('gallery') as $gallery ) {
                
                $unique_gall_name = md5(time().rand()).'.'. $gallery -> getClientOriginalExtension();
                $gallery -> move(public_path('media/post/'),$unique_gall_name);
                array_push($gallery_arr, $unique_gall_name);
              }



            }


            $format = $request -> format;


           $post_feature = [



            'format'      => $request -> format,
            'audio'       => $request -> audio,
            'video'       => $request -> video,
            'image'       => $unique_file_name,
            'gallery'     => $gallery_arr,






        ];






    	$data = Post::Create([

    		'title' => $request -> title,
    		'slug' => Str::replace('','-',$request-> title),
    		'content' => $request -> content,
    		'featured' => json_encode($post_feature),
            'user_id' => Auth::user()-> id

    	]);





        
    	$data -> categories() -> attach($request -> category);
    	$data -> tags() -> attach($request -> tag);
        $data -> users() -> attach(Auth::user());



    	return response()->json(['success','successfully done']);

    }



    public function postShow()
    {
    	$data = Post::where('trash',false)->latest()->get();
        



    	$i = 1;

    	foreach ($data as $element) { ?>
    		<tr>
    		<td><?php echo Str::of(htmlspecialchars($element -> title))->words(5); ?></td>
    		<td><!-- <strong style="color:green;font-weight: 900;font-size: 18px;"> -->
                <span id="newcat_form" class="">
    			<?php  $miru = $element -> featured; $nav = json_decode($miru);echo $nav -> format;?>
                </span>
    		</td>
    		<td><?php foreach ($element -> categories as $cat) { ?>
    			<?php echo $cat -> name ?>
    		<?php } ?></td>    		
    		<td><?php foreach ($element -> tags as $tag) { ?>
    			 <span class="badge badge-info"><?php echo $tag -> name; ?></span> 
    		<?php } ?></td>
            <td><?php echo $element -> created_at -> diffForHumans(); ?></td>
    		<td> <span class="badge badge-info">active</span> </td>
    		<td><a data-toggle="modal" href="#posteditmodal" id="post_edit_id" post_edit_attr="<?php echo $element -> id ?>" class="btn btn-sm bg-success-light">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a class="btn btn-sm bg-danger-light" id="post_move_id" move_attr="<?php echo $element -> id; ?>">
																<i class="fe fe-trash"></i> Trash
															</a></td>
    		</tr>
    		
    	<?php }
    }


    public function formatType()
    {}




//trash
    public function allTrash()
    {
        $data = Post::where('trash',true)->latest()->get();



        $i = 1;

        foreach ($data as $element) { ?>
            <tr>
            <td><?php echo $element -> title; ?></td>
            <td><strong style="color:green;font-weight: 900;font-size: 18px;">
                <?php  $miru = $element -> featured; $nav = json_decode($miru);echo $nav -> format;?></strong>
            </td>
            <td><?php foreach ($element -> categories as $cat) { ?>
                <?php echo $cat -> name ?>
            <?php } ?></td>         
            <td><?php foreach ($element -> tags as $tag) { ?>
                 <span class="badge badge-info"><?php echo $tag -> name; ?></span> 
            <?php } ?></td>
            <td><?php echo $element -> created_at -> diffForHumans(); ?></td>
            <td> <span class="badge badge-info">active</span> </td>
            <td> <a class="btn btn-sm bg-info-light" id="restore_post_id" restore_post_attr="<?php echo $element -> id; ?>">
                                                                <i class="fa fa-window-restore"></i> Restore Post
                                                            </a>

                                                            <a data-toggle="modal" id="post_delete_id" post_delete_attr="<?php echo $element -> id ?>" class="btn btn-sm bg-danger-light">
                                                                <i class="fe fe-trash"></i> Delete
                                                            </a>



                                                        </td>
            </tr>
            
        <?php }
    }



    public function postTrash(){
        $category = Category::latest()->get();
        $tag = Tag::latest()->get();
        $post = Post::where('trash',true)->latest()->get();
        $published = Post::where('trash',false)->count();
        $trashed = Post::where('trash',true)->count();
        return view('admin.layouts.post.trash',compact('category','tag','post','published','trashed'));


    }




    public function postTrashMove($id)
    {
      	$postrash = Post::findOrFail($id);


           $postrash -> trash = true;


            $postrash -> update(); 
}

public function postRestore($id)
{
   $restorepost = Post::findOrFail($id);

   $restorepost -> trash = false;

   $restorepost -> update();
}



public function postDelete($id)
{
   $deletepost = Post::findOrFail($id);

   $deletepost -> delete();


}




public function postEdit($id)
{
    $data = Post::findOrFail($id);




    return [

        'id' => $data -> id,
        'featured' => json_decode($data -> featured) -> format,




    ];
}






}
