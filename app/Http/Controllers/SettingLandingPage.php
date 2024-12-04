<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use Illuminate\Http\Request;

class SettingLandingPage extends Controller
{
    public function landingPage()
    {
        //navbar
        $header = LandingPage::where('name', 'Header')->first();
        $home = LandingPage::where('name', 'Navbar1')->first();
        $navbar1 = LandingPage::where('name', 'Navbar2')->first();
        $navbar2 = LandingPage::where('name', 'Navbar3')->first();
        $navbar3 = LandingPage::where('name', 'Navbar4')->first();
        $navbar4 = LandingPage::where('name', 'Navbar5')->first();
        $navbar5 = LandingPage::where('name', 'Navbar6')->first();
        $navbar6 = LandingPage::where('name', 'Navbar7')->first();
        $navbar7 = LandingPage::where('name', 'Navbar8')->first();
        //heading
        $first_heading = LandingPage::where('name', 'Heading Atas')->first();
        $under_first_heading = LandingPage::where('name', 'Paragraf Heading Atas')->first();
        //about
        $heading_about = LandingPage::where('name', 'Header About')->first();
        $left_about = LandingPage::where('name', 'About Kiri')->first();
        $check1_about = LandingPage::where('name', 'Check1 About')->first();
        $check2_about = LandingPage::where('name', 'Check2 About')->first();
        $check3_about = LandingPage::where('name', 'Check3 About')->first();
        $right_about = LandingPage::where('name', 'About Kanan')->first();
        //penghargaan
        $heading_award = LandingPage::where('name', 'Header Penghargaan')->first();
        $under_heading_award = LandingPage::where('name', 'Paragraf Header Penghargaan')->first();
        $first_award_head = LandingPage::where('name', 'Heading Penghargaan 1')->first();
        $first_award_body = LandingPage::where('name', 'Paragraf Penghargaan 1')->first();
        $second_award_head = LandingPage::where('name', 'Heading Penghargaan 2')->first();
        $second_award_body = LandingPage::where('name', 'Paragraf Penghargaan 2')->first();
        $third_award_head = LandingPage::where('name', 'Heading Penghargaan 3')->first();
        $third_award_body = LandingPage::where('name', 'Paragraf Penghargaan 3')->first();
        //total
        $heading_grand_total = LandingPage::where('name', 'Header Total')->first();
        $under_grand_total = LandingPage::where('name', 'Paragraf Total')->first();
        $total1 = LandingPage::where('name', 'Isi Heading Total1')->first();
        $total2 = LandingPage::where('name', 'Isi Heading Total2')->first();
        $total3 = LandingPage::where('name', 'Isi Heading Total3')->first();
        $total4 = LandingPage::where('name', 'Isi Heading Total4')->first();
        //about us
        $heading_about_us = LandingPage::where('name', 'Header About Us')->first();
        $body_about_us = LandingPage::where('name', 'Isi About Us')->first();
        //galeri
        $gallery = LandingPage::where('name', 'Header Galeri')->first();
        $gallery_body = LandingPage::where('name', 'Paragraf Galeri')->first();
        $all_body = LandingPage::where('name', 'Heading Button Semua')->first();
        $app_body = LandingPage::where('name', 'Heading Button 1')->first();
        $card_body = LandingPage::where('name', 'Heading Button 2')->first();
        $web_body = LandingPage::where('name', 'Heading Button 3')->first();
        //pemegang sekolahan
        $school_holder = LandingPage::where('name', 'Header Pemegang Sekolah')->first();
        $school_holder_body = LandingPage::where('name', 'Paragraf Pemegang Sekolah')->first();
        $name_holder1 = LandingPage::where('name', 'Nama Petinggi 1')->first();
        $rank_holder1 = LandingPage::where('name', 'Pangkat Petinggi 1')->first();
        $motivational_quotes1 = LandingPage::where('name', 'Motivasi Petinggi 1')->first();
        $name_holder2 = LandingPage::where('name', 'Nama Petinggi 2')->first();
        $name_holder2 = LandingPage::where('name', 'Nama Petinggi 2')->first();
        $motivational_quotes2 = LandingPage::where('name', 'Motivasi Petinggi 2')->first();
        $rank_holder3 = LandingPage::where('name', 'Pangkat Petinggi 3')->first();
        $rank_holder3 = LandingPage::where('name', 'Pangkat Petinggi 3')->first();
        $motivational_quotes3 = LandingPage::where('name', 'Motivasi Petinggi 3')->first();
        $rank_holder4 = LandingPage::where('name', 'Pangkat Petinggi 4')->first();
        $rank_holder4 = LandingPage::where('name', 'Pangkat Petinggi 4')->first();
        $motivational_quotes4 = LandingPage::where('name', 'Motivasi Petinggi 4')->first();
        //FAQs
        $header_faq = LandingPage::where('name', 'Header FAQs')->first();
        $paragraf_faq = LandingPage::where('name', 'Paragraf FAQs')->first();
        $question_faq1 = LandingPage::where('name', 'Pertanyaan FAQs1')->first();
        $answer_faq1 = LandingPage::where('name', 'Jawaban FAQs1')->first();
        $question_faq2 = LandingPage::where('name', 'Pertanyaan FAQs2')->first();
        $answer_faq2 = LandingPage::where('name', 'Jawaban FAQs2')->first();
        $question_faq3 = LandingPage::where('name', 'Pertanyaan FAQs3')->first();
        $answer_faq3 = LandingPage::where('name', 'Jawaban FAQs3')->first();
        $question_faq4 = LandingPage::where('name', 'Pertanyaan FAQs4')->first();
        $answer_faq4 = LandingPage::where('name', 'Jawaban FAQs4')->first();
        $question_faq5 = LandingPage::where('name', 'Pertanyaan FAQs5')->first();
        $answer_faq5 = LandingPage::where('name', 'Jawaban FAQs5')->first();
        //Coontact
        $header_contact = LandingPage::where('name', 'Header Contact')->first();
        $paragraf_contact = LandingPage::where('name', 'Paragraf Contact')->first();
        $address_contact = LandingPage::where('name', 'Heading Alamat Contact')->first();
        $body_address_contact = LandingPage::where('name', 'Isi Alamat Contact')->first();
        $number_contact = LandingPage::where('name', 'Heading Nomor Contact')->first();
        $body_number_contact = LandingPage::where('name', 'Isi Nomor Contact')->first();
        $email_contact = LandingPage::where('name', 'Heading Email Contact')->first();
        $body_email_contact = LandingPage::where('name', 'Isi Email Contact')->first();
        //Footer
        $header_footer = LandingPage::where('name', 'Header Footer')->first();
        $address_footer = LandingPage::where('name', 'Alamat Footer')->first();
        $state_footer = LandingPage::where('name', 'Wilayah Footer')->first();
        $number_footer = LandingPage::where('name', 'Nomor Telepon Footer')->first();
        $email_footer = LandingPage::where('name', 'Email Footer')->first();


        return view('templates.frontend.landing', compact('header', 'home', 'navbar1', 'navbar2', 'navbar3', 'navbar4', 'navbar5', 'navbar6', 'navbar7', 'first_heading', 'under_first_heading', 'heading_about', 'left_about', 'check1_about', 'check2_about', 'check3_about', 'right_about', 'heading_award', 'under_heading_award', 'first_award_head', 'first_award_body', 'second_award_head', 'second_award_body', 'third_award_head', 'third_award_body', 'heading_grand_total', 'under_grand_total', 'total1', 'total2', 'total3', 'total4', 'heading_about_us', 'body_about_us', 'gallery', 'gallery_body', 'all_body', 'app_body', 'card_body', 'web_body', 'school_holder', 'school_holder_body', 'name_holder1', 'rank_holder1', 'motivational_quotes1', 'name_holder2', 'name_holder2', 'motivational_quotes2', 'rank_holder3', 'rank_holder3', 'motivational_quotes3', 'rank_holder4', 'rank_holder4', 'motivational_quotes4', 'header_faq', 'paragraf_faq', 'question_faq1', 'answer_faq1', 'question_faq2', 'answer_faq2', 'question_faq3', 'answer_faq3', 'question_faq4', 'answer_faq4', 'question_faq5', 'answer_faq5', 'header_contact', 'paragraf_contact', 'address_contact', 'body_address_contact', 'number_contact', 'body_number_contact', 'email_contact', 'body_email_contact', 'header_footer', 'address_footer', 'state_footer', 'number_footer', 'email_footer'));
    }

    //PAGE
    function schoolProfile()
    {
        return view('templates.frontend.page.school-profile');
    }
    function award()
    {
        return view('templates.frontend.page.award');
    }
    function blog()
    {
        return view('templates.frontend.page.blog');
    }
    function gallery()
    {
        return view('templates.frontend.page.gallery');
    }
    function about()
    {
        return view('templates.frontend.page.about');
    }
}
