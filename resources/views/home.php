<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferb Latin API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-4 pt-5">Ferb Latin</h1>
                <p>You take the first letter of every word. You move it to the end and then say '-erb'.</p>

                <h2>HTTP Request</h2>
                <p><code>GET https://ferb-latin.zoodinkers.com/api/</code></p>

                <h2>Attributes</h2>
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">Parameter</th>
                          <th scope="col">Type</th>
                          <th scope="col">Default</th>
                          <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>text</td>
                          <td>string</td>
                          <td><em>None</em></td>
                          <td><strong>Required:</strong> The text that is to be translated into Ferb Latin.</td>
                        </tr>
                    </tbody>
                </table>

                <h2>Example query</h2>
                <a href="https://ferb-latin.zoodinkers.com/api/Ferb Latin">https://ferb-latin.zoodinkers.com/api/Ferb Latin</a>
            </div>
        </div>
        <footer class="mt-5">
            <p>
            <small>API by <a href="https://michaeleisenbraun.com/" target="_blank">Michael Eisenbraun</a><br>
            This site is not endorsed by or affiliated with The Walt Disney Company.</small>
            </p>
        </footer>
    </main>

    
</body>
</html>
