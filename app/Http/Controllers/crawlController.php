<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crawlController extends Controller
{
    public function crawlJob()
    {
        $urls = 'https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-vi.html';
        $html = file_get_html(trim($urls));

        $title   = $html->find(".title .job_link");


        foreach ($title as $key => $value) {
            echo "<pre>";
            print_r(strip_tags($value));

            echo "</pre>";
        }

       
    }
}
