<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Models\Blog;
class SitemapXmlController extends Controller
{
    public function index() {
     //   $posts = Blog::all();
        return response()->view('sitemap')->header('Content-Type', 'text/xml');
      }
      public function robots() {
        //   $posts = Blog::all();
           return response()->view('robots')->header('Content-Type', 'text/plain');
         }
}
