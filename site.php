<div id="slide1" class="hero" ng-show="tab === 1">
    <img src="<?php echo IMAGE_DIR; ?>/slide1.jpg">
    <div class="message">
        <h2>Experience Demonstrated Through Skill</h2>
        <p>Our guys are not workers. They are craftsmen</p>
    </div>
</div>

<div id="slide2" class="hero" ng-show="tab === 2">
    <img src="<?php echo IMAGE_DIR; ?>/slide2.jpg">
    <div class="message">
        <h2>Work that leaves you with peace of mind</h2>
        <p>Our work isn't backed by empty promises. It's backed by sweat, integrity, and our rock solid guarantee.</p>
    </div>
</div>

<div id="slide3" class="hero" ng-show="tab === 3">
    <div class="message">
        <h2 style="position: relative; min-height: 120px;">
            <div style="width: 135px; position: absolute;">
                    <span style="text-transform: uppercase; letter-spacing: 0px; font-size: 60pt; line-height: 1; margin-bottom: -10px; display: block; width: 100%;
                    ">Big</span>
                <span>or small</span>
            </div>
            <div style="padding: 0px 0 0 150px; margin: -8px 0 0 0; overflow: hidden;">
                    <span style="display: block; font-size: 45pt; word-spacing: -10px; letter-spacing: 0px;">
                        we work on
                    </span>
                    <span style="font-size: 42pt; margin: -20px 0 0 3px; display: block; text-transform: uppercase;">
                        them all
                    </span>
            </div>
        </h2>
        <p>Whether you're dealing with flood damage, or just need a new deck, we can work with you
            to deliver a masterpiece.</p>
    </div>
</div>

<div id="slide4" class="hero" ng-show="tab === 4">
    <img src="<?php echo IMAGE_DIR; ?>/slide4.jpg">
    <div class="message">
        <h2>Here when you need us.</h2>
        <p>When things go wrong, we are only as far away as your phone.
        </p>
    </div>
</div>

<section id="content">
    <div class="wrapper">
        <div ng-show="tab === 1">
            Curabitur vulputate, ligula lacinia scelerisque tempor,
            lacus lacus ornare ante, ac egestas est urna sit amet arcu.
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus
            et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac.
        </div>

        <div ng-show="tab === 2">
            Nulla at nulla justo, eget luctus tortor. Nulla facilisi.
            Duis aliquet egestas purus in blandit. Curabitur vulputate,
            ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            Sed molestie augue sit.
        </div>

        <div ng-show="tab === 3">
            Sed molestie augue sit amet leo consequat posuere.
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies
            ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla
            fringilla, orci ac euismod semper.
        </div>

        <div ng-show="tab === 4">
            Phasellus molestie magna non est bibendum non venenatis nisl tempor.
            Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa,
            ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a
            porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac.
        </div>
    </div>
</section>