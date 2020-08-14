@extends('layouts.main')

@section('title', 'Blog')

@section('content')

@include('layouts.inc.header-section')
    <div class="container">
        <div class="row">

           
                <div class="col-lg-8 col-md-12 col-sm-12 content-about">
                        <h4><span class="text-primary">NDEBI <img src="/img/ndebi-tech-favi-blue.png" alt="" width="25px" height="25px"/> TECH</span> <span></span> services</h4>
                        <hr>
                        <div class="bg-light p-4 m-2 text-wrap text-sm-justify">
                           
           
                                   <h4>Our in-house services include:</h4>
                                   <p>
                                       <ul>
                                           <li> Search Engine Optimization (SEO)</li>
                                           <li>Social Media</li>
                                           <li>Web Design & Development</li>
                                           <li>Pay-Per-Click (PPC)</li>
                                           <li>Digital Content & Video</li>
                                           <li>Photography (Product & Event)</li>
                                       </ul>
                                   </p>
                                   <h4>Data Science</h4>
                                   <p>
                                        Data is the key and Ndebitech is helping companies to leverage the power of data through in depth research and data analytics creating an eco-system that is enabling businesses understand their consumers.
                                        We strive to use data to enable businesses thrive for the future.
                                   </p>
<br><br>
           
                                   <h4>Brand Identity</h4>
                                   <p>
                                        If you want your brand to succeed and thrive in the future, you need to build a brand identity that accurately conveys your essence and is flexible enough to evolve with you.
                                   </p>
           <br>
           <br>
           
                                   <h4>We create authentic and engaging identities for brands.</h4>
                                   <p>
                                        At Ndebi tech, the identities and visuals we create are built on a strategic process that gets to the heart of the values & mission of your brand. We offer consulting, research and design that reinforces your brand in print, digital and video.</p>
           
<br>
<br>
          
<h4>A creative force for innovation</h4>
<p>
        Our world class design capabilities are key to ensuring that our innovations are intuitive, powerful, differentiating and truly relevant and meaningful.
</p>
<br>
<br> 


           <h4>Digital Marketing</h4>
            <p>
                    In today’s digital business world, you need a partner who can help you take advantage of marketing opportunities across a variety of channels in real-time. Ndebi tech combines a data-driven approach with knowledge gained from years in digital marketing to deliver outstanding results to our clients. We have generated over 60 clients for digital marketing around the region and built hundreds of websites.
            </p>   
           <br><br>           
           
           
                        </div>
           
                       </div>

            @include('layouts.sidebar')
        </div>
    </div>

@endsection
