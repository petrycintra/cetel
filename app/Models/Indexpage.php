<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indexpage extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'logo_index',
        'email',
        'tel_one',
        'tel_two',
        'menu_one',
        'menu_btn',
        'submenu_one',
        'submenu_two',
        'submenu_three',
        'submenu_four',
        'submenu_five',
        'insta',
        'slider_title',
        'slider_content',
        'slider_btn',
        'slider_photo_one',
        'slider_photo_two',
        'slider_photo_three',
        'description_one_bolder',
        'description_one_text',
        'description_two_bolder',
        'description_two_text',
        'description_three_bolder',
        'description_three_text',
        'description_four_bolder',
        'description_four_text',
        'description_photo_left',
        'description_photo_right',
        'description_title',
        'description_subtitle',
        'description_text',
        'description_btn',
        'about_title',
        'about_paragraph_one',
        'about_paragraph_two_bolder',
        'about_paragraph_two',
        'about_photo',
        'about_footer_title',
        'about_footer_paragraph_one',
        'about_footer_paragraph_two',
        'about_footer_btn',
        'about_footer_photo',
    ];
}
