@extends('layouts.front_layout.design')
@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
</div>
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">

        <ul class="short">
            <li><a href="{{ route('index') }}">Home</a><span>|</span></li>
            <li>About</li>
        </ul>
    </div>
</div>
<!--//banner_info-->
<!--/ab-->
<div class="banner_bottom">
    <div class="container">
      <h3 class="tittle-w3ls">About Us</h3>
      <div class="inner_sec_info_wthree_agile">
        <div class="help_full">
          <div class="col-md-6 banner_bottom_grid help">
            <img src="{{ asset('images/webimgs/banner1.jpg') }}" alt=" " class="img-responsive">
          </div>
          <div class="col-md-6 banner_bottom_left">
            <h4>Christ&#39;s Evangelistic Church (CEC)</h4>
          <p>We are a body of churches dedicated to serving God&#39;s purposes in the present times and fulfilling the great commission 
            <code>&#34;Therefore go and make disciples of all nations, baptizing them in the name of the Father and of the Son and of the 
              Holy Spirit, and teaching them to obey everything I have commanded you. And surely I am with you always, to the very end 
              of the age&#34; (Matthew 28:18-20)</code> mandated by Jesus Christ. </p>
                <h4>Our Vision</h4>
                <p>To see people evangelized, discipled, equipped, empowered and serving God faithfully.</p>
                <h4>Mission Statement</h4>
                <p>To win people to Jesus Christ, disciple them to disciple nations so that they can affect the churches and communities world over.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--//ab-->
<!--/what-->
<div class="works">
    <div class="container">
      <h3 class="tittle-w3ls cen">CORE VALUES</h3>
      <div class="inner_sec_info_wthree_agile">
        <div class="ser-first">
          <div class="col-md-3 ser-first-grid text-center">
            <span class="fa fa-shield" aria-hidden="true"></span>
            <h3>Team work</h3>
            <p></p>
          </div>
          <div class="col-md-3 ser-first-grid text-center">
            <span class="fa fa-pencil" aria-hidden="true"></span>
            <h3>Integrity in all aspects of Christian living</h3>
            <p></p>
          </div>
          <div class="col-md-3 ser-first-grid text-center">
            <span class="fa fa-star" aria-hidden="true"></span>
            <h3>Accountability and transparency</h3>
            <p></p>
          </div>
          <div class="col-md-3 ser-first-grid text-center">
            <span class="fa fa-thumbs-up" aria-hidden="true"></span>
            <h3>Diligence</h3>
            <p></p>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="inner_sec_info_wthree_agile">
        <div class="ser-first">
          <div class="col-md-3 ser-first-grid text-center">
            <span class="fa fa-thumbs-up" aria-hidden="true"></span>
            <h3>Responsibility</h3>
            <p></p>
          </div>
          <div class="col-md-3 ser-first-grid text-center">
            <span class="fa fa-heart" aria-hidden="true"></span>
            <h3>Love</h3>
            <p></p>
          </div>
          <div class="col-md-3 ser-first-grid text-center">
            <span class="fa fa-heart" aria-hidden="true"></span>
            <h3>Respect and loyalty</h3>
            <p></p>
          </div>
          <div class="col-md-3 ser-first-grid text-center">
            <span class="fa fa-heart" aria-hidden="true"></span>
            <h3>Hospitality</h3>
            <p></p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
  
    </div>
  </div>
<!--//what-->
<!--Leadership structure-->
<div class="banner_bottom proj">
    <div class="container">
        <h3 class="tittle-w3ls">Leadership Structure</h3>
        <div class="container">
            <div class="inner_sec_info_wthree_agile">
                <div class="col-md-3"></div>
                <div class="col-md-6">
        <img src="{{ asset('images/webimgs/leadership_structure.png') }}" alt="" class="img-responsive image-responsive"/>
                </div>
                <div class="col-md-3"></div>
    </div>
    </div>
    </div>
