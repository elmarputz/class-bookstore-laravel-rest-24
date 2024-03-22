<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index() : JsonResponse {
        $books = Book::with(['authors', 'images', 'user'])->get();
        return response()->json($books, 200);
    }

    public function findByISBN (string $isbn) : JsonResponse {
        $book = Book::where('isbn', $isbn)
            ->with(['authors', 'images', 'user'])->first();
        return $book != null ? response()->json($book, 200) : response()->json(null, 200);
    }

    public function findBySearchTerm (string $searchTerm) : JsonResponse {
        $books = Book::with(['authors', 'images', 'user'])
            ->where('title', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('subtitle', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('description', 'LIKE', '%' . $searchTerm . '%')

            ->orWhereHas('authors', function($query) use ($searchTerm) {
                $query->where('firstName', 'LIKE', '%' . $searchTerm. '%')
                    ->orWhere('lastName', 'LIKE', '%' . $searchTerm. '%');
            })->get();

        return response()->json($books, 200);

    }


    public function save (Request $request) {

        $request = $this->parseRequest($request);

        DB::beginTransaction();

        try {

            $book = Book::create($request->all());

            DB::commit();
            return response()->json($book, 200);

        }
        catch (\Exception $e) {
            DB::rollBack();
            return response()->json("saving book failed: " . $e->getMessage(), 500);
        }




    }

    private function parseRequest (Request $request) : Request {
        $date = new \DateTime($request->published);
        $request['published'] = $date->format('Y-m-d H:i:s');
        return $request;
    }
}
