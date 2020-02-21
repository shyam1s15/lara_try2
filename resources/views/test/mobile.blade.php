<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/[version]/jquery.mobile-[version].min.css" />
	<script src="http://code.jquery.com/jquery-[version].min.js"></script>
	<script src="http://code.jquery.com/mobile/[version]/jquery.mobile-[version].min.js"></script>

</head>
<body>
    <!-- Start of first page -->
    <div data-role="page" id="foo">
    
        <div data-role="header">
            <h1>Foo</h1>
        </div><!-- /header -->
    
        <div role="main" class="ui-content">
            <p>I'm first in the source order so I'm shown as the page.</p>
            <p>View internal page called <a href="#bar">bar</a></p>
        </div><!-- /content -->
    
        <div data-role="footer">
            <h4>Page Footer</h4>
        </div><!-- /footer -->
    </div><!-- /page -->
    
    <!-- Start of second page -->
    <div data-role="page" id="bar">
    
        <div data-role="header">
            <h1>Bar</h1>
        </div><!-- /header -->
    
        <div role="main" class="ui-content">
            <p>I'm the second in the source order so I'm hidden when the page loads. I'm just shown if a link that references my id is beeing clicked.</p>
            <p><a href="#foo">Back to foo</a></p>
        </div><!-- /content -->
    
        <div data-role="footer">
            <h4>Page Footer</h4>
        </div><!-- /footer -->
    </div><!-- /page -->
</body>
</html>