<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
    	return view('admin.layouts.post.category');
    }


    public function insertCategory(Request $request)
    {

    $request -> validate([


        'name' => 'required|unique:categories|max:18'




       ]);

    Category::create([

    		'name' => $request -> name,
    		'slug' => Str::slug($request -> name),


    	]);

    return response()->json(['success','value added succesfull']);
    	
    }

    public function showCategory()
    {
    	$data = Category::latest()->get();
    	$i = 1;

    	foreach ($data as $element) { ?>
    											<tr>

                                                    <td><?php echo $i; $i++ ?></td>
													<td><?php echo $element -> name; ?></td>
													<td><?php echo $element -> slug; ?></td>
													<td>

                                                                                                        <div class="status-toggle">
<input type="checkbox"  data-toggle="toggle"

        class="checkerinfo"
        status_id_attr = "<?php echo $element -> id; ?>"

        <?php 


echo ($element -> status == true) ? ('checked = "checked"') : ('');

         ?>





>
                                                </div>
                 


                                                    </td>
													<td>															<a data-toggle="modal" href="#editmodal" class="btn btn-sm bg-success-light" id="edit_id" edit_attr="<?php echo $element -> id; ?>">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a class="btn btn-sm bg-danger-light" id="delete_id_cat" data-toggle="modal" href="#delete_modal" del_attr_cat="<?php echo $element -> id; ?>">
																<i class="fe fe-trash"></i> Delete
															</a></td>
												</tr>
    		
    	<?php }
    }

//delete
    public function deleteCategory($id)
    {

  $data = Category::findOrFail($id);

  $data -> delete();
    	
    }


    //edit

    public function editCategory($id){

    	$data = Category::findOrFail($id);

    	return [


    		'name' => $data -> name,
    		'id'   => $data -> id


    	];

    }


    public function updateCategory(Request $request)
    {
    	
        $request -> validate([


            'name' => 'required|unique:categories|max:20'






        ]);


        $id = $request -> id;

        $data = Category::findOrFail($id);

        $data-> name = $request -> name;
        $data-> slug = Str::slug($request -> name);

        $data -> update();


        return response()->json(['success','value added succesfull']);
    }



    public function statusInActive($id)
    {
        $data = Category::findOrFail($id);

        $data -> status = false;

        $data -> update();


        
    }    


    public function statusActive($id)
    {
        $data = Category::findOrFail($id);

        $data -> status = true;

        $data -> update();


        
    }
}