</div>
<!--//Leadership-->
    <!-- /team -->
    <div class="banner_bottom proj">
        <div class="container">
            <h3 class="tittle-w3ls">Our Leaders</h3>
            <div class="inner_sec_info_wthree_agile">
                <div class="col-md-3 team_grid_info">
                    <img src="{{ asset('images/webimgs/pastors/uploads/kephar.jpg')}}" alt=" " class="img-responsive" />
                    <h3>Bishop Dr. Kephar Asunga Okwembe </h3>
                    <p>Preciding Bishop</p>
                    <div class="team_icons">
                        <ul>
                            <li><a href="https://www.facebook.com/kepher.okwemba.75" target="-blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 team_grid_info">
                    <img src="{{ asset('images/webimgs/pastors/uploads/ombori.jpg')}}" alt=" " class="img-responsive" />
                    <h3>Bishop Ongilo O.Odundo</h3>
                    <p>Deputy Preciding Bishop</p>
                    <div class="team_icons">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 team_grid_info">
                    <img src="{{ asset('images/webimgs/pastors/bishop_opo.jpg')}}" alt=" " class="img-responsive" />
                    <h3>Bishop Dr. Aggrey Opo</h3>
                    <p>General Secretary and bishop Malaha Region</p>
                    <div class="team_icons">
                        <ul>
                            <li><a href="https://www.facebook.com/aggrey.opo" target="-blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 team_grid_info">
                    <img src="{{ asset('images/webimgs/pastors/uploads/kibisu.jpg')}}" alt=" " class="img-responsive" />
                    <h3>Bishop Dr. Michael Kibisu </h3>
                    <p>Deputy General Secretary and bishop Malava Region</p>
                    <div class="team_icons">
                        <ul>
                            <li><a href="https://www.facebook.com/michael.kibisu.7" target="-blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="inner_sec_info_wthree_agile">
                <div class="col-md-3 team_grid_info">
                    <img src="{{ asset('images/webimgs/pastors/bishop_mangeni.jpg') }}" alt=" " class="img-responsive" />
                    <h3>Bishop Dr. Julius W.O Mange&#39;ni  </h3>
                    <p>General Treasurer and bishop Eldoret Region </p>
                    <div class="team_icons">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 team_grid_info">
                    <img src="{{ asset('images/webimgs/pastors/bishop_ochieng.jpg')}}" alt=" " class="img-responsive" />
                    <h3>Bishop Stanley Ochieng Odingo</h3>
                    <p>Director of Christian Education and Bishop Mfangano Region</p>
                    <div class="team_icons">
                        <ul>
                            <li><a href="https://www.facebook.com/stanely.odingo" target="-blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 team_grid_info">
                    <img src="{{ asset('images/webimgs/pastors/uploads/captain.jpg')}}" alt=" " class="img-responsive" />
                    <h3>Bishop Dr. Captain Mulehi</h3>
                    <p>Leader-Men&#39;s Ministry and Bishop Kakamega Region</p>
                    <div class="team_icons">
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=100010533398447" target="-blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 team_grid_info">
                    <img src="{{ asset('images/webimgs/pastors/uploads/silas.jpg')}}" alt=" " class="img-responsive" />
                    <h3>Bishop Silas Ombori</h3>
                    <p>Head of Missions and Church planting and Bishop Sindo Region</p>
                    <div class="team_icons">
                        <ul>
                            <li><a href="#" target="-blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="inner_sec_info_wthree_agile">
                <div class="col-md-3 team_grid_info">
                    <img src="{{ asset('images/webimgs/pastors/bishop_mr_and_mrs_wamalwa.jpg')}}" alt=" " class="img-responsive" />
                    <h3>Bishop Dr. Joram Wamalwa</h3>
                    <p>Bishop- Tranzoia Region </p>
                    <div class="team_icons">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //team -->
