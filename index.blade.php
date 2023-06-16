<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$settings->site_name}} - Token Presale</title>
    <meta name="description" content="{{$settings->site_name}} is a Token Built on the BNB Smart Chain Network.">
    <meta name="keywords" content="Buy Bitsilco, Bitsilco Token, Bitsilco Presale">

    <link rel="icon" href="{{ asset('storage/app/public/'. $settings->favicon) }}" type="image/png"/>

    <!-- Bootstrap & Plugins CSS -->
    <link href="{{ asset('front/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('front/assets/css/styles.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
  
    <script>
        {{!! $settings->livechat !!}}	
    </script>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="{{ asset('storage/app/public/'. $settings->logo) }}" class="light-logo"
                                alt="{{$settings->site_name}}" />
                            <img src="{{ asset('storage/app/public/'. $settings->logo) }}" class="dark-logo"
                                alt="{{$settings->site_name}}" />
                        </a>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="#what-is-ico">WHAT IS Bitsilco</a></li>
                            <li><a href="#token-sale">TOKEN SALE</a></li>
                            <li><a href="#roadmap">ROADMAP</a></li>
                            <li><a href="dashboard/user/stake-token">STAKE</a></li>
                            <li><a href="#team">FEATURES</a></li>
                            <li><a href="#faq">FAQ</a></li>
                            <li><a href="https://bitsilco.com/contact-form">CONTACT</a></li>
                            <li><a href="/login" class="btn-nav-box">BUY TOKEN</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area bg-top-right" id="welcome-1">
        <div class="header-token basic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 align-self-center">
                        <h1>{{$settings->site_name}} Token: Empowering Decentralized Blockchain Investments</h1>
                        <p>Catalyzing the Future of Investments: Bitsilco ICO Platform Unleashes the Power of Decentralized Blockchain</p>
                        <a href="https://bitsilco.com/download-file.pdf" class="btn-secondary-box">Download Whitepaper</a>
                    
                    
                    </div>
<div class="col-lg-6 col-md-12 col-sm-12 col-12 align-self-center">
    <div class="box">
        <div class="token">
            <h6 class="title"><span class="text-primary">{{$settings->site_name}}</span> TOKEN SALE IS OPEN</h6>
            <!-- ***** Countdown Start ***** -->
            <ul class="countdown" id="countdown">
                <li>
                    <span class="days" id="days"></span>
                    <p class="days_ref">days</p>
                </li>
                <li class="seperator"></li>
                <li>
                    <span class="hours" id="hours"></span>
                    <p class="hours_ref">hours</p>
                </li>
                <li class="seperator"></li>
                <li>
                    <span class="minutes" id="minutes"></span>
                    <p class="minutes_ref">minutes</p>
                </li>
                <li class="seperator"></li>
                <li>
                    <span class="seconds" id="seconds"></span>
                    <p class="seconds_ref">seconds</p>
                </li>
            </ul>
            <!-- ***** Countdown End ***** -->
            
            <div class="token-input">
                <input type="text" placeholder="500" data-step="100" />
                <i class="fa fa-plus"></i>
                <i class="fa fa-minus"></i>
                <button onclick="window.location.href='https://bitsilco.com/dashboard/user/contribute'">PURCHASE TOKEN NOW</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<div class="scroll-to">
