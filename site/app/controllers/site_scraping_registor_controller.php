<?php
class SiteScrapingRegistorController extends Controller
{
    public function get()
    {
        if(!Loader::loadLibrary('simple_html_dom_node')) {
            echo 'ライブラリ読み込みエラー';
        }
    }
}
