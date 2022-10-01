<div class="tm-top-f-box tm-full-width  va-main-our-news">
    <div class="uk-container uk-container-center">
        <section id="tm-top-f" class="tm-top-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
            data-uk-grid-margin="">
            <div class="uk-width-1-1">
                <div class="uk-panel">
                    <div class="uk-container uk-container-center">
                        <div class="uk-grid uk-grid-collapse" data-uk-grid-match="">
                            <div class="uk-width-1-1">
                                <div class="our-news-title">
                                    <h3>Our <span>News</span></h3>
                                </div>
                                <div class="our-news-text">Formally registered as NEC FC by FUFA, NEC’s debut season in
                                    the FUFA
                                    Lower League Division was remarkably sublime and exceptional. NEC FC
                                    was subsequently promoted to Division 1 of the FUFA Lower League in
                                    the 2018/2019 season,
                                    <br> After its formation, the football club has since been under the
                                    stewardship and support of well-wishers within the NEC fraternity for this
                                    long. It’s the passion for the good sport, objectives of the club and
                                    patriotism that has long driven the club to the realized heights.
                                </div>
                            </div>

                            @foreach ($news as $post)
                                <article
                                    class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article"
                                    data-uk-grid-match="">
                                    @if ($post->image != null)
                                        <div class="img-wrap uk-cover-background uk-position-relative"
                                            style="background-image: url({{ $post->image_url }}); min-height: 280px;">


                                            <a href="{{ route('blog.show', $post->slug) }}"></a>
                                            <img class="uk-invisible" src="{{ $post->image_url }}" alt="">

                                        </div>
                                    @else
                                        <div class="img-wrap uk-cover-background uk-position-relative"
                                            style="background:linear-gradient(90deg, rgba(2,0,36,1) 10%, rgba(9,9,121,1) 63%, rgba(1,18,22,1) 100%); min-height: 280px;">


                                            <a href="{{ route('blog.show', $post->slug) }}"></a>
                                            <img class="uk-invisible" src="{{ $post->image_url }}" alt="">

                                        </div>
                                    @endif
                                    <div style="min-height: 280px;" class="info">
                                        <div class="date">
                                            {{ $post->date }} </div>
                                        <div class="name">
                                            <h4>
                                                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                            </h4>
                                        </div>
                                        <div class="text">
                                            <p>{{ $post->excerpt }}</p>
                                            <div class="read-more"><a href="{{ route('blog.show', $post->slug) }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>

                                </article>
                            @endforeach


                        </div>
                    </div>
                    <div class="all-news-btn"><a href="news.html"><span>All News</span></a>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