<!--/Objectives-->
<div class="banner_bottom container">
        <h3 class="tittle-w3ls">Objectives</h3>
        <div class="inner_sec_info_wthree_agile">
            <div class="help_full">
                    <ol type="A">
                        <li>To carry out missionary work of spreading the Gospel of Jesus Christ, training and developing Christians to fulfill their calling to serve God 
                            effectively in collaboration with other churches and agencies. </li>
                        <li>To plant and establish dynamic local churches which shall be referred to as Christ&#39;s Evangelistic Church (CEC) and they shall be self supporting, 
                            self-governing and self-propagating. </li>
                        <li>To establish and administer Christian Educational institutions, hospitals, Care for the orphaned children, widowed, persons with disability, 
                            senior citizens and other social welfare institutions. </li>
                        <li>To offer guidance and counseling services and humanitarian assistance.</li>
                        <li>To establish and promote community-based projects that shall empower both the rural and urban poor, in areas of agriculture, communication, 
                            industrial enterprises, technology, environmental preservation, and give them a place in society, in line with the CEC statement of faith and the 
                            Bible. </li>
                        <li>Conduct church ministries such as outdoor evangelistic meetings, Revival meetings, leadership seminars, sports activities for children, youth, men
                             and women, in line with the CEC statement of faith and the Bible.</li>
                        <li>To be a prophetic voice to the nations in giving spiritual and moral guidance. 
                        <li>To publish and distribute books, magazines, newsletters, radio and Television Programs, audio and video materials and any other issues for the 
                            purposes of achieving the stated objectives.</li>
                        <li>Own land, buildings or any other property, to hold in trust, use, sell, convey, mortgage, lease or otherwise dispose of such property for 
                            enhancing the objectives of the CEC.</li>
                        <li>To carry out any such other acts and charitable transactions as is necessary and advisable for the enhancement of the objectives of the Church.</li>
                        </ol>
                <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//objectives-->
