@extends ('master')

@section('content')

<div class="uk-grid-collapse uk-width-1-1 uk-height-viewport" uk-grid>
    
    {{-- Key Banner --}}
    <div class="uk-grid-collapse uk-width-1-1 uk-position-relative height-viewport-50 key-banner-bg" uk-grid>
            
        <div class="uk-width-1-2 uk-overlay uk-overlay-defaul uk-light uk-position-medium uk-position-bottom-left homepage-keyBanner-text">
            <p class="uk-heading-medium">Your Sales team</p>
            <p class="uk-heading-medium">towards Chinese Consumers</p>
        </div>

    </div>


    {{-- Call to action Banner --}}
    <div class="uk-grid-collapse uk-width-1-1 uk-position-relative homepage-center-banner-bg" uk-height-viewport="offset-bottom: 75"  uk-grid>
       
        <div class="uk-width-1-2 uk-overlay uk-overlay-defaul uk-light uk-position-medium uk-position-top-left">
            <p class="is-size-1 has-text-white">We are digital brand growers</p>
            <p class="is-size-4 has-text-white">
                Cover the entire e-commerce supply chain 
            </p>
            <p class="is-size-4 has-text-white">
                with strong value-added on the key components bring traffic and conversion
            </p>
        </div>


        <div class="uk-width-1-2 uk-overlay uk-overlay-defaul uk-light uk-position-medium uk-position-bottom-left">
            <a href="#" class="button-opacity-shadow">
                <span class="is-size-4 has-text-white" style="opacity: 1">See what we do</span>
            </a>
        </div>
        
    </div>


    {{-- Service Banner --}}
    <div class="uk-grid-collapse uk-width-1-1 uk-child-width-1-2@m" uk-height-viewport="offset-bottom: 75" uk-grid>
        
        <div class="uk-width-1-2 uk-position-relative" style="background-color: black;">
            
            <div class="uk-width-1-2 uk-overlay uk-overlay-defaul uk-light uk-position-small uk-position-top-left">
                
                <div style="padding: 1em">
                    <p class="is-size-5 has-text-white">OWN SALES SITE</p>
                </div>

                <div style="padding: 1em">
                    <p class="is-size-3 has-text-white">
                        WeChat Store
                    </p>
                    <p class="is-size-5 has-text-white">
                        Full controlled own store
                    </p>
                    <p class="is-size-5 has-text-white">
                        - utilizing the existing +1 billion Chinese users
                    </p>
                </div>
                
            </div>

        </div>

        <div class="wechat-store">
            
        </div>
    </div>

</div>
@endsection
