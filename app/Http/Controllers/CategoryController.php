<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryController extends Controller
{

    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    
    public function index()
    {
        $categories =  $this->categoryRepository->allCategories();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);

        $this->categoryRepository->storeCategory($data);

        return redirect()->route('categories.index')->with('message', 'Category Created Successfully');
    }

    public function edit($id)
    {
        $category = $this->categoryRepository->findCategory($id);

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);

        $this->categoryRepository->updateCategory($request->all(), $id);

        return redirect()->route('categories.index')->with('message', 'Category Updated Successfully');
    }

    public function destroy($id)
    {
        $this->categoryRepository->destroyCategory($id);

        return redirect()->route('categories.index')->with('status', 'Category Delete Successfully');
    }
}