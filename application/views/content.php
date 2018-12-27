<!--
    *** CONTENT ***
    _________________________________________________________
    -->
<div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
	
<div style="display: block;visibility: hidden; height: 0px;" class="ng-binding">
    
    <!-- ngRepeat: p in [] | page_rang:pages -->
</div></dir-pagination-controls><!-- end ngIf: ViewMode.getViewMode() == 'grid' -->
    
    <!-- end ngIf: !isLoading && ViewMode.getCurrentComp() == 'cpu' -->

<!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="MBSelectorCtrl" class="ng-scope">
    <!-- ngIf: isLoading -->

    <!-- ngIf: !isLoading  && ViewMode.getCurrentComp() == 'mb' -->
</div>
</div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="VGASelectorCtrl" class="ng-scope">
    <!-- ngIf: isLoading -->

    <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'vga' -->
</div>
</div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="RAMSelectorCtrl" class="ng-scope">
    <!-- ngIf: isLoading -->

    <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'ram' -->
</div>
</div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="HDDSelectorCtrl" class="ng-scope">
    <!-- ngIf: isLoading -->

    <!-- ngIf: !isLoading  && ViewMode.getCurrentComp() == 'hdd' -->
</div>
</div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="SSDSelectorCtrl" class="ng-scope">
    <!-- ngIf: isLoading -->

    <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'ssd' -->
</div>
</div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="SSD2SelectorCtrl" class="ng-scope">
    <!-- ngIf: isLoading -->

    <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'ssd2' -->
</div>
</div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="PSUSelectorCtrl" class="ng-scope">
    <!-- ngIf: isLoading -->

    <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'psu' -->
</div>
</div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="CaseSelectorCtrl" class="ng-scope">
    <!-- ngIf: isLoading -->

    <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'case' -->
</div>
</div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="CoolingSelectorCtrl" class="ng-scope">
    <!-- ngIf: isLoading -->

    <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'cooling' -->
</div>
</div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="MonitorSelectorCtrl" class="ng-scope">
    <!-- ngIf: isLoading -->

    <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'monitor' -->
