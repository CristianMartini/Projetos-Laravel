<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', ['posts' => Post::all()]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect(route('posts.index'));
    }
    public function show($id)
    {
        return view('posts.show', ['post' => Post::findOrFail($id)]);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request,$id){                                                                       
        Post::findOrFail($id)->update($request->all());
        return redirect( route('posts.show',$id));
    }
    //Função para exibir uma página de confirmação de exclusão de uma postagem
public function deleteConfirmation($id){
    //Recebe o ID da postagem a ser excluída como parâmetro
    $post = Post::findOrFail($id);
    //Retorna uma view que exibe uma mensagem de confirmação
    return view('posts.deleteConfirmation', compact('post'));
}
    //Função para processar a exclusão de uma postagem
public function destroy($id){
    //Recebe o ID da postagem a ser excluída como parâmetro
    $post = Post::findOrFail($id);
    //Exclui a postagem do banco de dados
    $post->delete();
    //Redireciona o usuário para a listagem de posts
    return redirect()->route('posts.index');
}
}
