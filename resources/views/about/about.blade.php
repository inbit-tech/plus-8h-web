@extends ('master')

@section('content')

<div class="uk-grid-collapse uk-width-1-1" uk-grid>
    
    {{-- Key Banner --}}
    <div class="uk-width-1-1
                uk-grid-collapse 
                height-viewport-50 
                uk-background-cover
                about-key-banner-bg
                uk-position-relative 
                uk-background-norepeat
                uk-background-center-center" 
                uk-grid>
            
        <div class="uk-light
                    uk-overlay 
                    max-width-50
                    uk-width-1-2 
                    uk-overlay-defaul
                    uk-position-bottom-left">
            <p class="uk-heading-medium uk-margin-remove">Your Sales team</p>
            <p class="uk-heading-medium uk-margin-remove">towards Chinese Consumers</p>

        </div>

    </div>


    {{-- Call to action Banner --}}

    <div class="uk-card
                uk-flex
                uk-width-1-1
                uk-card-default  
                uk-grid-collapse 
                yellow-background" 
                uk-height-viewport="offset-bottom: 70" uk-grid>
                
        <div class="uk-flex
                    uk-card-body
                    uk-flex-column
                    uk-flex-center">     

            <div class="max-width-50">
                <p class="is-size-2
                            has-text-white
                            uk-padding-small 
                            uk-padding-remove-left">
                            We are digital brand growers
                </p>
               
                <p class="is-size-5 has-text-white">
                    A sales opportunity for all covering the entire e-commerce supply chain with 
                    strong added value on the key components that brings traffic and conversion
                </p>
            </div> 

        </div>
    </div>


    {{-- About Banner --}}

    <div class="uk-flex
                uk-width-1-1
                uk-flex-column
                uk-flex-middle
                uk-flex-center
                yellow-background
                height-viewport-100">


        {{-- Text Main --}}
        <div class="uk-flex 
                    is-size-1 
                    uk-flex-column 
                    has-text-white 
                    uk-text-center 
                    uk-width-3-4@m
                    uk-padding-large">
            <p>
                We are from Scandinavia and China with deep bonds with both countries
            
            </p>
            <p>
                We are obsessed about finding the right formula for driving traffic and maximizing conversions
                
            </p>
            <p>
                We are digital brand growers
            </p>
        </div>


        {{-- Body Text --}}
        
        <div class="is-size-5 
                    has-text-white 
                    uk-width-3-4@s 
                    uk-width-1-2@m 
                    uk-text-center
                    line-height-18
                    uk-padding-large
                    uk-padding-remove-horizontal">

            <p>
                +8h is your sales service partner toward the Chinese consumer – we are with you all the way.
            </p>

            <p class="uk-padding-small">
                Just a decade ago China accounted for less than 1% of the global online transaction 
                today China is accounting for more than 55% of the global online transaction. 
                These figures have made Chinese consumers amongst one of the most important target audience globally.
            </p>

            <p>
                However, in the world where China’s e-commerce behaviors are unique from the rest of the world,
                we at +8h focus on helping brands effectively navigate around the Chinese digital landscape by acting as your online sales team towards Chinese consumers. 
                Our headquarter is located on the west coast of Sweden in Falkenberg and have a team of online sales experts operating our brands from our Shanghai office.
            </p>
            
        </div>


    </div>
   

    {{-- Team Banner --}}
    <div class="uk-flex 
                uk-flex-column
                uk-flex-middle
                uk-flex-center
                has-text-white
                uk-padding-large
                text-shadow-black
                uk-background-cover
                about-team-banner-bg
                height-viewport-100">
        
        <div>
            <h1 class="has-text-white
                        uk-heading-large">
                Our team
            </h1>
        </div>

        <div class="is-size-4 
                    has-text-white 
                    uk-width-3-4@s 
                    uk-width-3-4@m 
                    uk-text-center
                    uk-padding-large">
            <p>
                We are coming from various backgrounds ranging from consulting to operations via sales, e-commerce, branding and logistic. 
                What we all have in common is that we all have a professional relation to both Scandinavia and China, 
                enabling us to be the gate keepers of your brand and at the same time have the know-how on the Chinese consumers to maximize
            </p>
        </div>

    </div>


    {{-- Founder Banner --}}
    <div class="uk-flex 
                uk-width-1-1
                uk-flex-center
                uk-flex-column
                uk-flex-middle
                has-text-white
                uk-padding-large
                yellow-background
                height-viewport-100">

        <div class="uk-flex 
                    uk-flex-column
                    uk-flex-middle
                    uk-flex-center">

            <img src="{{ asset('/image/about/founder-image.jpeg') }}" 
                    alt="Founder image"
                    class="founder-image
                           founder-image-border-000">
                    
        </div>

        <div>
            <p class="is-size-1
                    has-text-white">
                Founder
            </p>
        </div>

        <div class="is-size-4 
                    has-text-white 
                    uk-width-3-4@s 
                    uk-width-3-4@m 
                    uk-text-center
                    uk-padding-large">
            <p>
                Max Twisselmann, CEO & Founder, +10 years of experience from sales in China, 
                establishing a Swedish brand in China from zero to successfully building a profitable company with a full organization, 
                own factory and sales office.
            </p>
        </div>
        
    </div>


    {{-- Partner & Exeecutive Banner --}}
    <div class="uk-flex 
                uk-width-1-1            
                uk-flex-column
                uk-flex-middle
                uk-flex-center
                has-text-white
                uk-padding-large
                yellow-background
                height-viewport-100">

        <div class="uk-padding-large
                    uk-padding-remove-horizontal">

            <p class="has-text-white
                    uk-heading-medium">
                Partner & Executive
            </p>

        </div>


        <div class="uk-flex
                    uk-width-2-3@s
                    uk-width-1-2@xl
                    uk-flex-between">

            <div class="uk-flex 
                        uk-flex-column
                        uk-flex-middle
                        uk-flex-center">
                    
                <img src="{{ asset('/image/about/Simon-Westerlund.jpeg') }}" 
                        alt="Partner & Executive"
                        class="founder-image
                               founder-image-border-000">

                <div class="uk-flex 
                            uk-flex-column
                            uk-flex-middle
                            uk-flex-center">

                    <p class="is-size-4
                            has-text-white">
                        Simon Westerlund, Partner
                    </p>

                </div>
                
            </div>

            <div class="uk-flex 
                        uk-flex-column
                        uk-flex-middle
                        uk-flex-center">
                        
                <img src="{{ asset('/image/about/Sarah-Chu.jpeg') }}" 
                        alt="Partner & Executive"
                        class="founder-image
                               founder-image-border-fff">

                <div class="uk-flex 
                            uk-flex-column
                            uk-flex-middle
                            uk-flex-center">

                    <p class="is-size-4
                            has-text-white">
                        Sarah Chu, Sr. Advisor
                    </p>

                </div>
            </div>

        </div>
        
    </div>


    
</div>
@endsection
