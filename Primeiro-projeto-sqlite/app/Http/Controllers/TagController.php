<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
public function index ()
{
    return view ('tags.index',['tags'=>Tag::all()]);
}
public function create(){
    return view ('tags.create');

}
public function store(Request $request){
    Tag::create($request->all());
    return redirect(route('tags.index'));
}
public function show ($id)
{
    return view('tags.show', ['tags'=>Tag::findOrFail($id)]);
}
public function  edit($id){
    $tags = Tag::findOrFail($id);
    return view('tags.edit',compact('tags'));

}
public function update(Request $request,$id){
    Tag::findOrFail($id)->update($request->all());
    return redirect (route('tags.show',$id));
}
//Função para exibir uma página de confirmação de exclusão de uma postagem
public function deleteConfirmation($id){
    //Recebe o ID da postagem a ser excluída como parâmetro
    $post = Tag::findOrFail($id);
    //Retorna uma view que exibe uma mensagem de confirmação
    return view('tags.deleteConfirmation', compact('tags'));
}
//Função para processar a exclusão de uma postagem
public function destroy($id){
    //Recebe o ID da postagem a ser excluída como parâmetro
    $post = Tag::findOrFail($id);
    //Exclui a postagem do banco de dados
    $post->delete();
    //Redireciona o usuário para a listagem de posts
    return redirect()->route('tags.index');
}
}
