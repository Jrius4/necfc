import React from 'react';
import trainer from '../images/trainer-slider/trainer-img.jpg';
import trainer1 from '../images/trainer-slider/trainer-img1.jpg';
import trainer2 from '../images/trainer-slider/trainer-img2.jpg';

const AboutHome = () => {
  return (

    <div className="tm-top-c-box tm-full-width  home-about">
    <div className="uk-container uk-container-center">
        <section id="tm-top-c" className="tm-top-c uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

            <div className="uk-width-1-1 uk-width-large-1-2">
                <div className="uk-panel">
                    <div className="va-about-wrap clearfix uk-cover-background uk-position-relative">
                        <div className="va-about-text">
                            <div className="title">About <span>Team</span>
                            </div>
                            <p>NEC Football Club (NEC FC) was formed in the year 2018 with the
objective of raising the NEC profile and brand in the public domain.
Football as a sport is a coded form of entertainment that appeals to
billions of fans globally thus creating loyalties and sense of belonging by
supporters. </p>
                            <p>The  formation  of  the  football  club  was  initially  crafted  from  the
philosophy of having harmonized physical workout sessions amongst the
staff of NEC for body fitness.  The ideas and ambitions of the members
grew bigger leading to formation of football team that started playing
friendly matches with established football clubs within Kampala.</p>
                            <a className="read-more" href="about.html">read more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div className="uk-width-1-1 uk-width-large-1-2">
                <div style={{minHeight: '497px'}} className="uk-panel">
                    <div className="trainers-module tm-trainers-slider ">
                        <div className="trainer-wrapper">
                            <div data-uk-slideset="{default: 1, animation: 'fade', duration: 400, autoplay:true,loop:true}">
                                <div className="trainer-top">
                                    <div className="trainers-btn">
                                        <a href="../index.html" className="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                                        <a href="../index.html" className="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideset-item="next"></a>
                                    </div>
                                    <h3>Trainers</h3>
                                </div>
                                <ul className="uk-grid uk-slideset uk-grid-width-1-1">
                                    <li className="uk-active" style={{}}>
                                        <div className="img-wrap"><img src={trainer} alt=""/>
                                        </div>
                                        <div className="name">Okello<span>Micheal</span>
                                        </div>
                                    </li>
                                    <li style={{display: 'none'}}>
                                        <div className="img-wrap"><img src={trainer1} alt=""/>
                                        </div>
                                        <div className="name">Odongo<span>Ibra</span>
                                        </div>
                                    </li>
                                    <li style={{display: 'none'}}>
                                        <div className="img-wrap"><img src={trainer2} alt=""/>
                                        </div>
                                        <div className="name">Mutyawe<span>Kato</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
  )
}

export default AboutHome
