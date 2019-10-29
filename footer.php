<footer class="footer_container container">
    <div class="foo_copyright">
        &copy; 2017 Company. All Rights Reserved.
    </div>

    <div class="foo_follow_us">
        <span class="follow_us_text">
            Follow us on:
        </span>
        <div class="foo_social_blk">
            <a href="javascript:;" target="_blank" class="foo_social_icon foo_icon_white_bg" rel="noopener noreferrer">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="javascript:;" target="_blank" class="foo_social_icon foo_icon_white_bg" rel="noopener noreferrer">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="javascript:;" target="_blank" class="foo_social_icon" rel="noopener noreferrer">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="javascript:;" target="_blank" class="foo_social_icon" rel="noopener noreferrer">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</footer>

<script>

!function () {

    'use strict'
    var baseName = '<?php echo basename($_SERVER['PHP_SELF']); ?>',
        libs = ['assets/js/jquery.min.js', 'assets/js/slick.min.js'],
        scripts = ['assets/js/common.js'],
        loadScript = function (i) {
            var script = scripts[i];

            if (script) {
                script = document.createElement('script');
                script.async = true;
                script.src = scripts[i];
                document.head.appendChild(script);

                script.onload = function (e) {
                    script = undefined;
                    loadScript(i+1);
                };

                script.onerror = function (e) {
                    console.error('No more scripts will be loaded because "' + script.src + '" failed to load!');
                };
            } else {
                loadScript = script = scripts = undefined;
            }
        };

    // insert any dependencies (if required) here according to each page and then load scripts
    if ( baseName === 'index.php' ) {
        scripts.push('assets/js/front.js');
    } else {
        scripts.push('assets/js/inner.js');
    }

    // concat all scripts
    scripts = libs.concat(scripts);

    // start loading scripts
    loadScript(0);
}();
</script>