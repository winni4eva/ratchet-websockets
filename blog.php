<html>
    <head>
        <title>Blog</title>
    </head>
    <body>
        <h3>My Socket Blog</h3>
        <form action="post.php" method="post">

            <label>Title</label>
            <input type="text" name="title">
            <br><br>

            <label>Category</label>
            <select name="category">
                <option>-- select a category --</option>
                <option value="kittensCategory">Kittens</option>
                <option value="electronicsCategory">Electronics</option>
            </select>
            <br><br>

            <label>Article</label>
            <textarea name="article"></textarea>
            <br><br>

            <input type="submit" value="Post Blog">
        </form>
    </body>
</html>