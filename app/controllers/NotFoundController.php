<?php
namespace App\Controllers;

use App\Core\Controller;
class NotFoundController extends Controller
{
    // Method to display all books
    public function index()
    {
        $this->setLayout('404'); // Set the layout for error pages
        $this->renderView('', [], "404 - Page Not Found");
    }
}
