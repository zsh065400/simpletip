<?php
$version = "1.3.1"; //Current stable version number
$section = explode("/", $_GET['section']);
$section = $section[0];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Simpletip - A simple jQuery tooltip plugin</title>
<!--Stylesheets-->
<link rel="stylesheet" type="text/css" href="/projects/simpletip/code.css"  />
<link rel="stylesheet" type="text/css" href="/projects/simpletip/simpletip.css"  />
<!--Meta-->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Simpletip jQuery plugin. Making tooltips simple!" />
<meta name="keywords" content="simpletip, jquery, javascript, plugin, tooltip, tooltips, craigsworks, craig thompson" />
<meta name="author" content="Craig Thompson" />
</head>
<body>

<div id="qtip">
   <a href="/projects/qtip2/" class="right">Visit the site &raquo;</a>
   <b>Introducing qTip2...</b> the successor to Simpletip!
</div>

<div id="master">
   <div class="caption right">
      A simple jQuery tooltip plugin by <a href="/"><img src="http://media1.juggledesign.com/portfolio/images/logo.png" alt="Craig Thompson" /></a>
   </div>
   <div class="clear">&nbsp;</div>

   <div class="body">
      <div class="header">
         <img class="logo left" src="/projects/simpletip/images/logo_small.png" alt="Simpletip" />

         <a rel="docs" class="docs right" href="#docs">Read the documentation</a>
         <a rel="demo" class="demo right" href="#demo">View some demos!</a>
         <a class="downloads right beta" href="/projects/qtip2/"><b>Checkout the new plugin!</b></a>
	 <a rel="downloads" class="downloads right" href="#downloads">Download stable (<b><?=$version;?></b>)</a>
         <div class="clear">&nbsp;</div>
      </div>

      <div class="content">
         <div class="demo">
            <a name="demo"></a>
            <h1>Demos</h1>

            <div class="simple">
               <h2>Simple tooltips</h2>
               Here's some examples of simple tooltips using some of the default options provided by the simpletip library.
               <div class="sandbox">
                  <div class="example simple-hover">
                     <a>Hover over me</a> to see a bog standard tooltip using all default options.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>();
                     </code>
                  </div>

                  <div class="example simple-hover-fixed">
                     <a>Hover over me</a> to see a fixed position tooltip.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   fixed: <var>true</var>
});
                     </code>
                  </div>

                  <div class="example simple-click">
                     Click to see a <a>persistent tooltip</a> that only closes when clicked! Click the link or the tooltip to close it.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   persistent: <var>true</var>
});
                     </code>
                  </div>

                  <div class="example simple-content">
                  Here's a <a>tooltip with some custom content</a>. Click the link or tooltip to close it.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   persistent: <var>true</var>,
   content: <var>'&lt;img src="/projects/simpletip/images/logo_small.png" /&gt;'</var>
});
                     </code>
                  </div>
               </div>
            </div>

            <div class="position">
               <h2>Positioning</h2>
               When using static tooltips (e.g. <b>fixed: true;</b> configuration) there are several options available to position the tooltip. There are several pre-defined types such as <b>top</b> and <b>right</b>:
               <div class="sandbox">
                  <div class="example position-left">
                     <a>Hover over me</a> to see a tooltip positioned to the <b>left</b> of the parent element.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   fixed: <var>true</var>,
   position: <var>'left'</var>
});
                     </code>
                  </div>

                  <div class="example position-right">
                     <a>Hover over me</a> to see a tooltip positioned to the <b>right</b> of the parent element.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   fixed: <var>true</var>,
   position: <var>'right'</var>
});
                     </code>
                  </div>

                  <div class="example position-top">
                     <a>Hover over me</a> to see a tooltip positioned to the <b>top</b> of the parent element.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   fixed: <var>true</var>,
   position: <var>'top'</var>
});
                     </code>
                  </div>

                  <div class="example position-bottom">
                     <a>Hover over me</a> to see a tooltip positioned to the <b>bottom</b> of the parent element.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   fixed: <var>true</var>,
   position: <var>'bottom'</var>
});
                     </code>
                  </div>
               </div>

               Also available is the option of user-defined absolute and/or relative positions using coordinate arrays e.g. absolute: [posX, posY], relative: ["posX", "posY"] or mixed: ["posX", posY]/[posX, "posY"] e.g.
               <div class="sandbox">
                  <div class="example position-absolute">
                     This tooltip is <a>absolutely positioned</a> at coordinates <b>[100, 730]</b>.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   fixed: <var>true</var>,
   position: <var>[100, 730]</var>
});
                     </code>
                  </div>

                  <div class="example position-relative">
                     This tooltip is <a>relatively positioned</a> to its parent element at coordinates <b>["0", "-100"]</b>.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   fixed: <var>true</var>,
   position: <var>["0", "-100"]</var>
});
                     </code>
                  </div>

                  <div class="example position-mixed">
                     You can even <b>mix relative and positive positions!</b> Here's a <a>mixed coordinate tooltip</a> at <b>["40", 740]</b>.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   fixed: <var>true</var>,
   position: <var>["40", 740]</var>
});
                     </code>
                  </div>
               </div>

               If your using the predefined positions above (top, bottom etc.) you can <i>adjust</i> the position using the <b>offset</b> property, which takes the form a [posX, posY] array as seen in earlier positioning examples, as shown below:
               <div class="sandbox">
                  <div class="example position-offset">
                     <a>This new tooltip</a> is positioned to the right, but adjusted with an offset of <b>[30, 0]</b>.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   position: <var>'right'</var>,
   offset: <var>[30, 0]</var>
});
                     </code>
                  </div>
               </div>

            </div>

            <div class="effects">
               <h2>Effects</h2>
               Currently there are only two effects available by default in jQuery's base effects library, <b>fade</b> and <b>slide</b>:
               <div class="sandbox">
                  <div class="example effects-slide">
                     Here's a <a>pretty basic tooltip</a> applied with the slide effect.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   showEffect: <var>'slide'</var>,
   hideEffect: <var>'slide'</var>,
   position: <var>'top'</var>
});
                     </code>
                  </div>

                  <div class="example effects-fade">
                     Here's another <a>tooltip with the <b>default</b> fade effect.</a>
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   position: <var>'top'</var>
});
                     </code>
                  </div>

                  <div class="example effects-seperate">
                     <a>Separate effects can be applied</a> to show and hide events, like this slide-in fade-out tooltip.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   fixed: <var>true</var>,
   position: <var>'right'</var>,
   showEffect: <var>'slide'</var>,
   hideEffect: <var>'fade'</var>
});
                     </code>
                  </div>
               </div>

               Fortunately, there is also the option of <b>custom methods</b> for hiding and showing your tooltips! This is achieved by the use of the <b>'custom'</b> showEffect/hideEffect property and the <b>showCustom</b> and <b>hideCustom</b> method callbacks, which are fired when the tooltip is shown or hidden. Examples:
               <div class="sandbox">
                  <div class="example effects-custom-show">
                     Applying a <a>custom show effect</a> using the showEffect and showCustom properties.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   position: <var>'bottom'</var>,
   showEffect: <var>'custom'</var>,
   showCustom: <dfn>function</dfn>(){
      <span>// Note the <b>this</b> attribute refers to the tooltip itself</span>
      $(<var>this</var>).<dfn>css</dfn>({
         fontSize: <var>'12px'</var>,
         display: <var>'block'</var>
      })
      .<dfn>animate</dfn>({
         fontSize: <var>'20px'</var>
      }, <var>400</var>);
   }
});
                     </code>
                  </div>

                  <div class="example effects-custom-both">
                     Applying <a>custom effects on both</a> show and hide.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   position: <var>'bottom'</var>,
   showEffect: <var>'custom'</var>,
   hideEffect: <var>'custom'</var>,
   showCustom: <dfn>function</dfn>(){
      <span>// Note the <b>this</b> attribute refers to the tooltip itself</span>
      $(<var>this</var>).<dfn>animate</dfn>({
         width: <var>'150px'</var>,
         opacity: <var>1</var>,
         display: <var>'block'</var>
      }, <var>400</var>);
   },
   hideCustom: <dfn>function</dfn>(){
      <span>// Note the <b>this</b> attribute refers to the tooltip itself</span>
      $(<var>this</var>).<dfn>animate</dfn>({
         width: <var>'100px'</var>,
         opacity: <var>0</var>,
         display: <var>'none'</var>
      }, <var>400</var>);
   }
});
                     </code>
                  </div>
               </div>

               If you require the <b>hideTime</b> or <b>showTime</b> properties you defined, they can be accessed as an argument of the custom callback function:
               <div class="sandbox">
                  <div class="example effects-custom-time">
                     This new tooltip <a>utilises the your configurations <b>showTime property</b></a> via a method argument.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   position: <var>'bottom'</var>,
   showEffect: <var>'custom'</var>,
   <span>// Note the argument (showTime) in the function definition</span>
   showCustom: <dfn>function</dfn>(<var>showTime</var>){
      $(<var>this</var>).<dfn>css</dfn>({
         borderWidth: <var>'inherit'</var>,
         fontSize: <var>'12px'</var>,
         display: <var>'block'</var>
      })
      .<dfn>animate</dfn>({
         borderWidth: <var>4</var>,
         fontSize: <var>'16px'</var>
      }, <var>showTime</var>);
   }
});
                     </code>
                  </div>
               </div>
            </div>

            <div class="dynamic">
               <h2>Dynamic content</h2>
               Data can be stored in an array and easily used to create tooltips with different content using a single jQuery selector.
               <div class="sandbox">
                  <div class="example dynamic-array">
                     Content for <a>this tooltip</a> is different from <a>this</a> and <a>this</a>, but all are selected with the same jQuery selector!
                     <code class="js">&nbsp;
