@extends('layouts.app')
@section('content')
<div id="Subheader" style="padding:40px 0;">
    <div class="container">
        <div class="column one">
            <h1 class="title">Contact</h1>
        </div>
    </div>
</div>
</div>
<div id="Content">
<div class="content_wrapper clearfix">
    <div class="sections_group">
        <div class="entry-content">
            <div class="section mcb-section" style="padding-top:50px; padding-bottom:10px; ">
                <div class="section_wrapper mcb-section-inner">
                    <div class="wrap mcb-wrap one  valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_column">
                                <div class="column_attr align_center">
                                    
                                </div>
                            </div>
                            <div class="column mcb-column one-second column_column">
                                <div class="column_attr align_right">
                                    <div class="list_item lists_2 clearfix">
                                        <a href="#">
                                            <div class="list_left list_image"><img src={{  asset('images1/home_pharmacy_contact_icon2.png')}} class="scale-with-grid" alt="home_pharmacy_contact_icon2" width="49" height="49" />
                                            </div>
                                            <div class="list_right">
                                                <h4>info@globalsurgicalcare.com</h4>
                                                <div class="desc">
                                                    
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="column mcb-column one-second column_column">
                                <div class="column_attr">
                                    <div class="list_item lists_2 clearfix">
                                        <a href="#">
                                            <div class="list_left list_image"><img src={{  asset('images1/home_pharmacy_contact_icon1.png')}} class="scale-with-grid" alt="home_pharmacy_contact_icon1" width="49" height="49" />
                                            </div>
                                            <div class="list_right">
                                                <h4>+81 90-4284-3888</h4>
                                                <div class="desc">
                                                    
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="column mcb-column one column_divider ">
                                <hr style="margin: 0 auto 60px;" />
                            </div>
                        </div>
                    </div>
                    <div class="wrap mcb-wrap one-third  valign-top clearfix" style="padding:0 3% 0 0">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_opening_hours ">
                                <div class="opening_hours" style="background-image:url(images/home_pharmacy_opening_hours.png);">
                                    <h3>Our office</h3>
                                    <div class="opening_hours_wrapper">
                                        <p>
                                            Room 8378, building 62, east side of liulaogongzhuang (Beijing Int Plastic Machinery Factory), Liyuan Town, Tongzhou District, Beijing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap mcb-wrap two-third  valign-top clearfix" style="padding:20px 0 0 0">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column one column_column">
                                <div class="column_attr">
                                    <h2>Write a message</h2>
                                    <p class="big">
                                        Duis ornare tempus interdum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse mi sem, porta a volutpat.
                                    </p>
                                    <hr class="no_line" style="margin: 0 auto 25px;" />
                                    <div id="contactWrapper">
                                        <form id="contactform">
                                            <div class="column one-second">
                                                <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                            </div>
                                            <div class="column one-second">
                                                <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                            </div>
                                            <div class="column one">
                                                <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                            </div>
                                            <div class="column one">
                                                <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                            </div>
                                            <div class="column one">
                                                <input type="button" value="Send A Message" id="submit" onClick="return check_values();">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section the_content no_content">
                <div class="section_wrapper">
                    <div class="the_content_wrapper"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection