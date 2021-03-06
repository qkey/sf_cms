<!DOCTYPE html>
<html>
<head>
    <title>{{ Setting::getMeta()['site_title'] }}</title>
	<meta name="title" content="{{ Setting::getMeta()['meta_title'] }}">
	<meta name="description" content="{{ Setting::getMeta()['meta_description'] }}">
	<meta name="keywords" content="{{ Setting::getMeta()['meta_keywords'] }}">
	<meta name="author" content="Sefa Karagöz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ HTML::style('assets/bootstrap/css/bootstrap.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::script('assets/js/jquery.2.0.3.js') }}
    {{ HTML::script('assets/bootstrap/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/holder.js') }}
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', "{{ Setting::getMeta()['ga_code'] }}"]);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
        </script>
</head>

<body>
@include('frontend/_layout/menu')
@yield('content')
@include('frontend/_layout/footer')
</body>
</html>