<span>// Setup a content array for the tooltips</span>
var <var>arrayData</var> = [<var>'Content for tooltip 1'</var>, <var>'Content for tooltip 2'</var>, <var>'Content for tooltip 3'</var>];

$(<var>"JQUERY SELECTOR"</var>).<dfn>each</dfn>(<dfn>function</dfn>(<var>i</var>){
   $(<var>this</var>).<dfn>simpletip</dfn>({ content: <var>arrayData[</var>i<var>]</var> });
});
                     </code>
                  </div>
               </div>

               Using the library's API update() method we can update the content of the tooltip at any time.
               <div class="sandbox">
                  <div class="example dynamic-update">
                     <a>This tooltip</a> content is updated everytime it's shown with the number of seconds passed in the minute.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   onBeforeShow: <dfn>function</dfn>(){
      <span>// Note <b>this</b> refers to the API in the callback function</span>
      var <var>curDate</var> = new <dfn>Date</dfn>();
      this.<dfn>update</dfn>(curDate.<dfn>getSeconds</dfn>() + <var>' seconds have elapsed in this minute.'</var>);
   }
});
                     </code>
                  </div>
               </div>

               Content for each tooltip can also be loaded remotely using the library's API load() method, which utilises AJAX to retrieve content from a remote file.
               <div class="sandbox">
                  <div class="example dynamic-ajax">
                     The content of <a>this tooltip</a> is loaded from a local file named <b>content.txt</b>.
                     <code class="js">&nbsp;
