<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {

        $books = Book::all();

        return view('books.index', ['books'=>$books]);
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request ){
        try{
            $books = new Book();
            $books->title = $request->title;
            $books->description = $request->description;
            $books->author_id = $request->author_id;

            $books->save();

            return redirect()->action([BooksController::class, 'index']);
        }catch(Exception $ex){
            Logg::error($ex);
        }
    }

    public function edit($id){

        $books = Book::find($id);

        if(empty($books)){
            abort(404, "El libro con id '$id' no existe");
        }
        return view('books.edit', ['books' => $books]);
    }


    public function update(Request $request ){
        try{
            $books = Book::find($request->book_id);

            if(empty($books)){
                abort(404, "El autor con id '$request->book_id' no existe");
            }

            $books->title = $request->title;
            $books->description = $request->description;
            $books->author_id = $request->author_id;

            $books->save();

            return redirect()->action([BooksController::class, 'index']);
        }catch(Exception $ex){
            Logg::error($ex);
        }
    }


    public function delete($id){

        $books = Book::find($id);

        if(empty($books)){
            abort(404, "El libro con id '$id' no existe");
        }

        $books->delete();

        return redirect()->action([BooksController::class, 'index']);
    }
}
