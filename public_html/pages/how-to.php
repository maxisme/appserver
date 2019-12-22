<!-- Highlight  -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/atom-one-light.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<?php
// dynamic credentials
$credentials = !empty($_GET['c']) ? $_GET['c'] : "&lt;credentials&gt;";

// curl params
$url = "https://notifi.it/api";
$title = "Lorem ipsum dolor.";
$message = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$link = "https://notifi.it";
$image = "https://notifi.it/images/logo.png";

?>

To send a notification to notifi you need to create an HTTP request with the following parameters:
<ul>
    <li><span><strong>credentials</strong></span></li>
    <li><span><strong>title</strong></span></li>
    <li><span>message</span></li>
    <li><span>link</span></li>
    <li><span>image</span></li>
</ul>
to the url - <strong><?php echo $url ?></strong>.

<h3>BASH</h3>
<pre>
    <code class="bash">curl -d "credentials=<?php echo $credentials ?>" \
-d "title=<?php echo $title ?>" \
-d "message=<?php echo $message ?>" \
-d "link=<?php echo $link ?>" \
-d "image=<?php echo $image ?>" \
<?php echo $url ?>
</code>
</pre>

<h3>jQuery</h3>
<pre>
    <code class="jquery">$.post("<?php echo $url ?>", {
  'credentials': '<?php echo $credentials ?>',
  'title': '<?php echo $title ?>',
  'message': '<?php echo $message ?>',
  'link': '<?php echo $link ?>',
  'image': '<?php echo $image ?>'
});</code>
</pre>
<?php if (!empty($_GET['c'])) { ?>
    <!-- credentials been passed to url -->
    <script>
		function runJquery() {
			$.post("<?php echo $url?>", {
				'credentials': '<?php echo $credentials?>',
				'title': '<?php echo $title?>',
				'message': '<?php echo $message?>',
				'link': '<?php echo $link?>',
				'image': '<?php echo $image?>'
			}, function (data) {
				if (data) alert(data);
			});
		}
    </script>
    <i><a class="strong btn" href="#" onclick="runJquery()">Test</a></i>
<?php } ?>

<h3>Python</h3>
<pre>
    <code class="python">import requests
requests.post('<?php echo $url ?>', {
  'credentials': '<?php echo $credentials ?>',
  'title': '<?php echo $title ?>',
  'message': '<?php echo $message ?>',
  'link': '<?php echo $link ?>',
  'image': '<?php echo $image ?>'
})</code>
</pre>

<h3>PHP</h3>
<pre>
    <code class="php">curl_setopt_array(
  $chpush = curl_init(),
  array(
    CURLOPT_URL => "<?php echo $url?>",
    CURLOPT_POSTFIELDS => array(
      "credentials" => '<?php echo $credentials ?>',
      "title" => '<?php echo $title ?>',
      "message" => '<?php echo $message ?>',
      "link" => '<?php echo $link ?>',
      "image" => '<?php echo $image ?>',
    )
  )
);
curl_exec($chpush);
curl_close($chpush);</code>
</pre>

<h3>Objective-C</h3>
<pre>
    <code class="objective-c">NSMutableURLRequest *request = [NSMutableURLRequest requestWithURL:[NSURL URLWithString:@"<?php echo $url ?>"] cachePolicy:NSURLRequestUseProtocolCachePolicy timeoutInterval:5.0];
[request setHTTPMethod:@"POST"];
[request setHTTPBody:[@"credentials=<?php echo $credentials ?>&title=<?php echo $title ?>&message=<?php echo $message ?>&link=<?php echo $link ?>&image=<?php echo $image ?>" dataUsingEncoding:NSUTF8StringEncoding]];
[[[NSURLSession sharedSession] dataTaskWithRequest:request] resume];</code>
</pre>

<h3>Node.js</h3>
<pre>
    <code class="nodejs">const https = require('https');
https.get('https://notifi.it/api?credentials=<?php echo $credentials ?>&title=<?php echo $title ?>&message=<?php echo $message ?>&link=<?php echo $link ?>&image=<?php echo $image ?>"');</code>
</pre>

<h3>Go</h3>
<pre>
    <code class="go">import "net/http"
http.get('https://notifi.it/api?credentials=<?php echo $credentials ?>&title=<?php echo $title ?>&message=<?php echo $message ?>&link=<?php echo $link ?>&image=<?php echo $image ?>"');</code>
</pre>