<span>// Note the extra .simpletip() call to access the api</span>
var <var>api</var> = $(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>().<dfn>simpletip</dfn>();

<span>// Load the content using the API load() method</span>
<var>api</var>.<dfn>load</dfn>(<var>'content.txt'</var>);
                     </code>
                  </div>

                  <div class="example dynamic-ajax-onshow">
                     Content can also be <a>loaded just before the tooltip is shown</a> to reduce overhead.
                     <code class="js">&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   onBeforeShow: <dfn>function</dfn>(){
      <span>// Note <b>this</b> refers to the API in the callback function</span>
      this.<dfn>load</dfn>(<var>'content.txt'</var>);
   }
});
                     </code>
                  </div>
               </div>
            </div>
         </div>

         <div class="docs">
            <a name="docs"></a>
            <h1>Documentation</h1>

            <h2>Overview</h2>
            Simpletip is a plugin for the popular <a href="http://jquery.com">jQuery</a> JavaScript library. It allows you to create tooltips with ease on any element on the page using the power of jQuery's selectors and event management. The tooltips can be static, dynamic, or even loaded through AJAX with a variety of different visual effects.

            <h2>Configuration</h2>
            There are many other ways of using this tool than the demos provided here. It is important to realize that <b>any</b> element can have a simpletip assigned to it! Simpletip is always styled and instantiated with following:<br />
            <code class="js left">&nbsp;
