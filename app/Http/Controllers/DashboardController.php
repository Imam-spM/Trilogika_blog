<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $totalPendaftar = Pendaftar::count();
    $totalAlumni = Alumni::count();
    $totalBlogPosts = BlogPost::count();

    // Data untuk grafik blog posts
    $blogPostsData = BlogPost::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                        ->whereYear('created_at', date('Y'))
                        ->groupBy('month')
                        ->orderBy('month')
                        ->get();

    $blogMonths = $blogPostsData->pluck('month')->map(function($month) {
        return date('F', mktime(0, 0, 0, $month, 1));
    });
    $blogPostCounts = $blogPostsData->pluck('count');

    return view('dashboard', compact('totalPendaftar', 'totalAlumni', 'totalBlogPosts', 'blogMonths', 'blogPostCounts'));
}
}
