
<!-- LOADING ICON -->
<script type="text/javascript" src="/appsquadz/js/jquery-2.2.4.min.js" crossorigin="anonymous"></script>

<style>
    #loading-bg{
        position: fixed;
        background-color: white;
        left: 0px;
        z-index: 2147483640;
        width: 100%;
        height: 100vh;   
        transition: 1s all linear;
        bottom: 0%; 
        transition: 1s all ease-out;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #webloader {
        z-index: 2147483640;
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 160px;
        height: 160px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
        position: absolute;
        top: calc( 50% - 80px );
        left: calc( 50% - 80px );
    }
        
    .web-animate-loader{
        bottom: 150% !important;
    }
    /* Safari */
    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
<div id="loading-bg">
    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
    width="100.000000pt" height="100.000000pt" viewBox="0 0 300.000000 300.000000"
    preserveAspectRatio="xMidYMid meet" style="background: #3498db;">
    <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="#fff" stroke="#444">
        <path d="M0 1500 l0 -1500 1500 0 1500 0 0 1500 0 1500 -1500 0 -1500 0 0
        -1500z m1575 963 c609 -1170 896 -1725 892 -1729 -3 -3 -110 21 -238 54 l-234
        59 -247 474 c-136 260 -250 475 -255 476 -4 1 -113 -203 -242 -455 -129 -251
        -239 -465 -245 -476 -9 -13 -71 -33 -250 -77 -131 -33 -240 -58 -242 -57 -4 5
        971 1877 978 1878 3 0 41 -66 83 -147z m-485 -525 c-62 -123 -117 -227 -122
        -233 -5 -5 21 62 57 149 36 88 64 164 63 168 -2 4 -67 -29 -145 -74 l-143 -82
        0 -246 0 -245 -33 -50 -32 -50 -3 65 c-1 36 1 177 5 314 l8 250 225 131 c124
        73 227 131 229 129 2 -2 -47 -104 -109 -226z m970 79 l195 -114 2 -314 3 -314
        -35 55 -34 55 6 240 6 240 -145 83 c-80 45 -148 82 -151 82 -3 0 23 -71 58
        -157 36 -86 64 -158 62 -159 -1 -1 -55 101 -121 227 l-118 230 39 -20 c21 -11
        126 -72 233 -134z m-791 -813 c-71 -175 -132 -328 -135 -340 -5 -18 17 -34
        178 -124 100 -57 187 -103 193 -103 15 0 365 214 365 223 0 5 -61 151 -135
        326 -74 174 -133 319 -131 321 2 2 83 -152 181 -343 149 -290 175 -348 164
        -358 -15 -14 -434 -266 -442 -266 -7 0 -460 260 -471 270 -4 4 74 168 175 364
        101 195 184 354 186 352 1 -1 -56 -146 -128 -322z"></path>
    </g>
    </svg>
        <div id="webloader">
    </div>
</div>
<script>
    $(window).load(function(){
        $("#webloader, #loading-bg").addClass("web-animate-loader");
    });
</script>