<span>/* JavaScript code */</span>

<span>// Selects one or more elements to assign a simpletip to</span>
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({

   <span>// Configuration properties</span>
   content: <var>'My Simpletip'</var>,
   fixed: <var>false</var>

});
            </code>
            <code class="css">&nbsp;
<span>/* CSS rules */</span>

<span>// Default tooltip class name: .tooltip</span>
<samp>.tooltip</samp>{
   <dfn>position:</dfn> <var>absolute</var>;
   <dfn>top:</dfn> <var>0</var>;
   <dfn>left:</dfn> <var>0</var>;
   <dfn>z-index:</dfn> <var>3</var>;
   <dfn>display:</dfn> <var>none</var>;
}
            </code>
            <div class="clear">&nbsp;</div>
            The tooltip <b>must be absolutely positioned</b> for the positioning to work correctly. If you are having problems with tooltips not showing or being positioned correctly this is most likely the cause of it!


            <h2>Configuration properties</h2>
            <table class="properties" cellpadding="0" cellspacing="0">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Description</th>
                     <th>Possible values</th>
                     <th>Default value</th>
                  </tr>
               </thead>
               <tr>
                  <td class="name">content</td>
                  <td class="description">The HTML content which will appear inside the tooltip.</td>
                  <td class="possible">Valid HTML</td>
                  <td class="value">A simple tooltip</td>
               </tr>
               <tr>
                  <td class="name">persistent</td>
                  <td class="description">If set to <b>true</b> the tooltip will activate <b>onclick</b> rather than the default <b>onhover</b> behaviour.</td>
                  <td class="possible">true or false</td>
                  <td class="value">false</td>
               </tr>
               <tr>
                  <td class="name">focus</td>
                  <td class="description">For use with the <span class="prop">persistent</span> config option. If set to <b>true</b> the tooltip will stay active (on screen) until the document is clicked elsewhere. If false, tooltip will also close when clicked.</td>
                  <td class="possible">true or false</td>
                  <td class="value">false</td>
               </tr>
               <tr>
                  <td class="name">hidden</td>
                  <td class="description">If set to <b>false</b> the tooltip will be shown immediately when created. <i>Works well with <span class="prop">persistent</span></i>.</td>
                  <td class="possible">true or false</td>
                  <td class="value">true</td>
               </tr>
               <tr class="blank"><td colspan="4">&nbsp;</td></tr>
               <tr>
                  <td class="name">position</td>
                  <td class="description">
                     Determines how the tooltip is positioned relative to the element it is shown on.
                     An array of <b>x, y</b> can be used set an absolute position. Encapsulating them in a string <b>e.g. ["0", "0"]</b> causes the positioning to be done <i>relative to the top left corner</i> of the root element. An HTML element can also be passed as an argument and it's current position assumed by the tooltip.
                  </td>
                  <td class="possible">default <br />top, bottom <br />left, right <br />absolute: [x, y] <br />relative: ["x", "y"]<br />mixed: ["x", y] / [x, "y"]<br />HTML element</td>
                  <td class="value">default</td>
               </tr>
               <tr>
                  <td class="name">offset</td>
                  <td class="description">Array of <b>x, y</b> by which to offset the tooltips position relative to that calculated by the <span class="prop">position</span> property.</td>
                  <td class="possible">Array of any 2 integers</td>
                  <td class="value">[0, 0]</td>
               </tr>
               <tr>
                  <td class="name">boundryCheck</td>
                  <td class="description">
                     If <b>true</b> positioning will take into account window height and width to ensure tooltip does not scroll off page e.g. is always visible. <br /><br />
                     <b>NOTE:</b> Set this to <b>false</b> if your experiencing jittering on non-fixed tooltips</td>
                  <td class="possible">true or false</td>
                  <td class="value">true</td>
               </tr>
               <tr>
                  <td class="name">fixed</td>
                  <td class="description">If set to <b>false</b> the tooltip moves with mouse as long as mouse is hovered over the root element.</td>
                  <td class="possible">true or false</td>
                  <td class="value">true</td>
               </tr>
               <tr class="blank"><td colspan="4">&nbsp;</td></tr>
               <tr>
                  <td class="name">showEffect</td>
                  <td class="description">Type of show effect to use.</td>
                  <td class="possible">fade, slide, none</td>
                  <td class="value">fade</td>
               </tr>
               <tr>
                  <td class="name">hideEffect</td>
                  <td class="description">Type of hide effect to use.</td>
                  <td class="possible">fade, slide, none</td>
                  <td class="value">fade</td>
               </tr>
               <tr>
                  <td class="name">showTime</td>
                  <td class="description">Time in milliseconds for <span class="prop">showEffect</span> effect.</td>
                  <td class="possible">Positive integer</td>
                  <td class="value">150</td>
               </tr>
               <tr>
                  <td class="name">hideTime</td>
                  <td class="description">Time in milliseconds for <span class="prop">hideEffect</span> effect.</td>
                  <td class="possible">Positive integer</td>
                  <td class="value">150</td>
               </tr>
               <tr>
                  <td class="name">showCustom</td>
                  <td class="description">Used along with the <span class="prop">showEffect: 'custom'</span> property. Custom method called when tooltip is shown.</td>
                  <td class="possible">Defined method</td>
                  <td class="value">null</td>
               </tr>
               <tr>
                  <td class="name">hideCustom</td>
                  <td class="description">Used along with the <span class="prop">hideEffect: 'custom'</span> property. Custom method called when tooltip is hidden.</td>
                  <td class="possible">Defined method</td>
                  <td class="value">null</td>
               </tr>
               <tr class="blank"><td colspan="4">&nbsp;</td></tr>
               <tr>
                  <td class="name">baseClass</td>
                  <td class="description">Class name to apply to generated tooltip elements <b>supplied without the dot prefix</b>.</td>
                  <td class="possible">Any valid class name</td>
                  <td class="value">tooltip</td>
               </tr>
               <tr>
                  <td class="name">activeClass</td>
                  <td class="description">Class name to apply to active (currently shown) tooltip elements <b>supplied without the dot prefix</b>.</td>
                  <td class="possible">Any valid class name</td>
                  <td class="value">active</td>
               </tr>
               <tr>
                  <td class="name">fixedClass</td>
                  <td class="description">Class name to apply to tooltip elements which move with the mouse i.e. non-static <b>supplied without the dot prefix</b>.</td>
                  <td class="possible">Any valid class name</td>
                  <td class="value">fixed</td>
               </tr>
               <tr>
                  <td class="name">persistentClass</td>
                  <td class="description">Class name to apply to presistent tooltip elements <b>supplied without the dot prefix</b>.</td>
                  <td class="possible">Any valid class name</td>
                  <td class="value">persistent</td>
               </tr>
               <tr>
                  <td class="name">focusClass</td>
                  <td class="description">Class name to apply to persistent focus tooltip elements <b>supplied without the dot prefix</b>.</td>
                  <td class="possible">Any valid class name</td>
                  <td class="value">focus</td>
               </tr>
               <tr class="blank"><td colspan="4">&nbsp;</td></tr>
               <tr>
                  <td class="name">onBeforeShow</td>
                  <td class="description">Callback method to execute before tooltip is shown.</td>
                  <td class="possible">Defined method</td>
                  <td class="value">function(){}</td>
               </tr>
               <tr>
                  <td class="name">onShow</td>
                  <td class="description">Callback method to execute after tooltip is shown.</td>
                  <td class="possible">Defined method</td>
                  <td class="value">function(){}</td>
               </tr>
               <tr>
                  <td class="name">onBeforeHide</td>
                  <td class="description">Callback method to execute before tooltip is hidden.</td>
                  <td class="possible">Defined method</td>
                  <td class="value">function(){}</td>
               </tr>
               <tr>
                  <td class="name">onHide</td>
                  <td class="description">Callback method to execute after tooltip is hidden.</td>
                  <td class="possible">Defined method</td>
                  <td class="value">function(){}</td>
               </tr>
               <tr>
                  <td class="name">beforeContentLoad</td>
                  <td class="description">Callback method to execute before content is loaded using the <span class="prop">load</span> method.</td>
                  <td class="possible">Defined method</td>
                  <td class="value">function(){}</td>
               </tr>
               <tr class="last">
                  <td class="name">onContentLoad</td>
                  <td class="description">Callback method to execute after content is loaded using the <span class="prop">load</span> method.</td>
                  <td class="possible">Defined method</td>
                  <td class="value">function(){}</td>
               </tr>
            </table>


            <h2>Callback functions</h2>
            The Simpletip library provides several key callback functions as part of it's API, allowing you to extend the functionality of the library with custom methods. Below is an example utilising the onShow method to change the content an element:
            <code class="js">&nbsp;&nbsp;
