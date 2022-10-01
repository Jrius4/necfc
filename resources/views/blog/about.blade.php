@extends('layouts.main')

@section('title', 'Blog')

@section('content')

    @include('layouts.inc.header-section')
    <div class="container">
        <div class="row">


            <div class="col-lg-8 col-md-12 col-sm-12 content-about">
                <h3 class="text-center"><span>About &nbsp;</span><span class="text-primary">NDEBI TECH</span> <span><img
                            src="/img/ndebi-tech-favi-blue.png" alt="" width="25px" height="25px"></span></h3>
                <hr>
                <div class="bg-light p-4 m-2 text-wrap text-sm-justify">

                    <h4>Business </h4>
                    <p>
                        Our aim is to fulfill our customers and consumers needs
                        Across our portfolio, our businesses demonstrate their innovative capability by translating customer
                        and end-user insights into meaningful technology solutions and services that transform the spaces
                        that we operate
                    </p>
                    <br>
                    <br>
                    <h4>Mission</h4>
                    <p>
                        To rethink and shape the space of the continent through technology.
                    </p>
                    <br>
                    <br>
                    <h4>Vision </h4>
                    <p>
                        We strive to shape and fundamentally transform the space of the continent through innovation.

                        <br>
                        <br>
                    <h4>Shaping the Future</h4>
                    <p>
                        Inspired by our vision, we are a learning organization that challenges and tasks itself each day to
                        rethink and fundamentally challenge the status quo to create new ways to shape our future by
                        engaging our dedicated team together with local people to deliver excellence in our user experience
                        and product development.
                        we are challenged and equally tasked everyday to rethink and fundamentally question the status quo
                        to find and create new ways to shape our future.

                    </p>
                    <br>
                    <br>
                    <h4>Driving Innovation</h4>
                    <p>
                        By adopting an Open Innovation strategy and harnessing our relationships with our clients , we are
                        constantly rethinking new and better ways of doing business today to create and empower brands to
                        thrive for the future.
                        By adopting an Open Innovation strategy and harnessing our relationships with institutes, academia
                        and industrial partners, we leverage company-wide synergies in technology, research, design and IP
                        to bring innovations to market faster and more effectively.

                    </p>
                    <br>
                    <br>
                    <h4>Supporting innovation from idea to product the Advertising</h4>
                    <p>
                        With the continuous dynamic changes happening in advertising and marketing today, we deliver
                        creative, innovative marketing strategies combined with integral
                        technology solutions that are designed to drive results for your brand while lowering costs.
                        Ndebi tech leverages advanced technology combined with its continuous understanding of the digital
                        age and online consumer behavior to draft customized solutions to our clients.
                        We help you create demand for your product or service in the African market
                        Employ our fullscale production services
                        and experienced commercial contributors to maintain complete creative control of your storytelling
                        while we do the heavy lifting.
                        From casting and location scouting to rights clearance and remote settings,
                        we tackle every production challenge saving you time, money, and hassle.
                    </p>
                    <br>
                    <br>
                    <h4>Strategic Experience & guidance.</h4>
                    <p>
                        Steer up your content strategy with data-driven insights from our team of experts.
                    </p>


                </div>

            </div>

            @include('layouts.sidebar')
        </div>
    </div>

@endsection
