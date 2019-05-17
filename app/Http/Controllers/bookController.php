<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Publisher;
use App\ContentOwner;
use PHPUnit\Framework\MockObject\Matcher\Parameters;

class bookController extends Controller
{
	public function index(){
		$book = Book::all();
        $pub = Publisher::all();
        $contentOwner = ContentOwner::all();
        return view('home', compact('contentOwner','pub','book'));
    }
    public function store(Request $request){
        $data = $request->all();
        $pub = new Publisher();
        $pub-> name = $data->publisher ?? '';
        $pub->save();
        $con = new ContentOwner();
        $con-> name = $data->contentOwner ?? '';
        $con->save();
        $book = new Book();
        $book->bookname= $data->name ?? '';
        $book->book_uniq_idx = $data->id ?? '';
        $book->prize = $data->prize ?? 0;
        $book->cover_photo = $data->cover ?? '';
        $book->publisher_id = $pub->idx ?? 0;
        $book->co_id = $con->idx ?? 0 ;
        $book->save();
        return redirect('/book')->with('success', 'Book has been added');
    }
    public function delete($id){
        $book = Book::find($id);
        $pub = Publisher::where('idx',$book->publisher_id)->first();
        $pub->delete();
        $con = ContentOwner::where('idx',$book->co_id)->first();
        $con->delete();
        $book->delete();

     return redirect('/book')->with('success', 'Book has been deleted Successfully');

    }
    public function getJson(){
        $book = Book::get();
        return json_encode($book);
    }
    public function edit($idx){

    }

}