<!--/Statement Of faith-->
<div class="banner_bottom container">
        <h3 class="tittle-w3ls">Statement of Faith</h3>
        <div class="inner_sec_info_wthree_agile">
            <div class="help_full">
                    <ol type="A">
                        <li>We believe the Bible is the inspired Word of God, the infallible, authoritative rule of faith and conduct; that it was written by Holy men of 
                            God as they were inspired by the Holy Spirit <code>(2 Timothy 2:15&#59; 3:16-17, 2 Peter 1:21)</code>.</li>
                        <li>We believe that there is one true and living God, eternally existent in three persons; God the Father, God the son, and God the Holy Spirit
                            <code> (Genesis 1:1, John 1:14,18, 2Corinthians 13:14)</code>.</li>
                        <li>We believe in the deity and humanity of our Lord Jesus Christ, His virgin birth, His sinless life, His crucifixion, His bodily resurrection, 
                            His ascension to glory and His promised second coming <code>(John 5:22-23, Mathew 1:23, 1 Peter 2:22, 1 Cor. 15:3,4, Acts 1:9-11)</code>.</li>
                        <li>We believe man was created in the image of God, but by voluntary transgression, fell from Edenic holiness and purity, and his only hope of 
                            redemption (Salvation) is through Jesus Christ, the son of God <code>(Genesis 1:26,31, Romans 5:12-19, 10:9-15, Eph. 2:8, Hebrews 9:22)</code>.</li>
                        <li>We believe in water baptism by immersion as commanded in the scripture to all who have repented and believed in the Lord Jesus Christ <code>
                            (Matthew 28:19, Mark 1:9-10; 16:16, John 3:22-23, Acts 8:12, 36-38)</code>.</li>
                        <li>We believe in the institution of the Lord&#39;s Supper (Holy Communion) performed in remembrance of Jesus Christ <code>(1 Cor. 11: 23-31, Luke 22:19-20,
                             Mathew 26:26-28)</code>.</li>
                        <li>We believe that the baptism of the Holy Spirit is a definite experience subsequent to the new birth. The endowment of power is expected after the 
                            same manner as that which came upon the Jews and Gentiles alike in Apostolic days <code>(Matthew 3:11, John 14:17-18, Acts 1:4,8, Acts 2:4;10:44&#45;46)</code>.</li>
                        <li>We believe divine healing and miracles are an integral part of the gospel, as proof that God exists and that the Bible is God&#39;s Word <code>(Isaiah 53:4-5, 
                            Matt. 8.16&#45;17, James 5:14&#45;16, Acts 5:15, Luke 7:14&#45;15)</code>.</li>
                        <li>We believe that Heaven is a reality, a place prepared for all those that believe upon the Lord Jesus Christ; <code>(John 14:2, Revelation 7:14-17; 22:4-5)</code>.</li>
                        <li>We believe that Hell is a reality, a place prepared for the devil and his angels and all those who have rejected the mercy of the crucified savior. They shall be 
                            cast into outer darkness, where there shall be weeping and gnashing of teeth. <code>(Mathew 13:41&#45;42; 25:41, Luke 16:23, 2 Thess. 1:19, 2 Peter 2:4, Rev. 20:10-15)</code>.</li>
                        <li>We believe that the church is the Body of Christ and that every believer born of the Spirit is a member of that body <code>(Eph. 5:23, 26, 32, 
                            Eph. 4:15&#45;16, 1 Corinthians 12:13)</code>.</li>
                        <li>We believe that the church has a divine mission of fulfilling the Great Commission through worship of God <code>(John 4:23&#45;24) </code> of the 
                            saints (Eph.4:11&#45;16) and world evangelization <code>(Matt.28:19-20, Mark 16:15&#45;20)</code>.</li> 
                        <li>We believe marriage is sacred, a natural and divine institution sanctioned by God between two adult persons of the opposite sex.  Any conjugal 
                            expression outside marriage is sinful and contrary to the purpose of God <code>(Gen.2:24, Mk.10:6&#45;9, Eph.5:21&#45;33, Lev.18:22, Rom.1:27)</code></li>
                        <li>We believe on Sanctity of life, we believe the life of a person begins at conception (<code>Jer.1:5)</code> until death by natural causes. Every 
                            person has a right to life, and that any decision to terminate life by abortion, murder or euthanasia (mercy killing) for personal convenience or 
                            population control is contrary to God&#39;s Word <code>&#34;Thou shall not kill&#34; Ex. 20:13.</code>  Any decision to terminate life because the life of the 
                            mother is endangered during pregnancy shall be made only on basis of adequate medical determination by a qualified Medical doctor(s) and spiritual 
                            counseling. We believe no life shall be taken away either by acts of mercy killing (euthanasia) or such other procedures.</li>
                        <li>We believe on the guidelines for judging questionable ethical areas, which the Bible does not have a clear word &#45; &#34;Thou shalt not &#46;&#46;&#46; &#46;&#34; e.g. use of 
                            substance abuse, dress code, choice of places of employment, we believe a Christian shall have a conviction about what he/she does. He/she shall 
                            use conscience informed by biblical scripture in judging what is right or wrong, and consideration, if other people are adversely affected by what 
                            he/she does <code>(Rom.14:1&#45;15:7)</code>.</li>                        
                    </ol>
                <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//objectives-->
<!--/testimonials-->
<div class="tesimonials container">
        <h3 class="tittle-w3ls cen">Testimonials</h3>
        <div class="inner_sec">
            <div class="test_grid_sec">
                <div class="col-md-offset-2 col-md-8">
                    <div class="carousel slide two" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators two">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">
                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="test_grid">
                                        <div class="col-sm-3 text-center test_img">
                                            <img src="{{ asset('images/webimgs/')}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="col-sm-9 test_img_info">
                                            <p></p>
                                            <h6></h6>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="test_grid">
                                        <div class="col-sm-3 text-center test_img">
                                            <img src="{{ asset('images/webimgs/')}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="col-sm-9 test_img_info">
                                            <p></p>
                                            <h6></h6>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="test_grid">
                                        <div class="col-sm-3 text-center test_img">
                                            <img src="{{ asset('images/webimgs/')}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="col-sm-9 test_img_info">
                                            <p></p>
                                            <h6></h6>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<!--//testimonials-->
<!-- /newsletter-->
<div class="newsletter_w3ls_agileits">
    <div class="col-sm-6 newsleft">
        <h3>Sign up for Newsletter !</h3>
    </div>
    <div class="col-sm-6 newsright">
        <form action="{{ route('subscribe') }}" method="post">@csrf
            <input type="email" placeholder="Enter your email..." name="email" required="">
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //newsletter-->
@endsection