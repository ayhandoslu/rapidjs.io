<h2 id="extending-auth-model">The Rapid Auth Model</h2>

<pre><code class="language-js">import Auth from 'Rapid/Auth';
{{-- class User extends Auth {
    modelName:
} --}}

var User = new Auth({ modelName: 'auth' });

// and now you get

// come back to this and test

User.login({ username: 'drew', password: '1234pass' }).then(...) // POST => /api/
User.logout().then(...)
User.check().then(...) //
</code></pre>

<p>Changing the routes</p>
