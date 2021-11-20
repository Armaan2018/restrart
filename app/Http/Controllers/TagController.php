<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
  public function index()
  {
  	return view('admin.layouts.post.tag');
  }


  public function tagCreate(Request $request)
  {

  	    $request -> validate([


        'name' => 'required|unique:tags|max:18'




       ]);




  	Tag::Create([


  		'name' => $request -> name,
  		'slug' => Str::slug($request -> name)





  	]);


  	return response()->json(['success','value added succesfull']);
  	
  }


  public function tagShow()
  {
     $data = Tag::latest()->get();

     foreach ($data as $element) { ?>


     	    											<tr>
													<td><?php echo $element -> name; ?></td>
													<td><?php echo $element -> slug; ?></td>
													<td><input type="checkbox" data-toggle="toggle"

                            class="checker_tag"


                            status_tag_id = <?php echo $element -> id; ?> 

                            <?php echo ($element -> status == true)?("checked = 'checked'"):(''); ?>





                            ></td>
													<td>															
                            <a data-toggle="modal" href="#editmodal" class="btn btn-sm bg-success-light" id="edit_id" edit_attr="<?php echo $element -> id; ?>">
																<i class="fe fe-pencil"></i> Edit
															</a>

															<a class="btn btn-sm bg-danger-light" id="delete_id" data-toggle="modal" href="#delete_modal" del_attr="<?php echo $element -> id; ?>">
																<i class="fe fe-trash"></i> Delete
															</a>


                            </td>
												</tr>
     	
     <?php }
  }



  public function tagEdit($id)
  {
  	$data = Tag::findOrFail($id);


  	return [


  		'name' => $data -> name,
  		'id' => $data -> id,




  	];



  }


  public function tagUpdate(Request $request)
  {


  	    $request -> validate([


        'name' => 'required|unique:tags|max:18'




       ]);
  	

  	$id = $request -> id;


  	$data = Tag::findOrFail($id);


  	$data -> name = $request -> name;
  	$data -> slug = Str::slug($request -> name);

  	$data -> update();


  	return response() -> json(['success','value added success']);



  }




























  public function tagDelete($id)
  {
  	$data = Tag::findOrFail($id);

  	$data -> delete();


  }






  public function tagInActive($id)
  {
    $data = Tag::findOrFail($id);

    $data -> status = false;

    $data -> update();


  }


  public function tagActive($id)
  {
    $data = Tag::findOrFail($id);

    $data -> status = true;

    $data -> update();


  }








}
