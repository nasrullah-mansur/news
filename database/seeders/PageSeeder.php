<?php

namespace Database\Seeders;

use App\Models\Admin\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'slug' => '/',
            'pl_title' => 'Newspaper Template',
            'sl_title' => 'Plantilla de periódico',
            'pl_description' => 'Newspaper Template',
            'sl_description' => 'Plantilla de periódico',
            'pl_content' => '',
            'sl_content' => '',
        ]);

        Page::create([
            'slug' => 'privacy-policy',
            'pl_title' => 'Privacy and policy',
            'sl_title' => 'privacidad y política',
            'pl_description' => 'Privacy and policy',
            'sl_description' => 'privacidad y política',
            'pl_content' => '<section class="privacy-policy-page section-top pb-90">
                                <div class="container">
                                    <div class="section-title-area mb-50">
                                        <h2 class="section-title">This Privacy policy was published on  <span>April 26th, 2021</span></h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="policy-lsit">
                                                <div class="single-policy">
                                                    <h3>Why we collect and use personal data.</h3>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages</p>
                                                    <ul>
                                                        <li>It is a long established fact that a reader will be distracted by the readable content.</li>
                                                        <li>It is a long established fact that a reader will be distracted.</li>
                                                        <li>It is a long established fact that a reader will be distracted by the readable content.</li>
                                                        <li>It is a long established fact that a reader will be distracted by the readable .</li>
                                                    </ul>
                                                </div>
                                                <div class="single-policy">
                                                    <h3>What rights you have over your data.</h3>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look </p>
                                                </div>
                                                <div class="single-policy">
                                                    <h3>Embedded content from other websites.</h3>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it looknow use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy </p>
                                                </div>
                                                <div class="single-policy">
                                                    <h3>Your rights to your personal data.</h3>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it looknow use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy </p>
                                                    <ul>
                                                        <li>It is a long established fact that a reader will be distracted by the readable content.</li>
                                                        <li>It is a long established fact that a reader will be distracted.</li>
                                                    </ul>
                                                </div>
                                                <div class="single-policy">
                                                    <h3>Changes to this Privacy Policy.</h3>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look  </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>',
            'sl_content' => '<section class="privacy-policy-page section-top pb-90">
                                <div class="container">
                                    <div class="section-title-area mb-50">
                                        <h2 class="section-title">This Privacy policy was published on  <span>April 26th, 2021</span></h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="policy-lsit">
                                                <div class="single-policy">
                                                    <h3>Why we collect and use personal data.</h3>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages</p>
                                                    <ul>
                                                        <li>It is a long established fact that a reader will be distracted by the readable content.</li>
                                                        <li>It is a long established fact that a reader will be distracted.</li>
                                                        <li>It is a long established fact that a reader will be distracted by the readable content.</li>
                                                        <li>It is a long established fact that a reader will be distracted by the readable .</li>
                                                    </ul>
                                                </div>
                                                <div class="single-policy">
                                                    <h3>What rights you have over your data.</h3>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look </p>
                                                </div>
                                                <div class="single-policy">
                                                    <h3>Embedded content from other websites.</h3>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it looknow use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy </p>
                                                </div>
                                                <div class="single-policy">
                                                    <h3>Your rights to your personal data.</h3>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it looknow use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy </p>
                                                    <ul>
                                                        <li>It is a long established fact that a reader will be distracted by the readable content.</li>
                                                        <li>It is a long established fact that a reader will be distracted.</li>
                                                    </ul>
                                                </div>
                                                <div class="single-policy">
                                                    <h3>Changes to this Privacy Policy.</h3>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look  </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>',
        ]);

        Page::create([
            'slug' => 'request-add',
            'pl_title' => 'Request For Aadd',
            'sl_title' => 'solicitud de agregar',
            'pl_description' => 'Request For Aadd',
            'sl_description' => 'solicitud de agregar',
            'pl_content' => '',
            'sl_content' => '',
        ]);

        Page::create([
            'slug' => 'cookies',
            'pl_title' => 'Cookies',
            'sl_title' => 'Cookies',
            'pl_description' => 'Cookies',
            'sl_description' => 'Cookies',
            'pl_content' => '<section class="cookies-page section-top pb-90">
                                <div class="container">
                                    <div class="section-title-area mb-50">
                                        <h2 class="section-title">All Cookies <span>Accept</span></h2>
                                    </div>
                                    <div class="cookies-list">
                                        <div class="single-cookies">
                                            <h3>Why we collect and use personal data.</h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages</p>
                                        </div>
                                        <div class="single-cookies">
                                            <h3>Why we collect and use personal data.</h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages</p>
                                        </div>
                                        <div class="single-cookies">
                                            <h3>Why we collect and use personal data.</h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages</p>
                                        </div>
                                        <div class="single-cookies">
                                            <h3>Why we collect and use personal data.</h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages</p>
                                        </div>
                                        <div class="single-cookies">
                                            <h3>Why we collect and use personal data.</h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages</p>
                                        </div>
                                    </div>
                                </div>
                            </section>',
            'sl_content' => '<section class="cookies-page section-top pb-90">
                                <div class="container">
                                    <div class="section-title-area mb-50">
                                        <h2 class="section-title">All Cookies <span>Accept</span></h2>
                                    </div>
                                    <div class="cookies-list">
                                        <div class="single-cookies">
                                            <h3>Why we collect and use personal data.</h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages</p>
                                        </div>
                                        <div class="single-cookies">
                                            <h3>Why we collect and use personal data.</h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages</p>
                                        </div>
                                        <div class="single-cookies">
                                            <h3>Why we collect and use personal data.</h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages</p>
                                        </div>
                                        <div class="single-cookies">
                                            <h3>Why we collect and use personal data.</h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages</p>
                                        </div>
                                        <div class="single-cookies">
                                            <h3>Why we collect and use personal data.</h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages</p>
                                        </div>
                                    </div>
                                </div>
                            </section>',
        ]);

        Page::create([
            'slug' => 'faq',
            'pl_title' => 'faq',
            'sl_title' => 'faq',
            'pl_description' => 'faq',
            'sl_description' => 'faq',
            'pl_content' => '',
            'sl_content' => '',
        ]);

        Page::create([
            'slug' => 'contact',
            'pl_title' => 'Contact',
            'sl_title' => 'Contacto',
            'pl_description' => 'Contact',
            'sl_description' => 'Contacto',
            'pl_content' => '',
            'sl_content' => '',
        ]);





    }
}
