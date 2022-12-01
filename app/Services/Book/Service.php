<?php


namespace App\Services\Book;


use App\Models\Book;

class Service
{
    public function store($data){
        $data['user_id']=0;
        $posts = Book::firstOrCreate($data);
    }

    public function update($data, $book){
        $book->update($data);
    }

    public function RentController($book){
        if(!auth()->user()) return redirect()->route('admin.book.show', $book->id);
        $user = auth()->user();
        //dd($user);
        if($book->is_rented) {
            if (auth()->user()->id == $book->user_id) {
                $book->update([
                    'is_rented' => false,
                    'user_id' => 0,
                ]);
                $user->update([
                    'count' => $user->count - 1
                ]);
            }

        }
        else {
            if ($user->count < $user->limit) {

                $book->update([
                    'is_rented' => true,
                    'user_id' => $user->id,
                ]);
                $user->update([
                    'count' => $user->count + 1
                ]);
            }
        }
    }

}
