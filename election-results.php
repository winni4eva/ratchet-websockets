<html>
    <head>
        <title>Election Results</title>
    </head>
    <body>
        <h3>2018 Election Results</h3>
        <form action="process-results.php" method="post">
            <input type="hidden" name="category" value="elections">

            <label>Party</label>
            <select name="party">
                <option>-- select party --</option>
                <option value="pp">Progress Party</option>
                <option value="npp">New Patriotic Party</option>
                <option value="ndc">National Democratic Congress</option>
            </select>
            <br><br>

            <label>Vote</label>
            <input type="text" name="votes">
            <br><br>

            <input type="submit" value="Post Results">
        </form>
    </body>
</html>