</div>
</div><!-- end ngRepeat: componentType in selectableComponents -->

                    <!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/mode_build.html' --><div ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/mode_build.html'" ng-show="mode=='build'" class="ng-scope"><div ng-controller="BuildResultController" class="ng-scope">


    <!-- ngIf: isLoading -->

    <!-- ngIf: !isLoading --><div ng-if="!isLoading" class="ng-scope">
      

        <div class="part-line"></div>

        <div id="vote-box">
            <!-- ngIf: info.current_owner_id -->
            <!-- ngIf: AuthManager.getCacheLoginStatus() -->
        </div>

        <div id="part-result-graphic">

            <div id="part-result-area">
                <result-image><div ng-bind-html="renderedHtml" class="ng-binding"><!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="760" height="593" viewBox="0 0 759.99999 593" id="svg2" version="1.1" aria-labelledby="title desc" inkscape:version="0.91 r13725" sodipodi:docname="tmpl_all.svg">

    
    <g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(0,-459.36219)">
        <rect style="fill:#399f8b;fill-opacity:1;stroke:none" id="rect3336" width="10" height="50" x="0" y="481.36218"></rect>
        <text xml:space="preserve" style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" x="19.978516" y="519.68359" id="text4148" sodipodi:linespacing="125%"><tspan sodipodi:role="line" x="19.978516" y="519.68359" id="tspan4150" style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:condensed;font-size:36px;line-height:125%;font-family:'agency-fb';-inkscape-font-specification:'Agency FB Bold Condensed';text-align:start;writing-mode:lr-tb;text-anchor:start"><tspan x="19.978516" y="519.68359" style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:condensed;font-size:36px;line-height:125%;font-family:'agency-fb';-inkscape-font-specification:'Agency FB Bold Condensed';text-align:start;writing-mode:lr-tb;text-anchor:start" id="tspan4152"> / </tspan></tspan></text>
    <text xml:space="preserve" style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" x="20.142344" y="559.79712" id="text4148-9" sodipodi:linespacing="125%"><tspan sodipodi:role="line" x="20.142344" y="559.79712" id="tspan4153" style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:condensed;font-size:30px;font-family:'agency-fb';-inkscape-font-specification:'Agency FB Bold Condensed'">0 BAHT</tspan></text>
        <path sodipodi:type="star" style="fill:#333333;fill-opacity:1;stroke:none" id="path4188" sodipodi:sides="3" sodipodi:cx="863.68042" sodipodi:cy="395.76303" sodipodi:r1="84.575775" sodipodi:r2="42.287888" sodipodi:arg1="-0.51173884" sodipodi:arg2="0.53545871" inkscape:flatsided="true" inkscape:rounded="0" inkscape:randomized="0" d="M 937.42156,354.34678 862.67738,480.33286 790.94232,352.60946 Z" inkscape:transform-center-x="2.4118798" inkscape:transform-center-y="0.44436088" transform="matrix(-0.72157705,-0.71184898,0.40065019,-0.41955747,1191.19,1275.3531)"></path>
        <g id="part-case">
            <path transform="matrix(2.5253911,-0.02098513,0.02098513,2.5253911,-90.965257,-907.96176)" d="m 215.67102,677.85408 -31.61616,17.77797 -31.20425,-18.49141 0.4119,-36.26938 31.61616,-17.77797 31.20425,18.49141 z" inkscape:randomized="0" inkscape:rounded="0" inkscape:flatsided="true" sodipodi:arg2="1.0585539" sodipodi:arg1="0.53495507" sodipodi:r2="19.118814" sodipodi:r1="36.271721" sodipodi:cy="659.36267" sodipodi:cx="184.46677" sodipodi:sides="6" id="path4259-8-5" fill="#353535" stroke="#000000" style="fill-opacity:1;stroke-width:0.9899115;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" sodipodi:type="star"></path>
            <text xml:space="preserve" style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" x="389.62216" y="768.37518" id="text5109-9" sodipodi:linespacing="125%"><tspan sodipodi:role="line" id="tspan5111-0" x="389.62216" y="768.37518" fill="#ffffff" style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:condensed;font-size:40px;font-family:'agency-fb';-inkscape-font-specification:'Agency FB Bold Condensed';text-align:center;text-anchor:middle;fill-opacity:1">CASE</tspan></text>
        </g>
        <g id="part-ram">
            <path transform="matrix(0.99996548,-0.00830937,0.00830937,0.99996548,-25.47019,36.128835)" d="m 215.67102,677.85408 -31.61616,17.77797 -31.20425,-18.49141 0.4119,-36.26938 31.61616,-17.77797 31.20425,18.49141 z" inkscape:randomized="0" inkscape:rounded="0" inkscape:flatsided="true" sodipodi:arg2="1.0585539" sodipodi:arg1="0.53495507" sodipodi:r2="19.118814" sodipodi:r1="36.271721" sodipodi:cy="659.36267" sodipodi:cx="184.46677" sodipodi:sides="6" id="path4259" fill="#353535" stroke="#000000" style="fill-opacity:1;stroke-width:2;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" sodipodi:type="star"></path>
            <text xml:space="preserve" style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" x="164.50734" y="698.80878" id="text5109" sodipodi:linespacing="125%"><tspan sodipodi:role="line" id="tspan5111" x="164.50734" y="698.80878" fill="#ffffff" style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:condensed;font-size:13px;font-family:'agency-fb';-inkscape-font-specification:'Agency FB Bold Condensed';text-align:center;text-anchor:middle;fill-opacity:1">RAM</tspan></text>
        </g>
        <g id="part-cpu">
            <path transform="matrix(0.99996548,-0.00830937,0.00830937,0.99996548,75.52981,21.128835)" d="m 215.67102,677.85408 -31.61616,17.77797 -31.20425,-18.49141 0.4119,-36.26938 31.61616,-17.77797 31.20425,18.49141 z" inkscape:randomized="0" inkscape:rounded="0" inkscape:flatsided="true" sodipodi:arg2="1.0585539" sodipodi:arg1="0.53495507" sodipodi:r2="19.118814" sodipodi:r1="36.271721" sodipodi:cy="659.36267" sodipodi:cx="184.46677" sodipodi:sides="6" id="path4259-8" fill="#353535" stroke="#000000" style="fill-opacity:1;stroke-width:2;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" sodipodi:type="star"></path>
            <text xml:space="preserve" style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" x="265.17139" y="683.62964" id="text5109-2" sodipodi:linespacing="125%"><tspan sodipodi:role="line" id="tspan5111-2" x="265.17139" y="683.62964" fill="#ffffff" style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:condensed;font-size:13px;font-family:'agency-fb';-inkscape-font-specification:'Agency FB Bold Condensed';text-align:center;text-anchor:middle;fill-opacity:1">CPU</tspan></text>
        </g>
        <g id="part-mb">
            <path transform="matrix(0.99996548,-0.00830937,0.00830937,0.99996548,36.52981,84.128835)" d="m 215.67102,677.85408 -31.61616,17.77797 -31.20425,-18.49141 0.4119,-36.26938 31.61616,-17.77797 31.20425,18.49141 z" inkscape:randomized="0" inkscape:rounded="0" inkscape:flatsided="true" sodipodi:arg2="1.0585539" sodipodi:arg1="0.53495507" sodipodi:r2="19.118814" sodipodi:r1="36.271721" sodipodi:cy="659.36267" sodipodi:cx="184.46677" sodipodi:sides="6" id="path4259-8-3" fill="#353535" stroke="#000000" style="fill-opacity:1;stroke-width:2;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" sodipodi:type="star"></path>
            <text xml:space="preserve" style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" x="226.28052" y="746.91571" id="text5109-0" sodipodi:linespacing="125%"><tspan sodipodi:role="line" id="tspan5111-3" x="226.28052" y="746.91571" fill="#ffffff" style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:condensed;font-size:13px;font-family:'agency-fb';-inkscape-font-specification:'Agency FB Bold Condensed';text-align:center;text-anchor:middle;fill-opacity:1">MB</tspan></text>
        </g>
        <g id="part-vga">
            <path transform="matrix(0.99996548,-0.00830937,0.00830937,0.99996548,74.52981,148.12884)" d="m 215.67102,677.85408 -31.61616,17.77797 -31.20425,-18.49141 0.4119,-36.26938 31.61616,-17.77797 31.20425,18.49141 z" inkscape:randomized="0" inkscape:rounded="0" inkscape:flatsided="true" sodipodi:arg2="1.0585539" sodipodi:arg1="0.53495507" sodipodi:r2="19.118814" sodipodi:r1="36.271721" sodipodi:cy="659.36267" sodipodi:cx="184.46677" sodipodi:sides="6" id="path4259-8-2" fill="#353535" stroke="#000000" style="fill-opacity:1;stroke-width:2;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" sodipodi:type="star"></path>
            <text xml:space="preserve" style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" x="264.71048" y="811.26245" id="text5109-4" sodipodi:linespacing="125%"><tspan sodipodi:role="line" id="tspan5111-5" x="264.71048" y="811.26245" fill="#ffffff" style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:condensed;font-size:13px;font-family:'agency-fb';-inkscape-font-specification:'Agency FB Bold Condensed';text-align:center;text-anchor:middle;fill-opacity:1">VGA</tspan></text>
        </g>
        <g id="part-cooling">
            <path transform="matrix(0.99996548,-0.00830937,0.00830937,0.99996548,157.52981,216.12884)" d="m 215.67102,677.85408 -31.61616,17.77797 -31.20425,-18.49141 0.4119,-36.26938 31.61616,-17.77797 31.20425,18.49141 z" inkscape:randomized="0" inkscape:rounded="0" inkscape:flatsided="true" sodipodi:arg2="1.0585539" sodipodi:arg1="0.53495507" sodipodi:r2="19.118814" sodipodi:r1="36.271721" sodipodi:cy="659.36267" sodipodi:cx="184.46677" sodipodi:sides="6" id="path4259-8-9-8" fill="#353535" stroke="#000000" style="fill-opacity:1;stroke-width:2;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" sodipodi:type="star"></path>
            <text xml:space="preserve" style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" x="347.54932" y="878.79114" id="text5109-1" sodipodi:linespacing="125%"><tspan sodipodi:role="line" id="tspan5111-57" x="347.54932" y="878.79114" fill="#ffffff" style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:condensed;font-size:13px;font-family:'agency-fb';-inkscape-font-specification:'Agency FB Bold Condensed';text-align:center;text-anchor:middle;fill-opacity:1">COOLING</tspan></text>
        </g>
        <g id="part-monitor">
            <path transform="matrix(0.99996548,-0.00830937,0.00830937,0.99996548,244.52981,216.12884)" d="m 215.67102,677.85408 -31.61616,17.77797 -31.20425,-18.49141 0.4119,-36.26938 31.61616,-17.77797 31.20425,18.49141 z" inkscape:randomized="0" inkscape:rounded="0" inkscape:flatsided="true" sodipodi:arg2="1.0585539" sodipodi:arg1="0.53495507" sodipodi:r2="19.118814" sodipodi:r1="36.271721" sodipodi:cy="659.36267" sodipodi:cx="184.46677" sodipodi:sides="6" id="path4259-8-9-6" fill="#353535" stroke="#000000" style="fill-opacity:1;stroke-width:2;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" sodipodi:type="star"></path>
            <text xml:space="preserve" style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" x="434.72357" y="878.38422" id="text5109-3" sodipodi:linespacing="125%"><tspan sodipodi:role="line" id="tspan5111-4" x="434.72357" y="878.38422" fill="#ffffff" style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:condensed;font-size:13px;font-family:'agency-fb';-inkscape-font-specification:'Agency FB Bold Condensed';text-align:center;text-anchor:middle;fill-opacity:1">MONITOR</tspan></text>
        </g>
        <g id="part-psu">
            <path transform="matrix(0.99996548,-0.00830937,0.00830937,0.99996548,322.52981,143.12884)" d="m 215.67102,677.85408 -31.61616,17.77797 -31.20425,-18.49141 0.4119,-36.26938 31.61616,-17.77797 31.20425,18.49141 z" inkscape:randomized="0" inkscape:rounded="0" inkscape:flatsided="true" sodipodi:arg2="1.0585539" sodipodi:arg1="0.53495507" sodipodi:r2="19.118814" sodipodi:r1="36.271721" sodipodi:cy="659.36267" sodipodi:cx="184.46677" sodipodi:sides="6" id="path4259-8-9-9" fill="#353535" stroke="#000000" style="fill-opacity:1;stroke-width:2;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" sodipodi:type="star"></path>
            <text xml:space="preserve" style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" x="512.30518" y="805.59821" id="text5109-8" sodipodi:linespacing="125%"><tspan sodipodi:role="line" id="tspan5111-55" x="512.30518" y="805.59821" fill="#ffffff" style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:condensed;font-size:13px;font-family:'agency-fb';-inkscape-font-specification:'Agency FB Bold Condensed';text-align:center;text-anchor:middle;fill-opacity:1">PSU</tspan></text>
        </g>
        <g id="part-hdd">
            <path transform="matrix(0.99996548,-0.00830937,0.00830937,0.99996548,340.52981,71.128835)" d="m 215.67102,677.85408 -31.61616,17.77797 -31.20425,-18.49141 0.4119,-36.26938 31.61616,-17.77797 31.20425,18.49141 z" inkscape:randomized="0" inkscape:rounded="0" inkscape:flatsided="true" sodipodi:arg2="1.0585539" sodipodi:arg1="0.53495507" sodipodi:r2="19.118814" sodipodi:r1="36.271721" sodipodi:cy="659.36267" sodipodi:cx="184.46677" sodipodi:sides="6" id="path4259-8-32" fill="#353535" stroke="#000000" style="fill-opacity:1;stroke-width:2;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" sodipodi:type="star"></path>
            <text xml:space="preserve" style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" x="530.63654" y="733.83423" id="text5109-5" sodipodi:linespacing="125%"><tspan sodipodi:role="line" id="tspan5111-1" x="530.63654" y="733.83423" fill="#ffffff" style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:condensed;font-size:13px;font-family:'agency-fb';-inkscape-font-specification:'Agency FB Bold Condensed';text-align:center;text-anchor:middle;fill-opacity:1">HDD</tspan></text>
        </g>
        <g id="part-ssd">
            <path transform="matrix(0.99996548,-0.00830937,0.00830937,0.99996548,393.52981,123.12883)" d="m 215.67102,677.85408 -31.61616,17.77797 -31.20425,-18.49141 0.4119,-36.26938 31.61616,-17.77797 31.20425,18.49141 z" inkscape:randomized="0" inkscape:rounded="0" inkscape:flatsided="true" sodipodi:arg2="1.0585539" sodipodi:arg1="0.53495507" sodipodi:r2="19.118814" sodipodi:r1="36.271721" sodipodi:cy="659.36267" sodipodi:cx="184.46677" sodipodi:sides="6" id="path4259-8-9" fill="#353535" stroke="#000000" style="fill-opacity:1;stroke-width:2;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" sodipodi:type="star"></path>
            <text xml:space="preserve" style="font-style:normal;font-weight:normal;font-size:40px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" x="584.07654" y="786.86719" id="text5109-84" sodipodi:linespacing="125%"><tspan sodipodi:role="line" id="tspan5111-8" x="584.07654" y="786.86719" fill="#ffffff" style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:condensed;font-size:13px;font-family:'agency-fb';-inkscape-font-specification:'Agency FB Bold Condensed';text-align:center;text-anchor:middle;fill-opacity:1">SSD</tspan></text>
        </g>
 
       
           
    </g>
</svg></div>
       </div>
        </div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
       