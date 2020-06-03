@extends ('master')

@section('content')

<div class="uk-grid-collapse uk-width-1-1" uk-grid>
    
    {{-- Key Banner --}}
    <div class="uk-grid-collapse 
                uk-width-1-1 
                uk-position-relative 
                height-viewport-50 
                key-banner-bg 
                uk-background-cover
                uk-background-norepeat
                uk-background-center-center" 
                uk-grid>
            
        <div class="uk-width-1-2 uk-overlay uk-overlay-defaul uk-light uk-position-medium uk-position-bottom-left homepage-keyBanner-text">
            <p class="uk-heading-medium">Your Sales team</p>
            <p class="uk-heading-medium">towards Chinese Consumers</p>
        </div>

    </div>


    {{-- Call to action Banner --}}

    <div class="uk-card
                uk-width-1-1
                uk-card-default  
                uk-grid-collapse 
                homepage-center-banner-bg" 
                uk-height-viewport="offset-bottom: 75" uk-grid>
                
        <div class="uk-card-body">     

            <div class="">
                <h3 class="is-size-3 has-text-white">We are digital brand growers</h3>
               
                <p class="is-size-5 has-text-white">
                    Cover the entire e-commerce supply chain 
                </p>
                <p class="is-size-5 has-text-white">
                    with strong value-added on the key components bring traffic and conversion
                </p>
            </div> 

            <div class="uk-overlay uk-overlay-defaul uk-light uk-position-bottom-left">
                <a href="#" class="button-opacity-shadow">
                    <span class="is-size-4 has-text-white">See what we do</span>
                </a>
            </div>

        </div>
    </div>



    {{-- Service Banner WeChat store --}}
    
    {{--  Container  --}}
    <div class="uk-card
                uk-width-1-1
                uk-card-default  
                uk-grid-collapse 
                uk-child-width-1-2@m" 
                uk-height-viewport="offset-bottom: 75" uk-grid>
        
        {{-- Right image container --}}
        <div class="uk-height-1-1
                    uk-flex-last@s 
                    uk-cover-container
                    uk-card-media-right">

            <div class="wechat-store-banner 
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-center">
            </div>

        </div>

        {{-- Left Text container--}}
        <div class="uk-height-1-1
                    uk-background-secondary">

            {{-- Text --}}
            <div class="uk-card-body">

                <div style="padding: 1em 0">
                    <p class="is-size-5 has-text-white">OWN SALES SITE</p>
                </div>
                <h3 class="is-size-3 has-text-white">WeChat Store</h3>
                <p class="is-size-5 has-text-white">
                    Full controlled own store
                </p>
                <p class="is-size-5 has-text-white">
                    - utilizing the existing +1 billion Chinese users
                </p>

            </div>

        </div>

    </div>


    {{-- Service Banner JD/Tmall --}}

    {{--  Container  --}}
    <div class="uk-card
                uk-width-1-1
                uk-card-default  
                uk-grid-collapse 
                uk-child-width-1-2@m" 
                uk-height-viewport="offset-bottom: 75" uk-grid>
        
        {{-- Right image container --}}
        <div class="uk-height-1-1
                    uk-flex-last@s 
                    uk-cover-container
                    uk-card-media-right">

            {{-- background image --}}
            <div class="tmall-banner
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-center">
                            
            </div>

        </div>

        {{-- Left Text container--}}
        <div class="uk-height-1-1
                    uk-background-secondary">

            {{-- Text --}}
            <div class="uk-card-body">

                <h3 class="is-size-3 has-text-white">
                    Tmall store
                </h3>
                <p class="is-size-5 has-text-white">
                    Own store on No. 1 marketplace in China
                </p>

            </div>

        </div>

    </div>


   {{-- Service Banner Cross-boarder --}}

    {{--  Container  --}}
    <div class="uk-card
                uk-width-1-1
                uk-card-default 
                uk-grid-collapse 
                uk-child-width-1-2@m" 
                uk-height-viewport="offset-bottom: 75" uk-grid>
        
        {{-- Right image container --}}
        <div class="uk-height-1-1
                    uk-flex-last@s
                    uk-cover-container
                    uk-card-media-right">

            {{-- background image --}}
            <div class="cross-boarder
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-center">
            </div>

        </div>

        {{-- Left Text container--}}
        <div class="uk-height-1-1
                    uk-background-secondary">

            {{-- Text --}}
            <div class="uk-card-body">

                <h3 class="is-size-3 has-text-white">
                    Cross boarder sales
                </h3>
                <p class="is-size-5 has-text-white">
                    Easy access presence and sales trial
                </p>

            </div>

        </div>

    </div>


</div>
@endsection