$(<var>"JQUERY SELECTOR"</var>).<dfn>simpletip</dfn>({
   <span>// onShow method - change content of parent element</span>
   onShow: <dfn>function</dfn>(){
               this.getParent().<dfn>text</dfn>(<var>'My content changes when my tooltip appears!'</var>)
           }

   <span>// Configuration properties</span>
   content: <var>'My Simpletip'</var>

});
            </code>
            Checkout the <a rel="demo" href="#demo">demos</a> page for more examples.

            <h2>Scripting <i>API</i></h2>
            The Simpletip comes with a great scripting API for users. A lot of effort has been made to make sure you have the necessary functionality to enrich the library with as little effort as possible. Once you've setup your simpletip on your element(s) the API can be accessed via the simpletip() call. An example of this is below:
            <code class="js">&nbsp;&nbsp;
<span>// Create your tooltips</span>
$(<var>'JQUERY SELECTOR'</var>).<dfn>simpletip</dfn>();

<span>// Access the API of a previously initatied simpletip</span>
var <var>api</var> = $(<var>'JQUERY SELECTOR'</var>).<dfn>eq</dfn>(0).<dfn>simpletip</dfn>();

<span>// Perform a simple API call to update tooltip contents</span>
<dfn>api</dfn>.update(<var>'New tooltip content!'</var>);
            </code>

            Here's a list of all API methods available to you in the library:
            <table class="methods" cellpadding="0" cellspacing="0">
               <thead>
                  <tr>
                     <th>Method</th>
                     <th>Arguments</th>
                     <th>Return value</th>
                     <th>Description</th>
                  </tr>
               </thead>
               <tr>
                  <td class="name">getVersion()</td>
                  <td class="arguments"></td>
                  <td class="return">[x, x, x]</td>
                  <td class="description">Returns the version number of the Simpletip library currently in use.</td>
               </tr>
               <tr>
                  <td class="name">getParent()</td>
                  <td class="arguments"></td>
                  <td class="return">Object</td>
                  <td class="description">Returns the element which the tooltip is associated with e.g. the element on which the simpletip() method was called.</td>
               </tr>
               <tr>
                  <td class="name">getTooltip()</td>
                  <td class="arguments"></td>
                  <td class="return">Object</td>
                  <td class="description">Returns the tooltip element.</td>
               </tr>
               <tr class="blank"><td colspan="4">&nbsp;</td></tr>
               <tr>
                  <td class="name">getPos()</td>
                  <td class="arguments"></td>
                  <td class="return">[top, left]</td>
                  <td class="description">Returns the <b>absolute</b> current position of the tooltip element.</td>
               </tr>
               <tr>
                  <td class="name">setPos()</td>
                  <td class="arguments">posX, posY</td>
                  <td class="return">Simpletip</td>
                  <td class="description">Sets position of tooltip to <b>absolute</b> arguments posX and posY if supplied as integers, or <b>relative to parent element</b> if supplied as strings. A mixture of both strings and integers can also be used.</td>
               </tr>
               <tr class="blank"><td colspan="4">&nbsp;</td></tr>
               <tr>
                  <td class="name">show()</td>
                  <td class="arguments"></td>
                  <td class="return">Simpletip</td>
                  <td class="description">Displays the tooltip element.</td>
               </tr>
               <tr>
                  <td class="name">hide()</td>
                  <td class="arguments"></td>
                  <td class="return">Simpletip</td>
                  <td class="description">Hides the tooltip element.</td>
               </tr>
               <tr class="blank"><td colspan="4">&nbsp;</td></tr>
               <tr>
                  <td class="name">update()</td>
                  <td class="arguments">content</td>
                  <td class="return">Simpletip</td>
                  <td class="description">Updates the contents of the tooltip element with the supplied argument, usually a string or integer.</td>
               </tr>
               <tr class="last">
                  <td class="name">load()</td>
                  <td class="arguments">url, data</td>
                  <td class="return">Simpletip</td>
                  <td class="description">Updates the contents of the tooltip element with the contents of a remote file <b>url</b> using AJAX. Use the data array to pass <i>POST</i> data on the AJAX call.</td>
               </tr>
            </table>

            <h2>Browser support</h2>
            <ul>
               <li>Firefox 1.5+</li>
               <li>Internet Explorer 6.0+</li>
               <li>Safari 2.0+</li>
               <li>Opera 9.0+</li>
            </ul>

            <br />
            <b>NOTE:</b> This plugin requires the jQuery library to function, which can be downloaded <a href="http://jquery.com">here</a>.
         </div>

         <div class="downloads">
            <a name="downloads"></a>
            <h1>Download stable <b><?=$version?></b></h1>
            <table class="versions" cellpadding="0" cellspacing="0">
               <thead>
                  <tr>
                     <th>Link</th>
                     <th>Size</td>
                     <th>Description</th>
                  </tr>
               </thead>
               <tr>
                  <td><a href="http://jquery-simpletip.googlecode.com/files/jquery.simpletip-<?=$version?>.js">jquery.simpletip-<?=$version?>.js</a></td>
                  <td>9.4 Kb</td>
                  <td>source code - <i>with comments</i></td>
               </tr>
               <tr>
                  <td><a href="http://jquery-simpletip.googlecode.com/files/jquery.simpletip-<?=$version?>.min.js">jquery.simpletip-<?=$version?>.min.js</a></td>
                  <td>5.0 Kb</td>
                  <td>minified with Douglas Crockford's minifier</td>
               </tr>
               <tr class="last">
                  <td><a href="http://jquery-simpletip.googlecode.com/files/jquery.simpletip-<?=$version?>.pack.js">jquery.simpletip-<?=$version?>.pack.js</a></td>
                  <td>3.4 Kb</td>
                  <td>packed with Dean Edward's packer</td>
               </tr>
            </table>
            <div class="tip">Please right click and choose "save link as ..." (or similar)</div>

            <h1>Changelog</h1>
            <h2><b>Simpletip</b> 1.3.1</h2>
            <h3 class="level"><b>level:</b> Patch</b></h3>
            <h3 class="released"><b>released:</b> February 5, 2009 - 11:04am</h3>
            <h3 class="changes"><b>changelog:</b></h3>
            <ul>
               <li>Fixed major bug in relative position handling in 'updatePos' method</li>
               <li>
                  Added new 'hidden' configuration option to allow control over tooltips inital state (shown of hidden)
                  <div class="thanks">Thanks to Benjamin for this feature suggestion</div>
               </li>
            </ul>

            <h2><b>Simpletip</b> 1.3</h2>
            <h3 class="level"><b>level:</b> Minor</b></h3>
            <h3 class="released"><b>released:</b> February 4, 2009 - 9:38pm</h3>
            <h3 class="changes"><b>changelog:</b></h3>
            <ul>
               <li>Major overhaul of entire library</li>
               <li>Brand new API functionality - see documentation for full details</li>
               <li>Added pre-defined positioing properties</li>
               <li>Added new 'custom' value to hideEffect and showEffect enabling custom show and hide methods</li>
               <li>Added 'showCustom' and 'hideCustom' method callbacks for use with new 'custom' hideEffect/showEffect value functionality</li>
               <li>Added new 'load()' API method to load remote file contents into tooltips</li>
               <li>Added 'beforeContentLoad' and 'onContentLoad' callback methods: see 'load()'</li>
               <li>Added new configuration option 'boundryCheck' to enable/disable boundry checking on a per-tooltip basis</li>
               <li>Renamed 'hover' property to 'persistent' to better relay its purpose</li>
               <li>Configuration option 'position' now accepts mixed array values of both absolute and relative positions</li>
               <li>Configuration option 'position' now accepts an element reference as an argument, resulting in tooltip positioned at elements coordinates</li>
               <li>Fixed several rendering bugs in Internet Explorer</li>
            </ul>

            <h2><b>Simpletip</b> 1.2.2</h2>
            <h3 class="level"><b>level:</b> Patch</b></h3>
            <h3 class="released"><b>released:</b> February 4, 2009 - 7:44am</h3>
            <h3 class="changes"><b>changelog:</b></h3>
            <ul>
               <li>Adjusted spelling error on 'baseClass' property</li>
            </ul>

            <h2><b>Simpletip</b> 1.2.1</h2>
            <h3 class="level"><b>level:</b> Patch</b></h3>
            <h3 class="released"><b>released:</b> February 4, 2009 - 7:36am</h3>
            <h3 class="changes"><b>changelog:</b></h3>
            <ul>
               <li>
                  Renamed 'class' property to 'baseClass' due to problems with reserved keywords<br />
                  <div class="thanks">Special thanks to Justin for pointing out this error</div>
               </li>
            </ul>

            <h2><b>Simpletip</b> 1.2.0</h2>
            <h3 class="level"><b>level:</b> Minor</b></h3>
            <h3 class="released"><b>released:</b> February 3, 2009 - 4:17pm</h3>
            <h3 class="changes"><b>changelog:</b></h3>
            <ul>
               <li>Added new positioning property</li>
               <li>Fixed rendering bug</li>
               <li>Adjusted contents property name, now called content (without the s)</li>
               <li>Added individual show and hide effect time properties</li>
            </ul>

            <h2><b>Simpletip</b> 1.1.0</h2>
            <h3 class="level"><b>level:</b> Minor</b></h3>
            <h3 class="released"><b>released:</b> February 2, 2009 - 6:38am</h3>
            <h3 class="changes"><b>changelog:</b></h3>
            <ul>
               <li>Added window dimensions check to prevent offscreen rendering / scrolblar issues</li>
               <li>Cleaned up code formatting</li>
               <li>Removed updateHTML method. Main update method now manipulates HTML directly</li>
            </ul>

            <h2><b>Simpletip</b> 1.0.0</h2>
            <h3 class="level"><b>level:</b> Major</b></h3>
            <h3 class="released"><b>released:</b> February 2, 2009 - 3:26am</h3>
            <h3 class="changes"><b>changelog:</b></h3>
            <ul>
               <li>First major release</li>
            </ul>
         </div>
      </div>
   </div>

   <div class="footer">
      <a href="http://code.google.com/p/jquery-simpletip/"><b>google code project</b></a> -
      <a href="http://craigsworks.com">my portfolio</a> -
      <a href="mailto:craig@craigsworks.com">contact me</a>
   </div>
</div>

<!--Scripts-->
<script type="text/javascript">var section = (location.hash.length) ? location.hash.replace('#','') : '<?=$section?>';</script>
<script type="text/javascript" src="http://media1.juggledesign.com/portfolio/js/jquery.js"></script>
<script type="text/javascript" src="/projects/simpletip/download/<?=$version?>/jquery.simpletip-<?=$version?>.pack.js"></script>
<script type="text/javascript" src="/projects/simpletip/index.js"></script>

<!--Google Analytics-->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-5228245-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
