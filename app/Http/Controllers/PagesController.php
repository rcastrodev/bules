<?php

namespace App\Http\Controllers;

use SEO;
use App\Data;
use App\Page;
use App\Color;
use App\Content;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PagesController extends Controller
{
    private $data;

    public function __construct()
    {
        $this->data = Data::first();
    }

    public function home()
    {
        $page = Page::where('name', 'inicio')->first();
        SEO::setTitle('home');
        SEO::setDescription(strip_tags($this->data->description));

        /** Secciones de página */
        $sections   = $page->sections;
        $section1s  = $sections->where('name', 'section_1')->first()->contents()->orderBy('order', 'ASC')->get();
        $section2   = $sections->where('name', 'section_2')->first()->contents()->first();
        $section3s  = $sections->where('name', 'section_3')->first()->contents()->orderBy('order', 'ASC')->get();
        $categories = Category::where('outstanding', 1)->orderBy('order', 'ASC')->take(4)->get();
        $products   = Product::where('outstanding', 1)->orderBy('order', 'ASC')->take(4)->get();
        $posts      = Content::where('section_id', 7)->orderBy('created_at', 'ASC')->take(3)->get();

        return view('paginas.index', compact('section1s', 'section2', 'section3s', 'categories', 'products', 'posts'));
    }

    public function empresa()
    {
        $page = Page::where('name', 'empresa')->first();
        $sections = $page->sections;
        $sliders = $sections->where('name', 'section_1')->first()->contents()->orderBy('order', 'ASC')->get();
        $section2 = $sections->where('name', 'section_2')->first()->contents()->first();
        $section3s = $sections->where('name', 'section_3')->first()->contents()->orderBy('order', 'ASC')->get();
        SEO::setTitle('nosotros');
        return view('paginas.empresa', compact('sliders', 'section2', 'section3s'));
    }

    public function categorias()
    {
        $categories = Category::orderBy('order', 'ASC')->get();    
        SEO::setTitle('categor&iacute;as');    
        SEO::setDescription(strip_tags($this->data->description));
        return view('paginas.categorias', compact('categories'));
    }

    public function categoria($id)
    {
        $category = Category::findOrFail($id);
        $products = $category->products()->orderBy('order', 'ASC')->get();
        $categories = Category::orderBy('order', 'ASC')->get();        
        SEO::setTitle($category->name);    
        SEO::setDescription(strip_tags($this->data->description));
        return view('paginas.productos-por-categoria', compact('category', 'categories', 'products'));
    }

    public function producto(Request $request, Product $product)
    {
        $categories = Category::orderBy('order', 'ASC')->get();

        if ($product){
            SEO::setTitle($product->name);
            SEO::setDescription(strip_tags($product->description));
        }

        $relatedProducts = $product->category->products()->where('id', '<>', $product->id)->inRandomOrder()->get();
        
        if (! count($relatedProducts))
            $relatedProducts = $product->inRandomOrder()->get();
        

        return view('paginas.producto', compact('product', 'categories', 'relatedProducts'));
    }


    public function productos(Request $request)
    {
        if (! $request->get('b')) abort(404); 
        $b = $request->get('b');
        $products = Product::where('name', 'like', "%{$b}%")->get();        
        return view('paginas.productos', compact('products'));
    }
    
    public function novedades(Request $request)
    {
        SEO::setTitle('novedades');
        if ($request->get('categoria'))
            $posts = Content::where('section_id', 7)->where('content_3', 'like', "%".$request->get('categoria')."%")->orderBy('created_at', 'ASC')->get();
        elseif($request->get('titulo'))
            $posts = Content::where('section_id', 7)->where('content_1', 'like', "%".$request->get('titulo')."%")->orderBy('created_at', 'ASC')->get();
        else
            $posts = Content::where('section_id', 7)->orderBy('created_at', 'ASC')->get();

        return view('paginas.novedades', compact('posts'));
    }

    public function obtenerNovedad($id)
    {
        $post = Content::find($id);
        SEO::setTitle($post->content_1);
        return view('paginas.novedad', compact('post'));
    }

    public function calidad()
    {
        $page = Page::where('name', 'calidad')->first();
        SEO::setTitle('calidad');
        SEO::setDescription(strip_tags($this->data->description));
        $sections   = $page->sections;
        $sliders  = $sections->where('name', 'section_1')->first()->contents;
        $section2   = $sections->where('name', 'section_2')->first()->contents()->first();
        $section3s   = $sections->where('name', 'section_3')->first()->contents()->orderBy('order', 'ASC')->get();
        $section4s   = $sections->where('name', 'section_4')->first()->contents()->orderBy('order', 'ASC')->get();
        return view('paginas.calidad', compact('sliders', 'section2', 'section3s', 'section4s'));
    }

    public function contacto()
    {
        $page = Page::where('name', 'contacto')->first();
        SEO::setTitle("Contacto"); 
        SEO::setDescription(strip_tags($this->data->description));      
        return view('paginas.contacto');
    }

    public function catalogo($id)
    {
        $element = Content::findOrFail($id);  
        return Response::download($element->content_2);  
    }
}
