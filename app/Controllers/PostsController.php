<?php 

namespace App\Controllers;

use Core\BaseController;
use App\Models\Post;
use Core\DataBase;

class PostsController extends BaseController
{
	public function index(){
		//echo "Posts";
		$model = new Post(DataBase::getDatabase());
		$posts = $model->All();
		var_dump($posts);

	}

	public function show($id, $request){
		echo $id . '<br>';
		echo $request->get->nome . '<br>';
		echo $request->get->sexo . '<br>';

	}
}

?>