<a href="#what-is-ico">
<i class="fa fa-angle-double-down" aria-hidden="true"></i>
</a>
</div>
</section>
<!-- ***** Wellcome Area End ***** -->




    <!-- ***** What is Token Start ***** -->
    <section class="section bg-bottom" id="what-is-ico">
        <div class="container">
            <!-- ***** Features Items Start ***** -->
            <div class="row m-bottom-70">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="features-elliptical elliptical-bottom"
                        data-scroll-reveal="enter right move 30px over 0.6s after 0.2s">
                        <div class="icon">
                            <i class="fa fa-cube"></i>
                        </div>
                        <h5 class="features-title">Simplified Token Integration</h5>
                        <p>Facilitate Token Integration: Effortlessly Link and Enhance Blockchain Network</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="features-elliptical elliptical-top"
                        data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div class="icon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <h5 class="features-title">Bitsilco Advanced Security</h5>
                        <p>Fortify Your Digital Assets: Unleashing the Power of Bitsilco's Advanced Security Solutions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                    <div class="features-elliptical">
                        <div class="icon">
                            <i class="fa fa-server"></i>
                        </div>
                        <h5 class="features-title">Decentralized</h5>
                        <p>Embrace the Power of Decentralization: Empowering Possibilities with Bitsilco's Decentralized Solutions.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Features Items End ***** -->
            
            
            

            <!-- ***** About Start ***** -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
                    <div class="left-heading">
                        <h2 class="section-title">Unlock the Future of Finance with Bitsilco - Embrace a decentralized ecosystem, cutting-edge technology, and a thriving community for limitless possibilities in the digital economy.</h2>
                    </div>
                    <div class="left-text">
                        <p class="dark">{{$settings->site_name}} token is a cryptocurrency project built on the Binance Smart Chain. It aims to provide a secure and decentralized digital currency for efficient transactions and decentralized applications (dApps). BSC focuses on scalability, low fees, and interoperability, fostering a thriving ecosystem of decentralized finance (DeFi) and blockchain-based solutions.</p>
                    </div>
                    <a href="https://bitsilco.com/download-file.pdf" class="btn-secondary-line mobile-bottom-fix">Download Whitepaper</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
                    <img src="{{ asset('front/assets/images/theme-1-about.svg') }}" class="img-fluid float-right"
                        alt="{{$settings->site_name}} ICO">
                </div>
            </div>
            <!-- ***** About End ***** -->
        </div>
        
        </div>
<div style="float: right;">
    <a href="https://bitsilco.com/img/bitsilco-audit.pdf" class="btn-secondary-box">Download Bitsilco Token Audit</a>
</div>


    </section>
    <!-- ***** What is ICO End ***** -->

    <!-- ***** Token Sale Start ***** -->
    <section class="section gradient" id="token-sale">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading colored">
                        <h2 class="section-title">Bitsilco (BSC) Token Sale</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text colored">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <div class="row">
                            <!-- ***** Token Progress and Info Start ***** -->
                            <div class="col-lg-6 col-md-6 cols-m-12">
                                <!-- ***** Token Progress Start ***** -->
                                <div class="token-progress">
                                    <ul id="test">
                                        <li class="progress-active" data-progress="50%"></li>
                                        <li class="item complate" data-position="0%">
                                            <strong>0</strong>
                                            <span>Start</span>
                                        </li>
                                        <li class="item complate" data-position="0%">
                                            <strong>$</strong>
                                            <span>Pre Sale</span>
                                        </li>
                                        <li class="item complate" data-position="0%">
                                            <strong>$</strong>
                                            <span>Soft Cap</span>
                                        </li>
                                        <li class="item" data-position="73%"></li>
                                    </ul>
                                </div>
                                <!-- ***** Token Progress End ***** -->

                                <!-- ***** Token Info Table Start ***** -->
                                <div class="token-info">
                                    <div class="item">
                                        <strong>Start</strong>
                                        <span>Started</span>
                                    </div>
                                    <div class="item">
                                        <strong>Token Supply</strong>
                                        <span>350.000.000 {{$settings->site_name}} (BSC)</span>
                                    </div>
                                    <div class="item">
                                        <strong>Accepted Tokens</strong>
                                        <span>USDT</span>
                                    </div>
                                    <div class="item">
                                        <strong>Project Network</strong>
                                        <span>BNB SMART CHAIN (BEP20)</span>
                                    </div>
                                    <div class="item">
                                        <strong>Total Presale Token</strong>
                                        <span>175.000.000</span>
                                    </div>
                                    <div class="item">
                                        <strong></strong>
                                        <span></span>
                                    </div>
                                </div>
                        
                                <!-- ***** Token Info Table End ***** -->
                            </div>
                            <!-- ***** Token Progress and Info End ***** -->

                            <!-- ***** Token Countdown and Payment Start ***** -->
                            <div class="col-lg-6 col-md-6 cols-m-12">
                                <div class="token">
                                    <h6 class="title">BITSILCO TOKEN SALE IS OPEN</h6>

<!-- ***** Countdown Start ***** -->
<ul class="countdown">
  <li>
    <span class="days" id="days"></span>
    <p class="days_ref">Days</p>
  </li>
  <li class="seperator"></li>
  <li>
    <span class="hours" id="hours"></span>
    <p class="hours_ref">Hours</p>
  </li>
  <li class="seperator"></li>
  <li>
    <span class="minutes" id="minutes"></span>
    <p class="minutes_ref">Minutes</p>
  </li>
  <li class="seperator"></li>
  <li>
    <span class="seconds" id="seconds"></span>
    <p class="seconds_ref">Seconds</p>
  </li>
