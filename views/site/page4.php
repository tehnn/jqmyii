<div data-role="header" data-position="fixed">
    <h1>Form Elements</h1>
    <a href="#" data-rel="back" data-theme="a">Back</a>
</div><!-- /header --> 

<div data-role="content"> 

    <div data-role="fieldcontain">

        <label>Some Fields and Inputs:</label>

        <br /><br />

        <input type="range" />

        <br /><br />

        <input type="search" />

        <br /><br />

        <input type="email" />

        <br />

    </div>

    <div data-role="fieldcontain">
        <label for="slider">Select slider:</label>
        <select name="slider" id="slider" data-role="slider">
            <option value="off">OFF</option>
            <option value="on">ON</option>
        </select> 
    </div>

    <div data-role="fieldcontain">
        <fieldset data-role="controlgroup" data-type="horizontal">
            <legend>Choose a pet:</legend>
            <input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked" />
            <label for="radio-choice-1">Cat</label>

            <input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />
            <label for="radio-choice-2">Dog</label>

            <input type="radio" name="radio-choice-1" id="radio-choice-3" value="choice-3"  />
            <label for="radio-choice-3">Hamster</label>
        </fieldset>
    </div>

    <a disabled="disabled" data-role="button" class="ui-btn-plain">Inactive &lt;a&gt;</a>

    <a data-role="button" class="ui-btn-plain">Active &lt;a&gt;</a>

    <button disabled="disabled" class="ui-btn-plain">Inactive &lt;button&gt;</button>

    <button class="ui-btn-plain">Active &lt;button&gt;</button>

    <p><small>Does the above look funny? Consider it a bug in jQuery mobile where the classes from the underling &lt;button&gt; are not being attached to the new DOM</small></p>

</div>


<div data-role="page" id="allDialogExample"> 

    <div data-role="content"> 
        <button data-theme="e">Button Style E</button>
        <button data-theme="d">Button Style D</button>
        <button data-theme="c">Button Style C</button>
        <button data-theme="b">Button Style B</button>
        <button data-theme="a">Button Style A</button>
    </div>

</div>

<div data-role="page" id="deleteDialogExample"> 

    <div data-role="content"> 
        <button data-theme="e">Delete Draft</button>
        <button data-theme="a">Save Draft</button>
        <button data-theme="b">Cancel</button>
    </div>

</div>

<div data-role="page" id="postDialogExample"> 

    <div data-role="content"> 
        <button data-theme="a">Post to Twitter</button>
        <button data-theme="a">Post to Facebook</button>
        <button data-theme="a">Post to YouTube</button>
        <button data-theme="b">Cancel</button>
    </div>

</div>