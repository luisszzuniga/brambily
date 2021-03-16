<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuCategoryModel;
use App\Models\PlateModel;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = MenuCategoryModel::all();
        $plates = PlateModel::all();
        return view('menu.index', compact('categories', 'plates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCategory()
    {
        return view('menu.create');
    }

    public function save()
    {
        $name = $_POST['name'];
        $description = $_POST['description'];

        $category = new MenuCategoryModel;
        $category->name = $name;
        $category->description = $description;
        $category->save();

        return redirect('menu');
    }

    public function saveEdit()
    {
        $name = $_POST['name'];
        $description = $_POST['description'];

        $category = MenuCategoryModel::find($_POST['id']);
        $category->name = $name;
        $category->description = $description;
        $category->save();

        return redirect('menu');
    }

    public function seePlate(int $id)
    {
        $plate = PlateModel::find($id);

        return view('plate.see', compact('plate'));
    }

    public function deletePlate(int $id)
    {
        $plate = PlateModel::find($id);

        return view('plate.delete', compact('plate'));
    }

    public function deletePlateConfirm(int $id)
    {
        $plate = PlateModel::find($id);
        $plate->delete();

        return redirect('menu');
    }

    public function editPlate(int $id)
    {
        $plate = PlateModel::find($id);
        $categories = MenuCategoryModel::all();

        return view('plate.edit', compact('plate', 'categories'));
    }

    public function newPlate()
    {
        $categories = MenuCategoryModel::all();
        return view('plate.create', compact('categories'));
    }

    public function seeCategory(int $id)
    {
        $category = MenuCategoryModel::find($id);
        $plates = PlateModel::all();

        return view('menu.see', compact('category', 'plates'));
    }

    public function deleteCategory(int $id)
    {
        $category = MenuCategoryModel::find($id);

        return view('menu.delete', compact('category'));
    }

    public function deleteCategoryConfirm(int $id)
    {
        $category = MenuCategoryModel::find($id);
        $category->delete();

        return redirect('menu');
    }

    public function editCategory(int $id)
    {
        $category = MenuCategoryModel::find($id);

        return view('menu.edit', compact('category'));
    }

    public function savePlate()
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $categoryId = $_POST['category_id'];

        $plate = new PlateModel;
        $plate->name = $name;
        $plate->description = $description;
        $plate->price = $price;
        $plate->category_id = $categoryId;
        $plate->save();

        return redirect('menu');
    }

    public function savePlateEdit()
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $categoryId = $_POST['category_id'];
        $id = $_POST['id'];

        $plate = PlateModel::find($id);
        $plate->name = $name;
        $plate->description = $description;
        $plate->price = $price;
        $plate->category_id = $categoryId;
        $plate->save();

        return redirect('menu');
    }
}
