<pre><code class="language-js">const post = new Rapid({ modelName: 'post' });

post.find(1).then(function (response) {
    // GET => /api/post/1
});
</code></pre>

<p class="method__description">
    If you want to include the primaryKey value in the url, you can set it in your config like so:
</p>

<pre><code class="language-js">const post = new Rapid({ modelName: 'post', primaryKey: 'id' });

post.find(1) // GET => /api/post/id/1
</code></pre>
