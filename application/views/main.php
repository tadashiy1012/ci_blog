<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>blog sample use codeigniter</title>
  <style>
    body {
      margin: 0px;
      padding: 8px;
    }
    .header {
      width: 100%;
      height: 52px;
      margin-bottom: 8px;
      border-bottom: solid 1px #666;
      display: flex;
    }
    .header > .title-logo {
      width: 50%;
    }
    .header > .header-nav {
      width: 50%;
      text-align: right;
    }
    .main {
      display: flex;
    }
    .main > .left-nav {
      width: 300px;
      padding: 8px;
    }
    .main > .right-contents {
      width: 100%;
      border-left: solid 1px #666;
      padding: 8px;
    }
  </style>
</head>
<body>
  <section class="header">
    <section class="title-logo"><h1>blog sample</h1></section>
    <section class="header-nav">
      <p>header-nav</p>
    </section>
  </section>
  <section class="main">
    <section class="left-nav">
      <h4>left-nav</h4>
    </section>
    <section class="right-contents">
      <section class="blog-contents">
        <h4>blog-contents</h4>
      </section>
      <section class="edit-contents">
        <h4>edit-contents</h4>
        <form action="/blog/add" method="post">
          <label for="title">title</label><br />
          <input type="text" name="title" /><br />
          <label for="body">body</label><br />
          <textarea name="body"></textarea><br />
          <input type="submit" value="submit" />
        </form>
      </section>
    </section>
  </section>
</body>
</html>