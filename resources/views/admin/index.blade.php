<!DOCTYPE html>
<html>
<head>
    <!-- Primary Meta Tags -->
<title>FOM-SIM | Interface de simulation</title>
<link rel="icon" type="image/png" href="{{ asset('assethome/images/icon.png') }}"/>

<meta name="title" content="Flowy - The simple flowchart engine">
<meta name="description" content="Flowy is a minimal javascript library to create flowcharts. Use it for automation software, mind mapping tools, programming platforms, and more. Made by Alyssa X.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://alyssax.com/x/flowy">
<meta property="og:title" content="Flowy - The simple flowchart engine">
<meta property="og:description" content="Flowy is a minimal javascript library to create flowcharts. Use it for automation software, mind mapping tools, programming platforms, and more. Made by Alyssa X.">
<meta property="og:image" content="https://alyssax.com/x/assets/meta.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://alyssax.com/x/flowy">
<meta property="twitter:site" content="alyssaxuu">
<meta property="twitter:title" content="Flowy - The simple flowchart engine">
<meta property="twitter:description" content="Flowy is a minimal javascript library to create flowcharts. Use it for automation software, mind mapping tools, programming platforms, and more. Made by Alyssa X.">
<meta property="twitter:image" content="https://alyssax.com/x/assets/meta.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link href='{{ asset('assetadmin/styles.css') }}' rel='stylesheet' type='text/css'>
    <link href='{{ asset('assetadmin/flowy.min.css') }}' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="{{ asset('assetadmin/flowy.min.js') }}"></script>
    <script src="{{ asset('assetadmin/main.js') }}"></script>
</head>
<body>
    <div id="navigation">
        <div id="leftside">
            <div id="details">
            <div id="back"><img src="{{ asset('assethome/images/icon.png') }}"></div>
            <div id="names">
                <p id="title">Interface de simulation</p>
                <p id="subtitle">Fabrication du pain</p>
            </div>
        </div>
        </div>
        <div id="centerswitch">
            <div id="leftswitch">Diagramme</div>
        </div>
        <div id="buttonsright">
            <div id="discard"><a href="{{ route('profile.edit') }}" style="text-decoration:none;" >Profile</a></div>
            <div id="publish">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Déconnexion') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
    <div id="leftcard">
        {{-- <div id="closecard">
            <img src="{{ asset('assetadmin/assets/closeleft.svg') }}">
        </div> --}}
        <p id="header">Blocs</p>
        {{-- <div id="search">
            <img src="{{ asset('assetadmin/assets/search.svg') }}">
            <input type="text" placeholder="Search blocks">
        </div> --}}
        <div id="subnav">
            <div id="triggers" class="navactive side">Ingrédients</div>
            <div id="actions" class="navdisabled side">Ustensiles</div>
            <div id="loggers" class="navdisabled side">Préparation</div>
        </div>
        <div id="blocklist">
            <div class="blockelem create-flowy noselect">
                <input type="hidden" name='blockelemtype' class="blockelemtype" value="1">
                <div class="grabme">
                    {{-- <img src="{{ asset('assetadmin/assets/grabme.svg') }}"> --}}
                </div>
                <div class="blockin">
                    <div class="blockico">
                        <span></span>
                        {{-- <img src="{{ asset('assetadmin/assets/eye.svg') }}"> --}}
                    </div>
                    <div class="blocktext">
                        <p class="blocktitle">Farine</p>
                        <p class="blockdesc">Elle est fabriquée à partir de grains de céréales, comme le blé, le maïs, le riz et l'avoine. Les grains sont d'abord moulus en une poudre fine, puis tamisée pour éliminer les impuretés. La farine peut être utilisée pour faire du pain, des pâtisseries, des pâtes, des crêpes et de nombreuses autres recettes.</p>
                    </div>
                </div>
            </div>
            <div class="blockelem create-flowy noselect">
                <input type="hidden" name='blockelemtype' class="blockelemtype" value="2">
                <div class="grabme">
                    {{-- <img src="{{ asset('assetadmin/assets/grabme.svg') }}"> --}}
                </div>
                <div class="blockin">
                    <div class="blockico">
                        <span></span>
                        {{-- <img src="{{ asset('assetadmin/assets/action.svg') }}"> --}}
                    </div>
                    <div class="blocktext">
                        <p class="blocktitle">Sucre</p>
                        <p class="blockdesc">Le sucre est un glucide simple, un type de carbohydrate, qui est naturellement présent dans de nombreux aliments, tels que les fruits, les légumes et les produits laitiers. Il est également ajouté à de nombreux aliments et boissons transformés, comme les sodas, les bonbons et les pâtisseries.</p>
                    </div>
                </div>
            </div>
            <div class="blockelem create-flowy noselect">
                <input type="hidden" name='blockelemtype' class="blockelemtype" value="3">
                <div class="grabme">
                    {{-- <img src="{{ asset('assetadmin/assets/grabme.svg') }}"> --}}
                </div>
                <div class="blockin">
                    <div class="blockico">
                        <span></span>
                        {{-- <img src="{{ asset('assetadmin/assets/time.svg') }}"> --}}
                    </div>
                    <div class="blocktext">
                        <p class="blocktitle">Eau</p>
                        <p class="blockdesc">L'eau est une ressource importante pour l'industrie et l'agriculture. Elle est utilisée pour la production d'énergie, l'irrigation des cultures et le refroidissement des machines.</p>
                    </div>
                </div>
            </div>
            <div class="blockelem create-flowy noselect">
                <input type="hidden" name='blockelemtype' class="blockelemtype" value="4">
                <div class="grabme">
                    {{-- <img src="{{ asset('assetadmin/assets/grabme.svg') }}"> --}}
                </div>
                <div class="blockin">
                    <div class="blockico">
                        <span></span>
                        {{-- <img src="{{ asset('assetadmin/assets/error.svg') }}"> --}}
                    </div>
                    <div class="blocktext">
                        <p class="blocktitle">Levure</p>
                        <p class="blockdesc">La levure est un ingrédient important dans la cuisine et elle peut être utilisée pour préparer une variété de délicieux plats.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <a href="#">FOM </a>
            <span>·</span>
            <a href="#">Simulation</a>
            <span>·</span>
                <a href="http://fed-technology.com" target="_blank"><p>Made with</p><img src="{{ asset('assetadmin/assets/heart.svg') }}"><p>by</p> FED</a>
        </div>
    </div>
    <div id="propwrap">
        <div id="properties">
            <div id="close">
                <img src="{{ asset('assetadmin/assets/close.svg') }}">
            </div>
            {{-- <p id="header2">Properties</p>
            <div id="propswitch">
                <div id="dataprop">Data</div>
                <div id="alertprop">Alerts</div>
                <div id="logsprop">Logs</div>
            </div>
            <div id="proplist">
                <p class="inputlabel">Select database</p>
                <div class="dropme">Database 1 <img src="{{ asset('assetadmin/assets/dropdown.svg') }}"></div>
                <p class="inputlabel">Check properties</p>
                <div class="dropme">All<img src="{{ asset('assetadmin/assets/dropdown.svg') }}"></div>
                <div class="checkus"><img src="{{ asset('assetadmin/assets/checkon.svg') }}"><p>Log on successful performance</p></div>
                <div class="checkus"><img src="{{ asset('assetadmin/assets/checkoff.svg') }}"><p>Give priority to this block</p></div>
            </div>
            <div id="divisionthing"></div> --}}
            <div id="removeblock">Supprimer les blocs</div>
        </div>
    </div>
    <div id="canvas">
    </div>
</body>
</html>
