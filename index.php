<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="no-js" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Foundation 6 | BASIC TEMPLATE</title>
    <meta name="description" content="Page description for search results &amp; social shares goes here.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="http://new-project.static" />
    <link rel="author" href="/humans.txt">

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="/android-chrome-192x192.png" sizes="192x192">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Page Title" />
    <meta property="og:description" content="Page description for search results &amp; social shares goes here." />
    <meta property="og:url" content="http://new-project.static" />
    <meta property="og:site_name" content="New Project" />
    <meta property="og:image" content="http://new-project.static/img" />

    <link rel="stylesheet" href="<?php autoVer('/css/app.css'); ?>"/>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="row">
        <div class="large-12 columns">
            <h1>Welcome to Foundation</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="large-12 columns">
            <div class="callout">
                <h3>We&rsquo;re stoked you want to try Foundation! </h3>
                <p>To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>
                <p>Once you've exhausted the fun in this document, you should check out:</p>
                <div class="row">
                    <div class="large-4 medium-4 columns">
                        <p><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</p>
                    </div>
                    <div class="large-4 medium-4 columns">
                        <p><a href="http://zurb.com/university/code-skills">Foundation Code Skills</a><br />These online courses offer you a chance to better understand how Foundation works and how you can master it to create awesome projects.</p>
                    </div>
                    <div class="large-4 medium-4 columns">
                        <p><a href="http://foundation.zurb.com/forum">Foundation Forum</a><br />Join the Foundation community to ask a question or show off your knowlege.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="large-4 medium-4 medium-push-2 columns">
                        <p><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</p>
                    </div>
                    <div class="large-4 medium-4 medium-pull-2 columns">
                        <p><a href="https://twitter.com/ZURBfoundation">@zurbfoundation</a><br />Ping us on Twitter if you have questions. When you build something with this we'd love to see it (and send you a totally boss sticker).</p>
                    </div>        
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-8 medium-8 columns">
            <h5>Here&rsquo;s your basic grid:</h5>
            <!-- Grid Example -->

            <div class="row">
                <div class="large-12 columns">
                    <div class="primary callout">
                        <p><strong>This is a twelve column section in a row.</strong> Each of these includes a div.callout element so you can see where the columns are - it's not required at all for the grid.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="large-6 medium-6 columns">
                    <div class="primary callout">
                        <p>Six columns</p>
                    </div>
                </div>
                <div class="large-6 medium-6 columns">
                    <div class="primary callout">
                        <p>Six columns</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="large-4 medium-4 small-4 columns">
                    <div class="primary callout">
                        <p>Four columns</p>
                    </div>
                </div>
                <div class="large-4 medium-4 small-4 columns">
                    <div class="primary callout">
                        <p>Four columns</p>
                    </div>
                </div>
                <div class="large-4 medium-4 small-4 columns">
                    <div class="primary callout">
                        <p>Four columns</p>
                    </div>
                </div>
            </div>

            <hr />

            <h5>We bet you&rsquo;ll need a form somewhere:</h5>
            <form>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Input Label</label>
                        <input type="text" placeholder="large-12.columns" />
                    </div>
                </div>
                <div class="row">
                    <div class="large-4 medium-4 columns">
                        <label>Input Label</label>
                        <input type="text" placeholder="large-4.columns" />
                    </div>
                    <div class="large-4 medium-4 columns">
                        <label>Input Label</label>
                        <input type="text" placeholder="large-4.columns" />
                    </div>
                    <div class="large-4 medium-4 columns">
                        <div class="row collapse">
                            <label>Input Label</label>
                            <div class="input-group">
                                <input type="text" placeholder="small-9.columns" class="input-group-field" />
                                <span class="input-group-label">.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Select Box</label>
                        <select>
                            <option value="husker">Husker</option>
                            <option value="starbuck">Starbuck</option>
                            <option value="hotdog">Hot Dog</option>
                            <option value="apollo">Apollo</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="large-6 medium-6 columns">
                        <label>Choose Your Favorite</label>
                        <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Radio 1</label>
                        <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Radio 2</label>
                    </div>
                    <div class="large-6 medium-6 columns">
                        <label>Check these out</label>
                        <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
                        <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Textarea Label</label>
                        <textarea placeholder="small-12.columns"></textarea>
                    </div>
                </div>
            </form>
        </div>     

        <div class="large-4 medium-4 columns">
            <h5>Try one of these buttons:</h5>
            <p><a href="#" class="button">Simple Button</a><br/>       
            <a href="#" class="success button">Success Btn</a><br/>
            <a href="#" class="alert button">Alert Btn</a><br/>
            <a href="#" class="secondary button">Secondary Btn</a></p>           
            <div class="callout">
                <h5>So many components, girl!</h5>
                <p>A whole kitchen sink of goodies comes with Foundation. Check out the docs to see them all, along with details on making them your own.</p>
                <a href="http://foundation.zurb.com/sites/docs/" class="small button">Go to Foundation Docs</a>      
            </div>
        </div>
    </div>

    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/what-input/what-input.js"></script>
    <script src="/bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="<?php autoVer('/js/min/app-min.js'); ?>"></script>
</body>
</html>