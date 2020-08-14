@extends('layouts.main')

@section('title', 'Blog')

@section('content')

@include('layouts.inc.header-section')
    <div class="container">
        <div class="row">

           
                <div class="col-lg-8 col-md-12 col-sm-12 content-about">
                        <h4>How <span class="text-primary">NDEBI <img src="/img/ndebi-tech-favi-blue.png" alt="" width="25px" height="25px"/> TECH</span> <span></span> works</h4>
                        <hr>
                        <div class="bg-light p-4 m-2 text-wrap text-sm-justify">
                           <p>
                                Well-developed messages, strong stories and creative ideas are at the heart
                                of our work. We use them to build powerful content marketing and video
                                marketing campaigns.
                                Whether you need help in developing initial messaging or already have a
                                clear vision of a final product, our comprehensive video production and video
                                marketing services can help. We have a well-defined and effective process to
                                guide you through from first steps to final goals.
                           </p>
                           <br><br>
           
                                   <h4>Listen</h4>
                                   <p>
                                        As obvious as it may appear, we never underestimate the
importance of listening to you. We run messaging sessions with
key stakeholders to nail down aims and objectives and uncover
the most effective way of talking to your audience.
                                   </p>
<br><br>
           
                                   <h4>Audience & Message</h4>
                                   <p>Where does your audience work and play? Where do they live
                                        their digital lives? What do they find engaging and shareable?
                                        It's these insights which help us perfect a message that
                                        resonates with viewers and ensures the success of your video
                                        campaign.
                                    </p>
           <br>
           <br>
           
                                   <h4>Imagine</h4>
                                   <p>
                                        This is the fun bit where your goals and objectives meet a blank
                                        piece of paper. We think, brainstorm, write, sketch, style and
                                        plan the perfect creative solution.
                                   </p>
           
<br>
<br>
          
<h4>Create</h4>
<p>With the plan in place it's time to shoot, design, chop, draw,
        model and edit our way to a first cut. We build in opportunities
        for feedback so when we reach the final cut you're totally
        happy with the end result.
    </p>
<br>
<br> 


           <h4>Deliver</h4>
            <p>Making a great film isn't enough to ensure success. It has to
                    end up in front of the right people. We help you distribute and
                    promote the campaign with bought, earned and viral seeding.From YouTube advertising to digital PR we help you get it seen
                    in the right places.
                </p>   
           <br><br>  
           
           <h4>Analyze</h4>
           <p>As your video is making its way in the digital world we monitor
                it for you. We track posts, tweets, retweets and views so you
                can see what's working .... because when you know what's
                working you will know how you repeat your success.
               </p>   
          <br><br> 
           
           
                        </div>
           
                       </div>

            @include('layouts.sidebar')
        </div>
    </div>

@endsection