</ul>

<script>
  function countdown() {
    // Get the current date and time.
    const now = new Date();

    // Calculate the difference between the current date and time and the target date and time.
    const difference = new Date("2023-08-02T10:00:00").getTime() - now.getTime();

    // Convert the difference to days, hours, minutes, and seconds.
    const days = Math.floor(difference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((difference % (1000 * 60)) / 1000);

    // Update the countdown timer.
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    // If the countdown is complete, stop the timer.
    if (difference <= 0) {
      clearInterval(interval);
    }
  }

  // Start the countdown timer.
  const interval = setInterval(countdown, 1000);
</script>
<!-- ***** Countdown End ***** -->
                                    <div class="token-payment">
                                        <span>Select Payment Method</span>
                                        <div class="radios">
                                            <div class="form-radio">
                                                <input type="radio" id="check1" name="payment" checked="" />
                                                <label for="check1">
                                                    <i class="fa fa-bitcoin"></i>
                                                </label>
                                            </div>
                                            <div class="form-radio">
                                                <input type="radio" id="check2" name="payment" />
                                                <label for="check2">
                                                    <i class="fa fa-paypal"></i>
                                                </label>
                                            </div>
                                            <div class="form-radio">
                                                <input type="radio" id="check3" name="payment" />
                                                <label for="check3">
                                                    <i class="fa fa-cc-visa"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <a href="https://bitsilco.com/dashboard/user/contribute" class="btn-primary-line">PURCHASE TOKEN
                                            NOW</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ***** Token Countdown and Payment End ***** -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Token Sale End ***** -->

    <!-- ***** Roadmap Start ***** -->
    <section class="section" id="roadmap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Roadmap</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Phase 1: Foundation and Development</p>
                       
                        <p>Establish the foundational elements of Bitsilco Token, including the token economics, smart contract development, and security audits.</p>
<p>Build a dedicated development team to ensure the efficient execution of the project.</p>
<p>Conduct market research and analysis to identify target audiences and potential use cases for Bitsilco Token.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="roadmap-full">
            <div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <h6 class="date"></h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 position-relative">
                            <div class="status complate"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <p>Phase 2: Private Sale and Strategic Partnerships</p>
                            <p>Launch a private sale to attract early investors and strategic partners who align with the vision of Bitsilco Token.</p>
                            <p>Forge partnerships with industry leaders, businesses, and organizations that can contribute to the growth and adoption of the token.</p>
                            <p>Establish a solid community foundation through active engagement, communication, and feedback from early supporters.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <h6 class="date"></h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 position-relative">
                            <div class="status complate"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <p>Phase 3: Public Sale and Exchange Listings</p>
                            <p>Conduct a public sale to allow a wider audience to participate in the acquisition of Bitsilco Token.</p>
                            <p>Implement robust compliance measures to ensure regulatory compliance and build trust with the community.</p>
                            <p>Seek listings on reputable cryptocurrency exchanges to enhance liquidity and accessibility for token holders.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <h6 class="date"></h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 position-relative">
                            <div class="status complate"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <p>Phase 4: Platform Development and Expansion</p>
                            <p>Allocate resources to develop the Bitsilco platform, offering a range of services and features that leverage the utility of the token.
Continuously enhance the platform based on user feedback and emerging market trends.
Explore strategic partnerships and collaborations to expand the ecosystem and offer additional benefits and use cases for Bitsilco Token.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <h6 class="date"></h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 position-relative">
                            <div class="status"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <p>Phase 5: Adoption and Integration</p>
                            <p>Drive adoption of Bitsilco Token by encouraging its acceptance as a means of payment within various industries and businesses.
Integrate Bitsilco Token into existing platforms, applications, and services, expanding its utility and enhancing the overall ecosystem.
Educate users and provide resources to increase awareness and understanding of the benefits and potential of Bitsilco Token.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <h6 class="date"></h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 position-relative">
                            <div class="status"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <p>Phase 6: Community Growth and Governance</p>
                            <p>Foster a thriving community by organizing events, meetups, and online forums where token holders can connect, collaborate, and share ideas.
Establish a transparent governance framework that allows token holders to participate in decision-making processes and contribute to the future development of Bitsilco Token.
Regularly communicate updates, progress, and milestones to the community, maintaining transparency and accountability.</p>
                        </div>
                    </div>
                </div>
            </div>
           </div>
    </section>
    <!-- ***** Roadmap End ***** -->
    <!-- ***** Telegram Parallax Start ***** -->
    <section class="parallax">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-title">Join Us On Telegram</h1>
                    </div>
                    <div class="offset-lg-3 col-lg-6">
                        <p>Join us on Telegram for real-time updates, engaging discussions, and a thriving community</p>
                    </div>
                    <div class="offset-lg-3 col-lg-6">
    <a href="https://t.me/bitsilco" class="btn-white-line">Join Us On Telegram</a>
</div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Telegram Parallax End ***** -->

    <!-- ***** FAQ Start ***** -->
    <section class="section bg-top" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h1 class="section-title">FAQ</h1>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Unlocking Answers: Your FAQ Guide to Clear Confusion</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    <span class="badge">1</span> What are the benefits of digital currency?
                                </button>
                            </h2>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Digital currency, such as cryptocurrencies, offers several benefits. Here are some of the key advantages of digital currency:</p>
                                    
                                    
                                    <p>Decentralization: Digital currencies are typically decentralized, meaning they operate on a peer-to-peer network without a central authority or intermediary like a bank. This decentralization reduces the need for trust in third parties and allows for more direct and transparent transactions.</p>

<p>Security: Digital currencies employ advanced cryptographic techniques to secure transactions and user identities. These technologies help protect against fraud, hacking, and identity theft. Additionally, digital currencies often provide users with control over their personal data, enhancing privacy.</p>



<p>Global Accessibility: Digital currencies can be accessed and used by anyone with an internet connection, regardless of their geographical location. This accessibility removes barriers to financial services, particularly for individuals in underbanked or underserved regions, enabling greater financial inclusion.</p>



<p>Lower Transaction Costs: Traditional financial transactions, such as cross-border payments, often involve high fees and lengthy processing times. Digital currencies can significantly reduce transaction costs by eliminating intermediaries and streamlining processes, making transactions faster and more cost-effective.</p>



<p>Financial Empowerment: Digital currencies can empower individuals by giving them direct control over their finances. Users can manage their own funds, make instant transfers, and engage in peer-to-peer transactions without relying on traditional banking systems. This financial autonomy can be especially beneficial in regions with limited access to banking services.</p>



<p>Programmable Money: Some digital currencies, like smart contract platforms, enable programmable money. This feature allows for the creation of self-executing contracts and decentralized applications (DApps), opening up new possibilities for automated and transparent financial interactions, crowdfunding, and more.</p>



<p>Innovation and Potential: Digital currencies have sparked significant innovation in the financial technology sector. They have given rise to new business models, crowdfunding mechanisms, decentralized finance (DeFi) platforms, and other disruptive applications. These innovations have the potential to reshape traditional financial systems and drive economic growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    <span class="badge">2</span> How long has digital currency existed?
                                </button>
                            </h2>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Digital currency has a relatively short but impactful history. The concept of digital currency emerged in the early 1990s with the advent of the internet and the increasing need for secure online transactions. However, it wasn't until 2009 that the first decentralized cryptocurrency, Bitcoin, was introduced by an anonymous person or group using the pseudonym Satoshi Nakamoto.</p>
                                    <p>Bitcoin marked a significant milestone in the evolution of digital currency. It introduced the concept of a decentralized, peer-to-peer digital currency that operates on a public ledger called the blockchain. Bitcoin gained attention for its potential to revolutionize financial systems, provide an alternative to traditional banking, and enable secure and anonymous transactions.</p>
                                    <p>Following the launch of Bitcoin, numerous other cryptocurrencies, often referred to as altcoins, started to emerge. These cryptocurrencies aimed to address different aspects and use cases beyond a mere medium of exchange. Ethereum, introduced in 2015, pioneered the concept of smart contracts, enabling the development of decentralized applications (DApps) and programmable digital assets.</p>
                                    <p>Since then, the digital currency space has expanded rapidly, with the development of various cryptocurrencies and blockchain-based platforms. This growth has led to increased interest from individuals, businesses, investors, and even governments exploring the potential applications and benefits of digital currencies.</p>
                                    <p>Today, digital currencies continue to evolve and are being adopted for various purposes, including cross-border remittances, decentralized finance (DeFi), tokenization of assets, and more. The ongoing advancements in blockchain technology and the increasing interest from mainstream institutions indicate that digital currency is becoming an integral part of the global financial landscape.</p>
                                    <p>In summary, digital currency has existed for over a decade, with Bitcoin being the pioneering cryptocurrency introduced in 2009. Since then, the digital currency ecosystem has grown significantly, offering innovative solutions and transforming various sectors of the economy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    <span class="badge">4</span> Why should I use {{$settings->site_name}} token and how is
                                    it
                                    different
                                    from other crypto tokens?
                                </button>
                            </h2>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Using Bitsilco Token offers several advantages. Firstly, it provides you with access to the services and benefits offered by the Bitsilco platform, such as exclusive features, discounts, or participation in their ecosystem.</p>
                                    <p>Additionally, Bitsilco Token distinguishes itself from other crypto tokens through its unique features and value proposition. It may have specific utility within the Bitsilco ecosystem, such as governance rights, access to special events, or discounts on products and services. Its differentiation may also lie in innovative technology, partnerships, or a specific use case catered to a particular industry or community.</p>
                                    <p>By using Bitsilco Token, you can tap into these unique benefits and opportunities, aligning yourself with a specific ecosystem and potentially leveraging its growth and value appreciation.</p>
                                    <p>It's important to conduct thorough research and understand the specific features and use cases of Bitsilco Token to determine how it aligns with your needs and goals in the cryptocurrency space.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    <span class="badge">5</span> How is {{$settings->site_name}} helping entrepreneurs?
                                </button>
                            </h2>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Bitsilco is actively supporting entrepreneurs by providing them with a range of resources and opportunities to thrive in the digital economy. Here's a short piece on how Bitsilco is helping entrepreneurs:</p>
                                    <p>Bitsilco is dedicated to empowering entrepreneurs on their journey to success. By leveraging blockchain technology and a supportive ecosystem, Bitsilco offers valuable tools and services that can make a tangible difference for entrepreneurs.</p>
                                    <p>Firstly, Bitsilco provides a platform for entrepreneurs to raise capital through token sales or crowdfunding campaigns. This enables them to access funding from a global pool of investors, removing geographical barriers and traditional fundraising limitations. By embracing this decentralized approach, Bitsilco opens up new avenues for entrepreneurs to secure the financial support needed to bring their ideas to life.</p>
                                    <p>Moreover, Bitsilco offers mentorship programs and educational resources to guide and nurture aspiring entrepreneurs. These programs provide valuable insights, knowledge, and guidance on various aspects of business development, marketing strategies, and technological advancements. By equipping entrepreneurs with the necessary skills and expertise, Bitsilco helps them navigate the challenges of the digital landscape more effectively.</p>
                                    <p>Additionally, Bitsilco fosters a supportive community where entrepreneurs can network, collaborate, and exchange ideas. The platform facilitates connections with like-minded individuals, potential partners, and experienced professionals across different industries. This networking opportunity opens doors to collaborations, partnerships, and access to a broader customer base, enhancing the growth potential for entrepreneurs.</p>
                                    <p>Bitsilco also leverages blockchain technology to streamline and automate business processes. By utilizing smart contracts, decentralized applications, and secure transactions, Bitsilco enhances operational efficiency and reduces friction in various entrepreneurial activities. This can lead to cost savings, increased transparency, and improved trust among stakeholders.</p>
                                    <p>Overall, Bitsilco is committed to nurturing the entrepreneurial spirit by providing a comprehensive ecosystem that supports and accelerates business growth. Through funding opportunities, mentorship, networking, and technological advancements, Bitsilco empowers entrepreneurs to seize new possibilities, overcome challenges, and achieve their goals in the ever-evolving digital landscape.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                    <span class="badge">6</span> What benefits can I get from joining the
                                    {{$settings->site_name}} crowd
                                    funding platform?
                                </button>
                            </h2>
                            <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                     <p>By joining the Bitsilco crowdfunding platform, you can enjoy several benefits that can significantly enhance your fundraising experience and increase your chances of success. Here's an answer outlining the benefits of joining the Bitsilco crowdfunding platform:</p>
                                    <p>Access to a Global Investor Network: Bitsilco provides you with exposure to a global network of investors who are actively seeking investment opportunities. By joining the platform, you gain access to this network, which can expand your reach and increase the likelihood of attracting potential investors from different regions and backgrounds.</p>
                                    <p>Increased Fundraising Potential: The Bitsilco crowdfunding platform offers a powerful mechanism to raise capital for your project. By leveraging the platform's user-friendly interface, intuitive fundraising tools, and transparent processes, you can showcase your venture to a wide audience. This increased visibility enhances your fundraising potential by connecting you with potential backers who are specifically interested in supporting innovative projects.</p>
                                    <p>Decentralized Funding Model: Bitsilco embraces decentralization, enabling peer-to-peer transactions and reducing the reliance on traditional intermediaries. This decentralized funding model eliminates unnecessary fees, simplifies the fundraising process, and facilitates direct engagement between project creators and backers. As a result, you can experience more efficient and cost-effective fundraising compared to traditional methods.</p>
                                    <p>Community Support and Engagement: The Bitsilco crowdfunding platform fosters a vibrant community of entrepreneurs, investors, and industry experts. By joining this community, you gain access to valuable support, feedback, and collaboration opportunities. Engaging with like-minded individuals and receiving constructive input can further refine your project and increase its chances of success.</p>
                                    <p>Tokenization Opportunities: Bitsilco leverages blockchain technology to tokenize assets and facilitate fundraising through digital tokens. Tokenization offers numerous benefits, including increased liquidity, fractional ownership, and the ability to unlock new opportunities for investors. By utilizing this innovative approach, the platform provides you with additional avenues to attract investors and expand the potential benefits of your project.</p>
                                    <p>Expert Guidance and Resources: Bitsilco provides entrepreneurs with access to mentorship programs, educational resources, and industry experts who can offer guidance and support throughout the crowdfunding journey. These resources can help you refine your pitch, improve your business strategy, and navigate the intricacies of fundraising, increasing your chances of achieving your funding goals.</p>
                                    <p>In summary, joining the Bitsilco crowdfunding platform can provide you with access to a global investor network, enhance your fundraising potential, and offer the benefits of a decentralized funding model. Additionally, you can tap into community support, tokenization opportunities, and expert guidance, which collectively contribute to a more robust and successful crowdfunding experience for your project.</p>
                                </div>
                            </div>
                        </div>
    </section>
    <!-- ***** FAQ End ***** -->

    <!-- ***** Contact & Footer Start ***** -->
    <footer id="contact">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="contact">
                            <h3 class="section-title">Get In Touch</h3>
                            <p></p>
                            <ul class="list">
                                <li><i class="fa fa-envelope-o"></i><a
                                        href="mailto:{{$settings->site_email}}">{{$settings->site_email}}</a>
                                </li>
                                <li><i class="fa fa-phone"></i><span>{{$settings->phone}}</span></li>
                                <li><i class="fa fa-paper-plane-o"></i><a href="https://t.me/bitsilco">Join us on Telegram</a></li>
                            </ul>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/bitsilco"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="https://twitter.com/bitsilco"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/bitsilco/"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                            </div>
                            
                            
                            <div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://https-bitsilco-com.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                        </div>


<!-- Add the Tawk.to live chat code snippet here -->
<script>
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/6481e663cc26a871b02163bd/1h2dmnu7s';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
})();
</script>



                    <head>
  <style>
    .center-align {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <footer>
    <div class="center-align">
      <h4>Copyright © {{date('Y')}} All Rights Reserved</h4>
    </div>
    </div>
  </footer>
    
    <script id="dsq-count-scr" src="//https-bitsilco-com.disqus.com/count.js" async></script>


    <!-- jQuery -->
    <script src="{{ asset('front/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('front/assets/js/popper.js') }}"></script>
    <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('front/assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery.downCount.js') }}"></script>
    <script src="{{ asset('front/assets/js/parallax.min.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('front/assets/js/particle-dark.js') }}"></script>
    <script src="{{ asset('front/assets/js/custom.js') }}"></script>
    <script type="text/javascript">
        // Set the date we're counting down to
        var setDate = "{{$settings->sales_start_date}}";

        var countDownDate = new Date(setDate).getTime();
        // Update the count down every 1 second
        var x = setInterval(function() {
        // Get today's date and time
        var now = new Date().getTime();
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("dayls").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById('seconds').innerHTML = seconds;

        document.getElementById("daylss").innerHTML = days;
        document.getElementById("hourss").innerHTML = hours;
        document.getElementById("minutess").innerHTML = minutes;
        document.getElementById('secondss').innerHTML = seconds;


        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("dayls").innerHTML = 0;
            document.getElementById("hours").innerHTML = 0;
            document.getElementById("minutes").innerHTML = 0;
            document.getElementById('seconds').innerHTML = 0;
            document.getElementById("daylss").innerHTML = 0;
            document.getElementById("hourss").innerHTML = 0;
            document.getElementById("minutess").innerHTML = 0;
            document.getElementById('secondss').innerHTML = 0;
        }
        }, 1000);
    </script>
</body>

</html>
