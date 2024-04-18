<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:191',
                'description' => 'nullable',
            ]);

            $category = Category::create([
                'name' => $validatedData['name'],
                'description' => $validatedData['description'],
            ]);

            return response()->json([
                'message' => 'Category created successfully',
                'user' => $category
            ], Response::HTTP_CREATED);

        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
