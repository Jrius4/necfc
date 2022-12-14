<div class="bottom-wrapper">
    <div class="tm-bottom-f-box  ">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-f" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">

                <div class="uk-width-1-1">
                    <div class="uk-panel">
                        <div class="footer-logo">
                            <a href="javascript:void(0)"><img src="/assets/images/logos/logo.png"
                                    alt=""><span>NEC</span> FOOTBALL CLUB</a>
                        </div>
                        <div class="footer-socials">
                            <div class="social-top">
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                                <a href="#"><span
                                        class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                <a href="#"><span
                                        class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <p class="footer-about-text">
                            The formation of the football club was initially crafted from the
                            philosophy of having harmonized physical workout sessions amongst the
                            staff of NEC for body fitness. The ideas and ambitions of the members
                            grew bigger leading to formation of football team that started playing
                            friendly matches with established football clubs within Kampala.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="tm-bottom-g-box  ">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-g" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-width-large-1-2">
                    <div class="uk-panel">
                        <div class="match-list-wrap foot">
                            <div id="carusel-7" class="uk-slidenav-position"
                                data-uk-slideshow="{ height : 37, autoplay:true, animation:'scroll' }">
                                <div class="last-match-top">
                                    <div class="last-match-title">Matches</div>
                                    <div class="footer-slider-btn">
                                        <a href="javascript:void(0)"
                                            class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
                                            data-uk-slideshow-item="previous"></a>
                                        <a href="javascript:void(0)"
                                            class="uk-slidenav uk-slidenav-contrast uk-slidenav-next"
                                            data-uk-slideshow-item="next"></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <ul class="uk-slideshow">
                                    @foreach ($matches = App\SoccerModels\Match::with('teams', 'matchReport')->orderBy('date', 'asc')->get() as $match)
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="javascript:void(0)">
                                                            <img src="/img/teams/{{ App\SoccerModels\Team::all()->where('id', $match->home_team_id)->first()->logo }}"
                                                                class="img-polaroid">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        {{ App\SoccerModels\Team::all()->where('id', $match->home_team_id)->first()->name }}
                                                    </div>
                                                    @if ($match->home_team_score == null && $match->away_team_score == null)
                                                        <div class="versus">VS</div>
                                                    @endif
                                                    @if ($match->home_team_score != null && $match->away_team_score != null)
                                                        <div class="versus"> {{ $match->home_team_score }} :
                                                            {{ $match->away_team_score }}</div>
                                                    @endif






                                                    <div class="team-name">
                                                        {{ App\SoccerModels\Team::all()->where('id', $match->away_team_id)->first()->name }}
                                                    </div>
                                                    <div class="logo">
                                                        <a href="javascript:void(0)">
                                                            <img src="/img/teams/{{ App\SoccerModels\Team::all()->where('id', $match->away_team_id)->first()->logo }}"
                                                                class="img-polaroid">
                                                        </a>
                                                    </div>
                                                    <a class="read-more"
                                                        href="{{ route('match.matches.show', $match->slug) }}">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>




                        </div>
                    </div>
                </div>

                <div class="uk-width-1-1 uk-width-large-1-2">
                    <div class="uk-panel">
                        <div class="acymailing_module" id="acymailing_module_formAcymailing54111">
                            <div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing54111">
                                <form id="formAcymailing54111" method="post" name="formAcymailing54111">
                                    <div class="acymailing_module_form">
                                        <div class="mail-title">Newsletters</div>
                                        <div class="acymailing_introtext">Suspendisse sodales, magna at dignissim
                                            cursus, velit ex porttitor eros.</div>
                                        <div class="clear"></div>
                                        <div class="space"></div>
                                        <table class="acymailing_form">
                                            <tbody>
                                                <tr>
                                                    <td class="acyfield_email acy_requiredField">
                                                        <span class="mail-wrap">
                                                            <input id="user_email_formAcymailing54111"
                                                                onfocus="if(this.value == 'Enter your email') this.value = '';"
                                                                onblur="if(this.value=='') this.value='Enter your email';"
                                                                class="inputbox" name="user[email]" style="width:80%"
                                                                value="Enter your email" title="Enter your email"
                                                                type="text">
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td class="acysubbuttons">
                                                        <span class="submit-wrap">
                                                            <span class="submit-wrapper">
                                                                <input class="btn btn-md" value="Subscribe"
                                                                    name="Submit"
                                                                    onclick="try{ return submitacymailingform('optin','formAcymailing54111'); }catch(err){alert('The form could not be submitted '+err);return false;}"
                                                                    type="submit">
                                                            </span>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <footer id="tm-footer" class="tm-footer">


        <div class="uk-panel">
            <div class="uk-container uk-container-center">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="footer-wrap">
                            <div class="foot-menu-wrap">
                                <ul class="nav menu">
                                    <li class="item-165"><a href="javascript:void(0)">About</a>
                                    </li>
                                    <li class="item-166"><a href="javascript:void(0)">Players</a>
                                    </li>
                                    <li class="item-167"><a href="javascript:void(0)">Match</a>
                                    </li>
                                    <li class="item-168"><a href="javascript:void(0)">Results</a>
                                    </li>
                                    <li class="item-169"><a href="javascript:void(0)">News</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="copyrights">Copyright ?? 2020 <a href="javascript:void(0)">LeeroSports</a>. All
                                Rights Reserved.</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<div id="offcanvas" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas">
            <li class="uk-parent"><a href="/#/">Home</a>
                <ul class="uk-nav-sub">
                    <li><a class="blue-scheme" href="/#/matches-list">Matches</a>
                    </li>
                </ul>
            </li>
            <li><a href="/about">About</a></li>

            <li><a href="/#/players">Players</a>
            </li>

            <li class="uk-parent"><a href="/#/matches-list">Match</a>
                <ul class="uk-nav-sub">
                    <li><a class="blue-scheme" href="/#/results">Results</a>
                    </li>
                </ul>
            </li>
            <li><a href="/#/list-posts">News</a>
            </li>
            <li><a href="/#/shop">Shop</a>
            </li>
            <li><a href="/contact">Contact</a>
            </li>
        </ul>
    </div>
</div>
